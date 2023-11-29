<?php
include 'init.php';
$ver = '0.6.27';
?>
<!DOCTYPE html>
<html lang="<?=LANG?>">
<head>
	<meta name="base" content="/">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=TITLE?></title>
	<meta name="description" content="<?=DESCRIPTION?>">
	<meta name="theme-color" content="#1c8ed8" />
	<!-- stylesheet -->
	<link rel="stylesheet" href="assets/style.css?v=<?=$ver?>">
	<!-- cdn css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="body-overlay"></div>
	<!-- header section -->
	<div class="container-fluid section position-relative overflow-hidden" id="header">
		<div class="header-overlay" style="background: url('assets/img/konfetti.png');"></div>
		<div class="container position-relative" style="z-index: 2;">
			<div class="row align-items-center justify-content-center">
				<div class="col-12 col-md-10 col-lg-10 position-relative">
					<div class="girl position-relative" style="background:url('assets/img/girl2.png');"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- offer section -->
	<div class="container-fluid section position-relative" id="offer">
		<div class="offer-layout" style="background:url('');"></div>
		<div class="container py-5">
			<div class="row align-items-center justify-content-center">
				<div class="col-12 col-md-10 col-lg-10">
					<div class="sub-title" data-background="black">
						<h5>Модель города в игровой форме для детей от 4 до 13 лет в Томске</h5>
						<h2>Грядка сити</h2>
						<h4>50+ профессий, собственная валюта, новые социальные навыки уже в первую игру.</h4>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 col-md-5 col-lg-5">
					<p>
						При планировании детского праздника, основой выбора места проведения являются эмоции ребенка, легкость организации и наполнение программы. Топовые организации Томска обеспечивают полное сопровождение праздника. </p><p>Отличное качество обслуживания, широкий спектр мастер-классов и шоу-программ, даже для самого искушенного гостя. </p><p><span style="font-weight: 600;">"Грядка Сити" имеет самую высокую оценку наших именинников и их родителей "Пять звезд".</span>
					</p>
				</div>
				<div class="col-12 col-md-5 col-lg-5">
					<div class="hb-img">
						<img src="assets/img/kids.jpeg" width="100%" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid position-relative" id="deal">
		<div class="back-over" style="background:url('assets/img/konf-deal.png')"></div>
		<div class="container py-5">
			<div class="row align-items-center justify-content-center position-relative">
				<div class="col-12 col-md-10 col-lg-10">
					<div class="sub-title" data-background="black">
						<h2>Наше предложение</h2>
						<h4>наши программы для проведения мероприятий в Грядка сити</h4>
					</div>
				</div>
			</div>
			<div class="row justify-content-center position-relative">
				<div class="col-12 col-md-5 col-lg-5">
					<div class="deal-item">
						<div class="deal-heading position-relative">
							<div>
								<h5>
									Стандартный
								</h5>
								<p>2 часа - до 10 детей</p>
							</div>
						</div>
						<div class="deal-list">
							<ul>
								<li>1 ведущий</li>
								<li>2 сложные профессии</li>
								<li>4 легкие профессии</li>
								<li>до 6 сопровождающих</li>
								<li>бронирование обеденной зоны</li>
								<li>интерактивный квест по городу на выбор</li>
								<li>подарок имениннику</li>
								<li class="unavailable">мастер класс на выбор</li>
								<li class="unavailable">шоу на выбор</li>
							</ul>
						</div>
						<div class="deal-price position-relative">
							<h5>
								12900 RUR
							</h5>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-5 col-lg-5">
					<div class="deal-item">
						<div class="deal-heading position-relative">
							<div>
								<h5>
									Расширенный
								</h5>
								<p>3 часа - до 10 детей</p>
							</div>
						</div>
						<div class="deal-list">
							<ul>
								<li>1 ведущий</li>
								<li>2 сложные профессии</li>
								<li>4 легкие профессии</li>
								<li>до 6 сопровождающих</li>
								<li>бронирование обеденной зоны</li>
								<li>интерактивный квест или мастер класс на выбор</li>
								<li>подарок имениннику</li>
								<li class="unavailable">шоу на выбор</li>
							</ul>
						</div>
						<div class="deal-price position-relative">
							<h5>
								14900 RUR
							</h5>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-5 col-lg-5">
					<div class="deal-item">
						<div class="deal-heading position-relative">
							<div>
								<h5>
									Идеальный
								</h5>
								<p>3 часа - до 10 детей</p>
							</div>
						</div>
						<div class="deal-list">
							<ul>
								<li>1 ведущий и 1 организатор</li>
								<li>2 сложные профессии на выбор</li>
								<li>5 легких профессий на выбор</li>
								<li>сопровождающих неограниченно</li>
								<li>полное бронирование города</li>
								<li>интерактивное шоу на выбор</li>
								<li>мастер-класс на выбор</li>
								<li>подарок имениннику</li>
								<li>подарок родителю</li>
								<li class="unavailable">экспресс съёмка от фотографа</li>
								<li class="unavailable">организация банкета на 15 человек</li>
							</ul>
						</div>
						<div class="deal-price position-relative">
							<h5>
								19900 RUR
							</h5>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-5 col-lg-5">
					<div class="deal-item">
						<div class="deal-heading position-relative">
							<div>
								<h5>
									Премиальный
								</h5>
								<p>3 часа - до 10 детей</p>
							</div>
						</div>
						<div class="deal-list">
							<ul>
								<li>1 ведущий и 1 организатор</li>
								<li>2 сложные профессии на выбор</li>
								<li>5 легких профессий на выбор</li>
								<li>сопровождающих неограниченно</li>
								<li>полное бронирование города</li>
								<li>организация банкета на 15 человек</li>
								<li>интерактивное шоу на выбор</li>
								<li>мастер-класс на выбор</li>
								<li>подарок имениннику</li>
								<li>подарок родителю</li>
								<li>экспресс съёмка от фотографа</li>
							</ul>
						</div>
						<div class="deal-price position-relative">
							<h5>
								29900 RUR
							</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center position-relative">
				<div class="col-12 col-md-10 col-lg-10">
					<h3 class="text-center">
						программы включают в себя полное сопровождение, пригласительные, встреча гостей и сопровождение ведущими, активные игры, обучение на сложных профессиях, работу на лёгких, а также мастер-классы, шоу программы, вынос торта и музыкальное сопровождение
					</h3>
				</div>
			</div>
		</div>
	</div>
	<!-- contact section -->
	<div class="container-fluid section" id="benefit">
		<div class="container py-5">
			<div class="row align-items-center justify-content-center">
				<div class="col-12 col-md-10 col-lg-10">
					<div class="sub-title" data-background="black">
						<h2>5 выгодных преимуществ</h2>
						<h4>детского города профессий</h4>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-10">
					<ul class="benefit-list">
						<li>
							<div class="benefit-item d-flex align-items-center"data-count="01.">
								<div class="benefit-content">
									<p>
										Мама- это мой лучший день рождения! Программа разработана таким образом, что волнообразный эмоциональный фон ребятишек не дает им устать и заскучать даже на протяжении трех часов.  После дискотеки мы проводим мастер-класс, что позволяет сфокусироваться на своей поделке и снизить сильное возбуждение перед дорогой домой.
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="benefit-item d-flex align-items-center" data-count="02.">
								<div class="benefit-content">
									<p>
										Полное сопровождение нашей командой от вашего звонка, до момента проводов гостей. 
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="benefit-item d-flex align-items-center" data-count="03.">
								<div class="benefit-content">
									<p>
										Бесплатная интерактивная экскурсия. Возможность не платить до того момента, пока не узнаете мнение ребенка. Вас встретит специалист и все подробно расскажет о вашем мероприятии, а ребенка встретит наш наставник, они обучатся на профессии или сможет поработать на легкой работе. Это позволит виновнику торжества и вам сформировать свое мнение.
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="benefit-item d-flex align-items-center" data-count="04.">
								<div class="benefit-content">
									<p>
										Возможность повторного проведения мероприятия. Наши программы расписаны по уровням сложности, в паспорте у детей фиксируется все чему они обучались ранее. Это позволяет нам усовершенствовать их умения, узнать больше о профессии и посетить новые мастер классы.
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="benefit-item d-flex align-items-center" data-count="05.">
								<div class="benefit-content">
									<p>
										Ребёнок имеет возможность не только физически потратить свою энергию, но и так же развиваться на интеллектуальном уровне, получая опыт работы в разных профессиях, проявить себя и заработать валюту города.
									</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-12 py-3">
					<p class="text-center text-dark mb-1 text-uppercase font-weight-bolder" style="font-weight: 800;" id="booking">
						нажми на меня
					</p>
					<p class="text-dark m-0 text-center notif">Для того чтобы забронировать место онлайн - заполните форму и мы свяжемся с вами для уточнения подробностей!</p>
					<form action="php/send.php" method="post" class="m-form">
						<div class="row py-4 justify-content-center">
							<div class="col-12 col-md-6 col-lg-6">
								<div class="row">
								<div class="col-12">
									<p class="mb-0" style="font-family: 'gagalin';color:#1c8ed8">Данные родителя:</p>
                                    <hr class="m-0" style="border-top: 2px solid orange;opacity: 1;width: 50%">
								</div>
								<div class="col-6 mb-3">
									<div class="form-group">
                                        <label for="message[parent][name]" class="mb-1">Введите имя:</label>
										<input type="text" name="message[parent][name]" class="form-control" placeholder="Имя" required>
									</div>
								</div>
								<div class="col-6 mb-3">
									<div class="form-group">
                                        <label for="message[parent][surname]" class="mb-1">Введите фамилию:</label>
										<input type="text" name="message[parent][surname]" class="form-control" placeholder="Фамилия">
									</div>
								</div>
								<div class="col-12 mb-4">
									<div class="form-group">
                                        <label for="message[parent][phone]" class="mb-1">Введите номер телефона:</label>
										<input type="text" name="message[parent][phone]" class="form-control" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ" required>
									</div>
								</div>
								<div class="col-12">
									<p class="mb-0" style="font-family: 'gagalin';color:#1c8ed8">Данные ребенка:</p>
                                    <hr class="m-0" style="border-top: 2px solid orange;opacity: 1;width: 50%">
								</div>
								<div class="col-6 mb-3">
									<div class="form-group">
                                        <label for="message[child][name]" class="mb-1">Введите имя ребенка:</label>
										<input type="text" name="message[child][name]" class="form-control" placeholder="Имя" required>
									</div>
								</div>
								<div class="col-6 mb-3">
									<div class="form-group">
                                        <label for="message[child][surname]" class="mb-1">Введите фамилию ребенка:</label>
										<input type="text" name="message[child][surname]" class="form-control" placeholder="Если отлиичается от вашей">
									</div>
								</div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label for="message[child][birthdate]" class="mb-1">День рождениия ребенка:</label>
                                        <input type="text" onkeydown="return false" name="message[child][birthdate]" id="litepicker" class="form-control" placeholder="Нажмите для выбора даты">
                                    </div>
                                </div>
								<div class="col-12">
									<button class="btn btn-primary" type="submit">Забронировать</button>
									<button class="btn btn-outline-danger" id="close-popup">закрыть окно</button>
								</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    <!-- cdn js -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>

        <!-- js -->
    <script src="assets/main.js?v=<?=$ver?>" type="text/javascript"></script>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(92652643, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/92652643" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
    
    </body>
</html>