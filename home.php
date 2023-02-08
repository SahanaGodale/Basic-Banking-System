<!DOCTYPE html>
<html>
    <title>
        SPay India Bank
    </title>
    <head>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript">
            Banners = new Array('templates/bank2.jpg','templates/bank8.jpg','templates/bank5.jpg'); 
            CurrentBanner = 0; 
            function DisplayBanners()
            {
            if(document.images)
            {
            CurrentBanner++;
            if(CurrentBanner == Banners.length)
            {
            CurrentBanner = 0
            }
            document.RotateBanner.src= Banners[CurrentBanner]
            setTimeout("DisplayBanners()",2000) 
            }
            }
            </script>
    </head>
    <body onload="DisplayBanners()">
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
      <br>
        <div class="hero-image">
            <img src="templates/bank5.jpg" width="101%" height="580px" name="RotateBanner" > 
            <div class="hero-text">
                <h1 style="font-size:40px">
            Surakshit hai asaan hai, Vishwas apni pehchan hai!
            </h1>
            <a href="customers.php"><button> Get Started</button></a>
            </div>   
        </div>

    </body>
</html>