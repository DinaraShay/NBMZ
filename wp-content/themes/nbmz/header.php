<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>NBMZ</title>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fancybox.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/inc/wow/animate.min.css" />
<?php wp_head(); ?>
</head>

<body>
<main class="main">
<header class="header">
	<div class="header__inner container">
	<a href="/" title="Компания НБМЗ">
		<img src="/assets/img/svg/logo.svg" alt="Логотип компании НБМЗ" width="94" height="38" />
	</a>
	<nav class="header-nav">
		<ul>
		<li class="first-menu">
			<a href="#">О&nbsp;нас</a>
			<ul class="second-menu">
			<li><a href="/about/#info-about">Об ассоциации</a></li>
			<li><a href="/about/#advice-about">Наблюдательный совет</a></li>
			<li><a href="/about/#team">Команда</a></li>
			<li><a href="/about/#documents">Документы</a></li>
			<li><a href="/about/#participants">Участники</a></li>
			<li><a href="/about/#smi">СМИ о нас</a></li>
			<li><a href="/about/#about-contacts">Контакты</a></li>
			</ul>
		</li>
		<li class="first-menu">
			<a href="#">Мероприятия</a>
			<ul class="second-menu">
			<li><a href="#">Прошедшие</a></li>
			<li><a href="#">Анонсы</a></li>
			<li><a href="#">Новости</a></li>
			</ul>
		</li>
		<li class="first-menu">
			<a href="#Услуги">Услуги</a>
			<ul class="second-menu">
			<li><a href="#">Экспертиза инновационных решений</a></li>
			<li><a href="#">Рекомендованные технологии и продукты</a></li>
			</ul>
		</li>
		<li class="first-menu">
			<a href="/join/">Членство в&nbsp;НБМЗ</a>
			<ul class="second-menu">
			<li><a href="/join/#packages">Пакеты участия</a></li>
			<li><a href="/join/#documents-list">Документы для будущих участников</a></li>
			</ul>
		</li>
		</ul>
	</nav>




	<div class="header-nav__btns">
		<a class="btn-white">
		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g clip-path="url(#clip0_55_5301)">
			<path d="M4 1.33325H12.6667C13.7712 1.33325 14.6667 2.22868 14.6667 3.33325V12.6666C14.6667 13.7712 13.7712 14.6666 12.6667 14.6666H4" stroke="#029678" stroke-linecap="round" stroke-linejoin="round" />
			<path d="M0 7.5C-0.276142 7.5 -0.5 7.72386 -0.5 8C-0.5 8.27614 -0.276142 8.5 0 8.5V7.5ZM10.3536 8.35355C10.5488 8.15829 10.5488 7.84171 10.3536 7.64645L7.17157 4.46447C6.97631 4.2692 6.65973 4.2692 6.46447 4.46447C6.2692 4.65973 6.2692 4.97631 6.46447 5.17157L9.29289 8L6.46447 10.8284C6.2692 11.0237 6.2692 11.3403 6.46447 11.5355C6.65973 11.7308 6.97631 11.7308 7.17157 11.5355L10.3536 8.35355ZM0 8.5H10V7.5H0V8.5Z" fill="#029678" />
			</g>
			<defs>
			<clipPath id="clip0_55_5301">
				<rect width="16" height="16" fill="white" />
			</clipPath>
			</defs>
		</svg>
		Вход для участников
		</a>
		<a class="btn-green">Стать членом НБМЗ</a>
		<div class="search">
			<?php get_search_form(); ?>
		</div>
	</div>
	</div>
</header>
<header class="mobile-header">
	<div class="header__inner-mobile container">
	<a href="/" title="Компания НБМЗ">
		<img src="/assets/img/svg/logo.svg" alt="Логотип компании НБМЗ" width="94" height="38" />
	</a>
	<div class="header-nav__btns">
		<a class="btn-white">
		<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<g clip-path="url(#clip0_55_5302)">
			<path d="M4 1.33325H12.6667C13.7712 1.33325 14.6667 2.22868 14.6667 3.33325V12.6666C14.6667 13.7712 13.7712 14.6666 12.6667 14.6666H4" stroke="#029678" stroke-linecap="round" stroke-linejoin="round" />
			<path d="M0 7.5C-0.276142 7.5 -0.5 7.72386 -0.5 8C-0.5 8.27614 -0.276142 8.5 0 8.5V7.5ZM10.3536 8.35355C10.5488 8.15829 10.5488 7.84171 10.3536 7.64645L7.17157 4.46447C6.97631 4.2692 6.65973 4.2692 6.46447 4.46447C6.2692 4.65973 6.2692 4.97631 6.46447 5.17157L9.29289 8L6.46447 10.8284C6.2692 11.0237 6.2692 11.3403 6.46447 11.5355C6.65973 11.7308 6.97631 11.7308 7.17157 11.5355L10.3536 8.35355ZM0 8.5H10V7.5H0V8.5Z" fill="#029678" />
			</g>
			<defs>
			<clipPath id="clip0_55_5302">
				<rect width="16" height="16" fill="white" />
			</clipPath>
			</defs>
		</svg>
		</a>
		<a class="btn-green">
		Вступить
		<svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M0 5.5L16 5.5M16 5.5L11.2 1M16 5.5L11.2 10" stroke="#202020" />
		</svg>
		</a>
		<div class="search">
			<?php get_search_form(); ?>
		</div>
	</div>
	<div class="burger">
		<span></span>
		<span></span>
		<span></span>
		<div class="menu-mobile-open">
		<div class="header-nav__btns">
			<button class="btn-white">
			<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_55_5303)">
				<path d="M4 1.33325H12.6667C13.7712 1.33325 14.6667 2.22868 14.6667 3.33325V12.6666C14.6667 13.7712 13.7712 14.6666 12.6667 14.6666H4" stroke="#029678" stroke-linecap="round" stroke-linejoin="round" />
				<path d="M0 7.5C-0.276142 7.5 -0.5 7.72386 -0.5 8C-0.5 8.27614 -0.276142 8.5 0 8.5V7.5ZM10.3536 8.35355C10.5488 8.15829 10.5488 7.84171 10.3536 7.64645L7.17157 4.46447C6.97631 4.2692 6.65973 4.2692 6.46447 4.46447C6.2692 4.65973 6.2692 4.97631 6.46447 5.17157L9.29289 8L6.46447 10.8284C6.2692 11.0237 6.2692 11.3403 6.46447 11.5355C6.65973 11.7308 6.97631 11.7308 7.17157 11.5355L10.3536 8.35355ZM0 8.5H10V7.5H0V8.5Z" fill="#029678" />
				</g>
				<defs>
				<clipPath id="clip0_55_5303">
					<rect width="16" height="16" fill="white" />
				</clipPath>
				</defs>
			</svg>
			</button>
			<button class="btn-green">Стать членом НБМЗ</button>
		</div>
		<ul class="menu-mobile-open-list">
			<li>
			<a href="#">О нас</a>
			<ul class="">
				<li><a href="#">Об ассоциации</a></li>
				<li><a href="#">Наблюдательный совет</a></li>
				<li><a href="#">Команда</a></li>
				<li><a href="#">Документы</a></li>
				<li><a href="#">Участники</a></li>
				<li><a href="#">СМИ о нас</a></li>
				<li><a href="#">Контакты</a></li>
			</ul>
			</li>
			<li>
			<a href="">Мероприятия</a>
			<ul>
				<li><a href="#">Прошедшие</a></li>
				<li><a href="#">Анонсы</a></li>
				<li><a href="#">Новости</a></li>
			</ul>
			</li>
			<li class="">
			<a href="#Услуги">Услуги</a>
			<ul class="">
				<li><a href="#">Экспертиза инновационных решений</a></li>
				<li>
				<a href="#">Рекомендованные технологии и продукты</a>
				</li>
			</ul>
			</li>
			<li>
			<a href="#">Членство в НБМЗ</a>
			<ul class="">
				<li><a href="#">Экспертиза инновационных решений</a></li>
				<li>
				<a href="#">Рекомендованные технологии и продукты</a>
				</li>
			</ul>
			</li>
		</ul>

		<div class="search-mobile">
			<div id="title-search">
			<form action="/search/index.php" class="search__label">
				<label for="title-search-input">
				<input id="title-search-input" class="search header__search input" type="text" name="q" value="" size="40" maxlength="50" autocomplete="off" />
			</label>
				<input style="display: none" name="s" type="submit" value="Поиск" />
			</form>
			</div>
		</div>
		</div>
	</div>
	</div>
</header>