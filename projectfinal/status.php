<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "root", "db_esp32");

// Read tbl_dht table
$sql = mysqli_query($conn, "SELECT * FROM tbl_dht");

// Initialize $ultrasonic_status before the loop
$ultrasonic_status = '';

while ($data = mysqli_fetch_array($sql)) {
    // Fetch value from ultrasonic sensor for each row
    $ultrasonic_value = $data['ultrasonic'];

    // Test sensor value
    if ($ultrasonic_value <= 10) {
        $ultrasonic_status = "NEAR";
    } elseif ($ultrasonic_value > 10 && $ultrasonic_value <= 30) {
        $ultrasonic_status = "MEDIUM";
    } else {
        $ultrasonic_status = "FAR";
    }
}

// Close the database connection
mysqli_close($conn);
?>

<div style="text-align: center;">
    <?php echo "
        <span>
            $ultrasonic_status
        </span>";
    ?>
</div>
