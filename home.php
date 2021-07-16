<?php

session_start();

if (!isset ($_SESSION['username'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>
<?php

    echo $_SESSION['username'];

?>

<button type="submit" name="submit" class="btn btn-primary btn-block"> 
    <a href="logout.php">Log out</a>
</button>

</h2>
</body>
</html>