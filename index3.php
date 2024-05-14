<!DOCTYPE html>
<html>
<head>
    <title>HTML to MySQL Connection</title>
</head>
<body>
    <h2>Insert Data into MySQL Database</h2>
    <form action="insert.php" method="post">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname"><br><br>
        
        <label for="age">Age:</label>
        <input type="text" id="age" name="age"><br><br>
        
        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender"><br><br>
        
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>