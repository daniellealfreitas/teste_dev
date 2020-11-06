<?php

require_once __DIR__ . "/config/Database.php";
$configDB = [
    "host" => "localhost",
    "database" => "nerdweb",
    "user" => "root",
    "password" => ""
];
$database = new \Nerdweb\Database($configDB);
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
       
    <body>

    <!-- Navigation -->
    <nav class="nav-extended">
    <div class="nav-wrapper  blue lighten-4">
    <a href="#!" class="brand-logo " style="padding:10px;"><img src="assets\img\logo_nerdweb.png" alt=""></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons ">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="blue-text text-darken-3" href="#">Principal</a></li>
        <li><a class="blue-text text-darken-3" href="#">Noticias</a></li>
      </ul>
    </div>
  </nav>
  <ul class="sidenav" id="mobile-demo">
    <li><a href="#">Principal</a></li>
    <li><a href="#">Noticias</a></li>
  </ul>

  <!-- Display table of news -->

  

  <!-- Display form to insert news --> 



  <!-- Footer -->
  <footer class="page-footer  blue darken-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright blue darken-3">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      <script>
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
        });
    </script>
    </body>
  </html>