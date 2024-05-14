
		<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smart Home Control</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0; /* Adding a background color */
    }

    .container {
        text-align: center;
        margin-top: 50px;
    }

    .row {
        display: flex;
        justify-content: space-around;
        margin-bottom: 20px; /* Adjust as needed */
    }

    .object-container {
        position: relative; /* Added */
        display: flex;
        align-items: center;
        justify-content: center; 
        flex-direction: column; 
        margin-bottom: 40px; 
        border: 2px solid #ccc; 
        border-radius: 10px; 
        padding: 20px; /* Increased padding */
        background-repeat: no-repeat; /* Prevent background from repeating */
        background-size: cover; /* Cover the entire container */
        background-position: center; /* Center the background image */
        width: 300px; /* Adjust width */
        height: 200px; /* Adjust height */
    }

    .object-name {
        position: absolute; /* Added */
        top: 10px; /* Added */
        left: 10px; /* Added */
        color: white; /* Set text color to white */
    }

    .switch-container {
        position: relative;
        width: 60px;
        height: 34px;
    }

    .switch {
        position: absolute;
        bottom: 10px; /* Adjusted */
        right: 10px; /* Adjusted */
        transform: translateY(-50%);
        width: 34px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 34px;
        width: 60px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 50%;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Background images for appliances */
    .electric-fan-bg {
        background-image: url('electric_fan_bg.jpg'); /* Replace 'electric_fan_bg.jpg' with your image path */
    }

    /* Style for modal */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
      
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal content */
    .modal-content {
        background-color:  #f0f0f0;
        margin: 20% auto; /* 15% from the top and centered */
        padding: 18px;
        border: 1px solid #888;
        width: 30%; /* Adjusted width */
        text-align: center; /* Center the content */
        border-radius: 25px; /* Rounded corners */
    }

    /* Modal buttons */
    .modal-btn {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
    }

    #confirmYes {
        background-color: #4CAF50; /* Green */
        color: white;
    }

    #confirmNo {
        background-color: #f44336; /* Red */
        color: white;
    }

    .modal-btn:hover {
        background-color: #ddd;
    }
</style>
</head>
<body>

<div class="container">
    <h2>Smart Home Control</h2>
    <div class="row">
        <!-- First Row -->
        <div class="object-container electric-fan-bg"> <!-- Adding electric fan background -->
            <div class="object-name">Electric Fan</div>
            <div class="switch-container">
                <label class="switch">
                    <input id="electricFanSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Modal for confirmation -->
<div id="confirmModal" class="modal">
    <div class="modal-content">
        <p>Are you sure you want to turn off the appliance?</p>
        <button id="confirmYes" class="modal-btn">Yes</button>
        <button id="confirmNo" class="modal-btn">No</button>
    </div>
</div>

<script>
let currentApplianceId = null; // Variable to store the ID of the currently selected appliance

// Function to show modal
function showModal() {
    document.getElementById('confirmModal').style.display = 'block';
}

// Function to hide modal
function hideModal() {
    document.getElementById('confirmModal').style.display = 'none';
}

// Add event listeners for each appliance switch
function addApplianceListeners(applianceId) {
    document.getElementById(applianceId).addEventListener('change', function() {
        if (!this.checked) {
            showModal(); // Show confirmation modal
            currentApplianceId = applianceId; // Store the ID of the current appliance
        }
    });
}

// Add event listener for Yes button in modal
document.getElementById('confirmYes').addEventListener('click', function() {
    console.log('Appliance successfully turned Off.');
    hideModal(); // Hide modal
    document.getElementById(currentApplianceId).checked = false; // Turn off the current appliance
});

// Add event listener for No button in modal
document.getElementById('confirmNo').addEventListener('click', function() {
    hideModal(); // Hide modal
    if (currentApplianceId) {
        document.getElementById(currentApplianceId).checked = true; // Keep the appliance on
    }
});

// Add listeners for each appliance
addApplianceListeners('electricFanSwitch');

</script>




	
</body>
</html>