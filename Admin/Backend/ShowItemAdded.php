<?php
function Show(){
require ("dbconnection.php");
require ("function.php");
$sqlselect="SELECT `product_name`, `unit_price`, `quantiy`, `description` FROM `product`";
$selectResult=$conn->query($sqlselect);
if ($selectResult->num_rows > 0) {
    while($row = $selectResult->fetch_assoc()) {
        $prdtname = $row['product_name'];
        $prdtprice=$row['unit_price'];
        $prdtquantity = $row['quantiy'];
        $prdtdescription=$row['description'];
        ItemTable($prdtname,$prdtprice,$prdtquantity,$prdtdescription);
     }
    }
     else{
       echo "result 0";
     }
  
    }   

?>


