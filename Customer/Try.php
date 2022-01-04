<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  .column {
  float: left;
  width: 50%;
}
h5{
            text-align: center;

        }

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.card-img{
            height:480px;
            width:550px;
            margin-left: 7%;
            margin-top: 50px;
            
        }
        #Text{
          margin-top:30px;
        }
</style>


</head>
<body>
<div class="row">
  <div class="column" id ="Text"> 
    <h5 class="card-title">FRUIT ON WHEELS</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.<br>you number 1 Fruit Shop</p></div>
  <div class="column"> <img src="../Admin/Frontend/Images/CustomerPage.webp" onmouseover="imagefun()" id="getImage" class="card-img" alt="..." ></div>
</div>


</body>
</html> 