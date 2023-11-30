<?php 

require_once 'connection.php';

function display_data(){
    global $con;
    $query = "select *from birds";
    $result = mysqli_query($con,$query);
    return $result;
}
?>