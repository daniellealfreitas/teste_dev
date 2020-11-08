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
    <a href="#!" class="brand-logo responsive-image" style="padding:10px;"><img src="assets\img\logo_nerdweb.png" alt=""></a>
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
  <div class="row">
    <div class="col s12">
      <h2 class="text-center">Noticias</h2>
    </div>
    <div class="col s12 m3">
      <div class="card">
        <div class="card-image">
          <img src="https://picsum.photos/200">
          <span class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a class="blue-text text-darken-2" href="#">Continuar Lendo</a>
        </div>
      </div>
    </div>
    <div class="col s12 m3">
      <div class="card">
        <div class="card-image">
          <img src="https://picsum.photos/200">
          <span class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a class="blue-text text-darken-2" href="#">Continuar Lendo</a>
        </div>
      </div>
    </div>
    <div class="col s12 m3">
      <div class="card">
        <div class="card-image">
         <img src="https://picsum.photos/200">
          <span class="card-title">Lorem ipsum dolor sit amet.</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a class="blue-text text-darken-2" href="#">Continuar Lendo</a>
        </div>
      </div>
    </div>
    <div class="col s12 m3">
      <div class="card">
        <div class="card-image">
          <img src="https://picsum.photos/200">
          <span class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a class="blue-text text-darken-2" href="#">Continuar Lendo</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Display form to insert news --> 
<div class="row">
  <div class="col s12">
        <h2 class="text-center">Enviar Noticia</h2>
      </div>
    <form action="controllers/postController.php" class="col s12">
      <div class="row">
      <div class="input-field col s6">
          <i class="material-icons prefix">title</i>
          <input id="title" type="text" class="validate">
          <label for="title">Titulo</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">date_range</i>
          <input id="date" type="date" class="validate">
          <label for="date">Data</label>
        </div>
        
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="conteudo" class="materialize-textarea"></textarea>
          <label for="conteudo">Conteudo</label>
        </div>
      </div>
    </form>
    <a class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Enviar Notícia</a>
  </div>
</div>




  <!-- Footer -->
  <footer class="page-footer  blue darken-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">News System</h5>
                <p class="grey-text text-lighten-4">Sistema simples de envio de noticias</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Daniel Leal Freitas</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/novazwebdesign">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://twitter.com/diarionovaz">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.youtube.com/channel/UC0m3rYvGQXIhkU222-RabEw">Youtube</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.linkedin.com/in/daniel-leal-freitas-22489719?trk=nav_responsive_tab_profile_pic&challengeId=AQEAyMFYKRVhZwAAAXWnnU6iApmRNHLj-I5cqTzxh60GHlD0aDzRkoygHZeQ7jADycVqBeBma5wrG-LyfMJqmxjrRRiP1LDCOQ&submissionId=9c75a800-d884-4516-a51d-b6fa82bb192d">Linkedin</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright blue darken-3">
            <div class="container">
            © 2020 Copyright Text
            <a class="grey-text text-lighten-4 right" href="https://www.novaz.com.br">Novaz</a>
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