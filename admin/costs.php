<?php 
include "../includes/db.php";
include"includes/admin_header.php"; ?>

    <div id="wrapper">
        
        <!-- Navigation -->
        <?php include"includes/admin_navigation.php"; ?>

         <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcone To Admin
                            <small><?php echo ucfirst($_SESSION['s_username']);   ?></small>
                        </h1>

                        <div class="col-xs-6">

                            <?php

                                if (isset($_GET['delete'])) {
                                    $cost_del_id = $_GET['delete'];

                                    $query = "DELETE FROM cost WHERE cost_id=$cost_del_id";

                                    $delete_cat = mysqli_query($connection,$query);

                                }

                            ?>

                             <?php 
                            if(isset($_POST['submit'])) {

                                $start = $_POST['start'];
                                $stopage = $_POST['stopage'];
                                $category = $_POST['category'];
                                $cost = $_POST['cost'];
                                if($start=="" || $stopage=="" || $category=="" || $cost=="") {
                                    echo " This Field Must Not be Empty";
                                }

                             else {  
                              $query = "INSERT INTO cost(start, stopage, category, cost) VALUES ('$start', '$stopage', '$category', '$cost')";
                                $create_category = mysqli_query($connection,$query);

                                if(!$create_category) {
                                    die("Query Failed");
                                }
                            }
                            }
                            ?>

                 <form action="" method="post">
                <div class="form-group">
                <label for="start">Add cost</label>
                <select class="form-control" name="start">
               <option value="" style="">Source</option>

                 <?php 

               $query = "SELECT * FROM posts";
              $select_category = mysqli_query($connection,$query);

              if (!$select_category) {
                die("Query Failed" . mysqli_error($connection));
            }

            while ($row = mysqli_fetch_assoc($select_category)) {
                $post_source = $row['post_source'];
            
                echo "<option value='$post_source'>$post_source</option>";

            }

            ?> 
             </select>                                 
             </div>

              <div class="form-group">
                 <select class="form-control" name="stopage">
            <option value="" style="">Destination</option>

                 <?php 
                

               $query = "SELECT * FROM posts";
              $select_category = mysqli_query($connection,$query);

              if (!$select_category) {
                die("Query Failed" . mysqli_error($connection));
            }

            while ($row = mysqli_fetch_assoc($select_category)) {
               // $post_via = $row['post_via'];
                $post_destination = $row['post_destination'];
             //echo "<option value='$post_via'>$post_via</option>";
             echo "<option value='$post_destination'>$post_destination</option>";

            }

            ?>  </select>
                </div>
                <div class="form-group">
                <select name="category">
                     <?php 

            $query = "SELECT * FROM categories";
            $select_category = mysqli_query($connection,$query);

            if (!$select_category) {
                die("Query Failed" . mysqli_error($connection));
            }

            while ($row = mysqli_fetch_assoc($select_category)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
            
                echo "<option value='$cat_id'>$cat_title</option>";
            }

            ?>

        </select>
         </div>
        <div class="form-group">
    <label for="cost">Add cost</label>
     <input class="form-control" type="text" name="cost">
    </div>
    <div class="form-group">
   <input class="btn btn-primary" type="submit" name="submit" value="Add Cost">
  </div> 
 </form>
</div>

 <div class="col-xs-6">

                            <?php 
                            $query = "SELECT *  FROM  cost";
                            $select_cost = mysqli_query($connection,$query);
                            ?>

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>source</th>
                                        <th>destination</th>
                                        <th>category</th>
                                         <th>cost</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php  
                                        while($row = mysqli_fetch_assoc($select_cost)) {
                                        $cost_id = $row['cost_id'];
                                        $source = $row['start'];
                                        $destination = $row['stopage'];
                                        $category = $row['category'];
                                        $cost = $row['cost'];

                                        echo "<tr>";
                                        echo "<td> {$cost_id} </td>";
                                        echo "<td> {$source} </td>";
                                        echo "<td> {$destination} </td>";
                                        echo "<td> {$category} </td>";
                                          echo "<td> {$cost} </td>";
                                        echo "<td><a href='costs.php?delete=$cost_id'>Delete</a></td>";
                                        echo "</tr>";
                                    }

                                    ?>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
                <!-- /.row -->

                </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include"includes/admin_footer.php"; ?>










                      