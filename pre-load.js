//////////////////////////////////////////////////////////////////////////////////////////////////////////////
// NOTE: Start of pre-loader stuff
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function() {

  // A function to tell if something is visible on the screen ( i think not sure what "$.fn." does) jQuery.prototype === $.fn
  // $.fn.isOnScreen = function(i){
  //     var element = this.get(0);
  //     var bounds = element.getBoundingClientRect(); // gets elements size and position relative to viewport
  //     // return bounds.top < window.innerHeight && bounds.bottom > 0;
  //     if( bounds.top < window.innerHeight && bounds.bottom > 0 ){
  //       alert('')
  //       return true;
  //     }
  // };

  // THIS CHECKS IF AN ELEMENT IS VISIBLE
  function isOnScreen(i){
        // var obj = $(this).get(0);
        // var bounds = obj.getBoundingClientRect().top(); // gets elements size and position relative to viewport
        var boundsTop = $(this).offset();
        var boundsBottom = $(this).offset();
        // obj = $(this);
        // offset = obj.offset()
        // boundsTop = offset.top - $(document).scrollTop()
        // boundsBottom = offset.left - $(document).scrollLeft()
        // return bounds.top < window.innerHeight && bounds.bottom > 0;
        if( boundsTop < window.innerHeight && boundsBottom> 0 ){
          return true;
        }
  }

  // THIS BLOCK FADES OUT THE PRE-LOADER --- SHOULD BE RAN LAST!!!
  function theBigReveal(){

      $('.preload').addClass('out');
        setTimeout(function(){
          $('.preload').css('display', 'none');
          $('body').removeClass('loading');
        }, 2000);

  }


  // THIS CHECKS IF WE ARE READY TO SHOW THE SITE
  function readyYet(myElement) {
      $(".firstContent").each( function(i) {
        // if class doesnt have a child of .lazy give contentReady
        if ( $(this).find('.lazy') !== true ) {
           $(this).addClass('contentReady');
         }
      });

    // if the number of classes of .firstContent without .contentReady is 0 then
    if( $(".firstContent:not(.contentReady)").length === 0){
      setTimeout(function(){
        theBigReveal();
      }, 1500);
    }
  }

  // THIS INITIATES THE LAZY PLUGIN -- SHOULD BE RAN NEAR FIRST
  function startLazy(){
    $('.lazy').Lazy({
      scrollDirection: 'vertical',
      effect: 'fadeIn',
      // this runs when an element has loaded
      afterLoad: function(element) { $(element).closest('.firstContent').addClass('contentReady'); },
      // this destroys the session when all elements have been handled
      onFinishedAll: function(i) { if( !this.config("autoDestroy") ) {this.destroy(); }  readyYet(); theBigReveal();  }

    });


  }

  // FOR EACH $('.lazy') IF VISIBLE ON SCREEN ADD $('.firstContent') ELSE REMOVE $('.ready') ADD $('.loaded')
  function loadElements(i) {
    $('.lazy').each( function(i){
        var bottom_of_object = $(this).offset().top + 300;
        var bottom_of_window = $(window).scrollTop() + $(window).height();
        var above_the_fold = isOnScreen(this);
        if( bottom_of_window > bottom_of_object ){
            $(this).removeClass('ready');
            $(this).addClass('loaded');
        }
        if( above_the_fold === true ){
            $(this).addClass('firstContent');
        }
    });
    readyYet();
  }



  $('.lazy').addClass('ready');
  // THIS INITIATES THE STUFF
  startLazy();
  loadElements();
// on window scroll initiate it again
  $(window).scroll(function(){
    loadElements();
  });

});


//////////////////////////////////////////////////////////////////////////////////////////////////////////////
// NOTE: END PRE-LOADER
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
