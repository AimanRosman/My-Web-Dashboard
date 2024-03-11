<?php
$conn = mysqli_connect("localhost", "root", "root", "db_esp32");

// Get values from the Arduino
$temp = $_GET['temp'];
$hum = $_GET['hum'];
$distance = $_GET['distance'];
$date = date("Y-m-d H:i:s");

mysqli_query($conn, "ALTER TABLE tbl_dht AUTO_INCREMENT=1");

// Insert the data into the database
$stmt = mysqli_prepare($conn, "INSERT INTO tbl_dht (temperature, humidity, distance, date) VALUES (?, ?, ?, ?)");

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "ssss", $temp, $hum, $distance, $date);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Success";
    } else {
        echo "Failed";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Prepared statement failed";
}

mysqli_close($conn);
?>
