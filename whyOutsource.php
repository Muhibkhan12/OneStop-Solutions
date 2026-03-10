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

    /* PCB trace pulse animation */
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
      background: linear-gradient(135deg, #fff 0%, #ceff66 100%);
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

    body { padding-top: 0; }

    .animation-delay-1000 { animation-delay: 1s; }
    .animation-delay-2000 { animation-delay: 2s; }
  </style>
</head>
<body class="antialiased font-['Inter'] bg-[#0a0a0a] text-white overflow-x-hidden">

<!-- Scroll Progress -->
<div id="scroll-progress" class="fixed top-0 left-0 w-0 h-[3px] bg-[#ceff66] z-[9999] duration-100 shadow-[0_0_20px_rgba(206,255,102,0.8)]"></div>

<!-- ========== NAVBAR ========== -->
<div class="fixed top-0 left-0 right-0 z-50">
<?php @include('navbar.php') ?>
</div>

<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden fixed top-16 left-0 right-0 bg-[rgba(0,0,0,0.95)] backdrop-blur-[20px] px-8 py-6 z-50 border-t border-[#ceff66]/10">
  <a href="index.html" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all">Home</a>
  <a href="about.html" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all">About</a>
  <a href="#" class="block font-medium text-white/70 text-lg py-3 border-b border-white/5 hover:text-[#ceff66] hover:pl-2 transition-all">Services</a>
  <a href="why-outsource.html" class="block font-medium text-[#ceff66] text-lg py-3 border-b border-white/5">Why Outsource</a>
  <a href="#contact" class="block font-medium text-white/70 text-lg py-3 hover:text-[#ceff66] hover:pl-2 transition-all">Get in touch →</a>
</div>

<!-- ========== HERO SECTION — PCB BG ========== -->
<section class="relative z-0 -mt-[80px] min-h-[50vh] flex items-center justify-center overflow-hidden bg-gradient-to-br from-[#ceff66] via-[#b3e04e] to-[#a6d84a]">

  <!-- ===== PCB MOTHERBOARD BACKGROUND SVG ===== -->
  <div class="absolute inset-0 w-full h-full overflow-hidden">
    <svg class="absolute inset-0 w-full h-full" viewBox="0 0 1440 720" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" fill="none">

      <!-- Subtle dark base overlay to bring out traces -->
      <rect width="1440" height="720" fill="rgba(0,0,0,0.08)"/>

      <!-- ===== HORIZONTAL MAIN TRACES ===== -->
      <path class="pcb-trace" d="M0 180 H200 V140 H500 V180 H900 V140 H1200 V180 H1440" stroke="#000" stroke-width="2.5" opacity="0.2"/>
      <path class="pcb-trace pcb-trace-2" d="M0 360 H100 V320 H400 V360 H750 V400 H1100 V360 H1440" stroke="#000" stroke-width="2" opacity="0.2"/>
      <path class="pcb-trace pcb-trace-3" d="M0 540 H300 V500 H600 V540 H950 V500 H1300 V540 H1440" stroke="#000" stroke-width="2.5" opacity="0.2"/>
      <path class="pcb-trace pcb-trace-4" d="M0 80 H150 V120 H450 V80 H800 V100 H1100 V80 H1440" stroke="#000" stroke-width="1.5" opacity="0.15"/>
      <path class="pcb-trace pcb-trace-5" d="M0 640 H250 V600 H550 V640 H1000 V600 H1300 V640 H1440" stroke="#000" stroke-width="2" opacity="0.15"/>

      <!-- ===== VERTICAL TRACES ===== -->
      <path class="pcb-trace pcb-trace-6" d="M200 0 V180 H240 V360 H200 V540 H220 V720" stroke="#000" stroke-width="2" opacity="0.2"/>
      <path class="pcb-trace pcb-trace-7" d="M720 0 V100 H760 V180 H720 V360 H740 V540 H720 V720" stroke="#000" stroke-width="2.5" opacity="0.2"/>
      <path class="pcb-trace pcb-trace-8" d="M1200 0 V140 H1240 V360 H1200 V500 H1220 V720" stroke="#000" stroke-width="2" opacity="0.2"/>
      <path class="pcb-trace pcb-trace-2" d="M400 0 V80 H440 V320 H400 V540 H420 V720" stroke="#000" stroke-width="1.5" opacity="0.15"/>
      <path class="pcb-trace pcb-trace-3" d="M960 0 V180 H1000 V400 H960 V600 H980 V720" stroke="#000" stroke-width="1.5" opacity="0.15"/>

      <!-- ===== DIAGONAL / CORNER TRACES ===== -->
      <path class="pcb-trace pcb-trace-4" d="M0 250 L80 170 H300 L380 250 H600 L680 170 H900" stroke="#000" stroke-width="1.5" opacity="0.12"/>
      <path class="pcb-trace pcb-trace-5" d="M540 720 L620 640 H840 L920 560 H1140 L1220 480 H1440" stroke="#000" stroke-width="1.5" opacity="0.12"/>

      <!-- ===== VIA DOTS (solder points) ===== -->
      <circle class="pcb-dot" cx="200" cy="180" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot pcb-dot-2" cx="500" cy="140" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot pcb-dot-3" cx="900" cy="140" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot pcb-dot-4" cx="1200" cy="180" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot pcb-dot-5" cx="400" cy="360" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot" cx="750" cy="400" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot pcb-dot-2" cx="1100" cy="360" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot pcb-dot-3" cx="600" cy="540" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot pcb-dot-4" cx="950" cy="500" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot pcb-dot-5" cx="720" cy="180" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot" cx="720" cy="360" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot pcb-dot-2" cx="240" cy="360" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot pcb-dot-3" cx="1240" cy="360" r="4" fill="#000" opacity="0.4"/>
      <circle class="pcb-dot pcb-dot-4" cx="440" cy="80" r="3.5" fill="#000" opacity="0.35"/>
      <circle class="pcb-dot pcb-dot-5" cx="980" cy="400" r="3.5" fill="#000" opacity="0.35"/>
      <circle class="pcb-dot" cx="1300" cy="540" r="3.5" fill="#000" opacity="0.35"/>
      <circle class="pcb-dot pcb-dot-2" cx="150" cy="360" r="3.5" fill="#000" opacity="0.35"/>

      <!-- VIA rings (hollow outer ring for authenticity) -->
      <circle cx="200" cy="180" r="7" stroke="#000" stroke-width="1.5" fill="none" opacity="0.18"/>
      <circle cx="720" cy="360" r="7" stroke="#000" stroke-width="1.5" fill="none" opacity="0.18"/>
      <circle cx="1200" cy="180" r="7" stroke="#000" stroke-width="1.5" fill="none" opacity="0.18"/>
      <circle cx="600" cy="540" r="7" stroke="#000" stroke-width="1.5" fill="none" opacity="0.18"/>
      <circle cx="400" cy="360" r="7" stroke="#000" stroke-width="1.5" fill="none" opacity="0.18"/>

      <!-- ===== IC CHIP BLOCKS (center area) ===== -->
      <!-- Left IC -->
      <rect class="pcb-chip" x="60" y="280" width="80" height="60" rx="4" stroke="#000" stroke-width="2" fill="rgba(0,0,0,0.1)" opacity="0.25"/>
      <line x1="80" y1="280" x2="80" y2="270" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="100" y1="280" x2="100" y2="270" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="120" y1="280" x2="120" y2="270" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="80" y1="340" x2="80" y2="350" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="100" y1="340" x2="100" y2="350" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="120" y1="340" x2="120" y2="350" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="60" y1="300" x2="50" y2="300" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="60" y1="320" x2="50" y2="320" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="140" y1="300" x2="150" y2="300" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="140" y1="320" x2="150" y2="320" stroke="#000" stroke-width="1.5" opacity="0.3"/>

      <!-- Center big IC (main chip) -->
      <rect class="pcb-chip pcb-chip-2" x="620" y="260" width="200" height="140" rx="6" stroke="#000" stroke-width="2.5" fill="rgba(0,0,0,0.12)" opacity="0.3"/>
      <!-- pin rows top -->
      <line x1="650" y1="260" x2="650" y2="245" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="675" y1="260" x2="675" y2="245" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="700" y1="260" x2="700" y2="245" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="725" y1="260" x2="725" y2="245" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="750" y1="260" x2="750" y2="245" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="775" y1="260" x2="775" y2="245" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="800" y1="260" x2="800" y2="245" stroke="#000" stroke-width="2" opacity="0.3"/>
      <!-- pin rows bottom -->
      <line x1="650" y1="400" x2="650" y2="415" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="675" y1="400" x2="675" y2="415" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="700" y1="400" x2="700" y2="415" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="725" y1="400" x2="725" y2="415" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="750" y1="400" x2="750" y2="415" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="775" y1="400" x2="775" y2="415" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="800" y1="400" x2="800" y2="415" stroke="#000" stroke-width="2" opacity="0.3"/>
      <!-- pin rows left -->
      <line x1="620" y1="285" x2="605" y2="285" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="620" y1="310" x2="605" y2="310" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="620" y1="335" x2="605" y2="335" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="620" y1="360" x2="605" y2="360" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="620" y1="385" x2="605" y2="385" stroke="#000" stroke-width="2" opacity="0.3"/>
      <!-- pin rows right -->
      <line x1="820" y1="285" x2="835" y2="285" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="820" y1="310" x2="835" y2="310" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="820" y1="335" x2="835" y2="335" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="820" y1="360" x2="835" y2="360" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="820" y1="385" x2="835" y2="385" stroke="#000" stroke-width="2" opacity="0.3"/>
      <!-- inner chip detail lines -->
      <rect x="640" y="280" width="160" height="100" rx="3" stroke="#000" stroke-width="1" fill="none" opacity="0.15"/>
      <line x1="640" y1="310" x2="800" y2="310" stroke="#000" stroke-width="0.8" opacity="0.12"/>
      <line x1="640" y1="340" x2="800" y2="340" stroke="#000" stroke-width="0.8" opacity="0.12"/>
      <line x1="700" y1="280" x2="700" y2="380" stroke="#000" stroke-width="0.8" opacity="0.12"/>
      <line x1="760" y1="280" x2="760" y2="380" stroke="#000" stroke-width="0.8" opacity="0.12"/>

      <!-- Right IC -->
      <rect class="pcb-chip" x="1280" y="440" width="100" height="70" rx="4" stroke="#000" stroke-width="2" fill="rgba(0,0,0,0.1)" opacity="0.25"/>
      <line x1="1300" y1="440" x2="1300" y2="430" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="1320" y1="440" x2="1320" y2="430" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="1340" y1="440" x2="1340" y2="430" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="1360" y1="440" x2="1360" y2="430" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="1300" y1="510" x2="1300" y2="520" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="1340" y1="510" x2="1340" y2="520" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="1380" y1="510" x2="1380" y2="520" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="1280" y1="460" x2="1270" y2="460" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="1280" y1="480" x2="1270" y2="480" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="1380" y1="460" x2="1390" y2="460" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <line x1="1380" y1="480" x2="1390" y2="480" stroke="#000" stroke-width="1.5" opacity="0.3"/>

      <!-- ===== CAPACITOR / RESISTOR SYMBOLS ===== -->
      <!-- Small resistors (rectangles) scattered -->
      <rect x="300" y="135" width="30" height="10" rx="2" stroke="#000" stroke-width="1.5" fill="rgba(0,0,0,0.1)" opacity="0.25"/>
      <line x1="290" y1="140" x2="300" y2="140" stroke="#000" stroke-width="1.5" opacity="0.25"/>
      <line x1="330" y1="140" x2="340" y2="140" stroke="#000" stroke-width="1.5" opacity="0.25"/>

      <rect x="850" y="135" width="30" height="10" rx="2" stroke="#000" stroke-width="1.5" fill="rgba(0,0,0,0.1)" opacity="0.25"/>
      <line x1="840" y1="140" x2="850" y2="140" stroke="#000" stroke-width="1.5" opacity="0.25"/>
      <line x1="880" y1="140" x2="890" y2="140" stroke="#000" stroke-width="1.5" opacity="0.25"/>

      <rect x="480" y="395" width="30" height="10" rx="2" stroke="#000" stroke-width="1.5" fill="rgba(0,0,0,0.1)" opacity="0.25"/>
      <line x1="470" y1="400" x2="480" y2="400" stroke="#000" stroke-width="1.5" opacity="0.25"/>
      <line x1="510" y1="400" x2="520" y2="400" stroke="#000" stroke-width="1.5" opacity="0.25"/>

      <!-- Small capacitors (two parallel lines) -->
      <line x1="550" y1="170" x2="550" y2="185" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="556" y1="170" x2="556" y2="185" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="553" y1="155" x2="553" y2="170" stroke="#000" stroke-width="1.5" opacity="0.25"/>
      <line x1="553" y1="185" x2="553" y2="200" stroke="#000" stroke-width="1.5" opacity="0.25"/>

      <line x1="1050" y1="350" x2="1050" y2="365" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="1056" y1="350" x2="1056" y2="365" stroke="#000" stroke-width="2" opacity="0.3"/>
      <line x1="1053" y1="335" x2="1053" y2="350" stroke="#000" stroke-width="1.5" opacity="0.25"/>
      <line x1="1053" y1="365" x2="1053" y2="380" stroke="#000" stroke-width="1.5" opacity="0.25"/>

      <!-- ===== CORNER PCB MOUNTING HOLES ===== -->
      <circle cx="40" cy="40" r="12" stroke="#000" stroke-width="2" fill="none" opacity="0.2"/>
      <circle cx="40" cy="40" r="6" stroke="#000" stroke-width="1" fill="none" opacity="0.15"/>
      <circle cx="1400" cy="40" r="12" stroke="#000" stroke-width="2" fill="none" opacity="0.2"/>
      <circle cx="1400" cy="40" r="6" stroke="#000" stroke-width="1" fill="none" opacity="0.15"/>
      <circle cx="40" cy="680" r="12" stroke="#000" stroke-width="2" fill="none" opacity="0.2"/>
      <circle cx="40" cy="680" r="6" stroke="#000" stroke-width="1" fill="none" opacity="0.15"/>
      <circle cx="1400" cy="680" r="12" stroke="#000" stroke-width="2" fill="none" opacity="0.2"/>
      <circle cx="1400" cy="680" r="6" stroke="#000" stroke-width="1" fill="none" opacity="0.15"/>

      <!-- ===== EDGE CONNECTOR FINGERS (bottom edge) ===== -->
      <rect x="320" y="700" width="20" height="20" rx="2" fill="rgba(0,0,0,0.15)" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <rect x="350" y="700" width="20" height="20" rx="2" fill="rgba(0,0,0,0.15)" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <rect x="380" y="700" width="20" height="20" rx="2" fill="rgba(0,0,0,0.15)" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <rect x="410" y="700" width="20" height="20" rx="2" fill="rgba(0,0,0,0.15)" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <rect x="440" y="700" width="20" height="20" rx="2" fill="rgba(0,0,0,0.15)" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <rect x="960" y="700" width="20" height="20" rx="2" fill="rgba(0,0,0,0.15)" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <rect x="990" y="700" width="20" height="20" rx="2" fill="rgba(0,0,0,0.15)" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <rect x="1020" y="700" width="20" height="20" rx="2" fill="rgba(0,0,0,0.15)" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <rect x="1050" y="700" width="20" height="20" rx="2" fill="rgba(0,0,0,0.15)" stroke="#000" stroke-width="1.5" opacity="0.3"/>
      <rect x="1080" y="700" width="20" height="20" rx="2" fill="rgba(0,0,0,0.15)" stroke="#000" stroke-width="1.5" opacity="0.3"/>

    </svg>
  </div>

  <!-- Subtle dark vignette on left/right edges to blend -->
  <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,transparent_40%,rgba(0,0,0,0.15)_100%)]"></div>

  <!-- Main content -->
  <div class="relative z-10 text-center px-5 sm:px-8 md:px-12 lg:px-24 pt-36 pb-20 md:pt-44 md:pb-28">
    <div class="reveal inline-flex items-center gap-3 px-4 py-2 bg-black/10 backdrop-blur-sm rounded-full border border-black/20 mb-6">
      <span class="w-2 h-2 bg-black rounded-full animate-pulse"></span>
      <span class="text-black/70 text-sm font-medium tracking-wider">WHY OUTSOURCE</span>
    </div>

    <h1 class="reveal d1 font-['Plus_Jakarta_Sans'] font-extrabold text-6xl md:text-7xl lg:text-8xl xl:text-9xl text-black leading-[1.1] tracking-[-0.03em] mb-6">
      Outsource <span class="text-white">Smarter</span>
    </h1>

    <p class="reveal d2 text-black/70 text-xl max-w-2xl mx-auto">
      7+ years of excellence, 60% average cost savings, and 24/7 dedicated support.
    </p>
  </div>

  <!-- Decorative bottom gradient -->
  <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-[#0a0a0a] to-transparent"></div>
</section>

<!-- ========== WHO WE ARE - MODERN SPLIT LAYOUT ========== -->
<section class="relative py-32 bg-[#0a0a0a] overflow-hidden">
  <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-[#ceff66]/5 rounded-full blur-[120px]"></div>
  <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-purple-600/5 rounded-full blur-[100px]"></div>

  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
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
        <div class="flex flex-wrap gap-3">
          <span class="px-4 py-2 bg-white/5 border border-[#ceff66]/20 rounded-full text-sm text-white/70 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default">Outbound Calls</span>
          <span class="px-4 py-2 bg-white/5 border border-[#ceff66]/20 rounded-full text-sm text-white/70 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default">Inbound Support</span>
          <span class="px-4 py-2 bg-white/5 border border-[#ceff66]/20 rounded-full text-sm text-white/70 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default">Chat Support</span>
          <span class="px-4 py-2 bg-white/5 border border-[#ceff66]/20 rounded-full text-sm text-white/70 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default">Virtual Assistants</span>
          <span class="px-4 py-2 bg-white/5 border border-[#ceff66]/20 rounded-full text-sm text-white/70 hover:bg-[#ceff66] hover:text-black transition-all duration-300 cursor-default">Back-Office Solutions</span>
        </div>
      </div>

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

<!-- ========== BENEFITS SECTION ========== -->
<section class="relative py-32 bg-[#050505] overflow-hidden" id="benefits">
  <div class="absolute inset-0 opacity-20">
    <div class="absolute top-20 left-20 w-96 h-96 bg-[#ceff66] rounded-full blur-[100px] animate-pulse"></div>
    <div class="absolute bottom-20 right-20 w-96 h-96 bg-purple-600 rounded-full blur-[100px] animate-pulse animation-delay-1000"></div>
  </div>

  <div class="max-w-7xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20 relative z-10">
    <div class="text-center mb-20">
      <span class="text-[#ceff66] text-sm font-semibold tracking-[0.3em] uppercase mb-4 block">Why Outsource</span>
      <h2 class="font-['Plus_Jakarta_Sans'] text-5xl md:text-6xl lg:text-7xl font-extrabold text-white mb-6">
        Six <span class="gradient-text">powerful</span><br>
        reasons to partner
      </h2>
      <p class="text-white/40 text-lg max-w-2xl mx-auto">Lower costs, better management, and greater agility — all in one strategic partnership.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="benefit-card-modern group relative bg-white/5 backdrop-blur-sm rounded-[32px] p-8 border border-white/10 hover:border-[#ceff66]/30 transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-white/5">01</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-piggy-bank text-2xl text-black"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-3">Serious Savings</h3>
        <p class="text-white/40 text-sm leading-relaxed">A lower cost structure and reduced operating costs bolster your competitive advantage, allowing you to focus funds on core items.</p>
      </div>

      <div class="benefit-card-modern group relative bg-white/5 backdrop-blur-sm rounded-[32px] p-8 border border-white/10 hover:border-[#ceff66]/30 transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-white/5">02</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-users-gear text-2xl text-black"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-3">Flexible Staffing</h3>
        <p class="text-white/40 text-sm leading-relaxed">Outsourcing makes it easy to bring in expert resources for seasonal or cyclical operations — scale up or down on demand.</p>
      </div>

      <div class="benefit-card-modern group relative bg-white/5 backdrop-blur-sm rounded-[32px] p-8 border border-white/10 hover:border-[#ceff66]/30 transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-white/5">03</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-star text-2xl text-black"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-3">Excellent Management</h3>
        <p class="text-white/40 text-sm leading-relaxed">OneStop's highly trained team brings high-calibre management skills to the table — for a much lower price tag than in-house hires.</p>
      </div>

      <div class="benefit-card-modern group relative bg-white/5 backdrop-blur-sm rounded-[32px] p-8 border border-white/10 hover:border-[#ceff66]/30 transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-white/5">04</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-shield-halved text-2xl text-black"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-3">Continuity & Risk</h3>
        <p class="text-white/40 text-sm leading-relaxed">In industries with high employee turnover, outsourcing with OneStop provides continuity, consistency, and peace of mind.</p>
      </div>

      <div class="benefit-card-modern group relative bg-white/5 backdrop-blur-sm rounded-[32px] p-8 border border-white/10 hover:border-[#ceff66]/30 transition-all">
        <div class="absolute top-6 right-6 text-6xl font-bold text-white/5">05</div>
        <div class="w-16 h-16 bg-[#ceff66] rounded-2xl flex items-center justify-center mb-6 shadow-2xl group-hover:scale-110 transition-transform">
          <i class="fas fa-bolt text-2xl text-black"></i>
        </div>
        <h3 class="font-['Plus_Jakarta_Sans'] text-2xl font-bold text-white mb-3">Greater Agility</h3>
        <p class="text-white/40 text-sm leading-relaxed">Having a support infrastructure in place makes it easier to deal with change — and stay decisively ahead of the competition.</p>
      </div>

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

<!-- ========== STATS SECTION ========== -->
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

<!-- ========== QUOTE SECTION ========== -->
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

<!-- ========== CTA SECTION ========== -->
<section class="relative py-32 bg-[#0a0a0a]" id="contact">
  <div class="max-w-6xl mx-auto px-5 sm:px-8 md:px-12 lg:px-20">
    <div class="relative glass-card rounded-[48px] p-12 md:p-20 overflow-hidden border border-[#ceff66]/20">
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

<!-- ========== FOOTER ========== -->
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