<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="icon" href="../Admin/Frontend/Images/Logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home page</title>
    <style>
      
        body{
            /* font-family: Georgia, serif; */
            font-family: 'Courier New', monospace;
            background-color: coral;
        
        }
        
        #navimg{
         
          display: inline-block;
          width:60px;
          height:60px;
          margin-top: 15px;
          margin-left: 7%;
          
        }
        nav{
          height: 70px;
          background-color: coral;
          display: flex;
          justify-content: right;
          margin-right: 60px;
  
          
        }
        ul{
            display: inline;
        }
        .nav-item{
            margin-right: 20px;
            margin-top: -40px;
        }
        .nav-link{
            font-weight:bolder;
            color: white;
        }
        a:hover, a:active { 
            color: black;
        }
        .column {
            float: left;
            width: 50%;
           
        }
        .row{
            margin-left: 7%;
            margin-right: 5px;
            margin-top: -4%;
            
        }
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .card-img{
            height:480px;
            width:700px;
            margin-left: 7%;
            margin-top: 50px;
            
        }
       
       #Text h1{
           
            font-family: "Sofia", sans-serif;
            color:white;
            font-weight: bolder;
            text-shadow: 3px 3px 3px #ababab;
            
            

        }
        #Logout{
            transition: .4s;
            background-color: coral;
            color: white ;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.5);
            border: 2px solid white; 
            font-size: medium;
            margin-top: -5px;
            font-weight:bolder;

        }
        #Text{
            margin-top: 70px;
            margin-left: 7%;

        }
        .card-title2{
            margin-top: -30px;
            margin-left: 11%;
        }
        .card-title3{
            margin-top: -30px;
            margin-left: 18%;
        }
        .card-title{
            margin-top: -2px;
            font-family: "Sofia", sans-serif;
            color:white;
        }
        #Text p{
            color:white;
            /* font-weight: bold; */
            font-family: Georgia, serif;
            font-size: large;

        }
        

        
        </style>
  </head>
  <body>
  <img src="../Admin/Frontend/Images/Logo.png" id="navimg" alt="Company Logo" >
      <nav>
          
          <ul class="nav justify-content-end">
             
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">HOME</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">PRODUCT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CART</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">HELP</a>
                </li>
                <li class="nav-item">
                <a href="../Admin/Frontend/Signup.php"  id="Logout" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Admin Logins</a>
                </li>
            </ul>
        </nav>
        <div class="row">
            <div class="column" > 
                <div id ="Text">
                    <h1 class="card-title1">FRUITS</h1><br>
                    <h1 class="card-title2"> ON </h1><br>
                    <h1 class="card-title3">WHEELS</h1>
                    <h3 class="card-title">your number 1 fruit Shop</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                        Stand out online with a professional website, online store, or portfolio.
                         With Squarespace, you can turn any idea into a reality.</p>
                </div>
            </div>
            <div class="column"> 
                <img src="../Admin/Frontend/Images/CustomerPage.webp" onmouseover="imagefun()" id="getImage" class="card-img" alt="..." ></div>
          </div>
        

  
    	
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <script>
            function imagefun() {
                var Image_Id = document.getElementById('getImage');
                if (Image_Id.src.match("../Admin/Frontend/Images/CustomerPage.webp")) {
                    Image_Id.src = "../Admin/Frontend/Images/C3.webp";
                    Image_Id.src = "../Admin/Frontend/Images/C2.webp";
                   
                }
                else {
                    Image_Id.src = "../Admin/Frontend/Images/CustomerPage.webp";
                }
            }        
        </script>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>