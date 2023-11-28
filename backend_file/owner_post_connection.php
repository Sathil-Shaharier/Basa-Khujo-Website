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
	$extension=array('jpeg','jpg','png','gif');
	foreach ($_FILES['image']['tmp_name'] as $key => $value) {
		$filename=$_FILES['image']['name'][$key];
		$filename_tmp=$_FILES['image']['tmp_name'][$key];
		echo '<br>';
		$ext=pathinfo($filename,PATHINFO_EXTENSION);

		$finalimg='';
		if(in_array($ext,$extension))
		{
			if(!file_exists('images/'.$filename))
			{
			move_uploaded_file($filename_tmp, 'images/'.$filename);
			$finalimg=$filename;
			}else
			{
				 $filename=str_replace('.','-',basename($filename,$ext));
				 $newfilename=$filename.time().".".$ext;
				 move_uploaded_file($filename_tmp, 'images/'.$newfilename);
				 $finalimg=$newfilename;
			}
			
			//insert
            $Singin_status = "<br>Unsuccessful";


$sql1 = "INSERT INTO basha_info(basha_info.basha_title, basha_info.basha_cost, basha_info.basha_room, basha_info.basha_bath,basha_info.basha_space,basha_info.basha_location,basha_info.basha_images,basha_info.description)
    VALUES ('$title', '$cost', '$roomNumber', '$baths', '$feets', '$location', '$finalimg','$description')";

			$sql = "SELECT basha_info.basha_title, basha_info.basha_cost
    FROM basha_info
    WHERE basha_info.basha_title = '$title' AND basha_info.basha_cost = '$cost'";

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
			
		}else
		{
			//display error
		}
	}
}
?>