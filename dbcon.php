
<!-- connection to database -->

<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "sign_up";


$con = mysqli_connect($server, $user, $password,$db);

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

?>