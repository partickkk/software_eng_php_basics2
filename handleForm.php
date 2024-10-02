<?php 

session_start();

if(isset($_POST['LoginBtn'])) {

	$Username = $_POST['Username'];
	$Password = md5($_POST['Password']);

	if(isset($_SESSION['isLoggedIn'])) {
        $_SESSION['attemptedConcurrentLogin'] = 1;
		header('Location: index.php');
	} else {
		$_SESSION['Username'] = $Username;
		$_SESSION['Password'] = $Password;
        $_SESSION['isLoggedIn'] = 1;
	}

	header('Location: index.php');
}

?>