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
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
    :root{--lime:#ceff66;--lime-dark:#a6e62c;--ink:#111;--bg:#faf9f7;--muted:#5a5a5a;}
    html{scroll-behavior:smooth}
    body{font-family:'Inter',sans-serif;background:var(--bg);color:var(--ink);line-height:1.5;overflow-x:hidden}
    h1,h2,h3,h4{font-family:'Space Grotesk',sans-serif;}

    /* SCROLL REVEAL */
    .reveal{opacity:0;transform:translateY(52px);transition:opacity .9s cubic-bezier(.22,1,.36,1),transform .9s cubic-bezier(.22,1,.36,1)}
    .reveal.visible{opacity:1;transform:translateY(0)}
    .reveal-left{opacity:0;transform:translateX(-60px);transition:opacity .9s cubic-bezier(.22,1,.36,1),transform .9s cubic-bezier(.22,1,.36,1)}
    .reveal-right{opacity:0;transform:translateX(60px);transition:opacity .9s cubic-bezier(.22,1,.36,1),transform .9s cubic-bezier(.22,1,.36,1)}
    .reveal-left.visible,.reveal-right.visible{opacity:1;transform:translateX(0)}
    .d1{transition-delay:.08s}.d2{transition-delay:.18s}.d3{transition-delay:.28s}.d4{transition-delay:.38s}

    /* HERO */
    .hero-overlay{background:linear-gradient(105deg,rgba(0,0,0,.82) 0%,rgba(0,0,0,.38) 55%,rgba(0,0,0,.05) 100%);pointer-events:none}
    .btn-primary{font-family:'Inter',sans-serif;font-weight:600;background:linear-gradient(145deg,#c5f467,#a6e62c);transition:all .28s ease;box-shadow:0 10px 24px -8px rgba(166,230,44,.45)}
    .btn-primary:hover{background:linear-gradient(145deg,#b3e04e,#93cd25);transform:translateY(-2px);box-shadow:0 18px 28px -8px rgba(128,180,30,.5)}
    .btn-primary i{transition:transform .2s}
    .btn-primary:hover i{transform:translateX(4px)}

    /* FEATURE */
    .section-premium{max-width:1440px;margin:0 auto;padding:110px 80px;position:relative;background:#fafafa}
    .vertical-divider{position:absolute;top:120px;left:60px;width:1px;height:260px;background:linear-gradient(to bottom,transparent,rgba(0,0,0,.12),transparent);z-index:1}
    .lime-accent-line{position:absolute;top:180px;right:100px;width:160px;height:3px;background:var(--lime);border-radius:4px;opacity:.7;z-index:2}
    .two-col{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start;position:relative;z-index:10}
    .main-image{width:100%;height:auto;border-radius:24px;box-shadow:0 40px 60px -28px rgba(0,0,0,.3);filter:grayscale(100%) contrast(1.08);object-fit:cover;aspect-ratio:1/1.08;display:block;transition:all .5s cubic-bezier(.2,.9,.3,1)}
    .main-image:hover{transform:scale(1.015);filter:grayscale(70%) contrast(1.05)}
    .feat-heading{font-family:'Space Grotesk',sans-serif;font-size:clamp(32px,4.5vw,54px);font-weight:700;line-height:1.12;letter-spacing:-.025em;color:var(--ink);margin-bottom:1.6rem}
    .feat-body{font-family:'Inter',sans-serif;font-size:1.05rem;color:var(--muted);max-width:520px;margin-bottom:2.5rem;line-height:1.7}
    .secondary-img{width:70%;max-width:360px;border-radius:24px;box-shadow:0 30px 40px -25px rgba(0,0,0,.25);filter:grayscale(100%) contrast(1.1);aspect-ratio:4/3;object-fit:cover;transition:all .45s ease}
    .secondary-img:hover{transform:scale(1.02) translateY(-4px)}
    .decor-squares{position:absolute;top:-10px;right:20px;z-index:20;pointer-events:none}
    .square-lime{width:85px;height:85px;background:var(--lime);position:absolute;top:0;right:60px;opacity:.9;transform:rotate(10deg);border-radius:18px;box-shadow:-10px 12px 25px -8px rgba(160,210,60,.25)}
    .square-dark{width:85px;height:85px;background:#1e1e24;position:absolute;top:30px;right:0;transform:rotate(-7deg);border-radius:18px;box-shadow:12px 15px 25px -10px rgba(0,0,0,.25)}

    /* BRANDS */
    .brands-section{background:#0f0f0f;padding:80px 0 72px;overflow:hidden;position:relative}
    .brands-section::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse at 50% 50%,rgba(206,255,102,.06) 0%,transparent 70%);pointer-events:none}
    .brands-label{font-family:'Inter',sans-serif;font-size:.78rem;font-weight:500;letter-spacing:.28em;text-transform:uppercase;color:rgba(255,255,255,.3);text-align:center;margin-bottom:3.5rem}
    .brands-label span{display:inline-block;width:32px;height:1px;background:rgba(255,255,255,.2);vertical-align:middle;margin:0 12px}
    .marquee-row{overflow:hidden}
    .marquee-track{display:flex;white-space:nowrap;will-change:transform}
    .marquee-track.fwd{animation:marqueeFwd 32s linear infinite}
    .marquee-track.rev{animation:marqueeRev 38s linear infinite}
    .marquee-track:hover{animation-play-state:paused}
    @keyframes marqueeFwd{from{transform:translateX(0)}to{transform:translateX(-50%)}}
    @keyframes marqueeRev{from{transform:translateX(-50%)}to{transform:translateX(0)}}
    .brand-item{display:inline-flex;align-items:center;gap:14px;padding:0 44px;flex-shrink:0;opacity:.4;transition:opacity .35s;cursor:default}
    .brand-item:hover{opacity:1}
    .brand-icon{width:36px;height:36px;background:rgba(255,255,255,.08);border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0}
    .brand-icon img{width:22px;height:22px;filter:brightness(0) invert(1);object-fit:contain}
    .brand-name{font-family:'Space Grotesk',sans-serif;font-size:1.15rem;font-weight:700;color:#fff;letter-spacing:-.01em}
    .brand-dot{width:4px;height:4px;background:var(--lime);border-radius:50%;flex-shrink:0;margin-left:4px}
    .brands-divider{width:100%;height:1px;background:rgba(255,255,255,.05);margin:40px 0}

    /* ================================================================
       SERVICES — 9-card grid with visible bg images
       ================================================================ */
    .services-modern{
      max-width:1440px;
      margin:0 auto;
      padding:120px 80px;
      background:#fff;
      position:relative;
      overflow:hidden
    }
    .services-modern::before{
      content:'';
      position:absolute;
      top:-50px;right:-50px;
      width:280px;height:280px;
      background:rgba(206,255,102,.1);
      border-radius:48px;
      transform:rotate(25deg);
      z-index:0;pointer-events:none
    }
    .service-header{
      position:relative;z-index:5;
      display:flex;flex-wrap:wrap;
      justify-content:space-between;align-items:flex-end;
      margin-bottom:5rem;gap:2rem
    }
    .header-tag{
      font-family:'Inter',sans-serif;font-weight:500;font-size:.82rem;
      letter-spacing:.28em;text-transform:uppercase;color:#8f8f8f;
      display:block;margin-bottom:1rem;
      border-left:4px solid var(--lime);padding-left:1rem;line-height:1.2
    }
    .header-title{
      font-family:'Space Grotesk',sans-serif;font-size:clamp(2.4rem,6vw,4.6rem);
      font-weight:700;line-height:1.08;letter-spacing:-.025em;
      max-width:800px;color:var(--ink)
    }
    .header-title span{
      color:var(--ink);
      background:linear-gradient(145deg,var(--lime),#b3e845);
      padding:0 .12em .08em;display:inline-block;
      transform:skewX(-4deg) rotate(-1deg);
      box-shadow:-8px 8px 0 rgba(0,0,0,.14)
    }
    .header-desc{
      max-width:340px;color:#4a4a4a;
      font-family:'Inter',sans-serif;font-size:1.05rem;line-height:1.65;
      border-bottom:2px solid var(--lime);padding-bottom:1rem
    }

    /* 3-column grid, 3 rows = 9 cards */
    .card-grid{
      display:grid;
      grid-template-columns:repeat(3,1fr);
      gap:1.5rem;
      position:relative;z-index:10
    }

    .service-card-modern{
      border-radius:32px;padding:0;
      transition:all 0.35s cubic-bezier(0.25,0.46,0.45,0.94);
      border:1px solid rgba(0,0,0,.04);
      box-shadow:0 10px 30px -15px rgba(0,0,0,.07);
      position:relative;overflow:hidden;
      display:flex;flex-direction:column;
      min-height:380px;background:transparent
    }
    .card-bg-image{
      position:absolute;top:0;left:0;
      width:100%;height:100%;
      object-fit:cover;opacity:.92;
      transition:transform 0.7s ease;
      z-index:0;pointer-events:none;
      filter:grayscale(100%) brightness(0.85)
    }
    .service-card-modern:hover .card-bg-image{transform:scale(1.08)}
    .card-overlay{
      position:absolute;top:0;left:0;
      width:100%;height:100%;
      background:linear-gradient(180deg,rgba(0,0,0,.25) 0%,rgba(0,0,0,.65) 100%);
      z-index:1;pointer-events:none
    }
    .service-card-modern::before{
      content:'';position:absolute;
      top:0;left:0;right:0;height:2px;
      background:linear-gradient(90deg,transparent,#ceff66,transparent);
      opacity:0;transition:opacity 0.3s ease;z-index:3
    }
    .service-card-modern:hover{
      transform:translateY(-6px);
      border-color:rgba(206,255,102,.18);
      box-shadow:0 24px 48px -20px rgba(0,0,0,.18)
    }
    .service-card-modern:hover::before{opacity:1}

    .card-content{
      display:flex;flex-direction:column;height:100%;
      position:relative;z-index:2;
      padding:2rem;color:white;
      text-shadow:0 2px 4px rgba(0,0,0,.3)
    }
    .icon-wrapper{
      position:relative;width:48px;height:48px;
      margin-bottom:1.5rem;
      display:flex;align-items:center;justify-content:center
    }
    .icon-dot{
      position:absolute;width:100%;height:100%;
      background:#ceff66;border-radius:14px;opacity:.28;
      transform:rotate(10deg);transition:transform 0.3s ease
    }
    .service-card-modern:hover .icon-dot{transform:rotate(16deg) scale(1.12)}
    .icon-wrapper i{font-size:1.4rem;color:white;position:relative;z-index:2;transition:color .2s}
    .service-card-modern:hover .icon-wrapper i{color:#ceff66}
    .card-title{
      font-family:'Space Grotesk',sans-serif;
      font-size:1.25rem;font-weight:700;color:white;
      margin-bottom:.6rem;letter-spacing:-.01em;line-height:1.3
    }
    .card-desc{
      font-family:'Inter',sans-serif;font-size:.9rem;
      line-height:1.65;color:rgba(255,255,255,.88);
      margin-bottom:1.25rem;flex-grow:1
    }
    .card-footer{
      display:flex;align-items:center;gap:.5rem;
      margin-top:auto;padding-top:.9rem;
      border-top:1px solid rgba(255,255,255,.18)
    }
    .card-link{
      font-family:'Inter',sans-serif;font-size:.8rem;font-weight:500;
      color:rgba(255,255,255,.8);text-transform:uppercase;letter-spacing:.05em;
      transition:color .2s
    }
    .card-footer i{font-size:.65rem;color:rgba(255,255,255,.5);transition:transform .2s,color .2s}
    .service-card-modern:hover .card-link{color:#ceff66}
    .service-card-modern:hover .card-footer i{transform:translateX(4px);color:#ceff66}

    /* STATS */
    .stat-number{font-family:'Space Grotesk',sans-serif;font-size:clamp(2.4rem,7vw,4rem);font-weight:700;line-height:1;letter-spacing:-.03em;color:var(--lime);-webkit-text-stroke:2px var(--ink);text-shadow:4px 4px 0 var(--ink)}

    /* TESTIMONIALS */
    .lime-marker{background:var(--lime);width:32px;height:8px;border-radius:12px;margin-bottom:1.5rem}
    .testimonial-card{background:#fff;border-radius:36px;padding:3rem 2.5rem;box-shadow:0 35px 60px -30px rgba(0,0,0,.28);border:1px solid #eee}

    /* SWIPER */
    .swiper-pagination-bullet{background:#aaa;opacity:.5;transition:all .2s}
    .swiper-pagination-bullet-active{background:var(--lime)!important;opacity:1;transform:scale(1.3)}
    .swiper-button-prev,.swiper-button-next{color:var(--ink);background:rgba(255,255,255,.92);width:44px;height:44px;border-radius:50%;box-shadow:0 8px 20px rgba(0,0,0,.08);transition:all .2s}
    .swiper-button-prev:after,.swiper-button-next:after{font-size:1.1rem;font-weight:700}
    .swiper-button-prev:hover,.swiper-button-next:hover{background:var(--lime);color:#000}
    .swiper-slide{height:auto}

    /* SCROLL PROGRESS */
    #scroll-progress{position:fixed;top:0;left:0;width:0%;height:3px;background:var(--lime);z-index:999;transition:width .1s linear;box-shadow:0 0 10px rgba(206,255,102,.6)}

    /* RESPONSIVE */
    @media(max-width:1100px){
      .section-premium{padding:80px 48px}
      .two-col{gap:48px}
      .vertical-divider{left:36px}
      .lime-accent-line{right:48px}
      .services-modern{padding:100px 48px}
      .card-grid{gap:1.25rem}
    }
    @media(max-width:1024px){
      .card-grid{grid-template-columns:repeat(2,1fr)}
    }
    @media(max-width:900px){
      .section-premium{padding:64px 32px}
      .two-col{grid-template-columns:1fr;gap:40px}
      .vertical-divider,.lime-accent-line{display:none}
      .main-image{aspect-ratio:16/9}
      .secondary-img{width:62%}
      .decor-squares{right:16px}
      .square-lime,.square-dark{width:60px;height:60px;border-radius:12px}
      .square-dark{top:22px}
      .services-modern{padding:80px 32px}
      .service-header{flex-direction:column;align-items:flex-start}
      .header-desc{max-width:100%}
      .testimonial-card{padding:2rem 1.5rem}
    }
    @media(max-width:640px){
      .section-premium{padding:56px 20px}
      .feat-heading{font-size:clamp(28px,8vw,40px)}
      .feat-body{font-size:.95rem;margin-bottom:1.5rem}
      .secondary-img{width:82%}
      .services-modern{padding:60px 20px}
      .card-grid{grid-template-columns:1fr}
      .service-card-modern{min-height:340px}
      .card-content{padding:1.5rem}
      .card-title{font-size:1.15rem}
      .stat-number{font-size:2.5rem}
      .testimonial-card{padding:1.75rem 1.25rem;border-radius:24px}
      .swiper-button-prev,.swiper-button-next{width:36px;height:36px}
      .brands-section{padding:60px 0 56px}
      .brand-name{font-size:1rem}
      .brand-item{padding:0 28px}
    }
    @media(max-width:380px){
      .feat-heading{font-size:26px}
      .stat-number{font-size:2.1rem;-webkit-text-stroke:1.5px var(--ink)}
    }
    @media(hover:none){
      .service-card-modern:hover,.main-image:hover,.btn-primary:hover{transform:none!important}
    }
  </style>
</head>
<body class="antialiased">
  <?php @include('navbar.php'); ?>

<div id="scroll-progress"></div>

<!-- ========== HERO ========== -->
<!-- Changed to full screen height with min-h-screen -->
<div class="relative w-full min-h-screen flex flex-col bg-neutral-900">
  <div class="absolute inset-0 overflow-hidden">
    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2940&auto=format&fit=crop" alt="Contact centre team" class="w-full h-full object-cover object-[center_30%]">
    <div class="absolute inset-0 hero-overlay"></div>
  </div>
  <div class="relative z-20 flex-1 flex flex-col justify-center px-5 pt-8 pb-4 md:px-12 lg:px-20">
    <div class="max-w-3xl">
      <p class="reveal text-sm font-medium tracking-[0.22em] uppercase mb-5 text-[#ceff66] font-['Inter']">BPO &bull; Contact Centre &bull; Digital Marketing</p>
      <h1 class="reveal d1 text-white font-['Space_Grotesk'] font-bold tracking-[-0.025em] leading-[1.08] text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-[5.2rem]">Outsourcing that<br>builds real loyalty.</h1>
      <p class="reveal d2 text-white/65 text-base sm:text-lg mt-6 md:mt-8 max-w-md leading-relaxed font-['Inter']">Founded 2014, Karachi &mdash; we combine people, process &amp; technology to deliver customized BPO, contact centre &amp; marketing solutions worldwide.</p>
      <div class="reveal d3 mt-8 md:mt-10 flex flex-wrap gap-4">
        <a href="#" class="btn-primary inline-flex items-center gap-2 rounded-full px-7 py-3.5 md:px-8 md:py-4 text-base font-semibold text-neutral-900 shadow-xl">Let's connect <i class="fas fa-arrow-right text-sm"></i></a>
        <a href="#" class="inline-flex items-center gap-2 border border-white/25 rounded-full px-7 py-3.5 text-base font-medium text-white hover:bg-white/10 transition-all font-['Inter']">24/7 support <i class="fas fa-headset text-xs"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- ========== FEATURE (About) ========== -->
<div class="section-premium w-full bg-white py-12 sm:py-16 md:py-24 px-4 sm:px-6 md:px-8 lg:px-12 overflow-hidden">
  <div class="vertical-divider hidden xl:block absolute left-[10%] top-0 w-px h-full bg-gradient-to-b from-transparent via-[#ceff66]/30 to-transparent"></div>
  <div class="lime-accent-line hidden xl:block absolute top-20 left-0 w-20 h-1 bg-[#ceff66]"></div>
  <div class="max-w-[1440px] mx-auto">
    <div class="two-col flex flex-col lg:flex-row gap-8 md:gap-12 lg:gap-16 items-center">
      <div class="reveal-left w-full lg:w-1/2 flex justify-center order-2 lg:order-1">
        <div class="relative w-full max-w-[90%] sm:max-w-[80%] md:max-w-[70%] lg:max-w-none">
          <img class="main-image w-full h-[83%] object-cover rounded-2xl md:rounded-3xl shadow-[0_30px_50px_-20px_rgba(0,0,0,0.3)]"
            src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=1974&auto=format&fit=crop"
            alt="Karachi team" style="aspect-ratio:4/5;">
        </div>
      </div>
      <div class="w-full lg:w-1/2 order-1 lg:order-2">
        <div class="reveal flex items-center gap-2 sm:gap-3 mb-3 sm:mb-5">
          <span class="w-6 sm:w-8 h-px bg-[#ceff66]"></span>
          <p class="text-[#ceff66] text-[0.6rem] sm:text-[0.7rem] font-bold tracking-[0.2em] sm:tracking-[0.25em] uppercase font-['Inter']">since 2014</p>
        </div>
        <h2 class="reveal d1 feat-heading font-['Space_Grotesk'] text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-[1.2] tracking-[-0.02em] text-[#111] mb-3 sm:mb-5">
          Personal communication is our strongest bond.
        </h2>
        <p class="reveal d2 feat-body text-[#5a5a5a] text-sm sm:text-base md:text-lg leading-relaxed mb-6 sm:mb-8 max-w-xl font-['Inter']">
          Anchored in Karachi, One Stop Solutions delivers customized outsourcing that improves customer satisfaction, retention, and profitability. We believe direct contact &mdash; phone, email, chat, SMS, fax &mdash; builds trust that lasts.
        </p>
        <div class="reveal flex d3 mt-6 sm:mt-8 md:mt-10 gap-3 sm:gap-4 flex-col sm:flex-row">
          <div class="w-full sm:w-1/2">
            <img class="secondary-img w-full h-auto object-cover rounded-lg sm:rounded-xl md:rounded-2xl shadow-md sm:shadow-lg"
              src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?q=80&w=2070&auto=format&fit=crop"
              alt="Customer service agent" style="aspect-ratio:4/3;width:100%;">
          </div>
          <div class="w-full sm:w-1/2">
            <img class="secondary-img w-full h-auto object-cover rounded-lg sm:rounded-xl md:rounded-2xl shadow-md sm:shadow-lg"
              src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=1974&auto=format&fit=crop"
              alt="Team discussion" style="aspect-ratio:4/3;width:100%;">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="decor-squares hidden xl:block absolute bottom-10 right-10">
    <div class="square-lime w-16 md:w-20 h-16 md:h-20 bg-[#ceff66]/10 rotate-12 absolute -right-4 -bottom-4"></div>
    <div class="square-dark w-20 md:w-24 h-20 md:h-24 bg-[#111]/5 -rotate-6 absolute right-0 bottom-0"></div>
  </div>
</div>

<!-- ========== BRANDS ========== -->
<section class="brands-section">
  <p class="reveal brands-label"><span></span>trusted by domestic &amp; global clients<span></span></p>
  <div class="marquee-row">
    <div class="marquee-track fwd">
      <div class="brand-item"><span class="brand-name">Argosy BPO</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">TEK BUZZ</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">GATEWAY MERCHANT CAPITAL</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">VIRGO</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">CLICK MILLIONS</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">CANNET</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">NORTHERN LEASING SYSTEMS</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">THE MARKETING SOURCE</span><div class="brand-dot"></div></div>
      <!-- duplicate for seamless loop -->
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
</section>

<!-- ========== SERVICES — 9 cards, 3×3 ========== -->
<section class="services-modern">
  <div class="service-header">
    <div>
      <span class="reveal header-tag">everything we deliver</span>
      <h2 class="reveal d1 header-title">Nine ways we help your<br><span>business grow</span></h2>
    </div>
    <p class="reveal d2 header-desc">From inbound calls to digital campaigns &mdash; every service is designed to reduce cost, increase loyalty, and drive measurable results.</p>
  </div>

  <div class="card-grid">

    <!-- 1 — Inbound Calls -->
    <div class="reveal d1 service-card-modern">
      <img class="card-bg-image" src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?q=80&w=2069&auto=format&fit=crop" alt="inbound calls">
      <div class="card-overlay"></div>
      <div class="card-content">
        <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-headset"></i></div>
        <h3 class="card-title">Inbound Calls</h3>
        <p class="card-desc">Customer care, order taking, helpdesk &mdash; we handle high-volume inbound with empathy and efficiency.</p>
        <div class="card-footer"><span class="card-link">Learn more</span><i class="fas fa-arrow-right"></i></div>
      </div>
    </div>

    <!-- 2 — Outbound Calls -->
    <div class="reveal d2 service-card-modern">
      <img class="card-bg-image" src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1974&auto=format&fit=crop" alt="outbound calls">
      <div class="card-overlay"></div>
      <div class="card-content">
        <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-phone-alt"></i></div>
        <h3 class="card-title">Outbound Calls</h3>
        <p class="card-desc">Telemarketing, appointment setting, market research &mdash; proactive outreach that delivers results.</p>
        <div class="card-footer"><span class="card-link">Learn more</span><i class="fas fa-arrow-right"></i></div>
      </div>
    </div>

    <!-- 3 — Lead Generation -->
    <div class="reveal d3 service-card-modern">
      <img class="card-bg-image" src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=1974&auto=format&fit=crop" alt="lead generation">
      <div class="card-overlay"></div>
      <div class="card-content">
        <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-filter"></i></div>
        <h3 class="card-title">Lead Generation</h3>
        <p class="card-desc">Qualified B2B &amp; B2C leads through multi-channel strategies that fill your pipeline with real opportunities.</p>
        <div class="card-footer"><span class="card-link">Learn more</span><i class="fas fa-arrow-right"></i></div>
      </div>
    </div>

    <!-- 4 — Customer & Quality Services -->
    <div class="reveal d1 service-card-modern">
      <img class="card-bg-image" src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?q=80&w=1200&auto=format&fit=crop" alt="customer quality services">
      <div class="card-overlay"></div>
      <div class="card-content">
        <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-star"></i></div>
        <h3 class="card-title">Customer &amp; Quality Services</h3>
        <p class="card-desc">Dedicated support, QA monitoring, and continuous improvement programs for superior customer experience.</p>
        <div class="card-footer"><span class="card-link">Learn more</span><i class="fas fa-arrow-right"></i></div>
      </div>
    </div>

    <!-- 5 — Digital Marketing -->
    <div class="reveal d2 service-card-modern">
      <img class="card-bg-image" src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?q=80&w=2070&auto=format&fit=crop" alt="digital marketing">
      <div class="card-overlay"></div>
      <div class="card-content">
        <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-bullhorn"></i></div>
        <h3 class="card-title">Digital Marketing</h3>
        <p class="card-desc">SEO, PPC, social media, content &mdash; data-driven campaigns that maximise ROI and grow your brand online.</p>
        <div class="card-footer"><span class="card-link">Learn more</span><i class="fas fa-arrow-right"></i></div>
      </div>
    </div>

    <!-- 6 — Web Development -->
    <div class="reveal d3 service-card-modern">
      <img class="card-bg-image" src="https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?q=80&w=2069&auto=format&fit=crop" alt="web development">
      <div class="card-overlay"></div>
      <div class="card-content">
        <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-laptop-code"></i></div>
        <h3 class="card-title">Web Development</h3>
        <p class="card-desc">Custom websites, e-commerce, and portals &mdash; built for performance, conversion, and long-term scalability.</p>
        <div class="card-footer"><span class="card-link">Learn more</span><i class="fas fa-arrow-right"></i></div>
      </div>
    </div>

    <!-- 7 — Survey Research -->
    <div class="reveal d1 service-card-modern">
      <img class="card-bg-image" src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070&auto=format&fit=crop" alt="survey research">
      <div class="card-overlay"></div>
      <div class="card-content">
        <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-chart-pie"></i></div>
        <h3 class="card-title">Survey Research</h3>
        <p class="card-desc">Customer feedback, market studies, data collection &mdash; actionable insights gathered from real people at scale.</p>
        <div class="card-footer"><span class="card-link">Learn more</span><i class="fas fa-arrow-right"></i></div>
      </div>
    </div>

    <!-- 8 — Winback Programs -->
    <div class="reveal d2 service-card-modern">
      <img class="card-bg-image" src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=600&auto=format&fit=crop" alt="winback programs">
      <div class="card-overlay"></div>
      <div class="card-content">
        <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-redo-alt"></i></div>
        <h3 class="card-title">Winback Programs</h3>
        <p class="card-desc">Re-engage lost customers, reduce churn, and recover revenue with tailored retention campaigns and empathetic outreach.</p>
        <div class="card-footer"><span class="card-link">Learn more</span><i class="fas fa-arrow-right"></i></div>
      </div>
    </div>

    <!-- 9 — Technical Support -->
    <div class="reveal d3 service-card-modern">
      <img class="card-bg-image" src="https://images.unsplash.com/photo-1553877522-43269d4ea984?q=80&w=600&auto=format&fit=crop" alt="technical support">
      <div class="card-overlay"></div>
      <div class="card-content">
        <div class="icon-wrapper"><div class="icon-dot"></div><i class="fas fa-tools"></i></div>
        <h3 class="card-title">Technical Support</h3>
        <p class="card-desc">Tier 1/2 support, troubleshooting, IT helpdesk &mdash; fast, reliable, and multilingual assistance your customers can count on.</p>
        <div class="card-footer"><span class="card-link">Learn more</span><i class="fas fa-arrow-right"></i></div>
      </div>
    </div>

  </div><!-- /.card-grid -->
</section>

<!-- ========== STATS ========== -->
<div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-20 md:py-28 bg-[#f4f3f0]">
  <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-14 text-center">
    <div class="reveal d1"><div class="stat-number">98%</div><p class="text-xs sm:text-sm font-medium uppercase tracking-widest mt-2 font-['Inter']">client retention</p><div class="w-10 h-1 bg-lime-400 mx-auto mt-3"></div></div>
    <div class="reveal d2"><div class="stat-number">50+</div><p class="text-xs sm:text-sm font-medium uppercase tracking-widest mt-2 font-['Inter']">global clients</p><div class="w-10 h-1 bg-lime-400 mx-auto mt-3"></div></div>
    <div class="reveal d3"><div class="stat-number">24/7</div><p class="text-xs sm:text-sm font-medium uppercase tracking-widest mt-2 font-['Inter']">coverage</p><div class="w-10 h-1 bg-lime-400 mx-auto mt-3"></div></div>
    <div class="reveal d4"><div class="stat-number">9+</div><p class="text-xs sm:text-sm font-medium uppercase tracking-widest mt-2 font-['Inter']">service lines</p><div class="w-10 h-1 bg-lime-400 mx-auto mt-3"></div></div>
  </div>
  <div class="reveal mt-16 md:mt-24 relative h-52 sm:h-64 md:h-80 w-full overflow-hidden rounded-2xl md:rounded-3xl">
    <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover grayscale brightness-95" alt="operations team">
    <div class="absolute inset-0 bg-gradient-to-r from-black/55 to-transparent flex items-center px-6 md:px-10">
      <p class="text-white text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold max-w-xl font-['Space_Grotesk']">"They don't just outsource &mdash; they partner."</p>
    </div>
  </div>
</div>

<!-- ========== TESTIMONIALS ========== -->
<div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-20 md:py-32 bg-white">
  <div class="flex flex-col lg:flex-row gap-12 lg:gap-20 items-start lg:items-center">
    <div class="reveal-left lg:w-1/2 w-full">
      <div class="lime-marker"></div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold tracking-[-0.025em] leading-tight font-['Space_Grotesk']">Relationships <span class="bg-lime-400 px-2 text-black">built</span> on every call, chat &amp; email</h2>
      <p class="text-gray-500 text-base md:text-lg mt-6 max-w-md leading-relaxed font-['Inter']">A global logistics firm reduced churn by 34% after implementing our winback and quality survey programs.</p>
      <div class="mt-8 flex items-center gap-4">
        <div class="w-14 h-14 rounded-full overflow-hidden grayscale flex-shrink-0"><img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1974&auto=format&fit=crop" class="w-full h-full object-cover" alt="Ahmed"></div>
        <div><p class="font-semibold font-['Space_Grotesk']">Ahmed Raza</p><p class="text-sm text-gray-400 font-['Inter']">COO, TransWorld Logistics</p></div>
      </div>
    </div>
    <div class="reveal-right lg:w-1/2 w-full">
      <div class="swiper testimonialSwiper pb-12">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><div class="testimonial-card relative"><i class="fas fa-quote-right text-4xl text-lime-300 opacity-40 absolute top-5 right-6"></i><p class="text-lg md:text-2xl leading-relaxed relative z-10 font-['Inter']">"One Stop Solutions handles our overflow inbound with care. Their agents actually listen &mdash; our NPS jumped 22 points."</p><div class="flex items-center gap-2 mt-8"><span class="text-lime-400">&#9733;&#9733;&#9733;&#9733;&#9733;</span><span class="text-gray-400 text-sm font-['Inter']">(5.0)</span></div><p class="text-sm text-gray-400 mt-4 border-t border-gray-100 pt-3 font-['Inter']">&mdash; Maria G., client success lead</p></div></div>
          <div class="swiper-slide"><div class="testimonial-card relative"><i class="fas fa-quote-right text-4xl text-lime-300 opacity-40 absolute top-5 right-6"></i><p class="text-lg md:text-2xl leading-relaxed relative z-10 font-['Inter']">"The data verification and survey services gave us clean, actionable insights. They're an extension of our team."</p><div class="flex items-center gap-2 mt-8"><span class="text-lime-400">&#9733;&#9733;&#9733;&#9733;&#9733;</span><span class="text-gray-400 text-sm font-['Inter']">(5.0)</span></div><p class="text-sm text-gray-400 mt-4 border-t border-gray-100 pt-3 font-['Inter']">&mdash; James K., market intelligence</p></div></div>
          <div class="swiper-slide"><div class="testimonial-card relative"><i class="fas fa-quote-right text-4xl text-lime-300 opacity-40 absolute top-5 right-6"></i><p class="text-lg md:text-2xl leading-relaxed relative z-10 font-['Inter']">"From ticketing to tech support &mdash; they cover everything. We scaled our operations without scaling headcount."</p><div class="flex items-center gap-2 mt-8"><span class="text-lime-400">&#9733;&#9733;&#9733;&#9733;&#9733;</span><span class="text-gray-400 text-sm font-['Inter']">(5.0)</span></div><p class="text-sm text-gray-400 mt-4 border-t border-gray-100 pt-3 font-['Inter']">&mdash; Lena Schmidt, COO &middot; nexVent</p></div></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</div>

<!-- ========== CTA ========== -->
<div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-16 md:py-28 bg-[#faf9f7]">
  <div class="reveal bg-black text-white rounded-2xl md:rounded-3xl px-6 py-16 sm:px-10 md:p-16 lg:p-24 relative overflow-hidden">
    <div class="absolute -right-10 -top-10 w-48 md:w-64 h-48 md:h-64 bg-lime-400/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -left-10 -bottom-10 w-36 md:w-48 h-36 md:h-48 border-4 border-lime-400/20 rounded-full pointer-events-none"></div>
    <div class="relative z-20 max-w-3xl">
      <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight font-['Space_Grotesk']">Ready to outsource<br>without compromise?</h2>
      <p class="text-gray-300 text-base md:text-xl mt-5 md:mt-6 max-w-lg leading-relaxed font-['Inter']">Let's design a solution that blends your culture with our operational excellence &mdash; from inbound to digital marketing.</p>
      <div class="mt-8 md:mt-12 flex flex-wrap gap-4 md:gap-6">
        <a href="#" class="btn-primary inline-flex items-center gap-3 rounded-full px-7 py-4 md:px-10 md:py-5 text-base md:text-xl font-semibold text-neutral-900 shadow-2xl">Start conversation <i class="fas fa-arrow-right text-sm"></i></a>
        <a href="#" class="inline-flex items-center gap-2 border border-white/30 rounded-full px-7 py-4 md:px-10 md:py-5 text-base md:text-xl font-medium text-white hover:bg-white/10 transition-all font-['Inter']">Explore services</a>
      </div>
    </div>
  </div>
</div>

<?php @include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded',()=>{
  new Swiper('.testimonialSwiper',{slidesPerView:1,spaceBetween:20,loop:true,autoplay:{delay:6000,disableOnInteraction:false,pauseOnMouseEnter:true},speed:700,pagination:{el:'.swiper-pagination',clickable:true},navigation:{nextEl:'.swiper-button-next',prevEl:'.swiper-button-prev'}});
});
window.addEventListener('scroll',()=>{const s=window.scrollY,m=document.documentElement.scrollHeight-window.innerHeight;document.getElementById('scroll-progress').style.width=(s/m*100)+'%';},{passive:true});
const els=document.querySelectorAll('.reveal,.reveal-left,.reveal-right');
const obs=new IntersectionObserver((entries)=>{entries.forEach(en=>{if(en.isIntersecting){en.target.classList.add('visible');obs.unobserve(en.target);}});},{threshold:0.1,rootMargin:'0px 0px -40px 0px'});
els.forEach(el=>obs.observe(el));
</script>
</body>
</html>