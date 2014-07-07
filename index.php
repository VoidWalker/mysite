<?php
	require 'lib.inc.php';
	require 'data.inc.php';
	$title = 'Site of our school';
	$header = "$welcome, guest!";
	@$id = strtolower(cleanStr($_GET['id']));
	switch($id){
		case 'about':
			$title = 'About site';
			$header = 'About our site';
			break;
		case 'contact':
			$title = 'Contacts';
			$header = 'Contact us';
			break;
		case 'table':
			$title = 'Multiplication table';
			$header = 'Multiplication table';
			break;
		case 'calc':
			$title = 'Calculator';
			$header = 'Calculator';
			break;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<title><?=$title?></title>
		<meta http-equiv="content-type"
			content="text/html; charset=windows-1251" />
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>

		<div id="header">
			<!-- Верхняя часть страницы -->
			<?php 
				include "top.inc.php";
			?>
			<!-- Верхняя часть страницы -->
		</div>

		<div id="content">
			<!-- Заголовок -->
			<h1><?=$header?></h1>
			<!-- Заголовок -->
			<!-- Область основного контента -->
			<?php 
				switch($id){
					case 'about':
						include 'about.php';
						break;
					case 'contact':
						include 'contact.php';
						break;
					case 'table':
						include 'table.php';
						break;
					case 'calc':
						include 'calc.php';
						break;
					default:
						include 'index.inc.php';
						break;
	}
			?>
			<!-- Область основного контента -->
		</div>
		
		<div id="nav">
			<!-- Навигация -->
			<?php 
				require 'menu.inc.php';
			?>
			<!-- Навигация -->
		</div>
		<div id="footer">
			<!-- Нижняя часть страницы -->
			<?php 
				include 'bottom.inc.php';
			?>
			<!-- Нижняя часть страницы -->
		</div>
	</body>
</html>