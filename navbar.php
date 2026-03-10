<style>
    /* Import fonts and set variables from original styling */
    :root {
        --lime: #ceff66;
        --lime-dark: #a6e62c;
        --ink: #111;
        --bg: #faf9f7;
        --muted: #5a5a5a;
        --hf: 'Plus Jakarta Sans', sans-serif;
        --bf: 'Inter', sans-serif;
    }

    /* Base styles from original */
    *,*::before,*::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: var(--bf);
        background: var(--bg);
        color: var(--ink);
        line-height: 1.5;
        overflow-x: hidden;
    }

    body.menu-open {
        overflow: hidden;
    }

    h1, h2, h3, h4 {
        font-family: var(--hf);
    }

    /* Animation keyframes */
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    
    .mobile-menu.open {
        display: flex !important;
        animation: fadeIn 0.3s ease-out;
    }

    /* Navbar specific hover effects */
    .nav-link {
        font-family: var(--bf) !important;
    }
    
    .contact-btn {
        font-family: var(--bf) !important;
    }
    
    .mobile-menu a {
        font-family: var(--bf) !important;
    }
    
    /* Full screen mobile menu styles */
    #mobile-menu {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(10, 10, 10, 0.98);
        backdrop-filter: blur(10px);
        z-index: 100;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 2rem;
    }
    
    .mobile-menu-content {
        max-width: 400px;
        width: 100%;
        text-align: center;
    }
    
    .mobile-menu a {
        display: block;
        font-size: 1.5rem;
        padding: 1rem 0;
        margin: 0.5rem 0;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .mobile-menu a:hover {
        color: var(--lime);
        transform: translateX(10px);
    }
    
    .mobile-menu .contact-link {
        color: var(--lime);
        font-weight: 600;
        border: 2px solid var(--lime);
        border-radius: 50px;
        padding: 1rem 2rem;
        margin-top: 2rem;
        display: inline-block;
        width: auto;
    }
    
    .mobile-menu .contact-link:hover {
        background: var(--lime);
        color: black;
        transform: scale(1.05);
    }
    
    .mobile-social {
        display: flex;
        justify-content: center;
        gap: 1.5rem;
        margin-top: 3rem;
    }
    
    .mobile-social a {
        border: none;
        font-size: 1.2rem;
        padding: 0;
        margin: 0;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.05);
    }
    
    .mobile-social a:hover {
        background: var(--lime);
        color: black;
        transform: translateY(-3px);
    }
    
    /* Close button for mobile menu */
    .menu-close {
        position: absolute;
        top: 1.5rem;
        right: 1.5rem;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    
    .menu-close:hover {
        background: var(--lime);
    }
    
    .menu-close:hover i {
        color: black;
    }
    
    .menu-close i {
        color: white;
        font-size: 1.2rem;
        transition: all 0.3s ease;
    }
</style>

<!-- NAVBAR WRAPPER - to be placed at the top of the page -->
<div class="absolute top-0 left-0 right-0 z-40">
    <!-- Navbar -->
    <div class="relative z-30 w-full flex items-center justify-between text-white px-5 py-5 md:px-12 md:py-6 lg:px-20 lg:py-7 bg-transparent">
        <!-- Logo -->
        <img src="images/logo.gif" alt="Growth Alliance" class="h-8 md:h-10 w-auto brightness-0 invert hover:opacity-90 transition-opacity">

        <!-- Desktop Navigation -->
        <div class="hidden md:flex items-center gap-8">
            <a href="index.php" class="nav-link group relative font-['Inter'] font-medium text-white/90 no-underline hover:text-white tracking-[-0.01em] text-sm">
                Home
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ceff66] transition-all duration-250 ease-out group-hover:w-full shadow-[0_0_8px_rgba(206,255,102,0.5)]"></span>
            </a>
            <a href="services.php" class="nav-link group relative font-['Inter'] font-medium text-white/90 no-underline hover:text-white tracking-[-0.01em] text-sm">
                Services
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ceff66] transition-all duration-250 ease-out group-hover:w-full shadow-[0_0_8px_rgba(206,255,102,0.5)]"></span>
            </a>
            <a href="about.php" class="nav-link group relative font-['Inter'] font-medium text-white/90 no-underline hover:text-white tracking-[-0.01em] text-sm">
                About
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ceff66] transition-all duration-250 ease-out group-hover:w-full shadow-[0_0_8px_rgba(206,255,102,0.5)]"></span>
            </a>
            <a href="whyOutsource.php" class="nav-link group relative font-['Inter'] font-medium text-white/90 no-underline hover:text-white tracking-[-0.01em] text-sm">
                Why Outsource 
                <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ceff66] transition-all duration-250 ease-out group-hover:w-full shadow-[0_0_8px_rgba(206,255,102,0.5)]"></span>
            </a>
        </div>

        <!-- Right side actions -->
        <div class="flex items-center gap-4">
            <!-- Contact button -->
            <a href="contact.php" class="contact-btn hidden sm:inline-block px-5 py-2 rounded-full border border-white/30 text-sm font-medium text-white no-underline transition-all bg-transparent hover:bg-white/10 hover:border-white/50 font-['Inter']">
                Contact us
            </a>
            
            <!-- Hamburger button -->
            <button id="menuToggle" class="md:hidden flex flex-col gap-1.5 p-1 bg-transparent border-none cursor-pointer z-[110]" aria-label="Menu">
                <span class="w-6 h-0.5 bg-white transition-all duration-300 rounded-[1px]" id="bar1"></span>
                <span class="w-6 h-0.5 bg-white transition-all duration-300 rounded-[1px]" id="bar2"></span>
                <span class="w-6 h-0.5 bg-white transition-all duration-300 rounded-[1px]" id="bar3"></span>
            </button>
        </div>
    </div>

    <!-- Full Screen Mobile Menu -->
    <div id="mobile-menu" class="hidden">
        <div class="menu-close" id="menuClose">
            <i class="fas fa-times"></i>
        </div>
        <div class="mobile-menu-content">
            <a href="index.php">Home</a>
            <a href="services.php">Services</a>
            <a href="about.php">About</a>
            <a href="whyOutsource.php">Why Outsource</a>
            <a href="contact.php" class="contact-link">Contact Us →</a>
            
            <div class="mobile-social">
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>

<script>
// Hamburger menu toggle with enhanced functionality
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('menuToggle');
    const closeBtn = document.getElementById('menuClose');
    const mMenu = document.getElementById('mobile-menu');
    const b1 = document.getElementById('bar1');
    const b2 = document.getElementById('bar2');
    const b3 = document.getElementById('bar3');
    let mOpen = false;

    if (toggle && mMenu && b1 && b2 && b3) {
        // Function to open menu
        const openMenu = () => {
            mOpen = true;
            mMenu.classList.add('open');
            document.body.classList.add('menu-open');
            
            // Animate hamburger to X
            b1.style.transform = 'translateY(8px) rotate(45deg)';
            b2.style.opacity = '0';
            b3.style.transform = 'translateY(-8px) rotate(-45deg)';
        };
        
        // Function to close menu
        const closeMenu = () => {
            mOpen = false;
            mMenu.classList.remove('open');
            document.body.classList.remove('menu-open');
            
            // Reset hamburger
            b1.style.transform = '';
            b2.style.opacity = '1';
            b3.style.transform = '';
        };

        toggle.addEventListener('click', (e) => {
            e.stopPropagation();
            if (!mOpen) {
                openMenu();
            } else {
                closeMenu();
            }
        });

        // Close menu with close button
        if (closeBtn) {
            closeBtn.addEventListener('click', closeMenu);
        }

        // Close menu when a link is clicked
        mMenu.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', closeMenu);
        });

        // Close menu on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mOpen) {
                closeMenu();
            }
        });

        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                if (window.innerWidth >= 768 && mOpen) {
                    closeMenu();
                }
            }, 250);
        });
    }
});

// Add smooth scroll for anchor links (optional)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>