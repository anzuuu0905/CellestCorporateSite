<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- 自動リンクを無効にする -->
  <meta name="format-detection" content="telephone=no">
  <!-- fontawesomを使用する -->
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- スライダー -->
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> -->
  <link rel="stylesheet" href="https://use.typekit.net/bgn4fum.css">
  <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php
    $home = esc_url(home_url('/'));
    $about = esc_url(home_url('/about/'));
    $treatment = esc_url(home_url('/treatment/'));
    $staff = esc_url(home_url('/staff/'));
    $topics = esc_url(home_url('/topics/'));
    $products = esc_url(home_url('/archives/products/'));
    $access = esc_url(home_url('/access/'));
    $contact = esc_url(home_url('/contact/'));    
  ?>
  <header class="l-header p-header
    <?php if(is_front_page()){
      echo 'js-top-header';
    }else{
      echo 'js-sub-header';}  
    ?>">
  </header>
