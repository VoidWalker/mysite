<?php
				if(!drawMenu($leftMenu, false))
					echo ERR_DRAW_ON_BOTTOM_MENU;
			?>
			<hr>
			&copy; <?=COPYRIGHT?>, 2000 - <?= $year?>
			<hr>
			<p>Powerd by <?=$_SERVER['SERVER_SOFTWARE']?> on <?=PHP_OS?></p>