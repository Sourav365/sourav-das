<?php
$servername = "localhost";
$username = "id15991819_esp32cam";
$password = "*!EgEH\?m9*XVwg>";
$dbname = "id15991819_esp32";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['Data2']))   {
       
    $data2 = $_GET['Data2'];
    
    $sql = "UPDATE camera_image SET Data2='$data2' ";
            
    if ($conn->query($sql) === TRUE) {
         echo "Record updated successfully";
    } 
    else {
        echo "Error updating record: " . $conn->error;
    }
    
}

$conn->close();
?>
