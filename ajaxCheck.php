<?php
	switch ($_GET["country"]) {
		case 1:
			echo json_encode(array("1" => "Albuquerque", "2" => "New York", "3" => "Boston", "4" => "Washington DC"));
			break;
		case 2:
			echo json_encode(array("1" => "Moscow", "2" => "St.Petersburg", "3" => "Samara", "4" => "Kazan"));
			break;
		case 3:
			echo json_encode(array("1" => "Astana", "2" => "Almaty", "3" => "Shymkent", "4" => "Karaganda"));
			break;
	}

?>