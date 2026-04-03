<?php
/**
 * Template Name: Service - Roofing & Siding
 *
 * Commercial Roofing & Siding
 * KCS Commercial Services LLC
 * kcscommercial.com/services/roofing-siding/
 */

get_header(); ?>

<main class="kcs-svc-roofing bg-[#F5F4EF] text-[#1B3A6B] overflow-hidden">

<?php
  /* ── Services ───────────────────────────────────────────────────── */
  $roofing_services = [
    [
      'title'    => 'Roof Replacement',
      'copy'     => 'Full commercial roof replacement for flat, low-slope, and pitched roofs across the KC metro. We work with property managers, building owners, and insurance carriers to scope and deliver the project.',
      'tone'     => '#1B3A6B',
      'featured' => true,
      'icon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
    ],
    [
      'title'    => 'Roof Repair',
      'copy'     => 'Emergency and scheduled repairs for commercial roofs showing leaks, ponding water, membrane damage, or material failure. Fast response to prevent interior damage and protect the asset.',
      'tone'     => '#244080',
      'featured' => false,
      'icon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
    ],
    [
      'title'    => 'Hail & Storm Damage Response',
      'copy'     => 'Kansas City sees significant hail events regularly. When a storm hits, we assess the damage quickly, document it for your insurance claim, and execute repair or replacement on a timeline that works.',
      'tone'     => '#C9A84C',
      'featured' => false,
      'icon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"/><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"/><line x1="2" y1="12" x2="6" y2="12"/><line x1="18" y1="12" x2="22" y2="12"/><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"/><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"/></svg>',
    ],
    [
      'title'    => 'Siding Installation & Replacement',
      'copy'     => 'Commercial siding removal and installation for buildings needing exterior envelope updates, storm damage repair, or aesthetic improvements.',
      'tone'     => '#A8882E',
      'featured' => false,
      'icon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="0"/><path d="M3 8h18M3 13h18M3 18h18"/></svg>',
    ],
    [
      'title'    => 'Exterior Envelope Assessment',
      'copy'     => 'Pre-season or post-storm inspections for property portfolios. We assess roof and siding condition and deliver a clear report with prioritized recommendations.',
      'tone'     => '#1B3A6B',
      'featured' => false,
      'icon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>',
    ],
    [
      'title'    => 'Insurance Coordination',
      'copy'     => 'We work alongside your insurance adjuster to ensure damage is properly documented and the scope reflects the actual condition of the roof.',
      'tone'     => '#244080',
      'featured' => false,
      'icon'     => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    ],
  ];

  /* ── KC Metro Advantage bullets ─────────────────────────────────── */
  $advantages = [
    'We know your property before the storm hits',
    'Same-day assessment response for existing clients',
    'Full documentation for insurance carrier coordination',
    'No subcontracting layers — our crew, our accountability',
    'Available across Overland Park, Olathe, Lenexa, Shawnee, and KC metro',
  ];

  /* ── Form services ──────────────────────────────────────────────── */
  $form_services = [
    'Roofing & Siding',
    'Roof Replacement',
    'Roof Repair (Emergency)',
    'Hail & Storm Damage Response',
    'Siding Installation & Replacement',
    'Exterior Envelope Assessment',
    'Insurance Coordination',
    'Commercial Cleaning (Recurring)',
    'Landscaping & Grounds',
    'Drywall & Interior',
    'Multiple Services',
  ];
?>

<!-- ════════════════════════════════════════════════════════════════════
     1. HERO
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#122649] py-20 text-white lg:py-28">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.12),transparent_38%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(36,64,128,0.55),transparent_45%)]"></div>

  <div class="absolute left-0 top-0 h-full w-[5px] bg-[linear-gradient(180deg,#C9A84C,rgba(201,168,76,0.2),#C9A84C)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-10 lg:grid-cols-[1fr_auto] lg:items-start">

      <div class="max-w-3xl">
        <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.28em] text-[#C9A84C]">
          Services &nbsp;·&nbsp; Roofing & Siding
        </p>

        <h1 class="ajs-reveal-up mt-5 text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-6xl">
          Commercial Roofing &amp; Siding — Kansas City Metro
        </h1>

        <div class="mt-6 h-1 w-28 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>

        <p class="ajs-reveal-up mt-7 text-base leading-8 text-white/80 md:text-lg">
          Kansas City weather is hard on commercial roofs. When a hail storm moves through or a roof reaches the end of its serviceable life, the last thing a property manager needs is to start searching for a roofing contractor they have never worked with — under time pressure, with an asset at risk.
        </p>
        <p class="ajs-reveal-up mt-4 text-base leading-8 text-white/80 md:text-lg">
          If KCS already manages your building, we already know it. We respond fast, assess accurately, and get the work done without turning a roofing issue into an operational crisis.
        </p>

        <div class="ajs-reveal-up mt-9 flex flex-wrap gap-3">
          <a href="#contact-form" class="kcs-btn kcs-btn-gold inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em]">
            Request a Roofing Estimate
          </a>
          <a href="#what-we-do" class="kcs-btn kcs-btn-ghost inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
            View Services
          </a>
        </div>

        <!-- Emergency CTA strip -->
        <div class="ajs-reveal-up mt-6 flex items-center gap-4 border border-[#C9A84C]/30 bg-[#C9A84C]/10 px-5 py-4">
          <span class="text-xl">⚡</span>
          <div>
            <span class="block text-[0.68rem] font-black uppercase tracking-[0.16em] text-[#C9A84C]">Storm Damage? Emergency Response</span>
            <a href="tel:#" class="mt-0.5 block text-sm font-black text-white transition hover:text-[#E8D49A]">
              Call us directly — [Phone Number]
            </a>
          </div>
        </div>
      </div>

      <!-- Stat block -->
      <div class="ajs-reveal-right hidden lg:flex lg:flex-col lg:gap-3">
        <?php foreach ([
          ['val' => '24hr',  'label' => 'Response Guarantee'],
          ['val' => 'Same',  'label' => 'Day for Existing Clients'],
          ['val' => 'Zero',  'label' => 'Subcontracting Layers'],
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
     2. WHAT WE DO — Services
═════════════════════════════════════════════════════════════════════ -->
<section id="what-we-do" class="relative overflow-hidden bg-white py-20 lg:py-28">
  <div class="absolute right-0 top-0 h-full w-[28%] bg-[#C9A84C]/03"></div>

  <div class="relative mx-auto max-w-7xl px-4">

    <div class="ajs-reveal-up max-w-3xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">What We Do</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B3A6B] md:text-5xl">
        Commercial Roofing &amp; Exterior Services
      </h2>
      <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B3A6B,#C9A84C)]"></div>
    </div>

    <div class="mt-14 space-y-5">

      <!-- Roof Replacement — featured full-width -->
      <?php $featured = $roofing_services[0]; ?>
      <article class="ajs-reveal-up group relative overflow-hidden border border-[#1B3A6B]/10 bg-[#F5F4EF]">
        <div class="absolute inset-x-0 top-0 h-[5px] transition-all duration-500 group-hover:h-2"
          style="background:<?php echo esc_attr($featured['tone']); ?>;"></div>

        <div class="grid gap-0 md:grid-cols-[auto_1fr]">
          <div class="flex items-center justify-center border-b border-[#1B3A6B]/08 bg-[#1B3A6B] px-10 py-10 md:border-b-0 md:border-r">
            <div class="flex h-16 w-16 items-center justify-center text-[#C9A84C]">
              <?php echo $featured['icon']; ?>
            </div>
          </div>
          <div class="p-8 md:p-10">
            <span class="inline-flex px-3 py-1 text-[0.62rem] font-black uppercase tracking-[0.14em] text-[#E8D49A]"
              style="background:<?php echo esc_attr($featured['tone']); ?>;">
              Core Service
            </span>
            <h3 class="mt-4 text-2xl font-black leading-tight tracking-[-0.03em] text-[#1B3A6B]">
              <?php echo esc_html($featured['title']); ?>
            </h3>
            <p class="mt-3 max-w-3xl text-[0.92rem] leading-7 text-[#1B3A6B]/68">
              <?php echo esc_html($featured['copy']); ?>
            </p>
          </div>
        </div>
      </article>

      <!-- Remaining 5 services — 2-col then 3-col -->
      <div class="grid gap-5 md:grid-cols-2 xl:grid-cols-3">
        <?php foreach (array_slice($roofing_services, 1) as $svc) : ?>
          <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#1B3A6B]/10 bg-[#F5F4EF] p-7 transition hover:-translate-y-1 hover:shadow-[0_20px_44px_rgba(27,58,107,0.10)]">

            <div class="absolute inset-x-0 top-0 h-[4px] transition-all duration-500 group-hover:h-[6px]"
              style="background:<?php echo esc_attr($svc['tone']); ?>;"></div>

            <div class="mb-5 mt-2 flex h-11 w-11 items-center justify-center text-white transition-transform duration-500 group-hover:rotate-3 group-hover:scale-110"
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
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     3. THE KC METRO ADVANTAGE
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#1B3A6B] py-20 text-white lg:py-28">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(201,168,76,0.10),transparent_40%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-14 xl:grid-cols-[1fr_1fr] xl:gap-20">

      <!-- Left: copy -->
      <div class="ajs-reveal-left">
        <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">The KC Metro Advantage</p>
        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
          Why Property Managers Who Already Work With Us Call Us First
        </h2>
        <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>

        <p class="mt-7 text-base leading-8 text-white/76">
          When you have an existing relationship with KCS for cleaning or grounds, the roofing conversation is different. We already know the property. When a storm creates urgency, you do not start from scratch — you call a partner who already knows what you are working with and can respond the same day.
        </p>

        <!-- Emergency CTA -->
        <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:items-center">
          <a href="#contact-form" class="kcs-btn kcs-btn-gold inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em]">
            Request an Assessment
          </a>
          <a href="tel:#" class="inline-flex items-center gap-2 text-sm font-black text-[#C9A84C] transition hover:text-[#E8D49A]">
            <span class="text-lg">⚡</span>
            <span>Emergency? Call directly — [Phone Number]</span>
          </a>
        </div>
      </div>

      <!-- Right: numbered bullets + pull quote -->
      <div class="ajs-reveal-right">
        <ul class="space-y-0">
          <?php foreach ($advantages as $i => $bullet) : ?>
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

        <!-- Pull quote -->
        <div class="mt-8 border-l-4 border-[#C9A84C] bg-white/06 px-6 py-5">
          <p class="text-base font-black leading-7 tracking-[-0.02em] text-white/90">
            "When a storm creates urgency, you do not start from scratch — you call a partner who already knows what you are working with."
          </p>
          <span class="mt-2 block text-[0.68rem] font-black uppercase tracking-[0.14em] text-[#C9A84C]">
            The KCS Difference
          </span>
        </div>
      </div>

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
        <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Request a Roofing Assessment or Estimate</p>
        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B3A6B] md:text-5xl">
          Tell us about your property.
        </h2>
        <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B3A6B,#C9A84C)]"></div>
        <p class="mt-6 max-w-md text-base leading-8 text-[#1B3A6B]/70">
          Tell us about your property. We will get back to you within 24 hours — faster if it is urgent.
        </p>

        <!-- Response promises -->
        <div class="mt-10 space-y-3">
          <?php foreach ([
            ['icon' => '⏱', 'text' => 'Response within 24 hours — same day for storm damage'],
            ['icon' => '📋', 'text' => 'Full documentation for insurance carrier coordination'],
            ['icon' => '📍', 'text' => 'Serving Overland Park, Olathe, Lenexa, Shawnee & KC Metro'],
          ] as $promise) : ?>
            <div class="flex items-center gap-3 border border-[#1B3A6B]/08 bg-[#F5F4EF] px-5 py-4">
              <span class="text-xl"><?php echo $promise['icon']; ?></span>
              <span class="text-sm font-bold text-[#1B3A6B]/80"><?php echo esc_html($promise['text']); ?></span>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Emergency direct call -->
        <div class="mt-5 flex items-center gap-4 border border-[#C9A84C]/30 bg-[#C9A84C]/06 px-5 py-4">
          <span class="text-xl">⚡</span>
          <div>
            <span class="block text-[0.68rem] font-black uppercase tracking-[0.14em] text-[#A8882E]">Need Emergency Response?</span>
            <a href="tel:#" class="mt-0.5 block text-sm font-black text-[#1B3A6B] transition hover:text-[#C9A84C]">
              Call us directly — [Phone Number]
            </a>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="ajs-reveal-right">
        <div class="relative overflow-hidden border border-[#1B3A6B]/12 bg-[#122649] shadow-[0_24px_60px_rgba(27,58,107,0.18)]">
          <div class="h-1 w-full bg-[linear-gradient(90deg,#C9A84C,#E8D49A,#C9A84C)]"></div>

          <div class="p-7 md:p-9">
            <p class="text-xs font-black uppercase tracking-[0.22em] text-[#C9A84C]">Free Assessment</p>
            <h3 class="mt-3 text-2xl font-black leading-tight tracking-[-0.04em] text-white">
              Request a Roofing Estimate
            </h3>
            <p class="mt-2 text-sm leading-6 text-white/60">
              We respond within 24 hours — faster for storm damage.
            </p>

            <div id="kcsRfgFormSuccess" class="hidden mt-5 border border-green-300/40 bg-green-500/15 px-4 py-3 text-sm text-green-200">
              Thank you — we'll be in touch within 24 hours. For urgent situations call us directly at [Phone Number].
            </div>
            <div id="kcsRfgFormError" class="hidden mt-5 border border-red-300/40 bg-red-500/15 px-4 py-3 text-sm text-red-200">
              Something went wrong. Please try again.
            </div>

            <form id="kcsRfgForm" class="mt-7 space-y-4" novalidate>

              <div class="grid gap-4 md:grid-cols-2">
                <div>
                  <label for="rf_name" class="kcs-label">Full Name *</label>
                  <input id="rf_name" name="name" type="text" class="kcs-input" required>
                </div>
                <div>
                  <label for="rf_phone" class="kcs-label">Phone Number *</label>
                  <input id="rf_phone" name="phone" type="tel" class="kcs-input" required>
                </div>
              </div>

              <div>
                <label for="rf_email" class="kcs-label">Email Address *</label>
                <input id="rf_email" name="email" type="email" class="kcs-input" required>
              </div>

              <div>
                <label for="rf_service" class="kcs-label">Service Needed *</label>
                <select id="rf_service" name="service" class="kcs-input" required>
                  <?php foreach ($form_services as $i => $opt) : ?>
                    <option value="<?php echo esc_attr($opt); ?>"
                      <?php echo $i === 0 ? 'selected' : ''; ?>>
                      <?php echo esc_html($opt); ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div>
                <label for="rf_city" class="kcs-label">City / Location *</label>
                <input id="rf_city" name="city" type="text" class="kcs-input" required>
              </div>

              <div>
                <label for="rf_details" class="kcs-label">Tell Us About Your Property *</label>
                <textarea id="rf_details" name="message" rows="4" class="kcs-input kcs-textarea" required
                  placeholder="Roof type, approximate age, visible damage, urgency level..."></textarea>
              </div>

              <div class="pt-1">
                <button id="kcsRfgSubmitBtn" type="submit"
                  class="kcs-btn kcs-btn-gold w-full inline-flex items-center justify-center py-4 text-sm font-black uppercase tracking-[0.14em]">
                  Request a Roofing Estimate →
                </button>
              </div>

              <!-- Secondary emergency CTA -->
              <div class="flex items-center justify-center gap-2 pt-1">
                <span class="text-[0.68rem] text-white/45">Need emergency response?</span>
                <a href="tel:#" class="text-[0.68rem] font-black text-[#C9A84C] transition hover:text-[#E8D49A]">
                  Call us directly →
                </a>
              </div>

              <p class="text-center text-[0.7rem] text-white/40">
                🔒 Your information is private and will never be shared.
              </p>
            </form>
          </div>
        </div>
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
        ['title' => 'Commercial Cleaning',  'href' => '/services/commercial-cleaning',  'tone' => '#1B3A6B'],
        ['title' => 'Landscaping & Grounds','href' => '/services/landscaping-grounds',  'tone' => '#244080'],
        ['title' => 'Drywall & Interior',   'href' => '/services/drywall-interior',     'tone' => '#C9A84C'],
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
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Montserrat:wght@700;800;900&display=swap');

  .kcs-svc-roofing {
    font-family: "Manrope", "Segoe UI", Arial, sans-serif;
  }
  .kcs-svc-roofing h1,
  .kcs-svc-roofing h2,
  .kcs-svc-roofing h3 {
    font-family: "Montserrat", "Segoe UI", sans-serif;
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

  if (window.emailjs) {
    emailjs.init({ publicKey: "CDikedp0ZSxxiBeLb" }) // replace with KCS key
  }

  const form      = document.getElementById("kcsRfgForm")
  const submitBtn = document.getElementById("kcsRfgSubmitBtn")
  const successEl = document.getElementById("kcsRfgFormSuccess")
  const errorEl   = document.getElementById("kcsRfgFormError")

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
        name:    document.getElementById("rf_name").value,
        phone:   document.getElementById("rf_phone").value,
        email:   document.getElementById("rf_email").value,
        service: document.getElementById("rf_service").value,
        city:    document.getElementById("rf_city").value,
        message: document.getElementById("rf_details").value,
      }
    ).then(function () {
      form.reset()
      document.getElementById("rf_service").value = "Roofing & Siding"
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