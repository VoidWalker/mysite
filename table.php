<?php
$cols=10;
$rows=10;
$color='yellow';
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$cols = cleanUInt($_POST['cols']);
		$rows = cleanUInt($_POST['rows']);
		$color = cleanStr($_POST['color']);
	}
	/*if(isset($cols))
		$cols=$cols;
	else
		$cols=10;
	if(isset($rows))
		$rows=$rows;
	else
		$rows=10;
	if(isset($color))
		$color=$color;
	else
		$color='yellow';
	*/
?>
<form action='<?=$_SERVER['REQUEST_URI']?>' method = 'POST'>
	<label>Columns: </label><br />
	<input name='cols' type='text' value="" /><br />
	<label>Rows: </label><br />
	<input name='rows' type='text' value="" /><br />
	<label>Color: </label><br />
	<input name='color' type='text' value="" /><br /><br />
	<input type='submit' value='Создать' />
</form>
<!-- Таблица -->
<?php
	drawTable($cols, $rows, $color);
?>
</table>
<!-- Таблица -->