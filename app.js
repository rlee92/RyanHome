const express = require('express')
const app = express()
const path = require('path')

app.use(express.static(path.join(__dirname, '')))

app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname + '/RyanHome.html'))
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
  res.send('Hello')
})


app.listen(3000, function () {
  console.log('RyanHome is listening on port 3000!')
})
