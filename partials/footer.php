<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Feedback4U </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        
        body {
            background: #f8f9fb;
            font-family: "Euclid Circular A", "Poppins", sans-serif;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        footer {
         
            left: 0;
            bottom: 0;
            right: 0;
            padding-bottom: 20px;
            background: #0a1535;
            color: #f9f9f9;
        }

        .content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-details {
            display: flex;
            align-items: center;
            font-size: 20px;
        }

        .logo-details i {
            font-size: 28px;
            margin-right: 10px;
        }

        .media-icons a {
            color: white;
            font-size: 20px;
            margin-right: 15px;
            transition: 0.3s;
        }

        .media-icons a:hover {
            color: #007bff;
        }

        .link-boxes {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            margin-top: 20px;
            gap: 20px;
        }

        .box {
            list-style: none;
        }

        .box li {
            margin-bottom: 8px;
        }

        .box a {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.9);
            transition: 0.3s;
        }

        .box a:hover {
            color: #007bff;
        }

        .input-box input[type="text"] {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .input-box input[type="button"] {
            width: 100%;
            padding: 8px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        .bottom-details {
            text-align: center;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 14px;
        }

        .bottom-details a {
            color: white;
            margin-left: 10px;
            text-decoration: none;
        }

        .bottom-details a:hover {
            color: #007bff;
        }

        </style>

</head>
<body>

<footer>
    <div class="content">
        <div class="top">
            <div class="logo-details">
                <i class="fab fa-slack"></i>
                <span class="logo_name">Feedback4U</span>
            </div>
            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        
        <div class="link-boxes">
            <ul class="box">
                <li class="link_name">Company</li>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact us</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Get started</a></li>
            </ul>
            <ul class="box">
                <li class="link_name">Services</li>
                <li><a href="#">Real-time Monitoring</a></li>
                <li><a href="#">Fault Detection & Alerts</a></li>
                <li><a href="#">Power Usage Analysis</a></li>
                <li><a href="#">User Feedback System</a></li>
            </ul>
            <ul class="box">
                <li class="link_name">Account</li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Your Account</a></li>
                <li><a href="#">Preferences</a></li>
                <li><a href="#">Feedbacks</a></li>
            </ul>
            <ul class="box">
                <li class="link_name">Quick Support</li>
                <li><a href="#">📩 Report an Issue</a></li>
                <li><a href="#">📞 Customer Support</a></li>
                <li><a href="#">📧 Email: support@feedback4U.com</a></li>
            </ul>
            <ul class="box input-box">
                <li class="link_name">NOTIFICATIONS</li>
                <li><input type="text" placeholder="Enter your email"></li>
                <li><input type="button" value="Notify Me"></li>
            </ul>
        </div>
    </div>
    
    <div class="bottom-details">
        <div class="bottom_text">
            <span class="copyright_text">© 2024 Feedback4U. All rights reserved.</span>
            <span class="policy_terms">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
            </span>
        </div>
    </div>
</footer>

</body>
</html>
';

?>