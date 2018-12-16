<?php
$number = filter_input(INPUT_POST, 'number');
 $name = filter_input(INPUT_POST, 'name');
$username = filter_input(INPUT_POST, 'username');
 $password = filter_input(INPUT_POST, 'password');
 
 


if(!empty($number)){
if(!empty($name)){
if(!empty($password)){
if(!empty($username)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "instagram";
    
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
    $sql = "INSERT INTO registration (number, name, username, password)
    values('$number','$name','$username','$password')";
    if ($conn->query($sql)){
        header('Location:http://127.0.0.1/insta/profile.html');
    //echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."<br>". $conn->error;
  }
    $conn->close();
}
}
else{
    echo "Password should not be empty";
    die();
}
    
}
else{
    echo "Username should not be empty";
    die();
}
    
}
else{
    echo "Name should not be empty";
    die();
}
    
}
else{
    echo "Number should not be empty";
    die();
}

?>