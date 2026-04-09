<?php
/**
 * Template Name: Terms & Conditions
 *
 * KCS Commercial Services LLC
 * kcscommercial.com/terms-conditions/
 */

get_header(); ?>

<main class="kcs-legal-page bg-[#F5F4EF] text-[#1B3A6B] overflow-hidden">

<?php $last_updated = 'April 2026'; ?>

<!-- ── HERO ────────────────────────────────────────────────────────── -->
<section class="relative overflow-hidden bg-[#122649] py-14 text-white lg:py-20">
  <div class="absolute inset-0 opacity-[0.05]" style="background-image:linear-gradient(135deg,rgba(255,255,255,0.4) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.4) 50%,rgba(255,255,255,0.4) 75%,transparent 75%,transparent);background-size:22px 22px;"></div>
  <div class="absolute left-0 top-0 h-full w-[5px] bg-[linear-gradient(180deg,#C9A84C,rgba(201,168,76,0.2),#C9A84C)]"></div>

  <div class="relative mx-auto max-w-4xl px-4">
    <p class="text-xs font-black uppercase tracking-[0.28em] text-[#C9A84C]">Legal</p>
    <h1 class="mt-4 text-4xl font-black leading-tight tracking-[-0.04em] md:text-5xl">
      Terms &amp; Conditions
    </h1>
    <div class="mt-4 h-1 w-20 bg-[linear-gradient(90deg,#C9A84C,#E8D49A)]"></div>
    <p class="mt-5 text-sm text-white/65">
      Last updated: <?php echo esc_html($last_updated); ?> &nbsp;·&nbsp; KCS Commercial Services LLC
    </p>
  </div>
</section>

<!-- ── CONTENT ─────────────────────────────────────────────────────── -->
<section class="py-16 lg:py-24">
  <div class="mx-auto max-w-4xl px-4">
    <div class="grid gap-10 lg:grid-cols-[220px_1fr] lg:items-start lg:gap-16">

      <!-- Sticky TOC -->
      <aside class="hidden lg:block">
        <div class="sticky top-28 border border-[#1B3A6B]/10 bg-white p-6">
          <p class="mb-4 text-[0.65rem] font-black uppercase tracking-[0.20em] text-[#C9A84C]">Contents</p>
          <nav>
            <ul class="space-y-2">
              <?php
                $toc = [
                  ['id' => 'acceptance',    'label' => '1. Acceptance of Terms'],
                  ['id' => 'services',      'label' => '2. Services'],
                  ['id' => 'contracts',     'label' => '3. Service Contracts'],
                  ['id' => 'payment',       'label' => '4. Payment Terms'],
                  ['id' => 'cancellation',  'label' => '5. Cancellation'],
                  ['id' => 'liability',     'label' => '6. Limitation of Liability'],
                  ['id' => 'ip',            'label' => '7. Intellectual Property'],
                  ['id' => 'privacy',       'label' => '8. Privacy'],
                  ['id' => 'governing',     'label' => '9. Governing Law'],
                  ['id' => 'changes',       'label' => '10. Changes to Terms'],
                  ['id' => 'contact',       'label' => '11. Contact'],
                ];
                foreach ($toc as $item) :
              ?>
                <li>
                  <a href="#<?php echo esc_attr($item['id']); ?>"
                    class="kcs-toc-link block text-[0.78rem] leading-5 text-[#1B3A6B]/65 transition hover:text-[#C9A84C]">
                    <?php echo esc_html($item['label']); ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </nav>
        </div>
      </aside>

      <!-- Body -->
      <div class="kcs-legal-body space-y-10">

        <div id="acceptance" class="kcs-legal-section">
          <h2>1. Acceptance of Terms</h2>
          <p>By accessing the website located at kcscommercial.com or by engaging KCS Commercial Services LLC ("KCS," "we," "us," or "our") for any service, you ("Client" or "you") agree to be bound by these Terms and Conditions. If you do not agree to these terms, please do not use our website or services.</p>
          <p>These Terms apply to all visitors, users, and anyone who accesses or uses our website or services. By requesting a quote, signing a service agreement, or otherwise engaging with KCS, you confirm that you have read, understood, and agree to be bound by these Terms.</p>
        </div>

        <div id="services" class="kcs-legal-section">
          <h2>2. Services</h2>
          <p>KCS Commercial Services LLC provides commercial building services including, but not limited to:</p>
          <ul>
            <li>Commercial cleaning and janitorial services</li>
            <li>Landscaping and grounds maintenance</li>
            <li>Commercial drywall and interior construction</li>
            <li>Commercial roofing and siding</li>
          </ul>
          <p>The specific scope, frequency, and terms of any service engagement will be outlined in a written service agreement or contract executed between KCS and the Client prior to the commencement of services.</p>
          <p>KCS reserves the right to decline any service request at our sole discretion, including requests that fall outside our operational area or service capabilities.</p>
        </div>

        <div id="contracts" class="kcs-legal-section">
          <h2>3. Service Contracts</h2>
          <p>All recurring service engagements require a written service agreement. Service agreements will specify the scope of work, service frequency, pricing, and contract duration. Standard recurring contracts are structured as 12-month agreements with renewal options.</p>
          <p>One-time or project-based services (including post-construction cleaning, roofing assessments, and drywall estimates) are governed by individual project scopes and proposals issued by KCS prior to service commencement.</p>
          <p>No service will begin until a written agreement has been executed by both parties, or until a written authorization to proceed has been received from the Client.</p>
        </div>

        <div id="payment" class="kcs-legal-section">
          <h2>4. Payment Terms</h2>
          <p>Payment terms are specified in each individual service agreement. Unless otherwise agreed in writing:</p>
          <ul>
            <li>Invoices for recurring services are issued on a monthly basis</li>
            <li>Payment is due within 30 days of invoice date</li>
            <li>Project-based services may require a deposit prior to commencement</li>
            <li>Late payments may be subject to a late fee as specified in the service agreement</li>
          </ul>
          <p>KCS reserves the right to suspend services in the event of non-payment. Resumption of services following a payment default is at KCS's sole discretion and may require payment of outstanding balances in full prior to resumption.</p>
        </div>

        <div id="cancellation" class="kcs-legal-section">
          <h2>5. Cancellation & Termination</h2>
          <p>Cancellation terms for recurring contracts are specified in each service agreement. In general:</p>
          <ul>
            <li>Either party may terminate a recurring contract with 30 days' written notice</li>
            <li>Early termination fees may apply as outlined in the service agreement</li>
            <li>KCS may terminate a service agreement immediately for non-payment or material breach of these Terms</li>
          </ul>
          <p>For one-time or project-based services, cancellation terms are specified in the applicable proposal or project scope document.</p>
        </div>

        <div id="liability" class="kcs-legal-section">
          <h2>6. Limitation of Liability</h2>
          <p>To the fullest extent permitted by applicable law, KCS Commercial Services LLC shall not be liable for any indirect, incidental, special, consequential, or punitive damages, including but not limited to loss of profits, loss of data, or business interruption, arising from the use of or inability to use our services.</p>
          <p>KCS's total liability to you for any claims arising from your use of our services shall not exceed the total amount paid by you to KCS for the specific service giving rise to the claim in the three-month period preceding the claim.</p>
          <p>KCS maintains general liability insurance and workers' compensation coverage. Evidence of insurance will be provided upon request.</p>
        </div>

        <div id="ip" class="kcs-legal-section">
          <h2>7. Intellectual Property</h2>
          <p>All content on the KCS Commercial Services website, including text, graphics, logos, images, and service descriptions, is the property of KCS Commercial Services LLC and is protected by applicable copyright and intellectual property laws.</p>
          <p>You may not reproduce, distribute, modify, or create derivative works from any content on this website without prior written consent from KCS.</p>
        </div>

        <div id="privacy" class="kcs-legal-section">
          <h2>8. Privacy</h2>
          <p>Your use of our website and services is also governed by our <a href="/privacy-policy">Privacy Policy</a>, which is incorporated into these Terms by reference. By using our website or services, you consent to the data practices described in our Privacy Policy.</p>
        </div>

        <div id="governing" class="kcs-legal-section">
          <h2>9. Governing Law</h2>
          <p>These Terms and Conditions shall be governed by and construed in accordance with the laws of the State of Kansas, without regard to its conflict of law provisions. Any dispute arising from or relating to these Terms shall be subject to the exclusive jurisdiction of the courts located in Johnson County, Kansas.</p>
        </div>

        <div id="changes" class="kcs-legal-section">
          <h2>10. Changes to These Terms</h2>
          <p>KCS reserves the right to update or modify these Terms at any time without prior notice. Changes will be effective immediately upon posting to the website. Your continued use of the website or services following any changes constitutes acceptance of the revised Terms.</p>
          <p>We encourage you to review these Terms periodically to stay informed of any updates.</p>
        </div>

        <div id="contact" class="kcs-legal-section">
          <h2>11. Contact Information</h2>
          <p>If you have any questions about these Terms and Conditions, please contact us:</p>
          <div class="kcs-legal-contact">
            <p><strong>KCS Commercial Services LLC</strong></p>
            <p>Kansas City Metro, KS</p>
            <p>Email: <a href="#">info@kcscommercial.com</a></p>
            <p>Phone: <a href="tel:#">(913) 257-7291</a></p>
            <p>Website: <a href="https://kcscommercial.com">kcscommercial.com</a></p>
          </div>
        </div>

        <!-- Back to top -->
        <div class="border-t border-[#1B3A6B]/10 pt-8">
          <a href="#" class="inline-flex items-center gap-2 text-sm font-black uppercase tracking-[0.10em] text-[#1B3A6B]/50 transition hover:text-[#C9A84C]">
            <span>↑</span> Back to top
          </a>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ── FOOTER CTA ───────────────────────────────────────────────────── -->
<section class="border-t border-[#1B3A6B]/10 bg-white py-14">
  <div class="mx-auto max-w-4xl px-4 text-center">
    <p class="text-sm text-[#1B3A6B]/60">
      Questions about our services?
      <a href="/contact-us" class="ml-1 font-black text-[#1B3A6B] underline decoration-[#C9A84C] underline-offset-2 transition hover:text-[#C9A84C]">
        Contact us →
      </a>
    </p>
  </div>
</section>

</main>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap');

  .kcs-legal-page {
    font-family: "Montserrat", "Segoe UI", sans-serif;
  }

  /* ── TOC link active ─────────────────────────────────────────────── */
  .kcs-toc-link { text-decoration: none; }
  .kcs-toc-link.is-active { color: #C9A84C !important; font-weight: 700; }

  /* ── Legal body typography ───────────────────────────────────────── */
  .kcs-legal-body { color: #1B3A6B; }

  .kcs-legal-section h2 {
    font-size: 1.15rem;
    font-weight: 800;
    letter-spacing: -0.02em;
    color: #1B3A6B;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid #C9A84C;
    margin-bottom: 1.25rem;
    scroll-margin-top: 120px;
  }

  .kcs-legal-section p {
    font-size: 0.92rem;
    line-height: 1.85;
    color: rgba(27,58,107,0.78);
    margin-bottom: 1rem;
  }

  .kcs-legal-section ul {
    margin: 0.75rem 0 1rem 0;
    padding: 0;
    list-style: none;
    display: grid;
    gap: 0.5rem;
  }

  .kcs-legal-section ul li {
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
    font-size: 0.9rem;
    line-height: 1.7;
    color: rgba(27,58,107,0.78);
  }

  .kcs-legal-section ul li::before {
    content: "";
    display: inline-block;
    width: 7px;
    height: 7px;
    min-width: 7px;
    background: #C9A84C;
    transform: rotate(45deg);
    margin-top: 0.45rem;
  }

  .kcs-legal-section a {
    color: #1B3A6B;
    font-weight: 700;
    text-decoration: underline;
    text-decoration-color: #C9A84C;
    text-underline-offset: 3px;
    transition: color .18s ease;
  }
  .kcs-legal-section a:hover { color: #C9A84C; }

  .kcs-legal-contact {
    border: 1px solid rgba(27,58,107,0.10);
    background: #F5F4EF;
    padding: 1.25rem 1.5rem;
    margin-top: 0.75rem;
  }
  .kcs-legal-contact p {
    margin-bottom: 0.35rem !important;
  }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
  /* Highlight active TOC link on scroll */
  const sections = document.querySelectorAll(".kcs-legal-section")
  const tocLinks = document.querySelectorAll(".kcs-toc-link")

  if (!sections.length || !tocLinks.length) return

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        tocLinks.forEach(link => link.classList.remove("is-active"))
        const active = document.querySelector(`.kcs-toc-link[href="#${entry.target.id}"]`)
        if (active) active.classList.add("is-active")
      }
    })
  }, { rootMargin: "-20% 0px -70% 0px" })

  sections.forEach(s => observer.observe(s))
})
</script>

<?php get_footer(); ?>