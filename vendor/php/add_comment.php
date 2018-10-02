<?php
require('config.php');

$name = strip_tags(utf8_decode($_POST['name']));
$comment = strip_tags(utf8_decode($_POST['comment']));

$consulta = $conexion->query("INSERT INTO comments (name, comment, date_added) VALUES ('$name', '$comment', now())");
// new comment
//$insert = mysql_query("INSERT INTO comments (name, comment, date_added) VALUES ('$name', '$comment', now())", $conexion);
?>
