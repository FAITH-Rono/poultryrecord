<!-- <?php
require_once('../controller/connection.php');
$query = "select *from birds";
$result = mysqli_query($con,$query);

?> -->
<?php 

require_once 'connection.php';

function display_data(){
    global $con;
    $query = "select *from birds";
    $result = mysqli_query($con,$query);
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>PoultryRecords</title>
</head>
<body>
    <div class="mainContent">
      <nav>
      <div class="mylogo">
                <!-- <img src="../images/cock.jpeg" alt="" width="60px" height="60px"> -->
                <!-- Name of farm -->
                <h2>POULTRY FARM</h2>
            </div>
            <div class="mynavigation">
              
            <ul>
                    <li>              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                  <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                  <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                </svg> Medicine Records</li>
                </ul>
            </div>
        </nav>
        <div class="treatment">
    <h2> Treatment Administered</h2>
    <p><strong> Date:</strong> YYYY-MM-DD</p>
    <p><strong> Medicine Used:</strong> Medicine Name</p>
    <p><strong> Dosage:</strong> Quantity</p>
    <p><strong> Notes:</strong> Additional notes if any</p>

    <!-- Example notes for treatment administered -->
    <p><strong>Administration Method:</strong> Orally administered</p>
    <p><strong>Observation Period:</strong> Monitor for 3 days for any adverse reactions or changes in behavior</p>
    <p><strong>Reapplication:</strong> If symptoms persist after 3 days, consult a veterinarian for further dosage</p>
    <p><strong>Withdrawal Period:</strong> Ensure a withdrawal period of 7 days before consuming eggs/meat</p>
    <p><strong>Veterinarian's Advice:</strong> Follow the veterinarian's instructions on storing the medicine at room temperature away from sunlight</p>
</div>
<footer>
<p>&copy;2023 Copyright poultry farm </p>
            <p> Contact: 0742438268</p>
            <div class="disclaimer">
            <h3>Disclaimer</h3>
            <p3>The information contained in these records is for reference purposes only and should not be considered as professional advice</p3>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>
<style>
    nav{
     background-color: #658e9a; 
    color: #fff;
    display: flex;
    justify-content: space-between;
    padding: 5px;
    padding-left: 30px;
    padding-right: 30px;
    align-items: center;
}

footer{
    background-color: #658e9a;
    color: white;
    padding: 20px;
    text-align: center;
    font-weight: 15px;
    border: 2px solid;
    /* position: relative;
    bottom: 0; */
}

.mylogo{
    display: flex;
    justify-content: space-around;
    align-items: center;
}

nav .mylogo img{
    padding-right: 60px;
}
.mylogo h2{
    font-weight: bold;
    font-size: 35px;
}

nav{
     background-color: #658e9a; 
    color: #fff;
    display: flex;
    justify-content: space-between;
    padding: 5px;
    padding-left: 30px;
    padding-right: 30px;
    align-items: center;
}
</style>