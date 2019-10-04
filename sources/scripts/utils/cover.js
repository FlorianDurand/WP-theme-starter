const cover = document.querySelector('.Header-cover')

window.addEventListener('scroll', () => {
  cover.style.transform = `translateY(${window.scrollY / 4}px)`
})
