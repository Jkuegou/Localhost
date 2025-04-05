<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juniorfood - Order Tracking</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f9f9f9;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles - Same as your dashboard */
        header {
            padding: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 40px;
            background-color: white;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-text {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .logo-text span {
            color: #ff7000;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-link {
            text-decoration: none;
            color: #666;
            font-size: 16px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #ff7000;
        }

        .nav-link.active {
            color: #ff7000;
            font-weight: 600;
        }

        .search-cart-profile {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-container {
            position: relative;
        }

        .search-input {
            padding: 10px 15px;
            padding-left: 40px;
            border-radius: 25px;
            border: 1px solid #ddd;
            width: 250px;
            font-size: 14px;
            outline: none;
            background-color: #f5f5f5;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }

        .cart-container {
            position: relative;
        }

        .cart-icon {
            font-size: 20px;
            color: #333;
            cursor: pointer;
        }

        .cart-badge {
            position: absolute;
            top: -8px;
            right: -8px;
            background-color: #ff7000;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
        }

        .profile-container {
            position: relative;
        }

        .profile-img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            cursor: pointer;
            border: 2px solid #eee;
        }

        .profile-dropdown {
            position: absolute;
            top: 45px;
            right: 0;
            background-color: white;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 10px 0;
            min-width: 180px;
            display: none;
            z-index: 200;
        }

        .profile-dropdown.active {
            display: block;
        }

        .dropdown-item {
            padding: 10px 15px;
            display: block;
            color: #333;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .dropdown-item:hover {
            background-color: #f5f5f5;
            color: #ff7000;
        }

        .dropdown-divider {
            height: 1px;
            background-color: #eee;
            margin: 5px 0;
        }

        /* Tracking Page Specific Styles */
        .page-title {
            text-align: center;
            margin: 30px 0;
            font-size: 32px;
            color: #333;
        }

        .tracking-container {
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 40px;
        }

        .tracking-form {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }

        .tracking-input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
        }

        .tracking-input:focus {
            border-color: #ff7000;
        }

        .track-btn {
            padding: 12px 25px;
            background-color: #ff7000;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .track-btn:hover {
            background-color: #e06100;
        }

        .tracking-result {
            margin-top: 30px;
        }

        .order-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .order-details h3 {
            font-size: 20px;
            margin-bottom: 5px;
            color: #333;
        }
        
        .order-details p {
            color: #666;
            margin-bottom: 3px;
            font-size: 14px;
        }
        
        .order-status {
            padding: 8px 12px;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 500;
            background-color: #E6F7FF;
            color: #0081CF;
        }

        .order-status.delivered {
            background-color: #E3FCF4;
            color: #00B69B;
        }

        .order-status.processing {
            background-color: #FFF4E6;
            color: #FF8A00;
        }

        .tracking-steps {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            position: relative;
        }

        .tracking-steps:before {
            content: '';
            position: absolute;
            top: 30px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #eee;
            z-index: 1;
        }

        .step {
            position: relative;
            z-index: 2;
            text-align: center;
            width: 20%;
        }

        .step-icon {
            width: 60px;
            height: 60px;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            border: 2px solid #eee;
            font-size: 24px;
            color: #ccc;
            margin-bottom: 10px;
        }

        .step.active .step-icon {
            background-color: #ff7000;
            color: white;
            border-color: #ff7000;
        }

        .step.completed .step-icon {
            background-color: #00B69B;
            color: white;
            border-color: #00B69B;
        }

        .step-title {
            font-size: 14px;
            color: #666;
            font-weight: 500;
        }

        .step.active .step-title {
            color: #ff7000;
            font-weight: 600;
        }

        .step.completed .step-title {
            color: #00B69B;
            font-weight: 600;
        }

        .delivery-details {
            margin-top: 40px;
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 20px;
        }

        .details-title {
            font-size: 18px;
            color: #333;
            margin-bottom: 15px;
        }

        .details-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .detail-item {
            margin-bottom: 10px;
        }

        .detail-label {
            font-size: 14px;
            color: #666;
            margin-bottom: 5px;
        }

        .detail-value {
            font-size: 16px;
            color: #333;
            font-weight: 500;
        }

        .order-items {
            margin-top: 40px;
        }

        .items-title {
            font-size: 18px;
            color: #333;
            margin-bottom: 15px;
        }

        .item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .item-img {
            width: 60px;
            height: 60px;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 15px;
        }

        .item-details {
            flex: 1;
        }

        .item-name {
            font-size: 16px;
            color: #333;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .item-restaurant {
            font-size: 14px;
            color: #666;
        }

        .item-price {
            font-size: 16px;
            color: #ff7000;
            font-weight: 600;
        }

        /* Footer */
        footer {
            background-color: #333;
            padding: 50px 0 20px;
            color: #fff;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: #ff7000;
        }

        .footer-column p {
            margin-bottom: 15px;
            color: #bbb;
            font-size: 14px;
            line-height: 1.6;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s;
            font-size: 14px;
        }

        .footer-links a:hover {
            color: #ff7000;
        }

        .download-apps {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .app-btn {
            background-color: #444;
            border-radius: 5px;
            padding: 10px 15px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: white;
            transition: background-color 0.3s;
        }

        .app-btn:hover {
            background-color: #555;
        }

        .app-icon {
            font-size: 20px;
            margin-right: 8px;
        }

        .app-text {
            display: flex;
            flex-direction: column;
        }

        .app-text small {
            font-size: 10px;
            opacity: 0.8;
        }

        .app-text span {
            font-size: 14px;
            font-weight: 500;
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #bbb;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .footer-content {
                grid-template-columns: 1fr 1fr;
            }
            
            .tracking-steps {
                flex-direction: column;
                align-items: center;
                gap: 20px;
            }
            
            .tracking-steps:before {
                width: 2px;
                height: 100%;
                top: 0;
                left: 50%;
                transform: translateX(-50%);
            }
            
            .step {
                width: 100%;
                display: flex;
                align-items: center;
                text-align: left;
            }
            
            .step-icon {
                margin: 0 15px 0 0;
            }
            
            .details-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
            }
            
            .search-input {
                width: 180px;
            }
            
            .tracking-form {
                flex-direction: column;
            }
            
            .order-info {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }

        @media (max-width: 576px) {
            .footer-content {
                grid-template-columns: 1fr;
            }
            
            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <div class="logo-text">Junior<span>food</span></div>
            </div>
            <div class="nav-links">
                <a href="{{ route('find-food') }}" class="nav-link active">Find Food</a>
                    <a href="{{ route('tracking') }}" class="nav-link">Tracking</a>
                    <a href="{{ route('location') }}" class="nav-link">Location</a>
                    <a href="{{ route('find-restaurant') }}" class="nav-link">Find Restaurant</a>
            </div>
            <div class="search-cart-profile">
                <div class="search-container">
                    <input type="text" class="search-input" placeholder="Search for food or restaurant...">
                    <i class="fas fa-search search-icon"></i>
                </div>
                <div class="cart-container">
                    <i class="fas fa-shopping-cart cart-icon"></i>
                    <div class="cart-badge">2</div>
                </div>
                <div class="profile-container" x-data="{ open: false }">
                    <img src="https://i.pravatar.cc/150?img=11" alt="Profile" class="profile-img" @click="open = !open">
                    <div class="profile-dropdown" :class="{ 'active': open }" @click.away="open = false">
                        <a href="#" class="dropdown-item">My Account</a>
                        <a href="#" class="dropdown-item">My Orders</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item">Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <h1 class="page-title">Track Your Order</h1>
        
        <div class="tracking-container">
            <div class="tracking-form">
                <input type="text" class="tracking-input" placeholder="Enter your order ID or tracking number">
                <button class="track-btn">Track Order</button>
            </div>
            
            <div class="tracking-result">
                <div class="order-info">
                    <div class="order-details">
                        <h3>Order #JF8273</h3>
                        <p>Placed on: April 5, 2025 - 12:45 PM</p>
                        <p>Estimated delivery: 1:30 PM</p>
                    </div>
                    <div class="order-status processing">On the way</div>
                </div>
                
                <div class="tracking-steps">
                    <div class="step completed">
                        <div class="step-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="step-title">Order Confirmed</div>
                    </div>
                    <div class="step completed">
                        <div class="step-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="step-title">Preparing</div>
                    </div>
                    <div class="step active">
                        <div class="step-icon">
                            <i class="fas fa-motorcycle"></i>
                        </div>
                        <div class="step-title">On the Way</div>
                    </div>
                    <div class="step">
                        <div class="step-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="step-title">Arrived</div>
                    </div>
                    <div class="step">
                        <div class="step-icon">
                            <i class="fas fa-utensils"></i>
                        </div>
                        <div class="step-title">Delivered</div>
                    </div>
                </div>
                
                <div class="delivery-details">
                    <h3 class="details-title">Delivery Details</h3>
                    <div class="details-grid">
                        <div class="detail-item">
                            <div class="detail-label">Delivery Address</div>
                            <div class="detail-value">123 Main Street, Apt 4B, New York, NY 10001</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Phone Number</div>
                            <div class="detail-value">+1 (555) 123-4567</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Delivery Method</div>
                            <div class="detail-value">Express Delivery</div>
                        </div>
                        <div class="detail-item">
                            <div class="detail-label">Payment Method</div>
                            <div class="detail-value">Credit Card (**** 1234)</div>
                        </div>
                    </div>
                </div>
                
                <div class="order-items">
                    <h3 class="items-title">Order Items</h3>
                    <div class="item">
                        <img src="/api/placeholder/100/100" alt="Food Item" class="item-img">
                        <div class="item-details">
                            <div class="item-name">Double Cheeseburger</div>
                            <div class="item-restaurant">Burger King</div>
                        </div>
                        <div class="item-price">$12.99</div>
                    </div>
                    <div class="item">
                        <img src="/api/placeholder/100/100" alt="Food Item" class="item-img">
                        <div class="item-details">
                            <div class="item-name">French Fries (Large)</div>
                            <div class="item-restaurant">Burger King</div>
                        </div>
                        <div class="item-price">$4.99</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>About Juniorfood</h3>
                    <p>Juniorfood is the fastest food delivery service connecting customers with their favorite restaurants all over the world.</p>
                    <p>With our easy-to-use app, you can order delicious meals delivered right to your doorstep within minutes.</p>
                </div>
                
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">How it Works</a></li>
                        <li><a href="#">Track Your Order</a></li>
                        <li><a href="#">Restaurants</a></li>
                        <li><a href="#">Become a Partner</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Support</h3>
                    <ul class="footer-links">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Download App</h3>
                    <p>Get the best food delivery experience with our app.</p>
                    <div class="download-apps">
                        <a href="#" class="app-btn">
                            <i class="fab fa-apple app-icon"></i>
                            <div class="app-text">
                                <small>Download on the</small>
                                <span>App Store</span>
                            </div>
                        </a>
                        <a href="#" class="app-btn">
                            <i class="fab fa-google-play app-icon"></i>
                            <div class="app-text">
                                <small>Get it on</small>
                                <span>Google Play</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 Juniorfood. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>