<form action="test1.php" method="POST">
	<input name="name"><br>
	<input name="age"><br>
	<input type="submit">
</form>

<?php
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$name = trim(strip_tags($_POST['name']));
	$age = abs((int)trim(strip_tags($_POST['age'])));
	echo '<p>Your name: '.$name;
	echo '<p>Your age: '.$age;
	}
?>