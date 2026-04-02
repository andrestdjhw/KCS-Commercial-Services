<?php
/**
 * Template Name: About Template
 *
 * About page for Real Painting Corp
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="rpc-about-page bg-[#f6f5f0] text-[#192F44] overflow-hidden">

  <?php
    $about_hero_image = 'http://real-painting-corp.local/wp-content/uploads/2026/03/flow-clark-ioOlenqfMqA-unsplash-scaled.jpg';

    $values = [
      [
        'title' => 'Certainty',
        'copy'  => 'Every project has a defined scope, a clear timeline, and a predictable result. You never have to guess what’s happening, what it costs, or when it’ll be done. We eliminate the uncertainty  that’s the product.',
        'tone'  => '#192F44'
      ],
      [
        'title' => 'Cleanliness',
        'copy'  => 'We treat your home like it’s ours. Floors are protected. Furniture is covered. Surfaces are shielded. And when we leave, the site is cleaner than when we arrived. Cleanliness is our first signal of professionalism  before we paint a single wall.',
        'tone'  => '#236476'
      ],
      [
        'title' => 'Commitment',
        'copy'  => 'What we promise, we deliver  on time and in full. Schedule discipline isn’t something we aspire to. It’s how we operate. We respect your time as much as we respect your property.',
        'tone'  => '#4A6C2F'
      ],
      [
        'title' => 'Trust',
        'copy'  => 'We are C-33 licensed, carry General Liability and Workers’ Compensation insurance, and are fully bonded. When you open your door to our team, you’re protected at every level from the first estimate to the final walk-through.',
        'tone'  => '#7DAD3F'
      ],
      [
        'title' => 'Excellence',
        'copy'  => 'With 40+ years of combined experience, we don’t cut corners. Every layer of prep, every coat, every finish reflects a commitment to work that lasts not work that’s fast. We prioritize quality over volume. Always.',
        'tone'  => '#192F44'
      ],
    ];

    $communities = [
      'Rancho Santa Margarita',
      'Coto de Caza',
      'Ladera Ranch',
      'Mission Viejo',
      'Irvine',
      'Laguna Niguel',
      'Yorba Linda',
      'Aliso Viejo',
      'Tustin Ranch',
      'Corona',
      'Murrieta',
      'Temecula',
      'Menifee',
      'Rancho Cucamonga',
      'Eastvale',
      'Chino Hills',
      'Pasadena',
      'Glendale',
      'Arcadia',
      'Torrance',
    ];
  ?>

<!-- HERO -->
<section class="relative overflow-hidden border-b border-[#192F44]/10 bg-[linear-gradient(180deg,#ffffff_0%,#f6f5f0_100%)] py-16 lg:py-24">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(207,224,218,0.55),transparent_28%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(35,100,118,0.08),transparent_30%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid items-center gap-12 lg:grid-cols-[0.92fr_1.08fr] lg:gap-16">

      <!-- TEXT -->
      <div class="ajs-reveal-left">
        <p class="text-xs font-black uppercase tracking-[0.24em] text-[#236476]">
          About Us
        </p>

        <h1 class="mt-5 max-w-[11ch] text-4xl font-extrabold leading-[0.98] tracking-[-0.05em] text-[#192F44] md:text-6xl">
          Be Real. Build Real.
        </h1>

        <div class="mt-6 h-[3px] w-24 bg-[linear-gradient(90deg,#192F44_0%,#236476_55%,#7DAD3F_100%)]"></div>

        <p class="mt-8 max-w-2xl text-base leading-8 text-[#192F44]/80 md:text-lg">
          We founded Real Painting Corp on a simple conviction: that homeowners deserve a contractor who shows up prepared, protects their home, respects their time, and delivers a result worth recommending  without the stress of wondering if it’ll actually happen.
        </p>

        <!-- AQUÍ reutilizamos copy REAL -->
        <div class="mt-10 grid gap-3 sm:grid-cols-2">
          <div class="border border-[#192F44]/10 bg-white px-5 py-4 shadow-[0_10px_24px_rgba(25,47,68,0.06)]">
            <p class="text-sm font-bold text-[#192F44]">
              Shows up prepared. Protects your home. Respects your time.
            </p>
          </div>

          <div class="border border-[#192F44]/10 bg-[#CFE0DA]/55 px-5 py-4 shadow-[0_10px_24px_rgba(25,47,68,0.06)]">
            <p class="text-sm font-bold text-[#192F44]">
              Delivers a result worth recommending.
            </p>
          </div>
        </div>
      </div>

      <!-- IMAGE -->
      <div class="ajs-reveal-right">
        <div class="relative overflow-hidden border border-[#192F44]/10 bg-white p-3 shadow-[0_24px_60px_rgba(25,47,68,0.12)]">
          <div class="relative overflow-hidden">
            <img
              src="http://real-painting-corp.local/wp-content/uploads/2026/03/photo-1523198780259-41f275ab6e3d.avif"
              alt="Real Painting Corp team"
              class="rpc-about-hero-photo h-[420px] w-full object-cover md:h-[520px]"
            >
            <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(25,47,68,0.03)_0%,rgba(25,47,68,0.10)_100%)]"></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- OUR STORY -->
<section class="relative overflow-hidden border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(207,224,218,0.32),transparent_24%)]"></div>
  <div class="absolute left-0 top-0 h-full w-[18%] bg-[#f3f6f4]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-10 xl:grid-cols-[0.78fr_1.22fr] xl:gap-14">

      <!-- LEFT -->
      <div class="ajs-reveal-left">
        <div class="sticky top-28">
          <p class="text-xs font-black uppercase tracking-[0.24em] text-[#4A6C2F]">
            Our Story
          </p>

          <h2 class="mt-5 max-w-[10ch] text-3xl font-black leading-[0.94] tracking-[-0.05em] text-[#192F44] md:text-5xl">
            Built to Be the Most Trusted One.
          </h2>

          <div class="mt-7 h-[3px] w-24 bg-[linear-gradient(90deg,#192F44_0%,#236476_55%,#7DAD3F_100%)]"></div>

          <!-- FRASE REAL DEL COPY -->
          <div class="mt-10 border border-[#192F44]/10 bg-[#f6f5f0] p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <p class="text-lg font-black leading-8 tracking-[-0.03em] text-[#192F44]">
              Not the biggest company in Southern California. The most trusted one.
            </p>
          </div>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="ajs-reveal-right">
        <div class="relative overflow-hidden border border-[#192F44]/10 bg-[#fcfbf8] p-6 shadow-[0_20px_44px_rgba(25,47,68,0.08)] md:p-8 lg:p-10">

          <div class="absolute right-0 top-0 h-24 w-24 translate-x-[20%] -translate-y-[20%] rotate-12 bg-[#CFE0DA]/55"></div>

          <div class="space-y-6 text-base leading-8 text-[#192F44]/80">

            <p>
              Real Painting Corp was founded in 2023 by two partners who spent decades working in the painting and remodeling industry across Southern California. After years of working under other contractors  where the margins were thin, quality control was inconsistent, and the client relationship was always an afterthought  they made a decision.
            </p>

            <!-- FRASE CLAVE -->
            <div class="border-l-4 border-[#236476] bg-white px-5 py-5 shadow-[0_10px_24px_rgba(25,47,68,0.05)]">
              <p class="text-2xl font-black tracking-[-0.04em] text-[#192F44] md:text-3xl">
                Build something different.
              </p>
            </div>

            <p>
              Not a company that talks about quality. A company that proves it  every single day, in every single home. Where clean execution isn’t a selling point, it’s the baseline. Where showing up on time isn’t a bonus, it’s the expectation. Where a homeowner opens their front door and feels certain they made the right call.
            </p>

            <p>
              That’s what Real Painting was built to be. Not the biggest company in Southern California. The most trusted one.
            </p>

            <p>
              Today we serve homeowners across Orange County, Los Angeles, Riverside, and San Bernardino  with full licensing, insurance, and a reputation built entirely on referrals and results.
            </p>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- VALUES -->
  <section class="relative overflow-hidden border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="absolute right-0 top-0 h-full w-[28%] bg-[#CFE0DA]/30"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-up max-w-3xl">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          What We Stand For
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Five Values. One Standard of Work.
        </h2>
      </div>

      <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-5">
        <?php foreach ($values as $value) : ?>
          <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#192F44]/10 bg-[#fdfcf8] p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <div class="absolute inset-x-0 top-0 h-2 transition-all duration-500 group-hover:h-3" style="background: <?php echo esc_attr($value['tone']); ?>;"></div>

            <div class="mb-6 mt-2 flex gap-2">
              <span class="h-8 w-8 border border-[#192F44]/10 transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110" style="background: <?php echo esc_attr($value['tone']); ?>;"></span>
              <span class="h-8 w-8 border border-[#192F44]/10 bg-[#CFE0DA] transition-transform duration-500 group-hover:-rotate-6 group-hover:scale-110"></span>
            </div>

            <h3 class="text-xl font-black tracking-[-0.03em] text-[#192F44]">
              <?php echo esc_html($value['title']); ?>
            </h3>

            <p class="mt-4 text-[15px] leading-8 text-[#192F44]/76">
              <?php echo esc_html($value['copy']); ?>
            </p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- MISSION -->
  <section class="relative overflow-hidden bg-[#192F44] py-20 text-white lg:py-24">
    <div class="absolute inset-0 opacity-[0.07] [background-image:linear-gradient(135deg,rgba(255,255,255,0.35)_25%,transparent_25%,transparent_50%,rgba(255,255,255,0.35)_50%,rgba(255,255,255,0.35)_75%,transparent_75%,transparent)] [background-size:20px_20px]"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.22em] text-[#CFE0DA]">
        Our Mission
      </p>

      <h2 class="ajs-reveal-up mt-5 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
        Clean execution. Schedule discipline. Aesthetic certainty.
      </h2>

      <p class="ajs-reveal-up mx-auto mt-8 max-w-4xl text-base leading-8 text-white/84 md:text-lg">
        We transform homes across Southern California through premium painting and interior remodeling  delivered with clean execution, schedule discipline, and aesthetic certainty. We operate with full professional structure so that every homeowner feels total certainty from the first call to the final walk-through.
      </p>
    </div>
  </section>

  <!-- LICENSED -->
  <section class="bg-[#f6f5f0] py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="grid gap-8 xl:grid-cols-[1.1fr_0.9fr] xl:items-stretch">
        <article class="ajs-reveal-left relative overflow-hidden border border-[#192F44]/10 bg-white p-8 shadow-[0_20px_44px_rgba(25,47,68,0.08)] md:p-10">
          <div class="absolute right-0 top-0 h-24 w-24 translate-x-[20%] -translate-y-[20%] rotate-12 bg-[#CFE0DA]/60"></div>

          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
            Licensed, Insured & Bonded
          </p>

          <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
            Professional structure. Full accountability.
          </h2>

          <div class="mt-8 space-y-5 text-base leading-8 text-[#192F44]/80">
            <p>
              Real Painting Corp holds a C-33 Painting and Decorating license (CSLB #1111920), General Liability insurance, Workers’ Compensation coverage, and a surety bond. We are compliant with all OSHA and California state regulations.
            </p>

            <p class="font-bold text-[#192F44]">
              When you hire Real Painting, you’re working with a legitimate, accountable business  not a crew with a van.
            </p>
          </div>
        </article>

        <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-1">
          <article class="ajs-reveal-stagger border border-[#192F44]/10 bg-[#CFE0DA] p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <p class="text-xs font-black uppercase tracking-[0.18em] text-[#192F44]/70">Credential</p>
            <h3 class="mt-3 text-2xl font-black tracking-[-0.03em] text-[#192F44]">C-33 Licensed</h3>
          </article>

          <article class="ajs-reveal-stagger border border-[#192F44]/10 bg-white p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <p class="text-xs font-black uppercase tracking-[0.18em] text-[#236476]">Protection</p>
            <h3 class="mt-3 text-2xl font-black tracking-[-0.03em] text-[#192F44]">General Liability</h3>
          </article>

          <article class="ajs-reveal-stagger border border-[#192F44]/10 bg-white p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <p class="text-xs font-black uppercase tracking-[0.18em] text-[#4A6C2F]">Coverage</p>
            <h3 class="mt-3 text-2xl font-black tracking-[-0.03em] text-[#192F44]">Workers’ Compensation</h3>
          </article>

          <article class="ajs-reveal-stagger border border-[#192F44]/10 bg-[#7DAD3F] p-6 shadow-[0_16px_34px_rgba(25,47,68,0.10)]">
            <p class="text-xs font-black uppercase tracking-[0.18em] text-white/82">Accountability</p>
            <h3 class="mt-3 text-2xl font-black tracking-[-0.03em] text-white">Surety Bond</h3>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- COMMUNITIES -->
  <section class="border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-up mx-auto max-w-4xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          Service Area Focus
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Serving Southern California’s Most Valued Communities
        </h2>

        <p class="mx-auto mt-6 max-w-3xl text-base leading-8 text-[#192F44]/76">
          We focus our work in the communities where homeowners invest in their properties and expect a level of service that matches the value of their home.
        </p>
      </div>

      <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <?php foreach ($communities as $community) : ?>
          <div class="ajs-reveal-stagger border border-[#192F44]/10 bg-[#fdfcf8] px-5 py-4 text-sm font-extrabold uppercase tracking-[0.12em] text-[#192F44] shadow-sm">
            <?php echo esc_html($community); ?>
          </div>
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
        Ready to Work With a Team That Delivers Certainty?
      </h2>

      <div class="ajs-reveal-up mt-8 flex flex-wrap items-center justify-center gap-3">
        <a href="/contact-us"
           class="rpc-about-btn rpc-about-btn-green inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          Request a Free Estimate
        </a>

        <a href="tel:+19092326602"
           class="rpc-about-btn rpc-about-btn-dark inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          (909) 232-6602
        </a>
      </div>

      <div class="rpc-about-swipe rpc-about-swipe-light mx-auto mt-10 max-w-2xl"></div>
    </div>
  </section>
</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap');

  .rpc-about-page {
    font-family: "Manrope", "Segoe UI", Arial, sans-serif;
  }

  .rpc-about-page h1,
  .rpc-about-page h2,
  .rpc-about-page h3 {
    font-family: "Space Grotesk", "Segoe UI", Arial, sans-serif;
  }

  .rpc-about-hero-image {
    animation: rpcAboutHeroZoom 14s ease-out forwards;
    transform: scale(1.06);
  }

  .rpc-about-btn {
    position: relative;
    border: 1px solid transparent;
    overflow: hidden;
    transition: transform .22s ease, box-shadow .22s ease, background-color .22s ease, color .22s ease, border-color .22s ease;
  }

  .rpc-about-btn::after {
    content: "";
    position: absolute;
    inset: 0;
    transform: translateX(-110%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.22), transparent);
    transition: transform .6s ease;
  }

  .rpc-about-btn:hover::after {
    transform: translateX(110%);
  }

  .rpc-about-btn:hover {
    transform: translateY(-2px);
  }

  .rpc-about-btn-dark {
    background: #192F44;
    border-color: #192F44;
    box-shadow: 0 16px 34px rgba(25,47,68,0.18);
  }

  .rpc-about-btn-dark:hover {
    background: #236476;
    border-color: #236476;
  }

  .rpc-about-btn-green {
    background: #7DAD3F;
    border-color: #7DAD3F;
    box-shadow: 0 16px 34px rgba(125,173,63,0.22);
  }

  .rpc-about-btn-green:hover {
    background: #4A6C2F;
    border-color: #4A6C2F;
  }

  .rpc-about-swipe {
    height: 14px;
    width: 100%;
    background: linear-gradient(90deg, #192F44 0%, #236476 28%, #CFE0DA 55%, #7DAD3F 78%, #4A6C2F 100%);
    clip-path: polygon(0 35%, 7% 20%, 14% 40%, 22% 18%, 30% 42%, 38% 22%, 48% 50%, 56% 26%, 66% 46%, 76% 18%, 86% 42%, 94% 22%, 100% 36%, 100% 100%, 0 100%);
    opacity: 0.92;
    animation: rpcAboutSwipeShift 7s ease-in-out infinite alternate;
  }

  .rpc-about-swipe-light {
    background: linear-gradient(90deg, #CFE0DA 0%, #ffffff 36%, #CFE0DA 58%, #7DAD3F 100%);
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
  .rpc-about-hero-photo {
  animation: rpcAboutHeroZoom 14s ease-out forwards;
  transform: scale(1.04);
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

  @keyframes rpcAboutSwipeShift {
    0%   { transform: translateX(0) scaleX(1); }
    100% { transform: translateX(6px) scaleX(1.01); }
  }

  @keyframes rpcAboutHeroZoom {
    0% {
      transform: scale(1.08);
    }
    100% {
      transform: scale(1);
    }
  }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-up,
    .ajs-reveal-left,
    .ajs-reveal-right,
    .ajs-reveal-stagger,
    .rpc-about-btn,
    .rpc-about-swipe,
    .rpc-about-hero-image {
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