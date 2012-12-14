<!-- Page.tpl.php BEGIN -->
<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

?>
<?php
if ($detect->isMobile()) {
    // Any mobile device.

	?>
	
	
	<a href="/">
			
	<!-- <img class="exploLogoImg" src="/sites/default/files/explo_logo.gif" width="260" height="73" alt="Exploratorium Home"> -->
		
	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="287.535px" height="80.747px" viewBox="0 0 287.535 80.747" enable-background="new 0 0 287.535 80.747"
		 xml:space="preserve">
	<path d="M155.107,36.476c1.087-0.923,2.266-1.658,4.821-1.911v4.345l-1.624,0.256c-2.363,0.415-3.068,0.765-3.068,2.866v9.384
		h-4.927V34.729h4.798V36.476z"/>
	<path d="M171.653,43.419c-0.032,1.726-0.095,3.268-1.724,4.292c-0.514,0.319-1.09,0.544-1.693,0.544
		c-1.148,0-1.854-0.893-1.854-1.693c0-1.283,1.271-1.758,2.107-2.082L171.653,43.419z M167.186,39.453
		c0.124-0.609,0.412-1.95,2.58-1.95c1.76,0,1.82,1.276,1.888,2.044v0.894c-2.074,0.384-5.236,0.969-6.579,1.54
		c-1.371,0.575-3.512,2.107-3.512,4.799c0,2.341,1.631,5.084,5.461,5.084c2.458,0,3.859-1.057,5.11-1.984v1.536h4.816
		c-0.379-0.573-0.476-0.833-0.476-2.623v-9.724c0-4.309-4.949-4.783-6.993-4.783c-1.949,0-3.928,0.25-5.465,1.467
		c-1.494,1.176-1.651,2.551-1.754,3.7H167.186z"/>
	<path d="M181.57,29.912h4.901v5.201h3.22v2.999h-3.25v7.489c-0.029,1.027-0.029,1.881,1.278,1.881l1.756-0.062v3.845
		c-1.053,0.165-1.695,0.254-2.59,0.254c-1.696,0-3.556-0.089-4.608-1.632c-0.677-0.989-0.707-2.177-0.707-3.772v-8.035h-2.428v-2.991
		h2.428V29.912z"/>
	<path d="M199.818,38.111c0.708-0.068,1.856-0.032,2.878,0.932c0.931,0.895,1.377,2.351,1.377,4.205c0,2.636-1.312,4.785-3.965,4.785
		c-2.751,0-4.028-2.343-4.028-5.009c0-1.16,0.223-2.312,0.833-3.276C197.581,38.689,198.415,38.208,199.818,38.111 M200.752,34.229
		c-6.388-0.35-9.599,3.687-9.599,8.823c0,6.19,4.259,8.86,8.955,8.86c6.519,0,8.946-4.613,8.946-8.86
		C209.055,40.003,207.555,34.609,200.752,34.229"/>
	<path d="M216.965,36.476c1.086-0.923,2.266-1.658,4.822-1.911v4.345l-1.63,0.256c-2.361,0.415-3.067,0.765-3.067,2.866v9.384h-4.927
		V34.729h4.802V36.476z"/>
	<path d="M224.253,28.853h4.873v3.767h-4.873V28.853z M224.253,34.729h4.873v16.687h-4.873V34.729z"/>
	<path d="M243.503,34.782h4.931v16.634h-4.931v-1.594c-0.478,0.538-0.772,0.857-1.669,1.325c-1,0.511-2.082,0.765-3.175,0.765
		c-1.083,0-3.083-0.157-4.225-1.753c-0.86-1.208-1.019-2.199-1.019-4.918V34.782h4.919v10.332c0,0.736,0,1.471,0.39,1.98
		c0.288,0.387,0.959,0.826,1.963,0.826c0.281,0,0.952,0,1.692-0.412c1.059-0.641,1.091-1.464,1.123-2.364V34.782z"/>
	<path d="M257.63,36.513c0.563-0.674,1.843-2.172,4.705-2.172c2.754,0,3.749,1.021,4.646,1.947c0.953-0.793,2.285-1.947,4.931-1.947
		c2.749,0,4.161,1.363,4.673,2.395c0.413,0.891,0.441,2.043,0.441,3.831v10.85h-4.859v-8.744c0-0.955,0-2.198-0.192-2.836
		c-0.445-1.404-1.749-1.506-2.136-1.506c-0.476,0-1.109,0.129-1.583,0.514c-0.927,0.737-0.927,1.685-0.927,3.506v9.066h-4.869v-9.862
		c0-0.731-0.029-1.718-0.472-2.36c-0.388-0.513-1.118-0.864-1.917-0.864c-0.383,0-0.883,0.102-1.333,0.385
		c-1.075,0.737-1.107,2.079-1.107,3.218v9.483h-4.875V34.782h4.875V36.513z"/>
	<path d="M5.017,40.999c0.165-0.705,0.323-1.468,0.991-2.199c0.475-0.504,1.31-1.08,2.484-1.08c0.867,0,1.79,0.32,2.398,0.922
		c0.702,0.73,0.826,1.651,0.923,2.356H5.017z M12.998,45.274c-0.607,1.2-1.531,2.98-4.214,2.98c-2.646,0-3.829-2.11-3.791-4.212
		h11.915c-0.068-1.879-0.195-5.113-2.371-7.434c-2.146-2.288-5.018-2.38-6.007-2.38c-6.562,0-8.53,5.145-8.53,9.146
		c0,5.514,3.46,8.649,8.404,8.649c2.679,0,4.852-1.014,6.292-2.344c0.861-0.792,1.441-1.615,2.017-2.495L12.998,45.274z"/>
	<polygon points="33.58,34.782 28.533,42.559 34.184,51.416 28.948,51.416 25.787,46.255 23.002,51.416 17.564,51.416 23.226,42.4 
		18.172,34.782 23.736,34.782 25.941,39.018 28.309,34.782 "/>
	<path d="M45.201,37.98c2.031,0.51,2.634,2.833,2.634,5.03c0,2.612-1.058,5.19-3.468,5.19c-0.803,0-1.643-0.347-2.223-0.951
		c-0.637-0.706-1.186-2.009-1.186-4.114c0-1.556,0.319-2.988,1.025-3.916c0.711-0.952,1.64-1.334,2.543-1.334
		C44.754,37.885,44.978,37.915,45.201,37.98 M40.606,34.782H36.26v22.398h4.925v-6.837c1.313,0.796,2.282,1.399,4.147,1.399
		c5.722,0,7.224-5.3,7.224-8.73c0-5.51-3.157-8.615-7.257-8.615c-1.862,0-3.373,0.673-4.208,1.476
		c-0.165,0.1-0.319,0.291-0.484,0.473V34.782z"/>
	<rect x="55.66" y="28.853" width="4.922" height="22.563"/>
	<path d="M105.401,80.747c22.258,0,40.372-18.103,40.372-40.371C145.773,18.114,127.66,0,105.401,0
		C83.13,0,65.021,18.114,65.021,40.376C65.021,62.645,83.13,80.747,105.401,80.747 M69.812,40.376
		c0-19.622,15.969-35.574,35.59-35.574c19.62,0,35.58,15.952,35.58,35.574s-15.96,35.582-35.58,35.582
		C85.78,75.958,69.812,59.998,69.812,40.376"/>
	<path d="M285.988,33.682c-1.031,1.035-2.277,1.552-3.741,1.552s-2.708-0.517-3.733-1.552c-1.022-1.029-1.532-2.277-1.532-3.744
		c0-1.45,0.516-2.69,1.546-3.722c1.025-1.023,2.266-1.537,3.72-1.537c1.464,0,2.71,0.513,3.741,1.537
		c1.03,1.025,1.547,2.267,1.547,3.722C287.535,31.399,287.019,32.647,285.988,33.682 M279.026,26.735
		c-0.884,0.887-1.324,1.958-1.324,3.21c0,1.265,0.438,2.342,1.316,3.232c0.884,0.891,1.956,1.335,3.219,1.335
		c1.262,0,2.335-0.444,3.218-1.335c0.884-0.89,1.324-1.967,1.324-3.232c0-1.253-0.44-2.323-1.324-3.21
		c-0.888-0.89-1.96-1.334-3.218-1.334C280.985,25.4,279.914,25.845,279.026,26.735 M282.152,27.031c0.719,0,1.247,0.07,1.584,0.208
		c0.598,0.249,0.898,0.739,0.898,1.469c0,0.518-0.189,0.9-0.567,1.145c-0.2,0.129-0.48,0.222-0.839,0.281
		c0.451,0.071,0.78,0.259,0.99,0.564c0.209,0.306,0.312,0.603,0.312,0.894v0.421c0,0.133,0.007,0.276,0.016,0.428
		c0.01,0.154,0.026,0.254,0.052,0.3l0.036,0.072h-0.962c-0.005-0.018-0.009-0.037-0.013-0.057c-0.008-0.019-0.011-0.041-0.017-0.064
		l-0.021-0.185v-0.458c0-0.664-0.184-1.104-0.547-1.317c-0.217-0.123-0.595-0.186-1.137-0.186h-0.806v2.265h-1.013v-5.783H282.152z
		 M283.252,27.965c-0.258-0.141-0.672-0.213-1.242-0.213h-0.876v2.076h0.927c0.436,0,0.76-0.043,0.978-0.127
		c0.4-0.158,0.602-0.457,0.602-0.897C283.64,28.386,283.51,28.106,283.252,27.965"/>
	</svg>
		
		
		
		
		
</a>
<style>
select {
    border: 0 none;
    color: #000000;
    background: transparent;
    font-size: 20px;
    font-weight: bold;
    padding: 2px 10px;
    width: 378px;
    width: 100%;
 /*   background: #000000;*/
    }


#mainselection {
    overflow: hidden;
    width: 100%;
	margin-top: 20px;
    -moz-border-radius: 6px 6px 6px 6px;
    -webkit-border-radius: 6px 6px 6px 6px;
    border-radius: 6px 6px 6px 6px;
    box-shadow: 1px 1px 11px #d7d7d7;
    background: url("arrow.gif") no-repeat scroll 319px 5px #ffffff;
    }
</style>

<div id="mainselection">
     <select>
     <option>Main Navigation</option>
     <option>VISIT</option>
		 <option class="mobileSubUL"> - Opening at Pier15</option>
		 <option class="mobileSubUL"> - Hours and Tickets</option>
		 <option class="mobileSubUL"> - New Location</option>
		 <option class="mobileSubUL"> - Calendar</option>
     <option>EXPLORE</option>
		 <option class="mobileSubUL"> - Opening at Pier15</option>
		 <option class="mobileSubUL"> - Hours and Tickets</option>
		 <option class="mobileSubUL"> - New Location</option>
		 <option class="mobileSubUL"> - Calendar</option>
     <option>EDUCATION</option>
		 <option class="mobileSubUL"> - Opening at Pier15</option>
		 <option class="mobileSubUL"> - Hours and Tickets</option>
		 <option class="mobileSubUL"> - New Location</option>
		 <option class="mobileSubUL"> - Calendar</option>
			 
     <option>COLLABORATIONS</option>
		 <option class="mobileSubUL"> - Opening at Pier15</option>
		 <option class="mobileSubUL"> - Hours and Tickets</option>
		 <option class="mobileSubUL"> - New Location</option>
		 <option class="mobileSubUL"> - Calendar</option>
     </select>
</div>




<!-- 	<select id="mobileUL" >
		<option>Main Navigation</option>
		<option>Visit</option>
		<option>Explore</option>
		<option>Education</option>
		<option>Collaboration</option>
	</select>	 -->
	<?

} else {
	
	?>
	

	<div id="whiteMenuBG"></div>
	<!-- <form action="/" method="post" id="search-block-form" accept-charset="UTF-8"> -->



	<div class="megamenu_fixed"><!-- Begin Mega Menu Container -->


		<div id="exploLogo">
		
		</div>
	
    
	    <ul class="megamenu"><!-- Begin Mega Menu -->
       
    
	
			<?
				
				
		$this_page = request_uri();

		//remove the first slash
		$this_page = substr($this_page, 1, strlen($this_page));
    
		// if the URL includes a query
		if(strpos($this_page, '?')!==0){
		  // break it up so it into path and query depending on the pos of the question mark
		  $query = substr(strstr($this_page, '?'), 1, strlen($this_page));
		  $this_page = substr($this_page, 0, strpos($this_page, '?'));
		}
		
		
			?>
    
	    	<!-- ++ Begin Visit ++ -->
	        <li><span class="drop "><a href="/visit/"><? echo($this_page);?> VISIT</a></span><!-- Begin Item -->
       
        
	            <div class="megamenu_fullwidth" id="visitMega"><!-- Begin Item Container -->
	            <div class="megamenu_fullwidth_coverup"></div>
                        
	                <div class="col_3" >
				
	                </div>
	                <div class="col_3">
						
						<? 
					if (request_uri() == "/visit") {
						?>		<h3><a href="/visit/" class="active-state">Visit Us ACTIVE</a></h3>	
						<?	} else {
						?>		<h3><a href="/visit/">Visit Us</a></h3>
						<?	}; ?>
						<ul class="newmega-subul ">
							<? if (request_uri() == "/visit/opening/") {
							?>		<li><a href="/visit/opening/" class="active-state">Opening at Pier 15</a></li>	
							<?	} else {
							?>		<li><a href="/visit/opening/" >Opening at Pier 15</a></li>
							<?	}; ?>
							
							<? if (request_uri() == "/visit/new_location") {
							?>		<li><a href="/visit/new_location" class="active-state" >New Location</a></li>	
							<?	} else {
							?>		<li><a href="/visit/new_location" >New Location</a></li>
							<?	}; ?>
							
							
							<? if (request_uri() == "/visit/tickets") {
							?>		<li><a href="/visit/tickets"  class="active-state">Hours and Tickets</a></li>	
							<?	} else {
							?>		<li><a href="/visit/tickets" >Hours and Tickets</a></li>
							<?	}; ?>
							
							
							<? if (request_uri() == "/visit/explore-museum") {
							?>		<li><a href="/visit/explore-museum" class="active-state" >Explore the Museum</a></li>	
							<?	} else {
							?>		<li><a href="/visit/explore-museum" >Explore the Museum</a></li>
							<?	}; ?>
							


							
						</ul>	
					
	                </div>
	                <div class="col_4">
						
						<a href="/visit/"><img src="/sites/default/files/dumb1.png" /></a>
	                </div>
                
						<!-- <img id="megawell_visit" src="/sites/default/files/mega_images/fake_header1.jpg"  width="200" height="200"/>
									 -->	
     
            
	            </div><!-- End Item container -->
             
        
	        </li><!-- End Item -->
		
		
			<!-- ++ Begin Explore ++ -->
	        <li><span class="drop "><a href="/explore/">EXPLORE</a></span><!-- Begin Item -->
       
        
	            <div class="megamenu_fullwidth" id="visitMega"><!-- Begin Item Container -->
	            <div class="megamenu_fullwidth_coverup"></div>
             
	                <div class="col_3">
						<h3><a href="/explore/">Explore</a></h3>
						<p>The Exploratorium has homes: one in San Francisco and another online. Here we offer 40,000 pages full of hands on activities	, online only exhibits and sites, articles, videos and more to explore. We're always open, and no one will know if you show up in your pajamas.</p>
	                </div>
	                <div class="col_4">	
						<a href="/explore/"><img src="/sites/default/files/dumb4.png"  /></a>
	                </div>
	              </div><!-- End Item container -->

	        </li><!-- End Item -->
    	
		
		
			<!-- ++ Begin Education ++ -->
	        <li><span class="drop "><a href="/education/">EDUCATION</a></span><!-- Begin Item -->
       
        
	            <div class="megamenu_fullwidth" class="megasubmenu" id="educationMega"><!-- Begin Item Container -->
	            <div class="megamenu_fullwidth_coverup"></div>
	                <div class="col_3" >
				
	                </div>
	                <div class="col_3">
						
						<? if (request_uri() == "/education/") {
						?>		<h3><a href="/education/" class="active-state" >Education</a></h3>	
						<?	} else {
						?>		<h3><a href="/education/">Education</a></h3>
						<?	}; ?>
						
						<em>For Educators</em>
						<ul class="newmega-subul">
							<? if (request_uri() == "/education/programs") {
							?>		<li><a href="/education/programs" class="active-state"  >Professional Development Programs</a></li>
							<?	} else {
							?>		<li><a href="/education/programs" >Professional Development Programs</a></li>
							<?	}; ?>
							
							<? if (request_uri() == "/education/tools") {
							?>		<li><a href="/education/tools" class="active-state" >Tools for Teaching</a></li>
							<?	} else {
							?>		<li><a href="/education/tools" >Tools for Teaching</a></li>
							<?	}; ?>
							
							
				
						<em>For Learners</em>
							<? if (request_uri() == "/education/programs") {
							?>		<li><a href="/education/programs" class="active-state" >Community Programs</a></li>
							<?	} else {
							?>		<li><a href="/education/programs" >Community Programs</a></li>
							<?	}; ?>
							
							
							<? if (request_uri() == "/education/tools") {
							?>		<li><a href="/education/tools" class="active-state">Tools for Learning</a></li>
							<?	} else {
							?>		<li><a href="/education/tools" >Tools for Learning</a></li>
							<?	}; ?>
							
					
						<em>For the Field</em>
					
							<li><a href="/education/advancing-ideas-about-learning" >Learning About Learning</a></li>

						</ul>
					
	                </div>
	                <div class="col_4">	
						<a href="/education/"><img src="/sites/default/files/dumb7.png" /></a>
	                </div>
	              </div><!-- End Item container -->

	        </li><!-- End Item -->
		
			<!-- ++ Begin Collaborations ++ -->
	         <li><span class="drop "><a href="/collaborations/">COLLABORATIONS</a></span><!-- Begin Item -->
       
        
	            <div class="megamenu_fullwidth" id="visitMega"><!-- Begin Item Container -->
	            <div class="megamenu_fullwidth_coverup"></div>
			
	                <div class="col_2">	
						<a href="/collaborations/"><img src="/sites/default/files/dumb6.png" /></a>
	                </div>
                
	                <div class="col_5 extrabumb">
						<h3><a href="/collaborations/">Collaborations</a></h3>
				
						<ul class="newmega-subul">
							<li><a href="/collaborations/building-worldwide-partnerships" >Our Global Reach</a></li>
							<li><a href="/collaborations/collaborating-science-agencies" >Collaborating with Science Agencies</a></li>
							<li><a href="/collaborations/partnering-educational-institutions" >Collaborating with Educational Institutions</a></li>
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
				<a href="/">
			
				<!-- <img class="exploLogoImg" src="/sites/default/files/explo_logo.gif" width="260" height="73" alt="Exploratorium Home"> -->
		
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="287.535px" height="80.747px" viewBox="0 0 287.535 80.747" enable-background="new 0 0 287.535 80.747"
					 xml:space="preserve">
				<path d="M155.107,36.476c1.087-0.923,2.266-1.658,4.821-1.911v4.345l-1.624,0.256c-2.363,0.415-3.068,0.765-3.068,2.866v9.384
					h-4.927V34.729h4.798V36.476z"/>
				<path d="M171.653,43.419c-0.032,1.726-0.095,3.268-1.724,4.292c-0.514,0.319-1.09,0.544-1.693,0.544
					c-1.148,0-1.854-0.893-1.854-1.693c0-1.283,1.271-1.758,2.107-2.082L171.653,43.419z M167.186,39.453
					c0.124-0.609,0.412-1.95,2.58-1.95c1.76,0,1.82,1.276,1.888,2.044v0.894c-2.074,0.384-5.236,0.969-6.579,1.54
					c-1.371,0.575-3.512,2.107-3.512,4.799c0,2.341,1.631,5.084,5.461,5.084c2.458,0,3.859-1.057,5.11-1.984v1.536h4.816
					c-0.379-0.573-0.476-0.833-0.476-2.623v-9.724c0-4.309-4.949-4.783-6.993-4.783c-1.949,0-3.928,0.25-5.465,1.467
					c-1.494,1.176-1.651,2.551-1.754,3.7H167.186z"/>
				<path d="M181.57,29.912h4.901v5.201h3.22v2.999h-3.25v7.489c-0.029,1.027-0.029,1.881,1.278,1.881l1.756-0.062v3.845
					c-1.053,0.165-1.695,0.254-2.59,0.254c-1.696,0-3.556-0.089-4.608-1.632c-0.677-0.989-0.707-2.177-0.707-3.772v-8.035h-2.428v-2.991
					h2.428V29.912z"/>
				<path d="M199.818,38.111c0.708-0.068,1.856-0.032,2.878,0.932c0.931,0.895,1.377,2.351,1.377,4.205c0,2.636-1.312,4.785-3.965,4.785
					c-2.751,0-4.028-2.343-4.028-5.009c0-1.16,0.223-2.312,0.833-3.276C197.581,38.689,198.415,38.208,199.818,38.111 M200.752,34.229
					c-6.388-0.35-9.599,3.687-9.599,8.823c0,6.19,4.259,8.86,8.955,8.86c6.519,0,8.946-4.613,8.946-8.86
					C209.055,40.003,207.555,34.609,200.752,34.229"/>
				<path d="M216.965,36.476c1.086-0.923,2.266-1.658,4.822-1.911v4.345l-1.63,0.256c-2.361,0.415-3.067,0.765-3.067,2.866v9.384h-4.927
					V34.729h4.802V36.476z"/>
				<path d="M224.253,28.853h4.873v3.767h-4.873V28.853z M224.253,34.729h4.873v16.687h-4.873V34.729z"/>
				<path d="M243.503,34.782h4.931v16.634h-4.931v-1.594c-0.478,0.538-0.772,0.857-1.669,1.325c-1,0.511-2.082,0.765-3.175,0.765
					c-1.083,0-3.083-0.157-4.225-1.753c-0.86-1.208-1.019-2.199-1.019-4.918V34.782h4.919v10.332c0,0.736,0,1.471,0.39,1.98
					c0.288,0.387,0.959,0.826,1.963,0.826c0.281,0,0.952,0,1.692-0.412c1.059-0.641,1.091-1.464,1.123-2.364V34.782z"/>
				<path d="M257.63,36.513c0.563-0.674,1.843-2.172,4.705-2.172c2.754,0,3.749,1.021,4.646,1.947c0.953-0.793,2.285-1.947,4.931-1.947
					c2.749,0,4.161,1.363,4.673,2.395c0.413,0.891,0.441,2.043,0.441,3.831v10.85h-4.859v-8.744c0-0.955,0-2.198-0.192-2.836
					c-0.445-1.404-1.749-1.506-2.136-1.506c-0.476,0-1.109,0.129-1.583,0.514c-0.927,0.737-0.927,1.685-0.927,3.506v9.066h-4.869v-9.862
					c0-0.731-0.029-1.718-0.472-2.36c-0.388-0.513-1.118-0.864-1.917-0.864c-0.383,0-0.883,0.102-1.333,0.385
					c-1.075,0.737-1.107,2.079-1.107,3.218v9.483h-4.875V34.782h4.875V36.513z"/>
				<path d="M5.017,40.999c0.165-0.705,0.323-1.468,0.991-2.199c0.475-0.504,1.31-1.08,2.484-1.08c0.867,0,1.79,0.32,2.398,0.922
					c0.702,0.73,0.826,1.651,0.923,2.356H5.017z M12.998,45.274c-0.607,1.2-1.531,2.98-4.214,2.98c-2.646,0-3.829-2.11-3.791-4.212
					h11.915c-0.068-1.879-0.195-5.113-2.371-7.434c-2.146-2.288-5.018-2.38-6.007-2.38c-6.562,0-8.53,5.145-8.53,9.146
					c0,5.514,3.46,8.649,8.404,8.649c2.679,0,4.852-1.014,6.292-2.344c0.861-0.792,1.441-1.615,2.017-2.495L12.998,45.274z"/>
				<polygon points="33.58,34.782 28.533,42.559 34.184,51.416 28.948,51.416 25.787,46.255 23.002,51.416 17.564,51.416 23.226,42.4 
					18.172,34.782 23.736,34.782 25.941,39.018 28.309,34.782 "/>
				<path d="M45.201,37.98c2.031,0.51,2.634,2.833,2.634,5.03c0,2.612-1.058,5.19-3.468,5.19c-0.803,0-1.643-0.347-2.223-0.951
					c-0.637-0.706-1.186-2.009-1.186-4.114c0-1.556,0.319-2.988,1.025-3.916c0.711-0.952,1.64-1.334,2.543-1.334
					C44.754,37.885,44.978,37.915,45.201,37.98 M40.606,34.782H36.26v22.398h4.925v-6.837c1.313,0.796,2.282,1.399,4.147,1.399
					c5.722,0,7.224-5.3,7.224-8.73c0-5.51-3.157-8.615-7.257-8.615c-1.862,0-3.373,0.673-4.208,1.476
					c-0.165,0.1-0.319,0.291-0.484,0.473V34.782z"/>
				<rect x="55.66" y="28.853" width="4.922" height="22.563"/>
				<path d="M105.401,80.747c22.258,0,40.372-18.103,40.372-40.371C145.773,18.114,127.66,0,105.401,0
					C83.13,0,65.021,18.114,65.021,40.376C65.021,62.645,83.13,80.747,105.401,80.747 M69.812,40.376
					c0-19.622,15.969-35.574,35.59-35.574c19.62,0,35.58,15.952,35.58,35.574s-15.96,35.582-35.58,35.582
					C85.78,75.958,69.812,59.998,69.812,40.376"/>
				<path d="M285.988,33.682c-1.031,1.035-2.277,1.552-3.741,1.552s-2.708-0.517-3.733-1.552c-1.022-1.029-1.532-2.277-1.532-3.744
					c0-1.45,0.516-2.69,1.546-3.722c1.025-1.023,2.266-1.537,3.72-1.537c1.464,0,2.71,0.513,3.741,1.537
					c1.03,1.025,1.547,2.267,1.547,3.722C287.535,31.399,287.019,32.647,285.988,33.682 M279.026,26.735
					c-0.884,0.887-1.324,1.958-1.324,3.21c0,1.265,0.438,2.342,1.316,3.232c0.884,0.891,1.956,1.335,3.219,1.335
					c1.262,0,2.335-0.444,3.218-1.335c0.884-0.89,1.324-1.967,1.324-3.232c0-1.253-0.44-2.323-1.324-3.21
					c-0.888-0.89-1.96-1.334-3.218-1.334C280.985,25.4,279.914,25.845,279.026,26.735 M282.152,27.031c0.719,0,1.247,0.07,1.584,0.208
					c0.598,0.249,0.898,0.739,0.898,1.469c0,0.518-0.189,0.9-0.567,1.145c-0.2,0.129-0.48,0.222-0.839,0.281
					c0.451,0.071,0.78,0.259,0.99,0.564c0.209,0.306,0.312,0.603,0.312,0.894v0.421c0,0.133,0.007,0.276,0.016,0.428
					c0.01,0.154,0.026,0.254,0.052,0.3l0.036,0.072h-0.962c-0.005-0.018-0.009-0.037-0.013-0.057c-0.008-0.019-0.011-0.041-0.017-0.064
					l-0.021-0.185v-0.458c0-0.664-0.184-1.104-0.547-1.317c-0.217-0.123-0.595-0.186-1.137-0.186h-0.806v2.265h-1.013v-5.783H282.152z
					 M283.252,27.965c-0.258-0.141-0.672-0.213-1.242-0.213h-0.876v2.076h0.927c0.436,0,0.76-0.043,0.978-0.127
					c0.4-0.158,0.602-0.457,0.602-0.897C283.64,28.386,283.51,28.106,283.252,27.965"/>
				</svg>
		
		
		
		
		
			</a>
			</div>	
		</div>
	</div>
	
	
	
	<?
	
	
}
?>




	<div  class="wrapper">
		

<div class="row">
		<?php print $header_block_region; ?>
</div>



<div class="row">
	

	
	<?php print $sidebar_first_region; ?>

		

	
	<?php //print $breadcrumb; ?>
		<?php print theme('content_elements', $content_elements_vars); ?>
		<?php print render($page['help']); ?>
		<?php print $messages; ?>
		<?php print $content_region; ?>
	
		<?php// print $feed_icons; ?>
<?php print $sidebar_second_region; ?>
<div class="om-clearfix"></div>
	
</div>
</div>



  
  
<div class="row">
	<?php //print $footer_region; ?>
	<?php print $footer_region; ?>
</div>





	</div> <!-- close inner wrapper -->
</div><!-- /.wrapperwrapper-outer -->

<!-- <div id="stickyFooter">	 -->
	
	
	
<!-- </div> -->


<div id="stickyFooter2">	
	
	<div class="wrapper">
		<ul>
			<li class=""><a href="/oe-checklist" title="" class="">OE Checklist</a></li>
			<li class="leaf menu-819"><a href="/shop" title="" class="menu-menu-footernav-taxonomy-term-">Shop</a></li>
			<li class="leaf menu-820"><a href="/membership" title="" class="menu-menu-footernav-taxonomy-term-">Membership</a></li>
			<li class="leaf menu-821"><a href="/support" title="" class="menu-menu-footernav-node-">Support</a></li>
			<li class="leaf menu-822"><a href="/press" title="" class="menu-menu-footernav-taxonomy-term-">Press</a></li>
			<li class="last leaf menu-823"><a href="/about" title="" class="menu-menu-footernav-taxonomy-term-">About</a></li>
			<li class="last leaf menu-822"><a href="/enews" title="" class="menu-menu-footernav-taxonomy-term-">ENEWS</a></li>

		</ul>
	</div>
</div>





<!-- PAGE BOTTOM  -->	
<?php //print $page_bottom; ?>
	
	


