<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/views/revista/index.php":
			$CURRENT_PAGE = "Revistas"; 
			$PAGE_TITLE = "Revistas";
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