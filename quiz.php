<?php
include 'db.php';

$sql = "SELECT * FROM questions";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Quiz Questions</h2>

<form action="result.php" method="POST">

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<h3><?php echo $row['question']; ?></h3>

<input type="radio" name="<?php echo $row['id']; ?>" value="<?php echo $row['option1']; ?>">
<?php echo $row['option1']; ?><br>

<input type="radio" name="<?php echo $row['id']; ?>" value="<?php echo $row['option2']; ?>">
<?php echo $row['option2']; ?><br>

<input type="radio" name="<?php echo $row['id']; ?>" value="<?php echo $row['option3']; ?>">
<?php echo $row['option3']; ?><br>

<input type="radio" name="<?php echo $row['id']; ?>" value="<?php echo $row['option4']; ?>">
<?php echo $row['option4']; ?><br>

<?php
}
?>

<button type="submit">Submit Quiz</button>

</form>

</div>

</body>
</html>
