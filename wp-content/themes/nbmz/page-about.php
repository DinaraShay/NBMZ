<?php
/*
Template Name: О компании
*/

get_header();
?>

<?php
$background_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<section class="about-main" style="background-image: url('<?php echo esc_url($background_image); ?>');">
    <div class="container">
        <div class="about-main-block">
            <div class="about-main-header">
                <h1 class="title--56"><?php the_title();?></h1>
                <?php the_content();?>
            </div>
            <div class="about-main-footer">
                <a class="btn-green">Стать членом НБМЗ</a>

                <a class="btn-white" href="/wp-content/themes/nbmz/assets/img/documents/ustav.pdf" target="_blank">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_163_65)">
                            <path d="M14.6667 4L14.6667 12.6667C14.6667 13.7712 13.7713 14.6667 12.6667 14.6667L3.33341 14.6667C2.22884 14.6667 1.33342 13.7712 1.33342 12.6667L1.33342 4" stroke="#029678" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M8.5 2.18557e-08C8.5 -0.276142 8.27614 -0.5 8 -0.5C7.72386 -0.5 7.5 -0.276142 7.5 -2.18557e-08L8.5 2.18557e-08ZM7.64645 10.3536C7.84171 10.5488 8.15829 10.5488 8.35355 10.3536L11.5355 7.17157C11.7308 6.97631 11.7308 6.65973 11.5355 6.46447C11.3403 6.2692 11.0237 6.2692 10.8284 6.46447L8 9.29289L5.17157 6.46447C4.97631 6.2692 4.65973 6.2692 4.46447 6.46447C4.2692 6.65973 4.2692 6.97631 4.46447 7.17157L7.64645 10.3536ZM7.5 -2.18557e-08L7.5 10L8.5 10L8.5 2.18557e-08L7.5 -2.18557e-08Z" fill="#029678" />
                        </g>
                        <defs>
                            <clipPath id="clip0_163_65">
                                <rect width="16" height="16" fill="white" transform="translate(16) rotate(90)" />
                            </clipPath>
                        </defs>
                    </svg> Устав организации
                </a>
            </div>
        </div>
    </div>
</section>

<section class="info-about mt40-mb-64" id="info-about">
    <div class="container">
        <div class="about-col2">
            <div class="about-col2-text">
                <p>Инициатива создания Ассоциации разработчиков и&nbsp;пользователей искусственного интеллекта в&nbsp;медицине «Национальная база медицинских знаний» (НБМЗ) была заявлена как&nbsp;важнейший шаг в&nbsp;реализации стратегической дорожной карты «Искусственный интеллект в&nbsp;медицине. Цифровое здравоохранение», разработанной и&nbsp;принятой в&nbsp;рамках прошедшего 26-28 июня 2018 г. в&nbsp;Москве Всероссийского консилиума заслуженных врачей России. Инициатива поддержана Национальной ассоциацией Заслуженных Врачей России, Российской венчурной компанией (РВК), Агентством стратегических инициатив (АСИ), а&nbsp;также Национальным Агентством Социальных Коммуникаций (НАСК).</p>
                <p>Целями Ассоциации является объединение участников рынка для&nbsp;решения актуальных задач, связанных с&nbsp;созданием и&nbsp;развитием национальных систем поддержки принятия врачебных решений и&nbsp;систем искусственного интеллекта для&nbsp;здравоохранения. Направлениями работы ассоциации являются:</p>
            </div>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/about-info-img.png" alt="Инициатива создания Ассоциации разработчиков и пользователей искусственного интеллекта в медицине «Национальная база медицинских знаний» (НБМЗ)">
        </div>
        <div class="info-col-about ">
            <div class="info-col-about-item wow fadeIn">
                <span class="count-green">01</span>
                <div class="count-info">
                    <span class="title-24">Открытые данные для разработчиков</span>
                    <p>Обеспечение равного доступа для&nbsp;российских разработчиков систем поддержки принятия врачебных решений (СППВР) к&nbsp;валидированным биомедицинским данным</p>
                </div>
            </div>
            <div class="info-col-about-item wow fadeIn">
                <span class="count-green">02</span>
                <div class="count-info">
                    <span class="title--24">Федеральная сеть биоданных</span>
                    <p>Участие в&nbsp;создании федеральной сети сбора первичных биомедицинских данных</p>
                </div>
            </div>
            <div class="info-col-about-item wow fadeIn">
                <span class="count-green">03</span>
                <div class="count-info">
                    <span class="title--24">Новые технологии для медицины</span>
                    <p>Поддержку развития рынка СППВР для&nbsp;повышения эффективности здравоохранения, сокращения смертности, заболеваемости и&nbsp;врачебных ошибок, внедрению новых инновационных разработок для&nbsp;медицины и&nbsp;здравоохранения</p>
                </div>
            </div>
            <div class="info-col-about-item wow fadeIn">
                <span class="count-green">04</span>
                <div class="count-info">
                    <span class="title--24">Цифровизация здравоохранения</span>
                    <p>Создание доступной, вариативной, обширной экспертной среды в&nbsp;сфере разработки и&nbsp;практического применения цифровых технологий в&nbsp;системе здравоохранения</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="slider-personal wow fadeIn">
    <div class="container">
        <p class="text-24">Ассоциация открыта для&nbsp;всех участников рынка и&nbsp;планирует активную работу по&nbsp;продвижению технологий искусственного интеллекта и&nbsp;взаимодействию с&nbsp;представителями государства, врачебного сообщества, науки, образования и&nbsp;бизнеса.</p>
    </div>
    <div class="slider-swiper-theme mt32 wow fadeIn">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php if (have_rows('slajder_s_fotografiyami')): ?>
                    <?php while (have_rows('slajder_s_fotografiyami')): the_row(); ?>
                            <?php
                            $image = get_sub_field('fotografii_slajdera');
                            if (!empty($image)): ?>
                                <img class="swiper-slide" data-fancybox="gallery"  src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="swiper-button-next">
               
            </div>
            <div class="swiper-button-prev">
               
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="advice-about m-100 container" id="advice-about">
    <div class="bk-white p-100">
        <h3 class="title-32 circle-title m-b64">Наблюдательный совет</h3>
        <?php if (have_rows('advice_repeater')) : ?>
            <div class="advice-block">
                <?php while (have_rows('advice_repeater')) : the_row(); ?>
                    <div class="advice-block-item wow fadeIn">
                        <?php
                        $image = get_sub_field('advice_image');
                        if ($image): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php endif; ?>
                        <span class="title--24"><?php the_sub_field('advice_name'); ?></span>
                        <p><?php the_sub_field('advice_description'); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<section class="team wow fadeIn" id="team">
    <div class="container">
        <div class="header-block-content container">
            <div class="header-block-title">
                <h3 class="title-32 circle-title">Команда</h3>
                <p class="header-block-text p-l28">НБМЗ формируется профессионалами<br>и учеными с многолетним опытом</p>
            </div>
        </div>

        <?php
        $args = [
            'post_type' => 'team_member',
            'posts_per_page' => -1,
            'order' => 'ASC',
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <div class="team-col m-t64">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="team-view">
                        <div class="team-col-item wow fadeIn">
                            <span class="count-team"><?php echo str_pad($query->current_post + 1, 2, '0', STR_PAD_LEFT); ?></span>
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                            <div class="team-info-block">
                                <div class="team-info">
                                    <span class="title-32"><?php the_title(); ?></span>
                                    <p><?php the_field('description'); ?></p>
                                </div>
                                <a class="arrow-link toggle-description" href="#">Подробнее</a>
                            </div>

                        </div>
                        <div class="full-description" style="display: none;">
                            <div class="fio-block">
                                <p><?php echo esc_html(get_field('fio')); ?></p>
                            </div>

                            <div class="content-block">
                                <p class="education">Образование:</p>
                                <div class="content-text">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>


                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</section>


<section class="documents m-100 wow fadeIn" id="documents">
    <div class="container">
        <div class="documents-block">
            <div class="header-block-content container">
                <div class="header-block-title">
                    <h3 class="title-32 circle-title">Документы</h3>
                    <p class="p-l28 header-block-text">Все материалы доступны для&nbsp;ознакомления и&nbsp;регламентируют деятельность организации</p>
                </div>
                <a class="arrow-link mobile--btn" href="#">Все участники</a>
            </div>
            <div class="documents-list m-t64">
                <?php if (have_rows('documents')) : ?>
                    <?php while (have_rows('documents')) : the_row(); ?>
                        <?php
                        $file = get_sub_field('document_file'); // Поле файла
                        $title = get_sub_field('document_title'); // Поле заголовка
                        ?>
                        <?php if ($file) : ?>
                            <a class="document-item shadow wow fadeIn" href="<?php echo esc_url($file['url']); ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/pdf.svg" alt="PDF">
                                <p>
                                    <?php echo esc_html($title ? $title : ($file['title'] ?? 'Без названия')); ?>
                                </p>
                            </a>
                        <?php else : ?>
                            <div class="document-item shadow">
                                <p>Файл не найден или не указан.</p>
                            </div>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p>Документы пока не добавлены.</p>
                <?php endif; ?>
            </div>
            <div class="documents-list-inside">
                <div class="document-item shadow">
                    <div class="documents-item--list">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/pdf.svg" alt="PDF">
                        <p>Протоколы заседаний наблюдательного совета ассоциации <span>(28)</span></p>
                    </div>
                    <div class="accordeon-documents">
                        <div class="documents-list documents-list--items mt32">
                            <?php if (have_rows('protocols')) : ?>
                                <?php while (have_rows('protocols')) : the_row(); ?>
                                    <?php
                                    $file = get_sub_field('document_file'); // Поле файла
                                    $title = get_sub_field('document_title'); // Поле заголовка
                                    ?>
                                    <?php if ($file) : ?>
                                        <a href="<?php echo esc_url($file['url']); ?>" target="_blank" class="document-item">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/svg/pdf.svg" alt="PDF">
                                            <p>
                                                <?php echo esc_html($title ? $title : ($file['title'] ?? 'Без названия')); ?>
                                            </p>
                                        </a>
                                    <?php else : ?>
                                        <div class="document-item shadow">
                                            <p>Файл не найден или не указан.</p>
                                        </div>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <p>Документы пока не добавлены.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="participants m-100 wow fadeIn" id="participants">
    <div class="container">
        <div class="participants-block">
            <div class="header-block-content container">
                <div class="header-block-title">
                    <h3 class="title-32 circle-title">Участники</h3>
                    <p class="p-l28 header-block-text">Члены Ассоциации «Национальная база<br>медицинских знаний»</p>
                </div>
            </div>
            <div class="col-6 mt32">
    <?php if (have_rows('uchastniki')) : ?>
        <?php while (have_rows('uchastniki')) : the_row(); ?>
            <?php
            $logo = get_sub_field('logotip_uchastnika');
            $name = get_sub_field('nazvanie_kompanii');
            $link = get_sub_field('ssylka_nastraniczu_kompanii'); // Используем get_sub_field для всех данных внутри repeater
            ?>
            
            <?php if ($link) : ?>
                <a href="<?php echo esc_url($link); ?>" class="col-6-item shadow  wow fadeIn" target="_blank">
            <?php else : ?>
            
            <?php endif; ?>

                <?php if ($logo) : ?>
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($name); ?>" class="participant-logo">
                <?php endif; ?>
                
                <?php if ($name) : ?>
                    <p class="participant-name"><?php echo esc_html($name); ?></p>
                <?php endif; ?>
                
            <?php if ($link) : ?>
                </a>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Участники пока не добавлены.</p>
    <?php endif; ?>
</div>

        </div>
        <div class="participants-block-name m-t64 wow fadeIn">
    <ul>
        <?php if (have_rows('imena_uchastnikov')) : ?>
            <?php 
            // Создаем массив для хранения имен участников
            $participants = array();
            while (have_rows('imena_uchastnikov')) : the_row();
                $fio = get_sub_field('fio');
                if ($fio) {
                    $participants[] = $fio; // Добавляем имя в массив
                }
            endwhile;

            // Сортируем массив по алфавиту
            sort($participants);

            // Проходим по отсортированным именам
            foreach ($participants as $fio) : ?>
                <li class="wow fadeIn">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.6667 18.72V28M18.6667 18.72L19.6667 17.12M18.6667 18.72L16.3333 17.44M18.6667 28L26.3333 23.2L27.3333 21.6L28 12.64M18.6667 28L16.3333 26.72V17.44M28 12.64L19.6667 17.12M28 12.64L25.3333 11.04L17 15.84M19.6667 17.12L17 15.84M6.66667 8.16L15.3333 4H17L25.3333 8.16M6.66667 8.16L15 12.64M6.66667 8.16V10.72L15 15.2M15 12.64H17M15 12.64V15.2M17 12.64L25.3333 8.16M17 12.64V15.2M25.3333 8.16V10.72L17 15.2M4 12.64L12.6667 17.12M4 12.64L4.66667 21.6L5.66667 23.2L13.3333 28M4 12.64L6.33333 11.04L15 15.84M12.6667 17.12L13.3333 18.72M12.6667 17.12L15 15.84M13.3333 18.72V28M13.3333 18.72L15.6667 17.44M13.3333 28L15.6667 26.72V17.44M15 15.84L15.6667 17.44M15 15.84H17M15 15.84V15.2M16.3333 17.44L17 15.84M17 15.84V15.2M15 15.2H17" stroke="#029678" />
                    </svg>
                    <?php echo esc_html($fio); ?>
                </li>
            <?php endforeach; ?>
        <?php else : ?>
            <li>Имена участников пока не добавлены.</li>
        <?php endif; ?>
    </ul>
</div>


    </div>
</section>

<section class="smi-about container m-100 wow fadeIn" id="smi">
    <h3 class="title-32 circle-title">СМИ о нас</h3>
    <div class="smi-block mt32">
        <?php
        $args = [
            'category_name' => 'smi',
            'posts_per_page' => 6,
            'order' => "ASC",
        ];

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="smi-item shadow wow fadeIn">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                    <span><?php the_title(); ?></span>
                    <p><?php echo wp_trim_words(get_the_content(), 15, '...'); ?></p>
                    <a class="arrow-link" href="<?php the_permalink(); ?>">Сcылка на статью</a>
                </div>
            <?php endwhile;
        else : ?>
            <p>Записи не найдены.</p>
        <?php endif;

        wp_reset_postdata();
        ?>
    </div>
    <a class="arrow-link mt32 arrow-link20" href="<?php echo get_category_link(get_category_by_slug('smi')->term_id); ?>">Все публикации (<?php echo get_category_by_slug('smi')->count; ?>)</a>
</section>



<section class="about-contacts m-100 wow fadeIn" id="about-contacts">
    <div class="container">
        <div class="bk-white p-100">
            <h3 class="title-32 circle-title">Контакты</h3>
            <div class="contact-info mt32">
                <div class="contact-info-item">
                    <div class="item-address">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 13.8456C6 19.0965 13.8571 28.3243 16 29C18.1429 28.3243 26 20.1467 26 13.8456C26 5.96911 20.6154 4 16 4C11.3846 4 6 7.28185 6 13.8456Z" stroke="#029678" />
                            <circle cx="16" cy="14" r="5.5" stroke="#029678" />
                        </svg>
                        <div class="adress-item-street">
                            <a href="https://yandex.ru/maps/213/moscow/house/bolshoy_bulvar_42s1/Z04YdQNnTU0CQFtvfXp4c39ibA==/?indoorLevel=1&ll=37.347485%2C55.692318&z=17.13" target="_blank">г. Москва, Большой бульвар, д.42, с.1. Инновационный центр «Сколково» </a>
                        </div>
                    </div>
                    <div class="item-btns">
                        <a href="mailto:info@nbmz.ru" class="btn-green-light">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 4V12H14V4M2 4H14M2 4L8 8.30769L14 4" stroke="white" stroke-linejoin="round" />
                            </svg>
                            Связаться с НБМЗ
                        </a>
                        <a href="mailto:media@nbmz.ru" class="btn-green-border">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 4V12H14V4M2 4H14M2 4L8 8.30769L14 4" stroke="#029678" stroke-linejoin="round" />
                            </svg>
                            Связь для СМИ
                        </a>
                    </div>
                </div>
                <div class="contact-info-item">
                    <span>Полное наименование и реквизиты:</span>
                    <div class="contact-info-item-text">
                        <p>Ассоциация разработчиков и пользователей систем искусственного интеллекта в медицине «Национальная база медицинских знаний»</p>
                        <p>ИНН 9731013971</p>
                        <p>ОГРН 1187700018978</p>
                        <p>р/с 40703810338000012546 в ПАО СБЕРБАНК (г. Москва)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
ы

<?php get_footer(); ?>