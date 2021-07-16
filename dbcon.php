
<!-- connection to database -->
<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "sign_up";


// mysqli_connect() function opens a new connection to the MySQL server.
$con = mysqli_connect($server, $user, $password,$db);   

// Check connection
if ($con) {
    ?>
        <script> alert('connection successfull')</script>
    <?php
}
else {
    ?>
        <script> alert('no connection')</script>
    <?php
}

//mysqli_connect_errno() function returns the error code from the last connection error, if any.

// if (mysqli_connect_errno()) {
//     echo "Failed to connect to MySQL: " . mysqli_connect_error();
//     exit();
//   }





?>


