<?php
$output = '';
$n1 = '';
$n2 = '';
$op = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
	//Check all fields came
	$n1 = cleanInt($_POST['num1']);
	$n2 = cleanInt($_POST['num2']);
	$op = cleanStr($_POST['operator']);
	$output = "$n1 $op $n2 = ";
	switch($op){
		case '+':
			$output .= $n1 + $n2;
			break;
		case '-':
			$output .= $n1 - $n2;
			break;
		case '*':
			$output .= $n1 * $n2;
			break;
		case '/':
			if($n2 === 0){
				$output = 'Forbidden operation. Div by 0.';}
			else{
				$output .= $n1 / $n2;
			}
			break;
		default:
			$output = "Unknown operator '$op'";
	}
}
if($output){
	echo "<h3>Result: $output</h3>";
}
?>

<form action='' method='POST'>
	<label>Число 1:</label><br />
	<input name='num1' value="<?=$n1?>" type='text'/><br />
	<label>Оператор: </label><br />
	<input name='operator' value="<?=$op?>" type='text'/><br />
	<label>Число 2: </label><br />
	<input name='num2' value="<?=$n2?>" type='text'/><br /><br />
	<input type='submit' value='Считать'>
</form>