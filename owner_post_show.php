<?php
    $dsn = 'mysql:host=localhost;dbname=basha-khujo';
	$user = 'root';
	$pass = '';
	$option = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);
	try
	{
		$con = new PDO($dsn,$user,$pass,$option);
		$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//echo 'Good Very Good !';
	}
	catch(PDOException $ex)
	{
		echo "Failed to connect with database ! ".$ex->getMessage();
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		
		<meta charset="utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  		<title><?php echo $pageTitle ?></title>

  		<!-- FONTS FILE -->
  		<link href="http://localhost/cShare/css/all.min.css" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  		<!-- Nunito FONT FAMILY FILE -->
  		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  		<!-- CSS FILES -->
  		<link href="css/sb-admin-2.css" rel="stylesheet">
  		<link href="css/main.css" rel="stylesheet">
		
	</head>

	<body id="page-top">

    <div class="card shadow mb-4">
                    <button class="tablinks" onclick="openTab(event, 'All')">
                        Users Post
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered tabcontent" id="Upcoming" style="display:table" width="100%" cellspacing="0">
                            <thead>
                                    <tr>
                                        <th>
                                            House Type
                                        </th>
                                        <th>
                                            Location
                                        </th>
                                        <th>
                                            Room
                                        </th>
                                        <th>
                                            Bath
                                        </th>
                                        <th>
                                            Space
                                        </th>
                                        <th>
                                            Cost
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Accept
                                        </th>
                                        <th>
                                            Delete
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                        $stmt = $con->prepare("SELECT * 
                                                        FROM basha_info r
                                    
                                                        ");
                                        $stmt->execute();
                                        $rows = $stmt->fetchAll();
                                        $count = $stmt->rowCount();
                                        
                                        if($count == 0)
                                        {

                                            echo "<tr>";
                                                echo "<td colspan='8' style='text-align:center;'>";
                                                    echo "List of your upcoming reservations will be presented here";
                                                echo "</td>";
                                            echo "</tr>";
                                        }
                                        else
                                        {

                                            foreach($rows as $row)
                                            {
                                                echo "<tr>";
                                                    echo "<td>";
                                                        echo $row['basha_title'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['basha_location'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['basha_room'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['basha_bath'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['basha_space'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['basha_cost'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['description'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo '<img  src="../backend_file/images/'.$row['basha_images'].' " width="80px" height="80px">';
                                                    echo "</td>";
                                                    
                                                    
                                                    echo "<td>";
                                                        
                                                    $accept_data = "cancel_reservation_".$row["id"];
                                                    ?>
                                                    <ul class="list-inline m-0">

                                                        <!-- Submit BUTTON -->

                                                        <li class="list-inline-item" data-toggle="tooltip" title="Accept Reservation">
                                                            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#<?php echo $accept_data; ?>" data-placement="top">
                                                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                                            </button>

                                                            <!-- Submit MODAL -->
                                                            <div class="modal fade" id="<?php echo $accept_data; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $accept_data; ?>" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <form action = "dashboard.php" method = "POST">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Accept Reservation</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Are you sure you want to accept this reservation?</p>
                                                                                <input type="hidden" value = "<?php echo $row['id']; ?>" name = "id">
                                                                                <div class="form-group">
                                                    
                                                                                    <textarea class="form-control" name = "reservation_accept" value='Yes'></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                                                <button type="submit" name = "accept_reservation_sbmt"  class="btn btn-danger">Yes, Accept</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </li>

                                                    
                                                    </ul>

                                                    <?php
                                                echo "</td>";
                                                echo "<td>";
                                                    $cancel_data = "accept_reservation_".$row["id"];
                                                    
                                                    ?>
                                                    <ul class="list-inline m-0">

                        

                                                        <!-- CANCEL BUTTON -->

                                                        <li class="list-inline-item" data-toggle="tooltip" title="Cancel Reservation">
                                                            <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#<?php echo $cancel_data; ?>" data-placement="top">
                                                                <i class="fas fa-calendar-times"></i>
                                                            </button>

                                                            <!-- CANCEL MODAL -->
                                                            <div class="modal fade" id="<?php echo $cancel_data; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $cancel_data; ?>" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <form action = "dashboard.php" method = "POST">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title">Cancel Reservation</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Are you sure you want to cancel this reservation?</p>
                                                                                <input type="hidden" value = "<?php echo $row['id']; ?>" name = "id">
                                                                                <div class="form-group">
                                                                                    <label>Tell Us Why?</label>
                                                                                    <textarea class="form-control" name = "reservation_cancellation_reason"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                                                <button type="submit" name = "cancel_reservation_sbmt"  class="btn btn-danger">Yes, Cancel</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>

                                                        </li>
                                                    </ul>

                                                    <?php
                                                echo "</td>";
                                            echo "</tr>";
                                        }
                                  }

                                ?>

                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

            <div class="credit text-center">created by <span> Basha Khujo designer </span> | all rights reserved! </div>

</div>

</section>

<!-- footer section ends -->
</body>

</html>