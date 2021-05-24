
<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Transport Booking</title> 

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
   <script type="text/javascript" src="resources/js/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="resources/bootstrap/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">

      <a class="navbar-brand" href="homepage.php">ONLINE RESERVATION SYSTEM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="userpanel.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="homepage.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Welcome</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    
      <div class="row">
          <div class="col-sm-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="project.jpeg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="bus.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="bus2.jpg" alt="Third slide">
                  </div>
                     
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div></div>
            </div>
            </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">BUS RESERVATION SYSTEM</h1>
        <p>This is a online based platform to book and make a comfortable and reliable journey.</p>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-dark my-5 py-4 text-center">
      <div class="card-body">
        <p>Namaste, Tell us where you want to travel.</p>
        <form>
          From:<input type="text" name="from">
          Destination:<input type="text" name="destination">
          Date:<input type="date" name="date">
          Shift:
          <select name="shift">
              <option value="Day">Day</option>
              <option value="Night">Night</option>
              <option value="Both">Both</option>
          </select>
          <input type="button" name="submit" class="btn btn-primary btn-sm" value="search">
        </form>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Delux</h2>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <img src="rajnis.png" alt="CHEAP" height="200" width="300">
            <a href="booktable.php" class="btn btn-primary btn-sm">More Info</a>
            <a href="seatpanel.php" class="btn btn-primary btn-sm">Book</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">AC</h2>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <img src="bus.jpg" alt="CHEAP" height="200" width="300">
            <a href="booktable.php" class="btn btn-primary btn-sm">More Info</a>
            <a href="seatpanel.php" class="btn btn-primary btn-sm">Book</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Air Suspensor</h2>
            <p class="card-text"></p>
          </div>
          <div class="card-footer">
            <img src="bus2.jpg" alt="CHEAP" height="200" width="300">
            <a href="booktable.php" class="btn btn-primary btn-sm">More Info</a>
            <a href="seatpanel.php" class="btn btn-primary btn-sm">Book</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>

    <div class="row">
         <div class="col-md-4 mb-5">
    <div class="tb_route_list">
      <h1>Top Bus Routers</h1>
                                 <ul>
                                    <li><a href="#">kathmandu to pokhara</a></li>
                                    <li><a href="#">kathmandu to Mustang</a></li>
                                    <li><a href="#">kathmandu to Delhi</a></li>
                                    <li><a href="#">Dang to Poakhara </a> </li>
                                    <li><a href="#">Dang to Nepalgunj</a></li>
                                 </ul>
                              </div>
      </div>
         <div class="col-md-4 mb-5">
    <div class="tb_route_list">
      <h1>Top Bus Operators</h1>
                                 <ul>
                                      <li><a href="#">Sanepa to Kalanki</a></li>
                                    <li><a href="#">Narayanghat to muglin</a></li>
                                    <li><a href="#">Dhangadi to Chitwan</a></li>
                                    <li><a href="#">Kathmandu to Rampur</a></li>
                                  <li><a href="#">Butwal to Baglung</a></li>
                                </ul>
                                    
                              </div>
      </div>
         <div class="col-md-4 mb-5">
    <div class="tb_route_list">
      <h1>Top Cities</h1>
                                 <ul>
                                    <li><a href="#">Birgunj to Nepalgunj</a></li>
                                    <li><a href="#">Nepalgunj to Dang</a></li>
                                    <li><a href="#">Delhi to Rara</a></li>
                                    <li><a href="#">Beni to Marpha</a> </li>
                                    <li><a href="#">Ghorahi to Tulsipur</a></li>

                                 </ul>
                              </div>
      </div>
    </div>
  <!-- /.container -->

  <div class="icon" align=middle>

  <i class="fa fa-facebook"style="font-size: 36px"></i>
<i class="fa fa-twitter" style="font-size:36px"></i>
<i class="fa fa-instagram"style="font-size: 36px"></i>
<i class="fa fa-google"style="font-size:36px"></i>
</div>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright online ticket booking &copy; 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
