<!DOCTYPE html>
<html>
<head>
  <title><?php 
  if(is_home() && is_front_page())
    echo bloginfo('name'); 
  else
    echo wp_get_document_title();
  ?></title>
  <!--Favicon-->
  <?php 
  if(isset($favicon) and $favicon !=='' and $favicon_transparent==false){
    echo '<link rel="shortcut icon" href="'.$favicon.'" type="image/x-icon">';
  }
  ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if ( !(is_single()) ) {?>
  <meta name="description" content="<?php echo bloginfo('description') ?>" />
  <?php };
  ?>
  <!--Styles-->
  <style>
  <?php 
  if(isset($preload) and $preload_show =='1' and $preload_transparent==false ){
    echo '#loader{min-height:50px;background: #fff url('.$preload.') center center no-repeat;height:100%;width:100%;position:fixed;top:0;left:0;z-index: 2000; }';
  };
  if(isset($bg_color) and $bg_color !==''){
    echo 'body{background-color:'.$bg_color.'}';
  }
    
  if(isset($web_main_color) and $web_main_color !==''){
    echo '.main-color{color: '.$web_main_color.'}.main-bg{background-color:'.$web_main_color.'}a:not(.button):hover{color: '.$web_main_color.'!important}';
  }

  if(isset($web_second_color) and $web_second_color !==''){
    echo '.sec-color{color: '.$web_second_color.'}.sec-bg{background-color:'.$web_second_color.'}';
  }
    if(isset($buttons_family) and $buttons_family !==''){
    echo '.button{font-family:'.$buttons_family.'}';
  }
  if(isset($buttons_size) and $buttons_size !==''){
    echo '.button{font-size:'.$buttons_size.'px}';
  }
  if(isset($buttons_color) and $buttons_color !==''){
    echo '.button{color:'.$buttons_color.'}';
  }
  ?>
  img[src$="bg-logo-admin-transparent.png"],link[href$="bg-logo-admin-transparent.png"]{display: none!important;visibility:hidden;position:absolute;}.container{margin-right:auto;margin-left:auto}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.container-fluid{padding-right:0;padding-left:0 margin-right: auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}

</style>

<?php 
$google_fonts = ($default_font_body !== '1' and isset($font_family_string) and $font_family_string !=='') ? "<link href='https://fonts.googleapis.com/css?family=".$font_family[1]."' rel='stylesheet'>" : '';
echo $google_fonts;
$google_fonts_heading1 = ($default_font_heading !== '1' and isset($heading_h1_family_string) and $heading_h1_family_string !=='') ? "<link href='https://fonts.googleapis.com/css?family=".$heading_h1_family[1]."' rel='stylesheet'>" : '';
$google_fonts_heading2 = ($default_font_heading !== '1' and isset($heading_h5_family_string) and $heading_h5_family_string !=='') ? "<link href='https://fonts.googleapis.com/css?family=".$heading_h5_family[1]."' rel='stylesheet'>" : '';
$google_fonts_heading3 = ($default_font_heading !== '1' and isset($heading_h3_family_string) and $heading_h3_family_string !=='') ? "<link href='https://fonts.googleapis.com/css?family=".$heading_h3_family[1]."' rel='stylesheet'>" : '';
echo $google_fonts_heading1;
echo $google_fonts_heading2;
echo $google_fonts_heading3;
?>
<?php wp_head(); ?>
<!-- Custom Css -->
<style>
<?php
if($default_body_font !== '1'){
  if(isset($font_family_string) and $font_family_string !=='' ){
    echo 'body{font-family: "'.$font_family[1].'"}';
  }
  if(isset($font_color) and $font_color !=='' ){
    echo 'body{color:'.$font_color.'}';
  }
  if(isset($font_size) and $font_size !=='' ){
    echo 'body{font-size:'.$font_size.'px}';
  }
}

if(@$default_heading !== '1'){
  if(isset($heading_h1_family_string) and $heading_h1_family_string !=='' ){
    echo 'h1{font-family: "'.$heading_h1_family[1].'"}';
  } if(isset($heading_h1_color) and $heading_h1_color !==''  ){
    echo 'h1{color: '.$heading_h1_color.'}';
  }
  if(isset($heading_h1_size) and $heading_h1_size !==''){
    echo 'h1{font-size: '.$heading_h1_size.'px}';
  }
  if(isset($heading_h3_family_string) and $heading_h3_family_string !==''){
    echo 'h3{font-family: "'.$heading_h3_family[1].'"}';
  }
  if(isset($heading_h3_color) and $heading_h3_color !==''){
    echo 'h3{color: '.$heading_h3_color.'}';
  }
  if(isset($heading_h3_size) and $heading_h3_size !==''){
    echo 'h3{font-size: '.$heading_h3_size.'px}';
  }
  if(isset($heading_h5_family_string) and $heading_h5_family_string !=='' ){
    echo 'h5{font-family: "'.$heading_h5_family[1].'"}';
  }
  if(isset($heading_h5_color) and $heading_h5_color !==''  ){
    echo 'h5{color: '.$heading_h5_color.'}';
  }
  if(isset($heading_h5_size) and $heading_h5_size !==''){
    echo 'h5{font-size: '.$heading_h5_size.'px}';
  }
};

$show_background = ($image_transparent == false and isset($bg_image) and $bg_image !=='')  ? 'body{background: url('.$bg_image.')}' : '';
$show_background_repeat = ($image_transparent == false and isset($bg_repeat_string) and $bg_repeat_string !=='')  ? 'body{background-repeat: '.$bg_repeat[0].'}' : '';
$show_background_position = ($image_transparent == false and isset($bg_position_string) and $bg_position_string !=='')  ? 'body{background-position: '.$bg_position[0].'}' : '';
echo $show_background;
echo $show_background_repeat;
echo $show_background_position;
$custom_css = get_option( 'web_custom_css');
echo $custom_css
?>        
</style>
</head>
