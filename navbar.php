<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .sidebar{
            text-align: center;
            width:15%;
            height:91vh;
            background-color:#343A40;

        }
        .list-group-item {
            background-color:#343A40;
            color:white;

        }
        .list-group-item:hover {
            color: black;
        }

    </style>
</head>
<body>
    

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <h2 class="navbar-brand" href="#">
                <?php    echo 'Welcome ' .$_SESSION['username'];?>
            </h2>
            
            <div class="float-right">
                <button type="submit" name="submit" class="btn btn-primary btn-block float-right">
                    <a class="text-white" href="logout.php">Log out</a>
                </button>
            </div>
            
        </div>
    </nav>
<!-- navbar end -->

<!-- sidebar -->
    <div class="sidebar float-right ">
        <div class="list-group ">
            <a href="home.php" class="list-group-item list-group-item-action  ">Home</a>
            <a href="upload.php" class="list-group-item list-group-item-action  ">Upload</a>
            <a href="edit_delete.php" class="list-group-item list-group-item-action  ">Edit</a>
            <a href="edit_delete.php" class="list-group-item list-group-item-action  ">Delete</a>
        </div>
    </div>
    
<!-- sidebar end -->




</body>
</html>