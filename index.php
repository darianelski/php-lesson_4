<?php 

	function greeting ($userName = "анон") {

		$dayOfWeek = "Суббота";
		

		switch ($dayOfWeek) {
			case "Понедельник":
				echo "Привет, $userName! Хорошего и продуктивного рабочего дня!"; 
				break;
			case "Вторник":
				echo "Привет, $userName! Хорошего и продуктивного рабочего дня!"; 
				break;
			case "Среда":
				echo "Привет, $userName! Хорошего и продуктивного рабочего дня!"; 
				break;
			case "Четверг":
				echo "Привет, $userName! Хорошего и продуктивного рабочего дня!"; 
				break;
			case "Пятница":
				echo "Привет, $userName! Хорошего и продуктивного рабочего дня!"; 
				break;
			case "Суббота":
				echo "Привет, $userName! Желаю вам хорошо отдохнуть в этот день!"; 
				break;
			case "Воскресенье":
				echo "Привет, $userName! Желаю вам хорошо отдохнуть в этот день!"; 
				break;
			
			default:
				echo "Привет, $userName! Ты ничего не попутал? :)";
				break;
		}

	}

	greeting("Вася");
	
 ?>