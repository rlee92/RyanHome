<?php
function db_init($host, $duser, $dpw, $dname) {
  $conn = mysqli_connect($host, $duser, $dpw);
  mysqli_select_db($conn, "id2277980_rleecomments");
  // mysqli_select_db($conn, "test");
  return $conn;
}
?>
