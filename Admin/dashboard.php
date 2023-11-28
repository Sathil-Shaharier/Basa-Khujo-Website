<?php 
    $pageTitle = 'Dashboard';
    include 'header.php';
    include 'connect.php';
    include 'functions/functions.php'; 
     ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-download fa-sm text-white-50"></i>
                    Generate Report
                </a>
            </div>

            <!-- Cancel Reservation Button Submitted -->
            

            <!-- Content Row -->
            <div class="row">

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Users
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo countItems("id","user_signup_info")?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="bs bs-boy fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Drivers
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo countItems("id","user_signup_info")?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="bs bs-scissors-1 fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Reservations Tables -->
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

    <!-- Reservations Tables -->
    <div class="card shadow mb-4">
                <div class="card-header tab" style="padding: 0px !important;background: #36b9cc!important">
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
                                            TItle
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
                                                        FROM user_post r
                                    
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
                                                        echo $row['title'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['location'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['roomNumber'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['baths'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['feet'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['cost'];
                                                    echo "</td>";
                                                    echo "<td>";
                                                        echo $row['description'];
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
        
      
    <div class="credit">created by <span> Basha Khujo designer </span> | all rights reserved! </div>

</div>

</section>

<!-- footer section ends -->
</body>

</html>