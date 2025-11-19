<?php

	/* Se instancia a la clase del motor de plantillas */
	$tpl = new Enano("detail");

	/*para asignar valor a las variables dentro la plantilla*/
	/* formato {{ variable }} valor a pasar como un vector asociativo [ variable_html => valor] */
	$tpl->assignVar([
		"APP_SECTION" => "Detalle de estacion",
		"PAGE_STYLES" => '<link rel="stylesheet" href="views/assets/css/detail.css">',
		"STATION_NAME" => "Backyard Oasis",
		"STATION_LOCATION" => "San Francisco, CA",
		"STATION_TEMP" => "21&#8451;",
		"STATION_CONDITION" => "Parcialmente nublado",
		"TREND_VALUE" => "21&#8451;",
		"TREND_PERIOD" => "Ultimas 24 horas",
		"TREND_CHANGE" => "+1.5%",
		"HUMIDITY" => "65%",
		"WIND" => "15 km/h",
		"UV_INDEX" => "5",
		"PRESSURE" => "1012 hPa"
	]);

	/* Imprime la plantilla en la pagina */
	$tpl->printToScreen();


 ?>
