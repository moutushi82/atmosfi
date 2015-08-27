<?php /* Template Name: Pricing Page Template */ ?>
<?php
if ( $post->post_name == 'home' ) :
	get_header( 'home' );
else :
	get_header('inner');
endif;

$section1Header = get_post_meta($post->ID, "pricing_section1_header", true);
$section1Content = get_post_meta($post->ID, "pricing_section1_content", true);

$section2Header = get_post_meta($post->ID, "pricing_section2_header", true);
$section2Content = get_post_meta($post->ID, "pricing_section2_content", true);


?>

<section class="social position background" id="contact">
	<div class="container">
    	<h2 class="contact"><?php echo $section1Header; ?></h2>
		<?php echo $section1Content; ?>   	
        <div class="clear"></div>
        
    </div>

</section>

<div class="clear"></div>

<section id="price" data-speed="4"  class="how position">
	<div class="container">
    	<div class="col-sm-12 it-works">
        	
            <h3><?php echo $section2Header; ?></h3>
             <img src="<?php echo get_template_directory_uri(); ?>/image/border-logo1.png" alt="" class="border-logo1 extra-padding" />
           <!-- <p>AtmosFi is a turn key WiFi solution for your business.</p>-->
            <div class="row padding1">
            	<?php echo $section2Content; ?>
            </div>
        	<?php
        		$contactPageObj = get_page_by_path('contact-us');
				$contactPageLink = get_permalink($contactPageObj->ID);
        	?>
        	<a href="<?php echo $contactPageLink; ?>">Learn More...</a>
        </div>
    
    
    </div>
</section>


<div class="clear"></div>


<?php
if ( $post->post_name == 'home' ) :
	get_footer( 'home' );
else :
	get_footer('inner');
endif;
?>