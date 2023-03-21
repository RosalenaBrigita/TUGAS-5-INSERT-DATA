<?php
include "conn.php";

    $customerNumber = $_POST['customerNumber'];
    $customerName = $_POST['customerName'];
    $contactLastName = $_POST['contactLastName'];
    $contactFirstName = $_POST['contactFirstName'];
    $phone = $_POST['phone'];
    $addressLine1 = $_POST['addressLine1'];
    $addressLine2 = isset($_POST['addressLine2']) ? $_POST['addressLine2'] : NULL;
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postalCode = $_POST['postalCode'];
    $country = $_POST['country'];
    $salesRepEmployeeNumber = $_POST['salesRepEmployeeNumber'];
    $creditLimit = $_POST['creditLimit'];

    
    $save = mysqli_query ($conn, "insert into customers values ('$customerNumber', '$customerName'
    , '$contactLastName', '$contactFirstName', '$phone', '$addressLine1', '$addressLine2', '$city',
    '$state', '$postalCode', '$country', '$salesRepEmployeeNumber', '$creditLimit ')");
   
   if($save){
        echo"<script>alert ('Data Berhasil disimpan')</script>";
        header ("refresh:0;cust.php");
   }
   else {
        echo"<script>alert ('Data Tidak Berhasil disimpan')</script>";
        
   }
   ?>