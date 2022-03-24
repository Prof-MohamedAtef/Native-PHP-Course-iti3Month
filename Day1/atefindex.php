<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body style="background-image: url('laptop.jpg');background-size: 3700px 3800px">
<?php 

echo'<h1 style="font-size: 25px;color:#FFFFFF;">1. Welcome to php</h1>';

$x=5;
$y='Welcome';
$z=TRUE;

echo '</br></br><hr><p style="font-size: 25px;color:#FFFFFF;">3. Type of each variable</p></br>';

if(is_int($x)){
    echo '<p style="font-size: 25px;color:#FFFFFF;">x is integer</p>';
}else{
    echo 'x is not integer</br>';
}

if(is_string($y)){
    echo '<p style="font-size: 25px;color:#FFFFFF;">y is string</p>';
}else{
    echo 'y is not string</br>';
}
if(is_bool($z)){
    echo '<p style="font-size: 25px;color:#FFFFFF;">z is bool</p></br></br><hr>';
}else{
    echo 'z is not bool';
}



$a = 3;
echo '<p style="font-size: 25px;color:#FFFFFF;">'. gettype($a) . "</p>";

$b = 3.2;
echo '<p style="font-size: 25px;color:#FFFFFF;">'. gettype($b) . "</p>";

$c = "Hello";
echo '<p style="font-size: 25px;color:#FFFFFF;">'. gettype($c) . "</p>";

$d = array();
echo '<p style="font-size: 25px;color:#FFFFFF;">'. gettype($d) . "</p>";

$e = array("red", "green", "blue");
echo '<p style="font-size: 25px;color:#FFFFFF;">'. gettype($e) . "</p>";

$f = NULL;
echo '<p style="font-size: 25px;color:#FFFFFF;">'. gettype($f) . "</p>";

$g = false;
echo '<p style="font-size: 25px;color:#FFFFFF;">'. gettype($g) . "</p>";

echo '</br></br><hr><p style="font-size: 25px;color:#FFFFFF;"">4.1 Numbers from 0:15 using while loop </p></br>';


$x = 0;

while($x <= 15) {
  echo '<p style="font-size: 15px;color:#FFFFFF;">'. $x."</p>" ;
  $x++; 
}

echo '</br></br><hr><p style="font-size: 25px;color:#FFFFFF;"">4.2 Numbers from 0:15 using for loop </p></br>';

for ($x = 0; $x <= 15; $x++) {
    echo '<p style="font-size: 15px;color:#FFFFFF;">'. $x."</p>" ;
}

echo '</br></br><hr><p style="font-size: 25px;color:#FFFFFF;"">5. Define constant with ITI value. </p></br>';
const ITI="ITI";

echo '</br><hr><p style="font-size: 25px;color:#FFFFFF;"">6. is set </p></br>';

if (isset($x)) {
  echo '<p style="font-size: 15px;color:#FFFFFF;">'."Variable 'x' is set.</p>";
}

if (isset($y)) {
    echo '<p style="font-size: 15px;color:#FFFFFF;">'."Variable 'y' is set.</p>";
}


if (isset($z)) {
    echo '<p style="font-size: 15px;color:#FFFFFF;">'."Variable 'z' is set.</p>";
}


echo '</br></br><hr><p style="font-size: 25px;color:#FFFFFF;"">7. is empty </p></br></br>';


if (empty($x)) {
    echo '<p style="font-size: 20px;color:#FFFFFF;">'."Variable 'x' is empty.</p>";
}else{
    echo '<p style="font-size: 20px;color:#FFFFFF;">'."Variable 'x' is not empty.</p>";
}

if (empty($y)) {
    echo '<p style="font-size: 20px;color:#FFFFFF;">'."Variable 'y' is empty.</p>";
}else{
    echo '<p style="font-size: 20px;color:#FFFFFF;">'."Variable 'y' is not empty.</p>";
}

if (empty($z)) {
    echo '<p style="font-size: 20px;color:#FFFFFF;">'."Variable 'z' is empty.</p>";
}else{
    echo '<p style="font-size: 20px;color:#FFFFFF;">'."Variable 'z' is not empty.</p>";
}

echo '</br></br><hr><p style="font-size: 25px;color:#FFFFFF;">8. Add M & N in Result -> then check result > 50 </p></br></br>';

$m=15;
$n=25;

$result=$m+$n;

if($result>50){
    echo '<p style="font-size: 20px;color:#FFFFFF;">'."Accepted</p>";
}else{
    echo '<p style="font-size: 20px;color:#FFFFFF;">'."Not Accepted.</p>";
}


echo '</br></br><hr><a href="http://localhost/atefWeb/HTMLTable.php"><p style="font-size: 40px;color:#FFFFFF;">9. Click Me to view Table of HTML</p></a></br></br>';


echo '</br></br><hr><p style="font-size: 25px;color:#FFFFFF;">10. Transform number into string </p></br></br>';

$var_name = 32.360;


echo '<p style="font-size: 25px;color:#FFFFFF;">'. strval($var_name).' </p></br></br>';

?>
</body>
</html>