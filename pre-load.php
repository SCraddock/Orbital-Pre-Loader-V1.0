<script type="text/javascript">


  $(document).ready(function () {


    setTimeout(function(){
      $('.preload').addClass('out');
      setTimeout(function(){
        $('.preload').css('display', 'none');
        $('body').removeClass('loading');
      },2000);
    },8000); // 8s

  });


</script>
