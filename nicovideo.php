<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	</head>
	<div align="center">
	<?php
	if(isset($_GET['id'])) {
		$src = "http://ext.nicovideo.jp/thumb_watch/" . $_GET['id'];
		echo "<script type='text/javascript' src='" . $src . "?w=450&h=300'></script>";
	}
	?>
	</div>
</html>
