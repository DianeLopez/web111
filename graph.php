<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Appliances Monitor</title>
<!-- Link ng Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Simulang data para sa mga naka-open na appliances
var openAppliances = {
    "Refrigerator": 1,
    "Television": 1,
    "Microwave Oven": 1,
    "Electric Fan": 1,
    "Air Conditioner": 1,
    "Rice Cooker": 1,
    "Electric Kettle": 1,
    "Blender": 1,
    "Dishwasher": 1
};

// Mga kulay ng mga appliances
var applianceColors = {
    "Refrigerator": "#007bff",        // Asul
    "Television": "#dc3545",           // Pula
    "Microwave Oven": "#ffc107",       // Dilaw
    "Electric Fan": "#17a2b8",         // Bughaw
    "Air Conditioner": "#6610f2",      // Lila
    "Rice Cooker": "#fd7e14",          // Kape
    "Electric Kettle": "#6f42c1",      // Violet
    "Blender": "#28a745",              // Berde
    "Dishwasher": "#20c997"            // Turkesa
};

// Function para ipakita ang circle chart para sa mga naka-open na appliances
document.addEventListener("DOMContentLoaded", function() {
    var ctx = document.getElementById('openAppliancesChart').getContext('2d');
    var labels = Object.keys(openAppliances);
    var data = Object.values(openAppliances);
    var colors = labels.map(appliance => applianceColors[appliance]);
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                label: 'Open Appliances',
                data: data,
                backgroundColor: colors,
                borderColor: 'rgba(255, 255, 255, 1)',
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    position: 'bottom',
                    align: 'center' // Align the legend to the center
                }
            }
        }
    });
});
</script>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.card-box {
    background-color: white;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    padding: 20px;
    margin: 20px auto;
    width: 90%;
    max-width: 400px; /* Maximum width */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

canvas {
    display: block;
    margin: 0 auto;
    max-width: 100%;
    height: auto;
}

h1 {
    text-align: center;
}
</style>
</head>
<body>
<div class="card-box">
    <h1>Appliances Monitor</h1>
    <canvas id="openAppliancesChart" width="300" height="300"></canvas> <!-- Adjusted canvas size -->
</div>
</body>
</html>
