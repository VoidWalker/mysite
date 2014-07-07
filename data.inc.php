<?php
	$size = ini_get('post_max_size');
	$letter = $size{strlen($size)-1};
	$size = (int)$size;
	switch(strtoupper($letter)){
	case 'G': $size *= 1024;
	case 'M': $size *= 1024;
	case 'K': $size *= 1024;
}

	define('ERR_DRAW_ON_LEFT_MENU', 'Sorry...');
	define('ERR_DRAW_ON_BOTTOM_MENU', 'Sorry!');
   /*
	*Get current time 0 - 23
	*/
	$hour = (int)strftime('%H');
	$welcome = '';
	if($hour>0 and $hour < 6){
		$welcome = 'Good night';
	}elseif($hour>=6 and $hour<12){
		$welcome = 'Good morning';
	}elseif($hour>=12 and $hour<18){
		$welcome  = 'Good day';
	}elseif($hour>=18 and $hour<23){
		$welcome = 'Good evening';
	}else{
		$welcome = 'Good night';
	}
	//Constant assignment
	define('COPYRIGHT', 'Supper-dupper Web-developer');
	//Choose date
	setlocale(LC_ALL, "english");
	$day = strftime('%d');
	$month = strftime('%B');
	$year = strftime('%Y');
	
	/*Left Menu*/
	$leftMenu = array(
					array('link' => 'Home', 'href' => 'index.php'),
					array('link' => 'About us', 'href' => 'index.php?id=about'),
					array('link' => 'Contacts', 'href' => 'index.php?id=contact'),
					array('link' => 'Multiplication table', 'href' => 'index.php?id=table'),
					array('link' => 'Calculator', 'href' => 'index.php?id=calc')
				);
	/***********************/
?>