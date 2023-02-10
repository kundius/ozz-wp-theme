<?php if ($catalog = get_field('catalog')): ?>
<div class="frame-house">
  <?php foreach ($catalog as $item): ?>
  <div class="frame-house-row">
    <div class="frame-house-layout">
      <?php if ($item['image']): ?>
        <div class="frame-house-layout__left">
          <div class="frame-house-image">
            <img src="<?php echo $item['image']['sizes']['theme-medium'] ?>" />
          </div>
        </div>
      <?php endif; ?>

      <div class="frame-house-layout__right">
        <div class="frame-house-details">
          <div class="frame-house-details__title">
            <?php echo $item['name'] ?>
          </div>
          <div class="frame-house-details__desc">
            <?php echo $item['desc'] ?>
          </div>
        </div>

        <?php if ($files = get_field('files')): ?>
        <div class="frame-house-files">
          <?php foreach ($files as $file): ?>
          <div class="frame-house-file">
            <div class="frame-house-file__icon">
              <img src="<?php echo $file['icon']['url'] ?>" />
            </div>
            <a href="<?php echo $file['file']['url'] ?>" class="frame-house-file__name" target="_blank">
              <?php echo $file['name'] ?>
            </a>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php endif; ?>
