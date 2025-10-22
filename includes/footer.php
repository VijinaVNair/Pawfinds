<?php
// footer.php - Contains the footer part of the page layout
?>

    </main>
    <footer>
        <div class="footer-content">
            <div class="footer-left">
                <img src="assets/images/logo.png" alt="PetAdopt Logo" class="footer-logo">
                <p>&copy; <?php echo date("Y"); ?> <span class="brand">Pawfind</span>. All rights reserved.</p>
            </div>
            <div class="footer-right">
                <ul class="footer-links">
                    <li><a href="privacy.php">Privacy Policy</a></li>
                    <li><a href="terms.php">Terms of Service</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>

<style>
    /* Footer Styles */
    footer {
        background-color: #2c3e50;
        color: #fff;
        padding: 30px 0;
        font-family: 'Poppins', sans-serif;
        margin-top: 40px;
        border-top: 4px solid #3498db;
    }

    .footer-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .footer-left {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .footer-logo {
        width: 50px; /* Adjust the size as needed */
        height: auto;
    }

    .footer-left p {
        margin: 0;
        font-size: 16px;
        color: #ecf0f1;
    }

    .brand {
        font-weight: 600;
        color: #3498db;
    }

    .footer-right ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        gap: 20px;
    }

    .footer-right ul li {
        display: inline-block;
    }

    .footer-right ul li a {
        color: #ecf0f1;
        text-decoration: none;
        font-size: 16px;
        transition: color 0.3s ease;
    }

    .footer-right ul li a:hover {
        color: #3498db;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .footer-content {
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }

        .footer-left {
            flex-direction: column;
            gap: 10px;
        }

        .footer-right ul {
            flex-direction: column;
            gap: 10px;
        }
    }
</style>