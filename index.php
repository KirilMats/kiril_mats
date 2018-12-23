<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once "templates/head.php"; ?>
</head>
<body>
	<div class="page_wrap">
		<?php require_once "templates/preloader.php"; ?>
		<header>			
			<div class="custom_header_wrap">
			<div class="logo_wrap">
				<div class="logo front"><a href="index.php"></a></div>
				<div class="logo back"><a href="index.php"></a></div>
			</div>
			<div class="custom_header">
				<div class="slider">	
					<img src="dist/img/1.jpg" alt="web development bg">
					<img src="dist/img/2.jpg" alt="web development bg">
					<img src="dist/img/3.jpg" alt="web development bg">
					<img src="dist/img/4.jpg" alt="web development bg">
					<img src="dist/img/5.jpg" alt="web development bg">
				</div>
			</div>
			<div class="slider_buttons">
				<button id="prev"><span><</span></button>
				<button id="next"><span>></span></button>
			</div>
			<div class="go_to_content">
			<div class="container">
			<div class="row">
				<a class="arrow" href="#content">
					<span></span>
				</a>
			</div>
			</div>
			</div>
				<?php require_once "templates/header.php"; ?>
			</div>
		</header>
		<main>
			<div class="container" id="content">
			<div class="row">
			<div class="col-12 aboutme_wrap">
			<div class="col-8 aboutme_desc">
				<h1>About me</h1>
				<p>My name is Kiril. I am a freelance web designer, web developer. I create effective solutions for your business. I am able to listen and HEAR my clients. I turn complex problems into simple ones, I will help your business to stimulate sales and increase profitability. I create websites that look great, load quickly, are functional and easy to use.</p>
				<a href="services&prices.html">Service order</a>
			</div>
			<div class="aboutme_photo">
				<img src="dist/img/aboutme_photo.jpg">
			</div>
			</div>
			</div>
			</div>
			<div class="container">
			<div class="row advantages_wrap">
				<h2 class="col-12"><span>4</span> essential reasons to order site from me</h2>
				<div class="col-12 advantages" id="advantages">
					<div class="advantage"><div class="advantage_title"><span class="price"></span><h4>Price</h4></div><p>The cost of my services is indicated in the corresponding section, but each project is individual and prices may differ drastically. <br> You can be sure that the prices are fully consistent with the quality and market prices. I guarantee 100% working off of your money. Contact me - we will discuss.</p></div>
					<div class="advantage"><div class="advantage_title"><span class="experience"></span><h4>Expirience</h4></div><p>I have been creating websites since 2017. More than 50+ created sites. Check out my portfolio and find that most of the projects are implemented for US customers, and they are very demanding. Despite the huge competition among freelancers, they continue to trust me.</p></div>
					<div class="advantage"><div class="advantage_title"><span class="quality"></span><h4>Quality</h4></div><p>Modern and intuitive design. Clear, clean, valid code that meets all modern standards. Adaptive layout - your website will be displayed correctly on all available devices, from mobile phones to desktops.</p></div>
					<div class="advantage"><div class="advantage_title"><span class="clear_deadlines"></span><h4>Clear deadlines</h4></div><p>After discussing your project and drawing up the TOR, I will write about all the stages of development and clearly mark the time for each stage. You can be sure - the project will be delivered on time. In case of delay due to my fault - a discount is waiting for you! But I doubt that you are so lucky).</p></div>
			</div>
			</div>
			</div>
			<div class="container">
				<div class="row carousel_wrap">
					<div class="col-2 carousel">
						<div class="carousel_content">
							<figure><img src="dist/img/1.jpg" alt="web development bg"></figure>
							<figure><img src="dist/img/2.jpg" alt="web development bg"></figure>
							<figure><img src="dist/img/3.jpg" alt="web development bg"></figure>
							<figure><img src="dist/img/4.jpg" alt="web development bg"></figure>
							<figure><img src="dist/img/5.jpg" alt="web development bg"></figure>
						</div>
					</div>
				</div>
			</div>
		</main>
		<footer>
			<?php require_once "templates/footer.php"; ?>
		</footer>
	</div>
	<div id="carousel_pop_up">
    </div>
		
	<script type="text/javascript" src="src/scripts/jquery-2.1.1.min.js" ></script>
	<script type="text/javascript" src='dist/js/bundle.js'></script>
</body>
</html>