<?php
/**
 * Template Name: Home Template
 *
 * Homepage Real Painting Corp
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="rpc-paint-home bg-[#f6f5f0] text-[#192F44] overflow-hidden">

  <?php
    $hero_image = 'http://real-painting-corp.local/wp-content/uploads/2026/03/flow-clark-ioOlenqfMqA-unsplash-scaled.jpg';

    // Temporary fallback set for gallery until you replace with 6–8 real project photos / before-after pairs.
    $gallery_images = [
      $hero_image,
      $hero_image,
      $hero_image,
      $hero_image,
      $hero_image,
      $hero_image,
    ];
  ?>

  <!-- HERO FULL WIDTH -->
  <section class="relative h-[90vh] min-h-[640px] w-full overflow-hidden">
    <img
      src="<?php echo esc_url($hero_image); ?>"
      alt="Premium residential painting project"
      class="rpc-hero-image absolute inset-0 h-full w-full object-cover"
    >

    <div class="absolute inset-0 bg-[#192F44]/70"></div>

    <div
      class="absolute inset-0 opacity-20 mix-blend-overlay"
      style="background-image:url('https://www.transparenttextures.com/patterns/brushed-alum.png')">
    </div>

    <div class="relative z-10 mx-auto flex h-full max-w-6xl flex-col items-center justify-center px-4 text-center">
      <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.28em] text-[#CFE0DA]">
        Real Painting Corp
      </p>

      <p class="ajs-reveal-up mt-4 text-sm font-black uppercase tracking-[0.24em] text-white/82 md:text-base">
        Be Real. Build Real.
      </p>

      <h1 class="ajs-reveal-up mt-6 text-4xl font-extrabold leading-[1.05] tracking-[-0.04em] text-white md:text-6xl">
        When We Enter Your Home,<br class="hidden md:block">
        the Stress Leaves.
      </h1>

      <p class="ajs-reveal-up mt-6 max-w-2xl text-base leading-7 text-white/85 md:text-lg">
        Premium painting and remodeling across Southern California — delivered with clean execution,
        schedule discipline, and the certainty your home deserves.
      </p>

      <div class="ajs-reveal-up mt-10 flex flex-col gap-4 sm:flex-row">
        <a href="/contact-us"
           class="rpc-paint-btn rpc-paint-btn-green inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          Request a Free Estimate
        </a>

        <a href="#services"
           class="rpc-paint-btn rpc-paint-btn-outline inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          Explore Our Services
        </a>
      </div>
    </div>

    <div class="absolute bottom-0 left-0 h-32 w-full bg-gradient-to-t from-white to-transparent"></div>
  </section>

  <!-- TRUST BAR -->
  <section class="border-b border-[#192F44]/10 bg-white">
    <div class="mx-auto max-w-7xl px-4 py-5">
      <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
        <div class="ajs-reveal-up flex items-start gap-3">
          <span class="mt-1 block h-3 w-3 bg-[#192F44]"></span>
          <p class="text-sm font-extrabold leading-6 text-[#192F44]">C-33 Licensed · Insured · Bonded</p>
        </div>

        <div class="ajs-reveal-up flex items-start gap-3">
          <span class="mt-1 block h-3 w-3 bg-[#236476]"></span>
          <p class="text-sm font-extrabold leading-6 text-[#192F44]">40+ Years Combined Experience</p>
        </div>

        <div class="ajs-reveal-up flex items-start gap-3">
          <span class="mt-1 block h-3 w-3 bg-[#7DAD3F]"></span>
          <p class="text-sm font-extrabold leading-6 text-[#192F44]">24–48 Hour Response Time</p>
        </div>

        <div class="ajs-reveal-up flex items-start gap-3">
          <span class="mt-1 block h-3 w-3 bg-[#4A6C2F]"></span>
          <p class="text-sm font-extrabold leading-6 text-[#192F44]">Serving OC · LA · Riverside · San Bernardino</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHO WE ARE -->
  <section class="relative bg-[#f6f5f0] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-12 lg:grid-cols-[0.88fr_1.12fr] lg:items-start">
        <div class="ajs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#4A6C2F]">
            Who We Are
          </p>

          <h2 class="mt-5 max-w-[10ch] text-3xl font-black leading-[0.94] tracking-[-0.05em] text-[#192F44] md:text-5xl">
            One Team. Every Detail. Zero Surprises.
          </h2>

          <div class="mt-7 h-2 w-32 bg-[linear-gradient(90deg,#192F44_0%,#236476_35%,#7DAD3F_100%)]"></div>
        </div>

        <div class="ajs-reveal-right">
          <div class="space-y-5 text-base leading-8 text-[#192F44]/80">
            <p>
              Real Painting Corp is a full-service painting and remodeling company based in Southern California. We handle everything from interior and exterior painting to complete kitchen and bathroom transformations — with the structure, licensing, and accountability that most contractors simply don’t offer.
            </p>

            <p>
              We exist to eliminate the stress and uncertainty homeowners feel when hiring someone to work inside their home. That means protecting your space before we touch a wall. It means showing up when we say and finishing when we promise. And it means delivering a result you can see and feel — one that makes you say, “These are different.”
            </p>

            <p>
              Our clients are homeowners across Orange County, Los Angeles, Riverside, and San Bernardino who value their property and refuse to gamble on the wrong contractor.
            </p>

            <div class="pt-2">
              <a href="/about-us"
                 class="inline-flex items-center gap-2 border-b-2 border-[#236476] pb-1 text-sm font-black uppercase tracking-[0.12em] text-[#236476] transition hover:gap-3">
                Learn About Us
                <span>→</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES OVERVIEW -->
  <section id="services" class="relative overflow-hidden border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="absolute right-0 top-0 h-full w-[28%] bg-[#CFE0DA]/30"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-up max-w-4xl">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          Services Overview
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Everything Your Home Needs. One Team You Can Trust.
        </h2>
      </div>

      <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
        <?php
        $services = [
          ['title' => 'Interior Painting', 'copy' => 'Walls, ceilings, trim, and accent work — with full surface preparation, furniture protection, and daily cleanup as standard. The finish your home deserves.', 'link' => '/services/interior-painting', 'tone' => '#192F44', 'cta' => 'Explore Interior Painting →'],
          ['title' => 'Exterior Painting', 'copy' => 'Complete exterior coatings for stucco, siding, and trim — engineered for Southern California’s sun, wind, and climate. Protection that performs.', 'link' => '/services/exterior-painting', 'tone' => '#236476', 'cta' => 'Explore Exterior Painting →'],
          ['title' => 'Kitchen Remodeling', 'copy' => 'Full kitchen transformations — layout, cabinets, countertops, tile, and finishing. The project that changes how your family lives.', 'link' => '/services/kitchen-remodeling', 'tone' => '#4A6C2F', 'cta' => 'Explore Kitchen Remodeling →'],
          ['title' => 'Bathroom Remodeling', 'copy' => 'Shower conversions, tile, vanities, and modern upgrades that add comfort, style, and lasting value to your home.', 'link' => '/services/bathroom-remodeling', 'tone' => '#7DAD3F', 'cta' => 'Explore Bathroom Remodeling →'],
          ['title' => 'Cabinet Refinishing & Staining', 'copy' => 'Refresh the look of your kitchen without the cost of full replacement. Professional refinishing that transforms the space.', 'link' => '/services/cabinet-refinishing-staining', 'tone' => '#192F44', 'cta' => 'Explore Cabinet Refinishing →'],
          ['title' => 'Surface Repair & Preparation', 'copy' => 'Drywall, stucco, texture, acoustic ceiling removal, baseboards, doors, and windows — the foundation behind every lasting finish.', 'link' => '/services/surface-repair-preparation', 'tone' => '#236476', 'cta' => 'Explore Surface Repair →'],
          ['title' => 'Pressure Washing', 'copy' => 'Deep cleaning for driveways, patios, walkways, and exterior surfaces — restoring your property’s appearance and preparing it for what’s next.', 'link' => '/services/pressure-washing', 'tone' => '#7DAD3F', 'cta' => 'Explore Pressure Washing →'],
          ['title' => 'Commercial Painting', 'copy' => 'Professional results for offices, retail, and commercial properties — executed on schedule with minimal disruption to your operations.', 'link' => '/services/commercial-painting', 'tone' => '#4A6C2F', 'cta' => 'Explore Commercial Painting →'],
        ];

        foreach ($services as $service) : ?>
          <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#192F44]/10 bg-[#fdfcf8] p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <div class="absolute inset-x-0 top-0 h-2 transition-all duration-500 group-hover:h-3" style="background: <?php echo esc_attr($service['tone']); ?>;"></div>

            <div class="mb-6 mt-2 flex gap-2">
              <span class="h-8 w-8 border border-[#192F44]/10 transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110" style="background: <?php echo esc_attr($service['tone']); ?>;"></span>
              <span class="h-8 w-8 border border-[#192F44]/10 bg-[#CFE0DA] transition-transform duration-500 group-hover:-rotate-6 group-hover:scale-110"></span>
            </div>

            <h3 class="text-xl font-black tracking-[-0.03em] text-[#192F44]">
              <?php echo esc_html($service['title']); ?>
            </h3>

            <p class="mt-4 text-[15px] leading-8 text-[#192F44]/76">
              <?php echo esc_html($service['copy']); ?>
            </p>

            <a href="<?php echo esc_url($service['link']); ?>"
               class="mt-6 inline-flex items-center gap-2 text-sm font-black uppercase tracking-[0.12em] text-[#236476] transition hover:gap-3">
              <?php echo esc_html($service['cta']); ?>
            </a>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- WHY REAL PAINTING -->
  <section class="relative overflow-hidden bg-[#192F44] py-20 text-white lg:py-24">
    <div class="absolute inset-0 opacity-[0.07] [background-image:linear-gradient(135deg,rgba(255,255,255,0.35)_25%,transparent_25%,transparent_50%,rgba(255,255,255,0.35)_50%,rgba(255,255,255,0.35)_75%,transparent_75%,transparent)] [background-size:20px_20px]"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.92fr_1.08fr] lg:items-start">
        <div class="ajs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#CFE0DA]">
            Why Real Painting
          </p>

          <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
            In an Industry Full of Broken Promises, We Deliver Certainty.
          </h2>

          <p class="mt-6 max-w-md text-base leading-8 text-white/76">
            The most common complaints homeowners have about contractors are irresponsibility, lack of cleanliness, and broken timelines. We built our entire company around solving those three problems.
          </p>
        </div>

        <div class="grid gap-5 md:grid-cols-2">
          <article class="ajs-reveal-up border border-white/12 bg-white/6 p-6 backdrop-blur-sm">
            <h3 class="text-xl font-black">Clean Site Protocol</h3>
            <p class="mt-4 text-[15px] leading-8 text-white/80">
              We protect every surface before we start — floors, furniture, fixtures. When we leave each day, your home is cleaner than when we arrived. This isn’t a promise we make at the estimate. It’s what you’ll see on day one.
            </p>
          </article>

          <article class="ajs-reveal-up border border-white/12 bg-white/6 p-6 backdrop-blur-sm">
            <h3 class="text-xl font-black">Schedule Discipline</h3>
            <p class="mt-4 text-[15px] leading-8 text-white/80">
              We arrive when we say. We finish when we promise. Your time matters to us as much as the final result. Every project has a defined timeline, and we hold to it.
            </p>
          </article>

          <article class="ajs-reveal-up border border-white/12 bg-white/6 p-6 backdrop-blur-sm">
            <h3 class="text-xl font-black">Aesthetic Certainty</h3>
            <p class="mt-4 text-[15px] leading-8 text-white/80">
              You’ll know exactly what the result will look like before we begin. Our experience in color, finish, and design means no guesswork — just a result that makes you proud of your home.
            </p>
          </article>

          <article class="ajs-reveal-up border border-[#7DAD3F]/30 bg-[linear-gradient(135deg,rgba(125,173,63,0.18),rgba(74,108,47,0.36))] p-6">
            <h3 class="text-xl font-black">Licensed, Insured & Bonded</h3>
            <p class="mt-4 text-[15px] leading-8 text-white/86">
              C-33 licensed, General Liability, Workers’ Compensation, and bonded. This eliminates over 60% of informal competitors who operate without protection. Your home and your investment are fully covered.
            </p>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW WE WORK -->
  <section class="bg-[#f6f5f0] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-up mx-auto max-w-3xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#4A6C2F]">
          How We Work
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          A Clear Process. No Guesswork. No Surprises.
        </h2>
      </div>

      <div class="mt-14 grid gap-6 xl:grid-cols-4">
        <?php
        $steps = [
          ['num' => '01', 'title' => 'Free Consultation', 'copy' => 'We visit your property, listen to your goals, and assess the scope before recommending anything. No pressure, no obligation — just an honest conversation about what your home needs.', 'bg' => '#CFE0DA'],
          ['num' => '02', 'title' => 'Detailed Estimate', 'copy' => 'You receive a clear, written proposal with defined scope, timeline, and pricing. No vague numbers. No hidden costs. You know exactly what you’re getting before we touch a wall.', 'bg' => '#ffffff'],
          ['num' => '03', 'title' => 'Expert Execution', 'copy' => 'Our crew arrives on schedule, protects your home, and delivers premium workmanship with daily cleanup and progress updates. You’ll always know what happened today and what’s happening tomorrow.', 'bg' => '#ffffff'],
          ['num' => '04', 'title' => 'Final Walk-Through', 'copy' => 'We don’t consider a project complete until you do. Every job ends with a walk-through, your full approval, and the confidence that you made the right call.', 'bg' => '#CFE0DA'],
        ];

        foreach ($steps as $step) : ?>
          <article class="ajs-reveal-stagger relative overflow-hidden border border-[#192F44]/10 p-6 shadow-[0_16px_36px_rgba(25,47,68,0.06)]" style="background: <?php echo esc_attr($step['bg']); ?>;">
            <div class="absolute right-0 top-0 h-16 w-16 translate-x-[25%] -translate-y-[25%] rotate-12 bg-[#7DAD3F]/16"></div>

            <span class="inline-flex bg-[#192F44] px-4 py-2 text-[11px] font-black uppercase tracking-[0.18em] text-white">
              <?php echo esc_html($step['num']); ?>
            </span>

            <h3 class="mt-5 text-xl font-black tracking-[-0.03em] text-[#192F44]">
              <?php echo esc_html($step['title']); ?>
            </h3>

            <p class="mt-4 text-[15px] leading-8 text-[#192F44]/76">
              <?php echo esc_html($step['copy']); ?>
            </p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-left">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          Testimonials
        </p>

        <h2 class="mt-5 max-w-[10ch] text-3xl font-black leading-[0.94] tracking-[-0.05em] text-[#192F44] md:text-5xl">
          What Our Clients Say
        </h2>
      </div>

      <div class="mt-14 grid gap-6 xl:grid-cols-[1.1fr_0.9fr]">
        <article class="ajs-reveal-up rpc-testimonial-featured">
          <div class="rpc-testimonial-featured__inner">
            <div class="rpc-testimonial-featured__top">
              <span class="rpc-testimonial-bar bg-[#192F44]"></span>
              <span class="rpc-testimonial-kicker text-[#236476]">Cleanliness</span>
            </div>

            <div class="rpc-testimonial-quote-mark text-[#192F44]/12">“</div>

            <p class="rpc-testimonial-featured__copy">
              They protected every inch of our home. When they finished, the house was spotless — not just painted, but cleaner than before they started.
            </p>

            <div class="rpc-testimonial-featured__meta">
              <p class="rpc-testimonial-name">Homeowner, Mission Viejo, CA</p>
            </div>
          </div>
        </article>

        <div class="grid gap-6">
          <article class="ajs-reveal-stagger rpc-testimonial-side rpc-testimonial-side--dark">
            <div class="rpc-testimonial-side__top">
              <span class="rpc-testimonial-bar bg-[#CFE0DA]"></span>
              <span class="rpc-testimonial-kicker text-[#CFE0DA]">Schedule Discipline</span>
            </div>

            <p class="rpc-testimonial-side__copy text-white/84">
              They showed up when they said they would and finished on the exact day they promised. I’ve never had that experience with a contractor before.
            </p>

            <div class="rpc-testimonial-side__meta">
              <p class="rpc-testimonial-name text-white">Homeowner, Irvine, CA</p>
            </div>
          </article>

          <article class="ajs-reveal-stagger rpc-testimonial-side rpc-testimonial-side--green">
            <div class="rpc-testimonial-side__top">
              <span class="rpc-testimonial-bar bg-[#192F44]"></span>
              <span class="rpc-testimonial-kicker text-white/84">Trust-to-Remodel Path</span>
            </div>

            <p class="rpc-testimonial-side__copy text-white/88">
              We hired them for a repaint and trusted them enough to do our kitchen remodel. Best decision we’ve made for our home.
            </p>

            <div class="rpc-testimonial-side__meta">
              <p class="rpc-testimonial-name text-white">Homeowner, Corona, CA</p>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- GALLERY TEASER -->
  <section class="bg-[#f6f5f0] py-20">
    <div class="mx-auto max-w-7xl px-4">
      <div class="flex flex-col gap-4 md:flex-row md:items-end md:justify-between">
        <div class="ajs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#4A6C2F]">
            Real Projects
          </p>

          <h2 class="mt-3 text-3xl font-black tracking-[-0.04em] text-[#192F44] md:text-5xl">
            Real Projects. Real Results.
          </h2>
        </div>

        <p class="ajs-reveal-right max-w-xl text-sm leading-7 text-[#192F44]/70 md:text-right">
          Every project tells a story of clean execution, attention to detail, and a homeowner who felt certain from start to finish. See the work for yourself.
        </p>
      </div>

      <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($gallery_images as $index => $image) : ?>
          <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#192F44]/10 bg-white shadow-sm">
            <div class="relative h-[240px] overflow-hidden">
              <img
                src="<?php echo esc_url($image); ?>"
                class="h-full w-full object-cover transition duration-700 group-hover:scale-105"
                alt="Project <?php echo esc_attr($index + 1); ?>"
              >

              <div class="absolute inset-y-0 left-1/2 w-[2px] bg-white/70 backdrop-blur-sm"></div>

              <span class="absolute left-4 top-4 bg-[#192F44] px-3 py-1 text-[10px] font-black uppercase tracking-[0.14em] text-white">
                Before
              </span>

              <span class="absolute right-4 bottom-4 bg-[#7DAD3F] px-3 py-1 text-[10px] font-black uppercase tracking-[0.14em] text-white">
                After
              </span>

              <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(25,47,68,0.08)_0%,rgba(25,47,68,0.18)_100%)]"></div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="ajs-reveal-up mt-12 text-center">
        <a href="/gallery"
           class="rpc-paint-btn rpc-paint-btn-dark inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          View Our Work →
        </a>
      </div>
    </div>
  </section>

  <!-- SERVICE AREAS -->
  <section class="border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-up mx-auto max-w-4xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          Service Areas
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Serving Southern California’s Most Valued Communities
        </h2>
      </div>

      <div class="mt-12 grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
        <?php
        $areas = [
          ['title' => 'Orange County', 'link' => '/locations/orange-county', 'swatch' => '#192F44'],
          ['title' => 'Los Angeles County', 'link' => '/locations/los-angeles-county', 'swatch' => '#236476'],
          ['title' => 'Riverside County', 'link' => '/locations/riverside-county', 'swatch' => '#7DAD3F'],
          ['title' => 'San Bernardino County', 'link' => '/locations/san-bernardino-county', 'swatch' => '#4A6C2F'],
        ];

        foreach ($areas as $area) : ?>
          <a href="<?php echo esc_url($area['link']); ?>"
             class="ajs-reveal-stagger group border border-[#192F44]/10 bg-[#fdfcf8] p-6 transition hover:-translate-y-1 hover:shadow-[0_16px_36px_rgba(25,47,68,0.10)]">
            <div class="mb-5 h-4 w-20 transition-all duration-500 group-hover:w-28" style="background: <?php echo esc_attr($area['swatch']); ?>;"></div>
            <h3 class="text-xl font-black tracking-[-0.03em] text-[#192F44]">
              <?php echo esc_html($area['title']); ?>
            </h3>
            <span class="mt-5 inline-flex items-center gap-2 text-sm font-black uppercase tracking-[0.12em] text-[#236476] transition group-hover:gap-3">
              Explore
              <span>→</span>
            </span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

<!-- FINAL CTA -->
<section class="relative isolate overflow-hidden bg-[#f6f5f0] py-20 text-[#192F44] lg:py-24">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(35,100,118,0.08),transparent_28%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(125,173,63,0.12),transparent_30%)]"></div>

  <div class="relative mx-auto max-w-5xl px-4 text-center">
    <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
      Final CTA
    </p>

    <h2 class="ajs-reveal-up mt-5 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
      Ready to See What Real Looks Like?
    </h2>

    <p class="ajs-reveal-up mx-auto mt-6 max-w-3xl text-base leading-8 text-[#192F44]/80">
      Whether you need a fresh interior, a complete exterior transformation, or a kitchen and bathroom that changes how you live — we deliver the certainty your home deserves.
    </p>

    <div class="ajs-reveal-up mt-8 flex flex-wrap items-center justify-center gap-3">
      <a href="/contact-us"
         class="rpc-paint-btn rpc-paint-btn-green inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
        Request a Free Estimate
      </a>

      <a href="tel:+19092326602"
         class="rpc-paint-btn rpc-paint-btn-dark inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
        (909) 232-6602
      </a>
    </div>

    <div class="rpc-paint-swipe rpc-paint-swipe-light mx-auto mt-10 max-w-2xl"></div>
  </div>
</section>
</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap');

  .rpc-paint-home {
    font-family: "Manrope", "Segoe UI", Arial, sans-serif;
  }

  .rpc-paint-home h1,
  .rpc-paint-home h2,
  .rpc-paint-home h3 {
    font-family: "Space Grotesk", "Segoe UI", Arial, sans-serif;
  }

  .rpc-hero-image {
    animation: rpcHeroZoom 14s ease-out forwards;
    transform: scale(1.06);
  }

  .rpc-paint-swipe {
    height: 14px;
    width: 100%;
    background: linear-gradient(90deg, #192F44 0%, #236476 28%, #CFE0DA 55%, #7DAD3F 78%, #4A6C2F 100%);
    clip-path: polygon(0 35%, 7% 20%, 14% 40%, 22% 18%, 30% 42%, 38% 22%, 48% 50%, 56% 26%, 66% 46%, 76% 18%, 86% 42%, 94% 22%, 100% 36%, 100% 100%, 0 100%);
    opacity: 0.92;
    animation: rpcSwipeShift 7s ease-in-out infinite alternate;
  }

  .rpc-paint-swipe-light {
    background: linear-gradient(90deg, #CFE0DA 0%, #ffffff 36%, #CFE0DA 58%, #7DAD3F 100%);
  }

  .rpc-paint-btn {
    position: relative;
    border: 1px solid transparent;
    transition: transform .22s ease, box-shadow .22s ease, background-color .22s ease, color .22s ease, border-color .22s ease;
    overflow: hidden;
  }

  .rpc-paint-btn::after {
    content: "";
    position: absolute;
    inset: 0;
    transform: translateX(-110%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.22), transparent);
    transition: transform .6s ease;
  }

  .rpc-paint-btn:hover::after {
    transform: translateX(110%);
  }

  .rpc-paint-btn:hover {
    transform: translateY(-2px);
  }

  .rpc-paint-btn-dark {
    background: #192F44;
    border-color: #192F44;
    box-shadow: 0 16px 34px rgba(25,47,68,0.18);
  }

  .rpc-paint-btn-dark:hover {
    background: #236476;
    border-color: #236476;
  }

  .rpc-paint-btn-green {
    background: #7DAD3F;
    border-color: #7DAD3F;
    box-shadow: 0 16px 34px rgba(125,173,63,0.22);
  }

  .rpc-paint-btn-green:hover {
    background: #4A6C2F;
    border-color: #4A6C2F;
  }

  .rpc-paint-btn-outline {
    background: rgba(255,255,255,0.06);
    border-color: rgba(255,255,255,0.18);
    backdrop-filter: blur(6px);
  }

  .rpc-paint-btn-outline:hover {
    background: #ffffff;
    color: #192F44;
  }

  .rpc-testimonial-featured {
    position: relative;
  }

  .rpc-testimonial-featured__inner {
    position: relative;
    overflow: hidden;
    min-height: 100%;
    border: 1px solid rgba(25,47,68,0.10);
    background: #f7f5ef;
    box-shadow: 0 24px 60px rgba(25,47,68,0.10);
    padding: 2rem;
  }

  .rpc-testimonial-featured__inner::after {
    content: "";
    position: absolute;
    right: -50px;
    top: -40px;
    width: 220px;
    height: 220px;
    background: radial-gradient(circle, rgba(35,100,118,0.09), transparent 68%);
    pointer-events: none;
  }

  .rpc-testimonial-featured__top,
  .rpc-testimonial-side__top {
    display: flex;
    align-items: center;
    gap: 1rem;
    position: relative;
    z-index: 2;
  }

  .rpc-testimonial-bar {
    display: inline-block;
    width: 68px;
    height: 8px;
    flex: 0 0 auto;
  }

  .rpc-testimonial-kicker {
    font-size: 0.72rem;
    font-weight: 800;
    letter-spacing: 0.18em;
    text-transform: uppercase;
  }

  .rpc-testimonial-quote-mark {
    position: absolute;
    right: 1.5rem;
    top: 3.75rem;
    font-size: 8rem;
    line-height: 1;
    font-weight: 800;
    pointer-events: none;
    user-select: none;
  }

  .rpc-testimonial-featured__copy {
    position: relative;
    z-index: 2;
    margin-top: 3.25rem;
    max-width: 820px;
    font-size: clamp(1.2rem, 2vw, 1.7rem);
    line-height: 1.7;
    font-weight: 700;
    letter-spacing: -0.025em;
    color: #192F44;
  }

  .rpc-testimonial-featured__meta,
  .rpc-testimonial-side__meta {
    margin-top: 2rem;
    padding-top: 1.2rem;
    border-top: 1px solid rgba(25,47,68,0.10);
    position: relative;
    z-index: 2;
  }

  .rpc-testimonial-name {
    font-size: 0.8rem;
    font-weight: 800;
    letter-spacing: 0.14em;
    text-transform: uppercase;
  }

  .rpc-testimonial-side {
    position: relative;
    overflow: hidden;
    min-height: 248px;
    border: 1px solid rgba(25,47,68,0.10);
    padding: 1.75rem;
    box-shadow: 0 18px 40px rgba(25,47,68,0.08);
  }

  .rpc-testimonial-side::after {
    content: "";
    position: absolute;
    right: -30px;
    top: -30px;
    width: 160px;
    height: 160px;
    background: radial-gradient(circle, rgba(255,255,255,0.10), transparent 70%);
    pointer-events: none;
  }

  .rpc-testimonial-side--dark {
    background: #192F44;
    color: #fff;
  }

  .rpc-testimonial-side--green {
    background: #7DAD3F;
    color: #fff;
  }

  .rpc-testimonial-side__copy {
    position: relative;
    z-index: 2;
    margin-top: 2rem;
    font-size: 1rem;
    line-height: 1.95;
    font-weight: 700;
    letter-spacing: -0.01em;
  }

  .ajs-reveal-up,
  .ajs-reveal-left,
  .ajs-reveal-right,
  .ajs-reveal-stagger {
    opacity: 0;
    will-change: opacity, transform;
    transition: opacity .85s ease, transform .85s ease;
  }

  .ajs-reveal-up {
    transform: translateY(34px);
  }

  .ajs-reveal-left {
    transform: translateX(-36px);
  }

  .ajs-reveal-right {
    transform: translateX(36px);
  }

  .ajs-reveal-stagger {
    transform: translateY(28px);
  }

  .ajs-reveal-up.is-visible,
  .ajs-reveal-left.is-visible,
  .ajs-reveal-right.is-visible,
  .ajs-reveal-stagger.is-visible {
    opacity: 1;
    transform: translate(0,0);
  }

  @keyframes rpcSwipeShift {
    0%   { transform: translateX(0) scaleX(1); }
    100% { transform: translateX(6px) scaleX(1.01); }
  }

  @keyframes rpcHeroZoom {
    0% {
      transform: scale(1.08);
    }
    100% {
      transform: scale(1);
    }
  }

  @media (max-width: 1280px) {
    .rpc-testimonial-featured__copy {
      font-size: 1.3rem;
    }
  }

  @media (max-width: 768px) {
    .rpc-testimonial-featured__inner {
      padding: 1.5rem;
    }

    .rpc-testimonial-featured__copy {
      margin-top: 2.75rem;
      font-size: 1.05rem;
      line-height: 1.9;
    }

    .rpc-testimonial-side {
      min-height: auto;
      padding: 1.4rem;
    }

    .rpc-testimonial-side__copy {
      font-size: 0.95rem;
      line-height: 1.85;
    }

    .rpc-testimonial-quote-mark {
      right: 1rem;
      top: 3.25rem;
      font-size: 6rem;
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-up,
    .ajs-reveal-left,
    .ajs-reveal-right,
    .ajs-reveal-stagger,
    .rpc-paint-btn,
    .rpc-paint-swipe,
    .rpc-hero-image {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
      animation: none !important;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(
      ".ajs-reveal-up, .ajs-reveal-left, .ajs-reveal-right, .ajs-reveal-stagger"
    );

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry, idx) => {
        if (entry.isIntersecting) {
          const delay = entry.target.classList.contains("ajs-reveal-stagger") ? (idx % 8) * 55 : 0;
          setTimeout(() => {
            entry.target.classList.add("is-visible");
          }, delay);
        }
      });
    }, { threshold: 0.12 });

    items.forEach((item) => observer.observe(item));
  });
</script>

<?php get_footer(); ?>