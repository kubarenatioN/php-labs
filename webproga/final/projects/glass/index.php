<?
    if(session_status() != PHP_SESSION_ACTIVE) session_start();
    $user = $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles/vars.css">
	<link rel="stylesheet" href="styles/global.css">
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="styles/slider2.css">
	<link rel="stylesheet" href="styles/animations.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
	<h2 class='container title'>Добро пожаловать, <? echo $user; ?></h2>
	<header class="header">
		<div class="header__menu">
			<div class="container">
				<div class="header__menu-inner">
					<a href="#" class="logo">
						<img src="images/logo.svg" alt="Logo" class="logo-img">
					</a>

					<nav class="menu">
						<ul class="menu__list">
							<li class="menu__item">
								<a href="#" class="menu__link">
									Услуги
								</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link">
									Портфолио
								</a>
							</li>
							<li class="menu__item">
								<a href="#" class="menu__link">
									Блог
								</a>
							</li>
						</ul>
					</nav>
					
					<div class="phone">
						<a href="tel:375331253279">
							<span>
								+375 (33) 125 32 79
							</span>
							<img src="images/phone.svg" alt="phone icon">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="header__content">
				<div class="header__text">
					<h2 class="header__title">
						Мы разрабатываем <span>лучшие цифровые решения</span> для вашего бизнеса  
					</h2>
					<div class="header__buttons">
						<a href="#" class="header__button btn__brief btn">
							Составить бриф
						</a>
						<a href="#" class="header__button btn__services btn">
							Смотреть услуги
						</a>
					</div>
				</div>
				<img src="images/phones.png" alt="Phones" class="header__image">
			</div>
		</div>
	</header>

	<section class="services">
		<img class="decor-1" src="images/decor-1.svg" alt="">
		<div class="container">
			<h2 class="services__title section-title">
				Наши услуги
			</h2>
			<div class="services__inner">
				<a href="#" class="services__item">
					Сайт визитка
				</a>
				<a href="#" class="services__item">
					Интернет магазин
				</a>
				<a href="#" class="services__item">
					Корпоративный сайт
				</a>
				<a href="#" class="services__item">
					Дизайн
				</a>
				<a href="#" class="services__item">
					Лендинг
				</a>
				<a href="#" class="services__item">
					Мобильное приложение
				</a>
			</div>
		</div>
	</section>

	<section class="works">
		<img class="decor-2" src="images/decor-2.svg" alt="">
		<div class="container">
			<h2 class="works__title section-title">
				Последние работы
			</h2>
			<div class="works__inner">
				<button class="works-slider-btn arrow arrow-prev" disabled>&lt;</button>
				<div class="slider">
					<div class="wrapper">
					</div>
				</div>
				<button class="works-slider-btn arrow arrow-next">&gt;</button>
			</div>
		</div>
	</section>

	<section class="blog">
		<img class="decor-3" src="images/decor-3.svg" alt="">
		<div class="container">
			<h2 class="blog__title section-title">
				Наш блог
			</h2>
			<div class="blog__inner">
				<div class="blog__item">
					<img src="images/blog-img-1.png" alt="Blog 1" class="blog__item-image">
					<h4 class="blog__item-title">
						Направления веб-дизайна
					</h4>
					<p class="blog__item-descr">
						Что такое минимализм в дизайне Особенности минимализма в веб-дизайне Базовые принципы флэт дизайна Отсутствие объемных эффектов...
					</p>
					<div class="blog__item-footer">
						<span class="blog__item-date">
							27.09.2021
						</span>
						<a href="#" class="blog__item-link">
							Читать далее
						</a>
					</div>
				</div>
				<div class="blog__item">
					<img src="images/blog-img-2.png" alt="Blog 1" class="blog__item-image">
					<h4 class="blog__item-title">
						Как улучшить юзабилити сайта?
					</h4>
					<p class="blog__item-descr">
						Что такое минимализм в дизайне Особенности минимализма в веб-дизайне Базовые принципы флэт дизайна Отсутствие объемных эффектов...
					</p>
					<div class="blog__item-footer">
						<span class="blog__item-date">
							27.09.2021
						</span>
						<a href="#" class="blog__item-link">
							Читать далее
						</a>
					</div>
				</div>
				<div class="blog__item">
					<img src="images/blog-img-3.png" alt="Blog 1" class="blog__item-image">
					<h4 class="blog__item-title">
						Сравнение Tilda и Wordpress: какой инструмент лучше?
					</h4>
					<p class="blog__item-descr">
						Что такое минимализм в дизайне Особенности минимализма в веб-дизайне Базовые принципы флэт дизайна Отсутствие объемных эффектов...
					</p>
					<div class="blog__item-footer">
						<span class="blog__item-date">
							27.09.2021
						</span>
						<a href="#" class="blog__item-link">
							Читать далее
						</a>
					</div>
				</div>
				<div class="blog__item">
					<img src="images/blog-img-4.png" alt="Blog 1" class="blog__item-image">
					<h4 class="blog__item-title">
						Как создавать современную и красивую анимацию для сайта?
					</h4>
					<p class="blog__item-descr">
						Что такое минимализм в дизайне Особенности минимализма в веб-дизайне Базовые принципы флэт дизайна Отсутствие объемных эффектов...
					</p>
					<div class="blog__item-footer">
						<span class="blog__item-date">
							27.09.2021
						</span>
						<a href="#" class="blog__item-link">
							Читать далее
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<footer class="footer">
		<div class="container">
			<div class="footer__inner">
				<a href="#" class="logo">
					<img src="images/logo.svg" alt="Logo" class="logo-img">
				</a>
				<nav class="menu">
					<ul class="menu__list">
						<li class="menu__item">
							<a href="#" class="menu__link">
								Услуги
							</a>
						</li>
						<li class="menu__item">
							<a href="#" class="menu__link">
								Портфолио
							</a>
						</li>
						<li class="menu__item">
							<a href="#" class="menu__link">
								Блог
							</a>
						</li>
					</ul>
				</nav>
				
				<div class="phone">
					<a href="tel:375331253279">
						<span>
							+375 (33) 125 32 79
						</span>
						<img src="images/phone.svg" alt="phone icon">
					</a>
				</div>
			</div>
		</div>
	</footer>

	<script src="slider.js"></script>
</body>

</html>