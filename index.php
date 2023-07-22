<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>landing</title>
	<meta name="viewport" contant="width=device-width, initial-scale=1.0">
	<meta name="theme-color" contant="#317EFB">
</head>
<body>
	<div class="menu">
		<a href="#">О нас</a>
		<!-- <a href="#">Проекты</a> -->
		<div class="dropdown">
			<button>Проекты</button>
			<div class="dropdown-content">
				<a href="#">Проект №1</a>
				<a href="#">Проект №2</a>
				<a href="#">Проект №3</a>
				<a href="#">Проект №4</a>
			</div>
		</div>
		<a href="#">Команда</a>
		<a href="#">Цены</a>
		<a href="#">Контакты</a>
	</div>
	<div class="header">
		<h1>Мы запускаем стартап</h1>
		<p>Здесь скоро будет что-то интересное</p>
		<a href="#">Подробнее</a>
	</div>
	<div id="about-company">
		
		<h2>О компании</h2>
		<img src="img/logo.jpg">
		<p>Здесь мог бы быть красивый текст о компании,но выдумывать мне лень.Товарищи! постоянный количественный рост и сфера нашей активности играет важную роль в формировании дальнейших направлений развития. Повседневная практика показывает, что начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании направлений прогрессивного развития. 
		<p>Разнообразный и богатый опыт новая модель организационной деятельности способствует подготовки и реализации модели развития. Разнообразный и богатый опыт начало повседневной работы по формированию позиции играет важную роль в формировании соответствующий условий активизации. Таким образом дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание новых предложений.Взято с <a href="https://fishtext.ru/">Рыбатекст</a>.</p>
			
		</p>
	</div>
	<div id="team">
		<h2>Команда</h2>
		<div class="member">
			<img src="img/member1.jpg">
			<h3>Степан Степанцов</h3>
			<p class="pos">Директор</p>
			<p class="descrition">Люблю создавать технологичные продукты и выводить их на новые рынки.</p>
			<a href="mailto:kostik103@mail.ru">Напиши мне</a>
		</div>
		<div class="member">
			<img src="img/member2.jpg">
			<h3>Сергей Нелох</h3>
			<p class="pos">Дизайнер</p>
			<p class="descrition">Не мыслю своей жизни без дизайна, мне больно, когда я вижу что-то некрасивое.</p>
			<a href="mailto:kostik103@mail.ru">Напиши мне</a>
		</div>
		<div class="member">
			<img src="img/member3.jpg">
			<h3>Александр Цибуля</h3>
			<p class="pos" >Директор по безопасности</p>
			<p class="descrition">Мимо меня и муха не проскочит, не то что хакер по WiFi подключится.</p>
			<a href="mailto:kostik103@mail.ru">Напиши мне</a>
		</div>
		<div class="member">
			<img src="img/member4.jpg">
			<h3>Глубокослав</h3>
			<p class="pos" >front-end разработчик</p>
			<p class="descrition">Обожаю front-end разработку и создавать продукты, которыми пользуются люди.</p>
			<a href="mailto:kostik103@mail.ru">Напиши мне</a>
		</div>
	</div>
		<div id="prices">
			<h2>Тарифы</h2>
			<p class="description">Платите нам столько,сколько хотите. Главное платите :)</p>
			<div class="tariff">
				<p class="tariff-head">
					Базовый
				</p>
				<p>
					<span>10</span> лайков
				</p>
				<p>
					<span>10</span> репостов
				</p>
				<p>
					<span>10</span> комментариев
				</p>
				<p>
				<span>И ещё важный</span> пункт	
				</p>
				<p class="tariff-price">25 рублей</p>
				<p class="inday">в день</p>
				<p class="buy"><a href="#">Купить</a></p>
			</div>
			<div class="tariff">
				<p class="tariff-head best">
					Про
				</p>
				<p>
					<span>20</span> лайков
				</p>
				<p>
					<span>20</span> репостов
				</p>
				<p>
					<span>10</span> комментариев
				</p>
				<p>
				<span>Тоже важный</span> пункт
				</p>
				<p class="tariff-price">50 рублей</p>
				<p class="inday">в день</p>
				<p class="buy"><a href="#">Купить</a></p>
			</div>
			<div class="tariff">
				<p class="tariff-head">
					Премиум
				</p>
				<p>
					<span>50</span> лайков
				</p>
				<p>
					<span>50</span> репостов
				</p>
				<p>
					<span>10</span> комментариев
				</p>
				<p>
				<span>Мега важный</span> пункт	
				</p>
				<p class="tariff-price">100 рублей</p>
				<p class="inday">в день</p>
				<p class="buy"><a href="#">Купить</a></p>
			</div>
		</div>
		<div id="contacts">
			<h2>Контакты</h2>
			<p>Не будьте скромными, пишите нам:</p>
			<p class="contact-info contact-address">Москва, Бутлерова 3</p>
			<p class="contact-info contact-phone">Телефон: <a href="tel:74995078523">+7(499)507-8523</a></p>
			<p class="contact-info contact-mail">Email: <a href="mailto:asu@gubkin.ru">asu@gubkin.ru</a></p>
			<form action="script.php" method="post">
				<p><input type="text" name="name" placeholder="Имя"></p>
				<p><input type="email" name="email" placeholder="Email"></p>
				<p><input type="text" name="subject" placeholder="Тема"></p>
				<p><input type="text" name="message" placeholder="Сообщение"></p> 
				<p><input type="submit" value="Отправить сообщение"></p>
			</form>
		</div>
		<div class="footer">
			&copy; Все права защищены
		</div>
		
</body>
</html>