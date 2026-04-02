import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import Navbar from "./scripts/Navbar"
import Footer from "./scripts/Footer"
import React from "react"
import ReactDOM from "react-dom/client"

const person1 = new Person("Brad")

if (document.querySelector("#render-react-example-here")) {
  const root = ReactDOM.createRoot(document.querySelector("#render-react-example-here"))
  root.render(<ExampleReactComponent />)
}

if (document.querySelector("#kcs-navbar")) {
  const navRoot = ReactDOM.createRoot(document.querySelector("#kcs-navbar"))
  navRoot.render(<Navbar />)
}

document.addEventListener("DOMContentLoaded", () => {
  // initNavbar() ya no es necesario si usas el React component
})

if (document.querySelector("#kcs-footer")) {
  ReactDOM.createRoot(document.querySelector("#kcs-footer")).render(<Footer />)
}