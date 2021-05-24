            <div class="col-md-4" style="padding-top: 10%;">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Bus Search</h4>
                    <form action="search.php" method="post">

             <div class="form-group">
              <select class="form-control" name="post_source">
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

            ?>  </select> </div>

            <div class="form-group">
            <select class="form-control" name="post_destination">
            <option value="" style="">Destination</option>

                 <?php 

               $query = "SELECT * FROM posts";
              $select_category = mysqli_query($connection,$query);

              if (!$select_category) {
                die("Query Failed" . mysqli_error($connection));
            }

            while ($row = mysqli_fetch_assoc($select_category)) {
                $post_via = $row['post_via'];
                $post_destination = $row['post_destination'];
             //echo "<option value='$post_via'>$post_via</option>";
             echo "<option value='$post_destination'>$post_destination</option>";

            }

            ?>  </select> </div> 
    <button class="btn btn-primary" name="submit" style="margin-left: 130px; margin-top: 10px;">Search</button>
                        
                    </form>
                    <!-- /.input-group -->
                </div>


                <!-- Login -->
                <?php

                    if (!isset($_SESSION['s_username'])) {
                        ?>
                            <div class="well">
                                <h4>Login</h4>
                                <form action="includes/login.php" method="post">

                                    
                                        <input name="username" type="text" class="form-control" placeholder="Username">
                                        <input name="password" type="password" class="form-control" placeholder="Password" style="margin-top: 10px;">

                                        <button class="btn btn-primary" name="login" style="margin-left: 130px; margin-top: 10px;">Login</button>
                                    
                                </form>
                                <!-- /.input-group -->
                            </div>
                        
                <?php } ?>

                



                <!-- Blog Categories Well -->
                <div class="well">


                    <?php 

                        $query = "SELECT *  FROM  categories";
                        $select_categories_sidebar = mysqli_query($connection,$query);

                     ?>




                    <h4>Bus Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">

                                <?php  
                                    while($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                                        $cat_title = $row['cat_title'];
                                        $cat_id = $row['cat_id'];
                                         echo "<li> <a href='category.php?category=$cat_id'> $cat_title </a></li>";
                                    }

                                ?>
                                
                            </ul>
                        </div>

                    </div>
                
                </div>


               

            </div>