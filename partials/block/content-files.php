<?php if ($files = get_field('files')): ?>
  <div class="catallog-file-list">
    <div class="file-list">
      <?php foreach ($files as $item): ?>
        <div class="file-item">
          <?php if ($item['icon']): ?>
            <div class="file-item__icon">
              <img src="<?php echo $item['icon']['url'] ?>" />
            </div>
          <?php endif; ?>
          <a href="<?php echo $item['file']['url'] ?>" class="file-item__name" target="_blank">
            <?php echo $item['name'] ?>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>
