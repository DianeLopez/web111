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
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 40px; 
        border: 2px solid #ccc; 
        border-radius: 10px; 
        padding: 20px; 
        background-repeat: no-repeat; 
        background-size: cover; 
        background-position: center; 
        width: 300px;
        height: 250px; 
    }

    .object-name {
        color: white; /* Set text color to white */
        margin-top: 10px;
    }

    .switch-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Slider switch styles */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        margin-bottom: 10px;
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
        right: 0;
        bottom: 0;
        background-color: #ccc;
        transition: .4s;
        border-radius: 34px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
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
        transform: translateX(26px);
    }

    /* Background images for appliances */
    .air-conditioner-bg {
        background-image: url('air_conditioner_bg.jpg'); 
    }
    .lightbulb-bg {
        background-image: url('lightbulb_bg.jpg'); 
    }

    .tv-bg {
        background-image: url('tv_bg.jpg'); 
    }
     

    /* Style for modal */
    .modal {
        display: none; 
        position: fixed; 
        z-index: 1; 
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%; 
        background-color: rgba(0,0,0,0.4); 
    }

    /* Modal content */
    .modal-content {
        background-color:  #f0f0f0;
        margin: 20% auto; 
        padding: 18px;
        border: 1px solid #888;
        width: 30%; 
        text-align: center; 
        border-radius: 25px; 
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
        background-color: #4CAF50; 
        color: white;
    }

    #confirmNo {
        background-color: #f44336; 
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
        <div class="object-container air-conditioner-bg"> 
            <div class="object-name">Air Conditioner</div>
            <div class="switch-container">
                <label class="switch">
                    <input id="airConditionerSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <!-- Second Row -->
        <div class="object-container lightbulb-bg"> 
            <div class="object-name">Light Bulb</div>
            <div class="switch-container">
                <label class="switch">
                    <input id="lightbulbSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <!-- Third Row -->
        <div class="object-container tv-bg"> 
            <div class="object-name">Television</div>
            <div class="switch-container">
                <label class="switch">
                    <input id="televisionSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <!-- Fourth Row -->
        <div class="object-container" style="background-color: #ccc;" onclick="showAddRoomModal()">
            <div class="object-name">Add Room</div>
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

<!-- Modal for adding a new room -->
<div id="addRoomModal" class="modal">
    <div class="modal-content">
        <label for="roomName">Room Name:</label>
        <input type="text" id="roomName" name="roomName" required>
        <label for="roomPicture">Choose Picture:</label>
        <input type="file" id="roomPicture" name="roomPicture" accept="image/*" required>
        <button id="confirmAddRoom" class="modal-btn" onclick="addNewRoom()">Add Room</button>
        <button id="cancelAddRoom" class="modal-btn" onclick="hideAddRoomModal()">Cancel</button>
    </div>
</div>

<script>
    function showModal() {
        document.getElementById('confirmModal').style.display = 'block';
    }

    function hideModal() {
        document.getElementById('confirmModal').style.display = 'none';
    }

    function addApplianceListeners(applianceId) {
        document.getElementById(applianceId).addEventListener('change', function() {
            if (!this.checked) {
                showModal(); 
                currentApplianceId = applianceId; 
            }
        });
    }

    document.getElementById('confirmYes').addEventListener('click', function() {
        console.log('Appliance successfully turned Off.');
        hideModal(); 
        document.getElementById(currentApplianceId).checked = false; 
    });

    document.getElementById('confirmNo').addEventListener('click', function() {
        hideModal(); 
        if (currentApplianceId) {
            document.getElementById(currentApplianceId).checked = true; 
        }
    });

    function showAddRoomModal() {
        document.getElementById('addRoomModal').style.display = 'block';
    }

    function hideAddRoomModal() {
        document.getElementById('addRoomModal').style.display = 'none';
    }

    function addNewRoom() {
        const roomName = document.getElementById('roomName').value;
        const roomPicture = document.getElementById('roomPicture').files[0];
        if (roomName.trim() !== '' && roomPicture) {
            console.log('Room Name:', roomName);
            console.log('Room Picture:', roomPicture);

            const newFolder = document.createElement('div');
            newFolder.classList.add('object-container');
            newFolder.onclick = function() { goToPage('room.php') };

            const pName = document.createElement('p');
            pName.innerText = roomName;
            const pSwitch = document.createElement('p');
            pSwitch.innerText = 'Switch';
            const switchContainer = document.createElement('div');
            switchContainer.classList.add('switch-container');
            switchContainer.appendChild(pSwitch);

            newFolder.appendChild(pName);
            newFolder.appendChild(switchContainer);

            const addRoomContainer = document.querySelector('.row');
            addRoomContainer.insertBefore(newFolder, addRoomContainer.lastElementChild);

            hideAddRoomModal(); 
        } else {
            alert('Please enter a valid room name and choose a picture.');
        }
    }
</script>

</body>
</html>
