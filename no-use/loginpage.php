<?php
session_start();
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 7/25/2017
 * Time: 12:24 PM
 */?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>User login page</h1>
<hr>
<form class="form-signin" role="form" action="loginaction.php"  method="post">

                <div class="col-md-4">
                    <h1><i class="glyphicon glyphicon-user">

                        </i> </h1>
                    <hr>

                        </div>
                         <?php if(isset($_SESSION['error'])) : ?>
                        <div class="alert alert-danger">
                            <?=$_SESSION['error'];
                            unset($_SESSION['error'])

                            ?>
                        </div>

                    <?php endif;?>

<div class="form-group input-group">
                        <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="user" class="form-control" placeholder="enter name" aria-describedby="sizing-addon2">
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon" id="sizing-addon2"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="enter your password" aria-describedby="sizing-addon2">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">
                            <i class="glyphicon glyphicon-plus">
                            </i>login</button>
                    </div>

</form>
</div>
</div>
</body>
</html>
