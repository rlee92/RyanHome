<?php
require("contents/config.php");
require("contents/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link href="../browser_components/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../browser_components/style.css">
    <link rel="stylesheet" href="../browser_components/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <title>Ryan Lee</title>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <script src='../browser_components/jquery-3.2.1.min.js'></script>
    <script>
      $(function(){
        // $('#link').load('contents/link.html')
        $('#header').load('contents/header.html');
        $('#footer').load('contents/footer.html');
      });
    </script>
    <div id='link'></div>
  </head>

  <body>
    <div class="container">
      <div id='header'></div>

      <!-- <h4 id='intro'>Hello, My name is Ryan Lee. I am a recent graduate from University of British Columbia.</h4> -->
      <section>
        <h2 id='skills'> Languages 	&#38; Technologies </h2>
        <blockquote>
          Strong:
            <ul>
              <li>Java, JavaScript</li>
              <li>React-Native </li>
            </ul>
          Knowledgeable:
            <ul>
              <li>Python, C/C++</li>
              <li>Node.js, MySQL, HTML, CSS </li>
            </ul>
        </blockquote>
      </section>

      <section>
          <h2>Personal Projects</h2>
        <blockquote>
          <article class="personalPJT">
            <h3>
              <i class="fa fa-android" aria-hidden="true"></i>
              <!-- <a href="https://github.com/ryan9206/swapem2"> -->
              <a href="/contents/personalPJT/swapem2.html">
                Swap'em
              </a>
            </h3>
            <h6>for Android </h6>
            <p>
              A contact exchange app with an intuitive user interface for Android
            </p>
            <footer>
              <a href="/contents/personalPJT/swapem2.html">Read more →</a>
            </footer>
          </article>

          <br>

          <article class="personalPJT">
            <h3>
              <i class="fa fa-address-book-o" aria-hidden="true"></i>
              <!-- <a href="https://github.com/ryan9206/Contact"> -->
              <a href="/contents/personalPJT/contact.html">
                Address Book
              </a>
            </h3>
            <p>
              Users add, delete, or search contact information and save it as a text file
            </p>
            <footer>
              <a href="/contents/personalPJT/contact.html">Read more →</a>
            </footer>
          </article>
        </blockquote>
      </section>

      <section>
        <h2>Academic Projects</h2>
        <blockquote>
          <article class="academicPJT">
            <h3>
              <i class="fa fa-apple" aria-hidden="true"></i>
              <!-- <a href="https://github.com/ryan9206/Swapem-cs410"> -->
              <a href="/contents/academicPJT/swapem1.html">
                Swap'em
              </a>
            </h3>
            <h6>for iOS</h6>
            <p>
              A contact exchange app with an intuitive user interface for Android
            </p>
            <footer>
              <a href="/contents/academicPJT/swapem1.html">Read more →</a>
            </footer>
          </article>

          <br>

          <article class="academicPJT">
            <h3>
              <i class="fa fa-truck" aria-hidden="true"></i>
              <!-- <a href="https://github.com/ryan9206/FoodVendorTracker-cs310"> -->
              <a href="/contents/academicPJT/fvt.html">
                Food Vendor Tracker
              </a>
            </h3>
            <p>
              A web app that provides information of food trucks and its location in Vancouver downtown
            </p>
            <footer>
              <a href="/contents/academicPJT/fvt.html">Read more →</a>
            </footer>
          </article>
        </blockquote>
      </section>

      <div id='footer'></div>
    </div>
  </body>
</html>
