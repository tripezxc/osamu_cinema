<?php
	require_once 'config.php';
	
	$id_film = intval($_GET['id']);
	
	$sql = 'SELECT 'ID', 'TITLE', 'Opisanie', 'Rezishor', 'Year FROM' 'videos' WHERE 'ID' = '.$id_videos;
	$result = $conn->query($sql)->fetch();
	$id = $result['ID'];
	$title = $result['TITLE'];
	$Opisanie = $result['Opisanie'];
	$Rezishor = $result['Rezishor'];
	$Year = $result['Year'];
	$answer = sprintf('{"book": { "id":"%d", "title": "%s", "Opisanie": "%s", "Rezishor": "%s", "Year": "%d"}}', $id, $title, $Opisanie, $Rezishor, $Year);
	echo $answer;
	?>