<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <title>Services — OneStop Solutions</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Inter:opsz,wght@14..32,300..700&display=swap" rel="stylesheet">
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
  </style>
</head>
<body class="antialiased font-['Inter'] bg-[#faf9f7] text-[#111] overflow-x-hidden">

<div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] bg-[#ceff66] z-[999] duration-100 shadow-[0_0_10px_rgba(206,255,102,0.6)]"></div>

<?php @include('navbar.php'); ?>

<div id="mobile-menu" class="hidden fixed top-16 left-0 right-0 bg-[#0a0a0a] backdrop-blur-[16px] px-8 py-6 z-50 border-t border-white/5">
  <a href="index.html" class="block font-medium text-white/75 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] transition-colors">Home</a>
  <a href="about.html" class="block font-medium text-white/75 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] transition-colors">About</a>
  <a href="#"          class="block font-medium text-[#ceff66] text-lg py-3 border-b border-white/5 hover:text-white transition-colors">Services</a>
  <a href="#"          class="block font-medium text-white/75 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] transition-colors">Case Study</a>
  <a href="#"          class="block font-medium text-white/75 text-lg py-3 hover:text-[#ceff66] transition-colors">Get in touch &rarr;</a>
</div>

<!-- ========== HERO — darkened so white navbar text is legible ========== -->
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden" style="background: linear-gradient(135deg, #8fb800 0%, #7aa300 40%, #5e8000 100%);">

  <!-- dark overlay — the key change; adds ~35% black on top of the gradient -->
  <div class="absolute inset-0 bg-black/35 pointer-events-none"></div>

  <!-- animated blobs (kept, but toned down slightly) -->
  <div class="absolute inset-0 opacity-15 pointer-events-none">
    <div class="absolute top-20 left-10 w-96 h-96 bg-white rounded-full mix-blend-overlay filter blur-[80px] animate-pulse"></div>
    <div class="absolute bottom-20 right-10 w-[500px] h-[500px] bg-black rounded-full mix-blend-overlay filter blur-[100px] animate-pulse" style="animation-delay:2s;"></div>
  </div>

  <!-- grid overlay -->
  <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image:url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cpath d=&quot;M0 0 L60 0 L60 60 L0 60 Z&quot; fill=&quot;none&quot; stroke=&quot;rgba(255,255,255,0.15)&quot; stroke-width=&quot;1&quot;/%3E%3C/svg%3E');"></div>

  <!-- content -->
  <div class="relative z-10 text-center px-5 sm:px-8 md:px-12 lg:px-24 py-20 md:py-28">
    <div class="reveal inline-flex items-center gap-3 px-4 py-2 bg-white/15 backdrop-blur-sm rounded-full border border-white/30 mb-6">
      <span class="w-2 h-2 bg-[#ceff66] rounded-full animate-pulse"></span>
      <span class="text-white/85 text-sm font-medium tracking-wider">SERVICES</span>
    </div>

    <h1 class="reveal d1 font-['Plus_Jakarta_Sans'] font-extrabold text-6xl md:text-7xl lg:text-8xl xl:text-9xl text-white leading-[1.1] tracking-[-0.03em] mb-6">
      Services
    </h1>

    <p class="reveal d2 text-white/70 text-xl max-w-2xl mx-auto">
      People. Process. Results. &mdash; Building trust through excellence since 2008.
    </p>
  </div>

  <!-- bottom fade into page bg -->
  <div class="absolute bottom-0 left-0 w-full h-20 bg-gradient-to-t from-[#faf9f7] to-transparent"></div>
</section>

<!-- ========== TICKER ========== -->
<div class="bg-[#ceff66] py-3 overflow-hidden">
  <div class="ticker-track flex whitespace-nowrap">
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Inbound <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Outbound <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Lead Generation <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Customer Service <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Digital Marketing <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Web Development <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Survey Research <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Winback <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Technical Support <span class="opacity-40 mx-2">&#10022;</span></span>
    <!-- duplicate -->
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Inbound <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Outbound <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Lead Generation <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Customer Service <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Digital Marketing <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Web Development <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Survey Research <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Winback <span class="opacity-40 mx-2">&#10022;</span></span>
    <span class="font-['Plus_Jakarta_Sans'] text-[0.75rem] sm:text-[0.85rem] font-bold text-[#111] px-6 sm:px-8 uppercase flex-shrink-0">Technical Support <span class="opacity-40 mx-2">&#10022;</span></span>
  </div>
</div>

<!-- ========== SERVICE GRID ========== -->
<section id="service-grid" class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-20 md:py-28 bg-[#fafafa] relative">
  <div class="absolute top-0 left-0 w-64 h-64 rounded-br-[80px] bg-[rgba(206,255,102,0.06)] pointer-events-none"></div>

  <div class="text-center max-w-3xl mx-auto mb-16">
    <div class="reveal inline-flex items-center gap-[10px] text-[#ceff66] text-[0.7rem] font-semibold tracking-[0.28em] uppercase mb-4 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
      end-to-end solutions
    </div>
    <h2 class="reveal d1 font-['Plus_Jakarta_Sans'] text-[clamp(2rem,5vw,3.5rem)] font-extrabold leading-[1.1] tracking-[-0.025em] text-[#111] mb-5">
      Specialised services, one partner
    </h2>
    <p class="reveal d2 text-[#5a5a5a] text-lg max-w-2xl mx-auto">From first contact to technical support &mdash; we cover the entire customer journey with excellence.</p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

    <!-- 1. Inbound -->
    <div class="reveal group relative overflow-hidden rounded-3xl shadow-[0_10px_30px_-15px_rgba(0,0,0,0.15)] max-w-[340px] mx-auto w-full">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1543269664-56d93c1b41a6?q=80&w=1000&auto=format&fit=crop" alt="Inbound service" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
      </div>
      <div class="relative p-8 min-h-[400px] flex flex-col justify-center text-white">
        <div class="w-14 h-14 bg-[#ceff66] rounded-xl flex items-center justify-center mb-4 shadow-lg transform group-hover:scale-110 transition-transform"><i class="fas fa-phone-volume text-2xl text-[#111]"></i></div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold mb-2">Inbound Calls</h3>
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-4">Customer care, order taking, helpdesk &mdash; we handle high-volume inbound with empathy and efficiency.</p>
      </div>
    </div>

    <!-- 2. Outbound -->
    <div class="reveal d2 group relative overflow-hidden rounded-3xl shadow-[0_10px_30px_-15px_rgba(0,0,0,0.15)] max-w-[340px] mx-auto w-full">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?q=80&w=1000&auto=format&fit=crop" alt="Outbound service" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
      </div>
      <div class="relative p-8 min-h-[400px] flex flex-col justify-center text-white">
        <div class="w-14 h-14 bg-[#ceff66] rounded-xl flex items-center justify-center mb-4 shadow-lg transform group-hover:scale-110 transition-transform"><i class="fas fa-phone-alt text-2xl text-[#111]"></i></div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold mb-2">Outbound Calls</h3>
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-4">Telemarketing, appointment setting, market research &mdash; proactive outreach that delivers results.</p>
      </div>
    </div>

    <!-- 3. Lead generation -->
    <div class="reveal d3 group relative overflow-hidden rounded-3xl shadow-[0_10px_30px_-15px_rgba(0,0,0,0.15)] max-w-[340px] mx-auto w-full">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=1000&auto=format&fit=crop" alt="Lead generation" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
      </div>
      <div class="relative p-8 min-h-[400px] flex flex-col justify-center text-white">
        <div class="w-14 h-14 bg-[#ceff66] rounded-xl flex items-center justify-center mb-4 shadow-lg transform group-hover:scale-110 transition-transform"><i class="fas fa-chart-line text-2xl text-[#111]"></i></div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold mb-2">Lead Generation</h3>
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-4">Qualified B2B &amp; B2C leads through multi-channel strategies that fill your pipeline.</p>
      </div>
    </div>

    <!-- 4. Customer / Quality -->
    <div class="reveal group relative overflow-hidden rounded-3xl shadow-[0_10px_30px_-15px_rgba(0,0,0,0.15)] max-w-[340px] mx-auto w-full">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1556740714-a8395b3bf30f?q=80&w=1000&auto=format&fit=crop" alt="Customer service" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
      </div>
      <div class="relative p-8 min-h-[400px] flex flex-col justify-center text-white">
        <div class="w-14 h-14 bg-[#ceff66] rounded-xl flex items-center justify-center mb-4 shadow-lg transform group-hover:scale-110 transition-transform"><i class="fas fa-headset text-2xl text-[#111]"></i></div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold mb-2">Customer &amp; Quality Services</h3>
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-4">Dedicated support, QA monitoring, and continuous improvement for superior CX.</p>
      </div>
    </div>

    <!-- 5. Digital Marketing -->
    <div class="reveal d2 group relative overflow-hidden rounded-3xl shadow-[0_10px_30px_-15px_rgba(0,0,0,0.15)] max-w-[340px] mx-auto w-full">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000&auto=format&fit=crop" alt="Digital marketing" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
      </div>
      <div class="relative p-8 min-h-[400px] flex flex-col justify-center text-white">
        <div class="w-14 h-14 bg-[#ceff66] rounded-xl flex items-center justify-center mb-4 shadow-lg transform group-hover:scale-110 transition-transform"><i class="fas fa-bullseye text-2xl text-[#111]"></i></div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold mb-2">Digital Marketing</h3>
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-4">SEO, PPC, social media, content &mdash; data-driven campaigns that maximise ROI.</p>
      </div>
    </div>

    <!-- 6. Web development -->
    <div class="reveal d3 group relative overflow-hidden rounded-3xl shadow-[0_10px_30px_-15px_rgba(0,0,0,0.15)] max-w-[340px] mx-auto w-full">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d?q=80&w=1000&auto=format&fit=crop" alt="Web development" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
      </div>
      <div class="relative p-8 min-h-[400px] flex flex-col justify-center text-white">
        <div class="w-14 h-14 bg-[#ceff66] rounded-xl flex items-center justify-center mb-4 shadow-lg transform group-hover:scale-110 transition-transform"><i class="fas fa-code text-2xl text-[#111]"></i></div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold mb-2">Web Development</h3>
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-4">Custom websites, e-commerce, portals &mdash; built for performance and conversion.</p>
      </div>
    </div>

    <!-- 7. Survey research -->
    <div class="reveal group relative overflow-hidden rounded-3xl shadow-[0_10px_30px_-15px_rgba(0,0,0,0.15)] max-w-[340px] mx-auto w-full">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1000&auto=format&fit=crop" alt="Survey research" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
      </div>
      <div class="relative p-8 min-h-[400px] flex flex-col justify-center text-white">
        <div class="w-14 h-14 bg-[#ceff66] rounded-xl flex items-center justify-center mb-4 shadow-lg transform group-hover:scale-110 transition-transform"><i class="fas fa-poll text-2xl text-[#111]"></i></div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold mb-2">Survey Research</h3>
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-4">Customer feedback, market studies, data collection &mdash; actionable insights from real people.</p>
      </div>
    </div>

    <!-- 8. Winback programs -->
    <div class="reveal d2 group relative overflow-hidden rounded-3xl shadow-[0_10px_30px_-15px_rgba(0,0,0,0.15)] max-w-[340px] mx-auto w-full">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?q=80&w=1000&auto=format&fit=crop" alt="Winback programs" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
      </div>
      <div class="relative p-8 min-h-[400px] flex flex-col justify-center text-white">
        <div class="w-14 h-14 bg-[#ceff66] rounded-xl flex items-center justify-center mb-4 shadow-lg transform group-hover:scale-110 transition-transform"><i class="fas fa-undo-alt text-2xl text-[#111]"></i></div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold mb-2">Winback Programs</h3>
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-4">Re-engage lost customers, reduce churn, and recover revenue with tailored retention campaigns.</p>
      </div>
    </div>

    <!-- 9. Technical support -->
    <div class="reveal d3 group relative overflow-hidden rounded-3xl shadow-[0_10px_30px_-15px_rgba(0,0,0,0.15)] max-w-[340px] mx-auto w-full">
      <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?q=80&w=1000&auto=format&fit=crop" alt="Technical support" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30"></div>
      </div>
      <div class="relative p-8 min-h-[400px] flex flex-col justify-center text-white">
        <div class="w-14 h-14 bg-[#ceff66] rounded-xl flex items-center justify-center mb-4 shadow-lg transform group-hover:scale-110 transition-transform"><i class="fas fa-laptop-code text-2xl text-[#111]"></i></div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold mb-2">Technical Support</h3>
        <p class="text-white/80 text-[0.95rem] leading-relaxed mb-4">Tier 1/2 support, troubleshooting, IT helpdesk &mdash; fast, reliable, and multilingual.</p>
      </div>
    </div>

  </div>

  <div class="reveal text-center mt-16">
    <a href="#contact" class="inline-flex items-center gap-2 bg-[#111] text-white rounded-full px-8 py-4 text-sm font-bold hover:bg-[#ceff66] hover:text-[#111] transition-all duration-300 shadow-xl group">
      Need a custom solution? <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
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
      <div class="inline-flex items-center gap-3 text-[#ceff66] text-[0.7rem] font-bold tracking-[0.28em] uppercase mb-4">
        <span class="w-8 h-px bg-[#ceff66]"></span>
        why choose us
        <span class="w-8 h-px bg-[#ceff66]"></span>
      </div>
      <h2 class="font-['Plus_Jakarta_Sans'] text-3xl md:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
        The <span class="text-[#ceff66]">OneStop</span> advantage
      </h2>
      <p class="text-white/40 text-sm md:text-base max-w-lg mx-auto mt-4">Where strategy meets execution</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

      <div class="space-y-10">
        <div class="reveal group flex gap-5">
          <div class="flex-shrink-0 w-12 h-12 bg-[#ceff66]/10 rounded-xl flex items-center justify-center group-hover:bg-[#ceff66]/20 transition-colors duration-300">
            <span class="font-['Plus_Jakarta_Sans'] text-xl font-bold text-[#ceff66]">01</span>
          </div>
          <div>
            <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold text-white mb-2">Integrated approach</h3>
            <p class="text-white/40 text-sm leading-relaxed">Inbound, outbound, digital, and tech support work in concert &mdash; not silos &mdash; for seamless customer experiences.</p>
          </div>
        </div>
        <div class="reveal d2 group flex gap-5">
          <div class="flex-shrink-0 w-12 h-12 bg-[#ceff66]/10 rounded-xl flex items-center justify-center group-hover:bg-[#ceff66]/20 transition-colors duration-300">
            <span class="font-['Plus_Jakarta_Sans'] text-xl font-bold text-[#ceff66]">02</span>
          </div>
          <div>
            <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold text-white mb-2">Proven process</h3>
            <p class="text-white/40 text-sm leading-relaxed">15+ years of refining workflows, QA protocols, and training to deliver consistent, measurable results.</p>
          </div>
        </div>
        <div class="reveal d3 group flex gap-5">
          <div class="flex-shrink-0 w-12 h-12 bg-[#ceff66]/10 rounded-xl flex items-center justify-center group-hover:bg-[#ceff66]/20 transition-colors duration-300">
            <span class="font-['Plus_Jakarta_Sans'] text-xl font-bold text-[#ceff66]">03</span>
          </div>
          <div>
            <h3 class="font-['Plus_Jakarta_Sans'] text-xl font-bold text-white mb-2">Technology-driven</h3>
            <p class="text-white/40 text-sm leading-relaxed">AI-powered analytics, real-time reporting, and multi-channel integration for maximum efficiency.</p>
          </div>
        </div>
        <div class="reveal d4 mt-8 pt-6 border-t border-white/5">
          <p class="text-white/30 text-sm italic leading-relaxed">"We don't just execute &mdash; we integrate. Every touchpoint matters, every interaction counts."</p>
          <div class="flex items-center gap-2 mt-3">
            <div class="w-6 h-px bg-[#ceff66]/30"></div>
            <span class="text-[#ceff66]/50 text-xs font-medium">OneStop leadership</span>
          </div>
        </div>
      </div>

      <div class="space-y-6">
        <div class="grid grid-cols-2 gap-4">
          <div class="reveal bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/5 hover:border-[#ceff66]/20 transition-colors">
            <div class="font-['Plus_Jakarta_Sans'] text-3xl font-bold text-[#ceff66] mb-1">98%</div>
            <div class="text-white/40 text-xs uppercase tracking-wider">client retention</div>
            <div class="w-8 h-0.5 bg-[#ceff66]/30 mt-3"></div>
          </div>
          <div class="reveal d2 bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/5 hover:border-[#ceff66]/20 transition-colors">
            <div class="font-['Plus_Jakarta_Sans'] text-3xl font-bold text-[#ceff66] mb-1">24/7</div>
            <div class="text-white/40 text-xs uppercase tracking-wider">operations</div>
            <div class="w-8 h-0.5 bg-[#ceff66]/30 mt-3"></div>
          </div>
        </div>
        <div class="reveal d3 bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/5">
          <h4 class="text-white/70 text-sm font-medium mb-4">Core capabilities</h4>
          <div class="flex flex-wrap gap-2">
            <span class="px-3 py-1.5 bg-[#ceff66]/10 text-[#ceff66] text-xs rounded-full border border-[#ceff66]/20">Multi-channel</span>
            <span class="px-3 py-1.5 bg-white/5 text-white/60 text-xs rounded-full border border-white/10">AI-powered</span>
            <span class="px-3 py-1.5 bg-white/5 text-white/60 text-xs rounded-full border border-white/10">Real-time reporting</span>
            <span class="px-3 py-1.5 bg-white/5 text-white/60 text-xs rounded-full border border-white/10">Dedicated teams</span>
            <span class="px-3 py-1.5 bg-white/5 text-white/60 text-xs rounded-full border border-white/10">Quality assurance</span>
            <span class="px-3 py-1.5 bg-white/5 text-white/60 text-xs rounded-full border border-white/10">24/7 support</span>
          </div>
        </div>
        <div class="reveal d4 grid grid-cols-2 gap-4 mt-4">
          <div class="text-center p-4">
            <div class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-[#ceff66]">500K+</div>
            <div class="text-white/30 text-xs uppercase tracking-wider mt-1">calls/month</div>
          </div>
          <div class="text-center p-4">
            <div class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-[#ceff66]">15+</div>
            <div class="text-white/30 text-xs uppercase tracking-wider mt-1">languages</div>
          </div>
          <div class="text-center p-4">
            <div class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-[#ceff66]">99.9%</div>
            <div class="text-white/30 text-xs uppercase tracking-wider mt-1">uptime</div>
          </div>
          <div class="text-center p-4">
            <div class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-[#ceff66]">#1</div>
            <div class="text-white/30 text-xs uppercase tracking-wider mt-1">CX rating</div>
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
    <div class="reveal inline-flex items-center gap-[10px] text-[#ceff66] text-[0.7rem] font-semibold tracking-[0.28em] uppercase mb-4 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
      service philosophy
    </div>
    <h2 class="reveal d1 font-['Plus_Jakarta_Sans'] text-[clamp(1.8rem,4vw,3.2rem)] font-extrabold text-white max-w-3xl mx-auto leading-tight">
      Every service is a <span class="text-[#ceff66]">touchpoint</span> to build loyalty
    </h2>
    <p class="reveal d2 text-white/55 text-lg max-w-2xl mx-auto mt-6">
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
        <div class="flex items-center gap-[10px] text-[#ceff66] text-[0.7rem] font-semibold tracking-[0.28em] uppercase mb-5 before:content-[''] before:block before:w-7 before:h-0.5 before:bg-[#ceff66]">
          start today
        </div>
        <h2 class="font-['Plus_Jakarta_Sans'] text-[clamp(2rem,6vw,3.8rem)] font-extrabold leading-[1.08] text-white mb-4">
          Ready to scale with OneStop?
        </h2>
        <p class="text-white/55 text-base md:text-lg max-w-[500px] leading-relaxed mb-8">
          Let's align our services to your goals. Inbound, outbound, digital, or technical support &mdash; we deliver.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="#" class="inline-flex items-center gap-2 rounded-full px-6 py-3 sm:px-8 sm:py-4 text-sm sm:text-base font-semibold text-neutral-900 bg-gradient-to-br from-[#c5f467] to-[#a6e62c] hover:from-[#b3e04e] hover:to-[#93cd25] transition-all duration-300 shadow-2xl hover:-translate-y-0.5">
            Contact us <i class="fas fa-arrow-right text-sm"></i>
          </a>
          <a href="#" class="inline-flex items-center gap-2 border border-white/25 rounded-full px-6 py-3 sm:px-8 sm:py-4 text-sm sm:text-base font-medium text-white hover:bg-white/10 transition-all">
            +92 123 456 789
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========== FOOTER ========== -->
<footer class="max-w-[1440px] mx-auto px-5 sm:px-8 md:px-12 lg:px-20 py-10 md:py-16 border-t border-[#e5e5e5] bg-white">
  <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
    <div class="flex items-center gap-2">
      <span class="font-['Plus_Jakarta_Sans'] font-bold text-base sm:text-lg">OneStop<span class="text-[#ceff66]">Solutions</span></span>
      <span class="text-xs text-gray-400">&copy; 2025</span>
    </div>
    <div class="flex flex-wrap gap-4 sm:gap-6 text-xs sm:text-sm">
      <a href="#" class="text-gray-400 hover:text-[#ceff66]">Home</a>
      <a href="#" class="text-gray-400 hover:text-[#ceff66]">About</a>
      <a href="#" class="text-gray-400 hover:text-[#ceff66]">Services</a>
      <a href="#" class="text-gray-400 hover:text-[#ceff66]">Contact</a>
      <a href="#" class="text-gray-400 hover:text-[#ceff66]">Privacy</a>
    </div>
    <div class="flex gap-4 text-gray-400 text-base sm:text-lg">
      <i class="fab fa-linkedin-in hover:text-[#ceff66] cursor-pointer"></i>
      <i class="fab fa-x-twitter hover:text-[#ceff66] cursor-pointer"></i>
      <i class="fab fa-instagram hover:text-[#ceff66] cursor-pointer"></i>
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

  document.querySelectorAll('.d1').forEach(el => el.style.transitionDelay = '0.08s');
  document.querySelectorAll('.d2').forEach(el => el.style.transitionDelay = '0.18s');
  document.querySelectorAll('.d3').forEach(el => el.style.transitionDelay = '0.28s');
  document.querySelectorAll('.d4').forEach(el => el.style.transitionDelay = '0.38s');

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