<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php 

echo'<h1>Welcome to php</h1>';

$x=5;
$y='Welcome';
$z=TRUE;

echo 'Type of each variable</br>';

if(is_int($x)){
    echo 'x is integer</br>';
}else{
    echo 'x is not integer</br>';
}

if(is_string($y)){
    echo 'y is string</br>';
}else{
    echo 'y is not string</br>';
}
if(is_bool($z)){
    echo 'z is bool</br>';
}else{
    echo 'z is not bool</br>';
}



$a = 3;
echo gettype($a) . "</br>";

$b = 3.2;
echo gettype($b) . "</br>";

$c = "Hello";
echo gettype($c) . "</br>";

$d = array();
echo gettype($d) . "</br>";

$e = array("red", "green", "blue");
echo gettype($e) . "</br>";

$f = NULL;
echo gettype($f) . "</br>";

$g = false;
echo gettype($g) . "</br>";

echo 'Numbers from 0:15 using while loop</br>';


$x = 0;

while($x <= 15) {
  echo $x;
  $x++; 
}

echo '</br>Numbers from 0:15 using for loop</br>';

for ($x = 0; $x <= 15; $x++) {
    echo $x ;
}


const ITI="ITI";


if (isset($x)) {
  echo '</br>Variable x is set</br>';
}

if (isset($y)) {
    echo 'Variable y is set</br>';
}


if (isset($z)) {
    echo 'Variable z is set</br>';
}


if (empty($x)) {
    echo 'Variable x is empty</br>';
}else{
    echo 'Variable x is not empty</br>';
}

if (empty($y)) {
    echo 'Variable y is empty</br>';
}else{
    echo 'Variable y is not empty</br>';
}

if (empty($z)) {
    echo 'Variable z is empty</br>';
}else{
    echo 'Variable z is not empty</br>';
}


$m=15;
$n=25;

$result=$m+$n;

if($result>50){
    echo 'Accepted</br>';
}else{
    echo 'Not Accepted</br>';
}



$var_name = 32.360;
echo strval($var_name);


$A=array("Salary of Mr. A is","1000$");
$B=array("Salary of Mr. B is","1200$");
$C=array("Salary of Mr. C is","1400$");
$table ="<table>";
$table = $table."<tr>";
    for($x = 0; $x < 2; $x++){
        $val= $A[$x];
        if($x==0){
            $table= $table."<td>".$val."</td>";
        }else{
            $table= $table."<td>".$val."</td>";
        }
        
    }
$table = $table."</tr>";   
$table = $table."<tr>";
    for($x = 0; $x < 2; $x++){
        $val= $B[$x];
        if($x==0){
            $table= $table."<td>".$val."</td>";
        }else{
            $table= $table."<td>".$val."</td>";
        }
    }
$table = $table."</tr>";   
$table = $table."<tr>";
    for($x = 0; $x < 2; $x++){
        $val= $C[$x];
        if($x==0){
            $table= $table."<td>".$val."</td>";
        }else{
            $table= $table."<td>".$val."</td>";
        }
    }
$table = $table."</tr>";   

    
    $table = $table."</table>";
    echo $table;

?>
</body>
</html>