<?php
/**
 * Template Name: Service - Interior Painting
 *
 * Interior Painting page for Real Painting Corp
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="rpc-service-page bg-[#f6f5f0] text-[#192F44] overflow-hidden">

  <?php
    $hero_image = 'http://real-painting-corp.local/wp-content/uploads/2026/03/photo-1523198780259-41f275ab6e3d.avif';

    $included_items = [
      'Full surface preparation — patching, sanding, caulking, priming',
      'Premium paint products — Sherwin-Williams, Benjamin Moore, or equivalent',
      'Complimentary color consultation',
      'Complete furniture and floor protection',
      'Daily site cleanup — every single day, not just at the end',
      'Final walk-through inspection with your approval before final payment',
      'Up to 1-year workmanship warranty',
    ];

    $faqs = [
      [
        'q' => 'How long does an interior paint job take?',
        'a' => 'A standard 2,000 sq ft interior takes approximately 2 weeks with a crew of 4–5 professionals working Monday through Friday. We’ll give you a specific timeline in your proposal — and we’ll hold to it.',
      ],
      [
        'q' => 'Do I need to move my furniture?',
        'a' => 'No. We handle all furniture moving and protection as part of our standard process. Everything is covered and returned to its original position.',
      ],
      [
        'q' => 'What paint brands do you use?',
        'a' => 'We work primarily with Sherwin-Williams and Benjamin Moore. We’re happy to discuss options during your free color consultation.',
      ],
      [
        'q' => 'Do you repair walls before painting?',
        'a' => 'Yes. Full surface preparation — drywall repair, patching, sanding, and priming — is included in every project. The prep is what makes the paint last.',
      ],
    ];
  ?>

 <!-- HERO -->
<section class="relative overflow-hidden border-b border-[#192F44]/10 bg-[#f6f5f0] py-10 lg:py-14">
  <div class="mx-auto max-w-7xl px-4">
    <div class="relative overflow-hidden border border-[#192F44]/10 bg-white shadow-[0_24px_60px_rgba(25,47,68,0.12)]">

      <!-- IMAGE -->
      <div class="relative h-[520px] overflow-hidden lg:h-[620px]">
        <img
          src="<?php echo esc_url($hero_image); ?>"
          alt="Completed premium interior painting project"
          class="rpc-service-hero-photo h-full w-full object-cover"
        >
        <div class="absolute inset-0 bg-[linear-gradient(90deg,rgba(25,47,68,0.68)_0%,rgba(25,47,68,0.30)_38%,rgba(25,47,68,0.08)_100%)]"></div>
      </div>

      <!-- CONTENT CARD -->
      <div class="absolute inset-x-0 bottom-0 top-0 flex items-center">
        <div class="mx-auto w-full max-w-7xl px-4">
          <div class="ajs-reveal-left max-w-2xl border border-white/12 bg-[#192F44]/82 p-7 text-white shadow-[0_18px_40px_rgba(25,47,68,0.24)] backdrop-blur-sm md:p-9">
            <p class="text-xs font-black uppercase tracking-[0.24em] text-[#CFE0DA]">
              Services
            </p>

            <h1 class="mt-4 text-4xl font-extrabold leading-[0.98] tracking-[-0.05em] md:text-6xl">
              Interior Painting
            </h1>

            <div class="mt-6 h-[3px] w-24 bg-[linear-gradient(90deg,#CFE0DA_0%,#ffffff_55%,#7DAD3F_100%)]"></div>

            <p class="mt-7 max-w-xl text-base leading-8 text-white/86 md:text-lg">
              Precision finishes, full surface preparation, and a clean site from start to finish — for homeowners who notice the difference between a paint job and a transformation.
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
  <!-- WHERE TRUST BEGINS -->
  <section class="relative overflow-hidden border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(207,224,218,0.32),transparent_24%)]"></div>
    <div class="absolute left-0 top-0 h-full w-[18%] bg-[#f3f6f4]"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-10 xl:grid-cols-[0.78fr_1.22fr] xl:gap-14">

        <div class="ajs-reveal-left">
          <div class="sticky top-28">
            <p class="text-xs font-black uppercase tracking-[0.24em] text-[#4A6C2F]">
              Where Trust Begins
            </p>

            <h2 class="mt-5 max-w-[10ch] text-3xl font-black leading-[0.94] tracking-[-0.05em] text-[#192F44] md:text-5xl">
              Interior work demands a higher level of care.
            </h2>

            <div class="mt-7 h-[3px] w-24 bg-[linear-gradient(90deg,#192F44_0%,#236476_55%,#7DAD3F_100%)]"></div>
          </div>
        </div>

        <div class="ajs-reveal-right">
          <div class="relative overflow-hidden border border-[#192F44]/10 bg-[#fcfbf8] p-6 shadow-[0_20px_44px_rgba(25,47,68,0.08)] md:p-8 lg:p-10">
            <div class="absolute right-0 top-0 h-24 w-24 translate-x-[20%] -translate-y-[20%] rotate-12 bg-[#CFE0DA]/55"></div>

            <div class="space-y-6 text-base leading-8 text-[#192F44]/80">
              <p>
                Interior painting is the most intimate service we provide. Our team is inside your home, working around your life, touching the surfaces you see and live with every day.
              </p>

              <p>
                That’s why we approach every interior project with a level of care that goes far beyond the paint itself. We protect your floors, your furniture, and your fixtures before we open a single can. We prep every surface — patching, sanding, priming — because the quality of what’s underneath determines how long the finish lasts.
              </p>

              <p>
                And when we leave each day, the only evidence of our work is the progress — not the mess.
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
          Every interior project is built on preparation and protection.
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

  <!-- BUILT FOR HOMEOWNERS -->
  <section class="relative overflow-hidden border-y border-[#192F44]/10 bg-[#192F44] py-20 text-white lg:py-24">
    <div class="absolute inset-0 opacity-[0.07] [background-image:linear-gradient(135deg,rgba(255,255,255,0.35)_25%,transparent_25%,transparent_50%,rgba(255,255,255,0.35)_50%,rgba(255,255,255,0.35)_75%,transparent_75%,transparent)] [background-size:20px_20px]"></div>

    <div class="relative mx-auto max-w-6xl px-4">
      <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
        <div class="ajs-reveal-left">
          <p class="text-xs font-black uppercase tracking-[0.22em] text-[#CFE0DA]">
            Built for Homeowners Who Expect More
          </p>

          <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
            This is for homeowners who notice the difference.
          </h2>
        </div>

        <div class="ajs-reveal-right space-y-6 text-base leading-8 text-white/82">
          <p>
            Our interior painting clients are homeowners in Irvine, Mission Viejo, Ladera Ranch, Coto de Caza, and surrounding communities who take pride in how their home looks and feels. They’ve been let down by contractors who left tape residue on trim, paint on hardwood, and drop cloths that weren’t actually covering anything.
          </p>

          <p>
            That doesn’t happen here. Cleanliness is our first signal of professionalism — before a single wall gets painted.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-5xl px-4">
      <div class="ajs-reveal-up mx-auto max-w-3xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          Frequently Asked Questions
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Helpful answers before we get started.
        </h2>

        <div class="mx-auto mt-6 h-[3px] w-24 bg-[linear-gradient(90deg,#192F44_0%,#236476_55%,#7DAD3F_100%)]"></div>
      </div>

      <div class="mt-12 grid gap-4">
        <?php foreach ($faqs as $faq) : ?>
          <details class="ajs-reveal-stagger rpc-service-faq group border border-[#192F44]/10 bg-[#fcfbf8]">
            <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-6 py-5">
              <span class="text-lg font-black leading-7 tracking-[-0.02em] text-[#192F44]">
                <?php echo esc_html($faq['q']); ?>
              </span>
              <span class="rpc-service-faq-icon shrink-0 text-2xl font-light text-[#236476]">+</span>
            </summary>

            <div class="border-t border-[#192F44]/10 px-6 py-5">
              <p class="text-base leading-8 text-[#192F44]/80">
                <?php echo esc_html($faq['a']); ?>
              </p>
            </div>
          </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="relative isolate overflow-hidden bg-[#f6f5f0] py-20 text-[#192F44] lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(35,100,118,0.08),transparent_28%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(125,173,63,0.12),transparent_30%)]"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <h2 class="ajs-reveal-up text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
        Ready to Transform Your Interior?
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

  .rpc-service-faq[open] .rpc-service-faq-icon {
    transform: rotate(45deg);
  }

  .rpc-service-faq-icon {
    transition: transform .2s ease;
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