<?php
// RENAME THE FOLLOWING CONSTANTS WHEN STARTING A NEW PLUGIN
// REACT_READY_FRAMEWORK_URL
// BACKEND_SCRIPT_ID
// FRONTEND_SCRIPT_ID

// ALSO UPDATE THE FOLLOWING PREFIX WHEN STARTING A NEW PLUGIN
$PREFIX = 'MOOSE';
define('BACKEND_SCRIPT_ID', $PREFIX . '-backend');
define('FRONTEND_SCRIPT_ID', $PREFIX . '-frontend');

add_action('admin_enqueue_scripts',
// Conditionally load JS on plugin settings pages only
 function ($hook) {

  wp_register_script(
   BACKEND_SCRIPT_ID,
   REACT_READY_FRAMEWORK_URL . 'admin/assets/dist/js/admin.min.js',
   ['jquery'],
   time()
  );

  /* HOOK HERE IS THE NAME OF THE ADMIN PAGE URL. THIS WAY THE SCRIPT CAN BE LOADED WHEN
   * A SPECIFIC PAGE IS ACCESSED ON THE WP ADMIN SIDE THIS CAN BE USED TO LIMIT THE CSS ALSO
   */

  wp_localize_script(BACKEND_SCRIPT_ID, 'wpplugin', [
   'hook' => $hook
  ]);

  if ('toplevel_page_analytics-default-settings' == $hook) {
   wp_enqueue_script(BACKEND_SCRIPT_ID);
  }
 });

add_action('wp_enqueue_scripts',

// Conditionally load JS on single post pages
 function () {

  wp_register_script(
   FRONTEND_SCRIPT_ID,
   REACT_READY_FRAMEWORK_URL . 'frontend/assets/dist/js/frontend.min.js',
   [],
   time()
  );

  /* THIS SCRIPT ONLY LOADS ON WP FRONTEND FOR SINGLE BLOG POST OR CPT SINGLE ONLY */
  if (!is_single()) {
   wp_enqueue_script(FRONTEND_SCRIPT_ID);
  }
 }, 100);