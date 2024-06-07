$(document).ready(function () {
  $(".hamburger").click(function () {
      $(".top-menu").css("right", "0");
  });
  $(".close").click(function () {
      $(".top-menu").css("right", "-100vw");
  });
});

// =================== navbar class active ======================================
document.addEventListener('DOMContentLoaded', () => {
  const currentPage = window.location.href;
  const navbarlinks = document.querySelectorAll('.nav-link');
  const dropdownLinks = document.querySelectorAll('.dropdown .nav-link');
  const homeLink = document.querySelector('.home');

  navbarlinks.forEach(navbarlink => {
    // Cek apakah URL saat ini sesuai dengan href pada nav-link
    if (currentPage === navbarlink.href) {
      navbarlink.classList.add('active');
    }
  });

  // Cek jika halaman saat ini adalah bagian dari dropdown
  dropdownLinks.forEach(dropdownLink => {
    const parentLi = dropdownLink.parentElement.parentElement.parentElement.querySelector('.nav-link');
    if (currentPage.includes(dropdownLink.href)) {
      parentLi.classList.add('active');
    }
  });

  // Remove 'active' class from home link if not on home page
  if (currentPage !== homeLink.href && currentPage !== `${homeLink.href}/`) {
    homeLink.classList.remove('active');
  }

  
  // Toggle dropdown menu on mobile
  const dropdowns = document.querySelectorAll('.nav-list .dropdown > span');
  dropdowns.forEach(dropdown => {
      dropdown.addEventListener('click', () => {
          dropdown.parentElement.classList.toggle('open');
      });
  });
});

// =================== filter label active ==========================
document.addEventListener('DOMContentLoaded', () => {
  const filterLabels = document.querySelectorAll('.filter-label');
  const currentPage = window.location.href;

  filterLabels.forEach(label => {
      if (currentPage === label.getAttribute('href')) {
          label.classList.add('active');
      }

      label.addEventListener('click', () => {
          filterLabels.forEach(l => l.classList.remove('active'));
          label.classList.add('active');
      });
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

document.addEventListener('DOMContentLoaded', function () {
  // Function to add AOS (Animate On Scroll) effects
  function initAOS() {
      const elements = document.querySelectorAll('[data-aos]');
      elements.forEach(element => {
          const delay = element.getAttribute('data-aos-delay');
          element.style.transitionDelay = `${delay}ms`;
          element.classList.add('aos-animate');
      });
  }

  // Simulate the AOS library by adding animation on scroll
  window.addEventListener('scroll', () => {
      const elements = document.querySelectorAll('[data-aos]');
      const scrollTop = window.scrollY + window.innerHeight;

      elements.forEach(element => {
          if (element.offsetTop < scrollTop) {
              element.classList.add('aos-animate');
          }
      });
  });

  // Initialize AOS effects
  initAOS();
});

