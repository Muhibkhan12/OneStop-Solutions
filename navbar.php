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
            --bg: #faf9f7;
            --muted: #5a5a5a;
        }

        /* ── Mobile menu: controlled ONLY via JS class, NOT Tailwind ── */
        #mobile-menu {
            display: none;
            position: fixed;
            inset: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(8, 8, 8, 0.97);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            z-index: 999;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        #mobile-menu.is-open {
            display: flex;
            animation: menuFadeIn 0.28s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @keyframes menuFadeIn {
            from { opacity: 0; transform: scale(0.98); }
            to   { opacity: 1; transform: scale(1); }
        }

        /* ── Prevent body scroll when menu open ── */
        body.menu-open {
            overflow: hidden;
        }

        /* ── Mobile menu links ── */
        .mob-link {
            display: block;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.4rem, 5vw, 2rem);
            font-weight: 600;
            color: rgba(255,255,255,0.75);
            text-decoration: none;
            padding: 0.75rem 0;
            letter-spacing: -0.02em;
            transition: color 0.2s ease, transform 0.2s ease;
            border-bottom: 1px solid rgba(255,255,255,0.07);
        }

        .mob-link:last-of-type {
            border-bottom: none;
        }

        .mob-link:hover {
            color: #fff;
            transform: translateX(6px);
        }

        .mob-link.active {
            color: var(--lime);
        }

        /* ── Mobile CTA button ── */
        .mob-cta {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.85rem 2.2rem;
            border-radius: 100px;
            background: var(--lime);
            color: #111;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            transition: background 0.2s, transform 0.2s;
            letter-spacing: -0.01em;
        }

        .mob-cta:hover {
            background: var(--lime-dark);
            transform: translateY(-2px);
        }

        /* ── Desktop nav underline hover ── */
        .nav-link {
            position: relative;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 0.875rem;
            color: rgba(255,255,255,0.85);
            text-decoration: none;
            letter-spacing: -0.01em;
            transition: color 0.2s;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--lime);
            border-radius: 2px;
            box-shadow: 0 0 8px rgba(206,255,102,0.5);
            transition: width 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link:hover {
            color: #fff;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* ── Hamburger bars ── */
        .bar {
            display: block;
            width: 22px;
            height: 2px;
            background: white;
            border-radius: 2px;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                        opacity 0.3s ease,
                        width 0.3s ease;
            transform-origin: center;
        }

        /* X state */
        #menuToggle.is-open .bar:nth-child(1) {
            transform: translateY(8px) rotate(45deg);
        }
        #menuToggle.is-open .bar:nth-child(2) {
            opacity: 0;
            width: 0;
        }
        #menuToggle.is-open .bar:nth-child(3) {
            transform: translateY(-8px) rotate(-45deg);
        }

        /* ── Navbar wrapper ── */
        .navbar-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            z-index: 40;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.25rem 1.25rem;
            color: white;
        }

        @media (min-width: 768px) {
            .navbar {
                padding: 1.5rem 3rem;
            }
        }

        @media (min-width: 1024px) {
            .navbar {
                padding: 1.75rem 5rem;
            }
        }

        /* ── Demo hero background ── */
        .demo-hero {
            min-height: 100vh;
            background: linear-gradient(135deg, #0f0f1a 0%, #1a1a2e 40%, #16213e 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: white;
            text-align: center;
            padding: 2rem;
        }

        /* ── Mobile social icons ── */
        .mob-social {
            display: flex;
            gap: 1rem;
            margin-top: 2.5rem;
            justify-content: center;
        }

        .mob-social a {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 1px solid rgba(255,255,255,0.12);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            font-size: 0.95rem;
            transition: all 0.2s;
        }

        .mob-social a:hover {
            background: var(--lime);
            border-color: var(--lime);
            color: #111;
            transform: translateY(-3px);
        }

        /* ── Close button ── */
        .menu-close-btn {
            position: absolute;
            top: 1.25rem;
            right: 1.25rem;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.07);
            border: 1px solid rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            color: rgba(255,255,255,0.7);
            font-size: 1rem;
            transition: all 0.2s;
        }

        .menu-close-btn:hover {
            background: var(--lime);
            border-color: var(--lime);
            color: #111;
        }
    </style>
</head>
<body>

<!-- ════════════════════════════════════════════
     NAVBAR — copy everything inside this comment
     block into your page
═══════════════════════════════════════════════ -->
<div class="navbar-wrapper">

    <!-- Top bar -->
    <nav class="navbar">

        <!-- Logo -->
        <a href="index.php">
            <img src="images/logo.gif" alt="Growth Alliance"
                 style="height:2.2rem; width:auto; filter:brightness(0) invert(1); transition:opacity 0.2s;"
                 onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">
        </a>

        <!-- Desktop links (hidden on mobile) -->
        <div style="display:none;" id="desktop-links"
             class="md:!flex items-center gap-8">
            <a href="index.php"         class="nav-link">Home</a>
            <a href="services.php"      class="nav-link">Services</a>
            <a href="about.php"         class="nav-link">About</a>
            <a href="whyOutsource.php"  class="nav-link">Why Outsource</a>
        </div>

        <!-- Right: contact + hamburger -->
        <div style="display:flex; align-items:center; gap:1rem;">
            <!-- Contact (hidden below sm) -->
            <a href="contact.php"
               style="display:none;"
               id="desktop-contact"
               class="sm:!inline-block"
               onmouseover="this.style.background='rgba(255,255,255,0.1)';this.style.borderColor='rgba(255,255,255,0.5)'"
               onmouseout="this.style.background='transparent';this.style.borderColor='rgba(255,255,255,0.3)'"
               style="padding:0.5rem 1.25rem; border-radius:100px; border:1px solid rgba(255,255,255,0.3);
                      font-family:'Inter',sans-serif; font-size:0.875rem; font-weight:500;
                      color:white; text-decoration:none; background:transparent; transition:all 0.2s;">
                Contact us
            </a>

            <!-- Hamburger (visible on mobile only) -->
            <button id="menuToggle"
                    aria-label="Toggle navigation menu"
                    aria-expanded="false"
                    style="background:none; border:none; cursor:pointer;
                           display:flex; flex-direction:column; gap:6px;
                           padding:4px; z-index:1010;"
                    class="md:!hidden">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </nav>

    <!-- Full-screen mobile menu (toggled via JS .is-open class) -->
    <div id="mobile-menu" role="dialog" aria-modal="true" aria-label="Navigation menu">

        <!-- Close X in corner -->
        <button class="menu-close-btn" id="menuClose" aria-label="Close menu">
            <i class="fas fa-times"></i>
        </button>

        <div style="max-width:380px; width:100%; text-align:center;">

            <!-- Nav links -->
            <nav style="margin-bottom:0.5rem;">
                <a href="index.php"        class="mob-link">Home</a>
                <a href="services.php"     class="mob-link">Services</a>
                <a href="about.php"        class="mob-link">About</a>
                <a href="whyOutsource.php" class="mob-link">Why Outsource</a>
            </nav>

            <!-- CTA -->
            <a href="contact.php" class="mob-cta">Contact Us →</a>

            <!-- Social icons -->
            <div class="mob-social">
                <a href="#" aria-label="LinkedIn">  <i class="fab fa-linkedin-in"></i></a>
                <a href="#" aria-label="Facebook">  <i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="Instagram"> <i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- ════════════════════ END NAVBAR ════════════════════ -->



<script>
(function () {
    'use strict';

    var toggle  = document.getElementById('menuToggle');
    var menu    = document.getElementById('mobile-menu');
    var closeBtn = document.getElementById('menuClose');
    var isOpen  = false;

    /* ── Helpers ── */
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

    /* ── Toggle on hamburger click ── */
    toggle.addEventListener('click', function (e) {
        e.stopPropagation();
        isOpen ? closeMenu() : openMenu();
    });

    /* ── Close button inside menu ── */
    closeBtn.addEventListener('click', closeMenu);

    /* ── Close when any menu link is clicked ── */
    menu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', closeMenu);
    });

    /* ── Escape key ── */
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && isOpen) closeMenu();
    });

    /* ── Close if resized to desktop width ── */
    var resizeTimer;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            if (window.innerWidth >= 768 && isOpen) closeMenu();
        }, 150);
    });

    /* ── Fix: ensure desktop elements show via Tailwind
       (in case inline display:none wins over Tailwind md:!flex) ── */
    function syncDesktopVisibility() {
        var dLinks   = document.getElementById('desktop-links');
        var dContact = document.getElementById('desktop-contact');
        if (window.innerWidth >= 768) {
            dLinks.style.display   = 'flex';
        } else {
            dLinks.style.display   = 'none';
        }
        if (window.innerWidth >= 640) {
            dContact.style.display = 'inline-block';
        } else {
            dContact.style.display = 'none';
        }
    }

    syncDesktopVisibility();
    window.addEventListener('resize', syncDesktopVisibility);
}());
</script>

</body>
</html>