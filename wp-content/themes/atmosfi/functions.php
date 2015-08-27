<?php
/* AtmosFI functions

/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */
 
if (!session_id())
	add_action('init', 'session_start');

if (!isset($content_width)) {
	$content_width = 474;
}

//Custom admin login style
function my_login_stylesheet() {
	wp_enqueue_style('custom-login', get_template_directory_uri() . '/style-login.css');
	//wp_enqueue_script( 'custom-login', get_template_directory_uri() . '/style-login.js' );
}

//add_action('login_enqueue_scripts', 'my_login_stylesheet');

// custom admin header logo
function custom_admin_header_logo() {
	echo '
        <style type="text/css">
            #header-logo { background-image: url(' . get_bloginfo('stylesheet_directory') . '/images/adminlogo.jpg) !important; }
			#wp-admin-bar-root-default { display: none !important;}
			#screen-meta-links { display: none !important;}
			.inside input[type="text"] { width: 593px !important; }
			.inside input[type="teatarea"] { width:100%; height:130px;}
        </style>
    ';
}

add_action('admin_head', 'custom_admin_header_logo');

/**
 * customize the admin logo that appears in the header
 */
function htx_custom_logo() {
	echo '
		<style type="text/css">
		#wp-admin-bar-wp-logo > .ab-item .ab-icon { 
		background-image: url(' . get_bloginfo('stylesheet_directory') . '/images/logo.jpg) !important; 
		background-position: 0 0;
		}
		#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
		background-position: 0 0;
		}   
		 </style>
	';
}

//hook into the administrative header output
add_action('admin_head', 'htx_custom_logo');

/**REPLACE Admin**/
function replace_howdy($wp_admin_bar) {
	$my_account = $wp_admin_bar -> get_node('my-account');
	$newtitle = str_replace('Howdy,', 'Hello, welcome back!', $my_account -> title);
	$wp_admin_bar -> add_node(array('id' => 'my-account', 'title' => $newtitle, ));
}

add_filter('admin_bar_menu', 'replace_howdy', 25);
/**END REPLACE HOWDY**/

//Change default admin landing page
/* Redirect the user logging in to a custom admin page. */
function new_dashboard_home($username, $user) {
	if (array_key_exists('administrator', $user -> caps)) {
		wp_redirect(admin_url('edit.php?post_type=page', 'http'), 301);
		exit ;
	}
}

add_action('wp_login', 'new_dashboard_home', 10, 2);

function wpse71503_init() {
    if (is_admin()) {
        wp_deregister_style('thickbox');
        wp_deregister_script('thickbox');
    }
}
//add_action('admin_init', 'wpse71503_init');


//Remove Update nag from admin header & footer
function no_update_notification() {
	remove_action('admin_notices', 'update_nag', 3);

}

add_action('admin_notices', 'no_update_notification', 1);

function change_footer_version() {
	return '&nbsp;';
}

add_filter('update_footer', 'change_footer_version', 9999);

//Change admin footer text
function change_footer_admin() {
	echo ' ';
}

add_filter('admin_footer_text', 'change_footer_admin');

//Remove menu items from admin panel
function remove_menus() {
	global $menu;
	$restricted = array(__('Links'), __('Tools'), __('Users'), __('Media'), __('Dashboard'),  __('Types'), __('Appearance'), __("Settings"), __('Plugins'), __('Posts'), __('Comments'));
	end($menu);
	while (prev($menu)) {
		$value = explode(' ', $menu[key($menu)][0]);
		if (in_array($value[0] != NULL ? $value[0] : "", $restricted)) {unset($menu[key($menu)]);
		}
	}
}

add_action('admin_menu', 'remove_menus');

// For Sidebar
if (function_exists('register_sidebar'))
	register_sidebar(array('before_widget' => '', 'after_widget' => '', 'before_title' => '<div class="title">', 'after_title' => '</div>', ));

/**
 * Hide editor on specific pages.
 *
 */
add_action( 'admin_init', 'hide_editor' );

function hide_editor() {
	remove_post_type_support('page', 'editor');
}

function add_my_favicon() {
   $favicon_path = get_template_directory_uri() . '/image/favicon.ico';

   echo '<link rel="shortcut icon" href="' . $favicon_path . '" />';
}

//add_action( 'wp_head', 'add_my_favicon' ); //front end
add_action( 'admin_head', 'add_my_favicon' ); //admin end

// Display any errors
function display_custom_error() {

    $errors = get_option('my_admin_errors');

    if($errors) {

        echo '<div class="error"><p>' . $errors . '</p></div>';

    }   

}
add_action( 'admin_notices', 'display_custom_error' );

// Clear any errors
function clear_errors() {

    $errors = get_option('my_admin_errors');
	if($errors)
		$errors = '';
	update_option('my_admin_errors', $errors);

}
add_action( 'admin_footer', 'clear_errors' );
//End
add_action('admin_footer','modify_form');
function modify_form(){
	global $post;
	
	echo  '<script type="text/javascript">
		  jQuery("#post").attr("enctype", "multipart/form-data");
			</script>
	  ';
	  
}


add_action("admin_init", "admin_init");
// Meta tags for Custom Posts
function admin_init(){
	
	global $post;
	
	$postID = $_REQUEST['post'];
	$currPost = get_post( $postID);
	
	// Meta tags for Home Pages
	if($currPost->post_name == 'home'){
		add_meta_box("section1-meta", "Section 1", "homepage_section_1", "page", "normal", "high");
		add_meta_box("section2_video-meta", "Section 2", "homepage_section_2", "page", "normal", "high");
		add_meta_box("section3-meta", "Section 3", "homepage_section_3", "page", "normal", "high");
		add_meta_box("section4-meta", "Section 4", "homepage_section_4", "page", "normal", "high");
		add_meta_box("section5-meta", "Section 5", "homepage_section_5", "page", "normal", "high");
		add_meta_box("section6-meta", "Section 6", "homepage_section_6", "page", "normal", "high");
		add_meta_box("section7-meta", "Section 7", "homepage_section_7", "page", "normal", "high");
		
	}
	
	// Meta tags for Services Pages
	if($currPost->post_name == 'services'){
		add_meta_box("banner_section-meta", "Banner Section", "services_banner_section", "page", "normal", "high");
		add_meta_box("section1-meta", "Section 1", "services_section_1", "page", "normal", "high");
		add_meta_box("section2-meta", "Section 2", "services_section_2", "page", "normal", "high");
		add_meta_box("section3-meta", "Section 3", "services_section_3", "page", "normal", "high");
		add_meta_box("section4-meta", "Section 4", "services_section_4", "page", "normal", "high");
		add_meta_box("section5-meta", "Section 5", "services_section_5", "page", "normal", "high");
		add_meta_box("section6-meta", "Section 6", "services_section_6", "page", "normal", "high");
		add_meta_box("section7-meta", "Section 7", "services_section_7", "page", "normal", "high");
		add_meta_box("section8-meta", "Section 8", "services_section_8", "page", "normal", "high");
	}
	
	if($currPost->post_name == 'plans-pricing'){
		add_meta_box("banner_section-meta", "Banner Section", "pricing_banner_section", "page", "normal", "high");
		add_meta_box("section1-meta", "Our Plans & Pricing", "pricing_section_1", "page", "normal", "high");
		add_meta_box("section2-meta", "COMMON QUESTIONS", "pricing_section_2", "page", "normal", "high");
	}
	
	if($currPost->post_name == 'about-us'){
		add_meta_box("banner_section-meta", "Banner Section", "about_banner_section", "page", "normal", "high");
		add_meta_box("section1-meta", "About Section 1", "about_section_1", "page", "normal", "high");
		add_meta_box("section3-meta", "Member Details", "about_member_details", "page", "normal", "high");
		add_meta_box("section2-meta", "About Section 2", "about_section_2", "page", "normal", "high");
	}
	
	if($currPost->post_name == 'partners'){
		add_meta_box("banner_section-meta", "Banner Section", "partners_banner_section", "page", "normal", "high");
		add_meta_box("section1-meta", "Section 1", "partners_section_1", "page", "normal", "high");
		add_meta_box("section3-meta", "Partners Details", "partners_details", "page", "normal", "high");
		add_meta_box("section2-meta", "Section 2", "partners_section_2", "page", "normal", "high");
	}
	
	if($currPost->post_name == 'sign-up'){
		add_meta_box("banner_section-meta", "Banner Section", "signup_banner_section", "page", "normal", "high");
		add_meta_box("section1-meta", "Section 1", "signup_section_1", "page", "normal", "high");
	}
	
	if($currPost->post_name == 'contact-us'){
		add_meta_box("banner_section-meta", "Banner Section", "services_banner_section", "page", "normal", "high");
		add_meta_box("section1-meta", "Contact Data", "contact_section_1", "page", "normal", "high");
	}
}

add_action('admin_print_footer_scripts','my_admin_print_footer_scripts',99);
function my_admin_print_footer_scripts()
{
    ?><script type="text/javascript">
		jQuery(document).ready(function() {
			
			jQuery("#addImage").click(function(){
				var totalMember = jQuery( "#tblAboutMemberDetails table" ).length;
				var addHtml = '<table  border="1" bordercolor="#efefef" width="100%" >';
				
				addHtml +=	'<tr><td width="20%">Name</td>';
				addHtml +=	'<td><input type="text" id="about_member_name_'+(totalMember + 1)+'" name="about_member_name[]" /></td></tr> ';
				addHtml +=	'<tr><td width="20%">Designation :</td>';
				addHtml +=	'<td><input type="text" name="about_member_designation[]" id="about_member_designation_'+(totalMember + 1)+'"  /></td></tr>';		
				addHtml +=	'<tr><td width="20%">Image</td>';
				addHtml +=	'<td><input type="file" name="about_member_image[]" id="about_member_image_'+(totalMember + 1)+'"  /></td></tr> ';
				addHtml +=	'<tr><td width="20%">Email</td>';
				addHtml +=	'<td><input type="text" name="about_member_email[]" id="about_member_email_'+(totalMember + 1)+'"  /></td></tr>';
				addHtml +=	'<tr><td width="20%">Phone</td>';
				addHtml +=	'<td><input type="text" name="about_member_phone[]" id="about_member_phone_'+(totalMember + 1)+'"  /></td></tr> ';
				addHtml +=	'<tr><td width="20%">Description</td>';
				addHtml +=	'<td><textarea name="about_member_desc[]" id="about_member_desc_'+(totalMember + 1)+'" style="width:100%; height:130px;"  /></textarea></td></tr> ';
					
				addHtml += '</table>';
				jQuery( "#tblAboutMemberDetails").append(addHtml);
				
			});
			
			jQuery("#addPartnersImage").click(function(){
				var totalMember = jQuery( "#tblPartnersDetails table" ).length;
				var addHtml = '<table  border="1" bordercolor="#efefef" width="100%" >';
				
				addHtml +=	'<tr><td width="20%">Image</td>';
				addHtml +=	'<td><input type="file" name="partners_image[]" id="partners_image_'+(totalMember + 1)+'"  /></td></tr> ';
				
				addHtml += '</table>';
				jQuery( "#tblPartnersDetails").append(addHtml);
				
			});
			
			
			
		});

		</script>
	<?php
}

add_filter('admin_head','ShowTinyMCE');
function ShowTinyMCE() {
	// conditions here
	wp_enqueue_script( 'common' );
	wp_enqueue_script( 'jquery-color' );
	wp_print_scripts('editor');
	if (function_exists('add_thickbox')) add_thickbox();
	wp_print_scripts('media-upload');
	if (function_exists('wp_tiny_mce')) wp_tiny_mce();
	wp_admin_css();
	wp_enqueue_script('utils');
	do_action("admin_print_styles-post-php");
	do_action('admin_print_styles');
}

// Meta tags for Home Pages
function homepage_section_1(){
	global $post;
	
	$homepage_section1_header 		= get_post_meta($post->ID, "homepage_section1_header", true);
	$homepage_section1_subheader 	= get_post_meta($post->ID, "homepage_section1_subheader", true);
	$homepage_section1_content 		= get_post_meta($post->ID, "homepage_section1_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="homepage_section1_header" id="homepage_section1_header" value="<?php echo $homepage_section1_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="homepage_section1_subheader" id="homepage_section1_subheader" value="<?php echo $homepage_section1_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="homepage_section1_content" name="homepage_section1_content" style="width:100%; height:130px;"><?php if($homepage_section1_content != "") { echo $homepage_section1_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function homepage_section_2(){
	global $post;
	
	$homepage_section2_header 		= get_post_meta($post->ID, "homepage_section2_header", true);
	$homepage_section2_subheader 	= get_post_meta($post->ID, "homepage_section2_subheader", true);
	$homepage_section2_content 		= get_post_meta($post->ID, "homepage_section2_content", true);
	$homepage_section2_video	 	= get_post_meta($post->ID, "homepage_section2_video", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="homepage_section2_header" id="homepage_section2_header" value="<?php echo $homepage_section2_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="homepage_section2_subheader" id="homepage_section2_subheader" value="<?php echo $homepage_section2_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="homepage_section2_content" name="homepage_section2_content" style="width:100%; height:130px;"><?php if($homepage_section2_content != "") { echo $homepage_section2_content; } ?></textarea>
        </td>
      </tr>
      <tr>
      	<td width="20%">Video</td>
        <td>
        	<input type="file" name="homepage_section2_video" id="homepage_section2_video" /> <?php if($homepage_section2_video != "") { echo $homepage_section2_video; } ?>
        </td>
      </tr>
    </table>	
<?php
}

function homepage_section_3(){
	global $post;
	
	$homepage_section3_header 		= get_post_meta($post->ID, "homepage_section3_header", true);
	$homepage_section3_subheader 	= get_post_meta($post->ID, "homepage_section3_subheader", true);
	$homepage_section3_content 		= get_post_meta($post->ID, "homepage_section3_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="homepage_section3_header" id="homepage_section3_header" value="<?php echo $homepage_section3_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="homepage_section3_subheader" id="homepage_section3_subheader" value="<?php echo $homepage_section3_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="homepage_section3_content" name="homepage_section3_content" style="width:100%; height:130px;"><?php if($homepage_section3_content != "") { echo $homepage_section3_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function homepage_section_4(){
	global $post;
	
	$homepage_section4_header 		= get_post_meta($post->ID, "homepage_section4_header", true);
	$homepage_section4_subheader 	= get_post_meta($post->ID, "homepage_section4_subheader", true);
	$homepage_section4_content 		= get_post_meta($post->ID, "homepage_section4_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="homepage_section4_header" id="homepage_section4_header" value="<?php echo $homepage_section4_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="homepage_section4_subheader" id="homepage_section4_subheader" value="<?php echo $homepage_section4_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="homepage_section4_content" name="homepage_section4_content" style="width:100%; height:130px;"><?php if($homepage_section4_content != "") { echo $homepage_section4_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function homepage_section_5(){
	global $post;
	
	$homepage_section5_header 			= get_post_meta($post->ID, "homepage_section5_header", true);
	$homepage_section5_subheader 		= get_post_meta($post->ID, "homepage_section5_subheader", true);
	$homepage_section5_content 			= get_post_meta($post->ID, "homepage_section5_content", true);
	
	$homepage_section5_facebook_link	= get_post_meta($post->ID, "homepage_section5_facebook_link", true);
	$homepage_section5_twitter_link		= get_post_meta($post->ID, "homepage_section5_twitter_link", true);
	$homepage_section5_google_link		= get_post_meta($post->ID, "homepage_section5_google_link", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="homepage_section5_header" id="homepage_section5_header" value="<?php echo $homepage_section5_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="homepage_section5_subheader" id="homepage_section5_subheader" value="<?php echo $homepage_section5_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="homepage_section5_content" name="homepage_section5_content" style="width:100%; height:130px;"><?php if($homepage_section5_content != "") { echo $homepage_section5_content; } ?></textarea>
        </td>
      </tr>
      <tr>
      	<td width="20%">Facebook Link</td>
        <td>
        	<input type="text" name="homepage_section5_facebook_link" id="homepage_section5_facebook_link" value="<?php echo $homepage_section5_facebook_link; ?>" style="width:680px;" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Twitter Link</td>
        <td>
        	<input type="text" name="homepage_section5_twitter_link" id="homepage_section5_twitter_link" value="<?php echo $homepage_section5_twitter_link; ?>" style="width:680px;" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Google Plus Link</td>
        <td>
        	<input type="text" name="homepage_section5_google_link" id="homepage_section5_google_link" value="<?php echo $homepage_section5_google_link; ?>" style="width:680px;" />
        </td>
      </tr>
    </table>	
<?php
}

function homepage_section_6(){
	global $post;
	
	$homepage_section6_header 		= get_post_meta($post->ID, "homepage_section6_header", true);
	$homepage_section6_subheader 	= get_post_meta($post->ID, "homepage_section6_subheader", true);
	$homepage_section6_content 		= get_post_meta($post->ID, "homepage_section6_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="homepage_section6_header" id="homepage_section6_header" value="<?php echo $homepage_section6_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="homepage_section6_subheader" id="homepage_section6_subheader" value="<?php echo $homepage_section6_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="homepage_section6_content" name="homepage_section6_content" style="width:100%; height:130px;"><?php if($homepage_section6_content != "") { echo $homepage_section6_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function homepage_section_7(){
	global $post;
	
	$homepage_section7_header 		= get_post_meta($post->ID, "homepage_section7_header", true);
	$homepage_section7_subheader 	= get_post_meta($post->ID, "homepage_section7_subheader", true);
	$homepage_section7_content 		= get_post_meta($post->ID, "homepage_section7_content", true);
	$homepage_section7_content2		= get_post_meta($post->ID, "homepage_section7_content2", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="homepage_section7_header" id="homepage_section7_header" value="<?php echo $homepage_section7_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="homepage_section7_subheader" id="homepage_section7_subheader" value="<?php echo $homepage_section7_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="homepage_section7_content" name="homepage_section7_content" style="width:100%; height:130px;"><?php if($homepage_section7_content != "") { echo $homepage_section7_content; } ?></textarea>
        </td>
      </tr>
      <tr>
      	<td width="20%">Content 2</td>
        <td><?php the_editor($shomepage_section7_content2, 'homepage_section7_content2'); ?>
        	<!--<textarea id="homepage_section7_content2" name="homepage_section7_content2" style="width:100%; height:130px;"><?php if($shomepage_section7_content2 != "") { echo $homepage_section7_content2; } ?></textarea>-->
        </td>
      </tr>
    </table>	
<?php
}

// Saving Home Page Data
add_action('save_post', 'save_homepage_data');
function save_homepage_data($post_id){
	global $post;
	
	// don't do on autosave or when new posts are first created
    if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) return $post_id;

	if(wp_is_post_revision($post_id)) return $post_id;
	
	if ( $_REQUEST['action'] == 'trash' || $_REQUEST['action'] == 'untrash') return $post_id;
	
    // abort if not my custom type
    if ( $post->post_name != 'home') return $post_id;
	
	if($post->post_name == 'home'){
		if(validateHomePageData()) {
			update_post_meta($post_id, "homepage_section1_header", $_POST["homepage_section1_header"]);
			update_post_meta($post_id, "homepage_section1_subheader", $_POST["homepage_section1_subheader"]);
			update_post_meta($post_id, "homepage_section1_content", $_POST["homepage_section1_content"]);
			
			update_post_meta($post_id, "homepage_section2_header", $_POST["homepage_section2_header"]);
			update_post_meta($post_id, "homepage_section2_subheader", $_POST["homepage_section2_subheader"]);
			update_post_meta($post_id, "homepage_section2_content", $_POST["homepage_section2_content"]);
			
			uploadAndSaveImage($post_id, $_FILES["homepage_section2_video"], false,0,0,"homepage_section2_video");
			
			update_post_meta($post_id, "homepage_section3_header", $_POST["homepage_section3_header"]);
			update_post_meta($post_id, "homepage_section3_subheader", $_POST["homepage_section3_subheader"]);
			update_post_meta($post_id, "homepage_section3_content", $_POST["homepage_section3_content"]);
			
			update_post_meta($post_id, "homepage_section4_header", $_POST["homepage_section4_header"]);
			update_post_meta($post_id, "homepage_section4_subheader", $_POST["homepage_section4_subheader"]);
			update_post_meta($post_id, "homepage_section4_content", $_POST["homepage_section4_content"]);
			
			update_post_meta($post_id, "homepage_section5_header", $_POST["homepage_section5_header"]);
			update_post_meta($post_id, "homepage_section5_subheader", $_POST["homepage_section5_subheader"]);
			update_post_meta($post_id, "homepage_section5_content", $_POST["homepage_section5_content"]);
			
			update_post_meta($post_id, "homepage_section5_facebook_link", $_POST["homepage_section5_facebook_link"]);
			update_post_meta($post_id, "homepage_section5_twitter_link", $_POST["homepage_section5_twitter_link"]);
			update_post_meta($post_id, "homepage_section5_google_link", $_POST["homepage_section5_google_link"]);
			
			update_post_meta($post_id, "homepage_section6_header", $_POST["homepage_section6_header"]);
			update_post_meta($post_id, "homepage_section6_subheader", $_POST["homepage_section6_subheader"]);
			update_post_meta($post_id, "homepage_section6_content", $_POST["homepage_section6_content"]);
			
			update_post_meta($post_id, "homepage_section7_header", $_POST["homepage_section7_header"]);
			update_post_meta($post_id, "homepage_section7_subheader", $_POST["homepage_section7_subheader"]);
			update_post_meta($post_id, "homepage_section7_content", $_POST["homepage_section7_content"]);
			update_post_meta($post_id, "homepage_section7_content2", $_POST["homepage_section7_content2"]);
			
		}
	}
	
}

function validateHomePageData() {
	global $post;
	global $wpdb;
	$isvalid = true;
	$invalid_image_size = false;
	$invalid_image = false;
	
	$isvalid = validateVideo("homepage_section2_video", $imgHeight, $imgWidth);
	
	return $isvalid;
}

function validateVideo($imageFile, $reqWidth="", $reqHeight="") {
	
	global $post;
	global $wpdb;
	$isvalid = true;
	$invalid_image_size = false;
	$invalid_image = false;
	
	//echo "<pre>"; var_dump($_FILES); die();
	
	$pageImage = ($_FILES[$imageFile]['name']);
	
	if($pageImage != "")
	{
		$allowedExtensions = array("mp4","MP4");
		$exts = end(explode(".", $_FILES[$imageFile]['name']));//explode(".", $_FILES['banner_image']['name']);
		//echo $exts; die();
		$fileExt = strtolower($exts);
		if(!in_array($fileExt,$allowedExtensions))
		{
			$invalid_image = true;
			$isvalid = false;
		}
		if(filesize($_FILES[$imageFile]['tmp_name']) > 4194304){
			$invalid_image_size = true;
			$isvalid = false;
		}
		//echo 'Invalid Image : '.$invalid_image."<br/>".'Invalid Image Size : '.$invalid_image_size."<br/>"; 
	}
	
		
	if ( ( isset( $_POST['publish'] ) || isset( $_POST['save'] ) ) && $_POST['post_status'] == 'publish' ) {
        //  don't allow publishing while any of these are incomplete
		if($invalid_image ) {
            $wpdb->update( $wpdb->posts, array( 'post_status' => 'pending' ), array( 'ID' => $post->ID ) );
            // filter the query URL to change the published message
			$errors .= "Invalid Video. Please upload .mp4 only.";
			update_option('my_admin_errors', $errors);
            //add_filter( 'redirect_post_location', create_function( '$location','return add_query_arg("message", "12", $location);' ) );
		}
		if($invalid_image_size ) {
			//echo $invalid_image_size."OK"; die();
            $wpdb->update( $wpdb->posts, array( 'post_status' => 'pending' ), array( 'ID' => $post->ID ), array('%s') );
            // filter the query URL to change the published message
			$errors .= "Invalid Video Size. Please upload video less than 4MB.";
			update_option('my_admin_errors', $errors);
            //add_filter( 'redirect_post_location', create_function( '$location','return add_query_arg("message", "11", $location);' ) );
		}
    }
	//echo 'Invalid Image : '.$isvalid; die();
	return $isvalid;
}

function uploadAndSaveImage($post_id, $imageFile, $createThumbnail = false, $thumbWidth = 0, $thumbHeight = 0, $imageFieldName = "", $imageCount = 0) {
	global $post;
	global $wpdb;
	
	if(!empty($imageFile['name'])) {
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		$override['action'] = 'editpost';
		$imageFile['name'] = str_replace(" ","-",$imageFile['name']);
		 
		$uploaded_file = wp_handle_upload($imageFile, $override);
		
		//echo '<pre>'; var_dump($uploaded_file); die();
		if(!isset($uploaded_file['error']) && $uploaded_file['error'] == "") {
			$post_id = $post->ID;
			$attachment = array(
			 'post_title' => $imageFile['name'],
			 'post_content' => '',
			 'post_type' => 'attachment',
			 'post_parent' => $post_id,
			 'post_mime_type' => $imageFile['type'],
			 'guid' => $uploaded_file['url']
			);
			 // Save the data
			$id = wp_insert_attachment( $attachment,$imageFile[ 'file' ], $post_id );
			wp_update_attachment_metadata( $id, wp_generate_attachment_metadata( $id, $imageFile['file'] ) );
			
			if($imageCount > 0 ) {
				$imageFieldName = $imageFieldName."_".$imageCount;
			}
			
			update_post_meta($post_id, $imageFieldName, $uploaded_file['url']);
			if($createThumbnail) {
				$thumb = generateThumbnails($uploaded_file['file'],$thumbWidth,$thumbHeight,false);
				//$filename = substr($imageFile['name'], -1 , 4);
				$thumName = "thumb_".$imageFieldName;
				update_post_meta($post_id, $thumName, $thumb);
			}
			
		} else {
			 global $wpdb;
			 $wpdb->update( $wpdb->posts, array( 'post_status' => 'pending' ), array( 'ID' => $post_id ) );
			 add_filter( 'redirect_post_location', create_function( '$location','return add_query_arg("message", "0", $location);' ) );
			 //echo "Ok"; die();
			 //$errors->add('oops', $uploaded_file['error']);
			 $errors .= $uploaded_file['error'];
			 update_option('my_admin_errors', $errors);
		 }
	}
}

// Meta tags for Services Pages
function services_banner_section(){
	global $post;
	
	$services_banner_section_header 	= get_post_meta($post->ID, "banner_section_header", true);
	$services_banner_section_content 	= get_post_meta($post->ID, "banner_section_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="banner_section_header" id="banner_section_header" value="<?php echo $services_banner_section_header; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="banner_section_content" name="banner_section_content" style="width:100%; height:130px;"><?php if($services_banner_section_content != "") { echo $services_banner_section_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function services_section_1(){
	global $post;
	
	$services_section1_header 		= get_post_meta($post->ID, "services_section1_header", true);
	$services_section1_subheader 	= get_post_meta($post->ID, "services_section1_subheader", true);
	$services_section1_content 		= get_post_meta($post->ID, "services_section1_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="services_section1_header" id="services_section1_header" value="<?php echo $services_section1_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="services_section1_subheader" id="services_section1_subheader" value="<?php echo $services_section1_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="services_section1_content" name="services_section1_content" style="width:100%; height:130px;"><?php if($services_section1_content != "") { echo $services_section1_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function services_section_2(){
	global $post;
	
	$services_section2_header 		= get_post_meta($post->ID, "services_section2_header", true);
	$services_section2_subheader 	= get_post_meta($post->ID, "services_section2_subheader", true);
	$services_section2_content 		= get_post_meta($post->ID, "services_section2_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="services_section2_header" id="services_section2_header" value="<?php echo $services_section2_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="services_section2_subheader" id="services_section2_subheader" value="<?php echo $services_section2_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="services_section2_content" name="services_section2_content" style="width:100%; height:130px;"><?php if($services_section2_content != "") { echo $services_section2_content; } ?></textarea>
        </td>
      </tr>
      
    </table>	
<?php
}

function services_section_3(){
	global $post;
	
	$services_section3_header 		= get_post_meta($post->ID, "services_section3_header", true);
	$services_section3_subheader 	= get_post_meta($post->ID, "services_section3_subheader", true);
	$services_section3_content 		= get_post_meta($post->ID, "services_section3_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="services_section3_header" id="services_section3_header" value="<?php echo $services_section3_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="services_section3_subheader" id="services_section3_subheader" value="<?php echo $services_section3_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="services_section3_content" name="services_section3_content" style="width:100%; height:130px;"><?php if($services_section3_content != "") { echo $services_section3_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function services_section_4(){
	global $post;
	
	$services_section4_header 		= get_post_meta($post->ID, "services_section4_header", true);
	$services_section4_subheader 	= get_post_meta($post->ID, "services_section4_subheader", true);
	$services_section4_content 		= get_post_meta($post->ID, "services_section4_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="services_section4_header" id="services_section4_header" value="<?php echo $services_section4_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="services_section4_subheader" id="services_section4_subheader" value="<?php echo $services_section4_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="services_section4_content" name="services_section4_content" style="width:100%; height:130px;"><?php if($services_section4_content != "") { echo $services_section4_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function services_section_5(){
	global $post;
	
	$services_section5_header 			= get_post_meta($post->ID, "services_section5_header", true);
	$services_section5_subheader 		= get_post_meta($post->ID, "services_section5_subheader", true);
	$services_section5_content 			= get_post_meta($post->ID, "services_section5_content", true);
	
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="services_section5_header" id="services_section5_header" value="<?php echo $services_section5_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="services_section5_subheader" id="services_section5_subheader" value="<?php echo $services_section5_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="services_section5_content" name="services_section5_content" style="width:100%; height:130px;"><?php if($services_section5_content != "") { echo $services_section5_content; } ?></textarea>
        </td>
      </tr>
      
    </table>	
<?php
}

function services_section_6(){
	global $post;
	
	$services_section6_header 		= get_post_meta($post->ID, "services_section6_header", true);
	$services_section6_subheader 	= get_post_meta($post->ID, "services_section6_subheader", true);
	$services_section6_content 		= get_post_meta($post->ID, "services_section6_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="services_section6_header" id="services_section6_header" value="<?php echo $services_section6_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="services_section6_subheader" id="services_section6_subheader" value="<?php echo $services_section6_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="services_section6_content" name="services_section6_content" style="width:100%; height:130px;"><?php if($services_section6_content != "") { echo $services_section6_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function services_section_7(){
	global $post;
	
	$services_section7_header 		= get_post_meta($post->ID, "services_section7_header", true);
	$services_section7_subheader 	= get_post_meta($post->ID, "services_section7_subheader", true);
	$services_section7_content 		= get_post_meta($post->ID, "services_section7_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="services_section7_header" id="services_section7_header" value="<?php echo $services_section7_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="services_section7_subheader" id="services_section7_subheader" value="<?php echo $services_section7_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="services_section7_content" name="services_section7_content" style="width:100%; height:130px;"><?php if($services_section7_content != "") { echo $services_section7_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function services_section_8(){
	global $post;
	
	$services_section8_header 		= get_post_meta($post->ID, "services_section8_header", true);
	$services_section8_subheader 	= get_post_meta($post->ID, "services_section8_subheader", true);
	$services_section8_content 		= get_post_meta($post->ID, "services_section8_content", true);
	$services_section8_content2 	= get_post_meta($post->ID, "services_section8_content2", true);
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="services_section8_header" id="services_section8_header" value="<?php echo $services_section8_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="services_section8_subheader" id="services_section8_subheader" value="<?php echo $services_section8_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content 1</td>
        <td>
        	<textarea id="services_section8_content" name="services_section8_content" style="width:100%; height:130px;"><?php if($services_section8_content != "") { echo $services_section8_content; } ?></textarea>
        </td>
      </tr>
      <tr>
      	<td width="20%">Content 2</td>
        <td><?php the_editor($services_section8_content2, 'services_section8_content2'); ?>
        	<!--<textarea id="txt_services_section8_content2" name="services_section8_content2" style="width:100%; height:130px;"><?php if($services_section8_content2 != "") { echo $services_section8_content2; } ?></textarea>-->
        </td>
      </tr>
    </table>	
<?php
}

// Saving Services Page Data
add_action('save_post', 'save_services_data');
function save_services_data($post_id){
	global $post;
	
	// don't do on autosave or when new posts are first created
    if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) return $post_id;

	if(wp_is_post_revision($post_id)) return $post_id;
	
	if ( $_REQUEST['action'] == 'trash' || $_REQUEST['action'] == 'untrash') return $post_id;
	
    // abort if not my custom type
    if ( $post->post_name != 'services') return $post_id;
	
	if($post->post_name == 'services'){
		//if(validateservicesData()) {
			
			update_post_meta($post_id, "banner_section_header", $_POST["banner_section_header"]);
			update_post_meta($post_id, "banner_section_content", $_POST["banner_section_content"]);
			
			update_post_meta($post_id, "services_section1_header", $_POST["services_section1_header"]);
			update_post_meta($post_id, "services_section1_subheader", $_POST["services_section1_subheader"]);
			update_post_meta($post_id, "services_section1_content", $_POST["services_section1_content"]);
			
			update_post_meta($post_id, "services_section2_header", $_POST["services_section2_header"]);
			update_post_meta($post_id, "services_section2_subheader", $_POST["services_section2_subheader"]);
			update_post_meta($post_id, "services_section2_content", $_POST["services_section2_content"]);
			
			uploadAndSaveImage($post_id, $_FILES["services_section2_video"], false,0,0,"services_section2_video");
			
			update_post_meta($post_id, "services_section3_header", $_POST["services_section3_header"]);
			update_post_meta($post_id, "services_section3_subheader", $_POST["services_section3_subheader"]);
			update_post_meta($post_id, "services_section3_content", $_POST["services_section3_content"]);
			
			update_post_meta($post_id, "services_section4_header", $_POST["services_section4_header"]);
			update_post_meta($post_id, "services_section4_subheader", $_POST["services_section4_subheader"]);
			update_post_meta($post_id, "services_section4_content", $_POST["services_section4_content"]);
			
			update_post_meta($post_id, "services_section5_header", $_POST["services_section5_header"]);
			update_post_meta($post_id, "services_section5_subheader", $_POST["services_section5_subheader"]);
			update_post_meta($post_id, "services_section5_content", $_POST["services_section5_content"]);
			
			update_post_meta($post_id, "services_section6_header", $_POST["services_section6_header"]);
			update_post_meta($post_id, "services_section6_subheader", $_POST["services_section6_subheader"]);
			update_post_meta($post_id, "services_section6_content", $_POST["services_section6_content"]);
			
			update_post_meta($post_id, "services_section7_header", $_POST["services_section7_header"]);
			update_post_meta($post_id, "services_section7_subheader", $_POST["services_section7_subheader"]);
			update_post_meta($post_id, "services_section7_content", $_POST["services_section7_content"]);
			
			update_post_meta($post_id, "services_section8_header", $_POST["services_section8_header"]);
			update_post_meta($post_id, "services_section8_subheader", $_POST["services_section8_subheader"]);
			update_post_meta($post_id, "services_section8_content", $_POST["services_section8_content"]);
			update_post_meta($post_id, "services_section8_content2", $_POST["services_section8_content2"]);
		//}
	}
	
}

// Meta tags for Contact Pages
function contact_banner_section(){
	global $post;
	
	$contact_banner_section_header 	= get_post_meta($post->ID, "banner_section_header", true);
	$contact_banner_section_content 	= get_post_meta($post->ID, "banner_section_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="banner_section_header" id="banner_section_header" value="<?php echo $contact_banner_section_header; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="banner_section_content" name="banner_section_content" style="width:100%; height:130px;"><?php if($contact_banner_section_content != "") { echo $contact_banner_section_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function contact_section_1(){
	global $post;
	
	$contact_section1_address 		= get_post_meta($post->ID, "contact_section1_address", true);
	$contact_section1_phone 	= get_post_meta($post->ID, "contact_section1_phone", true);
	$contact_section1_email 		= get_post_meta($post->ID, "contact_section1_email", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Address</td>
        <td>
        	<textarea name="contact_section1_address" id="contact_section1_address" style="width:100%; height:130px;" ><?php if($contact_section1_address != "") { echo $contact_section1_address; } ?></textarea>
        </td>
      </tr>
      <tr>
	 	<td width="20%">Phone</td>
        <td>
        	<input type="text" name="contact_section1_phone" id="contact_section1_phone" value="<?php echo $contact_section1_phone; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Email</td>
        <td>
        	<input type="text" id="contact_section1_email" name="contact_section1_email" value="<?php echo $contact_section1_email; ?>" />
        </td>
      </tr>
    </table>	
<?php
} 

// Saving Contact Page Data
add_action('save_post', 'save_contact_data');
function save_contact_data($post_id){
	global $post;
	
	// don't do on autosave or when new posts are first created
    if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) return $post_id;

	if(wp_is_post_revision($post_id)) return $post_id;
	
	if ( $_REQUEST['action'] == 'trash' || $_REQUEST['action'] == 'untrash') return $post_id;
	
    // abort if not my custom type
    if ( $post->post_name != 'contact-us') return $post_id;
	
	if($post->post_name == 'contact-us'){
		//if(validateservicesData()) {
			
			update_post_meta($post_id, "banner_section_header", $_POST["banner_section_header"]);
			update_post_meta($post_id, "banner_section_content", $_POST["banner_section_content"]);
			
			update_post_meta($post_id, "contact_section1_address", $_POST["contact_section1_address"]);
			update_post_meta($post_id, "contact_section1_phone", $_POST["contact_section1_phone"]);
			update_post_meta($post_id, "contact_section1_email", $_POST["contact_section1_email"]);
			
			
		//}
	}
	
}

// Meta tags for Pricing Pages
function pricing_banner_section(){
	global $post;
	
	$pricing_banner_section_header 	= get_post_meta($post->ID, "banner_section_header", true);
	$pricing_banner_section_content 	= get_post_meta($post->ID, "banner_section_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="banner_section_header" id="banner_section_header" value="<?php echo $pricing_banner_section_header; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="banner_section_content" name="banner_section_content" style="width:100%; height:130px;"><?php if($pricing_banner_section_content != "") { echo $pricing_banner_section_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function pricing_section_1(){
	global $post;
	
	$pricing_section1_header 		= get_post_meta($post->ID, "pricing_section1_header", true);
	$pricing_section1_content 		= get_post_meta($post->ID, "pricing_section1_content", true);
	
	?>
	<table width="100%">
      <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="pricing_section1_header" id="pricing_section1_header" value="<?php echo $pricing_section1_header; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<?php the_editor($pricing_section1_content, 'pricing_section1_content'); ?> 
        </td>
      </tr>
    </table>	
<?php
}

function pricing_section_2(){
	global $post;
	
	$pricing_section2_header 		= get_post_meta($post->ID, "pricing_section2_header", true);
	$pricing_sectio2_content 		= get_post_meta($post->ID, "pricing_section2_content", true);
	
	?>
	<table width="100%">
      <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="pricing_section2_header" id="pricing_section2_header" value="<?php echo $pricing_section2_header; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<?php the_editor($pricing_sectio2_content, 'pricing_section2_content'); ?> 
        </td>
      </tr>
    </table>	
<?php
}


// Saving Pricing Page Data
add_action('save_post', 'save_pricing_data');
function save_pricing_data($post_id){
	global $post;
	
	// don't do on autosave or when new posts are first created
    if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) return $post_id;

	if(wp_is_post_revision($post_id)) return $post_id;
	
	if ( $_REQUEST['action'] == 'trash' || $_REQUEST['action'] == 'untrash') return $post_id;
	
    // abort if not my custom type
    if ( $post->post_name != 'plans-pricing') return $post_id;
	
	if($post->post_name == 'plans-pricing'){
		//if(validateservicesData()) {
			
			update_post_meta($post_id, "banner_section_header", $_POST["banner_section_header"]);
			update_post_meta($post_id, "banner_section_content", $_POST["banner_section_content"]);
			
			update_post_meta($post_id, "pricing_section1_header", $_POST["pricing_section1_header"]);
			update_post_meta($post_id, "pricing_section1_content", $_POST["pricing_section1_content"]);
			
			update_post_meta($post_id, "pricing_section2_header", $_POST["pricing_section2_header"]);
			update_post_meta($post_id, "pricing_section2_content", $_POST["pricing_section2_content"]);
			
			
		//}
	}
	
}

// Meta tags for About Pages
function about_banner_section(){
	global $post;
	
	$about_banner_section_header 	= get_post_meta($post->ID, "banner_section_header", true);
	$about_banner_section_content 	= get_post_meta($post->ID, "banner_section_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="banner_section_header" id="banner_section_header" value="<?php echo $about_banner_section_header; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="banner_section_content" name="banner_section_content" style="width:100%; height:130px;"><?php if($about_banner_section_content != "") { echo $about_banner_section_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function about_section_1(){
	global $post;
	
	$about_section1_header 		= get_post_meta($post->ID, "about_section1_header", true);
	$about_section1_content 	= get_post_meta($post->ID, "about_section1_content", true);
	
	?>
	<table width="100%">
      <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="about_section1_header" id="about_section1_header" value="<?php echo $about_section1_header; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea name="about_section1_content" id="about_section1_content" style="width:100%; height:130px;" ><?php if($about_section1_content != "") { echo $about_section1_content; } ?></textarea>
        </td>
      </tr>
      
    </table>	
<?php
}

function about_member_details(){
	global $post;
	
	global $wpdb;
	
	
	$totalMembers = 0;
	$wpQuery = "SELECT meta_value FROM wp_postmeta WHERE meta_key = 'total_member' AND post_id = ".$post->ID;
	$totalMembersData = $wpdb->get_results($wpQuery, OBJECT);
	//echo "<pre>"; var_dump($totalMembersData); die();
	$totalMembers = $totalMembersData[0]->meta_value;
	
	$suffix = 1;
	?>
	<table width="100%">
		<tr>
		  	<td align="right"><input type="button" name="addImage" id="addImage" value="Add More" /></td>
		</tr>
		<tr>
			<td width="100%" id="tblAboutMemberDetails" >
				<?php if($totalMembers == 0) { ?>
				<table border="1" bordercolor="#efefef" width="100%" >
					<tr>
						<td width="20%">Name :</td>
						<td><input type="text" name="about_member_name[]" id="about_member_name_<?php echo $suffix; ?>" value="" /></td>
					</tr>
					<tr>
						<td width="20%">Designation :</td>
						<td><input type="text" name="about_member_designation[]" id="about_member_designation_<?php echo $suffix; ?>" value="" /></td>
					</tr>
					<tr>
						<td width="20%">Image :</td>
						<td><input type="file" name="about_member_image[]" id="about_member_image_<?php echo $suffix; ?>"  /></td>
					</tr>
					<tr>
						<td width="20%">Email :</td>
						<td><input type="text" name="about_member_email[]" id="about_member_email_<?php echo $suffix; ?>" value="" /></td>
					</tr>
					<tr>
						<td width="20%">Phone :</td>
						<td><input type="text" name="about_member_phone[]" id="about_member_phone_<?php echo $suffix; ?>" value="" /></td>
					</tr>
					<tr>
						<td width="20%">Description :</td>
						<td><textarea name="about_member_desc[]" id="about_member_desc_<?php echo $suffix; ?>" ></textarea> </td>
					</tr>
				</table>
				<?php } else {
				for($i=1; $i<=$totalMembers; $i++){ 
					$about_member_name = get_post_meta($post->ID, "about_member_name_".$i, true);
					$about_member_image = get_post_meta($post->ID, "about_member_image_".$i, true);
					$about_member_email = get_post_meta($post->ID, "about_member_email_".$i, true);
					$about_member_phone = get_post_meta($post->ID, "about_member_phone_".$i, true);
					$about_member_desc = get_post_meta($post->ID, "about_member_desc_".$i, true);	
					$about_member_designation = get_post_meta($post->ID, "about_member_designation_".$i, true);
					
				?>
				<table border="1" bordercolor="#efefef" width="100%">
					<tr>
						<td width="20%">Name :</td>
						<td><input type="text" name="about_member_name[]" id="about_member_name_<?php echo $suffix; ?>" value="<?php echo $about_member_name; ?>" /></td>
					</tr>
					<tr>
						<td width="20%">Designation :</td>
						<td><input type="text" name="about_member_designation[]" id="about_member_designation_<?php echo $suffix; ?>" value="<?php echo $about_member_designation; ?>" /></td>
					</tr>
					<tr>
						<td width="20%">Image :</td>
						<td><input type="file" name="about_member_image[]". id="about_member_image_<?php echo $suffix; ?>" />
							<?php if($about_member_image != ""){ ?> <img id="upload_image" src="<?php echo $about_member_image; ?>" align="right" width="100px;" style="padding-left:4px" /> <?php } ?>
						</td>
					</tr>
					<tr>
						<td width="20%">Email :</td>
						<td><input type="text" name="about_member_email[]" id="about_member_email_<?php echo $suffix; ?>" value="<?php echo $about_member_email; ?>" /></td>
					</tr>
					<tr>
						<td width="20%">Phone :</td>
						<td><input type="text" name="about_member_phone[]" id="about_member_phone_<?php echo $suffix; ?>" value="<?php echo $about_member_phone; ?>" /></td>
					</tr>
					<tr>
						<td width="20%">Description :</td>
						<td><textarea name="about_member_desc[]" id="about_member_desc_<?php echo $suffix; ?>" style="width:100%; height:130px;" ><?php echo $about_member_desc; ?></textarea> </td>
					</tr>
				</table>
				<?php	}
				} ?>
			</td>
		</tr>
			
	</table>
<?php 
}

function about_section_2(){
	global $post;
	
	$about_section2_header 		= get_post_meta($post->ID, "about_section2_header", true);
	$about_section2_subheader 	= get_post_meta($post->ID, "about_section2_subheader", true);
	$about_sectio2_content 		= get_post_meta($post->ID, "about_section2_content", true);
	
	
	?>
	<table width="100%">
		
      <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="about_section2_header" id="about_section2_header" value="<?php echo $about_section2_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="about_section2_subheader" id="about_section2_subheader" value="<?php echo $about_section2_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="about_section2_content" name="about_section2_content" style="width:100%; height:130px;"><?php if($about_sectio2_content != "") { echo $about_sectio2_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}


// Saving Pricing Page Data
add_action('save_post', 'save_about_data');
function save_about_data($post_id){
	global $post;
	
	//echo "<pre>"; var_dump($_POST); die();
	
	// don't do on autosave or when new posts are first created
    if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) return $post_id;

	if(wp_is_post_revision($post_id)) return $post_id;
	
	if ( $_REQUEST['action'] == 'trash' || $_REQUEST['action'] == 'untrash') return $post_id;
	
    // abort if not my custom type
    if ( $post->post_name != 'about-us') return $post_id;
	
	if($post->post_name == 'about-us'){
		//if(validateservicesData()) {
			
			update_post_meta($post_id, "banner_section_header", $_POST["banner_section_header"]);
			update_post_meta($post_id, "banner_section_content", $_POST["banner_section_content"]);
			
			update_post_meta($post_id, "about_section1_header", $_POST["about_section1_header"]);
			update_post_meta($post_id, "about_section1_content", $_POST["about_section1_content"]);
			
			update_post_meta($post_id, "about_section2_header", $_POST["about_section2_header"]);
			update_post_meta($post_id, "about_section2_subheader", $_POST["about_section2_subheader"]);
			update_post_meta($post_id, "about_section2_content", $_POST["about_section2_content"]);
			
			$memberCount = 0;
			if($_POST["about_member_name"]) {
				$count = 0;
				for($n=0; $n<count($_POST["about_member_name"]); $n++){
					$memberCount ++;
					$count++;
					$fieldName = "about_member_name_".$count;
					update_post_meta($post_id, $fieldName, $_POST["about_member_name"][$n]);
				}
			}
			update_post_meta($post_id, "total_member", $memberCount);
			if($_POST["about_member_designation"]) {
				$count = 0;
				for($n=0; $n<count($_POST["about_member_designation"]); $n++){
					$count ++;
					$fieldName = "about_member_designation_".$count;
					update_post_meta($post_id, $fieldName, $_POST["about_member_designation"][$n]);
				}
			}
			
			if($_POST["about_member_email"]) {
				$count = 0;
				for($n=0; $n<count($_POST["about_member_email"]); $n++){
					$count ++;
					$fieldName = "about_member_email_".$count;
					update_post_meta($post_id, $fieldName, $_POST["about_member_email"][$n]);
				}
			}
			
			if($_POST["about_member_phone"]) {
				$count = 0;
				for($n=0; $n<count($_POST["about_member_phone"]); $n++){
					$count ++;
					$fieldName = "about_member_phone_".$count;
					update_post_meta($post_id, $fieldName, $_POST["about_member_phone"][$n]);
				}
			}
			
			if($_POST["about_member_desc"]) {
				$count = 0;
				for($n=0; $n<count($_POST["about_member_desc"]); $n++){
					$count ++;
					$fieldName = "about_member_desc_".$count;
					update_post_meta($post_id, $fieldName, $_POST["about_member_desc"][$n]);
				}
			}
			if($_FILES['about_member_image']){
				$imageFileArray = prepareImageFileArray($_FILES['about_member_image']);
				//echo "<pre>"; var_dump($imageFileArray);
				if(!empty($imageFileArray)) {
					$imageCount = 0;
					foreach($imageFileArray as $imageFile) {
						$imageCount += 1 ;
						$fieldName = "about_member_image_".$imageCount;
						if(validateImage($imageFile, 300,300)){
							uploadAndSaveImage($post_id, $imageFile, false, 277, 277, "about_member_image", $imageCount);
						}
					}
					
				}
			}	
			
			
			
			
		//}
	}
	
}

function validateImage($imageFile, $reqWidth="", $reqHeight="") {
	
	global $post;
	global $wpdb;
	$isvalid = true;
	$invalid_image_size = false;
	$invalid_image = false;
	$noImage = false;
	
	
	$pageImage = ($imageFile['name']);
	$imageFieldName = str_replace("_", " ", $pageImage);
	$imageFieldName = ucwords($imageFieldName);
	
	if($pageImage != "")
	{
		$allowedExtensions = array("jpg","jpeg","gif","png","JPG","JPEG","GIF","PNG");
		$exts = end(explode(".", $imageFile['name']));//explode(".", $_FILES['banner_image']['name']);
		$fileExt = strtolower($exts);
		if(!in_array($fileExt,$allowedExtensions))
		{
			$invalid_image = true;
			$isvalid = false;
		}
		//echo 'Invalid Image : '.$invalid_image."<br/>".'isvalid : '.$isvalid."<br/>"; 
		list($width, $height) = getimagesize($imageFile['tmp_name']);//$attachments[0]->guid); 
		
		//echo $width."<br/>".$height;
		if($reqWidth != "" && $reqHeight != "" ) {
			if($width > $reqWidth || $height > $reqHeight)
			{
				$invalid_image_size = true;
				$isvalid = false;
			}
		}
		//echo 'Invalid Image : '.$invalid_image."<br/>".'Invalid Image Size : '.$invalid_image_size."<br/>"; 
	} else {
		$isvalid = false;
		$noImage = true;
	}
	
	//die();	
	//echo 'Invalid Image : '.$invalid_image."<br/>".'Invalid Image Size : '.$invalid_image_size."<br/>".'parent_missing : '.$parent_missing."<br/>"; die();
	if ( ( isset( $_POST['publish'] ) || isset( $_POST['save'] ) ) && $_POST['post_status'] == 'publish' ) {
        //  don't allow publishing while any of these are incomplete
		if($invalid_image ) {
            $wpdb->update( $wpdb->posts, array( 'post_status' => 'pending' ), array( 'ID' => $post->ID ) );
            // filter the query URL to change the published message
			$errors .= "Invalid Image for ".$imageFieldName;
			update_option('my_admin_errors', $errors);
            //add_filter( 'redirect_post_location', create_function( '$location','return add_query_arg("message", "12", $location);' ) );
		}
		if($invalid_image_size ) {
			//echo $invalid_image_size."OK"; die();
            $wpdb->update( $wpdb->posts, array( 'post_status' => 'pending' ), array( 'ID' => $post->ID ), array('%s') );
            // filter the query URL to change the published message
			$errors .= "Invalid Image Size for ".$imageFieldName;
			update_option('my_admin_errors', $errors);
            //add_filter( 'redirect_post_location', create_function( '$location','return add_query_arg("message", "11", $location);' ) );
		}
		
		/*if($noImage ) {
			//echo $invalid_image_size."OK"; die();
            $wpdb->update( $wpdb->posts, array( 'post_status' => 'pending' ), array( 'ID' => $post->ID ), array('%s') );
            // filter the query URL to change the published message
			$errors .= "Please upload an image for ".$imageFieldName;
			update_option('my_admin_errors', $errors);
            //add_filter( 'redirect_post_location', create_function( '$location','return add_query_arg("message", "11", $location);' ) );
		}*/
    }
	//echo 'Invalid Image : '.$isvalid; die();
	return $isvalid;
}


function prepareImageFileArray($inputImageArray) {
	$tempArray = array();
	$imagesArray = array();
	
	//echo "<pre>"; var_dump($propertyImageArray); die();
	
	$totalImageCount = count($inputImageArray['name']);
	
	for($i=0; $i<$totalImageCount; $i++) {
		$tempArray['name'] = $inputImageArray['name'][$i];
		$tempArray['type'] = $inputImageArray['type'][$i];
		$tempArray['tmp_name'] = $inputImageArray['tmp_name'][$i];
		$tempArray['error'] = $inputImageArray['error'][$i];
		$tempArray['size'] = $inputImageArray['size'][$i];
		
		$imagesArray[] = $tempArray;
	}
	
	return $imagesArray;
}

// Meta tags for Partners Pages
function partners_banner_section(){
	global $post;
	
	$partners_banner_section_header 	= get_post_meta($post->ID, "banner_section_header", true);
	$partners_banner_section_content 	= get_post_meta($post->ID, "banner_section_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="banner_section_header" id="banner_section_header" value="<?php echo $partners_banner_section_header; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="banner_section_content" name="banner_section_content" style="width:100%; height:130px;"><?php if($partners_banner_section_content != "") { echo $partners_banner_section_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function partners_section_1(){
	global $post;
	
	$partners_section1_header 		= get_post_meta($post->ID, "partners_section1_header", true);
	$partners_section1_content 	= get_post_meta($post->ID, "partners_section1_content", true);
	
	?>
	<table width="100%">
      <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="partners_section1_header" id="partners_section1_header" value="<?php echo $partners_section1_header; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea name="partners_section1_content" id="partners_section1_content" style="width:100%; height:130px;" ><?php if($partners_section1_content != "") { echo $partners_section1_content; } ?></textarea>
        </td>
      </tr>
      
    </table>	
<?php
}

function partners_details(){
	global $post;
	
	global $wpdb;
	
	
	$totalPartnersData = array();
	$wpQuery = "SELECT meta_value FROM wp_postmeta WHERE meta_key LIKE ('partners_image_%') AND post_id = ".$post->ID;
	$totalPartnersData = $wpdb->get_results($wpQuery, OBJECT);
	//echo "<pre>"; var_dump($totalPartnersData); die();
	$totalMembers = $totalPartnersData[0]->meta_value;
	
	$suffix = 1;
	?>
	<table width="100%">
		<tr>
		  	<td align="right"><input type="button" name="addPartnersImage" id="addPartnersImage" value="Add More" /></td>
		</tr>
		<tr>
			<td width="100%" id="tblPartnersDetails" >
				<?php if(count($totalPartnersData) == 0) { ?>
				<table border="1" bordercolor="#efefef" width="100%" >		
					<tr>
						<td width="20%">Image :</td>
						<td><input type="file" name="partners_image[]" id="partners_image_<?php echo $suffix; ?>"  /></td>
					</tr>
				</table>
				<?php } else {
				for($i=1; $i<=count($totalPartnersData); $i++){ 
					$partners_image = get_post_meta($post->ID, "partners_image_".$i, true);
				?>
				<table border="1" bordercolor="#efefef" width="100%">
					
					<tr>
						<td width="20%">Image :</td>
						<td><input type="file" name="partners_image_[]". id="partners_image_<?php echo $suffix; ?>" />
							<?php if($partners_image != ""){ ?> <img id="upload_image" src="<?php echo $partners_image; ?>" align="right" width="100px;" style="padding-left:4px" /> <?php } ?>
						</td>
					</tr>
					
				</table>
				<?php	}
				} ?>
			</td>
		</tr>
			
	</table>
<?php 
}

function partners_section_2(){
	global $post;
	
	$partners_section2_header 		= get_post_meta($post->ID, "partners_section2_header", true);
	$partners_section2_subheader 	= get_post_meta($post->ID, "partners_section2_subheader", true);
	$partners_sectio2_content 		= get_post_meta($post->ID, "partners_section2_content", true);
	
	
	?>
	<table width="100%">
		
      <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="partners_section2_header" id="partners_section2_header" value="<?php echo $partners_section2_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Sub Header</td>
        <td>
        	<input type="text" name="partners_section2_subheader" id="partners_section2_subheader" value="<?php echo $partners_section2_subheader; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="partners_section2_content" name="partners_section2_content" style="width:100%; height:130px;"><?php if($partners_sectio2_content != "") { echo $partners_sectio2_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}


// Saving Partners Page Data
add_action('save_post', 'save_partners_data');
function save_partners_data($post_id){
	global $post;
	
	//echo "<pre>"; var_dump($_POST); die();
	
	// don't do on autosave or when new posts are first created
    if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) return $post_id;

	if(wp_is_post_revision($post_id)) return $post_id;
	
	if ( $_REQUEST['action'] == 'trash' || $_REQUEST['action'] == 'untrash') return $post_id;
	
    // abort if not my custom type
    if ( $post->post_name != 'partners') return $post_id;
	
	if($post->post_name == 'partners'){
		//if(validateservicesData()) {
			
			update_post_meta($post_id, "banner_section_header", $_POST["banner_section_header"]);
			update_post_meta($post_id, "banner_section_content", $_POST["banner_section_content"]);
			
			update_post_meta($post_id, "partners_section1_header", $_POST["partners_section1_header"]);
			update_post_meta($post_id, "partners_section1_content", $_POST["partners_section1_content"]);
			
			update_post_meta($post_id, "partners_section2_header", $_POST["partners_section2_header"]);
			update_post_meta($post_id, "partners_section2_subheader", $_POST["partners_section2_subheader"]);
			update_post_meta($post_id, "partners_section2_content", $_POST["partners_section2_content"]);
			
			$memberCount = 0;
			
			
			if($_FILES['partners_image']){
				$imageFileArray = prepareImageFileArray($_FILES['partners_image']);
				//echo "<pre>"; var_dump($imageFileArray);
				if(!empty($imageFileArray)) {
					$imageCount = 0;
					foreach($imageFileArray as $imageFile) {
						$imageCount += 1 ;
						$fieldName = "partners_image_".$imageCount;
						if(validateImage($imageFile, 300,300)){
							uploadAndSaveImage($post_id, $imageFile, false, 277, 277, "partners_image", $imageCount);
						}
					}
					
				}
			}	
			
			
			
			
		//}
	}
	
}

// Meta tags for Signup Pages
function signup_banner_section(){
	global $post;
	
	$signup_banner_section_header 	= get_post_meta($post->ID, "banner_section_header", true);
	$signup_banner_section_content 	= get_post_meta($post->ID, "banner_section_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="banner_section_header" id="banner_section_header" value="<?php echo $signup_banner_section_header; ?>" />
        </td>
      </tr>
      <tr>
      	<td width="20%">Content</td>
        <td>
        	<textarea id="banner_section_content" name="banner_section_content" style="width:100%; height:130px;"><?php if($signup_banner_section_content != "") { echo $signup_banner_section_content; } ?></textarea>
        </td>
      </tr>
    </table>	
<?php
}

function signup_section_1(){
	global $post;
	
	$signup_section1_header 	= get_post_meta($post->ID, "signup_section1_header", true);
	$signup_section1_content 	= get_post_meta($post->ID, "signup_section1_content", true);
	
	?>
	<table width="100%">
	 <tr>
	 	<td width="20%">Header</td>
        <td>
        	<input type="text" name="signup_section1_header" id="signup_section1_header" value="<?php echo $signup_section1_header; ?>" />
        </td>
      </tr>
      <tr>
	 	<td width="20%">Content</td>
	 	<td>
        	<textarea name="signup_section1_content" id="signup_section1_content" style="width:100%; height:130px;" ><?php if($signup_section1_content != "") { echo $signup_section1_content; } ?></textarea>
        </td>
        
      </tr>
      
    </table>	
<?php
} 

// Saving Contact Page Data
add_action('save_post', 'save_signup_data');
function save_signup_data($post_id){
	global $post;
	
	// don't do on autosave or when new posts are first created
    if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )) return $post_id;

	if(wp_is_post_revision($post_id)) return $post_id;
	
	if ( $_REQUEST['action'] == 'trash' || $_REQUEST['action'] == 'untrash') return $post_id;
	
    // abort if not my custom type
    if ( $post->post_name != 'sign-up') return $post_id;
	
	if($post->post_name == 'sign-up'){
		//if(validateservicesData()) {
			
			update_post_meta($post_id, "banner_section_header", $_POST["banner_section_header"]);
			update_post_meta($post_id, "banner_section_content", $_POST["banner_section_content"]);
			
			update_post_meta($post_id, "signup_section1_header", $_POST["signup_section1_header"]);
			update_post_meta($post_id, "signup_section1_content", $_POST["signup_section1_content"]);
			
			
		//}
	}
	
}

///Subscriber Custom Post
add_action('init', 'subscriber_register');
 
function subscriber_register() {
 
	$labels = array(
		'name' => _x('Subscriber', 'post type general name'),
		'singular_name' => _x('Subscriber', 'post type singular name'),
		'view_item' => __('View Subscriber'),
		'search_items' => __('Search Subscriber'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/image/subscriber.png',
		'hierarchical' => true,
		'rewrite' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title')
	  ); 
 
	register_post_type( 'subscriber' , $args );
}

function disable_new_posts() {
	// Hide sidebar link
	global $submenu;
	unset($submenu['edit.php?post_type=subscriber'][10]);
	
	// Hide link on listing page
	if (isset($_GET['post_type']) && $_GET['post_type'] == 'subscriber') {
	    echo '<style type="text/css">
	    #favorite-actions, .add-new-h2, .tablenav { display:none; }
	    </style>';
	}
	
	unset($submenu['edit.php?post_type=contact_request'][10]);
	
	// Hide link on listing page
	if (isset($_GET['post_type']) && $_GET['post_type'] == 'contact_request') {
	    echo '<style type="text/css">
	    #favorite-actions, .add-new-h2, .tablenav { display:none; }
	    </style>';
	}
}
add_action('admin_menu', 'disable_new_posts');

add_filter('manage_subscriber_posts_columns', 'subscriber_table_head');
function subscriber_table_head( $defaults ) {
    $defaults['email_phone_city']  = 'Contact Info';
    $defaults['business_url']    = 'Business URL';
    $defaults['internet_service']   = 'Internet Services';
    return $defaults;
}

add_action( 'manage_subscriber_posts_custom_column', 'subscriber_table_content', 10, 2 );
function subscriber_table_content( $column_name, $post_id ) {
    if ($column_name == 'email_phone_city') {
    	$email = get_post_meta( $post_id, 'email', true );
		$phone = get_post_meta( $post_id, 'phone', true );
		$city = get_post_meta( $post_id, 'city', true );
      echo  $email."<br/>".$phone."<br/>".$city;
    }
    if ($column_name == 'business_url') {
    $businessUrl = get_post_meta( $post_id, 'business_url', true );
    echo $businessUrl;
    }

    if ($column_name == 'internet_service') {
    	echo get_post_meta( $post_id, 'internet_service', true );
    }

}

///Contact Us Custom Post
add_action('init', 'contact_register');
 
function contact_register() {
 
	$labels = array(
		'name' => _x('Contact Request', 'post type general name'),
		'singular_name' => _x('Contact Request', 'post type singular name'),
		'view_item' => __('View Contact Request'),
		'search_items' => __('Search Contact Request'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => get_stylesheet_directory_uri() . '/image/contact_request.png',
		'hierarchical' => true,
		'rewrite' => false,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor')
	  ); 
 
	register_post_type( 'contact_request' , $args );
}

add_filter('manage_contact_request_posts_columns', 'contact_request_table_head');
function contact_request_table_head( $defaults ) {
    $defaults['email']  	= 'Email';
    $defaults['phone']    	= 'Phone';
    $defaults['subject']   	= 'Subject';
    return $defaults;
}

add_action( 'manage_contact_request_posts_custom_column', 'contact_request_table_content', 10, 2 );
function contact_request_table_content( $column_name, $post_id ) {
    if ($column_name == 'email') {
    	$email = get_post_meta( $post_id, 'email', true );
		$password = get_post_meta( $post_id, 'password', true );
      	echo  $email."<br/>".$password;
    }
    if ($column_name == 'phone') {
    $phone = get_post_meta( $post_id, 'phone', true );
    echo $phone;
    }

    if ($column_name == 'subject') {
    	echo get_post_meta( $post_id, 'subject', true );
    }

}

function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

?>