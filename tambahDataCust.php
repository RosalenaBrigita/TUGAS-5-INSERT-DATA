<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&family=Roboto+Slab:wght@700&display=swap');
        * {
            
            padding: 5px;
            box-sizing: border-box;
            margin:0 auto;
        }
        body {
            color:brown;
            font-weight:900;
            background:#ffdda7;
            font-family: 'Roboto Slab', serif;      
        }

        h1 {
            color:rgb(30, 27, 2);
            margin:20px;
        }
        
        input[type=submit], input[type=reset] , input[type=button] , input[type=text] #db {
            background-color: brown;
            color:#fff;
            border: none;
            padding: 16px 32px;
            text-decoration: none;
            font-family: 'Roboto Slab', serif;      
            margin: 4px 2px;
            cursor: pointer;
            border-radius:10px;
        }

        input[type=submit]:hover,input[type=reset]:hover,input[type=button]:hover{
            background-color: rgb(30, 27, 2);
            color: white;
            font-weight:700;
        }
        input[type=text], input[type=number], select[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            border:0px;
            box-sizing: border-box;
            color:rgb(30, 27, 2);
            opacity:0.5;
            font-weight:700;
        }
        input[type=text]:hover, input[type=number]:hover, select[type=text]:hover{
            opacity:1;
            border:2px;
            border-color:brown;
            border-style:groove;
        }
    </style>
</head>
<body>
    <h1><center>Tambah Data Customers</center></h1>

    <form action="simpanDataCust.php" method="post">
        <table id="db">
            <tr>
                <td width="200">Customer Number</td>
                <td>:</td>
                <td><input type="number" name="customerNumber" required></td>
            </tr>
            <tr>
                <td>Customer Name</td>
                <td>:</td>
                <td><input type="text" name="customerName" size="30" required></td>
            </tr>
            <tr>
                <td>Contact Last Name</td>
                <td>:</td>
                <td><input type="text" name="contactLastName" size="30" required></td>
            </tr>
            <tr>
                <td>Contact First Name</td>
                <td>:</td>
                <td><input type="text" name="contactFirstName" size="30" required></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>:</td>
                <td><input type="number" name="phone" size="30" required></td>
            </tr>
            <tr>
                <td>Address Line 1</td>
                <td>:</td>
                <td><input type="text" name="addressLine1" size="30" required></td>
            </tr>
            <tr>
                <td>Address Line 2</td>
                <td>:</td>
                <td><input type="text" name="addressLine2" size="30"></td>
            </tr>
            <tr>
                <td>City</td>
                <td>:</td>
                <td><input type="text" name="city" size="30" required></td>
            </tr>
            <tr>
                <td>State</td>
                <td>:</td>
                <td><input type="text" name="state" size="30"></td>
            </tr>
            <tr>
                <td>Postal Code</td>
                <td>:</td>
                <td><input type="number" name="postalCode" size="30"></td>
            </tr>
            <tr>
                <td>Country</td>
                <td>:</td>
                <td><input type="text" name="country" size="30" required></td>
            </tr>
            <tr>
                <td>Sales Rep Employee</td>
                <td>:</td>
                <td><select type="text" name="salesRepEmployeeNumber">
                    <option>---</option>
                    <?php
                    include "conn.php";
                    $query = mysqli_query($conn,"select * from employees where jobTitle = 'Sales Rep';") or die (mysqli_connect_error($conn));
                    while($data = mysqli_fetch_array($query)){
                        echo "<option value=$data[employeeNumber]> $data[lastName] $data[firstName] </option>";
                    }
                    ?>
                    </select>
            </tr>
            <tr>
                <td>Credit Limit</td>
                <td>:</td>
                <td><input type="number" name="creditLimit" size="30"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Save" name="save">
                    <input type="reset" value="Cancel" name="cancel">
                    <input type="button" value="Back" name="back" onclick="self.history.back()">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>


