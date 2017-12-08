//The session start needs to be on the first line of PHP
<?php
session_start()  ;
$dir = '/var/www/students/team6/CS346TeamWebsite/Private/PHP' ;
$pdir = '/students/team6/CS346TeamWebsite/Public/PHP' ;
require_once($dir.'/initialize.php') ;
global $db ;
if(!isset($_SESSION['ID']))
	{
		header("Location:" . $pdir . "/Login.php") ;
	}
	else
	{
		$UN = $_SESSION['username'] ;
		$id = $_SESSION['ID'] ;
		$role = $_SESSION['role'] ;
	}
?>

//Make sure your page has this meta tag in the head section
<meta name="viewport" content="width=device-width, initial-scale=1" />
