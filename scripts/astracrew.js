function toggleFaq(element) {
  const parent = element.parentElement;
  const content = element.nextElementSibling;
  const isOpen = parent.classList.contains("active-faq");

  // Close all other items for a premium single-open accordion feel
  document.querySelectorAll(".faq-item").forEach((item) => {
    item.classList.remove("active-faq");
    item.querySelector(".faq-content").style.maxHeight = null;
  });

  // If it wasn't open, open it now
  if (!isOpen) {
    parent.classList.add("active-faq");
    element.setAttribute("aria-expanded", "true");
    content.style.maxHeight = content.scrollHeight + "px";
  }
}
