<?php
require_once('config.php');
$username = $_POST['username'];
$password= $_POST['password'];
$select = "SELECT * FROM users WHERE username = '$username' and	password = '$password' ";
$query = mysqli_query($dbconnect,$select);
$row = mysqli_fetch_array($query);
if($row)
{
    echo 'good';
}
else
{
    echo 'bad';
}
?>