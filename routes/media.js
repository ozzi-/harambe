const express = require('express')
const router = express.Router()
const media = require('../data/media')

router.get('/', (req, res, next) => {
  res.render('media', { media })
})

module.exports = router
