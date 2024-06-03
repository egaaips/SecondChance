$(document).ready(function () {
  $(".hamburger").click(function () {
      $(".top-menu").css("right", "0");
  });
  $(".close").click(function () {
      $(".top-menu").css("right", "-100vw");
  });
});

let currentIndex = 0;

function showSlide(index) {
  const slides = document.querySelectorAll(".item");
  if (index >= slides.length) {
      currentIndex = 0;
  } else if (index < 0) {
      currentIndex = slides.length - 1;
  } else {
      currentIndex = index;
  }

  const newTransform = -currentIndex * 100 + "%";
  document.querySelector(
      ".list"
  ).style.transform = `translateX(${newTransform})`;
}

function nextSlide() {
  showSlide(currentIndex + 1);
}

function prevSlide() {
  showSlide(currentIndex - 1);
}

document.addEventListener("DOMContentLoaded", () => {
  showSlide(currentIndex);
});

/* ============= Vision & Mission Accordion ============= */
const accordionGoalsItem = document.querySelectorAll(".goals_item");

accordionGoalsItem.forEach((item) => {
  const accordionHeader = item.querySelector(".goals_header");

  accordionHeader.addEventListener("click", () => {
      const openItem = document.querySelector(".accordion-open");

      toggleItem(item);

      if (openItem && openItem !== item) {
          toggleItem(openItem);
      }
  });
});

const toggleItem = (item) => {
  const accordionContent = item.querySelector(".goals_content");

  if (item.classList.contains("accordion-open")) {
      accordionContent.removeAttribute("style");
      item.classList.remove("accordion-open");
  } else {
      accordionContent.style.height = accordionContent.scrollHeight + "px";
      item.classList.add("accordion-open");
  }
};
