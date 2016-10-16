const express = require('express')
const router = express.Router()
const members = require('../data/members')
const itemsPerColumn = Math.ceil(members.length / 2)
const columns = [
  members.slice(0, itemsPerColumn),
  members.slice(itemsPerColumn)
]

router.get('/', (req, res, next) => {
  res.render('members', {
    numMembers: members.length,
    columns
  })
})

module.exports = router
