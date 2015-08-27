<?php /* Template Name: Services Page Template */ ?>
<?php
if ( $post->post_name == 'home' ) :
	get_header( 'home' );
else :
	get_header('inner');
endif;

$section1Header = get_post_meta($post->ID, "services_section1_header", true);
$section1SubHeader = get_post_meta($post->ID, "services_section1_subheader", true);
$section1Content = get_post_meta($post->ID, "services_section1_content", true);

$section2Header = get_post_meta($post->ID, "services_section2_header", true);
$section2SubHeader = get_post_meta($post->ID, "services_section2_subheader", true);
$section2Content = get_post_meta($post->ID, "services_section2_content", true);

$section3Header = get_post_meta($post->ID, "services_section3_header", true);
$section3SubHeader = get_post_meta($post->ID, "services_section3_subheader", true);
$section3Content = get_post_meta($post->ID, "services_section3_content", true);

$section4Header = get_post_meta($post->ID, "services_section4_header", true);
$section4SubHeader = get_post_meta($post->ID, "services_section4_subheader", true);
$section4Content = get_post_meta($post->ID, "services_section4_content", true);

$section5Header 		= get_post_meta($post->ID, "services_section5_header", true);
$section5SubHeader 		= get_post_meta($post->ID, "services_section5_subheader", true);
$section5Content 		= get_post_meta($post->ID, "services_section5_content", true);

$section6Header = get_post_meta($post->ID, "services_section6_header", true);
$section6SubHeader = get_post_meta($post->ID, "services_section6_subheader", true);
$section6Content = get_post_meta($post->ID, "services_section6_content", true);

$section7Header = get_post_meta($post->ID, "services_section7_header", true);
$section7SubHeader = get_post_meta($post->ID, "services_section7_subheader", true);
$section7Content = get_post_meta($post->ID, "services_section7_content", true);

$section8Header = get_post_meta($post->ID, "services_section8_header", true);
$section8SubHeader = get_post_meta($post->ID, "services_section8_subheader", true);
$section8Content = get_post_meta($post->ID, "services_section8_content", true);
$section8Content2 = get_post_meta($post->ID, "services_section8_content2", true);

?>

<section class="social position background" id="contact">
	<div class="container">
    	<h2 class="contact">Our Services</h2>
    	<div class="col-sm-5">
        	<div class="row">
            	<div class="col-sm-6">
                	<img src="<?php echo get_template_directory_uri(); ?>/image/wifi2.jpg" alt="" class="img-responsive im extra-hover" />
                </div>
                
                <div class="col-sm-6">
                	<img src="<?php echo get_template_directory_uri(); ?>/image/wifi1.jpg" alt="" class="img-responsive im extra-hover" />
                </div>
            </div>
        
        </div>
        <div class="col-sm-6 social-box">
        	<h1><?php echo $section1Header; ?></h1>
           
            <img src="<?php echo get_template_directory_uri(); ?>/image/border-logo.png" alt=""  class="border-logo" />
            <p><?php echo $section1Content; ?></p>
					
        
        </div>
        <div class="clear"></div>
        
    </div>

</section>

<div class="clear"></div>

<section data-speed="4"  class="our-one service-back1">
	<div class="container">
    	<div class="our">
        	<h1><?php echo $section2Header; ?></h1>
            <h3><?php echo $section2SubHeader; ?></h3>
            <img src="<?php echo get_template_directory_uri(); ?>/image/border-logo1.png" alt="" class="border-logo1" />
            <p><?php echo $section2Content; ?></p>
        </div>
    
    </div>
</section>

<div class="clear"></div>

<section class="social position background">
	<div class="container">
    	
    	<div class="col-sm-5">
        	<div class="row">
            	<div class="col-sm-6">
                	<img src="<?php echo get_template_directory_uri(); ?>/image/data2.jpg" alt="" class="img-responsive im extra-hover" />
                </div>
                
                <div class="col-sm-6">
                	<img src="<?php echo get_template_directory_uri(); ?>/image/data1.jpg" alt="" class="img-responsive im extra-hover" />
                </div>
            </div>
        
        </div>
        <div class="col-sm-6 social-box">
        	<h1><?php echo $section3Header; ?></h1>
           
            <img src="<?php echo get_template_directory_uri(); ?>/image/border-logo.png" alt=""  class="border-logo" />
            <p><?php echo $section3Content; ?></p>      
        </div>
        <div class="clear"></div>
        
    </div>

</section>

<div class="clear"></div>

<section data-speed="4"  class="our-one service-back2">
	<div class="container">
    	<div class="our">
        	<h1><?php echo $section4Header; ?></h1>
            <h3>LOYALTY & ANALYTICS</h3>
            <img src="<?php echo get_template_directory_uri(); ?>/image/border-logo1.png" alt="" class="border-logo1" />
            <p><?php echo $section4Content; ?> </p>
        </div>
    
    </div>
</section>

<section class="social position background">
	<div class="container">
    	
    	<div class="col-sm-5">
        	<div class="row">
            	<div class="col-sm-6">
                	<img src="<?php echo get_template_directory_uri(); ?>/image/person2.jpg" alt="" class="img-responsive im extra-hover" />
                </div>
                
                <div class="col-sm-6">
                	<img src="<?php echo get_template_directory_uri(); ?>/image/person1.jpg" alt="" class="img-responsive im extra-hover" />
                </div>
            </div>
        
        </div>
        <div class="col-sm-6 social-box">
        	<h1><?php echo $section5Header ?></h1>
            
            <img src="<?php echo get_template_directory_uri(); ?>/image/border-logo.png" alt=""  class="border-logo" />
            <p><?php echo $section5Content; ?></p>
					
        
        </div>
        <div class="clear"></div>
        
    </div>

</section>

<div class="clear"></div>

<section data-speed="4"  class="our-one service-back3">
	<div class="container">
    	<div class="our">
        	<h1><?php echo $section6Header; ?></h1>
            <h3><?php echo $section6SubHeader; ?></h3>
            <img src="<?php echo get_template_directory_uri(); ?>/image/border-logo1.png" alt="" class="border-logo1" />
            <p><?php echo $section6Content; ?> </p>
        </div>
    
    </div>
</section>

<section class="social position background">
	<div class="container">
    	
    	<div class="col-sm-5">
        	<div class="row">
            	<div class="col-sm-6">
                	<img src="<?php echo get_template_directory_uri(); ?>/image/monthly2.jpg" alt="" class="img-responsive im extra-hover" />
                </div>
                
                <div class="col-sm-6">
                	<img src="<?php echo get_template_directory_uri(); ?>/image/monthly1.jpg" alt="" class="img-responsive im extra-hover" />
                </div>
            </div>
        
        </div>
        <div class="col-sm-6 social-box">
        	<h1><?php echo $section7Header; ?></h1>
            
            <img src="<?php echo get_template_directory_uri(); ?>/image/border-logo.png" alt=""  class="border-logo" />
            <p><?php echo $section7Content; ?></p>        
        </div>
        <div class="clear"></div>
        
    </div>

</section>

<div class="clear"></div>

<div class="clear"></div>

<section id="home2" data-speed="4"  class="how position">
	<div class="container">
    	<div class="col-sm-12 it-works">
        	
            <h3><?php echo $section8Header; ?></h3>
             <img src="<?php echo get_template_directory_uri(); ?>/image/border-logo1.png" alt="" class="border-logo1 extra-padding" />
            <p><?php echo $section8Content; ?></p>
            <div class="row padding1">
            	<?php echo $section8Content2; ?>
            </div>
        
        
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