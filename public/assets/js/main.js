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

  AOS.init();
});

// =================== filter label active in information page ==========================
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


document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('donationForm');
  const inputs = form.querySelectorAll('input, textarea, select');
  const submitButton = form.querySelector('.btn-submit');
  const warning = document.getElementById('warning');
  const phoneInput = document.getElementById('phone');
  const weightInput = document.getElementById('weight');
  const shippingSelect = document.getElementById('shipping');
  const successModal = document.getElementById('successModal');
  const closeModalElements = document.querySelectorAll('.tutup, .btn-close');
  const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

  function validateForm() {
    let isValid = true;
    inputs.forEach(input => {
      if (!input.value) {
        isValid = false;
      }
    });

    const phoneValue = phoneInput.value;
    const phonePattern = /^\d+$/; // Regular expression untuk hanya angka

    if (!phoneValue.startsWith('08') || phoneValue.length < 11 || !phonePattern.test(phoneValue)) {
      isValid = false;
      error.style.display = phoneValue.length === 0 ? 'none' : 'block';
    } else {
      error.style.display = 'none';
    }

    if (shippingSelect.value === 'Pick Up' && weightInput.value < 10) {
      isValid = false;
      warning.style.display = 'block';
    } else { 
      warning.style.display = 'none';
    }


    submitButton.disabled = !isValid;
    submitButton.style.cursor = isValid ? 'pointer' : 'default';
    submitButton.style.backgroundColor = isValid ? '#35cc33' : 'gray';
  }

  inputs.forEach(input => {
    input.addEventListener('input', validateForm);
  });

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    if (!submitButton.disabled) {
      const formData = new FormData(form);

      fetch(form.action, {
        method: form.method,
        body: formData,
        headers: {
          'Accept': 'application/json',
          'X-Requested-With': 'XMLHttpRequest',
          'X-CSRF-Token': csrfToken
        }
      })
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          console.log(data); // Debug: log the response data
          if (data.message === 'Data donasi berhasil ditambahkan!') {
            form.reset();
            validateForm(); // Re-validate form after reset
            successModal.style.display = 'block';
          } else {
            alert('Terjadi kesalahan saat mengirim donasi');
          }
        })
        .catch(error => {
          console.error('Error:', error); // Debug: log any errors
        });
    }
  });

  closeModalElements.forEach(element => {
    element.addEventListener('click', function () {
      successModal.style.display = 'none';
    });
  });

  window.addEventListener('click', function (event) {
    if (event.target === successModal) {
      successModal.style.display = 'none';
    }
  });

  validateForm(); // Initial validation check
});



