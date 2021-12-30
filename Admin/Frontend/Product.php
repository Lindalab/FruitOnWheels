<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="productstyle.css">
    <link rel="icon" href="Images\Logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Authorisation page</title>
    <style>
      #Logout{
          margin-left: 80%;
          margin-top: 2%;
          
        }
        body{
            /* font-family: Georgia, serif; */
            font-family: 'Courier New', monospace;
        
        }
        tr{
          
          border: 3px solid whitesmoke;
        }
        th{
          color:coral;
        }
        #navimg{
          margin-right: 80%;
          display:inline-block;
          width:60px;
          height:60px;
          margin-top: 5px;
          
        }
        nav{
          height: 70px;
          
        }
        .nav-item{
          margin-top:15px;
        }
        .table{
          margin-top: 15px;
          
        }

        </style>
  </head>
  <body>
  

    <nav>
      
        <ul class="nav justify-content-end">
          <img src="Images\Logo.png" id="navimg" alt="Company Logo" >
           <li class="nav-item">
                <a class="nav-link active" href="#">PRODUCT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ORDER</a>
            </li>
        </ul>
    </nav>

    <a href="Addform.php"  id="Logout" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Add Product</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Product Name</th>
          <th scope="col">Prices(GHS)</th>
          <th scope="col">Quantity</th>
          <th scope="col">Description</th>
          <!-- <th scope="col">Image</th> -->
          <th scope="col"> Make Available</th>
          <th scope="col">Make Unavialable</th>
        </tr>
      </thead>
      <tbody>
      <?php
      require ("../Backend/ShowItemAdded.php");
      Show();
      ?>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>