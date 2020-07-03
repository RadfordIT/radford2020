<!DOCTYPE html>
<!-- I gave up on the messages - sorry -->
<html>
<head>

<!-- OLD STYLESHEET HOLDING CONTAINER


<link rel="stylesheet" href="/wp-content/themes/radford2020/assets/css/archived/universal.css">
<link rel="stylesheet" href="/wp-content/themes/radford2020/assets/css/archived/wp-skin.css">
-->
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.10.1/jquery.hoverIntent.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/wp-content/themes/radford2020/assets/css/radford.css">

  <script type="text/javascript" src="/wp-content/themes/radford2020/assets/js/mobile-nav.js"></script>
  <script type="text/javascript" src="/wp-content/themes/radford2020/assets/js/desktop-nav.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif|Open+Sans&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <?php wp_head();?>
</head>
<body <?php body_class();?> id="<?php global $post; echo $post->post_name;?>" >

<?php
if (function_exists('precontent')) {
    precontent();
}
?>

<div class="container-page-content" id="the-full-page">
<?php /*
    <div class="top-level-header">
        <strong>Hey!</strong> This site is for development only.
    </div>
    <style>.top-level-header { padding: 15px;background-color: orange;font-family: Calibri, sans-serif; text-align: center; color: #fff} </style>
*/?>
<header> 



<div class="colorstrip"><a href="/"><img src="/wp-content/themes/radford2020/assets/img/Crest_longtext_sharp_white.png" height="100px"></a></div>
<img id="motto"src="/wp-content/themes/radford2020/assets/img/radford-right-edge-longer-3-cropped-v4-double.png" height="100px">

<div class="bluecolorstrip desktopnav show-for-large">
  <div id="desktop-menu"><?php wp_nav_menu( array( 'theme_location' => 'TopLevelMenuTesting' ) ); ?></div>
  <button class="search" id="search-btn"><i class="rad-icon-search" style="font-size: 34px"></i></button>
  <button class="hamburger" id="hamburger-btn" style="display: none"><i class="rad-icon-hamburger" style="font-size: 34px"></i></button>
  <form action="/"><input type="text" style="width: 0%" placeholder="Search" name="s" id="search"></form>
</div>

<div class="mobilenavbar show-for-small hide-for-large" id="mobilenavbar">
	<button><i class="rad-icon-hamburger" style="font-size: 34px"></i></button>
</div>

<div class="mobilenav" id="mobilenav">
    <h1>Menu</h1>
	<?php wp_nav_menu( array( 'theme_location' => 'Mobile Nav' ) ); ?>
</div>

</header>

<div class="nonstatic" id="nonstatic">
