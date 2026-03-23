<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Why Outsource — OneStop Solutions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
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
    @keyframes trace-flow {
      0% { stroke-dashoffset: 1000; opacity: 0.15; }
      50% { opacity: 0.55; }
      100% { stroke-dashoffset: 0; opacity: 0.15; }
    }
    @keyframes dot-pulse {
      0%, 100% { r: 3; opacity: 0.4; }
      50% { r: 5; opacity: 1; }
    }
    @keyframes chip-glow {
      0%, 100% { opacity: 0.15; }
      50% { opacity: 0.4; }
    }

    .pcb-trace { stroke-dasharray: 1000; stroke-dashoffset: 1000; animation: trace-flow 6s linear infinite; }
    .pcb-trace-2 { animation-delay: 1.2s; animation-duration: 7s; }
    .pcb-trace-3 { animation-delay: 2.4s; animation-duration: 5.5s; }
    .pcb-trace-4 { animation-delay: 0.6s; animation-duration: 8s; }
    .pcb-trace-5 { animation-delay: 3s; animation-duration: 6.5s; }
    .pcb-trace-6 { animation-delay: 1.8s; animation-duration: 7.5s; }
    .pcb-trace-7 { animation-delay: 0.3s; animation-duration: 9s; }
    .pcb-trace-8 { animation-delay: 4s; animation-duration: 5s; }
    .pcb-dot { animation: dot-pulse 3s ease-in-out infinite; }
    .pcb-dot-2 { animation-delay: 0.5s; }
    .pcb-dot-3 { animation-delay: 1s; }
    .pcb-dot-4 { animation-delay: 1.5s; }
    .pcb-dot-5 { animation-delay: 2s; }
    .pcb-chip { animation: chip-glow 4s ease-in-out infinite; }
    .pcb-chip-2 { animation-delay: 2s; }

    .reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal-left { opacity: 0; transform: translateX(-60px); transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal-right { opacity: 0; transform: translateX(60px); transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal.visible, .reveal-left.visible, .reveal-right.visible { opacity: 1; transform: translate(0); }

    .d1 { transition-delay: 0.08s; }
    .d2 { transition-delay: 0.18s; }
    .d3 { transition-delay: 0.28s; }
    .d4 { transition-delay: 0.38s; }
    .d5 { transition-delay: 0.48s; }

    .gradient-text {
      background: linear-gradient(135deg, #000 0%, #4f9eff 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(79, 158, 255, 0.2);
    }
    .benefit-card-modern {
      position: relative;
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.3, 1);
      transform-style: preserve-3d;
      perspective: 1000px;
    }
    .benefit-card-modern:hover {
      transform: translateY(-8px) rotateX(2deg);
      box-shadow: 0 30px 50px -20px rgba(79, 158, 255, 0.3);
    }
    .float { animation: float 6s ease-in-out infinite; }
    .pulse-glow { animation: pulse-glow 4s ease-in-out infinite; }
    .rotate-slow { animation: rotate-slow 20s linear infinite; }

    body {
      padding-top: 0;
      font-family: 'Inter', sans-serif;
    }

    h1, h2, h3, h4, h5, h6, .font-heading {
      font-family: 'Space Grotesk', sans-serif;
    }

    .animation-delay-1000 { animation-delay: 1s; }
    .animation-delay-2000 { animation-delay: 2s; }

    /* =============================================
       NAVBAR HIDE-ON-SCROLL
       ============================================= */
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

    /* Blue accent utilities */
    .bg-accent { background-color: #4f9eff; }
    .text-accent { color: #4f9eff; }
    .border-accent { border-color: #4f9eff; }
    .hover\:bg-accent:hover { background-color: #4f9eff; }
    .hover\:text-accent:hover { color: #4f9eff; }
    .from-accent { --tw-gradient-from: #4f9eff; }
  </style>
</head>
<body class="antialiased bg-white text-[#111] overflow-x-hidden">

<!-- Scroll Progress -->
<div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] bg-[#4f9eff] z-[9999] duration-100 shadow-[0_0_20px_rgba(79,158,255,0.8)]"></div>

<!-- ========== NAVBAR ========== -->
<div id="navbar-wrapper">
  <?php @include('navbar.php') ?>
</div>

<!-- ========== HERO ========== -->
<!-- ========== HERO ========== -->
<section class="relative z-0 min-h-[50vh] flex items-center justify-center overflow-hidden bg-[#0a0f1e] pt-20">
  <!-- Background Image -->
  <div class="absolute inset-0 z-0">
    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=2070&auto=format&fit=crop"
         alt="Modern call centre with professionals working on headsets providing BPO and outsourcing services"
         class="w-full h-full object-cover opacity-30"
         width="2070" height="1380"
         loading="eager"
         decoding="async">
    <div class="absolute inset-0 bg-gradient-to-b from-[#0a0f1e]/80 via-[#0a0f1e]/60 to-[#0a0f1e]/80" aria-hidden="true"></div>
  </div>
  
  <!-- Blue radial glow replacing lime -->
  <div class="absolute bottom-0 right-0 w-[800px] h-[800px] bg-[radial-gradient(circle_at_bottom_right,_#4f9eff_0%,_transparent_70%)] opacity-40 pointer-events-none z-0"></div>
  <div class="absolute inset-0 opacity-5 pointer-events-none z-0" style="background-image:url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M0 0 L60 0 L60 60 L0 60 Z&quot; fill=&quot;none&quot; stroke=&quot;rgba(255,255,255,0.1)&quot; stroke-width=&quot;1&quot;/%3E%3C/svg%3E');"></div>

  <div class="relative z-10 text-center px-5 sm:px-8 md:px-12 lg:px-24 py-20 md:py-28">
    <div class="reveal inline-flex items-center gap-3 px-4 py-2 bg-white/15 backdrop-blur-sm rounded-full border border-white/30 mb-6">
      <span class="w-2 h-2 bg-[#4f9eff] rounded-full animate-pulse"></span>
      <span class="text-white/85 text-sm font-medium tracking-wider font-['Inter']">WHY OUTSOURCE</span>
    </div>
    <h1 class="reveal d1 font-['Space_Grotesk'] font-bold text-6xl md:text-7xl lg:text-8xl xl:text-9xl text-white leading-[1.1] tracking-[-0.03em] mb-6">
      Outsource <span class="text-[#4f9eff]">Smarter</span>
    </h1>
    <p class="reveal d2 text-white/70 text-xl max-w-2xl mx-auto font-['Inter']">
      12+ years of excellence, 60% average cost savings, and 24/7 dedicated support.
    </p>
  </div>
</section>

<!-- ========== WHO WE ARE ========== -->
<section class="relative py-32 bg-white overflow-hidden">
  <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#4f9eff]/10 rounded-full blur-[120px]"></div>
  <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-blue-200/30 rounded-full blur-[100px]"></div>

  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
      <div class="reveal-left">
        <span class="text-[#4f9eff] text-sm font-semibold tracking-[0.3em] uppercase mb-6 block font-['Inter']">12+ years of excellence</span>
        <h2 class="font-['Space_Grotesk'] text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] tracking-[-0.02em] text-[#111] mb-8">
          Telemarketing &<br>
          <span class="text-[#4f9eff]">BPO specialists</span><br>
          you can trust
        </h2>
        <p class="text-gray-600 text-lg leading-relaxed mb-6 font-['Inter']">
          OneStop Solutions has been operating in the telemarketing and BPO industry for more than 7 years now. Our customer service representatives are thoroughly trained for handling both outbound as well as inbound calls, including chat support.
        </p>
        <p class="text-gray-500 text-base leading-relaxed mb-8 font-['Inter']">
          In addition, we've also employed countless experts working as virtual assistants providing back-office solutions for organizations of every size and sector.
        </p>
        <div class="flex flex-wrap gap-3">
          <span class="px-4 py-2 bg-gray-100 border border-[#4f9eff]/50 rounded-full text-sm text-gray-700 hover:bg-[#4f9eff] hover:text-white transition-all duration-300 cursor-default font-['Inter']">Outbound Calls</span>
          <span class="px-4 py-2 bg-gray-100 border border-[#4f9eff]/50 rounded-full text-sm text-gray-700 hover:bg-[#4f9eff] hover:text-white transition-all duration-300 cursor-default font-['Inter']">Inbound Support</span>
          <span class="px-4 py-2 bg-gray-100 border border-[#4f9eff]/50 rounded-full text-sm text-gray-700 hover:bg-[#4f9eff] hover:text-white transition-all duration-300 cursor-default font-['Inter']">Chat Support</span>
          <span class="px-4 py-2 bg-gray-100 border border-[#4f9eff]/50 rounded-full text-sm text-gray-700 hover:bg-[#4f9eff] hover:text-white transition-all duration-300 cursor-default font-['Inter']">Virtual Assistants</span>
          <span class="px-4 py-2 bg-gray-100 border border-[#4f9eff]/50 rounded-full text-sm text-gray-700 hover:bg-[#4f9eff] hover:text-white transition-all duration-300 cursor-default font-['Inter']">Back-Office Solutions</span>
        </div>
      </div>

      <div class="reveal-right">
        <div class="grid grid-cols-2 gap-4">
          <div class="space-y-4">
            <div class="relative overflow-hidden rounded-3xl aspect-square group">
              <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=800&auto=format&fit=crop" alt="Team" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white">
                <div class="text-2xl font-bold font-['Space_Grotesk']" style="text-shadow: 3px 3px 8px rgba(0,0,0,0.9), 0px 0px 12px rgba(0,0,0,50);">50+</div>
                <div class="text-xs text-white/60 font-['Inter']" style="text-shadow: 2px 2px 5px rgba(0,0,0,0.9), 0px 0px 8px rgba(0,0,0,1);">Team Members</div>
              </div>
            </div>
            <div class="relative overflow-hidden rounded-3xl aspect-square group">
              <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=800&auto=format&fit=crop" alt="Support" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white">
                <div class="text-2xl font-bold font-['Space_Grotesk']" style="text-shadow: 3px 3px 8px rgba(0,0,0,0.9), 0px 0px 12px rgba(0,0,0,1);">24/7</div>
                <div class="text-xs text-white/60 font-['Inter']" style="text-shadow: 2px 2px 5px rgba(0,0,0,0.9), 0px 0px 8px rgba(0,0,0,1);">Coverage</div>
              </div>
            </div>
          </div>
          <div class="mt-8 space-y-4">
            <div class="relative overflow-hidden rounded-3xl aspect-square group">
              <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800&auto=format&fit=crop" alt="Meeting" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white">
                <div class="text-2xl font-bold font-['Space_Grotesk']" style="text-shadow: 3px 3px 8px rgba(0,0,0,0.9), 0px 0px 12px rgba(0,0,0,0.8);">98%</div>
                <div class="text-xs text-white/60 font-['Inter']" style="text-shadow: 2px 2px 5px rgba(0,0,0,0.9), 0px 0px 8px rgba(0,0,0,0.7);">Satisfaction</div>
              </div>
            </div>
            <div class="relative overflow-hidden rounded-3xl aspect-square bg-[#4f9eff] flex items-center justify-center group hover:scale-105 transition-transform">
              <div class="text-center">
                <div class="text-5xl font-bold text-white mb-2 font-['Space_Grotesk']" style="text-shadow: 4px 4px 10px rgba(0,0,0,0.8), 0px 0px 15px rgba(0,0,0,0.7);">12+</div>
                <div class="text-sm text-white/80 font-['Inter']" style="text-shadow: 2px 2px 6px rgba(0,0,0,0.8), 0px 0px 10px rgba(0,0,0,0.6);">Years Strong</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== BENEFITS SECTION ========== -->
<section class="relative py-32 bg-gray-50 overflow-hidden" id="benefits">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-20 left-20 w-96 h-96 bg-[#4f9eff] rounded-full blur-[100px] animate-pulse"></div>
    <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-600 rounded-full blur-[100px] animate-pulse animation-delay-1000"></div>
  </div>

  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20 relative z-10">
    <div class="text-center mb-20">
      <span class="text-[#4f9eff] text-sm font-semibold tracking-[0.3em] uppercase mb-4 block font-['Inter']">Why Outsource</span>
      <h2 class="font-['Space_Grotesk'] text-5xl md:text-6xl lg:text-7xl font-bold text-[#111] mb-6">
        Six <span class="text-[#4f9eff]">powerful</span><br>
        reasons to partner
      </h2>
      <p class="text-gray-500 text-lg max-w-2xl mx-auto font-['Inter']">Lower costs, better management, and greater agility — all in one strategic partnership.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="benefit-card-modern group relative bg-white rounded-[32px] p-8 border border-gray-200 hover:border-[#4f9eff] shadow-lg hover:shadow-xl transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-gray-100 font-['Space_Grotesk']">01</div>
        <div class="w-16 h-16 bg-[#4f9eff] rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
          <i class="fas fa-piggy-bank text-2xl text-white"></i>
        </div>
        <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-[#111] mb-3">Serious Savings</h3>
        <p class="text-gray-500 text-sm leading-relaxed font-['Inter']">A lower cost structure and reduced operating costs bolster your competitive advantage, allowing you to focus funds on core items.</p>
      </div>

      <div class="benefit-card-modern group relative bg-white rounded-[32px] p-8 border border-gray-200 hover:border-[#4f9eff] shadow-lg hover:shadow-xl transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-gray-100 font-['Space_Grotesk']">02</div>
        <div class="w-16 h-16 bg-[#4f9eff] rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
          <i class="fas fa-users-gear text-2xl text-white"></i>
        </div>
        <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-[#111] mb-3">Flexible Staffing</h3>
        <p class="text-gray-500 text-sm leading-relaxed font-['Inter']">Outsourcing makes it easy to bring in expert resources for seasonal or cyclical operations — scale up or down on demand.</p>
      </div>

      <div class="benefit-card-modern group relative bg-white rounded-[32px] p-8 border border-gray-200 hover:border-[#4f9eff] shadow-lg hover:shadow-xl transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-gray-100 font-['Space_Grotesk']">03</div>
        <div class="w-16 h-16 bg-[#4f9eff] rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
          <i class="fas fa-star text-2xl text-white"></i>
        </div>
        <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-[#111] mb-3">Excellent Management</h3>
        <p class="text-gray-500 text-sm leading-relaxed font-['Inter']">OneStop's highly trained team brings high-calibre management skills to the table — for a much lower price tag than in-house hires.</p>
      </div>

      <div class="benefit-card-modern group relative bg-white rounded-[32px] p-8 border border-gray-200 hover:border-[#4f9eff] shadow-lg hover:shadow-xl transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-gray-100 font-['Space_Grotesk']">04</div>
        <div class="w-16 h-16 bg-[#4f9eff] rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
          <i class="fas fa-shield-halved text-2xl text-white"></i>
        </div>
        <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-[#111] mb-3">Continuity & Risk</h3>
        <p class="text-gray-500 text-sm leading-relaxed font-['Inter']">In industries with high employee turnover, outsourcing with OneStop provides continuity, consistency, and peace of mind.</p>
      </div>

      <div class="benefit-card-modern group relative bg-white rounded-[32px] p-8 border border-gray-200 hover:border-[#4f9eff] shadow-lg hover:shadow-xl transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-gray-100 font-['Space_Grotesk']">05</div>
        <div class="w-16 h-16 bg-[#4f9eff] rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
          <i class="fas fa-bolt text-2xl text-white"></i>
        </div>
        <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-[#111] mb-3">Greater Agility</h3>
        <p class="text-gray-500 text-sm leading-relaxed font-['Inter']">Having a support infrastructure in place makes it easier to deal with change — and stay decisively ahead of the competition.</p>
      </div>

      <div class="benefit-card-modern group relative bg-[#4f9eff] rounded-[32px] p-8 border-2 border-[#4f9eff] hover:shadow-[0_20px_40px_-15px_rgba(79,158,255,0.5)] transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-white/10 font-['Space_Grotesk']">06</div>
        <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-file-invoice text-2xl text-[#4f9eff]"></i>
        </div>
        <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-white mb-3">Free Proposal</h3>
        <p class="text-white/80 text-sm leading-relaxed mb-6 font-['Inter']">Get a FREE customised proposal specific to your requirement, technology and tenure of the project.</p>
        <a href="#contact" class="inline-flex items-center gap-2 bg-white text-[#4f9eff] rounded-full px-6 py-3 text-sm font-semibold hover:bg-gray-100 transition-all group-hover:gap-3 font-['Inter']">
          Get started <i class="fas fa-arrow-right text-xs"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ========== STATS SECTION ========== -->
<section class="relative py-32 bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="reveal d1 text-center group">
        <div class="text-7xl font-['Space_Grotesk'] font-bold text-[#4f9eff] mb-3 group-hover:scale-110 transition-transform">98%</div>
        <div class="text-gray-500 text-sm uppercase tracking-wider font-['Inter']">Client Retention</div>
        <div class="w-0 group-hover:w-20 h-0.5 bg-[#4f9eff] mx-auto mt-4 transition-all duration-500"></div>
      </div>
      <div class="reveal d2 text-center group">
        <div class="text-7xl font-['Space_Grotesk'] font-bold text-[#4f9eff] mb-3 group-hover:scale-110 transition-transform">50+</div>
        <div class="text-gray-500 text-sm uppercase tracking-wider font-['Inter']">Global Clients</div>
        <div class="w-0 group-hover:w-20 h-0.5 bg-[#4f9eff] mx-auto mt-4 transition-all duration-500"></div>
      </div>
      <div class="reveal d3 text-center group">
        <div class="text-7xl font-['Space_Grotesk'] font-bold text-[#4f9eff] mb-3 group-hover:scale-110 transition-transform">24/7</div>
        <div class="text-gray-500 text-sm uppercase tracking-wider font-['Inter']">Coverage</div>
        <div class="w-0 group-hover:w-20 h-0.5 bg-[#4f9eff] mx-auto mt-4 transition-all duration-500"></div>
      </div>
      <div class="reveal d4 text-center group">
        <div class="text-7xl font-['Space_Grotesk'] font-bold text-[#4f9eff] mb-3 group-hover:scale-110 transition-transform">100%</div>
        <div class="text-gray-500 text-sm uppercase tracking-wider font-['Inter']">Custom Solutions</div>
        <div class="w-0 group-hover:w-20 h-0.5 bg-[#4f9eff] mx-auto mt-4 transition-all duration-500"></div>
      </div>
    </div>
  </div>
</section>

<!-- ========== QUOTE SECTION ========== -->
<section class="relative py-32 bg-gray-50 overflow-hidden">
  <div class="absolute inset-0">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-[#4f9eff]/20 rounded-full"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-[#4f9eff]/40 rounded-full"></div>
  </div>
  <div class="max-w-4xl mx-auto px-5 text-center relative z-10">
    <div class="text-8xl text-[#4f9eff] mb-8 font-bold font-['Space_Grotesk']">*</div>
    <p class="font-['Space_Grotesk'] text-3xl md:text-4xl lg:text-5xl font-bold text-[#111] leading-[1.2] mb-8">
      We handle the intricate, repetitious tasks — so you can focus on the
      <span class="text-[#4f9eff]">big picture.</span>
    </p>
    <div class="flex items-center justify-center gap-4">
      <div class="text-left">
        <div class="font-semibold text-[#111] font-['Space_Grotesk']">Founder & CEO</div>
        <div class="text-gray-500 text-sm font-['Inter']">OneStop Solutions</div>
      </div>
    </div>
  </div>
</section>

<!-- ========== CTA SECTION ========== -->
<section class="relative py-32 bg-[#0a0f1e]" id="contact">
  <div class="max-w-6xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="relative glass-card rounded-[48px] p-12 md:p-20 overflow-hidden border border-[#4f9eff]/20">
      <div class="absolute -top-40 -right-40 w-80 h-80 bg-[#4f9eff] rounded-full blur-[100px] opacity-20 animate-pulse"></div>
      <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-blue-600 rounded-full blur-[100px] opacity-20 animate-pulse animation-delay-2000"></div>
      <div class="relative z-10 text-center">
        <span class="text-[#4f9eff] text-sm font-semibold tracking-[0.3em] uppercase mb-4 block font-['Inter']">Ready to outsource?</span>
        <h2 class="font-['Space_Grotesk'] text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
          Get your free, custom<br>
          <span class="text-[#4f9eff]">proposal today.</span>
        </h2>
        <p class="text-white/40 text-lg max-w-2xl mx-auto mb-12 font-['Inter']">
          We can work up a FREE customised proposal specific to your requirement, technology and tenure of the project. No obligation, just clarity.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="contact.php" class="group inline-flex items-center gap-3 rounded-full px-8 py-4 bg-[#4f9eff] text-white font-semibold text-lg hover:scale-105 transition-all duration-300 hover:shadow-[0_20px_30px_-10px_rgba(79,158,255,0.5)] font-['Inter']">
            Request free proposal
            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
          </a>
          <a href="about.html" class="group inline-flex items-center gap-3 rounded-full px-8 py-4 border border-white/20 text-white font-semibold text-lg hover:border-[#4f9eff] transition-all font-['Inter']">
            Learn about us
            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== FOOTER ========== -->
<?php @include('footer.php') ?>

<!-- ========== JAVASCRIPT ========== -->
<script>
  // ── Scroll progress bar ──────────────────────────────────────────────────
  const progressBar    = document.getElementById('scroll-progress');
  const navbarWrapper  = document.getElementById('navbar-wrapper');

  let lastScrollY = 0;
  let ticking     = false;

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
    progressBar.style.width = (s / m * 100) + '%';

    if (!ticking) {
      requestAnimationFrame(handleNavbarScroll);
      ticking = true;
    }
  }, { passive: true });

  // ── Reveal on scroll ─────────────────────────────────────────────────────
  const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(en => {
      if (en.isIntersecting) { en.target.classList.add('visible'); revealObs.unobserve(en.target); }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
  revealEls.forEach(el => revealObs.observe(el));
</script>

</body>
</html>