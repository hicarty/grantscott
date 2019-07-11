<?php
	switch ($_SERVER["HTTP_HOST"]) {
		case "./contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
			break;
		case "./about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "./projects.php":
			$CURRENT_PAGE = "Projects"; 
			$PAGE_TITLE = "Projects";
			break;
		case "./people.php":
			$CURRENT_PAGE = "People"; 
			$PAGE_TITLE = "People";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Home";
	}
?>