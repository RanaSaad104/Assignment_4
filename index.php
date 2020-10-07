<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  

    <title>Movies</title>
  </head>
 

  <body>

<div class="container">
    <div class="row justify-content-center">
        <h1 class="display-6">Movies</h1>
            <p class="lead"> </p>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php require_once "data.php";
            $rows  =select("SELECT * FROM movielist");
                foreach($rows as $row){?>
            
            <div class="col-sm-3 mt-4">
                <div class="card">
            <img src="<?php echo $row[4];?>" alt="<?php echo $row[1];?>" class="card-img-top img-fluid rounded-circle" style="height:50vh;">
                <div class="card-body">

                <p> <strong>Movie Rating : </strong> <?php echo $row['rating']; ?> </p>
                <p><strong> Releasing Date : <strong> <?php echo $row['date']; ?> </p>
                <p><strong> Image : </strong> <?php echo $row['img']; ?> </p>
                    
                </div>

                <div class="card-footer">
                    <a href="" class="btn btn-success">Update</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </div>

            </div>
        </div>
        <?php } ?>
    </div>

</div>