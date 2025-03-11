document.addEventListener('DOMContentLoaded', function() {
  var swiper = new Swiper('.swiper', {
      loop: true,
      autoplay: {
          delay: 0,
          disableOnInteraction: false,
      },
      speed: 5000,
      slidesPerView: 'auto',
      spaceBetween: 20,
      centeredSlides: true,
      
      observer: true,
      observeParents: true,
      observeSlideChildren: true,
      
      breakpoints: {
          320: {
              slidesPerView: 1,
              spaceBetween: 10,
              speed: 3000
          },
          768: {
              slidesPerView: 3,
              spaceBetween: 15,
              speed: 4000
          },
          1024: {
              slidesPerView: 4,
              spaceBetween: 20,
              speed: 5000
          },
          1440: {
              slidesPerView: 5,
              spaceBetween: 25,
              speed: 6000
          }
      }
  });
});


var swiper = new Swiper('.slider-swiper-theme .swiper-container', {
  slidesPerView: 4,
  spaceBetween: 20,
  loop: true,
  centeredSlides: true,
  watchOverflow: false, 
  speed: 1000,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  breakpoints: {
    320: {
        slidesPerView: 1,
        spaceBetween: 10,
        speed: 1000
    },
    768: {
        slidesPerView: 3,
        spaceBetween: 15,
        speed: 1000
    },
    1024: {
        slidesPerView: 4,
        spaceBetween: 20,
        speed: 1000
    },
    1440: {
        slidesPerView: 4,
        spaceBetween: 25,
        speed: 1000
    }
}
});



Fancybox.bind('.qr-code-button', {
    Toolbar: false,      
    showClass: false,    
    hideClass: false,
    dragToClose: false,    
});
Fancybox.bind('.qr-code-button1', {
  Toolbar: false,      
  showClass: false,    
  hideClass: false, 
  dragToClose: false,   
});
Fancybox.bind('.qr-code-button2', {
  Toolbar: false,      
  showClass: false,    
  hideClass: false, 
  dragToClose: false,   
});

const navBlock = document.querySelector('.header-nav');

document.querySelectorAll('.header-nav .first-menu > a').forEach((link) => {
  link.addEventListener('click', function (event) {
    event.preventDefault(); 

    const parentLi = this.parentElement;

    parentLi.classList.toggle('active');

    document.querySelectorAll('.header-nav .first-menu.active').forEach((item) => {
      if (item !== parentLi) {
        item.classList.remove('active');
      }
    });
  });
});

document.addEventListener('click', function (event) {
  if (!navBlock.contains(event.target)) {
    document.querySelectorAll('.header-nav .first-menu.active').forEach((item) => {
      item.classList.remove('active');
    });
  }
});


document.addEventListener("DOMContentLoaded", () => {
  const activeBurgers = document.querySelectorAll(".burger");
  const activeList = document.querySelectorAll(".menu-mobile-open-list");

  function toggleMenu(burger) {
    // Проверяем, есть ли другие элементы для открытия/закрытия меню
    const otherMenus = document.querySelectorAll('.header-nav ul li');

    otherMenus.forEach((menuItem) => {
      menuItem.classList.remove('active');
    });

    // Добавляем/удаляем класс для текущего меню
    burger.classList.toggle("active-menu");

    activeBurgers.forEach((otherBurger) => {
      if (otherBurger !== burger) {
        otherBurger.classList.remove("active-menu");
      }
    });

    // Убираем класс active у элементов, если они есть
    document.querySelectorAll('.header-nav ul li.active').forEach((item) => {
      item.classList.remove('active');
    });
  }

  function deactivateAll() {
    activeList.forEach((item) => item.classList.remove("active-list"));
    document.querySelectorAll('.header-nav ul li.active').forEach((item) => {
      item.classList.remove('active');
    });
  }

  activeBurgers.forEach((burger) => {
    burger.addEventListener("click", () => {
      toggleMenu(burger);
    });
  });
});


// СТРАНИЦА /about/ БЛОК КОМАНДА
  const toggleLinks = document.querySelectorAll(".toggle-description");
  toggleLinks.forEach((link) => {
      link.addEventListener("click", function(event) {
          event.preventDefault();

          const teamInfoBlock = this.closest(".team-view");
          const fullDescription = teamInfoBlock.querySelector(".full-description");

          if (fullDescription.style.display === "none" || fullDescription.style.display === "") {
              fullDescription.style.display = "flex";
              teamInfoBlock.classList.add('border-open');
              this.textContent = "Скрыть описание";
          } else {
              fullDescription.style.display = "none";
              teamInfoBlock.classList.remove('border-open');
              this.textContent = "Подробнее";
          }
      });
  });

  const documentsInside = document.querySelectorAll(".documents-list-inside > .document-item");

  documentsInside.forEach(function(item) {
      item.addEventListener('click', function() {
          item.classList.toggle('active-accordeon');
      });
  });