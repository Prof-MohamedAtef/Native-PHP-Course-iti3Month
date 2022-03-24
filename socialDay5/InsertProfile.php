<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link href="style.css" rel="StyleSheet"/>
</head>
<body style="background-image: url('imgs/redwood.jpg');background-size: 2100px 1400px">
<h1><p style="text-align:center;color:white;">Insert New Profile</p></h1>
<form method="post" action="<?=$_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Enter Your name.."><br>
    
    <label for="Job">Job</label>  <br>  
    <textarea id="Job" name="Job" placeholder="Enter You Job.."></textarea><br>
    
    <label for="Image">Profile Picture</label>
    <input type="text" id="Image" name="Image" placeholder="enter image url.."><br>

    <label for="Facebook">Facebook</label>
    <input type="text" id="Facebook" name="Facebook" placeholder="enter Facebook Url.."><br>
    <label for="Twitter">Twitter</label>
    <input type="text" id="Twitter" name="Twitter" placeholder="enter Twitter Url.."><br>
    <label for="Github">Github</label>
    <input type="text" id="Github" name="Github" placeholder="enter Github Url.."><br>

    <label for="Articles">Articles</label>
    <input type="text" id="Articles" name="Articles" placeholder="Add Articles Number.."><br>
    <label for="Followers">Followers</label>
    <input type="text" id="Followers" name="Followers" placeholder="Add Followers Number.."><br>
    <label for="Rating">Rating</label>
    <input type="text" id="Rating" name="Rating" placeholder="Add Rating value.."><br>

    <div class="center">
        <input type="submit" value="Insert">
        
    </div>
    </form>
    <?php
        require_once "model/connection.php";
        require_once "model/User.php";

        if($_SERVER['REQUEST_METHOD']=='POST'){
            if(!empty($_POST['name'])){
                $name=$_POST['name'];
                $Job=$_POST['Job'];
                $Image=$_POST['Image'];
                $Facebook=$_POST['Facebook'];
                $Twitter=$_POST['Twitter'];
                $Github=$_POST['Github'];
                $Articles=$_POST['Articles'];
                $Followers=$_POST['Followers'];
                $Rating=$_POST['Rating'];
                $insert=$connection->prepare('INSERT INTO `users` ( `Name`, `Job`, `Image`, `Facebook`, `Twitter`, `Github`, `Articles`, `Followers`, `Rating`) VALUES (?,?,?,?,?,?,?,?,?)');
                $insert->execute([$name, $Job, $Image, $Facebook, $Twitter, $Github, $Articles, $Followers, $Rating]);
                header('Location: index.php');
            }else{
                echo "<p style='text-align:center;color:white;'>". "Some data are missing!</p>";
            }
        }else{
            echo "<p style='text-align:center;color:white;'>". "fill form first please!</p>";
        }
        $insert=$connection
    ?>
</body>
</html>