

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
                <?php
                $stmt = $con->prepare("SELECT * FROM user_signup_info");
                $stmt->execute();
                $rows_cars = $stmt->fetchAll();

            ?>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Drivers</h6>
                </div>
                <div class="card-body">
                   
                    <!-- Cars Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    
                                    <th>User Name</th>
                                    <th>Nid</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>Manage</th>
                                </tr>
                            </thead> 
                            <tbody>
                                <?php
                                foreach($rows_cars as $car)
                                {
                                    echo "<tr>";
                                        echo "<td>";
                                            echo $car['FirstName'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $car['LastName'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $car['Email'];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $car['Mobile_Number'];
                                        echo "</td>";
                                        
                                        echo "<td>";
                                            $delete_data = "delete_".$car["id"];
                                            ?>
                                            <!-- DELETE BUTTON -->
                                            <ul>
                                                <li class="list-inline-item" data-toggle="tooltip" title="Edit">
                                                    <button class="btn btn-success btn-sm rounded-0" type="button" data-toggle="modal" ><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item" data-toggle="tooltip" title="Delete">
                                                    <button class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="modal" data-target="#<?php echo $delete_data; ?>" data-placement="top"><i class="fa fa-trash"></i></button>
                                                    <!-- Delete Modal -->
                                                    <div class="modal fade" id="<?php echo $delete_data; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $delete_data; ?>" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                        <form action = "drivers.php" method = "POST">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Car</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this Car?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                    <button type="submit" name="delete_type_sbmt" data-id = "<?php echo $car['id']; ?>" class="btn btn-danger delete_car_bttn">Delete</button>
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
                                ?>
                            </tbody>
                        </table>
                    </div>
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