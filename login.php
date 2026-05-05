<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
        WHERE email='$email'
        AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

    $_SESSION['email']=$email;

    header("Location: quiz.php");

}else{
    echo "Invalid Login";
}

}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Login</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Password">

<button type="submit" name="login">Login</button>

</form>

</div>

</body>
</html>
