<?php

/**
 * @file
 * Display Suite 2 column stacked template.
 */
?>
<div class="ds-2col-stacked clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <<?php print $header_wrapper ?> class="<?php print $header_classes; ?>">
    <?php print $header; ?>
  </<?php print $header_wrapper ?>>

  <div class="row">
  <div class="span5">
    <?php print $left; ?>
  </div>
  
  <div class="span1"></div>

  <div class="span3">
  
    <?php print $right; ?>
    
    
 <?php
 
   		global $right_cnadybox_nid;
   		echo $right_cnadybox_nid.' = explocontent node_id';
 
   		global $right_candybox_term;
   		echo '<br>'.$right_candybox_term.' =  taxonomy_id';
   	
   	
   		
   		switch ($right_candybox_term) {
   
   			case '19':  // about grouping 
   				echo '<br>view name =  about';
   				$views_block = module_invoke('views' ,'block_view' ,'subnav_terms_view-block_1' );
   				break;
   				
   			case '24': // ti grouping
   			   	echo '<br>view name = teacher institute'; 

   				$views_block = module_invoke('views' ,'block_view' ,'subnav_terms_view-block_3' );
   				break;
   				
   			  		   				
   			case '18': // support grouping
   				//$views_block = module_invoke('views' ,'block_view' ,'subnav_terms_view-block_2' );
   				// show the 'curated about' list instead
   				if ($right_cnadybox_nid == '211') {
   				echo '<br>view name = messgae_pods support';
   				$views_block = module_invoke('views' ,'block_view' ,'message_pods-block' );
   				}
   				
   				echo '<br>view name = curated about';
   				$views_block_2 = module_invoke('views' ,'block_view' ,'subnav_terms_view-block_7' );


   				break;
   		
   			case '17': // membership grouping
   				//$views_block = module_invoke('views' ,'block_view' ,'subnav_terms_view-block' );
   					 echo '<br>twitter feed - explomember';

				
				?>
				
				
				<link rel="stylesheet" type="text/css" href="/experiments/social-river2/css/dcsns_wall-single.css" media="all" />
				<script type="text/javascript" src="/experiments/social-river2/inc/js/jquery.plugins.js"></script>
				<script type="text/javascript" src="/experiments/social-river2/inc/js/jquery.site.js"></script>
				<script type="text/javascript" src="/experiments/social-river2/js/jquery.social.stream.wall.1.2.js"></script>
				<script type="text/javascript" src="/experiments/social-river2/js/jquery.social.stream.1.4.3.js"></script>

				<script type="text/javascript">
				jQuery(document).ready(function($){
					$('#social-stream').dcSocialStream({
						feeds: {
							twitter: {
								id: 'explomember',
				
							},
			
						},
						rotate: {
							delay: 0
						},
						twitterId: 'explomember',
						control: false,
						filter: false,
						wall: true,
						order: 'date',
						limit: 6,
						max: 'limit',
						iconPath: '/experiments/social-river2/images/dcsns-dark/',
						imagePath: '/experiments/social-river2/images/dcsns-dark/'
					});
				 
				});
				</script>
				<style>
				#wall {
					/*margin-top: 20px;*/
					/*padding: 30px 0 0; */
					width: 100%;
					min-height: 2000px;}
					
				.dcsns img {
					width: 27px;
					
				}	
				</style>
				
						
				
				
	
					<div id="social-stream"></div>

			
				
				
				
				
				<?
			
   				break;
   				
   					case '34': // lab membership twitter feed
   					
   					
   					 echo '<br>view name = messages : support/lab'; 

		   				$views_block = module_invoke('views' ,'block_view' ,'message_pods-block_3' );
		
   					 echo '<br>twitter feed - explo_lab';

				
				?>
				
				
				<link rel="stylesheet" type="text/css" href="/experiments/social-river2/css/dcsns_wall-single.css" media="all" />
				<script type="text/javascript" src="/experiments/social-river2/inc/js/jquery.plugins.js"></script>
				<script type="text/javascript" src="/experiments/social-river2/inc/js/jquery.site.js"></script>
				<script type="text/javascript" src="/experiments/social-river2/js/jquery.social.stream.wall.1.2.js"></script>
				<script type="text/javascript" src="/experiments/social-river2/js/jquery.social.stream.1.4.3.js"></script>

				<script type="text/javascript">
				jQuery(document).ready(function($){
					$('#social-stream').dcSocialStream({
						feeds: {
							twitter: {
								id: 'explo_lab',
				
							},
			
						},
						rotate: {
							delay: 0
						},
						twitterId: 'explo_lab',
						control: false,
						filter: false,
						wall: true,
						order: 'date',
						limit: 6,
						max: 'limit',
						iconPath: '/experiments/social-river2/images/dcsns-dark/',
						imagePath: '/experiments/social-river2/images/dcsns-dark/'
					});
				 
				});
				</script>
				<style>
				#wall {
					/*margin-top: 20px;*/
					/*padding: 30px 0 0; */
					width: 100%;
					min-height: 2000px;}
					
				.dcsns img {
					width: 27px;
					
				}	
				</style>
				
									
	
					<div id="social-stream"></div>

			
				
				
				
				
				<?
				
				
				
				
   				break;

   		
   		
   		   	case '3': // education grouping
   				$views_block = module_invoke('views' ,'block_view' ,'subnav_terms_view-block_6' );
   				break;
   		
   				
				
   			
   		}
print render($views_block);
if ($views_block_2)
print render($views_block_2);


 ?>   
    
  </div>
  
  <<?php print $footer_wrapper ?> class="group-footer<?php print $footer_classes; ?>">
    <?php print $footer; ?>
  </<?php print $footer_wrapper ?>>

  </div>
  
  
</div>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
