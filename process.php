<?php
  require("contents/config.php");
  require("contents/db.php");
  $conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);


  $sql = "INSERT INTO comments (title,comments,author,created) VALUES('".$_POST['title']."', '".$_POST['comments']."', '".$_POST['author']."', now())";
  $result = mysqli_query($conn, $sql);
  header('Location: /comments.php');
?>
