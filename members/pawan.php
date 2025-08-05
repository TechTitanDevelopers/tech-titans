<?php
$member = [
    'name' => 'Pawan Patel',
    'role' => 'Team Head',
    'bio' => 'Seasoned technology leader with 10+ years of experience in software development and team management. Specializes in architecting scalable solutions and leading high-performance teams.',
    'skills' => ['Team Leadership', 'System Architecture', 'Project Management', 'Full-stack Development'],
    'email' => 'pawan@techtitans.dev',
    'social' => [
        'linkedin' => '#',
        'github' => '#',
        'twitter' => '#'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $member['name']; ?> - Tech Titans</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
/* General Reset */
*{margin:0;padding:0;box-sizing:border-box;}
body{
    font-family:Arial,Helvetica,sans-serif;
    background:linear-gradient(135deg,#0b0f1c,#14213d,#1b263b);
    color:#fff;overflow-x:hidden;
}

/* Header */
.tech-header{background:rgba(0,183,255,0.1);backdrop-filter:blur(10px);position:sticky;top:0;z-index:1000;}
.tech-header .container{display:flex;justify-content:space-between;align-items:center;padding:15px 5%;}
.logo{width:50px;margin-right:10px;}
.logo-container{display:flex;align-items:center;}
.team-name{font-size:1.6rem;font-weight:700;background:linear-gradient(90deg,#00d4ff,#00ffa6);-webkit-background-clip:text;-webkit-text-fill-color:transparent;}
.main-nav ul{list-style:none;display:flex;gap:20px;}
.main-nav a{color:white;text-decoration:none;font-weight:500;transition:color 0.3s;}
.main-nav a:hover,.main-nav a.active{color:#00f7ff;}
/* Show mobile toggle and style */
.mobile-menu-toggle {
    display: none;
    font-size: 2rem;
    color: #00f7ff;
    cursor: pointer;
    z-index: 1100;
}

/* New hamburger icon lines */
.hamburger {
    width: 25px;
    height: 18px;
    position: relative;
    cursor: pointer;
    transition: transform 0.3s ease;
}
.hamburger span {
    position: absolute;
    height: 3px;
    width: 100%;
    background: #00f7ff;
    left: 0;
    transition: 0.3s;
}
.hamburger span:nth-child(1) {
    top: 0;
}
.hamburger span:nth-child(2) {
    top: 7.5px;
}
.hamburger span:nth-child(3) {
    top: 15px;
}

/* Animate into X on open */
.hamburger.open span:nth-child(1) {
    transform: rotate(45deg);
    top: 7.5px;
}
.hamburger.open span:nth-child(2) {
    opacity: 0;
}
.hamburger.open span:nth-child(3) {
    transform: rotate(-45deg);
    top: 7.5px;
}

/* Mobile nav */
@media (max-width: 768px) {
    .main-nav {
        position: absolute;
        top: 70px;
        left: 0;
        width: 100%;
        display: none;
        flex-direction: column;
        align-items: center;
        background: rgba(15, 23, 42, 0.95);
        padding: 20px 0;
        z-index: 1000;
    }

    .main-nav.active {
        display: flex;
        animation: slideDown 0.3s ease;
    }

    .mobile-menu-toggle {
        display: block;
    }
}


/* Profile Layout */
.member-profile .container{max-width:1200px;margin:auto;padding:20px;}
.profile-grid{display:grid;grid-template-columns:1fr 2fr;gap:20px;}
@media(max-width:900px){.profile-grid{grid-template-columns:1fr;}}

/* Profile Card */
.profile-card{background:rgba(255,255,255,0.05);padding:20px;border-radius:12px;text-align:center;}
.profile-image{position:relative;width:180px;height:180px;margin:auto;overflow:hidden;border-radius:50%;border:3px solid #00f7ff;}
.profile-image img{width:100%;height:100%;object-fit:cover;transition:transform 0.4s;}
.profile-image:hover img{transform:scale(1.1);}
.social-links a{color:white;margin:0 5px;font-size:1.2rem;transition:color 0.3s;}
.social-links a:hover{color:#00f7ff;}

/* Profile Details */
.profile-details{background:rgba(255,255,255,0.05);padding:20px;border-radius:12px;}
.detail-section h3{color:#00f7ff;margin-bottom:10px;}
.detail-section p{line-height:1.6;}
.skills-container{display:flex;flex-wrap:wrap;gap:10px;}
.skill-tag{background:rgba(0,247,255,0.2);padding:5px 10px;border-radius:8px;font-size:0.9rem;}

/* Projects Grid */
.projects-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:15px;margin-top:10px;}
.project-card{background:rgba(255,255,255,0.05);padding:15px;border-radius:8px;transition:transform 0.3s,box-shadow 0.3s;}
.project-card:hover{transform:translateY(-5px);box-shadow:0 0 15px rgba(0,247,255,0.3);}

/* Footer */
.tech-footer{background:rgba(0,0,0,0.4);padding:40px 5% 20px;backdrop-filter:blur(8px);}
.footer-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:30px;}
.footer-col h3{margin-bottom:15px;}
.footer-bottom{border-top:1px solid rgba(255,255,255,0.2);margin-top:20px;padding-top:10px;display:flex;justify-content:space-between;flex-wrap:wrap;}
.social-links a{color:white;margin-right:10px;}
</style>
</head>
<body>

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
            <div class="mobile-menu-toggle" onclick="toggleMobileMenu(this)">
    <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

        </div>
    </header>

<!-- Member Profile -->
<main class="member-profile">
    <div class="container">
        <div class="profile-grid">
            <div class="profile-card">
                <div class="profile-image">
                    <img src="../images/pawan.jpg" alt="<?php echo $member['name']; ?>">
                </div>
                <h1><?php echo $member['name']; ?></h1>
                <h2><?php echo $member['role']; ?></h2>
                <div class="social-links">
                    <?php if ($member['social']['linkedin']): ?><a href="<?php echo $member['social']['linkedin']; ?>"><i class="fab fa-linkedin"></i></a><?php endif; ?>
                    <?php if ($member['social']['github']): ?><a href="<?php echo $member['social']['github']; ?>"><i class="fab fa-github"></i></a><?php endif; ?>
                    <?php if ($member['social']['twitter']): ?><a href="<?php echo $member['social']['twitter']; ?>"><i class="fab fa-twitter"></i></a><?php endif; ?>
                    <?php if ($member['email']): ?><a href="mailto:<?php echo $member['email']; ?>"><i class="fas fa-envelope"></i></a><?php endif; ?>
                </div>
            </div>
            
            <div class="profile-details">
                <div class="detail-section">
                    <h3>About</h3>
                    <p><?php echo $member['bio']; ?></p>
                </div>
                <div class="detail-section">
                    <h3>Skills</h3>
                    <div class="skills-container">
                        <?php foreach ($member['skills'] as $skill): ?>
                        <div class="skill-tag"><?php echo $skill; ?></div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="detail-section">
                    <h3>Recent Projects</h3>
                    <div class="projects-grid">
                        <?php for($i=0;$i<8;$i++): ?>
                        <div class="project-card">
                            <h4>Enterprise Cloud Platform</h4>
                            <p>Scalable cloud infrastructure for Fortune 500 company</p>
                        </div>
                        <?php endfor; ?>
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
               <a href="../Legal_doc/privacy-policy.php" style="color:white;text-decoration:none;">Privacy Policy</a>
<a href="../Legal_doc/terms-of-service.php" style="color:white;text-decoration:none;">Terms of Service</a>

            </div>
        </div>
    </div>
</footer>

<script>
function toggleMobileMenu(toggle) {
    const hamburger = toggle.querySelector('.hamburger');
    const nav = document.querySelector('.main-nav');
    hamburger.classList.toggle('open');
    nav.classList.toggle('active');
}
</script>


</body>
</html>
