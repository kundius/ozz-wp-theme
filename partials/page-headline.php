<?php
$title = get_the_title();
$title_size = 'normal';
if (strlen($title) > 50) {
  $title_size = 'medium';
}
if (strlen($title) > 100) {
  $title_size = 'small';
}
?>
<div class="page-headline">
  <div class="ui-container">
    <h1 class="page-headline__title <?php echo 'page-headline__title_' . $title_size ?>"><?php echo $title ?></h1>
    <?php if ($description = get_field('page_description')): ?>
    <div class="page-headline__description"><?php echo $description ?></div>
    <?php endif?>
  </div>
</div>
