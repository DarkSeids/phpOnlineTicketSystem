<?php include "db.php"; ?>
<?php include "header.php"; ?>
    
    <!-- Navigation -->
    
<?php include"db.php" ?>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #182c39;" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php">Raqeeb Transport</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php 

                        $query = "SELECT *  FROM  categories";
                        $select_all_categories_query = mysqli_query($connection,$query);

                        while($row = mysqli_fetch_assoc($select_all_categories_query)) {
                            $cat_title = $row['cat_title'];
                            $cat_id = $row['cat_id'];
                            echo "<li> <a href='../category.php?category=$cat_id'> {$cat_title} </a></li>";
                        }
                     ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <?php 
                    if(isset($_SESSION['s_username'])) {
                        if ($_SESSION['s_role']=='admin') {
                            ?>
                            <li>
                                <a href="../admin/index.php"><i class="fa fa-fw fa-child"></i>Admin</a>
                            </li>
                    }
                    <?php } } ?> 

                    <li>
                        <a href="../registration.php"><i class="fa fa-fw fa-desktop"></i>Signup Here!</a>
                    </li>

<!--                     <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li> -->

                    <?php 
                        if (isset($_SESSION['s_username'])) {
                            # code...
                            ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php 

                                if(isset($_SESSION['s_username']))
                                echo ucfirst($_SESSION['s_username']); ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="../profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            
                    <?php    }
                    ?>
                    

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <!-- <div class="container jumbotron" style="width: 45%; border-radius: 15px"> -->

    <?php

    	if (isset($_GET['orderid'])) {
    		$orderid_cancel = $_GET['orderid'];
            $bus_id = $_GET['bus_id'];

    		$query = "DELETE FROM orders WHERE order_id=$orderid_cancel";

    		$cancel_order = mysqli_query($connection,$query);

    		if (!$cancel_order) {
    			die("Query Failed".mysqli_error($connection));
    		}
    	}

        $query = "SELECT available_seats FROM posts WHERE post_id=$bus_id";
        $get_seats = mysqli_query($connection,$query);

        while ($row = mysqli_fetch_assoc($get_seats)) {
            $available_seats = $row['available_seats'];
        }

        $query = "UPDATE posts SET available_seats=$available_seats-1 WHERE post_id=$bus_id";
        $update_seats = mysqli_query($connection,$query);

    ?>

    <div class="container" style="width: 50%; padding-top: 10%;">
        
    	<p><h3>Your ticket stands Cancelled as per your Request</h3></p>
    	<br>
    	<p><h3>Hope To See You Soon!!</h3></p>

    </div>
        <hr>


<?php include "footer.php"; ?> 