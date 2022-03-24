<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcitons</title>
</head>
<body>
    <?php
        echo "<p style='font-size: 40px;color:#000000;'>3. Deal with strings</p><br>";
        echo "<center><p style='font-size: 30px;color:#000000;'>First Function:</p><br>";
        $str = addcslashes("Hello World!","W");
        echo "<p style='font-size: 40px;color:#000000;'>".($str)."<br></p>"; 
        $str = addcslashes("Hi Atef!","e");
        echo "<p style='font-size: 40px;color:#000000;'>".($str)."</p>"; 
        echo "<p style='font-size: 30px;color:#000000;'>Second Function:</p><br>";
        echo "<p style='font-size: 40px;color:#000000;'>". chr(52) . "<br></p>"; // Decimal value
        echo "<p style='font-size: 40px;color:#000000;'>". chr(052) . "<br></p>"; // Octal value
        echo "<p style='font-size: 40px;color:#000000;'>". chr(0x52) . "<br></p>"; // Hex value
        echo "<p style='font-size: 40px;color:#000000;'>". chr(65)."<br></p>";
        echo "<p style='font-size: 30px;color:#000000;'>Third Function:</p><br>";
        $str = "Hello world! It's PHP, Css, Javascript";
        echo "<p style='font-size: 40px;color:#000000;'>".chunk_split($str,3,"-")."</p>";
        echo "<p style='font-size: 30px;color:#000000;'>Fourth Function:</p><br>";

        // 16 character salt starting with $5$. The default number of rounds is 5000.
        if (CRYPT_SHA256 == 1)
        {
            echo "<p style='font-size: 30px;color:#000000;'>". "SHA-256: ".crypt('I am Mohamed Atef','$5$rounds=5000$')."</p><br>"; }
        else
        {
            echo "<p style='font-size: 30px;color:#000000;'>"."SHA-256 not supported.</p><br>";
        }

        echo "</center><p style='font-size: 40px;color:#000000;'>4. Deal with Arrays</p><br><center>";

        echo "<p style='font-size: 30px;color:#000000;'>First Function:array_fill_keys()</p><br>";
        $keys=array("a","b","c","d");
        $a1=array_fill_keys($keys,"blue");
        print_r($a1);

        echo "<p style='font-size: 30px;color:#000000;'>Second Function: array_map()</p><br>";
        function myfunction($num)
        {
            return($num*$num);
        }
        $a=array(1,2,3,4,5);
        print_r(array_map("myfunction",$a));

        echo "<p style='font-size: 30px;color:#000000;'>Third Function: array_merge()</p><br>";
        $a1=array("red","green");
        $a2=array("blue","yellow");
        print_r(array_merge($a1,$a2));

        echo "<p style='font-size: 30px;color:#000000;'>Fourth Function: array_product()</p><br>";
        $a=array(5,2,5);
        echo(array_product($a));
        echo "<p style='font-size: 30px;color:#000000;'>Fifth Function: range()</p><br>";
        $number = range(10,25);
        print_r ($number)."</center>";
    ?>
</body>
</html>