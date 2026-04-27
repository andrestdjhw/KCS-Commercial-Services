import React, { useState, useEffect, useRef } from "react"

// ─── KCS Brand Tokens ────────────────────────────────────────────────────────
const KCS = {
  navy:        "#1B3A6B",
  navyDeep:    "#122649",
  navyLight:   "#244580",
  gold:        "#C9A84C",
  goldDark:    "#A8882E",
  goldLight:   "#E8D49A",
  cream:       "#F5F4EF",
  white:       "#ffffff",
  border:      "rgba(27, 58, 107, 0.12)",
  borderLight: "rgba(255, 255, 255, 0.12)",
  shadow:      "0 18px 40px rgba(27, 58, 107, 0.10)",
  shadowStrong:"0 18px 44px rgba(27, 58, 107, 0.16)",
}

const SERVICES = [
  { label: "Commercial Cleaning",   href: "/services/commercial-cleaning"  },
  { label: "Landscaping & Grounds", href: "/services/landscaping-grounds"  },
  { label: "Drywall & Interior",    href: "/services/drywall-interior"     },
  { label: "Roofing & Siding",      href: "/services/roofing-siding"       },
]

const desktopLinkStyle = {
  display: "inline-flex", alignItems: "center", gap: "0.5rem",
  minHeight: 44, padding: 0,
  color: KCS.navy,
  textDecoration: "none",
  fontSize: "0.87rem", fontWeight: 700, letterSpacing: "0.02em",
}

export default function Navbar() {
  const [scrolled,        setScrolled]       = useState(false)
  const [mobileOpen,      setMobileOpen]     = useState(false)
  const [openDropdown,    setOpenDropdown]   = useState(null)
  const [openMobileGroup, setOpenMobileGroup]= useState(null)
  const headerRef = useRef(null)

  useEffect(() => {
    const onScroll = () => setScrolled(window.scrollY > 16)
    window.addEventListener("scroll", onScroll, { passive: true })
    return () => window.removeEventListener("scroll", onScroll)
  }, [])

  useEffect(() => {
    const onKey = (e) => {
      if (e.key === "Escape") { setOpenDropdown(null); setMobileOpen(false) }
    }
    const onOutsideClick = (e) => {
      if (headerRef.current && !headerRef.current.contains(e.target)) {
        setOpenDropdown(null)
        setMobileOpen(false)
      }
    }
    document.addEventListener("keydown", onKey)
    document.addEventListener("click",   onOutsideClick)
    return () => {
      document.removeEventListener("keydown", onKey)
      document.removeEventListener("click",   onOutsideClick)
    }
  }, [])

  useEffect(() => {
    document.body.classList.toggle("kcs-mobile-open", mobileOpen)
    return () => document.body.classList.remove("kcs-mobile-open")
  }, [mobileOpen])

  useEffect(() => {
    const onResize = () => { if (window.innerWidth > 980) setMobileOpen(false) }
    window.addEventListener("resize", onResize)
    return () => window.removeEventListener("resize", onResize)
  }, [])

  const toggleDropdown = (name) =>
    setOpenDropdown(prev => prev === name ? null : name)

  return (
    <>
      <style>{`
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700;800&family=Montserrat:wght@700;800;900&display=swap');

        .kcs-mobile-open { overflow: hidden; }

        .kcs-topbar-link { transition: opacity .2s ease, transform .2s ease; }
        .kcs-topbar-link:hover { opacity: 0.82 !important; transform: translateY(-1px) !important; }

        .kcs-social-link {
          transition: transform .2s ease, background-color .2s ease, border-color .2s ease;
        }
        .kcs-social-link:hover {
          transform: translateY(-2px) !important;
          background: rgba(201,168,76,0.18) !important;
          border-color: rgba(201,168,76,0.45) !important;
        }

        .kcs-menu-link { position: relative; transition: color .2s ease; }
        .kcs-menu-link::after {
          content: "";
          position: absolute; left: 0; bottom: 5px;
          width: 0; height: 2px;
          background: linear-gradient(90deg, ${KCS.gold}, ${KCS.goldLight});
          transition: width .25s ease;
        }
        .kcs-menu-link:hover        { color: ${KCS.gold} !important; }
        .kcs-menu-link:hover::after { width: 100% !important; }
        .kcs-menu-link.is-open::after { width: 100% !important; }

        .kcs-dropdown-item {
          transition: background-color .18s ease, color .18s ease, padding-left .18s ease;
        }
        .kcs-dropdown-item:hover {
          background: ${KCS.goldLight} !important;
          color: ${KCS.navyDeep} !important;
          padding-left: 1.15rem !important;
        }

        .kcs-btn-primary {
          position: relative; overflow: hidden;
          transition: transform .22s ease, box-shadow .22s ease,
                      background .22s ease, border-color .22s ease, color .22s ease;
        }
        .kcs-btn-primary::after {
          content: "";
          position: absolute; inset: 0;
          transform: translateX(-115%);
          background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
          transition: transform .65s ease;
        }
        .kcs-btn-primary:hover::after   { transform: translateX(115%); }
        .kcs-btn-primary:hover {
          transform: translateY(-2px) !important;
          background: linear-gradient(135deg, ${KCS.goldDark}, ${KCS.navyDeep}) !important;
          border-color: ${KCS.goldDark} !important;
          box-shadow: 0 18px 34px rgba(201,168,76,0.24) !important;
          color: ${KCS.white} !important;
        }

        .kcs-nav-toggle { transition: background-color .2s ease, border-color .2s ease; }
        .kcs-nav-toggle:hover {
          background: ${KCS.white} !important;
          border-color: rgba(27,43,107,0.24) !important;
        }

        .kcs-mobile-panel { animation: kcsFadeDown .24s ease; }
        @keyframes kcsFadeDown {
          from { opacity: 0; transform: translateY(-8px); }
          to   { opacity: 1; transform: translateY(0); }
        }

        .kcs-mobile-group__panel {
          overflow: hidden;
          transition: max-height .25s ease;
        }
        .kcs-mobile-group-item { transition: background-color .15s ease; }
        .kcs-mobile-group-item:hover { background: rgba(201,168,76,0.08) !important; }

        .kcs-kcbadge {
          transition: opacity .2s ease, transform .2s ease,
                      border-color .2s ease, background .2s ease;
        }
        .kcs-kcbadge:hover {
          opacity: 0.88 !important;
          transform: translateY(-1px) !important;
          border-color: rgba(201,168,76,0.55) !important;
          background: rgba(201,168,76,0.20) !important;
        }

        /* ── Desktop nav hidden on mobile ── */
        @media (max-width: 980px) {
          .kcs-desktop-nav,
          .kcs-nav-cta    { display: none !important; }
          .kcs-nav-toggle { display: inline-flex !important; }
        }

        /* ── Tablet: hide center badge ── */
        @media (max-width: 780px) {
          .kcs-topbar-center { display: none !important; }
        }

        /* ── Mobile: hide email + Licensed badge ── */
        @media (max-width: 640px) {
          .kcs-topbar-email  { display: none !important; }
          .kcs-topbar-badge  { display: none !important; }
        }

        /* ── Small mobile: hide phone number text, keep icon only ── */
        @media (max-width: 420px) {
          .kcs-phone-number { display: none !important; }
        }

        @media (prefers-reduced-motion: reduce) {
          .kcs-topbar-link, .kcs-social-link, .kcs-menu-link,
          .kcs-btn-primary, .kcs-mobile-panel,
          .kcs-nav-toggle, .kcs-mobile-group__panel, .kcs-kcbadge {
            transition: none !important; animation: none !important;
          }
        }
      `}</style>

      <header
        ref={headerRef}
        style={{
          position: "sticky", top: 0, zIndex: 1000,
          fontFamily: "'Manrope', 'Segoe UI', Arial, sans-serif",
        }}
      >

        {/* ── TOP UTILITY BAR ─────────────────────────────────────────── */}
        <div style={{
          background: `linear-gradient(90deg, ${KCS.navyDeep} 0%, ${KCS.navy} 60%, ${KCS.navyLight} 100%)`,
          color: KCS.white,
          borderBottom: `1px solid ${KCS.borderLight}`,
        }}>
          <div style={{
            width: "min(100% - 2rem, 1280px)",
            margin: "0 auto",
            display: "flex",
            alignItems: "center",
            justifyContent: "space-between",
            flexWrap: "nowrap",
            gap: "0.5rem",
            minHeight: 48,
            paddingBlock: "0.5rem",
          }}>

            {/* ── LEFT: Phone + Email ── */}
            <div style={{ display:"flex", alignItems:"center", gap:"1rem", flexShrink: 0 }}>

              <a href="tel:+19132577291" className="kcs-topbar-link"
                style={{ display:"inline-flex", alignItems:"center", gap:"0.5rem",
                         fontSize:"0.78rem", fontWeight:700,
                         color: KCS.white, textDecoration:"none" }}>
                <span style={{ display:"inline-flex", width:18, height:18,
                               color:"rgba(255,255,255,0.9)", flexShrink:0 }}>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round"
                    style={{ width:"100%", height:"100%" }}>
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.12.9.33 1.78.62 2.62a2 2 0 0 1-.45 2.11L8 9.91a16 16 0 0 0 6.09 6.09l1.46-1.28a2 2 0 0 1 2.11-.45c.84.29 1.72.5 2.62.62A2 2 0 0 1 22 16.92z"/>
                  </svg>
                </span>
                <span style={{ fontSize:"0.64rem", fontWeight:800, textTransform:"uppercase",
                               letterSpacing:"0.14em", color: KCS.goldLight }}>Phone</span>
                <span className="kcs-phone-number">(913) 257-7291</span>
              </a>

              <a href="mailto:info@kcscommercial.com?subject=Service%20Inquiry%20-%20KCS%20Website"
                className="kcs-topbar-link kcs-topbar-email"
                style={{ display:"inline-flex", alignItems:"center", gap:"0.5rem",
                         fontSize:"0.78rem", fontWeight:700,
                         color:"rgba(255,255,255,0.75)", textDecoration:"none" }}>
                <span style={{ display:"inline-flex", width:18, height:18,
                               color:"rgba(255,255,255,0.9)", flexShrink:0 }}>
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round"
                    style={{ width:"100%", height:"100%" }}>
                    <path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z"/>
                    <path d="m22 6-10 7L2 6"/>
                  </svg>
                </span>
                <span style={{ fontSize:"0.64rem", fontWeight:800, textTransform:"uppercase",
                               letterSpacing:"0.14em", color: KCS.goldLight }}>Email</span>
                <span>info@kcscommercial.com</span>
              </a>
            </div>

            {/* ── CENTER: KC Metro Based badge ── */}
            <div className="kcs-topbar-center" style={{ display:"flex", justifyContent:"center", flexShrink:0 }}>
              <a
                href="https://www.google.com/maps/search/Kansas+City+Metro+Area"
                target="_blank"
                rel="noopener noreferrer"
                className="kcs-kcbadge"
                style={{
                  display: "inline-flex", alignItems: "center", gap: "0.45rem",
                  minHeight: 30, paddingInline: "0.85rem",
                  border: `1px solid rgba(201,168,76,0.35)`,
                  background: "rgba(201,168,76,0.12)",
                  fontSize: "0.68rem", fontWeight: 800,
                  letterSpacing: "0.08em", textTransform: "uppercase",
                  color: KCS.goldLight, textDecoration: "none",
                }}
              >
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                  strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round"
                  style={{ width: 13, height: 13, flexShrink: 0 }}>
                  <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0 1 18 0z"/>
                  <circle cx="12" cy="10" r="3"/>
                </svg>
                KC Metro Based
              </a>
            </div>

            {/* ── RIGHT: Badge + Socials ── */}
            <div style={{ display:"flex", alignItems:"center", gap:"0.5rem", flexShrink: 0 }}>

              <span className="kcs-topbar-badge" style={{
                display:"inline-flex", alignItems:"center", minHeight:30,
                paddingInline:"0.8rem",
                border:`1px solid ${KCS.borderLight}`,
                background:"rgba(255,255,255,0.07)",
                fontSize:"0.68rem", fontWeight:800, letterSpacing:"0.08em", textTransform:"uppercase",
              }}>
                Licensed · Insured · Bonded
              </span>

              <div aria-label="Social media" style={{ display:"flex", alignItems:"center", gap:"0.35rem" }}>

                {/* Google */}
                <a href="https://www.google.com/maps?q=KCS+Commercial+Services"
                  target="_blank" rel="noopener noreferrer" aria-label="Google My Business"
                  className="kcs-social-link" style={{
                  display:"inline-flex", alignItems:"center", justifyContent:"center",
                  width:32, height:32, border:`1px solid ${KCS.borderLight}`,
                  background:"rgba(255,255,255,0.07)", color: KCS.white, textDecoration:"none",
                }}>
                  <svg viewBox="0 0 24 24" aria-hidden="true" style={{ width:16, height:16 }}>
                    <path fill="currentColor" d="M21.8 12.2c0-.7-.1-1.3-.2-1.9H12v3.6h5.5c-.2 1.2-.9 2.3-1.9 3v2.5h3.1c1.8-1.7 3.1-4.2 3.1-7.2Z"/>
                    <path fill="currentColor" d="M12 22c2.7 0 5-.9 6.7-2.5l-3.1-2.5c-.9.6-2 .9-3.6.9-2.8 0-5.2-1.9-6-4.5H2.8v2.6A10 10 0 0 0 12 22Z"/>
                    <path fill="currentColor" d="M6 13.4A6 6 0 0 1 5.7 12c0-.5.1-.9.2-1.4V8H2.8A10 10 0 0 0 2 12c0 1.4.3 2.8.8 4l3.2-2.6Z"/>
                    <path fill="currentColor" d="M12 6c1.5 0 2.8.5 3.9 1.5l2.9-2.9A10 10 0 0 0 2.8 8l3.1 2.6C6.8 7.9 9.2 6 12 6Z"/>
                  </svg>
                </a>

                {/* Facebook */}
                <a href="https://www.facebook.com/people/KCS-Commercial-Services-LLC/61570748172859/?mibextid=wwXIfr&rdid=EerGHP4SNkzCAd0g&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1Bkpi74wtM%2F%3Fmibextid%3DwwXIfr" aria-label="Facebook" className="kcs-social-link" style={{
                  display:"inline-flex", alignItems:"center", justifyContent:"center",
                  width:32, height:32, border:`1px solid ${KCS.borderLight}`,
                  background:"rgba(255,255,255,0.07)", color: KCS.white, textDecoration:"none",
                }}>
                  <svg viewBox="0 0 24 24" aria-hidden="true" style={{ width:16, height:16 }}>
                    <path fill="currentColor" d="M13.5 22v-8.2h2.8l.4-3.2h-3.2V8.6c0-.9.3-1.6 1.7-1.6h1.8V4.1c-.3 0-1.4-.1-2.7-.1-2.7 0-4.5 1.6-4.5 4.6v2h-3v3.2h3V22h3.7Z"/>
                  </svg>
                </a>

                {/* Instagram */}
                <a href="https://www.instagram.com/kcscommercial_official?igsh=NXlieHc0NWo0Y2Ry" aria-label="Instagram" className="kcs-social-link" style={{
                  display:"inline-flex", alignItems:"center", justifyContent:"center",
                  width:32, height:32, border:`1px solid ${KCS.borderLight}`,
                  background:"rgba(255,255,255,0.07)", color: KCS.white, textDecoration:"none",
                }}>
                  <svg viewBox="0 0 24 24" aria-hidden="true" style={{ width:16, height:16 }}>
                    <path fill="currentColor" d="M7.5 2h9A5.5 5.5 0 0 1 22 7.5v9a5.5 5.5 0 0 1-5.5 5.5h-9A5.5 5.5 0 0 1 2 16.5v-9A5.5 5.5 0 0 1 7.5 2Zm0 1.8A3.7 3.7 0 0 0 3.8 7.5v9a3.7 3.7 0 0 0 3.7 3.7h9a3.7 3.7 0 0 0 3.7-3.7v-9a3.7 3.7 0 0 0-3.7-3.7h-9Zm9.4 1.4a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.8A3.2 3.2 0 1 0 12 15.2 3.2 3.2 0 0 0 12 8.8Z"/>
                  </svg>
                </a>

                {/* LinkedIn */}
                <a href="https://www.linkedin.com/in/kcs-commercial-services-llc-6b9983405/" aria-label="LinkedIn" className="kcs-social-link" style={{
                  display:"inline-flex", alignItems:"center", justifyContent:"center",
                  width:32, height:32, border:`1px solid ${KCS.borderLight}`,
                  background:"rgba(255,255,255,0.07)", color: KCS.white, textDecoration:"none",
                }}>
                  <svg viewBox="0 0 24 24" aria-hidden="true" style={{ width:16, height:16 }}>
                    <path fill="currentColor" d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77Z"/>
                  </svg>
                </a>

                {/* BBB */}
                <a href="#" target="_blank" rel="noopener noreferrer"
                  aria-label="Better Business Bureau" className="kcs-social-link" style={{
                  display:"inline-flex", alignItems:"center", justifyContent:"center",
                  width:38, height:32, border:`1px solid ${KCS.borderLight}`,
                  background:"rgba(255,255,255,0.10)", color: KCS.white, textDecoration:"none",
                  fontSize: "0.6rem", fontWeight: 900, fontFamily: "Montserrat, sans-serif",
                }}>
                  <span style={{ color: KCS.goldLight }}>BBB</span>
                </a>

              </div>
            </div>

          </div>
        </div>

        {/* ── MAIN NAVIGATION ─────────────────────────────────────────── */}
        <div style={{
          position: "relative",
          background: scrolled ? "rgba(245,244,239,0.97)" : "rgba(245,244,239,0.94)",
          backdropFilter: "blur(10px)",
          borderBottom: `1px solid ${KCS.border}`,
          boxShadow: scrolled ? KCS.shadow : "none",
          transition: "box-shadow .25s ease, background-color .25s ease",
        }}>
          <div style={{
            width: "min(100% - 2rem, 1280px)",
            margin: "0 auto",
            display: "grid",
            gridTemplateColumns: "auto 1fr auto",
            alignItems: "center",
            gap: "1.25rem",
            minHeight: 84,
          }}>

            {/* ── BRAND ── */}
            <div>
              <a href="/" aria-label="KCS Commercial Services Home"
                style={{ display:"inline-flex", alignItems:"center",
                         textDecoration:"none", color: KCS.navy }}>
                <img
                  src="/wp-content/uploads/2026/04/KCSBrandLogo-scaled.png"
                  alt="KCS Commercial Services LLC"
                  style={{
                    height: 52,
                    width: "auto",
                    maxWidth: 240,
                    display: "block",
                    objectFit: "contain",
                    flexShrink: 0,
                  }}
                />
              </a>
            </div>

            {/* ── DESKTOP NAV ── */}
            <nav className="kcs-desktop-nav" aria-label="Primary navigation"
              style={{ justifySelf:"center", display:"flex" }}>
              <ul style={{
                display:"flex", alignItems:"center", gap:"1.5rem",
                listStyle:"none", margin:0, padding:0,
              }}>
                <li><a href="/" className="kcs-menu-link" style={desktopLinkStyle}>Home</a></li>
                <li><a href="/about-us" className="kcs-menu-link" style={desktopLinkStyle}>About Us</a></li>
                <li style={{ position:"relative" }}>
                  <button
                    type="button"
                    className={`kcs-menu-link${openDropdown === "services" ? " is-open" : ""}`}
                    aria-expanded={openDropdown === "services"}
                    onClick={() => toggleDropdown("services")}
                    style={{ ...desktopLinkStyle, border:0, background:"transparent",
                             cursor:"pointer", fontFamily:"inherit" }}>
                    <span>Services</span>
                    <Caret open={openDropdown === "services"} />
                  </button>
                  <Dropdown items={SERVICES} visible={openDropdown === "services"} />
                </li>
                <li><a href="/locations" className="kcs-menu-link" style={desktopLinkStyle}>Locations</a></li>
                <li><a href="/contact-us" className="kcs-menu-link" style={desktopLinkStyle}>Contact Us</a></li>
              </ul>
            </nav>

            {/* ── CTA + HAMBURGER ── */}
            <div style={{ display:"flex", alignItems:"center", gap:"0.75rem" }}>
              <div className="kcs-nav-cta" style={{ display:"flex" }}>
                <a href="/contact-us" className="kcs-btn-primary" style={{
                  display:"inline-flex", alignItems:"center", justifyContent:"center",
                  minHeight:50, paddingInline:"1.25rem",
                  border:`1px solid transparent`,
                  background:`linear-gradient(135deg, ${KCS.navy}, ${KCS.navyLight})`,
                  boxShadow:`0 18px 34px rgba(27,58,107,0.18)`,
                  color: KCS.goldLight,
                  textDecoration:"none", textTransform:"uppercase",
                  fontSize:"0.76rem", fontWeight:700, letterSpacing:"0.14em",
                  fontFamily:"inherit",
                }}>
                  Request a Quote
                </a>
              </div>

              <button
                className="kcs-nav-toggle"
                type="button"
                aria-expanded={mobileOpen}
                aria-controls="kcs-mobile-nav"
                aria-label={mobileOpen ? "Close menu" : "Open menu"}
                onClick={() => setMobileOpen(p => !p)}
                style={{
                  display:"none",
                  alignItems:"center", justifyContent:"center", flexDirection:"column",
                  gap:5, width:50, height:50,
                  border:`1px solid ${KCS.border}`,
                  background:"rgba(255,255,255,0.75)",
                  cursor:"pointer",
                }}
              >
                {[0,1,2].map((i) => (
                  <span key={i} style={{
                    display:"block", width:20, height:2,
                    background: KCS.navy,
                    transition:"transform .22s ease, opacity .22s ease",
                    transform: mobileOpen
                      ? i === 0 ? "translateY(7px) rotate(45deg)"
                      : i === 2 ? "translateY(-7px) rotate(-45deg)"
                      : "none"
                      : "none",
                    opacity: mobileOpen && i === 1 ? 0 : 1,
                  }} />
                ))}
              </button>
            </div>
          </div>

          {/* ── MOBILE PANEL ─────────────────────────────────────────── */}
          {mobileOpen && (
            <div id="kcs-mobile-nav" className="kcs-mobile-panel" style={{
              borderTop:`1px solid ${KCS.border}`,
              background:"rgba(245,244,239,0.98)",
              backdropFilter:"blur(10px)",
            }}>
              <div style={{ width:"min(100% - 2rem, 1280px)", margin:"0 auto" }}>
                <nav aria-label="Mobile navigation"
                  style={{ display:"grid", gap:0, paddingBlock:"1rem 1.25rem" }}>
                  <MobileLink href="/">Home</MobileLink>
                  <MobileLink href="/about-us">About Us</MobileLink>
                  <MobileGroup
                    label="Services"
                    items={SERVICES}
                    open={openMobileGroup === "services"}
                    onToggle={() => setOpenMobileGroup(p => p === "services" ? null : "services")}
                  />
                  <MobileLink href="/locations">Locations</MobileLink>
                  <MobileLink href="/contact-us">Contact Us</MobileLink>
                  <a href="/contact-us" className="kcs-btn-primary" style={{
                    display:"inline-flex", alignItems:"center", justifyContent:"center",
                    marginTop:"1rem", minHeight:50, paddingInline:"1.25rem",
                    border:`1px solid transparent`,
                    background:`linear-gradient(135deg, ${KCS.navy}, ${KCS.navyLight})`,
                    boxShadow:`0 18px 34px rgba(27,58,107,0.18)`,
                    color: KCS.goldLight,
                    textDecoration:"none", textTransform:"uppercase",
                    fontSize:"0.76rem", fontWeight:700, letterSpacing:"0.14em",
                    fontFamily:"inherit",
                  }}>
                    Request a Quote
                  </a>
                </nav>
              </div>
            </div>
          )}
        </div>
      </header>
    </>
  )
}

function Dropdown({ items, visible }) {
  return (
    <div style={{
      position:"absolute", top:"calc(100% + 14px)", left:0,
      minWidth:290, padding:"0.55rem",
      border:`1px solid ${KCS.border}`,
      background:"rgba(255,255,255,0.97)",
      backdropFilter:"blur(10px)",
      boxShadow: KCS.shadowStrong,
      opacity: visible ? 1 : 0,
      visibility: visible ? "visible" : "hidden",
      transform: visible ? "translateY(0)" : "translateY(10px)",
      transition:"opacity .22s ease, transform .22s ease, visibility .22s ease",
      zIndex: 50,
    }}>
      <div style={{
        height:3,
        background:`linear-gradient(90deg, ${KCS.navy}, ${KCS.gold})`,
        marginBottom:"0.4rem",
      }} />
      {items.map((item) => (
        <a key={item.href} href={item.href}
          className="kcs-dropdown-item"
          style={{
            display:"block",
            padding:"0.9rem 0.95rem",
            color: KCS.navy,
            textDecoration:"none",
            fontSize:"0.82rem", fontWeight:800,
            letterSpacing:"0.04em", textTransform:"uppercase",
            borderBottom:`1px solid rgba(27,43,107,0.06)`,
          }}>
          {item.label}
        </a>
      ))}
    </div>
  )
}

function Caret({ open }) {
  return (
    <span style={{
      display:"inline-block", flexShrink:0,
      width:9, height:9,
      borderRight:`2px solid currentColor`,
      borderBottom:`2px solid currentColor`,
      transform: open
        ? "rotate(-135deg) translateY(-1px)"
        : "rotate(45deg) translateY(-2px)",
      transition:"transform .22s ease",
    }} />
  )
}

function MobileLink({ href, children }) {
  return (
    <a href={href} style={{
      display:"flex", alignItems:"center",
      minHeight:58, paddingInline:0,
      borderBottom:`1px solid ${KCS.border}`,
      color: KCS.navy, textDecoration:"none",
      fontSize:"0.92rem", fontWeight:700, fontFamily:"inherit",
    }}>
      {children}
    </a>
  )
}

function MobileGroup({ label, items, open, onToggle }) {
  return (
    <div>
      <button type="button" aria-expanded={open} onClick={onToggle} style={{
        display:"flex", alignItems:"center", justifyContent:"space-between",
        width:"100%", minHeight:58, paddingInline:0,
        border:0, borderBottom:`1px solid ${KCS.border}`,
        background:"transparent", color: KCS.navy,
        fontSize:"0.92rem", fontWeight:700,
        cursor:"pointer", fontFamily:"inherit",
      }}>
        <span>{label}</span>
        <Caret open={open} />
      </button>
      <div className="kcs-mobile-group__panel" style={{ maxHeight: open ? 600 : 0 }}>
        {items.map((item) => (
          <a key={item.href} href={item.href}
            className="kcs-mobile-group-item"
            style={{
              display:"block",
              padding:"0.9rem 0 0.9rem 1rem",
              borderBottom:`1px solid rgba(27,43,107,0.08)`,
              color: KCS.gold, textDecoration:"none",
              fontSize:"0.8rem", fontWeight:800,
              textTransform:"uppercase", letterSpacing:"0.08em",
              fontFamily:"inherit",
            }}>
            {item.label}
          </a>
        ))}
      </div>
    </div>
  )
}