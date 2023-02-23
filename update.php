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

if (isset($_GET['Object1']) && isset($_GET['Value1']) &&
    isset($_GET['Object2']) && isset($_GET['Value2']) &&
    isset($_GET['Object3']) && isset($_GET['Value3']) &&
    isset($_GET['Object4']) && isset($_GET['Value4']) &&
    isset($_GET['Object5']) && isset($_GET['Value5']) &&
    isset($_GET['Data1']))   {
       
    $o1 = $_GET['Object1']; $v1 = $_GET['Value1'];
    $o2 = $_GET['Object2']; $v2 = $_GET['Value2'];
    $o3 = $_GET['Object3']; $v3 = $_GET['Value3'];
    $o4 = $_GET['Object4']; $v4 = $_GET['Value4'];
    $o5 = $_GET['Object5']; $v5 = $_GET['Value5'];
    $data1 = $_GET['Data1'];
    
    $sql = "UPDATE camera_image SET 
            Object1='$o1', Value1='$v1',
            Object2='$o2', Value2='$v2',
            Object3='$o3', Value3='$v3',
            Object4='$o4', Value4='$v4',
            Object5='$o5', Value5='$v5',
            Data1='$data1'
            
            ";
    if ($conn->query($sql) === TRUE) {
         echo "Record updated successfully";
    } 
    else {
        echo "Error updating record: " . $conn->error;
    }
    
}

$conn->close();
?>
