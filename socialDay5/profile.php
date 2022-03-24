<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="functions/scripts/ScriptProfile.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="ProfileStyle.css" rel="StyleSheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<?php
require_once "model/connection.php";
require_once "model/User.php";
$ID=$_GET['ID'];
$select=$connection->prepare('SELECT * FROM users WHERE ID=?');
$select->execute([$ID]);
$select->setFetchMode(PDO::FETCH_CLASS,'User');
$user=$select->fetch();
//var_dump($user);
?>

<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-3">
        <div class="d-flex align-items-center">
            <div class="image"> <img src="<?=(!empty($user->Image))?$user->Image:"imgs/profile.png";?>" class="rounded" width="180"> </div>
            <div class="ml-3 w-100">
            
                <h4 class="mb-0 mt-0"><?= $user->Name?></h4> <span><?=$user->Job?></span> 
                <div id="container" >
                    <a id="leftThing" href="<?=$user->Facebook?>"><img class="floatImages"  src="imgs/fb.png" width="20px" height="20px"/></a>
                    <a id="content" href="<?=$user->Github?>"><img class="floatImages"  src="imgs/github.png" width="20px" height="20px"/></a>
                    <a id="rightThing" href="<?=$user->Twitter?>"><img class="floatImages"  src="imgs/twitter.png" width="20px" height="20px"/></a>
                    
                    <a id="rightThing" href="UpdateProfile.php?ID=<?= $user->ID?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="grey" d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/></svg></a>
                </div>    
                
                <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">
                    <div class="d-flex flex-column"> <span class="articles">Articles</span> <span class="number1"><?=$user->Articles?></span> </div>
                    <div class="d-flex flex-column"> <span class="followers">Followers</span> <span class="number2"><?=$user->Followers?></span> </div>
                    <div class="d-flex flex-column"> <span class="rating">Rating</span> <span class="number3"><?=$user->Rating?></span> </div>
                </div>
                <div class="button mt-2 d-flex flex-row align-items-center"> <button class="btn btn-sm btn-outline-primary w-100">Chat</button> <button class="btn btn-sm btn-primary w-100 ml-2">Follow</button> </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>