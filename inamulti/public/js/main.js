/* ========================= */
/* ======={ License }======= */
/* =========================
// Copyright && Icappucino 2023
// Github : https://github.com/Icappucino
// Instagram : https://www.instagram.com/icappucino_/
// Powered by Spacecode.id
// Instagram Vendor : https://www.instagram.com/spacecode.id/
=============================*/


/* Mengganti Warna pada Navbar */
const navbar = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll', function(){
    if (window.scrollY > 1){
        navbar.classList.replace('bg-transparent', 'nav-color');
    } else if (window.scrollY <= 0){
        navbar.classList.replace('nav-color', 'bg-transparent');
    }
});

/* Setting Hover pada Layanan Home */
const cards = document.querySelectorAll('.card-layanan');
cards.forEach((card) => {
  card.addEventListener('click', () => {
    card.querySelector('.hidden-content').style.display = 'block';
  });
});

  /**
   * Clients Slider
   */
  new Swiper('.clients-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 60
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 80
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 120
      }
    }
  });
