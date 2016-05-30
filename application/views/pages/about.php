<!--div ng-controller="PageAboutCtrl">
	<div class="container content-md">
		<div class="row">
			<div class="col-md-12">
				<div class="heading heading-v1 margin-bottom-10">
					<h2>{{'page.about.title' | i18next}}</h2>
				</div>
			</div>
		</div>
		<div class="row margin-bottom-15">
			<div class="col-md-12">
				<div>{{'page.about.0' | i18next}}</div>
			</div>
		</div>
		<div class="row margin-bottom-15">
			<div class="col-md-12">
				<div>{{'page.about.1' | i18next}}</div>
			</div>
		</div>
		<div class="row margin-bottom-15">
			<div class="col-md-12">
				<div>{{'page.about.2' | i18next}}</div>
			</div>
		</div>
		<div class="row margin-bottom-60">
			<div class="col-md-12">
				<div>{{'page.about.3' | i18next}}</div>
			</div>
		</div>
	</div>
</div-->

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Азия СнабТорг</title>

	<!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="../favicon.ico">

	<!-- Web Fonts -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('static/assets/css/app.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('static/assets/css/blocks.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('static/assets/css/one.style.css'); ?>">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/animate.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/line-icons/line-icons.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/font-awesome/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css'); ?>">
	<!-- <link rel="stylesheet" href="<?php #echo base_url('static/assets/plugins/owl-carousel2/<?php echo base_url('static/assets/owl.carousel.css'); ?>"> -->
	<link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/master-slider/masterslider/style/masterslider.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/master-slider/u-styles/testimonials-1.css'); ?>">

	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/css/settings.css'); ?>">
	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/css/layers.css'); ?>">
	<!-- REVOLUTION NAVIGATION STYLES -->
	<link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/css/navigation.css'); ?>">

  <!-- CSS Theme -->
  <link rel="stylesheet" href="<?php echo base_url('static/assets/css/lawyer.style.css'); ?>">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="<?php echo base_url('static/assets/css/custom.css'); ?>">

	<link rel="stylesheet" href="<?php echo base_url('static/assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('static/assets/plugins/parallax-slider/css/parallax-slider.css'); ?>">

</head>

<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery lawyer-style">
	<main class="wrapper">
		<!-- Header -->
		<nav class="one-page-header navbar navbar-default navbar-fixed-top one-page-nav-scrolling one-page-nav__fixed" data-role="navigation">
			<div class="container">
				<div class="menu-container page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="#body">
						<img src="<?php echo base_url('static/assets/img/logo-dark.png'); ?>" alt="Logo">
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<div class="menu-container">
						<ul class="nav navbar-nav">
							<li class="page-scroll">
								<a href="#benefits"><span data-hover="О компании">О компании</span></a>
							</li>
							<li class="page-scroll">
								<a href="#why-we"><span data-hover="Почему мы">Почему мы</span></a>
							</li>	
							<li class="page-scroll">
								<a href="#services"><span data-hover="Деятельность">Деятельность</span></a>
							</li>
							<li class="page-scroll">
								<a href="#blog"><span data-hover="Продукция">Продукция</span></a>
							</li>
							<li class="page-scroll">
								<a href="#contact"><span data-hover="Контакты">Контакты</span></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<!-- End Header -->

		<!-- Promo Block -->
		<div class="promo g-theme-bg-color-1">
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2><i>CLEAN &amp; FRESH</i> <br /> <i>FULLY RESPONSIVE</i> <br /> <i>DESIGN</i></h2>
					<p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i> <br /> <i>veniam omnis </i></p>
					<div class="da-img"><img class="img-responsive" src="<?php echo base_url('static/assets/plugins/parallax-slider/img/1.png'); ?>" alt=""></div>
				</div>
				<div class="da-slide">
					<h2><i>RESPONSIVE VIDEO</i> <br /> <i>SUPPORT AND</i> <br /> <i>MANY MORE</i></h2>
					<p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i></p>
					<div class="da-img">
						<iframe src="http://player.vimeo.com/video/47911018" width="530" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div class="da-slide">
					<h2><i>USING BEST WEB</i> <br /> <i>SOLUTIONS WITH</i> <br /> <i>HTML5/CSS3</i></h2>
					<p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i> <br /> <i>veniam omnis </i></p>
					<div class="da-img"><img src="<?php echo base_url('static/assets/plugins/parallax-slider/img/html5andcss3.png'); ?>" alt="image01" /></div>
				</div>
				<div class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</div>
			</div>
		</div>
		<!-- End Promo Block -->

		<!-- Benefits section -->
		<section id="benefits" class="g-theme-bg-color-1 g-text-color-2 no-column-space">
			<div class="container-fluid">
				<div class="row equal-height-columns">
					<div class="col-sm-6">
						<img class="equal-height-column hidden-xs" src="<?php echo base_url('static/assets/img-temp/PeopleImages.com-ID376522.jpg'); ?>" alt="" height="500">
					</div>
					<div class="col-sm-6 g-dp-table g-va-middle">
						<div class="g-pl-80 g-pr-80 g-pl-15--xs g-pr-15--xs g-dp-table-cell g-va-middle equal-height-column">
							<div class="g-pt-100 g-pb-30">
								<div class="g-heading-v9 g-mb-30">
									<h2><strong>О компании</strong></h2>
								</div>
								<p>Aenean lobortis ante ac porttitor eleifend. Morbi massa justo, gravida sollicitudin tortor vel, dignissim viverra lectus. In varius blandit condimentum. Pellentesque rutrum mauris ornare libero imperdiet pellentesque.</p>
								<ul class="list-unstyled standart-column-space row">
									<li class="col-md-6 g-mb-20">
										<h5 class="text-uppercase"><strong>Free Advice</strong></h5>
										<p>Praesent pulvinar gravida efficitur. Aenean bibendum purus eu nisi pulvinar venenatis vitae non velit. Sed et eleifend mi. Fusce dictum orci libero.</p>
									</li>
									<li class="col-md-6 g-mb-20">
										<h5 class="text-uppercase"><strong>Documentation Support</strong></h5>
										<p>Suspendisse pulvinar facilisis ligula vel pharetra. Vestibulum volutpat porttitor ex a rutrum. Aenean consectetur risus ultricies enim finibus lobortis non at ipsum.</p>
									</li>
									<li class="col-md-6 g-mb-20">
										<h5 class="text-uppercase"><strong>Professional Teams</strong></h5>
										<p>Integer commodo est id erat bibendum, eu convallis dolor tempus. Fusce mollis blandit eros. Nunc quis sapien in massa varius convallis at sed justo.</p>
									</li>
									<li class="col-md-6 g-mb-20">
										<h5 class="text-uppercase"><strong>60 Years Experience</strong></h5>
										<p>Ut a libero magna. Aenean sagittis nisi non ex venenatis, vel commodo tortor eleifend. Nunc feugiat, est quis rutrum sodales, nunc nibh pharetra nibh</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Benefits section -->

		<!-- Why we section -->
		<section id="why-we" class="g-theme-bg-color-1 g-text-color-2 no-column-space">
			<div class="container-fluid">
				<div class="row equal-height-columns">
					<div class="col-sm-6 equal-height-column g-dp-table g-va-middle">
						<div class="g-pl-80 g-pr-80 g-pl-15--xs g-pr-15--xs g-dp-table-cell g-va-middle">
							<div class="g-pt-100 g-pb-50">
								<div class="g-heading-v9 g-mb-30">
									<h2><strong>Почему мы</strong></h2>
								</div>
								<p class="g-fs-16 g-mb-50">Donec in blandit dolor. Vivamus a fringilla lorem, vel faucibus ante. Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor lorem eros vel odio.</p>
								<ul class="list-unstyled marked-list-v1">
									<li data-mark="+">
										<h5 class="text-uppercase"><strong>Professional Staff</strong></h5>
										<p>Cras sit amet varius velit. Maecenas porta condimentum tortor at sagittis. Cum sociis natoque penatibus et magnis disvarius velit</p>
									</li>
									<li data-mark="+">
										<h5 class="text-uppercase"><strong>Great Experience</strong></h5>
										<p>Proin dignissim eget enim id aliquam. Proin ornare dictum leo, non elementum tellus molestie et rutrum mauris ornare.</p>
									</li>
									<li data-mark="+">
										<h5 class="text-uppercase"><strong>Qualified Support</strong></h5>
										<p>Integer commodo est id erat bibendum, eu convallis dolor tempus. Fusce mollis blandit eros. Nunc quis sapien in massa varius convallis at sed justo.</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<img class="equal-height-column" src="<?php echo base_url('static/assets/img-temp/PeopleImages.com-ID64840.jpg'); ?>" alt="" height="500">
					</div>
				</div>
			</div>
		</section>
		<!-- End Why we section -->

		<!-- Services section -->
		<section id="services">
			<div class="container g-pt-100 g-pb-40">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="g-heading-v9 text-center g-mb-30">
							<h2><strong>Деятельность</strong></h2>
						</div>
						<p class="text-center g-fs-16 g-mb-60">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem, vel faucibus ante. Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor lorem eros vel</p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 content-boxes-v7">
						<i class="fa fa-user-secret pull-left g-theme-text-color-1"></i>
						<div class="content-boxes-in-v7">
							<h4 class="text-uppercase"><strong>Criminal Law</strong></h4>
							<p>Proin dignissim eget enim id aliquam. Proin ornare dictum leo, non elementum tellus molestie et. Vivamus sit amet scelerisque leo. In eu commodo est. Sed bibendum a metus ac sollicitudin. Curabitur elementum placerat elit vel accumsan.</p>
						</div>
					</div>
					<div class="col-sm-6 content-boxes-v7">
						<i class="fa fa-institution pull-left g-theme-text-color-1"></i>
						<div class="content-boxes-in-v7">
							<h4 class="text-uppercase"><strong>Civil Law</strong></h4>
							<p>nteger commodo est id erat bibendum, eu convallis dolor tempus. Fusce mollis blandit eros. Nunc quis sapien in massa varius convallis at sed justo. Praesent nec consectetur nibh, sed lobortis turpis.</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 content-boxes-v7">
						<i class="fa fa-suitcase pull-left g-theme-text-color-1"></i>
						<div class="content-boxes-in-v7">
							<h4 class="text-uppercase"><strong>Business Law</strong></h4>
							<p>Aenean lobortis ante ac porttitor eleifend. Morbi massa justo, gravida sollicitudin tortor vel, dignissim viverra lectus. In varius blandit condimentum. Pellentesque rutrum mauris ornare libero imperdiet pellentesque.</p>
						</div>
					</div>
					<div class="col-sm-6 content-boxes-v7">
						<i class="fa fa-money pull-left g-theme-text-color-1"></i>
						<div class="content-boxes-in-v7">
							<h4 class="text-uppercase"><strong>Tax Law</strong></h4>
							<p>Nam et nulla rutrum, dignissim eros quis, dictum eros. In ullamcorper molestie neque, ac faucibus felis efficitur sed. Nam et tristique nisi. Cras iaculis venenatis libero. Suspendisse fermentum, ipsum ac facilisis elementu.</p>
						</div>
					</div>
				</div>


			</div>
		</section>
		<!-- End Services section -->

		<!-- Testimonials section -->
		<section id="testimonials" class="g-theme-bg-color-1 g-text-color-2 text-center g-pt-100 g-pb-40">
			<div class="container">

				<!-- Testimonials Info -->
				<!--div class="row g-mb-70">
					<div class="col-sm-8 col-sm-offset-2 g-heading-v9 text-center">
						<h2><strong>From Our Clients</strong></h2>
					</div>
				</div-->
				<!-- End Testimonials Info -->

				<div class="ms-staff-carousel">
					<div class="row">
					</div>
				</div>
				<!-- End of MasterSlider -->

				<div class="row">
						<ul class="sponsors list-unstyled equal-height-columns g-dp-table g-va-middle">
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="<?php echo base_url('static/assets/img-temp/clients/1.png'); ?>" alt="1"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="<?php echo base_url('static/assets/img-temp/clients/2.png'); ?>" alt="2"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="<?php echo base_url('static/assets/img-temp/clients/3.png'); ?>" alt="3"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="<?php echo base_url('static/assets/img-temp/clients/4.png'); ?>" alt="4"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="<?php echo base_url('static/assets/img-temp/clients/5.png'); ?>" alt="5"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="<?php echo base_url('static/assets/img-temp/clients/6.png'); ?>" alt="6"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="<?php echo base_url('static/assets/img-temp/clients/7.png'); ?>" alt="7"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="<?php echo base_url('static/assets/img-temp/clients/8.png'); ?>" alt="8"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="<?php echo base_url('static/assets/img-temp/clients/9.png'); ?>" alt="9"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="<?php echo base_url('static/assets/img-temp/clients/10.png'); ?>" alt="10"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="<?php echo base_url('static/assets/img-temp/clients/11.png'); ?>" alt="11"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="<?php echo base_url('static/assets/img-temp/clients/12.png'); ?>" alt="12"></a></div></li>
						</ul>

					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials section -->

		<!-- Blog section -->
		<section id="blog">
			<!--=== Content Part ===-->
			<div class="container content">
				<!-- Recent Works -->
				<div class="owl-carousel-v1 owl-work-v1 margin-bottom-40">
					<div class="headline">
						<h2 class="pull-left" style="margin-top: -17px;">Продукция</h2>
						<div class="owl-navigation">
							<div class="customNavigation">
								<a class="owl-btn prev-v2"><i class="fa fa-angle-left"></i></a>
								<a class="owl-btn next-v2"><i class="fa fa-angle-right"></i></a>
							</div>
						</div><!--/navigation-->
					</div>

					<div class="owl-recent-works-v1">
						<div class="item">
							<a href="#">
								<em class="overflow-hidden">
									<img class="img-responsive" src="<?php echo base_url('static/assets/img/prod/1.jpg'); ?>" alt="">
								</em>
								<span>
									<strong>Задвижки</strong>
									<i>Задвижки стальные литые клиновые с выдвижным шпинделем DN 50-1200мм, PN 1,6-16МПа</i>
								</span>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<em class="overflow-hidden">
									<img class="img-responsive" src="<?php echo base_url('static/assets/img/prod/2.jpg'); ?>" alt="">
								</em>
								<span>
									<strong>Клапаны</strong>
									<i>Клапаны запорные и затворы обратные <br/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</i>
								</span>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<em class="overflow-hidden">
									<img class="img-responsive" src="<?php echo base_url('static/assets/img/prod/3.jpg'); ?>" alt="">
								</em>
								<span>
									<strong>Задвижки с чугуннные с обрезанным клином</strong>
									<i>Задвижки с чугуннные с обрезанным клином DN 50-800, PN 1,6 МПа</i>
								</span>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<em class="overflow-hidden">
									<img class="img-responsive" src="<?php echo base_url('static/assets/img/prod/4.jpg'); ?>" alt="">
								</em>
								<span>
									<strong>Краны шаровые</strong>
									<i>Цельносварные шаровые краны DN 32-400, PN 1,6 МПа <br/>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</i>
								</span>
							</a>
						</div>
						<div class="item">
							<a href="#">
								<em class="overflow-hidden">
									<img class="img-responsive" src="<?php echo base_url('static/assets/img/prod/5.jpg'); ?>" alt="">
								</em>
								<span>
									<strong>Комплектация</strong>
									<i>Комлпектация продукции электроприводами и монтажными комплектами</i>
								</span>
							</a>
						</div>
					</div>
				</div>
				<!-- End Recent Works -->

				<!-- Owl Clients v1 -->
				<div class="headline"><h2>Клиенты</h2></div>
				<div class="owl-clients-v1">
					<div class="item">
						<img src="<?php echo base_url('static/assets/img/clients4/1.png'); ?>" alt="">
					</div>
					<div class="item">
						<img src="<?php echo base_url('static/assets/img/clients4/2.png'); ?>" alt="">
					</div>
					<div class="item">
						<img src="<?php echo base_url('static/assets/img/clients4/3.png'); ?>" alt="">
					</div>
					<div class="item">
						<img src="<?php echo base_url('static/assets/img/clients4/4.png'); ?>" alt="">
					</div>
					<div class="item">
						<img src="<?php echo base_url('static/assets/img/clients4/5.png'); ?>" alt="">
					</div>
					<div class="item">
						<img src="<?php echo base_url('static/assets/img/clients4/6.png'); ?>" alt="">
					</div>
					<div class="item">
						<img src="<?php echo base_url('static/assets/img/clients4/7.png'); ?>" alt="">
					</div>
					<div class="item">
						<img src="<?php echo base_url('static/assets/img/clients4/8.png'); ?>" alt="">
					</div>
					<div class="item">
						<img src="<?php echo base_url('static/assets/img/clients4/9.png'); ?>" alt="">
					</div>
				</div>
				<!-- End Owl Clients v1 -->
			</div><!--/container-->
			<!-- End Content Part -->
		</section>
		<!-- End Blog section -->


		<!-- Footer -->
		<footer>
			<!-- Contact section -->
			<section id="contact" class="g-theme-bg-color-1 g-text-color-2">
				<div class="container-fluid">
					<div class="row no-column-space equal-height-columns">
						<div class="col-sm-6 g-dp-table g-va-middle equal-height-column">
							<div class="g-pl-80 g-pr-80 g-pl-15--xs g-pr-15--xs g-pt-100 g-pb-50 g-dp-table-cell g-va-middle">
								<div class="g-heading-v9 g-mb-30">
									<h2 class="text-uppercase"><strong>Оставайтесь на связи</strong></h2>
								</div>
								<p class="g-fs-16 g-mb-60">Азия СнабТорг</p>
								<ul class="list-unstyled g-fs-12 address-list text-uppercase">
									<li><i class="glyphicon glyphicon-map-marker g-mr-15"></i> <em>Адрес:</em> <strong>г.Актобе, ул. Маресьева 4A, офис 301</strong></li>
									<li><i class="glyphicon glyphicon-earphone g-mr-15"></i> <em>Тел/факс:</em> <strong>+7(7132)50 47 33, 50 39 97</strong></li>
									<li><i class="fa fa-envelope g-mr-15"></i> <em>Email:</em> <strong>aziyast@mail.ru, tooaziyasnab@mail.ru</strong></li>
									<!-- <li><i class="fa fa-comments g-mr-15"></i> <em>Toll Free:</em> <strong>+48 555 1258 987</strong></li> -->
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="btn-group maps" data-toggle="buttons" style="position: absolute;top: 0px;left: 250px;z-index: 200;">
			                    <button class="btn btn-default btn-xs active" id="map-btn-google" onclick="showMap('g');">Google map</button>
			                    <button class="btn btn-default btn-xs" id="map-btn-yandex" onclick="showMap('y');">Яndex</button>
			                </div>
			  	            <div id="map" class="contact-section-map"></div>
							<div id="ymaps-map-id_140052407543525456224" class="contact-section-map" style="width: 100%; height: 550px;"></div>
  	            		</div>
					</div>
				</div>
			</section>
			<!-- End Contact section -->

			<section class="footer-section container g-pt-50">
				<div class="row">
					<div class="col-sm-4 g-mb-40">
						<h5 class="text-uppercase g-mb-20"><strong>Text widget</strong></h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae est lorem. Aenean imperdiet nisi a dolor condimentum, id ullamcorper lacus vestibulum. Praesent pulvinar gravida. Aenean lobortis ante ac porttitor eleifend.</p>
						<ul class="social-icons-v-2">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<div class="col-sm-4 col-xs-6 col-3xs-12 g-mb-40">
						<!--h5 class="text-uppercase g-mb-20"><strong>Usefull Links</strong></h5>
						<ul class="row marked-list g-theme-text-color-1">
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="#">Proin vitae est lorem</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="#">Morbi massa justo</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="#">Aenean imperdiet nisi</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="#">Praesent nec consecteth</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="#">Praesent pulvinar gravida</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="#">Fusce mollis blandit eros</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="#">Integer commodo est</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="#">Rnteger commodo est</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="#">Morbi massa justo</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="#">Aenean imperdiet nisi</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="#">Fusce mollis blandit eros</a></li>
							<li class="col-md-6"><i class="fa fa-circle"></i> <a href="#">Praesent pulvinar gravida</a></li>
						</ul-->

						<h5 class="text-uppercase g-mb-20"><strong>Написать письмо</srong></h5>
						<form class="sky-form" action="#">
							<label class="input">
									<input type="text" placeholder="Ваше имя" name="name" id="name">
							</label>
							<label class="input">
									<input type="text" placeholder="Ваш email или телефон" name="email" id="email">
							</label>

							<button class="btn-u btn-u-lg btn-u-red btn-u-upper"><strong>Отправить</strong></button>
						</form>
					</div>
					<div class="col-sm-4 col-xs-6 col-3xs-12 g-mb-40">
						<form class="sky-form" action="#">
							<label class="textarea">
								<textarea placeholder="Ваш текст" name="text" id="text" style="height: 110px; margin-top: 45px;"></textarea>
							</label>
						</form>
					</div>
				</div>
			</section>
		</footer>
		<!-- End Footer -->
	</main>

	<!-- JS Global Compulsory -->
	<script src="<?php echo base_url('static/assets/plugins/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/jquery/jquery-migrate.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

	<!-- JS Implementing Plugins -->
	<script src="<?php echo base_url('static/assets/plugins/smoothScroll.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/jquery.easing.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/owl-carousel2/owl.carousel.min.js'); ?>"></script>
	<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&amp;callback=initMap" async defer></script>
	<script src="<?php echo base_url('static/assets/js/plugins/gmaps-ini.js'); ?>"></script>
	<script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?lang=ru&coordorder=longlat&load=package.full&wizard=constructor&onload=fid_140052407543525456224"></script>
	<script src="<?php echo base_url('static/assets/plugins/master-slider/masterslider/masterslider.min.js'); ?>"></script>

	<script src="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js'); ?>"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
	<script src="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js'); ?>"></script>

	<!-- JS Page Level-->
	<script src="<?php echo base_url('static/assets/js/one.app.js'); ?>"></script>
	<!-- // <script src="<?php #echo base_url('static/assets/js/plugins/owl-carousel2.js'); ?>"></script> -->
	<script src="<?php echo base_url('static/assets/js/plugins/promo.js'); ?>"></script>
	<script src="<?php echo base_url('static/assets/js/plugins/testimonials.js'); ?>"></script>

	<script>
	$(function() {
		App.init();
		// OwlCarousel.initOwlCarousel();
	});
	</script>

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="<?php echo base_url('static/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/assets/js/plugins/owl-carousel.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/assets/js/plugins/owl-recent-works.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/assets/plugins/parallax-slider/js/modernizr.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/assets/plugins/parallax-slider/js/jquery.cslider.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('static/assets/js/plugins/parallax-slider.js'); ?>"></script>
	
	<script type="text/javascript">
		jQuery(document).ready(function() {
			OwlCarousel.initOwlCarousel();
			OwlRecentWorks.initOwlRecentWorksV2();
			ParallaxSlider.initParallaxSlider();
		});
	</script>
</body>
</html>