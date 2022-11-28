import '../sass/frontend.scss'

import Typed from 'typed.js'

$(function () {
  var options = {
    strings: [
      '<span class="hero-header-content-koncha">こんにちは</span>',
      '<span class="hero-header-content-hello">HELLO,</span><br><span class="hero-header-content-imNoriko">I’M NORIKO.</span>',
    ],
    typeSpeed: 40,
    backSpeed: 40,
    backDelay: 500,
    startDelay: 1000,
    loop: false,
  }

  var typed = new Typed('#typeAnimation', options)
})
