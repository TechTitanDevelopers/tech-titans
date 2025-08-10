<?php
// Team members data
$team_members = [
    [
        'name' => 'Pawan Patel',
        'role' => 'Founder & CEO',
        'position_x' => rand(10, 90),
        'position_y' => rand(10, 90),
        'page' => 'pawan.php'
    ],
    [
        'name' => 'Kartikey Prasad',
        'role' => 'UI/UX Designer',
        'position_x' => rand(10, 90),
        'position_y' => rand(10, 90),
        'page' => 'member2.php'
    ],
    [
        'name' => 'Divyanshu Chaubey',
        'role' => 'Developer',
        'position_x' => rand(10, 90),
        'position_y' => rand(10, 90),
        'page' => 'divyanshu.php'
    ],
    [
        'name' => 'Aaditya Shukla',
        'role' => 'Developer',
        'position_x' => rand(10, 90),
        'position_y' => rand(10, 90),
        'page' => 'member4.php'
    ],
    [
        'name' => 'Shashwat Mishra',
        'role' => 'Content management & Market Expert',
        'position_x' => rand(10, 90),
        'position_y' => rand(10, 90),
        'page' => 'member5.php'
    ],
    [
        'name' => 'Ritik Verma',
        'role' => 'Developer',
        'position_x' => rand(10, 90),
        'position_y' => rand(10, 90),
        'page' => 'member6.php'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Titans - Elite Development Team</title>
<link rel="icon" type="image/png" href="images/favicon.png">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animations.css">
    <style>
     @keyframes flipLogo {
        0%   { transform: rotateY(0deg);}
        50%  { transform: rotateY(180deg);}
        100% { transform: rotateY(360deg);}
    }
    </style>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Loader Start -->
  <div id="loader" style="position:fixed;z-index:9999;top:0;left:0;width:100vw;height:100vh;display:flex;align-items:center;justify-content:center;background:rgba(20,20,20,0.95);">
        <img src="images/favicon.png" alt="Loading..." id="loader-logo" style="width:150px;height:150px;animation:flipLogo 1s linear infinite;">
    </div>
    <!-- Loader End -->
    <!-- Animated Background -->
    <div class="animated-bg"></div>
    
    <!-- Header -->
    <header class="tech-header">
        <div class="container">
            <figure class="logo-container" style="perspective: 800px;">
                <img src="images/favicon.png" alt="Tech Titans Logo" class="logo" id="mainLogo" style="transition: transform 1s;">
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
                    <li><a href="#" class="active">Home</a></li>
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

    <!-- Main Content -->
    <main class="tech-main">
        <div class="container">
            <div class="team-grid">
                <div class="team-map" id="teamMap">
                    <h2 class="section-title">Our Team Network</h2>
                    <p class="section-subtitle">Click on a team member to explore their profile</p>
                    
                    <!-- Team Member Dots -->
                    <?php foreach ($team_members as $member): ?>
                    <div class="team-dot" 
                         style="left: <?php echo $member['position_x']; ?>%; top: <?php echo $member['position_y']; ?>%;"
                         data-page="members/<?php echo $member['page']; ?>">
                        <div class="pulse"></div>
                        <div class="dot"></div>
                        <div class="member-info">
                            <h3><?php echo $member['name']; ?></h3>
                            <p><?php echo $member['role']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                    <!-- Connection Lines (dynamically generated via JS) -->
                    <svg class="connections" viewBox="0 0 100 100" preserveAspectRatio="none"></svg>
                </div>
                
                <div class="team-overview">
                    <h2 class="section-title">Elite Technology Team</h2>
                    <div class="tech-stats">
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <div class="stat-value">5+</div>
                            <div class="stat-label">Projects</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-value">6</div>
                            <div class="stat-label">Experts</div>
                        </div>
                        <div class="stat-card">
                            <div class="stat-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="stat-value">24/7</div>
                            <div class="stat-label">Support</div>
                        </div>
                    </div>
                    
                   <div class="tech-features">
    <div class="feature-card">
        <div class="feature-icon">
            <i class="fas fa-users-cog"></i>
        </div>
        <h3>Expert Development Team</h3>
        <p>Led by Pawan Patel, our skilled developers deliver innovative, scalable, and future-ready software solutions.</p>
    </div>
    <div class="feature-card">
        <div class="feature-icon">
            <i class="fas fa-lightbulb"></i>
        </div>
        <h3>Creative & Strategic Approach</h3>
        <p>We combine technical expertise with creative thinking to craft solutions that stand out in the market.</p>
    </div>
    <div class="feature-card">
        <div class="feature-icon">
            <i class="fas fa-handshake"></i>
        </div>
        <h3>Client-Focused Collaboration</h3>
        <p>Our team works closely with clients to ensure each project exceeds expectations and delivers real value.</p>
    </div>
</div>

                </div>
            </div>
        </div>
    </main>

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
               <a href="Legal_doc/privacy-policy.php" style="color:white;text-decoration:none;">Privacy Policy</a>
<a href="Legal_doc/terms-of-service.php" style="color:white;text-decoration:none;">Terms of Service</a>

            </div>
        </div>
    </div>
</footer>



     <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="js/script.js"></script>
    <script>
    // Ensure loader shows for at least 2 seconds
    var loaderStart = Date.now();
    function hideLoaderAfterMinTime() {
        var loader = document.getElementById('loader');
        var elapsed = Date.now() - loaderStart;
        var minTime = 2000; // 2 seconds
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
</html>