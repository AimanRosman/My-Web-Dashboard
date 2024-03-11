<?php
// Connection to the database
$conn = mysqli_connect("localhost", "root", "root", "db_esp32");

// Read data from the table
$sql = mysqli_query($conn, "SELECT * FROM tbl_dht ORDER BY ID DESC");

// Read the topmost data
$data = mysqli_fetch_array($sql);

// Check if $data is not null before trying to access its offset
$humidity = isset($data['humidity']) ? $data['humidity'] : null;

// Test when the humidity value is not reading
if ($humidity === null) {
    $humidity = 0;
}

// Display the humidity value
echo $humidity;

// Close the database connection
mysqli_close($conn);
?>
