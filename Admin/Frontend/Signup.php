<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="icon" href="Images\Logo.png">
    <title>ADMIN SIGNUP</title>
    <style>
    body {
        background-image: url('Images/C4.webp');
       
        
         background-size: cover;
         font-family: 'Courier New', monospace;
         font-weight: bold;
         
         
      }
      
      .Form{
          width: 570px;
          height: 600px;
          border-radius: 10px;
          border: 3px solid coral;
          margin-top: 3%;
          margin-left: 28%;
          background-color: white;
          color: black;
      }
      
      .Topic{
          text-align: left;
          margin-top: -20px;
          height: 60px;
          background-color: coral;
          color: white;
          margin-bottom: 15px;
          box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.5);
      }
      
      /* Full-width inputs */
      input[type=email], input[type=password],input[type=text] {
        width: 85%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 30px;
        margin-left: 5%;
      }
      
      button {
          background-color:coral;
          color: white;
          width: 50%;
          padding: 14px 20px;
          margin: 8px 100px;
          border-radius: 30px;
          cursor: pointer;
          font-family: Georgia, serif;
          font-size: medium;
          
          
        }
        #Topic{
            font-family: "Sofia", sans-serif;
            margin-left:7%;
            text-align: center;
            

        }
        input[type=radio]{
            margin-left:7%; 
            
        }
        p{
           
            margin-left:18%;
        }
        
        </style>
</head>
<body>

    <div class="Form">
          
        <form method= "post" action="..\Backend\SignupResult.php">
            <div class="Topic">
                  <h2 id="Topic">Signup </h2>
                  
            </div>
            <label for="fname" style="margin-left:7%;" >First Name </label><br>
            <input type="text"  name="fname" required><br>

            <label for="lname" style="margin-left:7%;" >Last Name </label><br>
            <input type="text"  name="lname" required><br>
            
            <label for="email" style="margin-left:7%;" >Email </label><br>
            <input type="email"  name="email" required><br>

            <label for="psw" style="margin-left:7%;" >Password</label><br>
            <input type="password"  name="psw" required><br><br>
            
            <input type="radio"  name="gender"  required>Male<br>
            <input type="radio"  name="gender" required>Female <br>
            <input type="radio"  name="gender"  required>Other<br>

            <button  type="submit" id="Log"  name= "LoginSubmit" > Submit</button><br>

            <p> Already have an account?<a href="Login.php">Login</a></p>
        </form>
    </div>

</body>
</html>