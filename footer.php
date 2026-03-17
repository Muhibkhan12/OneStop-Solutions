<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&family=Inter:wght@400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --lime: #ceff66;
            --lime-dark: #a6e62c;
        }

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
        @keyframes shine {
            0% { background-position: 0 0, 0 0, -100% 0; }
            100% { background-position: 0 0, 0 0, 200% 0; }
        }

        .animate-pulse-slow  { animation: pulse-slow   4s ease-in-out infinite; }
        .animate-pulse-slower{ animation: pulse-slower  6s ease-in-out infinite; }
        .animate-float       { animation: float         6s ease-in-out infinite; }

        /* Contact items */
        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            padding: 0.75rem;
            border-radius: 0.5rem;
            transition: background 0.3s;
        }
        .contact-item:hover { background: rgba(255,255,255,0.05); }

        /* Icon circle — lime-tinted so it's visible on black */
        .contact-icon {
            width: 2.5rem;
            height: 2.5rem;
            flex-shrink: 0;
            border-radius: 50%;
            background: rgba(206,255,102,0.08);
            border: 1px solid rgba(206,255,102,0.25);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }
        .contact-item:hover .contact-icon {
            background: rgba(206,255,102,0.2);
            border-color: rgba(206,255,102,0.5);
            transform: scale(1.1) rotate(6deg);
        }

        /* CTA button */
        .cta-btn {
            position: relative;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            background: rgba(206,255,102,0.1);
            border: 1px solid rgba(206,255,102,0.3);
            border-radius: 0.5rem;
            overflow: hidden;
            text-decoration: none;
            transition: border-color 0.3s;
            white-space: nowrap;
        }
        .cta-btn:hover { border-color: #ceff66; }
        .cta-btn::before {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(206,255,102,0);
            transition: background 0.3s;
        }
        .cta-btn:hover::before { background: rgba(206,255,102,0.1); }
        .cta-btn span {
            position: relative;
            color: rgba(255,255,255,0.9);
            font-weight: 600;
            font-size: 0.875rem;
            transition: color 0.3s;
        }
        .cta-btn:hover span { color: #ceff66; }
        .cta-btn i {
            position: relative;
            color: #ceff66;
            transition: transform 0.3s;
        }
        .cta-btn:hover i { transform: translateX(4px); }

        /* Footer nav links */
        .footer-link {
            font-size: 0.875rem;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            display: inline-block;
            font-family: 'Inter', sans-serif;
            transition: color 0.2s, transform 0.2s;
        }
        .footer-link:hover { color: #ceff66; transform: translateX(4px); }

        /* Section heading */
        .section-heading {
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: white;
            font-weight: 700;
            font-family: 'Space Grotesk', sans-serif;
            position: relative;
            display: inline-block;
            margin-bottom: 1rem;
            cursor: default;
        }
        .section-heading::after {
            content: '';
            position: absolute;
            bottom: -4px; left: 0;
            width: 0; height: 1px;
            background: #ceff66;
            transition: width 0.3s;
        }
        .section-heading:hover::after { width: 100%; }

        /* Social icons — visible on black */
        .social-icon {
            width: 2.5rem; height: 2.5rem;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            display: flex; align-items: center; justify-content: center;
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            font-size: 0.875rem;
            transition: all 0.3s;
        }
        .social-icon:hover {
            color: #ceff66;
            border-color: #ceff66;
            background: rgba(206,255,102,0.1);
            transform: scale(1.25) rotate(12deg);
        }

        /* Bottom bar */
        .footer-bottom {
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255,255,255,0.05);
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            align-items: center;
            justify-content: space-between;
        }

        /* RESPONSIVE: contact grid */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 0.5rem;
        }
        @media (min-width: 480px) {
            .contact-grid { grid-template-columns: 1fr 1fr; }
        }
        @media (min-width: 768px) {
            .contact-grid { grid-template-columns: 1fr 1fr 1fr; }
        }

        /* RESPONSIVE: middle row */
        .middle-row {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            padding: 2rem 0;
        }
        @media (min-width: 768px) {
            .middle-row {
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }
        }

        /* RESPONSIVE: top section grid */
        .top-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            padding-bottom: 2rem;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        @media (min-width: 768px) {
            .top-grid { grid-template-columns: 1fr 1fr; gap: 3rem; }
        }
        @media (min-width: 1024px) {
            .top-grid { grid-template-columns: 2fr 0.1fr 1.5fr; gap: 2rem; }
        }

        /* Links grid */
        .links-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }
    </style>
</head>
<body class="bg-black">

<footer class="relative max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-16 md:py-20 bg-[#000000] text-white/90 font-['Inter'] overflow-hidden">

    <!-- Background effects -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_right,_rgba(206,255,102,0.05),_transparent_70%)] animate-pulse-slow"></div>
        <div class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(ellipse_at_bottom_left,_rgba(139,92,246,0.05),_transparent_70%)] animate-pulse-slower"></div>
        <div class="absolute inset-0 opacity-[0.02]" style="background-image: linear-gradient(to right, #ceff66 1px, transparent 1px), linear-gradient(to bottom, #ceff66 1px, transparent 1px); background-size: 40px 40px;"></div>
        <div class="absolute top-1/4 left-1/4 w-64 h-64 rounded-full blur-3xl animate-float" style="background: rgba(206,255,102,0.05);"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 rounded-full blur-3xl animate-float" style="background: rgba(139,92,246,0.05); animation-delay: -2s;"></div>
        <div class="absolute inset-0 bg-black/40"></div>
    </div>

    <div class="relative z-10">

        <!-- TOP: Brand + Divider + Links -->
        <div class="top-grid">

            <!-- Brand -->
            <div>
                <div class="mb-5">
                    <img src="images/logo.gif" alt="One Stop Solutions Logo"
                         class="h-16 sm:h-20 w-auto brightness-0 invert hover:opacity-90 transition-all duration-500">
                </div>
                <p class="text-white/80 text-sm leading-relaxed max-w-sm mb-6 font-['Inter']">
                    Empowering franchises with data-driven digital marketing solutions that deliver real growth.
                </p>
                <div class="flex gap-3 flex-wrap">
                    <a href="https://www.linkedin.com/company/onestopsolutions/" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.facebook.com/OSSolutioners/" class="social-icon">
                        <i class="fab fa-facebook text-dark"></i>
                    </a>
                </div>
            </div>

            <!-- Divider (desktop only) -->
            <div class="hidden lg:flex justify-center">
                <div class="w-px bg-gradient-to-b from-transparent via-white/5 to-transparent self-stretch"></div>
            </div>

            <!-- Links -->
            <div class="links-grid">
                <div>
                    <div class="section-heading">Company</div>
                    <ul class="space-y-3">
                        <li><a href="index.php" class="footer-link">Home</a></li>
                        <li><a href="services.php" class="footer-link">Services</a></li>
                        <li><a href="about.php" class="footer-link">About Us</a></li>
                    </ul>
                </div>
                <div>
                    <div class="section-heading">Resources</div>
                    <ul class="space-y-3">
                        <li><a href="whyOutsource.php" class="footer-link">Why Outsource</a></li>
                        <li><a href="contact.php" class="footer-link">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- MIDDLE: Contact + CTA -->
        <div class="middle-row">

            <!-- Contact info -->
            <div class="contact-grid flex-1">

                <!-- Email -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope" style="color: #ceff66; font-size: 0.875rem;"></i>
                    </div>
                    <div class="min-w-0">
                        <span class="text-xs text-white/40 block">Email</span>
                        <span class="text-sm text-white/80 font-['Inter'] block break-all">info@onestopsolutions.com</span>
                        <span class="text-sm text-white/80 font-['Inter'] block break-all">hr@onestopsolutions.com</span>
                    </div>
                </div>

                <!-- Phone -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone" style="color: #ceff66; font-size: 0.875rem;"></i>
                    </div>
                    <div class="min-w-0">
                        <span class="text-xs text-white/40 block">Phone</span>
                        <span class="text-sm text-white/80 font-['Inter']">0336 1369929</span>
                    </div>
                </div>

                <!-- Address -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt" style="color: #ceff66; font-size: 0.875rem;"></i>
                    </div>
                    <div class="min-w-0">
                        <span class="text-xs text-white/40 block">Office</span>
                        <span class="text-sm text-white/80 font-['Inter'] leading-relaxed">
                            Suite# 111 &amp; 116, 1st Floor, Park Avenue, P.E.C.H.S, Block 6, Shahra-e-Faisal, Karachi, 75400
                        </span>
                    </div>
                </div>

            </div>

            <!-- CTA -->
            <div class="flex-shrink-0">
                <a href="contact.php" class="cta-btn">
                    <span>Let's work together</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- BOTTOM BAR -->
        <div class="footer-bottom">
            <p class="text-xs text-white/30 font-['Inter']">
                &copy; 2025 One Stop Solutions. All rights reserved.
            </p>
            <div class="flex gap-4 flex-wrap">
                <a href="#" class="text-xs text-white/30 hover:text-white/60 font-['Inter'] transition-colors duration-200">Privacy Policy</a>
                <a href="#" class="text-xs text-white/30 hover:text-white/60 font-['Inter'] transition-colors duration-200">Terms of Service</a>
            </div>
        </div>

    </div>
</footer>

</body>
</html>