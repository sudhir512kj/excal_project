<?php
$connection = mysqli_connect('localhost','root','','registration');
if (!$connection){
    die("Database Connection Failed" . mysqli_error());
}
