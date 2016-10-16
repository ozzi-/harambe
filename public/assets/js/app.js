(function () {
  'use strict'

  const currentPath = window.location.pathname
  const links = Array.prototype.slice.call(document.querySelectorAll('#navbar a'))
  const activeLinks = links.filter(function (link) {
    return new URL(link.href).pathname === currentPath
  })

  activeLinks.forEach(function (link) {
    link.parentNode.classList.add('active')
  })
})()
