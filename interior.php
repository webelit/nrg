<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title>NRG26</title>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="css/check.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
	<div class="flex">
		<div class="left_nav" id="flex_nav">
			<div class="logo flex_1">
				<p class="bars" id="bars"><img src="images/bars.svg" alt="bars"></p>
				<p class="close" id="close"><img src="images/close.svg" alt="bars"></p>
				<a href="/"><img src="images/logo.svg" alt="nrg26" class="logo_img"></a>
				<a href="/" class="mobile_phone"><img src="images/mobile_phone.svg" alt="bars"></a>
			</div>
			<div class="phone" id="phone">
				<div class="phone_p">
					<img src="images/phone.svg" alt="телефон компании">
					<p class="phone_text">8 (8652) 68-07-90</p>
				</div>
				<div class="phone_p">
					<img src="images/mail.svg" alt="email компании">
					<p>contact@nrg26.ru</p>
				</div>
			</div>
			<div class="left_menu" id="menu">
				<ul>
					<? include_once "menu.html" ?>
				</ul>
			</div>
			<div class="soc" id="soc">
				<a href=""><img src="images/telegramm.svg" alt="telegramm"></a>
				<a href=""><img src="images/whatsapp.svg" alt="whatsapp"></a>
				<a href=""><img src="images/insta.svg" alt="instagram"></a>
			</div>
		</div>
		<div class="cont_right">
			<div class="wrapper">
				<header class="header">
					<img src="images/head_4.jpg" alt="" class="header_img">
					<div class="header_cont">
						<h1 class="h1">Не стандартные<br>рекламные конструкции</h1>
						<p>Рекламные конструкции и интерьерные решения привлекают клиентов.<br>Производители предлагают разные типы рекламы: эффектные наружные варианты и<br>версии для помещений</p>
						<div class="button">
							<a href="#ex1" rel="modal:open" class="btn effect01">
								<span>Рассчитать стоимость</span>
							</a>
						</div>
					</div>
					<video loop muted autoplay poster="images/head_1.jpg" class="fullscreen-bg__video">
						<source src="images/video.mp4" type="video/mp4">
					</video>
				</header><!-- .header-->

				<main class="content">
					<div class="cont">
						<p class="rek">
							Броское изображение плюс небольшой сопроводительный текст притягивают внимание и запоминаются потребителю. Чтобы заинтересовать как можно больше людей, демонстрационные блоки размещают и в помещениях, и на улице. Наружная реклама призвана привлекать посетителей в конкретное учреждение, а интерьерные материалы подталкивают купить демонстрируемый товар или воспользоваться сервисом.
						</p>
						<p>Одни установки «работают» только днем, привлекая внимание необычной картинкой или способом подачи материала. Динамические объекты и лайтбоксы круглосуточно завлекают публику ярким светом, броской цветовой гаммой и лаконичным контентом.</p>
						<h2 class="rek_h2">Нестандартные рекламные конструкции</h2>
					</div>
					<div class="cont">
						<div class="flex">
							<div class="vidi_catalog">
								<img src="images/inter_1.png" alt=" Фигурные конструкции">
								<h3 class="vidi_catalog_h3"> Фигурные конструкции</h3>
							</div>
							<div class="vidi_catalog">
								<img src="images/inter_2.png" alt="Велопарковки">
								<h3 class="vidi_catalog_h3">Велопарковки</h3>
							</div>
							<div class="vidi_catalog">
								<img src="images/inter_3.png" alt="Рекламные стенды">
								<h3 class="vidi_catalog_h3">Рекламные стенды</h3>
							</div>
							<div class="vidi_catalog">
								<img src="images/inter_4.png" alt="Ростовые фигуры">
								<h3 class="vidi_catalog_h3">Ростовые фигуры</h3>
							</div>
							<div class="vidi_catalog">
								<img src="images/inter_5.png" alt="Световая иллюминация">
								<h3 class="vidi_catalog_h3">Световая иллюминация</h3>
							</div>
							<div class="vidi_catalog">
								<img src="images/inter_6.png" alt="Фотозоны">
								<h3 class="vidi_catalog_h3">Фотозоны</h3>
							</div>
						</div>
					</div>
					<div class="order">
						<h2 class="order_h2">Если у вас остались ещё вопросы</h2>
						<p class="order_p">Звоните нам или пишите, ответим на все интересующие Вас вопросы</p>
						<p class="order_span">8 (8652) 68-07-90</p>
						<div class="soc soc_order">
							<a href=""><img src="images/telegramm.svg" alt="telegramm"></a>
							<a href=""><img src="images/whatsapp.svg" alt="whatsapp"></a>
						</div>
						<form action="" class="order_form flex">
							<input type="text" placeholder="Введите ваше имя" class="input_order">
							<input type="text" placeholder="Телефон" class="input_order">
							<textarea name="" id="" cols="30" rows="10" placeholder="Текст вашего вопроса" class="textarea_order"></textarea>
							<input type="submit" class="submit_order">
							<div class="checked">
								<input id="c2d" type="checkbox" checked>
								<label for="c2d">Даю своё согласие на обработку <a href="/">персональных
										данных</a></label>
							</div>
						</form>
					</div>
				</main><!-- .content -->

			</div><!-- .wrapper -->
			<footer class="footer flex">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45095.37063217501!2d41.9245459437137!3d45.05616544901016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40f9076a931d1f2f%3A0x8cc5e2e36c1e5060!2zTlJHINGA0LXQutC70LDQvNC90L4g0L_RgNC-0LjQt9Cy0L7QtNGB0YLQstC10L3QvdCw0Y8g0LPRgNGD0L_Qv9Cw!5e0!3m2!1sru!2sru!4v1586290729640!5m2!1sru!2sru" class="map" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				<iframe src="https://www.youtube.com/embed/aOQfgJ-jnMM" class="map" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</footer><!-- .footer -->
		</div>
	</div>
	<div id="ex1" class="modal modal-zamer">
		<form id="form-contac" method="POST" class="form-element">
			<div class="form-message form-message-tt">
				<span class="za_h3">Заказать расчет</span>
				<input type="text" name="name" required="" placeholder="Введите ваше имя" class="text_za">
				<input type="text" name="phone" required="" placeholder="Введите ваш телефон" class="text_za">
				<input name="theme" type="hidden" class="form-input__theme" value="Заявка с сайта kn-ug.ru/">
				<input type="hidden" name="source" class="source" value="">
				<input type="hidden" name="term" class="term" value="">
				<input type="submit" value="Отправить" class="submit" onclick="ym(61407508, 'reachGoal', 'form_1'); return true;">
				<div class="privacy_statement flex"><input type="checkbox" required="" name="privacy_statement" value="1" checked="">
					<p>Я согласен(а) на обработку <a href="/ok/index.html" class="privacy_statement_a" target="_blank">персональных данных</a></p><br>
				</div>
			</div>
			<div class="form-elements-wh">
				<span class="za_h3">Заказать расчет</span>
				<div class="mess">
					<a href="tg://resolve?domain=Krihinavesiyug" class="mess_a">В telegram</a>
					<a href="whatsapp://send?text=Здравствуйте мне необходима консультация по Вашим услугам&amp;phone=%2B79034465291" class="mess_b">В whatsapp</a>
					<a href="tel:%2B79034465291" class="mess_c" tabindex="-1">Позвонить</a>
					<sapn class="ili">ИЛИ</sapn>
					<a href="#zakaz2" class="mess_c" tabindex="-1">Заказать звонок</a>
				</div>
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
	<script src="js/slick.js"></script>
	<script src="js/script.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
</body>

</html>