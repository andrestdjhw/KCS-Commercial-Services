<?php
/**
 * Template Name: Gallery Template
 *
 * Gallery page for Real Painting Corp
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="rpc-gallery-page bg-[#f6f5f0] text-[#192F44] overflow-hidden">

  <?php
    /**
     * Reemplaza estas imágenes por fotos reales de proyectos.
     * El brief indica priorizar 6–8 best project photos
     * y before/after pairs cuando sea posible.
     */
    $gallery_images = [
      [
        'src' => 'http://real-painting-corp.local/wp-content/uploads/2026/03/photo-1523198780259-41f275ab6e3d.avif',
        'alt' => 'Real Painting Corp project gallery image 1',
        'label' => 'Before / After',
      ],
      [
        'src' => 'http://real-painting-corp.local/wp-content/uploads/2026/03/photo-1523198780259-41f275ab6e3d.avif',
        'alt' => 'Real Painting Corp project gallery image 2',
        'label' => 'Real Project',
      ],
      [
        'src' => 'http://real-painting-corp.local/wp-content/uploads/2026/03/photo-1523198780259-41f275ab6e3d.avif',
        'alt' => 'Real Painting Corp project gallery image 3',
        'label' => 'Before / After',
      ],
      [
        'src' => 'http://real-painting-corp.local/wp-content/uploads/2026/03/photo-1523198780259-41f275ab6e3d.avif',
        'alt' => 'Real Painting Corp project gallery image 4',
        'label' => 'Real Project',
      ],
      [
        'src' => 'http://real-painting-corp.local/wp-content/uploads/2026/03/photo-1523198780259-41f275ab6e3d.avif',
        'alt' => 'Real Painting Corp project gallery image 5',
        'label' => 'Before / After',
      ],
      [
        'src' => 'http://real-painting-corp.local/wp-content/uploads/2026/03/photo-1523198780259-41f275ab6e3d.avif',
        'alt' => 'Real Painting Corp project gallery image 6',
        'label' => 'Real Project',
      ],
      [
        'src' => 'http://real-painting-corp.local/wp-content/uploads/2026/03/photo-1523198780259-41f275ab6e3d.avif',
        'alt' => 'Real Painting Corp project gallery image 7',
        'label' => 'Before / After',
      ],
      [
        'src' => 'http://real-painting-corp.local/wp-content/uploads/2026/03/photo-1523198780259-41f275ab6e3d.avif',
        'alt' => 'Real Painting Corp project gallery image 8',
        'label' => 'Real Project',
      ],
    ];
  ?>

  <!-- HERO -->
  <section class="relative overflow-hidden border-b border-[#192F44]/10 bg-[linear-gradient(180deg,#ffffff_0%,#f6f5f0_100%)] py-16 lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(207,224,218,0.50),transparent_28%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(35,100,118,0.08),transparent_30%)]"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.24em] text-[#236476]">
        Gallery
      </p>

      <h1 class="ajs-reveal-up mt-5 text-4xl font-extrabold leading-[0.98] tracking-[-0.05em] text-[#192F44] md:text-6xl">
        Real Projects. Real Results.
      </h1>

      <div class="mx-auto mt-6 h-[3px] w-24 bg-[linear-gradient(90deg,#192F44_0%,#236476_55%,#7DAD3F_100%)]"></div>

      <p class="ajs-reveal-up mx-auto mt-8 max-w-3xl text-base leading-8 text-[#192F44]/80 md:text-lg">
        Every project tells a story of clean execution, attention to detail, and a homeowner who felt certain from start to finish. See the work for yourself.
      </p>
    </div>
  </section>

  <!-- GALLERY GRID -->
  <section class="relative overflow-hidden py-20 lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(207,224,218,0.28),transparent_24%)]"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        <?php foreach ($gallery_images as $index => $image) : ?>
          <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#192F44]/10 bg-white shadow-[0_20px_44px_rgba(25,47,68,0.08)]">
            <div class="relative overflow-hidden">
              <img
                src="<?php echo esc_url($image['src']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>"
                class="rpc-gallery-image h-[320px] w-full object-cover"
              >

              <div class="absolute inset-0 bg-[linear-gradient(180deg,rgba(25,47,68,0.02)_0%,rgba(25,47,68,0.14)_100%)]"></div>

              <div class="absolute left-4 top-4">
                <span class="inline-flex items-center border border-white/20 bg-[#192F44]/88 px-3 py-1 text-[10px] font-black uppercase tracking-[0.16em] text-white backdrop-blur-sm">
                  <?php echo esc_html($image['label']); ?>
                </span>
              </div>

              <?php if (stripos($image['label'], 'Before / After') !== false) : ?>
                <div class="absolute inset-y-0 left-1/2 w-[2px] -translate-x-1/2 bg-white/70"></div>

                <span class="absolute left-4 bottom-4 bg-white/92 px-3 py-1 text-[10px] font-black uppercase tracking-[0.14em] text-[#192F44]">
                  Before
                </span>

                <span class="absolute right-4 bottom-4 bg-[#7DAD3F] px-3 py-1 text-[10px] font-black uppercase tracking-[0.14em] text-white">
                  After
                </span>
              <?php endif; ?>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="relative isolate overflow-hidden border-t border-[#192F44]/10 bg-white py-20 text-[#192F44] lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(35,100,118,0.08),transparent_28%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(125,173,63,0.10),transparent_30%)]"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <h2 class="ajs-reveal-up text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
        Request a Free Estimate
      </h2>

      <div class="ajs-reveal-up mt-8 flex flex-wrap items-center justify-center gap-3">
        <a href="/contact-us"
           class="rpc-gallery-btn rpc-gallery-btn-green inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          Request a Free Estimate
        </a>

        <a href="tel:+19092326602"
           class="rpc-gallery-btn rpc-gallery-btn-dark inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          (909) 232-6602
        </a>
      </div>

      <div class="rpc-gallery-swipe rpc-gallery-swipe-light mx-auto mt-10 max-w-2xl"></div>
    </div>
  </section>
</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap');

  .rpc-gallery-page {
    font-family: "Manrope", "Segoe UI", Arial, sans-serif;
  }

  .rpc-gallery-page h1,
  .rpc-gallery-page h2,
  .rpc-gallery-page h3 {
    font-family: "Space Grotesk", "Segoe UI", Arial, sans-serif;
  }

  .rpc-gallery-image {
    transition: transform .75s ease;
  }

  .group:hover .rpc-gallery-image {
    transform: scale(1.05);
  }

  .rpc-gallery-btn {
    position: relative;
    border: 1px solid transparent;
    transition: transform .22s ease, box-shadow .22s ease, background-color .22s ease, color .22s ease, border-color .22s ease;
    overflow: hidden;
  }

  .rpc-gallery-btn::after {
    content: "";
    position: absolute;
    inset: 0;
    transform: translateX(-110%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.22), transparent);
    transition: transform .6s ease;
  }

  .rpc-gallery-btn:hover::after {
    transform: translateX(110%);
  }

  .rpc-gallery-btn:hover {
    transform: translateY(-2px);
  }

  .rpc-gallery-btn-dark {
    background: #192F44;
    border-color: #192F44;
    box-shadow: 0 16px 34px rgba(25,47,68,0.18);
  }

  .rpc-gallery-btn-dark:hover {
    background: #236476;
    border-color: #236476;
  }

  .rpc-gallery-btn-green {
    background: #7DAD3F;
    border-color: #7DAD3F;
    box-shadow: 0 16px 34px rgba(125,173,63,0.22);
  }

  .rpc-gallery-btn-green:hover {
    background: #4A6C2F;
    border-color: #4A6C2F;
  }

  .rpc-gallery-swipe {
    height: 14px;
    width: 100%;
    background: linear-gradient(90deg, #192F44 0%, #236476 28%, #CFE0DA 55%, #7DAD3F 78%, #4A6C2F 100%);
    clip-path: polygon(0 35%, 7% 20%, 14% 40%, 22% 18%, 30% 42%, 38% 22%, 48% 50%, 56% 26%, 66% 46%, 76% 18%, 86% 42%, 94% 22%, 100% 36%, 100% 100%, 0 100%);
    opacity: 0.92;
    animation: rpcGallerySwipeShift 7s ease-in-out infinite alternate;
  }

  .rpc-gallery-swipe-light {
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

  @keyframes rpcGallerySwipeShift {
    0%   { transform: translateX(0) scaleX(1); }
    100% { transform: translateX(6px) scaleX(1.01); }
  }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-up,
    .ajs-reveal-left,
    .ajs-reveal-right,
    .ajs-reveal-stagger,
    .rpc-gallery-btn,
    .rpc-gallery-swipe,
    .rpc-gallery-image {
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