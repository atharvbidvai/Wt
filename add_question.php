<?php
include '../db.php';

if(isset($_POST['add'])){

$question = $_POST['question'];
$o1 = $_POST['o1'];
$o2 = $_POST['o2'];
$o3 = $_POST['o3'];
$o4 = $_POST['o4'];
$answer = $_POST['answer'];

$sql = "INSERT INTO questions(question,option1,option2,option3,option4,answer)

VALUES('$question','$o1','$o2','$o3','$o4','$answer')";

mysqli_query($conn,$sql);

echo "Question Added Successfully";
}
?>

<form method="POST">

<input type="text" name="question" placeholder="Question"><br>

<input type="text" name="o1" placeholder="Option 1"><br>

<input type="text" name="o2" placeholder="Option 2"><br>

<input type="text" name="o3" placeholder="Option 3"><br>

<input type="text" name="o4" placeholder="Option 4"><br>

<input type="text" name="answer" placeholder="Correct Answer"><br>

<button type="submit" name="add">Add Question</button>

</form>
