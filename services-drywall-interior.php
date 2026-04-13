<?php
/**
 * Template Name: Service - Drywall & Interior
 *
 * Drywall & Interior Construction Services
 * KCS Commercial Services LLC
 * kcscommercial.com/services/drywall-interior/
 */

get_header(); ?>

<main class="kcs-svc-drywall bg-[#F5F4EF] text-[#1B3A6B] overflow-hidden">

<?php
  /* ── Services ───────────────────────────────────────────────────── */
  $drywall_services = [
    [
      'title' => 'Drywall Installation & Finishing',
      'copy'  => 'Commercial drywall framing, hanging, taping, and finishing for new construction and renovation projects across office, healthcare, retail, and industrial facility types.',
      'tone'  => '#1B3A6B',
      'full'  => true,
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="0"/><path d="M3 9h18M3 15h18M9 3v18"/></svg>',
    ],
    [
      'title' => 'Tenant Improvement (TI)',
      'copy'  => 'Interior buildouts for commercial tenants moving into new or existing space. We work with the property owner, GC, and tenant timeline to deliver finished space ready for occupancy.',
      'tone'  => '#244080',
      'full'  => false,
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>',
    ],
    [
      'title' => 'Office & Healthcare Build-Outs',
      'copy'  => 'Interior construction for office expansions, medical office buildouts, clinic renovations, and corporate space reconfigurations across Overland Park, Lenexa, and Olathe.',
      'tone'  => '#C9A84C',
      'full'  => false,
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12h6M12 9v6"/></svg>',
    ],
    [
      'title' => 'Renovation & Remodel',
      'copy'  => 'Interior renovation for properties being repositioned, refreshed, or converted. We handle drywall removal, reconfiguration, and finishing throughout the metro.',
      'tone'  => '#A8882E',
      'full'  => false,
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
    ],
    [
      'title' => 'GC Pipeline Work',
      'copy'  => 'Ongoing interior scope for general contractors who need a reliable drywall subcontractor for recurring commercial projects. We plug into your workflow and match your schedule.',
      'tone'  => '#1B3A6B',
      'full'  => false,
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg>',
    ],
    [
      'title' => 'Retail & Commercial Spaces',
      'copy'  => 'Interior construction for retail centers, showrooms, and commercial spaces where finish quality is part of the brand experience.',
      'tone'  => '#244080',
      'full'  => false,
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>',
    ],
    [
      'title' => 'Commercial Painting',
      'copy'  => 'Interior and exterior commercial painting for new construction, tenant improvements, and renovation projects across the KC metro. We handle the full scope — priming, finish coats, and detail work immediately after drywall or as a standalone service. Post-construction finishes, repaint and refresh scopes, and full renovation painting for offices, healthcare facilities, retail spaces, and commercial build outs.',
      'tone'  => '#244080',
      'full'  => false,
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M18.37 2.63 14 7l-1.59-1.59a2 2 0 0 0-2.82 0L8 7l9 9 1.59-1.59a2 2 0 0 0 0-2.82L17 10l4.37-4.37a2.12 2.12 0 1 0-3-3z"/><path d="M9 8c-2 3-4 3.5-7 4l8 10c2-1 6-5 6-7"/><path d="M14.5 17.5 4.5 15"/></svg>',
    ],
  ];

  /* ── GC bullets ─────────────────────────────────────────────────── */
  $gc_bullets = [
    'On time and coordinated with your project schedule',
    'Working cleanly around other trades without conflict',
    'Clear communication on scope, timeline, and any changes',
    'No hand-holding required to deliver quality work',
    'Available for recurring GC relationships, not just one-off projects',
    'Drywall and painting handled by the same crew no handoff gap before final inspection',
  ];

  /* ── Form services ──────────────────────────────────────────────── */
  $form_services = [
    'Drywall & Interior',
    'Drywall Installation & Finishing',
    'Tenant Improvement (TI)',
    'Office & Healthcare Build-Out',
    'Renovation & Remodel',
    'GC Pipeline Work',
    'Commercial Cleaning (Recurring)',
    'Landscaping & Grounds',
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
      src="/wp-content/uploads/2026/04/DrywallInteriorKCS-scaled.jpg"
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
          Services &nbsp;·&nbsp; Drywall & Interior
        </p>

        <h1 class="ajs-reveal-up mt-5 text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-6xl">
          Drywall, Painting & Interior Construction Services Overland Park & Kansas City
        </h1>

        <div class="mt-6 h-1 w-28 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>

        <p class="ajs-reveal-up mt-7 text-base leading-8 text-white/80 md:text-lg">
          Interior construction lives or dies on coordination and timing. The wrong subcontractor stalls the project, creates rework, and puts the delivery date at risk. KCS takes that variable off the board.
        </p>
        <p class="ajs-reveal-up mt-4 text-base leading-8 text-white/80 md:text-lg">
          We deliver commercial drywall, painting, and interior construction across the KC metro on time, clean, and ready for the next trade. When the drywall is done, we don't hand it off to someone else. We finish it.
        </p>

        <div class="ajs-reveal-up mt-9 flex flex-wrap gap-3">
          <a href="#contact-form" class="kcs-btn kcs-btn-gold inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em]">
            Request a Drywall Estimate
          </a>
          <a href="#what-we-do" class="kcs-btn kcs-btn-ghost inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
            View Services
          </a>
        </div>
      </div>

      <!-- Stat block -->
      <div class="ajs-reveal-right hidden lg:flex lg:flex-col lg:gap-3">
        <?php foreach ([
          ['val' => '48hr', 'label' => 'Estimate Turnaround'],
          ['val' => 'KC+',  'label' => 'Metro Coverage'],
          ['val' => '0',    'label' => 'Rework Policy'],
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
        Interior Commercial Construction Services
      </h2>
      <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B3A6B,#C9A84C)]"></div>
    </div>

    <div class="mt-14 space-y-5">

      <!-- Drywall Installation — full width featured card -->
      <?php $featured = $drywall_services[0]; ?>
      <article class="ajs-reveal-up group relative overflow-hidden border border-[#1B3A6B]/10 bg-[#F5F4EF]">
        <div class="absolute inset-x-0 top-0 h-[5px] transition-all duration-500 group-hover:h-2"
          style="background:<?php echo esc_attr($featured['tone']); ?>;"></div>

        <div class="grid gap-0 md:grid-cols-[auto_1fr]">
          <!-- Icon col -->
          <div class="flex items-center justify-center border-b border-[#1B3A6B]/08 bg-[#1B3A6B] px-10 py-10 md:border-b-0 md:border-r">
            <div class="flex h-16 w-16 items-center justify-center text-[#C9A84C]">
              <?php echo $featured['icon']; ?>
            </div>
          </div>
          <!-- Content -->
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

      <!-- Remaining services — 2-col grid -->
      <div class="grid gap-5 md:grid-cols-2">
        <?php foreach (array_slice($drywall_services, 1) as $svc) : ?>
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
     3. FOR GENERAL CONTRACTORS
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#1B3A6B] py-20 text-white lg:py-28">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(201,168,76,0.10),transparent_40%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-14 xl:grid-cols-[1fr_1fr] xl:gap-20">

      <!-- Left: copy -->
      <div class="ajs-reveal-left">
        <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">For General Contractors</p>
        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
          A Subcontractor That Doesn't Add to Your Problem List
        </h2>
        <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>

        <p class="mt-7 text-base leading-8 text-white/76">
          When a GC has a post-construction clean with KCS, the feedback is almost always the same: they showed up, did the work, and got out without creating a single issue. That is how we approach drywall as a subcontractor whose job is to make your job easier, not harder.
        </p>

        <div class="mt-8">
          <a href="#contact-form" class="kcs-btn kcs-btn-gold inline-flex items-center justify-center px-7 py-4 text-sm font-black uppercase tracking-[0.14em]">
            Work With Us on Your Next Project
          </a>
        </div>
      </div>

      <!-- Right: numbered bullets -->
      <div class="ajs-reveal-right">
        <ul class="space-y-0">
          <?php foreach ($gc_bullets as $i => $bullet) : ?>
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
            "They showed up, did the work, and got out without creating a single issue."
          </p>
          <span class="mt-2 block text-[0.68rem] font-black uppercase tracking-[0.14em] text-[#C9A84C]">
            Consistent GC Feedback
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
        <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Request a Drywall or Interior Construction Estimate</p>
        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B3A6B] md:text-5xl">
          Tell us about the project.
        </h2>
        <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B3A6B,#C9A84C)]"></div>
        <p class="mt-6 max-w-md text-base leading-8 text-[#1B3A6B]/70">
          Tell us about the project scope, timeline, facility type, and location. We will get back to you within 48 hours.
        </p>

        <!-- Response promise -->
        <div class="mt-10 space-y-3">
          <?php foreach ([
            ['icon' => '⏱', 'text' => 'Estimate within 48 hours of inquiry'],
            ['icon' => '📐', 'text' => 'Clear scope, timeline, and pricing — no ambiguity'],
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
        data-prefix="rw"
        data-eyebrow="Free Estimate"
        data-form-title="Request a Drywall Estimate"
        data-form-subtitle="We respond within 48 hours."
        data-btn-text="Request a Drywall Estimate →"
        data-service-default="Drywall & Interior">
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
        ['title' => 'Commercial Cleaning', 'href' => '/services/commercial-cleaning',  'tone' => '#1B3A6B'],
        ['title' => 'Landscaping & Grounds','href' => '/services/landscaping-grounds', 'tone' => '#244080'],
        ['title' => 'Roofing & Siding',     'href' => '/services/roofing-siding',      'tone' => '#A8882E'],
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

  .kcs-svc-drywall {
    font-family: "Montserrat", "Segoe UI", sans-serif;
  }
  .kcs-svc-drywall h1,
  .kcs-svc-drywall h2,
  .kcs-svc-drywall h3 {
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

  const form      = document.getElementById("kcsRwlForm")
  const submitBtn = document.getElementById("kcsRwlSubmitBtn")
  const successEl = document.getElementById("kcsRwlFormSuccess")
  const errorEl   = document.getElementById("kcsRwlFormError")

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
        name:    document.getElementById("rw_name").value,
        phone:   document.getElementById("rw_phone").value,
        email:   document.getElementById("rw_email").value,
        service: document.getElementById("rw_service").value,
        city:    document.getElementById("rw_city").value,
        message: document.getElementById("rw_details").value,
      }
    ).then(function () {
      form.reset()
      document.getElementById("rw_service").value = "Drywall & Interior"
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