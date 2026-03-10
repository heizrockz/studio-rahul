<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden bg-black">
    <!-- Animated background placeholder -->
    <div class="absolute inset-0 z-0 opacity-40">
        <img src="https://images.unsplash.com/photo-1492691523567-30730029ad0a?q=80&w=2070&auto=format&fit=crop" 
             class="w-full h-full object-cover" 
             id="heroImage"
             alt="Hero background">
    </div>
    
    <div class="relative z-10 text-center px-4 w-full">
        <h1 class="hero-title text-[15vw] md:text-[18vw] font-black uppercase tracking-tighter opacity-0" id="heroTitle">
            AMBER
        </h1>
        <div class="flex flex-col md:flex-row justify-between items-center mt-8 md:mt-2 px-10 w-full max-w-7xl mx-auto text-[10px] tracking-[0.3em] uppercase text-gray-400 opacity-0" id="heroMeta">
            <p>Creative Studio</p>
            <p id="digitalClock">00:00:00</p>
            <p>Based in LA</p>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center opacity-0" id="heroScroll">
        <p class="text-[8px] tracking-[0.4em] uppercase mb-4">Scroll</p>
        <div class="w-[1px] h-12 bg-gradient-to-b from-white to-transparent"></div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-40 px-6 md:px-20 bg-black">
    <div class="max-w-7xl mx-auto">
        <p class="text-[10px] tracking-widest uppercase text-gray-500 mb-8" data-aos="fade-up">About Amber</p>
        <h2 class="text-3xl md:text-6xl font-light leading-tight mb-20 max-w-4xl" data-aos="fade-up" data-aos-delay="100">
            Amber Films is a creative studio devoted to the art of cinematic storytelling. With a <span class="italic font-serif">signature style</span> that blends warmth, elegance, and emotion.
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div class="overflow-hidden" data-aos="reveal-right">
                <img src="https://images.unsplash.com/photo-1485846234645-a62644f84728?q=80&w=2059&auto=format&fit=crop" 
                     class="w-full aspect-video object-cover grayscale hover:grayscale-0 transition-all duration-700"
                     alt="Production scene">
            </div>
            <div data-aos="fade-left">
                <p class="text-gray-400 text-lg leading-relaxed mb-6">
                    We craft timeless visual narratives that resonate deeply. Our approach is collaborative, pushing boundaries to deliver exceptional results for every project.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-xs tracking-widest uppercase border-b border-white py-2 hover:opacity-50 transition-opacity">Read Story</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-40 bg-[#0a0a0a]">
    <div class="px-6 md:px-20 mb-20 flex flex-col md:flex-row justify-between items-end">
        <div>
            <p class="text-[10px] tracking-widest uppercase text-gray-500 mb-4">Featured Work</p>
            <h2 class="text-4xl md:text-6xl font-bold tracking-tighter">PROJECTS</h2>
        </div>
        <div class="flex space-x-6 text-[10px] tracking-widest uppercase text-gray-400 mt-6 md:mt-0">
            <a href="#" class="text-white">All</a>
            <a href="#" class="hover:text-white transition-colors">Films</a>
            <a href="#" class="hover:text-white transition-colors">Commercial</a>
            <a href="#" class="hover:text-white transition-colors">Stills</a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-1">
        <?php foreach ($projects as $project): ?>
            <div class="group relative overflow-hidden aspect-[4/5] md:aspect-square bg-gray-900" data-aos="fade-up">
                <img src="<?= $project['thumbnail'] ?>" 
                     alt="<?= $project['title'] ?>" 
                     class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-10">
                    <p class="text-[10px] tracking-widest uppercase mb-2"><?= $project['category'] ?></p>
                    <h3 class="text-3xl font-bold tracking-tighter"><?= $project['title'] ?></h3>
                    <div class="mt-6">
                        <span class="text-[10px] tracking-widest uppercase px-4 py-2 border border-white rounded-full">View Project</span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<script>
    window.addEventListener('load', () => {
        // Hero Entrance Animation
        const tl = gsap.timeline();
        
        tl.to("#heroTitle", { opacity: 1, duration: 1.5, ease: "power4.out" })
          .from("#heroTitle", { y: 100, duration: 1.5, ease: "power4.out" }, "-=1.5")
          .to("#heroMeta", { opacity: 1, duration: 1, ease: "power4.out" }, "-=0.5")
          .to("#heroScroll", { opacity: 1, duration: 1, ease: "power4.out" }, "-=0.5");

        // Parallax Hero Image
        gsap.to("#heroImage", {
            yPercent: 30,
            ease: "none",
            scrollTrigger: {
                trigger: "section",
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        });

        // Digital Clock
        function updateClock() {
            const now = new Date();
            const h = String(now.getHours()).padStart(2, '0');
            const m = String(now.getMinutes()).padStart(2, '0');
            const s = String(now.getSeconds()).padStart(2, '0');
            const clockEl = document.getElementById('digitalClock');
            if (clockEl) clockEl.textContent = `${h}:${m}:${s} PST`;
        }
        setInterval(updateClock, 1000);
        updateClock();
    });
</script>

<?= $this->endSection() ?>
