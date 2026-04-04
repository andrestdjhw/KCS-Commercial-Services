<?php
/**
 * Template Name: Services Template
 *
 * Services Master Page — KCS Commercial Services LLC
 * kcscommercial.com/services/
 */

get_header(); ?>

<main class="kcs-services-page bg-[#F5F4EF] text-[#1B2B6B] overflow-hidden">

<?php
  $service_cards = [
    [
      'title'   => 'Commercial Cleaning',
      'tagline' => 'Institutional-grade janitorial service for offices, healthcare facilities, schools, and post-construction sites. Documented protocols. Consistent execution. Every visit.',
      'href'    => '/services/commercial-cleaning',
      'tone'    => '#1B2B6B',
    ],
    [
      'title'   => 'Landscaping & Grounds',
      'tagline' => 'Commercial lawn maintenance, hardscaping, and seasonal snow removal for corporate campuses, institutional grounds, and multi-property portfolios.',
      'href'    => '/services/landscaping-grounds',
      'tone'    => '#243580',
    ],
    [
      'title'   => 'Drywall & Interior',
      'tagline' => 'Commercial drywall installation, tenant improvements, and interior build-outs for general contractors and property owners across the KC metro.',
      'href'    => '/services/drywall-interior',
      'tone'    => '#C9A84C',
    ],
    [
      'title'   => 'Roofing & Siding',
      'tagline' => 'Commercial roof replacement, repair, and siding work. Fast response for hail and storm damage. Trusted by property managers who already rely on us for ongoing service.',
      'href'    => '/services/roofing-siding',
      'tone'    => '#A8882E',
    ],
  ];

  $platform_steps = [
    [
      'label' => 'Cleaning',
      'copy'  => 'Creates the relationship and the access.',
      'tone'  => '#1B2B6B',
    ],
    [
      'label' => 'Grounds',
      'copy'  => 'Adds recurring margin and visual presentation.',
      'tone'  => '#243580',
    ],
    [
      'label' => 'Drywall',
      'copy'  => 'Expands the scope for GC relationships.',
      'tone'  => '#C9A84C',
    ],
    [
      'label' => 'Roofing',
      'copy'  => 'Converts urgency into high-value contracts with trust already in place.',
      'tone'  => '#A8882E',
    ],
  ];

  $form_services = [
    'Commercial Cleaning (Recurring)',
    'Post-Construction Cleaning',
    'Landscaping & Grounds',
    'Drywall & Interior',
    'Roofing & Siding',
    'Multiple Services',
  ];
?>

<!-- ════════════════════════════════════════════════════════════════════
     1. HERO
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#13204F] py-20 text-white lg:py-28">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.12),transparent_36%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(36,53,128,0.55),transparent_45%)]"></div>

  <div class="relative mx-auto max-w-5xl px-4">
    <div class="grid gap-12 lg:grid-cols-[1fr_auto] lg:items-end">

      <div>
        <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.28em] text-[#C9A84C]">
          Services &nbsp;·&nbsp; kcscommercial.com
        </p>

        <h1 class="ajs-reveal-up mt-5 text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-6xl lg:text-7xl">
          Every Service Your Building Needs. One Contract.
        </h1>

        <div class="mt-6 h-1 w-28 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>

        <p class="ajs-reveal-up mt-7 max-w-2xl text-base leading-8 text-white/80 md:text-lg">
          Most property managers and facility directors manage too many vendors. A cleaning company, a landscaper, a contractor for interior work, and another for roofing — each with their own schedules, standards, and invoices.
        </p>
        <p class="ajs-reveal-up mt-4 max-w-2xl text-base leading-8 text-white/80 md:text-lg">
          KCS was built to solve that. Four integrated service lines, one accountable partner, one point of contact.
        </p>
      </div>

      <!-- Service count badge -->
      <div class="ajs-reveal-right hidden lg:block">
        <div class="border border-[#C9A84C]/40 bg-[#C9A84C]/10 px-10 py-8 text-center">
          <span class="block font-black text-[4rem] leading-none tracking-[-0.04em] text-[#C9A84C]">4</span>
          <span class="mt-2 block text-[0.72rem] font-black uppercase tracking-[0.18em] text-white/70">Integrated<br>Service Lines</span>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     2. SERVICE CARDS — 2 × 2
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden border-b border-[#1B2B6B]/10 bg-white py-20 lg:py-28">
  <div class="absolute right-0 top-0 h-full w-[28%] bg-[#C9A84C]/03"></div>

  <div class="relative mx-auto max-w-7xl px-4">

    <div class="ajs-reveal-up max-w-2xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Four Service Lines</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B2B6B] md:text-5xl">
        One Reliable Partner
      </h2>
      <div class="mt-4 h-1 w-20 bg-[linear-gradient(90deg,#1B2B6B,#C9A84C)]"></div>
    </div>

    <div class="mt-14 grid gap-6 md:grid-cols-2">
      <?php foreach ($service_cards as $card) : ?>
        <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#1B2B6B]/10 bg-[#F5F4EF]">

          <div class="h-[5px] w-full transition-all duration-500 group-hover:h-2"
            style="background:<?php echo esc_attr($card['tone']); ?>;"></div>

          <div class="p-8 md:p-10">

            <!-- Accent squares -->
            <div class="mb-6 flex gap-2.5">
              <span class="h-9 w-9 border border-[#1B2B6B]/10 transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110"
                style="background:<?php echo esc_attr($card['tone']); ?>;"></span>
              <span class="h-9 w-9 border border-[#1B2B6B]/10 bg-[#C9A84C]/20 transition-transform duration-500 group-hover:-rotate-6 group-hover:scale-110"></span>
            </div>

            <h3 class="text-2xl font-black tracking-[-0.03em] text-[#1B2B6B]">
              <?php echo esc_html($card['title']); ?>
            </h3>

            <p class="mt-4 text-[0.92rem] leading-7 text-[#1B2B6B]/70">
              <?php echo esc_html($card['tagline']); ?>
            </p>

            <a href="<?php echo esc_url($card['href']); ?>"
              class="mt-7 inline-flex items-center gap-2 border-b-2 border-[#C9A84C] pb-0.5 text-sm font-black uppercase tracking-[0.12em] text-[#1B2B6B] transition-all hover:gap-3 hover:text-[#A8882E]">
              Learn More <span>→</span>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     3. HOW THE PLATFORM WORKS
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#1B2B6B] py-20 text-white lg:py-28">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(201,168,76,0.10),transparent_40%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">

    <div class="grid gap-14 xl:grid-cols-[1fr_1fr] xl:gap-20">

      <!-- Left: copy -->
      <div class="ajs-reveal-left">
        <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">How the Platform Works</p>
        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
          Each Service Builds on the Last
        </h2>
        <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>

        <div class="mt-8 space-y-6 text-base leading-8 text-white/76">
          <p>We do not offer four unrelated services. We offer a connected platform where each line reinforces the others.</p>

          <div class="border-l-4 border-[#C9A84C] bg-white/06 px-6 py-5">
            <p class="text-[0.95rem] leading-7 text-white/86">
              A property manager who signs a cleaning contract is one conversation away from consolidating their grounds maintenance. A GC who trusts us for post-construction cleaning is one project away from giving us the interior scope.
            </p>
          </div>

          <p>That is how the platform grows — not by selling, but by delivering.</p>
        </div>
      </div>

      <!-- Right: connected flow -->
      <div class="ajs-reveal-right">
        <div class="space-y-3">
          <?php foreach ($platform_steps as $i => $step) : ?>
            <div class="group flex items-stretch gap-0 border border-white/10 bg-white/05 transition hover:bg-white/08">

              <!-- Number + tone bar -->
              <div class="flex w-16 shrink-0 flex-col items-center justify-center py-5"
                style="background:<?php echo esc_attr($step['tone']); ?>;">
                <span class="text-xs font-black text-white/90">0<?php echo $i + 1; ?></span>
              </div>

              <div class="flex flex-col justify-center px-6 py-5">
                <span class="text-base font-black tracking-[-0.02em]">
                  <?php echo esc_html($step['label']); ?>
                </span>
                <span class="mt-1 text-[0.82rem] leading-5 text-white/65">
                  <?php echo esc_html($step['copy']); ?>
                </span>
              </div>

              <?php if ($i < count($platform_steps) - 1) : ?>
                <!-- Arrow connector rendered via next row's top border — nothing to render here -->
              <?php endif; ?>
            </div>
            <?php if ($i < count($platform_steps) - 1) : ?>
              <div class="mx-auto h-4 w-[2px] bg-[#C9A84C]/40"></div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     4. CONTACT FORM
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-white py-20 lg:py-28">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(201,168,76,0.07),transparent_28%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(27,43,107,0.05),transparent_32%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-14 lg:grid-cols-[1fr_520px]">

      <!-- Copy -->
      <div class="ajs-reveal-left flex flex-col justify-center">
        <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Not Sure Where to Start?</p>
        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B2B6B] md:text-5xl">
          Tell us about your property and what is not working.
        </h2>
        <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B2B6B,#C9A84C)]"></div>
        <p class="mt-6 max-w-md text-base leading-8 text-[#1B2B6B]/70">
          We will show you how KCS can simplify your operation — fewer vendors, one standard, one contract.
        </p>

        <!-- Services quick list -->
        <ul class="mt-8 space-y-3">
          <?php foreach ($service_cards as $card) : ?>
            <li class="flex items-center gap-3 text-[0.88rem] font-bold text-[#1B2B6B]/80">
              <span class="h-2.5 w-2.5 shrink-0 rotate-45"
                style="background:<?php echo esc_attr($card['tone']); ?>;"></span>
              <?php echo esc_html($card['title']); ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Form -->
      <div class="ajs-reveal-right">
        <div class="relative overflow-hidden border border-[#1B2B6B]/12 bg-[#13204F] shadow-[0_24px_60px_rgba(27,43,107,0.18)]">
          <div class="h-1 w-full bg-[linear-gradient(90deg,#C9A84C,#E8D49A,#C9A84C)]"></div>

          <div class="p-7 md:p-9">
            <p class="text-xs font-black uppercase tracking-[0.22em] text-[#C9A84C]">Free Consultation</p>
            <h3 class="mt-3 text-2xl font-black leading-tight tracking-[-0.04em] text-white">
              Request a Quote
            </h3>
            <p class="mt-2 text-sm leading-6 text-white/65">We'll respond within 24 hours.</p>

            <div id="kcsSvcFormSuccess" class="hidden mt-5 border border-green-300/40 bg-green-500/15 px-4 py-3 text-sm text-green-200">
              Thank you — we'll be in touch within 24 hours.
            </div>
            <div id="kcsSvcFormError" class="hidden mt-5 border border-red-300/40 bg-red-500/15 px-4 py-3 text-sm text-red-200">
              Something went wrong. Please try again.
            </div>

            <form id="kcsSvcForm" class="mt-7 space-y-4" novalidate>

              <div class="grid gap-4 md:grid-cols-2">
                <div>
                  <label for="svc_name" class="kcs-label">Full Name *</label>
                  <input id="svc_name" name="name" type="text" class="kcs-input" required>
                </div>
                <div>
                  <label for="svc_phone" class="kcs-label">Phone Number *</label>
                  <input id="svc_phone" name="phone" type="tel" class="kcs-input" required>
                </div>
              </div>

              <div>
                <label for="svc_email" class="kcs-label">Email Address *</label>
                <input id="svc_email" name="email" type="email" class="kcs-input" required>
              </div>

              <div>
                <label for="svc_service" class="kcs-label">Service Needed *</label>
                <select id="svc_service" name="service" class="kcs-input" required>
                  <option value="">Select a service</option>
                  <?php foreach ($form_services as $opt) : ?>
                    <option value="<?php echo esc_attr($opt); ?>"><?php echo esc_html($opt); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div>
                <label for="svc_details" class="kcs-label">Additional Details</label>
                <textarea id="svc_details" name="message" rows="4" class="kcs-input kcs-textarea"></textarea>
              </div>

              <div class="pt-1">
                <button id="kcsSvcSubmitBtn" type="submit"
                  class="kcs-btn kcs-btn-gold w-full inline-flex items-center justify-center py-4 text-sm font-black uppercase tracking-[0.14em]">
                  Request a Quote →
                </button>
              </div>

              <p class="text-center text-[0.7rem] text-white/45">
                🔒 Your information is private and will never be shared.
              </p>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap');

  .kcs-home {
    font-family: "Montserrat", "Segoe UI", sans-serif;
  }
  .kcs-home h1,
  .kcs-home h2,
  .kcs-home h3 {
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
    color: #13204F;
  }
  .kcs-btn-gold:hover {
    background: linear-gradient(135deg, #E8D49A, #C9A84C);
    box-shadow: 0 20px 44px rgba(201,168,76,0.38);
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
  .kcs-input option { background: #1B2B6B; color: #fff; }

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
        const delay = entry.target.classList.contains("ajs-reveal-stagger") ? (idx % 8) * 60 : 0
        setTimeout(() => entry.target.classList.add("is-visible"), delay)
      }
    })
  }, { threshold: 0.10 })
  items.forEach(el => observer.observe(el))

  /* ── EmailJS ────────────────────────────────────────────────────── */
  if (window.emailjs) {
    emailjs.init({ publicKey: "CDikedp0ZSxxiBeLb" }) // replace with KCS key
  }

  const form      = document.getElementById("kcsSvcForm")
  const submitBtn = document.getElementById("kcsSvcSubmitBtn")
  const successEl = document.getElementById("kcsSvcFormSuccess")
  const errorEl   = document.getElementById("kcsSvcFormError")

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
        name:    document.getElementById("svc_name").value,
        phone:   document.getElementById("svc_phone").value,
        email:   document.getElementById("svc_email").value,
        service: document.getElementById("svc_service").value,
        message: document.getElementById("svc_details").value,
      }
    ).then(function () {
      form.reset()
      successEl.classList.remove("hidden")
      submitBtn.disabled    = false
      submitBtn.textContent = originalText
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