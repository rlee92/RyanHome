const express = require('express')
const path = require('path')
const phpExpress = require('php-express')({
  binPath: 'php'
})
const app = express()

// Set view engine to php-express
app.set('views', './views')
app.engine('php', phpExpress.engine)
app.set('view engine', 'php')

// Routeing all .php file to php-express
app.all(/.+\.php$/, phpExpress.router)

app.use(express.static(path.join(__dirname, '')))

app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname + '/index.html'))
})

// Personal projects read more routes
app.get('/swapem2', function (req, res){
  res.sendFile(path.join(__dirname + '/contents/personalPJT/swapem2.html'))
})

app.get('/contact', function (req, res){
  res.sendFile(path.join(__dirname + '/contents/personalPJT/contact.html'))
})


// Academic projects read more routes
app.get('/swapem1', function (req, res){
  res.sendFile(path.join(__dirname + '/contents/academicPJT/swapem1.html'))
})

app.get('/fvt', function (req, res){
  res.sendFile(path.join(__dirname + '/contents/academicPJT/fvt.html'))
})


// Comments bulletin board routes
app.get('/comments', function(req,res){
  res.sendFile(path.join(__dirname + '/comments.php'))
})

app.listen(3000, function () {
  console.log('RyanHome is listening on port 3000!')
})
