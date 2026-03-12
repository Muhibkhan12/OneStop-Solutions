<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Preview</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
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

        /* Footer animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes pulse-slow {
            0%, 100% { opacity: 0.15; transform: scale(1); }
            50% { opacity: 0.25; transform: scale(1.1); }
        }
        
        @keyframes pulse-slower {
            0%, 100% { opacity: 0.1; transform: scale(1); }
            50% { opacity: 0.2; transform: scale(1.2); }
        }
        
        @keyframes glow {
            0%, 100% { filter: brightness(1); }
            50% { filter: brightness(1.2); }
        }
        
        .animate-pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }
        
        .animate-pulse-slower {
            animation: pulse-slower 6s ease-in-out infinite;
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-glow {
            animation: glow 3s ease-in-out infinite;
        }
        
        /* Smooth hover effects */
        .group:hover .group-hover\:bg-\[\#ceff66\]\/20 {
            background-color: rgba(206, 255, 102, 0.2);
        }
        
        .group:hover .group-hover\:text-\[\#ceff66\] {
            color: #ceff66;
        }
        
        .group:hover .group-hover\:text-white {
            color: white;
        }
        
        .group:hover .group-hover\:scale-110 {
            transform: scale(1.1);
        }
        
        .group:hover .group-hover\:scale-105 {
            transform: scale(1.05);
        }
        
        .group:hover .group-hover\:translate-x-1 {
            transform: translateX(0.25rem);
        }
        
        /* Input focus effect */
        input:focus {
            box-shadow: 0 0 0 3px rgba(206, 255, 102, 0.15);
        }
        
        /* Link underline animation */
        .group:hover .group-hover\:w-full {
            width: 100%;
        }
        
        /* Even darker background */
        .bg-\[\#000000\] {
            background-color: #000000;
        }
        
        /* Subtle hover effects */
        a, button {
            transition: all 0.3s ease;
        }
        
        /* Responsive logo height adjustments */
        @media (max-width: 640px) {
            .h-16 {
                height: 5rem;
            }
        }
        
        @media (min-width: 641px) and (max-width: 768px) {
            .sm\:h-20 {
                height: 5rem;
            }
        }
        
        @media (min-width: 769px) {
            .md\:h-24 {
                height: 6rem;
            }
            .lg\:h-24 {
                height: 6rem;
            }
        }
    </style>
</head>
<body class="bg-black">

<!-- ENHANCED FOOTER - All original elements kept, just made better -->
<footer class="relative max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-16 md:py-20 bg-[#000000] text-white/90 font-['Inter'] overflow-hidden">
  
  <!-- Darker, more subtle background - ENHANCED with better animations -->
  <div class="absolute inset-0 overflow-hidden">
    <!-- Very subtle gradients - barely visible - now with movement -->
    <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_right,_#ceff66/5,_transparent_70%)] animate-pulse-slow"></div>
    <div class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(ellipse_at_bottom_left,_#8b5cf6/5,_transparent_70%)] animate-pulse-slower"></div>
    
    <!-- Even subtler grid - now with diagonal lines -->
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: 
      linear-gradient(to right, #ceff66 1px, transparent 1px),
      linear-gradient(to bottom, #ceff66 1px, transparent 1px),
      linear-gradient(45deg, transparent 45%, #ceff66/5 50%, transparent 55%);
      background-size: 40px 40px, 40px 40px, 200% 200%;
      animation: shine 8s linear infinite;">
    </div>
    
    <!-- Floating particles - darker and more subtle - now with float animation -->
    <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-[#ceff66]/5 rounded-full blur-3xl animate-float"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-600/5 rounded-full blur-3xl animate-float" style="animation-delay: -2s;"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-[#ceff66]/3 rounded-full blur-3xl animate-pulse-slow"></div>
    
    <!-- Additional dark overlay to ensure pure black background -->
    <div class="absolute inset-0 bg-black/40"></div>
  </div>

  <!-- Main Content -->
  <div class="relative z-10">
    <!-- Top section with logo and description - ENHANCED with better spacing and hover effects -->
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 pb-12 border-b border-white/5">
      <!-- Brand - wider column - ENHANCED -->
      <div class="lg:col-span-2 group/brand">
        <div class="mb-5 relative">
          <!-- Glow effect behind logo -->
          <div class="absolute -inset-4 bg-[#ceff66]/5 rounded-full blur-2xl opacity-0 group-hover/brand:opacity-100 transition-opacity duration-700"></div>
          <!-- Logo - larger on mobile (h-16), even larger on desktop (h-24) -->
          <img src="images/logo.gif" alt="Growth Alliance Logo" class="h-16 sm:h-20 md:h-24 lg:h-24 w-auto brightness-0 invert hover:opacity-90 hover:scale-105 transition-all duration-500 relative z-10">
        </div>
        <p class="text-white/80 text-sm leading-relaxed max-w-sm mb-6 font-['Inter'] hover:text-white/90 transition-colors duration-300">
          Empowering franchises with data-driven digital marketing solutions that deliver real growth.
        </p>
        
        <!-- Social - darker theme - ENHANCED with better hover -->
        <div class="flex gap-4">
          <a href="https://www.linkedin.com/company/onestopsolutions/" class="w-10 h-10 rounded-full bg-white/5 border border-white/5 flex items-center justify-center text-white/40 hover:text-[#ceff66] hover:border-[#ceff66] hover:bg-[#ceff66]/10 hover:scale-125 hover:rotate-12 transition-all duration-300">
            <i class="fab fa-linkedin-in text-sm"></i>
          </a>
          <a href="https://www.facebook.com/OSSolutioners/" class="w-10 h-10 rounded-full bg-white/5 border border-white/5 flex items-center justify-center text-white/40 hover:text-[#ceff66] hover:border-[#ceff66] hover:bg-[#ceff66]/10 hover:scale-125 hover:rotate-12 transition-all duration-300">
            <i class="fab fa-facebook text-sm"></i>
          </a>
          </a>
        </div>
      </div>

      <!-- Empty space for balance - now with decorative element -->
      <div class="hidden lg:block lg:col-span-1 relative">
        <div class="absolute left-1/2 top-0 bottom-0 w-px bg-gradient-to-b from-transparent via-white/5 to-transparent"></div>
      </div>

      <!-- Links - darker theme - ENHANCED with better layout and hover effects -->
      <div class="lg:col-span-2">
        <div class="grid grid-cols-2 gap-8">
          <!-- Company -->
          <div>
            <h4 class="text-xs uppercase tracking-wider text-white font-bold mb-4 font-['Space_Grotesk'] relative inline-block group">
              Company
              <span class="absolute -bottom-1 left-0 w-0 h-px bg-[#ceff66] group-hover:w-full transition-all duration-300"></span>
            </h4>
            <ul class="space-y-3">
              <li><a href="index.php" class="text-sm text-white/70 hover:text-[#ceff66] hover:translate-x-1 transition-all duration-200 inline-block font-['Inter']">Home</a></li>
              <li><a href="services.php" class="text-sm text-white/70 hover:text-[#ceff66] hover:translate-x-1 transition-all duration-200 inline-block font-['Inter']">Services</a></li>
              <li><a href="about.php" class="text-sm text-white/70 hover:text-[#ceff66] hover:translate-x-1 transition-all duration-200 inline-block font-['Inter']">About Us</a></li>
            </ul>
          </div>
          <!-- Resources (split from Company for better balance) -->
          <div>
            <h4 class="text-xs uppercase tracking-wider text-white font-bold mb-4 font-['Space_Grotesk'] relative inline-block group">
              Resources
              <span class="absolute -bottom-1 left-0 w-0 h-px bg-[#ceff66] group-hover:w-full transition-all duration-300"></span>
            </h4>
            <ul class="space-y-3">
              <li><a href="whyOutsource.php" class="text-sm text-white/70 hover:text-[#ceff66] hover:translate-x-1 transition-all duration-200 inline-block font-['Inter']">Why Outsource</a></li>
              <li><a href="contact.php" class="text-sm text-white/70 hover:text-[#ceff66] hover:translate-x-1 transition-all duration-200 inline-block font-['Inter']">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Middle section with contact and CTA - ENHANCED with better layout -->
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 py-12">
      <!-- Contact info - darker theme - ENHANCED with better organization -->
      <div class="lg:col-span-3 grid grid-cols-1 sm:grid-cols-3 gap-4">
        <div class="flex items-center gap-3 group p-3 rounded-lg hover:bg-white/5 transition-all duration-300">
          <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#ceff66]/20 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
            <i class="fas fa-envelope text-[#ceff66] text-sm group-hover:scale-110 transition-transform duration-300"></i>
          </div>
          <div>
            <span class="text-xs text-white/40 block">Email</span>
            <span class="text-sm text-white/80 group-hover:text-white transition-colors duration-300 font-['Inter']">example@gmail.com</span>
          </div>
        </div>
        <div class="flex items-center gap-3 group p-3 rounded-lg hover:bg-white/5 transition-all duration-300">
          <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#ceff66]/20 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
            <i class="fas fa-phone text-[#ceff66] text-sm group-hover:scale-110 transition-transform duration-300"></i>
          </div>
          <div>
            <span class="text-xs text-white/40 block">Phone</span>
            <span class="text-sm text-white/80 group-hover:text-white transition-colors duration-300 font-['Inter']">0336 1369929</span>
          </div>
        </div>
        <div class="flex items-center gap-3 group p-3 rounded-lg hover:bg-white/5 transition-all duration-300">
          <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#ceff66]/20 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
            <i class="fas fa-map-marker-alt text-[#ceff66] text-sm group-hover:scale-110 transition-transform duration-300"></i>
          </div>
          <div>
            <span class="text-xs text-white/40 block">Office</span>
            <span class="text-sm text-white/80 group-hover:text-white transition-colors duration-300 max-w-xs font-['Inter']">Karachi, Pakistan</span>
          </div>
        </div>
      </div>
      
      <!-- CTA Button - NEW but keeps the spirit -->
      <div class="lg:col-span-2 flex items-center justify-end">
        <a href="contact.php" class="group relative inline-flex items-center gap-2 px-6 py-3 bg-[#ceff66]/10 border border-[#ceff66]/30 rounded-lg overflow-hidden hover:border-[#ceff66] transition-all duration-300">
          <span class="absolute inset-0 bg-[#ceff66]/0 group-hover:bg-[#ceff66]/10 transition-all duration-300"></span>
          <span class="relative text-white/90 group-hover:text-[#ceff66] font-semibold text-sm">Let's work together</span>
          <i class="fas fa-arrow-right relative text-[#ceff66] group-hover:translate-x-1 transition-transform duration-300"></i>
        </a>
      </div>
    </div>
  </div>
</footer>

<style>
  @keyframes shine {
    0% { background-position: 0 0, 0 0, -100% 0; }
    100% { background-position: 0 0, 0 0, 200% 0; }
  }
</style>

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