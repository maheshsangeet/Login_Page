<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link rel="stylesheet" href="style.css">
  <title>Sign up page</title>

</head>
<body>


    <?php 
            include 'dbcon.php';

        if (isset($_POST['submit'])) {
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
            


            // password encryptions
            $pass = password_hash( $password, PASSWORD_BCRYPT);
            $cpass = password_hash( $cpassword, PASSWORD_BCRYPT);
            

            // checking email more then once
            $emailquery = "SELECT * FROM registration where email = '$email'";    //selecting email from registration db,  query
            // $query = $con->query($emailquery);                                   
            $query = mysqli_query($con,$emailquery);                             //query sends to db
            $affect_row = mysqli_affected_rows ($con); 

            if ($affect_row > 0) {                                        //email verifying
                ?>
                    <script>alert ("email already exist");</script> 
                <?php 
            }
            else {
                if($password===$cpassword){
                    //password matching
                    $insertquery ="insert into registration (username, email, mobile, password, cpassword) values ('$username','$email','$mobile','$pass','$cpass' )";                             //query
                    $iquery = mysqli_query($con,$insertquery);

                    if ($iquery) {
                        ?> 
                        <script>alert("inserted successful");</script>
                        <?php
                    }
                    else {
                        ?> 
                        <script>alert("not inserted");</script>
                        <?php
                    }
                }
                else {
                    ?>
                        <script> alert('password not matching')</script>
                    <?php
                }
            }
        }


    ?>


    <div class="container">
    <br>

        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p class="text-center">Get started with your free account</p>
                <p>
                    <a href="" class="btn btn-block btn-google"> <i class="fab fa-google"></i>   Login via Gmail</a>
                    <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
                </p>
                <p class="divider-text">
                    <span class="bg-light">OR</span>
                </p>

                <form action="./index.php" method="POST" >
                
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Full name" type="text" name="username" required>
                    </div> <!-- form-group  fullname// --> 


                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Email address" type="email" name="email" required>
                    </div> <!-- form-group  email// -->


                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Phone number" type="number" name="mobile" required>
                    </div> <!-- form-group number// -->


                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Create password" type="password" name="password" required>
                    </div> <!-- form-group passord// -->


                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Repeat password" type="password" name="cpassword" required>
                    </div> <!-- form-group cpassword// -->     
                    
                    
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account  </button>
                    </div> <!-- form-group// -->      
                    <p class="text-center">Have an account? <a href="logins.php">Log In</a> </p>                                                                 
                </form>

            </article>

        </div> <!-- card.// -->

    </div> <!--container end.//-->
    
</body>
</html>
