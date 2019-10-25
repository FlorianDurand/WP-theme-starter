if ( document.getElementsByClassName( 'speech' ).length > 0 ) {
  let speech = document.getElementsByClassName( 'speech' )
  let contentHeight = document.getElementById( 'right_director' ).clientHeight
  for (i = 0; i < speech.length; i++) {
    speech[i].style.height = contentHeight*0.6 + 'px';
  }
  document.getElementById( 'director_link' ).addEventListener( 'click', showMore )
}
function showMore () {
  let y
  let speech = document.getElementsByClassName( 'speech' )
  let button = document.getElementById( 'director_link' )
  let contentHeight = document.getElementById( 'right_director' ).clientHeight
  for (i = 0; i < speech.length; i++) {
    speech[i].classList.toggle("visible")
    button.classList.toggle( "rotate")
    let visible = document.getElementsByClassName( 'visible' )
    if (visible.length > 0) {
      for ( y = 0; y < visible.length; y++ ) {
        visible[y].style.height = contentHeight + 'px';
      }
    } else {
      for (i = 0; i < speech.length; i++) {
        speech[i].style.height = contentHeight*0.6 + 'px';
      }
    }
  }
}
if ( document.getElementById( 'contact-form' ) ) {
  document.getElementById( 'devis' ).style.display = 'none';
}
document.getElementById( 'devis' ).addEventListener( 'click', GoToDevis )

function GoToDevis () {
  let widthToReach = document.getElementsByClassName( 'link-devis' )
  let tree = document.getElementById( 'anim-tree' )
  for (i = 0; i < widthToReach.length; i++) {
    const number = widthToReach[i].clientWidth
    tree.style.transform = 'scale(1.5) translateX(' + number*0.6 + 'px)';
    const link = tree.dataset.link
    setTimeout(function(){
      window.location.href=link
    }, 500);

  }

}


if ( document.getElementsByClassName( 'cookies-refused' ).length > 0 || document.getElementsByClassName( 'cookies-accepted' ).length > 0 ) {
  document.body.style.marginTop = '0px'
} else {
  document.body.style.marginTop = '158px'
  document.body.style.transition= 'margin-top 0.3s'
}


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
    if ( test.length > 45 ){
      let small = test.substring(0, 45);
      excerpt[i].innerHTML = small + '...';
    }
  }
}

//actus

var swiper = new Swiper('.swiper-container-actus', {
  slidesPerView: 4,
  spaceBetween: 90,
  mousewheel: {
    forceToAxis: 'true'
  },
  freeMode: true,
  scrollbar: {
    el: '.swiper-scrollbar',
    hide: false,
    draggable: true,
    snapOnRelease: false,
  },
});