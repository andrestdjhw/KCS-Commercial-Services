<?php
/**
 * Template Name: About Template
 *
 * About Us — KCS Commercial Services LLC
 * kcscommercial.com/about-us/
 */

get_header(); ?>

<main class="kcs-about-page bg-[#F5F4EF] text-[#1B2B6B] overflow-hidden">

<?php
  /* ── Values ───────────────────────────────────────────────────────── */
  $values = [
    [
      'title' => 'Reliability is Non Negotiable',
      'copy'  => 'We show up when we say we will. Every time. Inconsistency is the single biggest complaint in this industry and we treat eliminating it as our primary competitive advantage.',
      'tone'  => '#1B2B6B',
    ],
    [
      'title' => 'Silence is the Goal',
      'copy'  => 'The best service is the kind you never have to think about. If your facility manager never has to call us about a problem, we have done our job correctly.',
      'tone'  => '#243580',
    ],
    [
      'title' => 'Relationships Before Upsells',
      'copy'  => 'We earn the right to expand the relationship by delivering on the first contract. Trust is built on track record, not on a sales pitch.',
      'tone'  => '#C9A84C',
    ],
    [
      'title' => 'The Asset is the Priority',
      'copy'  => 'Your building is an investment. The way it looks affects tenant retention, lease renewals, and long term property value. We think like asset managers, not janitors.',
      'tone'  => '#A8882E',
    ],
    [
      'title' => 'Compliance Protects Everyone',
      'copy'  => 'In healthcare and education a poorly maintained building is a liability. We maintain documented protocols and traceable service records so your facility is always audit ready.',
      'tone'  => '#1B2B6B',
    ],
    [
      'title' => 'One Standard, Every Location',
      'copy'  => 'Whether we are servicing a single office or a portfolio of ten properties, the standard does not change based on the size of the contract.',
      'tone'  => '#243580',
    ],
  ];

  /* ── Who we serve ─────────────────────────────────────────────────── */
  $clients = [
    [
      'title' => 'Property Managers',
      'copy'  => 'Multi property portfolios across Johnson County. You need one reliable partner for cleaning, grounds, and maintenance across all your assets with one point of contact and one standard at every site.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>',
    ],
    [
      'title' => 'Healthcare & Education',
      'copy'  => 'Hospitals, clinics, school districts, and universities. You need documented protocols, compliance-ready records, and a contractor who understands the standards that come with regulated, high traffic environments.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>',
    ],
    [
      'title' => 'General Contractors',
      'copy'  => 'GCs building across KC who need a post construction cleaning crew that shows up on time, coordinates without friction, and is ready to take on interior and exterior scopes on the next project.',
      'icon'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>',
    ],
  ];

  /* ── Form services ────────────────────────────────────────────────── */
  $form_services = [
    'Commercial Cleaning (Recurring)',
    'Post Construction Cleaning',
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
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.12),transparent_38%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(36,53,128,0.60),transparent_45%)]"></div>

  <div class="relative mx-auto max-w-5xl px-4 text-center">
    <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.28em] text-[#C9A84C]">
      About KCS Commercial Services
    </p>

    <h1 class="ajs-reveal-up mt-5 text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-6xl lg:text-7xl">
      We're Not a Cleaning Company.<br class="hidden md:block"> We're a Building Services Platform.
    </h1>

    <div class="mx-auto mt-6 h-1 w-28 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>

    <p class="ajs-reveal-up mx-auto mt-7 max-w-3xl text-base leading-8 text-white/80 md:text-lg">
      KCS Commercial Services was built to give property managers, facility directors, and institutional buyers a partner they never have to chase. From commercial cleaning to landscaping, drywall, and roofing we manage the asset so you can manage the business.
    </p>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     2. OUR STORY
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden border-b border-[#1B2B6B]/10 bg-white py-20 lg:py-28">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.07),transparent_30%)]"></div>
  <div class="absolute left-0 top-0 h-full w-[5px] bg-[linear-gradient(180deg,#C9A84C,#1B2B6B,#C9A84C)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-12 xl:grid-cols-[0.82fr_1.18fr] xl:gap-16">

      <div class="ajs-reveal-left">
        <div class="xl:sticky xl:top-28">
          <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Our Story</p>
          <h2 class="mt-4 max-w-[12ch] text-3xl font-black leading-[0.94] tracking-[-0.05em] text-[#1B2B6B] md:text-5xl">
            Built on a Simple Premise
          </h2>
          <div class="mt-6 h-1 w-20 bg-[linear-gradient(90deg,#1B2B6B,#C9A84C)]"></div>

          <div class="mt-10 border-l-4 border-[#C9A84C] bg-[#F5F4EF] px-6 py-6">
            <p class="text-xl font-black leading-tight tracking-[-0.03em] text-[#1B2B6B] md:text-2xl">
              One partner. One standard. One call.
            </p>
          </div>
        </div>
      </div>

      <div class="ajs-reveal-right">
        <div class="relative overflow-hidden border border-[#1B2B6B]/10 bg-[#FDFCF8] p-7 shadow-[0_20px_44px_rgba(27,43,107,0.07)] md:p-10">
          <div class="absolute right-0 top-0 h-24 w-24 translate-x-1/4 -translate-y-1/4 rotate-12 bg-[#C9A84C]/08"></div>

          <div class="space-y-6 text-base leading-8 text-[#1B2B6B]/76">
            <p>KCS Commercial Services LLC was founded in 2025 because property managers, facility directors, and institutional buyers deserve a service partner built around their standards not the other way around. Too often, finding a reliable building services contractor takes longer than it should, and the search starts over sooner than it should. We built KCS to make that search the last one our clients ever have to do.</p>

            <p>We started with commercial cleaning because it is the most recurring, most trust-dependent service in building maintenance. A monthly cleaning contract means we are in your facility every week. That frequency builds familiarity, accountability, and the kind of operational trust that makes everything else possible.</p>

            <div class="border border-[#1B2B6B]/10 bg-white px-6 py-5">
              <p class="text-lg font-black leading-7 tracking-[-0.03em] text-[#1B2B6B]">
                Not because more services means more revenue but because the property manager who trusts us for cleaning should not have to find three other vendors for everything else their building needs.
              </p>
            </div>

            <p>From that anchor we built a full platform: landscaping and grounds, interior drywall, and exterior roofing and siding. One partner. One standard. One call.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     3. WHAT WE BELIEVE
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#F5F4EF] py-20 lg:py-28">
  <div class="absolute right-0 top-0 h-full w-[28%] bg-[#1B2B6B]/03"></div>

  <div class="relative mx-auto max-w-7xl px-4">

    <div class="ajs-reveal-up max-w-3xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">What We Believe</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B2B6B] md:text-5xl">
        The Values Behind Every Contract
      </h2>
      <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B2B6B,#C9A84C)]"></div>
    </div>

    <div class="mt-14 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
      <?php foreach ($values as $value) : ?>
        <article class="ajs-reveal-stagger group relative overflow-hidden border border-[#1B2B6B]/10 bg-white p-7">
          <div class="absolute inset-x-0 top-0 h-[4px] transition-all duration-500 group-hover:h-[6px]"
            style="background:<?php echo esc_attr($value['tone']); ?>;"></div>

          <div class="mb-6 mt-2 flex gap-2">
            <span class="h-8 w-8 border border-[#1B2B6B]/10 transition-transform duration-500 group-hover:rotate-6 group-hover:scale-110"
              style="background:<?php echo esc_attr($value['tone']); ?>;"></span>
            <span class="h-8 w-8 border border-[#1B2B6B]/10 bg-[#C9A84C]/20 transition-transform duration-500 group-hover:-rotate-6 group-hover:scale-110"></span>
          </div>

          <h3 class="text-lg font-black leading-tight tracking-[-0.03em] text-[#1B2B6B]">
            <?php echo esc_html($value['title']); ?>
          </h3>
          <p class="mt-3 text-[0.88rem] leading-7 text-[#1B2B6B]/68">
            <?php echo esc_html($value['copy']); ?>
          </p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     4. WHO WE SERVE
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden border-y border-[#1B2B6B]/10 bg-[#1B2B6B] py-20 text-white lg:py-28">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(201,168,76,0.10),transparent_40%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">

    <div class="ajs-reveal-up max-w-3xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Who We Serve</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
        Built for Institutional Buyers and Property Professionals
      </h2>
      <p class="mt-5 max-w-2xl text-base leading-8 text-white/76">
        We work best with clients who have high standards, multiple properties, and no patience for vendors who require supervision. If you manage a portfolio, run a facility with compliance requirements, or oversee construction projects in the KC metro we were built for you.
      </p>
    </div>

    <div class="mt-14 grid gap-6 md:grid-cols-3">
      <?php foreach ($clients as $client) : ?>
        <article class="ajs-reveal-stagger group relative overflow-hidden border border-white/10 bg-white/06 p-8 backdrop-blur-sm transition hover:bg-white/10">
          <div class="absolute inset-x-0 bottom-0 h-[3px] bg-[linear-gradient(90deg,#C9A84C,#E8D49A)] opacity-0 transition-opacity duration-400 group-hover:opacity-100"></div>

          <div class="mb-5 flex h-12 w-12 items-center justify-center border border-[#C9A84C]/30 bg-[#C9A84C]/12 text-[#C9A84C]">
            <?php echo $client['icon']; ?>
          </div>

          <h3 class="text-xl font-black tracking-[-0.03em]">
            <?php echo esc_html($client['title']); ?>
          </h3>
          <p class="mt-4 text-[0.9rem] leading-7 text-white/70">
            <?php echo esc_html($client['copy']); ?>
          </p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     5. WORK WITH US — Contact Form
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-white py-20 lg:py-28">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(201,168,76,0.07),transparent_28%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(27,43,107,0.05),transparent_32%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-14 lg:grid-cols-[1fr_520px]">

      <!-- Copy -->
      <div class="ajs-reveal-left flex flex-col justify-center">
        <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">Work With Us</p>
        <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B2B6B] md:text-5xl">
          Ready to Stop Chasing Vendors?
        </h2>
        <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B2B6B,#C9A84C)]"></div>
        <p class="mt-6 max-w-lg text-base leading-8 text-[#1B2B6B]/72">
          Tell us about your facility, your standards, and what you need from a service partner. We will put together a contract that makes sense for your operation.
        </p>

        <div class="mt-10 space-y-4">
          <div class="border border-[#1B2B6B]/10 bg-[#F5F4EF] px-6 py-5">
            <p class="text-[0.65rem] font-black uppercase tracking-[0.18em] text-[#C9A84C]">Phone</p>
            <a href="tel:+19132577291" class="mt-1.5 block text-lg font-black text-[#1B2B6B] transition hover:text-[#C9A84C]">
              (913) 257-7291
            </a>
          </div>
          <div class="border border-[#1B2B6B]/10 bg-[#F5F4EF] px-6 py-5">
            <p class="text-[0.65rem] font-black uppercase tracking-[0.18em] text-[#1B2B6B]/50">Email</p>
            <a href="#" class="mt-1.5 block text-lg font-black text-[#1B2B6B] transition hover:text-[#C9A84C]">
              info@kcscommercial.com
            </a>
          </div>
          <div class="border border-[#1B2B6B]/10 bg-[#C9A84C]/10 px-6 py-5">
            <p class="text-[0.65rem] font-black uppercase tracking-[0.18em] text-[#1B2B6B]/60">Service Area</p>
            <p class="mt-1.5 text-base font-bold leading-6 text-[#1B2B6B]">
              Kansas City Metro, KS &nbsp;·&nbsp; Spring Hills, KS
            </p>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div
        data-contact-form
        data-prefix="about"
        data-eyebrow="Get a Free Contract Quote"
        data-form-title="Tell us about your facility."
        data-form-subtitle="We'll respond within 24 hours."
        data-btn-text="Submit Request →">
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
    position: relative;
    border: 1px solid transparent;
    overflow: hidden;
    transition: transform .22s ease, box-shadow .22s ease,
                background .22s ease, border-color .22s ease, color .22s ease;
  }
  .kcs-btn::after {
    content: "";
    position: absolute; inset: 0;
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
    display: block;
    margin-bottom: 0.45rem;
    font-size: 0.7rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 0.16em;
    color: rgba(255,255,255,0.65);
  }

  .kcs-input {
    width: 100%;
    padding: 0.9rem 1rem;
    border: 1px solid rgba(255,255,255,0.14);
    background: rgba(255,255,255,0.07);
    color: #ffffff;
    font-size: 0.92rem;
    line-height: 1.5;
    font-family: inherit;
    outline: none;
    appearance: none;
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

  /* reCAPTCHA spacing */
  .g-recaptcha { margin-top: 0.25rem; }

  .ajs-reveal-up,
  .ajs-reveal-left,
  .ajs-reveal-right,
  .ajs-reveal-stagger {
    opacity: 0;
    will-change: opacity, transform;
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
    opacity: 1;
    transform: translate(0, 0);
  }

  .hidden { display: none !important; }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-up, .ajs-reveal-left,
    .ajs-reveal-right, .ajs-reveal-stagger,
    .kcs-btn {
      opacity: 1 !important; transform: none !important;
      transition: none !important; animation: none !important;
    }
  }
</style>

<!-- reCAPTCHA v2 API -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- EmailJS -->
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
        const delay = entry.target.classList.contains("ajs-reveal-stagger")
          ? (idx % 8) * 60 : 0
        setTimeout(() => entry.target.classList.add("is-visible"), delay)
      }
    })
  }, { threshold: 0.10 })
  items.forEach(el => observer.observe(el))

  /* ── EmailJS ────────────────────────────────────────────────────── */
  if (window.emailjs) {
    emailjs.init({ publicKey: "Y8K5QxlYLcq0GsUbt" })
  }

  /* ── Form ───────────────────────────────────────────────────────── */
  const form         = document.getElementById("kcsAboutForm")
  const submitBtn    = document.getElementById("kcsAboutSubmitBtn")
  const successEl    = document.getElementById("kcsAboutFormSuccess")
  const errorEl      = document.getElementById("kcsAboutFormError")
  const captchaError = document.getElementById("kcsAboutCaptchaError")

  if (!form) return

  form.addEventListener("submit", function (e) {
    e.preventDefault()
    successEl.classList.add("hidden")
    errorEl.classList.add("hidden")
    captchaError.classList.add("hidden")

    // ── Validate reCAPTCHA ───────────────────────────────────────────
    const recaptchaResponse = grecaptcha.getResponse()
    if (!recaptchaResponse) {
      captchaError.classList.remove("hidden")
      captchaError.scrollIntoView({ behavior: "smooth", block: "center" })
      return
    }

    const originalText    = submitBtn.textContent
    submitBtn.disabled    = true
    submitBtn.textContent = "Sending..."

    const formData = {
      name:    document.getElementById("about_name").value,
      phone:   document.getElementById("about_phone").value,
      email:   document.getElementById("about_email").value,
      service: document.getElementById("about_service").value,
      message: document.getElementById("about_details").value,
    }

    emailjs.send(
      "service_5e06r2o",
      "template_r2st5jy",  // ← notificación interna a KCS
      formData
    ).then(function () {
      // ── Auto-reply al cliente ──────────────────────────────────────
      return emailjs.send(
        "service_5e06r2o",
        "template_5h990ir",  // ← confirmación al cliente
        {
          name:  formData.name,
          email: formData.email,
        }
      )
    }).then(function () {
      form.reset()
      grecaptcha.reset()
      successEl.classList.remove("hidden")
      submitBtn.disabled    = false
      submitBtn.textContent = originalText
      successEl.scrollIntoView({ behavior: "smooth", block: "center" })
    }).catch(function (err) {
      console.error("EmailJS error:", err)
      grecaptcha.reset()
      errorEl.classList.remove("hidden")
      submitBtn.disabled    = false
      submitBtn.textContent = originalText
    })
  })
})
</script>

<?php get_footer(); ?>