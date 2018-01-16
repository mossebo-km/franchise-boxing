<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<div class="blocks block-header">
    <div class="wrap">
        <div class="flex flex-align-mid">
            <a href="/" class="logo"></a>
            <div class="phone">
                +7 (495) 641-97-98
                <small>пн-пт с 10:00-17:00</small>
            </div>
        </div>
    </div>
</div>


<div class="blocks block-nav">
    <div class="wrap">
        <?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'container_class' => 'header-nav' ) ); ?>
    </div>
</div>