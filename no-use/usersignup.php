<?php
session_start();


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Record</title>
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.css">

</head>
<body>
    


  
    
<div class="container">
    <div class="row">
        <div class="col-md-12">


            <form name="form" method="post" onsubmit="return validation()">

                <div class="col-md-4">
                    <h1><i class="glyphicon glyphicon-user">

                        </i>Register</h1>
                    <hr>

                    <?php if(isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger">
                            <?=$_SESSION['error'];
                            unset($_SESSION['error'])

                            ?>
                        </div>

                    <?php endif;?>


                        

                    <div class="form-group input-group">
                        <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-user"></i></span>
                        <label for="name"></label>
                        <input type="text" name="name"  id="name" class="form-control" placeholder="enter your name" aria-describedby="sizing-addon2" required>
                   
                    </div>
                         
                    <div class="form-group input-group">
                      <label for="email"></label>
                        <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="text" name="email"  id="emails" class="form-control" placeholder="enter your email" aria-describedby="sizing-addon2" required>
                     
                    </div>
                          
                    <div class="form-group input-group">
                      <label for="password"></label>
                        <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password"  id="pass" class="form-control" placeholder="enter your password" aria-describedby="sizing-addon2" required>
                     
                    </div>
                       
                         <div class="form-group input-group">
                      <label for="password"></label>
                        <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="confirm_password"  id="conpass" class="form-control" placeholder="confirm your password" aria-describedby="sizing-addon2" required>
                     
                    </div>
                   
                    

                    <div class="form-group input-group">
                      <label for="contact_no"></label>
                        <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-phone"></i></span>
                        <input type="phone" name="contact_no"  id="mobileNumber" class="form-control" placeholder="Contact number" aria-describedby="sizing-addon2" required>
                     
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label><br>
                        &emsp;&emsp;
                        <input type="radio" value="male" name="gender" required>Male
                        &emsp;
                        <input type="radio" value="female" name="gender" required>Female

                    </div>
                   
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select name="country" id="country" class="form-control" required>
                            <option value="nepal">Nepal</option>
                            <option value="china">China</option>
                            <option value="bhutan">Bhutan</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success">
                            <i class="glyphicon glyphicon-plus">
                            </i>Add Record</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <script type="text/javascript">
        

        function validation(){

            var user = document.getElementById('name').value;
            var pass = document.getElementById('pass').value;
            var confirmpass = document.getElementById('conpass').value;
            var mobileNumber = document.getElementById('mobileNumber').value;
            var emails = document.getElementById('emails').value;





            if(user == ""){
                document.getElementById('username').innerHTML =" ** Please fill the username field";
                return false;
            }
            if((user.length <= 4) || (user.length > 20)) {
                document.getElementById('username').innerHTML =" ** Username lenght must be between 4 and 20";
                return false;   
            }
            if(!isNaN(user)){
                document.getElementById('username').innerHTML =" ** only characters are allowed";
                return false;
            }







            if(pass == ""){
                document.getElementById('passwords').innerHTML =" ** Please fill the password field";
                return false;
            }
            if((pass.length <= 5) || (pass.length > 20)) {
                document.getElementById('passwords').innerHTML =" ** Passwords lenght must be between  5 and 20";
                return false;   
            }


            if(pass!=confirmpass){
                document.getElementById('confrmpass').innerHTML =" ** Password does not match the confirm password";
                return false;
            }



            if(confirmpass == ""){
                document.getElementById('confrmpass').innerHTML =" ** Please fill the confirmpassword field";
                return false;
            }




            if(mobileNumber == ""){
                document.getElementById('mobileno').innerHTML =" ** Please fill the mobile NUmber field";
                return false;
            }
            if(isNaN(mobileNumber)){
                document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
                return false;
            }
            if(mobileNumber.length!=10){
                document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
                return false;
            }



            if(emails == ""){
                document.getElementById('emailids').innerHTML =" ** Please fill the email idx` field";
                return false;
            }
            if(emails.indexOf('@') <= 0 ){
                document.getElementById('emailids').innerHTML =" ** @ Invalid Position";
                return false;
            }

            if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
                document.getElementById('emailids').innerHTML =" ** . Invalid Position";
                return false;
            }
        }

    </script>

    

</body>
</html>