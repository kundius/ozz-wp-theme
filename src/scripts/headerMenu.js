const headerToggle = document.querySelector('.header__toggle')
const headerMenu = document.querySelector('.header__menu')

let opened = false

const close = () => {
  headerMenu.classList.remove("header__menu_opened")

  opened = false

  document.removeEventListener('mouseup', onMouseUp)
  window.removeEventListener('scroll', onScroll)
}

const open = () => {
  headerMenu.classList.add("header__menu_opened")

  opened = true

  document.addEventListener('mouseup', onMouseUp)
  window.addEventListener('scroll', onScroll)
}

const toggle = () => {
  if (opened) {
    close()
  } else {
    open()
  }
}

const onMouseUp = (e) => {
  if (!headerMenu.contains(e.target) && !headerToggle.contains(e.target)) {
    close()
  }
}

const onScroll = (e) => {
  close()
}

if (headerToggle && headerMenu) {
  headerToggle.addEventListener('click', toggle)
}
