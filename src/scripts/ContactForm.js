import React, { useState, useEffect, useRef } from "react"

// ─── KCS Brand Tokens ────────────────────────────────────────────────────────
const KCS = {
  navy:     "#1B3A6B",
  navyDeep: "#122649",
  gold:     "#C9A84C",
  goldDark: "#A8882E",
  goldLight:"#E8D49A",
  white:    "#ffffff",
}

// ─── EmailJS config — change here, updates everywhere ────────────────────────
const EMAILJS_CONFIG = {
  publicKey:        "Y8K5QxlYLcq0GsUbt",
  serviceId:        "service_5e06r2o",
  templateInternal: "template_r2st5jy",  // notificación a KCS
  templateAutoReply:"template_5h990ir",  // confirmación al cliente
}

// ─── reCAPTCHA site key — change here, updates everywhere ────────────────────
const RECAPTCHA_SITE_KEY = "6Ldb4aksAAAAAF6H4Hs58PvpVgiL4Kxevwn_nvzw"

// ─── Services list — shared across all forms ─────────────────────────────────
const ALL_SERVICES = [
  "Commercial Cleaning (Recurring)",
  "Post Construction Cleaning",
  "Landscaping & Grounds",
  "Drywall & Interior",
  "Roofing & Siding",
  "Multiple Services",
  "Other / Not Sure",
]

// ─── Main Component ───────────────────────────────────────────────────────────
/**
 * Props:
 *   prefix          {string}  — unique ID prefix per instance, e.g. "hero", "cl", "about"
 *   formTitle       {string}  — heading inside the form card
 *   formSubtitle    {string}  — subheading inside the form card
 *   eyebrow         {string}  — small label above the heading
 *   btnText         {string}  — submit button label
 *   serviceDefault  {string}  — pre-selected service in dropdown (optional)
 *   successMsg      {string}  — custom success message (optional)
 */
export default function ContactForm({
  prefix         = "form",
  formTitle      = "Request a Free Contract Quote",
  formSubtitle   = "We'll respond within 24 hours.",
  eyebrow        = "Free Consultation",
  btnText        = "Submit Request →",
  serviceDefault = "",
  successMsg     = "Thank you — we'll be in touch within 24 hours.",
}) {
  const [status,   setStatus]   = useState("idle") // idle | sending | success | error
  const [captchaOk, setCaptchaOk] = useState(false)
  const [showCaptchaErr, setShowCaptchaErr] = useState(false)

  const captchaRef  = useRef(null)
  const widgetIdRef = useRef(null)
  const formRef     = useRef(null)

  // ── Load EmailJS once ──────────────────────────────────────────────────────
  useEffect(() => {
    if (window.emailjs) {
      window.emailjs.init({ publicKey: EMAILJS_CONFIG.publicKey })
    }
  }, [])

  // ── Render reCAPTCHA widget once the div is mounted ───────────────────────
  useEffect(() => {
    if (!captchaRef.current) return

    const tryRender = () => {
      if (window.grecaptcha && window.grecaptcha.render && captchaRef.current) {
        // Avoid double-render
        if (widgetIdRef.current !== null) return
        widgetIdRef.current = window.grecaptcha.render(captchaRef.current, {
          sitekey:  RECAPTCHA_SITE_KEY,
          theme:    "dark",
          callback: () => setCaptchaOk(true),
          "expired-callback": () => setCaptchaOk(false),
        })
      } else {
        setTimeout(tryRender, 150)
      }
    }
    tryRender()
  }, [])

  // ── Field IDs helper ──────────────────────────────────────────────────────
  const id = (field) => `${prefix}_${field}`

  // ── Submit ────────────────────────────────────────────────────────────────
  const handleSubmit = async (e) => {
    e.preventDefault()
    setShowCaptchaErr(false)

    if (!captchaOk) {
      setShowCaptchaErr(true)
      captchaRef.current?.scrollIntoView({ behavior: "smooth", block: "center" })
      return
    }

    setStatus("sending")

    const formData = {
      name:    document.getElementById(id("name"))?.value    || "",
      company: document.getElementById(id("company"))?.value || "",
      phone:   document.getElementById(id("phone"))?.value   || "",
      email:   document.getElementById(id("email"))?.value   || "",
      service: document.getElementById(id("service"))?.value || "",
      city:    document.getElementById(id("city"))?.value    || "",
      message: document.getElementById(id("details"))?.value || "",
    }

    try {
      // 1. Notificación interna a KCS
      await window.emailjs.send(
        EMAILJS_CONFIG.serviceId,
        EMAILJS_CONFIG.templateInternal,
        formData
      )
      // 2. Auto-reply al cliente
      await window.emailjs.send(
        EMAILJS_CONFIG.serviceId,
        EMAILJS_CONFIG.templateAutoReply,
        { name: formData.name, email: formData.email }
      )

      formRef.current?.reset()
      if (serviceDefault && document.getElementById(id("service"))) {
        document.getElementById(id("service")).value = serviceDefault
      }
      if (widgetIdRef.current !== null) {
        window.grecaptcha.reset(widgetIdRef.current)
        setCaptchaOk(false)
      }
      setStatus("success")
    } catch (err) {
      console.error("EmailJS error:", err)
      if (widgetIdRef.current !== null) {
        window.grecaptcha.reset(widgetIdRef.current)
        setCaptchaOk(false)
      }
      setStatus("error")
    }
  }

  // ── Render ────────────────────────────────────────────────────────────────
  return (
    <>
      <style>{`
        .kcf-input {
          width: 100%;
          padding: 0.9rem 1rem;
          border: 1px solid rgba(255,255,255,0.14);
          background: rgba(255,255,255,0.07);
          color: #fff;
          font-size: 0.92rem;
          line-height: 1.5;
          font-family: inherit;
          outline: none;
          appearance: none;
          transition: border-color .22s ease, box-shadow .22s ease, background .22s ease;
        }
        .kcf-input::placeholder { color: rgba(255,255,255,0.32); }
        .kcf-input:focus {
          border-color: ${KCS.gold};
          box-shadow: 0 0 0 3px rgba(201,168,76,0.18);
          background: rgba(255,255,255,0.10);
        }
        .kcf-input option { background: ${KCS.navy}; color: #fff; }
        .kcf-textarea { resize: vertical; min-height: 100px; }

        .kcf-btn {
          position: relative; overflow: hidden;
          border: 1px solid ${KCS.gold};
          background: linear-gradient(135deg, ${KCS.gold}, ${KCS.goldDark});
          color: ${KCS.navyDeep};
          box-shadow: 0 16px 34px rgba(201,168,76,0.28);
          transition: transform .22s ease, box-shadow .22s ease, background .22s ease;
          cursor: pointer;
        }
        .kcf-btn::after {
          content: ""; position: absolute; inset: 0;
          transform: translateX(-115%);
          background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
          transition: transform .65s ease;
        }
        .kcf-btn:hover::after { transform: translateX(115%); }
        .kcf-btn:hover {
          transform: translateY(-2px);
          background: linear-gradient(135deg, ${KCS.goldLight}, ${KCS.gold});
          box-shadow: 0 20px 44px rgba(201,168,76,0.38);
        }
        .kcf-btn:disabled {
          opacity: 0.65; cursor: not-allowed; transform: none;
        }

        .kcf-grid-2 {
          display: grid;
          gap: 1rem;
          grid-template-columns: 1fr 1fr;
        }
        @media (max-width: 640px) {
          .kcf-grid-2 { grid-template-columns: 1fr; }
        }

        .g-recaptcha { margin-top: 0.25rem; }
      `}</style>

      <div style={{
        position: "relative",
        overflow: "hidden",
        border: `1px solid rgba(27,58,107,0.12)`,
        background: KCS.navyDeep,
        boxShadow: "0 24px 60px rgba(27,58,107,0.18)",
        fontFamily: "'Montserrat', 'Segoe UI', sans-serif",
      }}>
        {/* Gold top bar */}
        <div style={{
          height: 4,
          background: `linear-gradient(90deg, ${KCS.gold}, ${KCS.goldLight}, ${KCS.gold})`,
        }} />

        <div style={{ padding: "1.75rem 2rem 2rem" }}>

          {/* Eyebrow */}
          <p style={{
            fontSize: "0.68rem", fontWeight: 800,
            textTransform: "uppercase", letterSpacing: "0.22em",
            color: KCS.gold, marginBottom: "0.6rem",
          }}>
            {eyebrow}
          </p>

          {/* Title */}
          <h3 style={{
            fontSize: "1.35rem", fontWeight: 800,
            letterSpacing: "-0.03em", lineHeight: 1.2,
            color: KCS.white, margin: 0,
          }}>
            {formTitle}
          </h3>

          {/* Subtitle */}
          <p style={{
            fontSize: "0.84rem", color: "rgba(255,255,255,0.62)",
            marginTop: "0.4rem", lineHeight: 1.5,
          }}>
            {formSubtitle}
          </p>

          {/* ── Alerts ── */}
          {status === "success" && (
            <div style={{
              marginTop: "1rem", padding: "0.75rem 1rem",
              border: "1px solid rgba(134,239,172,0.35)",
              background: "rgba(34,197,94,0.14)",
              color: "#bbf7d0", fontSize: "0.88rem", lineHeight: 1.6,
            }}>
              {successMsg}
            </div>
          )}
          {status === "error" && (
            <div style={{
              marginTop: "1rem", padding: "0.75rem 1rem",
              border: "1px solid rgba(252,165,165,0.35)",
              background: "rgba(239,68,68,0.14)",
              color: "#fecaca", fontSize: "0.88rem",
            }}>
              Something went wrong. Please try again.
            </div>
          )}

          {/* ── Form ── */}
          <form ref={formRef} onSubmit={handleSubmit} style={{ marginTop: "1.5rem" }} noValidate>

            {/* Row 1: Name + Company */}
            <div className="kcf-grid-2" style={{ marginBottom: "1rem" }}>
              <div>
                <Label>Full Name *</Label>
                <input id={id("name")} name="name" type="text"
                  className="kcf-input" required placeholder="John Smith" />
              </div>
              <div>
                <Label>Company / Organization</Label>
                <input id={id("company")} name="company" type="text"
                  className="kcf-input" placeholder="Acme Corp" />
              </div>
            </div>

            {/* Row 2: Phone + Email */}
            <div className="kcf-grid-2" style={{ marginBottom: "1rem" }}>
              <div>
                <Label>Phone Number *</Label>
                <input id={id("phone")} name="phone" type="tel"
                  className="kcf-input" required placeholder="(913) 000-0000" />
              </div>
              <div>
                <Label>Email Address *</Label>
                <input id={id("email")} name="email" type="email"
                  className="kcf-input" required placeholder="you@company.com" />
              </div>
            </div>

            {/* Row 3: Service + City */}
            <div className="kcf-grid-2" style={{ marginBottom: "1rem" }}>
              <div>
                <Label>Service Needed *</Label>
                <select id={id("service")} name="service"
                  className="kcf-input" required
                  defaultValue={serviceDefault}>
                  <option value="">Select a service</option>
                  {ALL_SERVICES.map((svc) => (
                    <option key={svc} value={svc}>{svc}</option>
                  ))}
                </select>
              </div>
              <div>
                <Label>City / Location *</Label>
                <input id={id("city")} name="city" type="text"
                  className="kcf-input" required placeholder="Overland Park, KS" />
              </div>
            </div>

            {/* Textarea */}
            <div style={{ marginBottom: "1rem" }}>
              <Label>Tell Us About Your Facility</Label>
              <textarea id={id("details")} name="message" rows={4}
                className="kcf-input kcf-textarea"
                placeholder="Facility type, sq footage, services needed..." />
            </div>

            {/* reCAPTCHA */}
            <div style={{ marginBottom: "1rem" }}>
              <div ref={captchaRef} />
              {showCaptchaErr && (
                <p style={{
                  marginTop: "0.4rem",
                  fontSize: "0.78rem", fontWeight: 700,
                  color: "#fca5a5",
                }}>
                  Please complete the captcha before submitting.
                </p>
              )}
            </div>

            {/* Submit */}
            <button
              type="submit"
              className="kcf-btn"
              disabled={status === "sending"}
              style={{
                width: "100%",
                display: "inline-flex", alignItems: "center", justifyContent: "center",
                padding: "1rem 1.5rem",
                fontSize: "0.8rem", fontWeight: 800,
                textTransform: "uppercase", letterSpacing: "0.14em",
                fontFamily: "inherit",
              }}
            >
              {status === "sending" ? "Sending…" : btnText}
            </button>

            <p style={{
              textAlign: "center", marginTop: "0.75rem",
              fontSize: "0.68rem", color: "rgba(255,255,255,0.40)",
            }}>
              🔒 Your information is private and will never be shared.
            </p>
          </form>
        </div>
      </div>
    </>
  )
}

// ─── Label helper ─────────────────────────────────────────────────────────────
function Label({ children }) {
  return (
    <label style={{
      display: "block", marginBottom: "0.4rem",
      fontSize: "0.68rem", fontWeight: 800,
      textTransform: "uppercase", letterSpacing: "0.16em",
      color: "rgba(255,255,255,0.65)",
    }}>
      {children}
    </label>
  )
}