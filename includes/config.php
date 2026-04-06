<?php
	$uri = $_SERVER['REQUEST_URI'];
	if (strpos($uri, '/contact') !== false) {
		$CURRENT_PAGE = "Contact"; 
		$PAGE_TITLE = "Contact Us";
	} elseif (strpos($uri, '/about') !== false) {
		$CURRENT_PAGE = "About"; 
		$PAGE_TITLE = "About Us";
	} elseif (strpos($uri, '/projects') !== false) {
		$CURRENT_PAGE = "Projects"; 
		$PAGE_TITLE = "Projects";
	} elseif (strpos($uri, '/people') !== false) {
		$CURRENT_PAGE = "People"; 
		$PAGE_TITLE = "People";
	} else {
		$CURRENT_PAGE = "Index";
		$PAGE_TITLE = "Home";
	}
?>