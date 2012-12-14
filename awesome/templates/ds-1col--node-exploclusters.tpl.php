<?php

/**
 * @file
 * Display Suite 1 column template.
 */
?>
 <<?php print $ds_content_wrapper; print $layout_attributes; ?>>

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <?php print $ds_content; ?>
  
 <?php 
  global $cluster;
  $layout = $cluster["layout"];
//  $blurb = $cluster["blurb"];
  $view_mode = $cluster["view_mode"];
//echo '<h2>'.$view_mode.'</h2>';


  // define pos 1 
	  $nid1 = $cluster[1];
//	  echo '<h2>'.$nid1.'</h2>';

	
  $delta = 0;
  $language = 'und';
  $options = array('absolute' => TRUE);

  $nid = $cluster[1];
  $entity = entity_load('node', array($nid));
  $image1 = $entity[$nid]->field_image[$language][$delta]['filename'];
  $image1_small = $entity[$nid]->field_small_image[$language][$delta]['filename'];
  $image1_big = $entity[$nid]->field_big_image[$language][$delta]['filename'];
  $image1_tall = $entity[$nid]->field_tall_image[$language][$delta]['filename'];
  $title1 = $entity[$nid]->title;
  $text1 = $entity[$nid]->field_small_description[$language][$delta]['safe_value'];
  $url1 = url('node/' . $nid, $options);
  
  //print_r($entity[$nid]);
  
  $nid = $cluster[2];
  $entity = entity_load('node', array($nid));
  $image2 = $entity[$nid]->field_image[$language][$delta]['filename'];
  $image2_small = $entity[$nid]->field_small_image[$language][$delta]['filename'];
  $image2_big = $entity[$nid]->field_big_image[$language][$delta]['filename'];
  $image2_tall = $entity[$nid]->field_tall_image[$language][$delta]['filename'];
  $title2 = $entity[$nid]->title;
  $text2 = $entity[$nid]->field_small_description[$language][$delta]['safe_value'];
  $url2 = url('node/' . $nid, $options);
  
  $nid = $cluster[3];
  $entity = entity_load('node', array($nid));
  $image3 = $entity[$nid]->field_image[$language][$delta]['filename'];
  $image3_small = $entity[$nid]->field_small_image[$language][$delta]['filename'];
  $image3_big = $entity[$nid]->field_big_image[$language][$delta]['filename'];
  $image3_tall = $entity[$nid]->field_tall_image[$language][$delta]['filename'];
  $title3 = $entity[$nid]->title;
  $text3 = $entity[$nid]->field_small_description[$language][$delta]['safe_value'];
  $url3 = url('node/' . $nid, $options);
  
 $nid = $cluster[4];
  $entity = entity_load('node', array($nid));
  $image4 = $entity[$nid]->field_image[$language][$delta]['filename'];
  $image4_small = $entity[$nid]->field_small_image[$language][$delta]['filename'];
  $image4_big = $entity[$nid]->field_big_image[$language][$delta]['filename'];
  $image4_tall = $entity[$nid]->field_tall_image[$language][$delta]['filename'];
  $title4 = $entity[$nid]->title;
  $text4 = $entity[$nid]->field_small_description[$language][$delta]['safe_value'];
  $url4 = url('node/' . $nid, $options);




	
	?>

<?
 

if ($view_mode == 'cluster_layout') {	  
	?>
  
<?   	   if ($layout == '3short') { ?>
   	   
   	   	   <div class="row">  <?
   	   	   
   	   	   	if ($blurb) {  // add text pod  ?>
	   			   	<div class="textWidePod"><?=$blurb?></div>';
	  
	   <?  }  else  { //  image pod  
?>
	   		
	   		<div class="span3">
	   		<a href="<?=$url1?>"><div class="row  podContainer navPod ">
					<div class="podImage "><img src="/sites/default/files/<?=$image1?>" /></div>
					<div class="innerLabel"><h2><?=$title1?></h2><p><?=$text1?></p></div>			
				</div></a>
	   		
	   		
	   		</div> 
	   		
<?
			}
?>

	   		<div class="span3">		
				
					<a href="/node/'.$nid2.'"><div class="row  podContainer navPod ">
					<div class="podImage "><img src="/sites/default/files/<?=$image2?>" /></div>
					<div class="innerLabel"><h2><?=$title2?></h2><p><?=$text2?></p></div>			
				</div></a>
			</div>
				
			<div class="span3">
	   			<a href="/node/'.$nid3.'"><div class="row  podContainer navPod ">
					<div class="podImage "><img src="/sites/default/files/<?=$image3?>" /></div>
					<div class="innerLabel"><h2><?=$title3?></h2><p><?=$text3?></p></div>
				</div></a>
				<br/><br/>
	   		
	   		</div>

	   				
				
	   </div> 
	   
	   <?   }  ?>

<?   	   if ($layout == '3tall') { ?>
   	   
   	   	   <div class="row">

	   		
	   		<div class="span3">
	   		<a href="<?=$url1?>"><div class="row  podContainer navPod ">
					<div class="podImage "><img src="/sites/default/files/<?=$image1?>" height="300" /></div>
					<div class="innerLabel"><h2><?=$title1?></h2><p><?=$body1?></p></div>			
				</div></a>
	   		
	   		
	   		</div> 

	   		<div class="span3">		
				
					<a href="/node/'.$nid2.'"><div class="row  podContainer navPod ">
					<div class="podImage "><img src="/sites/default/files/<?=$image2?>"  height="300" /></div>
					<div class="innerLabel"><h2><?=$title2?></h2><p>This is descriptive text</p></div>			
				</div></a>
			</div>
				
			<div class="span3">
	   			<a href="/node/'.$nid3.'"><div class="row  podContainer navPod ">
					<div class="podImage "><img src="/sites/default/files/<?=$image3?>"  height="300" /></div>
					<div class="innerLabel"><h2><?=$title3?></h2><p><?=$text3?></p></div>
				</div></a>
				<br/><br/>
	   		
	   		</div>

	   				
				
	   </div> 
	   
	   <?   } 
	   
	   
	   
////// 4a
   	   if ($layout =='4a') {
	   	   
	   	  // if ($image4_big == '') $image4_big = 'default-big.jpg';
   	    ?>
   	   
   	   	   <div class="row">


	   		<div class="span3">
	   		
		<!-- position #2 -  WIDE -->

	   				<a href="<? echo($url2); ?>">
						<div class="row  podContainer navPod doubleStack">
							<div class="podImage ">
								<img src="/sites/default/files/<?=$image2_tall?>" />
							</div>
							<div class="innerLabel">
								<h2><?=$title2?></h2>
								<p><?=$text2?></p>
							</div>			
						</div>
					</a>
	   		
	   		</div>

	   		<div class="span3">	
	   		
	   	<!-- position #3 -  SMALL -->
	
				<a href="<? echo($url3); ?>">
					<div class="row  podContainer navPod doubleStack">
						<div class="podImage ">
							<img src="/sites/default/files/<?=$image3?>" />
						</div>
						<div class="innerLabel">
							<h2><?=$title3?></h2>
							<p><?=$text3?></p>
						</div>			
					</div>
				</a>
				
				
	   	<!-- position #4 -  SMALL -->
				
				<a href="<? echo($url4); ?>">
					<div class="row  podContainer navPod doubleStack">
						<div class="podImage ">
							<img src="/sites/default/files/<?=$image4?>" />
						</div>
						<div class="innerLabel">
							<h2><?=$title4?></h2>
							<p><?=$text4?></p>
						</div>			
					</div>
				</a>
					
			</div>
				
			<div class="span3">
			
	   	<!-- position #5 -  BIG -->

	   			<a href="<? echo($url5); ?>"><div class="row  podContainer navPod doubleStack">
					<div class="podImage "><img src="/sites/default/files/<?=$image4?>" /></div>
					<div class="innerLabel"><h2><?=$title4?></h2><p><?=$text4?></p></div>
				</div></a>
				<br/><br/>
	   		
	   		</div>

	   				
				
	   </div> <?
	   
	   }
	   
////// 4a


} //end teaser view
?>

  
  
  
</<?php print $ds_content_wrapper ?>>


<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
