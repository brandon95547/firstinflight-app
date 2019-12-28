var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
var cors = require('cors');
var reload = require('reload');

var indexRouter = require('./routes/index');
var usersRouter = require('./routes/users');

var app = express();

reload(app).then(function (reloadReturned) {
  // reloadReturned is documented in the returns API in the README

  // Reload started, start web server
  /* server.listen(port, () =>
      console.log(`Example app listening on port ${port}!`)
  ); */
}).catch(function (err) {
  console.error('Reload could not start, could not start server/sample app', err)
})

// view engine setup
app.set('views', path.join(__dirname, 'src/views'));
app.set('view engine', 'ejs');

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));
app.use('/vendor', express.static(path.join(__dirname, '/node_modules')));

app.use('/', indexRouter);
app.use('/users', usersRouter);

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

module.exports = app;
