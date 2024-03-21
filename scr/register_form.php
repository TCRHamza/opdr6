<?php 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    <h3>PHP - PDO Login and Registration</h3>
    <hr/>

    <form action="" method="POST">    
        <h4>Register here...</h4>
        <hr>
        
        <label>Username</label>
        <input type="text" name="username" />
        <br>
        <label>Password</label>
        <input type="password" name="password" />
        <br>
        <button type="submit" name="register-btn">Register</button>
        <br>
        <a href="login_form.php">Login</a>
    </form>
        
</body>
</html>

<?php
require_once '../vendor/autoload.php';

use Login\class\User;

if(isset($_POST['register-btn'])){
    require_once('class/user.php');
    $user = new User();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user->RegisterUser($username, $password);
    echo "<script>alert('User registered')</script>";
}

?>