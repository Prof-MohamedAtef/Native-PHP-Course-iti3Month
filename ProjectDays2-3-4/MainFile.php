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
        echo "<center><p>2.1 Loop with For statement</p><center><hr>";
        $names=['PHP','HTML','CSS','JavaScript'];
        $count=count($names);
        for($i=0;$i<$count;$i++){
            echo '<center>'. $names[$i]."</center><br>";  
        }

        echo "<center><p>2.2 Loop with Foreach statement<center></p><hr>";
        foreach ($names as $name){
            echo '<center>'.$name."</center><br>";
        }

        echo "<center><p>3. Create asscociative array<center></p><hr>";
        $Info=[
            'Name'=>'Mohamed',
            'age'=>'29',
            'Email'=>'proofesser@gmail.com',
            'Coleague'=>'Faculty of Computers and Information, Fayoum University',
        ];

        $table ="<center><table style='font-size:25px;border: 1px solid blue;'>";
        foreach ($Info as $key=>$value){
            $table = $table."<tr>";
            $table= $table."<td style='color: red;padding:15px;border: 1px solid blue;'>".$key."</td>";
            $table= $table."<td style='color: red;padding:15px;border: 1px solid blue;'>".$value."</td>";
            $table = $table."</tr>";   
        }
        $table = $table."</table>";
        echo $table;

        echo '</br></br><hr><p style="font-size: 40px;color:#000000;"><a href="registration.php">Register Here</a></p></br></br>';

    ?>
</body>
</html>
