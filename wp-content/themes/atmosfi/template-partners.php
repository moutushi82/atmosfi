<?php /* Template Name: Partners Page Template */ ?>
<?php
if ($post -> post_name == 'home') :
	get_header('home');
else :
	get_header('inner');
endif;

$partners_section1_header = get_post_meta($post -> ID, "partners_section1_header", true);
$partners_section1_content = get_post_meta($post -> ID, "partners_section1_content", true);

$partners_section2_header = get_post_meta($post -> ID, "partners_section2_header", true);
$partners_section2_subheader = get_post_meta($post -> ID, "partners_section2_subheader", true);
$partners_sectio2_content = get_post_meta($post -> ID, "partners_section2_content", true);
?>

<section class="four-part">
	<div class="container">
		<h2 id="partn"><?php echo $partners_section1_header; ?></h2>

		<p class="text-part">
			<?php echo $partners_section1_content; ?>
		</p>

	</div>
</section>

<section id="home4" data-speed="4"  class="our-one">
	<div class="container">
		<div class="our">
			<h1><?php echo $partners_section2_header; ?></h1>
			<h3><?php echo $partners_section2_subheader; ?></h3>
			<img src="<?php echo get_template_directory_uri(); ?>/image/border-logo1.png" alt="" class="border-logo1" />
			<p><?php echo $partners_sectio2_content; ?></p>
		</div>

	</div>
</section>

<section class="four-part">
	<div class="container">

		<div id="demo">
			<div class="container">
				<div class="row">
					<div class="span12">

						<div id="owl-demo" class="owl-carousel">
							<?php
							global $wpdb;
	
							$totalPartnersData = array();
							$wpQuery = "SELECT meta_value FROM wp_postmeta WHERE meta_key LIKE ('partners_image_%') AND post_id = ".$post->ID;
							$totalPartnersData = $wpdb->get_results($wpQuery, OBJECT);
							
							if(count($totalPartnersData) > 0){
								for($i=1; $i<= count($totalPartnersData); $i++){
									$partners_image = get_post_meta($post->ID, "partners_image_".$i, true);
							?>
							<div class="item"><img src="<?php echo $partners_image; ?>" class="partnerLogo" alt="">
							</div>
							<?php } } ?>
							
						</div>

					</div>
				</div>
			</div>

		</div>

	</div>
</section>

<style>
	#owl-demo .item {
		margin: 3px;
	}
	#owl-demo .item img {
		display: block;
		width: 100%;
		height: auto;
	}
</style>

<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			autoPlay : 3000,
			items : 4,
			itemsDesktop : [1199, 3],
			itemsDesktopSmall : [979, 3]
		});

	});
</script>
<div class="clear"></div>

<?php
if ($post -> post_name == 'home') :
	get_footer('home');
else :
	get_footer('inner');
endif;
?>