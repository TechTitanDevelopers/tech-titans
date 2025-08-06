<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service - TechTitan Team</title>
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <link rel="stylesheet" href="../css/style.css">
    <style>
     @keyframes flipLogo {
        0%   { transform: rotateY(0deg);}
        50%  { transform: rotateY(180deg);}
        100% { transform: rotateY(360deg);}
    }
    </style>
</head>
<body style="font-family: Arial, sans-serif; background-color: #111; color: white; margin:0; padding:0;">
      <!-- Loader Start -->
 <div id="loader" style="position:fixed;z-index:9999;top:0;left:0;width:100vw;height:100vh;display:flex;align-items:center;justify-content:center;background:rgba(20,20,20,0.95);">
        <img src="../images/favicon.png" alt="Loading..." id="loader-logo" style="width:90px;height:90px;animation:flipLogo 1s linear infinite;">
    </div>

<!-- Header -->
    <header class="tech-header">
        <div class="container">
            <figure class="logo-container" style="perspective: 800px;">
                <img src="../images/favicon.png" alt="Tech Titans Logo" class="logo" id="mainLogo" style="transition: transform 1s;">
                <figcaption>
                    <h1 class="team-name">TECH TITANS</h1>
                </figcaption>
            </figure>
            <script>
            // Rotates the logo every 5 seconds
            (function() {
                var logo = document.getElementById('mainLogo');
                var rotation = 0;
                setInterval(function() {
                    rotation += 360;
                    logo.style.transform = 'rotateY(' + rotation + 'deg)';
                }, 5000);
            })();
            </script>
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

<!-- Terms of Service Popup -->
<div id="termsPopup" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;
    background: rgba(0, 0, 0, 0.6); display: none; justify-content: center; align-items: center; z-index: 9999;">
    
    <div style="background: #1c1c1c; color: white; padding: 30px; border-radius: 12px;
        max-width: 800px; width: 90%; max-height: 90vh; overflow-y: auto;
        box-shadow: 0px 0px 25px rgba(0, 255, 234, 0.4); animation: fadeIn 0.4s ease-in-out;">
        
        <!-- Close Button -->
        <span onclick="document.getElementById('termsPopup').style.display='none'" 
              style="cursor: pointer; float: right; font-size: 20px; color: #00ffea; font-weight: bold;">&times;</span>
        
        <h1 style="color: #00ffea; margin-bottom: 10px;">Terms of Service</h1>
        <p style="margin-bottom: 20px; font-size: 14px; color: #ccc;">
            <strong>Effective Date:</strong> August 03, 2025
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">1. Acceptance of Terms</h2>
        <p style="line-height: 1.6; color: #ddd;">
            By using our website, you agree to comply with these Terms and our Privacy Policy.
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">2. Use of Our Website</h2>
        <ul style="line-height: 1.6; margin-left: 20px; color: #ddd;">
            <li>Use our website only for lawful purposes.</li>
            <li>Do not damage or impair our services.</li>
            <li>No unauthorized access attempts.</li>
        </ul>

        <h2 style="color: #00ffea; margin-top: 20px;">3. Intellectual Property Rights</h2>
        <p style="line-height: 1.6; color: #ddd;">
            All content is owned by TechTitan Team unless otherwise stated.
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">4. Limitation of Liability</h2>
        <p style="line-height: 1.6; color: #ddd;">
            We are not responsible for losses due to the use or inability to use our site.
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">5. Third-Party Links</h2>
        <p style="line-height: 1.6; color: #ddd;">
            We are not responsible for external sites linked from our platform.
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">6. Service Modifications</h2>
        <p style="line-height: 1.6; color: #ddd;">
            We may modify or discontinue services without notice.
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">7. Termination</h2>
        <p style="line-height: 1.6; color: #ddd;">
            We may terminate access if these Terms are violated.
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">8. Governing Law</h2>
        <p style="line-height: 1.6; color: #ddd;">
            These Terms are governed by Indian law, with jurisdiction in [Your City/State].
        </p>

        <h2 style="color: #00ffea; margin-top: 20px;">9. Contact Us</h2>
        <p style="line-height: 1.6; color: #ddd;">
            📧 <strong>Email:</strong> techtitansadv@gmail.com<br>
            📞 <strong>Phone:</strong> +91 xxxx xxxxxx
        </p>
    </div>
</div>

<!-- Trigger Button -->
<button onclick="document.getElementById('termsPopup').style.display='flex'" 
        style="background: #00ffea; color: #000; padding: 10px 20px; border: none; 
        border-radius: 5px; cursor: pointer; font-weight: bold; margin: 20px;">
    View Terms of Service
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
               <a href="privacy-policy.php" style="color:white;text-decoration:none;">Privacy Policy</a>


            </div>
        </div>
    </div>
</footer>
 <script>
    // Ensure loader shows for at least 2 seconds
    var loaderStart = Date.now();
    function hideLoaderAfterMinTime() {
        var loader = document.getElementById('loader');
        var elapsed = Date.now() - loaderStart;
        var minTime = 250; // 0.25 seconds
        var remaining = minTime - elapsed;
        if (remaining > 0) {
            setTimeout(hideLoader, remaining);
        } else {
            hideLoader();
        }
        function hideLoader() {
            if(loader) {
                loader.style.transition = 'opacity 0.4s';
                loader.style.opacity = '0';
                setTimeout(function(){ loader.style.display = 'none'; }, 400);
            }
        }
    }
    document.addEventListener('readystatechange', function() {
        if (document.readyState === 'complete') {
            hideLoaderAfterMinTime();
        }
    });
    </script>
</body>
</body>
</html>
