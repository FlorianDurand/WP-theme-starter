if ( document.getElementById('swiper-container' ) ) {
  var mySwiper = new Swiper('.swiper-container', {
    slidesPerView: 3,
    allowTouchMove: false,
    loop: true,
    freeMode: true,
    autoplay: {
      delay: 1,
    },
    speed: 2000,
  })
  document.getElementById('swiper-container').addEventListener('mouseenter', stop)

  function stop () {
    mySwiper.autoplay.stop()

  }

  document.getElementById('swiper-container').addEventListener('mouseleave', start)

  function start () {
    mySwiper.autoplay.start();
  }
}