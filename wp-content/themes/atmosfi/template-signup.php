<?php /* Template Name: Sign up Page Template */ ?>
<?php
if ($post -> post_name == 'home') :
	get_header('home');
else :
	get_header('inner');
endif;

$signup_section1_header 	= get_post_meta($post->ID, "signup_section1_header", true);
$signup_section1_content 	= get_post_meta($post->ID, "signup_section1_content", true);

if(isset($_REQUEST["saveSignup"]) && $_REQUEST["saveSignup"] == 1) {
	
	$title     			= $_REQUEST['txtFirstname']." ".$_REQUEST["txtLastname"];
	
	$businessUrl   		= $_REQUEST['txtBusinessUrl'];
	$internetServive	= $_REQUEST['isp'];
	$email 				= $_POST['txtEmail'];    
	$phone 				= $_POST['txtPhone']; 
	$city 				= $_POST['txtCity']; 
	$password			= randomPassword();
	
	$post_type 			= 'subscriber';
	
	//the array of arguements to be inserted with wp_insert_post
	$new_post = array(
	'post_title'    => $title,
	'post_status'   => 'publish',          
	'post_type'     => $post_type 
	);
	
	//insert the the post into database by passing $new_post to wp_insert_post
	//store our post ID in a variable $pid
	$pid = wp_insert_post($new_post);
	
	//we now use $pid (post id) to help add out post meta data
	add_post_meta($pid, 'business_url', $businessUrl, true);
	add_post_meta($pid, 'internet_service', $internetServive, true);
	add_post_meta($pid, 'email', $email, true);
	add_post_meta($pid, 'phone', $phone, true);
	add_post_meta($pid, 'city', $city, true);
	add_post_meta($pid, 'password', $password, true);
	
	//Email Section
	$to = $email;
	
	$subject = "Your Registration Details on Atmosfi";
	
	$mailContent = file_get_contents($_SERVER['DOCUMENT_ROOT']."/email_template/registration.html");
	$replaceFromArr = array('{NAME}', '{PHONE}', '{EMAIL}', '{CITY}', '{URL}', '{INTERNET}', '{PASSWORD}');
	$replaceToArr = array($title, $phone, email, $city, $businessUrl, $internetServive, $password);
	$content = str_replace($replaceFromArr, $replaceToArr, $mailContent);
	
	$msg = "";
	
	$headers  = "From: Atmosfi \r\n";
	$headers .= 'MIME-Version: 1.0' . "\n";
	$headers .= 'Content-type: text/html; charset=utf-8';
	
	//echo $content."<br/>"; die();
	
	if(mail($to, $subject, $content, $headers)) {
		$msg = "Contact Request send successfully";
	} else {
		$msg = "Oops! Error on sending mail. Please try again later.";
	}
}

?>

<div class="clear"></div>

<section class="contact-part">
	<div class="container">

		<h1 class="contact" id="contact"><?php echo $signup_section1_header; ?></h1>

		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="address">
				<p class="centerAlignText">
					<?php echo $signup_section1_content; ?>
				</p>

			</div>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="row">
				<form action="#" method="post" name="frmSignup" id="frmSignup" enctype="multipart/form-data">
					<input type="hidden" name="saveSignup" id="saveSignup" value="1" />
					<div class="col-sm-6">

						<div class="row">

							<input type="text" name="txtFirstname" id="txtFirstname" placeholder="Type your Firstname..." class="input" required/>
							<input type="text" name="txtEmail" id="txtEmail" placeholder="Type your Email..." class="input" required/>

						</div>

					</div>
					<div class="col-sm-6">
						<div class="row">
							<input type="text" name="txtLastname" id="txtLastname" placeholder="Type your Lastname..." class="input" required/>
							<input type="text" name="txtPhone" id="txtPhone" placeholder="Type Phone number..." class="input"/>

						</div>
					</div>

					<div class="col-sm-6">
						<div class="row">
							<input type="text" name="txtBusinessUrl" id="txtBusinessUrl" placeholder="Business website url..." class="input"/>

							<select name="isp" id="isp" class="select" >
								<option>Internet Service Provider</option>
								<option>Comcast</option>
								<option>Verizon</option>
							</select>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="row">
							<input type="text" name="txtCity" id="txtCity" placeholder="Type your city..." class="input"/>
							<input type="submit" value="Sign up for a FREE Trial!" class="submitBtn"/>

						</div>
					</div>

					<div class="col-sm-12">
						<div class="row">

						</div>
					</div>

				</form>
			</div>
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