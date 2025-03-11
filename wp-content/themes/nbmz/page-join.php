<?php
/*
Template Name: Членство
*/

get_header();
?>

<?php
$background_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<section class="about-main" style="background-image: url('<?php echo esc_url($background_image); ?>');">
    <div class="container">
        <div class="about-main-block">
            <div class="about-main-header main-header-big">
                <h1 class="title--56"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<section class="packages m-100" id="packages">
    <div class="header-block-content container">
        <div class="header-block-title">
            <h3 class="title-32 circle-title">Пакеты участия в&nbsp;ассоциации НБМЗ</h3>
            <p class="header-block-text p-l28">Доступ к&nbsp;уникальным ресурсам, экспертным знаниям<br>и&nbsp;сообществу профессионалов</p>
        </div>
    </div>
    <div class="packages-list m-t64 ">
        <div class="container">
            <div class="packages-lists">
                <div class="packages-list-block">
                    <div class="packages-list-header">
                        <div class="packages-list-header-item">
                            <span class="wow fadeIn">Пакет</span>
                            <p class="title-32 wow fadeIn">«Сторонник»</p>
                        </div>
                        <span class="wow fadeIn">(без присвоения статуса<br>Члена Ассоциации)</span>
                    </div>
                    <ul class="circle-list mt32 wow fadeIn">
                        <li><b>Рассылка о&nbsp;деятельности Ассоциации</b> (необходимо подписаться на сайте);</li>
                        <li>Участие в&nbsp;закрытой группе «НБМЗ — члены и&nbsp;сторонники» в&nbsp;WhatsApp (необходимо запросить или&nbsp;ответить на&nbsp;запрос о&nbsp;включении);</li>
                        <li>Оповещения о&nbsp;профильных мероприятиях;</li>
                        <li>Присутствие на&nbsp;ежегодном общем собрании;</li>
                        <li>Участие в&nbsp;мероприятиях для СМИ (по согласованию);</li>
                        <li>Участие в&nbsp;деятельности рабочих групп и проекта<br>(по согласованию)</li>
                    </ul>
                    <a class="btn-green mt32">Стать сторонником</a>
                </div>
                <div class="packages-list-block">
                    <div class="packages-list-header">
                        <div class="packages-list-header-item">
                            <span class="wow fadeIn">Пакет</span>
                            <p class="title-32 wow fadeIn">«Член Ассоциации<br>– физическое лицо»</p>
                        </div>
                        <p class="price-green wow fadeIn">5 000 ₽<span>/ год</span></p>
                    </div>
                    <ul class="plus-list mt32 wow fadeIn">
                        <li>Скидки на участие в&nbsp;партнерских мероприятиях;</li>
                        <li>Консалтинг по&nbsp;направлениям деятельности рабочих групп Ассоциации;</li>
                        <li>Обучающие материалы;</li>
                        <li>Публикация статей и&nbsp;обзоров на&nbsp;портале Ассоциации <br>(1 раз в&nbsp;2 месяца);</li>
                        <li>Упоминание в&nbsp;материалах Ассоциации;</li>
                        <li>Упоминание в&nbsp;материалах Ассоциации</li>
                    </ul>
                    <a class="btn-green mt32">Стать членом ассоциации</a>
                </div>
                <div class="packages-list-block wide">
                    <div class="packages-list-alone-inside">
                        <div class="packages-list-header">
                            <div class="packages-list-header-item">
                                <span class="wow fadeIn">Пакет</span>
                                <p class="title-32 wow fadeIn">«Член Ассоциации – юридическое лицо»</p>
                            </div>
                            <p class="price-green wow fadeIn">50 000 ₽<span>/ год</span></p>
                        </div>
                        <div class="col-list-wide mt32">
                            <ul>
                                <li>Рассылка о деятельности Ассоциации (необходимо подписаться на сайте);</li>
                                <li>Участие в закрытой группе «НБМЗ — члены и сторонники» в WhatsApp (необходимо запросить или ответить на запрос о включении);</li>
                                <li>Оповещения о профильных мероприятиях;</li>
                                <li>Присутствие на ежегодном общем собрании;</li>
                                <li>Участие в мероприятиях для СМИ (по согласованию);</li>
                                <li>Участие в деятельности рабочих групп и проектах<br>(по согласованию)</li>
                            </ul>
                            <ul>
                                <li>Скидки на участие в партнерских мероприятиях;</li>
                                <li>Консалтинг по направлениям деятельности рабочих групп Ассоциации;</li>
                                <li>Обучающие материалы;</li>
                                <li>Публикация статей и обзоров на портале Ассоциации<br>(1 раз в 2 месяца);</li>
                                <li>Упоминание в материалах Ассоциации;</li>
                                <li>Право презентации продуктов компании на сайте Ассоциации</li>
                                <li>Право использования логотипа Ассоциации на сайте компании</li>
                                <li>Приоритетное участие в пилотных проектах Ассоциации</li>
                            </ul>
                        </div>
                        <a class="btn-green mt32">Стать членом ассоциации</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="documents-list-future m-100 container wow fadeIn" id="documents-list">
    <div class="header-block-content ">
        <div class="header-block-title">
            <h3 class="title-32 circle-title">Документы для будущих членов ассоциации</h3>
            <p class="header-block-text p-l28">Ознакомьтесь с&nbsp;материалами и&nbsp;приступите к&nbsp;заполнению заявки (форма заявки ниже)</p>
        </div>
    </div>
    <div class="documents-list4 m-t64">
        <a class="document-item shadow wow fadeIn" href="http://nbmz.zap-it.ru/wp-content/themes/nbmz/assets/img/documents/Форма-заявления-для-юридических-лиц.doc" target="_blank">
            <img src="http://nbmz.zap-it.ru/wp-content/themes/nbmz/assets/img/svg/doc.svg" alt="Doc">
            <p>Форма заявления для&nbsp;юридических лиц</p>
        </a>
        <a class="document-item shadow wow fadeIn" href="http://nbmz.zap-it.ru/wp-content/themes/nbmz/assets/img/documents/Форма-заявления-для-физических-лиц.doc" target="_blank">
            <img src="http://nbmz.zap-it.ru/wp-content/themes/nbmz/assets/img/svg/doc.svg" alt="Doc">
            <p>Форма заявления для&nbsp;физических лиц лиц</p>
        </a>
        <a class="document-item shadow wow fadeIn" href="http://nbmz.zap-it.ru/wp-content/themes/nbmz/assets/img/documents/Соглашение-о-членстве.doc" target="_blank">
            <img src="http://nbmz.zap-it.ru/wp-content/themes/nbmz/assets/img/svg/doc.svg" alt="Doc">
            <p>Соглашение о&nbsp;членстве для&nbsp;ЮЛ</p>
        </a>
        <a class="document-item shadow wow fadeIn" href="http://nbmz.zap-it.ru/wp-content/themes/nbmz/assets/img/documents/Положение-об-уплате-членских-взносов-2021.docx" target="_blank">
            <img src="http://nbmz.zap-it.ru/wp-content/themes/nbmz/assets/img/svg/doc.svg" alt="Doc">
            <p>Положение об&nbsp;уплате членских взносов</p>
        </a>
    </div>
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
            <a class="qr-code-button1" data-fancybox  data-src="#qr-popup1" data-type="inline">
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