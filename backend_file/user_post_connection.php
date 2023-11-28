<?php
include("../backend_file/db_connection.php");

if(isset($_POST['submit']))
{
    $title = $_POST['title'];
$cost = $_POST['cost'];
$roomNumber = $_POST['roomNumber'];
$baths = $_POST['baths'];
$feets = $_POST['feets'];
$location = $_POST['location'];
$description = $_POST['description'];
            $Singin_status = "<br>Unsuccessful";


$sql1 = "INSERT INTO user_post(user_post.title, user_post.cost, user_post.roomNumber, user_post.baths,user_post.feet,user_post.location,user_post.description)
    VALUES ('$title', '$cost', '$roomNumber', '$baths', '$feets', '$location','$description')";

			$sql = "SELECT user_post.title, user_post.cost
    FROM user_post
    WHERE user_post.title = '$title' AND user_post.cost = '$cost'";

$result = mysqli_query($conn, $sql1);
$result = mysqli_query($conn, $sql);
$row_num = mysqli_num_rows($result);

if ($row_num == 1)
    $Singin_status = "successful";
if ($Singin_status == "successful") {
    $url = "http://localhost/basha-khujo/basha-khujo-website/";
    header("Refresh: 0; URL= $url");
} else {
    echo $Singin_status;
    $url = "http://localhost/basha-khujo/owner/create_post.php";
    header("Refresh: 0; URL= $url");
}
			
		
}
?>