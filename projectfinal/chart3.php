<?php
// Connection to the database
$conn = mysqli_connect("localhost", "root", "root", "db_esp32");

// Read the latest data from tbl_dht table 
$ultrasonic = mysqli_query($conn, "SELECT distance FROM tbl_dht ORDER BY ID DESC LIMIT 1");

// Fetch value from field sensor
$data_ultrasonic = mysqli_fetch_array($ultrasonic);
$ultrasonic_value = $data_ultrasonic['distance'];

// Determine status based on specific value ranges for ultrasonic sensor
if ($ultrasonic_value <= 10) {
    $ultrasonic_status = "NEAR";
} elseif ($ultrasonic_value > 10 && $ultrasonic_value <= 30) {
    $ultrasonic_status = "MEDIUM";
} else {
    $ultrasonic_status = "FAR";
}

// Calculate the percentage
$percentage = ($ultrasonic_value / 100) * 100;
?>

<!-- Real-Time Ultrasonic Data using ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<!-- Canvas for the gauge -->
<div id="gauge1"></div>

<!-- Script for the ApexCharts -->
<script type="text/javascript">
    // Options for the ApexCharts
    var options = {
        chart: {
            height: 200,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                startAngle: -90,
                endAngle: 90,
                hollow: {
                    margin: 15,
                    size: '60%',
                },
                track: {
                    background: '#fff', // Set the background color of the gauge track
                },
                dataLabels: {
                    show: true,
                    name: {
                        show: false,
                    },
                    value: {
                        offsetY: 8,
                        fontSize: '20px',
                        formatter: function () {
                            return "<?php echo $ultrasonic_status; ?>"; // Display the status
                        },
                    },
                },
            },
        },
        series: [<?php echo $percentage; ?>],
        labels: ['Ultrasonic'],
    };

    // Create the chart
    var chart = new ApexCharts(document.querySelector("#gauge1"), options);

    chart.render();
</script>
