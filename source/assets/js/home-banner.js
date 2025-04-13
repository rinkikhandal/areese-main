// const imgWrapper = document.querySelectorAll("")
const wrapper = document.querySelector(".banner-wrapper");
// imgDivs = document.querySelectorAll(".banner-wrapper div");

const tabs = document.querySelectorAll(".checkbox-div");

let currentIndex = 0;
const totalSlides = tabs.length;
const wrapperWidth = wrapper.clientWidth;

const goToSlide = (index) => {
  wrapper.scrollTo({
    left: wrapperWidth * index,
    behavior: "smooth",
  });

  tabs.forEach((tab, i) => {
    tab.classList.toggle("active", i === index % totalSlides);
  });
};

const autoScroll = () => {
  currentIndex++;
  if (currentIndex <= totalSlides) {
    goToSlide(currentIndex);
  }

  // When it reaches the duplicated (last) slide
  if (currentIndex === totalSlides) {
    setTimeout(() => {
      // Instantly jump back to first slide without animation
      wrapper.scrollTo({
        left: 0,
        behavior: "auto",
      });

      currentIndex = 0;
    }, 0);
  }
};

// Auto Scroll

setInterval(autoScroll, 4000);

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const tabIndex = parseInt(tab.dataset.index, 10);
    const wrapperWidth = wrapper.clientWidth;
    currentIndex = tabIndex;
    goToSlide(currentIndex);

    tabs.forEach((t) => {
      const tIndex = parseInt(t.dataset.index, 10);
      tIndex === tabIndex
        ? t.classList.add("active")
        : t.classList.remove("active");
    });

    wrapper.scrollTo({
      left: wrapperWidth * tabIndex,
      behavior: "smooth",
    });
  });
});
