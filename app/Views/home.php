<?= $this->extend('layout/main') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden bg-black" id="heroSection">
    <!-- Animated background -->
    <div class="absolute inset-0 z-0 overflow-hidden" id="heroImageWrapper">
        <img src="https://images.unsplash.com/photo-1531366930477-4f85e80ad90a?q=80&w=2070&auto=format&fit=crop" 
             class="w-full h-full object-cover scale-125" 
             id="heroImage"
             alt="Hero background">
    </div>
    
    <div class="relative z-10 text-center px-4 w-full">
        <h1 class="hero-title text-[15vw] md:text-[18vw] font-black uppercase tracking-tighter opacity-0" id="heroTitle">
            LOGRAVA
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
<section id="about" class="py-40 px-6 md:px-20 bg-black overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <p class="text-[10px] tracking-widest uppercase text-gray-500 mb-8" data-aos="fade-up">About Lograva</p>
        <h2 class="text-3xl md:text-6xl font-light leading-tight mb-20 max-w-4xl opacity-20" id="aboutText">
            Lograva Films is a creative studio devoted to the art of cinematic storytelling. With a <span class="italic font-serif">signature style</span> that blends warmth, elegance, and emotion.
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <div class="overflow-hidden rounded-2xl" data-aos="reveal-right">
                <img src="https://images.unsplash.com/photo-1485846234645-a62644f84728?q=80&w=2059&auto=format&fit=crop" 
                     class="w-full aspect-video object-cover grayscale hover:grayscale-0 transition-all duration-700"
                     alt="Production scene">
            </div>
            <div data-aos="fade-left">
                <p class="text-gray-400 text-lg leading-relaxed mb-6">
                    We craft timeless visual narratives that resonate deeply. Our approach is collaborative, pushing boundaries to deliver exceptional results for every project.
                </p>
                <div class="flex space-x-4">
                    <a href="#contact" class="text-xs tracking-widest uppercase border-b border-white py-2 hover:opacity-50 transition-opacity">Work with us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Capabilities Section -->
<section id="services" class="py-40 px-6 md:px-20 bg-black border-t border-white/5 relative">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row gap-20">
            <!-- Sticky Sidebar -->
            <div class="md:w-1/2 md:sticky md:top-40 h-fit">
                <p class="text-[10px] tracking-widest uppercase text-gray-500 mb-8">Capabilities</p>
                <h2 class="text-5xl md:text-8xl font-bold tracking-tighter leading-none" id="servicesTitle">OUR DESIGN <br>PHILOSOPHY</h2>
            </div>
            <!-- Scrolling Content -->
            <div class="md:w-1/2 space-y-32">
                <?php foreach ($services as $index => $service): ?>
                <div class="service-item opacity-0 transform translate-y-20 border-t border-white/10 pt-10">
                    <h3 class="text-2xl font-bold mb-6 uppercase tracking-tight"><?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>. <?= $service['title'] ?></h3>
                    <p class="text-gray-400 text-lg leading-relaxed"><?= $service['description'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Logo Ticker / Marquee -->
<section class="py-20 border-y border-white/10 bg-black overflow-hidden">
    <div class="marquee text-4xl md:text-7xl font-black tracking-tighter uppercase opacity-30">
        <div class="marquee__content">
            <span>Lograva</span>
            <span>Cinematic</span>
            <span>Storytelling</span>
            <span>Lograva</span>
            <span>Visuals</span>
            <span>Creative</span>
        </div>
        <!-- Duplicate for seamless loop -->
        <div class="marquee__content" aria-hidden="true">
            <span>Lograva</span>
            <span>Cinematic</span>
            <span>Storytelling</span>
            <span>Lograva</span>
            <span>Visuals</span>
            <span>Creative</span>
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
        <div class="flex flex-wrap gap-6 text-[10px] tracking-widest uppercase text-gray-400 mt-6 md:mt-0" id="filterContainer">
            <button class="filter-btn text-white transition-colors active" data-filter="all">All</button>
            <button class="filter-btn hover:text-white transition-colors" data-filter="FILMS">Films</button>
            <button class="filter-btn hover:text-white transition-colors" data-filter="COMMERCIAL">Commercial</button>
            <button class="filter-btn hover:text-white transition-colors" data-filter="STILLS">Stills</button>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-1" id="projectGrid">
        <?php foreach ($projects as $project): ?>
            <div class="group relative overflow-hidden aspect-[4/5] md:aspect-square bg-gray-900 project-item" data-aos="fade-up" data-category="<?= strtoupper($project['category']) ?>">
                <img src="<?= $project['thumbnail'] ?>" 
                     alt="<?= $project['title'] ?>" 
                     class="w-full h-full object-cover transition-all duration-1000 group-hover:scale-110 group-hover:opacity-0">
                
                <?php if (!empty($project['video_url'])): ?>
                <video class="absolute inset-0 w-full h-full object-cover opacity-0 group-hover:opacity-100 transition-opacity duration-700" 
                       muted loop playsinline>
                    <source src="<?= $project['video_url'] ?>" type="video/mp4">
                </video>
                <?php endif; ?>

                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-all duration-500 flex flex-col justify-end p-10 translate-y-10 group-hover:translate-y-0">
                    <p class="text-[10px] tracking-widest uppercase mb-2 text-white/70"><?= $project['category'] ?></p>
                    <h3 class="text-3xl font-bold tracking-tighter"><?= $project['title'] ?></h3>
                    <div class="mt-6 opacity-0 group-hover:opacity-100 transition-opacity delay-200">
                        <span class="text-[10px] tracking-widest uppercase px-4 py-2 border border-white rounded-full">Explore</span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-40 px-6 md:px-20 bg-[#0a0a0a]">
    <div class="max-w-7xl mx-auto">
        <p class="text-[10px] tracking-widest uppercase text-gray-500 mb-12" data-aos="fade-up">Words from Clients</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <?php foreach ($testimonials as $testimonial): ?>
            <div class="bg-black/50 p-12 border border-white/5 rounded-2xl" data-aos="fade-up">
                <p class="text-2xl font-light italic leading-relaxed mb-8 text-gray-300">"<?= $testimonial['content'] ?>"</p>
                <div class="flex items-center space-x-4">
                    <img src="<?= $testimonial['image'] ?>" class="w-12 h-12 rounded-full object-cover grayscale" alt="<?= $testimonial['client_name'] ?>">
                    <div>
                        <h4 class="font-bold tracking-tight"><?= $testimonial['client_name'] ?></h4>
                        <p class="text-[10px] tracking-widest uppercase text-gray-600">Verified Client</p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Contact / Let's Talk Section -->
<section id="contact" class="py-60 px-6 md:px-20 bg-white text-black text-center">
    <div class="max-w-7xl mx-auto">
        <p class="text-[10px] tracking-[0.4em] uppercase font-bold mb-12">Next Step</p>
        <h2 class="text-[12vw] font-black tracking-tighter leading-none mb-20">LET'S TALK</h2>
        <a href="mailto:hello@lograva.com" class="text-xl md:text-2xl border-b-2 border-black pb-2 hover:opacity-50 transition-all font-medium">hello@lograva.com</a>
    </div>
</section>

<script>
    window.addEventListener('load', () => {
        gsap.registerPlugin(ScrollTrigger);

        // Hero Entrance Animation
        const tl = gsap.timeline();
        
        tl.to("#heroTitle", { opacity: 1, duration: 2, ease: "expo.out" })
          .from("#heroTitle", { y: 200, duration: 2, ease: "expo.out" }, "-=2")
          .to("#heroMeta", { opacity: 1, duration: 1.5, ease: "power4.out" }, "-=1")
          .to("#heroScroll", { opacity: 1, duration: 1.5, ease: "power4.out" }, "-=1");

        // Advanced Hero Scale-Down on Scroll
        gsap.to("#heroImage", {
            scale: 1,
            opacity: 0.1,
            ease: "none",
            scrollTrigger: {
                trigger: "#heroSection",
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        });

        // Sticky Title Parallax
        gsap.to("#heroTitle", {
            y: 300,
            opacity: 0,
            ease: "none",
            scrollTrigger: {
                trigger: "#heroSection",
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        });

        // About Text Scrub Reveal
        gsap.to("#aboutText", {
            opacity: 1,
            y: 0,
            duration: 1,
            scrollTrigger: {
                trigger: "#about",
                start: "top 80%",
                end: "top 20%",
                scrub: true
            }
        });

        // Sticky Capabilities Header Parallax
        gsap.from("#servicesTitle", {
            opacity: 0,
            x: -50,
            scrollTrigger: {
                trigger: "#services",
                start: "top 80%",
                end: "top 20%",
                scrub: true
            }
        });

        // Services Item Stagger Reveal
        const serviceItems = document.querySelectorAll('.service-item');
        serviceItems.forEach((item) => {
            gsap.to(item, {
                opacity: 1,
                y: 0,
                duration: 1.2,
                ease: "power4.out",
                scrollTrigger: {
                    trigger: item,
                    start: "top 90%",
                    toggleActions: "play none none reverse"
                }
            });
        });

        // Project Grid Reveal with Scaling
        const projectItems = document.querySelectorAll('.project-item');
        projectItems.forEach((item) => {
            gsap.from(item, {
                opacity: 0.5,
                scale: 0.9,
                y: 100,
                duration: 1.5,
                ease: "expo.out",
                scrollTrigger: {
                    trigger: item,
                    start: "top 95%",
                    toggleActions: "play none none reverse"
                }
            });
        });

        // Interactive Filtering Logic
        const filterBtns = document.querySelectorAll('.filter-btn');
        const projects = document.querySelectorAll('.project-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active state
                filterBtns.forEach(b => {
                    b.classList.remove('text-white', 'active');
                    b.classList.add('hover:text-white');
                });
                btn.classList.add('text-white', 'active');
                btn.classList.remove('hover:text-white');

                const filterValue = btn.getAttribute('data-filter');

                gsap.to(projects, {
                    duration: 0.4,
                    opacity: 0,
                    scale: 0.95,
                    stagger: 0.05,
                    ease: "power2.in",
                    onComplete: () => {
                        projects.forEach(project => {
                            if (filterValue === 'all' || project.getAttribute('data-category') === filterValue) {
                                project.classList.remove('hidden');
                            } else {
                                project.classList.add('hidden');
                            }
                        });

                        gsap.to('.project-item:not(.hidden)', {
                            duration: 0.6,
                            opacity: 1,
                            scale: 1,
                            stagger: 0.1,
                            ease: "power4.out"
                        });
                    }
                });
            });
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
