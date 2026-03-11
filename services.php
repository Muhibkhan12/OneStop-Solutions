<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <title>Services — OneStop Solutions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    @keyframes tickerRoll {
      from { transform: translateX(0); }
      to   { transform: translateX(-50%); }
    }
    .ticker-track { animation: tickerRoll 20s linear infinite; }
    .ticker-track:hover { animation-play-state: paused; }

    .reveal        { opacity: 0; transform: translateY(52px);  transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal-left   { opacity: 0; transform: translateX(-60px); transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal-right  { opacity: 0; transform: translateX(60px);  transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal.visible, .reveal-left.visible, .reveal-right.visible { opacity: 1; transform: translate(0); }

    .service-card {
      transition: transform 0.4s cubic-bezier(0.2, 0.9, 0.3, 1), box-shadow 0.4s;
    }
    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 30px 50px -25px rgba(206, 255, 102, 0.3);
    }

    .dot.active { background: #ceff66 !important; transform: scale(1.4); }

    @media (max-width: 640px) {
      .service-card { padding: 1.8rem 1.2rem; }
    }

    .perspective-1000 { perspective: 1000px; }

    body { font-family: 'Inter', sans-serif; }
    h1, h2, h3, h4, h5, h6, .font-heading { font-family: 'Space Grotesk', sans-serif; }

    /* ── Navbar hide-on-scroll wrapper ── */
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
  </style>
</head>
<body class="antialiased bg-[#faf9f7] text-[#111] overflow-x-hidden">

<div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] bg-[#ceff66] z-[999] duration-100 shadow-[0_0_10px_rgba(206,255,102,0.6)]"></div>

<!-- ========== NAVBAR ========== -->
<div id="navbar-wrapper">
  <?php @include('navbar.php'); ?>
</div>

<!-- ========== HERO ========== -->
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden bg-black pt-20">

  <div class="absolute bottom-0 right-0 w-[800px] h-[800px] bg-[radial-gradient(circle_at_bottom_right,_#ceff66_0%,_transparent_70%)] opacity-40 pointer-events-none"></div>

  <div class="absolute inset-0 opacity-5 pointer-events-none">
    <div class="absolute top-20 left-10 w-96 h-96 bg-white rounded-full mix-blend-overlay filter blur-[80px] animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-white rounded-full mix-blend-overlay filter blur-[100px] animate-pulse" style="animation-delay:2s;"></div>
  </div>

  <div class="absolute inset-0 opacity-5 pointer-events-none" style="background-image:url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M0 0 L60 0 L60 60 L0 60 Z&quot; fill=&quot;none&quot; stroke=&quot;rgba(255,255,255,0.1)&quot; stroke-width=&quot;1&quot;/%3E%3C/svg%3E');"></div>

  <div class="relative z-10 text-center px-5 sm:px-8 md:px-12 lg:px-24 py-20 md:py-28">
    <div class="reveal inline-flex items-center gap-3 px-4 py-2 bg-white/15 backdrop-blur-sm rounded-full border border-white/30 mb-6">
      <span class="w-2 h-2 bg-[#ceff66] rounded-full animate-pulse"></span>
      <span class="text-white/85 text-sm font-medium tracking-wider font-['Inter']">SERVICES</span>
    </div>
    <h1 class="reveal d1 font-['Space_Grotesk'] font-bold text-6xl md:text-7xl lg:text-8xl xl:text-9xl text-white leading-[1.1] tracking-[-0.03em] mb-6">
      Services
    </h1>
    <p class="reveal d2 text-white/70 text-xl max-w-2xl mx-auto font-['Inter']">
      Delivering reliable solutions through expert teams and efficient processes.
    </p>
  </div>
</section>

<!-- ========== TICKER ========== -->
<div class="bg-[#ceff66] py-3 overflow-hidden">
  <div class="ticker-track flex whitespace-nowrap">
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Inbound <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Outbound <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Lead Generation <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Customer Service <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Digital Marketing <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Web Development <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Survey Research <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Winback <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Technical Support <span class="opacity-40 mx-2">&#10022;</span></span>
    <!-- duplicate for seamless loop -->
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Inbound <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Outbound <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Lead Generation <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Customer Service <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Digital Marketing <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Web Development <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Survey Research <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Winback <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Technical Support <span class="opacity-40 mx-2">&#10022;</span></span>
  </div>
</div>

<!-- ========== SERVICE GRID - PREMIUM MODERN CARDS WITH BACKGROUND IMAGES ========== -->
<section id="service-grid" class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-20 md:py-28 bg-[#fafafa] relative overflow-hidden">
  
  <!-- Enhanced background decoration -->
  <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-[#ceff66]/10 rounded-full blur-3xl -translate-x-1/2 -translate-y-1/2 animate-pulse"></div>
  <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-[#ceff66]/10 rounded-full blur-3xl translate-x-1/2 translate-y-1/2 animate-pulse animation-delay-2000"></div>
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full max-w-6xl max-h-96 bg-gradient-to-r from-transparent via-[#ceff66]/5 to-transparent rotate-12"></div>
  
  <div class="text-center max-w-3xl mx-auto mb-16 relative z-10">
    <div class="reveal inline-flex items-center gap-[10px] text-[#ceff66] text-[0.7rem] font-semibold tracking-[0.28em] uppercase mb-4 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66] font-['Inter']">
      end-to-end solutions
    </div>
    <h2 class="reveal d1 font-['Space_Grotesk'] text-[clamp(2rem,5vw,3.5rem)] font-bold leading-[1.1] tracking-[-0.025em] text-[#111] mb-5">
      Specialised services, one partner
    </h2>
    <p class="reveal d2 text-[#5a5a5a] text-lg max-w-2xl mx-auto font-['Inter']">From first contact to technical support &mdash; we cover the entire customer journey with excellence.</p>
  </div>

  <!-- Premium Cards Grid with Background Images -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10 relative z-10">
    
    <!-- Card 1: Inbound Calls - Premium Card -->
    <div class="reveal group relative h-[550px] rounded-3xl overflow-hidden shadow-2xl hover:shadow-[0_40px_60px_-20px_rgba(206,255,102,0.5)] transition-all duration-700 hover:-translate-y-3">
      <!-- Background Image with Parallax -->
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1543269664-56d93c1b41a6?q=80&w=1000&auto=format&fit=crop" alt="Inbound service" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
        <!-- Multi-layer Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#ceff66]/20 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-700 mix-blend-overlay"></div>
        <!-- Animated Glow Line -->
        <div class="absolute bottom-0 left-0 w-0 h-1 bg-[#ceff66] group-hover:w-full transition-all duration-700 delay-300"></div>
      </div>
      
      <!-- Content with Premium Styling -->
      <div class="relative h-full flex flex-col justify-end p-8 text-white">
        <div class="flex items-center justify-between mb-6">
          <div class="w-20 h-20 bg-gradient-to-br from-[#ceff66] to-[#a6e62c] rounded-2xl flex items-center justify-center shadow-2xl transform group-hover:scale-110 group-hover:-rotate-6 group-hover:shadow-[#ceff66]/30 transition-all duration-500">
            <i class="fas fa-phone-volume text-3xl text-[#111]"></i>
          </div>
          <span class="text-7xl font-black text-white/10 group-hover:text-[#ceff66]/20 transition-all duration-500">01</span>
        </div>
        
        <h3 class="font-['Space_Grotesk'] text-3xl font-bold mb-3 group-hover:text-[#ceff66] transition-colors duration-300 transform group-hover:translate-x-2">Inbound Calls</h3>
        
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-6 font-['Inter'] transform transition-transform duration-300 group-hover:translate-x-1">Customer care, order taking, helpdesk &mdash; we handle high-volume inbound with empathy and efficiency.</p>
        
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="px-4 py-2 bg-[#ceff66]/20 text-[#ceff66] text-xs rounded-full border border-[#ceff66]/30 font-medium backdrop-blur-sm hover:bg-[#ceff66]/30 transition-all duration-300">24/7 Support</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Multi-language</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">High volume</span>
        </div>
        
        
      </div>
    </div>

    <!-- Card 2: Outbound Calls - Premium Card -->
    <div class="reveal d2 group relative h-[550px] rounded-3xl overflow-hidden shadow-2xl hover:shadow-[0_40px_60px_-20px_rgba(206,255,102,0.5)] transition-all duration-700 hover:-translate-y-3">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=1000&auto=format&fit=crop" alt="Outbound service" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#ceff66]/20 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-700 mix-blend-overlay"></div>
        <div class="absolute bottom-0 left-0 w-0 h-1 bg-[#ceff66] group-hover:w-full transition-all duration-700 delay-300"></div>
      </div>
      
      <div class="relative h-full flex flex-col justify-end p-8 text-white">
        <div class="flex items-center justify-between mb-6">
          <div class="w-20 h-20 bg-gradient-to-br from-[#ceff66] to-[#a6e62c] rounded-2xl flex items-center justify-center shadow-2xl transform group-hover:scale-110 group-hover:rotate-6 group-hover:shadow-[#ceff66]/30 transition-all duration-500">
            <i class="fas fa-phone-alt text-3xl text-[#111]"></i>
          </div>
          <span class="text-7xl font-black text-white/10 group-hover:text-[#ceff66]/20 transition-all duration-500">02</span>
        </div>
        
        <h3 class="font-['Space_Grotesk'] text-3xl font-bold mb-3 group-hover:text-[#ceff66] transition-colors duration-300 transform group-hover:translate-x-2">Outbound Calls</h3>
        
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-6 font-['Inter'] transform transition-transform duration-300 group-hover:translate-x-1">Telemarketing, appointment setting, market research &mdash; proactive outreach that delivers results.</p>
        
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="px-4 py-2 bg-[#ceff66]/20 text-[#ceff66] text-xs rounded-full border border-[#ceff66]/30 font-medium backdrop-blur-sm hover:bg-[#ceff66]/30 transition-all duration-300">B2B/B2C</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Lead gen</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Appointment setting</span>
        </div>
        
        
      </div>
    </div>

    <!-- Card 3: Lead Generation - Premium Card -->
    <div class="reveal d3 group relative h-[550px] rounded-3xl overflow-hidden shadow-2xl hover:shadow-[0_40px_60px_-20px_rgba(206,255,102,0.5)] transition-all duration-700 hover:-translate-y-3">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=1000&auto=format&fit=crop" alt="Lead generation" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#ceff66]/20 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-700 mix-blend-overlay"></div>
        <div class="absolute bottom-0 left-0 w-0 h-1 bg-[#ceff66] group-hover:w-full transition-all duration-700 delay-300"></div>
      </div>
      
      <div class="relative h-full flex flex-col justify-end p-8 text-white">
        <div class="flex items-center justify-between mb-6">
          <div class="w-20 h-20 bg-gradient-to-br from-[#ceff66] to-[#a6e62c] rounded-2xl flex items-center justify-center shadow-2xl transform group-hover:scale-110 group-hover:-rotate-6 group-hover:shadow-[#ceff66]/30 transition-all duration-500">
            <i class="fas fa-chart-line text-3xl text-[#111]"></i>
          </div>
          <span class="text-7xl font-black text-white/10 group-hover:text-[#ceff66]/20 transition-all duration-500">03</span>
        </div>
        
        <h3 class="font-['Space_Grotesk'] text-3xl font-bold mb-3 group-hover:text-[#ceff66] transition-colors duration-300 transform group-hover:translate-x-2">Lead Generation</h3>
        
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-6 font-['Inter'] transform transition-transform duration-300 group-hover:translate-x-1">Qualified B2B &amp; B2C leads through multi-channel strategies that fill your pipeline.</p>
        
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="px-4 py-2 bg-[#ceff66]/20 text-[#ceff66] text-xs rounded-full border border-[#ceff66]/30 font-medium backdrop-blur-sm hover:bg-[#ceff66]/30 transition-all duration-300">Multi-channel</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Qualified leads</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">B2B focus</span>
        </div>
        
        
      </div>
    </div>

    <!-- Card 4: Customer & Quality Services - Premium Card -->
    <div class="reveal group relative h-[550px] rounded-3xl overflow-hidden shadow-2xl hover:shadow-[0_40px_60px_-20px_rgba(206,255,102,0.5)] transition-all duration-700 hover:-translate-y-3">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1556740714-a8395b3bf30f?q=80&w=1000&auto=format&fit=crop" alt="Customer service" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#ceff66]/20 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-700 mix-blend-overlay"></div>
        <div class="absolute bottom-0 left-0 w-0 h-1 bg-[#ceff66] group-hover:w-full transition-all duration-700 delay-300"></div>
      </div>
      
      <div class="relative h-full flex flex-col justify-end p-8 text-white">
        <div class="flex items-center justify-between mb-6">
          <div class="w-20 h-20 bg-gradient-to-br from-[#ceff66] to-[#a6e62c] rounded-2xl flex items-center justify-center shadow-2xl transform group-hover:scale-110 group-hover:rotate-6 group-hover:shadow-[#ceff66]/30 transition-all duration-500">
            <i class="fas fa-headset text-3xl text-[#111]"></i>
          </div>
          <span class="text-7xl font-black text-white/10 group-hover:text-[#ceff66]/20 transition-all duration-500">04</span>
        </div>
        
        <h3 class="font-['Space_Grotesk'] text-3xl font-bold mb-3 group-hover:text-[#ceff66] transition-colors duration-300 transform group-hover:translate-x-2">Customer & Quality</h3>
        
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-6 font-['Inter'] transform transition-transform duration-300 group-hover:translate-x-1">Dedicated support, QA monitoring, and continuous improvement for superior CX.</p>
        
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="px-4 py-2 bg-[#ceff66]/20 text-[#ceff66] text-xs rounded-full border border-[#ceff66]/30 font-medium backdrop-blur-sm hover:bg-[#ceff66]/30 transition-all duration-300">QA monitoring</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">CSAT focus</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Continuous improvement</span>
        </div>
        
        
      </div>
    </div>

    <!-- Card 5: Digital Marketing - Premium Card -->
    <div class="reveal d2 group relative h-[550px] rounded-3xl overflow-hidden shadow-2xl hover:shadow-[0_40px_60px_-20px_rgba(206,255,102,0.5)] transition-all duration-700 hover:-translate-y-3">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000&auto=format&fit=crop" alt="Digital marketing" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#ceff66]/20 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-700 mix-blend-overlay"></div>
        <div class="absolute bottom-0 left-0 w-0 h-1 bg-[#ceff66] group-hover:w-full transition-all duration-700 delay-300"></div>
      </div>
      
      <div class="relative h-full flex flex-col justify-end p-8 text-white">
        <div class="flex items-center justify-between mb-6">
          <div class="w-20 h-20 bg-gradient-to-br from-[#ceff66] to-[#a6e62c] rounded-2xl flex items-center justify-center shadow-2xl transform group-hover:scale-110 group-hover:-rotate-6 group-hover:shadow-[#ceff66]/30 transition-all duration-500">
            <i class="fas fa-bullseye text-3xl text-[#111]"></i>
          </div>
          <span class="text-7xl font-black text-white/10 group-hover:text-[#ceff66]/20 transition-all duration-500">05</span>
        </div>
        
        <h3 class="font-['Space_Grotesk'] text-3xl font-bold mb-3 group-hover:text-[#ceff66] transition-colors duration-300 transform group-hover:translate-x-2">Digital Marketing</h3>
        
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-6 font-['Inter'] transform transition-transform duration-300 group-hover:translate-x-1">SEO, PPC, social media, content &mdash; data-driven campaigns that maximise ROI.</p>
        
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="px-4 py-2 bg-[#ceff66]/20 text-[#ceff66] text-xs rounded-full border border-[#ceff66]/30 font-medium backdrop-blur-sm hover:bg-[#ceff66]/30 transition-all duration-300">SEO/PPC</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Social media</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Content strategy</span>
        </div>
        
        
      </div>
    </div>

    <!-- Card 6: Web Development - Premium Card -->
    <div class="reveal d3 group relative h-[550px] rounded-3xl overflow-hidden shadow-2xl hover:shadow-[0_40px_60px_-20px_rgba(206,255,102,0.5)] transition-all duration-700 hover:-translate-y-3">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?q=80&w=1000&auto=format&fit=crop" alt="Web development" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#ceff66]/20 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-700 mix-blend-overlay"></div>
        <div class="absolute bottom-0 left-0 w-0 h-1 bg-[#ceff66] group-hover:w-full transition-all duration-700 delay-300"></div>
      </div>
      
      <div class="relative h-full flex flex-col justify-end p-8 text-white">
        <div class="flex items-center justify-between mb-6">
          <div class="w-20 h-20 bg-gradient-to-br from-[#ceff66] to-[#a6e62c] rounded-2xl flex items-center justify-center shadow-2xl transform group-hover:scale-110 group-hover:rotate-6 group-hover:shadow-[#ceff66]/30 transition-all duration-500">
            <i class="fas fa-code text-3xl text-[#111]"></i>
          </div>
          <span class="text-7xl font-black text-white/10 group-hover:text-[#ceff66]/20 transition-all duration-500">06</span>
        </div>
        
        <h3 class="font-['Space_Grotesk'] text-3xl font-bold mb-3 group-hover:text-[#ceff66] transition-colors duration-300 transform group-hover:translate-x-2">Web Development</h3>
        
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-6 font-['Inter'] transform transition-transform duration-300 group-hover:translate-x-1">Custom websites, e-commerce, portals &mdash; built for performance and conversion.</p>
        
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="px-4 py-2 bg-[#ceff66]/20 text-[#ceff66] text-xs rounded-full border border-[#ceff66]/30 font-medium backdrop-blur-sm hover:bg-[#ceff66]/30 transition-all duration-300">Custom build</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">E-commerce</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Responsive</span>
        </div>
        
        
      </div>
    </div>

    <!-- Card 7: Survey Research - Premium Card -->
    <div class="reveal group relative h-[550px] rounded-3xl overflow-hidden shadow-2xl hover:shadow-[0_40px_60px_-20px_rgba(206,255,102,0.5)] transition-all duration-700 hover:-translate-y-3">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1000&auto=format&fit=crop" alt="Survey research" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#ceff66]/20 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-700 mix-blend-overlay"></div>
        <div class="absolute bottom-0 left-0 w-0 h-1 bg-[#ceff66] group-hover:w-full transition-all duration-700 delay-300"></div>
      </div>
      
      <div class="relative h-full flex flex-col justify-end p-8 text-white">
        <div class="flex items-center justify-between mb-6">
          <div class="w-20 h-20 bg-gradient-to-br from-[#ceff66] to-[#a6e62c] rounded-2xl flex items-center justify-center shadow-2xl transform group-hover:scale-110 group-hover:-rotate-6 group-hover:shadow-[#ceff66]/30 transition-all duration-500">
            <i class="fas fa-poll text-3xl text-[#111]"></i>
          </div>
          <span class="text-7xl font-black text-white/10 group-hover:text-[#ceff66]/20 transition-all duration-500">07</span>
        </div>
        
        <h3 class="font-['Space_Grotesk'] text-3xl font-bold mb-3 group-hover:text-[#ceff66] transition-colors duration-300 transform group-hover:translate-x-2">Survey Research</h3>
        
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-6 font-['Inter'] transform transition-transform duration-300 group-hover:translate-x-1">Customer feedback, market studies, data collection &mdash; actionable insights from real people.</p>
        
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="px-4 py-2 bg-[#ceff66]/20 text-[#ceff66] text-xs rounded-full border border-[#ceff66]/30 font-medium backdrop-blur-sm hover:bg-[#ceff66]/30 transition-all duration-300">Data collection</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Market insights</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Customer feedback</span>
        </div>
        
        
      </div>
    </div>

    <!-- Card 8: Winback Programs - Premium Card -->
    <div class="reveal d2 group relative h-[550px] rounded-3xl overflow-hidden shadow-2xl hover:shadow-[0_40px_60px_-20px_rgba(206,255,102,0.5)] transition-all duration-700 hover:-translate-y-3">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?q=80&w=1000&auto=format&fit=crop" alt="Winback programs" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#ceff66]/20 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-700 mix-blend-overlay"></div>
        <div class="absolute bottom-0 left-0 w-0 h-1 bg-[#ceff66] group-hover:w-full transition-all duration-700 delay-300"></div>
      </div>
      
      <div class="relative h-full flex flex-col justify-end p-8 text-white">
        <div class="flex items-center justify-between mb-6">
          <div class="w-20 h-20 bg-gradient-to-br from-[#ceff66] to-[#a6e62c] rounded-2xl flex items-center justify-center shadow-2xl transform group-hover:scale-110 group-hover:rotate-6 group-hover:shadow-[#ceff66]/30 transition-all duration-500">
            <i class="fas fa-undo-alt text-3xl text-[#111]"></i>
          </div>
          <span class="text-7xl font-black text-white/10 group-hover:text-[#ceff66]/20 transition-all duration-500">08</span>
        </div>
        
        <h3 class="font-['Space_Grotesk'] text-3xl font-bold mb-3 group-hover:text-[#ceff66] transition-colors duration-300 transform group-hover:translate-x-2">Winback Programs</h3>
        
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-6 font-['Inter'] transform transition-transform duration-300 group-hover:translate-x-1">Re-engage lost customers, reduce churn, and recover revenue with tailored retention campaigns.</p>
        
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="px-4 py-2 bg-[#ceff66]/20 text-[#ceff66] text-xs rounded-full border border-[#ceff66]/30 font-medium backdrop-blur-sm hover:bg-[#ceff66]/30 transition-all duration-300">Retention</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Revenue recovery</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Churn reduction</span>
        </div>
        
        
      </div>
    </div>

    <!-- Card 9: Technical Support - Premium Card -->
    <div class="reveal d3 group relative h-[550px] rounded-3xl overflow-hidden shadow-2xl hover:shadow-[0_40px_60px_-20px_rgba(206,255,102,0.5)] transition-all duration-700 hover:-translate-y-3">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?q=80&w=1000&auto=format&fit=crop" alt="Technical support" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/95 via-black/70 to-transparent opacity-90 group-hover:opacity-95 transition-opacity duration-500"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#ceff66]/20 to-transparent opacity-0 group-hover:opacity-30 transition-opacity duration-700 mix-blend-overlay"></div>
        <div class="absolute bottom-0 left-0 w-0 h-1 bg-[#ceff66] group-hover:w-full transition-all duration-700 delay-300"></div>
      </div>
      
      <div class="relative h-full flex flex-col justify-end p-8 text-white">
        <div class="flex items-center justify-between mb-6">
          <div class="w-20 h-20 bg-gradient-to-br from-[#ceff66] to-[#a6e62c] rounded-2xl flex items-center justify-center shadow-2xl transform group-hover:scale-110 group-hover:-rotate-6 group-hover:shadow-[#ceff66]/30 transition-all duration-500">
            <i class="fas fa-laptop-code text-3xl text-[#111]"></i>
          </div>
          <span class="text-7xl font-black text-white/10 group-hover:text-[#ceff66]/20 transition-all duration-500">09</span>
        </div>
        
        <h3 class="font-['Space_Grotesk'] text-3xl font-bold mb-3 group-hover:text-[#ceff66] transition-colors duration-300 transform group-hover:translate-x-2">Technical Support</h3>
        
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-6 font-['Inter'] transform transition-transform duration-300 group-hover:translate-x-1">Tier 1/2 support, troubleshooting, IT helpdesk &mdash; fast, reliable, and multilingual.</p>
        
        <div class="flex flex-wrap gap-2 mb-6">
          <span class="px-4 py-2 bg-[#ceff66]/20 text-[#ceff66] text-xs rounded-full border border-[#ceff66]/30 font-medium backdrop-blur-sm hover:bg-[#ceff66]/30 transition-all duration-300">24/7 helpdesk</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Multi-lingual</span>
          <span class="px-4 py-2 bg-white/10 text-white text-xs rounded-full border border-white/20 font-medium backdrop-blur-sm hover:bg-white/20 transition-all duration-300">Tier 1/2 support</span>
        </div>
        
        
      </div>
    </div>
  </div>

  <!-- Enhanced CTA Button -->
  <div class="reveal text-center mt-20 relative z-10">
    <a href="#contact" class="group inline-flex items-center gap-4 bg-gradient-to-r from-[#111] to-[#222] text-white rounded-full px-10 py-5 text-base font-bold hover:from-[#ceff66] hover:to-[#a6e62c] hover:text-[#111] transition-all duration-500 shadow-2xl hover:shadow-[0_20px_40px_-10px_rgba(206,255,102,0.5)] transform hover:-translate-y-1 font-['Inter']">
      <span class="relative">
        Need a custom solution?
        <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-[#ceff66] group-hover:w-full transition-all duration-500 group-hover:bg-[#111]"></span>
      </span>
      <i class="fas fa-arrow-right text-sm group-hover:translate-x-2 transition-transform duration-300"></i>
    </a>
  </div>
</section>

<!-- ========== WHY CHOOSE US ========== -->
<div class="w-full bg-[#111] py-20 lg:py-28 relative overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_50%,rgba(206,255,102,0.03)_0%,transparent_50%)]"></div>
  <div class="absolute top-40 right-20 w-72 h-72 border border-[#ceff66]/10 rounded-full"></div>
  <div class="absolute bottom-40 left-20 w-96 h-96 border border-[#ceff66]/5 rounded-full"></div>

  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 relative z-10">
    <div class="text-center max-w-2xl mx-auto mb-16 lg:mb-20">
      <div class="inline-flex items-center gap-3 text-[#ceff66] text-[0.7rem] font-bold tracking-[0.28em] uppercase mb-4 font-['Inter']">
        <span class="w-8 h-px bg-[#ceff66]"></span>
        why choose us
        <span class="w-8 h-px bg-[#ceff66]"></span>
      </div>
      <h2 class="font-['Space_Grotesk'] text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight">
        The <span class="text-[#ceff66]">OneStop</span> advantage
      </h2>
      <p class="text-white/40 text-sm md:text-base max-w-lg mx-auto mt-4 font-['Inter']">A decade of human-centered excellence</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
      <div class="space-y-10">
        <div class="reveal group flex gap-5">
          <div class="flex-shrink-0 w-12 h-12 bg-[#ceff66]/10 rounded-xl flex items-center justify-center group-hover:bg-[#ceff66]/20 transition-colors duration-300">
            <span class="font-['Space_Grotesk'] text-xl font-bold text-[#ceff66]">01</span>
          </div>
          <div>
            <h3 class="font-['Space_Grotesk'] text-xl font-bold text-white mb-2">A decade of excellence</h3>
            <p class="text-white/40 text-sm leading-relaxed font-['Inter']">Serving clients since 2014 with consistent, reliable, and human-powered solutions that stand the test of time.</p>
          </div>
        </div>
        <div class="reveal d2 group flex gap-5">
          <div class="flex-shrink-0 w-12 h-12 bg-[#ceff66]/10 rounded-xl flex items-center justify-center group-hover:bg-[#ceff66]/20 transition-colors duration-300">
            <span class="font-['Space_Grotesk'] text-xl font-bold text-[#ceff66]">02</span>
          </div>
          <div>
            <h3 class="font-['Space_Grotesk'] text-xl font-bold text-white mb-2">Human-first approach</h3>
            <p class="text-white/40 text-sm leading-relaxed font-['Inter']">Real people, real conversations. We believe in the power of human connection over automated responses.</p>
          </div>
        </div>
        <div class="reveal d3 group flex gap-5">
          <div class="flex-shrink-0 w-12 h-12 bg-[#ceff66]/10 rounded-xl flex items-center justify-center group-hover:bg-[#ceff66]/20 transition-colors duration-300">
            <span class="font-['Space_Grotesk'] text-xl font-bold text-[#ceff66]">03</span>
          </div>
          <div>
            <h3 class="font-['Space_Grotesk'] text-xl font-bold text-white mb-2">Proven methodology</h3>
            <p class="text-white/40 text-sm leading-relaxed font-['Inter']">Refined over 10+ years of hands-on experience, our processes deliver results through expertise, not algorithms.</p>
          </div>
        </div>
        <div class="reveal d4 mt-8 pt-6 border-t border-white/5">
          <p class="text-white/30 text-sm italic leading-relaxed font-['Inter']">"Ten years of building relationships, not just transactions. Every client is a partnership, every solution is crafted by humans."</p>
          <div class="flex items-center gap-2 mt-3">
            <div class="w-6 h-px bg-[#ceff66]/30"></div>
            <span class="text-[#ceff66]/50 text-xs font-medium font-['Inter']">OneStop leadership</span>
          </div>
        </div>
      </div>

      <div class="space-y-6">
        <div class="grid grid-cols-2 gap-4">
          <div class="reveal bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/5 hover:border-[#ceff66]/20 transition-colors">
            <div class="font-['Space_Grotesk'] text-3xl font-bold text-[#ceff66] mb-1">10+</div>
            <div class="text-white/40 text-xs uppercase tracking-wider font-['Inter']">years serving</div>
            <div class="w-8 h-0.5 bg-[#ceff66]/30 mt-3"></div>
          </div>
          <div class="reveal d2 bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/5 hover:border-[#ceff66]/20 transition-colors">
            <div class="font-['Space_Grotesk'] text-3xl font-bold text-[#ceff66] mb-1">100%</div>
            <div class="text-white/40 text-xs uppercase tracking-wider font-['Inter']">human-powered</div>
            <div class="w-8 h-0.5 bg-[#ceff66]/30 mt-3"></div>
          </div>
        </div>
        <div class="reveal d3 bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/5">
          <h4 class="text-white/70 text-sm font-medium mb-4 font-['Space_Grotesk']">Our expertise</h4>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1.5 bg-[#ceff66]/10 text-[#ceff66] text-xs rounded-full border border-[#ceff66]/20 font-['Inter']">Multi-channel support</span>
            <span class="px-3 py-1.5 bg-white/5 text-white/60 text-xs rounded-full border border-white/10 font-['Inter']">Dedicated teams</span>
            <span class="px-3 py-1.5 bg-white/5 text-white/60 text-xs rounded-full border border-white/10 font-['Inter']">Quality assurance</span>
            <span class="px-3 py-1.5 bg-white/5 text-white/60 text-xs rounded-full border border-white/10 font-['Inter']">24/7 live support</span>
            <span class="px-3 py-1.5 bg-white/5 text-white/60 text-xs rounded-full border border-white/10 font-['Inter']">Experienced agents</span>
            <span class="px-3 py-1.5 bg-white/5 text-white/60 text-xs rounded-full border border-white/10 font-['Inter']">Real-time reporting</span>
          </div>
        </div>
        <div class="reveal d4 grid grid-cols-2 gap-4 mt-4">
          <div class="text-center p-4">
            <div class="font-['Space_Grotesk'] text-2xl font-bold text-[#ceff66]">2014</div>
            <div class="text-white/30 text-xs uppercase tracking-wider mt-1 font-['Inter']">founded</div>
          </div>
          <div class="text-center p-4">
            <div class="font-['Space_Grotesk'] text-2xl font-bold text-[#ceff66]">98%</div>
            <div class="text-white/30 text-xs uppercase tracking-wider mt-1 font-['Inter']">retention</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== DARK COMMITMENT ========== -->
<section class="bg-[#0f0f0f] py-16 md:py-24 relative overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_30%_50%,rgba(206,255,102,0.07)_0%,transparent_65%)]"></div>
  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 relative z-10 text-center">
    <div class="reveal inline-flex items-center gap-[10px] text-[#ceff66] text-[0.7rem] font-semibold tracking-[0.28em] uppercase mb-4 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66] font-['Inter']">
      service philosophy
    </div>
    <h2 class="reveal d1 font-['Space_Grotesk'] text-[clamp(1.8rem,4vw,3.2rem)] font-bold text-white max-w-3xl mx-auto leading-tight">
      Every service is a <span class="text-[#ceff66]">touchpoint</span> to build loyalty
    </h2>
    <p class="reveal d2 text-white/55 text-lg max-w-2xl mx-auto mt-6 font-['Inter']">
      From the first inbound call to winback campaigns &mdash; we treat each interaction as an opportunity to exceed expectations.
    </p>
  </div>
</section>

<!-- ========== CTA ========== -->
<section class="bg-[#faf9f7] py-16 md:py-28" id="contact">
  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="reveal bg-black text-white rounded-2xl md:rounded-3xl px-6 py-12 sm:p-12 md:p-16 lg:p-20 relative overflow-hidden">
      <div class="absolute -right-10 -top-10 w-64 h-64 rounded-full blur-3xl pointer-events-none bg-[rgba(206,255,102,0.08)]"></div>
      <div class="relative z-20 max-w-3xl">
        <div class="flex items-center gap-[10px] text-[#ceff66] text-[0.7rem] font-semibold tracking-[0.28em] uppercase mb-5 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66] font-['Inter']">
          start today
        </div>
        <h2 class="font-['Space_Grotesk'] text-[clamp(2rem,6vw,3.8rem)] font-bold leading-[1.08] text-white mb-4">
          Ready to scale with OneStop?
        </h2>
        <p class="text-white/55 text-base md:text-lg max-w-[500px] leading-relaxed mb-8 font-['Inter']">
          Let's align our services to your goals. Inbound, outbound, digital, or technical support &mdash; we deliver.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="contact.php" class="inline-flex items-center gap-2 rounded-full px-6 py-3 sm:px-8 sm:py-4 text-sm sm:text-base font-semibold text-neutral-900 bg-gradient-to-br from-[#c5f467] to-[#a6e62c] hover:from-[#b3e04e] hover:to-[#93cd25] transition-all duration-300 shadow-2xl hover:-translate-y-0.5 font-['Inter']">
            Contact us <i class="fas fa-arrow-right text-sm"></i>
          </a>
          <a href="tel:+923361369929" class="inline-flex items-center gap-2 border border-white/25 rounded-full px-6 py-3 sm:px-8 sm:py-4 text-sm sm:text-base font-medium text-white hover:bg-white/10 transition-all font-['Inter']">
            0336 1369929
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php @include('footer.php'); ?>

<!-- ========== JAVASCRIPT ========== -->
<script>
  // ── Scroll progress + navbar hide/show ──────────────────────────────────
  const progressBar   = document.getElementById('scroll-progress');
  const navbarWrapper = document.getElementById('navbar-wrapper');
  let lastScrollY = 0;
  let ticking     = false;

  function handleNavbarScroll() {
    const y = window.scrollY;
    if (y <= 10) {
      navbarWrapper.classList.remove('nav-hidden');
    } else if (y > lastScrollY + 5) {
      navbarWrapper.classList.add('nav-hidden');
    } else if (y < lastScrollY - 5) {
      navbarWrapper.classList.remove('nav-hidden');
    }
    lastScrollY = y;
    ticking = false;
  }

  window.addEventListener('scroll', () => {
    const s = window.scrollY;
    const m = document.documentElement.scrollHeight - window.innerHeight;
    progressBar.style.width = (s / m * 100) + '%';
    if (!ticking) { requestAnimationFrame(handleNavbarScroll); ticking = true; }
  }, { passive: true });

  // ── Reveal on scroll ─────────────────────────────────────────────────────
  const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(en => {
      if (en.isIntersecting) { en.target.classList.add('visible'); revealObs.unobserve(en.target); }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
  revealEls.forEach(el => revealObs.observe(el));

  document.querySelectorAll('.d1').forEach(el => el.style.transitionDelay = '0.08s');
  document.querySelectorAll('.d2').forEach(el => el.style.transitionDelay = '0.18s');
  document.querySelectorAll('.d3').forEach(el => el.style.transitionDelay = '0.28s');
  document.querySelectorAll('.d4').forEach(el => el.style.transitionDelay = '0.38s');
</script>
</body>
</html>