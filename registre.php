<?php
include_once('connect.php');
if(isset($_POST['registre1']))
{
    $username = $_POST['tt_ii'] ;
    $email = $_POST['tt_ii1'] ;
    $password = $_POST['tt_ii2'] ;
    $day = $_POST['pp_ert'];
    $month = $_POST['pp_ert1'];
    $year = $_POST['pp_ert2'];
    $birthday = $day."/".$month."/".$year ;
    $gee = $_POST['gender'] ;
    if($username !="" && $password !="" && $email !="" && $gee!="Choose")
    {
    $sql = "INSERT INTO registre (id,username,password,email,gender,birthday) VALUES (NULL,'$username','$password','$email','$gee','$birthday')" ;
    mysqli_query($connect,$sql) ;
    header('location:index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="style1.css" rel="stylesheet">
</head>
<body>
    <div class="tout">
        <h1 id="registre">Register</h1>
        <h2 id="easy">It's very easy</h2>
        <form action="" METHOD="POST" class="details">
        <?php
        if(isset($_POST['tt_ii']))
        {
            if(empty($_POST['tt_ii']))
            {
                echo "<p id='error'>" . "Please Enter A Username" . "</p>" ;
            }
        }
        ?>
        <input type="username" placeholder="username" id="tt_ii" name="tt_ii"><br>
        <?php
        if(isset($_POST['tt_ii1']))
        {
            if(empty($_POST['tt_ii1']))
            {
                echo "<p id='error'>" . "Please Enter An Email" . "</p>" ;
            }
        }
        ?>
        <input type="email" placeholder="mobile number or email" id="tt_ii" name="tt_ii1"><br>
        <?php
        if(isset($_POST['tt_ii2']))
        {
            if(empty($_POST['tt_ii2']))
            {
                echo "<p id='error'>" . "Please Enter A Password" . "</p>" ;
            }
        }
        ?>
        <input type="password" placeholder="new password" id="tt_ii" name="tt_ii2"><br>
    <div>

        <p id="qqs">Gender :</p>
        <select id="ttgg_ftr" name="gender"><option value="Male" selectioned>Male</option><option value="Female">Female</option></select>
        <br>
        <div id="birthday">
            Birthday : 
            <select id="pp_ert" name="pp_ert">
                <option value="1" >1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
            </select>
            <select id="pp_ert" name="pp_ert1">
                <option value="1">Jan</option><option value="2">Fev</option><option value="3">Mar</option><option value="4">Avr</option><option value="5">Mai</option><option value="6">Juin</option><option value="7">Juill</option><option value="8">Aout</option><option value="9">Semp</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
            </select>
            <select id="pp_ert" name="pp_ert2">
                <option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option>
            </select>
        </div><br>
    </div>
        <button id="registre1" name="registre1">Registre</button>
        </form>


    </div>
    
</body>
</html>