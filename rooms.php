<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Socket Switch</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        #header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        #appTitle {
            font-size: 24px;
            font-weight: bold;
        }

        #status {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        #on {
            color: green;
        }

        #off {
            color: red;
        }

        #dashboard {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 90%;
            max-width: 800px;
            margin-bottom: 20px;
        }

        .folder {
            width: 150px;
            height: 150px;
            text-align: center;
            margin: 10px;
            border: 2px solid black;
            border-radius: 10px;
            padding: 10px;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .folder img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .folder p {
            margin: 0;
            font-weight: bold;
        }

        .number {
            color: #2ECC71;
            font-size: 24px;
            margin-top: auto;
        }

        .add-room {
            width: 150px;
            height: 150px;
            text-align: center;
            margin: 10px;
            border: 2px dashed black;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div id="header">
        <p id="appTitle">Smart Socket Switch</p>
    </div>

    <div id="status">
        <p id="on">Appliances On: <span id="onCount">5</span></p>
        <p id="off">Appliances Off: <span id="offCount">5</span></p>
    </div>

    <div id="dashboard">
        <!-- Room 1 -->
        <div class="folder" onclick="goToPage('jerico.php')">
            <p>Jerico Room</p>
            <img src="Jerico Room.jpg" alt="Jerico Room">
            <p id="folder1Count" class="number">0</p>
        </div>

        <!-- Room 2 -->
        <div class="folder" onclick="goToPage('cristina.php')">
            <p>Cristina Room</p>
            <img src="Cristina Room.jpg" alt="Cristina Room">
            <p id="folder2Count" class="number">0</p>
        </div>

        <!-- Room 3 -->
        <div class="folder" onclick="goToPage('joe.php')">
            <p>Joe Room</p>
            <img src="Joe Honey Room.jpg" alt="Joe Room">
            <p id="folder3Count" class="number">0</p>
        </div>

        <!-- Room 4 -->
        <div class="folder" onclick="goToPage('kathleen.php')">
            <p>Kathleen Room</p>
            <img src="Kathleen Room.jpg" alt="Kathleen Room">
            <p id="folder4Count" class="number">0</p>
        </div>

        <!-- Room 5 -->
        <div class="folder" onclick="goToPage('rovic.php')">
            <p>Rovic Room</p>
            <img src="Rovic Room.jpg" alt="Rovic Room">
            <p id="folder5Count" class="number">0</p>
        </div>

        <!-- Room 6 -->
        <div class="folder" onclick="goToPage('kitchen.php')">
            <p>Kitchen Room </p>
            <img src="Kitchen Room.jpg" alt="Kitchen Room">
            <p id="folder6Count" class="number">0</p>
        </div>

        <!-- Room 7 -->
        <div class="folder" onclick="goToPage('dining.php')">
            <p>Dining Room</p>
            <img src="Dining Room.jpg" alt="Dining Room">
            <p id="folder7Count" class="number">0</p>
        </div>

        <!-- Room 8 -->
        <div class="folder" onclick="goToPage('living.php')">
            <p>Living Room</p>
            <img src="Living Room.jpg" alt="Living Room">
            <p id="folder8Count" class="number">0</p>
        </div>

        <!-- Add Room -->
        <div class="add-room" onclick="goToAddDevice()">
            +
        </div>
    </div>

    <script>
        // Simulang JavaScript para sa pag-update ng counts
        let onCount = 5;
        let offCount = 5;

        function updateCounts() {
            // I-update ang counts
            onCount = Math.floor(Math.random() * 20);
            offCount = 20 - onCount;

            // I-update ang HTML na nakakasalamuha sa counts
            document.getElementById("onCount").innerText = onCount;
            document.getElementById("offCount").innerText = offCount;
        }

        // I-set ang interval para sa otomatikong pag-update kada 3 segundo
        setInterval(updateCounts, 3000);

        // Function to update the numbers in each room
        function updateRoomNumbers() {
            for (let i = 1; i <= 8; i++) {
                const roomId = "folder" + i + "Count";
                const randomNumber = Math.floor(Math.random() * 10) + 1;
                document.getElementById(roomId).innerText = randomNumber;
            }
        }

        // Set interval to update room numbers every 3 seconds
        setInterval(updateRoomNumbers, 3000);

        function goToPage(page) {
            window.location.href = page;
        }

        // Function to go to add device page
        function goToAddDevice() {
            window.location.href = 'add device.php';
        }
    </script>
</body>
</html>
