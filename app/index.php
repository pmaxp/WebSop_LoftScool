<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="/css/main.css">
		<title>Главная страница</title>
	</head>
	<body>
		<div class="wrapper">
			<div class="maincontent">
				<div class="header">
					<div class="header__wrapper">
						<ul class="header-socials__list">
							<li class="header-socials__item"><a target="_blank" href="#fb" class="header-socials__link header-socials__link_fb">fb</a></li>
							<li class="header-socials__item"><a target="_blank" href="#vk" class="header-socials__link header-socials__link_vk">vk</a></li>
							<li class="header-socials__item"><a target="_blank" href="#tw" class="header-socials__link header-socials__link_tw">tw</a></li>
						</ul>
						<div class="contacts">
							<div class="contacts-adress"><a target="_blank" href="https://maps.yandex.ru/-/CVD6B6~5" class="contacts-adress__content">ул. Маяковская 6, офис 17</a></div>
							<div class="contacts-phone"><a href="tel:+79211231213" class="contacts-phone__content">+7 (921) 123-12-13 <?php echo "1111"; ?></a></div>
						</div>
					</div>
				</div>
				<div class="header2">
					<div class="header2__wrapper">
						<div class="header2_logo"><a href="#" class="logo__content"><img src="./img/logo/cooltech.png" alt="Cooltech"></a></div>
						<form class="header2_search">
							<input type="text" name="input-search" placeholder="Что будем искать" class="input-search">
							<button type="button" name="button-search" class="button-search">Найти</button>
						</form>
						<ul class="header2-meny__list">
							<li class="header2-meny-button"><a href="#map" class="header2-meny-button__content">Карта проезда</a></li>
							<li class="header2-meny-button"><a href="#history-buy" class="header2-meny-button__content">История заказов</a></li>
							<li class="header2-meny-button"><a href="#basket" class="header2-meny-button__content">Корзина</a></li>
						</ul>
					</div>
				</div>
				<div class="navigation-header">
					<div class="navigation__wrapper">
						<ul class="navigation__list">
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#plates" class="navigation__content">Планшеты</a>
							</li>
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#Mobiles" class="navigation__content">Мобильные телефоны</a>
							</li>
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#MP3" class="navigation__content">Mp3 плееры</a>
							</li>
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#PC" class="navigation__content">Персональные компьютеры</a>
							</li>
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#laptops" class="navigation__content">Ноутбуки</a>
							</li>
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#Accessories" class="navigation__content">Аксессуары</a>
							</li>
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#Appliances" class="navigation__content">Бытовая техника</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="path-navigation">
					<div class="path-navigation__wrapper">
						<div class="path-navigation__main"><a href="#glavnay" class="path-navigation__item">Главная</a><span class="icon-path">></span><a href="#katalog" class="path-navigation__item">Каталог</a></div>
						<div class="path-navigation__name">
							<h1 class="path-navigation__topic">Мобильные телефоны</h1>
						</div>
					</div>
				</div>
				<div class="article-content">
					<div class="article-content__wrapper">
						<div class="sidebar-filter">
							<div class="line-phone-list">
								<div class="line-phone__item flagship">Флагманы</div>
								<div class="line-phone__item budget">Бюджетная линейка</div>
							</div>
							<div class="presence-for-shops">
								<div class="form-topic">Наличие в магазинах</div>
								<form class="presence-for-shops__list">
									<div class="presence-for-shops__item">
										<input type="radio" name="input-shop" value="s1" class="presence-for-shops__all"><span class="presence-for-shops_name">Во всех магазинах</span>
									</div>
									<div class="presence-for-shops__item">
										<input type="radio" name="input-shop" value="s2" class="presence-for-shops__near"><span class="presence-for-shops_name">В ближайшем ко мне магазине</span>
									</div>
								</form>
								<div class="form-topic">Бренды</div>
								<form class="checkbox-brands__list">
									<div class="checkbox-brand__item">
										<input type="checkbox" name="checkbox-brands" value="Lenovo" class="checkbox-brand"><span class="checkbox-brand_name">Lenovo</span>
									</div>
									<div class="checkbox-brand__item">
										<input type="checkbox" name="checkbox-brands" value="Apple" class="checkbox-brand"><span class="checkbox-brand_name">Apple</span>
									</div>
									<div class="checkbox-brand__item">
										<input type="checkbox" name="checkbox-brands" value="Samsung" class="checkbox-brand"><span class="checkbox-brand_name">Samsung</span>
									</div>
									<div class="checkbox-brand__item">
										<input type="checkbox" name="checkbox-brands" value="Asus" class="checkbox-brand"><span class="checkbox-brand_name">Asus</span>
									</div>
									<div class="checkbox-brand__item">
										<input type="checkbox" name="checkbox-brands" value="Motorola" class="checkbox-brand"><span class="checkbox-brand_name">Motorola</span>
									</div>
									<input type="reset" name="checkbox-brands" value="Сбросить фильтр" class="clear-filter">
								</form>
								<div class="form-topic">Цена</div>
								<form class="price-range__form">
									<form class="price-range__list">
										<div class="price-range__item"><span class="price-range__name">От</span>
											<input type="text" name="price-range-from" value="s1" class="price-range__input">
										</div>
										<div class="price-range__item"><span class="price-range__name">До</span>
											<input type="text" name="price-range-to" value="s2" class="price-range__input">
										</div>
										<div class="price-slider__item">
											<input type="range" id="chromeperfectpixel-opacity" min="0" max="1" step="0.01" value="1" class="price-slider__input">
										</div>
									</form>
								</form>
								<div class="form-topic"> Цвет</div>
								<div class="colors-block">
									<div class="color-block color-white"></div>
									<div class="color-block color-grey"></div>
									<div class="color-block color-black"></div>
									<div class="color-block color-cyan"></div>
									<div class="color-block color-red"></div>
									<div class="color-block color-yellow"></div>
									<div class="color-block color-orange"></div>
									<div class="color-block color-green"></div>
									<div class="color-block color-blue"></div>
									<div class="color-block color-magenta"></div>
									<div class="color-block color-pink"></div>
									<div class="color-block color-brown"></div>
								</div>
								<div class="form-topic"> Операционные системы</div>
								<form class="os-sistems__list">
									<div class="os-sistem__item">
										<input type="checkbox" name="checkbox-brands" value="Android" class="checkbox-brand"><span class="checkbox-brand_name">Android</span>
									</div>
									<div class="os-sistem__item">
										<input type="checkbox" name="checkbox-brands" value="iOS" class="checkbox-brand"><span class="checkbox-brand_name">iOS</span>
									</div>
									<div class="os-sistem__item">
										<input type="checkbox" name="checkbox-brands" value="Windows Phone" class="checkbox-brand"><span class="checkbox-brand_name">Windows Phone</span>
									</div>
									<div class="os-sistem__item">
										<input type="checkbox" name="checkbox-brands" value="Symbian" class="checkbox-brand"><span class="checkbox-brand_name">Symbian</span>
									</div>
									<div class="os-sistem__item">
										<input type="checkbox" name="checkbox-brands" value="Custom" class="checkbox-brand"><span class="checkbox-brand_name">Custom</span>
									</div>
									<input type="reset" name="checkbox-brands" value="Сбросить фильтр" class="clear-filter">
								</form>
							</div>
						</div>
						<div class="main-content">
							<div class="sorting-view">
								<div class="sorting-blok"><span class="sorting-text">Сортировать по</span>
									<select class="sorting-meny">
										<option class="sorting-meny-item">по цене</option>
										<option class="sorting-meny-item">по популярности</option>
									</select>
									<div class="view-blok"><span class="view-text">Вид каталога</span>
										<div class="view__list"><span class="view-item view-list"></span><span class="view-item view-icons"></span><span class="view-item view-tabl"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="catalog-view">
								<div class="Samsung_GALAXY_S3 card_product__block-info">
									<div class="card_product__image-block">
										<div class="card_product__image-big"><img src="./img/catalog/tel_189238_01.jpg" class="product__image"/></div>
										<div class="card_product__image-small-list">
											<div class="card_product__image-small"><img src="./img/catalog/tel_189238_01.jpg" alt="Samsung_GALAXY_S3" class="product__image-item"/></div>
											<div class="card_product__image-small"><img src="./img/catalog/tel_189238_02.jpg" alt="Samsung_GALAXY_S3_front" class="product__image-item"/></div>
											<div class="card_product__image-small"><img src="./img/catalog/tel_189238_03.jpg" alt="Samsung_GALAXY_S3_back" class="product__image-item"/></div>
										</div>
										<div class="card_product__article"><span class="card_product__article-name">Артикул</span><span class="card_product__article-article">189238</span></div>
									</div>
									<div class="card_product__info">
										<h2 class="card_product__topic">Samsung GT-I9301I GALAXY S 3</h2>
										<p class="card_product__text">Смартфон использует четырёхъядерный центральный процессор Exynos 4412 производства Samsung, либо двухъядерный Qualcomm Snapdragon S4, дисплей HD SuperAMOLED с диагональю 4,8 дюйма, аккумулятор ёмкостью 2100 мА·ч, 8-мегапиксельную камеру, 1 Гб оперативной памяти и ряд новых «интеллектуальных» функций, например, собственную разработку Samsung</p>
										<div class="card_product__rating">
											<ul class="card_product__rating-stars">
												<li class="card_product__rating-star"></li>
												<li class="card_product__rating-star"></li>
												<li class="card_product__rating-star"></li>
												<li class="card_product__rating-star"></li>
												<li class="card_product__rating-star"></li>
											</ul>
											<div class="card_product__rating-number">		</div>
										</div>
									</div>
									<div class="card_product__block-price-basked">
										<div class="card_product__price-block">
											<div class="card_product__price">11 290</div>
										</div>
										<div class="card_product__basked">
											<button class="card_product__button-basked">В корзину</button>
											<div class="card_product__Availability">В наличии</div>
										</div>
									</div>
								</div>
								<div class="Microsoft_Lumia_640 card_product__block-info">
									<div class="card_product__image-block">
										<div class="card_product__image-big"><img src="./img/catalog/tel_283135_01.jpg" class="product__image"/></div>
										<div class="card_product__image-small-list">
											<div class="card_product__image-small"><img src="./img/catalog/tel_283135_01.jpg" alt="Microsoft_Lumia_640" class="product__image-item"/></div>
											<div class="card_product__image-small"><img src="./img/catalog/tel_283135_02.jpg" alt="Microsoft_Lumia_640_front" class="product__image-item"/></div>
											<div class="card_product__image-small"><img src="./img/catalog/tel_283135_03.jpg" alt="Microsoft_Lumia_640_back" class="product__image-item"/></div>
										</div>
										<div class="card_product__article"><span class="card_product__article-name">Артикул</span><span class="card_product__article-article">283135</span></div>
									</div>
									<div class="card_product__info">
										<h2 class="card_product__topic">Microsoft Lumia 640 RM-1077</h2>
										<p class="card_product__text">смартфон, MS Windows Phone 8.1 поддержка двух SIM-карт экран 5&quot;, разрешение 1280x720 камера 8 МП, автофокус память 8 Гб, слот для карты памяти 3G, 4G LTE, Wi-Fi, Bluetooth, NFC, GPS, ГЛОНАСС аккумулятор 2500 мА·ч вес 145 г, ШxВxТ 72.20x141.30x8.80 мм</p>
										<div class="card_product__rating">
											<ul class="card_product__rating-stars">
												<li class="card_product__rating-star"></li>
												<li class="card_product__rating-star"></li>
												<li class="card_product__rating-star"></li>
												<li class="card_product__rating-star"></li>
												<li class="card_product__rating-star"></li>
											</ul>
											<div class="card_product__rating-number">		</div>
										</div>
									</div>
									<div class="card_product__block-price-basked">
										<div class="card_product__price-block">
											<div class="card_product__price">10 990</div>
										</div>
										<div class="card_product__basked">
											<button class="card_product__button-basked">В корзину</button>
											<div class="card_product__Availability">В наличии</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="info-block">
					<div class="info-block__wrapper">
						<h2 class="topik-info">Важная информация</h2>
						<div class="info-text1">
							<p class="info-text-paragraf">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minus incidunt maiores quas, fugiat culpa, facere exercitationem sint deserunt debitis ipsam molestias voluptas? Quas dolor, voluptatem incidunt, quod iure odit.</p>
						</div>
						<div class="info-text2">
							<p class="info-text-paragraf">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae minus incidunt maiores quas, fugiat culpa, facere exercitationem sint deserunt debitis ipsam molestias voluptas? Quas dolor, voluptatem incidunt, quod iure odit.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="footer__wrapper">
				<div class="footer-content"><a href="#" class="logo__content"><img src="./img/logo/cooltech-2.png" alt="Cooltech"></a>
					<div class="footer_socials">
						<ul class="footer-socials__list">
							<li class="footer-socials__item"><a target="_blank" href="#fb" class="footer-socials__link footer-socials__link_fb">fb</a></li>
							<li class="footer-socials__item"><a target="_blank" href="#vk" class="footer-socials__link footer-socials__link_vk">vk</a></li>
							<li class="footer-socials__item"><a target="_blank" href="#tw" class="footer-socials__link footer-socials__link_tw">tw</a></li>
						</ul>
					</div>
					<div class="navigation_footer">
						<ul class="navigation__list">
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#plates" class="navigation__content">Планшеты</a>
							</li>
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#Mobiles" class="navigation__content">Мобильные телефоны</a>
							</li>
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#MP3" class="navigation__content">Mp3 плееры</a>
							</li>
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#PC" class="navigation__content">Персональные компьютеры</a>
							</li>
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#laptops" class="navigation__content">Ноутбуки</a>
							</li>
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#Accessories" class="navigation__content">Аксессуары</a>
							</li>
							<li class="navigation__item">
								<div class="navigation__trigger"></div><a href="#Appliances" class="navigation__content">Бытовая техника</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer__content">&copy; All rights reserved. 2015. no copy alowed</div>
			</div>
		</footer>
	</body>
</html>