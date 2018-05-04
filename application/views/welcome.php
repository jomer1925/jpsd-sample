<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<title>MyPortal</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="assets/fonts/Bebas/stylesheet.css">
		<link rel="stylesheet" href="assets/fonts/HelveticaNeue/font.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- Important Owl stylesheet -->
		<link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.theme.css">
		<!-- Color box-->
		<link rel="stylesheet" href="assets/css/colorbox.css" />
		<!-- responsive tabs -->
		<link type="text/css" rel="stylesheet" href="assets/css/responsive-tabs.css" />
		<!-- home slider-->
		<link href="assets/css/pgwslider.css" rel="stylesheet">
		<link href="assets/style.css" rel="stylesheet" media="screen">	
		<link href="assets/responsive.css" rel="stylesheet" media="screen">	
		<link href="assets/css/modal.css" rel="stylesheet" media="screen">	  
	</head>
	<body>
		
		<!-- facebook javascript code-->
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=549094108454486";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
		
		<!-- facebook javascript code-->
		<?php $this->load->view('Temp_welcome/header'); ?>
		 <!-- End header area-->
		


		<div class="fix main_content_area">
			<div class="fix centre main_content">
				<div class="fix home_content floatleft">
				
				
					<?php $this->load->view('Temp_welcome/slide'); ?>
					
					<?php $this->load->view('Temp_welcome/latestuploaded'); ?>
					
					<?php $this->load->view('Temp_welcome/hot'); ?>
					

					<div class="fix single_home_blog_content">
						<div class="fix single_blog_content_container">
							<h2><i class="fa fa-hand-o-down"></i> From Blog <a href="" class="floatright">See all <i class="fa fa-angle-double-right"></i></a></h2>
							<div class="fix single_blog_content floatleft">
								<div class="single_blog_content_img">
									<a href=""><img src="assets/images/ex/blog_content.jpg"/></a>
								</div>
								<h2><a href="single-androidnews.html">This is title example</a></h2>
								<p><span class="floatleft"><i class="fa fa-clock-o"></i> 20 sep 2014</span> <span class="floatright"><i class="fa fa-eye"></i> 2135 views</span></p>
							</div>
							<div class="fix single_blog_content floatleft">
								<div class="single_blog_content_img">
									<a href=""><img src="assets/images/ex/blog_content.jpg"/></a>
								</div>
								<h2><a href="single-androidnews.html">This is title example</a></h2>
								<p><span class="floatleft"><i class="fa fa-clock-o"></i> 20 sep 2014</span> <span class="floatright"><i class="fa fa-eye"></i> 2135 views</span></p>
							</div>
							<div class="fix single_blog_content floatleft">
								<div class="single_blog_content_img">
									<a href=""><img src="assets/images/ex/blog_content.jpg"/></a>
								</div>
								<h2><a href="single-androidnews.html">This is title example</a></h2>
								<p><span class="floatleft"><i class="fa fa-clock-o"></i> 20 sep 2014</span> <span class="floatright"><i class="fa fa-eye"></i> 2135 views</span></p>
							</div>

						</div>
					</div>
				</div> <!-- End home content-->
				<div class="fix home_content_sidebar floatright">
				
					<div class="home_single_sidebar">
						<h2><i class="fa fa-bars"></i> Categories</h2>

						<div class="home_sidebar_apps">
							<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Open Modal</button>
						</div>

					</div>
					<?php $this->load->view('Temp_welcome/topnews'); ?>
				</div> <!-- End home sidebar-->
			</div>
		</div> <!-- End main content-->
		<div class="fix footer_top_area">
			<div class="fix centre footer_top">
				<div class="fix single_footer_top_container">
					<div class="fix single_footer_top floatleft">
						<h2>Subscribe us</h2>
						<p id="subscribe-text">Run your ad on our pay per click advertising network
						and start receiving new targeted</p>
						<form>
							<p id="subscribe-email"><input type="text" id="subscribe-field" placeholder="Email Address"/></p>
							<p id="subscribe-submit"><input type="submit" value="Submit"/></p>
						</form>
					</div>
					<div class="fix single_footer_top floatleft">
						<h2>Text widget</h2>
						<p>Run your ad on our pay per click advertising network
						and start receiving new targeted</p>
						<p>Run your ad on our pay per click advertising network
						and start receiving new targeted and easy-to-convert
						prospects in less than 10 minutes:</p>
					</div>
					<div class="fix single_footer_top floatleft">
						<h2>Twitter widget</h2>
						<p>Run your ad on our pay per click advertising network
						and start receiving new targeted</p>
						<p>Run your ad on our pay per click advertising network
						and start receiving new targeted and easy-to-convert
						prospects in less than 10 minutes:</p>
					</div>
					<div class="fix single_footer_top floatleft">
						<h2>Twitter widget</h2>
						<p>Run your ad on our pay per click advertising network
						and start receiving new targeted</p>
						<p>Run your ad on our pay per click advertising network
						and start receiving new targeted and easy-to-convert
						prospects in less than 10 minutes:</p>
				</div>
			</div> 
			</div>
		</div><!-- End footer top area-->
		<div class="fix footer_bottom_area">
			<div class="fix centre footer_bottom">
				<div class="fix copyright floatleft">
					<p>Designed by JPSD</p>
				</div>
				<div class="fix footer_menu floatright">
					<ul>
						<li><a href="welcome.html">Home</a></li>
						<li><a href="page.html">About</a></li>
						<li><a href="androidnews.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
		</div> <!-- End footer bottom area-->

		<!-- Start : Load Modal-->
		<?php $this->load->view('Temp_welcome/modal'); ?>
		<!-- Start : Load Modal-->
		
		<script src="http://code.jquery.com/jquery.js"></script>

		<script src="assets/js/pgwslider.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.pgwSlider').pgwSlider();
			});
		</script>
		<script type="text/javascript" src="assets/js/selectnav.min.js"></script>
		<script type="text/javascript">
			selectnav('nav', {
			  label: '-Navigation-',
			  nested: true,
			  indent: '-'
			});
		</script>	
		
		<!-- Include owl js plugin -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			 
			$("#owl-example").owlCarousel({
			
			items : 4,
			itemsCustom : false,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [980,3],
			itemsTablet: [768,2],
			itemsTabletSmall: false,
			itemsMobile : [479,1],
			singleItem : false,
			itemsScaleUp : false,
			navigation : true,
			navigationText : ["prev","next"],
			pagination : false
			
			});
			 
			});
		</script>
		
    <!-- Responsive Tabs JS -->
    <script src="assets/js/jquery.responsiveTabs.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').responsiveTabs({
                rotate: false,
                startCollapsed: 'accordion',
                collapsible: 'accordion',
                setHash: true,
                disabled: [4,5]
            });



        });
    </script>
	<script type="text/javascript">
		$('#report_link').click(function(){
		  $('#report').slideToggle('normal');
		});
		
		$('#report_link').click(function(){
		  $('#older_versions').hide('normal');
		});
		
		$('#older_version').click(function(){
		  $('#older_versions').slideToggle('normal');
		});
		
		$('#older_version').click(function(){
		  $('#report').hide('normal');
		});
		
	</script>
	
		<script src="assets/js/jquery.colorbox.js"></script>
	<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>

	</body>
</html>
