
<section class="twite-line position">
	<div class="container">
    	<p><span><img class="tiet" src="<?php echo get_template_directory_uri(); ?>/image/shortcut.png"></span> AtmosFi is dedicated to client support and our technical staff can be reached directly.
</p>
    </div>
</section>



<div class="clear"></div>


<section class="touch position">
	<div class="container">
    	<div class="col-lg-6 col-md-6 col-sm-6">
        	<h4 style="color: #FFF !important;">Get in touch</h4>
           
           <div id="horizontalTab">
        <ul class="social-tab">
            <li><a href="#tab-1"><i class="fa fa-phone fa-2x"></i></a><span class="down-arrow"></span></li>
            <li><a href="#tab-2"><i class="fa fa-envelope fa-2x"></i></a><span class="down-arrow"></span></li>
            <li><a href="#tab-3"><i class="fa fa-home fa-2x"></i></a><span class="down-arrow"></span></li>
           
        </ul>

        <div id="tab-1">
            <p><span class="small-icon"><i class="fa fa-phone"></i></span> (215) 867-9619</p>
        </div>
        <div id="tab-2">
            <p><span class="small-icon"><i class="fa fa-envelope"></i></span>contact@atmosfi.net</p>
            
            
        </div>
        <div id="tab-3">
            <p><span class="small-icon"><i class="fa fa-home"></i></span>AtmosFi - 3222 Tillman Drive, Suite 504, Bensalem PA 19020</p>
        </div>
        
       </div>
        

    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-6 extra-padding">
    	<h4>Get started with a Free Trial</h4>
        <p>Sign Up Now</p>
        <p><input type="text" class="text" placeholder="Please enter your email.." /><input type="submit" value="SIGN UP"  class="send" />
        </p>
        
    
    </div>
           
    </div>

</section>

<div class="clear"></div>

<footer class="footer position">
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
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.responsiveTabs.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>

<script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                disabled: [3,4],
                activate: function(e, tab) {
                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                },
                activateState: function(e, state) {
                    //console.log(state);
                    $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
                }
            });

            $('#start-rotation').on('click', function() {
                $('#horizontalTab').responsiveTabs('startRotation', 1000);
            });
            $('#stop-rotation').on('click', function() {
                $('#horizontalTab').responsiveTabs('stopRotation');
            });
            $('#start-rotation').on('click', function() {
                $('#horizontalTab').responsiveTabs('active');
            });
            $('.select-tab').on('click', function() {
                $('#horizontalTab').responsiveTabs('activate', $(this).val());
            });

        });
    </script>
<script>
   new WOW().init();
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
		
		$(".inner-toggle").click(function(){
			$(".tagg-menu").fadeToggle("slow");
   
		});

    });
	
</script>


</body>
</html>