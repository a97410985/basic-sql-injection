<?php
$userName = $_POST['userName'];
$password = $_POST['password'];
//echo $userName.'<br>';
//echo $password.'<br>';

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysqli_query($conn, "SET NAMES 'utf8");
mysqli_query($conn, "USE test;");

$userPassSQL = "SELECT * FROM users WHERE name='{$userName}' and password='{$password}'";
echo "your sql : ".$userPassSQL."<br>";
$result = mysqli_query($conn, $userPassSQL);
$matchNum = count($result->fetch_all());
if ($matchNum >= 1) {
    echo "登陸成功";
}
else {
    echo "登陸失敗";
}
