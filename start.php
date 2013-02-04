<?php
// Include the msdropdown javascript library and associated CSS. Elgg already supplies jQuery.

function msdropdown_init() {
	elgg_extend_view('page/elements/head', 'msdropdown/metatags');
}

// Make sure the profile initialisation function is called on initialisation
elgg_register_event_handler('init','system','msdropdown_init');

