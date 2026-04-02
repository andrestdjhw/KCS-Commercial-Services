<?php
/**
 * Template Name: Service - Exterior Painting
 *
 * Exterior Painting page for Real Painting Corp
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="rpc-service-page bg-[#f6f5f0] text-[#192F44] overflow-hidden">

  <?php
    $hero_image = 'http://real-painting-corp.local/wp-content/uploads/2026/03/photo-1523198780259-41f275ab6e3d.avif';

    $included_items = [
      'Full pressure washing and surface preparation',
      'Stucco and wood repair as needed',
      'Premium exterior-grade coatings rated for SoCal climate',
      'Masking and protection of windows, doors, landscaping, and hardscape',
      'Clean, professional site management throughout',
      'Final inspection and walk-through',
      'Up to 1-year workmanship warranty',
    ];
  ?>

  <!-- HERO -->
  <section class="relative overflow-hidden border-b border-[#192F44]/10 bg-[#f6f5f0] py-10 lg:py-14">
    <div class="mx-auto max-w-7xl px-4">
      <div class="relative overflow-hidden border border-[#192F44]/10 bg-white shadow-[0_24px_60px_rgba(25,47,68,0.12)]">

        <div class="relative h-[520px] overflow-hidden lg:h-[620px]">
          <img
            src="<?php echo esc_url($hero_image); ?>"
            alt="Completed exterior painting project"
            class="rpc-service-hero-photo h-full w-full object-cover"
          >
          <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(25,47,68,0.68)_0%,rgba(25,47,68,0.30)_38%,rgba(25,47,68,0.08)_100%)]"></div>
        </div>

        <div class="absolute inset-x-0 bottom-0 top-0 flex items-center">
          <div class="mx-auto w-full max-w-7xl px-4">
            <div class="ajs-reveal-left max-w-2xl border border-white/12 bg-[#192F44]/82 p-7 text-white shadow-[0_18px_40px_rgba(25,47,68,0.24)] backdrop-blur-sm md:p-9">
              <p class="text-xs font-black uppercase tracking-[0.24em] text-[#CFE0DA]">
                Services
              </p>

              <h1 class="mt-4 text-4xl font-extrabold leading-[0.98] tracking-[-0.05em] md:text-6xl">
                Exterior Painting
              </h1>

              <div class="mt-6 h-[3px] w-24 bg-[linear-gradient(90deg,#CFE0DA_0%,#ffffff_55%,#7DAD3F_100%)]"></div>

              <p class="mt-7 max-w-xl text-base leading-8 text-white/86 md:text-lg">
                Protection and curb appeal engineered for Southern California’s climate — with the preparation, materials, and craftsmanship your home’s most visible surface demands.
              </p>

              <div class="mt-8">
                <a href="/contact-us"
                   class="rpc-service-btn rpc-service-btn-green inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
                  Request a Free Estimate
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- MAIN CONTENT -->
  <section class="relative overflow-hidden border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(207,224,218,0.32),transparent_24%)]"></div>
    <div class="absolute left-0 top-0 h-full w-[18%] bg-[#f3f6f4]"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-10 xl:grid-cols-[0.78fr_1.22fr] xl:gap-14">

        <div class="ajs-reveal-left">
          <div class="sticky top-28">
            <p class="text-xs font-black uppercase tracking-[0.24em] text-[#4A6C2F]">
              Your Home’s First Impression. Your Investment’s First Line of Defense.
            </p>

            <h2 class="mt-5 max-w-[10ch] text-3xl font-black leading-[0.94] tracking-[-0.05em] text-[#192F44] md:text-5xl">
              Exterior protection starts with preparation.
            </h2>

            <div class="mt-7 h-[3px] w-24 bg-[linear-gradient(90deg,#192F44_0%,#236476_55%,#7DAD3F_100%)]"></div>
          </div>
        </div>

        <div class="ajs-reveal-right">
          <div class="relative overflow-hidden border border-[#192F44]/10 bg-[#fcfbf8] p-6 shadow-[0_20px_44px_rgba(25,47,68,0.08)] md:p-8 lg:p-10">
            <div class="absolute right-0 top-0 h-24 w-24 translate-x-[20%] -translate-y-[20%] rotate-12 bg-[#CFE0DA]/55"></div>

            <div class="space-y-6 text-base leading-8 text-[#192F44]/80">
              <p>
                Your exterior takes everything Southern California delivers — UV, heat, Santa Ana winds, and coastal moisture. A quality exterior paint job isn’t cosmetic. It’s protection for your largest asset.
              </p>

              <p>
                We approach every exterior with thorough preparation: pressure washing, scraping, patching stucco and wood, caulking, and priming before any coating goes on. The materials we select are rated for UV resistance, flexibility, and long-term adhesion in our specific climate.
              </p>

              <p>
                The result is a finish that looks exceptional on day one and holds up for years.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- WHAT'S INCLUDED -->
  <section class="relative overflow-hidden bg-[#f6f5f0] py-20 lg:py-24">
    <div class="relative mx-auto max-w-7xl px-4">
      <div class="ajs-reveal-up max-w-3xl">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          What’s Included
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Every exterior project is built for performance and protection.
        </h2>
      </div>

      <div class="mt-12 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
        <?php foreach ($included_items as $item) : ?>
          <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#192F44]/10 bg-white p-6 shadow-[0_16px_34px_rgba(25,47,68,0.06)]">
            <div class="absolute inset-x-0 top-0 h-2 bg-[linear-gradient(90deg,#192F44_0%,#236476_50%,#7DAD3F_100%)]"></div>

            <div class="mb-6 mt-2 flex gap-2">
              <span class="h-8 w-8 border border-[#192F44]/10 bg-[#236476] transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110"></span>
              <span class="h-8 w-8 border border-[#192F44]/10 bg-[#CFE0DA] transition-transform duration-500 group-hover:-rotate-6 group-hover:scale-110"></span>
            </div>

            <p class="text-[15px] leading-8 text-[#192F44]/78">
              <?php echo esc_html($item); ?>
            </p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="relative isolate overflow-hidden bg-white py-20 text-[#192F44] lg:py-24 border-t border-[#192F44]/10">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(35,100,118,0.08),transparent_28%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(125,173,63,0.12),transparent_30%)]"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <h2 class="ajs-reveal-up text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
        Ready to Protect and Elevate Your Home’s Exterior?
      </h2>

      <div class="ajs-reveal-up mt-8 flex flex-wrap items-center justify-center gap-3">
        <a href="/contact-us"
           class="rpc-service-btn rpc-service-btn-green inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          Request a Free Estimate
        </a>

        <a href="tel:+19092326602"
           class="rpc-service-btn rpc-service-btn-dark inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          (909) 232-6602
        </a>
      </div>

      <div class="rpc-service-swipe rpc-service-swipe-light mx-auto mt-10 max-w-2xl"></div>
    </div>
  </section>
</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap');

  .rpc-service-page {
    font-family: "Manrope", "Segoe UI", Arial, sans-serif;
  }

  .rpc-service-page h1,
  .rpc-service-page h2,
  .rpc-service-page h3 {
    font-family: "Space Grotesk", "Segoe UI", Arial, sans-serif;
  }

  .rpc-service-hero-photo {
    animation: rpcServiceHeroZoom 14s ease-out forwards;
    transform: scale(1.04);
  }

  .rpc-service-btn {
    position: relative;
    border: 1px solid transparent;
    transition: transform .22s ease, box-shadow .22s ease, background-color .22s ease, color .22s ease, border-color .22s ease;
    overflow: hidden;
  }

  .rpc-service-btn::after {
    content: "";
    position: absolute;
    inset: 0;
    transform: translateX(-110%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.22), transparent);
    transition: transform .6s ease;
  }

  .rpc-service-btn:hover::after {
    transform: translateX(110%);
  }

  .rpc-service-btn:hover {
    transform: translateY(-2px);
  }

  .rpc-service-btn-dark {
    background: #192F44;
    border-color: #192F44;
    box-shadow: 0 16px 34px rgba(25,47,68,0.18);
  }

  .rpc-service-btn-dark:hover {
    background: #236476;
    border-color: #236476;
  }

  .rpc-service-btn-green {
    background: #7DAD3F;
    border-color: #7DAD3F;
    box-shadow: 0 16px 34px rgba(125,173,63,0.22);
  }

  .rpc-service-btn-green:hover {
    background: #4A6C2F;
    border-color: #4A6C2F;
  }

  .rpc-service-swipe {
    height: 14px;
    width: 100%;
    background: linear-gradient(90deg, #192F44 0%, #236476 28%, #CFE0DA 55%, #7DAD3F 78%, #4A6C2F 100%);
    clip-path: polygon(0 35%, 7% 20%, 14% 40%, 22% 18%, 30% 42%, 38% 22%, 48% 50%, 56% 26%, 66% 46%, 76% 18%, 86% 42%, 94% 22%, 100% 36%, 100% 100%, 0 100%);
    opacity: 0.92;
    animation: rpcServiceSwipeShift 7s ease-in-out infinite alternate;
  }

  .rpc-service-swipe-light {
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

  @keyframes rpcServiceSwipeShift {
    0%   { transform: translateX(0) scaleX(1); }
    100% { transform: translateX(6px) scaleX(1.01); }
  }

  @keyframes rpcServiceHeroZoom {
    0% { transform: scale(1.08); }
    100% { transform: scale(1); }
  }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-up,
    .ajs-reveal-left,
    .ajs-reveal-right,
    .ajs-reveal-stagger,
    .rpc-service-btn,
    .rpc-service-swipe,
    .rpc-service-hero-photo {
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