<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "?c=revista":
			$CURRENT_PAGE = "xDD"; 
			$PAGE_TITLE = "xDDD";
			break;
		case "/php-template/contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Proyecto Revistas";
			$ACTIVE_MENU = 'active';
	}
?>