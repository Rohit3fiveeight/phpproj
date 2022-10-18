<?php
$host="localhost";
$user="root";
$password="";
$db="loginform";
mysql_connect($host,$user,$password);
mysql_select_db($db);
 if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * from loginform WHERE username='".$uname."' AND password='".$password."'limit 1";
    $result=mysql_query($sql);
    if(mysql_num_rows($result==1)){
        echo " Logged in succesfully";
        exit();
    }
    else{
        echo "wrong password";
        exit();

    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page using Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link href="index.css" rel="stylesheet">
     
</head>
<body>
    <form method="GET" action="#">
    <label> Name :</label>
    <input type="text" name="username" placeholder="Enter your username">
    <br>
    <label>Password:</label>
    <input type="text" name="password" placeholder="Enter your password">
    <br>
    <button>Submit </button>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>