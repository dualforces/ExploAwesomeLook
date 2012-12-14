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
  EXPLOCONTENT - RIGHT COL - VIEW/BLOCK<br>
  
<?php
//$block = module_invoke('block' ,'block_view' ,'1' );
//print render($block['content' ]);
?>

<?php // this is a view

//$block = module_invoke('views' ,'block_view' ,'subnav_terms_view-block' );
//print render($block);

$views_block = module_invoke('views' ,'block_view' ,'subnav_terms_view-block_3' );
print render($views_block);

?>

</<?php print $ds_content_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
