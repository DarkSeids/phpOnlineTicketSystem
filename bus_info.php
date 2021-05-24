<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
    <!-- Navigation -->
    <?php include "includes/navigation.php"; ?>

    <?php  

if (!isset($_SESSION['s_role'])) {
    header("Location: includes/login.php");

}





?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php 
                  

                    if(isset($_GET['bus_id'])) {
                        $selected_bus = $_GET['bus_id'];
                    }

                    $query = "SELECT *  FROM  posts WHERE post_id = $selected_bus ";

                    $select_all_bus_query = mysqli_query($connection,$query);

                    while($row = mysqli_fetch_assoc($select_all_bus_query)) {
                        $post_id = $row['post_id'];
                        $bus_title = $row['post_title'];
                        $bus_author = $row['post_author'];
                        $bus_date = $row['post_date'];
                        $bus_image = $row['post_image'];
                        $bus_content = $row['post_content'];
                        $bus_id = $row['post_id'];
                        $bus_via = $row['post_via'];
                        $times = $row['post_via_time'];
                        $bus_cat = $row['post_category_id'];
                        $available_seats = $row['available_seats'];
                        $max_seats = $row['max_seats'];
                      $bus_stations = explode(" ",$bus_via);
                      $bus_times = explode(" ",$times);
                        ?>

                        <!-- First Blog Post -->
                        <h2>
                            <a href="bus_info.php?bus_id=<?php echo $post_id; ?>"><?php echo $bus_title; ?></a>
                        </h2>
                        <p class="lead">
                            by <a href="index.php"><?php echo $bus_author; ?></a>
                        </p>
                        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $bus_date; ?></p>
                        <hr>
                        <img class="img-responsive" src="images/<?php echo $bus_image; ?>" alt="">

                        <hr>
                        <p><?php echo $bus_content ?></p>
                        
                        <div class="jumbotron jumb">
                            <h2><b>Seat Matrix:</b></h2>
                            <h5>Max:         <?php echo $max_seats ?></h5>
                            <h5>Available:   <?php echo $available_seats ?></h5>


                            <h2><b>Stations Covered:</b></h2>
                            <table class="table table-striped" style="width: 100%; margin-top:-20px;">
                              <thead>
                                  <th><u>Station</u></th>
                                  <th><u>Time</u> </th>
                              </thead>
                              <tbody>
                                <?php

                                    for ($i=0; $i < sizeof($bus_stations); $i++) { ?>
                                        <tr>
                                          <td><?php echo $bus_stations[$i]; ?></td>
                                          <td><?php echo $bus_times[$i]; ?></td>
                                        </tr> <?php 
                                    }

                                ?>
                                <br>
                              </tbody>
                            </table>
                        </div>


                         <?php

                        if (isset($_SESSION['s_id'])) {
                            # code...

                    

                        ?>


                        <div class="jumbotron">
                            <div class="container-fluid">
                                <h2>Enter Details:</h2>

                                <form action="" method="post" class="form-horizontal">

                                    <select name="passenger_count" style="margin-bottom: 15px;margin-top: 15px;">
                                        <option value="0">Ticket Count</option>
                                        <?php
                                            for ($i=1; $i <= $available_seats; $i++) { ?>
                                                <option value="<?php echo $i ?>"><?php echo $i ?></option> <?php
                                            }

                                        ?>
                                    </select>
                                    <button class="btn-xs btn-primary" style="margin-left: 5px;">GO</button>

                                </form>

                                <form action="bus_info.php?bus_id=<?php echo $selected_bus ?>&count=<?php echo $_POST['passenger_count'] ?>" method="post" class="form-horizontal">


        <div class="form-group">
         <label class="control-label col-sm-2" for="email">Source:</label>
         <div class="col-sm-10">
        <select class="form-control" name="source">
         <option value="" style="">Source</option>

                 <?php 

               $query = "SELECT post_source FROM posts WHERE post_id = $selected_bus";
              $select_category = mysqli_query($connection,$query);

              if (!$select_category) {
                die("Query Failed" . mysqli_error($connection));
            }

            while ($row = mysqli_fetch_assoc($select_category)) {
                $post_source = $row['post_source'];
            
                echo "<option value='$post_source'>$post_source</option>";

            }

            ?>  </select>
                                <!--<input type="text" class="form-control" id="email" placeholder="Source" name="source"> -->
                  </div>
                 </div>
                                   

                <div class="form-group">
                <label class="control-label col-sm-2" for="email">Destination:</label>
                <div class="col-sm-10">
             <select class="form-control" name="destination">
            <option value="" style="">Destination</option>

                 <?php 

               $query = "SELECT post_destination FROM posts WHERE post_id = $selected_bus";
              $select_category = mysqli_query($connection,$query);

              if (!$select_category) {
                die("Query Failed" . mysqli_error($connection));
            }

            while ($row = mysqli_fetch_assoc($select_category)) {
                $post_destination = $row['post_destination'];
             echo "<option value='$post_destination'>$post_destination</option>";

            }

            ?>  </select>
                                       <!--     <input type="text" class="form-control" id="email" placeholder="Destination" name="destination"> -->
                </div>
             </div>

                                <?php

                                if (isset($_POST['passenger_count'])) {
                                    $count = $_POST['passenger_count'];
                                    //echo "<h1>$count</h1>";

                                    for ($i=0; $i < $count; $i++) { 

                                        ?>
                                        <h6><?php echo "Passenger "; echo $i+1;?></h6>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="email">Name:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="email" placeholder="Name" name="name<?php echo "$i" ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" for="email">Age:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="email" placeholder="Age" name="age<?php echo "$i" ?>">
                                            </div>
                                        </div>
                                        <?php
                                    }

                                }

                                ?>

                                <button class="btn btn-primary" name="book" style="margin-left: 40%; margin-top: 15px;">Book Tickets</button>

                                </form>

                                <?php
                                 $status = 'pending';
                                if (isset($_POST['book'])) {
                                    //echo "<h1>hello</h1>";
                                    if (isset($_GET['count'])) {
                                        $count = $_GET['count'];
                                    }
                                    $source = $_POST['source'];
                                    $destination = $_POST['destination'];
                                    $cost = 500;
                                   

                                    for ($i=0; $i < sizeof($bus_stations); $i++) { 

                                        if($bus_stations[$i]==$source) {
                                            //echo $bus_stations[$i];
                                            for ($j=$i; $j < sizeof($bus_stations); $j++) { 
                                                //echo $bus_stations[$j];
                                                $k=$j+1;
                                                $begin = $bus_stations[$j];
                                                $inter = $bus_stations[$k];
                                                $query_new = "SELECT * FROM cost WHERE start='$begin' AND stopage='$inter' AND category=$bus_cat ";

                                                $get_cost = mysqli_query($connection,$query_new);
                                                while($row = mysqli_fetch_assoc($get_cost)) {
                                                      $station_cost = $row['cost'];
                                                      echo $station_cost;
                                                      $cost += $station_cost;
                                                   }
                                                   

                                                   if($bus_stations[$k]==$destination)
                                                    break;
                                            }
                                            break;
                                        }
                                    }
                                    //echo $cost;


                                    // $query = "INSERT INTO orders(bus_id,user_id,user_name,user_age,source,destination,date) VALUES($selected_bus, $_SESSION['s_username'],$source,$destination,now())";

                                    $arr = array(); 
                                    $arr1 = array();
                                    for ($i=0; $i < $count; $i++) {
                                        //echo "<h1>hello</h1>";
                                        $name_query = 'name'.$i ;
                                        $age_query = 'age'.$i ;
                                        //echo $what;
                                        array_push($arr,$_POST[$name_query]);
                                        array_push($arr1,$_POST[$age_query]);
                                    }
                                    for ($i=0; $i < $count; $i++) { 

                                        $curr_name = $arr[$i];
                                        $curr_age = $arr1[$i];
                                        $user_id = $_SESSION['s_id'];


                                        $query = "INSERT INTO orders(bus_id, user_id, user_name, user_age, source, destination,date,cost, status) VALUES($selected_bus, $user_id , '$curr_name', '$curr_age', '$source', '$destination', now(),$cost, '".$status."')";

                                        $query_seat_update = "UPDATE posts SET available_seats = $available_seats - $count WHERE post_id = $bus_id";

                                        //echo $arr[$i];
                                        //echo $_SESSION['s_id'];
                                        $update_seats_available = mysqli_query($connection,$query_seat_update);
                                        $booking_query = mysqli_query($connection,$query);
                                        if (!$booking_query) {
                                            die("Query Failed" . mysqli_error($connection));
                                        }
                                    }
                                    header("Location: profile.php");
                                }

                                ?>
                            </div>
                        </div>
                        <?php } ?>

                        <hr>
                    <?php  } ?>


                   



                </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "includes/sidebar.php"; ?>

        </div>
        <!-- /.row -->

        <hr>

<?php include "includes/footer.php"; ?>