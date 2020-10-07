<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>ADD MOVIE</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col-sm-6">
        <h2> Details of Upload Movie  </h2> 
        <form action="add_movie_script.php" method="POST" enctype="multipart/form-data">
          
            <div class="form-group" >
                <label for="title"> Title : </label>
                     <input type="text" name="title" id="title" class="form-control">
            </div>
            
            <div class="form-group" >
                <label for="rating"> Movie Ratings : </label>
                    <input type="numeric"name="rating" id="rating" class="form-control">
            </div>
            
            <div class="form-group" >
                <label for="date">Release Date : </label>
                    <input type="date" name="date" id="date" class="form-control"> 
            </div>
            
            <div class="form-group" >
                <label for="img">Image : </label>
                    <input type="file" name="img" id="img" class="form-control-file"> 
            </div>
            <input type="submit" name="submit" id="submit" value="ADD MOVIE" class="btn btn-info" >
        
        </form>          
        </div>
    
    </div>
  </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>