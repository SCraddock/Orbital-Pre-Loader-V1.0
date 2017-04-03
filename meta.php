<!DOCTYPE html>
<html lang="en">
<?php
  // if(isset($_GET['close'])){
  // isset($_GET['close']) &&
    if($_GET['close'] == 'ie-message') {
      $_SESSION['ie-message'] = 'dismiss';
    }
  // }
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php

  echo '<title>' . $meta_title . '</title>';

  if($meta_description) {
    echo '<meta name="description" content="'. $meta_description .'">';
  }

  ?>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600|Playfair+Display" rel="stylesheet">

  <?php if($meta_title == 'Orbital - Home'){ ?>
     <link href="<?php echo $base;?>build/css/front.css" rel="stylesheet">
  <?php } ?>
     <link href="<?php echo $base;?>build/css/global.css" rel="stylesheet">

  <!-- Favicons (IE 10 and below uses favicon.ico in the root) -->
  <link rel="icon" href="<?php echo $base;?>build/img/favicon-16.png" sizes="16x16" type="image/png">
  <link rel="icon" href="<?php echo $base;?>build/img/favicon-32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="<?php echo $base;?>build/img/favicon-48.png" sizes="48x48" type="image/png">
  <link rel="icon" href="<?php echo $base;?>build/img/favicon-62.png" sizes="62x62" type="image/png">

  <!-- Apple Touch Icon -->
  <link rel="apple-touch-icon" href="<?php echo $base;?>build/img/apple-touch-icon.png" sizes="180x180">

  <!-- Social Cards (the absolute minimum) -->
  <!-- Twitter -->
  <meta name="twitter:card" value="summary">

  <!-- Open Graph data -->
  <?php

  echo '<meta property="og:title" content="'. $og_title .'" />';
  echo '<meta property="og:type" content="'. $og_type .'" />';
  echo '<meta property="og:url" content="'. $og_url .'" />';
  echo '<meta property="og:image" content="'. $og_image .'" />';
  echo '<meta property="og:description" content="'. $og_description .'" />';

  ?>
  <style media="screen">
  body.loading{overflow:hidden}.preload{width:100%;height:100%;position:fixed;top:0;left:0;background:#EAEAEA;z-index:1000;display:flex;align-items:center;justify-content:center}.preload__container{width:140px;height:140px;position:relative;display:flex;align-items:center;justify-content:center;opacity:1;animation:fade 1s ease}.preload__spinner{position:absolute;top:0;left:0;width:140px;height:140px;border-radius:100px;border:2px solid transparent;border-top-color:#95989A;-webkit-animation:spin 1.6s infinite linear;animation:spin 1.6s infinite linear}.preload svg{width:50px;fill:#95989A;-webkit-transform:scale(.9);transform:scale(.9);-webkit-animation:load 2s infinite linear;animation:load 2s infinite linear}.preload.out{opacity:0;transition:opacity 0.2s 1.7s ease}.preload.out .preload__container{-webkit-transform:scale(1);transform:scale(1);-webkit-animation:loadOut 0.5s 1.5s ease-in-out;animation:loadOut 0.5s 1.5s ease-in-out}@-webkit-keyframes load{0%,100%{-webkit-transform:scale(.9);transform:scale(.9)}50%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes load{0%,100%{-webkit-transform:scale(.9);transform:scale(.9)}50%{-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes loadOut{0%{-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(0);transform:scale(0)}}@keyframes loadOut{0%{-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(0);transform:scale(0)}}@keyframes fade{0%{opacity:0}100%{opacity:1}}@-webkit-keyframes fade{0%{opacity:0}100%{opacity:1}}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
</style>

<noscript>
  <style media="screen">
    body.loading .preload { display :none !important; }
    body.loading { overflow: visible !important; }
  </style>
</noscript>
</head>
<div class="preload">
  <div class="preload__container">
    <div class="preload__spinner"></div>
    <svg>
      <use xlink:href="#icon"></use>
    </svg>
  </div>
</div>
  <body class="loading <?php if(isset($bodyClass)){ echo $bodyClass; };?>">
      <a name="Top"></a>
