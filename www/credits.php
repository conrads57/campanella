<?php
/*
*      credits.php
*
*		This file if part of the "campanella" bell management system
*		For more information on the software please visit:
*		https://lizzit.it/campanella
*
*      Written by: Michele Lizzit <michele@lizzit.it>, 20 Mar 2014
*      Last update: 25 Apr 2016
*      Version: 1.2
*
*      Copyright (c) 2016 Michele Lizzit
*
*      This program is free software: you can redistribute it and/or modify
*      it under the terms of the GNU Affero General Public License as published
*      by the Free Software Foundation, either version 3 of the License, or
*      (at your option) any later version.
*
*      This program is distributed in the hope that it will be useful,
*      but WITHOUT ANY WARRANTY; without even the implied warranty of
*      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*      GNU Affero General Public License for more details.
*
*      You should have received a copy of the GNU Affero General Public License
*      along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>

<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//IT" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
	<?php echo file_get_contents('head.html'); ?>
</head>
<body>
	<div id="wrapper">

		<?php echo file_get_contents('header_div.html'); ?>

		<div id="sidebar">
			<ul>
				<li><a href="index.php" class="sidebarHome"></a></li>
				<li><a href="settings.php" class="sidebarSettings"></a></li>
				<li><a href="status.php" class="sidebarStatus"></a></li>
				<li class="thispage"><a href="credits.php" class="thispage sidebarCredits"></a></li>
				<br>
				<?php echo file_get_contents('language_selector.html'); ?>
			</div>

			<div id="main" style="width: 70%"><p> <span id="title" class="creditsTitle"></span>
				<span class="creditsText">
				</span>
			</p>
			<br>
			<br>
		</div>
	</div>
</body>
</html>
