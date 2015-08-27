<?php /* Template Name: Home Page Template */ ?>
<?php
//echo is_home(); die();
if ( $post->post_name == 'home' ) :
	get_header( 'home' );
else :
	get_header('inner');
endif;

//echo "pre>"; var_dump($post); die();
$section1Header = get_post_meta($post->ID, "homepage_section1_header", true);
$section1SubHeader = get_post_meta($post->ID, "homepage_section1_subheader", true);
$section1Content = get_post_meta($post->ID, "homepage_section1_content", true);

$section2Header = get_post_meta($post->ID, "homepage_section2_header", true);
$section2SubHeader = get_post_meta($post->ID, "homepage_section2_subheader", true);
$section2Content = get_post_meta($post->ID, "homepage_section2_content", true);
$section2Video = get_post_meta($post->ID, "homepage_section2_video", true);

$section3Header = get_post_meta($post->ID, "homepage_section3_header", true);
$section3SubHeader = get_post_meta($post->ID, "homepage_section3_subheader", true);
$section3Content = get_post_meta($post->ID, "homepage_section3_content", true);

$section4Header = get_post_meta($post->ID, "homepage_section4_header", true);
$section4SubHeader = get_post_meta($post->ID, "homepage_section4_subheader", true);
$section4Content = get_post_meta($post->ID, "homepage_section4_content", true);

$section5Header 		= get_post_meta($post->ID, "homepage_section5_header", true);
$section5SubHeader 		= get_post_meta($post->ID, "homepage_section5_subheader", true);
$section5Content 		= get_post_meta($post->ID, "homepage_section5_content", true);
$section5FacebookLink 	= get_post_meta($post->ID, "homepage_section5_facebook_link", true);
$section5TwitterLink 	= get_post_meta($post->ID, "homepage_section5_twitter_link", true);
$section5GoogleLink 	= get_post_meta($post->ID, "homepage_section5_google_link", true);

$section6Header = get_post_meta($post->ID, "homepage_section6_header", true);
$section6SubHeader = get_post_meta($post->ID, "homepage_section6_subheader", true);
$section6Content = get_post_meta($post->ID, "homepage_section6_content", true);

$section7Header = get_post_meta($post->ID, "homepage_section7_header", true);
$section7SubHeader = get_post_meta($post->ID, "homepage_section7_subheader", true);
$section7Content = get_post_meta($post->ID, "homepage_section7_content", true);

?>

<div class="logo-part">
	<h2 class="wow slideInDown animated"><strong>Welcome</strong></h2>
	<a href="#" ><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="" class="wow zoomIn animated" /></a>
	<p class="wow fadeInUp animated">
		We keep your Customers coming back...
	</p>

</div>

<div class="logo-part2 hide1">

	<h2 class="topsign">Try us out </h2>

	<form class="post">
		<input type="text" class="textb" name="" placeholder="Please enter your email.." />
		<input type="submit" value="Sign Up" name="send" class="sendb" />
	</form>

</div>

<div class="left-menu">
	<a href="#customer" class="toggle  page-scroll"><i class="fa fa-bars"></i></a>
</div>

<section id="index" class="my-slider">
	<ul class="rslides" id="slider1">
		<li><img src="<?php echo get_template_directory_uri(); ?>/image/banner1.jpg" alt="">
		</li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/image/banner2.jpg" alt="">
		</li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/image/banner3.jpg" alt="">
		</li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/image/banner4.jpg" alt="">
		</li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/image/banner5.jpg" alt="">
		</li>
	</ul>

</section>

<?php include_once("menu.php"); ?>
<div class="clear"></div>

<div class="logo-part3 hide2">

	<h2 class="topsign">Sign Up With Us </h2>

	<form class="post">
		<input type="text" class="textb" name="" placeholder="Please enter your email.." />
		<input type="submit" value="Sign Up" name="send" class="sendb" />
	</form>

</div>

<section class="customer-section">
	<div class="container" id="customer">
		<div class="col-sm-5">
			<div class="customer">
				<h1><?php echo $section1Header; ?></h1>
				<h3><?php echo $section1SubHeader; ?></h3>
				<img src="<?php echo get_template_directory_uri(); ?>/image/border-logo.png" alt=""  class="border-logo" />
				<p>
					<?php echo $section1Content; ?>
				</p>

				<!-- <a href="#">Get Started</a>   -->

			</div>
			<div class="clear"></div>

			<ul class="three-button">
				<li>
					<a class="lithree" href="#">See Testimonials</a>
				</li>
				<li>
					<a class="lithree2" href="#">How it works</a>
				</li>
				<li>
					<a class="lithree" href="#">Free Trial</a>
				</li>
			</ul>
		</div>

		<div class="col-sm-6 im-box">
			<img src="<?php echo get_template_directory_uri(); ?>/image/first0section-image.jpg" alt="" class="img-responsive im extra-hover" />

		</div>
	</div>

</section>

<div class="clear"></div>

<section id="home" data-speed="4" data-type="background" class="market">
	<div class="container">
		<div class="col-sm-5 directly">
			<h1><?php echo $section2Header; ?></h1>
			<h3><?php echo $section2SubHeader; ?></h3>
			<img src="<?php echo get_template_directory_uri(); ?>/image/border-logo1.png" alt="" class="border-logo1" />
			<p>
				<?php echo $section2Content; ?>
			</p>
			<a href="#">Get Started today</a>

		</div>

		<!--  <div class="col-sm-7 im2">
		<img src="<?php echo get_template_directory_uri(); ?>/image/vtab.png" alt="" class="img-responsive" />
		</div>
		-->

		<div class="col-sm-7 im2" id="tvBorder">

			<div >
				<video class="videoat" style="width:100%; height:100%" controls preload="auto">
					<source src="<?php echo $section2Video; ?>" frameborder="0" allowfullscreen>
				</video>

			</div>
		</div>

	</div>
	<div class="clear"></div>
</section>

<div class="clear"></div>

<section class="automated">
	<div class="container">
		<div class="col-sm-5">
			<div class="row padding">
				<div class="col-sm-6 box">
					<img src="<?php echo get_template_directory_uri(); ?>/image/box-image1.jpg" alt="" class="img-responsive box-img extra-hover" />
				</div>
				<div class="col-sm-6 box">
					<img src="<?php echo get_template_directory_uri(); ?>/image/box-image2.jpg" alt="" class="img-responsive box-img extra-hover" />
				</div>
				<div class="col-sm-6 box">
					<img src="<?php echo get_template_directory_uri(); ?>/image/box-image3.jpg" alt="" class="img-responsive box-img extra-hover" />
				</div>
				<div class="col-sm-6 box">
					<img src="<?php echo get_template_directory_uri(); ?>/image/box-image4.jpg" alt="" class="img-responsive box-img extra-hover" />
				</div>

			</div>
		</div>
		<div class="col-sm-6 automated-text-box customer-section">
			<h1><?php echo $section3Header; ?></h1>
			<h3><?php echo $section3SubHeader; ?></h3>
			<img src="<?php echo get_template_directory_uri(); ?>/image/border-logo.png" alt=""  class="border-logo" />
			<p>
				<?php echo $section3Content; ?>
			</p>
			<a href="#">How It Works</a>
		</div>
		<div class="clear"></div>
	</div>
</section>

<div class="clear"></div>

<section id="home1" data-speed="4" data-type="background" class="loyalty">
	<div class="container">
		<div class="col-sm-12 directly">
			<h1><?php echo $section4Header; ?></h1>
			<h3><?php echo $section4SubHeader; ?></h3>
			<img src="<?php echo get_template_directory_uri(); ?>/image/border-logo1.png" alt="" class="border-logo1" />
			<p>
				<?php echo $section4Content; ?>
			</p>

		</div>

		<!--<div class="col-sm-7 im2">
		<img src="<?php echo get_template_directory_uri(); ?>/image/tab2.png" alt="" class="img-responsive extra-hover" />
		</div>-->

	</div>
	<div class="clear"></div>
</section>

<div class="clear"></div>

<section class="social">
	<div class="container">
		<div class="col-sm-5">
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/image/mobile2.jpg" alt="" class="img-responsive im extra-hover" />
				</div>

				<div class="col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/image/mobile1.jpg" alt="" class="img-responsive im extra-hover" />
				</div>
			</div>

		</div>
		<div class="col-sm-6 social-box">
			<h1><?php echo $section5Header; ?></h1>
			<h3><?php echo $section5SubHeader; ?></h3>
			<img src="<?php echo get_template_directory_uri(); ?>/image/border-logo.png" alt=""  class="border-logo" />
			<p>
				<?php echo $section5Content; ?>
			</p>
			<div class="so">
				<ul class="list-inline">
					<li>
						<a href="<?php echo $section5FacebookLink; ?>" target="_blank" class="green"><i class="fa fa-facebook-square"></i></a>
					</li>
					<li>
						<a href="<?php echo $section5TwitterLink; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
					</li>
					<li>
						<a href="<?php echo $section5GoogleLink; ?>" target="_blank" class="green"><i class="fa fa-google-plus"></i></a>
					</li>
				</ul>
			</div>

		</div>
		<div class="clear"></div>

	</div>

</section>

<div class="clear"></div>

<section id="home2" data-speed="4"  class="how">
	<div class="container">
		<div class="col-sm-12 it-works">
			<h1><?php echo $section6Header; ?></h1>
			<h3><?php echo $section6SubHeader; ?></h3>
			<img src="<?php echo get_template_directory_uri(); ?>/image/border-logo1.png" alt="" class="border-logo1 extra-padding" />
			<p>
				<?php echo $section6Content; ?>
			</p>
			<div class="row padding1">
				<div class="col-sm-4">
					<h3>WIFI</h3>
					<p>
						Guests connect to your shops Wi
					</p>

				</div>

				<div class="col-sm-4">
					<h3>Automate</h3>
					<p>
						Your custom splash page is displayed and the user logs in to access free WiFi.
					</p>

				</div>

				<div class="col-sm-4">
					<h3>Build & Analyze</h3>
					<p>
						ou collect valuable info and insight and your guests can now browse the internet for free.
					</p>

				</div>
			</div>

		</div>

	</div>
</section>

<div class="clear"></div>

<section class="database">
	<div class="container">

		<div class="col-sm-6 personal-text">
			<h1><?php echo $section7Header; ?></h1>
			<h3><?php echo $section7SubHeader; ?></h3>
			<img src="<?php echo get_template_directory_uri(); ?>/image/border-logo.png" alt=""  class="border-logo" />
			<p>
				<?php echo $section7Content; ?>
			</p>

			<a href="#">Plans & Pricing</a>

		</div>

		<div class="col-sm-5 personal">
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/image/personal1.jpg" alt="" class="img-responsive im extra-hover" />
				</div>

				<div class="col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/image/personal2.jpg" alt="" class="img-responsive im extra-hover" />
				</div>
			</div>

		</div>
		<div class="clear"></div>

	</div>

</section>

<div class="clear"></div>

<!--<section id="home3" data-speed="4"  class="our-one">
<div class="container">
<div class="our">
<h1>our</h1>
<h3>Customers</h3>
<img src="<?php echo get_template_directory_uri(); ?>/image/border-logo1.png" alt="" class="border-logo1" />
<p>atmosFi is perfect for any kind of business that has customers visit their shop/business for 10+ minutes. Today’s trend of digital interaction through smart phones and tablets makes offering WiFi to customers more important than ever to meet customers desired needs. We service Coffee Shops, Bars, Restaurants, Hotels, Salons/Barbers, Car Service Centers and anywhere, where a customer may feel inclined to use their phone/device. See our testimonials to see how we’ve impacted our local business customers.
</p>
</div>

</div>
</section>-->

<div class="clear"></div>

<?php
if ( $post->post_name == 'home' ) :
	get_footer( 'home' );
else :
	get_footer('inner');
endif;
?>