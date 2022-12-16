<?php
require 'connection.php';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BINCOM Solution1</title>
</head>
<body>
    <?php include_once 'nav.php';?>
 
    <main>
        <div class="text-container">
            <h1>Check for polling unit result</h1>
        </div>
        <form action="" method="get">
            <div class="form-input">
            <Label>Select the polling unit result to display</Label>
            <select name="pollingUnit">
            <!-- php code to read polling units from database-->
            <?php 
            $sql= "SELECT * from polling_unit WHERE polling_unit_name !=''";
            $result = mysqli_query($con,$sql);
            
            if($result){
              while ($row=mysqli_fetch_assoc($result)) {
                $polling_unit_uniqueid=$row['uniqueid'];
                $polling_unit_name=$row['polling_unit_name'];

                
                echo ' <tr>
                <option value="'.$polling_unit_uniqueid.'"><b>'.$polling_unit_name.'</b></option>
                
              </tr>' ;   
              }
            }
          ?>
          </select>
            </div>
            <div class="form-input">
                <input type="submit" value="Display" name="display">
            </div>

        </form>
    </main>
</body>
</html>