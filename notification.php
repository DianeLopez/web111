<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Notification List</title>
    <style>
        /* CSS para sa mobile notification list */

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .user-notification {
            position: relative;
            z-index: 9999;
            margin: 20px auto;
            max-width: 400px; /* Itakda ang maksimum na lapad */
        }

        .notification-list {
            max-height: 80vh;
            overflow-y: auto;
        }

        .notification-list ul {
            padding: 0;
            margin: 0;
        }

        .notification-list li {
            list-style-type: none;
            padding: 10px;
            border-bottom: 1px solid #ccc;
            background-color: #fff;
        }

        .notification-list li:last-child {
            border-bottom: none;
        }

        .notification-list img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .notification-details {
            flex-grow: 1;
        }

        .notification-details h3 {
            margin: 0;
            font-size: 18px;
        }

        .notification-details h4 {
            font-size: 16px;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .notification-details p {
            margin: 0;
        }

        .join-button {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
        }

        .join-button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="user-notification">
        <div class="notification-list mx-h-350 customscroll">
            <ul>
                <li>
                    <a href="#">
                        <img src="img666.jpg" alt="">
                        <div class="notification-details">
                            <h3>Alert</h3>
                            <p>May bagong appliance na nakakabit sa iyong smart socket switch. Paki-update ang iyong sistema para ma-access ang bagong kinalalagyan ng saksak.</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img00.jpg" alt="">
                        <div class="notification-details">
                            <h3>Cristina</h3>
                            <h4>Group House Invitation</h4>
                            <p>You are invited to a group house on Smart Socket Switch. Click to join.</p>
                            <a href="admindashboard.php" class="join-button">JOIN GROUP</a>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</body>

</html>
