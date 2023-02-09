<!DOCTYPE html>
<?php 
 if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if($user=="rafael" && $pass=="fernandez"){
        echo("Username and Password is correct");
        }else{
            echo("please enter again the correct data!");
     } 
    }
     ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <table align="center">
        <tr>
            <td>Username:</td>
            <td><input type="text" name="username" placeholder="Enter your username">
        </tr>
        <tr>
            <td>Paswword:</td>
            <td><input type="password" placeholder="Enter your passowrd"></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="submit"></td>
        </tr>
            
    </table>
</body>
</html>