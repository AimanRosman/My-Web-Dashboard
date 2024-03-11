<!-- sensor -->
<?php
    $conn = mysqli_connect("localhost", "root", "root", "db_esp32");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = mysqli_query($conn, "SELECT * FROM tbl_dht");

if (!$sql) {
    die("Query failed: " . mysqli_error($conn));
}

while ($data = mysqli_fetch_array($sql)) {
    $data_sensor = $data['distance'];
    
}

mysqli_close($conn);
?>

<div style="text-align: center;">
    <?php echo "
        <span>
            $data_sensor
        </span>"
    ?>
</div>