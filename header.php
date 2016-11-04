<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	    <div id="home">
		<header id="header">
			<div id="headerInner">					
				<nav id="navbar" class="navbar navbar-default" role="navigation">
					<div class="container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo bloginfo('name'); ?></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="menuItem pull-right">
							<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
								<ul class="nav navbar-nav">
									<li class="active"><a href="#home">HOME <span class="sr-only">(current)</span></a></li>
									<li><a href="#about">ABOUT</a></li>
									<li><a href="#services">SERVICES</a></li>
									<li><a href="#work">WORK</a></li>
									<li><a href="#blog">BLOG</a></li>
									<li><a href="#contact">CONTACT</a></li>
								</ul>
							</div><!-- /.navbar-collapse -->
							<ul class="iconsGroup nav navbar-nav">
								<li><a href="#"><i class="mdi mdi-cart-outline icon"></i></a></li>
								<li><a href="#" class="search"><i class="mdi mdi-magnify icon"></i></a></li>
							</ul>
						</div>
					</div><!-- /.container-fluid -->
				</nav>

				<section id="slider" class="carousel slide container" data-ride="carousel">
					
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<h2 class="sectionHeading">
								<span class="subHeading">Creative Template</span>
								Welcome <br>to <?php echo bloginfo('name'); ?>
							</h2>
							<a href="#" class="btn">Learn more</a>
						</div>
						<div class="item">
							<h2 class="sectionHeading">
								<span class="subHeading">Creative Template</span>
								Welcome <br>to <?php echo bloginfo('name'); ?>
							</h2>
							<a href="#" class="btn">Learn more</a>
						</div>
						<div class="item">
							<h2 class="sectionHeading">
								<span class="subHeading">Creative Template</span>
								Welcome <br>to <?php echo bloginfo('name'); ?>
							</h2>
							<a href="#" class="btn">Learn more</a>
						</div>
						<div class="item">
							<h2 class="sectionHeading">
								<span class="subHeading">Creative Template</span>
								Welcome <br>to <?php echo bloginfo('name'); ?>
							</h2>
							<a href="#" class="btn">Learn more</a>
						</div>
					</div>

					<!-- Indicators -->
					<ol class="carousel-indicators clearfix">
						<li data-target="#slider" data-slide-to="0" class="active">
							<div class="inner">
								<span class="number">01</span> intro	
							</div>
						</li>
						<li data-target="#slider" data-slide-to="1">
							<div class="inner">
								<span class="number">02</span> work
							</div>
						</li>
						<li data-target="#slider" data-slide-to="2">
							<div class="inner">
								<span class="number">03</span> about
							</div>
						</li>
						<li data-target="#slider" data-slide-to="3">
							<div class="inner">
								<span class="number">04</span> contacts
							</div>
						</li>
					</ol>
				</section>
			</div>
		</header><!--/#header-->
	</div>
	
	<body <?php body_class(); ?> data-target="#navbar" data-spy="scroll">
