<?php
session_start();

if(isset($_SESSION['id_user'])) {
	// remove all session variables
	session_unset(); 
	// destroy the session 
	session_destroy(); 
	header("Location: index.php");
} else {
	header("Location: index.php");
}
?>