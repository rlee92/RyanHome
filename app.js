const express = require('express')
const app = express()
const path = require('path')

app.use(express.static(path.join(__dirname, 'browser_components')))

app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname + '/RyanHome.html'))
})

app.get('/')

app.listen(3000, function () {
  console.log('RyanHome is listening on port 3000!')
})
