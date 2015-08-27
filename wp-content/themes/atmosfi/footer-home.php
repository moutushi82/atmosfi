
<section class="sign-up">
	<div class="container">
    		<div class="sign">
            	<h1> Get started  with  a  Free Trial</h1>
                <h3>Sign Up Now</h3>
                 <img src="<?php echo get_template_directory_uri(); ?>/image/border-logo1.png" alt="" class="border-logo1" />
                 <div class="clear"></div>
                 <div class="col-sm-6 dd">
                 <p>AtmosFi collects customer contact information via WiFi interaction and uses this information to keep your customers coming back.</p>
                 </div>
                 
                 <div class="col-sm-6 dd">
                 	<form class="post">
                 	<input type="text" class="text" name="" placeholder="Please enter your email.." />
                    <input type="submit" value="Sign Up" name="send" class="send" />
                    </form>
                 </div>
            </div>
    </div>

</section>

<div class="clear"></div>

<footer class="footer">
	<a href="#index" class="second-arrow page-scroll wow flash" ><i class="fa fa-angle-double-up"></i></a>
		<img src="<?php echo get_template_directory_uri(); ?>/image/round.jpg" alt=""  class="round"/>
	<div class="container">
    
    	<div class="foot">
        	<div class="col-sm-6">
             <p>AtmosFi - 3222 Tillman Drive, Suite 504, Bensalem PA 19020</p>
             <p class="powerd"><a href="http://thethinkerz.com/" class="foot-logo"></a><span>powered by</span> </p>
            </div>
            
            <div class="col-sm-6">
            	<ul class="list-inline social">
                	<li><a href="https://www.facebook.com/pages/AtmosFi-Wi-Fi/1575654606015117?sk=timeline" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/facebook.png" alt="" /></a></li>
                    <li><a href=" https://twitter.com/AtmosFi_Wifi" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/twiter.png" alt="" /></a></li>
                    <li><a href=" https://plus.google.com/b/107404069253463963294/107404069253463963294/about" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/image/gplus.png" alt="" /></a></li>
                    <li>Call us at:<br /> (215) 867-9619</li>
                </ul>
            </div>
        
        </div>
    </div>

</footer>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->

<!--<script src="js/jquery-2.1.0.js"></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scrolling-nav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script>
   new WOW().init();
 </script>
<script>

   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height() - 70;
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('fixed');
			 }
			 else {
				 $('nav').removeClass('fixed');
			 }
		});
	});
</script>
<script>
$(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 1200,            // Integer: Speed of the transition, in milliseconds
  timeout: 7000,
});
</script>

<script>
	$(document).ready(function(e) {
        $(".toggle3").click(function(){
			$(".drop-menu").slideToggle();
		});
    });
</script>


</body>
</html>