<?php
$con= mysqli_connect("localhost","root","","db_login");

if (!$con) {
    echo"Failed to connect";
}else{
    echo"You have successfully connected your database";
}

?>