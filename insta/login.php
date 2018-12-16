<?php 
$username = filter_input(INPUT_POST, 'username');
 $password = filter_input(INPUT_POST, 'password');
$host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "instagram";
    
    // Create connection
    $link = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if(!empty($_POST['username']) && !empty($_POST['password']))
{
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    $checklogin = mysqli_query($link, "SELECT * FROM registration WHERE username = '".     
    $username."' AND password = '".$password."'");


    if(mysqli_num_rows($checklogin) == 1)
    {
       
    header('Location: http://127.0.0.1/insta/index.html');

    }
}
?>