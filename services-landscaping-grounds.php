<?php
/**
 * Template Name: Service - Landscaping & Grounds
 *
 * Commercial Landscaping & Grounds Maintenance
 * KCS Commercial Services LLC
 * kcscommercial.com/services/landscaping-grounds/
 */

get_header(); ?>

<main class="kcs-svc-grounds bg-[#F5F4EF] text-[#1B3A6B] overflow-hidden">

<?php
  /* ── Services ───────────────────────────────────────────────────── */
  $grounds_services = [
    [
      'title' => 'Lawn Maintenance',
      'copy'  => 'Regular mowing, edging, trimming, and cleanup for commercial properties. Scheduled service that keeps your grounds consistently presentable without gaps.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
      'tone'  => '#1B3A6B',
    ],
    [
      'title' => 'Seasonal Planting & Care',
      'copy'  => 'Seasonal color rotations, mulching, shrub trimming, and plant care to keep the property looking intentional year round.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22V12"/><path d="M5 3a9 9 0 0 0 0 18h7"/><path d="M12 12C12 7 17 3 22 3c0 5-4 9-10 9z"/></svg>',
      'tone'  => '#244080',
    ],
    [
      'title' => 'Hardscaping',
      'copy'  => 'Walkways, patios, retaining walls, and decorative concrete for commercial properties across Overland Park, Lenexa, and Olathe.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg>',
      'tone'  => '#C9A84C',
    ],
    [
      'title' => 'Snow & Ice Removal',
      'copy'  => 'Seasonal snow removal and ice treatment for parking lots, walkways, and building entries across the KC metro December through February.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="2" x2="12" y2="22"/><path d="m20 6-8 4-8-4"/><path d="m20 18-8-4-8 4"/><path d="m2 12 8-4 8 4"/></svg>',
      'tone'  => '#A8882E',
    ],
    [
      'title' => 'Irrigation Management',
      'copy'  => 'Irrigation monitoring, seasonal startup and shutdown, and basic maintenance to keep your system efficient and your grounds properly hydrated.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a10 10 0 0 1 10 10c0 5.5-10 12-10 12S2 17.5 2 12A10 10 0 0 1 12 2z"/><circle cx="12" cy="12" r="3"/></svg>',
      'tone'  => '#1B3A6B',
    ],
    [
      'title' => 'Portfolio Consolidation',
      'copy'  => 'Managing grounds for five properties with five vendors is where most operations fall apart. We handle multi property portfolios with one contact and one standard across every site.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="0"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>',
      'tone'  => '#244080',
    ],
  ];

  /* ── Who we serve ───────────────────────────────────────────────── */
  $clients = [
    [
      'title' => 'Property Managers',
      'copy'  => 'Multiple assets across Johnson County. You need a grounds crew that shows up on schedule, maintains the same standard at every property, and does not require follow up. That is the contract we build.',
      'tone'  => '#1B3A6B',
    ],
    [
      'title' => 'Corporate Campuses & Institutions',
      'copy'  => 'Hospitals, schools, and corporate headquarters where the exterior is the first thing every employee, patient, and visitor sees. We treat the grounds as part of the brand not just a maintenance task.',
      'tone'  => '#C9A84C',
    ],
  ];

  /* ── Form services ──────────────────────────────────────────────── */
  $form_services = [
    'Landscaping & Grounds',
    'Lawn Maintenance',
    'Snow & Ice Removal',
    'Portfolio Consolidation',
    'Commercial Cleaning (Recurring)',
    'Drywall & Interior',
    'Roofing & Siding',
    'Multiple Services',
  ];
?>

<!-- ════════════════════════════════════════════════════════════════════
     1. HERO
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#122649] py-20 text-white lg:py-28">

  <!-- Background image -->
  <div class="absolute inset-0">
    <img
      src="/wp-content/uploads/2026/04/LandscapingGroundsKCS-scaled.jpg"
      alt="" aria-hidden="true"
      class="kcs-hero-bg-img h-full w-full object-cover object-center"
    >
    <div class="absolute inset-0" style="background:linear-gradient(135deg,rgba(18,38,73,0.88) 0%,rgba(27,58,107,0.80) 50%,rgba(18,38,73,0.88) 100%);"></div>
  </div>

  <div class="absolute inset-0 opacity-[0.04]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.12),transparent_38%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(36,64,128,0.55),transparent_45%)]"></div>
  <div class="absolute left-0 top-0 h-full w-[5px] bg-[linear-gradient(180deg,#C9A84C,rgba(201,168,76,0.2),#C9A84C)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-10 lg:grid-cols-[1fr_auto] lg:items-start">

      <div class="max-w-3xl">
        <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.28em] text-[#C9A84C]">
          Services &nbsp;·&nbsp; Landscaping & Grounds
        </p>

        <h1 class="ajs-reveal-up mt-5 text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-6xl">
          Commercial Landscaping &amp; Grounds Maintenance Kansas City Metro
        </h1>

        <div class="mt-6 h-1 w-28 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>

        <p class="ajs-reveal-up mt-7 text-base leading-8 text-white/80 md:text-lg">
          A well maintained exterior tells tenants, visitors, and prospective clients something about the organization inside. It signals that standards are held, that details matter, and that someone is accountable for the property.
        </p>
        <p class="ajs-reveal-up mt-4 text-base leading-8 text-white/80 md:text-lg">
          KCS manages commercial grounds across the KC metro so that signal is always the right one without you managing another vendor to make it happen.
        </p>

        <div class="ajs-reveal-up mt-9 flex flex-wrap gap-3">
          <a href="#contact-form" class="kcs-btn kcs-btn-gold inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em]">
            Request a Grounds Contract
          </a>
          <a href="#what-we-maintain" class="kcs-btn kcs-btn-ghost inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
            View Services
          </a>
        </div>
      </div>

      <!-- Stat block -->
      <div class="ajs-reveal-right hidden lg:flex lg:flex-col lg:gap-3">
        <?php foreach ([
          ['val' => '12mo',  'label' => 'Contract Agreements'],
          ['val' => '1',     'label' => 'Point of Contact'],
          ['val' => 'KC+',   'label' => 'Metro Coverage'],
        ] as $stat) : ?>
          <div class="border border-white/10 bg-white/06 px-8 py-6 text-center backdrop-blur-sm">
            <span class="block font-black text-[2.6rem] leading-none tracking-[-0.04em] text-[#C9A84C]">
              <?php echo esc_html($stat['val']); ?>
            </span>
            <span class="mt-1.5 block text-[0.66rem] font-black uppercase tracking-[0.16em] text-white/65">
              <?php echo esc_html($stat['label']); ?>
            </span>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     2. WHAT WE MAINTAIN
═════════════════════════════════════════════════════════════════════ -->
<section id="what-we-maintain" class="relative overflow-hidden bg-white py-20 lg:py-28">
  <div class="absolute right-0 top-0 h-full w-[28%] bg-[#C9A84C]/03"></div>

  <div class="relative mx-auto max-w-7xl px-4">

    <div class="ajs-reveal-up max-w-3xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">What We Maintain</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B3A6B] md:text-5xl">
        Commercial Grounds Services for KC Metro Properties
      </h2>
      <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B3A6B,#C9A84C)]"></div>
    </div>

    <div class="mt-14 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
      <?php foreach ($grounds_services as $svc) : ?>
        <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#1B3A6B]/10 bg-[#F5F4EF] p-7 transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(27,58,107,0.10)]">

          <div class="absolute inset-x-0 top-0 h-[4px] transition-all duration-500 group-hover:h-[6px]"
            style="background:<?php echo esc_attr($svc['tone']); ?>;"></div>

          <div class="mb-5 mt-2 flex h-11 w-11 items-center justify-center border border-[#1B3A6B]/10 text-white transition-transform duration-500 group-hover:rotate-3 group-hover:scale-110"
            style="background:<?php echo esc_attr($svc['tone']); ?>;">
            <?php echo $svc['icon']; ?>
          </div>

          <h3 class="text-lg font-black leading-tight tracking-[-0.03em] text-[#1B3A6B]">
            <?php echo esc_html($svc['title']); ?>
          </h3>
          <p class="mt-3 text-[0.88rem] leading-7 text-[#1B3A6B]/65">
            <?php echo esc_html($svc['copy']); ?>
          </p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     3. WHO WE SERVE
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#1B3A6B] py-20 text-white lg:py-28">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(201,168,76,0.10),transparent_40%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">

    <div class="ajs-reveal-up max-w-3xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Who We Serve</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
        Built for Institutional and Commercial Property Owners
      </h2>
      <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>
    </div>

    <div class="mt-14 grid gap-6 md:grid-cols-2">
      <?php foreach ($clients as $client) : ?>
        <article class="ajs-reveal-stagger group relative overflow-hidden border border-white/10 bg-white/06 p-8 backdrop-blur-sm transition hover:bg-white/10">
          <div class="absolute inset-x-0 bottom-0 h-[3px] opacity-0 transition-opacity duration-400 group-hover:opacity-100"
            style="background:<?php echo esc_attr($client['tone']); ?>;"></div>

          <!-- Tone accent square -->
          <div class="mb-5 flex gap-2">
            <span class="h-8 w-8 border border-white/10 transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110"
              style="background:<?php echo esc_attr($client['tone']); ?>;"></span>
            <span class="h-8 w-8 border border-white/10 bg-white/10 transition-transform duration-500 group-hover:-rotate-6 group-hover:scale-110"></span>
          </div>

          <h3 class="text-xl font-black tracking-[-0.03em]">
            <?php echo esc_html($client['title']); ?>
          </h3>
          <p class="mt-4 text-[0.92rem] leading-7 text-white/72">
            <?php echo esc_html($client['copy']); ?>
          </p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     4. CONTACT FORM
═════════════════════════════════════════════════════════════════════ -->
<section id="contact-form" class="relative overflow-hidden bg-white py-20 lg:py-28">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.06),transparent_30%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(27,58,107,0.04),transparent_32%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-14 lg:grid-cols-[1fr_520px]">

      <!-- Copy -->
      <div class="ajs-reveal-left flex flex-col justify-center">
        <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Request a Grounds Maintenance Contract</p>
        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B3A6B] md:text-5xl">
          Tell us about your property.
        </h2>
        <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B3A6B,#C9A84C)]"></div>
        <p class="mt-6 max-w-md text-base leading-8 text-[#1B3A6B]/70">
          Tell us about your property and what you need covered. We will build a contract that keeps your grounds consistently presentable.
        </p>

        <!-- Service coverage quick list -->
        <ul class="mt-10 space-y-3">
          <?php foreach ($grounds_services as $svc) : ?>
            <li class="flex items-center gap-3 text-[0.88rem] font-bold text-[#1B3A6B]/80">
              <span class="h-2 w-2 shrink-0 rotate-45"
                style="background:<?php echo esc_attr($svc['tone']); ?>;"></span>
              <?php echo esc_html($svc['title']); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Form -->
      <div
        data-contact-form
        data-prefix="gr"
        data-eyebrow="Free Consultation"
        data-form-title="Request a Grounds Contract"
        data-form-subtitle="We respond within 24 hours."
        data-btn-text="Request a Grounds Contract →"
        data-service-default="Landscaping & Grounds">
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     5. RELATED SERVICES
═════════════════════════════════════════════════════════════════════ -->
<section class="border-t border-[#1B3A6B]/10 bg-[#F5F4EF] py-14">
  <div class="mx-auto max-w-7xl px-4">
    <p class="mb-6 text-[0.7rem] font-black uppercase tracking-[0.22em] text-[#1B3A6B]/45">Other Services</p>
    <div class="grid gap-4 md:grid-cols-3">
      <?php foreach ([
        ['title' => 'Commercial Cleaning', 'href' => '/services/commercial-cleaning', 'tone' => '#1B3A6B'],
        ['title' => 'Drywall & Interior',  'href' => '/services/drywall-interior',    'tone' => '#C9A84C'],
        ['title' => 'Roofing & Siding',    'href' => '/services/roofing-siding',      'tone' => '#A8882E'],
      ] as $rel) : ?>
        <a href="<?php echo esc_url($rel['href']); ?>"
          class="group flex items-center justify-between border border-[#1B3A6B]/10 bg-white px-6 py-5 transition hover:-translate-y-0.5 hover:shadow-[0_12px_28px_rgba(27,58,107,0.09)]">
          <div class="flex items-center gap-3">
            <span class="h-9 w-[4px] shrink-0 transition-all duration-400 group-hover:h-10"
              style="background:<?php echo esc_attr($rel['tone']); ?>;"></span>
            <span class="text-sm font-black uppercase tracking-[0.08em] text-[#1B3A6B]">
              <?php echo esc_html($rel['title']); ?>
            </span>
          </div>
          <span class="text-[#C9A84C] transition-transform duration-300 group-hover:translate-x-1">→</span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap');

  .kcs-svc-grounds {
    font-family: "Montserrat", "Segoe UI", sans-serif;
  }
  .kcs-svc-grounds h1,
  .kcs-svc-grounds h2,
  .kcs-svc-grounds h3 {
    font-family: "Montserrat", "Segoe UI", sans-serif;
  }

  /* ── Hero background image ──────────────────────────────────────── */
  .kcs-hero-bg-img {
    animation: kcsHeroBgZoom 16s ease-out forwards;
    transform: scale(1.06);
  }

  @keyframes kcsHeroBgZoom {
    0%   { transform: scale(1.08); }
    100% { transform: scale(1.00); }
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

  .kcs-label {
    display: block; margin-bottom: 0.45rem;
    font-size: 0.7rem; font-weight: 800;
    text-transform: uppercase; letter-spacing: 0.16em;
    color: rgba(255,255,255,0.65);
  }
  .kcs-input {
    width: 100%; padding: 0.9rem 1rem;
    border: 1px solid rgba(255,255,255,0.14);
    background: rgba(255,255,255,0.07);
    color: #fff; font-size: 0.92rem; line-height: 1.5;
    font-family: inherit; outline: none; appearance: none;
    transition: border-color .22s ease, box-shadow .22s ease, background .22s ease;
  }
  .kcs-input::placeholder { color: rgba(255,255,255,0.32); }
  .kcs-input:focus {
    border-color: #C9A84C;
    box-shadow: 0 0 0 3px rgba(201,168,76,0.18);
    background: rgba(255,255,255,0.10);
  }
  .kcs-textarea  { resize: vertical; min-height: 100px; }
  .kcs-input option { background: #1B3A6B; color: #fff; }

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

  .hidden { display: none !important; }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-up, .ajs-reveal-left, .ajs-reveal-right,
    .ajs-reveal-stagger, .kcs-btn {
      opacity: 1 !important; transform: none !important;
      transition: none !important; animation: none !important;
    }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {

  /* ── Scroll reveal ──────────────────────────────────────────────── */
  const items = document.querySelectorAll(
    ".ajs-reveal-up, .ajs-reveal-left, .ajs-reveal-right, .ajs-reveal-stagger"
  )
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, idx) => {
      if (entry.isIntersecting) {
        const delay = entry.target.classList.contains("ajs-reveal-stagger") ? (idx % 6) * 70 : 0
        setTimeout(() => entry.target.classList.add("is-visible"), delay)
      }
    })
  }, { threshold: 0.10 })
  items.forEach(el => observer.observe(el))

  /* ── EmailJS ────────────────────────────────────────────────────── */
  if (window.emailjs) {
    emailjs.init({ publicKey: "CDikedp0ZSxxiBeLb" }) // replace with KCS key
  }

  const form      = document.getElementById("kcsGrnForm")
  const submitBtn = document.getElementById("kcsGrnSubmitBtn")
  const successEl = document.getElementById("kcsGrnFormSuccess")
  const errorEl   = document.getElementById("kcsGrnFormError")

  if (!form) return

  form.addEventListener("submit", function (e) {
    e.preventDefault()
    successEl.classList.add("hidden")
    errorEl.classList.add("hidden")

    const originalText    = submitBtn.textContent
    submitBtn.disabled    = true
    submitBtn.textContent = "Sending..."

    emailjs.send(
      "service_a03f0zf",   // replace with KCS EmailJS service ID
      "template_17g32zt",  // replace with KCS EmailJS template ID
      {
        name:    document.getElementById("gr_name").value,
        phone:   document.getElementById("gr_phone").value,
        email:   document.getElementById("gr_email").value,
        service: document.getElementById("gr_service").value,
        city:    document.getElementById("gr_city").value,
        message: document.getElementById("gr_details").value,
      }
    ).then(function () {
      form.reset()
      // Re-select default after reset
      document.getElementById("gr_service").value = "Landscaping & Grounds"
      successEl.classList.remove("hidden")
      submitBtn.disabled    = false
      submitBtn.textContent = originalText
      successEl.scrollIntoView({ behavior: "smooth", block: "center" })
    }).catch(function (err) {
      console.error("EmailJS error:", err)
      errorEl.classList.remove("hidden")
      submitBtn.disabled    = false
      submitBtn.textContent = originalText
    })
  })
})
</script>

<?php get_footer(); ?>