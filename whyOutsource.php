<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Why Outsource — OneStop Solutions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:opsz,wght@14..32,300..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    /* Modern animations */
    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
    }
    
    @keyframes pulse-glow {
      0%, 100% { opacity: 0.5; filter: blur(40px); }
      50% { opacity: 0.8; filter: blur(60px); }
    }
    
    @keyframes rotate-slow {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
    }
    
    @keyframes tickerRoll {
      from { transform: translateX(0); }
      to { transform: translateX(-50%); }
    }
    
    .ticker-track { animation: tickerRoll 22s linear infinite; }
    .ticker-track:hover { animation-play-state: paused; }
    
    /* Scroll reveal */
    .reveal { opacity: 0; transform: translateY(52px); transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal-left { opacity: 0; transform: translateX(-60px); transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal-right { opacity: 0; transform: translateX(60px); transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal.visible, .reveal-left.visible, .reveal-right.visible { opacity: 1; transform: translate(0); }
    
    .d1 { transition-delay: 0.08s; }
    .d2 { transition-delay: 0.18s; }
    .d3 { transition-delay: 0.28s; }
    .d4 { transition-delay: 0.38s; }
    .d5 { transition-delay: 0.48s; }
    
    /* Modern card styles */
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
    
    .benefit-card-modern::before {
      content: '';
      position: absolute;
      inset: 0;
      border-radius: 28px;
      padding: 2px;
      background: linear-gradient(145deg, rgba(206,255,102,0.3), transparent 60%);
      /* -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0); */
      -webkit-mask-composite: xor;
      mask-composite: exclude;
      pointer-events: none;
      opacity: 0;
      transition: opacity 0.4s ease;
    }
    
    .benefit-card-modern:hover::before {
      opacity: 1;
    }
    
    .glass-card {
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(206, 255, 102, 0.1);
    }
    
    .floating-element {
      animation: float 6s ease-in-out infinite;
    }
    
    .pulse-glow {
      animation: pulse-glow 4s ease-in-out infinite;
    }
    
    .rotate-slow {
      animation: rotate-slow 20s linear infinite;
    }
    
    /* Gradient text */
    .gradient-text {
      background: linear-gradient(135deg, #fff 0%, #ceff66 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }
    
    /* Split background effect */
    .split-bg {
      position: relative;
    }
    
    .split-bg::after {
      content: '';
      position: absolute;
      top: 0;
      left: 50%;
      width: 1px;
      height: 100%;
      background: linear-gradient(to bottom, transparent, rgba(206,255,102,0.2), transparent);
      transform: translateX(-50%);
    }
    
    /* Custom cursor effect (optional) */
    .cursor-glow {
      position: fixed;
      width: 400px;
      height: 400px;
      background: radial-gradient(circle, rgba(206,255,102,0.15) 0%, transparent 70%);
      border-radius: 50%;
      pointer-events: none;
      z-index: 9999;
      mix-blend-mode: screen;
      transform: translate(-50%, -50%);
      transition: transform 0.1s ease;
    }
  </style>
</head>
<body class="antialiased font-['Inter'] bg-[#0a0a0a] text-white overflow-x-hidden relative">

<!-- Custom cursor glow (optional, remove if not wanted) -->
<div id="cursor-glow" class="cursor-glow fixed hidden lg:block"></div>

<!-- Scroll Progress -->
<div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] bg-[#ceff66] z-[9999] duration-100 shadow-[0_0_20px_rgba(206,255,102,0.8)]"></div>

<!-- ========== NAVBAR ========== -->
<?php @include('navbar.php') ?>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden fixed top-16 left-0 right-0 bg-[rgba(0,0,0,0.95)] backdrop-blur-[20px] px-8 py-6 z-50 border-t border-[#ceff66]/10">
  <a href="index.html" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all">Home</a>
  <a href="about.html" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all">About</a>
  <a href="#" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all">Services</a>
  <a href="why-outsource.html" class="block font-medium text-[#ceff66] text-lg py-3 border-b border-white/5">Why Outsource</a>
  <a href="#contact" class="block font-medium text-white/70 text-lg py-3 hover:text-[#ceff66] hover:pl-2 transition-all">Get in touch →</a>
</div>

<!-- ========== HERO - MODERN 3D SPACE THEME ========== -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-[#050505]">
  <!-- Animated background elements -->
  <div class="absolute inset-0 opacity-30">
    <div class="absolute top-20 left-10 w-72 h-72 bg-[#ceff66] rounded-full mix-blend-screen filter blur-[100px] animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-96 h-96 bg-purple-600 rounded-full mix-blend-screen filter blur-[120px] animate-pulse animation-delay-2000"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] border border-[#ceff66]/20 rounded-full rotate-slow"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] border border-[#ceff66]/10 rounded-full rotate-slow" style="animation-direction: reverse;"></div>
  </div>
  
  <!-- Grid overlay -->
  <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath d="M0 0 L60 0 L60 60 L0 60 Z" fill="none" stroke="rgba(206,255,102,0.05)" stroke-width="0.5"/%3E%3C/svg%3E')] opacity-20"></div>

  <div class="relative z-10 max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-32">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
      
      <!-- Left content -->
      <div class="reveal-left">
        <div class="flex items-center gap-3 mb-6">
          <span class="w-10 h-[2px] bg-[#ceff66]"></span>
          <span class="text-[#ceff66] text-sm font-semibold tracking-[0.2em] uppercase">Since 2014</span>
        </div>
        
        <h1 class="font-['Plus_Jakarta_Sans'] font-extrabold text-5xl md:text-6xl lg:text-7xl xl:text-8xl leading-[0.9] tracking-[-0.03em] mb-8">
          <span class="block">Outsource</span>
          <span class="gradient-text block">Smarter</span>
          <span class="block text-white/40">Scale Faster</span>
        </h1>
        
        <p class="text-white/60 text-lg md:text-xl max-w-lg mb-10 leading-relaxed">
          Transform your business with our award-winning BPO solutions. 7+ years of excellence, 60% average cost savings, and 24/7 dedicated support.
        </p>
        
        <!-- CTA buttons with modern styling -->
        <div class="flex flex-wrap gap-4">
          <a href="#benefits" class="group relative inline-flex items-center gap-3 rounded-full px-8 py-4 bg-[#ceff66] text-black font-semibold overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-[0_20px_30px_-10px_rgba(206,255,102,0.5)]">
            <span class="relative z-10">Explore benefits</span>
            <i class="fas fa-arrow-down relative z-10 group-hover:translate-y-1 transition-transform"></i>
            <div class="absolute inset-0 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></div>
          </a>
          <a href="#contact" class="group relative inline-flex items-center gap-3 rounded-full px-8 py-4 border border-white/20 text-white font-semibold overflow-hidden transition-all duration-300 hover:border-[#ceff66]">
            <span class="relative z-10">Free proposal</span>
            <i class="fas fa-arrow-right relative z-10 group-hover:translate-x-1 transition-transform"></i>
            <div class="absolute inset-0 bg-[#ceff66]/10 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></div>
          </a>
        </div>
        
        <!-- Stats with modern design -->
        <div class="grid grid-cols-4 gap-4 mt-16">
          <div class="reveal d1">
            <div class="font-['Plus_Jakarta_Sans'] text-3xl font-bold text-[#ceff66]">7+</div>
            <div class="text-white/40 text-xs uppercase tracking-wider mt-1">Years</div>
          </div>
          <div class="reveal d2">
            <div class="font-['Plus_Jakarta_Sans'] text-3xl font-bold text-[#ceff66]">60%</div>
            <div class="text-white/40 text-xs uppercase tracking-wider mt-1">Savings</div>
          </div>
          <div class="reveal d3">
            <div class="font-['Plus_Jakarta_Sans'] text-3xl font-bold text-[#ceff66]">24/7</div>
            <div class="text-white/40 text-xs uppercase tracking-wider mt-1">Support</div>
          </div>
          <div class="reveal d4">
            <div class="font-['Plus_Jakarta_Sans'] text-3xl font-bold text-[#ceff66]">100%</div>
            <div class="text-white/40 text-xs uppercase tracking-wider mt-1">Custom</div>
          </div>
        </div>
      </div>
      
      <!-- Right content - 3D floating card -->
      <div class="reveal-right relative hidden lg:block">
        <div class="relative floating-element">
          <!-- Main floating card -->
          <div class="relative w-[400px] h-[500px] ml-auto glass-card rounded-[40px] overflow-hidden transform rotate-3 hover:rotate-0 transition-all duration-700">
            <!-- Background image with overlay -->
            <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=1200&auto=format&fit=crop" alt="Team" class="absolute inset-0 w-full h-full object-cover opacity-60">
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
            
            <!-- Content -->
            <div class="relative z-10 h-full flex flex-col justify-end p-8">
              <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-2xl">
                <i class="fas fa-rocket text-3xl text-black"></i>
              </div>
              <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-3">Global Excellence</h3>
              <p class="text-white/70 text-sm leading-relaxed">Trusted by 50+ global clients across 15+ industries. Your success is our mission.</p>
              
              <!-- Progress bar -->
              <div class="mt-6 space-y-3">
                <div class="flex justify-between text-xs">
                  <span class="text-white/50">Client satisfaction</span>
                  <span class="text-[#ceff66]">98%</span>
                </div>
                <div class="h-1 bg-white/10 rounded-full overflow-hidden">
                  <div class="h-full w-[98%] bg-[#ceff66] rounded-full"></div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Floating badges -->
          <div class="absolute -top-8 -left-8 w-24 h-24 bg-[#ceff66] rounded-3xl flex items-center justify-center shadow-2xl rotate-12 hover:rotate-0 transition-all duration-500">
            <span class="font-bold text-2xl text-black">7+</span>
          </div>
          <div class="absolute -bottom-8 -right-8 w-32 h-32 bg-black border border-[#ceff66]/30 rounded-3xl flex items-center justify-center shadow-2xl -rotate-6 hover:rotate-0 transition-all duration-500 backdrop-blur-sm">
            <span class="font-bold text-lg text-[#ceff66] text-center">Global<br>Partner</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Scroll indicator -->
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-2">
    <span class="text-white/30 text-xs tracking-widest uppercase">Scroll</span>
    <div class="w-6 h-10 border-2 border-white/20 rounded-full flex justify-center p-1">
      <div class="w-1 h-2 bg-[#ceff66] rounded-full animate-bounce"></div>
    </div>
  </div>
</section>

<!-- ========== TICKER - MODERN MINIMAL ========== -->
<div class="bg-[#ceff66] py-5 overflow-hidden relative">
  <div class="absolute inset-0 bg-gradient-to-r from-transparent via-black/5 to-transparent"></div>
  <div class="ticker-track flex whitespace-nowrap">
    <span class="font-['Plus_Jakarta_Sans'] text-base font-bold text-black px-10 tracking-[0.1em] uppercase flex-shrink-0">✦ Serious Savings</span>
    <span class="font-['Plus_Jakarta_Sans'] text-base font-bold text-black px-10 tracking-[0.1em] uppercase flex-shrink-0">✦ Flexible Staffing</span>
    <span class="font-['Plus_Jakarta_Sans'] text-base font-bold text-black px-10 tracking-[0.1em] uppercase flex-shrink-0">✦ Excellent Management</span>
    <span class="font-['Plus_Jakarta_Sans'] text-base font-bold text-black px-10 tracking-[0.1em] uppercase flex-shrink-0">✦ Risk Management</span>
    <span class="font-['Plus_Jakarta_Sans'] text-base font-bold text-black px-10 tracking-[0.1em] uppercase flex-shrink-0">✦ Greater Agility</span>
    <span class="font-['Plus_Jakarta_Sans'] text-base font-bold text-black px-10 tracking-[0.1em] uppercase flex-shrink-0">✦ Free Proposal</span>
  </div>
</div>

<!-- ========== WHO WE ARE - MODERN SPLIT LAYOUT ========== -->
<section class="relative py-32 bg-[#0a0a0a] overflow-hidden">
  <!-- Background elements -->
  <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#ceff66]/5 rounded-full blur-[120px]"></div>
  <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-purple-600/5 rounded-full blur-[100px]"></div>
  
  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
      
      <!-- Left: text with modern typography -->
      <div class="reveal-left">
        <span class="text-[#ceff66] text-sm font-semibold tracking-[0.3em] uppercase mb-6 block">7+ years of excellence</span>
        <h2 class="font-['Plus_Jakarta_Sans'] text-4xl md:text-5xl lg:text-6xl font-extrabold leading-[1.1] tracking-[-0.02em] text-white mb-8">
          Telemarketing &<br>
          <span class="gradient-text">BPO specialists</span><br>
          you can trust
        </h2>
        <p class="text-white/50 text-lg leading-relaxed mb-6">
          OneStop Solutions has been operating in the telemarketing and BPO industry for more than 7 years now. Our customer service representatives are thoroughly trained for handling both outbound as well as inbound calls, including chat support.
        </p>
        <p class="text-white/40 text-base leading-relaxed mb-8">
          In addition, we've also employed countless experts working as virtual assistants providing back-office solutions for organizations of every size and sector.
        </p>
        
        <!-- Animated tags -->
        <div class="flex flex-wrap gap-3">
          <span class="px-4 py-2 bg-white/5 border border-[#ceff66]/20 rounded-full text-sm text-white/70 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default">Outbound Calls</span>
          <span class="px-4 py-2 bg-white/5 border border-[#ceff66]/20 rounded-full text-sm text-white/70 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default">Inbound Support</span>
          <span class="px-4 py-2 bg-white/5 border border-[#ceff66]/20 rounded-full text-sm text-white/70 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default">Chat Support</span>
          <span class="px-4 py-2 bg-white/5 border border-[#ceff66]/20 rounded-full text-sm text-white/70 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default">Virtual Assistants</span>
          <span class="px-4 py-2 bg-white/5 border border-[#ceff66]/20 rounded-full text-sm text-white/70 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default">Back-Office Solutions</span>
        </div>
      </div>
      
      <!-- Right: Modern image grid -->
      <div class="reveal-right">
        <div class="grid grid-cols-2 gap-4">
          <div class="space-y-4">
            <div class="relative overflow-hidden rounded-3xl aspect-square group">
              <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=800&auto=format&fit=crop" alt="Team" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white">
                <div class="text-2xl font-bold">150+</div>
                <div class="text-xs text-white/60">Team Members</div>
              </div>
            </div>
            <div class="relative overflow-hidden rounded-3xl aspect-square group">
              <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=800&auto=format&fit=crop" alt="Support" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white">
                <div class="text-2xl font-bold">24/7</div>
                <div class="text-xs text-white/60">Coverage</div>
              </div>
            </div>
          </div>
          <div class="mt-8 space-y-4">
            <div class="relative overflow-hidden rounded-3xl aspect-square group">
              <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=800&auto=format&fit=crop" alt="Meeting" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
              <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
              <div class="absolute bottom-4 left-4 text-white">
                <div class="text-2xl font-bold">98%</div>
                <div class="text-xs text-white/60">Satisfaction</div>
              </div>
            </div>
            <div class="relative overflow-hidden rounded-3xl aspect-square bg-[#ceff66] flex items-center justify-center group hover:scale-105 transition-transform">
              <div class="text-center">
                <div class="text-5xl font-bold text-black mb-2">7+</div>
                <div class="text-sm text-black/60">Years Strong</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== BENEFITS SECTION - MODERN CARD GRID ========== -->
<section class="relative py-32 bg-[#050505] overflow-hidden" id="benefits">
  <!-- Animated background -->
  <div class="absolute inset-0 opacity-20">
    <div class="absolute top-20 left-20 w-96 h-96 bg-[#ceff66] rounded-full blur-[100px] animate-pulse"></div>
    <div class="absolute bottom-20 right-20 w-96 h-96 bg-purple-600 rounded-full blur-[100px] animate-pulse animation-delay-1000"></div>
  </div>
  
  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20 relative z-10">
    
    <!-- Section header with modern design -->
    <div class="text-center mb-20">
      <span class="text-[#ceff66] text-sm font-semibold tracking-[0.3em] uppercase mb-4 block">Why Outsource</span>
      <h2 class="font-['Plus_Jakarta_Sans'] text-5xl md:text-6xl lg:text-7xl font-extrabold text-white mb-6">
        Six <span class="gradient-text">powerful</span><br>
        reasons to partner
      </h2>
      <p class="text-white/40 text-lg max-w-2xl mx-auto">Lower costs, better management, and greater agility — all in one strategic partnership.</p>
    </div>
    
    <!-- Modern card grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      
      <!-- 1 Serious Savings -->
      <div class="benefit-card-modern group relative bg-white/5 backdrop-blur-sm rounded-[32px] p-8 border border-white/10 hover:border-[#ceff66]/30 transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-white/5">01</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-piggy-bank text-2xl text-black"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-3">Serious Savings</h3>
        <p class="text-white/40 text-sm leading-relaxed">A lower cost structure and reduced operating costs bolster your competitive advantage, allowing you to focus funds on core items.</p>
      </div>
      
      <!-- 2 Flexible Staffing -->
      <div class="benefit-card-modern group relative bg-white/5 backdrop-blur-sm rounded-[32px] p-8 border border-white/10 hover:border-[#ceff66]/30 transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-white/5">02</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-users-gear text-2xl text-black"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-3">Flexible Staffing</h3>
        <p class="text-white/40 text-sm leading-relaxed">Outsourcing makes it easy to bring in expert resources for seasonal or cyclical operations — scale up or down on demand.</p>
      </div>
      
      <!-- 3 Excellent Management -->
      <div class="benefit-card-modern group relative bg-white/5 backdrop-blur-sm rounded-[32px] p-8 border border-white/10 hover:border-[#ceff66]/30 transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-white/5">03</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-star text-2xl text-black"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-3">Excellent Management</h3>
        <p class="text-white/40 text-sm leading-relaxed">OneStop's highly trained team brings high-calibre management skills to the table — for a much lower price tag than in-house hires.</p>
      </div>
      
      <!-- 4 Continuity & Risk -->
      <div class="benefit-card-modern group relative bg-white/5 backdrop-blur-sm rounded-[32px] p-8 border border-white/10 hover:border-[#ceff66]/30 transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-white/5">04</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-shield-halved text-2xl text-black"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-3">Continuity & Risk</h3>
        <p class="text-white/40 text-sm leading-relaxed">In industries with high employee turnover, outsourcing with OneStop provides continuity, consistency, and peace of mind.</p>
      </div>
      
      <!-- 5 Greater Agility -->
      <div class="benefit-card-modern group relative bg-white/5 backdrop-blur-sm rounded-[32px] p-8 border border-white/10 hover:border-[#ceff66]/30 transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-white/5">05</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-bolt text-2xl text-black"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-3">Greater Agility</h3>
        <p class="text-white/40 text-sm leading-relaxed">Having a support infrastructure in place makes it easier to deal with change — and stay decisively ahead of the competition.</p>
      </div>
      
      <!-- 6 Free Proposal - Accent card -->
      <div class="benefit-card-modern group relative bg-[#ceff66] rounded-[32px] p-8 border-2 border-[#ceff66] hover:shadow-[0_20px_40px_-15px_rgba(206,255,102,0.5)] transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-black/5">06</div>
        <div class="w-16 h-16 bg-black rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-file-invoice text-2xl text-[#ceff66]"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-black mb-3">Free Proposal</h3>
        <p class="text-black/60 text-sm leading-relaxed mb-6">Get a FREE customised proposal specific to your requirement, technology and tenure of the project.</p>
        <a href="#contact" class="inline-flex items-center gap-2 bg-black text-[#ceff66] rounded-full px-6 py-3 text-sm font-semibold hover:bg-black/80 transition-all group-hover:gap-3">
          Get started <i class="fas fa-arrow-right text-xs"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ========== STATS SECTION - MODERN METRICS ========== -->
<section class="relative py-32 bg-[#0a0a0a] overflow-hidden">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="reveal d1 text-center group">
        <div class="text-7xl font-['Plus_Jakarta_Sans'] font-extrabold text-[#ceff66] mb-3 group-hover:scale-110 transition-transform">98%</div>
        <div class="text-white/40 text-sm uppercase tracking-wider">Client Retention</div>
        <div class="w-0 group-hover:w-20 h-0.5 bg-[#ceff66] mx-auto mt-4 transition-all duration-500"></div>
      </div>
      <div class="reveal d2 text-center group">
        <div class="text-7xl font-['Plus_Jakarta_Sans'] font-extrabold text-[#ceff66] mb-3 group-hover:scale-110 transition-transform">50+</div>
        <div class="text-white/40 text-sm uppercase tracking-wider">Global Clients</div>
        <div class="w-0 group-hover:w-20 h-0.5 bg-[#ceff66] mx-auto mt-4 transition-all duration-500"></div>
      </div>
      <div class="reveal d3 text-center group">
        <div class="text-7xl font-['Plus_Jakarta_Sans'] font-extrabold text-[#ceff66] mb-3 group-hover:scale-110 transition-transform">24/7</div>
        <div class="text-white/40 text-sm uppercase tracking-wider">Coverage</div>
        <div class="w-0 group-hover:w-20 h-0.5 bg-[#ceff66] mx-auto mt-4 transition-all duration-500"></div>
      </div>
      <div class="reveal d4 text-center group">
        <div class="text-7xl font-['Plus_Jakarta_Sans'] font-extrabold text-[#ceff66] mb-3 group-hover:scale-110 transition-transform">100%</div>
        <div class="text-white/40 text-sm uppercase tracking-wider">Custom Solutions</div>
        <div class="w-0 group-hover:w-20 h-0.5 bg-[#ceff66] mx-auto mt-4 transition-all duration-500"></div>
      </div>
    </div>
  </div>
</section>

<!-- ========== MODERN QUOTE SECTION ========== -->
<section class="relative py-32 bg-[#050505] overflow-hidden">
  <div class="absolute inset-0">
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-[#ceff66]/10 rounded-full"></div>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-[#ceff66]/20 rounded-full"></div>
  </div>
  
  <div class="max-w-4xl mx-auto px-5 text-center relative z-10">
    <div class="text-8xl text-[#ceff66] opacity-20 mb-8">"</div>
    <p class="font-['Plus_Jakarta_Sans'] text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-[1.2] mb-8">
      We handle the intricate, repetitious tasks — so you can focus on the 
      <span class="gradient-text">big picture.</span>
    </p>
    <div class="flex items-center justify-center gap-4">
      <div class="w-12 h-12 rounded-full overflow-hidden">
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=200&auto=format&fit=crop" alt="CEO" class="w-full h-full object-cover">
      </div>
      <div class="text-left">
        <div class="font-semibold text-white">Founder & CEO</div>
        <div class="text-white/40 text-sm">OneStop Solutions</div>
      </div>
    </div>
  </div>
</section>

<!-- ========== CTA SECTION - MODERN GLASS ========== -->
<section class="relative py-32 bg-[#0a0a0a]" id="contact">
  <div class="max-w-6xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="relative glass-card rounded-[48px] p-12 md:p-20 overflow-hidden border border-[#ceff66]/20">
      <!-- Animated background -->
      <div class="absolute -top-40 -right-40 w-80 h-80 bg-[#ceff66] rounded-full blur-[100px] opacity-20 animate-pulse"></div>
      <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-600 rounded-full blur-[100px] opacity-20 animate-pulse animation-delay-2000"></div>
      
      <div class="relative z-10 text-center">
        <span class="text-[#ceff66] text-sm font-semibold tracking-[0.3em] uppercase mb-4 block">Ready to outsource?</span>
        <h2 class="font-['Plus_Jakarta_Sans'] text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6">
          Get your free, custom<br>
          <span class="gradient-text">proposal today.</span>
        </h2>
        <p class="text-white/40 text-lg max-w-2xl mx-auto mb-12">
          We can work up a FREE customised proposal specific to your requirement, technology and tenure of the project. No obligation, just clarity.
        </p>
        
        <div class="flex flex-wrap justify-center gap-4">
          <a href="#" class="group inline-flex items-center gap-3 rounded-full px-8 py-4 bg-[#ceff66] text-black font-semibold text-lg hover:scale-105 transition-all duration-300 hover:shadow-[0_20px_30px_-10px_rgba(206,255,102,0.5)]">
            Request free proposal
            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
          </a>
          <a href="about.html" class="group inline-flex items-center gap-3 rounded-full px-8 py-4 border border-white/20 text-white font-semibold text-lg hover:border-[#ceff66] transition-all">
            Learn about us
            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== FOOTER - MODERN MINIMAL ========== -->
<footer class="bg-[#050505] border-t border-white/5 py-16">
  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
      <div class="col-span-2">
        <span class="font-['Plus_Jakarta_Sans'] font-bold text-2xl text-white">OneStop<span class="text-[#ceff66]">Solutions</span></span>
        <p class="text-white/30 text-sm mt-4 max-w-md">Transforming businesses through strategic outsourcing since 2014. Your success is our mission.</p>
        <div class="flex gap-4 mt-6">
          <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black transition-all"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black transition-all"><i class="fab fa-x-twitter"></i></a>
          <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-[#ceff66] hover:text-black transition-all"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      
      <div>
        <h4 class="font-semibold text-white mb-4">Quick Links</h4>
        <ul class="space-y-2">
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors">Home</a></li>
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors">About</a></li>
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors">Services</a></li>
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors">Why Outsource</a></li>
        </ul>
      </div>
      
      <div>
        <h4 class="font-semibold text-white mb-4">Legal</h4>
        <ul class="space-y-2">
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors">Privacy Policy</a></li>
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors">Terms of Service</a></li>
          <li><a href="#" class="text-white/30 hover:text-[#ceff66] transition-colors">Cookie Policy</a></li>
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
  const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(en => {
      if (en.isIntersecting) { en.target.classList.add('visible'); revealObs.unobserve(en.target); }
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

  // Optional cursor glow effect
  const cursor = document.getElementById('cursor-glow');
  if (cursor) {
    document.addEventListener('mousemove', (e) => {
      cursor.style.left = e.clientX + 'px';
      cursor.style.top = e.clientY + 'px';
    });
  }
</script>

<style>
  /* Custom animation delays */
  .animation-delay-1000 { animation-delay: 1s; }
  .animation-delay-2000 { animation-delay: 2s; }
  
  /* Hide cursor glow on mobile */
  @media (max-width: 1024px) {
    .cursor-glow { display: none; }
  }
</style>

</body>
</html>