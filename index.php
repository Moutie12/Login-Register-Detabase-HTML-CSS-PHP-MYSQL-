<?php
include_once('connect.php');
if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM registre WHERE username = '$username'  AND password = '$password' " ;
  $user = mysqli_query($connect,$sql) ;
  $row = mysqli_fetch_assoc($user);
  if(empty($row['username']))
  {
    echo "username or password incoorect"   ;
    
  }else{
    session_start() ;
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'] ;
    $_SESSION['id'] = $row['id'] ;
    $_SESSION['email'] = $row['email'] ;
    $_SESSION['birthday'] = $row['birthday'] ;
    $_SESSION['gender'] = $row['gender'] ;
    header('location:welcome.php');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LogIN</title>
    <link href="style.css" rel="stylesheet" />
  </head>
  <body>
    <div class="tout">
      <div id="titre">
        <h1 id="log">Log In</h1>
        <h2 id="lets">Let's enjoy</h2>
      </div>
      <div class="details">
        <form METHOD="POST">
        <input type="username" placeholder="username" id="username" name="username"/><br />
        <input type="password" placeholder="password" id="password" name="password"/><br />
        <button id="submit" name="submit">Submit</button>
        </form>
      </div>
      <p id="or">Or</p>
      <button id="registre" onclick="window.location.href = 'http://localhost/server/registre.php';">Registre</button>
    </div>
  </body>
</html>
