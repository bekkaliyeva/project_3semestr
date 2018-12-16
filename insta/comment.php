<?php
$username = filter_input(INPUT_POST, 'username');
$comment = filter_input(INPUT_POST,'comment')
$conn = mysqli_connect('localhost','root','','instagram');
if(!$conn){
    echo "Error";
}
?>