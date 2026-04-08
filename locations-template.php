<?php
/**
 * Template Name: Service Areas Template
 *
 * Service Areas — KCS Commercial Services LLC
 * kcscommercial.com/locations/
 */

get_header(); ?>

<main class="kcs-locations-page bg-[#F5F4EF] text-[#1B3A6B] overflow-hidden">

<?php
  // Se actualizaron los href con links de búsqueda directa en Google Maps
  $locations = [
    [
      'city'    => 'Overland Park',
      'state'   => 'KS',
      'tier'    => 'Primary Market',
      'note'    => 'Highest institutional density · Healthcare & corporate hubs',
      'href'    => 'https://www.google.com/maps/search/?api=1&query=Overland+Park+KS+KCS+Commercial+Services',
      'map'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99259.4!2d-94.7!3d38.9!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0916aba29c561%3A0x60e1aba2ef9cca67!2sOverland%20Park%2C%20KS!5e0!3m2!1sen!2sus!4v1700000000001',
      'tone'    => '#1B3A6B',
    ],
    [
      'city'    => 'Olathe',
      'state'   => 'KS',
      'tier'    => 'Primary Market',
      'note'    => 'Healthcare corridor · School district hub',
      'href'    => 'https://www.google.com/maps/search/?api=1&query=Olathe+KS+KCS+Commercial+Services',
      'map'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99259.4!2d-94.82!3d38.88!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c09571b7c2e5c9%3A0x7b5b3b6b7b6b7b6b!2sOlathe%2C%20KS!5e0!3m2!1sen!2sus!4v1700000000002',
      'tone'    => '#1B3A6B',
    ],
    [
      'city'    => 'Lenexa',
      'state'   => 'KS',
      'tier'    => 'Primary Market',
      'note'    => 'Corporate parks · Commercial flex space',
      'href'    => 'https://www.google.com/maps/search/?api=1&query=Lenexa+KS+KCS+Commercial+Services',
      'map'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99259.4!2d-94.73!3d38.95!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0908c2ad5b6d3%3A0x9d3a3a3a3a3a3a3a!2sLenexa%2C%20KS!5e0!3m2!1sen!2sus!4v1700000000003',
      'tone'    => '#1B3A6B',
    ],
    [
      'city'    => 'Shawnee',
      'state'   => 'KS',
      'tier'    => 'Support Market',
      'note'    => 'Route support · Residential-commercial mix',
      'href'    => 'https://www.google.com/maps/search/?api=1&query=Shawnee+KS+KCS+Commercial+Services',
      'map'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99259.4!2d-94.71!3d39.02!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c08f9c9b9b9b9b%3A0x8b8b8b8b8b8b8b8b!2sShawnee%2C%20KS!5e0!3m2!1sen!2sus!4v1700000000004',
      'tone'    => '#243580',
    ],
    [
      'city'    => 'Kansas City',
      'state'   => 'KS',
      'tier'    => 'Support Market',
      'note'    => 'Commercial & industrial corridor',
      'href'    => 'https://www.google.com/maps/search/?api=1&query=Kansas+City+KS+KCS+Commercial+Services',
      'map'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99259.4!2d-94.63!3d39.11!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0f34a6b6b6b6b%3A0x6b6b6b6b6b6b6b6b!2sKansas%20City%2C%20KS!5e0!3m2!1sen!2sus!4v1700000000005',
      'tone'    => '#243580',
    ],
    [
      'city'    => 'Paola',
      'state'   => 'KS',
      'tier'    => 'Additional Market',
      'note'    => 'Selective service · High-ticket contracts',
      'href'    => 'https://www.google.com/maps/search/?api=1&query=Paola+KS+KCS+Commercial+Services',
      'map'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99259.4!2d-94.87!3d38.57!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c07b7b7b7b7b7b%3A0x7b7b7b7b7b7b7b7b!2sPaola%2C%20KS!5e0!3m2!1sen!2sus!4v1700000000006',
      'tone'    => '#C9A84C',
    ],
    [
      'city'    => 'Springfield',
      'state'   => 'MO',
      'tier'    => 'Independent Hub',
      'note'    => 'Second market · Standalone operations',
      'href'    => 'https://www.google.com/maps/search/?api=1&query=Springfield+MO+KCS+Commercial+Services',
      'map'     => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99259.4!2d-93.29!3d37.21!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87cf62f0f0f0f0f0%3A0xf0f0f0f0f0f0f0f0!2sSpringfield%2C%20MO!5e0!3m2!1sen!2sus!4v1700000000007',
      'tone'    => '#A8882E',
    ],
  ];

  /* tier badge colors */
  $tier_styles = [
    'Primary Market'    => ['bg' => '#1B3A6B', 'color' => '#E8D49A'],
    'Support Market'    => ['bg' => '#243580', 'color' => '#E8D49A'],
    'Additional Market' => ['bg' => '#C9A84C', 'color' => '#122649'],
    'Independent Hub'   => ['bg' => '#A8882E', 'color' => '#ffffff'],
  ];
?>

<section class="relative overflow-hidden bg-[#122649] py-16 text-white lg:py-24">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.12),transparent_36%)]"></div>

  <div class="relative mx-auto max-w-5xl px-4 text-center">
    <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.28em] text-[#C9A84C]">
      Service Area  ·  kcscommercial.com
    </p>

    <h1 class="ajs-reveal-up mt-5 text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-6xl lg:text-7xl">
      Commercial Building Services Across the Kansas City Metro
    </h1>

    <div class="mx-auto mt-6 h-1 w-28 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>

    <p class="ajs-reveal-up mx-auto mt-7 max-w-2xl text-base leading-8 text-white/80 md:text-lg">
      We serve where we can do it right. Our primary focus is the Johnson County corridor with an independent hub in Springfield, MO.
    </p>

    <div class="ajs-reveal-up mt-8 flex flex-wrap items-center justify-center gap-2">
      <?php foreach ($locations as $loc) : ?>
        <a href="<?php echo esc_url($loc['href']); ?>"
          target="_blank" rel="noopener noreferrer"
          class="kcs-badge-link inline-flex items-center gap-1.5 border border-white/14 bg-white/07 px-3 py-1.5 text-[0.68rem] font-black uppercase tracking-[0.12em] text-white/85 transition">
          <span class="block h-1.5 w-1.5 rounded-full bg-[#C9A84C]"></span>
          <?php echo esc_html($loc['city'] . ', ' . $loc['state']); ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="relative overflow-hidden py-20 lg:py-28">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.06),transparent_30%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">

    <div class="grid gap-6 md:grid-cols-2 xl:grid-cols-3">
      <?php foreach ($locations as $loc) :
        $ts = $tier_styles[$loc['tier']];
      ?>
        <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#1B3A6B]/10 bg-white shadow-[0_16px_40px_rgba(27,58,107,0.07)] transition hover:-translate-y-1 hover:shadow-[0_24px_50px_rgba(27,58,107,0.13)]">

          <div class="h-[5px] w-full transition-all duration-500 group-hover:h-2"
            style="background:<?php echo esc_attr($loc['tone']); ?>;"></div>

          <div class="relative overflow-hidden bg-[#e8ecf4]" style="height:200px;">
            <iframe
              title="<?php echo esc_attr($loc['city'] . ', ' . $loc['state']); ?> service area map"
              src="<?php echo esc_url($loc['map']); ?>"
              width="100%"
              height="200"
              style="border:0;display:block;filter:saturate(0.7) contrast(1.05);"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="pointer-events-none absolute inset-x-0 bottom-0 h-12 bg-[linear-gradient(transparent,rgba(255,255,255,0.5))]"></div>
          </div>

          <div class="p-6">

            <span class="inline-flex items-center px-3 py-1 text-[0.62rem] font-black uppercase tracking-[0.14em]"
              style="background:<?php echo esc_attr($ts['bg']); ?>;color:<?php echo esc_attr($ts['color']); ?>;">
              <?php echo esc_html($loc['tier']); ?>
            </span>

            <h2 class="mt-4 text-2xl font-black leading-tight tracking-[-0.03em] text-[#1B3A6B]">
              <?php echo esc_html($loc['city']); ?>
              <span class="text-[#1B3A6B]/45">, <?php echo esc_html($loc['state']); ?></span>
            </h2>

            <p class="mt-2 text-[0.82rem] leading-6 text-[#1B3A6B]/60">
              <?php echo esc_html($loc['note']); ?>
            </p>

            <div class="my-5 h-px bg-[#1B3A6B]/08"></div>

            <ul class="space-y-1.5">
              <?php foreach (['Commercial Cleaning', 'Landscaping & Grounds', 'Drywall & Interior', 'Roofing & Siding'] as $svc) : ?>
                <li class="flex items-center gap-2 text-[0.78rem] font-semibold text-[#1B3A6B]/70">
                  <span class="h-1.5 w-1.5 shrink-0 rotate-45"
                    style="background:<?php echo esc_attr($loc['tone']); ?>;"></span>
                  <?php echo esc_html($svc); ?>
                </li>
              <?php endforeach; ?>
            </ul>

            <a href="<?php echo esc_url($loc['href']); ?>"
              target="_blank" rel="noopener noreferrer"
              class="kcs-card-cta mt-6 flex w-full items-center justify-between border border-[#1B3A6B]/12 bg-[#F5F4EF] px-4 py-3 text-sm font-black uppercase tracking-[0.10em] text-[#1B3A6B] transition">
              <span>View on Google Maps</span>
              <span class="kcs-arrow transition-transform duration-300">→</span>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="border-t border-[#1B3A6B]/10 bg-white py-20 lg:py-28">
  <div class="mx-auto max-w-7xl px-4">

    <div class="ajs-reveal-up max-w-3xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Full Coverage Area</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B3A6B] md:text-5xl">
        KC Metro & Springfield, MO
      </h2>
      <p class="mt-4 max-w-xl text-base leading-7 text-[#1B3A6B]/65">
        Our primary concentration is the Overland Park Lenexa Olathe corridor in Johnson County. We extend into Shawnee, Kansas City KS, Paola, and operate a standalone hub in Springfield, MO.
      </p>
    </div>

    <div class="ajs-reveal-up mt-10 overflow-hidden border border-[#1B3A6B]/10 shadow-[0_20px_50px_rgba(27,58,107,0.10)]">
      <iframe
        title="KCS Commercial Services full service area — Kansas City Metro"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d396000!2d-94.5!3d38.9!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0916aba29c561%3A0x60e1aba2ef9cca67!2sJohnson%20County%2C%20KS!5e0!3m2!1sen!2sus!4v1700000000099"
        width="100%"
        height="480"
        style="border:0;display:block;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>

<section class="relative overflow-hidden bg-[#122649] py-20 text-white lg:py-24">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(201,168,76,0.10),transparent_35%)]"></div>

  <div class="relative mx-auto max-w-4xl px-4 text-center">
    <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">
      Serving Your Area
    </p>
    <h2 class="ajs-reveal-up mt-5 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
      Ready to Get a Quote for Your Facility?
    </h2>
    <div class="mx-auto mt-5 h-1 w-24 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>
    <p class="ajs-reveal-up mx-auto mt-6 max-w-xl text-base leading-8 text-white/76">
      Tell us your location and what your building needs. We respond within 24 hours.
    </p>

    <div class="ajs-reveal-up mt-8 flex flex-wrap items-center justify-center gap-4">
      <a href="/contact-us"
        class="kcs-btn kcs-btn-gold inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em]">
        Request a Contract Quote
      </a>
      <a href="tel:#"
        class="kcs-btn kcs-btn-ghost inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
        Call Us Directly
      </a>
    </div>

    <div class="kcs-swipe mx-auto mt-10 max-w-2xl"></div>
  </div>
</section>

</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap');

  .kcs-locations-page {
    font-family: "Montserrat", "Segoe UI", sans-serif;
  }
  
  .kcs-card-cta { transition: background .2s ease, border-color .2s ease; }
  .kcs-card-cta:hover {
    background: #1B3A6B;
    color: #E8D49A;
    border-color: #1B3A6B;
  }
  .kcs-card-cta:hover .kcs-arrow { transform: translateX(4px); }

  .kcs-badge-link:hover {
    background: rgba(201,168,76,0.18);
    border-color: rgba(201,168,76,0.40);
    color: #fff;
  }

  .kcs-btn {
    position: relative; border: 1px solid transparent; overflow: hidden;
    transition: transform .22s ease, box-shadow .22s ease,
                background .22s ease, border-color .22s ease, color .22s ease;
  }
  .kcs-btn::after {
    content: ""; position: absolute; inset: 0;
    transform: translateX(-115%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: transform .65s ease;
  }
  .kcs-btn:hover::after { transform: translateX(115%); }
  .kcs-btn:hover        { transform: translateY(-2px); }

  .kcs-btn-gold {
    background: linear-gradient(135deg, #C9A84C, #A8882E);
    border-color: #C9A84C;
    box-shadow: 0 16px 34px rgba(201,168,76,0.28);
    color: #122649;
  }
  .kcs-btn-gold:hover {
    background: linear-gradient(135deg, #E8D49A, #C9A84C);
    box-shadow: 0 20px 44px rgba(201,168,76,0.38);
  }
  .kcs-btn-ghost {
    background: rgba(255,255,255,0.07);
    border-color: rgba(255,255,255,0.18);
  }
  .kcs-btn-ghost:hover {
    background: rgba(255,255,255,0.14);
    border-color: rgba(255,255,255,0.28);
  }

  .kcs-swipe {
    height: 12px;
    background: linear-gradient(90deg, #1B3A6B 0%, #C9A84C 35%, #E8D49A 55%, #C9A84C 78%, #A8882E 100%);
    clip-path: polygon(0 35%,7% 20%,14% 40%,22% 18%,30% 42%,38% 22%,48% 50%,56% 26%,66% 46%,76% 18%,86% 42%,94% 22%,100% 36%,100% 100%,0 100%);
    opacity: 0.85;
  }

  .ajs-reveal-up,
  .ajs-reveal-left,
  .ajs-reveal-right,
  .ajs-reveal-stagger {
    opacity: 0; will-change: opacity, transform;
    transition: opacity .85s ease, transform .85s ease;
  }
  .ajs-reveal-up      { transform: translateY(34px); }
  .ajs-reveal-left    { transform: translateX(-36px); }
  .ajs-reveal-right   { transform: translateX(36px); }
  .ajs-reveal-stagger { transform: translateY(28px); }

  .ajs-reveal-up.is-visible,
  .ajs-reveal-left.is-visible,
  .ajs-reveal-right.is-visible,
  .ajs-reveal-stagger.is-visible {
    opacity: 1; transform: translate(0,0);
  }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-up, .ajs-reveal-left, .ajs-reveal-right,
    .ajs-reveal-stagger, .kcs-btn, .kcs-card-cta {
      opacity: 1 !important; transform: none !important;
      transition: none !important; animation: none !important;
    }
  }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(
    ".ajs-reveal-up, .ajs-reveal-left, .ajs-reveal-right, .ajs-reveal-stagger"
  )
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, idx) => {
      if (entry.isIntersecting) {
        const delay = entry.target.classList.contains("ajs-reveal-stagger") ? (idx % 7) * 80 : 0
        setTimeout(() => entry.target.classList.add("is-visible"), delay)
      }
    })
  }, { threshold: 0.10 })
  items.forEach(el => observer.observe(el))
})
</script>

<?php get_footer(); ?>