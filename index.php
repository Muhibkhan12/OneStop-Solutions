<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>One Stop Solutions – BPO & Contact Centre</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <style>
    /* ── RESET & ROOT ── */
    *,*::before,*::after { margin:0; padding:0; box-sizing:border-box; }
    :root { --lime:#ceff66; --lime-dark:#a6e62c; --ink:#111; --bg:#faf9f7; --muted:#5a5a5a; }
    html { scroll-behavior:smooth; }

    /* FIX: overflow-x hidden on html AND body prevents marquee from blowing out the viewport */
    html, body {
      font-family:'Inter',sans-serif;
      background:var(--bg);
      color:var(--ink);
      line-height:1.5;
      overflow-x:hidden; /* KEY FIX for marquee horizontal scroll */
    }
    h1,h2,h3,h4 { font-family:'Space Grotesk',sans-serif; }

    /* ── SCROLL REVEAL ── */
    .reveal { opacity:0; transform:translateY(52px); transition:opacity .9s cubic-bezier(.22,1,.36,1),transform .9s cubic-bezier(.22,1,.36,1); }
    .reveal.visible { opacity:1; transform:translateY(0); }
    /* FIX: reduce translateX so elements don't extend past viewport on mobile */
    .reveal-left  { opacity:0; transform:translateX(-40px); transition:opacity .9s cubic-bezier(.22,1,.36,1),transform .9s cubic-bezier(.22,1,.36,1); }
    .reveal-right { opacity:0; transform:translateX(40px);  transition:opacity .9s cubic-bezier(.22,1,.36,1),transform .9s cubic-bezier(.22,1,.36,1); }
    .reveal-left.visible, .reveal-right.visible { opacity:1; transform:translateX(0); }
    .d1{transition-delay:.08s} .d2{transition-delay:.18s} .d3{transition-delay:.28s} .d4{transition-delay:.38s}

    /* ── NAVBAR HIDE-ON-SCROLL ── */
    #navbar-wrapper {
      position:fixed; top:0; left:0; right:0; z-index:100;
      transition:transform 0.35s cubic-bezier(0.4,0,0.2,1);
      will-change:transform;
    }
    #navbar-wrapper.nav-hidden { transform:translateY(-100%); }

    /* ── HERO ── */
    .hero-overlay {
      background:linear-gradient(105deg,rgba(0,0,0,.82) 0%,rgba(0,0,0,.38) 55%,rgba(0,0,0,.05) 100%);
      pointer-events:none;
    }
    .btn-primary {
      font-family:'Inter',sans-serif; font-weight:600;
      background:linear-gradient(145deg,#c5f467,#a6e62c);
      transition:all .28s ease;
      box-shadow:0 10px 24px -8px rgba(166,230,44,.45);
    }
    .btn-primary:hover { background:linear-gradient(145deg,#b3e04e,#93cd25); transform:translateY(-2px); box-shadow:0 18px 28px -8px rgba(128,180,30,.5); }
    .btn-primary i { transition:transform .2s; }
    .btn-primary:hover i { transform:translateX(4px); }

    /* ── IMAGES ── */
    .main-image {
      width:100%; height:auto; border-radius:24px;
      box-shadow:0 40px 60px -28px rgba(0,0,0,.3);
      filter:grayscale(100%) contrast(1.08);
      object-fit:cover; display:block;
      transition:all .5s cubic-bezier(.2,.9,.3,1);
    }
    .main-image:hover { transform:scale(1.015); filter:grayscale(70%) contrast(1.05); }
    .secondary-img {
      width:100%; border-radius:16px;
      box-shadow:0 30px 40px -25px rgba(0,0,0,.25);
      filter:grayscale(100%) contrast(1.1);
      aspect-ratio:4/3; object-fit:cover;
      transition:all .45s ease;
    }
    .secondary-img:hover { transform:scale(1.02) translateY(-4px); }
    .decor-squares { position:absolute; top:-10px; right:20px; z-index:20; pointer-events:none; }
    .square-lime { width:85px; height:85px; background:var(--lime); position:absolute; top:0; right:60px; opacity:.9; transform:rotate(10deg); border-radius:18px; box-shadow:-10px 12px 25px -8px rgba(160,210,60,.25); }
    .square-dark { width:85px; height:85px; background:#1e1e24; position:absolute; top:30px; right:0; transform:rotate(-7deg); border-radius:18px; box-shadow:12px 15px 25px -10px rgba(0,0,0,.25); }

    /* ══════════════════════════════════════════
       BRANDS / MARQUEE — ALL FIXES HERE
    ══════════════════════════════════════════ */
    .brands-section {
      background:#0f0f0f;
      padding:60px 0 56px;
      /* FIX 1: clip the marquee so it cannot expand the page width */
      overflow:hidden;
      position:relative;
      /* FIX 2: isolate this section so its children can't escape */
      contain:layout style;
    }
    .brands-section::before {
      content:'';
      position:absolute; inset:0;
      background:radial-gradient(ellipse at 50% 50%,rgba(206,255,102,.06) 0%,transparent 70%);
      pointer-events:none;
    }
    .brands-label {
      font-family:'Inter',sans-serif; font-size:.78rem; font-weight:500;
      letter-spacing:.28em; text-transform:uppercase;
      color:rgba(255,255,255,.3); text-align:center; margin-bottom:3rem;
      /* FIX 3: pad so label doesn't hug edges on small phones */
      padding:0 1rem;
    }
    .brands-label span { display:inline-block; width:32px; height:1px; background:rgba(255,255,255,.2); vertical-align:middle; margin:0 12px; }

    .marquee-row {
      overflow:hidden; /* FIX 4: belt AND suspenders — clip inside too */
      width:100%;
    }
    .marquee-track {
      display:flex;
      white-space:nowrap;
      will-change:transform;
      /* FIX 5: width:max-content so the flex row doesn't wrap but stays in its clipped container */
      width:max-content;
    }
    .marquee-track.fwd { animation:marqueeFwd 32s linear infinite; }
    .marquee-track.rev { animation:marqueeRev 38s linear infinite; }
    .marquee-track:hover { animation-play-state:paused; }

    @keyframes marqueeFwd { from { transform:translateX(0); } to { transform:translateX(-50%); } }
    @keyframes marqueeRev { from { transform:translateX(-50%); } to { transform:translateX(0); } }

    .brand-item {
      display:inline-flex; align-items:center; gap:14px;
      padding:0 32px; /* FIX 6: tighter padding on all screens */
      flex-shrink:0;
      opacity:.4; transition:opacity .35s; cursor:default;
    }
    .brand-item:hover { opacity:1; }
    .brand-name {
      font-family:'Space Grotesk',sans-serif;
      font-size:1rem; /* FIX 7: smaller base font — was 1.15rem */
      font-weight:700; color:#fff; letter-spacing:-.01em;
      white-space:nowrap; /* keep each name on one line within the scrolling track */
    }
    .brand-dot { width:4px; height:4px; background:var(--lime); border-radius:50%; flex-shrink:0; margin-left:4px; }

    /* Scale brand items down further on small screens */
    @media (max-width:480px) {
      .brand-item { padding:0 20px; gap:10px; }
      .brand-name { font-size:.85rem; }
      .brand-dot  { width:3px; height:3px; }
    }

    /* ── SERVICES ── */
    .header-tag {
      font-family:'Inter',sans-serif; font-weight:500; font-size:.82rem;
      letter-spacing:.28em; text-transform:uppercase; color:#8f8f8f;
      display:block; margin-bottom:1rem;
      border-left:4px solid var(--lime); padding-left:1rem; line-height:1.2;
    }
    .header-title {
      font-family:'Space Grotesk',sans-serif;
      font-size:clamp(1.85rem,5vw,4.6rem); /* FIX: fluid, won't overflow at 320px */
      font-weight:700; line-height:1.08; letter-spacing:-.025em; color:var(--ink);
    }
    .header-title span {
      color:var(--ink);
      background:linear-gradient(145deg,var(--lime),#b3e845);
      padding:0 .12em .08em; display:inline-block;
      transform:skewX(-4deg) rotate(-1deg);
      box-shadow:-8px 8px 0 rgba(0,0,0,.14);
    }

    /* FIX: card grid breakpoints tightened */
    .card-grid {
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:1.25rem;
      position:relative; z-index:10;
    }
    @media(max-width:1024px) { .card-grid { grid-template-columns:repeat(2,1fr); } }
    @media(max-width:580px)  { .card-grid { grid-template-columns:1fr; } } /* FIX: was 600px, now 580 */

    .service-card-modern {
      border-radius:28px;
      transition:all 0.35s cubic-bezier(0.25,0.46,0.45,0.94);
      border:1px solid rgba(0,0,0,.04);
      box-shadow:0 10px 30px -15px rgba(0,0,0,.07);
      position:relative; overflow:hidden;
      display:flex; flex-direction:column;
      min-height:300px; /* FIX: slightly reduced min-height on small screens */
      background:transparent;
    }
    @media(min-width:768px) { .service-card-modern { min-height:340px; } }

    .card-bg-image {
      position:absolute; top:0; left:0;
      width:100%; height:100%;
      object-fit:cover; opacity:.92;
      transition:transform 0.7s ease;
      z-index:0; pointer-events:none;
      filter:grayscale(100%) brightness(0.85);
    }
    .service-card-modern:hover .card-bg-image { transform:scale(1.08); }
    .card-overlay {
      position:absolute; top:0; left:0; width:100%; height:100%;
      background:linear-gradient(180deg,rgba(0,0,0,.25) 0%,rgba(0,0,0,.65) 100%);
      z-index:1; pointer-events:none;
    }
    .service-card-modern::before {
      content:''; position:absolute; top:0; left:0; right:0; height:2px;
      background:linear-gradient(90deg,transparent,#ceff66,transparent);
      opacity:0; transition:opacity 0.3s ease; z-index:3;
    }
    .service-card-modern:hover { transform:translateY(-6px); border-color:rgba(206,255,102,.18); box-shadow:0 24px 48px -20px rgba(0,0,0,.18); }
    .service-card-modern:hover::before { opacity:1; }
    .card-content {
      display:flex; flex-direction:column; height:100%;
      position:relative; z-index:2;
      padding:1.5rem; /* FIX: tighter on mobile */
      color:white; text-shadow:0 2px 4px rgba(0,0,0,.3);
    }
    @media(min-width:640px) { .card-content { padding:2rem; } }

    .icon-wrapper { position:relative; width:48px; height:48px; margin-bottom:1.25rem; display:flex; align-items:center; justify-content:center; }
    .icon-dot { position:absolute; width:100%; height:100%; background:#ceff66; border-radius:14px; opacity:.28; transform:rotate(10deg); transition:transform 0.3s ease; }
    .service-card-modern:hover .icon-dot { transform:rotate(16deg) scale(1.12); }
    .icon-wrapper i { font-size:1.4rem; color:white; position:relative; z-index:2; transition:color .2s; }
    .service-card-modern:hover .icon-wrapper i { color:#ceff66; }
    .card-title { font-family:'Space Grotesk',sans-serif; font-size:1.1rem; font-weight:700; color:white; margin-bottom:.5rem; letter-spacing:-.01em; line-height:1.3; }
    .card-desc { font-family:'Inter',sans-serif; font-size:.85rem; line-height:1.6; color:rgba(255,255,255,.88); margin-bottom:1rem; flex-grow:1; }

    /* ── STATS ── */
    .stat-number {
      font-family:'Space Grotesk',sans-serif;
      font-size:clamp(2rem,6vw,4rem); /* fluid */
      font-weight:700; line-height:1; letter-spacing:-.03em;
      color:var(--lime);
      -webkit-text-stroke:2px var(--ink);
      text-shadow:4px 4px 0 var(--ink);
    }

    /* ── TESTIMONIALS ── */
    .lime-marker { background:var(--lime); width:32px; height:8px; border-radius:12px; margin-bottom:1.5rem; }
    .testimonial-card { background:#fff; border-radius:36px; padding:2.5rem 2rem; box-shadow:0 35px 60px -30px rgba(0,0,0,.28); border:1px solid #eee; }

    /* ── SWIPER ── */
    .swiper-pagination-bullet { background:#aaa; opacity:.5; transition:all .2s; }
    .swiper-pagination-bullet-active { background:var(--lime) !important; opacity:1; transform:scale(1.3); }
    .swiper-button-prev, .swiper-button-next { color:var(--ink); background:rgba(255,255,255,.92); width:44px; height:44px; border-radius:50%; box-shadow:0 8px 20px rgba(0,0,0,.08); transition:all .2s; }
    .swiper-button-prev:after, .swiper-button-next:after { font-size:1.1rem; font-weight:700; }
    .swiper-button-prev:hover, .swiper-button-next:hover { background:var(--lime); color:#000; }
    .swiper-slide { height:auto; }

    /* ── SCROLL PROGRESS ── */
    #scroll-progress { position:fixed; top:0; left:0; width:0%; height:3px; background:var(--lime); z-index:9999; transition:width .1s linear; box-shadow:0 0 10px rgba(206,255,102,.6); }

    /* ── MOBILE TWEAKS ── */
    @media(max-width:640px) {
      .brands-section { padding:48px 0 44px; }
      .testimonial-card { padding:1.75rem 1.25rem; border-radius:24px; }
      .swiper-button-prev, .swiper-button-next { width:36px; height:36px; }
      .stat-number { -webkit-text-stroke:1.5px var(--ink); }
    }
    @media(hover:none) {
      .service-card-modern:hover,
      .main-image:hover,
      .btn-primary:hover { transform:none !important; }
    }
  </style>
</head>
<body class="antialiased">

<!-- Scroll Progress -->
<div id="scroll-progress"></div>

<!-- ========== NAVBAR ========== -->
<div id="navbar-wrapper">
  <?php @include('navbar.php') ?>
</div>

<!-- ════════════════════════════════════════
     HERO
════════════════════════════════════════ -->
<!-- FIX: pt-16 so content isn't hidden under fixed navbar on mobile -->
<div class="relative w-full min-h-screen flex flex-col bg-neutral-900 pt-16 md:pt-0">
  <div class="absolute inset-0 overflow-hidden">
    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2940&auto=format&fit=crop"
         alt="Contact centre team"
         class="w-full h-full object-cover object-[center_30%]">
    <div class="absolute inset-0 hero-overlay"></div>
  </div>
  <div class="relative z-20 flex-1 flex flex-col justify-center px-5 pt-8 pb-4 md:px-12 lg:px-20">
    <div class="max-w-3xl">
      <p class="reveal text-xs sm:text-sm font-medium tracking-[0.22em] uppercase mb-5 text-[#ceff66] font-['Inter']">BPO &bull; Contact Centre &bull; Digital Marketing</p>
      <h1 class="reveal d1 text-white font-['Space_Grotesk'] font-bold tracking-[-0.025em] leading-[1.08]"
          style="font-size:clamp(2.2rem,7vw,5.2rem)"> <!-- FIX: fluid hero title -->
        Outsourcing that<br>builds real loyalty.
      </h1>
      <p class="reveal d2 text-white/65 text-sm sm:text-base md:text-lg mt-5 md:mt-8 max-w-md leading-relaxed font-['Inter']">
        Founded 2014, Karachi &mdash; we combine people, process &amp; technology to deliver customized BPO, contact centre &amp; marketing solutions worldwide.
      </p>
      <!-- FIX: flex-col on tiny screens, flex-row on sm+ -->
      <div class="reveal d3 mt-7 md:mt-10 flex flex-col sm:flex-row flex-wrap gap-3 sm:gap-4">
        <a href="contact.php" class="btn-primary inline-flex items-center justify-center gap-2 rounded-full px-7 py-3.5 text-base font-semibold text-neutral-900 shadow-xl">
          Let's connect <i class="fas fa-arrow-right text-sm"></i>
        </a>
        <a href="#" class="inline-flex items-center justify-center gap-2 border border-white/25 rounded-full px-7 py-3.5 text-base font-medium text-white hover:bg-white/10 transition-all font-['Inter']">
          24/7 support <i class="fas fa-headset text-xs"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- ════════════════════════════════════════
     FEATURE / ABOUT
════════════════════════════════════════ -->
<section class="w-full bg-white py-14 sm:py-20 md:py-28 lg:py-36 px-5 sm:px-8 md:px-12 lg:px-20 overflow-hidden relative">

  <div class="hidden xl:block absolute left-16 top-28 w-px h-64 bg-gradient-to-b from-transparent via-[#ceff66]/30 to-transparent pointer-events-none"></div>
  <div class="hidden xl:block absolute top-44 right-24 w-40 h-[3px] bg-[#ceff66] rounded-full opacity-70 pointer-events-none"></div>

  <div class="max-w-[1440px] mx-auto">
    <div class="flex flex-col lg:flex-row items-center gap-10 md:gap-14 lg:gap-20">

      <!-- IMAGE COL -->
      <div class="reveal-left w-full lg:w-1/2 flex justify-center">
        <div class="w-full max-w-sm sm:max-w-md md:max-w-lg lg:max-w-none">
          <img class="main-image"
               style="aspect-ratio:4/5;"
               src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=1974&auto=format&fit=crop"
               alt="Karachi team">
        </div>
      </div>

      <!-- TEXT COL -->
      <div class="w-full lg:w-1/2">
        <div class="reveal flex items-center gap-3 mb-4">
          <span class="w-7 h-px bg-[#ceff66]"></span>
          <p class="text-[#ceff66] text-[0.65rem] font-bold tracking-[0.25em] uppercase font-['Inter']">since 2014</p>
        </div>

        <h2 class="reveal d1 font-['Space_Grotesk'] font-bold leading-[1.12] tracking-[-0.025em] text-[#111] mb-5"
            style="font-size:clamp(1.7rem,4vw,3.1rem)"> <!-- FIX: fluid -->
          Personal communication is our strongest bond.
        </h2>

        <p class="reveal d2 text-[#5a5a5a] text-sm sm:text-base md:text-lg leading-relaxed mb-8 max-w-xl font-['Inter']">
          Anchored in Karachi, One Stop Solutions delivers customized outsourcing that improves customer satisfaction, retention, and profitability. We believe direct contact &mdash; phone, email, chat &mdash; builds trust that lasts.
        </p>

        <!-- FIX: secondary images stack more gracefully on mobile -->
        <div class="reveal d3 flex gap-3 sm:gap-4">
          <div class="w-1/2">
            <img class="secondary-img"
                 src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=2070&auto=format&fit=crop"
                 alt="Customer service agent">
          </div>
          <div class="w-1/2">
            <img class="secondary-img"
                 src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=1974&auto=format&fit=crop"
                 alt="Team discussion">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hidden xl:block decor-squares absolute bottom-10 right-10">
    <div class="square-lime"></div>
    <div class="square-dark"></div>
  </div>
</section>

<!-- ════════════════════════════════════════
     BRANDS / MARQUEE
     FIX: overflow:hidden on .brands-section AND .marquee-row
     prevents ANY horizontal scroll bleed onto the page
════════════════════════════════════════ -->
<section class="brands-section">
  <p class="reveal brands-label">
    <span></span>trusted by domestic &amp; global clients<span></span>
  </p>

  <!-- ROW 1: forward -->
  <div class="marquee-row mb-4">
    <div class="marquee-track fwd">
      <!-- Duplicate set (exact copy) so the loop is seamless at -50% -->
      <div class="brand-item"><span class="brand-name">Argosy BPO</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">TEK BUZZ</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">GATEWAY MERCHANT CAPITAL</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">VIRGO</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">CLICK MILLIONS</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">CANNET</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">NORTHERN LEASING SYSTEMS</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">THE MARKETING SOURCE</span><div class="brand-dot"></div></div>
      <!-- duplicate -->
      <div class="brand-item"><span class="brand-name">Argosy BPO</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">TEK BUZZ</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">GATEWAY MERCHANT CAPITAL</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">VIRGO</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">CLICK MILLIONS</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">CANNET</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">NORTHERN LEASING SYSTEMS</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">THE MARKETING SOURCE</span><div class="brand-dot"></div></div>
    </div>
  </div>

  <!-- ROW 2: reverse (bonus row — same fix applies) -->
  <div class="marquee-row">
    <div class="marquee-track rev">
      <div class="brand-item"><span class="brand-name">THE MARKETING SOURCE</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">NORTHERN LEASING SYSTEMS</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">CANNET</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">CLICK MILLIONS</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">VIRGO</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">GATEWAY MERCHANT CAPITAL</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">TEK BUZZ</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">Argosy BPO</span><div class="brand-dot"></div></div>
      <!-- duplicate -->
      <div class="brand-item"><span class="brand-name">THE MARKETING SOURCE</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">NORTHERN LEASING SYSTEMS</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">CANNET</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">CLICK MILLIONS</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">VIRGO</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">GATEWAY MERCHANT CAPITAL</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">TEK BUZZ</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">Argosy BPO</span><div class="brand-dot"></div></div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     SERVICES
════════════════════════════════════════ -->
<section class="w-full bg-white py-14 sm:py-20 md:py-28 lg:py-36 px-5 sm:px-8 md:px-12 lg:px-20 relative overflow-hidden">
  <div class="absolute -top-12 -right-12 w-64 h-64 bg-[#ceff66]/10 rounded-[48px] rotate-[25deg] pointer-events-none z-0"></div>

  <div class="max-w-[1440px] mx-auto relative z-10">

    <!-- FIX: services header stacks on mobile -->
    <div class="flex flex-col md:flex-row md:justify-between md:items-end mb-12 md:mb-20 gap-6 md:gap-8 relative z-10">
      <div>
        <span class="reveal header-tag">everything we deliver</span>
        <h2 class="reveal d1 header-title">Nine ways we help your<br><span>business grow</span></h2>
      </div>
      <p class="reveal d2 max-w-xs sm:max-w-sm text-[#4a4a4a] font-['Inter'] text-sm sm:text-base leading-relaxed border-b-2 border-[#ceff66] pb-4">
        From inbound calls to digital campaigns &mdash; every service is designed to reduce cost, increase loyalty, and drive measurable results.
      </p>
    </div>

    <div class="card-grid">
      <div class="reveal d1 service-card-modern">
        <img class="card-bg-image" src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=2069&auto=format&fit=crop" alt="inbound calls">
        <div class="card-overlay"></div>
        <div class="card-content">
          <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-headset"></i></div>
          <h3 class="card-title">Inbound Calls</h3>
          <p class="card-desc">Customer care, order taking, helpdesk &mdash; we handle high-volume inbound with empathy and efficiency.</p>
        </div>
      </div>
      <div class="reveal d2 service-card-modern">
        <img class="card-bg-image" src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1974&auto=format&fit=crop" alt="outbound calls">
        <div class="card-overlay"></div>
        <div class="card-content">
          <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-phone-alt"></i></div>
          <h3 class="card-title">Outbound Calls</h3>
          <p class="card-desc">Telemarketing, appointment setting, market research &mdash; proactive outreach that delivers results.</p>
        </div>
      </div>
      <div class="reveal d3 service-card-modern">
        <img class="card-bg-image" src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=1974&auto=format&fit=crop" alt="lead generation">
        <div class="card-overlay"></div>
        <div class="card-content">
          <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-filter"></i></div>
          <h3 class="card-title">Lead Generation</h3>
          <p class="card-desc">Qualified B2B &amp; B2C leads through multi-channel strategies that fill your pipeline with real opportunities.</p>
        </div>
      </div>
      <div class="reveal d1 service-card-modern">
        <img class="card-bg-image" src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?q=80&w=1200&auto=format&fit=crop" alt="customer quality services">
        <div class="card-overlay"></div>
        <div class="card-content">
          <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-star"></i></div>
          <h3 class="card-title">Customer &amp; Quality Services</h3>
          <p class="card-desc">Dedicated support, QA monitoring, and continuous improvement programs for superior customer experience.</p>
        </div>
      </div>
      <div class="reveal d2 service-card-modern">
        <img class="card-bg-image" src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=2070&auto=format&fit=crop" alt="digital marketing">
        <div class="card-overlay"></div>
        <div class="card-content">
          <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-bullhorn"></i></div>
          <h3 class="card-title">Digital Marketing</h3>
          <p class="card-desc">SEO, PPC, social media, content &mdash; data-driven campaigns that maximise ROI and grow your brand online.</p>
        </div>
      </div>
      <div class="reveal d3 service-card-modern">
        <img class="card-bg-image" src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?q=80&w=2069&auto=format&fit=crop" alt="web development">
        <div class="card-overlay"></div>
        <div class="card-content">
          <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-laptop-code"></i></div>
          <h3 class="card-title">Web Development</h3>
          <p class="card-desc">Custom websites, e-commerce, and portals &mdash; built for performance, conversion, and long-term scalability.</p>
        </div>
      </div>
      <div class="reveal d1 service-card-modern">
        <img class="card-bg-image" src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070&auto=format&fit=crop" alt="survey research">
        <div class="card-overlay"></div>
        <div class="card-content">
          <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-chart-pie"></i></div>
          <h3 class="card-title">Survey Research</h3>
          <p class="card-desc">Customer feedback, market studies, data collection &mdash; actionable insights gathered from real people at scale.</p>
        </div>
      </div>
      <div class="reveal d2 service-card-modern">
        <img class="card-bg-image" src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=600&auto=format&fit=crop" alt="winback programs">
        <div class="card-overlay"></div>
        <div class="card-content">
          <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-redo-alt"></i></div>
          <h3 class="card-title">Winback Programs</h3>
          <p class="card-desc">Re-engage lost customers, reduce churn, and recover revenue with tailored retention campaigns and empathetic outreach.</p>
        </div>
      </div>
      <div class="reveal d3 service-card-modern">
        <img class="card-bg-image" src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=600&auto=format&fit=crop" alt="technical support">
        <div class="card-overlay"></div>
        <div class="card-content">
          <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-tools"></i></div>
          <h3 class="card-title">Technical Support</h3>
          <p class="card-desc">Tier 1/2 support, troubleshooting, IT helpdesk &mdash; fast, reliable, and multilingual assistance your customers can count on.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════
     STATS
════════════════════════════════════════ -->
<div class="w-full bg-[#f4f3f0] py-16 md:py-28 px-5 sm:px-8 md:px-12 lg:px-20">
  <div class="max-w-[1440px] mx-auto">
    <!-- FIX: 2-col on mobile (was already correct), just tighten gap -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-14 text-center">
      <div class="reveal d1">
        <div class="stat-number">98%</div>
        <p class="text-xs font-medium uppercase tracking-widest mt-2 font-['Inter']">client retention</p>
        <div class="w-10 h-1 bg-lime-400 mx-auto mt-3"></div>
      </div>
      <div class="reveal d2">
        <div class="stat-number">50+</div>
        <p class="text-xs font-medium uppercase tracking-widest mt-2 font-['Inter']">global clients</p>
        <div class="w-10 h-1 bg-lime-400 mx-auto mt-3"></div>
      </div>
      <div class="reveal d3">
        <div class="stat-number">24/7</div>
        <p class="text-xs font-medium uppercase tracking-widest mt-2 font-['Inter']">coverage</p>
        <div class="w-10 h-1 bg-lime-400 mx-auto mt-3"></div>
      </div>
      <div class="reveal d4">
        <div class="stat-number">9+</div>
        <p class="text-xs font-medium uppercase tracking-widest mt-2 font-['Inter']">service lines</p>
        <div class="w-10 h-1 bg-lime-400 mx-auto mt-3"></div>
      </div>
    </div>

    <div class="reveal mt-14 md:mt-24 relative h-44 sm:h-56 md:h-80 w-full overflow-hidden rounded-2xl md:rounded-3xl">
      <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?q=80&w=2070&auto=format&fit=crop"
           class="w-full h-full object-cover grayscale brightness-95" alt="operations team">
      <div class="absolute inset-0 bg-gradient-to-r from-black/55 to-transparent flex items-center px-5 md:px-10">
        <!-- FIX: fluid font size on the quote -->
        <p class="text-white font-bold max-w-xs sm:max-w-sm md:max-w-xl font-['Space_Grotesk']"
           style="font-size:clamp(1rem,3vw,2.25rem); line-height:1.25;">
          "They don't just outsource &mdash; they partner."
        </p>
      </div>
    </div>
  </div>
</div>

<!-- ════════════════════════════════════════
     TESTIMONIALS
════════════════════════════════════════ -->
<div class="w-full bg-white py-16 md:py-32 px-5 sm:px-8 md:px-12 lg:px-20">
  <div class="max-w-[1440px] mx-auto">
    <div class="flex flex-col lg:flex-row gap-10 lg:gap-20 items-start lg:items-center">

      <div class="reveal-left lg:w-1/2 w-full">
        <div class="lime-marker"></div>
        <!-- FIX: fluid heading -->
        <h2 class="font-bold tracking-[-0.025em] leading-tight font-['Space_Grotesk']"
            style="font-size:clamp(1.75rem,5vw,3.75rem)">
          Relationships <span class="bg-lime-400 px-2 text-black">built</span> on every call, chat &amp; email
        </h2>
        <p class="text-gray-500 text-sm sm:text-base md:text-lg mt-5 max-w-md leading-relaxed font-['Inter']">
          A global logistics firm reduced churn by 34% after implementing our winback and quality survey programs.
        </p>
        <div class="mt-7 flex items-center gap-4">
          <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-full overflow-hidden grayscale flex-shrink-0">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop"
                 class="w-full h-full object-cover" alt="Ahmed">
          </div>
          <div>
            <p class="font-semibold font-['Space_Grotesk'] text-sm sm:text-base">Ahmed Raza</p>
            <p class="text-xs sm:text-sm text-gray-400 font-['Inter']">COO, TransWorld Logistics</p>
          </div>
        </div>
      </div>

      <div class="reveal-right lg:w-1/2 w-full">
        <div class="swiper testimonialSwiper pb-12">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-card relative">
                <i class="fa-solid fa-asterisk text-3xl font-bold text-lime-300 opacity-40 absolute top-5 right-5"></i>
                <p class="text-base sm:text-lg md:text-xl leading-relaxed relative z-10 font-['Inter']">"One Stop Solutions handles our overflow inbound with care. Their agents actually listen &mdash; our NPS jumped 22 points."</p>
                <div class="flex items-center gap-2 mt-6"><span class="text-lime-400 text-sm">&#9733;&#9733;&#9733;&#9733;&#9733;</span><span class="text-gray-400 text-xs font-['Inter']">(5.0)</span></div>
                <p class="text-xs sm:text-sm text-gray-400 mt-3 border-t border-gray-100 pt-3 font-['Inter']">&mdash; Maria G., client success lead</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-card relative">
                <i class="fa-solid fa-asterisk text-3xl font-bold text-lime-300 opacity-40 absolute top-5 right-5"></i>
                <p class="text-base sm:text-lg md:text-xl leading-relaxed relative z-10 font-['Inter']">"The data verification and survey services gave us clean, actionable insights. They're an extension of our team."</p>
                <div class="flex items-center gap-2 mt-6"><span class="text-lime-400 text-sm">&#9733;&#9733;&#9733;&#9733;&#9733;</span><span class="text-gray-400 text-xs font-['Inter']">(5.0)</span></div>
                <p class="text-xs sm:text-sm text-gray-400 mt-3 border-t border-gray-100 pt-3 font-['Inter']">&mdash; James K., market intelligence</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-card relative">
                <i class="fa-solid fa-asterisk text-3xl font-bold text-lime-300 opacity-40 absolute top-5 right-5"></i>
                <p class="text-base sm:text-lg md:text-xl leading-relaxed relative z-10 font-['Inter']">"From ticketing to tech support &mdash; they cover everything. We scaled our operations without scaling headcount."</p>
                <div class="flex items-center gap-2 mt-6"><span class="text-lime-400 text-sm">&#9733;&#9733;&#9733;&#9733;&#9733;</span><span class="text-gray-400 text-xs font-['Inter']">(5.0)</span></div>
                <p class="text-xs sm:text-sm text-gray-400 mt-3 border-t border-gray-100 pt-3 font-['Inter']">&mdash; Lena Schmidt, COO &middot; nexVent</p>
              </div>
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- ════════════════════════════════════════
     CTA
════════════════════════════════════════ -->
<div class="w-full bg-[#faf9f7] py-12 md:py-28 px-5 sm:px-8 md:px-12 lg:px-20">
  <div class="max-w-[1440px] mx-auto">
    <div class="reveal bg-black text-white rounded-2xl md:rounded-3xl px-5 py-14 sm:px-8 sm:py-16 md:p-16 lg:p-24 relative overflow-hidden">
      <div class="absolute -right-10 -top-10 w-48 md:w-64 h-48 md:h-64 bg-lime-400/10 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -left-10 -bottom-10 w-36 md:w-48 h-36 md:h-48 border-4 border-lime-400/20 rounded-full pointer-events-none"></div>
      <div class="relative z-20 max-w-3xl">
        <!-- FIX: fluid CTA heading -->
        <h2 class="font-bold tracking-tight font-['Space_Grotesk']"
            style="font-size:clamp(1.75rem,6vw,3.75rem); line-height:1.1;">
          Ready to outsource<br>without compromise?
        </h2>
        <p class="text-gray-300 text-sm sm:text-base md:text-lg mt-4 md:mt-6 max-w-lg leading-relaxed font-['Inter']">
          Let's design a solution that blends your culture with our operational excellence &mdash; from inbound to digital marketing.
        </p>
        <!-- FIX: stack buttons on mobile -->
        <div class="mt-8 md:mt-12 flex flex-col sm:flex-row flex-wrap gap-3 sm:gap-4 md:gap-6">
          <a href="#" class="btn-primary inline-flex items-center justify-center gap-3 rounded-full px-7 py-4 text-base md:text-lg font-semibold text-neutral-900 shadow-2xl">
            Start conversation <i class="fas fa-arrow-right text-sm"></i>
          </a>
          <a href="#" class="inline-flex items-center justify-center gap-2 border border-white/30 rounded-full px-7 py-4 text-base md:text-lg font-medium text-white hover:bg-white/10 transition-all font-['Inter']">
            Explore services
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php @include('footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
  new Swiper('.testimonialSwiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: { delay: 6000, disableOnInteraction: false, pauseOnMouseEnter: true },
    speed: 700,
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' }
  });
});

// ── Scroll progress + navbar hide/show ──
const progressBar   = document.getElementById('scroll-progress');
const navbarWrapper = document.getElementById('navbar-wrapper');
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
  if (m > 0) progressBar.style.width = (s / m * 100) + '%';
  if (!ticking) {
    requestAnimationFrame(handleNavbarScroll);
    ticking = true;
  }
}, { passive: true });

// ── Reveal on scroll ──
const els = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
const obs = new IntersectionObserver((entries) => {
  entries.forEach(en => {
    if (en.isIntersecting) { en.target.classList.add('visible'); obs.unobserve(en.target); }
  });
}, { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });
els.forEach(el => obs.observe(el));
</script>
</body>
</html>