<?php
    require_once 'config.php';

    $c = 11;
    $o = 0;
    if(isset($_GET['count']))    $c = intval($_GET['count']);
    if($c>11) $c=11;
        if(isset($_GET['offset']))    $o = intval($_GET['offset']);

    $sql = sprintf('SELECT `ID`, `Title`, `Opisanie`, `Rezishor`, `Year`, `Poster` FROM `videos` LIMIT %d OFFSET %d', $c,$o);
    $film = $conn->query($sql);

    $result = '{"film": [';
    foreach ($film as $row){
	$Title = $row['Title'];
    $Rezishor = $row['Rezishor'];
    $Opisanie = $row['Opisanie'];
    $ID = $row['ID'];
    $Year = $row['Year'];
    $Poster =$row['Poster'];
    $result .= sprintf('{ "Title":"%s","Rezishor":"%s", "Opisanie":"%s", "Year":"%d", "id":%d, "Poster":"%s"}, ', $Title,$Rezishor,$Opisanie,$Year,$ID,$Poster);
    }
    $result = rtrim($result, ', ');
    $result .= ']}';
    echo $result;
?>