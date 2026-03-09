<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us — OneStop Solutions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:opsz,wght@14..32,300..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* Modern animations */
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
    
    /* Scroll reveal */
    .reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal.visible { opacity: 1; transform: translateY(0); }
    
    .d1 { transition-delay: 0.08s; }
    .d2 { transition-delay: 0.18s; }
    .d3 { transition-delay: 0.28s; }
    .d4 { transition-delay: 0.38s; }
    
    /* Gradient text */
    .gradient-text {
      background: linear-gradient(135deg, #fff 0%, #ceff66 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    /* Glass card effect */
    .glass-card {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(206, 255, 102, 0.1);
    }
    
    /* Form input styles */
    .form-input {
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(206, 255, 102, 0.2);
      transition: all 0.3s ease;
    }
    
    .form-input:focus {
      border-color: #ceff66;
      box-shadow: 0 0 20px rgba(206, 255, 102, 0.2);
      outline: none;
      background: rgba(255, 255, 255, 0.08);
    }
    
    .form-input:hover {
      border-color: rgba(206, 255, 102, 0.5);
    }
    
    /* Contact info card hover */
    .info-card {
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.3, 1);
    }
    
    .info-card:hover {
      transform: translateY(-5px);
      border-color: #ceff66;
    }
    
    /* Floating animation */
    .float {
      animation: float 6s ease-in-out infinite;
    }
    
    /* Pulse glow */
    .pulse-glow {
      animation: pulse-glow 4s ease-in-out infinite;
    }
    
    /* Rotate slow */
    .rotate-slow {
      animation: rotate-slow 20s linear infinite;
    }
  </style>
</head>
<body class="antialiased font-['Inter'] bg-[#0a0a0a] text-white overflow-x-hidden">

<!-- Scroll Progress -->
<div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] bg-[#ceff66] z-[9999] duration-100 shadow-[0_0_20px_rgba(206,255,102,0.8)]"></div>

<!-- ========== NAVBAR ========== -->
<?php @include('navbar.php') ?>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden fixed top-16 left-0 right-0 bg-[rgba(0,0,0,0.95)] backdrop-blur-[20px] px-8 py-6 z-50 border-t border-[#ceff66]/10">
  <a href="index.html" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all">Home</a>
  <a href="about.html" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all">About</a>
  <a href="services.html" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all">Services</a>
  <a href="why-outsource.html" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all">Why Outsource</a>
  <a href="contact.html" class="block font-medium text-[#ceff66] text-lg py-3 border-b border-white/5">Contact</a>
</div>

<!-- ========== HERO SECTION WITH YELLOWISH BG ========== -->
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-[#ceff66] via-[#b3e04e] to-[#a6d84a]">
  
  <!-- Animated background elements -->
  <div class="absolute inset-0 opacity-20">
    <div class="absolute top-20 left-10 w-96 h-96 bg-white rounded-full mix-blend-overlay filter blur-[80px] animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-black rounded-full mix-blend-overlay filter blur-[100px] animate-pulse animation-delay-2000"></div>
  </div>
  
  <!-- Grid overlay -->
  <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M0 0 L60 0 L60 60 L0 60 Z" fill="none" stroke="rgba(0,0,0,0.05)" stroke-width="1"/%3E%3C/svg%3E')] opacity-20"></div>
  
  <!-- Main content -->
  <div class="relative z-10 text-center px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="reveal inline-flex items-center gap-3 px-4 py-2 bg-black/10 backdrop-blur-sm rounded-full border border-black/20 mb-6">
      <span class="w-2 h-2 bg-black rounded-full animate-pulse"></span>
      <span class="text-black/70 text-sm font-medium tracking-wider">GET IN TOUCH</span>
    </div>
    
    <h1 class="reveal d1 font-['Plus_Jakarta_Sans'] font-extrabold text-6xl md:text-7xl lg:text-8xl xl:text-9xl text-black leading-[1.1] tracking-[-0.03em] mb-6">
      Contact <span class="text-white">Us</span>
    </h1>
    
    <p class="reveal d2 text-black/70 text-xl max-w-2xl mx-auto">
      Have a question or ready to start your outsourcing journey? We're here to help.
    </p>
  </div>
  
  <!-- Decorative elements -->
  <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-t from-[#0a0a0a] to-transparent"></div>
</section>

<!-- ========== CONTACT FORM SECTION ========== -->
<section class="relative py-32 bg-[#0a0a0a] overflow-hidden">
  
  <!-- Animated background orbs -->
  <div class="absolute top-40 right-20 w-96 h-96 bg-[#ceff66] rounded-full mix-blend-screen filter blur-[120px] opacity-10 animate-pulse"></div>
  <div class="absolute bottom-40 left-20 w-96 h-96 bg-purple-600 rounded-full mix-blend-screen filter blur-[120px] opacity-10 animate-pulse animation-delay-2000"></div>
  
  <!-- Decorative rings -->
  <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-[#ceff66]/5 rounded-full rotate-slow"></div>
  <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-[#ceff66]/10 rounded-full rotate-reverse"></div>
  
  <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    
    <!-- Section header -->
    <div class="text-center max-w-3xl mx-auto mb-16">
      <span class="text-[#ceff66] text-sm font-semibold tracking-[0.3em] uppercase mb-4 block">Get In Touch</span>
      <h2 class="font-['Plus_Jakarta_Sans'] text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6">
        Let's Start a <span class="gradient-text">Conversation</span>
      </h2>
      <p class="text-white/40 text-lg">
        Whether you need a full BPO setup, a dedicated contact centre, or just have questions — we're ready to help.
      </p>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
      
      <!-- Left: Contact Information -->
      <div class="space-y-8 reveal-left">
        
        <div class="glass-card rounded-[32px] p-8 border border-[#ceff66]/20">
          <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-6">Contact Information</h3>
          
          <!-- Phone -->
          <div class="info-card flex items-start gap-4 p-4 rounded-2xl border border-white/5 hover:border-[#ceff66]/30 transition-all mb-4">
            <div class="w-12 h-12 bg-[#ceff66]/10 rounded-xl flex items-center justify-center flex-shrink-0">
              <i class="fas fa-phone text-[#ceff66] text-xl"></i>
            </div>
            <div>
              <p class="text-white/40 text-sm mb-1">Phone</p>
              <p class="text-white font-semibold text-lg">+92 123 456 7890</p>
              <p class="text-white/60 text-sm">Mon-Fri 9am-6pm PKT</p>
            </div>
          </div>
          
          <!-- Email -->
          <div class="info-card flex items-start gap-4 p-4 rounded-2xl border border-white/5 hover:border-[#ceff66]/30 transition-all mb-4">
            <div class="w-12 h-12 bg-[#ceff66]/10 rounded-xl flex items-center justify-center flex-shrink-0">
              <i class="fas fa-envelope text-[#ceff66] text-xl"></i>
            </div>
            <div>
              <p class="text-white/40 text-sm mb-1">Email</p>
              <p class="text-white font-semibold text-lg">info@onestop.com</p>
              <p class="text-white/60 text-sm">support@onestop.com</p>
            </div>
          </div>
          
          <!-- Location -->
          <div class="info-card flex items-start gap-4 p-4 rounded-2xl border border-white/5 hover:border-[#ceff66]/30 transition-all mb-4">
            <div class="w-12 h-12 bg-[#ceff66]/10 rounded-xl flex items-center justify-center flex-shrink-0">
              <i class="fas fa-location-dot text-[#ceff66] text-xl"></i>
            </div>
            <div>
              <p class="text-white/40 text-sm mb-1">Head Office</p>
              <p class="text-white font-semibold text-lg">Karachi, Pakistan</p>
              <p class="text-white/60 text-sm">Global Reach · Local Support</p>
            </div>
          </div>
          
          <!-- Social Links -->
          <div class="mt-8">
            <p class="text-white/40 text-sm mb-4">Follow Us</p>
            <div class="flex gap-3">
              <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black transition-all hover:scale-110">
                <i class="fab fa-linkedin-in"></i>
              </a>
              <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black transition-all hover:scale-110">
                <i class="fab fa-x-twitter"></i>
              </a>
              <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black transition-all hover:scale-110">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black transition-all hover:scale-110">
                <i class="fab fa-facebook-f"></i>
              </a>
            </div>
          </div>
        </div>
        
        <!-- Business Hours -->
        <div class="glass-card rounded-[32px] p-8 border border-[#ceff66]/20">
          <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-4">Business Hours</h3>
          <div class="space-y-3">
            <div class="flex justify-between items-center border-b border-white/5 pb-2">
              <span class="text-white/60">Monday - Friday</span>
              <span class="text-white font-semibold">9:00 AM - 6:00 PM</span>
            </div>
            <div class="flex justify-between items-center border-b border-white/5 pb-2">
              <span class="text-white/60">Saturday</span>
              <span class="text-white font-semibold">10:00 AM - 4:00 PM</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-white/60">Sunday</span>
              <span class="text-white font-semibold">Closed</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Right: Contact Form -->
      <div class="reveal-right">
        <div class="glass-card rounded-[32px] p-8 md:p-10 border border-[#ceff66]/20">
          <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-6">Send Us a Message</h3>
          
          <form action="#" method="POST" class="space-y-6">
            <!-- Name Field -->
            <div>
              <label for="name" class="block text-white/60 text-sm mb-2">Full Name *</label>
              <input type="text" id="name" name="name" required 
                class="form-input w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-white/30 focus:border-[#ceff66] focus:ring-1 focus:ring-[#ceff66] transition-all">
            </div>
            
            <!-- Email Field -->
            <div>
              <label for="email" class="block text-white/60 text-sm mb-2">Email Address *</label>
              <input type="email" id="email" name="email" required 
                class="form-input w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-white/30 focus:border-[#ceff66] focus:ring-1 focus:ring-[#ceff66] transition-all">
            </div>
            
            <!-- Phone Field -->
            <div>
              <label for="phone" class="block text-white/60 text-sm mb-2">Phone Number</label>
              <input type="tel" id="phone" name="phone" 
                class="form-input w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-white/30 focus:border-[#ceff66] focus:ring-1 focus:ring-[#ceff66] transition-all">
            </div>
            
            <!-- Subject Field -->
            <div>
              <label for="subject" class="block text-white/60 text-sm mb-2">Subject *</label>
              <select id="subject" name="subject" required 
                class="form-input w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white focus:border-[#ceff66] focus:ring-1 focus:ring-[#ceff66] transition-all">
                <option value="" disabled selected class="bg-[#0a0a0a]">Select a subject</option>
                <option value="general" class="bg-[#0a0a0a]">General Inquiry</option>
                <option value="sales" class="bg-[#0a0a0a]">Sales & Pricing</option>
                <option value="support" class="bg-[#0a0a0a]">Technical Support</option>
                <option value="partnership" class="bg-[#0a0a0a]">Partnership Opportunities</option>
                <option value="other" class="bg-[#0a0a0a]">Other</option>
              </select>
            </div>
            
            <!-- Message Field -->
            <div>
              <label for="message" class="block text-white/60 text-sm mb-2">Message *</label>
              <textarea id="message" name="message" rows="5" required 
                class="form-input w-full px-4 py-3 rounded-xl bg-white/5 border border-white/10 text-white placeholder-white/30 focus:border-[#ceff66] focus:ring-1 focus:ring-[#ceff66] transition-all resize-none"></textarea>
            </div>
            
            <!-- Submit Button -->
            <div>
              <button type="submit" 
                class="group relative w-full inline-flex items-center justify-center gap-3 rounded-xl px-8 py-4 bg-[#ceff66] text-black font-semibold text-lg overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-[0_20px_30px_-10px_rgba(206,255,102,0.5)]">
                <span class="relative z-10">Send Message</span>
                <i class="fas fa-paper-plane relative z-10 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                <div class="absolute inset-0 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></div>
              </button>
            </div>
            
            <!-- Privacy Note -->
            <p class="text-white/30 text-xs text-center">
              By submitting this form, you agree to our <a href="#" class="text-[#ceff66] hover:underline">Privacy Policy</a>.
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== MAP SECTION (Optional) ========== -->
<section class="relative py-20 bg-[#050505]">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="glass-card rounded-[32px] p-2 border border-[#ceff66]/20 overflow-hidden">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231118.23582609927!2d66.97534769999999!3d24.861504949999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f066c8f5e6b%3A0x8d3e4d0c5e9f5a5a!2sKarachi%2C%20Pakistan!5e0!3m2!1sen!2s!4v1620000000000!5m2!1sen!2s" 
        width="100%" 
        height="400" 
        style="border:0; border-radius: 28px;" 
        allowfullscreen="" 
        loading="lazy"
        class="grayscale contrast-125 opacity-80 hover:opacity-100 transition-opacity">
      </iframe>
    </div>
  </div>
</section>

<!-- ========== CTA SECTION ========== -->
<section class="relative py-20 bg-[#0a0a0a]">
  <div class="max-w-4xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20 text-center">
    <div class="reveal">
      <span class="text-[#ceff66] text-sm font-semibold tracking-[0.3em] uppercase mb-4 block">Ready to start?</span>
      <h2 class="font-['Plus_Jakarta_Sans'] text-4xl md:text-5xl font-extrabold text-white mb-6">
        Let's Build Something <span class="gradient-text">Amazing</span> Together
      </h2>
      <p class="text-white/40 text-lg max-w-2xl mx-auto mb-8">
        Whether you're ready to scale or just exploring options, our team is here to guide you every step of the way.
      </p>
      <a href="#" class="group inline-flex items-center gap-3 rounded-full px-8 py-4 bg-[#ceff66] text-black font-semibold text-lg hover:scale-105 transition-all duration-300 hover:shadow-[0_20px_30px_-10px_rgba(206,255,102,0.5)]">
        Schedule a Call
        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
      </a>
    </div>
  </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="bg-[#050505] border-t border-white/5 py-16">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
      <div class="col-span-2">
        <span class="font-['Plus_Jakarta_Sans'] font-bold text-2xl text-white hover:scale-105 hover:text-[#ceff66] transition-all inline-block">OneStop<span class="text-[#ceff66]">Solutions</span></span>
        <p class="text-white/30 text-sm mt-4 max-w-md">Transforming businesses through strategic outsourcing since 2014. Your success is our mission.</p>
        <div class="flex gap-4 mt-6">
          <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black hover:scale-110 hover:rotate-12 transition-all"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black hover:scale-110 hover:-rotate-12 transition-all"><i class="fab fa-x-twitter"></i></a>
          <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black hover:scale-110 hover:rotate-6 transition-all"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      
      <div>
        <h4 class="font-semibold text-white mb-4">Quick Links</h4>
        <ul class="space-y-2">
          <li><a href="index.html" class="text-white/30 hover:text-[#ceff66] hover:translate-x-2 transition-all inline-block">Home</a></li>
          <li><a href="about.html" class="text-white/30 hover:text-[#ceff66] hover:translate-x-2 transition-all inline-block">About</a></li>
          <li><a href="services.html" class="text-white/30 hover:text-[#ceff66] hover:translate-x-2 transition-all inline-block">Services</a></li>
          <li><a href="why-outsource.html" class="text-white/30 hover:text-[#ceff66] hover:translate-x-2 transition-all inline-block">Why Outsource</a></li>
          <li><a href="contact.html" class="text-white/30 hover:text-[#ceff66] hover:translate-x-2 transition-all inline-block">Contact</a></li>
        </ul>
      </div>
      
      <div>
        <h4 class="font-semibold text-white mb-4">Legal</h4>
        <ul class="space-y-2">
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] hover:translate-x-2 transition-all inline-block">Privacy Policy</a></li>
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] hover:translate-x-2 transition-all inline-block">Terms of Service</a></li>
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] hover:translate-x-2 transition-all inline-block">Cookie Policy</a></li>
        </ul>
      </div>
    </div>
    
    <div class="border-t border-white/5 mt-12 pt-8 text-center text-white/20 text-sm">
      © 2025 OneStop Solutions. All rights reserved.
    </div>
  </div>
</footer>

<!-- ========== JAVASCRIPT ========== -->
<script>
  // Scroll progress bar
  window.addEventListener('scroll', () => {
    const s = window.scrollY;
    const m = document.documentElement.scrollHeight - window.innerHeight;
    document.getElementById('scroll-progress').style.width = (s / m * 100) + '%';
  }, { passive: true });

  // Scroll reveal
  const revealEls = document.querySelectorAll('.reveal');
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(en => {
      if (en.isIntersecting) { en.target.classList.add('visible'); }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
  revealEls.forEach(el => revealObs.observe(el));

  // Mobile menu
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

<style>
  /* Custom animation delays */
  .animation-delay-1000 { animation-delay: 1s; }
  .animation-delay-2000 { animation-delay: 2s; }
  
  @keyframes rotate-reverse {
    from { transform: rotate(0deg); }
    to { transform: rotate(-360deg); }
  }
  
  .rotate-reverse {
    animation: rotate-reverse 25s linear infinite;
  }
  
  /* Form select option styling */
  select option {
    background-color: #0a0a0a;
    color: white;
  }
</style>

</body>
</html>