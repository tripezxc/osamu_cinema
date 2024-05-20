<?php
	require_once 'config.php';

	$sql = 'SELECT `Rezishor`, `Title` FROM `videos` WHERE `ID` = 1';
	$result = $conn->query($sql)->fetch();
	
	$n = $result['Rezishor'];
	$s = $result['Title'];
	$answer = sprintf('{"Rezishor":"%s", "Title":"%s"}', $n,$s);
	echo $answer;
?>