<<html>
<head>
	<title>Seat Panel</title>

	 <link rel="shortcut icon" href="https://ideal.thesoftking.com/bluebus/assets/images/logo/favicon.png" type="image/x-icon">

    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,600i,700" rel="stylesheet">
    <!--Bootstrap Stylesheet-->
    <link rel="stylesheet" type="text/css" href="https://ideal.thesoftking.com/bluebus/assets/front/css/bootstrap.min.css">

<!--Owl Carousel Stylesheet-->
    <link rel="stylesheet" type="text/css" href="https://ideal.thesoftking.com/bluebus/assets/front/css/plugins/owl.carousel.min.css">
    <!--Slick Slider Stylesheet-->
    <link rel="stylesheet" type="text/css" href="https://ideal.thesoftking.com/bluebus/assets/front/css/plugins/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://ideal.thesoftking.com/bluebus/assets/front/css/plugins/slick.css">
    <!--Font Awesome Stylesheet-->
    <link rel="stylesheet" type="text/css" href="https://ideal.thesoftking.com/bluebus/assets/front/css/font-awesome.min.css">
    <!--Animate Stylesheet-->
    <link rel="stylesheet" type="text/css" href="https://ideal.thesoftking.com/bluebus/assets/front/css/plugins/animate.css">
    <link href="https://ideal.thesoftking.com/bluebus/assets/admin/css/toastr.min.css" rel="stylesheet"/>
    <link href="https://ideal.thesoftking.com/bluebus/assets/admin/css/sweetalert.css" rel="stylesheet">
    <!--Main Stylesheet-->
    <link rel="stylesheet"  href="https://ideal.thesoftking.com/bluebus/assets/front/css/style.php?color=3842fb">
    <!--Responsive Stylesheet-->
    <link rel="stylesheet" type="text/css" href="https://ideal.thesoftking.com/bluebus/assets/front/css/homePageResponsive.css">
        <link rel="stylesheet" type="text/css" href="https://ideal.thesoftking.com/bluebus/assets/front/css/jquery.autocomplete.css">
    <link rel="stylesheet" type="text/css" href="https://ideal.thesoftking.com/bluebus/assets/admin/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://ideal.thesoftking.com/bluebus/assets/front/css/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://ideal.thesoftking.com/bluebus/assets/front/css/seat-custom.css">


</head>

<body class="body-class bc blog">


 <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html"><B>ONLINE RESERVATION SYSTEM</B></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="try.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="loginpage.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


	<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=205856110142667&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

	 <div id="ticket-booking">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                                            <h4>BUS COMPANY</h4>
                        <div class="margin-bottom-10"></div>
                                                                <h6>Bus Operator</h6>
                        <div class="margin-bottom-10"></div>
                    
                                            <p><strong><span class="text-danger">Route Name:</span> ROUTE 01
                            </strong></p>
                        <div class="margin-bottom-10"></div>
                    
                    <p>Dep Time: 11:21 AM <span
                                class="text-success">(29 Jun 2019)</span></p>
                    <div class="margin-bottom-5"></div>
                    <strong>Total Seat: 41</strong>
                    <div class="margin-bottom-5"></div>
                    <strong>Ticket Price : 50.00 USD</strong>
                </div>
            </div>

            <div class="margin-bottom-60"></div>

            <div class="row">
                <div class="offset-md-1 col-md-5 col-sm-10 ">
                    <div class="row text-center">
                        <div class="col-4">
                            <div class="seat  ">
                                <div class='seat-body'>
                                    <span class='seat-handle-left'></span>
                                    <span class='seat-handle-right'></span>
                                    <span class='seat-bottom'></span>
                                </div>
                            </div>
                            <p>Available Seat</p>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="seat ChooseSeat selected ">
                                <div class='seat-body'>
                                    <span class='seat-handle-left'></span>
                                    <span class='seat-handle-right'></span>
                                    <span class='seat-bottom'></span>
                                </div>
                            </div>
                            <p>Selected Seat</p>
                        </div>


                        <div class="col-md-4 col-sm-4">
                            <div class="seat ladies last-seat seat occupied ChooseSeat ">
                                <div class='seat-body'>
                                    <span class='seat-handle-left'></span>
                                    <span class='seat-handle-right'></span>
                                    <span class='seat-bottom'></span>
                                </div>
                            </div>
                            <p>Booked Seat</p>
                        </div>
                    </div>
                    <div class="margin-bottom-40"></div>

                    <div class="all-seats">
                        <div class='row'><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            A1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            A2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>&nbsp;</div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            A3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            A4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div></div><div class='row'><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            B1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            B2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>&nbsp;</div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            B3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            B4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div></div><div class='row'><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            C1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            C2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>&nbsp;</div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            C3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            C4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div></div><div class='row'><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            D1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            D2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>&nbsp;</div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            D3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            D4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div></div><div class='row'><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            E1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            E2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>&nbsp;</div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            E3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            E4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div></div><div class='row'><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            F1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            F2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>&nbsp;</div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            F3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            F4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div></div><div class='row'><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            G1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            G2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>&nbsp;</div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            G3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            G4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div></div><div class='row'><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            H1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            H2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>&nbsp;</div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            H3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            H4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div></div><div class='row'><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            I1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            I2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>&nbsp;</div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            I3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            I4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div></div><div class='row'><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            J1
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            J2
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>&nbsp;</div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            J3
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div><div class='col-2'>
                                    <div class='seat occupied ChooseSeat ' data-item=''>
                                        <div class='seat-body'>
                                            J4
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div></div><div class='row'><div class='col-2'>
                                    <div class='seat occupied ChooseSeat last-seat-21 ' data-item=''>
                                        <div class='seat-body'>
                                            M
                                            <span class='seat-handle-left'></span>
                                            <span class='seat-handle-right'></span>
                                            <span class='seat-bottom'></span>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>

                            </div>



                            <div class="col-md-6 col-sm-12">

                <form action="" class="price-details" id="bookingFrm" method="post" accept-charset="utf-8">
                    <input type="hidden" name="_token" value="F5tS9bbIdWcOwTbj1va8g8qSB6Loa6DpZFyW6vL2">
                    <div class="form-group">
                        <label><strong>Choose Boarding Point <span class="text-danger">*</span></strong></label>
                        <select name="boarding" id="stoppage" class="form-control form-control-lg boarding_point">
                            <option value="">Boarding Point</option>
                                                            <option value="point1">point1</option>
                                                            <option value="point2">point2</option>
                                                            <option value="point3">point3</option>
                                                    </select>
                    </div>


                                            <div class="form-group">
                            <h4> Facilities</h4>
                            <div id="facilities">
                                                                                                    <div class="funkyradio">
                                        <div class="funkyradio-default">
                                            <input type="radio" checked/>
                                            <label>Free Breakfast</label>
                                        </div>
                                    </div>
                                                            </div>
                        </div>
                    
                    <div class="table-responsive ">
                        <table class="table table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td class="text-right" style="width: 30%;">Seat(s)</td>
                                <th id="seatPreview">---</th>
                            </tr>
                            <tr>
                                <td class="text-right"><b> Total</b></td>
                                <th id="grandTotalPreview">0</th>
                            </tr>
                            </tbody>
                        </table>

                        <input type="hidden" name="trip_route_id" value="1">
                        <input type="hidden" name="fleet_registration_id"
                               value="1">
                        <input type="hidden" name="trip_id_no" value="439">
                        <input type="hidden" name="id_no" value="1560920541">
                        <input type="hidden" name="fleet_type_id"
                               value="1">
                        <input type="hidden" name="total_seat">
                        <input type="hidden" name="seat_number">
                        <input type="hidden" name="price" value="50.00">
                        <input type="hidden" name="total_fare">
                        <input type="hidden" name="booking_date" value="2019-06-29 11:00:21">

                    </div>
                    <button id="submit-btn" class="btn btn-block">Continue</button>
                </form>

                
                
        </div>


    </div>
    </div>

            


<!--jQuery JS-->
<script src="https://ideal.thesoftking.com/bluebus/assets/front/js/jquery.2.1.2.min.js"></script>
<!--Bootstrap JS-->
<script src="https://ideal.thesoftking.com/bluebus/assets/front/js/bootstrap.min.js"></script>
<!--Counter JS-->
<script src="https://ideal.thesoftking.com/bluebus/assets/front/js/plugins/waypoints.js"></script>
<script src="https://ideal.thesoftking.com/bluebus/assets/front/js/plugins/jquery.counterup.min.js"></script>

<script src="https://ideal.thesoftking.com/bluebus/assets/admin/js/toastr.min.js"></script>
<script src="https://ideal.thesoftking.com/bluebus/assets/admin/js/sweetalert.js"></script>


    <script src="https://ideal.thesoftking.com/bluebus/assets/front/js/jquery.autocomplete.js"></script>
    <script src="https://ideal.thesoftking.com/bluebus/assets/admin/js/select2.min.js"></script>
    <script src="https://ideal.thesoftking.com/bluebus/assets/front/js/flatpickr.js"></script>
<!--Owl Carousel JS-->
<script src="https://ideal.thesoftking.com/bluebus/assets/front/js/plugins/owl.carousel.min.js"></script>
<!--Venobox JS-->
<script src="https://ideal.thesoftking.com/bluebus/assets/front/js/plugins/venobox.min.js"></script>
<!--Slick Slider JS-->
<script src="https://ideal.thesoftking.com/bluebus/assets/front/js/plugins/slick.min.js"></script>
<!--Main-->
<script src="https://ideal.thesoftking.com/bluebus/assets/front/js/custom.js"></script>


    <script>
        $(document).ready(function () {

            $('.boarding_point').select2();


            /*
            *------------------------------------------------------
            * @function: findBookingInformation()
            * @return    : location, facilities, seatsList
            *------------------------------------------------------
            */
            var total_seat = $('input[name=total_seat]');
            var total_fare = $('input[name=total_fare]');
            var seat_number = $('input[name=seat_number]');

            var price = $('input[name=price]').val();
            var booking_date = $('input[name=booking_date]');

            var seatPreview = $('#seatPreview');
            var pricePreview = $('#pricePreview');
            var grandTotalPreview = $('#grandTotalPreview');
            var outputPreview = $('#outputPreview');

            if (total_seat.val() == '') {
                $("#submit-btn").attr('disabled', true);
            }

            /*
            *------------------------------------------------------
            * Choose seat(s)
            * @function: findPriceBySeat
            * @return  : selected seat(s), price and group price
            *------------------------------------------------------
            */

            $('body').on('click', '.ChooseSeat', function () {
                var seat = $(this);
                if (seat.attr('data-item') != "selected") {
                    seat.removeClass('occupied').addClass('selected').attr('data-item', 'selected');
                } else if (seat.attr('data-item') == "selected") {
                    seat.removeClass('selected').addClass('occupied').attr('data-item', '');
                }
                //reset seat serial for each click
                var seatSerial = "";
                var countSeats = 0;

                $("div[data-item=selected]").each(function (i, x) {
                    countSeats = i + 1;
                    seatSerial += $(this).text().trim() + ", ";
                });

                total_fare.val(countSeats * price);
                $("#grandTotalPreview").text((countSeats * price) + " USD");
                total_seat.val(countSeats);
                seat_number.val(seatSerial);
                seatPreview.html(seatSerial);

                if (countSeats > 0) {
                    $("#submit-btn").attr('disabled', false);
                } else {
                    $("#submit-btn").attr('disabled', true);
                }
            });


            $(document).on('click', "#submit-btn", function (e) {
                e.preventDefault();
                var boarding = $("input[name=boarding]").val();
                var trip_route_id = $("input[name=trip_route_id]").val();
                var fleet_registration_id = $("input[name=fleet_registration_id]").val();
                var trip_assign_id_no = $("input[name=trip_id_no]").val();
                var id_no = $("input[name=id_no]").val();
                var fleet_type_id = $("input[name=fleet_type_id]").val();
                var total_seat = $("input[name=total_seat]").val();
                var seat_number = $("input[name=seat_number]").val();
                var price = $("input[name=price]").val();
                var total_fare = $("input[name=total_fare]").val();
                var booking_date = $("input[name=booking_date]").val();

                $.ajax({
                    type: "post",
                    url: "https://ideal.thesoftking.com/bluebus/checked-seat",
                    //contentType: false,
                    //processData: false,
                    data: {
                        boarding: boarding,
                        trip_route_id: trip_route_id,
                        fleet_registration_id: fleet_registration_id,
                        trip_assign_id_no: trip_assign_id_no,
                        id_no: id_no,
                        fleet_type_id: fleet_type_id,
                        total_seat: total_seat,
                        seat_number: seat_number,
                        price: price,
                        total_fare: total_fare,
                        booking_date: booking_date
                    },

                    success: function (data) {
                        console.log(data)
                        if (data.status == 1000) {
                            toastr.error(data.arr + " Seat Booked Yet. <br> Please select another seat");
                        }
                        if (data.pnr) {
                            window.location.href = "https://ideal.thesoftking.com/bluebus/seat-book/details" + '/' + data.pnr;
                        }
                    },

                    error: function (res) {
                        //console.log(res);
                    }
                });

            });
        });
    </script>



</body>
</html>