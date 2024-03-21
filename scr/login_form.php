<?php 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h3>PHP - PDO Login and Registration</h3>
    <hr/>

    <form action="" method="POST">    
        <h4>Login here...</h4>
        <hr>
        
        <label>Username</label>
        <input type="text" name="username" />
        <br>
        <label>Password</label>
        <input type="password" name="password" />
        <br>
        <button type="submit" name="login-btn">Login</button>
        <br>
        <a href="register_form.php">Registration</a>
    </form>
        
</body>
</html>

<?php

require_once '../vendor/autoload.php';

use Login\class\User;

if(isset($_POST['login-btn'])){
    require_once('class/user.php');
    $user = new User();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($user->LoginUser($username, $password)) {
        $_SESSION['username'] = $username;
        header("location: index.php");
        exit();
    } else {
        echo "<script>alert('Login failed')</script>";
    }
}

?>