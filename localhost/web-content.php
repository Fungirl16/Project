<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : OpenSpace 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140131

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Animals</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1 style="position: unset;"><a href="#">Изучение животных на английском </a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="active"><a href="/" accesskey="1" title="">Главная страница</a></li>
				<li><a href="animals-theory" accesskey="2" title="">Животные</a></li>
				<li><a href="test" accesskey="3" title="">Тест</a></li>
				<li><a href="web-content" accesskey="4" title="">Веб-контент</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="wrapper">
	<div id="staff" class="container">
		<div class="title">
			<h3>Учить иностранный язык намного проще и интересней с помощью различных сайтов и сервисов. Предлагаем Вам ознакомиться со следующими:</h3>
			<ul class="style4">
            <?php
                $con = mysqli_connect("localhost", "root", "", "DB");
                mysqli_set_charset($con, "utf8");

                if ($con == false) {
                    echo ("Ошибка подключения: " . mysqli_connect_error());
                }
                else {
                    $sql = "SELECT id, name, link FROM data";
                    $result = mysqli_query($con, $sql);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach ($rows as $row) {
                        echo (
                                "<li>
                                <a href='{$row['link']}'>{$row['name']}</a>
                            </li>"
                        );
                    }
                }
            ?>


			</ul>
		</div>
	</div>
</div>
<div id="welcome-wrapper">
	<ul class="Youtube-video">
		<li>
			<iframe width="562" height="382" src="https://www.youtube.com/embed/hewioIU4a64" title="Farm animals for kids - Vocabulary fo kids" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</li>
		<li>
			<iframe width="562" height="382" src="https://www.youtube.com/embed/dWMYZMWe9aA" title="Invertebrate animals for kids: arthropods, worms, cnidarians, mollusks, sponges, echinoderms" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</li>
		<li>
			<iframe width="562" height="382" src="https://www.youtube.com/embed/KQt3jVyME-k" title="Wild animals, farm animals and aquatic animals for kids - Vocabulary for kids" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		</li>
	</ul>
	<div id="welcome-wrapper">
		<div id="welcome" class="container">
			<div class="title">
				<h2>Welcome to our website</h2>
			</div>
			<p>This is <strong>OpenSpace</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. You're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
		</div>
	</div>
	<div id="copyright" class="container">
		<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>

	
</div>
</body>
</html>
