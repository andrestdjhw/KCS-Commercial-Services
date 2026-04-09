<?php
/**
 * Template Name: Home Template
 *
 * Homepage — KCS Commercial Services LLC
 * kcscommercial.com
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="kcs-home bg-[#F5F4EF] text-[#1B2B6B] overflow-hidden">

<?php
  /* ── Service dropdown options (form) ─────────────────────────────── */
  $form_services = [
    'Commercial Cleaning (Recurring)',
    'Post Construction Cleaning',
    'Landscaping & Grounds',
    'Drywall & Interior',
    'Roofing & Siding',
    'Multiple Services',
    'Other / Not Sure',
  ];

  /* ── Trust bar items ──────────────────────────────────────────────── */
  $trust_items = [
    'Fully Insured',
    'Documented Protocols',
    'Compliance Ready',
    'Institutional-Grade Service',
    'KC Metro Based',
  ];

  /* ── About pillars ────────────────────────────────────────────────── */
  $pillars = [
    [
      'title' => 'Operational Continuity',
      'copy'  => 'Consistent service so your facility never misses a beat.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>',
    ],
    [
      'title' => 'Compliance Ready',
      'copy'  => 'Documentation and standards for healthcare, education, and government.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>',
    ],
    [
      'title' => 'Multi Service Platform',
      'copy'  => 'One trusted partner for cleaning, grounds, drywall, and roofing.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>',
    ],
    [
      'title' => 'Institutional Reliability',
      'copy'  => 'We show up, perform, and make it easy to justify internally.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
    ],
  ];

  /* ── Services ─────────────────────────────────────────────────────── */
  $services = [
    [
      'headline' => 'Commercial Cleaning &amp; Janitorial Services',
      'body'     => 'We provide professional commercial cleaning services for offices, medical facilities, schools, and institutional buildings across the Kansas City metro. Our teams follow documented cleaning protocols, use commercial grade equipment, and maintain the same standards on week 52 as they do on week one. Whether you manage a single building or a portfolio of properties, we show up on schedule, complete the work without supervision, and make sure your space is always ready for whoever walks through the door.',
      'bullets'  => [
        'Daily, weekly, and custom-frequency janitorial service',
        'Post construction cleaning for general contractors',
        'Medical and clinical facility cleaning',
        'School and university campus janitorial services',
        'Office buildings, corporate campuses, and flex spaces',
      ],
      'cta'   => 'Request a Cleaning Contract',
      'tone'  => '#1B2B6B',
    ],
    [
      'headline' => 'Commercial Landscaping &amp; Grounds Maintenance',
      'body'     => 'First impressions happen at the curb. We maintain commercial grounds, institutional campuses, and multi-property portfolios so your asset always looks presentable to tenants, to visitors, and to the people making decisions about renewing their lease. From regular lawn maintenance to seasonal snow removal, we handle the exterior so you don\'t have to coordinate another vendor.',
      'bullets'  => [
        'Commercial lawn maintenance and landscaping contracts',
        'Hardscaping services for commercial properties',
        'Seasonal snow removal  Kansas City metro',
        'Grounds management for institutional campuses',
        'Multi-property portfolio grounds consolidation',
      ],
      'cta'   => 'Request a Grounds Contract',
      'tone'  => '#243580',
    ],
    [
      'headline' => 'Drywall &amp; Interior Construction Services',
      'body'     => 'When a general contractor trusts us to leave their job site clean, the next conversation is usually about what else we can take off their plate. Our drywall and interior construction services are built around that same reliability showing up on schedule, working cleanly alongside other trades, and hitting the deadline every time. We handle tenant improvements, commercial build outs, and interior renovation scopes across the KC metro.',
      'bullets'  => [
        'Commercial drywall installation and finishing',
        'Tenant improvement (TI) renovations',
        'Interior construction for general contractor pipelines',
        'Office and healthcare facility build-outs',
        'Retail and commercial space renovations',
      ],
      'cta'   => 'Request a Drywall Estimate',
      'tone'  => '#C9A84C',
    ],
    [
      'headline' => 'Commercial Roofing &amp; Siding',
      'body'     => 'Kansas City weather doesn\'t wait, and neither should you. When a hail storm hits or a roof reaches the end of its life, the last thing you want is to start searching for a contractor you\'ve never worked with. If we already manage your building\'s cleaning or grounds, we know the property  and we\'re ready to move fast. We handle commercial roof replacement, repair, and siding work across the KC metro with the same accountability we bring to every other service.',
      'bullets'  => [
        'Commercial roof replacement and repair',
        'Hail and storm damage response  KC metro',
        'Siding installation and replacement',
        'Exterior envelope work for commercial buildings',
        'Roofing assessments for property portfolios',
      ],
      'cta'   => 'Request a Roofing Estimate',
      'tone'  => '#A8882E',
    ],
  ];

  /* ── Why KCS differentiators ──────────────────────────────────────── */
  $differentiators = [
    [ 'num' => '01', 'title' => 'Zero Operational Surprises',       'copy' => 'We show up when we say we will, execute without supervision, and communicate proactively. Your silence is our best performance metric.' ],
    [ 'num' => '02', 'title' => 'Compliance-Ready Documentation',   'copy' => 'Healthcare and education buyers require traceable processes. We deliver the documentation, certifications, and protocols that protect your facility from audits and liability.' ],
    [ 'num' => '03', 'title' => 'Multi Service, One Contract',      'copy' => 'Cleaning, grounds, drywall, roofing under one trusted partner. Reduce your vendor count, eliminate coordination friction, and simplify your budget.' ],
    [ 'num' => '04', 'title' => 'Institutional Buyer Experience',   'copy' => 'We understand RFP processes, committee approvals, and long contract cycles. We show up to the conversation prepared not hoping to improvise.' ],
    [ 'num' => '05', 'title' => 'KC Dense Route Efficiency',        'copy' => 'We concentrate in the Overland Park Lenexa Olathe corridor. That means faster response times, lower operational cost, and consistent crew availability for your facility.' ],
    [ 'num' => '06', 'title' => 'Asset Presentation Mindset',       'copy' => 'We don\'t think \'clean building.\' We think: how does this asset need to look to retain tenants, pass audits, and protect its long term value? That difference shows up in the result.' ],
  ];

  /* ── Locations ────────────────────────────────────────────────────── */
  $locations_tier_a = [
    [ 'city' => 'Overland Park, KS', 'note' => 'Primary market · Highest institutional density', 'href' => '/location/overland-park-ks' ],
    [ 'city' => 'Olathe, KS',        'note' => 'Healthcare corridor · School district hub',       'href' => '/location/olathe-ks'       ],
    [ 'city' => 'Lenexa, KS',        'note' => 'Corporate parks · Commercial flex space',         'href' => '/location/lenexa-ks'       ],
  ];
  $locations_tier_b = [
    [ 'city' => 'Shawnee, KS',      'note' => 'Route support · Residential-commercial mix',   'href' => '/location/shawnee-ks'      ],
    [ 'city' => 'Kansas City, KS',  'note' => 'Commercial & industrial corridor',              'href' => '/location/kansas-city-ks'  ],
  ];
  $locations_additional = [
    [ 'city' => 'Paola, KS',        'note' => 'Selective service · High-ticket contracts',    'href' => '/location/paola-ks'        ],
    [ 'city' => 'Springfield, MO',  'note' => 'Independent hub · Second market',              'href' => '/location/springfield-mo'  ],
  ];

  /* ── Process steps ────────────────────────────────────────────────── */
  $steps = [
    [ 'num' => '01', 'title' => 'Initial Consultation',    'copy' => 'We learn your facility\'s needs, compliance requirements, and what reliable service actually looks like for your operation.' ],
    [ 'num' => '02', 'title' => 'Site Assessment & Proposal', 'copy' => 'We visit, document scope, and deliver a structured proposal within 48 hours clear pricing, no hidden costs.' ],
    [ 'num' => '03', 'title' => 'Contract & Onboarding',   'copy' => '12 month agreement. Thorough onboarding so week one sets the standard for every week after.' ],
    [ 'num' => '04', 'title' => 'Delivery & Expansion',    'copy' => 'We execute, check in regularly, and as trust grows, introduce adjacent services that add value without complexity.' ],
  ];

  /* ── FAQs ─────────────────────────────────────────────────────────── */
  $faqs = [
    [
      'q' => 'What types of facilities does KCS Commercial Services clean?',
      'a' => 'KCS provides institutional-grade commercial cleaning for medical offices, hospitals, school districts, corporate campuses, office buildings, retail centers, and post-construction job sites across Overland Park, Olathe, Lenexa, Shawnee, and the greater Kansas City metro.',
    ],
    [
      'q' => 'Does KCS offer recurring commercial cleaning contracts?',
      'a' => 'Yes — recurring contracts are the foundation of our model. We structure 12-month janitorial and landscaping agreements with renewal options, giving your facility consistent service and your budget predictable costs.',
    ],
    [
      'q' => 'Can KCS handle multiple services for the same property?',
      'a' => 'Absolutely. Property managers and institutional buyers can consolidate commercial cleaning, landscaping, drywall, and roofing under one trusted partner — eliminating vendor coordination and simplifying your internal approval process.',
    ],
    [
      'q' => 'Does KCS work with general contractors on construction projects?',
      'a' => 'Yes. Post-construction cleaning is one of our most strategic entry points into GC relationships. From there, we expand naturally into drywall and roofing as trust is established across multiple project cycles.',
    ],
    [
      'q' => 'Does KCS provide compliance documentation for healthcare and education facilities?',
      'a' => 'Yes. We deliver the structured documentation and traceable cleaning protocols that protect your facility from liability and satisfy healthcare and education inspection requirements.',
    ],
    [
      'q' => 'What areas does KCS Commercial Services serve?',
      'a' => 'Our primary service area covers the Overland Park Lenexa Olathe corridor in Johnson County, Kansas. We also serve Shawnee, Kansas City KS, Paola KS, and operate an independent hub in Springfield, MO.',
    ],
    [
      'q' => 'How quickly can KCS respond to a new service inquiry?',
      'a' => 'We target a 24-hour response to all initial inquiries, a 48-hour turnaround on proposals following a site visit, and contract onboarding within one week of signature.',
    ],
  ];
?>

<!-- ════════════════════════════════════════════════════════════════════
     1. HERO
═════════════════════════════════════════════════════════════════════ -->
<section id="hero" class="relative overflow-hidden bg-[#13204F] text-white">

  <div class="absolute inset-0">
    <img
      src="/wp-content/uploads/2026/04/KCSHeroImage-scaled.jpg"
      alt=""
      aria-hidden="true"
      class="kcs-hero-bg-img h-full w-full object-cover object-center"
    >
    <div class="absolute inset-0" style="background:linear-gradient(135deg, rgba(19,32,79,0.99) 0%, rgba(27,58,107,0.82) 50%, rgba(19,32,79,0.88) 100%);"></div>
  </div>

  <div class="absolute inset-0 opacity-[0.04]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute top-0 right-0 w-[520px] h-[520px] opacity-[0.08]" style="background:radial-gradient(circle at top right,#C9A84C,transparent 65%);"></div>

  <div class="relative mx-auto max-w-7xl px-4 py-16 lg:py-24">
    <div class="grid gap-10 lg:grid-cols-[1fr_480px] lg:gap-14 xl:grid-cols-[1fr_520px]">

      <!-- LEFT: Copy -->
      <div class="ajs-reveal-left flex flex-col justify-center">
        <p class="text-xs font-black uppercase tracking-[0.28em] text-[#C9A84C]">
          Kansas City Metro &nbsp;·&nbsp; Building Services Platform
        </p>
        <h1 class="mt-5 text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-6xl xl:text-7xl">
          We Don't Just Clean Buildings. We Protect Them.
        </h1>
        <div class="mt-6 h-1 w-28 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>
        <p class="mt-7 max-w-xl text-base leading-8 text-white/82 md:text-lg">
          KCS Commercial Services delivers institutional grade commercial cleaning, landscaping, drywall, and roofing for property managers, healthcare facilities, school districts, and general contractors across the KC metro.
          <strong class="mt-3 block font-black text-white/95">Consistent. Compliant. Built for long term retention.</strong>
        </p>
        <div class="mt-9 flex flex-wrap gap-3">
          <a href="tel:+19132577291" class="kcs-btn kcs-btn-gold inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em]">
            Request a Contract Quote
          </a>
          <a href="#services" class="kcs-btn kcs-btn-ghost inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
            Explore Services
          </a>
        </div>
        <div class="mt-8 flex flex-wrap gap-2">
          <?php foreach (['Overland Park','Olathe','Lenexa','Shawnee','Kansas City KS','Springfield MO'] as $loc) : ?>
            <span class="inline-flex items-center gap-1.5 border border-white/14 bg-white/07 px-3 py-1.5 text-[0.68rem] font-black uppercase tracking-[0.12em] text-white/80">
              <span class="block h-1.5 w-1.5 rounded-full bg-[#C9A84C]"></span>
              <?php echo esc_html($loc); ?>
            </span>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- RIGHT: Lead Form -->
      <div id="contact-form" class="ajs-reveal-right">
        <div class="relative overflow-hidden border border-white/10 bg-white/06 shadow-[0_24px_60px_rgba(0,0,0,0.30)] backdrop-blur-sm">
          <div class="h-1 w-full bg-[linear-gradient(90deg,#C9A84C,#E8D49A,#C9A84C)]"></div>
          <div class="p-7 md:p-9">
            <p class="text-xs font-black uppercase tracking-[0.22em] text-[#C9A84C]">Free Consultation</p>
            <h2 class="mt-3 text-2xl font-black leading-tight tracking-[-0.04em]">Get a Free Contract Quote</h2>
            <p class="mt-2 text-sm leading-6 text-white/72">Tell us about your facility. We'll respond within 24 hours.</p>

            <div id="kcsHeroFormSuccess" class="hidden mt-5 border border-green-300/40 bg-green-500/15 px-4 py-3 text-sm text-green-200">
              Thank you — we'll be in touch within 24 hours.
            </div>
            <div id="kcsHeroFormError" class="hidden mt-5 border border-red-300/40 bg-red-500/15 px-4 py-3 text-sm text-red-200">
              Something went wrong. Please try again.
            </div>

            <form id="kcsHeroForm" class="mt-6 space-y-4" novalidate>
              <?php echo kcs_form_fields($form_services, 'hero'); ?>

              <!-- reCAPTCHA hero -->
              <div>
                <div id="kcs-captcha-hero"></div>
                <p id="kcsCaptchaHeroError" class="hidden mt-2 text-[0.78rem] font-bold text-red-300">
                  Please complete the captcha before submitting.
                </p>
              </div>

              <button id="kcsHeroSubmitBtn" type="submit"
                class="kcs-btn kcs-btn-gold w-full inline-flex items-center justify-center py-4 text-sm font-black uppercase tracking-[0.14em]">
                Submit Request
              </button>
              <p class="text-center text-[0.7rem] text-white/52">
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
     2. TRUST BAR — Marquee
═════════════════════════════════════════════════════════════════════ -->
<section class="kcs-trust-bar border-b border-[#1B2B6B]/10 bg-[#C9A84C] overflow-hidden">
  <div class="kcs-trust-track py-4">
    <?php $marquee_items = array_merge($trust_items, $trust_items, $trust_items); ?>
    <?php foreach ($marquee_items as $item) : ?>
      <div class="kcs-trust-item flex items-center gap-2.5">
        <svg class="h-4 w-4 shrink-0 text-[#13204F]" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
        </svg>
        <span class="whitespace-nowrap text-sm font-black uppercase tracking-[0.12em] text-[#13204F]">
          <?php echo esc_html($item); ?>
        </span>
        <span class="mx-4 block h-1.5 w-1.5 shrink-0 rotate-45 bg-[#13204F]/30"></span>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<style>
  .kcs-trust-bar { position: relative; }
  .kcs-trust-bar::before,
  .kcs-trust-bar::after {
    content: ""; position: absolute; top: 0; bottom: 0;
    width: 120px; z-index: 2; pointer-events: none;
  }
  .kcs-trust-bar::before { left: 0;  background: linear-gradient(90deg, #C9A84C, transparent); }
  .kcs-trust-bar::after  { right: 0; background: linear-gradient(270deg, #C9A84C, transparent); }
  .kcs-trust-track {
    display: flex; align-items: center; width: max-content;
    animation: kcsTrustScroll 28s linear infinite;
  }
  .kcs-trust-track:hover { animation-play-state: paused; }
  .kcs-trust-item { flex-shrink: 0; padding-inline: 1rem; }
  @keyframes kcsTrustScroll {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-33.333%); }
  }
  @media (prefers-reduced-motion: reduce) {
    .kcs-trust-track { animation: none; }
    .kcs-trust-bar::before, .kcs-trust-bar::after { display: none; }
  }
</style>

<!-- ════════════════════════════════════════════════════════════════════
     3. ABOUT US
═════════════════════════════════════════════════════════════════════ -->
<section id="about" class="relative overflow-hidden bg-white py-20 lg:py-28">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.08),transparent_30%)]"></div>
  <div class="absolute left-0 top-0 h-full w-[6px] bg-[linear-gradient(180deg,#C9A84C,#1B2B6B,#C9A84C)]"></div>
  <div class="relative mx-auto max-w-7xl px-4">
    <div class="ajs-reveal-up max-w-3xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">About KCS Commercial Services</p>
      <h2 class="mt-4 text-3xl font-black leading-[0.94] tracking-[-0.05em] text-[#1B2B6B] md:text-5xl">
        We Manage Your Building So You Can Run Your Business
      </h2>
      <div class="mt-6 h-1 w-24 bg-[linear-gradient(90deg,#1B2B6B,#C9A84C)]"></div>
    </div>
    <div class="mt-12 grid gap-12 lg:grid-cols-[1.05fr_0.95fr] lg:gap-16">
      <div class="ajs-reveal-left space-y-6 text-base leading-8 text-[#1B2B6B]/78">
        <p>KCS Commercial Services LLC was built on one principle: property managers, facility directors, and institutional buyers deserve a service partner they never have to chase. We are not a cleaning company, we are a building and asset services platform anchored by commercial cleaning and expanded through landscaping, drywall, and roofing.</p>
        <p>Based in the Kansas City metro and operating across Overland Park, Olathe, Lenexa, Shawnee, and Springfield MO, we serve healthcare institutions, school districts, corporate campuses, and commercial property portfolios with one clear commitment: your facility will always look the way it should  without you having to think about it.</p>
        <p>Our clients don't buy cleaning. They buy operational certainty, compliance protection, and asset presentation. That's what we deliver contract after contract, year after year.</p>
        <div class="flex flex-wrap gap-3 pt-2">
          <a href="#services" class="kcs-btn kcs-btn-outline inline-flex items-center justify-center px-6 py-3.5 text-sm font-black uppercase tracking-[0.14em]">Our Services</a>
        </div>
      </div>
      <div class="ajs-reveal-right grid grid-cols-2 gap-4">
        <?php foreach ($pillars as $pillar) : ?>
          <article class="group relative overflow-hidden border border-[#1B2B6B]/10 bg-[#F5F4EF] p-5">
            <div class="absolute inset-x-0 top-0 h-[3px] bg-[linear-gradient(90deg,#1B2B6B,#C9A84C)] transition-all duration-500 group-hover:h-1"></div>
            <div class="mb-3 flex h-9 w-9 items-center justify-center bg-[#1B2B6B] text-[#C9A84C]">
              <?php echo $pillar['icon']; ?>
            </div>
            <h3 class="text-base font-black leading-tight tracking-[-0.02em] text-[#1B2B6B]">
              <?php echo esc_html($pillar['title']); ?>
            </h3>
            <p class="mt-2 text-[0.82rem] leading-6 text-[#1B2B6B]/68">
              <?php echo esc_html($pillar['copy']); ?>
            </p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     4. SERVICES
═════════════════════════════════════════════════════════════════════ -->
<section id="services" class="relative overflow-hidden bg-[#F5F4EF] py-20 lg:py-28">
  <div class="absolute right-0 top-0 h-full w-[30%] bg-[#1B2B6B]/03"></div>
  <div class="relative mx-auto max-w-7xl px-4">
    <div class="ajs-reveal-up max-w-3xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">What We Do</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B2B6B] md:text-5xl">
        A Platform Built Around Your Building  Not Just One Service
      </h2>
      <p class="mt-5 max-w-2xl text-base leading-8 text-[#1B2B6B]/72">
        Every service we offer is connected. Commercial cleaning opens the relationship. Grounds, drywall, and roofing expand it. Each contract builds toward a long-term partnership not a one time job.
      </p>
    </div>
    <div class="mt-14 grid gap-6 md:grid-cols-2">
      <?php foreach ($services as $svc) : ?>
        <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#1B2B6B]/10 bg-white">
          <div class="h-[5px] w-full transition-all duration-500 group-hover:h-2"
            style="background:<?php echo esc_attr($svc['tone']); ?>;"></div>
          <div class="p-7 md:p-8">
            <h3 class="text-xl font-black leading-tight tracking-[-0.03em] text-[#1B2B6B]">
              <?php echo $svc['headline']; ?>
            </h3>
            <p class="mt-4 text-[0.9rem] leading-7 text-[#1B2B6B]/72">
              <?php echo esc_html($svc['body']); ?>
            </p>
            <ul class="mt-5 space-y-2">
              <?php foreach ($svc['bullets'] as $bullet) : ?>
                <li class="flex items-start gap-2.5 text-[0.85rem] leading-6 text-[#1B2B6B]/78">
                  <span class="mt-1.5 block h-2 w-2 shrink-0 rotate-45 bg-[#C9A84C]"></span>
                  <?php echo esc_html($bullet); ?>
                </li>
              <?php endforeach; ?>
            </ul>
            <a href="/contact-us"
              class="mt-7 inline-flex items-center gap-2 border-b-2 border-[#C9A84C] pb-0.5 text-sm font-black uppercase tracking-[0.12em] text-[#1B2B6B] transition-all hover:gap-3">
              <?php echo esc_html($svc['cta']); ?>
              <span>→</span>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="ajs-reveal-up mt-10 border border-[#1B2B6B]/12 bg-white px-8 py-5 text-center">
      <p class="text-sm font-bold text-[#1B2B6B]/72">
        Not sure which service fits your facility? —&nbsp;
        <a href="#contact-form" class="font-black text-[#1B2B6B] underline decoration-[#C9A84C] underline-offset-3 transition hover:text-[#C9A84C]">
          Talk to our team and we'll build the right contract →
        </a>
      </p>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     5. WHY KCS
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#1B2B6B] py-20 text-white lg:py-28">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.35) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.35) 50%,rgba(255,255,255,0.35) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(201,168,76,0.12),transparent_40%)]"></div>
  <div class="relative mx-auto max-w-7xl px-4">
    <div class="ajs-reveal-up max-w-3xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Why KCS</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
        The Field Isn't Saturated. It's Just Poorly Occupied.
      </h2>
      <p class="mt-5 max-w-2xl text-base leading-8 text-white/76">
        Most facility managers and property owners have dealt with vendors who overpromise and underdeliver. KCS was built to be the obvious alternative a structured, accountable, institutional-grade operation that makes the decision to hire us easy to justify to anyone asking questions.
      </p>
    </div>
    <div class="mt-14 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
      <?php foreach ($differentiators as $d) : ?>
        <article class="ajs-reveal-stagger group relative overflow-hidden border border-white/10 bg-white/05 p-7 backdrop-blur-sm transition hover:bg-white/08">
          <span class="inline-flex items-center border border-[#C9A84C]/40 bg-[#C9A84C]/12 px-3 py-1 text-[0.7rem] font-black uppercase tracking-[0.16em] text-[#E8D49A]">
            <?php echo esc_html($d['num']); ?>
          </span>
          <h3 class="mt-4 text-lg font-black leading-tight tracking-[-0.03em]">
            <?php echo esc_html($d['title']); ?>
          </h3>
          <p class="mt-3 text-[0.88rem] leading-7 text-white/72">
            <?php echo esc_html($d['copy']); ?>
          </p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     6. LOCATIONS (commented out)
═════════════════════════════════════════════════════════════════════ -->
<!-- <section id="locations"> ... </section> -->

<!-- ════════════════════════════════════════════════════════════════════
     7. HOW WE WORK
═════════════════════════════════════════════════════════════════════ -->
<section class="bg-[#F5F4EF] py-20 lg:py-28">
  <div class="mx-auto max-w-7xl px-4">
    <div class="ajs-reveal-up mx-auto max-w-3xl text-center">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Our Process</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B2B6B] md:text-5xl">
        From First Call to Long-Term Contract
      </h2>
    </div>
    <div class="mt-14 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
      <?php foreach ($steps as $step) : ?>
        <article class="ajs-reveal-stagger relative overflow-hidden border border-[#1B2B6B]/10 bg-white p-7">
          <div class="absolute right-0 top-0 h-14 w-14 translate-x-1/4 -translate-y-1/4 rotate-12 bg-[#C9A84C]/10"></div>
          <span class="inline-flex bg-[#1B2B6B] px-4 py-1.5 text-[0.7rem] font-black uppercase tracking-[0.18em] text-[#C9A84C]">
            <?php echo esc_html($step['num']); ?>
          </span>
          <h3 class="mt-5 text-lg font-black leading-tight tracking-[-0.03em] text-[#1B2B6B]">
            <?php echo esc_html($step['title']); ?>
          </h3>
          <p class="mt-3 text-[0.88rem] leading-7 text-[#1B2B6B]/68">
            <?php echo esc_html($step['copy']); ?>
          </p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     8. FAQ
═════════════════════════════════════════════════════════════════════ -->
<section class="border-y border-[#1B2B6B]/10 bg-white py-20 lg:py-28">
  <div class="mx-auto max-w-5xl px-4">
    <div class="ajs-reveal-up mx-auto max-w-3xl text-center">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Frequently Asked Questions</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B2B6B] md:text-5xl">
        Common Questions From Facility Managers &amp; Property Owners
      </h2>
      <div class="mx-auto mt-5 h-1 w-24 bg-[linear-gradient(90deg,#1B2B6B,#C9A84C)]"></div>
    </div>
    <div class="mt-12 grid gap-3">
      <?php foreach ($faqs as $faq) : ?>
        <details class="ajs-reveal-stagger kcs-faq group border border-[#1B2B6B]/10 bg-[#F5F4EF]">
          <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-6 py-5">
            <span class="text-[0.97rem] font-black leading-6 tracking-[-0.01em] text-[#1B2B6B]">
              <?php echo esc_html($faq['q']); ?>
            </span>
            <span class="kcs-faq-icon shrink-0 text-2xl font-light text-[#C9A84C]">+</span>
          </summary>
          <div class="border-t border-[#1B2B6B]/10 px-6 py-5">
            <p class="text-[0.92rem] leading-7 text-[#1B2B6B]/76">
              <?php echo esc_html($faq['a']); ?>
            </p>
          </div>
        </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     9. FINAL CTA + DUPLICATE FORM
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#13204F] py-20 text-white lg:py-28">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.10),transparent_35%)]"></div>
  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-14 lg:grid-cols-[1fr_480px] xl:grid-cols-[1fr_520px]">

      <!-- Copy -->
      <div class="ajs-reveal-left flex flex-col justify-center">
        <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Ready to Get Started?</p>
        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
          Your Facility Deserves a Partner That Shows Up Every Time.
        </h2>
        <div class="mt-5 h-1 w-24 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>
        <p class="mt-7 max-w-xl text-base leading-8 text-white/76">
          Stop chasing vendors. Stop explaining standards. Stop settling for inconsistency. Tell us about your facility and let's build a contract around what you actually need.
        </p>
      </div>

      <!-- Duplicate form -->
      <div
        data-contact-form
        data-prefix="cta"
        data-eyebrow="Request a Contract Quote"
        data-form-title="Tell us about your facility."
        data-form-subtitle="We respond within 24 hours."
        data-btn-text="Send My Request →">
      </div>

    </div>
  </div>
</section>

</main>

<?php
/* ── Form fields helper ── matches contact-template.php exactly ──── */
function kcs_form_fields( array $services, string $prefix ) {
  $html  = '<div class="grid gap-4 md:grid-cols-2">';
  $html .= '<div>';
  $html .= '<label for="' . $prefix . '_name" class="kcs-label">Full Name *</label>';
  $html .= '<input id="' . $prefix . '_name" name="name" type="text" class="kcs-input" required>';
  $html .= '</div>';
  $html .= '<div>';
  $html .= '<label for="' . $prefix . '_company" class="kcs-label">Company / Organization</label>';
  $html .= '<input id="' . $prefix . '_company" name="company" type="text" class="kcs-input">';
  $html .= '</div>';
  $html .= '</div>';

  $html .= '<div class="grid gap-4 md:grid-cols-2">';
  $html .= '<div>';
  $html .= '<label for="' . $prefix . '_phone" class="kcs-label">Phone Number *</label>';
  $html .= '<input id="' . $prefix . '_phone" name="phone" type="tel" class="kcs-input" required>';
  $html .= '</div>';
  $html .= '<div>';
  $html .= '<label for="' . $prefix . '_email" class="kcs-label">Email Address *</label>';
  $html .= '<input id="' . $prefix . '_email" name="email" type="email" class="kcs-input" required>';
  $html .= '</div>';
  $html .= '</div>';

  $html .= '<div class="grid gap-4 md:grid-cols-2">';
  $html .= '<div>';
  $html .= '<label for="' . $prefix . '_service" class="kcs-label">Service Needed *</label>';
  $html .= '<select id="' . $prefix . '_service" name="service" class="kcs-input" required>';
  $html .= '<option value="">Select a service</option>';
  foreach ( $services as $option ) {
    $html .= '<option value="' . esc_attr( $option ) . '">' . esc_html( $option ) . '</option>';
  }
  $html .= '</select>';
  $html .= '</div>';
  $html .= '<div>';
  $html .= '<label for="' . $prefix . '_city" class="kcs-label">City / Location *</label>';
  $html .= '<input id="' . $prefix . '_city" name="city" type="text" class="kcs-input" required>';
  $html .= '</div>';
  $html .= '</div>';

  $html .= '<div>';
  $html .= '<label for="' . $prefix . '_details" class="kcs-label">Tell Us About Your Facility</label>';
  $html .= '<textarea id="' . $prefix . '_details" name="message" rows="4" class="kcs-input kcs-textarea"></textarea>';
  $html .= '</div>';

  return $html;
}
?>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap');

  .kcs-home { font-family: "Montserrat", "Segoe UI", sans-serif; }
  .kcs-home h1, .kcs-home h2, .kcs-home h3 { font-family: "Montserrat", "Segoe UI", sans-serif; }

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
                background-color .22s ease, border-color .22s ease, color .22s ease;
  }
  .kcs-btn::after {
    content: ""; position: absolute; inset: 0;
    transform: translateX(-115%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: transform .65s ease;
  }
  .kcs-btn:hover::after  { transform: translateX(115%); }
  .kcs-btn:hover         { transform: translateY(-2px); }

  .kcs-btn-gold {
    background: linear-gradient(135deg, #C9A84C, #A8882E);
    border-color: #C9A84C;
    box-shadow: 0 16px 34px rgba(201,168,76,0.28);
    color: #13204F;
  }
  .kcs-btn-gold:hover {
    background: linear-gradient(135deg, #E8D49A, #C9A84C);
    box-shadow: 0 20px 44px rgba(201,168,76,0.36);
  }
  .kcs-btn-navy { background: #1B2B6B; border-color: #1B2B6B; box-shadow: 0 16px 34px rgba(27,43,107,0.22); }
  .kcs-btn-navy:hover { background: #13204F; border-color: #13204F; }
  .kcs-btn-ghost { background: rgba(255,255,255,0.07); border-color: rgba(255,255,255,0.18); backdrop-filter: blur(6px); }
  .kcs-btn-ghost:hover { background: rgba(255,255,255,0.14); border-color: rgba(255,255,255,0.28); }
  .kcs-btn-outline { background: transparent; border-color: #1B2B6B; color: #1B2B6B; }
  .kcs-btn-outline:hover { background: #1B2B6B; color: #fff; }

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
    color: #ffffff; font-size: 0.92rem; line-height: 1.5;
    font-family: inherit; outline: none;
    transition: border-color .22s ease, box-shadow .22s ease, background-color .22s ease;
    appearance: none;
  }
  .kcs-input::placeholder { color: rgba(255,255,255,0.35); }
  .kcs-input:focus {
    border-color: #C9A84C;
    box-shadow: 0 0 0 3px rgba(201,168,76,0.18);
    background: rgba(255,255,255,0.10);
  }
  .kcs-textarea { resize: vertical; min-height: 100px; }
  .kcs-input option { background: #1B2B6B; color: #fff; }

  .kcs-faq[open] .kcs-faq-icon { transform: rotate(45deg); }
  .kcs-faq-icon { transition: transform .2s ease; }

  .ajs-reveal-up, .ajs-reveal-left, .ajs-reveal-right, .ajs-reveal-stagger {
    opacity: 0; will-change: opacity, transform;
    transition: opacity .85s ease, transform .85s ease;
  }
  .ajs-reveal-up      { transform: translateY(34px); }
  .ajs-reveal-left    { transform: translateX(-36px); }
  .ajs-reveal-right   { transform: translateX(36px); }
  .ajs-reveal-stagger { transform: translateY(28px); }
  .ajs-reveal-up.is-visible, .ajs-reveal-left.is-visible,
  .ajs-reveal-right.is-visible, .ajs-reveal-stagger.is-visible {
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

<!-- reCAPTCHA v2 — explicit render para múltiples widgets en la misma página -->
<script src="https://www.google.com/recaptcha/api.js?onload=kcsRenderCaptchas&render=explicit" async defer></script>

<!-- EmailJS -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

<script>
  /* ── reCAPTCHA: render explícito para dos widgets ───────────────── */
  var kcsWidgetHero = null
  var kcsWidgetCta  = null

  function kcsRenderCaptchas() {
    kcsWidgetHero = grecaptcha.render("kcs-captcha-hero", {
      sitekey: "6Ldb4aksAAAAAF6H4Hs58PvpVgiL4Kxevwn_nvzw",
      theme:   "dark",
    })
    kcsWidgetCta = grecaptcha.render("kcs-captcha-cta", {
      sitekey: "6Ldb4aksAAAAAF6H4Hs58PvpVgiL4Kxevwn_nvzw",
      theme:   "dark",
    })
  }

document.addEventListener("DOMContentLoaded", function () {

  /* ── Scroll reveal ──────────────────────────────────────────────── */
  const revealItems = document.querySelectorAll(
    ".ajs-reveal-up, .ajs-reveal-left, .ajs-reveal-right, .ajs-reveal-stagger"
  )
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, idx) => {
      if (entry.isIntersecting) {
        const delay = entry.target.classList.contains("ajs-reveal-stagger")
          ? (idx % 8) * 60 : 0
        setTimeout(() => entry.target.classList.add("is-visible"), delay)
      }
    })
  }, { threshold: 0.1 })
  revealItems.forEach(el => observer.observe(el))

  /* ── EmailJS init ───────────────────────────────────────────────── */
  if (window.emailjs) {
    emailjs.init({ publicKey: "Y8K5QxlYLcq0GsUbt" })
  }

  /* ── Form helper ────────────────────────────────────────────────── */
  function bindForm(formId, submitBtnId, successId, errorId, captchaErrorId, prefix, widgetGetter) {
    const form         = document.getElementById(formId)
    const submitBtn    = document.getElementById(submitBtnId)
    const successEl    = document.getElementById(successId)
    const errorEl      = document.getElementById(errorId)
    const captchaError = document.getElementById(captchaErrorId)

    if (!form) return

    form.addEventListener("submit", function (e) {
      e.preventDefault()
      successEl.classList.add("hidden")
      errorEl.classList.add("hidden")
      captchaError.classList.add("hidden")

      // ── Validate reCAPTCHA ─────────────────────────────────────────
      const widgetId = widgetGetter()
      const recaptchaResponse = (widgetId !== null)
        ? grecaptcha.getResponse(widgetId)
        : ""
      if (!recaptchaResponse) {
        captchaError.classList.remove("hidden")
        captchaError.scrollIntoView({ behavior: "smooth", block: "center" })
        return
      }

      const originalText    = submitBtn.textContent
      submitBtn.disabled    = true
      submitBtn.textContent = "Sending..."

      const data = {
        name:    document.getElementById(prefix + "_name").value,
        company: document.getElementById(prefix + "_company").value,
        phone:   document.getElementById(prefix + "_phone").value,
        email:   document.getElementById(prefix + "_email").value,
        service: document.getElementById(prefix + "_service").value,
        city:    document.getElementById(prefix + "_city").value,
        message: document.getElementById(prefix + "_details").value,
      }

      emailjs.send(
        "service_5e06r2o",
        "template_r2st5jy",  // ← notificación interna a KCS
        data
      ).then(function () {
        // ── Auto-reply al cliente ──────────────────────────────────────
        return emailjs.send(
          "service_5e06r2o",
          "template_5h990ir",  // ← confirmación al cliente
          {
            name:  data.name,
            email: data.email,
          }
        )
      }).then(function () {
        form.reset()
        if (widgetId !== null) grecaptcha.reset(widgetId)
        successEl.classList.remove("hidden")
        submitBtn.disabled    = false
        submitBtn.textContent = originalText
        successEl.scrollIntoView({ behavior: "smooth", block: "center" })
      }).catch(function (err) {
        console.error("EmailJS error:", err)
        if (widgetId !== null) grecaptcha.reset(widgetId)
        errorEl.classList.remove("hidden")
        submitBtn.disabled    = false
        submitBtn.textContent = originalText
      })
    })
  }

  bindForm(
    "kcsHeroForm", "kcsHeroSubmitBtn",
    "kcsHeroFormSuccess", "kcsHeroFormError",
    "kcsCaptchaHeroError", "hero",
    function() { return kcsWidgetHero }
  )

  bindForm(
    "kcsCtaForm", "kcsCtaSubmitBtn",
    "kcsCtaFormSuccess", "kcsCtaFormError",
    "kcsCaptchaCtaError", "cta",
    function() { return kcsWidgetCta }
  )
})
</script>

<?php get_footer(); ?>