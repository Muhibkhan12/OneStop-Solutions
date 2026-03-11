<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --lime: #ceff66;
            --lime-dark: #a6e62c;
            --ink: #111;
        }

        /* ── MOBILE MENU ── */
        #mobile-menu {
            display: none;
            position: fixed;
            inset: 0;
            width: 100vw;
            height: 100vh;
            background: #0a0a0a;
            z-index: 999;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 4rem 3rem;
            transition: background 0.45s cubic-bezier(0.4, 0, 0.2, 1);
        }
        #mobile-menu.is-open {
            display: flex;
            animation: menuSlideIn 0.35s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
        
        /* Mobile menu scrolled state - yellowish background */
        .navbar-wrapper.scrolled #mobile-menu {
            background: rgba(218, 255, 80, 0.95);
            backdrop-filter: blur(24px) saturate(1.8) brightness(1.05);
            -webkit-backdrop-filter: blur(24px) saturate(1.8) brightness(1.05);
        }
        
        /* Update mobile link colors when scrolled */
        .navbar-wrapper.scrolled #mobile-menu .mob-link {
            color: rgba(0,0,0,0.4);
        }
        .navbar-wrapper.scrolled #mobile-menu .mob-link:hover {
            color: #111;
        }
        .navbar-wrapper.scrolled #mobile-menu .mob-link.active {
            color: #111;
        }
        
        /* Update mobile CTA when scrolled */
        .navbar-wrapper.scrolled #mobile-menu .mob-cta {
            background: #111;
            color: var(--lime);
        }
        .navbar-wrapper.scrolled #mobile-menu .mob-cta:hover {
            background: #000;
            transform: translateX(4px);
        }
        
        /* Update mobile footer when scrolled */
        .navbar-wrapper.scrolled #mobile-menu .mob-footer-tag {
            color: rgba(0,0,0,0.5);
        }
        .navbar-wrapper.scrolled #mobile-menu .mob-social a {
            border-color: rgba(0,0,0,0.2);
            color: rgba(0,0,0,0.5);
        }
        .navbar-wrapper.scrolled #mobile-menu .mob-social a:hover {
            background: #111;
            border-color: #111;
            color: var(--lime);
        }
        
        /* Update close button when scrolled */
        .navbar-wrapper.scrolled #mobile-menu .menu-close-btn {
            border-color: rgba(0,0,0,0.2);
            color: rgba(0,0,0,0.5);
        }
        .navbar-wrapper.scrolled #mobile-menu .menu-close-btn:hover {
            background: #111;
            border-color: #111;
            color: var(--lime);
        }

        @keyframes menuSlideIn {
            from { opacity: 0; transform: translateX(40px); }
            to   { opacity: 1; transform: translateX(0); }
        }
        body.menu-open { overflow: hidden; }

        /* ── MOBILE LINKS — big, left-aligned, editorial ── */
        .mob-link {
            display: block;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(2rem, 7vw, 3.2rem);
            font-weight: 700;
            color: rgba(255,255,255,0.25);
            text-decoration: none;
            padding: 0.5rem 0;
            letter-spacing: -0.03em;
            line-height: 1.1;
            transition: color 0.2s ease, transform 0.25s ease;
        }
        .mob-link:hover { color: var(--lime); transform: translateX(12px); }
        .mob-link.active { color: #fff; }

        .mob-cta {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 2.5rem;
            padding: 0.9rem 2rem;
            border-radius: 0; /* sharp corners — edgy */
            background: var(--lime);
            color: #111;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 0.9rem;
            text-decoration: none;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            transition: background 0.2s, transform 0.2s;
            clip-path: polygon(0 0, calc(100% - 10px) 0, 100% 10px, 100% 100%, 10px 100%, 0 calc(100% - 10px));
        }
        .mob-cta:hover { background: var(--lime-dark); transform: translateX(4px); }

        /* mob footer row */
        .mob-footer {
            position: absolute;
            bottom: 2.5rem;
            left: 3rem;
            right: 3rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .mob-footer-tag {
            font-family: 'Inter', sans-serif;
            font-size: 0.7rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.2);
            transition: color 0.45s ease;
        }
        .mob-social {
            display: flex;
            gap: 0.75rem;
        }
        .mob-social a {
            width: 36px; height: 36px;
            border: 1px solid rgba(255,255,255,0.1);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.4);
            text-decoration: none;
            font-size: 0.85rem;
            transition: all 0.2s;
        }
        .mob-social a:hover { background: var(--lime); border-color: var(--lime); color: #111; }

        /* close X */
        .menu-close-btn {
            position: absolute;
            top: 1.5rem; right: 1.75rem;
            width: 44px; height: 44px;
            border: 1px solid rgba(255,255,255,0.12);
            display: flex; align-items: center; justify-content: center;
            cursor: pointer;
            color: rgba(255,255,255,0.5);
            font-size: 1rem;
            background: none;
            transition: all 0.2s;
        }
        .menu-close-btn:hover { background: var(--lime); border-color: var(--lime); color: #111; }

        /* ── DESKTOP NAV LINKS ── */
        .nav-link {
            position: relative;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 0.8rem;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            transition: color 0.2s;
        }
        .nav-link::before {
            content: '';
            position: absolute;
            bottom: -4px; left: 0;
            width: 0; height: 1px;
            background: var(--lime);
            transition: width 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .nav-link:hover { color: #fff; }
        .nav-link:hover::before { width: 100%; }

        /* scrolled state — dark links */
        .navbar-wrapper.scrolled .nav-link { color: rgba(0,0,0,0.6); }
        .navbar-wrapper.scrolled .nav-link:hover { color: #111; }
        .navbar-wrapper.scrolled .nav-link::before { background: #111; }
        .navbar-wrapper.scrolled .bar { background: #111; }
        .navbar-wrapper.scrolled #desktop-contact {
            border-color: rgba(0,0,0,0.3) !important;
            color: #111 !important;
        }
        .navbar-wrapper.scrolled #desktop-contact:hover {
            background: rgba(0,0,0,0.06) !important;
        }

        /* ── HAMBURGER ── */
        .bar {
            display: block;
            width: 24px; height: 1.5px;
            background: white;
            border-radius: 0; /* sharp — edgy */
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                        opacity 0.3s ease,
                        width 0.3s ease,
                        background 0.3s ease;
            transform-origin: center;
        }
        /* middle bar shorter = asymmetric — edgy */
        .bar:nth-child(2) { width: 16px; }
        #menuToggle.is-open .bar:nth-child(1) { transform: translateY(7px) rotate(45deg); width: 24px; }
        #menuToggle.is-open .bar:nth-child(2) { opacity: 0; width: 0; }
        #menuToggle.is-open .bar:nth-child(3) { transform: translateY(-7px) rotate(-45deg); width: 24px; }

        /* ── NAVBAR WRAPPER ── */
        .navbar-wrapper {
            position: relative;
            top: auto; left: auto; right: auto; z-index: auto;
            background: transparent;
            backdrop-filter: blur(0px);
            -webkit-backdrop-filter: blur(0px);
            border-bottom: 1px solid transparent;
            transition:
                background 0.45s cubic-bezier(0.4, 0, 0.2, 1),
                backdrop-filter 0.45s ease,
                -webkit-backdrop-filter 0.45s ease,
                border-color 0.45s ease,
                box-shadow 0.45s ease;
        }

        /* ── SCROLLED: solid yellowish bg, strong blur ── */
        .navbar-wrapper.scrolled {
            background: rgba(218, 255, 80, 0.72);
            backdrop-filter: blur(24px) saturate(1.8) brightness(1.05);
            -webkit-backdrop-filter: blur(24px) saturate(1.8) brightness(1.05);
            border-bottom: 1px solid rgba(166, 230, 44, 0.5);
            box-shadow:
                0 1px 0 rgba(255,255,255,0.4) inset,
                0 8px 40px -12px rgba(140, 200, 20, 0.35);
        }

        /* ── NAVBAR INNER LAYOUT ── */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.1rem 1.5rem;
            color: white;
        }
        @media (min-width: 768px)  { .navbar { padding: 1.25rem 3rem; } }
        @media (min-width: 1024px) { .navbar { padding: 1.4rem 5rem; } }

        /* ── CONTACT PILL (desktop) ── */
        #desktop-contact {
            font-family: 'Inter', sans-serif;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: white;
            text-decoration: none;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.3);
            padding: 0.55rem 1.4rem;
            /* edgy: cut corner */
            clip-path: polygon(0 0, calc(100% - 8px) 0, 100% 8px, 100% 100%, 8px 100%, 0 calc(100% - 8px));
            transition: all 0.2s;
        }
        #desktop-contact:hover {
            background: var(--lime);
            border-color: var(--lime);
            color: #111;
        }
        .navbar-wrapper.scrolled #desktop-contact {
            border-color: rgba(0,0,0,0.25) !important;
            color: #111 !important;
        }
        .navbar-wrapper.scrolled #desktop-contact:hover {
            background: #111 !important;
            border-color: #111 !important;
            color: var(--lime) !important;
        }

        /* ===== RESPONSIVE CONTROL - PURE CSS, NOTHING CHANGED ===== */
        /* Mobile (up to 767px) */
        @media (max-width: 767px) {
            #desktop-links {
                display: none !important;
            }
            #desktop-contact {
                display: none !important;
            }
            #menuToggle {
                display: flex !important;
            }
            /* Ensure mobile menu button is visible */
            .navbar .md:hidden {
                display: flex !important;
            }
        }

        /* Desktop (768px and up) */
        @media (min-width: 768px) {
            #desktop-links {
                display: flex !important;
            }
            #desktop-contact {
                display: inline-block !important;
            }
            #menuToggle {
                display: none !important;
            }
            /* Hide mobile menu by default on desktop */
            #mobile-menu {
                display: none !important;
            }
            #mobile-menu.is-open {
                display: none !important;
            }
        }

        /* Small desktop / large tablet overlap */
        @media (min-width: 640px) and (max-width: 767px) {
            #desktop-contact {
                display: none !important;
            }
        }
    </style>
</head>
<body>

<div class="navbar-wrapper" id="navbar-inner">
    <nav class="navbar">

        <!-- Logo — bigger - COMPLETELY ORIGINAL, NOTHING CHANGED -->
        <a href="index.php" style="flex-shrink:0;">
            <img src="images/logo.gif" alt="OneStop Solutions"
                 id="nav-logo"
                 style="height:2.8rem; width:auto; filter:brightness(0) invert(1); transition:opacity 0.2s, filter 0.35s;"
                 onmouseover="this.style.opacity='0.75'" onmouseout="this.style.opacity='1'">
        </a>

        <!-- Desktop links -->
        <div style="display:none;" id="desktop-links" class="md:!flex items-center gap-10">
            <a href="index.php"         class="nav-link">Home</a>
            <a href="services.php"      class="nav-link">Services</a>
            <a href="about.php"         class="nav-link">About</a>
            <a href="whyOutsource.php"  class="nav-link">Why Outsource</a>
        </div>

        <!-- Right: contact + hamburger -->
        <div style="display:flex; align-items:center; gap:1.25rem;">
            <a href="contact.php"
               style="display:none;"
               id="desktop-contact"
               class="sm:!inline-block">
                Contact us
            </a>

            <button id="menuToggle"
                    aria-label="Toggle navigation menu"
                    aria-expanded="false"
                    style="background:none; border:none; cursor:pointer;
                           display:flex; flex-direction:column; gap:7px;
                           padding:4px; z-index:1010;"
                    class="md:!hidden">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </nav>

    <!-- Full-screen mobile menu -->
    <div id="mobile-menu" role="dialog" aria-modal="true" aria-label="Navigation menu">

        <button class="menu-close-btn" id="menuClose" aria-label="Close menu">
            <i class="fas fa-times"></i>
        </button>

        <!-- big nav links -->
        <nav style="margin-bottom:1rem;">
            <a href="index.php"        class="mob-link">Home</a>
            <a href="services.php"     class="mob-link">Services</a>
            <a href="about.php"        class="mob-link">About</a>
            <a href="whyOutsource.php" class="mob-link">Why Outsource</a>
        </nav>

        <a href="contact.php" class="mob-cta">
            Contact Us <i class="fas fa-arrow-right" style="font-size:0.75rem;"></i>
        </a>

        <!-- bottom row -->
        <div class="mob-footer">
            <span class="mob-footer-tag">OneStop Solutions</span>
            <div class="mob-social">
                <a href="#" aria-label="LinkedIn">  <i class="fab fa-linkedin-in"></i></a>
                <a href="#" aria-label="Facebook">  <i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"> <i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    'use strict';

    var toggle   = document.getElementById('menuToggle');
    var menu     = document.getElementById('mobile-menu');
    var closeBtn = document.getElementById('menuClose');
    var navInner = document.getElementById('navbar-inner');
    var logo     = document.getElementById('nav-logo');
    var isOpen   = false;

    function openMenu() {
        isOpen = true;
        menu.classList.add('is-open');
        toggle.classList.add('is-open');
        toggle.setAttribute('aria-expanded', 'true');
        document.body.classList.add('menu-open');
    }

    function closeMenu() {
        isOpen = false;
        menu.classList.remove('is-open');
        toggle.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('menu-open');
    }

    toggle.addEventListener('click', function (e) { 
        e.stopPropagation(); 
        isOpen ? closeMenu() : openMenu(); 
    });
    
    closeBtn.addEventListener('click', closeMenu);
    
    menu.querySelectorAll('a').forEach(function (link) { 
        link.addEventListener('click', closeMenu); 
    });
    
    document.addEventListener('keydown', function (e) { 
        if (e.key === 'Escape' && isOpen) closeMenu(); 
    });

    // Close mobile menu when window resizes to desktop
    window.addEventListener('resize', function () {
        if (window.innerWidth >= 768 && isOpen) {
            closeMenu();
        }
    });

    /* ── Scroll: blurry yellowish bg ── */
    var scrollTicking = false;

    function handleScrolledState() {
        if (window.scrollY > 40) {
            navInner.classList.add('scrolled');
            if (logo) logo.style.filter = 'brightness(0)';
        } else {
            navInner.classList.remove('scrolled');
            if (logo) logo.style.filter = 'brightness(0) invert(1)';
        }
        scrollTicking = false;
    }

    window.addEventListener('scroll', function () {
        if (!scrollTicking) {
            requestAnimationFrame(handleScrolledState);
            scrollTicking = true;
        }
    }, { passive: true });

    handleScrolledState();
}());
</script>

</body>
</html>