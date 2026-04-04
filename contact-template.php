<?php
/**
 * Template Name: Contact Template
 *
 * Contact Us — KCS Commercial Services LLC
 * kcscommercial.com/contact-us/
 */

get_header(); ?>

<main class="kcs-contact-page bg-[#F5F4EF] text-[#1B2B6B] overflow-hidden">

<?php
  $form_services = [
    'Commercial Cleaning (Recurring)',
    'Post Construction Cleaning',
    'Landscaping & Grounds',
    'Drywall & Interior',
    'Roofing & Siding',
    'Multiple Services',
    'Other / Not Sure',
  ];

  $service_area = [
    'Overland Park, KS',
    'Olathe, KS',
    'Lenexa, KS',
    'Shawnee, KS',
    'Kansas City, KS',
    'Paola, KS',
    'Springfield, MO',
  ];

  $next_steps = [
    [
      'num'   => '01',
      'title' => 'Within 24 Hours',
      'copy'  => 'A member of our team reviews your request and reaches out by phone or email to confirm your details and schedule a site visit if needed.',
      'tone'  => '#1B2B6B',
    ],
    [
      'num'   => '02',
      'title' => 'Within 48 Hours of Site Visit',
      'copy'  => 'We deliver a structured proposal clear pricing, clear deliverables, no ambiguity. You will know exactly what you are getting and what it costs.',
      'tone'  => '#243580',
    ],
    [
      'num'   => '03',
      'title' => 'Contract & Onboarding',
      'copy'  => 'Once you are ready to move forward we handle the paperwork and onboarding so service starts on your timeline.',
      'tone'  => '#C9A84C',
    ],
    [
      'num'   => '04',
      'title' => 'Ongoing Communication',
      'copy'  => 'After launch you have a direct point of contact. No call centers. No runaround. One person who knows your account and responds when you reach out.',
      'tone'  => '#A8882E',
    ],
  ];
?>

<!-- ════════════════════════════════════════════════════════════════════
     1. HERO
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden bg-[#13204F] py-16 text-white lg:py-24">
  <div class="absolute inset-0 opacity-[0.06]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.12),transparent_36%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(36,53,128,0.55),transparent_45%)]"></div>

  <div class="relative mx-auto max-w-4xl px-4 text-center">
    <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.28em] text-[#C9A84C]">
      Contact Us &nbsp;·&nbsp; kcscommercial.com
    </p>

    <h1 class="ajs-reveal-up mt-5 text-4xl font-black leading-[0.95] tracking-[-0.04em] md:text-6xl lg:text-7xl">
      Let's Talk About Your Building
    </h1>

    <div class="mx-auto mt-6 h-1 w-28 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>

    <p class="ajs-reveal-up mx-auto mt-7 max-w-2xl text-base leading-8 text-white/80 md:text-lg">
      Whether you need a recurring cleaning contract, a landscaping proposal, or a roofing estimate after a storm the process starts here. Fill out the form, tell us what you are working with, and we will get back to you within 24 hours with a clear next step.
    </p>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     2. FORM + CONTACT INFO
═════════════════════════════════════════════════════════════════════ -->
<section class="relative overflow-hidden py-20 lg:py-28">
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(201,168,76,0.06),transparent_28%)]"></div>

  <div class="relative mx-auto max-w-7xl px-4">
    <div class="grid gap-10 xl:grid-cols-[1.1fr_0.9fr] xl:gap-12">

      <!-- ── LEFT: Primary Form ── -->
      <div class="ajs-reveal-left">
        <div class="relative overflow-hidden border border-[#1B2B6B]/12 bg-[#13204F] shadow-[0_24px_60px_rgba(27,43,107,0.20)]">
          <div class="h-1 w-full bg-[linear-gradient(90deg,#C9A84C,#E8D49A,#C9A84C)]"></div>

          <div class="p-7 md:p-10">
            <p class="text-xs font-black uppercase tracking-[0.22em] text-[#C9A84C]">
              Get in Touch
            </p>
            <h2 class="mt-3 text-2xl font-black leading-tight tracking-[-0.04em] text-white md:text-3xl">
              Request a Quote or Ask a Question
            </h2>

            <!-- Success / Error -->
            <div id="kcsContactSuccess" class="hidden mt-5 border border-green-300/40 bg-green-500/15 px-5 py-4 text-sm leading-6 text-green-200">
              Thank you. We have received your request and will respond within 24 hours. If your need is urgent, call us directly at <strong>[phone number]</strong>.
            </div>
            <div id="kcsContactError" class="hidden mt-5 border border-red-300/40 bg-red-500/15 px-5 py-4 text-sm text-red-200">
              Something went wrong. Please try again.
            </div>

            <form id="kcsContactForm" class="mt-8 space-y-5" novalidate>

              <!-- Row 1: Name + Company -->
              <div class="grid gap-5 md:grid-cols-2">
                <div>
                  <label for="ct_name" class="kcs-label">Full Name *</label>
                  <input id="ct_name" name="name" type="text" class="kcs-input" required>
                </div>
                <div>
                  <label for="ct_company" class="kcs-label">Company / Organization</label>
                  <input id="ct_company" name="company" type="text" class="kcs-input">
                </div>
              </div>

              <!-- Row 2: Phone + Email -->
              <div class="grid gap-5 md:grid-cols-2">
                <div>
                  <label for="ct_phone" class="kcs-label">Phone Number *</label>
                  <input id="ct_phone" name="phone" type="tel" class="kcs-input" required>
                </div>
                <div>
                  <label for="ct_email" class="kcs-label">Email Address *</label>
                  <input id="ct_email" name="email" type="email" class="kcs-input" required>
                </div>
              </div>

              <!-- Row 3: Service + City -->
              <div class="grid gap-5 md:grid-cols-2">
                <div>
                  <label for="ct_service" class="kcs-label">Service Needed *</label>
                  <select id="ct_service" name="service" class="kcs-input" required>
                    <option value="">Select a service</option>
                    <?php foreach ($form_services as $opt) : ?>
                      <option value="<?php echo esc_attr($opt); ?>"><?php echo esc_html($opt); ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div>
                  <label for="ct_city" class="kcs-label">City / Location *</label>
                  <input id="ct_city" name="city" type="text" class="kcs-input" required>
                </div>
              </div>

              <!-- Textarea -->
              <div>
                <label for="ct_details" class="kcs-label">Tell Us About Your Facility *</label>
                <textarea id="ct_details" name="message" rows="5" class="kcs-input kcs-textarea" required></textarea>
              </div>

              <div class="pt-1">
                <button id="kcsContactSubmitBtn" type="submit"
                  class="kcs-btn kcs-btn-gold w-full inline-flex items-center justify-center py-4 text-sm font-black uppercase tracking-[0.14em]">
                  Send My Request →
                </button>
              </div>

              <p class="text-center text-[0.7rem] text-white/45">
                🔒 Your information is private and will never be shared.
              </p>
            </form>
          </div>
        </div>
      </div>

      <!-- ── RIGHT: Contact Info + Map ── -->
      <div class="ajs-reveal-right flex flex-col gap-6">

        <!-- Phone -->
        <div class="border border-[#1B2B6B]/10 bg-white px-6 py-5 shadow-[0_10px_24px_rgba(27,43,107,0.06)]">
          <p class="text-[0.65rem] font-black uppercase tracking-[0.20em] text-[#C9A84C]">Phone</p>
          <a href="#" class="mt-2 block text-xl font-black text-[#1B2B6B] transition hover:text-[#C9A84C]">
            [Phone Number]
          </a>
        </div>

        <!-- Email -->
        <div class="border border-[#1B2B6B]/10 bg-white px-6 py-5 shadow-[0_10px_24px_rgba(27,43,107,0.06)]">
          <p class="text-[0.65rem] font-black uppercase tracking-[0.20em] text-[#1B2B6B]/50">Email</p>
          <a href="#" class="mt-2 block text-xl font-black text-[#1B2B6B] transition hover:text-[#C9A84C]">
            [Email Address]
          </a>
        </div>

        <!-- Service Area -->
        <div class="border border-[#1B2B6B]/10 bg-white px-6 py-6 shadow-[0_10px_24px_rgba(27,43,107,0.06)]">
          <p class="text-[0.65rem] font-black uppercase tracking-[0.20em] text-[#1B2B6B]/50">Service Area</p>
          <ul class="mt-3 space-y-2">
            <?php foreach ($service_area as $city) : ?>
              <li class="flex items-center gap-2.5 text-sm font-bold text-[#1B2B6B]">
                <span class="h-2 w-2 shrink-0 rotate-45 bg-[#C9A84C]"></span>
                <?php echo esc_html($city); ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Response time -->
        <div class="border border-[#C9A84C]/30 bg-[#C9A84C]/08 px-6 py-5">
          <p class="text-[0.65rem] font-black uppercase tracking-[0.20em] text-[#A8882E]">Response Time</p>
          <p class="mt-2 text-sm leading-7 text-[#1B2B6B]/80">
            We respond to all inquiries within <strong class="font-black text-[#1B2B6B]">24 hours</strong>. Proposals are delivered within <strong class="font-black text-[#1B2B6B]">48 hours</strong> of a site visit.
          </p>
        </div>

        <!-- Map embed — centered on Overland Park, KS -->
        <div class="overflow-hidden border border-[#1B2B6B]/10 shadow-[0_10px_24px_rgba(27,43,107,0.06)]">
          <iframe
            title="KCS Commercial Services — Service Area Map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198304.2!2d-94.8!3d38.9!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87c0916aba29c561%3A0x60e1aba2ef9cca67!2sOverland%20Park%2C%20KS!5e0!3m2!1sen!2sus!4v1700000000000"
            width="100%"
            height="260"
            style="border:0;display:block;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ════════════════════════════════════════════════════════════════════
     3. WHAT HAPPENS NEXT
═════════════════════════════════════════════════════════════════════ -->
<section class="border-t border-[#1B2B6B]/10 bg-white py-20 lg:py-28">
  <div class="mx-auto max-w-7xl px-4">

    <div class="ajs-reveal-up max-w-3xl">
      <p class="text-xs font-black uppercase tracking-[0.26em] text-[#C9A84C]">What Happens Next</p>
      <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.05em] text-[#1B2B6B] md:text-5xl">
        Here's What to Expect After You Submit
      </h2>
      <div class="mt-5 h-1 w-20 bg-[linear-gradient(90deg,#1B2B6B,#C9A84C)]"></div>
    </div>

    <div class="mt-14 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
      <?php foreach ($next_steps as $step) : ?>
        <article class="ajs-reveal-stagger relative overflow-hidden border border-[#1B2B6B]/10 bg-[#F5F4EF] p-7">
          <div class="absolute right-0 top-0 h-16 w-16 translate-x-1/4 -translate-y-1/4 rotate-12 bg-[#C9A84C]/10"></div>

          <span class="inline-flex px-4 py-1.5 text-[0.7rem] font-black uppercase tracking-[0.18em] text-[#E8D49A]"
            style="background:<?php echo esc_attr($step['tone']); ?>;">
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
  .kcs-textarea  { resize: vertical; min-height: 120px; }
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

  const form      = document.getElementById("kcsContactForm")
  const submitBtn = document.getElementById("kcsContactSubmitBtn")
  const successEl = document.getElementById("kcsContactSuccess")
  const errorEl   = document.getElementById("kcsContactError")

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
        name:    document.getElementById("ct_name").value,
        company: document.getElementById("ct_company").value,
        phone:   document.getElementById("ct_phone").value,
        email:   document.getElementById("ct_email").value,
        service: document.getElementById("ct_service").value,
        city:    document.getElementById("ct_city").value,
        message: document.getElementById("ct_details").value,
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