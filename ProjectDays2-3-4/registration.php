<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body style="background-image: url('redwood.jpg');background-size: 2100px 1800px">
<div>
    <form method="post" action="data.php" enctype="multipart/form-data">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your first name.."><br>
    <label for="lname">Last Name</label>    
    <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>
    <label for="address">Address</label>  <br>  
    <textarea id="address" name="address" placeholder="You address.."></textarea><br>
    <label for="country">Country</label>    

    
    <select name="countries" id="countries">
        <optionselected="selected">Choose Country</option>
        <?php
        $countries = array("Egypt", "Sudan", "Turkey", "Italy", "Morrocco","Jordan","Saudi Arabia");
        foreach($countries as $item){
            echo "<option value=".strtolower($item).">$item</option>";
        }
        ?>
    </select><br>
    
    <label for="gender">Gender</label>   
    
    <div class="gender">
        <input type="radio" name="gender" value="male">
        <label for="male">male</label>   
        <input type="radio" name="gender" value="female" style="margin-left:50%;">
        <label for="female">female</label>   
    </div>

    <label for="skills">Skills</label>   
    
    <div class="gender">
        <input type="checkbox" id="php" name="skills[]" value="PHP">
        <label for="php">PHP</label>
        <input type="checkbox" id="j2se" checked="true" name="skills[]" value="J2SE" style="margin-left:50%;">
        <label for="php">J2SE</label><br>
        <input type="checkbox" id="MySQL" checked="true" name="skills[]" value="MySQL">
        <label for="php">MySQL</label>
        <input type="checkbox" id="postgre" name="skills[]" value="postgre" style="margin-left:50%;">
        <label for="php">PostgreeSQL</label>
    </div>

    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="enter username.."><br>

    <label for="password">Password</label>
    <input type="password" id="myPassword" name="password" placeholder="enter password.."><br>

    <label for="department">Department</label>
    <input type="text" id="department" name="department" value="Open Source" readonly="readonly"><br>
    
    <div style="text-align: center;">
        <label for="image">Your Image</label>
        <input name="image" type=file oninput="pic.src=window.URL.createObjectURL(this.files[0])">
    </div>
    <center><img id="pic" src="avatar.png" /></center>
    <div class="center">
        <input type="submit" value="Reset">
        <input type="submit" value="Submit">
    </div>
    </form>
</div>
</body>
</html>