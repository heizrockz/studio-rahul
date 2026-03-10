<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'LOGRAVA STUDIO | Creative Cinematic Storytelling' ?></title>
    <meta name="description" content="Lograva Studio is a boutique creative agency specializing in cinematic storytelling, high-end production, and visual narratives. Based in Los Angeles.">
    <meta name="keywords" content="cinematic storytelling, video production, creative agency, Lograva, film production, commercial video">
    <link rel="canonical" href="https://lograva.com/" />
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://lograva.com/">
    <meta property="og:title" content="LOGRAVA STUDIO | Creative Cinematic Storytelling">
    <meta property="og:description" content="Lograva Studio is a boutique creative agency specializing in cinematic storytelling, high-end production, and visual narratives.">
    <meta property="og:image" content="https://lograva.com/og-image.jpg">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: '#0a0a0a',
                        accent: '#ffffff',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&family=Outfit:wght@700;900&display=swap" rel="stylesheet">
    
    <!-- AOS (Animate on Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <style>
        body {
            background-color: #000;
            color: #fff;
            overflow-x: hidden;
        }
        .hero-title {
            line-height: 0.8;
            letter-spacing: -0.05em;
        }
        .glass-nav {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 5px;
        }
        ::-webkit-scrollbar-track {
            background: #000;
        }
        ::-webkit-scrollbar-thumb {
            background: #333;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* Marquee Styles */
        .marquee {
            display: flex;
            overflow: hidden;
            user-select: none;
            gap: 4rem;
        }
        .marquee__content {
            flex-shrink: 0;
            display: flex;
            justify-content: space-around;
            min-width: 100%;
            gap: 4rem;
            animation: scroll 20s linear infinite;
        }
        @keyframes scroll {
            from { transform: translateX(0); }
            to { transform: translateX(calc(-100% - 4rem)); }
        }
    </style>
    <!-- Lenis Smooth Scroll -->
    <script src="https://unpkg.com/@studio-freight/lenis@1.0.33/dist/lenis.min.js"></script>
</head>
<body class="bg-black text-white selection:bg-white selection:text-black">

    <!-- Mobile Menu Overlay -->
    <div id="mobileMenu" class="fixed inset-0 z-[100] bg-black translate-y-full flex flex-col items-center justify-center p-10 transition-transform duration-700 ease-[cubic-bezier(0.85,0,0.15,1)]">
        <button id="closeMenuBtn" class="absolute top-10 right-10 text-4xl hover:rotate-90 transition-transform duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="flex flex-col items-center space-y-8 text-4xl md:text-6xl font-black uppercase tracking-tighter">
            <a href="#projects" class="menu-link hover:italic transition-all">Projects</a>
            <a href="#about" class="menu-link hover:italic transition-all">About</a>
            <a href="#services" class="menu-link hover:italic transition-all">Capabilities</a>
            <a href="#contact" class="menu-link hover:italic transition-all">Let's Talk</a>
        </div>
        <div class="mt-20 text-[10px] tracking-[0.4em] uppercase text-gray-500">
            hello@lograva.com
        </div>
    </div>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 glass-nav py-6 px-10 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold tracking-tighter hover:opacity-70 transition-opacity">LOGRAVA</a>
        <div class="hidden md:flex space-x-12 text-sm font-medium tracking-widest uppercase">
            <a href="#projects" class="hover:text-gray-400 transition-colors">Projects</a>
            <a href="#about" class="hover:text-gray-400 transition-colors">About</a>
            <a href="#contact" class="hover:text-gray-400 transition-colors">Let's Talk</a>
        </div>
        <button class="text-2xl" id="mobileMenuBtn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </nav>

    <!-- Main Content -->
    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- Footer -->
    <footer class="py-20 px-10 border-t border-white/10 bg-black">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end space-y-10 md:space-y-0">
            <div>
                <h2 class="text-4xl font-bold tracking-tighter mb-4">LOGRAVA STUDIO</h2>
                <p class="text-gray-500 max-w-sm">A creative studio devoted to the art of cinematic storytelling and visual narratives.</p>
            </div>
            <div class="text-right">
                <p class="text-xs tracking-widest uppercase text-gray-400 mb-2">Location</p>
                <p class="text-sm"><?= $settings['location'] ?? 'LOS ANGELES, CALIFORNIA' ?></p>
            </div>
        </div>
        <div class="mt-20 pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between text-[10px] tracking-widest uppercase text-gray-600">
            <p><?= $settings['footer_text'] ?? '© 2024 LOGRAVA STUDIO. ALL RIGHTS RESERVED.' ?></p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="hover:text-white transition-colors">Instagram</a>
                <a href="#" class="hover:text-white transition-colors">Vimeo</a>
                <a href="#" class="hover:text-white transition-colors">Twitter</a>
            </div>
        </div>
    </footer>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            easing: 'ease-out-quart'
        });

        // Lenis Smooth Scroll
        const lenis = new Lenis()
        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }
        requestAnimationFrame(raf)

        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);
        
        // Sync Lenis with ScrollTrigger
        lenis.on('scroll', ScrollTrigger.update)
        gsap.ticker.add((time)=>{
            lenis.raf(time * 1000)
        })
        gsap.ticker.lagSmoothing(0)

        // Mobile Menu Logic
        const mobileMenu = document.getElementById('mobileMenu');
        const openBtn = document.getElementById('mobileMenuBtn');
        const closeBtn = document.getElementById('closeMenuBtn');
        const menuLinks = document.querySelectorAll('.menu-link');

        const toggleMenu = (isOpen) => {
            if (isOpen) {
                mobileMenu.classList.remove('translate-y-full');
                gsap.from('.menu-link', {
                    y: 100,
                    opacity: 0,
                    duration: 0.8,
                    stagger: 0.1,
                    ease: "power4.out",
                    delay: 0.3
                });
            } else {
                mobileMenu.classList.add('translate-y-full');
            }
        };

        openBtn.addEventListener('click', () => toggleMenu(true));
        closeBtn.addEventListener('click', () => toggleMenu(false));
        menuLinks.forEach(link => link.addEventListener('click', () => toggleMenu(false)));
    </script>
</body>
</html>
