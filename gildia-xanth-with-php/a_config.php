<?php
	session_start();

$conn = mysqli_connect("localhost:3306", "root", "vertrigo", "aktualnosci-php"); 
    if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
	?>

<?php
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/xanth/');




        switch ($_SERVER["SCRIPT_NAME"]) {
        case "/xanth/aktualnosci.php":
			$CURRENT_PAGE = "aktualnosci"; 
			$PAGE_TITLE = "Aktualności";
			break;
		case "/xanth/postacierp.php":
			$CURRENT_PAGE = "postacierp"; 
			$PAGE_TITLE = "Postacie RP";
			break;
        case "/xanth/lorerp.php":
			$CURRENT_PAGE = "lorerp"; 
			$PAGE_TITLE = "Lore RP";
			break;
        case "/xanth/forum.php":
			$CURRENT_PAGE = "forum"; 
			$PAGE_TITLE = "Forum";
			break;
		default:
			$CURRENT_PAGE = "index";
			$PAGE_TITLE = "Great House Xanth";
	}
?>