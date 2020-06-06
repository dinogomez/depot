<?php

include_once 'connection.php';

$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
$middlename = mysqli_real_escape_string($conn,$_POST['middlename']);
$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$date = mysqli_real_escape_string($conn,$_POST['date']);
$date=date('Y-m-d',strtotime($date));
$purpose = mysqli_real_escape_string($conn,$_POST['purpose']);
$idgiven = mysqli_real_escape_string($conn,$_POST['idgiven']);
$contactnum = mysqli_real_escape_string($conn,$_POST['contactnum']);
$generatekey=mysqli_real_escape_string($conn,$_POST['generatekey']);


$sql= "INSERT INTO guest_register (firstname,middlename,lastname,email,date,purpose,idgiven,contactnum,guestcode)
VALUES ('$firstname', '$middlename', '$lastname', '$email', '$date', '$purpose', '$idgiven', '$contactnum', '$generatekey')";

$result = mysqli_query($conn,$sql);

$_SESSION['isRegistered'] = 0;
header("Location:../index.php");


 ?>
