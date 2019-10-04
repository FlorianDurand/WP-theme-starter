
// import DropdownMenu from './components/DropdownMenu.vue'

import './utils/ajax_articles'
import './utils/animations'
import './utils/cover'
import './utils/messenger'
import './utils/scroller'


const checkTouchDevice = () => {
  const prefixes = ' -webkit- -moz- -o- -ms- '.split(' ')
  const mq = query => window.matchMedia(query).matches

  if (('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch) return true

  const query = ['(', prefixes.join('touch-enabled),('), 'heartz', ')'].join('')
  return mq(query)
}


if (document.querySelector('#app')) new Vue({
  el: '#app',
  store,
  methods: {
    openPopup() {
      store.commit('TOGGLE_POPUP')
    }
  }
})

if (document.querySelector('.Footer-post')) new Vue({
  el: '.Footer-post',
  store,
  methods: {
    openPopup() {
      store.commit('TOGGLE_POPUP')
    }
  }
})

