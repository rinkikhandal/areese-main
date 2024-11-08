document.addEventListener("DOMContentLoaded", function () {
  // Get the navbar height
  const navbarHeight = document.querySelector(".navbar").offsetHeight;

  // Attach click event listeners to each link
  document.querySelectorAll("a[href^='#']").forEach((anchor) => {
    anchor.addEventListener("click", function (event) {
      event.preventDefault();

      // Scroll to the target section with an offset
      const targetId = this.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);
      const targetPosition =
        targetElement.getBoundingClientRect().top +
        window.scrollY -
        navbarHeight;

      window.scrollTo({
        top: targetPosition,
        behavior: "smooth",
      });
    });
  });
});
