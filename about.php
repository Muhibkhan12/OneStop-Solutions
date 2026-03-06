<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us — OneStop Solutions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:opsz,wght@14..32,300..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    /* Only keeping essential animations and keyframes that can't be done with Tailwind */
    @keyframes tickerRoll {
      from { transform: translateX(0); }
      to { transform: translateX(-50%); }
    }
    .ticker-track {
      animation: tickerRoll 20s linear infinite;
    }
    .ticker-track:hover {
      animation-play-state: paused;
    }
    
    /* Scroll reveal animations */
    .reveal {
      opacity: 0;
      transform: translateY(52px);
      transition: opacity 0.9s cubic-bezier(0.22, 1, 0.36, 1), transform 0.9s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .reveal-left {
      opacity: 0;
      transform: translateX(-60px);
      transition: opacity 0.9s cubic-bezier(0.22, 1, 0.36, 1), transform 0.9s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .reveal-right {
      opacity: 0;
      transform: translateX(60px);
      transition: opacity 0.9s cubic-bezier(0.22, 1, 0.36, 1), transform 0.9s cubic-bezier(0.22, 1, 0.36, 1);
    }
    .reveal.visible, .reveal-left.visible, .reveal-right.visible {
      opacity: 1;
      transform: translate(0);
    }
  </style>
</head>
<body class="antialiased font-['Inter'] bg-[#faf9f7] text-[#111] overflow-x-hidden">

<!-- Scroll Progress -->
<div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] bg-[#ceff66] z-[999] transition-[width] duration-100 shadow-[0_0_10px_rgba(206,255,102,0.6)]"></div>

<!-- ========== NAVBAR ========== -->
<?php
@include('navbar.php')
?>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden fixed top-[64px] left-0 right-0 bg-[rgba(10,10,10,0.96)] backdrop-blur-[16px] px-8 py-6 z-50 border-t border-white/5">
  <a href="index.html" class="block font-['Inter'] font-medium text-white/75 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] transition-colors">Home</a>
  <a href="#" class="block font-['Inter'] font-medium text-white/75 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] transition-colors">About</a>
  <a href="#" class="block font-['Inter'] font-medium text-white/75 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] transition-colors">Services</a>
  <a href="#" class="block font-['Inter'] font-medium text-white/75 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] transition-colors">Case Study</a>
  <a href="#" class="block font-['Inter'] font-medium text-[#ceff66] text-lg py-3 hover:text-white transition-colors">Get in touch →</a>
</div>

<!-- ========== HERO ========== -->
<section class="min-h-[72vh] relative flex flex-col justify-between bg-[#0b0b0b] overflow-hidden">
  <!-- Background gradient -->
  <div class="absolute bottom-[-120px] right-[-80px] w-[480px] h-[480px] bg-[radial-gradient(circle,rgba(206,255,102,0.11)_0%,transparent_65%)] pointer-events-none z-0"></div>
  
  <!-- Left bar -->
  <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-gradient-to-b from-transparent via-[#ceff66] to-transparent z-[2]"></div>

  <!-- Main content -->
  <div class="relative z-10 flex-1 flex flex-col justify-center px-8 pt-36 pb-12 md:px-16 lg:px-24">
    <div class="max-w-3xl">
      
      <!-- Eyebrow -->
      <div class="reveal flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-['Inter'] font-semibold tracking-[0.28em] uppercase mb-7 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
        About OneStop Solutions
      </div>

      <!-- Heading -->
      <h1 class="reveal d1 text-white font-['Plus_Jakarta_Sans'] font-extrabold leading-[1.06] tracking-[-0.025em] text-4xl sm:text-5xl md:text-[3.6rem] lg:text-[4.4rem]">
        Your one-stop partner<br>
        for <span class="text-[#ceff66]">BPO, Contact Centre</span><br>
        &amp; Marketing excellence.
      </h1>

      <!-- Subtext -->
      <p class="reveal d2 mt-6 max-w-lg text-base sm:text-lg leading-relaxed text-white/50 font-['Inter']">
        Anchored in Karachi, Pakistan — global mindset, cutting-edge technology, people-first results.
      </p>

      <!-- CTAs -->
      <div class="reveal d3 mt-9 flex flex-wrap gap-3">
        <a href="#mission" class="inline-flex items-center gap-2 rounded-full px-7 py-3.5 text-sm font-semibold text-neutral-900 bg-gradient-to-br from-[#c5f467] to-[#a6e62c] hover:from-[#b3e04e] hover:to-[#93cd25] transition-all duration-300 shadow-[0_10px_24px_-8px_rgba(166,230,44,0.45)] hover:shadow-[0_18px_28px_-8px_rgba(128,180,30,0.5)] hover:-translate-y-0.5">
          Our story <i class="fas fa-arrow-down text-xs group-hover:translate-x-1 transition-transform"></i>
        </a>
        <a href="#contact" class="inline-flex items-center gap-2 border border-white/20 rounded-full px-7 py-3.5 text-sm font-medium text-white hover:bg-white/10 transition-all font-['Inter']">
          Get in touch <i class="fas fa-arrow-right text-xs"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Stats strip -->
  <div class="relative z-10 w-full px-8 pb-10 md:px-16 lg:px-24">
    <div class="flex flex-wrap gap-0 border-t border-white/5 pt-6">
      <div class="reveal d1 flex-1 min-w-[130px] pr-8">
        <div class="font-['Plus_Jakarta_Sans'] text-[1.9rem] font-extrabold text-white tracking-[-0.03em] leading-none">15<span class="text-[#ceff66]">+</span></div>
        <div class="font-['Inter'] text-[0.68rem] font-medium tracking-[0.18em] uppercase text-white/35 mt-1">Years experience</div>
      </div>
      <div class="reveal d2 flex-1 min-w-[130px] border-l border-white/5 pl-8 pr-8">
        <div class="font-['Plus_Jakarta_Sans'] text-[1.9rem] font-extrabold text-white tracking-[-0.03em] leading-none">200<span class="text-[#ceff66]">+</span></div>
        <div class="font-['Inter'] text-[0.68rem] font-medium tracking-[0.18em] uppercase text-white/35 mt-1">Clients served</div>
      </div>
      <div class="reveal d3 flex-1 min-w-[130px] border-l border-white/5 pl-8 pr-8">
        <div class="font-['Plus_Jakarta_Sans'] text-[1.9rem] font-extrabold text-white tracking-[-0.03em] leading-none">6<span class="text-[#ceff66]"> ch</span></div>
        <div class="font-['Inter'] text-[0.68rem] font-medium tracking-[0.18em] uppercase text-white/35 mt-1">Contact channels</div>
      </div>
      <div class="reveal d4 flex-1 min-w-[130px] border-l border-white/5 pl-8">
        <div class="font-['Plus_Jakarta_Sans'] text-[1.9rem] font-extrabold text-white tracking-[-0.03em] leading-none">98<span class="text-[#ceff66]">%</span></div>
        <div class="font-['Inter'] text-[0.68rem] font-medium tracking-[0.18em] uppercase text-white/35 mt-1">Satisfaction rate</div>
      </div>
    </div>
  </div>
</section>

<!-- ========== TICKER ========== -->
<div class="bg-[#ceff66] py-[14px] overflow-hidden">
  <div class="ticker-track flex whitespace-nowrap">
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">BPO Solutions <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Contact Centre <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Digital Marketing <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Customer Retention <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Outsourcing Excellence <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Karachi, Pakistan <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">International Markets <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <!-- Duplicate for seamless loop -->
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">BPO Solutions <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Contact Centre <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Digital Marketing <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Customer Retention <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Outsourcing Excellence <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Karachi, Pakistan <span class="text-[#111] opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">International Markets <span class="text-[#111] opacity-40 mx-2">✦</span></span>
  </div>
</div>

<!-- ========== MISSION SECTION ========== -->
<section class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-20 md:py-28 bg-[#fafafa] relative" id="mission">
  <!-- Background decoration -->
  <div class="absolute top-0 right-0 w-64 h-64 rounded-bl-[80px] bg-[rgba(206,255,102,0.06)] pointer-events-none"></div>
  
  <!-- Two column grid -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10">
    
    <!-- Left: image -->
    <div class="reveal-left relative">
      <div class="relative rounded-3xl overflow-hidden aspect-[4/5] shadow-[0_50px_80px_-30px_rgba(0,0,0,0.25)]">
        <img src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?q=80&w=1200&auto=format&fit=crop" alt="OneStop team" class="w-full h-full object-cover grayscale contrast-105">
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
      </div>
      <!-- Floating card -->
      <div class="absolute -bottom-8 -right-6 bg-white rounded-2xl px-6 py-5 shadow-2xl border border-gray-100 max-w-[220px] z-10">
        <div class="font-['Plus_Jakarta_Sans'] text-3xl font-extrabold text-[#111] tracking-[-0.03em]">Since <span class="text-[#ceff66] [-webkit-text-stroke:1px_#111]">2008</span></div>
        <div class="text-xs text-gray-400 mt-1 leading-tight font-['Inter']">Delivering outsourcing excellence across domestic & international markets</div>
      </div>
      <!-- Decor squares -->
      <div class="absolute -top-5 -left-5 w-14 h-14 rounded-xl bg-[#ceff66] rotate-12 z-[-1] opacity-80"></div>
      <div class="absolute -top-2 -left-2 w-10 h-10 rounded-lg bg-[#1e1e24] -rotate-8 z-[-1]"></div>
    </div>

    <!-- Right: text -->
    <div>
      <div class="reveal flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-['Inter'] font-semibold tracking-[0.28em] uppercase mb-5 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
        Who we are
      </div>
      <h2 class="reveal d1 font-['Plus_Jakarta_Sans'] text-[clamp(2rem,4vw,3.2rem)] font-extrabold leading-[1.1] tracking-[-0.025em] text-[#111] mb-6">
        A comprehensive range of BPO &amp; Marketing solutions
      </h2>
      <p class="reveal d2 font-['Inter'] text-[1.05rem] text-[#5a5a5a] leading-relaxed mb-5">
        OneStop Solutions provides a comprehensive range of BPO, Contact Centre &amp; Marketing solutions to domestic and international markets. Anchored in Karachi, Pakistan, with a strong understanding of international markets and societies.
      </p>
      <p class="reveal d3 font-['Inter'] text-[1.05rem] text-[#5a5a5a] leading-relaxed mb-8">
        Our experience, technologies and suite of services give us the expertise and flexibility to design and implement customised solutions that help our clients perform critical outsourcing call-center and marketing tasks — as effectively and efficiently as possible.
      </p>
      <div class="reveal d4 flex flex-wrap gap-3">
        <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 font-['Inter'] text-[0.85rem] font-medium text-[#111]"><i class="fas fa-check text-[#a6e62c]"></i> BPO Services</span>
        <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 font-['Inter'] text-[0.85rem] font-medium text-[#111]"><i class="fas fa-check text-[#a6e62c]"></i> Contact Centre</span>
        <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 font-['Inter'] text-[0.85rem] font-medium text-[#111]"><i class="fas fa-check text-[#a6e62c]"></i> Digital Marketing</span>
        <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 font-['Inter'] text-[0.85rem] font-medium text-[#111]"><i class="fas fa-check text-[#a6e62c]"></i> Customer Retention</span>
      </div>
    </div>
  </div>

  <!-- Values grid -->
    <div class="mt-24">
      <div class="reveal flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-['Inter'] font-semibold tracking-[0.28em] uppercase mb-4 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
        Our core values
      </div>
      <h2 class="reveal d1 font-['Plus_Jakarta_Sans'] text-[clamp(1.8rem,3.5vw,2.8rem)] font-extrabold tracking-[-0.02em] mb-12 max-w-[600px] leading-[1.15]">Built on trust, technology &amp; human connection</h2>
      
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Value Card 1 -->
        <div class="reveal d1 bg-white rounded-[32px] p-[2.2rem_1.8rem] border border-gray-100 shadow-[0_20px_40px_-20px_rgba(0,0,0,0.12)] transition-all duration-400 hover:-translate-y-3 hover:shadow-[0_35px_55px_-20px_rgba(0,0,0,0.2)] hover:border-[rgba(206,255,102,0.4)] relative overflow-hidden before:content-[''] before:absolute before:bottom-0 before:left-0 before:right-0 before:h-[3px] before:bg-[#ceff66] before:scale-x-0 before:origin-left before:transition-transform before:duration-400 hover:before:scale-x-100">
          <div class="w-16 h-16 bg-[#111] rounded-[20px] flex items-center justify-center mb-6 shadow-[10px_10px_0_#ceff66] transition-all duration-300 group-hover:shadow-[6px_6px_0_#ceff66] group-hover:scale-95">
            <i class="fas fa-handshake text-[1.8rem] text-[#ceff66] transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-5 group-hover:text-white"></i>
          </div>
          <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold mb-3">Trust &amp; Integrity</h3>
          <p class="font-['Inter'] text-[#5a5a5a] text-[0.95rem] leading-relaxed">Our combination of proven processes, technologies and people is the answer to your needs. Nothing replaces human touch built on trust.</p>
        </div>
        
        <!-- Value Card 2 -->
        <div class="reveal d2 bg-white rounded-[32px] p-[2.2rem_1.8rem] border border-gray-100 shadow-[0_20px_40px_-20px_rgba(0,0,0,0.12)] transition-all duration-400 hover:-translate-y-3 hover:shadow-[0_35px_55px_-20px_rgba(0,0,0,0.2)] hover:border-[rgba(206,255,102,0.4)] relative overflow-hidden before:content-[''] before:absolute before:bottom-0 before:left-0 before:right-0 before:h-[3px] before:bg-[#ceff66] before:scale-x-0 before:origin-left before:transition-transform before:duration-400 hover:before:scale-x-100">
          <div class="w-16 h-16 bg-[#111] rounded-[20px] flex items-center justify-center mb-6 shadow-[10px_10px_0_#ceff66] transition-all duration-300 group-hover:shadow-[6px_6px_0_#ceff66] group-hover:scale-95">
            <i class="fas fa-users text-[1.8rem] text-[#ceff66] transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-5 group-hover:text-white"></i>
          </div>
          <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold mb-3">People First</h3>
          <p class="font-['Inter'] text-[#5a5a5a] text-[0.95rem] leading-relaxed">We handpick the best people and invest in their growth — because exceptional service starts with exceptional teams who care deeply.</p>
        </div>
        
        <!-- Value Card 3 -->
        <div class="reveal d3 bg-white rounded-[32px] p-[2.2rem_1.8rem] border border-gray-100 shadow-[0_20px_40px_-20px_rgba(0,0,0,0.12)] transition-all duration-400 hover:-translate-y-3 hover:shadow-[0_35px_55px_-20px_rgba(0,0,0,0.2)] hover:border-[rgba(206,255,102,0.4)] relative overflow-hidden before:content-[''] before:absolute before:bottom-0 before:left-0 before:right-0 before:h-[3px] before:bg-[#ceff66] before:scale-x-0 before:origin-left before:transition-transform before:duration-400 hover:before:scale-x-100">
          <div class="w-16 h-16 bg-[#111] rounded-[20px] flex items-center justify-center mb-6 shadow-[10px_10px_0_#ceff66] transition-all duration-300 group-hover:shadow-[6px_6px_0_#ceff66] group-hover:scale-95">
            <i class="fas fa-microchip text-[1.8rem] text-[#ceff66] transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-5 group-hover:text-white"></i>
          </div>
          <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold mb-3">Cutting-Edge Tech</h3>
          <p class="font-['Inter'] text-[#5a5a5a] text-[0.95rem] leading-relaxed">Advanced processes and cutting-edge technologies make OneStop Solutions one of the leading strategic partners for outsourcing solutions.</p>
        </div>
        
        <!-- Value Card 4 -->
        <div class="reveal d4 bg-white rounded-[32px] p-[2.2rem_1.8rem] border border-gray-100 shadow-[0_20px_40px_-20px_rgba(0,0,0,0.12)] transition-all duration-400 hover:-translate-y-3 hover:shadow-[0_35px_55px_-20px_rgba(0,0,0,0.2)] hover:border-[rgba(206,255,102,0.4)] relative overflow-hidden before:content-[''] before:absolute before:bottom-0 before:left-0 before:right-0 before:h-[3px] before:bg-[#ceff66] before:scale-x-0 before:origin-left before:transition-transform before:duration-400 hover:before:scale-x-100">
          <div class="w-16 h-16 bg-[#111] rounded-[20px] flex items-center justify-center mb-6 shadow-[10px_10px_0_#ceff66] transition-all duration-300 group-hover:shadow-[6px_6px_0_#ceff66] group-hover:scale-95">
            <i class="fas fa-globe text-[1.8rem] text-[#ceff66] transition-transform duration-300 group-hover:scale-110 group-hover:-rotate-5 group-hover:text-white"></i>
          </div>
          <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold mb-3">Global Reach</h3>
          <p class="font-['Inter'] text-[#5a5a5a] text-[0.95rem] leading-relaxed">With a strong understanding of international markets, we bring global perspective to every local challenge — bridging cultures seamlessly.</p>
        </div>
      </div>
    </div>
</section>

<!-- ========== STORY SECTION ========== -->
<section class="bg-white py-20 md:py-28 overflow-hidden">
  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
      
      <!-- Left content -->
      <div>
        <div class="reveal flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-['Inter'] font-semibold tracking-[0.28em] uppercase mb-5 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
          Our philosophy
        </div>
        <h2 class="reveal d1 font-['Plus_Jakarta_Sans'] text-[clamp(1.8rem,3.8vw,3rem)] font-extrabold leading-[1.1] tracking-[-0.025em] text-[#111] mb-8">
          Communication is the <span class="bg-[#ceff66] px-[0.15em] pb-[0.05em] inline-block -skew-x-3 shadow-[-6px_6px_0_rgba(0,0,0,0.12)]">foundation</span> of lasting relationships
        </h2>

        <!-- Process steps -->
        <div class="flex flex-col gap-9 mt-8">
          <!-- Step 1 -->
          <div class="reveal d1 relative pl-[60px] md:pl-20 group">
            <div class="absolute left-0 top-0 w-[44px] h-[44px] md:w-[56px] md:h-[56px] bg-[#ceff66] rounded-[16px] flex items-center justify-center font-['Plus_Jakarta_Sans'] text-lg md:text-xl font-extrabold text-[#111] shadow-[6px_6px_0_rgba(0,0,0,0.15)] transition-transform group-hover:scale-105 group-hover:-rotate-3">01</div>
            <div class="absolute left-[22px] md:left-[27px] top-[44px] md:top-[56px] w-[2px] h-[calc(100%+40px)] bg-gradient-to-b from-[rgba(206,255,102,0.3)] to-transparent pointer-events-none"></div>
            <h3 class="font-['Plus_Jakarta_Sans'] text-base md:text-lg font-bold mb-2">Direct &amp; personalised contact</h3>
            <p class="font-['Inter'] text-[#5a5a5a] text-sm md:text-[0.95rem] leading-relaxed">In the era of digital communications, one-on-one communication is the most effective way to strengthen customer loyalty and build a brand name.</p>
          </div>
          <!-- Step 2 -->
          <div class="reveal d2 relative pl-[60px] md:pl-20 group">
            <div class="absolute left-0 top-0 w-[44px] h-[44px] md:w-[56px] md:h-[56px] bg-[#ceff66] rounded-[16px] flex items-center justify-center font-['Plus_Jakarta_Sans'] text-lg md:text-xl font-extrabold text-[#111] shadow-[6px_6px_0_rgba(0,0,0,0.15)] transition-transform group-hover:scale-105 group-hover:-rotate-3">02</div>
            <div class="absolute left-[22px] md:left-[27px] top-[44px] md:top-[56px] w-[2px] h-[calc(100%+40px)] bg-gradient-to-b from-[rgba(206,255,102,0.3)] to-transparent pointer-events-none"></div>
            <h3 class="font-['Plus_Jakarta_Sans'] text-base md:text-lg font-bold mb-2">Every touchpoint matters</h3>
            <p class="font-['Inter'] text-[#5a5a5a] text-sm md:text-[0.95rem] leading-relaxed">Whether via telephone, email, on-line chatting, fax or SMS — each communication represents a unique opportunity to strengthen your relationship with the customer.</p>
          </div>
          <!-- Step 3 -->
          <div class="reveal d3 relative pl-[60px] md:pl-20 group">
            <div class="absolute left-0 top-0 w-[44px] h-[44px] md:w-[56px] md:h-[56px] bg-[#ceff66] rounded-[16px] flex items-center justify-center font-['Plus_Jakarta_Sans'] text-lg md:text-xl font-extrabold text-[#111] shadow-[6px_6px_0_rgba(0,0,0,0.15)] transition-transform group-hover:scale-105 group-hover:-rotate-3">03</div>
            <h3 class="font-['Plus_Jakarta_Sans'] text-base md:text-lg font-bold mb-2">Outstanding interactions</h3>
            <p class="font-['Inter'] text-[#5a5a5a] text-sm md:text-[0.95rem] leading-relaxed">We ensure that each of your one-on-one interactions with a customer is outstanding — retaining existing customers while continually attracting new ones.</p>
          </div>
        </div>
      </div>

      <!-- Right: image collage -->
      <div class="reveal-right relative">
        <div class="grid grid-cols-2 gap-4">
          <div class="row-span-2 mt-10 rounded-2xl overflow-hidden aspect-[3/4] shadow-[0_30px_50px_-20px_rgba(0,0,0,0.2)]">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=800&auto=format&fit=crop" alt="Team" class="w-full h-full object-cover grayscale contrast-105">
          </div>
          <div class="rounded-2xl overflow-hidden aspect-square shadow-[0_20px_35px_-15px_rgba(0,0,0,0.15)]">
            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=600&auto=format&fit=crop" alt="Office" class="w-full h-full object-cover grayscale contrast-105">
          </div>
          <div class="rounded-2xl overflow-hidden aspect-square shadow-[0_20px_35px_-15px_rgba(0,0,0,0.15)]">
            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=600&auto=format&fit=crop" alt="Meeting" class="w-full h-full object-cover grayscale contrast-105">
          </div>
        </div>
        <!-- Floating stat -->
        <div class="absolute -bottom-6 -left-8 bg-black text-white rounded-2xl px-5 py-4 shadow-2xl z-10">
          <div class="font-['Plus_Jakarta_Sans'] text-2xl md:text-3xl font-extrabold text-[#ceff66] tracking-[-0.03em] leading-none">6 channels</div>
          <div class="font-['Inter'] text-xs text-white/55 mt-1">Phone · Email · Chat · Fax · SMS · Social</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== DARK COMMITMENT SECTION ========== -->
<section class="bg-[#0f0f0f] py-20 md:py-28 relative overflow-hidden">
  <!-- Background gradient -->
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_30%_50%,rgba(206,255,102,0.07)_0%,transparent_65%)] pointer-events-none"></div>
  
  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 relative z-10">
    
    <div class="text-center mb-16">
      <div class="reveal inline-flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-['Inter'] font-semibold tracking-[0.28em] uppercase mb-5 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
        Our commitment
      </div>
      <h2 class="reveal d1 font-['Plus_Jakarta_Sans'] text-[clamp(2rem,5vw,3.8rem)] font-extrabold leading-[1.08] tracking-[-0.025em] text-white max-w-[720px] mx-auto">
        Superior service is more than innovation — it's <span class="text-[#ceff66]">sustained excellence</span>
      </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
      
      <!-- Left card -->
      <div class="reveal-left bg-[rgba(255,255,255,0.04)] border border-white/5 rounded-[32px] p-10">
        <div class="w-[52px] h-[52px] bg-[#ceff66] rounded-[14px] flex items-center justify-center mb-6 shadow-[8px_8px_0_rgba(0,0,0,0.3)]">
          <i class="fas fa-lightbulb text-2xl text-[#111]"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-xl md:text-2xl font-bold text-white mb-4">Innovative ideas that suit your needs</h3>
        <p class="font-['Inter'] text-white/55 text-[0.98rem] leading-relaxed">Superior customer service requires not only the innovative ideas that suit your business needs, but the experience and knowledge to see that they are successfully implemented and maintained — which is the core value of OneStop Solutions Services.</p>
      </div>
      
      <!-- Right card -->
      <div class="reveal-right bg-[rgba(255,255,255,0.04)] border border-white/5 rounded-[32px] p-10">
        <div class="w-[52px] h-[52px] bg-[#ceff66] rounded-[14px] flex items-center justify-center mb-6 shadow-[8px_8px_0_rgba(0,0,0,0.3)]">
          <i class="fas fa-rocket text-2xl text-[#111]"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-xl md:text-2xl font-bold text-white mb-4">From implementation to ongoing success</h3>
        <p class="font-['Inter'] text-white/55 text-[0.98rem] leading-relaxed">Our commitment, coupled with our combination of handpicked people, advanced processes and cutting-edge technologies, has made OneStop Solutions Services one of the leading strategic partners for the provision of one-stop outsourcing solutions.</p>
      </div>
    </div>

    <!-- Big quote -->
    <div class="reveal mt-16 text-center border-t border-white/5 pt-12">
      <p class="font-['Plus_Jakarta_Sans'] text-[clamp(1.4rem,3.5vw,2.4rem)] font-bold text-white leading-[1.3] max-w-[800px] mx-auto">
        "We add value to your business by ensuring that each of your one-on-one interactions with a customer is <span class="text-[#ceff66]">outstanding.</span>"
      </p>
      <div class="inline-flex items-center gap-3 mt-6">
        <div class="w-9 h-9 rounded-full overflow-hidden bg-[#333]">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=200&auto=format&fit=crop" alt="CEO" class="w-full h-full object-cover grayscale">
        </div>
        <span class="font-['Inter'] text-sm text-white/45">— Founder &amp; CEO, OneStop Solutions</span>
      </div>
    </div>
  </div>
</section>

<!-- ========== CTA SECTION ========== -->
<section class="bg-[#faf9f7] py-20 md:py-28" id="contact">
  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="reveal bg-black text-white rounded-2xl md:rounded-3xl px-6 py-16 sm:px-10 md:p-16 lg:p-20 relative overflow-hidden">
      
      <!-- Background decorations -->
      <div class="absolute -right-10 -top-10 w-64 h-64 rounded-full blur-3xl pointer-events-none bg-[rgba(206,255,102,0.08)]"></div>
      <div class="absolute -left-10 -bottom-10 w-48 h-48 border-4 rounded-full pointer-events-none border-[rgba(206,255,102,0.15)]"></div>
      <div class="absolute right-16 bottom-16 w-20 h-20 rounded-2xl hidden xl:block bg-[#ceff66] opacity-5 rotate-18"></div>
      
      <div class="relative z-20 max-w-3xl">
        <div class="flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-['Inter'] font-semibold tracking-[0.28em] uppercase mb-6 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
          Ready to get started?
        </div>
        <h2 class="font-['Plus_Jakarta_Sans'] text-[clamp(2rem,5vw,3.8rem)] font-extrabold leading-[1.08] tracking-[-0.025em] text-white mb-5">
          Let's build something<br>exceptional together.
        </h2>
        <p class="font-['Inter'] text-white/55 text-base md:text-lg max-w-[500px] leading-relaxed mb-10">
          Whether you need a full BPO setup, a dedicated contact centre, or a results-driven marketing campaign — we have the team, technology and experience to deliver.
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="#" class="inline-flex items-center gap-2 rounded-full px-8 py-4 text-base font-semibold text-neutral-900 bg-gradient-to-br from-[#c5f467] to-[#a6e62c] hover:from-[#b3e04e] hover:to-[#93cd25] transition-all duration-300 shadow-2xl hover:-translate-y-0.5">
            Start a conversation <i class="fas fa-arrow-right text-sm"></i>
          </a>
          <a href="#" class="inline-flex items-center gap-2 border border-white/25 rounded-full px-8 py-4 text-base font-medium text-white hover:bg-white/10 transition-all font-['Inter']">
            View services
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-12 md:py-16 border-t border-[#e5e5e5] bg-white">
  <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6 sm:gap-4">
    <div class="flex items-center gap-2">
      <span class="font-['Plus_Jakarta_Sans'] font-bold text-lg tracking-tight">OneStop<span class="text-[#ceff66]">Solutions</span></span>
      <span class="text-xs text-gray-400 font-mono">© 2025</span>
    </div>
    <div class="flex flex-wrap gap-4 sm:gap-6 md:gap-8 text-sm">
      <a href="index.html" class="font-['Inter'] text-gray-400 hover:text-[#ceff66] transition-colors">Home</a>
      <a href="#" class="font-['Inter'] text-gray-400 hover:text-[#ceff66] transition-colors">About</a>
      <a href="#" class="font-['Inter'] text-gray-400 hover:text-[#ceff66] transition-colors">Services</a>
      <a href="#" class="font-['Inter'] text-gray-400 hover:text-[#ceff66] transition-colors">Contact</a>
      <a href="#" class="font-['Inter'] text-gray-400 hover:text-[#ceff66] transition-colors">Privacy</a>
    </div>
    <div class="flex gap-5 text-gray-400 text-lg">
      <i class="fab fa-linkedin-in hover:text-[#ceff66] cursor-pointer transition"></i>
      <i class="fab fa-x-twitter hover:text-[#ceff66] cursor-pointer transition"></i>
      <i class="fab fa-instagram hover:text-[#ceff66] cursor-pointer transition"></i>
    </div>
  </div>
</footer>

<!-- JavaScript -->
<script>
  // Scroll progress
  window.addEventListener('scroll', () => {
    const s = window.scrollY;
    const m = document.documentElement.scrollHeight - window.innerHeight;
    document.getElementById('scroll-progress').style.width = (s / m * 100) + '%';
  }, { passive: true });

  // Scroll reveal
  const els = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  const obs = new IntersectionObserver((entries) => {
    entries.forEach(en => {
      if (en.isIntersecting) {
        en.target.classList.add('visible');
        obs.unobserve(en.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
  els.forEach(el => obs.observe(el));

  // Hamburger menu
  const toggle = document.getElementById('menuToggle');
  const mMenu = document.getElementById('mobile-menu');
  const b1 = document.getElementById('bar1');
  const b2 = document.getElementById('bar2');
  const b3 = document.getElementById('bar3');
  let mOpen = false;

  if (toggle) {
    toggle.addEventListener('click', () => {
      mOpen = !mOpen;
      mMenu.classList.toggle('open', mOpen);
      b1.style.transform = mOpen ? 'translateY(8px) rotate(45deg)' : '';
      b2.style.opacity = mOpen ? '0' : '1';
      b3.style.transform = mOpen ? 'translateY(-8px) rotate(-45deg)' : '';
    });
  }

  if (mMenu) {
    mMenu.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => {
        mOpen = false;
        mMenu.classList.remove('open');
        b1.style.transform = b3.style.transform = '';
        b2.style.opacity = '1';
      });
    });
  }

  // Add transition delay classes
  document.querySelectorAll('.d1').forEach(el => el.style.transitionDelay = '0.08s');
  document.querySelectorAll('.d2').forEach(el => el.style.transitionDelay = '0.18s');
  document.querySelectorAll('.d3').forEach(el => el.style.transitionDelay = '0.28s');
  document.querySelectorAll('.d4').forEach(el => el.style.transitionDelay = '0.38s');
  document.querySelectorAll('.d5').forEach(el => el.style.transitionDelay = '0.48s');
</script>

<style>
  /* Add missing transition delays */
  .d1 { transition-delay: 0.08s; }
  .d2 { transition-delay: 0.18s; }
  .d3 { transition-delay: 0.28s; }
  .d4 { transition-delay: 0.38s; }
  .d5 { transition-delay: 0.48s; }
  
  /* Group hover for value cards */
  .group:hover .group-hover\:shadow-\[6px_6px_0_\#ceff66\] {
    box-shadow: 6px 6px 0 #ceff66;
  }
  .group:hover .group-hover\:scale-95 {
    transform: scale(0.95);
  }
  .group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
  }
  .group:hover .group-hover\:-rotate-5 {
    transform: rotate(-5deg);
  }
  .group:hover .group-hover\:text-white {
    color: #fff;
  }
</style>
</body>
</html>