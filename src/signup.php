<?php

 include('../config/database.php');

$fname = $_POST['f_name'];
$lname = $_POST['l_name'];
$email = $_POST['e_mail'];
$passwd = $_POST['passw'];

$sql = "INSERT INTO users (firstname, lastname, email, pasword)
        values('$fname','$lname','$email','$passwd')

";

$res = pg_query($conn, $sql);
if($res){
    echo "user has been created succesfully";
}else{
    echo "Error";
}
?>