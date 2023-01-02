<?php
wp_enqueue_style( 'style-1', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri().'/assets/css/bootstrap.min.css'  );
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

register_sidebar([
    'name'=>'Bangladesh logo',
    'id'=>'bdlogo',
    'before_widget' =>'',
    'after_widget' =>''

]);
register_sidebar([
    'name'=>'Hero Title',
    'id'=>'herotitle',
    'before_widget' =>'',
    'after_widget' =>''

]);
register_sidebar([
    'name'=>'Hero Card 1',
    'id'=>'card1',
    'before_widget' =>'',
    'after_widget' =>''

]);
register_sidebar([
    'name'=>'Photo line left',
    'id'=>'lineleft',
    'before_widget' =>'',
    'after_widget' =>''

]);
register_sidebar([
    'name'=>'Photo Title',
    'id'=>'phototitle',
    'before_widget' =>'',
    'after_widget' =>''

]);
register_sidebar([
    'name'=>'Photo line right',
    'id'=>'lineright',
    'before_widget' =>'',
    'after_widget' =>''

]);
register_sidebar([
    'name'=>'Photo card 1',
    'id'=>'photocard1',
    'before_widget' =>'',
    'after_widget' =>''

]);
register_sidebar([
    'name'=>'News Title',
    'id'=>'newstitle',
    'before_widget' =>'',
    'after_widget' =>''

]);
register_sidebar([
    'name'=>'Footer Top Left',
    'id'=>'ftleft',
    'before_widget' =>'',
    'after_widget' =>''

]);
register_sidebar([
    'name'=>'Footer Top right',
    'id'=>'ftright',
    'before_widget' =>'',
    'after_widget' =>''

]);
register_sidebar([
    'name'=>'Footer Bottom Left',
    'id'=>'fbleft',
    'before_widget' =>'',
    'after_widget' =>''

]);
register_sidebar([
    'name'=>'Footer Bottom right',
    'id'=>'fbright',
    'before_widget' =>'',
    'after_widget' =>''

]);
register_nav_menus([
    'TM'=>'primary',
    
]);

?>