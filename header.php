<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class('rpc-body'); ?>>
    <?php wp_body_open(); ?>

    <header class="rpc-header js-rpc-header">
      <!-- Top Utility Bar -->
      <div class="rpc-topbar">
        <div class="rpc-shell rpc-topbar__inner">
          <div class="rpc-topbar__left">
            <a href="tel:+19092326602" class="rpc-topbar__link">
              <span class="rpc-topbar__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.62a2 2 0 0 1-.45 2.11L8 9.91a16 16 0 0 0 6.09 6.09l1.46-1.28a2 2 0 0 1 2.11-.45c.84.29 1.72.5 2.62.62A2 2 0 0 1 22 16.92z"/>
                </svg>
              </span>
              <span class="rpc-topbar__label">Phone</span>
              <span>(909) 232-6602</span>
            </a>

            <!-- TODO: replace once client confirms email -->
            <a href="#" class="rpc-topbar__link rpc-topbar__link--muted">
              <span class="rpc-topbar__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/>
                  <path d="m22 6-10 7L2 6"/>
                </svg>
              </span>
              <span class="rpc-topbar__label">Email</span>
              <span>[client email]</span>
            </a>
          </div>

          <div class="rpc-topbar__right">
            <span class="rpc-topbar__pill">Licensed · Insured · Bonded</span>

            <div class="rpc-topbar__socials" aria-label="Social media">
              <a href="#" class="rpc-social-link" aria-label="Google">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path fill="currentColor" d="M21.8 12.2c0-.7-.1-1.3-.2-1.9H12v3.6h5.5c-.2 1.2-.9 2.3-1.9 3v2.5h3.1c1.8-1.7 3.1-4.2 3.1-7.2Z"/>
                  <path fill="currentColor" d="M12 22c2.7 0 5-.9 6.7-2.5l-3.1-2.5c-.9.6-2 .9-3.6.9-2.8 0-5.2-1.9-6-4.5H2.8v2.6A10 10 0 0 0 12 22Z"/>
                  <path fill="currentColor" d="M6 13.4A6 6 0 0 1 5.7 12c0-.5.1-.9.2-1.4V8H2.8A10 10 0 0 0 2 12c0 1.4.3 2.8.8 4l3.2-2.6Z"/>
                  <path fill="currentColor" d="M12 6c1.5 0 2.8.5 3.9 1.5l2.9-2.9A10 10 0 0 0 2.8 8l3.1 2.6C6.8 7.9 9.2 6 12 6Z"/>
                </svg>
              </a>

              <a href="#" class="rpc-social-link" aria-label="Facebook">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path fill="currentColor" d="M13.5 22v-8.2h2.8l.4-3.2h-3.2V8.6c0-.9.3-1.6 1.7-1.6h1.8V4.1c-.3 0-1.4-.1-2.7-.1-2.7 0-4.5 1.6-4.5 4.6v2h-3v3.2h3V22h3.7Z"/>
                </svg>
              </a>

              <a href="#" class="rpc-social-link" aria-label="Instagram">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path fill="currentColor" d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9a5.5 5.5 0 0 1-5.5 5.5h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 1.8A3.7 3.7 0 0 0 3.8 7.5v9a3.7 3.7 0 0 0 3.7 3.7h9a3.7 3.7 0 0 0 3.7-3.7v-9a3.7 3.7 0 0 0-3.7-3.7h-9Zm9.4 1.4a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.8A3.2 3.2 0 1 0 12 15.2 3.2 3.2 0 0 0 12 8.8Z"/>
                </svg>
              </a>
            </div>

            <span class="rpc-topbar__badge">CSLB #1111920</span>
          </div>
        </div>
      </div>

      <!-- Main Navigation -->
      <div class="rpc-nav-wrap">
        <div class="rpc-shell rpc-nav">
          <div class="rpc-brand">
            <a href="<?php echo esc_url(get_home_url()); ?>" class="rpc-brand__link" aria-label="Real Painting Corp Home">
              <span class="rpc-brand__mark"></span>
              <span class="rpc-brand__text">
                <strong>Real Painting Corp</strong>
                <em>Be Real. Build Real.</em>
              </span>
            </a>
          </div>

          <button
            class="rpc-nav-toggle js-rpc-nav-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="rpc-mobile-nav"
            aria-label="Open menu"
          >
            <span></span>
            <span></span>
            <span></span>
          </button>

          <nav class="rpc-desktop-nav" aria-label="Primary navigation">
            <ul class="rpc-menu">
              <li><a href="/">Home</a></li>
              <li><a href="/about-us">About Us</a></li>

              <li class="rpc-menu-item-has-children js-rpc-dropdown">
                <button class="rpc-menu__toggle js-rpc-dropdown-toggle" type="button" aria-expanded="false">
                  <span>Services</span>
                  <span class="rpc-caret"></span>
                </button>

                <div class="rpc-dropdown">
                  <a href="/services/interior-painting">Interior Painting</a>
                  <a href="/services/exterior-painting">Exterior Painting</a>
                  <a href="/services/kitchen-remodeling">Kitchen Remodeling</a>
                  <a href="/services/bathroom-remodeling">Bathroom Remodeling</a>
                  <a href="/services/cabinet-refinishing-staining">Cabinet Refinishing</a>
                  <a href="/services/surface-repair-preparation">Surface Repair &amp; Prep</a>
                  <a href="/services/pressure-washing">Pressure Washing</a>
                  <a href="/services/commercial-painting">Commercial Painting</a>
                </div>
              </li>

              <li><a href="/gallery">Gallery</a></li>

              <li class="rpc-menu-item-has-children js-rpc-dropdown">
                <button class="rpc-menu__toggle js-rpc-dropdown-toggle" type="button" aria-expanded="false">
                  <span>Locations</span>
                  <span class="rpc-caret"></span>
                </button>

                <div class="rpc-dropdown">
                  <a href="/locations/orange-county">Orange County</a>
                  <a href="/locations/los-angeles-county">Los Angeles County</a>
                  <a href="/locations/riverside-county">Riverside County</a>
                  <a href="/locations/san-bernardino-county">San Bernardino County</a>
                </div>
              </li>

              <li><a href="/contact-us">Contact Us</a></li>
            </ul>
          </nav>

          <div class="rpc-nav-cta">
            <a href="/contact-us" class="rpc-btn rpc-btn--primary">
              Request a Free Estimate
            </a>
          </div>
        </div>

        <!-- Mobile Nav -->
        <div id="rpc-mobile-nav" class="rpc-mobile-panel js-rpc-mobile-panel" hidden>
          <div class="rpc-shell">
            <nav class="rpc-mobile-nav" aria-label="Mobile navigation">
              <a href="/">Home</a>
              <a href="/about-us">About Us</a>

              <div class="rpc-mobile-group js-rpc-mobile-group">
                <button class="rpc-mobile-group__toggle js-rpc-mobile-group-toggle" type="button" aria-expanded="false">
                  <span>Services</span>
                  <span class="rpc-caret"></span>
                </button>
                <div class="rpc-mobile-group__panel">
                  <a href="/services/interior-painting">Interior Painting</a>
                  <a href="/services/exterior-painting">Exterior Painting</a>
                  <a href="/services/kitchen-remodeling">Kitchen Remodeling</a>
                  <a href="/services/bathroom-remodeling">Bathroom Remodeling</a>
                  <a href="/services/cabinet-refinishing-staining">Cabinet Refinishing</a>
                  <a href="/services/surface-repair-preparation">Surface Repair &amp; Prep</a>
                  <a href="/services/pressure-washing">Pressure Washing</a>
                  <a href="/services/commercial-painting">Commercial Painting</a>
                </div>
              </div>

              <a href="/gallery">Gallery</a>

              <div class="rpc-mobile-group js-rpc-mobile-group">
                <button class="rpc-mobile-group__toggle js-rpc-mobile-group-toggle" type="button" aria-expanded="false">
                  <span>Locations</span>
                  <span class="rpc-caret"></span>
                </button>
                <div class="rpc-mobile-group__panel">
                  <a href="/locations/orange-county">Orange County</a>
                  <a href="/locations/los-angeles-county">Los Angeles County</a>
                  <a href="/locations/riverside-county">Riverside County</a>
                  <a href="/locations/san-bernardino-county">San Bernardino County</a>
                </div>
              </div>

              <a href="/contact-us">Contact Us</a>

              <a href="/contact-us" class="rpc-btn rpc-btn--primary rpc-mobile-nav__cta">
                Request a Free Estimate
              </a>
            </nav>
          </div>
        </div>
      </div>
    </header>