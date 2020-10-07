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
    <div class="row">
        <div class="col-sm-6">
    <?php
        if (isset($_POST['submit'])){
        $errors=[];

        if (empty($_POST['id']))
        {
            $errors="ID can not be empty";
        }
        else
        {
            $id=$_POST['id'];
        }

        if (empty($_POST['title']))
        {
            $errors="title can not be empty";
        }
       
        if(strlen($_POST['title']>512))
        {
            $errors="title length";
        }
        else
        {
            $title=$_POST['title'];
        }

        if (empty($_POST['rating']))
        {
            $errors="rating can not be empty";
        }
     
        if(!($_POST['rating']>1 && $_POST['rating']<5))
        {   
            $errors="Rating length can be specified in 5";
        }
        else
        {
            $rating=$_POST['rating'];
        }

        if (empty($_POST['date']))
        {
            $errors="date can not be empty";
        }
        else{
            $date=$_POST['date'];
        }
        
        if (isset($_FILES['img']))
        {
            $target_directory="image/";
            $file_name=$_FILES['upload']['name'];
            $file_size=$_FILES['upload']['size'];
            $file_type=$_FILES['upload']['type'];
            $target_file = $target_directory . $file_name;

            $allowed_types = ['image/jpeg', 'image/pjpeg', 'image/png', 'image/PNG', 'image/JPG','image/jpg'];
           $uploadError = 0;        
            


        if (in_array($file_type,$allowed_types))
           {
                if ($file_size>500000)
                {
                    exit("File is too large");                    
                }
                else
                {
                
                if (file_exists($target_file))
                {
                    $errors[]="File already exist";
                    $uploadError=1;
                }
                    move_uploaded_file($file_temp_name,$target_file);
                
                if ($_FILES['upload']['error']>0) 
                {
                    $errors[]="File can't be upload due to an  error";
                    $uploadError=1;
                }
            }       
        }
        
        else
        {
            exit("<div class = 'alert alert-danger'> Invalid File Type </div>");  
        }
    }  
    
        else
        {
        $error[] = "Please Select an image file";
        }


        if (empty($errors))
        {
            require_once "Database/connection.php";
            $dbc=db_connect();
            $sql="INSERT INTO movielist VAlUES(NULL ,'$title','$rating','$date','$target_file')";
            $result=mysqli_query($dbc,$sql);
            if (!$result)
            {
                echo "<div class='alert alert-danger' > Movies Cannot Be Added : .  mysqli_error($dbc)</div>";
            }
            else 
            {
                echo "<div class = 'alert alert-success'>Movie Added Successfully. 
                </div>";
                db_close($dbc);
            }
        }

        else
        {
            foreach($errors as $error)
            {
                echo "<div class = 'alert alert-danger'>$error</div>";
            }
        }

    }  
        else
        {
           echo "<div class = 'alert alert-warning'>Form is not submitted!</div>";        
        } ?>
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