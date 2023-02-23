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

$sql = "SELECT * FROM camera_image";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
        "<br><img src='data:image/jpeg;base64,".$row["Data1"].$row["Data2"]. "'" . " ALIGN='left'" . "<br><hr>" .
        "<h3 style='color:red;'>" .
                 $row["Object1"] . ", " . $row["Value1"] .
        "<hr>" . $row["Object2"] . ", " . $row["Value2"] .
        "<hr>" . $row["Object3"] . ", " . $row["Value3"] .
        "<hr>" . $row["Object4"] . ", " . $row["Value4"] .
        "<hr>" . $row["Object5"] . ", " . $row["Value5"] .
        "<hr><br></h3>";
        //echo json_encode($row);
    }
} else {
    echo "0 results";
}

$conn->close();
?>
