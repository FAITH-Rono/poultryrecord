<?php require "./controller/index.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
   <title>PoultryRecords</title>
</head>
<body>
    <div class="mainCont">
        <nav>
            <div class="mylogo">
                <img src="images/cock.jpeg" alt="" width="50px" height="50px">
                <!-- Name of farm -->
                <h2>POULTRY FARM RECORDS MANAGEMENT SYSTEM</h2>
            </div>
            <?php echo $_SESSION['email']; ?>
            <a href="logout.php">logout</a>
            <div class="mynavigation">
                <ul>

                <li><a href="index.php">Home</a></li>
                <li class="navigation-li"><a class="navigation-a" href="#about">About</a></li>
                <li><a href="Dashboard/birds.php">birds</a></li>
                <li><a href="Dashboard/financial.php">financial</a></li>
                <li><a href="Dashboard/medicine.php">medicine</a></li>
                <li><a href="Dashboard/production.php">production</a></li>
                <li><a href="Dashboard/feed.php">feed</a></li>
                    <li><a href="Register.php">Register</a></li>
                    <li><a href="Login.php">Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="mainContent">
            <!-- home -->
            <div class="home">
                <div class="homeText">
                   "Welcome to the Poultry Farm Records Management System (PFRMS)! Streamline your poultry farm operations with our comprehensive record-keeping solution. 
                </div>
            </div>
            <!-- About -->
            <div class="about">
                <h2>ABOUT US</h2>
                <p>Welcome to our poultry farm! We are a family-owned business dedicated to breeding and caring for top-quality chickens. Our passion for poultry and commitment to animal welfare drive us to provide you with healthy and happy roosters and hens. We take pride in our sustainable and responsible farming practices, ensuring that our birds are treated with respect while delivering the finest poultry products. Thank you for choosing us as your poultry provider; we look forward to exceeding your expectations with our dedication to excellence.</p>
            </div>
            <!-- History -->
            <div class="history">
                <h2>POULTRY FARM HISTORY</h2>
                <p>Our poultry farm has a rich history dating back many years. We have always been dedicated to the well-being of our birds, prioritizing their health and happiness in all aspects of our operations. Over time, we have continually improved our breeding practices and embraced sustainable methods to ensure the finest quality chickens. Our commitment to ethical and responsible farming has been unwavering, and we take great pride in treating our poultry with the utmost respect. As we look to the future, we remain dedicated to providing top-notch poultry products while minimizing our environmental impact. Thank you for being part of our journey, and we are excited to continue delivering excellence in poultry farming.</p>
            </div>
        </div>
        <footer>
            <p>&copy;2023 Copyright poultry farm </p>
            <p> Contact: 0742438268</p>
            <div class="disclaimer">
            <h3>Disclaimer</h3>
            <p3>The information contained in these records is for reference purposes only and should not be considered as professional advice</p3>
</div>
        </footer>
    </div>
</body>
</html>
