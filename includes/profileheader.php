<?php
// Start the session only if it hasn't been started already
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Link to the main CSS -->
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> 
    <style>
        /* Header and Navigation Styles */
        header {
            background: linear-gradient(135deg, rgb(37, 150, 190), #2287BD);
            color: rgb(26, 121, 179);
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo a {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .logo a:hover {
            color: #3498db;
        }

        .logo img {
            width: 120px;
            height: 60px;
            margin-right: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            padding: 8px 12px;
            border-radius: 4px;
            transition: background-color 0.3s ease, color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px; /* Ensure space between icon and text */
        }

        nav ul li a:hover {
            background-color: #3498db;
            color: #fff;
        }

        /* Responsive Navigation */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
            }

            nav ul li {
                display: block;
            }

            nav ul li a {
                display: flex;
                padding: 10px;
            }
        }
    </style>

</head>
<body>
    <!-- Navigation Bar -->
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="assets/images/logo.png" alt="PawFind Logo"> <!-- Corrected path to logo -->
            </a>
        </div>

            <nav>
                <ul>
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="adopt.php"><i class="fas fa-paw"></i> Browse Pets</a></li>
                    <li><a href="profile.php"><i class="fas fa-user"></i> Activity</a></li>
                    <li><a href="donation_history.php"><i class="fas fa-hand-holding-heart"></i> Donation History</a></li>
                    <li><a href="adoption_history.php"><i class="fas fa-clipboard-list"></i> Adoption History</a></li>
                    <li><a href="manage_requests.php"><i class="fas fa-cogs"></i> Manage Request</a></li>
                </ul>
            </nav>
        </div>
    </header>

</body>
</html>
