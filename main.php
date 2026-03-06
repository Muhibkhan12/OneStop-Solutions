<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Growth Alliance - Full Page (Without Navbar and Footer)</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:opsz,wght@14..32,300..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <style>
    *,*::before,*::after{margin:0;padding:0;box-sizing:border-box}
    :root{--lime:#ceff66;--lime-dark:#a6e62c;--ink:#111;--bg:#faf9f7;--muted:#5a5a5a;--hf:'Plus Jakarta Sans',sans-serif;--bf:'Inter',sans-serif}
    html{scroll-behavior:smooth}
    body{font-family:var(--bf);background:var(--bg);color:var(--ink);line-height:1.5;overflow-x:hidden}

    /* SCROLL REVEAL */
    .reveal{opacity:0;transform:translateY(52px);transition:opacity .9s cubic-bezier(.22,1,.36,1),transform .9s cubic-bezier(.22,1,.36,1)}
    .reveal.visible{opacity:1;transform:translateY(0)}
    .reveal-left{opacity:0;transform:translateX(-60px);transition:opacity .9s cubic-bezier(.22,1,.36,1),transform .9s cubic-bezier(.22,1,.36,1)}
    .reveal-right{opacity:0;transform:translateX(60px);transition:opacity .9s cubic-bezier(.22,1,.36,1),transform .9s cubic-bezier(.22,1,.36,1)}
    .reveal-left.visible,.reveal-right.visible{opacity:1;transform:translateX(0)}
    .d1{transition-delay:.08s}.d2{transition-delay:.18s}.d3{transition-delay:.28s}.d4{transition-delay:.38s}

    h1,h2,h3,h4{font-family:var(--hf)}

    /* HERO */
    .hero-overlay{background:linear-gradient(105deg,rgba(0,0,0,.82) 0%,rgba(0,0,0,.38) 55%,rgba(0,0,0,.05) 100%);pointer-events:none}
    .btn-primary{font-family:var(--bf);font-weight:600;background:linear-gradient(145deg,#c5f467,#a6e62c);transition:all .28s ease;box-shadow:0 10px 24px -8px rgba(166,230,44,.45)}
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
    .feat-heading{font-family:var(--hf);font-size:clamp(32px,4.5vw,54px);font-weight:800;line-height:1.12;letter-spacing:-.025em;color:var(--ink);margin-bottom:1.6rem}
    .feat-body{font-family:var(--bf);font-size:1.05rem;color:var(--muted);max-width:520px;margin-bottom:2.5rem;line-height:1.7}
    .secondary-img{width:70%;max-width:360px;border-radius:24px;box-shadow:0 30px 40px -25px rgba(0,0,0,.25);filter:grayscale(100%) contrast(1.1);aspect-ratio:4/3;object-fit:cover;transition:all .45s ease}
    .secondary-img:hover{transform:scale(1.02) translateY(-4px)}
    .decor-squares{position:absolute;top:-10px;right:20px;z-index:20;pointer-events:none}
    .square-lime{width:85px;height:85px;background:var(--lime);position:absolute;top:0;right:60px;opacity:.9;transform:rotate(10deg);border-radius:18px;box-shadow:-10px 12px 25px -8px rgba(160,210,60,.25)}
    .square-dark{width:85px;height:85px;background:#1e1e24;position:absolute;top:30px;right:0;transform:rotate(-7deg);border-radius:18px;box-shadow:12px 15px 25px -10px rgba(0,0,0,.25)}

    /* BRANDS */
    .brands-section{background:#0f0f0f;padding:80px 0 72px;overflow:hidden;position:relative}
    .brands-section::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse at 50% 50%,rgba(206,255,102,.06) 0%,transparent 70%);pointer-events:none}
    .brands-label{font-family:var(--bf);font-size:.78rem;font-weight:500;letter-spacing:.28em;text-transform:uppercase;color:rgba(255,255,255,.3);text-align:center;margin-bottom:3.5rem}
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
    .brand-name{font-family:var(--hf);font-size:1.15rem;font-weight:700;color:#fff;letter-spacing:-.01em}
    .brand-dot{width:4px;height:4px;background:var(--lime);border-radius:50%;flex-shrink:0;margin-left:4px}
    .brands-divider{width:100%;height:1px;background:rgba(255,255,255,.05);margin:40px 0}

    /* SERVICES */
    .services-modern{max-width:1440px;margin:0 auto;padding:120px 80px;background:#fff;position:relative;overflow:hidden}
    .services-modern::before{content:'';position:absolute;top:-50px;right:-50px;width:280px;height:280px;background:rgba(206,255,102,.1);border-radius:48px;transform:rotate(25deg);z-index:0;pointer-events:none}
    .service-header{position:relative;z-index:5;display:flex;flex-wrap:wrap;justify-content:space-between;align-items:flex-end;margin-bottom:5rem;gap:2rem}
    .header-tag{font-family:var(--bf);font-weight:500;font-size:.82rem;letter-spacing:.28em;text-transform:uppercase;color:#8f8f8f;display:block;margin-bottom:1rem;border-left:4px solid var(--lime);padding-left:1rem;line-height:1.2}
    .header-title{font-family:var(--hf);font-size:clamp(2.4rem,6vw,4.6rem);font-weight:800;line-height:1.08;letter-spacing:-.025em;max-width:800px;color:var(--ink)}
    .header-title span{color:var(--ink);background:linear-gradient(145deg,var(--lime),#b3e845);padding:0 .12em .08em;display:inline-block;transform:skewX(-4deg) rotate(-1deg);box-shadow:-8px 8px 0 rgba(0,0,0,.14)}
    .header-desc{max-width:340px;color:#4a4a4a;font-family:var(--bf);font-size:1.05rem;line-height:1.65;border-bottom:2px solid var(--lime);padding-bottom:1rem}
    .card-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:30px;position:relative;z-index:10;align-items:start}
    .service-card-modern{background:#fff;border-radius:42px;padding:2.5rem 2rem 2rem;box-shadow:0 30px 50px -30px rgba(0,0,0,.18);transition:all .45s cubic-bezier(.23,1,.32,1);border:1px solid #f0f0f0;display:flex;flex-direction:column;position:relative}
    .service-card-modern:hover{transform:translateY(-18px) scale(1.01);box-shadow:0 40px 65px -22px rgba(0,0,0,.22);border-color:var(--lime)}
    .card-1{margin-top:0}.card-2{margin-top:60px}.card-3{margin-top:20px}
    .icon-frame{width:80px;height:80px;background:var(--ink);border-radius:28px;display:flex;align-items:center;justify-content:center;margin-bottom:2rem;box-shadow:14px 14px 0 var(--lime);transition:all .3s ease}
    .service-card-modern:hover .icon-frame{box-shadow:8px 8px 0 var(--lime);transform:scale(.97);background:#2a2a2a}
    .icon-frame i{font-size:2.4rem;color:var(--lime);transition:transform .3s}
    .service-card-modern:hover .icon-frame i{transform:scale(1.1) rotate(-3deg);color:#fff}
    .card-title{font-family:var(--hf);font-size:1.9rem;font-weight:700;letter-spacing:-.02em;line-height:1.2;margin-bottom:.9rem}
    .card-desc{font-family:var(--bf);color:#5a5a5a;font-size:.98rem;line-height:1.65;margin-bottom:2rem;flex:1}
    .image-zone{width:100%;height:200px;border-radius:24px;overflow:hidden;background:#ececec;border:1px solid #ddd;transition:all .4s ease;clip-path:polygon(8% 0,100% 0%,92% 100%,0% 100%);filter:grayscale(1)}
    .service-card-modern:hover .image-zone{clip-path:polygon(0 0,100% 0,100% 100%,0% 100%);filter:grayscale(.15);border-radius:28px 8px 28px 8px}
    .image-zone img{width:100%;height:100%;object-fit:cover;transition:transform 1.1s ease}
    .service-card-modern:hover .image-zone img{transform:scale(1.09)}
    .card-lime-bar{width:60px;height:4px;background:var(--lime);border-radius:4px;margin-top:1.5rem;transition:width .35s}
    .service-card-modern:hover .card-lime-bar{width:110px}

    /* STATS */
    .stat-number{font-family:var(--hf);font-size:clamp(2.4rem,7vw,4rem);font-weight:800;line-height:1;letter-spacing:-.03em;color:var(--lime);-webkit-text-stroke:2px var(--ink);text-shadow:4px 4px 0 var(--ink)}

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
      .card-grid{gap:20px}
      .card-2{margin-top:30px}
      .card-3{margin-top:10px}
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
      .card-grid{grid-template-columns:1fr;gap:24px}
      .card-2,.card-3{margin-top:0}
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
      .service-card-modern{padding:1.75rem 1.5rem 1.5rem;border-radius:28px}
      .icon-frame{width:64px;height:64px;border-radius:20px;margin-bottom:1.5rem}
      .icon-frame i{font-size:1.9rem}
      .card-title{font-size:1.5rem}
      .image-zone{height:160px}
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
  <?php
    @include('navbar.php');
  ?>

<div id="scroll-progress"></div>

<!-- HERO (without navbar) -->
<div class="relative w-full min-h-[92vh] md:min-h-[88vh] bg-neutral-900 flex flex-col">
  <div class="absolute inset-0 overflow-hidden">
    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=2940&auto=format&fit=crop" alt="Business team" class="w-full h-full object-cover object-[center_30%]">
    <div class="absolute inset-0 hero-overlay"></div>
  </div>
  
  <!-- Hero Content -->
  <div class="relative z-20 flex-1 flex flex-col justify-center px-5 pt-8 pb-4 md:px-12 lg:px-20">
    <div class="max-w-3xl">
      <p class="reveal text-sm font-medium tracking-[0.22em] uppercase mb-5" style="color:var(--lime);font-family:var(--bf)">Digital Growth Partner</p>
      <h1 class="reveal d1 text-white font-extrabold tracking-[-0.025em] leading-[1.08] text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-[5.2rem]">Accelerate your<br>franchise's growth.</h1>
      <p class="reveal d2 text-white/65 text-base sm:text-lg mt-6 md:mt-8 max-w-md leading-relaxed" style="font-family:var(--bf)">Partnering with franchises to deliver customised digital marketing solutions that scale.</p>
      <div class="reveal d3 mt-8 md:mt-10 flex flex-wrap gap-4">
        <a href="#" class="btn-primary inline-flex items-center gap-2 rounded-full px-7 py-3.5 md:px-8 md:py-4 text-base font-semibold text-neutral-900 shadow-xl">Get in touch <i class="fas fa-arrow-right text-sm"></i></a>
        <a href="#" class="inline-flex items-center gap-2 border border-white/25 rounded-full px-7 py-3.5 text-base font-medium text-white hover:bg-white/10 transition-all" style="font-family:var(--bf)">Our work <i class="fas fa-play text-xs"></i></a>
      </div>
    </div>
  </div>
</div>

<!-- FEATURE SECTION -->
<div class="section-premium">
  <div class="vertical-divider"></div>
  <div class="lime-accent-line"></div>
  <div class="two-col">
    <div class="reveal-left">
      <img class="main-image" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop" alt="Corporate team">
    </div>
    <div>
      <p class="reveal header-tag" style="margin-bottom:1.2rem">our approach</p>
      <h2 class="reveal d1 feat-heading">Digital agency problems and their best solutions</h2>
      <p class="reveal d2 feat-body">Crafting compelling digital experiences that captivate audiences and drive meaningful connections. Our agency combines innovation, strategy, and deep franchise expertise to fuel your online success.</p>
      <div class="reveal flex d3 mt-10">
        <img class="secondary-img" src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=800&auto=format&fit=crop" alt="Agency discussion">
        <img class="secondary-img" src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=800&auto=format&fit=crop" alt="Agency discussion">
      </div>
    </div>
  </div>
  <div class="decor-squares"><div class="square-lime"></div><div class="square-dark"></div></div>
</div>

<!-- BRANDS WE WORK WITH -->
<section class="brands-section">
  <p class="reveal brands-label"><span></span>brands we work with<span></span></p>
  <div class="marquee-row">
    <div class="marquee-track fwd">
      <div class="brand-item"><span class="brand-name">Argosy BPO</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">TEK BUZZ</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">GATEWAY MERCHENT CAPITAL</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">VIRGO</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">CLICK MILLIONS</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">CANNET</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">NORTHERN LEASING SYSTEMS. INC</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">SYSTEC SOLUTIONS</span><div class="brand-dot"></div></div>
      <div class="brand-item"><span class="brand-name">THE MARKET SOURCE</span><div class="brand-dot"></div></div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="services-modern">
  <div class="service-header">
    <div>
      <span class="reveal header-tag">our capabilities</span>
      <h2 class="reveal d1 header-title">Strategies that <span>scale</span> your franchise</h2>
    </div>
    <p class="reveal d2 header-desc">We combine data, creativity, and local expertise to accelerate multi‑unit growth.</p>
  </div>
  <div class="card-grid">
    <div class="reveal d1 service-card-modern card-1">
      <div class="icon-frame"><i class="fas fa-chart-line"></i></div>
      <h3 class="card-title">Performance media</h3>
      <p class="card-desc">Hyper‑targeted campaigns that drive foot traffic and online conversions, fully attributed.</p>
      <div class="image-zone"><img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=800&auto=format&fit=crop" alt="analytics"></div>
      <div class="card-lime-bar"></div>
    </div>
    <div class="reveal d2 service-card-modern card-2">
      <div class="icon-frame"><i class="fas fa-store-alt"></i></div>
      <h3 class="card-title">Local presence</h3>
      <p class="card-desc">Unified listings, review management, and geo‑specific content for every franchise location.</p>
      <div class="image-zone"><img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?q=80&w=800&auto=format&fit=crop" alt="local team"></div>
      <div class="card-lime-bar"></div>
    </div>
    <div class="reveal d3 service-card-modern card-3">
      <div class="icon-frame"><i class="fas fa-pen-fancy"></i></div>
      <h3 class="card-title">Creative & conv.</h3>
      <p class="card-desc">High‑converting landing pages, A/B tested creatives, and unified brand voice across markets.</p>
      <div class="image-zone"><img src="https://images.unsplash.com/photo-1555421689-3f034debb7a6?q=80&w=800&auto=format&fit=crop" alt="creative"></div>
      <div class="card-lime-bar"></div>
    </div>
  </div>
</section>

<!-- STATS -->
<div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-20 md:py-28 bg-[#f4f3f0]">
  <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-14 text-center">
    <div class="reveal d1"><div class="stat-number">92%</div><p class="text-xs sm:text-sm font-medium uppercase tracking-widest mt-2" style="font-family:var(--bf)">franchisee retention</p><div class="w-10 h-1 bg-lime-400 mx-auto mt-3"></div></div>
    <div class="reveal d2"><div class="stat-number">3.2B</div><p class="text-xs sm:text-sm font-medium uppercase tracking-widest mt-2" style="font-family:var(--bf)">digital impressions</p><div class="w-10 h-1 bg-lime-400 mx-auto mt-3"></div></div>
    <div class="reveal d3"><div class="stat-number">+47%</div><p class="text-xs sm:text-sm font-medium uppercase tracking-widest mt-2" style="font-family:var(--bf)">avg. local sales</p><div class="w-10 h-1 bg-lime-400 mx-auto mt-3"></div></div>
    <div class="reveal d4"><div class="stat-number">250+</div><p class="text-xs sm:text-sm font-medium uppercase tracking-widest mt-2" style="font-family:var(--bf)">franchise partners</p><div class="w-10 h-1 bg-lime-400 mx-auto mt-3"></div></div>
  </div>
  <div class="reveal mt-16 md:mt-24 relative h-52 sm:h-64 md:h-80 w-full overflow-hidden rounded-2xl md:rounded-3xl">
    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1600&auto=format&fit=crop" class="w-full h-full object-cover grayscale brightness-95" alt="team">
    <div class="absolute inset-0 bg-gradient-to-r from-black/55 to-transparent flex items-center px-6 md:px-10">
      <p class="text-white text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold max-w-xl" style="font-family:'Plus Jakarta Sans',sans-serif">"They don't just market — they grow with us."</p>
    </div>
  </div>
</div>

<!-- TESTIMONIALS -->
<div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-20 md:py-32 bg-white">
  <div class="flex flex-col lg:flex-row gap-12 lg:gap-20 items-start lg:items-center">
    <div class="reveal-left lg:w-1/2 w-full">
      <div class="lime-marker"></div>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-extrabold tracking-[-0.025em] leading-tight" style="font-family:'Plus Jakarta Sans',sans-serif">Results that <span class="bg-lime-400 px-2 text-black">speak</span> louder than any pitch</h2>
      <p class="text-gray-500 text-base md:text-lg mt-6 max-w-md leading-relaxed" style="font-family:var(--bf)">We helped a 120‑unit franchise boost local SEO visibility by 190% and unify their digital identity.</p>
      <div class="mt-8 flex items-center gap-4">
        <div class="w-14 h-14 rounded-full overflow-hidden grayscale flex-shrink-0"><img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=400&auto=format&fit=crop" class="w-full h-full object-cover" alt="Emma"></div>
        <div><p class="font-semibold" style="font-family:'Plus Jakarta Sans',sans-serif">Emma Linfield</p><p class="text-sm text-gray-400" style="font-family:var(--bf)">CMO, RapidBurger Co.</p></div>
      </div>
    </div>
    <div class="reveal-right lg:w-1/2 w-full">
      <div class="swiper testimonialSwiper pb-12">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><div class="testimonial-card relative"><i class="fas fa-quote-right text-4xl text-lime-300 opacity-40 absolute top-5 right-6"></i><p class="text-lg md:text-2xl leading-relaxed relative z-10" style="font-family:var(--bf)">"Growth Alliance transformed how we connect with local customers. Their agency‑style thinking paired with franchise‑level execution is unmatched."</p><div class="flex items-center gap-2 mt-8"><span class="text-lime-400">★★★★★</span><span class="text-gray-400 text-sm">(5.0)</span></div><p class="text-sm text-gray-400 mt-4 border-t border-gray-100 pt-3" style="font-family:var(--bf)">— Emma Linfield, RapidBurger Co.</p></div></div>
          <div class="swiper-slide"><div class="testimonial-card relative"><i class="fas fa-quote-right text-4xl text-lime-300 opacity-40 absolute top-5 right-6"></i><p class="text-lg md:text-2xl leading-relaxed relative z-10" style="font-family:var(--bf)">"The local presence strategy brought a 156% increase in store locator usage across all our franchises."</p><div class="flex items-center gap-2 mt-8"><span class="text-lime-400">★★★★★</span><span class="text-gray-400 text-sm">(5.0)</span></div><p class="text-sm text-gray-400 mt-4 border-t border-gray-100 pt-3" style="font-family:var(--bf)">— Marcus Velez, COO · PitaFresh</p></div></div>
          <div class="swiper-slide"><div class="testimonial-card relative"><i class="fas fa-quote-right text-4xl text-lime-300 opacity-40 absolute top-5 right-6"></i><p class="text-lg md:text-2xl leading-relaxed relative z-10" style="font-family:var(--bf)">"Their creative campaigns delivered a 4.2x ROAS while keeping our brand voice consistent across 200+ locations."</p><div class="flex items-center gap-2 mt-8"><span class="text-lime-400">★★★★★</span><span class="text-gray-400 text-sm">(5.0)</span></div><p class="text-sm text-gray-400 mt-4 border-t border-gray-100 pt-3" style="font-family:var(--bf)">— Nadia Kwan · Motto Mortgage</p></div></div>
          <div class="swiper-slide"><div class="testimonial-card relative"><i class="fas fa-quote-right text-4xl text-lime-300 opacity-40 absolute top-5 right-6"></i><p class="text-lg md:text-2xl leading-relaxed relative z-10" style="font-family:var(--bf)">"We finally have unified data across all franchisees. Growth Alliance built the dashboards and the strategy."</p><div class="flex items-center gap-2 mt-8"><span class="text-lime-400">★★★★★</span><span class="text-gray-400 text-sm">(5.0)</span></div><p class="text-sm text-gray-400 mt-4 border-t border-gray-100 pt-3" style="font-family:var(--bf)">— David Park · The Joint Chiropractic</p></div></div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
</div>

<!-- CTA -->
<div class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-16 md:py-28 bg-[#faf9f7]">
  <div class="reveal bg-black text-white rounded-2xl md:rounded-3xl px-6 py-16 sm:px-10 md:p-16 lg:p-24 relative overflow-hidden">
    <div class="absolute -right-10 -top-10 w-48 md:w-64 h-48 md:h-64 bg-lime-400/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -left-10 -bottom-10 w-36 md:w-48 h-36 md:h-48 border-4 border-lime-400/20 rounded-full pointer-events-none"></div>
    <div class="relative z-20 max-w-3xl">
      <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-tight" style="font-family:'Plus Jakarta Sans',sans-serif">Ready to outgrow<br>the competition?</h2>
      <p class="text-gray-300 text-base md:text-xl mt-5 md:mt-6 max-w-lg leading-relaxed" style="font-family:var(--bf)">Let's build a digital roadmap tailored to your franchise system, from local store pages to national campaigns.</p>
      <div class="mt-8 md:mt-12 flex flex-wrap gap-4 md:gap-6">
        <a href="#" class="btn-primary inline-flex items-center gap-3 rounded-full px-7 py-4 md:px-10 md:py-5 text-base md:text-xl font-semibold text-neutral-900 shadow-2xl">Schedule a call <i class="fas fa-arrow-right text-sm"></i></a>
        <a href="#" class="inline-flex items-center gap-2 border border-white/30 rounded-full px-7 py-4 md:px-10 md:py-5 text-base md:text-xl font-medium text-white hover:bg-white/10 transition-all" style="font-family:var(--bf)">View case studies</a>
      </div>
    </div>
  </div>
</div>


<?php
  @include('footer.php');
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded',()=>{
  new Swiper('.testimonialSwiper',{slidesPerView:1,spaceBetween:20,loop:true,autoplay:{delay:6000,disableOnInteraction:false,pauseOnMouseEnter:true},speed:700,pagination:{el:'.swiper-pagination',clickable:true},navigation:{nextEl:'.swiper-button-next',prevEl:'.swiper-button-prev'}});
});

// Scroll progress
window.addEventListener('scroll',()=>{const s=window.scrollY,m=document.documentElement.scrollHeight-window.innerHeight;document.getElementById('scroll-progress').style.width=(s/m*100)+'%';},{passive:true});

// Scroll reveal
const els=document.querySelectorAll('.reveal,.reveal-left,.reveal-right');
const obs=new IntersectionObserver((entries)=>{entries.forEach(en=>{if(en.isIntersecting){en.target.classList.add('visible');obs.unobserve(en.target);}});},{threshold:0.1,rootMargin:'0px 0px -40px 0px'});
els.forEach(el=>obs.observe(el));
</script>
</body>
</html>