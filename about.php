<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us — OneStop Solutions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    /* ── Ticker ── */
    @keyframes tickerRoll { from { transform: translateX(0); } to { transform: translateX(-50%); } }
    .ticker-track { animation: tickerRoll 20s linear infinite; }
    .ticker-track:hover { animation-play-state: paused; }

    /* ── Reveal ── */
    .reveal        { opacity: 0; transform: translateY(52px);  transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal-left   { opacity: 0; transform: translateX(-60px); transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal-right  { opacity: 0; transform: translateX(60px);  transition: opacity 0.9s cubic-bezier(0.22,1,0.36,1), transform 0.9s cubic-bezier(0.22,1,0.36,1); }
    .reveal.visible, .reveal-left.visible, .reveal-right.visible { opacity: 1; transform: translate(0); }

    /* ── Desktop stacked card JS hooks ── */
    .val-card { transition: transform 0.55s cubic-bezier(0.4,0,0.2,1), box-shadow 0.55s ease; will-change: transform; }
    .val-card.away { transform-origin: bottom left; }
    .dot.active { background: #ceff66 !important; transform: scale(1.4); }
    .stack-eyebrow::before { content: ''; display: block; width: 28px; height: 2px; background: #ceff66; flex-shrink: 0; }

    /* ── Mobile card ── */
    .mobile-val-card {
      border-radius: 28px;
      padding: 1.75rem;
      display: flex;
      flex-direction: column;
      gap: 1.1rem;
    }

    body { font-family: 'Inter', sans-serif; }
    h1, h2, h3, h4, h5, h6, .font-heading, .hero-title, .section-title, .card-title {
      font-family: 'Space Grotesk', sans-serif;
    }

    /* ── Navbar hide-on-scroll (same as whyOutsource) ── */
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
<!-- No padding-top on body — navbar overlaps the dark hero -->
<body class="antialiased bg-[#faf9f7] text-[#111] overflow-x-hidden">

<!-- Scroll Progress -->
<div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] bg-[#ceff66] z-[9999] duration-100 shadow-[0_0_10px_rgba(206,255,102,0.6)]"></div>

<!-- ========== NAVBAR ========== -->
<div id="navbar-wrapper">
  <?php @include('navbar.php') ?>
</div>

<!-- ========== HERO — starts at top-0, navbar floats over it ========== -->
<section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden bg-black">

  <div class="absolute bottom-0 right-0 w-[800px] h-[800px] bg-[radial-gradient(circle_at_bottom_right,_#ceff66_0%,_transparent_70%)] opacity-40 pointer-events-none"></div>

  <div class="absolute inset-0 opacity-5 pointer-events-none">
    <div class="absolute top-20 left-10 w-96 h-96 bg-white rounded-full mix-blend-overlay filter blur-[80px] animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-white rounded-full mix-blend-overlay filter blur-[100px] animate-pulse" style="animation-delay:2s;"></div>
  </div>

  <div class="absolute inset-0 opacity-5 pointer-events-none" style="background-image:url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M0 0 L60 0 L60 60 L0 60 Z&quot; fill=&quot;none&quot; stroke=&quot;rgba(255,255,255,0.1)&quot; stroke-width=&quot;1&quot;/%3E%3C/svg%3E');"></div>

  <!-- Extra top padding so content clears the navbar -->
  <div class="relative z-10 text-center px-5 sm:px-8 md:px-12 lg:px-24 pt-32 pb-20 md:pt-40 md:pb-28">
    <div class="reveal inline-flex items-center gap-3 px-4 py-2 bg-white/15 backdrop-blur-sm rounded-full border border-white/30 mb-6">
      <span class="w-2 h-2 bg-[#ceff66] rounded-full animate-pulse"></span>
      <span class="text-white/85 text-sm font-medium tracking-wider font-['Inter']">ABOUT US</span>
    </div>

    <h1 class="reveal d1 font-['Space_Grotesk'] font-bold text-6xl md:text-7xl lg:text-8xl xl:text-9xl text-white leading-[1.1] tracking-[-0.03em] mb-6">
      About <span class="text-[#ceff66]">Us</span>
    </h1>

    <p class="reveal d2 text-white/70 text-xl max-w-2xl mx-auto font-['Inter']">
      People. Process. Results. &mdash; Building trust through excellence since 2014.
    </p>
  </div>
</section>

<!-- ========== TICKER ========== -->
<div class="bg-[#ceff66] py-[14px] overflow-hidden">
  <div class="ticker-track flex whitespace-nowrap">
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">BPO Solutions <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Contact Centre <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Digital Marketing <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Customer Retention <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Outsourcing Excellence <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Karachi, Pakistan <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">International Markets <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">BPO Solutions <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Contact Centre <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Digital Marketing <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Customer Retention <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Outsourcing Excellence <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">Karachi, Pakistan <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Space_Grotesk'] text-[0.85rem] font-bold text-[#111] px-8 tracking-[0.05em] uppercase flex-shrink-0">International Markets <span class="opacity-40 mx-2">&#10022;</span></span>
  </div>
</div>

<!-- ========== MISSION SECTION ========== -->
<section class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-20 md:py-28 bg-[#fafafa] relative" id="mission">
  <div class="absolute top-0 right-0 w-64 h-64 rounded-bl-[80px] bg-[rgba(206,255,102,0.06)] pointer-events-none"></div>
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center relative z-10">

    <div class="reveal-left relative">
      <div class="relative rounded-3xl overflow-hidden aspect-[4/5] shadow-[0_50px_80px_-30px_rgba(0,0,0,0.25)]">
        <img src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?q=80&w=1200&auto=format&fit=crop" alt="OneStop team" class="w-full h-full object-cover grayscale contrast-[1.05]">
        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
      </div>
      <div class="absolute -bottom-8 -right-6 bg-white rounded-2xl px-6 py-5 shadow-2xl border border-gray-100 max-w-[220px] z-10">
        <div class="font-['Space_Grotesk'] text-3xl font-bold text-[#111] tracking-[-0.03em]">Since <span class="text-[#ceff66]">2014</span></div>
        <div class="text-xs text-gray-400 mt-1 leading-tight font-['Inter']">Delivering outsourcing excellence across domestic &amp; international markets</div>
      </div>
      <div class="absolute -top-5 -left-5 w-14 h-14 rounded-xl bg-[#ceff66] rotate-12 -z-[1] opacity-80"></div>
      <div class="absolute -top-2 -left-2 w-10 h-10 rounded-lg bg-[#1e1e24] -rotate-[8deg] -z-[1]"></div>
    </div>

    <div>
      <div class="reveal flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-semibold tracking-[0.28em] uppercase mb-5 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66] font-['Inter']">
        Who we are
      </div>
      <h2 class="reveal d1 font-['Space_Grotesk'] text-[clamp(2rem,4vw,3.2rem)] font-bold leading-[1.1] tracking-[-0.025em] text-[#111] mb-6">
        A comprehensive range of BPO &amp; Marketing solutions
      </h2>
      <p class="reveal d2 text-[1.05rem] text-[#5a5a5a] leading-relaxed mb-5 font-['Inter']">
        OneStop Solutions provides a comprehensive range of BPO, Contact Centre &amp; Marketing solutions to domestic and international markets. Anchored in Karachi, Pakistan, with a strong understanding of international markets and societies.
      </p>
      <p class="reveal d3 text-[1.05rem] text-[#5a5a5a] leading-relaxed mb-8 font-['Inter']">
        Our experience, technologies and suite of services give us the expertise and flexibility to design and implement customised solutions that help our clients perform critical outsourcing call-center and marketing tasks &mdash; as effectively and efficiently as possible.
      </p>
      <div class="reveal d4 flex flex-wrap gap-3">
        <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 text-[0.85rem] font-medium text-[#111] font-['Inter']"><i class="fas fa-check text-[#a6e62c]"></i> BPO Services</span>
        <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 text-[0.85rem] font-medium text-[#111] font-['Inter']"><i class="fas fa-check text-[#a6e62c]"></i> Contact Centre</span>
        <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 text-[0.85rem] font-medium text-[#111] font-['Inter']"><i class="fas fa-check text-[#a6e62c]"></i> Digital Marketing</span>
        <span class="inline-flex items-center gap-2 bg-[#f4f3f0] rounded-full px-[18px] py-2 text-[0.85rem] font-medium text-[#111] font-['Inter']"><i class="fas fa-check text-[#a6e62c]"></i> Customer Retention</span>
      </div>
    </div>
  </div>
</section>

<!-- ── MOBILE + TABLET (hidden on lg and above) ── -->
<section class="lg:hidden bg-[#111] py-16 px-5 sm:px-8 md:px-12">
  <div class="mb-10">
    <div class="flex items-center gap-3 text-[#ceff66] text-[0.72rem] font-bold tracking-[0.28em] uppercase mb-5 font-['Inter']">
      <span class="block w-7 h-0.5 bg-[#ceff66] flex-shrink-0"></span>
      Our core values
    </div>
    <h2 class="font-['Space_Grotesk'] text-[clamp(1.9rem,6vw,2.8rem)] font-bold leading-[1.12] tracking-[-0.02em] text-white mb-4">
      Built on trust, technology &amp; <em class="not-italic text-[#ceff66]">human connection</em>
    </h2>
    <p class="text-[0.95rem] text-white/55 leading-[1.7] max-w-lg font-['Inter']">
      Our combination of proven processes, technologies and people is the answer to your needs. Nothing replaces human touch built on trust.
    </p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
    <div class="mobile-val-card bg-[#1c1c1c] text-white">
      <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl flex-shrink-0 bg-[rgba(206,255,102,0.12)] text-[#ceff66]"><i class="fas fa-handshake"></i></div>
      <div>
        <div class="text-[0.68rem] font-bold tracking-[0.22em] uppercase text-white/40 mb-1 font-['Inter']">Value 01</div>
        <h3 class="font-['Space_Grotesk'] text-[1.25rem] font-bold leading-[1.2] mb-2">Trust &amp; Integrity</h3>
        <p class="text-[0.88rem] leading-[1.7] text-white/60 font-['Inter']">Our combination of proven processes, technologies and people is the answer to your needs. Nothing replaces human touch built on trust.</p>
      </div>
    </div>
    <div class="mobile-val-card bg-[#ceff66] text-[#111]">
      <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl flex-shrink-0 bg-black/10 text-[#111]"><i class="fas fa-users"></i></div>
      <div>
        <div class="text-[0.68rem] font-bold tracking-[0.22em] uppercase text-black/40 mb-1 font-['Inter']">Value 02</div>
        <h3 class="font-['Space_Grotesk'] text-[1.25rem] font-bold leading-[1.2] mb-2">People First</h3>
        <p class="text-[0.88rem] leading-[1.7] text-black/60 font-['Inter']">We handpick the best people and invest in their growth &mdash; because exceptional service starts with exceptional teams who care deeply.</p>
      </div>
    </div>
    <div class="mobile-val-card bg-[#1a1a2e] text-white">
      <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl flex-shrink-0 bg-[rgba(206,255,102,0.12)] text-[#ceff66]"><i class="fas fa-microchip"></i></div>
      <div>
        <div class="text-[0.68rem] font-bold tracking-[0.22em] uppercase text-white/40 mb-1 font-['Inter']">Value 03</div>
        <h3 class="font-['Space_Grotesk'] text-[1.25rem] font-bold leading-[1.2] mb-2">Cutting-Edge Tech</h3>
        <p class="text-[0.88rem] leading-[1.7] text-white/60 font-['Inter']">Advanced processes and cutting-edge technologies make OneStop Solutions one of the leading strategic partners for outsourcing solutions.</p>
      </div>
    </div>
    <div class="mobile-val-card bg-white text-[#111] border border-gray-200 shadow-[0_8px_32px_-8px_rgba(0,0,0,0.12)]">
      <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl flex-shrink-0 bg-[#111] text-[#ceff66]"><i class="fas fa-globe"></i></div>
      <div>
        <div class="text-[0.68rem] font-bold tracking-[0.22em] uppercase text-black/35 mb-1 font-['Inter']">Value 04</div>
        <h3 class="font-['Space_Grotesk'] text-[1.25rem] font-bold leading-[1.2] mb-2">Global Reach</h3>
        <p class="text-[0.88rem] leading-[1.7] text-black/55 font-['Inter']">With a strong understanding of international markets, we bring global perspective to every local challenge &mdash; bridging cultures seamlessly.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── DESKTOP sticky scroll cards ── -->
<div class="hidden lg:flex w-full relative" style="height:400vh;" id="stack-section">
  <div class="flex-[0_0_48%] h-screen sticky top-0 flex flex-col justify-center bg-[#111] px-[8%] pr-[5%] rounded-r-[40px]">
    <div class="stack-eyebrow flex items-center gap-[10px] text-[#ceff66] text-[0.72rem] font-bold tracking-[0.28em] uppercase mb-6 font-['Inter']">Our core values</div>
    <h2 class="font-['Space_Grotesk'] text-[clamp(2rem,3.8vw,3.2rem)] font-bold leading-[1.12] tracking-[-0.02em] text-white max-w-[520px] mb-7">
      Built on trust, technology &amp; <em class="not-italic text-[#ceff66]">human connection</em>
    </h2>
    <p class="text-[0.95rem] text-white/55 max-w-[400px] leading-[1.7] mb-10 font-['Inter']">
      Our combination of proven processes, technologies and people is the answer to your needs. Nothing replaces human touch built on trust.
    </p>
    <div class="flex gap-2">
      <div class="dot w-2 h-2 rounded-full bg-white/20 transition-all duration-300 active" id="dot-0"></div>
      <div class="dot w-2 h-2 rounded-full bg-white/20 transition-all duration-300" id="dot-1"></div>
      <div class="dot w-2 h-2 rounded-full bg-white/20 transition-all duration-300" id="dot-2"></div>
      <div class="dot w-2 h-2 rounded-full bg-white/20 transition-all duration-300" id="dot-3"></div>
    </div>
  </div>

  <div class="flex-[0_0_52%] h-screen sticky top-0 flex items-center justify-center bg-[#eeeee9]">
    <div class="val-card absolute w-[360px] min-h-[380px] rounded-[32px] p-[2.6rem_2rem] flex flex-col justify-between bg-[#111] text-white shadow-[0_32px_64px_-16px_rgba(0,0,0,0.45)] cursor-default">
      <div>
        <div class="w-[60px] h-[60px] rounded-[18px] flex items-center justify-center text-2xl mb-6 bg-[rgba(206,255,102,0.12)] text-[#ceff66]"><i class="fas fa-handshake"></i></div>
        <div class="text-[0.72rem] font-bold tracking-[0.22em] uppercase opacity-45 mb-2 font-['Inter']">Value 01</div>
        <h3 class="font-['Space_Grotesk'] text-[1.65rem] font-bold leading-[1.2] mb-4">Trust &amp; Integrity</h3>
        <p class="text-[0.92rem] leading-[1.7] opacity-70 font-['Inter']">Our combination of proven processes, technologies and people is the answer to your needs. Nothing replaces human touch built on trust.</p>
      </div>
      <div class="self-end font-['Space_Grotesk'] text-[3.5rem] font-bold opacity-[0.07] leading-none mt-4">01</div>
    </div>
    <div class="val-card absolute w-[360px] min-h-[380px] rounded-[32px] p-[2.6rem_2rem] flex flex-col justify-between bg-[#ceff66] text-[#111] shadow-[0_32px_64px_-16px_rgba(140,190,0,0.4)] cursor-default">
      <div>
        <div class="w-[60px] h-[60px] rounded-[18px] flex items-center justify-center text-2xl mb-6 bg-black/10 text-[#111]"><i class="fas fa-users"></i></div>
        <div class="text-[0.72rem] font-bold tracking-[0.22em] uppercase opacity-45 mb-2 font-['Inter']">Value 02</div>
        <h3 class="font-['Space_Grotesk'] text-[1.65rem] font-bold leading-[1.2] mb-4">People First</h3>
        <p class="text-[0.92rem] leading-[1.7] opacity-70 font-['Inter']">We handpick the best people and invest in their growth &mdash; because exceptional service starts with exceptional teams who care deeply.</p>
      </div>
      <div class="self-end font-['Space_Grotesk'] text-[3.5rem] font-bold opacity-[0.07] leading-none mt-4">02</div>
    </div>
    <div class="val-card absolute w-[360px] min-h-[380px] rounded-[32px] p-[2.6rem_2rem] flex flex-col justify-between bg-[#1a1a2e] text-white shadow-[0_32px_64px_-16px_rgba(0,0,0,0.55)] cursor-default">
      <div>
        <div class="w-[60px] h-[60px] rounded-[18px] flex items-center justify-center text-2xl mb-6 bg-[rgba(206,255,102,0.12)] text-[#ceff66]"><i class="fas fa-microchip"></i></div>
        <div class="text-[0.72rem] font-bold tracking-[0.22em] uppercase opacity-45 mb-2 font-['Inter']">Value 03</div>
        <h3 class="font-['Space_Grotesk'] text-[1.65rem] font-bold leading-[1.2] mb-4">Cutting-Edge Tech</h3>
        <p class="text-[0.92rem] leading-[1.7] opacity-70 font-['Inter']">Advanced processes and cutting-edge technologies make OneStop Solutions one of the leading strategic partners for outsourcing solutions.</p>
      </div>
      <div class="self-end font-['Space_Grotesk'] text-[3.5rem] font-bold opacity-[0.07] leading-none mt-4">03</div>
    </div>
    <div class="val-card absolute w-[360px] min-h-[380px] rounded-[32px] p-[2.6rem_2rem] flex flex-col justify-between bg-white text-[#111] border border-gray-200 shadow-[0_40px_80px_-10px_rgba(0,0,0,0.30),0_0_0_1px_rgba(0,0,0,0.07),inset_0_1px_0_rgba(255,255,255,0.9)] cursor-default">
      <div>
        <div class="w-[60px] h-[60px] rounded-[18px] flex items-center justify-center text-2xl mb-6 bg-[#111] text-[#ceff66]"><i class="fas fa-globe"></i></div>
        <div class="text-[0.72rem] font-bold tracking-[0.22em] uppercase opacity-45 mb-2 font-['Inter']">Value 04</div>
        <h3 class="font-['Space_Grotesk'] text-[1.65rem] font-bold leading-[1.2] mb-4">Global Reach</h3>
        <p class="text-[0.92rem] leading-[1.7] opacity-70 font-['Inter']">With a strong understanding of international markets, we bring global perspective to every local challenge &mdash; bridging cultures seamlessly.</p>
      </div>
      <div class="self-end font-['Space_Grotesk'] text-[3.5rem] font-bold opacity-[0.07] leading-none mt-4">04</div>
    </div>
  </div>
</div>

<!-- ========== STORY SECTION ========== -->
<section class="bg-white py-20 md:py-28 overflow-hidden">
  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
      <div>
        <div class="reveal flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-semibold tracking-[0.28em] uppercase mb-5 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66] font-['Inter']">Our philosophy</div>
        <h2 class="reveal d1 font-['Space_Grotesk'] text-[clamp(1.8rem,3.8vw,3rem)] font-bold leading-[1.1] tracking-[-0.025em] text-[#111] mb-8">
          Communication is the <span class="bg-[#ceff66] px-[0.15em] pb-[0.05em] inline-block -skew-x-3 shadow-[-6px_6px_0_rgba(0,0,0,0.12)]">foundation</span> of lasting relationships
        </h2>
        <div class="flex flex-col gap-9 mt-8">
          <div class="reveal d1 relative pl-[60px] md:pl-20 group">
            <div class="absolute left-0 top-0 w-11 h-11 md:w-14 md:h-14 bg-[#ceff66] rounded-2xl flex items-center justify-center font-['Space_Grotesk'] text-lg md:text-xl font-bold text-[#111] shadow-[6px_6px_0_rgba(0,0,0,0.15)] transition-transform group-hover:scale-105 group-hover:-rotate-3">01</div>
            <div class="absolute left-[22px] md:left-[27px] top-11 md:top-14 w-[2px] h-[calc(100%+40px)] bg-gradient-to-b from-[rgba(206,255,102,0.3)] to-transparent pointer-events-none"></div>
            <h3 class="font-['Space_Grotesk'] text-base md:text-lg font-bold mb-2">Direct &amp; personalised contact</h3>
            <p class="text-[#5a5a5a] text-sm md:text-[0.95rem] leading-relaxed font-['Inter']">In the era of digital communications, one-on-one communication is the most effective way to strengthen customer loyalty and build a brand name.</p>
          </div>
          <div class="reveal d2 relative pl-[60px] md:pl-20 group">
            <div class="absolute left-0 top-0 w-11 h-11 md:w-14 md:h-14 bg-[#ceff66] rounded-2xl flex items-center justify-center font-['Space_Grotesk'] text-lg md:text-xl font-bold text-[#111] shadow-[6px_6px_0_rgba(0,0,0,0.15)] transition-transform group-hover:scale-105 group-hover:-rotate-3">02</div>
            <div class="absolute left-[22px] md:left-[27px] top-11 md:top-14 w-[2px] h-[calc(100%+40px)] bg-gradient-to-b from-[rgba(206,255,102,0.3)] to-transparent pointer-events-none"></div>
            <h3 class="font-['Space_Grotesk'] text-base md:text-lg font-bold mb-2">Every touchpoint matters</h3>
            <p class="text-[#5a5a5a] text-sm md:text-[0.95rem] leading-relaxed font-['Inter']">Whether via telephone, email, or chat &mdash; each communication represents a unique opportunity to strengthen your relationship with the customer.</p>
          </div>
          <div class="reveal d3 relative pl-[60px] md:pl-20 group">
            <div class="absolute left-0 top-0 w-11 h-11 md:w-14 md:h-14 bg-[#ceff66] rounded-2xl flex items-center justify-center font-['Space_Grotesk'] text-lg md:text-xl font-bold text-[#111] shadow-[6px_6px_0_rgba(0,0,0,0.15)] transition-transform group-hover:scale-105 group-hover:-rotate-3">03</div>
            <h3 class="font-['Space_Grotesk'] text-base md:text-lg font-bold mb-2">Outstanding interactions</h3>
            <p class="text-[#5a5a5a] text-sm md:text-[0.95rem] leading-relaxed font-['Inter']">We ensure that each of your one-on-one interactions with a customer is outstanding &mdash; retaining existing customers while continually attracting new ones.</p>
          </div>
        </div>
      </div>

      <div class="reveal-right relative">
        <div class="grid grid-cols-2 gap-4">
          <div class="row-span-2 mt-10 rounded-2xl overflow-hidden aspect-[3/4] shadow-[0_30px_50px_-20px_rgba(0,0,0,0.2)]">
            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=800&auto=format&fit=crop" alt="Team" class="w-full h-full object-cover grayscale contrast-[1.05]">
          </div>
          <div class="rounded-2xl overflow-hidden aspect-square shadow-[0_20px_35px_-15px_rgba(0,0,0,0.15)]">
            <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=600&auto=format&fit=crop" alt="Office" class="w-full h-full object-cover grayscale contrast-[1.05]">
          </div>
          <div class="rounded-2xl overflow-hidden aspect-square shadow-[0_20px_35px_-15px_rgba(0,0,0,0.15)]">
            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=600&auto=format&fit=crop" alt="Meeting" class="w-full h-full object-cover grayscale contrast-[1.05]">
          </div>
        </div>
        <div class="absolute -bottom-6 -left-8 bg-black text-white rounded-2xl px-5 py-4 shadow-2xl z-10">
          <div class="font-['Space_Grotesk'] text-2xl md:text-3xl font-bold text-[#ceff66] tracking-[-0.03em] leading-none">3 channels</div>
          <div class="text-xs text-white/55 mt-1 font-['Inter']">Phone &middot; Email &middot; Chat</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== DARK COMMITMENT SECTION ========== -->
<section class="bg-[#0f0f0f] py-20 md:py-28 relative overflow-hidden">
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_30%_50%,rgba(206,255,102,0.07)_0%,transparent_65%)] pointer-events-none"></div>
  <div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 relative z-10">
    <div class="text-center mb-16">
      <div class="reveal inline-flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-semibold tracking-[0.28em] uppercase mb-5 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66] font-['Inter']">Our commitment</div>
      <h2 class="reveal d1 font-['Space_Grotesk'] text-[clamp(2rem,5vw,3.8rem)] font-bold leading-[1.08] tracking-[-0.025em] text-white max-w-[720px] mx-auto">
        Superior service is more than innovation &mdash; it's <span class="text-[#ceff66]">sustained excellence</span>
      </h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
      <div class="reveal-left bg-white/[0.04] border border-white/5 rounded-[32px] p-10">
        <div class="w-[52px] h-[52px] bg-[#ceff66] rounded-[14px] flex items-center justify-center mb-6 shadow-[8px_8px_0_rgba(0,0,0,0.3)]"><i class="fas fa-lightbulb text-2xl text-[#111]"></i></div>
        <h3 class="font-['Space_Grotesk'] text-xl md:text-2xl font-bold text-white mb-4">Innovative ideas that suit your needs</h3>
        <p class="text-white/55 text-[0.98rem] leading-relaxed font-['Inter']">Superior customer service requires not only the innovative ideas that suit your business needs, but the experience and knowledge to see that they are successfully implemented and maintained &mdash; which is the core value of OneStop Solutions Services.</p>
      </div>
      <div class="reveal-right bg-white/[0.04] border border-white/5 rounded-[32px] p-10">
        <div class="w-[52px] h-[52px] bg-[#ceff66] rounded-[14px] flex items-center justify-center mb-6 shadow-[8px_8px_0_rgba(0,0,0,0.3)]"><i class="fas fa-rocket text-2xl text-[#111]"></i></div>
        <h3 class="font-['Space_Grotesk'] text-xl md:text-2xl font-bold text-white mb-4">From implementation to ongoing success</h3>
        <p class="text-white/55 text-[0.98rem] leading-relaxed font-['Inter']">Our commitment, coupled with our combination of handpicked people, advanced processes and cutting-edge technologies, has made OneStop Solutions Services one of the leading strategic partners for the provision of one-stop outsourcing solutions.</p>
      </div>
    </div>
    <div class="reveal mt-16 text-center border-t border-white/5 pt-12">
      <p class="font-['Space_Grotesk'] text-[clamp(1.4rem,3.5vw,2.4rem)] font-bold text-white leading-[1.3] max-w-[800px] mx-auto">
        "We add value to your business by ensuring that each of your one-on-one interactions with a customer is <span class="text-[#ceff66]">outstanding.</span>"
      </p>
      <div class="inline-flex items-center gap-3 mt-6">
        <div class="w-9 h-9 rounded-full overflow-hidden bg-[#333]">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=200&auto=format&fit=crop" alt="CEO" class="w-full h-full object-cover grayscale">
        </div>
        <span class="text-sm text-white/45 font-['Inter']">&mdash; Founder &amp; CEO, OneStop Solutions</span>
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
        <div class="flex items-center gap-[10px] text-[#ceff66] text-[0.75rem] font-semibold tracking-[0.28em] uppercase mb-6 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66] font-['Inter']">Ready to get started?</div>
        <h2 class="font-['Space_Grotesk'] text-[clamp(2rem,5vw,3.8rem)] font-bold leading-[1.08] tracking-[-0.025em] text-white mb-5">
          Let's build something<br>exceptional together.
        </h2>
        <p class="text-white/55 text-base md:text-lg max-w-[500px] leading-relaxed mb-10 font-['Inter']">
          Whether you need a full BPO setup, a dedicated contact centre, or a results-driven marketing campaign &mdash; we have the team, technology and experience to deliver.
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="#" class="inline-flex items-center gap-2 rounded-full px-8 py-4 text-base font-semibold text-neutral-900 bg-gradient-to-br from-[#c5f467] to-[#a6e62c] hover:from-[#b3e04e] hover:to-[#93cd25] transition-all duration-300 shadow-2xl hover:-translate-y-0.5 font-['Inter']">
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
<?php @include('footer.php') ?>

<!-- ========== JAVASCRIPT ========== -->
<script>
  // ── Scroll progress + navbar hide/show ──────────────────────────────────
  const progressBar   = document.getElementById('scroll-progress');
  const navbarWrapper = document.getElementById('navbar-wrapper');
  let lastScrollY = 0;
  let ticking     = false;

  function handleNavbarScroll() {
    const cur = window.scrollY;
    if (cur <= 10) {
      navbarWrapper.classList.remove('nav-hidden');
    } else if (cur > lastScrollY + 5) {
      navbarWrapper.classList.add('nav-hidden');
    } else if (cur < lastScrollY - 5) {
      navbarWrapper.classList.remove('nav-hidden');
    }
    lastScrollY = cur;
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

  // ── Scroll reveal ────────────────────────────────────────────────────────
  const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  const revealObs = new IntersectionObserver((entries) => {
    entries.forEach(en => {
      if (en.isIntersecting) { en.target.classList.add('visible'); revealObs.unobserve(en.target); }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
  revealEls.forEach(el => revealObs.observe(el));

  // ── Transition delays ────────────────────────────────────────────────────
  document.querySelectorAll('.d1').forEach(el => el.style.transitionDelay = '0.08s');
  document.querySelectorAll('.d2').forEach(el => el.style.transitionDelay = '0.18s');
  document.querySelectorAll('.d3').forEach(el => el.style.transitionDelay = '0.28s');
  document.querySelectorAll('.d4').forEach(el => el.style.transitionDelay = '0.38s');
  document.querySelectorAll('.d5').forEach(el => el.style.transitionDelay = '0.48s');

  // ── Desktop: stacked cards scroll ───────────────────────────────────────
  const stackSection = document.getElementById('stack-section');
  if (stackSection && getComputedStyle(stackSection).display !== 'none') {
    const valCards = stackSection.querySelectorAll('.val-card');
    const dots     = document.querySelectorAll('.dot');

    function rotateCards() {
      let angle = 0;
      valCards.forEach((card, index) => {
        if (card.classList.contains('away')) {
          card.style.transform = 'translateY(-130vh) rotate(-52deg)';
          card.style.zIndex    = 0;
        } else {
          card.style.transform = `rotate(${angle}deg)`;
          card.style.zIndex    = valCards.length - index;
          angle -= 8;
        }
      });
    }

    function updateDots(activeIndex) {
      dots.forEach((dot, i) => dot.classList.toggle('active', i === activeIndex));
    }

    rotateCards();

    window.addEventListener('scroll', () => {
      const distance = window.innerHeight * 0.75;
      const topVal   = stackSection.getBoundingClientRect().top;
      let index      = Math.floor(-1 * (topVal / distance + 1));
      valCards.forEach((card, i) => card.classList.toggle('away', i <= index));
      const topVisible = Math.min(Math.max(index + 1, 0), valCards.length - 1);
      updateDots(topVisible);
      rotateCards();
    }, { passive: true });
  }
</script>

</body>
</html>