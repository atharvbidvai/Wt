<?php
include 'db.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(username,email,password)
            VALUES('$username','$email','$password')";

    mysqli_query($conn,$sql);

    echo "Registration Successful";
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>

<body>

<div class="container">

<h2>Register</h2>

<form method="POST" name="myForm" onsubmit="return validateForm()">

<input type="text" name="username" placeholder="Username">

<input type="email" name="email" placeholder="Email">

<input type="password" name="password" placeholder="Password">

<button type="submit" name="register">Register</button>

</form>

</div>

</body>
</html>
