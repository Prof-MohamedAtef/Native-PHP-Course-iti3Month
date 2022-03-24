<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="style.css" rel="StyleSheet"/>
</head>
<body style="background-image: url('imgs/darkllab.jpg');background-size: 2100px 1800px">
<?php
        $ID=$_GET['ID'];
        require_once "model/connection.php";
        require_once "model/User.php";
        $select=$connection->prepare('SELECT * FROM users WHERE ID=?');
        $select->execute([$ID]);
        $select->setFetchMode(PDO::FETCH_CLASS,'User');

        $User=$select->fetch();




        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(!empty($_POST['name'])){
                $ID=$_POST['ID'];
                $name=$_POST['name'];
                $Job=$_POST['Job'];
                $Image=$_POST['Image'];
                $Facebook=$_POST['Facebook'];
                $Twitter=$_POST['Twitter'];
                $Github=$_POST['Github'];
                $Articles=$_POST['Articles'];
                $Followers=$_POST['Followers'];
                $Rating=$_POST['Rating'];
                $update=$connection->prepare('UPDATE users SET Name=?, Job=?, Image=?, Facebook=?, Twitter=?, Github=?, Articles=?, Followers=?, Rating=? WHERE ID=?');
                $update->execute([$name, $Job, $Image, $Facebook, $Twitter, $Github, $Articles, $Followers, $Rating, $ID]);
                header('Location: index.php');
            }else{
                echo "<p style='text-align:center;color:white;'>". "Some data are missing!</p>";
            }
        }else{
            echo "<p style='text-align:center;color:white;'>". "fill form first please!</p>";
        }
        $insert=$connection
    ?>
<h1><p style="text-align:center;color:white;">Update Profile</p></h1>
<form method="post" action="<?=$_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="<?=$User->Name?>"><br>
    <label for="Job">Job</label>  <br>  
    <input type="text" id="Job" name="Job" value="<?=$User->Job?>"><br>
    <label for="Image">Profile Picture</label>
    <input type="text" id="Image" name="Image" value="<?=$User->Image?>"><br>
    <label for="Facebook">Facebook</label>
    <input type="text" id="Facebook" name="Facebook" value="<?=$User->Facebook?>"><br>
    <label for="Twitter">Twitter</label>
    <input type="text" id="Twitter" name="Twitter" value="<?=$User->Twitter?>"><br>
    <label for="Github">Github</label>
    <input type="text" id="Github" name="Github" value="<?=$User->Github?>"><br>
    <label for="Articles">Articles</label>
    <input type="text" id="Articles" name="Articles" value="<?=$User->Articles?>"><br>
    <label for="Followers">Followers</label>
    <input type="text" id="Followers" name="Followers" value="<?=$User->Followers?>"><br>
    <label for="Rating">Rating</label>
    <input type="text" id="Rating" name="Rating" value="<?=$User->Rating?>"><br>
    <input type="hidden" name="ID" value="<?=$User->ID?>">
    <div class="center">
    <input type="submit" value="Update">
    </div>
    </form>
</body>
</html>