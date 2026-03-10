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

    /* PCB trace pulse animation (kept, but might be removed if not needed) */
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

    .pcb-trace {
      stroke-dasharray: 1000;
      stroke-dashoffset: 1000;
      animation: trace-flow 6s linear infinite;
    }
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
      background: linear-gradient(135deg, #000 0%, #ceff66 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(206, 255, 102, 0.1);
    }
    .benefit-card-modern {
      position: relative;
      transition: all 0.4s cubic-bezier(0.2, 0.9, 0.3, 1);
      transform-style: preserve-3d;
      perspective: 1000px;
    }
    .benefit-card-modern:hover {
      transform: translateY(-8px) rotateX(2deg);
      box-shadow: 0 30px 50px -20px rgba(206, 255, 102, 0.3);
    }
    .float { animation: float 6s ease-in-out infinite; }
    .pulse-glow { animation: pulse-glow 4s ease-in-out infinite; }
    .rotate-slow { animation: rotate-slow 20s linear infinite; }

    body { 
      padding-top: 0;
      font-family: 'Inter', sans-serif;
    }
    
    h1, h2, h3, h4, h5, h6, 
    .font-heading {
      font-family: 'Space Grotesk', sans-serif;
    }

    .animation-delay-1000 { animation-delay: 1s; }
    .animation-delay-2000 { animation-delay: 2s; }
  </style>
</head>
<body class="antialiased bg-white text-[#111] overflow-x-hidden">

<!-- Scroll Progress -->
<div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] bg-[#ceff66] z-[9999] duration-100 shadow-[0_0_20px_rgba(206,255,102,0.8)]"></div>

<!-- ========== NAVBAR ========== -->
<div class="fixed top-0 left-0 right-0 z-50">
<?php @include('navbar.php') ?>
</div>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden fixed top-16 left-0 right-0 bg-[rgba(0,0,0,0.95)] backdrop-blur-[20px] px-8 py-6 z-50 border-t border-[#ceff66]/10">
  <a href="index.html" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all font-['Inter']">Home</a>
  <a href="about.html" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all font-['Inter']">About</a>
  <a href="#" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all font-['Inter']">Services</a>
  <a href="why-outsource.html" class="block font-medium text-[#ceff66] text-lg py-3 border-b border-white/5 font-['Inter']">Why Outsource</a>
  <a href="#contact" class="block font-medium text-white/70 text-lg py-3 hover:text-[#ceff66] hover:pl-2 transition-all font-['Inter']">Get in touch →</a>
</div>

<!-- ========== HERO — pitch‑dark background with round gradient ========== -->
<!-- Fixed navbar overlap issue by removing -mt-[80px] and adding pt for fixed navbar -->
<section class="relative z-0 min-h-[50vh] flex items-center justify-center overflow-hidden bg-black pt-20">

  <!-- round (radial) accent gradient at bottom right -->
  <div class="absolute bottom-0 right-0 w-[800px] h-[800px] bg-[radial-gradient(circle_at_bottom_right,_#ceff66_0%,_transparent_70%)] opacity-40 pointer-events-none"></div>

  <!-- Subtle static grid overlay (barely visible) -->
  <div class="absolute inset-0 opacity-5 pointer-events-none" style="background-image:url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M0 0 L60 0 L60 60 L0 60 Z&quot; fill=&quot;none&quot; stroke=&quot;rgba(255,255,255,0.1)&quot; stroke-width=&quot;1&quot;/%3E%3C/svg%3E');"></div>

  <!-- Main content — all text white, with lime accent -->
  <div class="relative z-10 text-center px-5 sm:px-8 md:px-12 lg:px-24 py-20 md:py-28">
    <div class="reveal inline-flex items-center gap-3 px-4 py-2 bg-white/15 backdrop-blur-sm rounded-full border border-white/30 mb-6">
      <span class="w-2 h-2 bg-[#ceff66] rounded-full animate-pulse"></span>
      <span class="text-white/85 text-sm font-medium tracking-wider font-['Inter']">WHY OUTSOURCE</span>
    </div>

    <h1 class="reveal d1 font-['Space_Grotesk'] font-bold text-6xl md:text-7xl lg:text-8xl xl:text-9xl text-white leading-[1.1] tracking-[-0.03em] mb-6">
      Outsource <span class="text-[#ceff66]">Smarter</span>
    </h1>

    <p class="reveal d2 text-white/70 text-xl max-w-2xl mx-auto font-['Inter']">
      7+ years of excellence, 60% average cost savings, and 24/7 dedicated support.
    </p>
  </div>

</section>

<!-- ========== WHO WE ARE - MODERN SPLIT LAYOUT (White Background) ========== -->
<section class="relative py-32 bg-white overflow-hidden">
  <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#ceff66]/10 rounded-full blur-[120px]"></div>
  <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-purple-200/30 rounded-full blur-[100px]"></div>

  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
      <div class="reveal-left">
        <span class="text-[#ceff66] text-sm font-semibold tracking-[0.3em] uppercase mb-6 block font-['Inter']">7+ years of excellence</span>
        <h2 class="font-['Space_Grotesk'] text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.1] tracking-[-0.02em] text-[#111] mb-8">
          Telemarketing &<br>
          <span class="text-[#ceff66]">BPO specialists</span><br>
          you can trust
        </h2>
        <p class="text-gray-600 text-lg leading-relaxed mb-6 font-['Inter']">
          OneStop Solutions has been operating in the telemarketing and BPO industry for more than 7 years now. Our customer service representatives are thoroughly trained for handling both outbound as well as inbound calls, including chat support.
        </p>
        <p class="text-gray-500 text-base leading-relaxed mb-8 font-['Inter']">
          In addition, we've also employed countless experts working as virtual assistants providing back-office solutions for organizations of every size and sector.
        </p>
        <div class="flex flex-wrap gap-3">
          <span class="px-4 py-2 bg-gray-100 border border-[#ceff66]/50 rounded-full text-sm text-gray-700 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default font-['Inter']">Outbound Calls</span>
          <span class="px-4 py-2 bg-gray-100 border border-[#ceff66]/50 rounded-full text-sm text-gray-700 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default font-['Inter']">Inbound Support</span>
          <span class="px-4 py-2 bg-gray-100 border border-[#ceff66]/50 rounded-full text-sm text-gray-700 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default font-['Inter']">Chat Support</span>
          <span class="px-4 py-2 bg-gray-100 border border-[#ceff66]/50 rounded-full text-sm text-gray-700 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default font-['Inter']">Virtual Assistants</span>
          <span class="px-4 py-2 bg-gray-100 border border-[#ceff66]/50 rounded-full text-sm text-gray-700 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default font-['Inter']">Back-Office Solutions</span>
        </div>
      </div>

      <div class="reveal-right">
        <div class="grid grid-cols-2 gap-4">
          <div class="space-y-4">
            <div class="relative overflow-hidden rounded-3xl aspect-square group">
              <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=800&auto=format&fit=crop" alt="Team" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white">
                <div class="text-2xl font-bold font-['Space_Grotesk']">150+</div>
                <div class="text-xs text-white/60 font-['Inter']">Team Members</div>
              </div>
            </div>
            <div class="relative overflow-hidden rounded-3xl aspect-square group">
              <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=800&auto=format&fit=crop" alt="Support" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white">
                <div class="text-2xl font-bold font-['Space_Grotesk']">24/7</div>
                <div class="text-xs text-white/60 font-['Inter']">Coverage</div>
              </div>
            </div>
          </div>
          <div class="mt-8 space-y-4">
            <div class="relative overflow-hidden rounded-3xl aspect-square group">
              <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800&auto=format&fit=crop" alt="Meeting" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white">
                <div class="text-2xl font-bold font-['Space_Grotesk']">98%</div>
                <div class="text-xs text-white/60 font-['Inter']">Satisfaction</div>
              </div>
            </div>
            <div class="relative overflow-hidden rounded-3xl aspect-square bg-[#ceff66] flex items-center justify-center group hover:scale-105 transition-transform">
              <div class="text-center">
                <div class="text-5xl font-bold text-black mb-2 font-['Space_Grotesk']">7+</div>
                <div class="text-sm text-black/60 font-['Inter']">Years Strong</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== BENEFITS SECTION (Light Gray Background) ========== -->
<section class="relative py-32 bg-gray-50 overflow-hidden" id="benefits">
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-20 left-20 w-96 h-96 bg-[#ceff66] rounded-full blur-[100px] animate-pulse"></div>
    <div class="absolute bottom-20 right-20 w-96 h-96 bg-purple-600 rounded-full blur-[100px] animate-pulse animation-delay-1000"></div>
  </div>

  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20 relative z-10">
    <div class="text-center mb-20">
      <span class="text-[#ceff66] text-sm font-semibold tracking-[0.3em] uppercase mb-4 block font-['Inter']">Why Outsource</span>
      <h2 class="font-['Space_Grotesk'] text-5xl md:text-6xl lg:text-7xl font-bold text-[#111] mb-6">
        Six <span class="text-[#ceff66]">powerful</span><br>
        reasons to partner
      </h2>
      <p class="text-gray-500 text-lg max-w-2xl mx-auto font-['Inter']">Lower costs, better management, and greater agility — all in one strategic partnership.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="benefit-card-modern group relative bg-white rounded-[32px] p-8 border border-gray-200 hover:border-[#ceff66] shadow-lg hover:shadow-xl transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-gray-100 font-['Space_Grotesk']">01</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
          <i class="fas fa-piggy-bank text-2xl text-black"></i>
        </div>
        <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-[#111] mb-3">Serious Savings</h3>
        <p class="text-gray-500 text-sm leading-relaxed font-['Inter']">A lower cost structure and reduced operating costs bolster your competitive advantage, allowing you to focus funds on core items.</p>
      </div>

      <div class="benefit-card-modern group relative bg-white rounded-[32px] p-8 border border-gray-200 hover:border-[#ceff66] shadow-lg hover:shadow-xl transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-gray-100 font-['Space_Grotesk']">02</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
          <i class="fas fa-users-gear text-2xl text-black"></i>
        </div>
        <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-[#111] mb-3">Flexible Staffing</h3>
        <p class="text-gray-500 text-sm leading-relaxed font-['Inter']">Outsourcing makes it easy to bring in expert resources for seasonal or cyclical operations — scale up or down on demand.</p>
      </div>

      <div class="benefit-card-modern group relative bg-white rounded-[32px] p-8 border border-gray-200 hover:border-[#ceff66] shadow-lg hover:shadow-xl transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-gray-100 font-['Space_Grotesk']">03</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
          <i class="fas fa-star text-2xl text-black"></i>
        </div>
        <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-[#111] mb-3">Excellent Management</h3>
        <p class="text-gray-500 text-sm leading-relaxed font-['Inter']">OneStop's highly trained team brings high-calibre management skills to the table — for a much lower price tag than in-house hires.</p>
      </div>

      <div class="benefit-card-modern group relative bg-white rounded-[32px] p-8 border border-gray-200 hover:border-[#ceff66] shadow-lg hover:shadow-xl transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-gray-100 font-['Space_Grotesk']">04</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
          <i class="fas fa-shield-halved text-2xl text-black"></i>
        </div>
        <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-[#111] mb-3">Continuity & Risk</h3>
        <p class="text-gray-500 text-sm leading-relaxed font-['Inter']">In industries with high employee turnover, outsourcing with OneStop provides continuity, consistency, and peace of mind.</p>
      </div>

      <div class="benefit-card-modern group relative bg-white rounded-[32px] p-8 border border-gray-200 hover:border-[#ceff66] shadow-lg hover:shadow-xl transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-gray-100 font-['Space_Grotesk']">05</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
          <i class="fas fa-bolt text-2xl text-black"></i>
        </div>
        <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-[#111] mb-3">Greater Agility</h3>
        <p class="text-gray-500 text-sm leading-relaxed font-['Inter']">Having a support infrastructure in place makes it easier to deal with change — and stay decisively ahead of the competition.</p>
      </div>

      <div class="benefit-card-modern group relative bg-[#ceff66] rounded-[32px] p-8 border-2 border-[#ceff66] hover:shadow-[0_20px_40px_-15px_rgba(206,255,102,0.5)] transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-black/5 font-['Space_Grotesk']">06</div>
        <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-file-invoice text-2xl text-[#ceff66]"></i>
        </div>
        <h3 class="font-['Space_Grotesk'] text-2xl font-bold text-black mb-3">Free Proposal</h3>
        <p class="text-black/60 text-sm leading-relaxed mb-6 font-['Inter']">Get a FREE customised proposal specific to your requirement, technology and tenure of the project.</p>
        <a href="#contact" class="inline-flex items-center gap-2 bg-black text-[#ceff66] rounded-full px-6 py-3 text-sm font-semibold hover:bg-black/80 transition-all group-hover:gap-3 font-['Inter']">
          Get started <i class="fas fa-arrow-right text-xs"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ========== STATS SECTION (White Background) ========== -->
<section class="relative py-32 bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="reveal d1 text-center group">
        <div class="text-7xl font-['Space_Grotesk'] font-bold text-[#ceff66] mb-3 group-hover:scale-110 transition-transform">98%</div>
        <div class="text-gray-500 text-sm uppercase tracking-wider font-['Inter']">Client Retention</div>
        <div class="w-0 group-hover:w-20 h-0.5 bg-[#ceff66] mx-auto mt-4 transition-all duration-500"></div>
      </div>
      <div class="reveal d2 text-center group">
        <div class="text-7xl font-['Space_Grotesk'] font-bold text-[#ceff66] mb-3 group-hover:scale-110 transition-transform">50+</div>
        <div class="text-gray-500 text-sm uppercase tracking-wider font-['Inter']">Global Clients</div>
        <div class="w-0 group-hover:w-20 h-0.5 bg-[#ceff66] mx-auto mt-4 transition-all duration-500"></div>
      </div>
      <div class="reveal d3 text-center group">
        <div class="text-7xl font-['Space_Grotesk'] font-bold text-[#ceff66] mb-3 group-hover:scale-110 transition-transform">24/7</div>
        <div class="text-gray-500 text-sm uppercase tracking-wider font-['Inter']">Coverage</div>
        <div class="w-0 group-hover:w-20 h-0.5 bg-[#ceff66] mx-auto mt-4 transition-all duration-500"></div>
      </div>
      <div class="reveal d4 text-center group">
        <div class="text-7xl font-['Space_Grotesk'] font-bold text-[#ceff66] mb-3 group-hover:scale-110 transition-transform">100%</div>
        <div class="text-gray-500 text-sm uppercase tracking-wider font-['Inter']">Custom Solutions</div>
        <div class="w-0 group-hover:w-20 h-0.5 bg-[#ceff66] mx-auto mt-4 transition-all duration-500"></div>
      </div>
    </div>
  </div>
</section>

<!-- ========== QUOTE SECTION (Light Gray Background) ========== -->
<section class="relative py-32 bg-gray-50 overflow-hidden">
  <div class="absolute inset-0">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-[#ceff66]/20 rounded-full"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-[#ceff66]/40 rounded-full"></div>
  </div>

  <div class="max-w-4xl mx-auto px-5 text-center relative z-10">
    <div class="text-8xl text-[#ceff66] opacity-20 mb-8 font-['Space_Grotesk']">"</div>
    <p class="font-['Space_Grotesk'] text-3xl md:text-4xl lg:text-5xl font-bold text-[#111] leading-[1.2] mb-8">
      We handle the intricate, repetitious tasks — so you can focus on the
      <span class="text-[#ceff66]">big picture.</span>
    </p>
    <div class="flex items-center justify-center gap-4">
      <div class="w-12 h-12 rounded-full overflow-hidden">
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=200&auto=format&fit=crop" alt="CEO" class="w-full h-full object-cover">
      </div>
      <div class="text-left">
        <div class="font-semibold text-[#111] font-['Space_Grotesk']">Founder & CEO</div>
        <div class="text-gray-500 text-sm font-['Inter']">OneStop Solutions</div>
      </div>
    </div>
  </div>
</section>

<!-- ========== CTA SECTION (Dark Background) ========== -->
<section class="relative py-32 bg-[#0a0a0a]" id="contact">
  <div class="max-w-6xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="relative glass-card rounded-[48px] p-12 md:p-20 overflow-hidden border border-[#ceff66]/20">
      <div class="absolute -top-40 -right-40 w-80 h-80 bg-[#ceff66] rounded-full blur-[100px] opacity-20 animate-pulse"></div>
      <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-600 rounded-full blur-[100px] opacity-20 animate-pulse animation-delay-2000"></div>

      <div class="relative z-10 text-center">
        <span class="text-[#ceff66] text-sm font-semibold tracking-[0.3em] uppercase mb-4 block font-['Inter']">Ready to outsource?</span>
        <h2 class="font-['Space_Grotesk'] text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
          Get your free, custom<br>
          <span class="text-[#ceff66]">proposal today.</span>
        </h2>
        <p class="text-white/40 text-lg max-w-2xl mx-auto mb-12 font-['Inter']">
          We can work up a FREE customised proposal specific to your requirement, technology and tenure of the project. No obligation, just clarity.
        </p>

        <div class="flex flex-wrap justify-center gap-4">
          <a href="#" class="group inline-flex items-center gap-3 rounded-full px-8 py-4 bg-[#ceff66] text-black font-semibold text-lg hover:scale-105 transition-all duration-300 hover:shadow-[0_20px_30px_-10px_rgba(206,255,102,0.5)] font-['Inter']">
            Request free proposal
            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
          </a>
          <a href="about.html" class="group inline-flex items-center gap-3 rounded-full px-8 py-4 border border-white/20 text-white font-semibold text-lg hover:border-[#ceff66] transition-all font-['Inter']">
            Learn about us
            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== FOOTER (Dark) ========== -->
<footer class="bg-[#050505] border-t border-white/5 py-16">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
      <div class="col-span-2">
        <span class="font-['Space_Grotesk'] font-bold text-2xl text-white hover:scale-105 hover:text-[#ceff66] transition-all inline-block">OneStop<span class="text-[#ceff66]">Solutions</span></span>
        <p class="text-white/30 text-sm mt-4 max-w-md font-['Inter']">Transforming businesses through strategic outsourcing since 2014. Your success is our mission.</p>
        <div class="flex gap-4 mt-6">
          <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black transition-all"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black transition-all"><i class="fab fa-x-twitter"></i></a>
          <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black transition-all"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <div>
        <h4 class="font-['Space_Grotesk'] font-semibold text-white mb-4">Quick Links</h4>
        <ul class="space-y-2">
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors font-['Inter']">Home</a></li>
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors font-['Inter']">About</a></li>
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors font-['Inter']">Services</a></li>
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors font-['Inter']">Why Outsource</a></li>
        </ul>
      </div>

      <div>
        <h4 class="font-['Space_Grotesk'] font-semibold text-white mb-4">Legal</h4>
        <ul class="space-y-2">
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors font-['Inter']">Privacy Policy</a></li>
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors font-['Inter']">Terms of Service</a></li>
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors font-['Inter']">Cookie Policy</a></li>
        </ul>
      </div>
    </div>

    <div class="border-t border-white/5 mt-12 pt-8 text-center text-white/20 text-sm font-['Inter']">
      © 2025 OneStop Solutions. All rights reserved.
    </div>
  </div>
</footer>

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