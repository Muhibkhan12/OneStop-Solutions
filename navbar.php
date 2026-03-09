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

    h1, h2, h3, h4 {
        font-family: var(--hf);
    }

    /* Animation keyframes */
    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .mobile-menu.open {
        display: block;
        animation: slideDown 0.3s ease-out;
    }

    /* Navbar specific hover effects (keeping minimal required) */
    .nav-link {
        font-family: var(--bf) !important;
    }
    
    .contact-btn {
        font-family: var(--bf) !important;
    }
    
    .mobile-menu a {
        font-family: var(--bf) !important;
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
            <a href="main.php" class="nav-link group relative font-['Inter'] font-medium text-white/90 no-underline hover:text-white tracking-[-0.01em] text-sm">
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
            <button id="menuToggle" class="md:hidden flex flex-col gap-1.5 p-1 bg-transparent border-none cursor-pointer" aria-label="Menu">
                <span class="w-6 h-0.5 bg-white transition-all duration-300 rounded-[1px]" id="bar1"></span>
                <span class="w-6 h-0.5 bg-white transition-all duration-300 rounded-[1px]" id="bar2"></span>
                <span class="w-6 h-0.5 bg-white transition-all duration-300 rounded-[1px]" id="bar3"></span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden absolute top-full left-0 right-0 bg-[rgba(10,10,10,0.96)] px-8 py-6 z-50 border-t border-white/5 shadow-[0_20px_30px_-10px_rgba(0,0,0,0.3)]">
        <a href="#" class="block font-['Inter'] font-medium text-white/75 text-lg py-3 border-b border-white/5 no-underline transition-all hover:text-[#ceff66] hover:pl-2">Solutions</a>
        <a href="#" class="block font-['Inter'] font-medium text-white/75 text-lg py-3 border-b border-white/5 no-underline transition-all hover:text-[#ceff66] hover:pl-2">Services</a>
        <a href="#" class="block font-['Inter'] font-medium text-white/75 text-lg py-3 border-b border-white/5 no-underline transition-all hover:text-[#ceff66] hover:pl-2">Case Study</a>
        <a href="#" class="block font-['Inter'] font-medium text-white/75 text-lg py-3 border-b border-white/5 no-underline transition-all hover:text-[#ceff66] hover:pl-2">Company</a>
        <a href="#" class="block font-['Inter'] font-semibold text-[#ceff66] text-lg py-3 no-underline transition-all hover:!text-white hover:bg-transparent">Contact us →</a>
    </div>
</div>

<script>
// Hamburger menu toggle with enhanced functionality
document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('menuToggle');
    const mMenu = document.getElementById('mobile-menu');
    const b1 = document.getElementById('bar1');
    const b2 = document.getElementById('bar2');
    const b3 = document.getElementById('bar3');
    let mOpen = false;

    if (toggle && mMenu && b1 && b2 && b3) {
        toggle.addEventListener('click', (e) => {
            e.stopPropagation();
            mOpen = !mOpen;
            mMenu.classList.toggle('open', mOpen);
            
            // Animate hamburger to X
            if (mOpen) {
                b1.style.transform = 'translateY(8px) rotate(45deg)';
                b2.style.opacity = '0';
                b3.style.transform = 'translateY(-8px) rotate(-45deg)';
            } else {
                b1.style.transform = '';
                b2.style.opacity = '1';
                b3.style.transform = '';
            }
        });

        // Close menu when a link is clicked
        mMenu.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => {
                mOpen = false;
                mMenu.classList.remove('open');
                b1.style.transform = '';
                b2.style.opacity = '1';
                b3.style.transform = '';
            });
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (mOpen && !mMenu.contains(e.target) && !toggle.contains(e.target)) {
                mOpen = false;
                mMenu.classList.remove('open');
                b1.style.transform = '';
                b2.style.opacity = '1';
                b3.style.transform = '';
            }
        });

        // Close menu on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mOpen) {
                mOpen = false;
                mMenu.classList.remove('open');
                b1.style.transform = '';
                b2.style.opacity = '1';
                b3.style.transform = '';
            }
        });

        // Handle window resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                if (window.innerWidth >= 768 && mOpen) {
                    mOpen = false;
                    mMenu.classList.remove('open');
                    b1.style.transform = '';
                    b2.style.opacity = '1';
                    b3.style.transform = '';
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