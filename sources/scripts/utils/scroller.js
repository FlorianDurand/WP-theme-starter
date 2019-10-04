const header = document.querySelector('.Header')
const main = document.querySelector('.Main')

if (header && main) {
  const scroller = document.querySelector('#scroller')

  let ratioHeight = header.offsetHeight / window.innerHeight
  let offsetScreen = main.offsetTop

  ratioHeight > .75 ? scroller.style.display = 'block' : scroller.style.display = 'none'
  offsetScreen = main.offsetTop

  window.addEventListener('resize', () => {
    ratioHeight = header.offsetHeight / window.innerHeight
    ratioHeight > .75 ? scroller.style.display = 'block' : scroller.style.display = 'none'
    offsetScreen = main.offsetTop
  })

  scroller.addEventListener('click', () => {
    window.scroll({
      left: 0,
      top: offsetScreen,
      behavior: 'smooth'
    })
  })
}
