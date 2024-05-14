<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Appliance Statistics</title>
<!-- Link ng Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
  body {
    font-family: Arial, sans-serif; /* Baguhin ang font */
    margin: 0;
    padding: 0;
  }
  .chart-container {
    padding: 10px;
  }
  .card-box {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
  }
  .title-box {
    margin-bottom: 10px;
    font-size: 20px;
    text-align: center; /* I-center ang teksto */
  }
</style>
</head>
<body>
<div class="title-box">
  <h1>Appliance Statistics</h1>
</div>
<div class="chart-container">
  <div class="card-box">
    <canvas id="wattageChart"></canvas>
  </div>
  <div class="card-box">
    <canvas id="timeofuseChart"></canvas>
  </div>
  <div class="card-box">
    <canvas id="energycostChart"></canvas>
  </div>
</div>
<div class="mobile-menu-overlay"></div>

<script>
// Simulang data para sa bawat kategorya ng appliances
var appliances = {
  "Refrigerator": { 
    "Wattage": 150,
    "Time of Use": 24,
    "Energy Cost": 15
  },
  "Television": { 
    "Wattage": 200,
    "Time of Use": 5,
    "Energy Cost": 7
  },
  "Microwave Oven": { 
    "Wattage": 1200,
    "Time of Use": 1,
    "Energy Cost": 10
  },
  "Electric Fan": { 
    "Wattage": 1000,
    "Time of Use": 2,
    "Energy Cost": 8
  },
  "Air Conditioner": { 
    "Wattage": 2000,
    "Time of Use": 6,
    "Energy Cost": 20
  },
  "Rice Cooker": { 
    "Wattage": 500,
    "Time of Use": 1,
    "Energy Cost": 5
  },
  "Electric Kettle": { 
    "Wattage": 1500,
    "Time of Use": 1,
    "Energy Cost": 10
  },
  "Blender": { 
    "Wattage": 700,
    "Time of Use": 1,
    "Energy Cost": 6
  },
  "Dishwasher": { 
    "Wattage": 1200,
    "Time of Use": 3,
    "Energy Cost": 12
  }
};

// Function para ipakita ang bar chart para sa bawat kategorya
document.addEventListener("DOMContentLoaded", function() {
  showChart('Wattage');
  showChart('Time of Use');
  showChart('Energy Cost');
});

function showChart(category) {
  var ctx = document.getElementById(category.replace(/\s+/g, '').toLowerCase() + 'Chart').getContext('2d');
  var labels = Object.keys(appliances);
  var data = labels.map(label => appliances[label][category]);
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: labels,
      datasets: [{
        label: category,
        data: data,
        backgroundColor: 'rgba(54, 162, 235, 0.5)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
}
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  // Kunin ang unang card box sa loob ng .chart-container
  var firstCardBox = document.querySelector('.chart-container .card-box');
  
  // Kunin ang sukat ng unang card box
  var cardBoxWidth = firstCardBox.offsetWidth;
  var cardBoxHeight = firstCardBox.offsetHeight;
  
  // Kunin ang mobile-menu-overlay
  var mobileMenuOverlay = document.querySelector('.mobile-menu-overlay');
  
  // Itakda ang sukat ng mobile-menu-overlay batay sa sukat ng unang card box
  mobileMenuOverlay.style.width = cardBoxWidth + 'px';
  mobileMenuOverlay.style.height = cardBoxHeight + 'px';
});
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.data-table').DataTable();
    });
</script>



</body>
</html>
