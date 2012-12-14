<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php //print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
	<title><?php print $head_title; ?></title>
	
	<script type="text/javascript" src="//use.typekit.net/vgg6rxf.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<!-- <link rel="stylesheet" type="text/css" href="/experiments/social-river2/inc/layout.css" media="all" /> -->
	<link rel="stylesheet" type="text/css" href="/experiments/social-river2/css/dcsns_wall-explo.new.css" media="all" />
	<?php print $styles; ?>
  <?php print om_get_ie_styles(); ?>
	<?php print $scripts; ?>
	
	<script type="text/javascript" src="/experiments/social-river2/inc/js/jquery.plugins.js"></script>
	<script type="text/javascript" src="/experiments/social-river2/inc/js/jquery.site.js"></script>
	<script type="text/javascript" src="/experiments/social-river2/js/jquery.social.stream.wall.1.2.js"></script>
	<script type="text/javascript" src="/experiments/social-river2/js/jquery.social.stream.1.4.3.explo.js"></script>
	
   <script>
	   
	$(window).resize(function() {
	    $(".navPodSpecial > .innerLabelSpecial ").animate({
				
			opacity: '1'
					   
		}, 1, function() {
			// Animation complete.
			//alert($(this).parent().html())
			//alert($(this).parent().children(".podImage").height())
			var imageHeight =  $(this).parent().children(".podImage").height(); 
			$(this).css('top', imageHeight-70);
		});
	});
	
	
	
	
	
     $(document).ready(function(){
			 
		// FIX FOR LEFT NAV ACTIVE STATES 
		 
		 $('ul.exploMenuUL > li > ul.exploMenuUL > li > ul > li.active-trail').parent().parent().find('a').removeClass('active-trail');
		  
		
			 
		//alert('podImage height = ' + $(".navPodSpecial .podImage > img").height())
			  $(".navPodSpecial").find(".innerLabelSpecial").css('top', $(".navPodSpecial .podImage > img").height());
			  $(".navPodSpecial").css('height', $(".navPodSpecial .podImage > img").height()+70);
		//alert($(".navPodSpecial > .innerLabelSpecial"));	
	    $(".navPodSpecial").animate({
				
			opacity: '1'
					    
		}, 1, function() {
			
			// Animation complete.
			//alert($(this).parent().html())
			//alert($(this).parent().children(".podImage").height())
				
						// 
						// alert(imageHeight);
						// alert($(this).find(".innerLabelSpecial").css('top'));
						// 	
						// $(this).find(".innerLabelSpecial").css('top', imageHeight-70);
						// alert($(this).find(".innerLabelSpecial").css('top'));
			// $(this).css('height', imageHeight-70)
		});
			 
			 
			
			 
			 
			 
		 $('.navPodSpecial').hover(
				 
		  function () {
			  var imageHeight =  $(this).find(".podImage > img").height(); 
			//  alert("imageHeight= " + imageHeight)
			// var imageHeight =  $(this).children(".podImage").height() - 130; 
				// var imageHeight =  $(this).children(".podImage").height() - 70; 
				// 					var innerLabelInitTop = imageHeight - 70;
				// 					$(this).children(".innerLabelSpecial").css("top", innerLabelInitTop)
				 
				var slideToPos = imageHeight+40;
			// $(this).children(".innerLabel").css("height", 200); 
			// alert( $(this).find(".innerLabelSpecial").html());
		    $(this).find(".innerLabelSpecial").animate({
				
				top: '-=60'
					   
			}, 300, function() {
				// Animation complete.
				//alert(slideToPos);
				//alert("nav pod special post hover anim");
				//alert($(this).find("div.innerLabelSpecial > h2").html());
			})
		  }, 
		  function () {
			//  alert('out')
		//	var imageHeight =  $(this).children(".podImage").height() - 130; 
		//	$(this).children(".innerLabelSpecial").css('top', imageHeight);
		    $(this).children(".innerLabelSpecial").animate({
  					
				top: '+=60'
					   
			}, 300, function() {
				// Animation complete.
			});
			    
		  })
     });
   </script>
	<script>

    $(document).ready(function(){
		 
	   //alert($('exploMenuUL > li.active-trail > ul.exploMenuUL > li.active-trail').parent().html());
	  // $('exploMenuUL > li.active-trail > ul.exploMenuUL > li.active-trail').parent().css("background-color" ,"red");
	   // alert('doc ready')
	   //       	    $(".navPodSpecial > .innerLabelSpecial ").animate({
	   // 				
	   //       			opacity: '1'
	   // 					   
	   //       		}, 1, function() {
	   //       			// Animation complete.
	   //       			//alert($(this).parent().html())
	   //       			//alert($(this).parent().children(".podImage").height())
	   //       			var imageHeight =  $(this).parent().children(".podImage").height(); 
	   //       			$(this).css('top', imageHeight-70);
	   //       		});
			
	});	 
	
	
	</script>
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->	
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>


	
	
	<div id="skip-link">
		<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
	</div>
	
	
	
	
	<?php print $page_top; ?>
	
	
	<?
	
	if(drupal_is_front_page()){
		?>




		
		<div id="whiteMenuBG"></div>
		<!-- <form action="/" method="post" id="search-block-form" accept-charset="UTF-8"> -->



		<div class="megamenu_fixed"><!-- Begin Mega Menu Container -->


			<div id="exploLogo">
		
			</div>
	
    
		    <ul class="megamenu"><!-- Begin Mega Menu -->
       
    
    
		    	<!-- ++ Begin Visit ++ -->
		        <li><span class="drop "><a href="/visit/">VISIT</a></span><!-- Begin Item -->
       
        
		            <div class="megamenu_fullwidth" id="visitMega"><!-- Begin Item Container -->
            
                        
		                <div class="col_3" >
				
		                </div>
		                <div class="col_3">
							<h3>Visit Us</h3>
							<ul class="newmega-visit">
						
								<li><a href="/visit/opening" >Opening at Pier 15</a></li>
								<li><a href="/visit/new_location" >New Location</a></li>
								<li><a href="/visit/tickets" >Hours and Tickets</a></li>


								<li><a href="/visit/explore-museum" >Explore the Museum</a></li>
							</ul>	
					
		                </div>
		                <div class="col_4">
						
							<img src="/sites/default/files/dumb1.png" />
		                </div>
                
							<!-- <img id="megawell_visit" src="/sites/default/files/mega_images/fake_header1.jpg"  width="200" height="200"/>
										 -->	
     
            
		            </div><!-- End Item container -->
            
        
		        </li><!-- End Item -->
		
		
				<!-- ++ Begin Explore ++ -->
		        <li><span class="drop "><a href="/explore/">EXPLORE</a></span><!-- Begin Item -->
       
        
		            <div class="megamenu_fullwidth" id="visitMega"><!-- Begin Item Container -->
            
             
		                <div class="col_3">
							<h3>Explore</h3>
							<p>The Exploratorium has homes: one in San Francisco and another online. Here we offer 40,000 pages full of hands on activities	, online only exhibits and sites, articles, videos and more to explore. We're always open, and no one will know if you show up in your pajamas.</p>
		                </div>
		                <div class="col_4">	
							<img src="/sites/default/files/dumb2.png"  />
		                </div>
		              </div><!-- End Item container -->

		        </li><!-- End Item -->
    	
		
		
				<!-- ++ Begin Education ++ -->
		        <li><span class="drop "><a href="/visit/">EDUCATION</a></span><!-- Begin Item -->
       
        
		            <div class="megamenu_fullwidth" id="visitMega"><!-- Begin Item Container -->
            
		                <div class="col_3" >
				
		                </div>
		                <div class="col_3">
							<h3>Education</h3>
							<i>For Educators</i>
							<ul class="newmega-visit">
								<li><a href="/education/programs" >Professional Development Programs</a></li>
								<li><a href="/education/tools" >Tools for Teaching</a></li>
							</ul>
							<i>For Learners</i>
							<ul class="newmega-visit">
								<li><a href="/education/programs" >Community Programs</a></li>
								<li><a href="/education/tools" >Tools for Learning</a></li>
							</ul>	
							<i>For the Field</i>
							<ul class="newmega-visit">
								<li><a href="/education/advancing-ideas-about-learning" >Learning About Learning</a></li>

							</ul>
					
		                </div>
		                <div class="col_4">	
							<img src="/sites/default/files/dumb1.png" />
		                </div>
		              </div><!-- End Item container -->

		        </li><!-- End Item -->
		
				<!-- ++ Begin Collaborations ++ -->
		         <li><span class="drop "><a href="/visit/">COLLABORATIONS</a></span><!-- Begin Item -->
       
        
		            <div class="megamenu_fullwidth" id="visitMega"><!-- Begin Item Container -->
            
			
		                <div class="col_4">	
							<img src="/sites/default/files/dumb3.png" />
		                </div>
                
		                <div class="col_3 extrabumb">
							<h3>Collaboration</h3>
				
							<ul class="newmega-visit">
								<li><a href="/collaborations/building-worldwide-partnerships" >Our Global Reach</a></li>
								<li><a href="/collaborations/collaborating-science-agencies" >Partnering with Science Agencies</a></li>
								<li><a href="/collaborations/partnering-educational-institutions" >Partnering with Educational Institutions</a></li>
								<li><a href="/collaborations/partnering-cultural-and-corporate-leaders-aka-corporate-engagement" >Corporate Engagement</a></li>
								<li><a href="/collaborations/oshers" >Osher Fellows</a></li>
							</ul>
					
					
		                </div>
               
		              </div><!-- End Item container -->

		        </li><!-- End Item -->
		
		
		
		    	<!-- Begin Explore Item -->
		        <li><span class="nodrop"><input type="text" value="Search Me"/></span><!-- Begin Item -->
		        </li><!-- End Item -->
			</ul><!-- End Mega Menu -->


		</div><!-- End Mega Menu Container -->

	
	
	
	
		<!-- </form> -->


		<div class="megamenu_bar_wrapper">
			<div class="megamenu_bar">
				<div id="exploLogo">
					<a href="/"><img class="exploLogoImg" src="/sites/default/files/explo_logo_dec6.png" width="252" height="72" alt="Exploratorium Home"></a>
				</div>	
			</div>
		</div>
		
		
		
		
		
		


		<script type="text/javascript">
		jQuery(document).ready(function($){
			$('#social-stream').dcSocialStream({
				feeds: {
					twitter: {
						id: 'exploratorium',
						intro: 'Tweeted',
						out: 'intro,date,text,user,share'
					},
	
					// rss: {
					// 						id: 'http://explainers.wordpress.com/feed/, http://blogs.exploratorium.edu/fabricated-realities/feed/, http://blogs.exploratorium.edu/whyintercept/feed/, http://exs.exploratorium.edu/category/blog/feed/, http://blogs.exploratorium.edu/strange-attractor/feed/, http://blogs.exploratorium.edu/fluidplanet/feed/,http://blogs.exploratorium.edu/arts/feed/',
					// 						text: 'contentSnippet'
					// 					},
					// rss: {
					// 						id: 'http://blogs.exploratorium.edu/tinkering/feed/',
					// 						text: 'contentSnippet'
					// 					},
					// 			
					instagram: {
						id: '#exploratorium, @exploratorium',
						out: 'intro,thumb,text,user',
						accessToken: '186786085.91dbf99.da4d8fab71544cdba8645bd0a02f07a1',
						clientId: 'af91eaaf1de744d68a1207260e4b8417',
						comments: 3,
						likes: 10
					},
			

							
					facebook: {
						id: '22991781232',
						text: 'contentSnippet'
					},
					// tumblr: {
					// 						id: 'exploratorium,explodingtorium,illusionsongs,1afterimage2',
					// 						intro: 'Posted',
					// 						out: 'intro,title,text,user,share',
					// 						thumb: 400,
					// 						video: 400,
					// 						icon: 'tumblr.png'
					// 					},
					// youtube: {
					// 							id: 'exploratorium',
					// 							intro: 'Uploaded,Favorite,New Video',
					// 							search: 'Search',
					// 							out: 'intro,thumb,title,text,user,share',
					// 							feed: 'uploads,favorites,newsubscriptionvideos',
					// 							thumb: 'default',
					// 							icon: 'youtube.png'
					// 						},
												
			
			
				},
				rotate: {
					delay: 0
				},
				twitterId: 'exploratorium',
				control: false,
				filter: false,
				wall: true,
				order: 'date',
				max: 2,
				iconPath: '/experiments/social-river2/images/dcsns-dark/',
				imagePath: '/experiments/social-river2/images/dcsns-dark/'
			});
				 
		});
		</script>
		<style>
		#wall {
			margin-top: 20px;
			padding: 30px 0 0; min-height: 2000px;}
		</style>


		<!-- Begin Second Wrapper -->

	<div id="wrapper">
 
		
		  <!-- Begin Question Block -->
  		<div class="row homepageTop" style="width: 1140px">
  			<div class="span4 homeFeaturePod">
  				<img src="/sites/default/files/home1.jpg" />
  			</div>
  			<div class="span4 homeFeaturePod">
  				<img src="/sites/default/files/home2.jpg" />
  			</div>
  			<div class="span4">
  				<h1>The Exploratorium is a twenty-first century learning laboratory, an eye-opening, always-changing, playful place to explore and tinker. For more than forty years, we’ve built creative, thought-provoking exhibits, tools, programs, and experiences that ignite curiosity, encourage exploration, and lead to profound learning. Dive in and discover what we’re all about. </h1>
  			</div>
  		</div>
 	     <div id="container"> 
	
			 <h1>Dive Into the Social River</h1>
		<div id="wall">
			
			<div id="social-stream"></div>

		<div class="clear"></div>

		</div>

		</div>

		
		
		<?
		
	} else {
		 print $page; 
		
	}
	?>
	


<!-- PAGE BOTTOM  -->	
<?php print $page_bottom; ?>
	
	
	
</div>
	
	
	<?php //print render(drupal_get_form('search_block_form')); ?>
	
	
	
</body>
</html>
