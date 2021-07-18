<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php

include 'navbar.php';
?>
<div class="container">
    <br>

        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " method="POST" >

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" placeholder="" type="text" name="username" required>
                    </div> <!-- form-group  title// --> 


                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" placeholder="" type="text" name="username"  rows="3" required ></textarea>
                    </div> <!-- form-group  description// -->   
                    
                    <div class="form-group">

                        <!-- echo date("jS \of F Y h:i:s A"); -->
                    </div> <!-- form-group  date// --> 
                    
                    
                    <div class="form-group">
                        <label for="exampleFormControlFile1">File input</label>
                        <input type="file" class="form-control-file" required>
                    </div><!-- form-group  file upload// -->
                    
                    
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">
                            <a class="text-white" href="upload.php">Submit</a>
                        </button>
                    </div> <!-- form-group// -->     

                </form>
            </article>
        </div> <!-- card.// -->

    </div> <!--container end.//-->
    


</body>
</html>