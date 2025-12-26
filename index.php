<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelGo - Explore the World</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            font-size: 28px;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        nav a {
            color: white;
            text-decoration: none;
            transition: opacity 0.3s;
        }

        nav a:hover {
            opacity: 0.8;
        }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23667eea" width="1200" height="600"/><path fill="%23764ba2" d="M0,300 Q300,200 600,300 T1200,300 L1200,600 L0,600 Z"/></svg>');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 20px;
            text-align: center;
            min-height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        }

        .cta-button {
            display: inline-block;
            background: #ff6b6b;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
            font-size: 16px;
            margin: 0 10px;
        }

        .cta-button:hover {
            background: #ff5252;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        section {
            padding: 60px 20px;
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            margin-bottom: 40px;
            color: #333;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .feature-card {
            background: white;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .feature-card h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 22px;
        }

        .about-section {
            background: #f8f9fa;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .about-text h2 {
            color: #667eea;
            margin-bottom: 20px;
            font-size: 32px;
        }

        .about-text p {
            margin-bottom: 15px;
            line-height: 1.8;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .stat {
            background: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
        }

        .stat-number {
            font-size: 36px;
            color: #667eea;
            font-weight: bold;
        }

        .stat-label {
            color: #666;
            margin-top: 10px;
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                gap: 15px;
            }

            .hero h1 {
                font-size: 36px;
            }

            .about-content {
                grid-template-columns: 1fr;
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="index.php" class="logo">✈️ TravelGo</a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="packages.php">Travel Packages</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>Explore the World with TravelGo</h1>
        <p>Discover Amazing Destinations and Create Unforgettable Memories</p>
        <div>
            <a href="packages.php" class="cta-button">View Packages</a>
            <a href="contact.php" class="cta-button">Get in Touch</a>
        </div>
    </section>

    <section class="container">
        <h2 class="section-title">Why Choose TravelGo?</h2>
        <div class="features">
            <div class="feature-card">
                <h3>🌍 Global Destinations</h3>
                <p>Explore over 150 destinations across 6 continents with expertly curated travel packages.</p>
            </div>
            <div class="feature-card">
                <h3>💰 Affordable Prices</h3>
                <p>Get the best value for your money with our competitive pricing and flexible payment options.</p>
            </div>
            <div class="feature-card">
                <h3>🛡️ Safe & Secure</h3>
                <p>Travel with confidence knowing we provide comprehensive travel insurance and 24/7 support.</p>
            </div>
            <div class="feature-card">
                <h3>👥 Expert Guides</h3>
                <p>Our experienced travel guides ensure you get the most out of every destination.</p>
            </div>
            <div class="feature-card">
                <h3>📱 Easy Booking</h3>
                <p>Simple and secure online booking process with instant confirmation and flexible cancellation.</p>
            </div>
            <div class="feature-card">
                <h3>⭐ Customer Reviews</h3>
                <p>Highly rated by thousands of happy travelers with 4.8/5 star average rating.</p>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>About TravelGo</h2>
                    <p>Founded in 2015, TravelGo has been helping travelers discover the world's most beautiful destinations with curated travel experiences.</p>
                    <p>We specialize in creating personalized itineraries that match your travel style, whether you're looking for adventure, relaxation, cultural exploration, or family fun.</p>
                    <p>Our team of experienced travel consultants are dedicated to making your travel dreams a reality.</p>
                </div>
                <div class="stats">
                    <div class="stat">
                        <div class="stat-number">50K+</div>
                        <div class="stat-label">Happy Travelers</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Destinations</div>
                    </div>
                    <div class="stat">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Satisfaction Rate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <h2 class="section-title">Featured Travel Packages</h2>
        <div class="features">
            <div class="feature-card">
                <h3>🏖️ Tropical Paradise</h3>
                <p>Discover pristine beaches, crystal-clear waters, and island adventure.</p>
                <p style="color: #667eea; font-weight: bold; margin-top: 15px;">From $899</p>
                <a href="packages.php" class="cta-button" style="display: inline-block; margin-top: 15px;">Learn More</a>
            </div>
            <div class="feature-card">
                <h3>🏔️ Mountain Adventure</h3>
                <p>Experience thrilling hiking, breathtaking views, and alpine villages.</p>
                <p style="color: #667eea; font-weight: bold; margin-top: 15px;">From $799</p>
                <a href="packages.php" class="cta-button" style="display: inline-block; margin-top: 15px;">Learn More</a>
            </div>
            <div class="feature-card">
                <h3>🏛️ Cultural Heritage</h3>
                <p>Immerse yourself in history, art, and traditions of ancient civilizations.</p>
                <p style="color: #667eea; font-weight: bold; margin-top: 15px;">From $1,099</p>
                <a href="packages.php" class="cta-button" style="display: inline-block; margin-top: 15px;">Learn More</a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 TravelGo. All rights reserved. | Email: info@travelgo.com | Phone: 1-800-TRAVEL</p>
    </footer>
</body>
</html>
