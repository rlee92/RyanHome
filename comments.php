<?php
  require("contents/config.php");
  require("contents/db.php");
  $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
  $result = mysqli_query($conn, "SELECT * FROM comments");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../browser_components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../browser_components/style.css">
    <link rel="stylesheet" href="../browser_components/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">


    <script src="browser_components/jquery-3.2.1.min.js"></script>
    <script>
    $(function(){
      // $('#link').load('contents/link.html')
      $('#header').load('contents/header.html');
    });
    </script>
    <div id='link'></div>

    <title>Ryan Lee</title>

  </head>
  <body>
    <div class="container">
      <div id='header'></div>


    <div class="row">

      <nav class="col-md-2">
        <ol class='nav nav-pills nav-stacked'>
          <?php
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<li><a href="/comments.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
            }
          ?>
        </ol>
      </nav>

      <div class="col-md-10">
        <article>
          <?php
            if (empty($_GET['id']) === false) {
              $sql = 'SELECT * FROM comments WHERE id='.$_GET['id'];
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              echo '<h1>'.htmlspecialchars($row['title']).'</h1>';
              echo '<p>'.htmlspecialchars($row['author']).'</p>';
              echo strip_tags($row['comments'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
            }
          ?>
        </article>

        <hr>

        <div id="control">
          <a href="/write.php" class='btn btn-success'> Add New </a>
        </div>
      </div>
    </div>
  </div>


  </body>
</html>
