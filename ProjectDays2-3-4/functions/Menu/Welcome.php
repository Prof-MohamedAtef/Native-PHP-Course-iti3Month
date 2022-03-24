<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Welcome</title>
    <link rel="stylesheet" href="../Menu/MenuStyle/style.css">
</head>
<body>


<?php

require_once "nav.php";  
if(isset($_POST['username'])&&count($_POST['username']>0)){
  $username=$_POST['username'];
  echo "<center><h1> Welcome ya ".$username."</h1></center>";
  $_SESSION['username']=$username;
}else{
header('Location: login.php');

}

?>
</body>
</html>