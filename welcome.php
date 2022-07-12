<?php
include_once('connect.php') ;
session_start() ;
if(isset($_SESSION['username'])&& isset($_SESSION['password']))
{
echo "Bonjour Admin" . "<br>" ;
echo "id : ". $_SESSION['id'] . "<br>" ;
echo "Nom : " . $_SESSION['username'] ."<br>";
echo "Password : " . $_SESSION['password'] . "<br>";
echo "Email : " . $_SESSION['email'] ."<br>";
echo "Gender : " .$_SESSION['gender'] . "<br>";
echo "Birthday" . $_SESSION['birthday'] ."<br>";
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Welcome User</title>
    <link href='style1.css' rel='stylesheet'>
</head>
<body>
    <form METHOD='POST' action='signout.php'>
    <button id='signout' name='signout'>Sign Out</button>
</form>
</body>    
</html> " ;
}else{
    echo "SORRY , You haven't access to this page" ;
}
?>