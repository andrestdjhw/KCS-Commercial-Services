import React from "react"
import ReactDOM from "react-dom/client"
import Navbar      from "./scripts/Navbar"
import Footer      from "./scripts/Footer"
import ContactForm from "./scripts/ContactForm"

// ─── Navbar ───────────────────────────────────────────────────────────────────
const navbarEl = document.querySelector("#kcs-navbar")
if (navbarEl) ReactDOM.createRoot(navbarEl).render(<Navbar />)

// ─── Footer ───────────────────────────────────────────────────────────────────
const footerEl = document.querySelector("#kcs-footer")
if (footerEl) ReactDOM.createRoot(footerEl).render(<Footer />)

// ─── ContactForm — mount every instance found on the page ────────────────────
// Each div[data-contact-form] gets its own independent React root.
// Props are passed via data-* attributes on the div.
document.querySelectorAll("[data-contact-form]").forEach((el) => {
  const props = {
    prefix:        el.dataset.prefix        || "form",
    formTitle:     el.dataset.formTitle     || "Request a Free Contract Quote",
    formSubtitle:  el.dataset.formSubtitle  || "We'll respond within 24 hours.",
    eyebrow:       el.dataset.eyebrow       || "Free Consultation",
    btnText:       el.dataset.btnText       || "Submit Request →",
    serviceDefault:el.dataset.serviceDefault|| "",
    successMsg:    el.dataset.successMsg    || "Thank you — we'll be in touch within 24 hours.",
  }
  ReactDOM.createRoot(el).render(<ContactForm {...props} />)
})