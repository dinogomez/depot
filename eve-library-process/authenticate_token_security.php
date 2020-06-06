<?php
include '../library-process/connection.php';
if ($_SESSION['login']==0)
{
    header("Location: ../../module-landing/landing.php");
    die();
}
// if (isset($_SESSION['username'])) {
//   $temp_username = $_SESSION['username'];
//   $sql = "SELECT token FROM user_token where username='$temp_username'";
//   $result = mysqli_query($conn, $sql);
//
//   if (mysqli_num_rows($result)> 0) {
//
//    $row = mysqli_fetch_array($result);
//    $token = $row['token'];
//
//    if($_SESSION['token'] != $token){
//     echo "<script type='text/javascript'>alert('Error Token');</script>";
//     session_destroy();
//     echo "session token ".$_SESSION['token'];
//     echo "db token".$token;
//    }
//   }
// }

?>
