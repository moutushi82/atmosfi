<?php /* Template Name: About Page Template */ ?>
<?php
if ($post -> post_name == 'home') :
	get_header('home');
else :
	get_header('inner');
endif;

$about_section1_header 		= get_post_meta($post->ID, "about_section1_header", true);
$about_section1_content 	= get_post_meta($post->ID, "about_section1_content", true);

$about_section2_header 		= get_post_meta($post->ID, "about_section2_header", true);
$about_section2_subheader 	= get_post_meta($post->ID, "about_section2_subheader", true);
$about_sectio2_content 		= get_post_meta($post->ID, "about_section2_content", true);
?>

<section class="four-part">
	<div id="about" class="container">
		<h2><?php echo $about_section1_header; ?></h2>

		<p class="text-part">
			<?php echo $about_section1_content; ?>
		</p>

		<div id="effect-4" class="effects clearfix">
			<?php
			global $wpdb;
	
			$totalMembers = 0;
			$wpQuery = "SELECT meta_value FROM wp_postmeta WHERE meta_key = 'total_member' AND post_id = ".$post->ID;
			$totalMembersData = $wpdb->get_results($wpQuery, OBJECT);
			//echo "<pre>"; var_dump($totalMembersData); die();
			$totalMembers = $totalMembersData[0]->meta_value;
			
			if($totalMembers){
				for($i=1; $i<= $totalMembers; $i++){
					$about_member_name = get_post_meta($post->ID, "about_member_name_".$i, true);
					$about_member_image = get_post_meta($post->ID, "about_member_image_".$i, true);
					$about_member_email = get_post_meta($post->ID, "about_member_email_".$i, true);
					$about_member_phone = get_post_meta($post->ID, "about_member_phone_".$i, true);
					$about_member_desc = get_post_meta($post->ID, "about_member_desc_".$i, true);	
					$about_member_designation = get_post_meta($post->ID, "about_member_designation_".$i, true);
			?>
				<div class="img">
					<img src="<?php echo $about_member_image; ?>" alt="">
					<div class="overlay">
						<h3><?php echo $about_member_name; ?></h3>
						<span><?php echo $about_member_designation; ?></span>
						<p>
							<a href="#"><i class="fa fa-phone"></i><?php echo $about_member_phone; ?></a>
						<p>
							<a href="#"><i class="fa fa-envelope"></i><?php echo $about_member_email; ?></a>
						<p>
							<a class="po-button open-button" ><?php echo $about_member_desc; ?></a>
						</p>
	
					</div>
			   </div>
			<?php	}
				
			}
			?>
		</div>

	</div>
</section>

<section id="home3" data-speed="4"  class="our-one">
	<div class="container">
		<div class="our">
			<h1><?php echo $about_section2_header; ?></h1>
			<h3><?php echo $about_section2_subheader; ?></h3>
			<img src="<?php echo get_template_directory_uri(); ?>/image/border-logo1.png" alt="" class="border-logo1" />
			<p>
				<?php echo $about_sectio2_content; ?>
			</p>
		</div>

	</div>
</section>

<section class="about-part">
	<div class="container">

		<div class="col-sm-7 social-box" style="float:left">
			<h1>David Dupell</h1>
			<h3>CFO / Co-Founderr</h3>
			<img src="<?php echo get_template_directory_uri(); ?>/image/border-logo.png" alt="" class="border-logo">
			<p>
				Temple University Alumni from the Fox School of Business, who studied Management Information Systems and Accounting. Dave is the Account Management expert who's here to make sure AtmosFi is getting all the feedback, ideas and resources to continue to improve our services.
			</p>

			<!--
			<div class="so">

			<ul class="list-inline">
			<li><a href=" https://www.facebook.com/pages/AtmosFi-Wi-Fi/1575654606015117?sk=timeline" target="_blank" class="green"><i class="fa fa-facebook-square"></i></a></li>
			<li><a href=" https://twitter.com/AtmosFi_Wifi" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li><a href=" https://plus.google.com/b/107404069253463963294/107404069253463963294/about" target="_blank" class="green"><i class="fa fa-google-plus"></i></a></li>
			</ul>
			</div>  -->

		</div>

		<div class="col-sm-4">
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/image/theme3.png" alt="" class="img-responsive im extra-hover">
				</div>

				<div class="col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/image/theme3.png" alt="" class="img-responsive im extra-hover">
				</div>

				<!-- <div class="col-sm-6">
				<img src="<?php echo get_template_directory_uri(); ?>/image/mobile1.jpg" alt="" class="img-responsive im extra-hover">
				</div>  -->
			</div>

		</div>

		<div class="clear"></div>

	</div>

	<div class="container">

		<div class="col-sm-7 social-box" style="float:left !important;">
			<h1>Kellen O'Connor</h1>
			<h3>Sales Lead</h3>
			<img src="<?php echo get_template_directory_uri(); ?>/image/border-logo.png" alt="" class="border-logo">
			<p>
				Current Temple University student in the Fox Business School studying Management Information Systems. Kellen is the Sales expert who helps businesses identify how AtmosFi can improve their business and daily operations.
			</p>

			<!--
			<div class="so">

			<ul class="list-inline">
			<li><a href=" https://www.facebook.com/pages/AtmosFi-Wi-Fi/1575654606015117?sk=timeline" target="_blank" class="green"><i class="fa fa-facebook-square"></i></a></li>
			<li><a href=" https://twitter.com/AtmosFi_Wifi" target="_blank"><i class="fa fa-twitter"></i></a></li>
			<li><a href=" https://plus.google.com/b/107404069253463963294/107404069253463963294/about" target="_blank" class="green"><i class="fa fa-google-plus"></i></a></li>
			</ul>
			</div>  -->

		</div>

		<div class="col-sm-4" style="float:right">
			<div class="row">
				<div class="col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/image/team4.png" alt="" class="img-responsive im extra-hover">
				</div>

				<div class="col-sm-6">
					<img src="<?php echo get_template_directory_uri(); ?>/image/theme4.png" alt="" class="img-responsive im extra-hover">
				</div>

				<!-- <div class="col-sm-6">
				<img src="image/mobile1.jpg" alt="" class="img-responsive im extra-hover">
				</div>  -->
			</div>

		</div>

		<div class="clear"></div>

	</div>

	<div class="clear"></div>
	</div>
	<div class="clear"></div>

</section>

<div class="clear"></div>

<?php
if ($post -> post_name == 'home') :
	get_footer('home');
else :
	get_footer('inner');
endif;
?>