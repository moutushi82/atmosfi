<?php /* Template Name: Contact Page Template */ ?>
<?php
if ($post -> post_name == 'home') :
	get_header('home');
else :
	get_header('inner');
endif;

$contact_section1_address = get_post_meta($post -> ID, "contact_section1_address", true);
$contact_section1_phone = get_post_meta($post -> ID, "contact_section1_phone", true);
$contact_section1_email = get_post_meta($post -> ID, "contact_section1_email", true);

if(isset($_REQUEST["hdnSubmit"]) && $_REQUEST["hdnSubmit"] == 1){
	
	$title     			= $_REQUEST['txt_name'];
	$content     		= addslashes($_REQUEST['ta_message']);
	
	$email 				= $_POST['txt_email'];    
	$phone 				= $_POST['txt_phone']; 
	$subject 			= $_POST['txt_subject']; 
	
	$post_type 			= 'contact_request';
	
	//the array of arguements to be inserted with wp_insert_post
	$new_post = array(
	'post_title'    => $title,
	'post_content'  => $content,
	'post_status'   => 'publish',          
	'post_type'     => $post_type 
	);
	
	//insert the the post into database by passing $new_post to wp_insert_post
	//store our post ID in a variable $pid
	$pid = wp_insert_post($new_post);
	
	//we now use $pid (post id) to help add out post meta data
	add_post_meta($pid, 'email', $email, true);
	add_post_meta($pid, 'phone', $phone, true);
	add_post_meta($pid, 'subject', $subject, true);
	
	
	//Email Section
	$to = $contact_section1_email;
	
	$subject = $_REQUEST['txt_subject'];
	
	$mailContent = file_get_contents($_SERVER['DOCUMENT_ROOT']."/email_template/contactusmmail.html");
	$replaceFromArr = array('{NAME}', '{PHONE}', '{EMAIL}', '{MSG}');
	$replaceToArr = array($_REQUEST['txt_name'], $_REQUEST['txt_phone'], $_REQUEST['txt_email'], $_REQUEST['ta_message']);
	$content = str_replace($replaceFromArr, $replaceToArr, $mailContent);
	
	$msg = "";
	
	$headers  = "From: ".$_REQUEST['txt_name']." <".$_REQUEST['txt_email']."> \r\nReply-to:". $_REQUEST['txt_email'];
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

<section class="contact-part">
	<div class="container">

		<h1 class="contact" id="contact">contact</h1>
		<?php
		if($msg != "") {
			echo "<p>".$msg."</p>";
		}
	  	?>
		<div class="col-lg-7 col-md-7 col-sm-7">
			<div class="row">
				<form action="#" method="post" id="frmContact" name="frmContact">
				<input type="hidden" name="hdnSubmit" id="hdnSubmit" value="1" />
				<div class="col-sm-6">
					<div class="row">						
						<input type="text" placeholder="Name" class="input" name="txt_name" id="txt_name" required/>
						<input type="text" placeholder="Phone" class="input" name="txt_phone" id="txt_phone" required/>
					</div>

				</div>
				<div class="col-sm-6">
					<div class="row">
						<input type="text" placeholder="Email" class="input" name="txt_email" id="txt_email" required/>
						<input type="text" placeholder="Subject" class="input" name="txt_subject" id="txt_subject" required/>
					</div>
				</div>
				<textarea placeholder="How Can We Help You?" class="area" name="ta_message" required></textarea>
				<input type="submit" value="SUBMIT" class="sub234"/>
				</form>
			</div>
		</div>

		<div class="col-lg-5 col-md-5 col-sm-5">
			<div class="address">
				<p>
					<strong><?php echo $contact_section1_address; ?></strong>
				</p>

				<p>
					<strong>Phone:</strong> <?php echo $contact_section1_phone; ?>
				</p>

				<p class="email">
					<strong>Email:</strong>
				</p>
				<!--<p class="sm">support@atmosfi.net</p>-->
				<p class="sm">
					<?php echo $contact_section1_email; ?>
				</p>
				<!--<p class="sm">info@atmosfi.net</p>
				<p class="sm">business@atmosfi.net</p>-->

			</div>
		</div>

		<div class="clear"></div>
	</div>
	<div class="clear"></div>

</section>

<div class="clear"></div>

<section class="map-part">
	<div class="col-sm-12">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3051.2284146697502!2d-74.96181779999999!3d40.1149129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89c14d49925ff105%3A0x9132ff0712613e9e!2s3222+Tillman+Dr+%23504%2C+Bensalem%2C+PA+19020%2C+USA!3m2!1d40.1149129!2d-74.96181779999999!5e0!3m2!1sen!2sin!4v1434960276718" width="100%" height="450" frameborder="0" style="border:2px solid #009D2C;"></iframe>
		</div>
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