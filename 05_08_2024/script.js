selectMDCEl = document.querySelector('#contactChoice1')
selectMMCEl = document.querySelector('#contactChoice2')

mdcEl = document.querySelector('#mdc')
mmcEl = document.querySelector('#mmc')

selectMDCEl.addEventListener('click', () => {
    mdcEl.classList.remove('oculto')
    mmcEl.classList.add('oculto')
})

selectMMCEl.addEventListener('click', () => {
    mmcEl.classList.remove('oculto')
    mdcEl.classList.add('oculto')
})
