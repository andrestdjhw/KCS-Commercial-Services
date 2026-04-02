import React from "react"

// ─── KCS Brand Tokens ────────────────────────────────────────────────────────
const KCS = {
  navy:        "#1B2B6B",
  navyDeep:    "#13204F",
  navyLight:   "#243580",
  gold:        "#C9A84C",
  goldDark:    "#A8882E",
  goldLight:   "#E8D49A",
  white:       "#ffffff",
  borderLight: "rgba(255, 255, 255, 0.08)",
  textMuted:   "rgba(255, 255, 255, 0.72)",
  textBody:    "rgba(255, 255, 255, 0.82)",
}

// ─── Footer Data (mirrors footer.php) ────────────────────────────────────────
const SERVICES = [
  { label: "Interior Painting",     href: "/services/interior-painting"           },
  { label: "Exterior Painting",     href: "/services/exterior-painting"           },
  { label: "Kitchen Remodeling",    href: "/services/kitchen-remodeling"          },
  { label: "Bathroom Remodeling",   href: "/services/bathroom-remodeling"         },
  { label: "Cabinet Refinishing",   href: "/services/cabinet-refinishing-staining"},
  { label: "Surface Repair & Prep", href: "/services/surface-repair-preparation"  },
  { label: "Pressure Washing",      href: "/services/pressure-washing"            },
  { label: "Commercial Painting",   href: "/services/commercial-painting"         },
]

const QUICK_LINKS = [
  { label: "Home",             href: "/"                },
  { label: "About Us",         href: "/about-us"        },
  { label: "Gallery",          href: "/gallery"         },
  { label: "Contact Us",       href: "/contact-us"      },
  { label: "Privacy Policy",   href: "/privacy-policy"  },
  { label: "Terms & Conditions", href: "/terms-conditions" },
]

// ─── Main Component ───────────────────────────────────────────────────────────
export default function Footer() {
  const currentYear = new Date().getFullYear()

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Barlow+Condensed:wght@700;800&display=swap');

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

                {/* Brand mark + name */}
                <a href="/" aria-label="KCS Commercial Services Home" style={{
                  display: "inline-flex", alignItems: "center", gap: "0.9rem",
                  textDecoration: "none", color: KCS.white,
                }}>
                  {/* Parallelogram mark — same shape as navbar */}
                  <span style={{ position:"relative", width:18, height:42, flexShrink:0, display:"block" }}>
                    <span style={{
                      position: "absolute", inset: 0,
                      background: `linear-gradient(180deg, ${KCS.gold}, ${KCS.goldDark})`,
                      clipPath: "polygon(18% 0, 100% 0, 82% 100%, 0 100%)",
                      display: "block",
                    }} />
                  </span>

                  <span style={{ display: "flex", flexDirection: "column", lineHeight: 1 }}>
                    <strong style={{
                      fontFamily: "'Barlow Condensed', 'Space Grotesk', 'Segoe UI', sans-serif",
                      fontSize: "1rem", fontWeight: 800,
                      letterSpacing: "0.06em", textTransform: "uppercase",
                      color: KCS.white,
                    }}>
                      KCS Commercial Services
                    </strong>
                    <em style={{
                      marginTop: "0.35rem", fontStyle: "normal",
                      fontSize: "0.64rem", fontWeight: 800,
                      textTransform: "uppercase", letterSpacing: "0.22em",
                      color: KCS.gold,
                    }}>
                      LLC
                    </em>
                  </span>
                </a>

                {/* About blurb */}
                <p style={{
                  marginTop: "1.2rem",
                  color: KCS.textBody,
                  fontSize: "0.95rem", lineHeight: 1.9,
                }}>
                  KCS Commercial Services is a full-service painting and remodeling
                  company serving Southern California. Clean execution. Schedule
                  discipline. Aesthetic certainty. Licensed, insured, and bonded —
                  with 40+ years of combined experience.
                </p>

                {/* Credential badges */}
                <div style={{ display:"flex", flexWrap:"wrap", gap:"0.7rem", marginTop:"1.4rem" }}>
                  {["C-33 Licensed", "Insured", "Bonded", "Google Reviews"].map((badge) => (
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
                  <FooterSocial href="#" label="Google">
                    <svg viewBox="0 0 24 24" aria-hidden="true" style={{width:16,height:16}}>
                      <path fill="currentColor" d="M21.8 12.2c0-.7-.1-1.3-.2-1.9H12v3.6h5.5c-.2 1.2-.9 2.3-1.9 3v2.5h3.1c1.8-1.7 3.1-4.2 3.1-7.2Z"/>
                      <path fill="currentColor" d="M12 22c2.7 0 5-.9 6.7-2.5l-3.1-2.5c-.9.6-2 .9-3.6.9-2.8 0-5.2-1.9-6-4.5H2.8v2.6A10 10 0 0 0 12 22Z"/>
                      <path fill="currentColor" d="M6 13.4A6 6 0 0 1 5.7 12c0-.5.1-.9.2-1.4V8H2.8A10 10 0 0 0 2 12c0 1.4.3 2.8.8 4l3.2-2.6Z"/>
                      <path fill="currentColor" d="M12 6c1.5 0 2.8.5 3.9 1.5l2.9-2.9A10 10 0 0 0 2.8 8l3.1 2.6C6.8 7.9 9.2 6 12 6Z"/>
                    </svg>
                  </FooterSocial>

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
                </div>
              </div>

              {/* ── COL 2: Contact ── */}
              <div>
                <FooterHeading>Contact</FooterHeading>
                <ul style={{ listStyle:"none", margin:0, padding:0, display:"grid", gap:"0.7rem" }}>
                  <li>
                    <a href="tel:+19092326602" className="kcs-footer-link" style={footerLinkStyle}>
                      (909) 232-6602
                    </a>
                  </li>
                  <li>
                    <a href="#" className="kcs-footer-link" style={footerLinkStyle}>
                      [client email]
                    </a>
                  </li>
                  <li>
                    <span style={{ color: KCS.textMuted, fontSize:"0.92rem", lineHeight:1.7 }}>
                      Serving OC · LA · Riverside · San Bernardino
                    </span>
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
            justifyContent: "center",
            textAlign: "center",
          }}>
            <p style={{ margin:0, color: KCS.textMuted, fontSize:"0.84rem", lineHeight:1.6 }}>
              © {currentYear} KCS Commercial Services LLC. All Rights Reserved.
            </p>
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
      fontFamily: "'Barlow Condensed', 'Space Grotesk', 'Segoe UI', sans-serif",
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