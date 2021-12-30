<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="Images\Logo.png">
    <!-- <link rel="stylesheet" href="productstyle.css"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add Product page</title>

    <style>
        .float-container {
            border: 3px solid #ffff;
            /* padding: 10px; */
            
            
        }
        
        .float-child {
        /* padding-top:10px; */
            width: 50%;
            float: left;
            /* padding: 20px;
            margin-top:10px; */
            display: inline-block;
            
        }
        
        input[type=text]{
             width: 75%;
             padding: 10px;
             margin: 5px 0 15px 0;
             display: inline-block;
             background:white;
             border-radius: 30px;
             border:1px solid gray;

        }
        
        input[type=file]{

             padding: 15px;
             margin: 5px 0 22px 0;
             display: inline-block;
             background:whitesmoke;
             border-radius: 30px;
        }

        .submit1 {
            background-color: coral;
            color: white;
            font-weight: bolder;
            padding: 14px 20px;
            margin: 8px 110px;
            border-radius: 20px;
            cursor: pointer;
            width: 50%;
            opacity: 0.9;
        }
        #img-container{
            margin:0px;
            padding:0px;
        }

        form{
            color:coral;
        }
        h3{
            margin-left:15%;
            font-weight:bolder;
        }
        body{
            /* font-family: Georgia, serif; */
            font-family: 'Courier New', monospace;
        }



        
        
    </style>
    
  </head>
  <body>
      <div class="float-container">
          <div class="float-child " style="width: 45%; padding: 20px; margin-top:10px;">
              <form method="post" action="..\Backend\AddResult.php">
                  <h3> Upload New Product</h3>
                  <label for="pdtname">Product Name:</label><br>
                  <input type="text" name="pdtname"><br>

                  <label for="pdtprice">Product Price (GHS) </label><br>
                  <input type="text"  name="pdtprice"><br>

                  <label for="pdtquantity">Quantity Available</label><br>
                  <input type="text"  name="pdtquantity"><br>

                  <label for="pdtdes">Description</label><br>
                  <input type="text"  name="pdtdes"><br>

                  <label for="pdtimg">Product Image</label><br>
                  <input type="file" name="pdtimg"><br>

                  <input type="submit" value="Add Item" class="submit1" name="Submit">
                </form>
            </div>

            <div class="float-child " id= "img-container">
                <img src="Images\f6.jpg" alt="" width="920px"  height="700px" style="border-radius:20px;">
            </div>

        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>