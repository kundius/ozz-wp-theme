const inputs = document.querySelectorAll('.ui-input-file') || []

inputs.forEach((wrap) => {
  const input = wrap.querySelector('input')
  const label = wrap.querySelector('.ui-input-file__filename')

  input.addEventListener('change', (e) => {
    let name = 'Прикрепить файл'
    if (input.files && input.files.length) {
      name = input.files[0].name
    }
    label.innerHTML = name
  })
})
