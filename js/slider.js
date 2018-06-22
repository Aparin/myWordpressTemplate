		var images = [
		'https://mirjetta.ru/wp-content/uploads/2014/09/джетта6.jpg',
		'https://mirjetta.ru/wp-content/uploads/2014/09/джетта5.jpg',
		'https://mirjetta.ru/wp-content/uploads/2014/09/джетта4.jpg',
		'https://mirjetta.ru/wp-content/uploads/2014/09/Фольксваген-Венто.jpg',
		'https://mirjetta.ru/wp-content/uploads/2014/09/джетта2.jpg', 
		'https://mirjetta.ru/wp-content/uploads/2014/09/джетта1.jpg'
		];

		var urls = [
		'https://mirjetta.ru/dzhetta6/folksvagen-2014/',
		'https://mirjetta.ru/dzhetta5/obzor-folksvagen-pyatogo-pokoleniya/',
		'https://mirjetta.ru/bora/dzhetta-4/',
		'https://mirjetta.ru/vento/fotoobzor/',
		'https://mirjetta.ru/dzhetta2/opisanie/',
		'https://mirjetta.ru/dzhetta1/obzor/'
		];
		
		var text = [
		'<strong>Обзор VW JETTA6<br></strong>Давно всеми признанный и любимый седан, находит место в сердцах у жителей большинства стран Северной... ',
		'<strong>ОБЗОР ФОЛЬКСВАГЕН ДЖЕТТА5</strong><br>Первый показ представительницы пятого поколения Volkswagen Jetta состоялся ещё в январе в 2005 году в... ',
		'<strong>ОБЗОР VW JETTA4 (BORA)</strong><br>Один из долгожителей модельной линейки Фольксваген - это Джетта серийного 4-го поколения или другое название... ',
		'<strong>ОБЗОР ФОЛЬКСВАГЕН ВЕНТО</strong><br>Компактный и слегка модернизированный для различных западных и американских рынков седан VW Vento дебютировал ещё... ',
		'<strong>ОПИСАНИЕ ФОЛЬКСВАГЕН ДЖЕТТА2</strong><br>Сегодня многие автовладельцы, в чьем распоряжении имеются не современные модели авто, а более раритетные варианты, ... ',
		'<strong>ОПИСАНИЕ И ХАРАКТЕРИСТИКИ VW JETTA1</strong><br>Сегодня автомобильный рынок переживает бум огромного количества марок и моделей транспортных средств. Но если оглянуться ... '
		];

		var n = 0;
		function next() {
			n++;
			if(n >= images.length) {
				n = 0;
			}
			var elem = document.getElementById('slider');
			elem.innerHTML = '<a href="' + urls[n] + '"><img src="' + images[n] + '"></a>' + text[n] + '<a href="' + urls[n] + '">Читать далее</a>';
		}
		setInterval(next, 3000);