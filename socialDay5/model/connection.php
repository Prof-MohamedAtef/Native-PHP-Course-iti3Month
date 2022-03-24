<?php
try{
    $connection=new PDO
    ('mysql:dbname=socialnetworkdb;host=localhost','root', '');
}catch (PDOException $e){
    echo $e->getMessage();
}
?>