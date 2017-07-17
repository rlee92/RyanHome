<?php
require("config/config.php");
require("config/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="browser_components/jquery-3.2.1.min.js"></script>
    <script>
    $(function(){
      $('#link').load('contents/link.html')
      $('#header').load('contents/header.html');
    });
    </script>
    <div id='link'></div>

    <title>Ryan Lee</title>

  </head>
  <body>
    <div id='header'></div>
    Hello

  </body>
</html>
