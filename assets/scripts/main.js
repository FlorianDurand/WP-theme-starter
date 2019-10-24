if ( document.getElementsByClassName( 'cookies-refused' ).length > 0 || document.getElementsByClassName( 'cookies-accepted' ).length > 0 ) {
  document.body.style.marginTop = '0px'
} else {
  document.body.style.marginTop = '158px'
  document.body.style.transition= 'margin-top 0.3s'
}

// document.getElementById( 'cn-accept-cookie' ).addEventListener( 'click', closeCookie )

function closeCookie () {
  document.body.style.marginTop = '0px'
}

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

if ( document.getElementsByClassName("actus_title").length > 0 ) {
  const excerpt = document.getElementsByClassName("actus_title");
  for ( var i = 0; i < excerpt.length; i++ ) {
    let test = excerpt[i].textContent;
    if ( test.length > 60 ){
      let small = test.substring(0, 50);
      excerpt[i].innerHTML = small + '...';
    }
  }
}