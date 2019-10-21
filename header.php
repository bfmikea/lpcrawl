<!DOCTYPE html>
<html lang="<?php the_field( 'idioma' ); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php the_field( 'descripcion_de_la_pagina' ); ?>">
    <meta name="author" content="crawl.com">
    <meta name="copyright" content="crawl.com">

    <link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <title><?php bloginfo( 'name' ); ?></title>

    <?php // wp_head action hook
    wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- Menu -->
    <div id="nav-menu-top" class="nav-menu fixed-top py-3">
	<div class="container-fluid px-5">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-dark navbar-expand-lg">
					<a class="navbar-brand iconoim" href="#"><?php the_field( 'logo_izquierdo' ); ?></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false"
						aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
						</button>
					<div class="collapse navbar-collapse" id="navbar">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item pt-lg-0 pt-5"> <a class="nav-link active js-scroll-trigger" href="<?php the_field( 'url_item1' ); ?>"><?php the_field( 'item1_del_menu' ); ?> <span class="sr-only">(current)</span></a></li>
							<li class="nav-item"> <a class="nav-link js-scroll-trigger" href="<?php the_field( 'url_item2' ); ?>"><?php the_field( 'item2_del_menu' ); ?></a> </li>
							<li class="nav-item"> <a class="nav-link js-scroll-trigger" href="<?php the_field( 'url_item3' ); ?>"><?php the_field( 'item3_del_menu' ); ?></a> </li>
							<li class="nav-item"> <a class="nav-link js-scroll-trigger" href="<?php the_field( 'url_item4' ); ?>"><?php the_field( 'item4_del_menu' ); ?></a> </li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<?php the_field( 'idiomaes' ); ?>
								</a>
								<div class="dropdown-menu lan-m-p" aria-labelledby="navbarDropdown">
									<a class="dropdown-item textPL" href="<?php the_field( 'urlidiomaes' ); ?>
									"><?php the_field( 'idiomaes' ); ?>
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item text-p-la" href="<?php the_field( 'urlidiomaen' ); ?>
									"><?php the_field( 'idiomaen' ); ?>
									</a>
								</div>
															
																
							</li>
							
							<li class="text-center nav-item"><a href="<?php the_field( 'urlbotonreservar' ); ?>" class="btnpm btn" data-toggle="modal" data-target="#reservaModal"><span class="reservarm"><?php the_field( 'botonreservar' ); ?></span></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>
<!--End Menu -->
