const hbs = require('hbs')
const { SafeString } = hbs.handlebars

module.exports = function memberIcon (member) {
  switch (member.rank) {
    case 'leader':
      return new SafeString('star')
    case 'first-lady':
      return new SafeString('heart')
    case 'veteran':
      return new SafeString('bookmark')
    default:
      return new SafeString('chevron-up')
  }
}
