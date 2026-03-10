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
    /* ── Simple animations (kept float, pulse, rotate for non-hero elements) ── */
    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
    }
    @keyframes pulse-glow {
      0%, 100% { opacity: 0.3; filter: blur(40px); }
      50% { opacity: 0.6; filter: blur(60px); }
    }
    @keyframes rotate-slow {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
    @keyframes rotate-reverse {
      from { transform: rotate(0deg); }
      to   { transform: rotate(-360deg); }
    }

    /* Reveal animations */
    .reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal-left  { opacity: 0; transform: translateX(-60px); transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal-right { opacity: 0; transform: translateX(60px);  transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal.visible, .reveal-left.visible, .reveal-right.visible { opacity: 1; transform: translate(0); }

    .d1 { transition-delay: 0.08s; }
    .d2 { transition-delay: 0.18s; }
    .d3 { transition-delay: 0.28s; }
    .d4 { transition-delay: 0.38s; }

    .gradient-text {
      background: linear-gradient(135deg, #fff 0%, #ceff66 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    .glass-card {
      background: rgba(255,255,255,0.03);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(206,255,102,0.1);
    }
    .form-input {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(206,255,102,0.2);
      transition: all 0.3s ease;
    }
    .form-input:focus {
      border-color: #ceff66;
      box-shadow: 0 0 20px rgba(206,255,102,0.2);
      outline: none;
      background: rgba(255,255,255,0.08);
    }
    .form-input:hover { border-color: rgba(206,255,102,0.5); }
    .info-card { transition: all 0.4s cubic-bezier(0.2,0.9,0.3,1); }
    .info-card:hover { transform: translateY(-5px); border-color: #ceff66; }
    .float  { animation: float 6s ease-in-out infinite; }
    .pulse-glow { animation: pulse-glow 4s ease-in-out infinite; }
    .rotate-slow { animation: rotate-slow 20s linear infinite; }
    .rotate-reverse { animation: rotate-reverse 25s linear infinite; }
    .animation-delay-1000 { animation-delay: 1s; }
    .animation-delay-2000 { animation-delay: 2s; }
    select option { background-color: #0a0a0a; color: white; }

    /* Custom styles for the new contact section */
    .contact-input {
      background-color: #f9fafb;
      border: 1px solid #e5e7eb;
      transition: all 0.2s ease;
      font-family: 'Inter', sans-serif;
    }
    .contact-input:focus {
      border-color: #ceff66;
      box-shadow: 0 0 0 4px rgba(206, 255, 102, 0.1);
      outline: none;
      background-color: white;
    }
    .social-icon {
      transition: all 0.2s ease;
    }
    .social-icon:hover {
      background-color: #111 !important;
      color: #ceff66 !important;
      transform: translateY(-3px);
    }

    /* Font assignments */
    body {
      font-family: 'Inter', sans-serif;
    }
    
    h1, h2, h3, h4, h5, h6, 
    .font-heading,
    .hero-title,
    .section-title,
    .card-title {
      font-family: 'Space Grotesk', sans-serif;
    }
  </style>
</head>
<body class="antialiased bg-white text-[#111] overflow-x-hidden">

<!-- Scroll Progress -->
<div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] bg-[#ceff66] z-[9999] duration-100 shadow-[0_0_20px_rgba(206,255,102,0.8)]"></div>

<!-- ========== NAVBAR ========== -->
<?php @include('navbar.php') ?>

<!-- ========== HERO — pitch‑dark background with round gradient ========== -->
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden bg-black">

  <!-- round (radial) accent gradient at bottom right -->
  <div class="absolute bottom-0 right-0 w-[800px] h-[800px] bg-[radial-gradient(circle_at_bottom_right,_#ceff66_0%,_transparent_70%)] opacity-40 pointer-events-none"></div>

  <!-- Subtle static grid overlay -->
  <div class="absolute inset-0 opacity-5 pointer-events-none" style="background-image:url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M0 0 L60 0 L60 60 L0 60 Z&quot; fill=&quot;none&quot; stroke=&quot;rgba(255,255,255,0.1)&quot; stroke-width=&quot;1&quot;/%3E%3C/svg%3E');"></div>

  <!-- Main content -->
  <div class="relative z-10 text-center px-5 sm:px-8 md:px-12 lg:px-24 py-20 md:py-28">
    <div class="reveal inline-flex items-center gap-3 px-4 py-2 bg-white/15 backdrop-blur-sm rounded-full border border-white/30 mb-6">
      <span class="w-2 h-2 bg-[#ceff66] rounded-full animate-pulse"></span>
      <span class="text-white/85 text-sm font-medium tracking-wider font-['Inter']">GET IN TOUCH</span>
    </div>

    <h1 class="reveal d1 font-['Space_Grotesk'] font-bold text-6xl md:text-7xl lg:text-8xl xl:text-9xl text-white leading-[1.1] tracking-[-0.03em] mb-6">
      Contact <span class="text-[#ceff66]">Us</span>
    </h1>

    <p class="reveal d2 text-white/70 text-xl max-w-2xl mx-auto font-['Inter']">
      Have a question or ready to start your outsourcing journey? We're here to help.
    </p>
  </div>

</section>

<!-- ========== MAIN CONTACT SECTION ========== -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    
    <!-- Two column layout -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
      
      <!-- LEFT SIDE: Contact Form -->
      <div class="reveal-left">
        <div class="mb-8">
          <span class="text-[#ceff66] text-sm font-semibold tracking-wider uppercase mb-3 block font-['Inter']">Contact Us</span>
          <h2 class="font-['Space_Grotesk'] text-4xl md:text-5xl font-bold text-[#111] leading-tight">
            Join Us in Creating <span class="text-[#ceff66]">Something Great</span>
          </h2>
        </div>
        
        <form class="mt-10">
          <!-- Two column grid for first name / last name -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
            <div>
              <label for="first-name" class="block text-sm font-medium text-gray-700 mb-2 font-['Inter']">First Name</label>
              <input type="text" id="first-name" name="first-name" 
                     class="contact-input w-full px-5 py-4 rounded-2xl bg-gray-50 border border-gray-200 text-[#111] placeholder-gray-400 focus:border-[#ceff66] focus:ring-0 transition-all font-['Inter']">
            </div>
            <div>
              <label for="last-name" class="block text-sm font-medium text-gray-700 mb-2 font-['Inter']">Last Name</label>
              <input type="text" id="last-name" name="last-name" 
                     class="contact-input w-full px-5 py-4 rounded-2xl bg-gray-50 border border-gray-200 text-[#111] placeholder-gray-400 focus:border-[#ceff66] focus:ring-0 transition-all font-['Inter']">
            </div>
          </div>
          
          <!-- Two column grid for email / phone -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-2 font-['Inter']">Email</label>
              <input type="email" id="email" name="email" 
                     class="contact-input w-full px-5 py-4 rounded-2xl bg-gray-50 border border-gray-200 text-[#111] placeholder-gray-400 focus:border-[#ceff66] focus:ring-0 transition-all font-['Inter']">
            </div>
            <div>
              <label for="phone" class="block text-sm font-medium text-gray-700 mb-2 font-['Inter']">Phone Number</label>
              <input type="tel" id="phone" name="phone" 
                     class="contact-input w-full px-5 py-4 rounded-2xl bg-gray-50 border border-gray-200 text-[#111] placeholder-gray-400 focus:border-[#ceff66] focus:ring-0 transition-all font-['Inter']">
            </div>
          </div>
          
          <!-- Service Selection Dropdown - 9 Services with yellowish color for entire dropdown -->
          <div class="mb-5">
            <label for="service" class="block text-sm font-medium text-gray-700 mb-2 font-['Inter']">Select Service</label>
            <div class="relative">
              <select id="service" name="service" 
                      class="w-full px-5 py-4 rounded-2xl bg-[#ceff66] border-2 border-[#ceff66] text-[#111] font-semibold focus:outline-none focus:ring-4 focus:ring-[#ceff66]/30 transition-all appearance-none cursor-pointer font-['Inter']">
                <option value="" disabled selected style="background-color: #ceff66; color: #111; opacity: 0.7;">Choose a service</option>
                <option value="inbound-calls" style="background-color: #ceff66; color: #111;"> Inbound Calls</option>
                <option value="outbound-calls" style="background-color: #ceff66; color: #111;"> Outbound Calls</option>
                <option value="lead-generation" style="background-color: #ceff66; color: #111;"> Lead Generation</option>
                <option value="customer-quality" style="background-color: #ceff66; color: #111;"> Customer & Quality Services</option>
                <option value="digital-marketing" style="background-color: #ceff66; color: #111;"> Digital Marketing</option>
                <option value="web-development" style="background-color: #ceff66; color: #111;"> Web Development</option>
                <option value="survey-research" style="background-color: #ceff66; color: #111;"> Survey Research</option>
                <option value="winback-programs" style="background-color: #ceff66; color: #111;"> Winback Programs</option>
                <option value="technical-support" style="background-color: #ceff66; color: #111;"> Technical Support</option>
              </select>
              <!-- Custom dropdown arrow -->
              <div class="absolute inset-y-0 right-0 flex items-center px-4 pointer-events-none">
                <svg class="w-5 h-5 text-[#111]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </div>
            </div>
          </div>
          
          <!-- Message - textarea -->
          <div class="mb-8">
            <label for="message" class="block text-sm font-medium text-gray-700 mb-2 font-['Inter']">Message</label>
            <textarea id="message" name="message" rows="5" 
                      class="contact-input w-full px-5 py-4 rounded-2xl bg-gray-50 border border-gray-200 text-[#111] placeholder-gray-400 focus:border-[#ceff66] focus:ring-0 transition-all resize-none font-['Inter']"></textarea>
          </div>
          
          <!-- Submit button -->
          <button type="submit" 
                  class="group inline-flex items-center gap-3 bg-[#ceff66] text-black font-semibold text-lg px-8 py-4 rounded-full hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-[0_20px_30px_-10px_rgba(206,255,102,0.5)] font-['Inter']">
            Send Message
            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
          </button>
        </form>
      </div>
      
      <!-- RIGHT SIDE: Contact Info Card (bright green) -->
      <div class="reveal-right">
        <div class="bg-[#ceff66] rounded-[40px] p-10 md:p-12 shadow-2xl relative overflow-hidden">
          <!-- Decorative subtle pattern -->
          <div class="absolute top-0 right-0 w-40 h-40 bg-white opacity-10 rounded-full -mr-10 -mt-10"></div>
          <div class="absolute bottom-0 left-0 w-32 h-32 bg-black opacity-5 rounded-full -ml-10 -mb-10"></div>
          
          <div class="relative z-10">
            <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-[#111] mb-8">Contact Information</h3>
            
            <!-- Address -->
            <div class="mb-8">
              <div class="flex items-start gap-3 mb-2">
                <i class="fas fa-map-marker-alt text-[#111] text-xl mt-1"></i>
                <h4 class="font-['Space_Grotesk'] font-semibold text-[#111] text-lg">Address</h4>
              </div>
              <p class="text-[#111] opacity-80 pl-8 font-['Inter']">Suite#116, 1st Floor, Park Avenue, Shahra-e-Faisal, P.E.C.H.S Block 2 Block 6 PECHS, Karachi, 75400</p>
            </div>
            
            <!-- Contact -->
            <div class="mb-8">
              <div class="flex items-start gap-3 mb-2">
                <i class="fas fa-phone-alt text-[#111] text-xl mt-1"></i>
                <h4 class="font-['Space_Grotesk'] font-semibold text-[#111] text-lg">Contact</h4>
              </div>
              <div class="pl-8 font-['Inter']">
                <p class="text-[#111] opacity-80">Phone: 0336 1369929</p>
                <p class="text-[#111] opacity-80">Email: <a href="mailto:example@gmail.com" class="hover:underline">example@gmail.com</a></p>
              </div>
            </div>
            
            <!-- Open Time -->
            <div class="mb-8">
              <div class="flex items-start gap-3 mb-2">
                <i class="fas fa-clock text-[#111] text-xl mt-1"></i>
                <h4 class="font-['Space_Grotesk'] font-semibold text-[#111] text-lg">Open Time</h4>
              </div>
              <p class="text-[#111] opacity-80 pl-8 font-['Inter']">Monday – Friday : 10:00 – 20:00</p>
            </div>
            
            <!-- Stay Connected -->
            <div>
              <div class="flex items-center gap-3 mb-4">
                <i class="fas fa-share-alt text-[#111] text-xl"></i>
                <h4 class="font-['Space_Grotesk'] font-semibold text-[#111] text-lg">Stay Connected</h4>
              </div>
              <div class="flex gap-3 pl-8">
                <a href="#" class="social-icon w-10 h-10 bg-black/10 rounded-full flex items-center justify-center text-[#111] hover:bg-black hover:text-[#ceff66] transition-all"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon w-10 h-10 bg-black/10 rounded-full flex items-center justify-center text-[#111] hover:bg-black hover:text-[#ceff66] transition-all"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon w-10 h-10 bg-black/10 rounded-full flex items-center justify-center text-[#111] hover:bg-black hover:text-[#ceff66] transition-all"><i class="fab fa-pinterest-p"></i></a>
                <a href="#" class="social-icon w-10 h-10 bg-black/10 rounded-full flex items-center justify-center text-[#111] hover:bg-black hover:text-[#ceff66] transition-all"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon w-10 h-10 bg-black/10 rounded-full flex items-center justify-center text-[#111] hover:bg-black hover:text-[#ceff66] transition-all"><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== MAP SECTION ========== -->
<section class="relative py-20 bg-white">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="bg-[#f5f5f5] rounded-[32px] p-2 border border-[#ceff66]/30 overflow-hidden shadow-lg">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231118.23582609927!2d66.97534769999999!3d24.861504949999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f066c8f5e6b%3A0x8d3e4d0c5e9f5a5a!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s"
        width="100%" height="400" style="border:0; border-radius: 28px;"
        allowfullscreen="" loading="lazy"
        class="grayscale contrast-125 opacity-90 hover:opacity-100 transition-opacity">
      </iframe>
    </div>
  </div>
</section>

<!-- ========== CTA SECTION ========== -->
<section class="relative py-20 bg-[#111]">
  <div class="max-w-4xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20 text-center">
    <div class="reveal">
      <span class="text-[#ceff66] text-sm font-semibold tracking-[0.3em] uppercase mb-4 block font-['Inter']">Ready to start?</span>
      <h2 class="font-['Space_Grotesk'] text-4xl md:text-5xl font-bold text-white mb-6">
        Let's Build Something <span class="text-[#ceff66]">Amazing</span> Together
      </h2>
      <p class="text-white/40 text-lg max-w-2xl mx-auto mb-8 font-['Inter']">Whether you're ready to scale or just exploring options, our team is here to guide you every step of the way.</p>
      <a href="#" class="group inline-flex items-center gap-3 rounded-full px-8 py-4 bg-[#ceff66] text-black font-semibold text-lg hover:scale-105 transition-all duration-300 hover:shadow-[0_20px_30px_-10px_rgba(206,255,102,0.5)] font-['Inter']">
        Schedule a Call
        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
      </a>
    </div>
  </div>
</section>

<!-- ========== FOOTER ========== -->
<?php
  @include('footer.php');
?>

<!-- ========== JAVASCRIPT ========== -->
<script>
  window.addEventListener('scroll', () => {
    const s = window.scrollY;
    const m = document.documentElement.scrollHeight - window.innerHeight;
    document.getElementById('scroll-progress').style.width = (s / m * 100) + '%';
  }, { passive: true });

  const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(en => {
      if (en.isIntersecting) { en.target.classList.add('visible'); revealObs.unobserve(en.target); }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
  revealEls.forEach(el => revealObs.observe(el));

  const toggle = document.getElementById('menuToggle');
  const mMenu  = document.getElementById('mobile-menu');
  const b1 = document.getElementById('bar1');
  const b2 = document.getElementById('bar2');
  const b3 = document.getElementById('bar3');
  let mOpen = false;
  if (toggle) {
    toggle.addEventListener('click', () => {
      mOpen = !mOpen;
      mMenu.classList.toggle('open', mOpen);
      if (b1) b1.style.transform = mOpen ? 'translateY(8px) rotate(45deg)' : '';
      if (b2) b2.style.opacity   = mOpen ? '0' : '1';
      if (b3) b3.style.transform = mOpen ? 'translateY(-8px) rotate(-45deg)' : '';
    });
  }
  if (mMenu) {
    mMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
      mOpen = false; mMenu.classList.remove('open');
      if (b1) b1.style.transform = '';
      if (b2) b2.style.opacity   = '1';
      if (b3) b3.style.transform = '';
    }));
  }
</script>

</body>
</html>