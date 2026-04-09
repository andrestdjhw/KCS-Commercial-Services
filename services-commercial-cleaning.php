<?php
/**
 * Template Name: Service - Commercial Cleaning
 *
 * Commercial Cleaning & Janitorial Services
 * KCS Commercial Services LLC
 * kcscommercial.com/services/commercial-cleaning/
 */

get_header(); ?>

<main class="kcs-svc-cleaning bg-[#F5F4EF] text-[#1B3A6B] overflow-hidden">

<?php
  /* ── Facilities ─────────────────────────────────────────────────── */
  $facilities = [
    [
      'title' => 'Office Buildings',
      'copy'  => 'Corporate campuses, multi-tenant buildings, and professional offices across Overland Park, Lenexa, and the I-435 corridor.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="0"/><path d="M3 9h18M9 21V9"/></svg>',
      'tone'  => '#1B3A6B',
    ],
    [
      'title' => 'Healthcare Facilities',
      'copy'  => 'Medical offices, clinics, and hospital adjacent facilities. Documented protocols that meet healthcare standards and keep your facility audit ready.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M12 8v8M8 12h8"/></svg>',
      'tone'  => '#244080',
    ],
    [
      'title' => 'Schools & Universities',
      'copy'  => 'K 12 districts and university campuses across Johnson County. Consistent service during the school year and deep cleaning during summer and break windows.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>',
      'tone'  => '#C9A84C',
    ],
    [
      'title' => 'Post-Construction Sites',
      'copy'  => 'Final clean for general contractors. We coordinate with your project timeline, work around other trades, and leave the site inspection ready.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
      'tone'  => '#A8882E',
    ],
    [
      'title' => 'Retail & Commercial',
      'copy'  => 'Retail centers, showrooms, and commercial spaces where presentation directly impacts customer experience and tenant retention.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>',
      'tone'  => '#1B3A6B',
    ],
    [
      'title' => 'Industrial & Flex',
      'copy'  => 'Distribution centers, warehouses, and flex spaces in Lenexa and Olathe. Scheduling built around your operations, not ours.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="0"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>',
      'tone'  => '#244080',
    ],
  ];

  /* ── Approach bullets ───────────────────────────────────────────── */
  $approach = [
    'Documented cleaning protocols for every facility type — not improvised',
    'Assigned teams that learn your space and your standards',
    'Quality checks and supervisory walkthroughs built into the schedule',
    '24-hour response to any service issue — no runaround',
    'Monthly check-ins with your facility manager or property contact',
    'Full compliance documentation for healthcare and education clients',
  ];

  /* ── Service options ────────────────────────────────────────────── */
  $service_options = [
    [
      'title' => 'Recurring Janitorial Contracts',
      'copy'  => '12 month agreements with renewal options. Daily, weekly, or custom frequency schedules built around your facility. The anchor service that opens the door to everything else we offer.',
      'tone'  => '#1B3A6B',
      'full'  => true,
    ],
    [
      'title' => 'Post-Construction Cleaning',
      'copy'  => 'One time or project based. We coordinate with your GC to schedule around the build timeline and deliver a site ready for inspection or occupancy.',
      'tone'  => '#244080',
      'full'  => false,
    ],
    [
      'title' => 'Deep Cleaning & Seasonal Services',
      'copy'  => 'Scheduled deep cleans for school summer breaks, healthcare turnovers, and commercial property transitions. For buildings that need a reset between tenants or seasons.',
      'tone'  => '#C9A84C',
      'full'  => false,
    ],
    [
      'title' => 'Compliance Cleaning',
      'copy'  => 'Documented protocol cleaning with traceable service records and compliance ready reports for facilities subject to regulatory inspection.',
      'tone'  => '#A8882E',
      'full'  => true,
    ],
  ];

  /* ── Form services ──────────────────────────────────────────────── */
  $form_services = [
    'Commercial Cleaning (Recurring)',
    'Post Construction Cleaning',
    'Deep Cleaning / Seasonal',
    'Compliance Cleaning',
    'Landscaping & Grounds',
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
      src="/wp-content/uploads/2026/04/CommercialCleaningService-scaled.jpg"
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
          Services &nbsp;·&nbsp; Commercial Cleaning
        </p>

        <h1 class="ajs-reveal-up mt-5 text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-6xl">
          Commercial Cleaning &amp; Janitorial Services in Kansas City
        </h1>

        <div class="mt-6 h-1 w-28 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>

        <p class="ajs-reveal-up mt-7 text-base leading-8 text-white/80 md:text-lg">
          Your building reflects your organization. When it is clean, consistent, and always ready tenants stay, visitors notice, and compliance audits pass without a call to you. When it is not, you spend your time chasing a vendor instead of managing your operation.
        </p>

        <p class="ajs-reveal-up mt-4 text-base leading-8 text-white/80 md:text-lg">
          KCS delivers institutional grade commercial cleaning across the KC metro so that conversation never happens.
        </p>

        <div class="ajs-reveal-up mt-9 flex flex-wrap gap-3">
          <a href="#contact-form" class="kcs-btn kcs-btn-gold inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em]">
            Request a Cleaning Contract
          </a>
          <a href="#service-options" class="kcs-btn kcs-btn-ghost inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
            View Service Options
          </a>
        </div>
      </div>

      <!-- Stat block -->
      <div class="ajs-reveal-right hidden lg:flex lg:flex-col lg:gap-3">
        <?php foreach ([
          ['val' => '24hr',  'label' => 'Response Guarantee'],
          ['val' => '12mo',  'label' => 'Contract Agreements'],
          ['val' => '100%',  'label' => 'Documented Protocols'],
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
     2. WHAT WE CLEAN — Facilities Grid
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-white py-20 lg:py-28">
  <div class="absolute right-0 top-0 h-full w-[28%] bg-[#C9A84C]/03"></div>

  <div class="relative mx-auto max-w-7xl px-4">

    <div class="ajs-reveal-up max-w-3xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">What We Clean</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B3A6B] md:text-5xl">
        Facilities We Serve Across the Kansas City Metro
      </h2>
      <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B3A6B,#C9A84C)]"></div>
    </div>

    <div class="mt-14 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
      <?php foreach ($facilities as $fac) : ?>
        <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#1B3A6B]/10 bg-[#F5F4EF] p-7 transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(27,58,107,0.10)]">

          <!-- Top tone bar -->
          <div class="absolute inset-x-0 top-0 h-[4px] transition-all duration-500 group-hover:h-[6px]"
            style="background:<?php echo esc_attr($fac['tone']); ?>;"></div>

          <!-- Icon -->
          <div class="mb-5 mt-2 flex h-11 w-11 items-center justify-center border border-[#1B3A6B]/10 transition-transform duration-500 group-hover:rotate-3 group-hover:scale-110"
            style="background:<?php echo esc_attr($fac['tone']); ?>;color:#fff;">
            <?php echo $fac['icon']; ?>
          </div>

          <h3 class="text-lg font-black leading-tight tracking-[-0.03em] text-[#1B3A6B]">
            <?php echo esc_html($fac['title']); ?>
          </h3>
          <p class="mt-3 text-[0.88rem] leading-7 text-[#1B3A6B]/65">
            <?php echo esc_html($fac['copy']); ?>
          </p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     3. OUR APPROACH
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#1B3A6B] py-20 text-white lg:py-28">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(201,168,76,0.10),transparent_40%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-14 xl:grid-cols-[1fr_1fr] xl:gap-20">

      <!-- Left: heading + intro -->
      <div class="ajs-reveal-left">
        <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Our Approach</p>
        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
          How We Deliver Consistent Results Every Visit
        </h2>
        <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>

        <p class="mt-7 text-base leading-8 text-white/76">
          Consistency is the hardest thing to maintain in this industry and the most important. KCS was built around the systems that keep quality steady from week one to year three: documented protocols, assigned teams, supervisory walkthroughs, and regular check ins with every client.
        </p>

        <div class="mt-8">
          <a href="#contact-form" class="kcs-btn kcs-btn-gold inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em]">
            Start a Contract →
          </a>
        </div>
      </div>

      <!-- Right: bullet list -->
      <div class="ajs-reveal-right">
        <ul class="space-y-0">
          <?php foreach ($approach as $i => $bullet) : ?>
            <li class="flex items-start gap-4 border-b border-white/08 py-5 last:border-0">
              <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center bg-[#C9A84C]/20 text-[0.65rem] font-black text-[#E8D49A]">
                <?php echo str_pad($i + 1, 2, '0', STR_PAD_LEFT); ?>
              </span>
              <span class="text-[0.92rem] leading-7 text-white/82">
                <?php echo esc_html($bullet); ?>
              </span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     4. SERVICE OPTIONS
═════════════════════════════════════════════════════════════════════ -->
<section id="service-options" class="relative overflow-hidden bg-[#F5F4EF] py-20 lg:py-28">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(201,168,76,0.07),transparent_28%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">

    <div class="ajs-reveal-up max-w-3xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Service Options</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B3A6B] md:text-5xl">
        Recurring Contracts &amp; One-Time Services
      </h2>
      <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B3A6B,#C9A84C)]"></div>
    </div>

    <!-- 2×2 grid — full-width items span both columns -->
    <div class="mt-14 grid gap-5 md:grid-cols-2">
      <?php foreach ($service_options as $opt) : ?>
        <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#1B3A6B]/10 bg-white p-8<?php echo $opt['full'] ? ' md:col-span-2' : ''; ?>">

          <div class="absolute inset-x-0 top-0 h-[5px] transition-all duration-500 group-hover:h-2"
            style="background:<?php echo esc_attr($opt['tone']); ?>;"></div>

          <?php if ($opt['full']) : ?>
            <!-- Wide layout -->
            <div class="grid gap-6 md:grid-cols-[1fr_auto] md:items-center">
              <div>
                <span class="inline-flex px-3 py-1 text-[0.62rem] font-black uppercase tracking-[0.14em] text-white"
                  style="background:<?php echo esc_attr($opt['tone']); ?>;">
                  <?php echo esc_html($opt['title']); ?>
                </span>
                <p class="mt-4 text-[0.92rem] leading-7 text-[#1B3A6B]/70">
                  <?php echo esc_html($opt['copy']); ?>
                </p>
              </div>
              <a href="#contact-form"
                class="shrink-0 inline-flex items-center gap-2 border border-[#1B3A6B]/15 bg-[#F5F4EF] px-5 py-3 text-sm font-black uppercase tracking-[0.10em] text-[#1B3A6B] transition hover:bg-[#1B3A6B] hover:text-[#E8D49A] hover:border-[#1B3A6B]">
                Get a Quote <span class="transition-transform group-hover:translate-x-1">→</span>
              </a>
            </div>
          <?php else : ?>
            <!-- Standard layout -->
            <span class="inline-flex px-3 py-1 text-[0.62rem] font-black uppercase tracking-[0.14em] text-white"
              style="background:<?php echo esc_attr($opt['tone']); ?>;">
              <?php echo esc_html($opt['title']); ?>
            </span>
            <p class="mt-4 text-[0.92rem] leading-7 text-[#1B3A6B]/70">
              <?php echo esc_html($opt['copy']); ?>
            </p>
          <?php endif; ?>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     5. CONTACT FORM
═════════════════════════════════════════════════════════════════════ -->
<section id="contact-form" class="relative overflow-hidden bg-white py-20 lg:py-28">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.06),transparent_30%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(27,58,107,0.04),transparent_32%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-14 lg:grid-cols-[1fr_520px]">

      <!-- Copy -->
      <div class="ajs-reveal-left flex flex-col justify-center">
        <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Request a Cleaning Contract</p>
        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B3A6B] md:text-5xl">
          Tell us about your facility.
        </h2>
        <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B3A6B,#C9A84C)]"></div>
        <p class="mt-6 max-w-md text-base leading-8 text-[#1B3A6B]/70">
          Tell us about your facility and what consistent cleaning looks like for your operation. We will put together a contract that fits.
        </p>

        <!-- Response promise -->
        <div class="mt-10 space-y-3">
          <?php foreach ([
            ['icon' => '⏱', 'text' => 'Response within 24 hours'],
            ['icon' => '📋', 'text' => 'Proposal within 48 hours of site visit'],
            ['icon' => '📍', 'text' => 'Serving Overland Park, Olathe, Lenexa & KC Metro'],
          ] as $promise) : ?>
            <div class="flex items-center gap-3 border border-[#1B3A6B]/08 bg-[#F5F4EF] px-5 py-4">
              <span class="text-xl"><?php echo $promise['icon']; ?></span>
              <span class="text-sm font-bold text-[#1B3A6B]/80"><?php echo esc_html($promise['text']); ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Form -->
      <div
        data-contact-form
        data-prefix="cl"
        data-eyebrow="Free Consultation"
        data-form-title="Request a Cleaning Contract"
        data-form-subtitle="We respond within 24 hours."
        data-btn-text="Request a Cleaning Contract →"
        data-service-default="Commercial Cleaning (Recurring)">
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     6. RELATED SERVICES FOOTER NAV
═════════════════════════════════════════════════════════════════════ -->
<section class="border-t border-[#1B3A6B]/10 bg-[#F5F4EF] py-14">
  <div class="mx-auto max-w-7xl px-4">
    <p class="mb-6 text-[0.7rem] font-black uppercase tracking-[0.22em] text-[#1B3A6B]/45">Other Services</p>
    <div class="grid gap-4 md:grid-cols-3">
      <?php
        $related = [
          ['title' => 'Landscaping & Grounds', 'href' => '/services/landscaping-grounds', 'tone' => '#244080'],
          ['title' => 'Drywall & Interior',    'href' => '/services/drywall-interior',    'tone' => '#C9A84C'],
          ['title' => 'Roofing & Siding',      'href' => '/services/roofing-siding',      'tone' => '#A8882E'],
        ];
        foreach ($related as $rel) :
      ?>
        <a href="<?php echo esc_url($rel['href']); ?>"
          class="kcs-related-link group flex items-center justify-between border border-[#1B3A6B]/10 bg-white px-6 py-5 transition hover:-translate-y-0.5 hover:shadow-[0_12px_28px_rgba(27,58,107,0.09)]">
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

  .kcs-svc-cleaning {
    font-family: "Montserrat", "Segoe UI", sans-serif;
  }
  .kcs-svc-cleaning h1,
  .kcs-svc-cleaning h2,
  .kcs-svc-cleaning h3 {
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

  /* ── Buttons ────────────────────────────────────────────────────── */
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

  /* ── Form ───────────────────────────────────────────────────────── */
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

  /* ── Scroll reveal ──────────────────────────────────────────────── */
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

  const form      = document.getElementById("kcsCleanForm")
  const submitBtn = document.getElementById("kcsCleanSubmitBtn")
  const successEl = document.getElementById("kcsCleanFormSuccess")
  const errorEl   = document.getElementById("kcsCleanFormError")

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
        name:    document.getElementById("cl_name").value,
        phone:   document.getElementById("cl_phone").value,
        email:   document.getElementById("cl_email").value,
        service: document.getElementById("cl_service").value,
        city:    document.getElementById("cl_city").value,
        message: document.getElementById("cl_details").value,
      }
    ).then(function () {
      form.reset()
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