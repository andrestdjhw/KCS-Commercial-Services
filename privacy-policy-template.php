<?php
/**
 * Template Name: Privacy Policy
 *
 * KCS Commercial Services LLC
 * kcscommercial.com/privacy-policy/
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
      Privacy Policy
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
                  ['id' => 'overview',     'label' => '1. Overview'],
                  ['id' => 'collection',   'label' => '2. Information We Collect'],
                  ['id' => 'use',          'label' => '3. How We Use Information'],
                  ['id' => 'sharing',      'label' => '4. Sharing of Information'],
                  ['id' => 'cookies',      'label' => '5. Cookies'],
                  ['id' => 'retention',    'label' => '6. Data Retention'],
                  ['id' => 'security',     'label' => '7. Security'],
                  ['id' => 'rights',       'label' => '8. Your Rights'],
                  ['id' => 'children',     'label' => '9. Children\'s Privacy'],
                  ['id' => 'links',        'label' => '10. Third-Party Links'],
                  ['id' => 'changes',      'label' => '11. Changes to Policy'],
                  ['id' => 'contact',      'label' => '12. Contact Us'],
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

        <div id="overview" class="kcs-legal-section">
          <h2>1. Overview</h2>
          <p>KCS Commercial Services LLC ("KCS," "we," "us," or "our") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website at kcscommercial.com or engage with our services.</p>
          <p>Please read this Privacy Policy carefully. By using our website or services, you agree to the practices described in this policy. If you do not agree, please do not access or use our website.</p>
        </div>

        <div id="collection" class="kcs-legal-section">
          <h2>2. Information We Collect</h2>
          <p><strong>Information you provide directly:</strong> When you submit a contact form, request a quote, or communicate with us, we may collect:</p>
          <ul>
            <li>Full name and job title</li>
            <li>Company or organization name</li>
            <li>Email address and phone number</li>
            <li>Property address or service location</li>
            <li>Details about your service needs</li>
          </ul>
          <p><strong>Information collected automatically:</strong> When you visit our website, we may automatically collect certain information, including:</p>
          <ul>
            <li>IP address and browser type</li>
            <li>Pages visited and time spent on each page</li>
            <li>Referring website or search terms</li>
            <li>Device type and operating system</li>
          </ul>
          <p>This information is collected through cookies and similar tracking technologies. See Section 5 for more details.</p>
        </div>

        <div id="use" class="kcs-legal-section">
          <h2>3. How We Use Your Information</h2>
          <p>We use the information we collect for the following purposes:</p>
          <ul>
            <li>To respond to your inquiries and provide requested services</li>
            <li>To prepare and deliver service proposals and quotes</li>
            <li>To manage and fulfill our contractual obligations to you</li>
            <li>To send service-related communications and updates</li>
            <li>To improve our website, services, and customer experience</li>
            <li>To comply with legal obligations</li>
          </ul>
          <p>We do not sell, rent, or lease your personal information to third parties for their marketing purposes. We will never share your information without your knowledge and consent, except as described in this policy.</p>
        </div>

        <div id="sharing" class="kcs-legal-section">
          <h2>4. Sharing of Information</h2>
          <p>We may share your information in the following limited circumstances:</p>
          <ul>
            <li><strong>Service providers:</strong> We may share information with trusted third-party vendors who assist us in operating our website or delivering services (e.g., email platforms, CRM systems). These parties are contractually obligated to keep your information confidential.</li>
            <li><strong>Legal compliance:</strong> We may disclose information when required by law, court order, or governmental authority.</li>
            <li><strong>Business transfers:</strong> In the event of a merger, acquisition, or sale of assets, your information may be transferred as part of that transaction.</li>
          </ul>
          <p>We do not share your personal information with any third parties for advertising or marketing purposes.</p>
        </div>

        <div id="cookies" class="kcs-legal-section">
          <h2>5. Cookies &amp; Tracking Technologies</h2>
          <p>Our website may use cookies and similar tracking technologies to improve your browsing experience and analyze website traffic. Cookies are small data files stored on your device.</p>
          <p>We may use the following types of cookies:</p>
          <ul>
            <li><strong>Essential cookies:</strong> Required for the website to function properly</li>
            <li><strong>Analytics cookies:</strong> Help us understand how visitors use our website (e.g., Google Analytics)</li>
            <li><strong>Preference cookies:</strong> Remember your settings and preferences</li>
          </ul>
          <p>You can control cookie settings through your browser. Disabling cookies may affect the functionality of certain parts of our website. For more information about cookies, visit <a href="https://www.allaboutcookies.org" target="_blank" rel="noopener">allaboutcookies.org</a>.</p>
        </div>

        <div id="retention" class="kcs-legal-section">
          <h2>6. Data Retention</h2>
          <p>We retain personal information only for as long as necessary to fulfill the purposes outlined in this Privacy Policy, or as required by law. Specifically:</p>
          <ul>
            <li>Contact form submissions are retained for up to 2 years</li>
            <li>Active client records are retained for the duration of the service relationship plus 7 years</li>
            <li>Website analytics data is retained per the terms of our analytics provider</li>
          </ul>
          <p>When personal information is no longer needed, we will securely delete or anonymize it.</p>
        </div>

        <div id="security" class="kcs-legal-section">
          <h2>7. Security</h2>
          <p>We implement reasonable administrative, technical, and physical safeguards to protect your personal information from unauthorized access, disclosure, alteration, or destruction. Our website uses HTTPS encryption for all data transmission.</p>
          <p>However, no method of transmission over the internet or electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your information, we cannot guarantee absolute security.</p>
        </div>

        <div id="rights" class="kcs-legal-section">
          <h2>8. Your Rights</h2>
          <p>Depending on your location and applicable law, you may have the following rights regarding your personal information:</p>
          <ul>
            <li><strong>Access:</strong> Request a copy of the personal information we hold about you</li>
            <li><strong>Correction:</strong> Request that we correct inaccurate or incomplete information</li>
            <li><strong>Deletion:</strong> Request that we delete your personal information, subject to legal retention requirements</li>
            <li><strong>Opt-out:</strong> Opt out of any non-essential communications from us</li>
          </ul>
          <p>To exercise any of these rights, please contact us using the information in Section 12. We will respond to your request within 30 days.</p>
        </div>

        <div id="children" class="kcs-legal-section">
          <h2>9. Children's Privacy</h2>
          <p>Our website and services are intended for business professionals and are not directed at children under the age of 13. We do not knowingly collect personal information from children. If you believe we have inadvertently collected information from a child, please contact us immediately and we will take steps to delete such information.</p>
        </div>

        <div id="links" class="kcs-legal-section">
          <h2>10. Third-Party Links</h2>
          <p>Our website may contain links to third-party websites. These links are provided for your convenience and do not constitute an endorsement of those websites. We are not responsible for the privacy practices or content of third-party sites. We encourage you to review the privacy policies of any third-party sites you visit.</p>
        </div>

        <div id="changes" class="kcs-legal-section">
          <h2>11. Changes to This Privacy Policy</h2>
          <p>We may update this Privacy Policy from time to time to reflect changes in our practices or applicable law. When we make material changes, we will update the "Last updated" date at the top of this page. We encourage you to review this policy periodically.</p>
          <p>Your continued use of our website or services after any changes constitutes your acceptance of the updated Privacy Policy.</p>
        </div>

        <div id="contact" class="kcs-legal-section">
          <h2>12. Contact Us</h2>
          <p>If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us:</p>
          <div class="kcs-legal-contact">
            <p><strong>KCS Commercial Services LLC</strong></p>
            <p>Kansas City Metro, KS</p>
            <p>Email: <a href="#">[Email Address]</a></p>
            <p>Phone: <a href="tel:#">[Phone Number]</a></p>
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

  .kcs-toc-link { text-decoration: none; }
  .kcs-toc-link.is-active { color: #C9A84C !important; font-weight: 700; }

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

  .kcs-legal-section p strong {
    font-weight: 700;
    color: #1B3A6B;
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
  .kcs-legal-contact p { margin-bottom: 0.35rem !important; }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
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