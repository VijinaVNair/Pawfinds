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
    <title>Pet Adoption and Donation</title>
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
            gap: 8px;
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
                <!-- Home, Adopt, Donate visible for all users -->
                <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="adopt.php"><i class="fas fa-paw"></i> Adopt</a></li>
                <li><a href="donor_dashboard.php"><i class="fas fa-hand-holding-heart"></i> Donate</a></li>
                <li><a href="success_story_view.php"><i class="fas fa-diamond"></i> Success Story</a></li>
                
                <?php if (isset($_SESSION['user_id'])): ?>
                    <!-- These items are only visible if the user is logged in -->
                    <li><a href="adoption_status.php"><i class="fas fa-tasks"></i> Status</a></li>
                    <li><a href="pet_service.php"><i class="fas fa-star"></i>Pet Service</a></li>
                    <!-- <li><a href="manage_requests.php"><i class="fas fa-tasks"></i> Manage Requests</a></li> -->
                    <!-- <li><a href="history.php"><i class="fas fa-history"></i> Adopt History</a></li> -->
                    <li><a href="dashboard.php"><i class="fas fa-user"></i> Profile</a></li>
                    <li><a href="success_story.php"><i class="fas fa-star"></i>Story</a></li>
                  
                    <!-- Display logout link if the user is logged in -->
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                <?php else: ?>
                    <!-- Display login and signup links if the user is not logged in -->
                    <li><a href="ls.html"><i class="fas fa-sign-in-alt"></i> Login/Signup</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>



    <main>
        <!-- Content goes here -->
    </main>

</body>
</html>
