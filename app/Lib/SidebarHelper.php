<?php

// For add'active' class for activated route nav-item
if(!function_exists('active_class')) {
	function active_class($path, $active = 'active') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
  }
}

// For checking activated route
if(!function_exists('is_active_route')) {
	function is_active_route($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
  }
}

// For add 'show' class for activated route collapse
if(!function_exists('show_class')) {
  function show_class($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
  }
}