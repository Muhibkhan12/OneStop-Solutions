<?php /* Formspree handles all emails — no PHP needed */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
  <title>Contact Us — OneStop Solutions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50%       { transform: translateY(-10px); }
    }
    @keyframes pulse-glow {
      0%, 100% { opacity: 0.3; filter: blur(40px); }
      50%       { opacity: 0.6; filter: blur(60px); }
    }
    @keyframes slideIn {
      from { opacity: 0; transform: translateY(-10px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-12px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ── REVEAL ANIMATIONS ── */
    .reveal {
      opacity: 0; transform: translateY(30px);
      transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1);
    }
    .reveal-left {
      opacity: 0; transform: translateX(-40px);
      transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1);
    }
    .reveal-right {
      opacity: 0; transform: translateX(40px);
      transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1);
    }
    .reveal.visible, .reveal-left.visible, .reveal-right.visible {
      opacity: 1; transform: translate(0);
    }
    .d1 { transition-delay: 0.08s; }
    .d2 { transition-delay: 0.18s; }
    .d3 { transition-delay: 0.28s; }
    .d4 { transition-delay: 0.38s; }
    .d5 { transition-delay: 0.48s; }

    /* ── BASE ── */
    body { font-family: 'Inter', sans-serif; }
    h1,h2,h3,h4,h5,h6 { font-family: 'Space Grotesk', sans-serif; }

    /* ── NAVBAR ── */
    #navbar-wrapper {
      position: fixed; top: 0; left: 0; right: 0; z-index: 100;
      transition: transform 0.35s cubic-bezier(0.4,0,0.2,1);
      will-change: transform;
    }
    #navbar-wrapper.nav-hidden { transform: translateY(-100%); }

    /* ── CONTACT FORM INPUTS ── */
    .contact-input {
      background-color: #f9fafb;
      border: 1px solid #e5e7eb;
      transition: all 0.2s ease;
      font-family: 'Inter', sans-serif;
      width: 100%;
    }
    .contact-input:focus {
      border-color: #4f9eff;
      box-shadow: 0 0 0 4px rgba(79,158,255,0.12);
      outline: none;
      background-color: white;
    }
    .contact-input.invalid {
      border-color: #ef4444;
      box-shadow: 0 0 0 4px rgba(239,68,68,0.1);
    }

    /* ── SOCIAL ICONS ── */
    .social-icon { transition: all 0.2s ease; }
    .social-icon:hover {
      background-color: #1a3a6e !important;
      color: #4f9eff !important;
      transform: translateY(-3px);
    }

    /* ── SELECT DROPDOWN ── */
    select option { background-color: #0a0f1e; color: white; }

    /* ── FAQ STYLES ── */
    .faq-item { transition: all 0.3s ease; }
    .faq-item.active {
      border-color: #4f9eff;
      background: linear-gradient(to right, rgba(79,158,255,0.04), transparent);
    }
    .faq-question { cursor: pointer; transition: all 0.3s ease; }
    .faq-question:hover { background-color: rgba(79,158,255,0.04); }
    .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.5s cubic-bezier(0.4,0,0.2,1); }
    .faq-answer.show { max-height: 300px; }
    .faq-icon { transition: transform 0.3s ease; flex-shrink: 0; }

    /* ── HERO RESPONSIVE TEXT ── */
    .hero-title {
      font-size: clamp(2rem, 8vw, 5rem);
      line-height: 1.05;
      letter-spacing: -0.03em;
    }

    /* ── SOCIAL ROW WRAP ── */
    .social-row { display: flex; flex-wrap: wrap; gap: 0.6rem; }

    /* ── SUBMIT BUTTON ── */
    .submit-btn {
      display: inline-flex; align-items: center; gap: 0.75rem;
      background: #4f9eff; color: white; font-weight: 600; font-size: 0.9rem;
      padding: 0.8rem 1.5rem; border-radius: 9999px; border: none; cursor: pointer;
      transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(79,158,255,0.25);
      width: 100%; justify-content: center;
    }
    @media (min-width: 640px) {
      .submit-btn { width: auto; justify-content: flex-start; font-size: 1rem; padding: 1rem 2rem; }
    }
    .submit-btn:hover { transform: scale(1.03); box-shadow: 0 20px 30px -10px rgba(79,158,255,0.5); }
    .submit-btn:disabled { opacity: 0.7; cursor: not-allowed; transform: none; }

    /* ── CONTACT INFO CARD ── */
    .contact-info-card {
      background: linear-gradient(145deg, #4f9eff, #2b7fe0);
      border-radius: 2rem;
      padding: 1.5rem;
      box-shadow: 0 25px 50px -12px rgba(43,127,224,0.4);
      position: relative; overflow: hidden;
    }
    @media (min-width: 640px)  { .contact-info-card { border-radius: 2.5rem; padding: 2rem 2.5rem; } }
    @media (min-width: 768px)  { .contact-info-card { padding: 2.5rem 3rem; } }

    /* ── SECTION HEADINGS ── */
    .section-heading-lg { font-size: clamp(1.6rem, 5vw, 2.8rem); line-height: 1.1; }
    .section-heading-xl { font-size: clamp(1.6rem, 5vw, 2.5rem); line-height: 1.1; }
    .cta-heading        { font-size: clamp(1.5rem, 5vw, 2.5rem); line-height: 1.15; }

    /* ── FAQ QUESTION ── */
    .faq-question h3 { font-size: clamp(0.85rem, 2.5vw, 1rem); line-height: 1.35; }

    /* ── TOAST / ALERT ── */
    .alert-box {
      animation: fadeInDown 0.4s ease forwards;
      border-radius: 12px; padding: 12px 16px;
      display: flex; align-items: flex-start; gap: 12px;
      font-family: 'Inter', sans-serif; font-size: 0.85rem; line-height: 1.5;
    }
    @media (min-width: 640px) {
      .alert-box { padding: 14px 20px; font-size: 0.95rem; }
    }
    .alert-success { background: #f0fdf4; border: 1px solid #86efac; color: #166534; }
    .alert-error   { background: #fef2f2; border: 1px solid #fca5a5; color: #991b1b; }

    /* ── PREVENT HORIZONTAL SCROLL ── */
    html, body { overflow-x: hidden; }
  </style>
</head>

<body class="antialiased bg-white text-[#111]">

  <!-- Scroll Progress — blue -->
  <div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] z-[9999] duration-100" style="background:#4f9eff; box-shadow:0 0 20px rgba(79,158,255,0.7);"></div>

  <!-- ========== NAVBAR ========== -->
  <div id="navbar-wrapper">
    <?php @include('navbar.php') ?>
  </div>

  <!-- ========== HERO ========== -->
<section class="relative min-h-[40vh] sm:min-h-[50vh] flex items-center justify-center overflow-hidden bg-[#0a0f1e] pt-16 md:pt-20">
    <!-- Background Image -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1423666639041-f56000c27a9a?q=80&w=2070&auto=format&fit=crop"
             alt="Customer service representative taking a call and helping a client with BPO support"
             class="w-full h-full object-cover opacity-30"
             width="2070" height="1380"
             loading="eager"
             decoding="async">
        <div class="absolute inset-0 bg-gradient-to-b from-[#0a0f1e]/80 via-[#0a0f1e]/60 to-[#0a0f1e]/80" aria-hidden="true"></div>
    </div>
    
    <!-- Blue radial glow -->
    <div class="absolute bottom-0 right-0 w-[600px] h-[600px] md:w-[800px] md:h-[800px] pointer-events-none opacity-40 z-0" style="background:radial-gradient(circle at bottom right, #4f9eff 0%, transparent 70%);"></div>
    <div class="absolute inset-0 opacity-5 pointer-events-none z-0" style="background-image:url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M0 0 L60 0 L60 60 L0 60 Z&quot; fill=&quot;none&quot; stroke=&quot;rgba(255,255,255,0.1)&quot; stroke-width=&quot;1&quot;/%3E%3C/svg%3E');"></div>

    <div class="relative z-10 text-center px-5 sm:px-8 md:px-12 lg:px-24 py-12 sm:py-16 md:py-24">
        <div class="reveal inline-flex items-center gap-3 px-3 py-1.5 sm:px-4 sm:py-2 bg-white/10 backdrop-blur-sm rounded-full border border-white/20 mb-4 sm:mb-6">
            <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full animate-pulse" style="background:#4f9eff;"></span>
            <span class="text-white/85 text-[10px] sm:text-xs md:text-sm font-medium tracking-wider font-['Inter']">GET IN TOUCH</span>
        </div>
        <h1 class="reveal d1 hero-title font-['Space_Grotesk'] font-bold text-white mb-4 sm:mb-6">
            Contact <span style="color:#4f9eff;">Us</span>
        </h1>
        <p class="reveal d2 text-white/70 text-sm sm:text-base md:text-xl max-w-2xl mx-auto font-['Inter'] px-4">
            Have a question or ready to start your outsourcing journey? We're here to help.
        </p>
    </div>
</section>

  <!-- ========== MAIN CONTACT SECTION ========== -->
  <section class="py-12 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-start">

        <!-- LEFT: Contact Form -->
        <div class="reveal-left">
          <div class="mb-6 sm:mb-8">
            <span class="text-xs sm:text-sm font-semibold tracking-wider uppercase mb-2 sm:mb-3 block font-['Inter']" style="color:#4f9eff;">Contact Us</span>
            <h2 class="section-heading-lg font-['Space_Grotesk'] font-bold text-[#111] leading-tight">
              Join Us in Creating <span style="color:#4f9eff;">Something Great</span>
            </h2>
          </div>

          <div id="alert-success" class="alert-box alert-success mb-6 hidden">
            <i class="fas fa-circle-check text-green-600 text-base sm:text-lg mt-0.5 flex-shrink-0"></i>
            <span>Thank you! Your message has been sent. We'll get back to you within 24 hours.</span>
          </div>
          <div id="alert-error" class="alert-box alert-error mb-6 hidden">
            <i class="fas fa-circle-exclamation text-red-600 text-base sm:text-lg mt-0.5 flex-shrink-0"></i>
            <span>Something went wrong. Please email us at <a href="mailto:info@onestopsolutions.com" class="underline font-semibold">info@onestopsolutions.com</a>.</span>
          </div>

          <form class="mt-6 sm:mt-8" id="contactForm" action="https://api.web3forms.com/submit" method="POST" novalidate>
            <input type="hidden" name="access_key" value="1f36ea7f-dfc5-4a71-8189-a7b6aa03d0c6">
            <input type="hidden" name="subject" value="New Contact Form Submission — OneStop Solutions">
            <input type="hidden" name="redirect" value="false">

            <!-- Name Row -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
              <div>
                <label for="first-name" class="block text-xs sm:text-sm font-medium text-gray-700 mb-1.5 sm:mb-2 font-['Inter']">
                  First Name <span class="text-red-500">*</span>
                </label>
                <input type="text" id="first-name" name="first-name"
                  placeholder="John" required
                  class="contact-input px-3 py-2.5 sm:px-5 sm:py-4 rounded-xl sm:rounded-2xl text-[#111] placeholder-gray-400 text-sm sm:text-base">
                <p class="field-error text-red-500 text-xs mt-1 hidden">First name is required.</p>
              </div>
              <div>
                <label for="last-name" class="block text-xs sm:text-sm font-medium text-gray-700 mb-1.5 sm:mb-2 font-['Inter']">
                  Last Name <span class="text-red-500">*</span>
                </label>
                <input type="text" id="last-name" name="last-name"
                  placeholder="Doe" required
                  class="contact-input px-3 py-2.5 sm:px-5 sm:py-4 rounded-xl sm:rounded-2xl text-[#111] placeholder-gray-400 text-sm sm:text-base">
                <p class="field-error text-red-500 text-xs mt-1 hidden">Last name is required.</p>
              </div>
            </div>

            <!-- Email / Phone Row -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
              <div>
                <label for="email" class="block text-xs sm:text-sm font-medium text-gray-700 mb-1.5 sm:mb-2 font-['Inter']">
                  Email <span class="text-red-500">*</span>
                </label>
                <input type="email" id="email" name="email"
                  placeholder="john@example.com" required
                  class="contact-input px-3 py-2.5 sm:px-5 sm:py-4 rounded-xl sm:rounded-2xl text-[#111] placeholder-gray-400 text-sm sm:text-base">
                <p class="field-error text-red-500 text-xs mt-1 hidden">A valid email is required.</p>
              </div>
              <div>
                <label for="phone" class="block text-xs sm:text-sm font-medium text-gray-700 mb-1.5 sm:mb-2 font-['Inter']">Phone Number</label>
                <input type="tel" id="phone" name="phone"
                  placeholder="+1 (555) 000-0000"
                  class="contact-input px-3 py-2.5 sm:px-5 sm:py-4 rounded-xl sm:rounded-2xl text-[#111] placeholder-gray-400 text-sm sm:text-base">
              </div>
            </div>

            <!-- Service -->
            <div class="mb-4">
              <label for="service" class="block text-xs sm:text-sm font-medium text-gray-700 mb-1.5 sm:mb-2 font-['Inter']">Select Service</label>
              <div class="relative">
                <select id="service" name="service"
                  class="w-full px-3 py-2.5 sm:px-5 sm:py-4 rounded-xl sm:rounded-2xl border-2 text-white font-semibold focus:outline-none transition-all appearance-none cursor-pointer font-['Inter'] text-sm sm:text-base"
                  style="background:#4f9eff; border-color:#4f9eff; color:white;">
                  <option value="" disabled style="background:#0a0f1e;">Choose a service</option>
                  <option value="Inbound Calls"              style="background:#0a0f1e;">Inbound Calls</option>
                  <option value="Outbound Calls"             style="background:#0a0f1e;">Outbound Calls</option>
                  <option value="Lead Generation"            style="background:#0a0f1e;">Lead Generation</option>
                  <option value="Customer & Quality Services" style="background:#0a0f1e;">Customer &amp; Quality Services</option>
                  <option value="Digital Marketing"          style="background:#0a0f1e;">Digital Marketing</option>
                  <option value="Web Development"            style="background:#0a0f1e;">Web Development</option>
                  <option value="Survey Research"            style="background:#0a0f1e;">Survey Research</option>
                  <option value="Winback Programs"           style="background:#0a0f1e;">Winback Programs</option>
                  <option value="Technical Support"          style="background:#0a0f1e;">Technical Support</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-3 sm:px-4 pointer-events-none">
                  <svg class="w-4 h-4 sm:w-5 sm:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </div>
              </div>
            </div>

            <!-- Message -->
            <div class="mb-5 sm:mb-6">
              <label for="message" class="block text-xs sm:text-sm font-medium text-gray-700 mb-1.5 sm:mb-2 font-['Inter']">
                Message <span class="text-red-500">*</span>
              </label>
              <textarea id="message" name="message" rows="4 sm:rows-5"
                placeholder="Tell us about your project..." required
                class="contact-input px-3 py-2.5 sm:px-5 sm:py-4 rounded-xl sm:rounded-2xl text-[#111] placeholder-gray-400 resize-none text-sm sm:text-base"></textarea>
              <p class="field-error text-red-500 text-xs mt-1 hidden">Message cannot be empty.</p>
            </div>

            <!-- Submit -->
            <button type="submit" id="submitBtn" class="submit-btn group font-['Inter']">
              <span id="btnText">Send Message</span>
              <i id="btnIcon" class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </button>

          </form>
        </div>

        <!-- RIGHT: Contact Info Card — blue gradient -->
        <div class="reveal-right">
          <div class="contact-info-card">
            <div class="absolute top-0 right-0 w-24 h-24 sm:w-32 sm:h-32 md:w-40 md:h-40 bg-white opacity-10 rounded-full -mr-6 -mt-6 sm:-mr-8 sm:-mt-8 pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 bg-black opacity-10 rounded-full -ml-6 -mb-6 sm:-ml-8 sm:-mb-8 pointer-events-none"></div>

            <div class="relative z-10">
              <h3 class="font-['Space_Grotesk'] text-lg sm:text-xl md:text-2xl font-bold text-white mb-4 sm:mb-6 md:mb-8">Contact Information</h3>

              <!-- Address -->
              <div class="mb-4 sm:mb-6">
                <div class="flex items-start gap-2 sm:gap-3 mb-1">
                  <i class="fas fa-map-marker-alt text-white text-base sm:text-lg mt-0.5 flex-shrink-0"></i>
                  <h4 class="font-['Space_Grotesk'] font-semibold text-white text-sm sm:text-base md:text-lg">Address</h4>
                </div>
                <p class="text-white/80 pl-6 sm:pl-8 font-['Inter'] text-xs sm:text-sm md:text-base leading-relaxed">
                  Suite# 111 &amp; 116, 1st Floor, Park Avenue, P.E.C.H.S, Block 6, Shahra-e-Faisal, Karachi, 75400
                </p>
              </div>

              <!-- Contact -->
              <div class="mb-4 sm:mb-6">
                <div class="flex items-start gap-2 sm:gap-3 mb-1">
                  <i class="fas fa-phone-alt text-white text-base sm:text-lg mt-0.5 flex-shrink-0"></i>
                  <h4 class="font-['Space_Grotesk'] font-semibold text-white text-sm sm:text-base md:text-lg">Contact</h4>
                </div>
                <div class="pl-6 sm:pl-8 font-['Inter'] text-xs sm:text-sm md:text-base space-y-2 sm:space-y-3">
                  <div>
                    <p class="text-white font-semibold text-xs sm:text-sm">Phone</p>
                    <a href="tel:03361369929" class="text-white/80 hover:text-white hover:underline text-xs sm:text-sm">0336 1369929</a>
                  </div>
                  <div>
                    <p class="text-white font-semibold text-xs sm:text-sm">Email</p>
                    <div class="flex flex-col space-y-0.5 sm:space-y-1">
                      <a href="mailto:info@onestopsolutions.com" class="text-white/80 hover:text-white hover:underline break-all text-xs sm:text-sm">info@onestopsolutions.com</a>
                      <a href="mailto:hr@onestopsolutions.com"   class="text-white/80 hover:text-white hover:underline break-all text-xs sm:text-sm">hr@onestopsolutions.com</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Open Time -->
              <div class="mb-4 sm:mb-6">
                <div class="flex items-start gap-2 sm:gap-3 mb-1">
                  <i class="fas fa-clock text-white text-base sm:text-lg mt-0.5 flex-shrink-0"></i>
                  <h4 class="font-['Space_Grotesk'] font-semibold text-white text-sm sm:text-base md:text-lg">Open Time</h4>
                </div>
                <p class="text-white/80 pl-6 sm:pl-8 font-['Inter'] text-xs sm:text-sm md:text-base">Monday – Friday : 10:00 – 20:00</p>
              </div>

              <!-- Social -->
              <div>
                <div class="flex items-center gap-2 sm:gap-3 mb-3 sm:mb-4">
                  <i class="fas fa-share-alt text-white text-base sm:text-lg flex-shrink-0"></i>
                  <h4 class="font-['Space_Grotesk'] font-semibold text-white text-sm sm:text-base md:text-lg">Stay Connected</h4>
                </div>
                <div class="social-row pl-6 sm:pl-8 flex gap-2 sm:gap-3">
                  <a href="https://www.linkedin.com/company/onestopsolutions/"
                     class="w-8 h-8 sm:w-9 sm:h-9 md:w-10 md:h-10 bg-white/20 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-[#2b7fe0] transition-all duration-200">
                    <i class="fab fa-linkedin-in text-xs sm:text-sm"></i>
                  </a>
                  <a href="https://www.facebook.com/OSSolutioners/"
                     class="w-8 h-8 sm:w-9 sm:h-9 md:w-10 md:h-10 bg-white/20 rounded-full flex items-center justify-center text-white hover:bg-white hover:text-[#2b7fe0] transition-all duration-200">
                    <i class="fab fa-facebook-f text-xs sm:text-sm"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ========== MAP SECTION ========== -->
  <section class="relative py-10 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
      <div class="bg-[#f5f8ff] rounded-2xl sm:rounded-3xl p-1.5 sm:p-2 overflow-hidden shadow-lg" style="border:1px solid rgba(79,158,255,0.2);">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231118.23582609927!2d66.97534769999999!3d24.861504949999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f066c8f5e6b%3A0x8d3e4d0c5e9f5a5a!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s"
          width="100%" height="220"
          style="border:0; border-radius:16px; display:block;"
          allowfullscreen="" loading="lazy"
          class="grayscale contrast-125 opacity-90 hover:opacity-100 transition-opacity sm:h-[300px] md:h-[350px] lg:h-[400px]">
        </iframe>
      </div>
    </div>
  </section>

  <!-- ========== FAQ SECTION ========== -->
  <section class="relative py-12 md:py-20 bg-[#f5f8ff] overflow-hidden">
    <!-- Blue blobs -->
    <div class="absolute top-40 left-10 sm:left-20 w-40 sm:w-48 md:w-64 h-40 sm:h-48 md:h-64 rounded-full blur-3xl pointer-events-none" style="background:rgba(79,158,255,0.07);"></div>
    <div class="absolute bottom-40 right-10 sm:right-20 w-48 sm:w-56 md:w-80 h-48 sm:h-56 md:h-80 rounded-full blur-3xl pointer-events-none" style="background:rgba(43,127,224,0.06);"></div>

    <div class="max-w-4xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20 relative z-10">
      <div class="text-center max-w-2xl mx-auto mb-8 sm:mb-12">
        <div class="reveal inline-flex items-center gap-2 sm:gap-3 px-3 py-1.5 sm:px-4 sm:py-2 rounded-full border mb-4 sm:mb-5" style="background:rgba(79,158,255,0.08); border-color:rgba(79,158,255,0.2);">
          <span class="w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full animate-pulse" style="background:#4f9eff;"></span>
          <span class="text-[#111] text-[10px] sm:text-xs md:text-sm font-medium tracking-wider font-['Inter']">FAQ</span>
        </div>
        <h2 class="reveal d1 section-heading-xl font-['Space_Grotesk'] font-bold text-[#111] mb-3 sm:mb-4">
          Frequently Asked <span style="color:#4f9eff;">Questions</span>
        </h2>
        <p class="reveal d2 text-gray-600 text-sm sm:text-base md:text-lg max-w-2xl mx-auto font-['Inter']">
          Everything you need to know about our services and how we can help your business grow.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-3 sm:gap-4 mt-8 sm:mt-10">
        <!-- Column 1 -->
        <div class="space-y-3 sm:space-y-4">
          <div class="faq-item bg-white rounded-xl sm:rounded-2xl border border-gray-200 overflow-hidden transition-all duration-300 reveal-left" style="--hover-border:#4f9eff;">
            <div class="faq-question p-4 sm:p-5 md:p-6 flex justify-between items-center gap-3" onclick="toggleFaq(this)">
              <h3 class="font-['Space_Grotesk'] font-semibold text-sm sm:text-base">What services do you offer?</h3>
              <i class="faq-icon fas fa-plus text-base sm:text-lg" style="color:#4f9eff;"></i>
            </div>
            <div class="faq-answer px-4 sm:px-5 md:px-6">
              <p class="text-gray-600 pb-4 sm:pb-5 font-['Inter'] text-xs sm:text-sm md:text-base">
                We offer a comprehensive range of outsourcing solutions including inbound/outbound calling, lead generation, digital marketing, web development, survey research, winback programs, and technical support.
              </p>
            </div>
          </div>

          <div class="faq-item bg-white rounded-xl sm:rounded-2xl border border-gray-200 overflow-hidden transition-all duration-300 reveal-left d2">
            <div class="faq-question p-4 sm:p-5 md:p-6 flex justify-between items-center gap-3" onclick="toggleFaq(this)">
              <h3 class="font-['Space_Grotesk'] font-semibold text-sm sm:text-base">How quickly do you respond?</h3>
              <i class="faq-icon fas fa-plus text-base sm:text-lg" style="color:#4f9eff;"></i>
            </div>
            <div class="faq-answer px-4 sm:px-5 md:px-6">
              <p class="text-gray-600 pb-4 sm:pb-5 font-['Inter'] text-xs sm:text-sm md:text-base">
                We pride ourselves on responding to all inquiries within 24 hours during business days. For urgent matters, please mention "URGENT" in your message subject line.
              </p>
            </div>
          </div>

          <div class="faq-item bg-white rounded-xl sm:rounded-2xl border border-gray-200 overflow-hidden transition-all duration-300 reveal-left d3">
            <div class="faq-question p-4 sm:p-5 md:p-6 flex justify-between items-center gap-3" onclick="toggleFaq(this)">
              <h3 class="font-['Space_Grotesk'] font-semibold text-sm sm:text-base">Do you work with international clients?</h3>
              <i class="faq-icon fas fa-plus text-base sm:text-lg" style="color:#4f9eff;"></i>
            </div>
            <div class="faq-answer px-4 sm:px-5 md:px-6">
              <p class="text-gray-600 pb-4 sm:pb-5 font-['Inter'] text-xs sm:text-sm md:text-base">
                Absolutely! We serve clients globally and have extensive experience working with businesses across different time zones and cultures.
              </p>
            </div>
          </div>
        </div>

        <!-- Column 2 -->
        <div class="space-y-3 sm:space-y-4">
          <div class="faq-item bg-white rounded-xl sm:rounded-2xl border border-gray-200 overflow-hidden transition-all duration-300 reveal-right">
            <div class="faq-question p-4 sm:p-5 md:p-6 flex justify-between items-center gap-3" onclick="toggleFaq(this)">
              <h3 class="font-['Space_Grotesk'] font-semibold text-sm sm:text-base">What is your pricing model?</h3>
              <i class="faq-icon fas fa-plus text-base sm:text-lg" style="color:#4f9eff;"></i>
            </div>
            <div class="faq-answer px-4 sm:px-5 md:px-6">
              <p class="text-gray-600 pb-4 sm:pb-5 font-['Inter'] text-xs sm:text-sm md:text-base">
                We offer flexible pricing models including per-hour, per-project, and dedicated team options. Contact us for a customized quote based on your specific requirements.
              </p>
            </div>
          </div>

          <div class="faq-item bg-white rounded-xl sm:rounded-2xl border border-gray-200 overflow-hidden transition-all duration-300 reveal-right d2">
            <div class="faq-question p-4 sm:p-5 md:p-6 flex justify-between items-center gap-3" onclick="toggleFaq(this)">
              <h3 class="font-['Space_Grotesk'] font-semibold text-sm sm:text-base">How do you ensure data security?</h3>
              <i class="faq-icon fas fa-plus text-base sm:text-lg" style="color:#4f9eff;"></i>
            </div>
            <div class="faq-answer px-4 sm:px-5 md:px-6">
              <p class="text-gray-600 pb-4 sm:pb-5 font-['Inter'] text-xs sm:text-sm md:text-base">
                We follow industry-standard security protocols including encrypted communications, secure servers, and strict NDAs. All team members undergo regular security training.
              </p>
            </div>
          </div>

          <div class="faq-item bg-white rounded-xl sm:rounded-2xl border border-gray-200 overflow-hidden transition-all duration-300 reveal-right d3">
            <div class="faq-question p-4 sm:p-5 md:p-6 flex justify-between items-center gap-3" onclick="toggleFaq(this)">
              <h3 class="font-['Space_Grotesk'] font-semibold text-sm sm:text-base">Can I start with a trial project?</h3>
              <i class="faq-icon fas fa-plus text-base sm:text-lg" style="color:#4f9eff;"></i>
            </div>
            <div class="faq-answer px-4 sm:px-5 md:px-6">
              <p class="text-gray-600 pb-4 sm:pb-5 font-['Inter'] text-xs sm:text-sm md:text-base">
                Yes! We offer a flexible trial period to help you evaluate our services and ensure we're the right fit before committing to a long-term engagement.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="reveal d4 mt-8 sm:mt-12 text-center">
        <div class="inline-flex flex-col sm:flex-row items-center gap-2 sm:gap-3 md:gap-4 bg-white px-4 sm:px-6 md:px-8 py-3 sm:py-4 rounded-full shadow-lg border border-gray-100">
          <span class="text-gray-600 font-['Inter'] text-xs sm:text-sm md:text-base">Still have questions?</span>
          <a href="#contactForm" class="inline-flex items-center gap-1.5 sm:gap-2 text-white px-4 sm:px-5 md:px-6 py-1.5 sm:py-2 rounded-full font-semibold text-xs sm:text-sm hover:scale-105 transition-transform whitespace-nowrap" style="background:#4f9eff;">
            Contact Support
            <i class="fas fa-arrow-right text-[10px] sm:text-xs"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CTA SECTION ========== -->
  <section class="relative py-12 md:py-20 bg-[#0a0f1e]">
    <div class="max-w-4xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20 text-center">
      <div class="reveal">
        <span class="text-[10px] sm:text-xs md:text-sm font-semibold tracking-[0.3em] uppercase mb-3 sm:mb-4 block font-['Inter']" style="color:#4f9eff;">Ready to start?</span>
        <h2 class="cta-heading font-['Space_Grotesk'] font-bold text-white mb-3 sm:mb-5">
          Let's Build Something <span style="color:#4f9eff;">Amazing</span> Together
        </h2>
        <p class="text-white/40 text-sm sm:text-base md:text-lg max-w-2xl mx-auto mb-6 sm:mb-8 font-['Inter'] px-4">
          Whether you're ready to scale or just exploring options, our team is here to guide you every step of the way.
        </p>
        <a href="#contactForm" class="group inline-flex items-center gap-2 sm:gap-3 rounded-full px-5 sm:px-7 md:px-8 py-2.5 sm:py-3 md:py-4 text-white font-semibold text-sm sm:text-base md:text-lg hover:scale-105 transition-all duration-300 font-['Inter']"
           style="background:#4f9eff; box-shadow:0 4px 15px rgba(79,158,255,0.3);"
           onmouseover="this.style.boxShadow='0 20px 30px -10px rgba(79,158,255,0.5)'"
           onmouseout="this.style.boxShadow='0 4px 15px rgba(79,158,255,0.3)'">
          Schedule a Call
          <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform text-xs sm:text-sm"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- ========== FOOTER ========== -->
  <?php @include('footer.php'); ?>

  <!-- ========== JAVASCRIPT ========== -->
  <script>
    // ── Scroll progress + navbar hide/show ──────────────────────────────
    const progressBar   = document.getElementById('scroll-progress');
    const navbarWrapper = document.getElementById('navbar-wrapper');
    let lastScrollY = 0, ticking = false;

    function handleNavbarScroll() {
      const y = window.scrollY;
      if (y <= 10)                        navbarWrapper.classList.remove('nav-hidden');
      else if (y > lastScrollY + 5)       navbarWrapper.classList.add('nav-hidden');
      else if (y < lastScrollY - 5)       navbarWrapper.classList.remove('nav-hidden');
      lastScrollY = y;
      ticking = false;
    }

    window.addEventListener('scroll', () => {
      const s = window.scrollY, m = document.documentElement.scrollHeight - window.innerHeight;
      if (m > 0) progressBar.style.width = (s / m * 100) + '%';
      if (!ticking) { requestAnimationFrame(handleNavbarScroll); ticking = true; }
    }, { passive: true });

    // ── Reveal on scroll ────────────────────────────────────────────────
    const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
    const revealObs = new IntersectionObserver((entries) => {
      entries.forEach(en => {
        if (en.isIntersecting) { en.target.classList.add('visible'); revealObs.unobserve(en.target); }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });
    revealEls.forEach(el => revealObs.observe(el));

    // ── Client-side form validation ─────────────────────────────────────
    const form      = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const btnText   = document.getElementById('btnText');
    const btnIcon   = document.getElementById('btnIcon');

    const rules = [
      { id: 'first-name', check: v => v.trim() !== '',  msg: 'First name is required.' },
      { id: 'last-name',  check: v => v.trim() !== '',  msg: 'Last name is required.'  },
      { id: 'email',      check: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v), msg: 'A valid email is required.' },
      { id: 'message',    check: v => v.trim() !== '',  msg: 'Message cannot be empty.' },
    ];

    function validateField(rule) {
      const el  = document.getElementById(rule.id);
      const err = el.parentElement.querySelector('.field-error') || el.closest('div').querySelector('.field-error');
      const ok  = rule.check(el.value);
      el.classList.toggle('invalid', !ok);
      if (err) err.classList.toggle('hidden', ok);
      return ok;
    }

    rules.forEach(rule => {
      const el = document.getElementById(rule.id);
      if (el) el.addEventListener('blur', () => validateField(rule));
    });

    form.addEventListener('submit', async function(e) {
      e.preventDefault();
      let valid = true;
      rules.forEach(rule => { if (!validateField(rule)) valid = false; });
      if (!valid) return;

      submitBtn.disabled = true;
      btnText.textContent = 'Sending…';
      btnIcon.className   = 'fas fa-spinner fa-spin';

      try {
        const res = await fetch(form.action, {
          method: 'POST',
          body: new FormData(form),
          headers: { 'Accept': 'application/json' }
        });

        if (res.ok) {
          document.getElementById('alert-success').classList.remove('hidden');
          document.getElementById('alert-success').scrollIntoView({ behavior: 'smooth', block: 'center' });
          form.reset();
        } else {
          document.getElementById('alert-error').classList.remove('hidden');
          document.getElementById('alert-error').scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
      } catch {
        document.getElementById('alert-error').classList.remove('hidden');
      }

      submitBtn.disabled  = false;
      btnText.textContent = 'Send Message';
      btnIcon.className   = 'fas fa-arrow-right group-hover:translate-x-1 transition-transform';
    });

    // ── FAQ Toggle ───────────────────────────────────────────────────────
    window.toggleFaq = function(element) {
      const faqItem = element.closest('.faq-item');
      const answer  = faqItem.querySelector('.faq-answer');
      const icon    = element.querySelector('.faq-icon');

      document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem && item.classList.contains('active')) {
          item.classList.remove('active');
          item.querySelector('.faq-answer').classList.remove('show');
          item.querySelector('.faq-icon').className = 'faq-icon fas fa-plus text-base sm:text-lg';
          item.querySelector('.faq-icon').style.color = '#4f9eff';
        }
      });

      faqItem.classList.toggle('active');
      answer.classList.toggle('show');
      icon.className = 'faq-icon fas ' + (answer.classList.contains('show') ? 'fa-times' : 'fa-plus') + ' text-base sm:text-lg';
      icon.style.color = '#4f9eff';
    };
  </script>

</body>
</html>