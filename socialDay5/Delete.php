<?php

$ID=$_GET['ID'];
require_once "model/connection.php";
$delete=$connection->prepare('DELETE FROM users WHERE ID=?');
$delete->execute([$ID]);
header('Location: index.php');

?>