<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .profile-card {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .profile-photo {
            position: relative;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 20px;
        }

        .avatar-photo {
            width: 100%;
            height: auto;
        }

        .edit-avatar {
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #007bff;
            color: #fff;
            padding: 5px;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .edit-avatar:hover {
            background-color: #0056b3;
        }

        .profile-info h5 {
            margin-bottom: 20px;
            color: #007bff;
            text-align: center;
            margin-top: 7px;
        }

        .profile-info ul {
            padding: 0;
            list-style-type: none;
        }

        .profile-info ul li {
            margin-bottom: 10px;
        }

        .profile-info span {
            font-weight: bold;
        }

        .text-center {
            text-align: center;
        }

        .text-muted {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="profile-card">
                    <div class="profile-photo">
                        <a href="#" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                        <img src=" Jerico111.jpg" alt="Profile Photo" class="avatar-photo">
                    </div>
                    <h5 class="text-center mb-0">Jerico Jonson</h5>
                    <div class="profile-info">
                        <h5 class="mb-3 text-blue">Contact Information</h5>
                        <ul>
                            <li>
                                <span>Email Address:</span> jerico@smartsocket.com
                            </li>
                            <li>
                                <span>Phone Number:</span> 123-456-7890
                            </li>
                            <li>
                                <span>Location:</span> Natipuan Nasugbu Batangas
                            </li>
                            <li>
                                <span>Street:</span> 411 Aplaya Street
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
