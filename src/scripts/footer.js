export default function initFooter() {
  const footer = document.querySelector(".js-rpc-footer")
  if (!footer) return

  const yearNodes = footer.querySelectorAll(".js-rpc-current-year")
  const currentYear = new Date().getFullYear()

  yearNodes.forEach((node) => {
    node.textContent = String(currentYear)
  })
}