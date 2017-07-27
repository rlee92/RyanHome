<?php
  require("contents/config.php");
  require("contents/db.php");
  $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
  $result = mysqli_query($conn, "SELECT * FROM test");
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

        <nav class="col-md-3">
          <ol class="nav nav-pills nav-stacked">
            <?php
            while($row = mysqli_fetch_assoc($result)){
              echo '<li><a href="/index.php?id='.$row['id'].'">'.htmlspecialchars($row['title']).'</a></li>'."\n";
            }
            ?>
            </ol>
          </nav>
          <div class="col-md-9">

            <article>
              <form action="process.php" method="post">

                <div class="form-group">
                  <label for="form-title">Title</label>
                  <input type="text" class="form-control" name="title" id="form-title" >
                </div>

                <div class="form-group">
                  <label for="form-author">Author</label>
                  <input type="text" class="form-control" name="author" id="form-author" >
                </div>

                <div class="form-group">
                  <label for="form-author">Comments</label>
                  <textarea class="form-control" rows="10" name="comments"  id="form-author" ></textarea>
                </div>

                <input type="submit" name="name" class="btn btn-default  btn-lg">
              </form>
            </article>
            <hr>

          </div>
        </div>
      </div>

    </div>


  </body>
</html>
