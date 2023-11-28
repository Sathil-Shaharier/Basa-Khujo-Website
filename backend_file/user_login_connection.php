<?php
include("../backend_file/db_connection.php");

$Email = $_POST['Email'];
$Password = $_POST['Pasword'];


$sql = "SELECT user_signup_info.email, user_signup_info.password \n"

    . "FROM user_signup_info\n"

    . "WHERE user_signup_info.email = '$Email' AND user_signup_info.password = '$Password'";

$result = mysqli_query($conn, $sql);
$row_num = mysqli_num_rows($result);
if ($row_num == 1)
    $login_status = "successful";
if ($login_status == "successful") {
    $url = "http://localhost/basha-khujo/real-estate%20website/";
    header("Refresh: 0; URL= $url");
} else {
    echo $login_status;
    $url = "http://localhost/basha-khujo/user_signin.php";
    header("Refresh: 0; URL= $url");
}
