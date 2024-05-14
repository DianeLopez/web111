<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f5f9; /* Subtle blue background for the body */
        }
        #dashboard {
            width: 90%;
            max-width: 400px; /* Adjust maximum width for smaller screens */
            margin: 20px auto;
            padding: 20px;
            background-color: #add8e6; /* Light blue or sky blue background for the dashboard content */
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Subtle shadow effect */
        }
        #dashboard h2 {
            text-align: center;
        }
        #dashboard ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        #dashboard ul li {
            border-top: 1px solid #eee;
        }
        #dashboard ul li:last-child {
            border-bottom: 1px solid #eee;
        }
        #dashboard ul li a {
            display: block;
            padding: 15px 0;
            text-decoration: none;
            color: #333;
            text-align: center;
        }
        #dashboard hr {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid #ccc;
        }
        #dashboard p {
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="dashboard">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="graph.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="rooms.php">Rooms</a></li>
            <li><a href="family.php">Family Members</a></li>
            <li><a href="analytics.php">Analytics</a></li>
            <li><a href="chat.php">Chat</a></li>
            <li><a href="notification.php">Notification</a></li>
            <li><a href="help.php">Help</a></li>
        </ul>
      
        <hr>
        <p><a href="index1.php">Log Out</a></p>
    </div>
</body>
</html>
