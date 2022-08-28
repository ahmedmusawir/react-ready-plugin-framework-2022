<?php
 /*
 PROPERTY LIST DISPLAY SHORTCODE
  */

 // If this file is called directly, abort.
 if (!defined('WPINC')) {
  die;
 }

 /**
  *
  * Adding Custom Shortcode for Property or any CPT list
  *
  */

 function react_plugin_test($atts)
 {

  $atts = shortcode_atts(

   array(

    'width' => 'w-100',
    'align' => 'center'

   ),

   $atts
  );

  extract($atts);

  ob_start(); // OUTPUT BUFFERING

 ?>

<main class="JLIGHT-CAFE-SHORTCODE d-flex justify-content-<?php echo $align; ?>">

  <?php
   include plugin_dir_path(__FILE__) . 'views/jlight-view.php';
   ?>

</main>


<?php

  $module_contents = ob_get_contents();

  ob_end_clean();

  return $module_contents;
 }

add_shortcode('react_plugin_app_1', 'react_plugin_test');