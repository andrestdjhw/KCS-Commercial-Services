<?php
/**
 * Template Name: Contact Template
 *
 * Contact page for Real Painting Corp
 * Navbar y footer vienen de header.php / footer.php.
 */

get_header(); ?>

<main class="rpc-contact-page bg-[#f6f5f0] text-[#192F44] overflow-hidden">

  <?php
    $service_options = [
      'Interior Painting',
      'Exterior Painting',
      'Kitchen Remodeling',
      'Bathroom Remodeling',
      'Cabinet Refinishing',
      'Surface Repair & Prep',
      'Pressure Washing',
      'Commercial Painting',
      'Other',
    ];

    $faqs = [
      [
        'q' => 'What areas do you serve?',
        'a' => 'We serve homeowners across Orange County, Los Angeles County, Riverside County, and San Bernardino County — including Rancho Santa Margarita, Irvine, Mission Viejo, Coto de Caza, Ladera Ranch, Corona, Murrieta, Temecula, Menifee, Rancho Cucamonga, Pasadena, Glendale, Arcadia, and surrounding communities.',
      ],
      [
        'q' => 'Are you licensed and insured?',
        'a' => 'Yes. Real Painting Corp holds a C-33 Painting and Decorating license (CSLB #1111920), General Liability insurance, Workers’ Compensation coverage, and a surety bond. We are fully compliant with OSHA and California regulations.',
      ],
      [
        'q' => 'Do you offer free estimates?',
        'a' => 'Yes. We provide free, no-obligation property assessments and detailed written estimates. Contact us to schedule yours.',
      ],
      [
        'q' => 'How quickly can you start?',
        'a' => 'We respond within 24–48 hours. Project start dates depend on scope and schedule — you’ll receive a clear timeline as part of your proposal.',
      ],
      [
        'q' => 'Do you do remodeling or just painting?',
        'a' => 'Both. We offer complete kitchen and bathroom remodeling in addition to painting, cabinet refinishing, surface repair, and pressure washing. Many of our remodeling clients started with a paint job.',
      ],
    ];
  ?>

  <!-- HERO -->
  <section class="relative overflow-hidden border-b border-[#192F44]/10 bg-[linear-gradient(180deg,#ffffff_0%,#f6f5f0_100%)] py-16 lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(207,224,218,0.50),transparent_28%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(35,100,118,0.08),transparent_30%)]"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <p class="ajs-reveal-up text-xs font-black uppercase tracking-[0.24em] text-[#236476]">
        Contact Us
      </p>

      <h1 class="ajs-reveal-up mt-5 text-4xl font-extrabold leading-[0.98] tracking-[-0.05em] text-[#192F44] md:text-6xl">
        Let’s Talk About Your Home.
      </h1>

      <div class="mx-auto mt-6 h-[3px] w-24 bg-[linear-gradient(90deg,#192F44_0%,#236476_55%,#7DAD3F_100%)]"></div>

      <p class="ajs-reveal-up mx-auto mt-8 max-w-3xl text-base leading-8 text-[#192F44]/80 md:text-lg">
        Whether you have a project in mind or just want to explore your options, we’re here. Reach out and someone from our team will get back to you within 24–48 hours.
      </p>
    </div>
  </section>

  <!-- CONTACT + FORM -->
  <section class="relative overflow-hidden py-20 lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(207,224,218,0.28),transparent_24%)]"></div>

    <div class="relative mx-auto max-w-7xl px-4">
      <div class="grid gap-8 xl:grid-cols-[0.92fr_1.08fr] xl:gap-10">

        <!-- CONTACT INFORMATION -->
        <div class="ajs-reveal-left">
          <div class="h-full overflow-hidden border border-[#192F44]/10 bg-white shadow-[0_20px_44px_rgba(25,47,68,0.08)]">
            <div class="h-2 w-full bg-[linear-gradient(90deg,#192F44_0%,#236476_50%,#7DAD3F_100%)]"></div>

            <div class="p-7 md:p-9">
              <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
                Contact Information
              </p>

              <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.04em] text-[#192F44] md:text-4xl">
                Reach the team directly.
              </h2>

              <div class="mt-8 space-y-5">
                <div class="border border-[#192F44]/10 bg-[#fdfcf8] px-5 py-5">
                  <p class="text-[11px] font-black uppercase tracking-[0.18em] text-[#236476]">
                    Phone
                  </p>
                  <a href="tel:+19092326602" class="mt-2 block text-lg font-black text-[#192F44] transition hover:text-[#236476]">
                    (909) 232-6602
                  </a>
                </div>

                <div class="border border-[#192F44]/10 bg-[#fdfcf8] px-5 py-5">
                  <p class="text-[11px] font-black uppercase tracking-[0.18em] text-[#4A6C2F]">
                    Email
                  </p>
                  <p class="mt-2 text-lg font-black text-[#192F44]">
                    [client to confirm]
                  </p>
                </div>

                <div class="border border-[#192F44]/10 bg-[#CFE0DA]/42 px-5 py-5">
                  <p class="text-[11px] font-black uppercase tracking-[0.18em] text-[#192F44]/72">
                    Service Area
                  </p>
                  <p class="mt-2 text-base font-bold leading-7 text-[#192F44]">
                    Orange County · Los Angeles · Riverside · San Bernardino
                  </p>
                </div>
              </div>

              <div class="mt-8 border-t border-[#192F44]/10 pt-8">
                <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
                  Social
                </p>

<div class="mt-4 flex flex-wrap gap-3">

  <!-- GOOGLE -->
  <a href="#" aria-label="Google" class="rpc-contact-social flex items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 48 48">
      <path fill="#EA4335" d="M24 9.5c3.6 0 6.8 1.3 9.3 3.4l6.9-6.9C35.7 2.5 30.2 0 24 0 14.6 0 6.6 5.4 2.6 13.3l8.1 6.3C12.7 13.6 17.9 9.5 24 9.5z"/>
      <path fill="#4285F4" d="M46.5 24.5c0-1.6-.1-2.7-.4-4H24v7.6h12.9c-.3 1.9-2 4.8-5.7 6.7l8.7 6.8c5.1-4.7 8.1-11.6 8.1-17.1z"/>
      <path fill="#FBBC05" d="M10.7 28.6c-.5-1.4-.8-2.9-.8-4.6s.3-3.2.8-4.6l-8.1-6.3C1 16.2 0 19.9 0 24s1 7.8 2.6 10.9l8.1-6.3z"/>
      <path fill="#34A853" d="M24 48c6.2 0 11.4-2 15.2-5.4l-8.7-6.8c-2.3 1.6-5.3 2.7-8.5 2.7-6.1 0-11.3-4.1-13.2-9.9l-8.1 6.3C6.6 42.6 14.6 48 24 48z"/>
    </svg>
    <span>Google</span>
  </a>

  <!-- FACEBOOK -->
  <a href="#" aria-label="Facebook" class="rpc-contact-social flex items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
      <path d="M22 12a10 10 0 10-11.6 9.9v-7h-2.6v-2.9h2.6V9.4c0-2.6 1.5-4 3.9-4 1.1 0 2.3.2 2.3.2v2.5h-1.3c-1.3 0-1.7.8-1.7 1.6v1.9h2.9l-.5 2.9h-2.4v7A10 10 0 0022 12z"/>
    </svg>
    <span>Facebook</span>
  </a>

  <!-- INSTAGRAM -->
  <a href="#" aria-label="Instagram" class="rpc-contact-social flex items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
      <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10zm-5 3.5A5.5 5.5 0 1017.5 13 5.5 5.5 0 0012 7.5zm0 2A3.5 3.5 0 1115.5 13 3.5 3.5 0 0112 9.5zm4.8-3.3a1.2 1.2 0 11-1.2 1.2 1.2 1.2 0 011.2-1.2z"/>
    </svg>
    <span>Instagram</span>
  </a>

</div>
              </div>
            </div>
          </div>
        </div>

        <!-- FORM -->
        <div class="ajs-reveal-right">
          <div class="relative overflow-hidden border border-[#192F44]/10 bg-[#fcfbf8] shadow-[0_20px_44px_rgba(25,47,68,0.08)]">
            <div class="absolute right-0 top-0 h-24 w-24 translate-x-[20%] -translate-y-[20%] rotate-12 bg-[#CFE0DA]/55"></div>
            <div class="h-2 w-full bg-[linear-gradient(90deg,#7DAD3F_0%,#236476_50%,#192F44_100%)]"></div>

            <div class="relative p-7 md:p-9">
              <p class="text-xs font-black uppercase tracking-[0.22em] text-[#4A6C2F]">
                Request a Free Estimate
              </p>

              <h2 class="mt-4 text-3xl font-black leading-tight tracking-[-0.04em] text-[#192F44] md:text-4xl">
                Tell us about your project.
              </h2>

              <div id="rpcContactFormSuccess" class="hidden mt-5 rounded-2xl border border-green-200 bg-green-50 px-4 py-4 text-sm text-green-700">
                Thanks for reaching out. Your request was sent successfully.
              </div>

              <div id="rpcContactFormError" class="hidden mt-5 rounded-2xl border border-red-200 bg-red-50 px-4 py-4 text-sm text-red-700">
                Something went wrong. Please try again.
              </div>

              <form id="rpcContactForm" class="mt-8 space-y-5">
                <div class="grid gap-5 md:grid-cols-2">
                  <div>
                    <label for="full_name" class="mb-2 block text-[11px] font-black uppercase tracking-[0.18em] text-[#192F44]/72">
                      Full Name *
                    </label>
                    <input
                      id="full_name"
                      name="name"
                      type="text"
                      class="rpc-contact-input"
                      required
                    >
                  </div>

                  <div>
                    <label for="phone_number" class="mb-2 block text-[11px] font-black uppercase tracking-[0.18em] text-[#192F44]/72">
                      Phone Number *
                    </label>
                    <input
                      id="phone_number"
                      name="phone"
                      type="tel"
                      class="rpc-contact-input"
                      required
                    >
                  </div>
                </div>

                <div>
                  <label for="email_address" class="mb-2 block text-[11px] font-black uppercase tracking-[0.18em] text-[#192F44]/72">
                    Email Address *
                  </label>
                  <input
                    id="email_address"
                    name="email"
                    type="email"
                    class="rpc-contact-input"
                    required
                  >
                </div>

                <div>
                  <label for="service_needed" class="mb-2 block text-[11px] font-black uppercase tracking-[0.18em] text-[#192F44]/72">
                    Service Needed *
                  </label>
                  <select
                    id="service_needed"
                    name="service"
                    class="rpc-contact-input"
                    required
                  >
                    <option value="">Select a service</option>
                    <?php foreach ($service_options as $option) : ?>
                      <option value="<?php echo esc_attr($option); ?>">
                        <?php echo esc_html($option); ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div>
                  <label for="property_address" class="mb-2 block text-[11px] font-black uppercase tracking-[0.18em] text-[#192F44]/72">
                    Property Address or City *
                  </label>
                  <input
                    id="property_address"
                    name="property"
                    type="text"
                    class="rpc-contact-input"
                    required
                  >
                </div>

                <div>
                  <label for="project_details" class="mb-2 block text-[11px] font-black uppercase tracking-[0.18em] text-[#192F44]/72">
                    Tell us about your project
                  </label>
                  <textarea
                    id="project_details"
                    name="message"
                    rows="6"
                    class="rpc-contact-input rpc-contact-textarea"
                    required
                  ></textarea>
                </div>

                <label class="flex items-start gap-3 border border-[#192F44]/10 bg-white px-4 py-4">
                  <input
                    type="checkbox"
                    name="policy_agreement"
                    class="mt-1 h-4 w-4 accent-[#236476]"
                    required
                  >
                  <span class="text-sm leading-6 text-[#192F44]/78">
                    I agree to the Privacy Policy and Terms &amp; Conditions.
                  </span>
                </label>

                <div class="pt-2">
                  <button
                    id="rpcContactSubmitBtn"
                    type="submit"
                    class="rpc-contact-btn rpc-contact-btn-green inline-flex items-center justify-center px-8 py-4 text-sm font-black uppercase tracking-[0.14em] text-white"
                  >
                    Submit Request
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="border-y border-[#192F44]/10 bg-white py-20 lg:py-24">
    <div class="mx-auto max-w-5xl px-4">
      <div class="ajs-reveal-up mx-auto max-w-3xl text-center">
        <p class="text-xs font-black uppercase tracking-[0.22em] text-[#236476]">
          Frequently Asked Questions
        </p>

        <h2 class="mt-5 text-3xl font-black leading-tight tracking-[-0.05em] text-[#192F44] md:text-5xl">
          Helpful answers before we get started.
        </h2>

        <div class="mx-auto mt-6 h-[3px] w-24 bg-[linear-gradient(90deg,#192F44_0%,#236476_55%,#7DAD3F_100%)]"></div>
      </div>

      <div class="mt-12 grid gap-4">
        <?php foreach ($faqs as $index => $faq) : ?>
          <details class="ajs-reveal-stagger rpc-contact-faq group border border-[#192F44]/10 bg-[#fcfbf8]">
            <summary class="flex cursor-pointer list-none items-center justify-between gap-4 px-6 py-5">
              <span class="text-lg font-black leading-7 tracking-[-0.02em] text-[#192F44]">
                <?php echo esc_html($faq['q']); ?>
              </span>
              <span class="rpc-contact-faq-icon shrink-0 text-2xl font-light text-[#236476]">+</span>
            </summary>

            <div class="border-t border-[#192F44]/10 px-6 py-5">
              <p class="text-base leading-8 text-[#192F44]/80">
                <?php echo esc_html($faq['a']); ?>
              </p>
            </div>
          </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="relative isolate overflow-hidden bg-[#f6f5f0] py-20 text-[#192F44] lg:py-24">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(35,100,118,0.08),transparent_28%)]"></div>
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_right,rgba(125,173,63,0.12),transparent_30%)]"></div>

    <div class="relative mx-auto max-w-5xl px-4 text-center">
      <h2 class="ajs-reveal-up text-3xl font-black leading-tight tracking-[-0.05em] md:text-5xl">
        Request a Free Estimate
      </h2>

      <div class="ajs-reveal-up mt-8 flex flex-wrap items-center justify-center gap-3">
        <a href="#"
           class="rpc-contact-btn rpc-contact-btn-green inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          Request a Free Estimate
        </a>

        <a href="tel:+19092326602"
           class="rpc-contact-btn rpc-contact-btn-dark inline-flex items-center justify-center px-6 py-4 text-sm font-black uppercase tracking-[0.14em] text-white">
          (909) 232-6602
        </a>
      </div>

      <div class="rpc-contact-swipe rpc-contact-swipe-light mx-auto mt-10 max-w-2xl"></div>
    </div>
  </section>
</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap');

  .hidden {
    display: none !important;
  }

  .rpc-contact-page {
    font-family: "Manrope", "Segoe UI", Arial, sans-serif;
  }

  .rpc-contact-page h1,
  .rpc-contact-page h2,
  .rpc-contact-page h3 {
    font-family: "Space Grotesk", "Segoe UI", Arial, sans-serif;
  }

  .rpc-contact-input {
    width: 100%;
    border: 1px solid rgba(25, 47, 68, 0.12);
    background: #ffffff;
    color: #192F44;
    padding: 0.95rem 1rem;
    font-size: 0.95rem;
    line-height: 1.5;
    transition: border-color .22s ease, box-shadow .22s ease, background-color .22s ease;
    outline: none;
  }

  .rpc-contact-input:focus {
    border-color: #236476;
    box-shadow: 0 0 0 4px rgba(35, 100, 118, 0.10);
  }

  .rpc-contact-textarea {
    resize: vertical;
    min-height: 150px;
  }

  .rpc-contact-btn {
    position: relative;
    border: 1px solid transparent;
    transition: transform .22s ease, box-shadow .22s ease, background-color .22s ease, color .22s ease, border-color .22s ease;
    overflow: hidden;
  }

  .rpc-contact-btn::after {
    content: "";
    position: absolute;
    inset: 0;
    transform: translateX(-110%);
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.22), transparent);
    transition: transform .6s ease;
  }

  .rpc-contact-btn:hover::after {
    transform: translateX(110%);
  }

  .rpc-contact-btn:hover {
    transform: translateY(-2px);
  }

  .rpc-contact-btn-dark {
    background: #192F44;
    border-color: #192F44;
    box-shadow: 0 16px 34px rgba(25,47,68,0.18);
  }

  .rpc-contact-btn-dark:hover {
    background: #236476;
    border-color: #236476;
  }

  .rpc-contact-btn-green {
    background: #7DAD3F;
    border-color: #7DAD3F;
    box-shadow: 0 16px 34px rgba(125,173,63,0.22);
  }

  .rpc-contact-btn-green:hover {
    background: #4A6C2F;
    border-color: #4A6C2F;
  }

  .rpc-contact-social {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(25,47,68,0.10);
    background: #fdfcf8;
    color: #192F44;
    padding: 0.85rem 1rem;
    font-size: 0.78rem;
    font-weight: 800;
    letter-spacing: 0.14em;
    text-transform: uppercase;
    transition: transform .22s ease, border-color .22s ease, background-color .22s ease;
  }

  .rpc-contact-social:hover {
    transform: translateY(-2px);
    border-color: rgba(35,100,118,0.24);
    background: #ffffff;
  }

  .rpc-contact-faq[open] .rpc-contact-faq-icon {
    transform: rotate(45deg);
  }

  .rpc-contact-faq-icon {
    transition: transform .2s ease;
  }

  .rpc-contact-swipe {
    height: 14px;
    width: 100%;
    background: linear-gradient(90deg, #192F44 0%, #236476 28%, #CFE0DA 55%, #7DAD3F 78%, #4A6C2F 100%);
    clip-path: polygon(0 35%, 7% 20%, 14% 40%, 22% 18%, 30% 42%, 38% 22%, 48% 50%, 56% 26%, 66% 46%, 76% 18%, 86% 42%, 94% 22%, 100% 36%, 100% 100%, 0 100%);
    opacity: 0.92;
    animation: rpcContactSwipeShift 7s ease-in-out infinite alternate;
  }

  .rpc-contact-swipe-light {
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

  @keyframes rpcContactSwipeShift {
    0%   { transform: translateX(0) scaleX(1); }
    100% { transform: translateX(6px) scaleX(1.01); }
  }

  @media (prefers-reduced-motion: reduce) {
    .ajs-reveal-up,
    .ajs-reveal-left,
    .ajs-reveal-right,
    .ajs-reveal-stagger,
    .rpc-contact-btn,
    .rpc-contact-swipe {
      opacity: 1 !important;
      transform: none !important;
      transition: none !important;
      animation: none !important;
    }
  }
</style>

<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

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

    if (window.emailjs) {
      emailjs.init({
        publicKey: "CDikedp0ZSxxiBeLb"
      });
    }

    const form = document.getElementById("rpcContactForm");
    const submitBtn = document.getElementById("rpcContactSubmitBtn");
    const successBox = document.getElementById("rpcContactFormSuccess");
    const errorBox = document.getElementById("rpcContactFormError");

    if (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();

        successBox.classList.add("hidden");
        errorBox.classList.add("hidden");

        const policyCheckbox = form.querySelector('input[name="policy_agreement"]');
        if (policyCheckbox && !policyCheckbox.checked) {
          errorBox.textContent = "Please accept the Privacy Policy and Terms & Conditions.";
          errorBox.classList.remove("hidden");
          return;
        }

        const originalButtonText = submitBtn.textContent;
        submitBtn.disabled = true;
        submitBtn.textContent = "Sending...";

        const formData = {
          name: document.getElementById("full_name").value,
          phone: document.getElementById("phone_number").value,
          email: document.getElementById("email_address").value,
          service: document.getElementById("service_needed").value,
          property: document.getElementById("property_address").value,
          message: document.getElementById("project_details").value
        };

        emailjs.send(
          "service_a03f0zf",
          "template_17g32zt",
          formData
        ).then(function () {
          form.reset();
          successBox.classList.remove("hidden");
          submitBtn.disabled = false;
          submitBtn.textContent = originalButtonText;
        }).catch(function (error) {
          console.error("EmailJS error:", error);
          errorBox.classList.remove("hidden");
          submitBtn.disabled = false;
          submitBtn.textContent = originalButtonText;
        });
      });
    }
  });
</script>

<?php get_footer(); ?>