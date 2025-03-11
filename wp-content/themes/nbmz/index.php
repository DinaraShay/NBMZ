<?php
/*
Template Name: Главная страница
*/

get_header();
?>
<section class="top container">
  <div class="top-block">
    <div class="top-content">
      <h1 class="top-content__title">
        Национальная база медицинских знаний
      </h1>
      <p class="top-content__text">
        Ассоциация разработчиков и&nbsp;пользователей искусственного интеллекта в&nbsp;медицине
      </p>
      <a class="enter-btn">Вступить<svg
          width="17"
          height="11"
          viewBox="0 0 17 11"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M0 5.5L16 5.5M16 5.5L11.2 1M16 5.5L11.2 10"
            stroke="#202020" />
        </svg>
      </a>
    </div>
  </div>
  <div class="partners">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="/assets/img/svg/skolkovo-logo.svg" alt="Сколково" />
        </div>
        <div class="swiper-slide">
          <img src="/assets/img/svg/semashko-logo.svg" alt="Фгну Наицональный НИИ общественного здоровья имени Семашко" />
        </div>
        <div class="swiper-slide">
          <img src="/assets/img/svg/iniciativ-logo.svg" alt="Агенство стратегических инициатив" />
        </div>
        <div class="swiper-slide">
          <img src="/assets/img/svg/arpp-logo.svg" alt="Арпп Отечественный софт" />
        </div>
        <div class="swiper-slide">
          <img src="/assets/img/svg/alrii-logo.svg" alt="Ассоциация лабораторий по развитию исскуственного интеллекта" />
        </div>
        <div class="swiper-slide">
          <img src="/assets/img/svg/tech-logo.svg" alt="Национальная технологическая инициатива" />
        </div>
      </div>
    </div>
  </div>
</section>
<div class="partners partners-mobile">
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="/assets/img/svg/skolkovo-logo.svg" alt="Сколково" />
      </div>
      <div class="swiper-slide">
        <img src="/assets/img/svg/semashko-logo.svg" alt="Фгну Наицональный НИИ общественного здоровья имени Семашко" />
      </div>
      <div class="swiper-slide">
        <img src="/assets/img/svg/iniciativ-logo.svg" alt="Агенство стратегических инициатив" />
      </div>
      <div class="swiper-slide">
        <img src="/assets/img/svg/arpp-logo.svg" alt="Арпп Отечественный софт" />
      </div>
      <div class="swiper-slide">
        <img src="/assets/img/svg/alrii-logo.svg" alt="Ассоциация лабораторий по развитию исскуственного интеллекта" />
      </div>
      <div class="swiper-slide">
        <img src="/assets/img/svg/tech-logo.svg" alt="Национальная технологическая инициатива" />
      </div>
    </div>
  </div>
</div>
<section class="innovative-solutions container m-100">
  <div class="header-block-content">
    <div class="header-block-title">
      <h2 class="title-48 circle-title">
        Передовые инновационные решения в&nbsp;здравоохранении
      </h2>
      <p class="p-l28 header-block-text">
        С 2018 года мы объединяем компетенции передовых
        разработчиков и&nbsp;экспертов в&nbsp;цифровой медицине
      </p>
    </div>
    <a class="arrow-link" href="#">Подробнее</a>
  </div>
  <div class="innovative-solutions_block m-t64">
    <a class="innovative-solutions-item shadow wow fadeIn">
      <img src="/assets/img/svg/med.svg" alt="Цифровая клиника(врачебная сеть)" />
      <p class="title-24">Цифровая клиника
        <br />(врачебная сеть)
      </p>
    </a>
    <a class="innovative-solutions-item shadow wow fadeIn">
      <img src="/assets/img/svg/solved.svg" alt="Цифровая клиника(врачебная сеть)" />
      <p class="title-24">Экспертиза инновационных
        <br />решений
      </p>
    </a>
    <a class="innovative-solutions-item shadow wow fadeIn">
      <img src="/assets/img/svg/med2.svg" alt="Цифровая клиника(врачебная сеть)" />
      <p class="title-24">Банк цифровых продуктов
        <br />в&nbsp;здравоохранении
      </p>
    </a>
  </div>
  <a class="arrow-link mobile--btn" href="#">Подробнее</a>
</section>
<section class="products m-100">
  <div class="header-block-content container">
    <div class="header-block-title">
      <h3 class="title-32 circle-title">Продукты участников НБМЗ</h3>
      <p class="p-l28 header-block-text">
        Мы объединяем участников рынка национальных
        СППВР и&nbsp;систем ИИ для&nbsp;здравоохранения
      </p>
    </div>
    <a class="arrow-link mobile--btn" href="#">Все участники</a>
  </div>
  <div class="colms-2 m-t64 container">
    <a href="https://www.ecp.umkb.com/umkb-pharm" class="colms-2-item shadow wow fadeIn" target="_blank" style="background-image: url('/assets/img/products/background-products1.png');" title="Перейти на сайт Электронный клинический фармаколог (ЭКФ)">
      <div class="colms-2-header">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/ekf1.png" alt="Электронный клинический фармаколог (ЭКФ)" width="160" height="62" />
        <div class="status-grey">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_55_1073)">
              <path d="M2 0.333374H14M2 15.6667H14M3.66667 15.6667V11.6667L5.57067 10.524C6.00656 10.2626 6.3673 9.89263 6.61776 9.45031C6.86822 9.00799 6.99986 8.50835 6.99986 8.00004C6.99986 7.49173 6.86822 6.99209 6.61776 6.54977C6.3673 6.10745 6.00656 5.73753 5.57067 5.47604L3.66667 4.33337V0.333374M12.3333 0.333374V4.33337L10.4293 5.47604C9.99361 5.73766 9.63303 6.10762 9.38269 6.54992C9.13235 6.99223 9.00077 7.49181 9.00077 8.00004C9.00077 8.50827 9.13235 9.00785 9.38269 9.45016C9.63303 9.89246 9.99361 10.2624 10.4293 10.524L12.3333 11.6667V15.6667" stroke="#8F8F8F" />
            </g>
            <defs>
              <clipPath id="clip0_55_1073">
                <rect width="16" height="16" fill="white" />
              </clipPath>
            </defs>
          </svg>

          <span>идёт апробация</span>
        </div>
      </div>
      <div class="colms-2-content">
        <p class="title-24 grey-arrow">Электронный клинический фармаколог (ЭКФ)</p>
        <p>
          Система помогает врачу при&nbsp;назначении фармакотерапии,
          способствует уменьшению врачебных ошибок и&nbsp;осложнений в&nbsp;
          клинической практике
        </p>
      </div>
    </a>
    <a href="https://webiomed.ru/" class="colms-2-item shadow wow fadeIn" target="_blank" style="background-image: url('/assets/img/products/background-products2.png');" title="Перейти на сайт Webiomed">
      <div class="colms-2-header">
        <img
          src="/assets/img/products/webiomed.png"
          alt="Webiomed"
          width="180"
          height="52" />
        <div class="status-done">
          <svg
            width="16"
            height="16"
            viewBox="0 0 16 16"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M5.5 2.5H3.5V14.5H12.5V2.5H10.5M5.5 8.5L7.5 10.5L11 7M5.5 1.5H10.5L9.875 3.5H6.125L5.5 1.5Z"
              stroke="#62D2BB"
              stroke-linejoin="round" />
          </svg>
          <span>реализовано</span>
        </div>
      </div>
      <div class="colms-2-content">
        <p class="title-24 grey-arrow">Webiomed</p>
        <p>
          Система предиктивной аналитики и&nbsp;управления рисками в&nbsp;здравоохранении на&nbsp;основе искусственного интеллекта
        </p>
      </div>
    </a>
    <a href="https://botkin.ai/" class="colms-2-item shadow wow fadeIn" target="_blank" style="background-image: url('/assets/img/products/background-products3.png');" title="Перейти на сайт BOTKIN.AI">
      <div class="colms-2-header">
        <img src="/assets/img/products/botkin.png" alt="BOTKIN.AI" width="180" height="52" />
        <div class="status-done">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.5 2.5H3.5V14.5H12.5V2.5H10.5M5.5 8.5L7.5 10.5L11 7M5.5 1.5H10.5L9.875 3.5H6.125L5.5 1.5Z" stroke="#62D2BB" stroke-linejoin="round" />
          </svg>
          <span>реализовано</span>
        </div>
      </div>
      <div class="colms-2-content">
        <p class="title-24 grey-arrow">BOTKIN.AI</p>
        <p>
          Система для&nbsp;анализа и&nbsp;распознавания диагностических изображений КТ, МРТ, маммографии и&nbsp;цифрового рентгена
        </p>
      </div>
    </a>
    <a href="http://rd-science.com/" class="colms-2-item shadow wow fadeIn" target="_blank" style="background-image: url('/assets/img/products/background-products4.png');" title="Перейти на сайт SAPIA">
      <div class="colms-2-header">
        <img src="/assets/img/products/sapia.png" alt="SAPIA" width="180" height="46" />
        <div class="status-grey">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_55_1075)">
              <path d="M2 0.333374H14M2 15.6667H14M3.66667 15.6667V11.6667L5.57067 10.524C6.00656 10.2626 6.3673 9.89263 6.61776 9.45031C6.86822 9.00799 6.99986 8.50835 6.99986 8.00004C6.99986 7.49173 6.86822 6.99209 6.61776 6.54977C6.3673 6.10745 6.00656 5.73753 5.57067 5.47604L3.66667 4.33337V0.333374M12.3333 0.333374V4.33337L10.4293 5.47604C9.99361 5.73766 9.63303 6.10762 9.38269 6.54992C9.13235 6.99223 9.00077 7.49181 9.00077 8.00004C9.00077 8.50827 9.13235 9.00785 9.38269 9.45016C9.63303 9.89246 9.99361 10.2624 10.4293 10.524L12.3333 11.6667V15.6667" stroke="#8F8F8F" />
            </g>
            <defs>
              <clipPath id="clip0_55_1075">
                <rect width="16" height="16" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <span>идёт апробация</span>
        </div>
      </div>
      <div class="colms-2-content">
        <p class="title-24 grey-arrow">SAPIA</p>
        <p>
          Система поддержки принятия врачебных решений (СППВР) для&nbsp;оценки тяжести острого панкреатита
        </p>
      </div>
    </a>
    <a href="https://carementor.ru/" class="colms-2-item shadow wow fadeIn" target="_blank" style="background-image: url('/assets/img/products/background-products5.png');" title="Перейти на сайт Care Mentor AI">
      <div class="colms-2-header">
        <img src="/assets/img/products/mentor.png" alt="Care Mentor AI" width="180" height="59" />
        <div class="status-done">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.5 2.5H3.5V14.5H12.5V2.5H10.5M5.5 8.5L7.5 10.5L11 7M5.5 1.5H10.5L9.875 3.5H6.125L5.5 1.5Z" stroke="#62D2BB" stroke-linejoin="round" />
          </svg>
          <span>реализовано</span>
        </div>
      </div>
      <div class="colms-2-content">
        <p class="title-24 grey-arrow">Care Mentor AI</p>
        <p>
          Система компьютерного зрения для&nbsp;анализа и&nbsp;описания медицинских
          <br />изображений
        </p>
      </div>
    </a>
    <a href="http://rd-science.com/" class="colms-2-item shadow wow fadeIn" target="_blank" style="background-image: url('/assets/img/products/background-products6.png');" title="Перейти на сайт АЛГОМ">
      <div class="colms-2-header">
        <img src="/assets/img/products/algom.png" alt="АЛГОМ" width="181" height="56" />
        <div class="status-done">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.5 2.5H3.5V14.5H12.5V2.5H10.5M5.5 8.5L7.5 10.5L11 7M5.5 1.5H10.5L9.875 3.5H6.125L5.5 1.5Z" stroke="#62D2BB" stroke-linejoin="round" />
          </svg>
          <span>реализовано</span>
        </div>
      </div>
      <div class="colms-2-content">
        <p class="title-24 grey-arrow">АЛГОМ</p>
        <p>
          Русскоязычная медицинская справочная система мирового уровня на&nbsp;основе доказательной медицины
        </p>
      </div>
    </a>
    <a href="https://celsus.ai/" class="colms-2-item shadow wow fadeIn" target="_blank" style="background-image: url('/assets/img/products/background-products7.png');" title="Перейти на сайт CELSUS">
      <div class="colms-2-header">
        <img src="/assets/img/products/celsus.png" alt="CELSUS" width="180" height="39" />
        <div class="status-done">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.5 2.5H3.5V14.5H12.5V2.5H10.5M5.5 8.5L7.5 10.5L11 7M5.5 1.5H10.5L9.875 3.5H6.125L5.5 1.5Z" stroke="#62D2BB" stroke-linejoin="round" />
          </svg>
          <span>реализовано</span>
        </div>
      </div>
      <div class="colms-2-content">
        <p class="title-24 grey-arrow">CELSUS</p>
        <p>
          Система компьютерного зрения для&nbsp;анализа и&nbsp;описания медицинских
          <br />изображений
        </p>
      </div>
    </a>
    <a href="http://expertkurort.ru/" class="colms-2-item shadow wow fadeIn" target="_blank" style="background-image: url('/assets/img/products/background-products8.png');" title="Перейти на сайт Курорт – Информ">
      <div class="colms-2-header">
        <img src="/assets/img/products/inform.png" alt="Курорт – Информ" width="182" height="55" />
        <div class="status-grey">
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_55_1074)">
              <path d="M2 0.333374H14M2 15.6667H14M3.66667 15.6667V11.6667L5.57067 10.524C6.00656 10.2626 6.3673 9.89263 6.61776 9.45031C6.86822 9.00799 6.99986 8.50835 6.99986 8.00004C6.99986 7.49173 6.86822 6.99209 6.61776 6.54977C6.3673 6.10745 6.00656 5.73753 5.57067 5.47604L3.66667 4.33337V0.333374M12.3333 0.333374V4.33337L10.4293 5.47604C9.99361 5.73766 9.63303 6.10762 9.38269 6.54992C9.13235 6.99223 9.00077 7.49181 9.00077 8.00004C9.00077 8.50827 9.13235 9.00785 9.38269 9.45016C9.63303 9.89246 9.99361 10.2624 10.4293 10.524L12.3333 11.6667V15.6667" stroke="#8F8F8F" />
            </g>
            <defs>
              <clipPath id="clip0_55_1074">
                <rect width="16" height="16" fill="white" />
              </clipPath>
            </defs>
          </svg>
          <span>идёт апробация</span>
        </div>
      </div>
      <div class="colms-2-content">
        <p class="title-24 grey-arrow">Курорт – Информ</p>
        <p>
          Экспертная система, интегрированная в&nbsp;автоматизированное рабочее место терапевта
        </p>
      </div>
    </a>
  </div>
  <a class="arrow-link mobile--btn" href="#">Подробнее</a>
</section>
<section class="payment m-b100">
  <div class="container">
    <div class="payment-block">
      <div class="payment-block-item">
        <h3 class="title-32 circle-title">Оплата взносов и&nbsp;пожертвований</h3>
        <p class="p-l28 header-block-text">
          Размер вступительного взноса в&nbsp;Ассоциацию:
          <br />5&nbsp;000&nbsp;рублей&nbsp;(ФЛ), 10&nbsp;000&nbsp;рублей&nbsp;(ЮЛ)
        </p>
        <p class="p-l28 header-block-text">
          Размер ежегодного взноса:
          <br />5&nbsp;000&nbsp;рублей&nbsp;(ФЛ), 50&nbsp;000&nbsp;рублей&nbsp;(ЮЛ).
        </p>
        <a href="/join/" class="btn-be-member">Стать участником</a>
      </div>
      <div class="payment-block-item">
        <div class="payment-block-item-item wow fadeIn">
          <p class="header-block-text">
            Ежегодный членский (регулярный)
            <br />взнос участника НБМЗ
          </p>
          <div class="btn-payment">
            <a class="link-button" href="https://securecardpayment.ru/sc/iAoSEScJGFQgUlCX" target="_blank">
              <svg width="36" height="33" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.7324 18.2678L15.3217 18.8571V18.8571C17.9253 21.4607 22.1467 21.4607 24.7503 18.8571L31.2324 12.375C33.5106 10.0968 33.5106 6.40317 31.2324 4.125V4.125C28.9542 1.84682 25.2606 1.84682 22.9824 4.12499L20.036 7.07142" stroke="#029678" stroke-linecap="round" />
                <path d="M20.625 14.7322L20.0357 14.1429V14.1429C17.4321 11.5393 13.2108 11.5393 10.6071 14.1429L4.125 20.625C1.84683 22.9032 1.84683 26.5968 4.125 28.875V28.875C6.40318 31.1532 10.0968 31.1532 12.375 28.875L15.3214 25.9286" stroke="#029678" stroke-linecap="round" />
              </svg>
            </a>
            <a class="qr-code-button" data-fancybox data-src="#qr-popup" data-type="inline">
              <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5714 1H21.4286V5.71429M16.7143 5.71429H13.5714M12.7857 10.4286H18.2857M21.4286 10.4286H18.2857M18.2857 10.4286V15.9286M18.2857 15.9286H15.1429M18.2857 15.9286H21.4286M26.1429 12.7857V19.0714M30.0714 15.9286H34M34 15.9286V12.7857M34 15.9286V19.0714M34 23.7857H30.8571V26.1429H26.1429V23.7857M34 30.8571V34H28.5M23 30.8571V34H28.5M28.5 30.8571V34M12.7857 34V30.8571H18.2857M12.7857 26.1429H21.4286V20.6429H18.2857M14.3571 20.6429H10.4286M6.5 20.6429H1M1 12.7857V15.9286M5.71429 12.7857H8.85714V15.9286H11.2143M1 1V8.85714H8.85714V1H1ZM1 26.1429V34H8.85714V26.1429H1ZM26.1429 1V8.85714H34V1H26.1429Z" stroke="#029678" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
            <div data-fancybox id="qr-popup" style="display: none">
              <div class="popup-qr-code">
                <p class="header-block-text">Ежегодный членский (регулярный)<br>взнос участника НБМЗ</p>
                <span>Ежегодный членский (регулярный) взнос участника НБМЗ,<br>оплачиваемый действительными членами Ассоциации в&nbsp;срок<br>до&nbsp;окончания первого квартала года оплаты</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qr/qr1.png" alt="Ежегодный членский (регулярный) взнос участника НБМЗ" />
              </div>
            </div>
          </div>
        </div>
        <div class="payment-block-item-item wow fadeIn">
          <p class="header-block-text">
            Единовременный (вступительный)
            <br />взнос НБМЗ физического лица
          </p>
          <div class="btn-payment">
            <a class="link-button" href="https://securecardpayment.ru/sc/DFYGVlbilboZzAsF" target="_blank">
              <svg width="36" height="33" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.7324 18.2678L15.3217 18.8571V18.8571C17.9253 21.4607 22.1467 21.4607 24.7503 18.8571L31.2324 12.375C33.5106 10.0968 33.5106 6.40317 31.2324 4.125V4.125C28.9542 1.84682 25.2606 1.84682 22.9824 4.12499L20.036 7.07142" stroke="#029678" stroke-linecap="round" />
                <path d="M20.625 14.7322L20.0357 14.1429V14.1429C17.4321 11.5393 13.2108 11.5393 10.6071 14.1429L4.125 20.625C1.84683 22.9032 1.84683 26.5968 4.125 28.875V28.875C6.40318 31.1532 10.0968 31.1532 12.375 28.875L15.3214 25.9286" stroke="#029678" stroke-linecap="round" />
              </svg>
            </a>
            <a class="qr-code-button1" data-fancybox href="#qr-popup1" data-type="inline">
              <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5714 1H21.4286V5.71429M16.7143 5.71429H13.5714M12.7857 10.4286H18.2857M21.4286 10.4286H18.2857M18.2857 10.4286V15.9286M18.2857 15.9286H15.1429M18.2857 15.9286H21.4286M26.1429 12.7857V19.0714M30.0714 15.9286H34M34 15.9286V12.7857M34 15.9286V19.0714M34 23.7857H30.8571V26.1429H26.1429V23.7857M34 30.8571V34H28.5M23 30.8571V34H28.5M28.5 30.8571V34M12.7857 34V30.8571H18.2857M12.7857 26.1429H21.4286V20.6429H18.2857M14.3571 20.6429H10.4286M6.5 20.6429H1M1 12.7857V15.9286M5.71429 12.7857H8.85714V15.9286H11.2143M1 1V8.85714H8.85714V1H1ZM1 26.1429V34H8.85714V26.1429H1ZM26.1429 1V8.85714H34V1H26.1429Z" stroke="#029678" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>

            <div data-fancybox id="qr-popup1" style="display: none">
              <div class="popup-qr-code">
                <p class="header-block-text">Единовременный (вступительный)<br>взнос НБМЗ физического лица</p>
                <span>Единовременный (вступительный) взнос НБМЗ оплачивается<br>после одобрения заявления на&nbsp;вступление<br>наблюдательным советом Ассоциации</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qr/qr2.png" alt="Единовременный (вступительный) взнос НБМЗ физического лица" />
              </div>
            </div>
          </div>
        </div>
        <div class="payment-block-item-item wow fadeIn">
          <p class="header-block-text">
            Добровольное пожертвование
            <br />на&nbsp;ведение уставной деятельности
            <br />НБМЗ
          </p>
          <div class="btn-payment">
            <a class="link-button" href="https://securecardpayment.ru/sc/ohdvqXeelkJDWOsl" target="_blank">
              <svg width="36" height="33" viewBox="0 0 36 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.7324 18.2678L15.3217 18.8571V18.8571C17.9253 21.4607 22.1467 21.4607 24.7503 18.8571L31.2324 12.375C33.5106 10.0968 33.5106 6.40317 31.2324 4.125V4.125C28.9542 1.84682 25.2606 1.84682 22.9824 4.12499L20.036 7.07142" stroke="#029678" stroke-linecap="round" />
                <path d="M20.625 14.7322L20.0357 14.1429V14.1429C17.4321 11.5393 13.2108 11.5393 10.6071 14.1429L4.125 20.625C1.84683 22.9032 1.84683 26.5968 4.125 28.875V28.875C6.40318 31.1532 10.0968 31.1532 12.375 28.875L15.3214 25.9286" stroke="#029678" stroke-linecap="round" />
              </svg>
            </a>
            <a class="qr-code-button2" data-fancybox data-src="#qr-popup2" data-type="inline">
              <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5714 1H21.4286V5.71429M16.7143 5.71429H13.5714M12.7857 10.4286H18.2857M21.4286 10.4286H18.2857M18.2857 10.4286V15.9286M18.2857 15.9286H15.1429M18.2857 15.9286H21.4286M26.1429 12.7857V19.0714M30.0714 15.9286H34M34 15.9286V12.7857M34 15.9286V19.0714M34 23.7857H30.8571V26.1429H26.1429V23.7857M34 30.8571V34H28.5M23 30.8571V34H28.5M28.5 30.8571V34M12.7857 34V30.8571H18.2857M12.7857 26.1429H21.4286V20.6429H18.2857M14.3571 20.6429H10.4286M6.5 20.6429H1M1 12.7857V15.9286M5.71429 12.7857H8.85714V15.9286H11.2143M1 1V8.85714H8.85714V1H1ZM1 26.1429V34H8.85714V26.1429H1ZM26.1429 1V8.85714H34V1H26.1429Z" stroke="#029678" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
            <div data-fancybox id="qr-popup2" style="display: none">
              <div class="popup-qr-code">
                <p class="header-block-text">Добровольное пожертвование на&nbsp;ведение уставной деятельности НБМЗ</p>
                <span>Может приниматься как&nbsp;от&nbsp;членов Ассоциации, так&nbsp;и&nbsp;от&nbsp;третьих лиц.<br>Спасибо, за поддержку!</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/qr/qr3.png" alt="Добровольное пожертвование на ведение уставной деятельности НБМЗ" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>