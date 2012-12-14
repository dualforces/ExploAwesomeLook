<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php //print $rdf_namespaces; ?>>
<head profile="<?php print $grddl_profile; ?>">
  <?php print $head; ?>
	<title><?php print $head_title; ?></title>
	
	<script type="text/javascript" src="//use.typekit.net/vgg6rxf.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<!-- <link rel="stylesheet" type="text/css" href="/experiments/social-river2/inc/layout.css" media="all" /> -->
	<link rel="stylesheet" type="text/css" href="/experiments/social-river2/css/dcsns_wall-explo.css" media="all" />
	<?php print $styles; ?>
  <?php print om_get_ie_styles(); ?>
	<?php print $scripts; ?>
	
	<script type="text/javascript" src="/experiments/social-river2/inc/js/jquery.plugins.js"></script>
	<script type="text/javascript" src="/experiments/social-river2/inc/js/jquery.site.js"></script>
	<script type="text/javascript" src="/experiments/social-river2/js/jquery.social.stream.wall.1.2.js"></script>
	<script type="text/javascript" src="/experiments/social-river2/js/jquery.social.stream.1.4.3.js"></script>
	
	
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
						out: 'intro,thumb,text,user,share,meta',
						accessToken: '186786085.91dbf99.da4d8fab71544cdba8645bd0a02f07a1',
						clientId: 'af91eaaf1de744d68a1207260e4b8417',
						comments: 3,
						likes: 10
					},
			

							
					facebook: {
						id: '22991781232'
					},
					tumblr: {
						id: 'exploratorium,explodingtorium,illusionsongs,1afterimage2',
						intro: 'Posted',
						out: 'intro,title,text,user,share',
						thumb: 400,
						video: 400,
						icon: 'tumblr.png'
					},
					youtube: {
							id: 'exploratorium',
							intro: 'Uploaded,Favorite,New Video',
							search: 'Search',
							out: 'intro,thumb,title,text,user,share',
							feed: 'uploads,favorites,newsubscriptionvideos',
							thumb: 'default',
							icon: 'youtube.png'
						},
												
			
			
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
 
		  <div id="container"> 
		  <!-- Begin Question Block -->

 
	
	
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
	
	
	
	
	
	<?php //print render(drupal_get_form('search_block_form')); ?>
	
	
	
</body>
</html>
