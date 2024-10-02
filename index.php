<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php session_start(); ?>

    <br>

    <form action="handleForm.php" method="POST">

        Username: 
        <p> <input type="text" placeholder="Username" name="Username"> </p>

        Password:
        <p> <input type="password" placeholder="Password" name="Password"> </p>

        <p> <input type="submit" name="LoginBtn" value="Log in"> </p>

    </form>
        <p> <input type="submit" name="LogoutBtn" value="Log out" onclick="location.href = 'unset.php' "> </p>
    
        <?php
            if(isset($_SESSION['attemptedConcurrentLogin'])) {
                echo  "User ' " . $_SESSION['Username'] . "' is already logged in! please logout first!";
            } ?>

    <h2> 
		<?php
		    if(isset($_SESSION['Username'])) {
			    echo "Username: " . $_SESSION['Username'];
		} ?>

        <br>
	
		<?php
		    if(isset($_SESSION['Password'])) { 
			    echo "Password: " .$_SESSION['Password'];
		} ?>
		</h2>
</body>
</html>
