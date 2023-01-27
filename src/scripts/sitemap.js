const sitemaps = document.querySelectorAll('.sitemap') || [];

sitemaps.forEach((sitemap) => {
  const parents = sitemap.querySelectorAll('.menu-item-has-children') || [];
  parents.forEach((parent) => {
    const subMenu = parent.querySelector('.sub-menu');
    const link = parent.querySelector('a');
    const toggle = document.createElement('button');
    toggle.classList.add('menu-toggle');
    
    toggle.addEventListener('click', (e) => {
      e.preventDefault();

      parent.classList.toggle('menu-item_opened');

      if (subMenu.style.maxHeight) {
        subMenu.style.maxHeight = null;
      } else {
        subMenu.style.maxHeight = subMenu.scrollHeight + "px";
      }
    });

    link.appendChild(toggle);
  });
});
