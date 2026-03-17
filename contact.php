<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us — OneStop Solutions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    @keyframes float {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-10px);
      }
    }

    @keyframes pulse-glow {

      0%,
      100% {
        opacity: 0.3;
        filter: blur(40px);
      }

      50% {
        opacity: 0.6;
        filter: blur(60px);
      }
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateY(-10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* ── REVEAL ANIMATIONS ── */
    .reveal {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.9s cubic-bezier(0.22, 1, 0.36, 1), transform 0.9s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .reveal-left {
      opacity: 0;
      transform: translateX(-40px);
      /* FIX: reduced from 60px — prevents horizontal scroll on mobile */
      transition: opacity 0.9s cubic-bezier(0.22, 1, 0.36, 1), transform 0.9s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .reveal-right {
      opacity: 0;
      transform: translateX(40px);
      /* FIX: reduced from 60px */
      transition: opacity 0.9s cubic-bezier(0.22, 1, 0.36, 1), transform 0.9s cubic-bezier(0.22, 1, 0.36, 1);
    }

    .reveal.visible,
    .reveal-left.visible,
    .reveal-right.visible {
      opacity: 1;
      transform: translate(0);
    }

    .d1 {
      transition-delay: 0.08s;
    }

    .d2 {
      transition-delay: 0.18s;
    }

    .d3 {
      transition-delay: 0.28s;
    }

    .d4 {
      transition-delay: 0.38s;
    }

    .d5 {
      transition-delay: 0.48s;
    }

    /* ── BASE ── */
    body {
      font-family: 'Inter', sans-serif;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Space Grotesk', sans-serif;
    }

    /* ── NAVBAR HIDE-ON-SCROLL ── */
    #navbar-wrapper {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 100;
      transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
      will-change: transform;
    }

    #navbar-wrapper.nav-hidden {
      transform: translateY(-100%);
    }

    /* ── CONTACT FORM INPUTS ── */
    .contact-input {
      background-color: #f9fafb;
      border: 1px solid #e5e7eb;
      transition: all 0.2s ease;
      font-family: 'Inter', sans-serif;
      width: 100%;
    }

    .contact-input:focus {
      border-color: #ceff66;
      box-shadow: 0 0 0 4px rgba(206, 255, 102, 0.1);
      outline: none;
      background-color: white;
    }

    /* ── SOCIAL ICONS ── */
    .social-icon {
      transition: all 0.2s ease;
    }

    .social-icon:hover {
      background-color: #111 !important;
      color: #ceff66 !important;
      transform: translateY(-3px);
    }

    /* ── SELECT DROPDOWN ── */
    select option {
      background-color: #0a0a0a;
      color: white;
    }

    /* ── FAQ STYLES ── */
    .faq-item {
      transition: all 0.3s ease;
    }

    .faq-item.active {
      border-color: #ceff66;
      background: linear-gradient(to right, rgba(206, 255, 102, 0.02), transparent);
    }

    .faq-question {
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .faq-question:hover {
      background-color: rgba(206, 255, 102, 0.03);
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .faq-answer.show {
      max-height: 300px;
    }

    .faq-icon {
      transition: transform 0.3s ease;
      flex-shrink: 0;
    }

    /* FIX: prevent icon shrinking */

    /* ── HERO RESPONSIVE TEXT ── */
    .hero-title {
      font-size: clamp(3rem, 10vw, 9rem);
      /* FIX: fluid type scale replaces fixed breakpoints */
      line-height: 1.05;
      letter-spacing: -0.03em;
    }

    /* ── INFO CARD RESPONSIVE ── */
    .info-card-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1.5rem;
    }

    /* ── SOCIAL ROW WRAP ── */
    .social-row {
      display: flex;
      flex-wrap: wrap;
      /* FIX: wrap icons on small screens */
      gap: 0.6rem;
    }

    /* ── SUBMIT BUTTON: full width on mobile ── */
    .submit-btn {
      display: inline-flex;
      align-items: center;
      gap: 0.75rem;
      background: #ceff66;
      color: black;
      font-weight: 600;
      font-size: 1rem;
      padding: 1rem 2rem;
      border-radius: 9999px;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      width: 100%;
      /* FIX: full width on mobile */
      justify-content: center;
    }

    @media (min-width: 640px) {
      .submit-btn {
        width: auto;
        /* restore auto on tablet+ */
        justify-content: flex-start;
      }
    }

    .submit-btn:hover {
      transform: scale(1.03);
      box-shadow: 0 20px 30px -10px rgba(206, 255, 102, 0.5);
    }

    /* ── CONTACT INFO CARD PADDING ── */
    .contact-info-card {
      background: #ceff66;
      border-radius: 2.5rem;
      /* FIX: reduced from 40px to rem so it scales */
      padding: 2rem 1.75rem;
      /* FIX: tighter on mobile */
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      position: relative;
      overflow: hidden;
    }

    @media (min-width: 640px) {
      .contact-info-card {
        padding: 2.5rem 3rem;
      }
    }

    @media (min-width: 768px) {
      .contact-info-card {
        padding: 3rem 3.5rem;
      }
    }

    /* ── FAQ QUESTION: prevent text overflow ── */
    .faq-question h3 {
      font-size: clamp(0.9rem, 2.5vw, 1.1rem);
      /* FIX: fluid, prevent overflow */
      line-height: 1.35;
    }

    /* ── SECTION HEADING FLUID ── */
    .section-heading-lg {
      font-size: clamp(2rem, 5vw, 3.25rem);
      line-height: 1.1;
    }

    .section-heading-xl {
      font-size: clamp(2rem, 5vw, 3rem);
      line-height: 1.1;
    }

    /* ── CTA SECTION HEADING ── */
    .cta-heading {
      font-size: clamp(1.75rem, 5vw, 3rem);
      line-height: 1.15;
    }

    /* ── PREVENT HORIZONTAL SCROLL globally ── */
    html,
    body {
      overflow-x: hidden;
    }
  </style>
</head>

<body class="antialiased bg-white text-[#111]">

  <!-- Scroll Progress -->
  <div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] bg-[#ceff66] z-[9999] duration-100 shadow-[0_0_20px_rgba(206,255,102,0.8)]"></div>

  <!-- ========== NAVBAR ========== -->
  <div id="navbar-wrapper">
    <?php @include('navbar.php') ?>
  </div>

  <!-- ========== HERO ========== -->
  <!-- FIX: pt-[navbar height] so content isn't hidden behind fixed navbar on mobile -->
  <section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden bg-black pt-16 md:pt-20">

    <div class="absolute bottom-0 right-0 w-[600px] h-[600px] md:w-[800px] md:h-[800px] bg-[radial-gradient(circle_at_bottom_right,_#ceff66_0%,_transparent_70%)] opacity-40 pointer-events-none"></div>
    <div class="absolute inset-0 opacity-5 pointer-events-none" style="background-image:url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M0 0 L60 0 L60 60 L0 60 Z&quot; fill=&quot;none&quot; stroke=&quot;rgba(255,255,255,0.1)&quot; stroke-width=&quot;1&quot;/%3E%3C/svg%3E');"></div>

    <div class="relative z-10 text-center px-5 sm:px-8 md:px-12 lg:px-24 py-16 md:py-24">
      <div class="reveal inline-flex items-center gap-3 px-4 py-2 bg-white/15 backdrop-blur-sm rounded-full border border-white/30 mb-6">
        <span class="w-2 h-2 bg-[#ceff66] rounded-full animate-pulse"></span>
        <span class="text-white/85 text-xs sm:text-sm font-medium tracking-wider font-['Inter']">GET IN TOUCH</span>
      </div>
      <!-- FIX: use fluid hero-title class instead of multiple fixed breakpoints -->
      <h1 class="reveal d1 hero-title font-['Space_Grotesk'] font-bold text-white mb-6">
        Contact <span class="text-[#ceff66]">Us</span>
      </h1>
      <p class="reveal d2 text-white/70 text-base sm:text-lg md:text-xl max-w-2xl mx-auto font-['Inter']">
        Have a question or ready to start your outsourcing journey? We're here to help.
      </p>
    </div>

  </section>

  <!-- ========== MAIN CONTACT SECTION ========== -->
  <section class="py-16 md:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">

        <!-- LEFT: Contact Form -->
        <div class="reveal-left">
          <div class="mb-8">
            <span class="text-[#ceff66] text-sm font-semibold tracking-wider uppercase mb-3 block font-['Inter']">Contact Us</span>
            <!-- FIX: fluid heading -->
            <h2 class="section-heading-lg font-['Space_Grotesk'] font-bold text-[#111] leading-tight">
              Join Us in Creating <span class="text-[#ceff66]">Something Great</span>
            </h2>
          </div>

          <!-- FIX: form uses div not form tag for React compat, but kept as form for PHP -->
          <form class="mt-8" action="#" method="POST">
            <!-- FIX: stack to 1 col on mobile, 2 on sm+ -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
              <div>
                <label for="first-name" class="block text-sm font-medium text-gray-700 mb-2 font-['Inter']">First Name</label>
                <input type="text" id="first-name" name="first-name" placeholder="John"
                  class="contact-input px-4 py-3 sm:px-5 sm:py-4 rounded-2xl text-[#111] placeholder-gray-400">
              </div>
              <div>
                <label for="last-name" class="block text-sm font-medium text-gray-700 mb-2 font-['Inter']">Last Name</label>
                <input type="text" id="last-name" name="last-name" placeholder="Doe"
                  class="contact-input px-4 py-3 sm:px-5 sm:py-4 rounded-2xl text-[#111] placeholder-gray-400">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2 font-['Inter']">Email</label>
                <input type="email" id="email" name="email" placeholder="john@example.com"
                  class="contact-input px-4 py-3 sm:px-5 sm:py-4 rounded-2xl text-[#111] placeholder-gray-400">
              </div>
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2 font-['Inter']">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="+1 (555) 000-0000"
                  class="contact-input px-4 py-3 sm:px-5 sm:py-4 rounded-2xl text-[#111] placeholder-gray-400">
              </div>
            </div>

            <div class="mb-4">
              <label for="service" class="block text-sm font-medium text-gray-700 mb-2 font-['Inter']">Select Service</label>
              <div class="relative">
                <select id="service" name="service"
                  class="w-full px-4 py-3 sm:px-5 sm:py-4 rounded-2xl bg-[#ceff66] border-2 border-[#ceff66] text-[#111] font-semibold focus:outline-none focus:ring-4 focus:ring-[#ceff66]/30 transition-all appearance-none cursor-pointer font-['Inter']">
                  <option value="" disabled selected>Choose a service</option>
                  <option value="inbound-calls">Inbound Calls</option>
                  <option value="outbound-calls">Outbound Calls</option>
                  <option value="lead-generation">Lead Generation</option>
                  <option value="customer-quality">Customer &amp; Quality Services</option>
                  <option value="digital-marketing">Digital Marketing</option>
                  <option value="web-development">Web Development</option>
                  <option value="survey-research">Survey Research</option>
                  <option value="winback-programs">Winback Programs</option>
                  <option value="technical-support">Technical Support</option>
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                  <svg class="w-5 h-5 text-[#111]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </div>
              </div>
            </div>

            <div class="mb-6">
              <label for="message" class="block text-sm font-medium text-gray-700 mb-2 font-['Inter']">Message</label>
              <textarea id="message" name="message" rows="5" placeholder="Tell us about your project..."
                class="contact-input px-4 py-3 sm:px-5 sm:py-4 rounded-2xl text-[#111] placeholder-gray-400 resize-none"></textarea>
            </div>

            <button type="submit" class="submit-btn group font-['Inter']">
              Send Message
              <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
            </button>
          </form>
        </div>

        <!-- RIGHT: Contact Info Card -->
        <div class="reveal-right">
          <div class="contact-info-card">
            <!-- decorative blobs — hidden on very small screens to reduce visual noise -->
            <div class="absolute top-0 right-0 w-32 h-32 sm:w-40 sm:h-40 bg-white opacity-10 rounded-full -mr-8 -mt-8 pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 sm:w-32 sm:h-32 bg-black opacity-5 rounded-full -ml-8 -mb-8 pointer-events-none"></div>

            <div class="relative z-10">
              <h3 class="font-['Space_Grotesk'] text-xl sm:text-2xl font-bold text-[#111] mb-6 sm:mb-8">Contact Information</h3>

              <!-- Address -->
              <div class="mb-6">
                <div class="flex items-start gap-3 mb-1">
                  <i class="fas fa-map-marker-alt text-[#111] text-lg mt-1 flex-shrink-0"></i>
                  <h4 class="font-['Space_Grotesk'] font-semibold text-[#111] text-base sm:text-lg">Address</h4>
                </div>
                <p class="text-[#111] opacity-80 pl-8 font-['Inter'] text-sm sm:text-base leading-relaxed">
                  Suite#116, 1st Floor, Park Avenue, Shahra-e-Faisal,<br>
                  P.E.C.H.S Block 6, Karachi, 75400
                </p>
              </div>

              <!-- Contact -->
              <div class="mb-6">
                <div class="flex items-start gap-3 mb-1">
                  <i class="fas fa-phone-alt text-[#111] text-lg mt-1 flex-shrink-0"></i>
                  <h4 class="font-['Space_Grotesk'] font-semibold text-[#111] text-base sm:text-lg">Contact</h4>
                </div>
                <div class="pl-8 font-['Inter'] text-sm sm:text-base space-y-3">

                  <!-- Phone -->
                  <div>
                    <p class="text-[#111] font-semibold">Phone</p>
                    <a href="tel:03361369929" class="text-[#111] opacity-80 hover:underline">
                      0336 1369929
                    </a>
                  </div>

                  <!-- Email -->
                  <div>
                    <p class="text-[#111] font-semibold">Email</p>
                    <div class="flex flex-col space-y-1">
                      <a href="mailto:info@onestopsolutions.com" class="text-[#111] opacity-80 hover:underline break-all">
                        info@onestopsolutions.com
                      </a>
                      <a href="mailto:hr@onestopsolutions.com" class="text-[#111] opacity-80 hover:underline break-all">
                        hr@onestopsolutions.com
                      </a>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Open Time -->
              <div class="mb-6">
                <div class="flex items-start gap-3 mb-1">
                  <i class="fas fa-clock text-[#111] text-lg mt-1 flex-shrink-0"></i>
                  <h4 class="font-['Space_Grotesk'] font-semibold text-[#111] text-base sm:text-lg">Open Time</h4>
                </div>
                <p class="text-[#111] opacity-80 pl-8 font-['Inter'] text-sm sm:text-base">Monday – Friday : 10:00 – 20:00</p>
              </div>

              <!-- Social -->
              <div>
                <div class="flex items-center gap-3 mb-4">
                  <i class="fas fa-share-alt text-[#111] text-lg flex-shrink-0"></i>
                  <h4 class="font-['Space_Grotesk'] font-semibold text-[#111] text-base sm:text-lg">Stay Connected</h4>
                </div>
                <!-- FIX: flex-wrap so icons don't overflow on narrow screens -->
                <div class="social-row pl-8 flex gap-3">
  
  <a href="https://www.linkedin.com/company/onestopsolutions/" class="w-9 h-9 sm:w-10 sm:h-10 bg-black/10 rounded-full flex items-center justify-center text-[#111] hover:bg-black hover:text-white transition-all duration-200">
    <i class="fab fa-linkedin-in text-sm"></i>
  </a>

  <a href="https://www.facebook.com/OSSolutioners/" class="w-9 h-9 sm:w-10 sm:h-10 bg-black/10 rounded-full flex items-center justify-center text-[#111] hover:bg-black hover:text-white transition-all duration-200">
    <i class="fab fa-facebook-f text-sm"></i>
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
  <section class="relative py-12 md:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
      <div class="bg-[#f5f5f5] rounded-[24px] sm:rounded-[32px] p-2 border border-[#ceff66]/30 overflow-hidden shadow-lg">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231118.23582609927!2d66.97534769999999!3d24.861504949999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f066c8f5e6b%3A0x8d3e4d0c5e9f5a5a!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s"
          width="100%"
          height="280"
          style="border:0; border-radius: 20px; display:block;"
          allowfullscreen="" loading="lazy"
          class="grayscale contrast-125 opacity-90 hover:opacity-100 transition-opacity sm:h-[350px] md:h-[400px]">
        </iframe>
      </div>
    </div>
  </section>

  <!-- ========== FAQ SECTION ========== -->
  <section class="relative py-16 md:py-20 bg-[#fafafa] overflow-hidden">

    <div class="absolute top-40 left-10 sm:left-20 w-48 sm:w-64 h-48 sm:h-64 bg-[#ceff66]/5 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-40 right-10 sm:right-20 w-56 sm:w-80 h-56 sm:h-80 bg-purple-600/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-4xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20 relative z-10">

      <!-- Header -->
      <div class="text-center max-w-2xl mx-auto mb-12">
        <div class="reveal inline-flex items-center gap-3 px-4 py-2 bg-[#ceff66]/10 rounded-full border border-[#ceff66]/20 mb-5">
          <span class="w-2 h-2 bg-[#ceff66] rounded-full animate-pulse"></span>
          <span class="text-[#111] text-sm font-medium tracking-wider font-['Inter']">FAQ</span>
        </div>
        <h2 class="reveal d1 section-heading-xl font-['Space_Grotesk'] font-bold text-[#111] mb-4">
          Frequently Asked <span class="text-[#ceff66]">Questions</span>
        </h2>
        <p class="reveal d2 text-gray-600 text-base sm:text-lg max-w-2xl mx-auto font-['Inter']">
          Everything you need to know about our services and how we can help your business grow.
        </p>
      </div>

      <!-- FIX: single column on mobile, 2 cols on md+ -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-10">

        <!-- Column 1 -->
        <div class="space-y-4">
          <div class="faq-item bg-white rounded-2xl border border-gray-200 overflow-hidden hover:border-[#ceff66]/50 transition-all duration-300 reveal-left">
            <div class="faq-question p-5 sm:p-6 flex justify-between items-center gap-3" onclick="toggleFaq(this)">
              <h3 class="font-['Space_Grotesk'] font-semibold">What services do you offer?</h3>
              <i class="faq-icon fas fa-plus text-[#ceff66] text-lg"></i>
            </div>
            <div class="faq-answer px-5 sm:px-6">
              <p class="text-gray-600 pb-5 font-['Inter'] text-sm sm:text-base">
                We offer a comprehensive range of outsourcing solutions including inbound/outbound calling, lead generation, digital marketing, web development, survey research, winback programs, and technical support.
              </p>
            </div>
          </div>

          <div class="faq-item bg-white rounded-2xl border border-gray-200 overflow-hidden hover:border-[#ceff66]/50 transition-all duration-300 reveal-left d2">
            <div class="faq-question p-5 sm:p-6 flex justify-between items-center gap-3" onclick="toggleFaq(this)">
              <h3 class="font-['Space_Grotesk'] font-semibold">How quickly do you respond?</h3>
              <i class="faq-icon fas fa-plus text-[#ceff66] text-lg"></i>
            </div>
            <div class="faq-answer px-5 sm:px-6">
              <p class="text-gray-600 pb-5 font-['Inter'] text-sm sm:text-base">
                We pride ourselves on responding to all inquiries within 24 hours during business days. For urgent matters, please mention "URGENT" in your message subject line.
              </p>
            </div>
          </div>

          <div class="faq-item bg-white rounded-2xl border border-gray-200 overflow-hidden hover:border-[#ceff66]/50 transition-all duration-300 reveal-left d3">
            <div class="faq-question p-5 sm:p-6 flex justify-between items-center gap-3" onclick="toggleFaq(this)">
              <h3 class="font-['Space_Grotesk'] font-semibold">Do you work with international clients?</h3>
              <i class="faq-icon fas fa-plus text-[#ceff66] text-lg"></i>
            </div>
            <div class="faq-answer px-5 sm:px-6">
              <p class="text-gray-600 pb-5 font-['Inter'] text-sm sm:text-base">
                Absolutely! We serve clients globally and have extensive experience working with businesses across different time zones and cultures.
              </p>
            </div>
          </div>
        </div>

        <!-- Column 2 -->
        <div class="space-y-4">
          <div class="faq-item bg-white rounded-2xl border border-gray-200 overflow-hidden hover:border-[#ceff66]/50 transition-all duration-300 reveal-right">
            <div class="faq-question p-5 sm:p-6 flex justify-between items-center gap-3" onclick="toggleFaq(this)">
              <h3 class="font-['Space_Grotesk'] font-semibold">What is your pricing model?</h3>
              <i class="faq-icon fas fa-plus text-[#ceff66] text-lg"></i>
            </div>
            <div class="faq-answer px-5 sm:px-6">
              <p class="text-gray-600 pb-5 font-['Inter'] text-sm sm:text-base">
                We offer flexible pricing models including per-hour, per-project, and dedicated team options. Contact us for a customized quote based on your specific requirements.
              </p>
            </div>
          </div>

          <div class="faq-item bg-white rounded-2xl border border-gray-200 overflow-hidden hover:border-[#ceff66]/50 transition-all duration-300 reveal-right d2">
            <div class="faq-question p-5 sm:p-6 flex justify-between items-center gap-3" onclick="toggleFaq(this)">
              <h3 class="font-['Space_Grotesk'] font-semibold">How do you ensure data security?</h3>
              <i class="faq-icon fas fa-plus text-[#ceff66] text-lg"></i>
            </div>
            <div class="faq-answer px-5 sm:px-6">
              <p class="text-gray-600 pb-5 font-['Inter'] text-sm sm:text-base">
                We follow industry-standard security protocols including encrypted communications, secure servers, and strict NDAs. All team members undergo regular security training.
              </p>
            </div>
          </div>

          <div class="faq-item bg-white rounded-2xl border border-gray-200 overflow-hidden hover:border-[#ceff66]/50 transition-all duration-300 reveal-right d3">
            <div class="faq-question p-5 sm:p-6 flex justify-between items-center gap-3" onclick="toggleFaq(this)">
              <h3 class="font-['Space_Grotesk'] font-semibold">Can I start with a trial project?</h3>
              <i class="faq-icon fas fa-plus text-[#ceff66] text-lg"></i>
            </div>
            <div class="faq-answer px-5 sm:px-6">
              <p class="text-gray-600 pb-5 font-['Inter'] text-sm sm:text-base">
                Yes! We offer a flexible trial period to help you evaluate our services and ensure we're the right fit before committing to a long-term engagement.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Still have questions -->
      <div class="reveal d4 mt-12 text-center">
        <!-- FIX: flex-col on mobile, flex-row on sm+ -->
        <div class="inline-flex flex-col sm:flex-row items-center gap-3 sm:gap-4 bg-white px-6 sm:px-8 py-4 rounded-full shadow-lg border border-gray-100">
          <span class="text-gray-600 font-['Inter'] text-sm sm:text-base">Still have questions?</span>
          <a href="#" class="inline-flex items-center gap-2 bg-[#ceff66] text-black px-5 sm:px-6 py-2 rounded-full font-semibold text-sm hover:scale-105 transition-transform whitespace-nowrap">
            Contact Support
            <i class="fas fa-arrow-right text-xs"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CTA SECTION ========== -->
  <section class="relative py-16 md:py-20 bg-[#111]">
    <div class="max-w-4xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20 text-center">
      <div class="reveal">
        <span class="text-[#ceff66] text-xs sm:text-sm font-semibold tracking-[0.3em] uppercase mb-4 block font-['Inter']">Ready to start?</span>
        <h2 class="cta-heading font-['Space_Grotesk'] font-bold text-white mb-5">
          Let's Build Something <span class="text-[#ceff66]">Amazing</span> Together
        </h2>
        <p class="text-white/40 text-base sm:text-lg max-w-2xl mx-auto mb-8 font-['Inter']">
          Whether you're ready to scale or just exploring options, our team is here to guide you every step of the way.
        </p>
        <a href="#" class="group inline-flex items-center gap-3 rounded-full px-7 sm:px-8 py-3 sm:py-4 bg-[#ceff66] text-black font-semibold text-base sm:text-lg hover:scale-105 transition-all duration-300 hover:shadow-[0_20px_30px_-10px_rgba(206,255,102,0.5)] font-['Inter']">
          Schedule a Call
          <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- ========== FOOTER ========== -->
  <?php @include('footer.php'); ?>

  <!-- ========== JAVASCRIPT ========== -->
  <script>
    // ── Scroll progress + navbar hide/show ──────────────────────────────
    const progressBar = document.getElementById('scroll-progress');
    const navbarWrapper = document.getElementById('navbar-wrapper');
    let lastScrollY = 0;
    let ticking = false;

    function handleNavbarScroll() {
      const currentScrollY = window.scrollY;
      if (currentScrollY <= 10) {
        navbarWrapper.classList.remove('nav-hidden');
      } else if (currentScrollY > lastScrollY + 5) {
        navbarWrapper.classList.add('nav-hidden');
      } else if (currentScrollY < lastScrollY - 5) {
        navbarWrapper.classList.remove('nav-hidden');
      }
      lastScrollY = currentScrollY;
      ticking = false;
    }

    window.addEventListener('scroll', () => {
      const s = window.scrollY;
      const m = document.documentElement.scrollHeight - window.innerHeight;
      if (m > 0) progressBar.style.width = (s / m * 100) + '%';

      if (!ticking) {
        requestAnimationFrame(handleNavbarScroll);
        ticking = true;
      }
    }, {
      passive: true
    });

    // ── Reveal on scroll ────────────────────────────────────────────────
    const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
    const revealObs = new IntersectionObserver((entries) => {
      entries.forEach(en => {
        if (en.isIntersecting) {
          en.target.classList.add('visible');
          revealObs.unobserve(en.target);
        }
      });
    }, {
      threshold: 0.08,
      rootMargin: '0px 0px -30px 0px'
    });
    revealEls.forEach(el => revealObs.observe(el));

    // ── FAQ Toggle ───────────────────────────────────────────────────────
    window.toggleFaq = function(element) {
      const faqItem = element.closest('.faq-item');
      const answer = faqItem.querySelector('.faq-answer');
      const icon = element.querySelector('.faq-icon');

      // Close others
      document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem && item.classList.contains('active')) {
          item.classList.remove('active');
          item.querySelector('.faq-answer').classList.remove('show');
          item.querySelector('.faq-icon').className = 'faq-icon fas fa-plus text-[#ceff66] text-lg';
        }
      });

      faqItem.classList.toggle('active');
      answer.classList.toggle('show');
      icon.className = answer.classList.contains('show') ?
        'faq-icon fas fa-times text-[#ceff66] text-lg' :
        'faq-icon fas fa-plus text-[#ceff66] text-lg';
    };
  </script>

</body>

</html>