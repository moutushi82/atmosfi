<?php
$servicesPageObj = get_page_by_path('services');
$servicesPageLink = get_permalink($servicesPageObj->ID);

$contactPageObj = get_page_by_path('contact-us');
$contactPageLink = get_permalink($contactPageObj->ID);

$pricingPageObj = get_page_by_path('plans-pricing');
$pricingPageLink = get_permalink($pricingPageObj->ID);

$aboutPageObj = get_page_by_path('about-us');
$aboutPageLink = get_permalink($aboutPageObj->ID);

$partnersPageObj = get_page_by_path('partners');
$partnersPageLink = get_permalink($partnersPageObj->ID);

$signupPageObj = get_page_by_path('sign-up');
$signupPageLink = get_permalink($signupPageObj->ID);


?>

<section class="menu">
	<a href="#customer" class="first-arrow page-scroll"><i class="fa fa-angle-double-down"></i></a>
	<nav>

		<div class="clear"></div>

		<ul class="my-nav">
			<li class="activee">
				<a href="<?php echo site_url(); ?>">Home</a>
			</li>
			<li>
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
			<li><a href="<?php echo $signupPageLink; ?>">sign up</a></li> 
			<li>
				<a href="<?php echo $contactPageLink; ?>">contact us</a>
			</li>
		</ul>
	</nav>

</section>