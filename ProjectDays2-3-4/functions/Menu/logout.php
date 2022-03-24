<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="../Menu/MenuStyle/style.css">
</head>
<body>
    <?php
require_once "nav.php";  
session_start();
unset($_SESSION['username']);
session_regenerate_id();
session_destroy();
    ?>
</body>
</html>