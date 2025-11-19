<?php

	require_once 'models/Usuarios.php';

	/* Se instancia a la clase del motor de plantillas */
	$tpl = new Enano("panel");

	/*para asignar valor a las variables dentro la plantilla*/
	/* formato {{ variable }} valor a pasar como un vector asociativo [ variable_html => valor] */
	$tpl->assignVar([
		"APP_SECTION" => "Panel",
		"PAGE_STYLES" => '<link rel="stylesheet" href="views/assets/css/panel.css">'
	]);

	/* Imprime la plantilla en la página */
	$tpl->printToScreen();


 ?>
