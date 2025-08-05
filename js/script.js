document.addEventListener("DOMContentLoaded", function () {
  // Initialize team member dots
  const teamDots = document.querySelectorAll(".team-dot");
  const connectionsSvg = document.querySelector(".connections");

  // Draw connection lines between team members
  // drawConnections();

  // Add click event to each team member dot
  teamDots.forEach((dot) => {
    dot.addEventListener("click", function () {
      const memberPage = this.getAttribute("data-page");
      window.location.href = memberPage;
    });
  });

  // Mobile menu toggle
  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
  const mainNav = document.querySelector(".main-nav");

  if (mobileMenuToggle && mainNav) {
    mobileMenuToggle.addEventListener("click", function () {
      mainNav.style.display =
        mainNav.style.display === "block" ? "none" : "block";
    });
  }

  // Window resize event to redraw connections
  window.addEventListener("resize", function () {
    drawConnections();
  });

  // Function to draw connection lines between team members
  function drawConnections() {
    // Clear existing connections
    connectionsSvg.innerHTML = "";

    // Get positions of all dots
    const dots = Array.from(teamDots).map((dot) => {
      const rect = dot.getBoundingClientRect();
      const containerRect = connectionsSvg.getBoundingClientRect();

      return {
        x:
          ((rect.left + rect.width / 2 - containerRect.left) /
            containerRect.width) *
          100,
        y:
          ((rect.top + rect.height / 2 - containerRect.top) /
            containerRect.height) *
          100,
      };
    });

    // Draw lines between all dots
    for (let i = 0; i < dots.length; i++) {
      for (let j = i + 1; j < dots.length; j++) {
        const line = document.createElementNS(
          "http://www.w3.org/2000/svg",
          "line"
        );
        line.setAttribute("x1", dots[i].x);
        line.setAttribute("y1", dots[i].y);
        line.setAttribute("x2", dots[j].x);
        line.setAttribute("y2", dots[j].y);
        line.setAttribute("stroke", "rgba(0, 240, 255, 0.3)");
        line.setAttribute("stroke-width", "1");
        connectionsSvg.appendChild(line);
      }
    }

    // Animate the lines
    gsap.from(connectionsSvg.querySelectorAll("line"), {
      strokeDashoffset: 1000,
      strokeDasharray: 1000,
      duration: 1.5,
      ease: "power2.inOut",
      stagger: 0.1,
    });
  }

  // Add hover effects to dots
  teamDots.forEach((dot) => {
    dot.addEventListener("mouseenter", function () {
      gsap.to(this.querySelector(".dot"), {
        scale: 1.2,
        duration: 0.3,
        ease: "power2.out",
      });
    });

    dot.addEventListener("mouseleave", function () {
      gsap.to(this.querySelector(".dot"), {
        scale: 1,
        duration: 0.3,
        ease: "power2.out",
      });
    });
  });

  document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector(".mobile-menu-toggle");
    const nav = document.querySelector(".main-nav");

    menuToggle.addEventListener("click", () => {
      nav.classList.toggle("active");
    });
  });

  // Animate stats cards on scroll
  const statCards = document.querySelectorAll(".stat-card");
  const featureCards = document.querySelectorAll(".feature-card");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          gsap.to(entry.target, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            ease: "power2.out",
          });
        }
      });
    },
    { threshold: 0.1 }
  );

  statCards.forEach((card) => {
    gsap.set(card, { opacity: 0, y: 20 });
    observer.observe(card);
  });

  featureCards.forEach((card) => {
    gsap.set(card, { opacity: 0, y: 20 });
    observer.observe(card);
  });
});
