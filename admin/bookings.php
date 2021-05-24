<?php 
include "../includes/db.php";
include"includes/admin_header.php"; ?>

    <div id="wrapper">
        
        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>
        

<?php
if (isset($_POST['approved'])) {
    $status = "Ticket Approved";
    $id = $_POST['id'];

    $query = "UPDATE `orders` SET `status` = '$status' where `order_id` = '$id' "; 

    $approve_ticket = mysqli_query($connection,$query);

    if ($approve_ticket == TRUE) {
        echo "Ticked Appreved Successfully ";
    }
}
if (isset($_POST['rejected'])) {
    $status = "Ticket Cancelled";
    $id = $_POST['id'];

    $query = "UPDATE `orders` SET `status` = '$status' where `order_id` = '$id' "; 

    $cancel_ticket = mysqli_query($connection,$query);

    if ($cancel_ticket == TRUE) {
      echo "Ticket cancelled sucessfully";
    }
}

?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcone To Admin
                            <small>Author</small>
                        </h1>


                        <table class="table table-bordered table-hover"> 
                                <thead>
                                    <tr>
                                        <th>Order_Id</th>
                                        <th>Bus_Id</th>
                                        <th>User_Id</th>
                                        <th>User_name</th>
                                        <th>User Age</th>
                                        <th>Source And Destination</th>
                                        <th>Date</th>
                                        <th>Cost</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>


                                    <?php 

                                        $query = "SELECT *  FROM  orders";
                                        $select_orders = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_orders)) {
                                            $order_id = $row['order_id'];
                                            $bus_id = $row['bus_id'];
                                            $user_id = $row['user_id'];
                                            $user_name = $row['user_name'];
                                            $user_age = $row['user_age'];
                                            $source = $row['source'];
                                            $destination = $row['destination'];
                                            $date = $row['date'];
                                            $cost = $row['cost'];
                                            $status = $row['status'];

                                        
                                        if ($select_orders == TRUE) {
                                            # code...

                                              ?>
                                    <tr>
                                        <td><?php echo $order_id ?></td>
                                        <td><?php echo $bus_id ?></td>
                                        <td><?php echo $user_id?></td>
                                        <td><?php echo $user_name ?></td>
                                        <td><?php echo $user_age ?></td>
                                        <td><?php echo $source . " To ". $destination?></td>
                                        <td><?php echo $date ?></td>
                                        <td><?php echo $cost ?></td>
                                        <td style="color: green;"><?php echo $status ?></td>
                                       <td><form method="post" action="">
                     <input type="hidden" name="id" value="<?php echo $row['order_id']; ?>">
                     <button type="submit" name="approved" class="btn btn-primary">Approved</button> 
                      <button type="submit" name="rejected" class="btn btn-primary">Canceled</button> 


                                       </form></td>
                                    </tr>
                                    <?php } }?>
                                </tbody>
                                </table>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php include"includes/admin_footer.php"; ?>
