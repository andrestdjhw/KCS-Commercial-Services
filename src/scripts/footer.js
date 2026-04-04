import React from "react"

// ─── KCS Brand Tokens ────────────────────────────────────────────────────────
const KCS = {
  navy:        "#1B3A6B",
  navyDeep:    "#122649",
  navyLight:   "#244580",
  gold:        "#C9A84C",
  goldDark:    "#A8882E",
  goldLight:   "#E8D49A",
  white:       "#ffffff",
  borderLight: "rgba(255, 255, 255, 0.08)",
  textMuted:   "rgba(255, 255, 255, 0.72)",
  textBody:    "rgba(255, 255, 255, 0.82)",
}

// ─── Footer Data ─────────────────────────────────────────────────────────────
const SERVICES = [
  { label: "Commercial Cleaning",   href: "/services/commercial-cleaning"  },
  { label: "Landscaping & Grounds", href: "/services/landscaping-grounds"  },
  { label: "Drywall & Interior",    href: "/services/drywall-interior"     },
  { label: "Roofing & Siding",      href: "/services/roofing-siding"       },
]

const LOCATIONS = [
  { label: "Overland Park, KS",  href: "#"  },
  { label: "Olathe, KS",         href: "#"         },
  { label: "Lenexa, KS",         href: "#"         },
  { label: "Shawnee, KS",        href: "#"        },
  { label: "Kansas City, KS",    href: "#"    },
  { label: "Paola, KS",          href: "#"          },
  { label: "Springfield, MO",    href: "#"    },
]

const QUICK_LINKS = [
  { label: "Home",               href: "/"                  },
  { label: "About Us",           href: "/about-us"          },
  { label: "Services",           href: "/services"          },
  { label: "Locations",          href: "/locations"         },
  { label: "Contact Us",         href: "/contact-us"        },
  { label: "Privacy Policy",     href: "/privacy-policy"    },
  { label: "Terms & Conditions", href: "/terms-conditions"  },
]

// ─── Main Component ───────────────────────────────────────────────────────────
export default function Footer() {
  const currentYear = new Date().getFullYear()

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Montserrat:wght@700;800;900&display=swap');

        .kcs-footer-link {
          transition: color .2s ease, transform .2s ease;
        }
        .kcs-footer-link:hover {
          color: ${KCS.white} !important;
          transform: translateX(3px) !important;
        }

        .kcs-footer-social {
          transition: transform .2s ease, background-color .2s ease, border-color .2s ease;
        }
        .kcs-footer-social:hover {
          transform: translateY(-3px) !important;
          background: rgba(201,168,76,0.18) !important;
          border-color: rgba(201,168,76,0.45) !important;
        }

        .kcs-footer-badge {
          transition: border-color .2s ease, background-color .2s ease;
        }
        .kcs-footer-badge:hover {
          border-color: rgba(201,168,76,0.45) !important;
          background: rgba(201,168,76,0.12) !important;
        }

        @media (max-width: 1100px) {
          .kcs-footer-grid {
            grid-template-columns: 1.2fr 1fr 1fr !important;
          }
          .kcs-footer-brand-col {
            grid-column: 1 / -1 !important;
            max-width: none !important;
          }
        }

        @media (max-width: 780px) {
          .kcs-footer-grid {
            grid-template-columns: 1fr !important;
          }
          .kcs-footer-main {
            padding: 3.5rem 0 2.4rem !important;
          }
        }

        @media (prefers-reduced-motion: reduce) {
          .kcs-footer-link,
          .kcs-footer-social,
          .kcs-footer-badge {
            transition: none !important;
          }
        }
      `}</style>

      <footer style={{
        background: KCS.navyDeep,
        color: KCS.white,
        fontFamily: "'Manrope', 'Segoe UI', Arial, sans-serif",
      }}>

        {/* ── MAIN FOOTER ───────────────────────────────────────────────── */}
        <div className="kcs-footer-main" style={{
          padding: "4.5rem 0 3rem",
          borderTop: `1px solid ${KCS.borderLight}`,
        }}>
          <div style={{ width: "min(100% - 2rem, 1280px)", margin: "0 auto" }}>
            <div className="kcs-footer-grid" style={{
              display: "grid",
              gridTemplateColumns: "1.2fr 0.9fr 1fr 0.9fr",
              gap: "2rem",
            }}>

              {/* ── COL 1: Brand ── */}
              <div className="kcs-footer-brand-col" style={{ maxWidth: 420 }}>

                {/* PNG Logo */}
                <a href="/" aria-label="KCS Commercial Services Home" style={{
                  display: "inline-flex", alignItems: "center",
                  textDecoration: "none",
                }}>
                  <img
                    src="/wp-content/uploads/2026/04/KCSLogoFooter-scaled.png"
                    alt="KCS Commercial Services LLC"
                    style={{
                      height: 52,
                      width: "auto",
                      maxWidth: 220,
                      display: "block",
                      objectFit: "contain",
                      filter: "brightness(0) invert(1)",
                    }}
                  />
                </a>

                {/* About blurb */}
                <p style={{
                  marginTop: "1.2rem",
                  color: KCS.textBody,
                  fontSize: "0.95rem", lineHeight: 1.9,
                }}>
                  Kansas City's institutional building services platform. Anchored
                  in commercial cleaning. Expanded through landscaping, drywall, and
                  roofing. Built for property managers, healthcare, schools, and GCs
                  who need a partner they can trust without supervision.
                </p>

                {/* Credential badges */}
                <div style={{ display:"flex", flexWrap:"wrap", gap:"0.7rem", marginTop:"1.4rem" }}>
                  {["Fully Insured", "Documented Protocols", "Compliance-Ready", "KC Metro Based"].map((badge) => (
                    <span key={badge} className="kcs-footer-badge" style={{
                      display: "inline-flex", alignItems: "center",
                      minHeight: 34, paddingInline: "0.8rem",
                      border: `1px solid ${KCS.borderLight}`,
                      background: "rgba(255,255,255,0.06)",
                      fontSize: "0.68rem", fontWeight: 800,
                      letterSpacing: "0.08em", textTransform: "uppercase",
                    }}>
                      {badge}
                    </span>
                  ))}
                </div>

                {/* Social icons */}
                <div style={{ display:"flex", gap:"0.5rem", marginTop:"1.4rem" }}>
                  <FooterSocial href="#" label="Facebook">
                    <svg viewBox="0 0 24 24" aria-hidden="true" style={{width:16,height:16}}>
                      <path fill="currentColor" d="M13.5 22v-8.2h2.8l.4-3.2h-3.2V8.6c0-.9.3-1.6 1.7-1.6h1.8V4.1c-.3 0-1.4-.1-2.7-.1-2.7 0-4.5 1.6-4.5 4.6v2h-3v3.2h3V22h3.7Z"/>
                    </svg>
                  </FooterSocial>

                  <FooterSocial href="#" label="Instagram">
                    <svg viewBox="0 0 24 24" aria-hidden="true" style={{width:16,height:16}}>
                      <path fill="currentColor" d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9a5.5 5.5 0 0 1-5.5 5.5h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 1.8A3.7 3.7 0 0 0 3.8 7.5v9a3.7 3.7 0 0 0 3.7 3.7h9a3.7 3.7 0 0 0 3.7-3.7v-9a3.7 3.7 0 0 0-3.7-3.7h-9Zm9.4 1.4a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.8A3.2 3.2 0 1 0 12 15.2 3.2 3.2 0 0 0 12 8.8Z"/>
                    </svg>
                  </FooterSocial>

                  <FooterSocial href="#" label="LinkedIn">
                    <svg viewBox="0 0 24 24" aria-hidden="true" style={{width:16,height:16}}>
                      <path fill="currentColor" d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
                      <rect fill="currentColor" x="2" y="9" width="4" height="12"/>
                      <circle fill="currentColor" cx="4" cy="4" r="2"/>
                    </svg>
                  </FooterSocial>
                </div>
              </div>

              {/* ── COL 2: Contact ── */}
              <div>
                <FooterHeading>Contact</FooterHeading>
                <ul style={{ listStyle:"none", margin:0, padding:0, display:"grid", gap:"0.7rem" }}>
                  <li>
                    <a href="tel:#" className="kcs-footer-link" style={footerLinkStyle}>
                      (913) 257-7291
                    </a>
                  </li>
                  <li>
                    <a href="#" className="kcs-footer-link" style={footerLinkStyle}>
                      [Email Address]
                    </a>
                  </li>
                  <li>
                    <span style={{ color: KCS.textMuted, fontSize:"0.92rem", lineHeight:1.7 }}>
                      Kansas City Metro, KS · Springfield, MO
                    </span>
                  </li>
                  <li style={{ paddingTop: "0.5rem" }}>
                    <a href="/contact-us" style={{
                      display: "inline-flex", alignItems: "center", justifyContent: "center",
                      paddingInline: "1rem", minHeight: 40,
                      background: `linear-gradient(135deg, ${KCS.gold}, ${KCS.goldDark})`,
                      color: "#122649",
                      textDecoration: "none",
                      fontSize: "0.72rem", fontWeight: 800,
                      letterSpacing: "0.12em", textTransform: "uppercase",
                    }}>
                      Get a Quote →
                    </a>
                  </li>
                </ul>
              </div>

              {/* ── COL 3: Services ── */}
              <div>
                <FooterHeading>Services</FooterHeading>
                <ul style={{ listStyle:"none", margin:0, padding:0, display:"grid", gap:"0.7rem" }}>
                  {SERVICES.map((s) => (
                    <li key={s.href}>
                      <a href={s.href} className="kcs-footer-link" style={footerLinkStyle}>
                        {s.label}
                      </a>
                    </li>
                  ))}
                </ul>

                <div style={{ marginTop: "1.75rem" }}>
                  <FooterHeading>Locations</FooterHeading>
                  <ul style={{ listStyle:"none", margin:0, padding:0, display:"grid", gap:"0.7rem" }}>
                    {LOCATIONS.map((l) => (
                      <li key={l.href}>
                        <a href={l.href} className="kcs-footer-link" style={footerLinkStyle}>
                          {l.label}
                        </a>
                      </li>
                    ))}
                  </ul>
                </div>
              </div>

              {/* ── COL 4: Quick Links ── */}
              <div>
                <FooterHeading>Quick Links</FooterHeading>
                <ul style={{ listStyle:"none", margin:0, padding:0, display:"grid", gap:"0.7rem" }}>
                  {QUICK_LINKS.map((l) => (
                    <li key={l.href}>
                      <a href={l.href} className="kcs-footer-link" style={footerLinkStyle}>
                        {l.label}
                      </a>
                    </li>
                  ))}
                </ul>
              </div>

            </div>
          </div>
        </div>

        {/* ── BOTTOM BAR ────────────────────────────────────────────────── */}
        <div style={{
          borderTop: `1px solid ${KCS.borderLight}`,
          background: "rgba(0,0,0,0.15)",
        }}>
          <div style={{
            width: "min(100% - 2rem, 1280px)",
            margin: "0 auto",
            minHeight: 64,
            display: "flex",
            alignItems: "center",
            justifyContent: "space-between",
            flexWrap: "wrap",
            gap: "0.75rem",
            paddingBlock: "0.75rem",
          }}>
            <p style={{ margin:0, color: KCS.textMuted, fontSize:"0.84rem", lineHeight:1.6 }}>
              © {currentYear} KCS Commercial Services LLC. All Rights Reserved.
            </p>
            <div style={{ display:"flex", gap:"1.25rem", flexWrap:"wrap" }}>
              {[
                { label: "kcscommercial.com", href: "/" },
                { label: "Privacy Policy",    href: "/privacy-policy" },
                { label: "Terms & Conditions",href: "/terms-conditions" },
                { label: "Sitemap",           href: "/sitemap.xml" },
              ].map((link) => (
                <a key={link.href} href={link.href} style={{
                  color: KCS.textMuted, textDecoration: "none",
                  fontSize: "0.78rem", fontWeight: 600,
                  transition: "color .2s ease",
                }}
                  onMouseEnter={e => e.currentTarget.style.color = KCS.white}
                  onMouseLeave={e => e.currentTarget.style.color = KCS.textMuted}
                >
                  {link.label}
                </a>
              ))}
            </div>
          </div>
        </div>

      </footer>
    </>
  )
}

// ─── Sub-components ───────────────────────────────────────────────────────────

function FooterHeading({ children }) {
  return (
    <h3 style={{
      margin: "0 0 1rem",
      fontFamily: "'Montserrat', 'Segoe UI', sans-serif",
      fontSize: "0.88rem", fontWeight: 700,
      letterSpacing: "0.14em", textTransform: "uppercase",
      color: KCS.gold,
    }}>
      {children}
    </h3>
  )
}

function FooterSocial({ href, label, children }) {
  return (
    <a href={href} aria-label={label} className="kcs-footer-social" style={{
      display: "inline-flex", alignItems: "center", justifyContent: "center",
      width: 36, height: 36,
      border: `1px solid ${KCS.borderLight}`,
      background: "rgba(255,255,255,0.06)",
      color: KCS.white, textDecoration: "none",
    }}>
      {children}
    </a>
  )
}

const footerLinkStyle = {
  color: KCS.textMuted,
  textDecoration: "none",
  fontSize: "0.92rem",
  lineHeight: 1.7,
  display: "inline-block",
}