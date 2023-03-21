<?php
include "conn.php";

    $productCode = $_POST['productCode'];
    $productName = $_POST['productName'];
    $productLine = $_POST['productLine1'];
    $productScale = $_POST['productScale'];
    $productVendor = $_POST['productVendor'];
    $productDescription = $_POST['productDescription'];
    $quantityInStock = $_POST['quantityInStock'];
    $buyPrice = $_POST['buyPrice'];
    $MSRP = $_POST['MSRP'];

    $save = mysqli_query ($conn, "insert into products values ('$productCode', '$productName', '$productLine', '$productScale', '$productVendor', '$productDescription', '$quantityInStock', '$buyPrice', '$MSRP')");
  
    if($save){
     echo"<script>alert ('Data Berhasil disimpan')</script>";
     header ("refresh:0;prod.php");
}
else {
     echo"<script>alert ('Data Tidak Berhasil disimpan')</script>";
     header ("refresh:0;prod.php");
}
?>