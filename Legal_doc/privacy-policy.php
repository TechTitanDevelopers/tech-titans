<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - TechTitan Team</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body style="font-family: Arial, sans-serif; background-color: #111; color: white; margin:0; padding:0;">

<!-- Header -->
    <header class="tech-header">
        <div class="container">
            <div class="logo-container">
                <img src="../images/logo.png" alt="Tech Titans Logo" class="logo">
                <h1 class="team-name">TECH TITANS</h1>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="../index.php" class="active">Home</a></li>
                    <li><a href="#">Projects</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>

<!-- Privacy Policy Popup -->
<div id="privacyPolicyPopup" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.6); display: none; justify-content: center; align-items: center; z-index: 9999;">
    
    <div style="background: #1c1c1c; color: white; padding: 30px; border-radius: 12px;
        max-width: 800px; width: 90%; max-height: 90vh; overflow-y: auto;
        box-shadow: 0px 0px 25px rgba(0, 255, 234, 0.4); animation: fadeIn 0.4s ease-in-out;">
        
        <!-- Close Button -->
        <span onclick="document.getElementById('privacyPolicyPopup').style.display='none'" 
              style="cursor: pointer; float: right; font-size: 20px; color: #00ffea; font-weight: bold;">&times;</span>
        
        <h1 style="color: #00ffea; margin-bottom: 10px;">Privacy Policy</h1>
        <p style="margin-bottom: 20px; font-size: 14px; color: #ccc;">
            <strong>Effective Date:</strong> August 03, 2025
        </p>

        <p style="line-height: 1.6; color: #ddd;">
            At <strong>TechTitan Team</strong>, we value your privacy and are committed to protecting your personal data. 
            This Privacy Policy explains how we collect, use, and safeguard the information you share with us when you visit 
            our website or use our services.
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">1. Information We Collect</h2>
        <ul style="line-height: 1.6; margin-left: 20px; color: #ddd;">
            <li><strong>Personal Information:</strong> Name, email address, phone number, and details you provide.</li>
            <li><strong>Technical Information:</strong> IP address, browser type, device information.</li>
            <li><strong>Usage Data:</strong> Pages visited, time spent, actions taken.</li>
        </ul>

        <h2 style="color: #00ffea; margin-top: 20px;">2. How We Use Your Information</h2>
        <ul style="line-height: 1.6; margin-left: 20px; color: #ddd;">
            <li>To provide and improve our services.</li>
            <li>To respond to inquiries and support requests.</li>
        </ul>

        <h2 style="color: #00ffea; margin-top: 20px;">3. Sharing of Information</h2>
        <p style="line-height: 1.6; color: #ddd;">
            We do not sell, rent, or trade your personal information. We may share your data only with trusted providers or when required by law.
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">4. Data Security</h2>
        <p style="line-height: 1.6; color: #ddd;">
            We implement industry-standard security measures, but no method is 100% secure.
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">5. Cookies and Tracking</h2>
        <p style="line-height: 1.6; color: #ddd;">
            We may use cookies to improve user experience. You can disable cookies in your browser settings.
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">6. Your Rights</h2>
        <p style="line-height: 1.6; color: #ddd;">
            You may request access, correction, or deletion of your personal data at any time.
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">7. Contact Us</h2>
        <p style="line-height: 1.6; color: #ddd;">
            📧 <strong>Email:</strong> techtitansadv@gmail.com<br>
            📞 <strong>Phone:</strong> +91 xxxx xxxxxx
        </p>
    </div>
</div>

<!-- Trigger Button -->
<button onclick="document.getElementById('privacyPolicyPopup').style.display='flex'" 
        style="background: #00ffea; color: #000; padding: 10px 20px; border: none; 
        border-radius: 5px; cursor: pointer; font-weight: bold; margin: 20px;">
    View Privacy Policy
</button>

<!-- Animation -->
<style>
@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}
</style>


    <!-- Footer -->
<footer style="background:rgba(0,0,0,0.4);padding:40px 5% 20px;backdrop-filter:blur(8px);color:white;">
    <div style="max-width:1200px;margin:auto;">
        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:30px;">
            
            <!-- Column 1 -->
            <div>
                <h3 style="margin-bottom:15px;">TechTitan Team</h3>
                <p style="margin-bottom:15px;line-height:1.6;">We are an elite team of developers, creating advanced and innovative solutions since 2023. Led by Pawan Patel with 5 passionate members delivering excellence in every project.</p>
                <div style="display:flex;gap:10px;">
                   
                    <a href="https://x.com/techtitansadv" style="color:white;font-size:1.2rem;transition:0.3s;"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

            <!-- Column 2 -->
            <div>
                <h3 style="margin-bottom:15px;">Quick Links</h3>
                <ul style="list-style:none;padding:0;line-height:1.8;">
                    <li><a href="index.php" style="color:white;text-decoration:none;">Home</a></li>
                    <li><a href="team.php" style="color:white;text-decoration:none;">Our Team</a></li>
                    <li><a href="projects.php" style="color:white;text-decoration:none;">Projects</a></li>
                    <li><a href="contact.php" style="color:white;text-decoration:none;">Contact</a></li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div>
                <h3 style="margin-bottom:15px;">Our Expertise</h3>
                <ul style="list-style:none;padding:0;line-height:1.8;">
                    <li>Web Development</li>
                    <li>Marketing Analysis</li>
                   
                </ul>
            </div>

            <!-- Column 4 -->
            <div>
                <h3 style="margin-bottom:15px;">Contact Us</h3>
                <p style="margin:5px 0;"><i class="fas fa-envelope"></i> techtitansadv@gmail.com</p>
                <p style="margin:5px 0;"><i class="fas fa-phone"></i> +91 xxxx xxxxxx</p>
                <p style="margin:5px 0;"><i class="fas fa-map-marker-alt"></i> India</p>
            </div>

        </div>

        <!-- Bottom Footer -->
        <div style="border-top:1px solid rgba(255,255,255,0.2);margin-top:20px;padding-top:10px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px;">
            <p style="margin:0;">&copy; 2024 TechTitan Team. All rights reserved.</p>
            <div style="display:flex;gap:10px;">
            
<a href="terms-of-service.php" style="color:white;text-decoration:none;">Terms of Service</a>

            </div>
        </div>
    </div>
</footer>

</body>
</html>
