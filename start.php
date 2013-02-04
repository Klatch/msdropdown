<?php

// Add the css and js by extending head
function msdropdown_init() {
	elgg_extend_view('page/elements/head', 'msdropdown/metatags');
}
// init
elgg_register_event_handler('init','system','msdropdown_init');

