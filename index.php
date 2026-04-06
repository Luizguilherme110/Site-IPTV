<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Evoland — +400 Canais e Todos os Streamings Liberados</title>
  <meta name="description" content="A melhor experiência em streaming. +400 canais ao vivo, filmes, séries e todos os streamings liberados. Recarga oficial com entrega imediata." />

  <!-- Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwindcss.config = {
      theme: {
        extend: {
          colors: {
            neon: '#b066ff',
            'neon-light': '#c78dff',
            'deep-purple': '#6a11cb',
            'dark-purple': '#1a0030',
          },
          fontFamily: {
            sans: ['Inter', 'system-ui', 'sans-serif'],
          },
          boxShadow: {
            neon: '0 0 20px rgba(176,102,255,0.4), 0 0 60px rgba(176,102,255,0.15)',
            'neon-lg': '0 0 30px rgba(176,102,255,0.5), 0 0 80px rgba(176,102,255,0.25)',
            'neon-card': '0 8px 32px rgba(176,102,255,0.18)',
          },
          animation: {
            'float': 'float 6s ease-in-out infinite',
            'float-delay': 'float 6s ease-in-out 2s infinite',
            'float-slow': 'float 8s ease-in-out 1s infinite',
            'pulse-neon': 'pulseNeon 2s ease-in-out infinite',
            'glow': 'glow 2s ease-in-out infinite alternate',
          },
          keyframes: {
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-20px)' },
            },
            pulseNeon: {
              '0%, 100%': { boxShadow: '0 0 20px rgba(176,102,255,0.4)' },
              '50%': { boxShadow: '0 0 40px rgba(176,102,255,0.7), 0 0 80px rgba(176,102,255,0.3)' },
            },
            glow: {
              '0%': { textShadow: '0 0 10px rgba(176,102,255,0.5)' },
              '100%': { textShadow: '0 0 20px rgba(176,102,255,0.8), 0 0 40px rgba(176,102,255,0.4)' },
            },
          },
        },
      },
    };
  </script>

  <!-- AOS (Animate on Scroll) -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    html {
      scroll-behavior: smooth;
      overflow-x: hidden;
    }
    body {
      font-family: 'Inter', system-ui, sans-serif;
      background: #000;
      color: #fff;
      width: 100%;
      overflow-x: hidden;
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: #000; }
    ::-webkit-scrollbar-thumb { background: #6a11cb; border-radius: 3px; }
    ::-webkit-scrollbar-thumb:hover { background: #b066ff; }

    /* Gradient backgrounds */
    .gradient-bg {
      background: radial-gradient(ellipse at 50% 0%, rgba(106,17,203,0.3) 0%, transparent 60%),
                  radial-gradient(ellipse at 80% 50%, rgba(176,102,255,0.1) 0%, transparent 50%),
                  #000;
    }

    .gradient-bg-2 {
      background: radial-gradient(ellipse at 20% 80%, rgba(106,17,203,0.2) 0%, transparent 50%),
                  radial-gradient(ellipse at 80% 20%, rgba(176,102,255,0.08) 0%, transparent 50%),
                  #000;
    }

    /* Card 3D transform */
    .card-3d {
      transform-style: preserve-3d;
      perspective: 1000px;
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .card-3d:hover {
      transform: translateY(-8px) rotateX(2deg);
      box-shadow: 0 20px 60px rgba(176,102,255,0.35), 0 0 30px rgba(176,102,255,0.2);
    }

    /* Neon border effect */
    .neon-border {
      position: relative;
    }
    .neon-border::before {
      content: '';
      position: absolute;
      inset: -1px;
      border-radius: inherit;
      padding: 1.5px;
      background: linear-gradient(135deg, #b066ff, #6a11cb, #b066ff);
      -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
      mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
      -webkit-mask-composite: xor;
      mask-composite: exclude;
      pointer-events: none;
      opacity: 0.6;
      transition: opacity 0.3s;
    }
    .neon-border:hover::before {
      opacity: 1;
    }

    /* Floating streaming icons */
    .streaming-icon {
      position: absolute;
      width: 56px;
      height: 56px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 800;
      font-size: 11px;
      letter-spacing: -0.5px;
      color: #fff;
      box-shadow: 0 8px 24px rgba(0,0,0,0.5);
      backdrop-filter: blur(10px);
    }

    /* Btn gradient */
    .btn-gradient {
      background: linear-gradient(135deg, #6a11cb 0%, #b066ff 100%);
      transition: all 0.3s ease;
    }
    .btn-gradient:hover {
      background: linear-gradient(135deg, #7b20e0 0%, #c78dff 100%);
      box-shadow: 0 0 30px rgba(176,102,255,0.5);
      transform: translateY(-2px);
    }

    .btn-whatsapp {
      background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
      transition: all 0.3s ease;
    }
    .btn-whatsapp:hover {
      background: linear-gradient(135deg, #2be874 0%, #159c8a 100%);
      box-shadow: 0 0 30px rgba(37,211,102,0.4);
      transform: translateY(-2px);
    }

    /* Downloader code highlight */
    .code-display {
      background: linear-gradient(135deg, rgba(106,17,203,0.2) 0%, rgba(176,102,255,0.1) 100%);
      border: 1px solid rgba(176,102,255,0.3);
    }

    /* Selo badges */
    .badge-glow {
      animation: pulseNeon 3s ease-in-out infinite;
    }

    /* Hero TV mockup */
    .tv-mockup {
      position: relative;
      max-width: 600px;
      margin: 0 auto;
    }
    .tv-screen {
      border-radius: 12px;
      overflow: hidden;
      border: 3px solid #222;
      box-shadow: 0 0 40px rgba(176,102,255,0.2), 0 20px 60px rgba(0,0,0,0.6);
      position: relative;
      aspect-ratio: 16/9;
      background: linear-gradient(135deg, #0a0014, #1a0030);
    }
    .tv-stand {
      width: 30%;
      height: 18px;
      background: linear-gradient(180deg, #333, #111);
      margin: 0 auto;
      border-radius: 0 0 8px 8px;
    }
    .tv-base {
      width: 45%;
      height: 6px;
      background: #222;
      margin: 0 auto;
      border-radius: 0 0 4px 4px;
    }

    /* WhatsApp floating button */
    .whatsapp-float {
      position: fixed;
      bottom: 24px;
      right: 24px;
      z-index: 40;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: #25d366;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 20px rgba(37,211,102,0.4);
      transition: all 0.3s ease;
      cursor: pointer;
    }
    .whatsapp-float:hover {
      transform: scale(1.1);
      box-shadow: 0 6px 30px rgba(37,211,102,0.6);
    }

    /* Section divider */
    .section-divider {
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(176,102,255,0.3), transparent);
    }

    /* Highlight text */
    .text-gradient {
      background: linear-gradient(135deg, #b066ff, #e0b0ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    /* Glow line */
    .glow-line {
      width: 80px;
      height: 3px;
      background: linear-gradient(90deg, #6a11cb, #b066ff);
      border-radius: 2px;
      box-shadow: 0 0 10px rgba(176,102,255,0.5);
    }

    /* Card popular badge */
    .popular-badge {
      position: absolute;
      top: -12px;
      right: 20px;
      background: linear-gradient(135deg, #b066ff, #6a11cb);
      padding: 4px 16px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.5px;
      box-shadow: 0 4px 15px rgba(176,102,255,0.4);
    }

    /* Navbar glass with gradient: transparent center -> solid edges */
    .navbar-glass {
      background: linear-gradient(90deg, 
        rgba(10, 0, 20, 0.9) 0%, 
        rgba(10, 0, 20, 0.85) 25%,
        rgba(176, 102, 255, 0.08) 45%, 
        rgba(176, 102, 255, 0.08) 55%, 
        rgba(10, 0, 20, 0.85) 75%,
        rgba(10, 0, 20, 0.9) 100%
      );
      border: 1px solid rgba(176, 102, 255, 0.12);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .navbar-glass.navbar-scrolled {
      background: linear-gradient(90deg, 
        rgba(10, 0, 20, 0.95) 0%, 
        rgba(10, 0, 20, 0.9) 25%,
        rgba(106, 17, 203, 0.15) 45%, 
        rgba(106, 17, 203, 0.15) 55%, 
        rgba(10, 0, 20, 0.9) 75%,
        rgba(10, 0, 20, 0.95) 100%
      );
      border-color: rgba(176, 102, 255, 0.2);
      box-shadow: 0 8px 32px rgba(106, 17, 203, 0.15), 0 0 60px rgba(176, 102, 255, 0.05);
      backdrop-filter: blur(24px);
      -webkit-backdrop-filter: blur(24px);
    }

    /* Subtle noise texture overlay */
    .noise-overlay::after {
      content: '';
      position: fixed;
      inset: 0;
      opacity: 0.03;
      z-index: 0;
      background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
      pointer-events: none;
    }
  </style>
</head>

<body class="gradient-bg noise-overlay">

  <!-- ========== NAVBAR ========== -->
  <nav class="fixed top-2 left-2 right-2 sm:top-4 sm:left-4 sm:right-4 z-[9999] transition-all duration-500" id="navbar">
    <div class="max-w-6xl mx-auto navbar-glass rounded-2xl px-4 sm:px-6 py-2" id="navbarInner">
      <!-- Desktop Navbar -->
      <div class="hidden md:flex items-center justify-between h-14 gap-8">
        <a href="#" class="flex items-center gap-2.5 shrink-0">
          <img src="Logos/Evoland%20LOGO.png" alt="Evoland" class="h-12 w-auto" loading="eager" />
          <span class="text-2xl font-black tracking-tight text-gradient">Evoland</span>
        </a>

        <div class="flex items-center gap-8 text-sm font-medium text-gray-300">
          <a href="#planos" class="hover:text-neon transition-colors">Planos</a>
          <a href="#instalacao" class="hover:text-neon transition-colors">Instalação</a>
          <a href="#xcloud" class="hover:text-neon transition-colors">Xcloud</a>
          <a href="#faq" class="hover:text-neon transition-colors">FAQ</a>
        </div>

      </div>

      <!-- Mobile Navbar -->
      <div class="md:hidden relative flex items-center justify-between h-14">
        <a href="#" class="flex items-center gap-2 min-w-0 pr-2">
          <img src="Logos/Evoland%20LOGO.png" alt="Evoland" class="h-8 w-auto shrink-0" loading="eager" />
          <span class="text-lg font-black tracking-tight text-gradient truncate">Evoland</span>
        </a>

        <button class="text-white p-2 shrink-0 z-[10001]" id="menuBtn" aria-label="Menu">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"></line><line x1="3" x2="21" y1="12" y2="12"></line><line x1="3" x2="21" y1="18" y2="18"></line></svg>
        </button>
      </div>
    </div>
    <!-- Mobile Menu Dropdown -->
    <div class="md:hidden hidden max-w-6xl mx-auto bg-black/95 backdrop-blur-xl border border-white/5 rounded-2xl mt-2 relative z-[10000]" id="mobileMenu">
      <div class="px-5 py-4 space-y-3">
        <a href="#planos" class="block text-gray-300 hover:text-neon transition-colors py-2 font-medium">Planos</a>
        <a href="#instalacao" class="block text-gray-300 hover:text-neon transition-colors py-2 font-medium">Instalação</a>
        <a href="#xcloud" class="block text-gray-300 hover:text-neon transition-colors py-2 font-medium">Xcloud</a>
        <a href="#faq" class="block text-gray-300 hover:text-neon transition-colors py-2 font-medium">FAQ</a>
      </div>
    </div>
  </nav>

  <!-- ========== HERO SECTION ========== -->
  <section class="relative min-h-screen flex items-center pt-20 pb-12 overflow-hidden">
    <!-- Background Effects -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
      <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[800px] h-[800px] bg-deep-purple/20 rounded-full blur-[120px]"></div>
      <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-neon/5 rounded-full blur-[100px]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center">
        <!-- Left Content -->
        <div class="text-center" data-aos="fade-right" data-aos-duration="1000">
          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-tight tracking-tight mb-6">
            A Melhor Experiência em
            <span class="text-gradient"> Streaming.</span>
          </h1>
          <p class="text-lg sm:text-xl text-gray-400 mb-4 max-w-xl mx-auto leading-relaxed">
            <span class="text-white font-semibold">+400 Canais ao Vivo</span> e todos os streamings liberados.
            Filmes, séries, esportes e muito mais em <span class="text-neon-light font-semibold">Full HD & 4K</span>.
          </p>
          <p class="text-sm text-gray-500 mb-8 max-w-xl mx-auto">
            Netflix, Disney+, HBO Max, Amazon Prime, Paramount+ e muito mais. Tudo em um só lugar.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#planos"
              class="btn-gradient text-white font-bold text-base px-8 py-4 rounded-2xl inline-flex items-center justify-center gap-3 shadow-neon">
              <i data-lucide="zap" class="w-5 h-5"></i>
              Ver Planos & Recarregar
            </a>
            <a href="#instalacao"
              class="bg-white/5 border border-white/10 text-white font-semibold text-base px-8 py-4 rounded-2xl inline-flex items-center justify-center gap-3 hover:bg-white/10 transition-all">
              <i data-lucide="download" class="w-5 h-5"></i>
              Como Instalar
            </a>
          </div>
          <!-- Trust badges -->
          <div class="flex flex-wrap items-center gap-6 mt-8 justify-center text-sm text-gray-500">
            <div class="flex items-center gap-2">
              <i data-lucide="shield-check" class="w-4 h-4 text-green-400"></i>
              <span>Recarga Oficial</span>
            </div>
            <div class="flex items-center gap-2">
              <i data-lucide="clock" class="w-4 h-4 text-neon"></i>
              <span>Ativação Instantânea</span>
            </div>
            <div class="flex items-center gap-2">
              <i data-lucide="headphones" class="w-4 h-4 text-blue-400"></i>
              <span>Suporte 24h</span>
            </div>
          </div>
        </div>

        <!-- Right - TV Mockup -->
        <div class="relative px-8 sm:px-10 py-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
          <div class="tv-mockup">
            <div class="tv-screen">
              <!-- Football/Streaming image inside TV -->
              <img 
                src="https://images.unsplash.com/photo-1522778119026-d647f0596c20?w=800&q=80&auto=format" 
                alt="Futebol ao vivo em alta definição"
                class="w-full h-full object-cover"
                loading="eager"
              />
              <!-- Dark overlay for contrast -->
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/30"></div>
              <!-- Live badge on TV -->
              <div class="absolute top-4 left-4 flex items-center gap-2 bg-red-600/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold">
                <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                AO VIVO
              </div>
              <!-- Channel count on TV -->
              <div class="absolute bottom-4 left-4 text-sm font-bold">
                <span class="text-neon-light">+400</span> Canais
              </div>
              <!-- Sports badge on TV -->
              <div class="absolute bottom-4 right-4 flex items-center gap-1.5 bg-black/70 backdrop-blur-sm border border-white/10 px-3 py-1.5 rounded-full">
                <span class="text-[10px]">⚽</span>
                <span class="text-[11px] font-bold text-white">Futebol & Esportes</span>
              </div>
              <!-- Top right sports highlight -->
              <div class="absolute top-4 right-4 flex items-center gap-1.5 bg-green-600/80 backdrop-blur-sm px-2.5 py-1 rounded-full">
                <span class="text-[10px]">🏆</span>
                <span class="text-[10px] font-bold text-white">Todos os Campeonatos</span>
              </div>
            </div>
            <div class="tv-stand"></div>
            <div class="tv-base"></div>
          </div>

          <!-- Floating streaming service icons -->
          <div class="streaming-icon animate-float bg-gradient-to-br from-red-700 to-red-900" style="top: 0; right: 0;">
            <span>N</span>
          </div>
          <div class="streaming-icon animate-float-delay bg-gradient-to-br from-blue-800 to-blue-950" style="top: 25%; left: 0;">
            <span style="font-size:9px;">Disney+</span>
          </div>
          <div class="streaming-icon animate-float-slow bg-gradient-to-br from-purple-800 to-indigo-950" style="bottom: 15%; right: 0;">
            <span style="font-size:10px;">HBO</span>
          </div>
          <div class="streaming-icon animate-float bg-gradient-to-br from-cyan-700 to-cyan-900" style="bottom: 30%; left: 0;">
            <span style="font-size:9px;">Prime</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats bar -->
  <div class="relative border-y border-white/5 bg-black/40 backdrop-blur-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div data-aos="fade-up" data-aos-delay="0">
          <div class="text-3xl sm:text-4xl font-black text-gradient">+400</div>
          <div class="text-sm text-gray-500 mt-1">Canais ao Vivo</div>
        </div>
        <div data-aos="fade-up" data-aos-delay="100">
          <div class="text-3xl sm:text-4xl font-black text-gradient">Full HD</div>
          <div class="text-sm text-gray-500 mt-1">& 4K Disponível</div>
        </div>
        <div data-aos="fade-up" data-aos-delay="200">
          <div class="text-3xl sm:text-4xl font-black text-gradient">24h</div>
          <div class="text-sm text-gray-500 mt-1">Suporte Online</div>
        </div>
        <div data-aos="fade-up" data-aos-delay="300">
          <div class="text-3xl sm:text-4xl font-black text-gradient">5+</div>
          <div class="text-sm text-gray-500 mt-1">Streamings Inclusos</div>
        </div>
      </div>
    </div>
  </div>

  <!-- ========== SALES CARDS SECTION ========== -->
  <section id="planos" class="relative py-20 sm:py-28 gradient-bg-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-16" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 bg-neon/10 border border-neon/20 rounded-full px-4 py-1.5 text-xs font-semibold text-neon mb-4">
          <i data-lucide="crown" class="w-3.5 h-3.5"></i>
          PLANOS VIP
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight mb-4">
          Escolha o Seu <span class="text-gradient">Aplicativo</span>
        </h2>
        <p class="text-gray-400 max-w-2xl mx-auto text-lg">
          Selecione o app ideal para você e faça sua recarga de forma rápida e segura pelo WhatsApp.
        </p>
        <div class="glow-line mx-auto mt-6"></div>
      </div>

      <!-- Cards Grid -->
      <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">

        <!-- Card 1: TVS Exclusive -->
        <div class="card-3d neon-border rounded-3xl bg-gradient-to-b from-white/[0.06] to-white/[0.02] p-7 relative"
          data-aos="fade-up" data-aos-delay="0" data-aos-duration="800">
          <div class="popular-badge">★ MAIS POPULAR</div>
          <!-- Badges -->
          <div class="flex gap-2 mt-2 mb-5">
            <span class="inline-flex items-center gap-1 bg-green-500/10 border border-green-500/20 text-green-400 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">
              <i data-lucide="zap" class="w-3 h-3"></i> Entrega Imediata
            </span>
            <span class="inline-flex items-center gap-1 bg-neon/10 border border-neon/20 text-neon-light text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">
              <i data-lucide="shield-check" class="w-3 h-3"></i> Recarga Oficial
            </span>
          </div>
          <!-- Icon -->
          <div class="w-16 h-16 rounded-2xl overflow-hidden mb-5 shadow-neon">
            <img src="Logos/TVS.webp" alt="TVS Exclusive" class="w-full h-full object-cover" loading="lazy" />
          </div>
          <h3 class="text-2xl font-extrabold mb-2">TVS Exclusive</h3>
          <p class="text-gray-400 text-sm mb-6 leading-relaxed">
            O app mais completo do mercado. Canais ao vivo, filmes, séries e todos os streamings em um só lugar.
          </p>
          <!-- Features -->
          <ul class="space-y-2.5 mb-8 text-sm">
            <li class="flex items-center gap-2 text-gray-300">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-green-400 shrink-0"></i>
              +400 canais ao vivo
            </li>
            <li class="flex items-center gap-2 text-gray-300">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-green-400 shrink-0"></i>
              Filmes e séries on demand
            </li>
            <li class="flex items-center gap-2 text-gray-300">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-green-400 shrink-0"></i>
              Qualidade Full HD & 4K
            </li>
            <li class="flex items-center gap-2 text-gray-300">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-green-400 shrink-0"></i>
              Todos os streamings inclusos
            </li>
          </ul>
          <!-- CTA -->
          <a href="https://wa.me/5511921421486?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20plano%20TVS!" target="_blank" rel="noopener"
            class="btn-whatsapp w-full py-3.5 rounded-xl font-bold text-white flex items-center justify-center gap-2 text-sm">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.75.75 0 00.917.918l4.462-1.494A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.344 0-4.508-.8-6.226-2.144l-.435-.348-2.636.882.882-2.636-.348-.435A9.956 9.956 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></svg>
            Comprar Recarga
          </a>
        </div>

        <!-- Card 2: UniTV -->
        <div class="card-3d neon-border rounded-3xl bg-gradient-to-b from-white/[0.06] to-white/[0.02] p-7 relative"
          data-aos="fade-up" data-aos-delay="150" data-aos-duration="800">
          <!-- Badges -->
          <div class="flex gap-2 mb-5">
            <span class="inline-flex items-center gap-1 bg-green-500/10 border border-green-500/20 text-green-400 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">
              <i data-lucide="zap" class="w-3 h-3"></i> Entrega Imediata
            </span>
            <span class="inline-flex items-center gap-1 bg-neon/10 border border-neon/20 text-neon-light text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">
              <i data-lucide="shield-check" class="w-3 h-3"></i> Recarga Oficial
            </span>
          </div>
          <!-- Icon -->
          <div class="w-16 h-16 rounded-2xl overflow-hidden mb-5 shadow-lg">
            <img src="Logos/UniTV.png" alt="UniTV" class="w-full h-full object-cover" loading="lazy" />
          </div>
          <h3 class="text-2xl font-extrabold mb-2">UniTV</h3>
          <p class="text-gray-400 text-sm mb-6 leading-relaxed">
            App confiável e estável. Interface moderna e fácil de usar com ampla variedade de conteúdo.
          </p>
          <!-- Features -->
          <ul class="space-y-2.5 mb-8 text-sm">
            <li class="flex items-center gap-2 text-gray-300">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-green-400 shrink-0"></i>
              Centenas de canais ao vivo
            </li>
            <li class="flex items-center gap-2 text-gray-300">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-green-400 shrink-0"></i>
              Catálogo de filmes e séries
            </li>
            <li class="flex items-center gap-2 text-gray-300">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-green-400 shrink-0"></i>
              Interface intuitiva
            </li>
            <li class="flex items-center gap-2 text-gray-300">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-green-400 shrink-0"></i>
              Compatível com TV Box & Android
            </li>
          </ul>
          <!-- CTA -->
          <a href="https://wa.me/5511921421486?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20plano%20Unitv!" target="_blank" rel="noopener"
            class="btn-whatsapp w-full py-3.5 rounded-xl font-bold text-white flex items-center justify-center gap-2 text-sm">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.75.75 0 00.917.918l4.462-1.494A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.344 0-4.508-.8-6.226-2.144l-.435-.348-2.636.882.882-2.636-.348-.435A9.956 9.956 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></svg>
            Comprar Recarga
          </a>
        </div>

        <!-- Card 3: Xcloud -->
        <div class="card-3d neon-border rounded-3xl bg-gradient-to-b from-white/[0.06] to-white/[0.02] p-7 relative"
          data-aos="fade-up" data-aos-delay="300" data-aos-duration="800">
          <!-- Badges -->
          <div class="flex gap-2 mb-5">
            <span class="inline-flex items-center gap-1 bg-green-500/10 border border-green-500/20 text-green-400 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">
              <i data-lucide="zap" class="w-3 h-3"></i> Entrega Imediata
            </span>
            <span class="inline-flex items-center gap-1 bg-neon/10 border border-neon/20 text-neon-light text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">
              <i data-lucide="shield-check" class="w-3 h-3"></i> Recarga Oficial
            </span>
          </div>
          <!-- Icon -->
          <div class="w-16 h-16 rounded-2xl overflow-hidden mb-5 shadow-lg">
            <img src="Logos/Xcloud.png" alt="Xcloud" class="w-full h-full object-cover" loading="lazy" />
          </div>
          <h3 class="text-2xl font-extrabold mb-2">Xcloud</h3>
          <p class="text-gray-400 text-sm mb-6 leading-relaxed">
            Tecnologia nativa para Smart TVs. Sem APK, direto da loja oficial da sua televisão.
          </p>
          <!-- Features -->
          <ul class="space-y-2.5 mb-4 text-sm">
            <li class="flex items-center gap-2 text-gray-300">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-green-400 shrink-0"></i>
              App nativo — sem APK
            </li>
            <li class="flex items-center gap-2 text-gray-300">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-green-400 shrink-0"></i>
              Samsung, LG & Roku
            </li>
            <li class="flex items-center gap-2 text-gray-300">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-green-400 shrink-0"></i>
              Interface fluida e leve
            </li>
            <li class="flex items-center gap-2 text-gray-300">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-green-400 shrink-0"></i>
              Conteúdo completo
            </li>
          </ul>
          <!-- Important note -->
          <div class="bg-amber-500/10 border border-amber-500/20 rounded-xl p-3 mb-6 flex items-start gap-2">
            <i data-lucide="alert-triangle" class="w-4 h-4 text-amber-400 shrink-0 mt-0.5"></i>
            <p class="text-xs text-amber-200/80 leading-relaxed">
              <strong>Exclusivo</strong> para Smart TVs Samsung, LG e Sistema Roku.
            </p>
          </div>
          <!-- CTA -->
          <a href="https://wa.me/5511921421486?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20plano%20Xcloud!" target="_blank" rel="noopener"
            class="btn-whatsapp w-full py-3.5 rounded-xl font-bold text-white flex items-center justify-center gap-2 text-sm">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.75.75 0 00.917.918l4.462-1.494A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.344 0-4.508-.8-6.226-2.144l-.435-.348-2.636.882.882-2.636-.348-.435A9.956 9.956 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></svg>
            Comprar Recarga
          </a>
        </div>

      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ========== INSTALLATION SECTION ========== -->
  <section id="instalacao" class="relative py-20 sm:py-28 gradient-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center mb-16" data-aos="fade-up">
        <div class="inline-flex items-center gap-2 bg-neon/10 border border-neon/20 rounded-full px-4 py-1.5 text-xs font-semibold text-neon mb-4">
          <i data-lucide="download" class="w-3.5 h-3.5"></i>
          CENTRAL DE INSTALAÇÃO
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight mb-4">
          Como <span class="text-gradient">Instalar e Baixar</span>
        </h2>
        <p class="text-gray-400 max-w-2xl mx-auto text-lg">
          Siga os passos abaixo para instalar o app na sua TV Box ou dispositivo Android.
        </p>
        <div class="glow-line mx-auto mt-6"></div>
      </div>

      <!-- Downloader Codes -->
      <div class="grid sm:grid-cols-2 gap-6 max-w-3xl mx-auto mb-16">
        <!-- TVS Code -->
        <div class="code-display rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="0">
          <div class="w-12 h-12 rounded-xl overflow-hidden mx-auto mb-4">
            <img src="Logos/TVS.webp" alt="TVS Exclusive" class="w-full h-full object-cover" loading="lazy" />
          </div>
          <h3 class="text-lg font-bold mb-1">TVS Exclusive</h3>
          <p class="text-gray-400 text-xs mb-4">Código para o app Downloader</p>
          <div class="bg-black/50 border border-neon/30 rounded-xl py-4 px-6 inline-block">
            <span class="text-4xl sm:text-5xl font-black text-gradient tracking-widest">3589678</span>
          </div>
        </div>
        <!-- UniTV Code -->
        <div class="code-display rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="150">
          <div class="w-12 h-12 rounded-xl overflow-hidden mx-auto mb-4">
            <img src="Logos/UniTV.png" alt="UniTV" class="w-full h-full object-cover" loading="lazy" />
          </div>
          <h3 class="text-lg font-bold mb-1">UniTV</h3>
          <p class="text-gray-400 text-xs mb-4">Código para o app Downloader</p>
          <div class="bg-black/50 border border-neon/30 rounded-xl py-4 px-6 inline-block">
            <span class="text-4xl sm:text-5xl font-black text-gradient tracking-widest">291561</span>
          </div>
        </div>
      </div>

      <!-- Step by Step -->
      <div class="max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">
        <h3 class="text-xl font-bold mb-8 text-center flex items-center justify-center gap-2">
          <i data-lucide="list-ordered" class="w-5 h-5 text-neon"></i>
          Passo a Passo — Instalação via Downloader
        </h3>
        <div class="space-y-4">
          <!-- Step 1 -->
          <div class="flex gap-4 items-start bg-white/[0.03] border border-white/5 rounded-2xl p-5 hover:border-neon/20 transition-all">
            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-deep-purple to-neon flex items-center justify-center shrink-0 text-sm font-extrabold">
              1
            </div>
            <div>
              <h4 class="font-bold text-base mb-1">Instale o app Downloader</h4>
              <p class="text-gray-400 text-sm leading-relaxed">
                Acesse a loja de aplicativos da sua TV Box (como a Amazon Appstore) e busque por <strong class="text-white">"Downloader"</strong>. Instale o aplicativo.
              </p>
            </div>
          </div>
          <!-- Step 2 -->
          <div class="flex gap-4 items-start bg-white/[0.03] border border-white/5 rounded-2xl p-5 hover:border-neon/20 transition-all">
            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-deep-purple to-neon flex items-center justify-center shrink-0 text-sm font-extrabold">
              2
            </div>
            <div>
              <h4 class="font-bold text-base mb-1">Digite o código do app</h4>
              <p class="text-gray-400 text-sm leading-relaxed">
                Abra o Downloader e digite o <strong class="text-white">código correspondente</strong> ao app desejado (veja os códigos acima). O download iniciará automaticamente.
              </p>
            </div>
          </div>
          <!-- Step 3 -->
          <div class="flex gap-4 items-start bg-white/[0.03] border border-white/5 rounded-2xl p-5 hover:border-neon/20 transition-all">
            <div class="w-10 h-10 rounded-full bg-gradient-to-br from-deep-purple to-neon flex items-center justify-center shrink-0 text-sm font-extrabold">
              3
            </div>
            <div>
              <h4 class="font-bold text-base mb-1">Instale e aproveite!</h4>
              <p class="text-gray-400 text-sm leading-relaxed">
                Após o download, instale o app e aproveite todo o conteúdo. Caso precise de recarga, <strong class="text-white">fale conosco pelo WhatsApp</strong>.
              </p>
            </div>
          </div>
        </div>

        <!-- Xcloud Smart TV Method -->
        <div class="mt-10 bg-emerald-500/5 border border-emerald-500/20 rounded-2xl p-6" data-aos="fade-up">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-xl overflow-hidden shrink-0">
              <img src="Logos/Xcloud.png" alt="Xcloud" class="w-full h-full object-cover" loading="lazy" />
            </div>
            <div>
              <h4 class="font-bold text-base">Método Xcloud (Smart TVs)</h4>
              <p class="text-emerald-300/80 text-xs">Samsung, LG e TVs com sistema Roku</p>
            </div>
          </div>
          <p class="text-gray-300 text-sm leading-relaxed mb-3">
            Para o <strong class="text-white">Xcloud</strong>, não é necessário APK. O aplicativo já está disponível na loja da própria TV.
          </p>
          <ul class="space-y-2 text-sm text-gray-300 mb-4">
            <li class="flex items-start gap-2">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5"></i>
              <span>Compatível com TVs <strong class="text-white">Samsung, LG e Roku</strong>.</span>
            </li>
            <li class="flex items-start gap-2">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5"></i>
              <span>As TVs devem ser do ano <strong class="text-white">2022 ou superior</strong>.</span>
            </li>
            <li class="flex items-start gap-2">
              <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5"></i>
              <span>Abra a loja de aplicativos da TV, pesquise por <strong class="text-white">Xcloud</strong>, instale e faça login.</span>
            </li>
          </ul>
          <a href="https://wa.me/5511921421486?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20plano%20Xcloud!" target="_blank" rel="noopener"
            class="btn-whatsapp inline-flex items-center gap-2 text-white text-sm font-semibold px-5 py-2.5 rounded-xl">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.75.75 0 00.917.918l4.462-1.494A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.344 0-4.508-.8-6.226-2.144l-.435-.348-2.636.882.882-2.636-.348-.435A9.956 9.956 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></svg>
            Comprar Recarga Xcloud
          </a>
        </div>

        <!-- Pendrive Alternative -->
        <div class="mt-10 bg-white/[0.03] border border-white/5 rounded-2xl p-6" data-aos="fade-up">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-orange-500 to-amber-500 flex items-center justify-center shrink-0">
              <i data-lucide="usb" class="w-5 h-5 text-white"></i>
            </div>
            <div>
              <h4 class="font-bold text-base">Instalação via Pendrive</h4>
              <p class="text-gray-500 text-xs">Alternativa para quem prefere instalar pelo USB</p>
            </div>
          </div>
          <p class="text-gray-400 text-sm mb-5 leading-relaxed">
            Baixe o arquivo APK no seu computador ou celular, transfira para um pendrive e conecte na sua TV Box para instalar.
          </p>
          <div class="mb-5 bg-amber-500/10 border border-amber-500/25 rounded-xl p-3 flex items-start gap-2">
            <i data-lucide="shield-alert" class="w-4 h-4 text-amber-400 shrink-0 mt-0.5"></i>
            <p class="text-amber-200/80 text-xs leading-relaxed">
              <strong>Aviso:</strong> em alguns dispositivos pode aparecer um alerta dizendo que o arquivo é <strong>nocivo</strong>. Isso pode ser um aviso automático do sistema.
            </p>
          </div>
          <div class="flex flex-wrap gap-3 justify-center sm:justify-start">
            <button onclick="downloadAPK('TVS.apk')" class="inline-flex items-center gap-2 bg-deep-purple/50 hover:bg-deep-purple/70 border border-neon/20 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-all">
              <i data-lucide="download" class="w-4 h-4"></i>
              Baixar APK — TVS Exclusive
            </button>
            <button onclick="downloadAPK('UniTV.apk')" class="inline-flex items-center gap-2 bg-deep-purple/50 hover:bg-deep-purple/70 border border-neon/20 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-all">
              <i data-lucide="download" class="w-4 h-4"></i>
              Baixar APK — UniTV
            </button>
          </div>
        </div>

        <!-- Warning -->
        <div class="mt-6 bg-amber-500/5 border border-amber-500/15 rounded-2xl p-5 flex items-start gap-3" data-aos="fade-up">
          <i data-lucide="alert-circle" class="w-5 h-5 text-amber-400 shrink-0 mt-0.5"></i>
          <p class="text-sm text-amber-200/70 leading-relaxed">
            <strong class="text-amber-300">Importante:</strong> Lembre-se de permitir <strong>"Fontes Desconhecidas"</strong> nas configurações da sua TV Box antes de instalar qualquer APK.
            Vá em <em>Configurações → Segurança → Fontes Desconhecidas → Ativar</em>.
          </p>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ========== XCLOUD SECTION ========== -->
  <section id="xcloud" class="relative py-20 sm:py-28 gradient-bg-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto">
        <div class="grid md:grid-cols-2 gap-10 items-center">
          <!-- Left - Info -->
          <div class="text-center md:text-left" data-aos="fade-right" data-aos-duration="800">
            <div class="inline-flex items-center gap-2 bg-emerald-500/10 border border-emerald-500/20 rounded-full px-4 py-1.5 text-xs font-semibold text-emerald-400 mb-5">
              <i data-lucide="cloud" class="w-3.5 h-3.5"></i>
              SMART TV NATIVO
            </div>
            <h2 class="text-3xl sm:text-4xl font-black tracking-tight mb-4">
              Xcloud: <span class="text-gradient">Sem APK Necessário</span>
            </h2>
            <p class="text-gray-400 leading-relaxed mb-6">
              O <strong class="text-white">Xcloud</strong> é diferente dos outros apps. Ele não utiliza APK e não precisa do Downloader. 
              O aplicativo está disponível <strong class="text-white">nativamente</strong> nas lojas oficiais das Smart TVs compatíveis.
            </p>
            <div class="space-y-3 mb-8">
              <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center">
                  <i data-lucide="monitor" class="w-4 h-4 text-neon"></i>
                </div>
                <span class="text-gray-300 text-sm"><strong class="text-white">Samsung:</strong> Busque "Xcloud" na Samsung Apps</span>
              </div>
              <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center">
                  <i data-lucide="monitor" class="w-4 h-4 text-neon"></i>
                </div>
                <span class="text-gray-300 text-sm"><strong class="text-white">LG:</strong> Busque "Xcloud" na LG Content Store</span>
              </div>
              <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-white/5 flex items-center justify-center">
                  <i data-lucide="monitor" class="w-4 h-4 text-neon"></i>
                </div>
                <span class="text-gray-300 text-sm"><strong class="text-white">Roku:</strong> Busque "Xcloud" no Roku Channel Store</span>
              </div>
            </div>
            <a href="https://wa.me/5511921421486?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20o%20plano%20Xcloud!" target="_blank" rel="noopener"
              class="btn-whatsapp inline-flex items-center justify-center gap-2 text-white font-bold text-sm px-6 py-3.5 rounded-xl w-full md:w-auto">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.75.75 0 00.917.918l4.462-1.494A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.344 0-4.508-.8-6.226-2.144l-.435-.348-2.636.882.882-2.636-.348-.435A9.956 9.956 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/></svg>
              Recarregar Xcloud via WhatsApp
            </a>
          </div>

          <!-- Right - Visual -->
          <div class="relative" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
            <div class="bg-gradient-to-br from-white/[0.05] to-white/[0.02] border border-white/10 rounded-3xl p-8 text-center">
              <div class="w-24 h-24 rounded-3xl overflow-hidden mx-auto mb-6 shadow-lg">
                <img src="Logos/Xcloud.png" alt="Xcloud" class="w-full h-full object-cover" loading="lazy" />
              </div>
              <h3 class="text-xl font-bold mb-3">Instalação Simples</h3>
              <p class="text-gray-400 text-sm leading-relaxed mb-6">
                Abra a loja de apps da sua Smart TV, pesquise por <strong class="text-white">"Xcloud"</strong>, instale e faça login com sua conta.
              </p>
              <div class="flex flex-wrap justify-center gap-3">
                <span class="bg-white/5 border border-white/10 px-4 py-2 rounded-xl text-sm font-medium text-gray-300">Samsung TV</span>
                <span class="bg-white/5 border border-white/10 px-4 py-2 rounded-xl text-sm font-medium text-gray-300">LG TV</span>
                <span class="bg-white/5 border border-white/10 px-4 py-2 rounded-xl text-sm font-medium text-gray-300">Roku</span>
              </div>
            </div>
            <!-- Decorative glow -->
            <div class="absolute -top-10 -right-10 w-40 h-40 bg-emerald-500/10 rounded-full blur-[60px] pointer-events-none"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ========== FAQ SECTION ========== -->
  <section id="faq" class="relative py-20 sm:py-28 gradient-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-14" data-aos="fade-up">
          <div class="inline-flex items-center gap-2 bg-neon/10 border border-neon/20 rounded-full px-4 py-1.5 text-xs font-semibold text-neon mb-4">
            <i data-lucide="help-circle" class="w-3.5 h-3.5"></i>
            DÚVIDAS FREQUENTES
          </div>
          <h2 class="text-3xl sm:text-4xl font-black tracking-tight mb-4">
            Perguntas <span class="text-gradient">Frequentes</span>
          </h2>
          <div class="glow-line mx-auto mt-6"></div>
        </div>

        <!-- FAQ Items -->
        <div class="space-y-3" data-aos="fade-up" data-aos-delay="100">
          <div class="faq-item bg-white/[0.03] border border-white/5 rounded-2xl overflow-hidden">
            <button class="faq-toggle w-full flex items-center justify-between p-5 text-left" onclick="toggleFaq(this)">
              <span class="font-semibold text-sm pr-4">Como funciona a recarga?</span>
              <i data-lucide="chevron-down" class="w-5 h-5 text-neon shrink-0 transition-transform duration-300"></i>
            </button>
            <div class="faq-content hidden px-5 pb-5">
              <p class="text-gray-400 text-sm leading-relaxed">
                Após o pagamento, enviamos os dados de ativação diretamente pelo WhatsApp. A recarga é feita de forma imediata e seu acesso é liberado em poucos minutos.
              </p>
            </div>
          </div>

          <div class="faq-item bg-white/[0.03] border border-white/5 rounded-2xl overflow-hidden">
            <button class="faq-toggle w-full flex items-center justify-between p-5 text-left" onclick="toggleFaq(this)">
              <span class="font-semibold text-sm pr-4">Funciona em qualquer TV Box?</span>
              <i data-lucide="chevron-down" class="w-5 h-5 text-neon shrink-0 transition-transform duration-300"></i>
            </button>
            <div class="faq-content hidden px-5 pb-5">
              <p class="text-gray-400 text-sm leading-relaxed">
                O TVS Exclusive e UniTV funcionam em qualquer TV Box com sistema Android. O Xcloud é exclusivo para Smart TVs Samsung, LG e dispositivos Roku.
              </p>
            </div>
          </div>

          <div class="faq-item bg-white/[0.03] border border-white/5 rounded-2xl overflow-hidden">
            <button class="faq-toggle w-full flex items-center justify-between p-5 text-left" onclick="toggleFaq(this)">
              <span class="font-semibold text-sm pr-4">O serviço trava ou fica fora do ar?</span>
              <i data-lucide="chevron-down" class="w-5 h-5 text-neon shrink-0 transition-transform duration-300"></i>
            </button>
            <div class="faq-content hidden px-5 pb-5">
              <p class="text-gray-400 text-sm leading-relaxed">
                Nossos servidores são de alta qualidade e oferecem estabilidade. Recomendamos uma conexão de internet estável de pelo menos 10 Mbps para a melhor experiência.
              </p>
            </div>
          </div>

          <div class="faq-item bg-white/[0.03] border border-white/5 rounded-2xl overflow-hidden">
            <button class="faq-toggle w-full flex items-center justify-between p-5 text-left" onclick="toggleFaq(this)">
              <span class="font-semibold text-sm pr-4">Como entro em contato para suporte?</span>
              <i data-lucide="chevron-down" class="w-5 h-5 text-neon shrink-0 transition-transform duration-300"></i>
            </button>
            <div class="faq-content hidden px-5 pb-5">
              <p class="text-gray-400 text-sm leading-relaxed">
                Nosso suporte é feito 100% pelo WhatsApp. Clique em qualquer botão verde nesta página ou no ícone flutuante do WhatsApp para falar diretamente com nossa equipe.
              </p>
            </div>
          </div>

          <div class="faq-item bg-white/[0.03] border border-white/5 rounded-2xl overflow-hidden">
            <button class="faq-toggle w-full flex items-center justify-between p-5 text-left" onclick="toggleFaq(this)">
              <span class="font-semibold text-sm pr-4">Posso testar antes de comprar?</span>
              <i data-lucide="chevron-down" class="w-5 h-5 text-neon shrink-0 transition-transform duration-300"></i>
            </button>
            <div class="faq-content hidden px-5 pb-5">
              <p class="text-gray-400 text-sm leading-relaxed">
                Entre em contato pelo WhatsApp e consulte sobre disponibilidade de teste. Temos opções para que você conheça a qualidade do serviço antes de contratar.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="section-divider"></div>

  <!-- ========== FOOTER ========== -->
  <footer class="relative py-12 bg-black/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <!-- Logo -->
        <div class="flex items-center justify-center gap-2.5 mb-4">
          <img src="Logos/Evoland%20LOGO.png" alt="Evoland" class="h-12 w-auto" loading="lazy" />
          <span class="text-2xl font-black tracking-tight text-gradient">Evoland</span>
        </div>
        <p class="text-gray-500 text-sm mb-6 max-w-md mx-auto">
          A melhor experiência em streaming. Todos os seus conteúdos favoritos em um só lugar com qualidade e estabilidade.
        </p>
        <div class="flex items-center justify-center gap-6 text-sm text-gray-600 mb-6">
          <a href="#planos" class="hover:text-neon transition-colors">Planos</a>
          <a href="#instalacao" class="hover:text-neon transition-colors">Instalação</a>
          <a href="#xcloud" class="hover:text-neon transition-colors">Xcloud</a>
          <a href="#faq" class="hover:text-neon transition-colors">FAQ</a>
        </div>
        <div class="section-divider mb-6"></div>
        <p class="text-gray-600 text-xs">
          &copy; 2026 Evoland. Todos os direitos reservados. Este site é apenas uma vitrine de serviços.
        </p>
      </div>
    </div>
    <!-- Extra bottom padding -->
    <div class="h-4"></div>
  </footer>

  <!-- ========== WHATSAPP FLOATING BUTTON ========== -->
  <a href="https://wa.me/5511921421486?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20os%20planos!" target="_blank" rel="noopener"
    class="whatsapp-float" aria-label="Contato WhatsApp" id="whatsappFloat">
    <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
      <path d="M12 0C5.373 0 0 5.373 0 12c0 2.625.846 5.059 2.284 7.034L.789 23.492a.75.75 0 00.917.918l4.462-1.494A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-2.344 0-4.508-.8-6.226-2.144l-.435-.348-2.636.882.882-2.636-.348-.435A9.956 9.956 0 012 12C2 6.486 6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/>
    </svg>
  </a>

  <!-- ========== SCRIPTS ========== -->
  <!-- AOS Init -->
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    // Initialize AOS
    AOS.init({
      once: true,
      duration: 700,
      easing: 'ease-out-cubic',
      offset: 50,
    });

    // Initialize Lucide Icons
    lucide.createIcons();

    // --- NAVBAR & MOBILE MENU ---
    const navbar = document.getElementById('navbar');
    const navbarInner = document.getElementById('navbarInner');
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    
    // Ensure navbar is visible
    if(navbar) {
        navbar.style.transform = 'translateY(0)';
    }

    // Mobile Menu Toggle
    if (menuBtn && mobileMenu) {
      const hamburgerIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"></line><line x1="3" x2="21" y1="12" y2="12"></line><line x1="3" x2="21" y1="18" y2="18"></line></svg>`;
      const closeIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>`;
      
      menuBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        mobileMenu.classList.toggle('hidden');
        const isOpen = !mobileMenu.classList.contains('hidden');

        menuBtn.innerHTML = isOpen ? closeIcon : hamburgerIcon;
      });

      // Close mobile menu on link click
      mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
          mobileMenu.classList.add('hidden');
          menuBtn.innerHTML = hamburgerIcon;
        });
      });
    }

    // Navbar scroll behavior
    window.addEventListener('scroll', () => {
      if (!navbarInner) return;
      const currentScroll = window.pageYOffset;

      // Style on scroll
      if (currentScroll > 50) {
        navbarInner.classList.add('navbar-scrolled');
      } else {
        navbarInner.classList.remove('navbar-scrolled');
      }
    });

    // FAQ toggle
    function toggleFaq(btn) {
      const content = btn.nextElementSibling;
      const icon = btn.querySelector('[data-lucide="chevron-down"]');
      const isOpen = !content.classList.contains('hidden');

      // Close all other open FAQs first
      document.querySelectorAll('.faq-item').forEach(item => {
        const otherContent = item.querySelector('.faq-content');
        const otherIcon = item.querySelector('[data-lucide="chevron-down"]');
        if (otherContent !== content && !otherContent.classList.contains('hidden')) {
          otherContent.classList.add('hidden');
          otherIcon.style.transform = 'rotate(0deg)';
        }
      });
      
      // Then, toggle the current one
      content.classList.toggle('hidden');
      icon.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(180deg)';
    }

    // WhatsApp button visibility on scroll
    const whatsappFloat = document.getElementById('whatsappFloat');
    if (whatsappFloat) {
      const handleWhatsAppButton = () => {
        if (window.pageYOffset > 300) {
          whatsappFloat.style.opacity = '1';
          whatsappFloat.style.transform = 'scale(1)';
          whatsappFloat.style.pointerEvents = 'auto';
        } else {
          whatsappFloat.style.opacity = '0';
          whatsappFloat.style.transform = 'scale(0.8)';
          whatsappFloat.style.pointerEvents = 'none';
        }
      };
      window.addEventListener('scroll', handleWhatsAppButton);
      handleWhatsAppButton(); // Set initial state
    }

    // Download APK files
    function downloadAPK(filename) {
      window.location.href = 'apks/' + filename;
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        
        if (targetId === '#') {
          window.scrollTo({ top: 0, behavior: 'smooth' });
          return;
        }

        const target = document.querySelector(targetId);
        if (target) {
          const navbarHeight = document.getElementById('navbar')?.offsetHeight || 72;
          const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - (navbarHeight + 20);

          window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
          });
        }
      });
    });
  </script>
</body>
</html>