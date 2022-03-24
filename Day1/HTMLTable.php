<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Table with PHP</title>
</head>
<body style="background-image: url('redwood.jpg');background-size: 2100px 1800px">
    
<?php
echo '</br></br><hr><center><p style="font-size: 40px;color:#FFFFFF;">9.Display Table using HTML. </p></center></br></br>';


$cars = array("Volvo", "BMW", "Toyota");
$plans = array("airBus", "EgyptAir", "Saudi Business Flights");
$Cities = array("Cairo", "Riadh", "AlRebat");
$drivers = array("Volvo0", "BMW1", "Toyota1");



for($a=0;$a<3;$a++){
    $table ='<center><table style="padding:10px;font-size: 25px;color:#FFFFFF;">';
    for($o=0; $o<3; $o++){
        $table = $table."<tr>";
        for($x = 0; $x < 3; $x++){
            $val= $cars[$x];
            $table= $table.'<td style="padding:10px;">'.$val."</td>";
        }
        $table = $table."</tr>";   
    }
    
    $table = $table."</table>";
    echo $table;
}

echo '</br></br><hr><p style="font-size: 40px;color:#FFFFFF;">9. HTML Table </p></br></br>';

$MrA=array("Salary of Mr. A is","1000$");
$MrB=array("Salary of Mr. B is","1200$");
$MrC=array("Salary of Mr. C is","1400$");
$table ="<center><table style='font-size:45px;border: 1px solid white;'>";
$table = $table."<tr>";
    for($x = 0; $x < 2; $x++){
        $val= $MrA[$x];
        if($x==0){
            $table= $table."<td style='color: yellow;padding:15px;border: 1px solid white;'>".$val."</td>";
        }else{
            $table= $table."<td style='color: pink;padding:15px;border: 1px solid white;'>".$val."</td>";
        }
        
    }
$table = $table."</tr>";   
$table = $table."<tr>";
    for($x = 0; $x < 2; $x++){
        $val= $MrB[$x];
        if($x==0){
            $table= $table."<td style='color: yellow;padding:15px;border: 1px solid white;'>".$val."</td>";
        }else{
            $table= $table."<td style='color: pink;padding:15px;border: 1px solid white;'>".$val."</td>";
        }
    }
$table = $table."</tr>";   
$table = $table."<tr>";
    for($x = 0; $x < 2; $x++){
        $val= $MrC[$x];
        if($x==0){
            $table= $table."<td style='color: yellow;padding:15px;border: 1px solid white;'>".$val."</td>";
        }else{
            $table= $table."<td style='color: pink;padding:15px;border: 1px solid white;'>".$val."</td>";
        }
    }
$table = $table."</tr>";   

    
    $table = $table."</table>";
    echo $table;



?>
</body>
</html>