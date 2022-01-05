<?php
$servername = "localhost";
$username = "id18224878_formdata";
$password = "844832369212345Rofdmopsnjske90i39-.'..'";
$dbname = "id18224878_simple";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
    echo "";
}
else
{
  die("connection failed because".mysqli_connect_server());
}

?>