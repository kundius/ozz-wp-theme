import PriorityNavScroller from 'priority-nav-scroller'

let tabs = document.querySelectorAll('.tabs');

tabs.forEach((wrapper) => {
  const nav = wrapper.querySelector('.tabs-nav')
  const bodies = wrapper.querySelectorAll('.tabs-body__item') || []
  const buttons = wrapper.querySelectorAll('.tabs-nav__item') || []

  buttons.forEach((button, buttonIndex) => {
    button.addEventListener('click', (e) => {
      e.preventDefault()

      buttons.forEach((sibling) => {
        sibling.classList.remove('tabs-nav__item_active')
      })
      button.classList.add('tabs-nav__item_active')

      bodies.forEach((body, bodyIndex) => {
        if (buttonIndex === bodyIndex) {
          body.classList.add('tabs-body__item_active')
        } else {
          body.classList.remove('tabs-body__item_active')
        }
      })
    })
  })

  PriorityNavScroller({
    selector: nav,
    navSelector: '.tabs-nav__wrapper',
    contentSelector: '.tabs-nav__content',
    itemSelector: '.tabs-nav__item',
    buttonLeftSelector: '.tabs-nav__btn_left',
    buttonRightSelector: '.tabs-nav__btn_right',
    scrollStep: 80
  })
})
