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
    /* Ticker */
    @keyframes tickerRoll {
      from { transform: translateX(0); }
      to   { transform: translateX(-50%); }
    }
    .ticker-track { animation: tickerRoll 22s linear infinite; }
    .ticker-track:hover { animation-play-state: paused; }

    /* Counter animation */
    @keyframes countUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* Scroll reveal */
    .reveal        { opacity: 0; transform: translateY(52px);  transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal-left   { opacity: 0; transform: translateX(-60px); transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal-right  { opacity: 0; transform: translateX(60px);  transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal.visible, .reveal-left.visible, .reveal-right.visible { opacity: 1; transform: translate(0); }

    /* Transition delays */
    .d1 { transition-delay: 0.08s; }
    .d2 { transition-delay: 0.18s; }
    .d3 { transition-delay: 0.28s; }
    .d4 { transition-delay: 0.38s; }
    .d5 { transition-delay: 0.48s; }

    /* Benefit card hover line */
    .benefit-card::after {
      content: '';
      position: absolute;
      bottom: 0; left: 0; right: 0;
      height: 3px;
      background: #ceff66;
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s cubic-bezier(0.22,1,0.36,1);
    }
    .benefit-card:hover::after { transform: scaleX(1); }
    .benefit-card:hover { transform: translateY(-6px); border-color: rgba(206,255,102,0.3); }

    /* Marquee number */
    .big-num {
      font-size: clamp(5rem, 12vw, 9rem);
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-weight: 800;
      line-height: 1;
      color: transparent;
      -webkit-text-stroke: 1px rgba(206,255,102,0.18);
      pointer-events: none;
      user-select: none;
    }
  </style>
</head>
<body class="antialiased font-['Inter'] bg-[#faf9f7] text-[#111] overflow-x-hidden">

<!-- Scroll Progress -->
<div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] bg-[#ceff66] z-[999] duration-100 shadow-[0_0_10px_rgba(206,255,102,0.6)]"></div>

<!-- ========== NAVBAR ========== -->
<?php @include('navbar.php') ?>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden fixed top-16 left-0 right-0 bg-[rgba(10,10,10,0.96)] backdrop-blur-[16px] px-8 py-6 z-50 border-t border-white/5">
  <a href="index.html"        class="block font-medium text-white/75 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] transition-colors">Home</a>
  <a href="about.html"        class="block font-medium text-white/75 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] transition-colors">About</a>
  <a href="#"                 class="block font-medium text-white/75 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] transition-colors">Services</a>
  <a href="why-outsource.html" class="block font-medium text-[#ceff66] text-lg py-3 border-b border-white/5">Why Outsource</a>
  <a href="#contact"          class="block font-medium text-white/75 text-lg py-3 hover:text-[#ceff66] transition-colors">Get in touch →</a>
</div>

<!-- ========== HERO ========== -->
<section class="min-h-[78vh] relative flex flex-col justify-between bg-[#0b0b0b] overflow-hidden">
  <!-- Radial glow -->
  <div class="absolute bottom-[-100px] right-[-60px] w-[520px] h-[520px] bg-[radial-gradient(circle,rgba(206,255,102,0.10)_0%,transparent_65%)] pointer-events-none z-0"></div>
  <div class="absolute top-[-80px] left-[30%] w-[340px] h-[340px] bg-[radial-gradient(circle,rgba(206,255,102,0.05)_0%,transparent_65%)] pointer-events-none z-0"></div>
  <!-- Left accent bar -->
  <div class="absolute left-0 top-0 bottom-0 w-[3px] bg-gradient-to-b from-transparent via-[#ceff66] to-transparent z-[2]"></div>

  <!-- Decorative big number -->
  <div class="absolute right-8 bottom-16 big-num select-none pointer-events-none hidden lg:block">7+</div>

  <div class="relative z-10 flex-1 flex flex-col justify-center px-8 pt-36 pb-12 md:px-16 lg:px-24">
    <div class="max-w-4xl">
      <!-- Eyebrow -->
      <div class="reveal flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-semibold tracking-[0.28em] uppercase mb-7 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
        Why Outsource With Us
      </div>

      <!-- Heading -->
      <h1 class="reveal d1 text-white font-['Plus_Jakarta_Sans'] font-extrabold leading-[1.06] tracking-[-0.025em] text-4xl sm:text-5xl md:text-[3.6rem] lg:text-[4.6rem]">
        The smarter way to<br>
        <span class="text-[#ceff66]">scale, save</span> &amp; succeed<br>
        without the overhead.
      </h1>

      <!-- Sub -->
      <p class="reveal d2 mt-6 max-w-xl text-base sm:text-lg leading-relaxed text-white/50">
        OneStop Solutions has been operating in the telemarketing and BPO industry for more than 7 years. Our expert team handles everything — so you can focus on what matters most.
      </p>

      <!-- CTAs -->
      <div class="reveal d3 mt-9 flex flex-wrap gap-3">
        <a href="#benefits" class="inline-flex items-center gap-2 rounded-full px-7 py-3.5 text-sm font-semibold text-neutral-900 bg-gradient-to-br from-[#c5f467] to-[#a6e62c] hover:from-[#b3e04e] hover:to-[#93cd25] transition-all duration-300 shadow-[0_10px_24px_-8px_rgba(166,230,44,0.45)] hover:shadow-[0_18px_28px_-8px_rgba(128,180,30,0.5)] hover:-translate-y-0.5">
          Explore benefits <i class="fas fa-arrow-down text-xs"></i>
        </a>
        <a href="#contact" class="inline-flex items-center gap-2 border border-white/20 rounded-full px-7 py-3.5 text-sm font-medium text-white hover:bg-white/10 transition-all">
          Free proposal <i class="fas fa-arrow-right text-xs"></i>
        </a>
      </div>
    </div>
  </div>

  <!-- Stats strip -->
  <div class="relative z-10 w-full px-8 pb-10 md:px-16 lg:px-24">
    <div class="flex flex-wrap border-t border-white/5 pt-6">
      <div class="reveal d1 flex-1 min-w-[130px] pr-8">
        <div class="font-['Plus_Jakarta_Sans'] text-[1.9rem] font-extrabold text-white tracking-[-0.03em] leading-none">7<span class="text-[#ceff66]">+</span></div>
        <div class="text-[0.68rem] font-medium tracking-[0.18em] uppercase text-white/35 mt-1">Years in BPO</div>
      </div>
      <div class="reveal d2 flex-1 min-w-[130px] border-l border-white/5 pl-8 pr-8">
        <div class="font-['Plus_Jakarta_Sans'] text-[1.9rem] font-extrabold text-white tracking-[-0.03em] leading-none">60<span class="text-[#ceff66]">%</span></div>
        <div class="text-[0.68rem] font-medium tracking-[0.18em] uppercase text-white/35 mt-1">Avg. cost savings</div>
      </div>
      <div class="reveal d3 flex-1 min-w-[130px] border-l border-white/5 pl-8 pr-8">
        <div class="font-['Plus_Jakarta_Sans'] text-[1.9rem] font-extrabold text-white tracking-[-0.03em] leading-none">24<span class="text-[#ceff66]">/7</span></div>
        <div class="text-[0.68rem] font-medium tracking-[0.18em] uppercase text-white/35 mt-1">Support coverage</div>
      </div>
      <div class="reveal d4 flex-1 min-w-[130px] border-l border-white/5 pl-8">
        <div class="font-['Plus_Jakarta_Sans'] text-[1.9rem] font-extrabold text-white tracking-[-0.03em] leading-none">100<span class="text-[#ceff66]">%</span></div>
        <div class="text-[0.68rem] font-medium tracking-[0.18em] uppercase text-white/35 mt-1">Custom solutions</div>
      </div>
    </div>
  </div>
</section>

<!-- ========== TICKER ========== -->
<div class="bg-[#ceff66] py-[14px] overflow-hidden">
  <div class="ticker-track flex whitespace-nowrap">
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Serious Savings <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Flexible Staffing <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Excellent Management <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Risk Management <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Greater Agility <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Free Proposal <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Inbound &amp; Outbound <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Serious Savings <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Flexible Staffing <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Excellent Management <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Risk Management <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Greater Agility <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Free Proposal <span class="opacity-40 mx-2">✦</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Inbound &amp; Outbound <span class="opacity-40 mx-2">✦</span></span>
  </div>
</div>

<!-- ========== WHO WE ARE STRIP ========== -->
<section class="bg-[#fafafa] py-20 md:py-28 relative overflow-hidden">
  <div class="absolute top-0 right-0 w-72 h-72 rounded-bl-[80px] bg-[rgba(206,255,102,0.05)] pointer-events-none"></div>

  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 items-center">

      <!-- Left: text -->
      <div>
        <div class="reveal flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-semibold tracking-[0.28em] uppercase mb-5 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
          7+ years of excellence
        </div>
        <h2 class="reveal d1 font-['Plus_Jakarta_Sans'] text-[clamp(2rem,4vw,3.2rem)] font-extrabold leading-[1.1] tracking-[-0.025em] text-[#111] mb-6">
          Telemarketing &amp; BPO specialists you can trust
        </h2>
        <p class="reveal d2 text-[1.05rem] text-[#5a5a5a] leading-relaxed mb-6">
          OneStop Solutions has been operating in the telemarketing and BPO industry for more than 7 years now. Our customer service representatives are thoroughly trained for handling both outbound as well as inbound calls, including chat support.
        </p>
        <p class="reveal d3 text-[1.05rem] text-[#5a5a5a] leading-relaxed mb-8">
          In addition, we've also employed countless experts working as virtual assistants providing back-office solutions for organizations of every size and sector.
        </p>

        <!-- Service tags -->
        <div class="reveal d4 flex flex-wrap gap-3">
          <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 text-[0.85rem] font-medium text-[#111]"><i class="fas fa-phone text-[#a6e62c]"></i> Outbound Calls</span>
          <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 text-[0.85rem] font-medium text-[#111]"><i class="fas fa-headset text-[#a6e62c]"></i> Inbound Support</span>
          <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 text-[0.85rem] font-medium text-[#111]"><i class="fas fa-comment-dots text-[#a6e62c]"></i> Chat Support</span>
          <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 text-[0.85rem] font-medium text-[#111]"><i class="fas fa-briefcase text-[#a6e62c]"></i> Virtual Assistants</span>
          <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 text-[0.85rem] font-medium text-[#111]"><i class="fas fa-building text-[#a6e62c]"></i> Back-Office Solutions</span>
        </div>
      </div>

      <!-- Right: visual card stack -->
      <div class="reveal-right relative">
        <div class="relative rounded-3xl overflow-hidden aspect-[4/5] shadow-[0_50px_80px_-30px_rgba(0,0,0,0.22)]">
          <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=1200&auto=format&fit=crop" alt="Call centre team" class="w-full h-full object-cover grayscale contrast-[1.05]">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
          <!-- Overlay label -->
          <div class="absolute bottom-8 left-8 right-8">
            <div class="text-[0.68rem] font-semibold tracking-[0.2em] uppercase text-[#ceff66] mb-1">OneStop Solutions</div>
            <div class="font-['Plus_Jakarta_Sans'] text-2xl font-extrabold text-white leading-tight">Trained for every channel, every challenge.</div>
          </div>
        </div>
        <!-- Floating badge -->
        <div class="absolute -top-6 -right-6 bg-[#ceff66] rounded-2xl px-5 py-4 shadow-2xl z-10 text-[#111]">
          <div class="font-['Plus_Jakarta_Sans'] text-3xl font-extrabold tracking-[-0.03em] leading-none">7<span class="text-[#111]/60 text-xl">yrs</span></div>
          <div class="text-xs font-semibold mt-0.5 opacity-60 uppercase tracking-wider">In Industry</div>
        </div>
        <!-- Decor shapes -->
        <div class="absolute -bottom-4 -left-4 w-14 h-14 rounded-xl bg-[#111] rotate-12 -z-[1]"></div>
        <div class="absolute -bottom-1 -left-1 w-8 h-8 rounded-lg bg-[#ceff66] -rotate-[8deg] -z-[1] opacity-70"></div>
      </div>
    </div>
  </div>
</section>

<!-- ========== BENEFITS SECTION ========== -->
<section class="bg-[#0b0b0b] py-20 md:py-28 relative overflow-hidden" id="benefits">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_20%_50%,rgba(206,255,102,0.06)_0%,transparent_60%)] pointer-events-none"></div>
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_80%_20%,rgba(206,255,102,0.04)_0%,transparent_60%)] pointer-events-none"></div>

  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 relative z-10">

    <!-- Section header -->
    <div class="mb-16">
      <div class="reveal flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-semibold tracking-[0.28em] uppercase mb-5 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
        Why outsource
      </div>
      <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
        <h2 class="reveal d1 font-['Plus_Jakarta_Sans'] text-[clamp(2rem,5vw,3.8rem)] font-extrabold leading-[1.08] tracking-[-0.025em] text-white max-w-[600px]">
          Six powerful reasons to outsource with <span class="text-[#ceff66]">OneStop.</span>
        </h2>
        <p class="reveal d2 text-white/45 text-[0.95rem] max-w-[320px] leading-relaxed lg:text-right">
          Lower costs, better management, and greater agility — all in one strategic partnership.
        </p>
      </div>
    </div>

    <!-- Benefit cards grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

      <!-- 1 Serious Savings -->
      <div class="benefit-card reveal d1 relative bg-[rgba(255,255,255,0.04)] border border-white/5 rounded-[28px] p-8 overflow-hidden transition-all duration-400 hover:bg-[rgba(255,255,255,0.07)] cursor-default">
        <div class="absolute top-6 right-6 font-['Plus_Jakarta_Sans'] text-[4rem] font-extrabold text-white/[0.04] leading-none select-none">01</div>
        <div class="w-14 h-14 bg-[#ceff66] rounded-[16px] flex items-center justify-center mb-6 shadow-[6px_6px_0_rgba(0,0,0,0.3)]">
          <i class="fas fa-piggy-bank text-2xl text-[#111]"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold text-white mb-3">Serious Savings</h3>
        <p class="text-white/55 text-[0.93rem] leading-relaxed">A lower cost structure and reduced operating costs bolster your competitive advantage, allowing you to focus funds on core items.</p>
      </div>

      <!-- 2 Flexible Staffing -->
      <div class="benefit-card reveal d2 relative bg-[rgba(255,255,255,0.04)] border border-white/5 rounded-[28px] p-8 overflow-hidden transition-all duration-400 hover:bg-[rgba(255,255,255,0.07)] cursor-default">
        <div class="absolute top-6 right-6 font-['Plus_Jakarta_Sans'] text-[4rem] font-extrabold text-white/[0.04] leading-none select-none">02</div>
        <div class="w-14 h-14 bg-[#ceff66] rounded-[16px] flex items-center justify-center mb-6 shadow-[6px_6px_0_rgba(0,0,0,0.3)]">
          <i class="fas fa-users-gear text-2xl text-[#111]"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold text-white mb-3">Flexible Staffing</h3>
        <p class="text-white/55 text-[0.93rem] leading-relaxed">Outsourcing makes it easy to bring in expert resources for seasonal or cyclical operations — scale up or down on demand.</p>
      </div>

      <!-- 3 Excellent Management -->
      <div class="benefit-card reveal d3 relative bg-[rgba(255,255,255,0.04)] border border-white/5 rounded-[28px] p-8 overflow-hidden transition-all duration-400 hover:bg-[rgba(255,255,255,0.07)] cursor-default">
        <div class="absolute top-6 right-6 font-['Plus_Jakarta_Sans'] text-[4rem] font-extrabold text-white/[0.04] leading-none select-none">03</div>
        <div class="w-14 h-14 bg-[#ceff66] rounded-[16px] flex items-center justify-center mb-6 shadow-[6px_6px_0_rgba(0,0,0,0.3)]">
          <i class="fas fa-star text-2xl text-[#111]"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold text-white mb-3">Excellent Management</h3>
        <p class="text-white/55 text-[0.93rem] leading-relaxed">OneStop's highly trained team brings high-calibre management skills to the table — for a much lower price tag than in-house hires.</p>
      </div>

      <!-- 4 Continuity & Risk -->
      <div class="benefit-card reveal d1 relative bg-[rgba(255,255,255,0.04)] border border-white/5 rounded-[28px] p-8 overflow-hidden transition-all duration-400 hover:bg-[rgba(255,255,255,0.07)] cursor-default">
        <div class="absolute top-6 right-6 font-['Plus_Jakarta_Sans'] text-[4rem] font-extrabold text-white/[0.04] leading-none select-none">04</div>
        <div class="w-14 h-14 bg-[#ceff66] rounded-[16px] flex items-center justify-center mb-6 shadow-[6px_6px_0_rgba(0,0,0,0.3)]">
          <i class="fas fa-shield-halved text-2xl text-[#111]"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold text-white mb-3">Continuity &amp; Risk Management</h3>
        <p class="text-white/55 text-[0.93rem] leading-relaxed">In industries with high employee turnover, outsourcing with OneStop provides continuity, consistency, and peace of mind.</p>
      </div>

      <!-- 5 Greater Agility -->
      <div class="benefit-card reveal d2 relative bg-[rgba(255,255,255,0.04)] border border-white/5 rounded-[28px] p-8 overflow-hidden transition-all duration-400 hover:bg-[rgba(255,255,255,0.07)] cursor-default">
        <div class="absolute top-6 right-6 font-['Plus_Jakarta_Sans'] text-[4rem] font-extrabold text-white/[0.04] leading-none select-none">05</div>
        <div class="w-14 h-14 bg-[#ceff66] rounded-[16px] flex items-center justify-center mb-6 shadow-[6px_6px_0_rgba(0,0,0,0.3)]">
          <i class="fas fa-bolt text-2xl text-[#111]"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold text-white mb-3">Greater Agility</h3>
        <p class="text-white/55 text-[0.93rem] leading-relaxed">Having a support infrastructure in place makes it easier to deal with change — and stay decisively ahead of the competition.</p>
      </div>

      <!-- 6 Free Proposal — accent card -->
      <div class="benefit-card reveal d3 relative bg-[#ceff66] border border-[#ceff66] rounded-[28px] p-8 overflow-hidden transition-all duration-400 cursor-default">
        <div class="absolute top-6 right-6 font-['Plus_Jakarta_Sans'] text-[4rem] font-extrabold text-black/[0.06] leading-none select-none">06</div>
        <div class="w-14 h-14 bg-[#111] rounded-[16px] flex items-center justify-center mb-6 shadow-[6px_6px_0_rgba(0,0,0,0.2)]">
          <i class="fas fa-file-invoice text-2xl text-[#ceff66]"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold text-[#111] mb-3">Cost &amp; Free Proposal</h3>
        <p class="text-[#111]/70 text-[0.93rem] leading-relaxed mb-6">Get in touch and we can work up a FREE customised proposal specific to your requirement, technology and tenure of the project.</p>
        <a href="#contact" class="inline-flex items-center gap-2 bg-[#111] text-[#ceff66] rounded-full px-5 py-2.5 text-sm font-semibold hover:bg-[#333] transition-colors">
          Get free proposal <i class="fas fa-arrow-right text-xs"></i>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- ========== WHY EVERYONE OBSESSES ========== -->
<section class="bg-white py-20 md:py-28 overflow-hidden">
  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">

      <!-- Left: image collage -->
      <div class="reveal-left relative order-2 lg:order-1">
        <div class="grid grid-cols-2 gap-4">
          <div class="row-span-2 mt-10 rounded-2xl overflow-hidden aspect-[3/4] shadow-[0_30px_50px_-20px_rgba(0,0,0,0.2)]">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=800&auto=format&fit=crop" alt="Professional" class="w-full h-full object-cover grayscale contrast-[1.05]">
          </div>
          <div class="rounded-2xl overflow-hidden aspect-square shadow-[0_20px_35px_-15px_rgba(0,0,0,0.15)]">
            <img src="https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?q=80&w=600&auto=format&fit=crop" alt="Support" class="w-full h-full object-cover grayscale contrast-[1.05]">
          </div>
          <div class="rounded-2xl overflow-hidden aspect-square shadow-[0_20px_35px_-15px_rgba(0,0,0,0.15)]">
            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=600&auto=format&fit=crop" alt="Meeting" class="w-full h-full object-cover grayscale contrast-[1.05]">
          </div>
        </div>
        <!-- Floating stat -->
        <div class="absolute -bottom-6 -right-4 bg-[#111] text-white rounded-2xl px-5 py-4 shadow-2xl z-10">
          <div class="font-['Plus_Jakarta_Sans'] text-2xl md:text-3xl font-extrabold text-[#ceff66] tracking-[-0.03em] leading-none">Lower costs</div>
          <div class="text-xs text-white/55 mt-1">Better controls · Improved processes</div>
        </div>
      </div>

      <!-- Right: text -->
      <div class="order-1 lg:order-2">
        <div class="reveal flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-semibold tracking-[0.28em] uppercase mb-5 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
          The real reason
        </div>
        <h2 class="reveal d1 font-['Plus_Jakarta_Sans'] text-[clamp(1.8rem,3.8vw,3rem)] font-extrabold leading-[1.1] tracking-[-0.025em] text-[#111] mb-6">
          The reason why everyone is <span class="bg-[#ceff66] px-[0.15em] pb-[0.05em] inline-block -skew-x-3 shadow-[-6px_6px_0_rgba(0,0,0,0.1)]">obsessing</span> with outsourcing
        </h2>
        <p class="reveal d2 text-[1.05rem] text-[#5a5a5a] leading-relaxed mb-5">
          Clearly, this is in addition to the lower resourcing costs, better controls and improved processes that outsourcing can bring. We handle all of your corporate needs related to marketing, sales, lead-generation, after-hour services, back office operations or administrative tasks.
        </p>
        <p class="reveal d3 text-[1.05rem] text-[#5a5a5a] leading-relaxed mb-10">
          Our team can take on those intricate but often repetitious tasks, so you and your team can get back to focusing on the big picture.
        </p>

        <!-- Process steps -->
        <div class="flex flex-col gap-5">
          <div class="reveal d3 flex items-start gap-4">
            <div class="w-10 h-10 flex-shrink-0 bg-[#111] rounded-[12px] flex items-center justify-center shadow-[4px_4px_0_#ceff66]">
              <i class="fas fa-chart-line text-[#ceff66] text-sm"></i>
            </div>
            <div>
              <h4 class="font-['Plus_Jakarta_Sans'] font-bold text-[#111] mb-0.5">Marketing &amp; Sales</h4>
              <p class="text-[#5a5a5a] text-sm leading-relaxed">Lead generation, campaign management, and sales support handled end-to-end.</p>
            </div>
          </div>
          <div class="reveal d4 flex items-start gap-4">
            <div class="w-10 h-10 flex-shrink-0 bg-[#111] rounded-[12px] flex items-center justify-center shadow-[4px_4px_0_#ceff66]">
              <i class="fas fa-clock text-[#ceff66] text-sm"></i>
            </div>
            <div>
              <h4 class="font-['Plus_Jakarta_Sans'] font-bold text-[#111] mb-0.5">After-Hour Services</h4>
              <p class="text-[#5a5a5a] text-sm leading-relaxed">Never miss a customer interaction — we're available when your in-house team isn't.</p>
            </div>
          </div>
          <div class="reveal d5 flex items-start gap-4">
            <div class="w-10 h-10 flex-shrink-0 bg-[#111] rounded-[12px] flex items-center justify-center shadow-[4px_4px_0_#ceff66]">
              <i class="fas fa-layer-group text-[#ceff66] text-sm"></i>
            </div>
            <div>
              <h4 class="font-['Plus_Jakarta_Sans'] font-bold text-[#111] mb-0.5">Back Office &amp; Admin</h4>
              <p class="text-[#5a5a5a] text-sm leading-relaxed">Repetitive but critical tasks handled with precision, freeing your team for strategy.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== DARK QUOTE / COMMITMENT ========== -->
<section class="bg-[#0f0f0f] py-20 md:py-28 relative overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_70%_50%,rgba(206,255,102,0.07)_0%,transparent_65%)] pointer-events-none"></div>

  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 relative z-10">

    <!-- Big quote -->
    <div class="reveal text-center mb-20 border-b border-white/5 pb-16">
      <div class="text-[#ceff66] text-5xl font-['Plus_Jakarta_Sans'] font-extrabold leading-none mb-6 opacity-30">"</div>
      <p class="font-['Plus_Jakarta_Sans'] text-[clamp(1.5rem,3.5vw,2.6rem)] font-bold text-white leading-[1.3] max-w-[820px] mx-auto">
        We handle the intricate, repetitious tasks — so you and your team can focus on the <span class="text-[#ceff66]">big picture.</span>
      </p>
      <div class="inline-flex items-center gap-3 mt-8">
        <div class="w-9 h-9 rounded-full overflow-hidden bg-[#333]">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=200&auto=format&fit=crop" alt="CEO" class="w-full h-full object-cover grayscale">
        </div>
        <span class="text-sm text-white/45">— OneStop Solutions</span>
      </div>
    </div>

    <!-- 3 capability pillars -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <div class="reveal d1 text-center p-8 rounded-[24px] border border-white/5 bg-white/[0.03]">
        <div class="w-16 h-16 bg-[#ceff66] rounded-[20px] flex items-center justify-center mx-auto mb-5 shadow-[8px_8px_0_rgba(0,0,0,0.3)]">
          <i class="fas fa-phone-volume text-2xl text-[#111]"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-lg font-bold text-white mb-2">Telemarketing</h3>
        <p class="text-white/45 text-sm leading-relaxed">Outbound &amp; inbound — our reps are trained to convert and retain.</p>
      </div>
      <div class="reveal d2 text-center p-8 rounded-[24px] border border-white/5 bg-white/[0.03]">
        <div class="w-16 h-16 bg-[#ceff66] rounded-[20px] flex items-center justify-center mx-auto mb-5 shadow-[8px_8px_0_rgba(0,0,0,0.3)]">
          <i class="fas fa-network-wired text-2xl text-[#111]"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-lg font-bold text-white mb-2">BPO Operations</h3>
        <p class="text-white/45 text-sm leading-relaxed">End-to-end business process outsourcing with measurable outcomes.</p>
      </div>
      <div class="reveal d3 text-center p-8 rounded-[24px] border border-white/5 bg-white/[0.03]">
        <div class="w-16 h-16 bg-[#ceff66] rounded-[20px] flex items-center justify-center mx-auto mb-5 shadow-[8px_8px_0_rgba(0,0,0,0.3)]">
          <i class="fas fa-robot text-2xl text-[#111]"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-lg font-bold text-white mb-2">Virtual Assistants</h3>
        <p class="text-white/45 text-sm leading-relaxed">Expert VAs for admin, data entry, scheduling and back-office tasks.</p>
      </div>
    </div>

  </div>
</section>

<!-- ========== CTA SECTION ========== -->
<section class="bg-[#faf9f7] py-20 md:py-28" id="contact">
  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="reveal bg-black text-white rounded-2xl md:rounded-3xl px-6 py-16 sm:px-10 md:p-16 lg:p-20 relative overflow-hidden">
      <div class="absolute -right-10 -top-10 w-64 h-64 rounded-full blur-3xl pointer-events-none bg-[rgba(206,255,102,0.08)]"></div>
      <div class="absolute -left-10 -bottom-10 w-48 h-48 border-4 rounded-full pointer-events-none border-[rgba(206,255,102,0.15)]"></div>
      <div class="absolute right-16 bottom-16 w-20 h-20 rounded-2xl hidden xl:block bg-[#ceff66] opacity-5 rotate-[18deg]"></div>

      <div class="relative z-20 max-w-3xl">
        <div class="flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-semibold tracking-[0.28em] uppercase mb-6 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
          Ready to outsource?
        </div>
        <h2 class="font-['Plus_Jakarta_Sans'] text-[clamp(2rem,5vw,3.8rem)] font-extrabold leading-[1.08] tracking-[-0.025em] text-white mb-5">
          Get your free, custom<br>proposal today.
        </h2>
        <p class="text-white/55 text-base md:text-lg max-w-[500px] leading-relaxed mb-10">
          We can work up a FREE customised proposal specific to your requirement, technology and tenure of the project. No obligation, just clarity.
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="#" class="inline-flex items-center gap-2 rounded-full px-8 py-4 text-base font-semibold text-neutral-900 bg-gradient-to-br from-[#c5f467] to-[#a6e62c] hover:from-[#b3e04e] hover:to-[#93cd25] transition-all duration-300 shadow-2xl hover:-translate-y-0.5">
            Request free proposal <i class="fas fa-arrow-right text-sm"></i>
          </a>
          <a href="about.html" class="inline-flex items-center gap-2 border border-white/25 rounded-full px-8 py-4 text-base font-medium text-white hover:bg-white/10 transition-all">
            Learn about us
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
      <a href="index.html"         class="text-gray-400 hover:text-[#ceff66] transition-colors">Home</a>
      <a href="about.html"         class="text-gray-400 hover:text-[#ceff66] transition-colors">About</a>
      <a href="#"                  class="text-gray-400 hover:text-[#ceff66] transition-colors">Services</a>
      <a href="why-outsource.html" class="text-[#111] font-medium hover:text-[#ceff66] transition-colors">Why Outsource</a>
      <a href="#contact"           class="text-gray-400 hover:text-[#ceff66] transition-colors">Contact</a>
    </div>
    <div class="flex gap-5 text-gray-400 text-lg">
      <i class="fab fa-linkedin-in hover:text-[#ceff66] cursor-pointer transition"></i>
      <i class="fab fa-x-twitter hover:text-[#ceff66] cursor-pointer transition"></i>
      <i class="fab fa-instagram hover:text-[#ceff66] cursor-pointer transition"></i>
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

  // Transition delays
  document.querySelectorAll('.d1').forEach(el => el.style.transitionDelay = '0.08s');
  document.querySelectorAll('.d2').forEach(el => el.style.transitionDelay = '0.18s');
  document.querySelectorAll('.d3').forEach(el => el.style.transitionDelay = '0.28s');
  document.querySelectorAll('.d4').forEach(el => el.style.transitionDelay = '0.38s');
  document.querySelectorAll('.d5').forEach(el => el.style.transitionDelay = '0.48s');

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

</body>
</html>