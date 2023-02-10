<?php if ($listing = get_field('listing')): ?>
  <div class="catalog-list">
    <?php foreach ($listing as $item): ?>
      <div class="catalog-list__cell">
        <div class="catalog-item">
          <?php if ($item['image']): ?>
            <div class="catalog-item__image">
              <img src="<?php echo $item['image']['sizes']['theme-medium'] ?>" />
            </div>
          <?php endif; ?>
          <div class="catalog-item__body">
            <?php if ($item['name']): ?>
              <div class="catalog-item__name">
                <?php echo $item['name'] ?>
              </div>
            <?php endif; ?>
            <?php if ($item['desc']): ?>
              <div class="catalog-item__desc">
                <?php echo $item['desc'] ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>
