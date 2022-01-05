<?php
require ("dbconnection.php");
require ("function.php");
if(isset($_POST['Submit'])){
    $prdtname=$_POST['pdtname'];
    $prdtprice=$_POST['pdtprice'];
    $prdtquantity=$_POST['pdtquantity'];
    $prdtdescription=$_POST['pdtdes'];
    //$filename = $_FILES["pdtimg"]["name"];
    $mail="Product upload was successful";
    Insert("INSERT INTO `product`(`product_name`, `unit_price`, `quantiy`, `description`)
     VALUES ('$prdtname','$prdtprice','$prdtquantity','$prdtdescription')", $mail);   
}
?>




