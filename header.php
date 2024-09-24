<?php
/**
 * horikenテンプレートの Header ファイルです。
 *
 * @since horiken 1.0.0
 */

?>
<!DOCTYPE html>

<html <?php language_attributes();?>>

<head>

  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

  <?php wp_head();?>

  <!-- slick -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick/slick-theme.css">
  <script src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>

    <!-- remodal -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.css" integrity="sha512-UO+dUiFTr6cCaPZKCzXEGhYsuK8DkGAS5iThyMUrtHsg+INCFyRM3GiqJ4rjuvfEyn81XGjpfmjSwwR1dAjAsw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css" integrity="sha512-jRxwiuoe3nt8lMSnOzNEuQ7ckDrLl31dwVYFWS6jklXQ6Nzl7b05rrWF9gjSxgOow5nFerdoN6CBB4gY5m5nDw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="<?php echo get_template_directory_uri();?>/assets/js/remodal.min.js"></script>
 
<script>
  (function(d) {
    var config = {
      kitId: 'ujv2juw',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
</head>

<body <?php body_class();?>>


  <?php
wp_body_open();
?>