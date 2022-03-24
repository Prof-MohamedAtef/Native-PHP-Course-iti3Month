<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: url('imgs/flower.jpg');background-size: 1800px 900px">
<?php
require_once "model/User.php";
require_once "model/connection.php";

    
    $select=$connection->prepare('SELECT * FROM users');
    $select->execute();
    $users=$select->fetchAll(
        PDO::FETCH_CLASS,'User'
    );
     //var_dump($users);
    
    

    


?>
<center><table style='margin-top:200px;font-size:25px;border: 1px solid grey;' >
<thead>
            <tr>
                <th style='color: blue; align-text:center; padding:15px;border: 1px solid grey;'>ID</th>
                <th style='color: blue; align-text:center;padding:15px;border: 1px solid grey;'>Name</th>
                <th style='color: blue;align-text:center;padding:15px;border: 1px solid grey;'>Job</th>
                <th style='color: blue;align-text:center;padding:15px;border: 1px solid grey;'>Articles</th>
                <th style='color: blue;align-text:center;padding:15px;border: 1px solid grey;'>Followers</th>
                <th style='color: blue;align-text:center;padding:15px;border: 1px solid grey;'>Ratings</th>
                <th style='color: blue;align-text:center;padding:15px;border: 1px solid grey;'>Actions</th>
            </tr>
        </thead>
        <tbody>
<?php foreach($users as $user):?>
        <!-- echo $user->Name; -->
        
            <tr>
                <td style='color: blue;align-text:center;padding:15px;border: 1px solid grey;'><?= $user->ID?></td>
                <td style='color: blue;align-text:center;padding:15px;border: 1px solid grey;'><?= $user->Name?></td>
                <td style='color: blue;align-text:center;padding:15px;border: 1px solid grey;'><?= $user->Job?></td>
                <td style='color: blue;align-text:center;padding:15px;border: 1px solid grey;'><?= $user->Articles?></td>
                <td style='color: blue;align-text:center;padding:15px;border: 1px solid grey;'><?= $user->Followers?></td>
                <td style='color: blue;align-text:center;padding:15px;border: 1px solid grey;'><?= $user->Rating?></td>
                <td style='color: blue;align-text:center;padding:15px;border: 1px solid grey;'>
                <a href="profile.php?ID=<?= $user->ID?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="green" d="M20.465 14.646c1.398 1.516-.156 3.949-2.146 3.227 1.462-.311 2.47-1.49 2.146-3.227zm-16.148 3.227c1.99.722 3.545-1.71 2.146-3.227.325 1.737-.683 2.916-2.146 3.227zm12.554-13.561c-.282-.764-1.01-1.312-1.871-1.312-1.298 0-2.313 1.244-1.904 2.582 1.111-.395 2.346-1.103 3.775-1.27zm7.129 11.688c0 2.761-2.238 5-5 5-4.039 0-4.156-4.123-7-4.123s-2.961 4.123-7 4.123c-2.762 0-5-2.239-5-5 0-2.135 1.535-4.567 3.941-8.821 1.908-3.372 4.754-1.26 6.815-.585.781.256 1.654.272 2.486 0 2.062-.674 4.908-2.787 6.815.585 2.408 4.254 3.943 6.686 3.943 8.821zm-16 0c0-1.654-1.346-3-3-3s-3 1.346-3 3 1.346 3 3 3 3-1.346 3-3zm5-2c0-.552-.447-1-1-1s-1 .448-1 1 .447 1 1 1 1-.448 1-1zm9 2c0-1.654-1.346-3-3-3s-3 1.346-3 3 1.346 3 3 3 3-1.346 3-3zm-13-13c-.861 0-1.589.548-1.871 1.312 1.429.168 2.664.875 3.775 1.27.409-1.338-.606-2.582-1.904-2.582z"/></svg></a>
                <a href="UpdateProfile.php?ID=<?= $user->ID?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="grey" d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/></svg></a>
                <a href="Delete.php?ID=<?= $user->ID?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="red" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.597 17.954l-4.591-4.55-4.555 4.596-1.405-1.405 4.547-4.592-4.593-4.552 1.405-1.405 4.588 4.543 4.545-4.589 1.416 1.403-4.546 4.587 4.592 4.548-1.403 1.416z"/></svg></a>    
                <a href="InsertProfile.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="blue" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z"/></svg></a>    
            </td>
            </tr>
        
        <?php endforeach;?>

        </tbody>
</table></center>
</body>
</html>