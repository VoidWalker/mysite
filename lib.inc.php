<?php
function cleanStr($data){
 return trim(strip_tags($data));
}

function cleanInt($data){
 return (int)$data;
}

function cleanUInt($data){
 return abs(cleanInt($data));
}

  /**
	*Draw table
	*/
	function drawTable($cols=10, $rows=10, $color='orange')
	{
		echo "<table border='1' width='400'>";
		for($tr = 1; $tr <= $rows; $tr++)
		{
			echo "<tr>";
			for($td = 1; $td <= $cols; $td++)
			{
				if($td==1 or $tr==1)
				{
					echo  "<th style='background:$color' align='center'>".$tr*$td."</th>";
				}else
				{
					echo "<td align='center'>".$tr*$td."</td>";
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}

  /**
	*Menu
	*/
	function drawMenu($menu, $vertical = true){
		if(!is_array($menu))
			return false;
		$style = '';
		if(!$vertical){
			$style = " style='display:inline;margin-right:15px'";
		}
		
		echo '<ul>';
			foreach($menu as $menuItem){
				echo "<li$style>";
				echo "<a href={$menuItem['href']}>{$menuItem['link']}</a></li>";
			}
		echo '</ul>';
		return true;
	}
?>