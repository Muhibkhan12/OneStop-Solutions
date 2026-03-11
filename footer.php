<!-- FOOTER -->
<footer class="relative max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-16 md:py-20 bg-[#000000] text-white/90 font-['Inter']">
  
  <!-- Darker, more subtle background -->
  <div class="absolute inset-0 overflow-hidden">
    <!-- Very subtle gradients - barely visible -->
    <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(ellipse_at_top_right,_#ceff66/3,_transparent_70%)]"></div>
    <div class="absolute bottom-0 right-0 w-full h-full bg-[radial-gradient(ellipse_at_bottom_left,_#8b5cf6/3,_transparent_70%)]"></div>
    
    <!-- Even subtler grid -->
    <div class="absolute inset-0 opacity-[0.02]" style="background-image: linear-gradient(to right, #ceff66 1px, transparent 1px), linear-gradient(to bottom, #ceff66 1px, transparent 1px); background-size: 40px 40px;"></div>
    
    <!-- Floating particles - darker and more subtle -->
    <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-[#ceff66]/3 rounded-full blur-3xl animate-pulse-slow"></div>
    <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-600/3 rounded-full blur-3xl animate-pulse-slower"></div>
    
    <!-- Additional dark overlay to ensure pure black background -->
    <div class="absolute inset-0 bg-black/40"></div>
  </div>

  <!-- Main Content -->
  <div class="relative z-10">
    <!-- Top section with logo and description -->
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 pb-12 border-b border-white/5">
      <!-- Brand - wider column -->
      <div class="lg:col-span-2">
        <div class="mb-5">
          <!-- Logo - larger on mobile (h-16), even larger on desktop (h-24) -->
          <img src="images/logo.gif" alt="Growth Alliance Logo" class="h-16 sm:h-20 md:h-24 lg:h-24 w-auto brightness-0 invert hover:opacity-90 transition-opacity">
        </div>
        <p class="text-white/80 text-sm leading-relaxed max-w-sm mb-6 font-['Inter']">
          Empowering franchises with data-driven digital marketing solutions that deliver real growth.
        </p>
        
        <!-- Social - darker theme -->
        <div class="flex gap-4">
          <a href="#" class="w-9 h-9 rounded-full bg-white/5 border border-white/5 flex items-center justify-center text-white/30 hover:text-white hover:border-[#ceff66] hover:bg-[#ceff66]/20 hover:scale-110 transition-all duration-300">
            <i class="fab fa-linkedin-in text-sm"></i>
          </a>
          <a href="#" class="w-9 h-9 rounded-full bg-white/5 border border-white/5 flex items-center justify-center text-white/30 hover:text-white hover:border-[#ceff66] hover:bg-[#ceff66]/20 hover:scale-110 transition-all duration-300">
            <i class="fab fa-facebook text-sm"></i>
          </a>
          <a href="#" class="w-9 h-9 rounded-full bg-white/5 border border-white/5 flex items-center justify-center text-white/30 hover:text-white hover:border-[#ceff66] hover:bg-[#ceff66]/20 hover:scale-110 transition-all duration-300">
            <i class="fab fa-instagram text-sm"></i>
          </a>
        </div>
      </div>

      <!-- Empty space for balance -->
      <div class="hidden lg:block lg:col-span-1"></div>

      <!-- Links - darker theme -->
      <div class="lg:col-span-2 flex justify-center grid grid-cols-3 gap-6">
        <!-- Company -->
        <div>
          <h4 class="text-xs uppercase tracking-wider text-white font-bold mb-4 font-['Space_Grotesk']">Company</h4>
          <ul class="space-y-2">
            <li><a href="index.php" class="text-sm text-white/80 hover:text-[#ceff66] transition-colors duration-200 font-['Inter']">Home</a></li>
            <li><a href="services.php" class="text-sm text-white/80 hover:text-[#ceff66] transition-colors duration-200 font-['Inter']">Services</a></li>
            <li><a href="about.php" class="text-sm text-white/80 hover:text-[#ceff66] transition-colors duration-200 font-['Inter']">About Us</a></li>
            <li><a href="whyOutsource.php" class="text-sm text-white/80 hover:text-[#ceff66] transition-colors duration-200 font-['Inter']">Why Outsource</a></li>
            <li><a href="contact.php" class="text-sm text-white/80 hover:text-[#ceff66] transition-colors duration-200 font-['Inter']">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Middle section with contact and CTA -->
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 py-12">
      <!-- Contact info - darker theme -->
      <div class="lg:col-span-3 flex flex-wrap gap-8">
        <div class="flex items-center gap-3 group">
          <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#ceff66]/20 group-hover:scale-110 transition-all duration-300">
            <i class="fas fa-envelope text-[#ceff66]/70 text-xs group-hover:text-[#ceff66] transition-colors duration-300"></i>
          </div>
          <span class="text-sm text-white/80 group-hover:text-white transition-colors duration-300 font-['Inter']">hello@growthalliance.com</span>
        </div>
        <div class="flex items-center gap-3 group">
          <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#ceff66]/20 group-hover:scale-110 transition-all duration-300">
            <i class="fas fa-phone text-[#ceff66]/70 text-xs group-hover:text-[#ceff66] transition-colors duration-300"></i>
          </div>
          <span class="text-sm text-white/80 group-hover:text-white transition-colors duration-300 font-['Inter']">0336 1369929</span>
        </div>
        <div class="flex items-center gap-3 group">
          <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-[#ceff66]/20 group-hover:scale-110 transition-all duration-300">
            <i class="fas fa-map-marker-alt text-[#ceff66]/70 text-xs group-hover:text-[#ceff66] transition-colors duration-300"></i>
          </div>
          <span class="text-sm text-white/80 group-hover:text-white transition-colors duration-300 max-w-xs font-['Inter']">Karachi, Pakistan</span>
        </div>
      </div>
    </div>

    <!-- Bottom Bar - darker theme -->
    <div class="pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 border-t border-white/5">
      <p class="text-xs text-white/80 font-light font-['Inter']">© 2025 Growth Alliance. All rights reserved.</p>
      <div class="flex gap-8 text-xs">
        <a href="#" class="text-white/80 hover:text-[#ceff66] transition-colors duration-200 relative group font-['Inter']">
          Sitemap
          <span class="absolute -bottom-1 left-0 w-0 h-px bg-[#ceff66] group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="#" class="text-white/80 hover:text-[#ceff66] transition-colors duration-200 relative group font-['Inter']">
          Accessibility
          <span class="absolute -bottom-1 left-0 w-0 h-px bg-[#ceff66] group-hover:w-full transition-all duration-300"></span>
        </a>
        <a href="#" class="text-white/80 hover:text-[#ceff66] transition-colors duration-200 relative group font-['Inter']">
          Careers
          <span class="absolute -bottom-1 left-0 w-0 h-px bg-[#ceff66] group-hover:w-full transition-all duration-300"></span>
        </a>
      </div>
    </div>
  </div>
</footer>

<style>
  @keyframes pulse-slow {
    0%, 100% { opacity: 0.15; transform: scale(1); }
    50% { opacity: 0.25; transform: scale(1.1); }
  }
  
  @keyframes pulse-slower {
    0%, 100% { opacity: 0.1; transform: scale(1); }
    50% { opacity: 0.2; transform: scale(1.2); }
  }
  
  .animate-pulse-slow {
    animation: pulse-slow 4s ease-in-out infinite;
  }
  
  .animate-pulse-slower {
    animation: pulse-slower 6s ease-in-out infinite;
  }
  
  .animation-delay-2000 {
    animation-delay: 2s;
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
      height: 5rem; /* 80px - larger on mobile */
    }
  }
  
  @media (min-width: 641px) and (max-width: 768px) {
    .sm\:h-20 {
      height: 5rem; /* 80px */
    }
  }
  
  @media (min-width: 769px) {
    .md\:h-24 {
      height: 6rem; /* 96px */
    }
    .lg\:h-24 {
      height: 6rem; /* 96px - same as desktop */
    }
  }
</style>