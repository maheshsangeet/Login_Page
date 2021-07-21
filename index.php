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
  <title>Login page</title>

</head>
<body>

    <?php

        include 'dbcon.php';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $email_search = "SELECT * FROM registration WHERE email = '$email'";   
            $query = mysqli_query($con, $email_search);

            $email_count = mysqli_num_rows($query);

            if ($email_count) {
                $email_pass = mysqli_fetch_assoc($query);
                 
                $db_pass = $email_pass['password'];

                $_SESSION['username'] = $email_pass['username'];      //used in home.php 

                $pass_decode  = password_verify($password, $db_pass);
                if ($pass_decode) {
                    ?>
                        <script>
                                alert('login successful');
                                location.replace("logout.php");
                        </script>
                        
                    <?php
                }
                else {
                    ?>
                        <script>alert('Password Incorrect')</script>
                    <?php 
                }
                
            }
            else {
                ?>
                    <script>alert('Incorrect Password')</script>
                <?php
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

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " method="POST" >
                    

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                    <input class="form-control" placeholder="Email ID" type="email" name="email" required>
                    </div> <!-- form-group  email// -->


                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" placeholder="Password" type="password" name="password" required>
                    </div> <!-- form-group passord// -->
                    
                    
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block"> Login  </button> 
                    </div> <!-- form-group// -->      
                    <p class="text-center">Not have an account? <a href="sign_up.php">SignUp here</a> </p>                                                                 
                </form>

            </article>

        </div> <!-- card.// -->

    </div> <!--container end.//-->
    
</body>
</html>
