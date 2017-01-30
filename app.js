const express = require('express')
const path = require('path')
const logger = require('morgan')
const hbs = require('hbs')

const index = require('./routes/index')
const join = require('./routes/join')
const media = require('./routes/media')
const faq = require('./routes/faq')
const members = require('./routes/members')

hbs.registerHelper('member-icon', require('./helpers/member-icon'))

const app = express()

// View engine setup.
app.set('views', path.join(__dirname, 'views'))
app.set('view engine', 'hbs')

// Register HTTP request logger.
app.use(logger('dev'))

// Serve files in public directory statically.
app.use(express.static(path.join(__dirname, 'public')))

// Mount routes.
app.use('/', index)
app.use('/join', join)
app.use('/media', media)
app.use('/faq', faq)
app.use('/members', members)

// Catch 404 and forward to error handler.
app.use((req, res, next) => {
  const err = new Error('Not Found')
  err.status = 404
  next(err)
})

// Development error handler, will print stacktrace.
if (app.get('env') === 'development') {
  app.use((err, req, res, next) => {
    res.status(err.status || 500)
    res.render('error', {
      message: err.message,
      error: err
    })
  })
}

// Production error handler, no stacktraces leaked to user
app.use((err, req, res, next) => {
  res.status(err.status || 500)
  res.render('error', {
    message: err.message,
    error: {}
  })
})

module.exports = app
