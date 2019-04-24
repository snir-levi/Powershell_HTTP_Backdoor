<?php
if (isset($_POST["command"])) {
	$file = fopen("shell.txt", "w") or die("Unable to open file!");
	fwrite($file, $_POST["command"]);
	fclose($file);
}
?>