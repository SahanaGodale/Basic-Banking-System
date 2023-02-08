<!DOCTYPE html>
<html>
<title>
        SPay India Bank
    </title>
<head>
<link rel="stylesheet" href="style.css">

</head>

<body>
<div class="navbar">
            <div class="items">
                <img src="templates/logo.png" width="100px" height="65px">
                
                <h1 style="color: rgb(5, 66, 177);"> SPay </h1>
                <h1 style="color: rgb(6, 85, 4);">India</h1>
               
                <a href="home.php">Home</a>
          
                <a href="customers.php">View Customers</a>
                <a href="transactions.php">Transaction history</a>
                
            </div>         
            
        </div>



	<div class="container">
    <h2 style="text-align:center;">Transfer History</h2>
        
    <table id="customers">
  <tr>
    <th>Sr No.</th>
    <th>Sender Name</th>
    <th>Receiver Name</th>
    <th>Amount Transfer</th>
    <th>Date & Time</th>
  </tr>
       
        
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

                    <tr style="color : white;">
                        <td ><?php echo $rows['sno'] ?></td>
                        <td ><?php echo $rows['sender']?></td>
                        <td ><?php echo $rows['receiver']?></td>
                        <td ><?php echo $rows['balance']?></td>
                        <td ><?php echo $rows['datetime']?></td>
                      
                    </tr>
                
        <?php
            }

        ?>
    </table>

    
</div>
</body>
</html>