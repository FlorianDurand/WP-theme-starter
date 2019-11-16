if ( document.getElementsByClassName('counter').length > 0) {
  $(window).on('scroll', function () {
    if (checkVisible($('.counter'))) {
      $('.counter').each(function() {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({ countNum: $this.text()}).animate({
            countNum: countTo
          },
          {
            duration: 2000,
            easing:'linear',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
            }
          });
      });
      $(window).off('scroll');
    } else {
      // do nothing
    }
  });
}
function checkVisible( elm, eval ) {
  eval = eval || "object visible";
  var viewportHeight = $(window).height(), // Viewport Height
    scrolltop = $(window).scrollTop(), // Scroll Top
    y = $(elm).offset().top,
    elementHeight = $(elm).height();

  if (eval == "object visible") return ((y < (viewportHeight + scrolltop)) && (y > (scrolltop - elementHeight)));
  if (eval == "above") return ((y < (viewportHeight + scrolltop)));
}


var viewport_mobile = window.matchMedia("(max-width: 800px)")

if (document.getElementById('overlay-loader')) {
  document.body.classList.add('set')
  setTimeout(function () {
    document.body.classList.add('loaded')
  }, 2200);

  setTimeout(function () {
    document.body.classList.remove('set')
   lottie.destroy()
  }, 2500);
}
window.onscroll = function() {scrollFunction()};

if ( document.getElementById( 'cn-accept-cookie' ) ) {
  document.getElementById('cn-accept-cookie').addEventListener('click', closeCookie)
  document.getElementById('cn-refuse-cookie').addEventListener('click', closeCookie)
}
function scrollFunction() {
  const firstContent = document.getElementsByClassName( 'first-element' )
  let firstContentHeight = 0
  if ( firstContent.length > 0 ) {
    for (i = 0; i < firstContent.length; i++) {
      firstContentHeight = firstContent[i].clientHeight;
    }
  } else {
    firstContentHeight = 600;
    if ( viewport_mobile.matches ) {
      firstContentHeight = 430;
    }
  }
  let first_step = 100;
  let second_step = 300;
  let third_step = firstContentHeight;
  if ( viewport_mobile.matches ) {
    first_step = 100;
    second_step = 300;
    third_step = firstContentHeight;
  }

  if (  document.getElementsByClassName( 'cookies-refused' ).length === 0 || document.getElementsByClassName( 'cookies-accepted' ).length === 0 ) {
    first_step = 258;
  }

  if (document.body.scrollTop > first_step || document.documentElement.scrollTop > first_step ) {
    if ( viewport_mobile.matches ) {
      document.getElementById("header").style.top = "-120px";
    } else {
      document.getElementById("header").style.top = "-170px";
    }
  } else {
    if ( document.getElementsByClassName( 'cookies-refused' ).length > 0 || document.getElementsByClassName( 'cookies-accepted' ).length > 0 ) {
      document.getElementById("header").style.top = "0";
    } else {
      document.getElementById("header").style.top = "158px";
    }
  }
  if (document.body.scrollTop > second_step || document.documentElement.scrollTop > second_step) {
    document.getElementById("header").classList.add("fixed");
  } else {
    document.getElementById("header").classList.remove("fixed");
  }
  if (document.body.scrollTop > third_step || document.documentElement.scrollTop > third_step) {
    document.getElementById("header").style.top = "0";
  }
}



if (viewport_mobile.matches) {
  function openMenu() {
    document.getElementById("menu-mobile").classList.toggle("menu");
    var close = document.getElementsByClassName( 'menu-mobile' )
    // var fixed = document.getElementsByClassName( 'fixed' )
    for (i = 0; i < close.length; i++) {
      close[i].classList.toggle('open');
    }
    // for (i = 0; i < fixed.length; i++) {
    //   fixed[i].classList.toggle('fixed-green');
    // }
    document.body.classList.toggle("fixed-body");
  }
  var swiperPresta = new Swiper('.swiper-container-presta-mobile', {
    spaceBetween: 20,
    slidesPerView: 6,
  })
  var swiperTeam = new Swiper('.swiper-container-team', {
    spaceBetween: 20,
    slidesPerView: 1,
  })
  var swiper = new Swiper('.swiper-container-domain-mobile', {

    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination',
    },
  })
  var swiperSolutions = new Swiper('.swiper-container-solutions-mobile', {
    slidesPerView: 1,
    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination',
    },
  })


} else {
  var swiperActus = new Swiper('.swiper-container-actus', {
    slidesPerView: 4,
    spaceBetween: 90,
    mousewheel: {
      forceToAxis: 'true'
    },
    speed: 20,
    freeMode: true,
    scrollbar: {
      el: '.swiper-scrollbar',
      hide: false,
      draggable: true,
      snapOnRelease: false,
    },
  });
  var swiperActu = new Swiper('.swiper-container-actu', {
    slidesPerView: 3,
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
}


if ( document.getElementsByClassName( 'speech' ).length > 0 ) {
  let speech = document.getElementsByClassName( 'speech' )
  let contentHeight = document.getElementById( 'right_director' ).clientHeight
  if (viewport_mobile.matches) {
    let right = document.getElementById('right_director')
    right.style.marginTop = contentHeight + 'px'
  }
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
  if (viewport_mobile.matches) {
    for (i = 0; i < speech.length; i++) {
      speech[i].classList.toggle("visible")
      button.classList.toggle( "rotate")
      let visible = document.getElementsByClassName( 'visible' )
      if (visible.length > 0) {
        for ( y = 0; y < visible.length; y++ ) {
          visible[y].style.height = contentHeight*2.03 + 'px';
        }
      } else {
        for (i = 0; i < speech.length; i++) {
          speech[i].style.height = contentHeight*0.6 + 'px';
        }
      }
    }
  } else {
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
}
if ( document.getElementById( 'contact-form' ) || document.getElementsByClassName( 'actus_actus' ).length > 0 ) {
  document.getElementById( 'devis' ).style.display = 'none';
}
document.getElementById( 'devis' ).addEventListener( 'click', GoToDevis )

function GoToDevis () {
  let widthToReach = document.getElementsByClassName( 'link-devis' )
  let tree = document.getElementById( 'anim-tree' )
  for (i = 0; i < widthToReach.length; i++) {
    if (viewport_mobile.matches) {
      const link = tree.dataset.link
      window.location.href=link
    } else {
      const number = widthToReach[i].clientWidth
      tree.style.transform = 'scale(1.1) translateX(' + number + 'px)';
      tree.style.transition = 'transform 0.6s ease-in';
      widthToReach[i].classList.add( 'before' )
     setTimeout(function(){
      let widthToReach = document.getElementsByClassName( 'link-devis' )
       for (i = 0; i < widthToReach.length; i++) {
         widthToReach[i].classList.add('after')
       }
      }, 300);
      const link = tree.dataset.link
      setTimeout(function(){
        window.location.href=link
      }, 800);
    }

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
      delay: 2000,
    },
    speed: 800,
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


