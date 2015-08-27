<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome To AtmosFI</title>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/image/shortcut.png"  type="image/x-icon" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" type="text/css" />

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font/font-awesome/css/font-awesome.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font.css" type="text/css" />
		<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/scrolling-nav.css" type="text/css" />-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive-tabs.css" type="text/css" />
		
		<!------------------------ Owl Carousal Css Element ------------------------------->
		    <!-- Owl Carousel Assets -->
		    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
		    <link href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css" rel="stylesheet">
		
		<!---------------------------------------------------------------------------------->
		
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>

		<script>
			$(document).ready(function() {
				if (Modernizr.touch) {
					// show the close overlay button
					$(".close-overlay").removeClass("hidden");
					// handle the adding of hover class when clicked
					$(".img").click(function(e) {
						if (!$(this).hasClass("hover")) {
							$(this).addClass("hover");
						}
					});
					// handle the closing of the overlay
					$(".close-overlay").click(function(e) {
						e.preventDefault();
						e.stopPropagation();
						if ($(this).closest(".img").hasClass("hover")) {
							$(this).closest(".img").removeClass("hover");
						}
					});
				} else {
					// handle the mouseenter functionality
					$(".img").mouseenter(function() {
						$(this).addClass("hover");
					})
					// handle the mouseleave functionality
					.mouseleave(function() {
						$(this).removeClass("hover");
					});
				}
			}); 
</script>

	</head>

	<body>
		<div class="left-menu">
			<a href="#customer" class="toggle  inner-toggle"><i class="fa fa-bars"></i></a>
		</div>

		<section id="index">
			<div class="middleband1sr"></div>

			<script>
				$(window).scroll(function() {
					var scroll = $(window).scrollTop();

					if (scroll >= 150) {
						$(".middleband1ab").addClass("middleband2ab").removeClass("middleband1ab");
					} else {
						$(".middleband2ab").removeClass("middleband2ab").addClass("middleband1ab");
					}
				});

			</script>

			<script type="text/javascript">
<!--//--><![CDATA[//><!--
var images = new Array()
function preload() {
	for ( i = 0; i < preload.arguments.length; i++) {
		images[i] = new Image();
		images[i].src = preload.arguments[i];
	}
}

preload("<?php echo get_template_directory_uri(); ?>/image/contact-banner23.jpg", "<?php echo get_template_directory_uri(); ?>/image/contact-banner2.jpg");
	//--><!]]>
			</script>
			<?php
			$bannerSectionHeader = get_post_meta($post -> ID, "banner_section_header", true);
			$bannerSectionContent = get_post_meta($post -> ID, "banner_section_content", true);
			?>
			<!--<h1 class="header-name">atmosfi contact </h1>-->
			<div class="container">
				<div class="slide-captions aboutb">
					<h1 style="color: #FFF !important;"><?php echo $bannerSectionHeader; ?></h1>
					<p>
						<?php echo $bannerSectionContent; ?>
					</p>
					<a href="#contact" class="page-scroll wow flash extra-arrow" ><i class="fa fa-angle-double-down"></i></a>

				</div>
			</div>

		</section>
<?php
$servicesPageObj = get_page_by_path('services');
$servicesPageLink = get_permalink($servicesPageObj -> ID);

$contactPageObj = get_page_by_path('contact-us');
$contactPageLink = get_permalink($contactPageObj -> ID);

$pricingPageObj = get_page_by_path('plans-pricing');
$pricingPageLink = get_permalink($pricingPageObj -> ID);

$aboutPageObj = get_page_by_path('about-us');
$aboutPageLink = get_permalink($aboutPageObj -> ID);

$partnersPageObj = get_page_by_path('partners');
$partnersPageLink = get_permalink($partnersPageObj->ID);

$signupPageObj = get_page_by_path('sign-up');
$signupPageLink = get_permalink($signupPageObj->ID);
?>
		<div class="clear"></div>
		<section class="menu tagg-menu hide-menu">
			<a href="#customer" class="first-arrow page-scroll"><i class="fa fa-angle-double-down"></i></a>
			<nav>

				<div class="clear"></div>

				<ul class="my-nav">
					<li>
						<a href="<?php echo site_url(); ?>">Home</a>
					</li>
					<li class="activee">
						<a href="<?php echo $servicesPageLink; ?>">services</a>
					</li>
					<li>
						<a href="<?php echo $pricingPageLink; ?>">plans and pricing</a>
					</li>
					<li>
						<a href="<?php echo $aboutPageLink; ?>">about us</a>
					</li>
					<li>
						<a href="<?php echo $partnersPageLink; ?>">partners</a>
					</li>
					<li>
						<a href="<?php echo $signupPageLink; ?>">sign up</a>
					</li>
					<li>
						<a href="<?php echo $contactPageLink; ?>">contact us</a>
					</li>
				</ul>
			</nav>

		</section>

