# React Ready Plugin Framework 2022

Rebuilding the moose plugin framework with REACT Babble etc. on Aug 28, 2022

# Details:

## Download and Install the plugin

## Create 2 WP Pages or a Thrive Pages and use the following shortcodes

### [react_plugin_app_1]

This will launch a simple one page React App

### [react_router_app]

This will launch a simple example app with Browser Router enabled. This will have
a Menu bar with 3 pages with navigation. The page functionalities are not working.
They're there just to prove that the Browser Router is working.

## Important Versions:

### React 16.14

### React Router Dom 5.3.0

### Bable Core 7.6

### Gulp 4.0.2

### jQuery 3.6.0

## Special Changes

The gulp.js file was re-written with reactify. The normal uglify wasn't working with React.
uglify.js will work with normal Javascript/jQuery.

Also, the vanilla js has a click event on the body, so that will generate a console log message which
needs to be removed.
