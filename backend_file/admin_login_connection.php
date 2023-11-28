<?php
include("../backend_file/db_connection.php");

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT admin_login.username, admin_login.password \n"

    . "FROM admin_login\n"

    . "WHERE admin_login.username = '$username' AND admin_login.password = '$password'";

$result = mysqli_query($conn, $sql);
$row_num = mysqli_num_rows($result);
if ($row_num == 1)
    $login_status = "successful";
if ($login_status == "successful") {
    $url = "http://localhost/basha-khujo/real-estate%20website/";
    header("Refresh: 0; URL= $url");
} else {
    echo $login_status;
    $url = "http://localhost/basha-khujo/Admin/admin_signin_form.php";
    header("Refresh: 0; URL= $url");
}

