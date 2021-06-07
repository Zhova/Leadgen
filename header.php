<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leadgen
 */


	?>
	<!doctype html>
	<html <?php language_attributes(); ?>>
	  <head>
	    <link rel="shortcut icon" href="" type="image/png"/>
	    <title>title</title>
	    <link rel="stylesheet" type="text/css" href="css/all_style.css"/>
	    <link rel="preconnect" href="https://fonts.gstatic.com"/>
	    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,900&amp;display=swap" rel="stylesheet"/>
	    <meta charset="utf-8"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
			<?php wp_head(); ?>
	  </head>
		<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
	    <header class="wrap">
	      <div class="header-content container">
	        <div class="logo-lang"> <a class="logo-lang__logo" href="#"><img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="logo"/></a>
	          <div class="logo-lang__lang">RU
	          </div>
	        </div>
	        <nav class="nav-menu">
	          <ul class="nav-menu__list">
	            <li class="nav-menu__item text text_xs"><a href="#">Преимущества</a>
	            </li>
	            <li class="nav-menu__item text text_xs"><a href="#">Безопасность</a>
	            </li>
	            <li class="nav-menu__item text text_xs"><a href="#">Возможности</a>
	            </li>
	            <li class="nav-menu__item text text_xs"><a href="#">Контакты</a>
	            </li>
	          </ul>
	        </nav><a class="btn btn_defaul btn btn_agent" href="#">СТАТЬ АГЕНТОМ</a>
	      </div>
	      <div class="cookie">
	        <p class="cookie__text">Мы используем файлы cookie для улучшения работы сайта. Соглашаясь, вы подтверждаете то, что проинформиованы об использовании cookies
	        </p><a class="cookie__btn" href="#">ok, Разрешаю куки</a>
	      </div>
	    </header>
