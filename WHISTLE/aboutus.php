<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WHISTLE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@100&display=swap" rel="stylesheet">

	
	
</head>
<body>
  <header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
           <a href="index.html" class="pull-left visible-md visible-lg">
            <div id="logo-img"></div>
          </a>
  				
<div class="navbar-brand">
            <h1>whistle</h1>
            <p>
  				<span>넌 잘 하고 있어 ~ You're doing well</span></p>
  					</div>

  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            
            <li>
              <a href="aboutus.php"><div id="about.title"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
</svg><br class="hidden-xs"> About us</a>
            </li>
            <li>
              <a href="contacus.html"><div id="contact.title"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg><br class="hidden-xs"> Contact Us</a>
            </li>
            
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
  			</div>
  		</ul>
  	</nav>
  </header>

<div id="loginRegister" class="containerLogin">
    <main class="contenedorU">

        <div class="panel_principal">
            <div class="panel_trasero">
                <div class="panel_login">
                    <h3>¿Ya tienes cuenta?</h3>
                    <p>Inicia sesion para continuar</p>
                    <button id="entrar"> Iniciar sesión</button>
                </div>
                <div class="panel_register">
                    <h3>¿Aún no tienes cuenta?</h3>
                    <p>Registrate para continuar</p>
                    <button id="registro">Regístrate aquí</button>
                </div>
            </div>
            <div class="panel_de_registro">
                <form action=" " class="form_login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="contraseña">
                    <button>Iniciar sesión</button>
                </form>

                <form action=" " class="form_registro">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Usuario">
                    <input type="text" placeholder="Nombre">
                    <input type="text" placeholder="Email">
                    <input type="password" placeholder="contraseña">
                    <button>Registrate</button>
                </form>


            </div>
        </div>
    </main>
    <script SRC="js/login.js"></script>


</div><!-- FIN DE #main-content -->

<!-- PIE DE PAGINA -->
<footer class="panel-footer">
  <div class="container">
    <div class="row">
      <section id="hours" class="col-sm-4">
          <span>Proyecto por:</span><br>
          UNIVERSIDAD NACIONAL AUTONOMA DE MEXICO <br>
          Eledith Gonzalez y Jose Uc <br>
          Sebastian, Zitlalli y Axel <br>

          MAC
          <hr class="visible-xs">
        </section>
        <section id="address" class="col-sm-4">
          <span>AVISO</span><br>
          No se tendra que pagar por el uso de este material<br>
          
          <p>* El material presentado no nos pertenece, su uso es con fin academico.</p>
          <hr class="visible-xs">
        </section>
      <section id="frases" class="col-sm-4">
          <p>"Tener otro idioma es poseer una segunda alma" -Carlomagno.</p>
          <p>"El idioma es el mapa de ruta de una cultura. Te dice de dónde viene su gente y hacia dónde va." - Rita Mae Brown.</p>
        </section>
    </div>
  </div>
  <div class="text-center">&copy; Copyright Jose y Eledith WHISTLE 2021</div>
</footer>



 <!-- jQuery (Bootstrap JS plugins depend on it) -->
   <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  <script SRC="js/login.js"></script>


  <!--<footer> by Ele & Jose</footer>-->
</body>
</html>