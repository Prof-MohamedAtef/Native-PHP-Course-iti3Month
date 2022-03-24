<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data WebPage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: url('colorful.jpg');background-size: 2100px 1800px">
    <?php
    $table ="<center><table style='font-size:25px;border: 1px solid grey;'>";
    $table = $table."<tr>";
    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>".$_POST['firstname']."</td>";
    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>".$_POST['lastname']."</td>";
    $table = $table."</tr><tr>";   
    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>Address</td>";
    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>".$_POST['address']."</td>";
    $table = $table."</tr><tr>";   
    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>Country</td>";
    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>".$_POST['countries']."</td>";
    $table = $table."</tr><tr>";   
    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>Gender</td>";
    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>".$_POST['gender']."</td>";
    $table = $table."</tr><tr>";   
    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>Username</td>";
    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>".$_POST['username']."</td>";
    $table = $table."</tr>";   
    
    if(isset($_POST['skills']) && is_array($_POST['skills']) && count($_POST['skills']) > 0)
    {
        $skills=count($_POST['skills']);
        foreach( $_POST as $skills ) {
            if( is_array( $skills ) ) {
                foreach( $skills as $thing=> $key) {
                    $table = $table."<tr>";
                    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>"."Skill [".$thing."]"." </td>";
                    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>".$key." </td>";
                    $table = $table."</tr>";   
                }
            } else {
                //echo $skills;
            }
        }
    }
        
    $table = $table."<tr>";
    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>Department</td>";
    $table= $table."<td style='color: red;padding:15px;border: 1px solid grey;'>".$_POST['department']."</td>";
    $table = $table."</tr>";
    $table = $table."</table>";
    echo $table;

    if(isset($_FILES['image'])){
        $allowedExtensions=['png','jpg','gif','jpeg'];
        $fileName=$_FILES['image']['name'];
        $imgExtArr=explode('.',$fileName);
        $imgExt=end($imgExtArr);
        $fileTmp=$_FILES['image']['tmp_name'];            
        $filePath='imgs/'.$fileName;
        if(in_array($imgExt,$allowedExtensions)){
            move_uploaded_file($fileTmp,$filePath);                   
            echo "<br><center><img src=".$filePath." /></center>";
        }else{
            echo "Only images are allowed to be uploaded!";
        }
    }else{
        echo "<p style='color:white;'><h1> Please Upload an Image</h1></p>";
    }
    ?>
</body>
</html>