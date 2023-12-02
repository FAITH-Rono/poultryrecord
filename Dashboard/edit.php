  
<?php 
$con = mysqli_connect('localhost', 'root', '', 'poultryfarm');
if (!$con){
    die("Connection Error");
}

// Assuming form data or variables containing updated information
$id = isset($_POST['id']) ? $_POST['id'] : ''; // Assuming 'id' is sent via POST from a form
$Breed = isset($_POST['Breed']) ? $_POST['Breed'] : ''; // Assuming 'Breed' is sent via POST from a form
$Age = isset($_POST['Age']) ? $_POST['Age'] : ''; // Assuming 'Age' is sent via POST from a form
$Sex = isset($_POST['Sex']) ? $_POST['Sex'] : ''; // Assuming 'Sex' is sent via POST from a form

// Construct SQL query for updating the table
$sql = "UPDATE birds SET Breed = '$Breed', Age = '$Age', Sex = '$Sex' WHERE id = '$id'";

// Execute query and check for success
if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}

// Close the connection
$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>birds update Form</title>
</head>
<body>
    <form action=" " method="post">
        <label for="breed">Breed:</label><br>
        <input type="text" id="breed" name="Breed"><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="Age"><br><br>

        <label for="sex">Sex:</label><br>
        <input type="text" id="sex" name="Sex"><br><br>

        <input type="submit" name = "submit" value="Submit">
    </form>
</body>
</html>
