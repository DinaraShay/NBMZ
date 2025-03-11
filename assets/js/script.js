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


Fancybox.bind('.qr-code-button', {
    Toolbar: false,      
    showClass: false,    
    hideClass: false,    
});
Fancybox.bind('.qr-code-button1', {
  Toolbar: false,      
  showClass: false,    
  hideClass: false,    
});
Fancybox.bind('.qr-code-button2', {
  Toolbar: false,      
  showClass: false,    
  hideClass: false,    
});


document.querySelectorAll('.header-nav ul li > a').forEach((link) => {
  link.addEventListener('click', function () {
    const parentLi = this.parentElement;
    parentLi.classList.toggle('active');
    
    document.querySelectorAll('.header-nav ul li.active').forEach((item) => {
      if (item !== parentLi) {
        item.classList.remove('active');
      }
    });
  });
});

// const activeBurgers = document.querySelectorAll(".burger");
// const activeList = document.querySelectorAll(".menu-mobile-open-list");

// function toggleMenu(burger) {
//   burger.classList.toggle("active-menu");
//   document.querySelector(".main-menu").classList.toggle("open");
  
//   // Закрытие всех активных пунктов меню при открытии/закрытии мобильного меню
//   document.querySelectorAll('.header-nav ul li.active').forEach((item) => {
//     item.classList.remove('active');
//   });
// }

function toggleMenu(burger) {
  // Закрытие всех открытых бургеров и меню
  activeBurgers.forEach((otherBurger) => {
    if (otherBurger !== burger) {
      otherBurger.classList.remove("active-menu");
      document.querySelector(".main-menu").classList.remove("open");
    }
  });

  // Тогглинг текущего бургера и меню
  burger.classList.toggle("active-menu");
  document.querySelector(".main-menu").classList.toggle("open");

  // Закрытие всех активных пунктов меню при открытии/закрытии мобильного меню
  document.querySelectorAll('.header-nav ul li.active').forEach((item) => {
    item.classList.remove('active');
  });
}


function deactivateAll() {
  activeList.forEach((item) => item.classList.remove("active-list"));
  
  // Добавляем закрытие всех активных пунктов меню
  document.querySelectorAll('.header-nav ul li.active').forEach((item) => {
    item.classList.remove('active');
  });
}

activeBurgers.forEach((burger) => {
  burger.addEventListener("click", () => {
    toggleMenu(burger);
  });
});

// activeList.forEach((el) => {
//   el.addEventListener("click", (event) => {
//     event.stopPropagation();
    
//     deactivateAll();
//     el.classList.add("active-list");
    
//     // Закрытие мобильного меню после выбора пункта
//     toggleMenu(activeBurgers[0]); // Предполагаем, что есть хотя бы один бургер
//   });
// });

  