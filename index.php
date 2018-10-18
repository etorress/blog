<?php require ('vendor/php/config.php');?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Eduardo Torres">

  <title>Eduardo Torres | Reviews</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/blog-home.css" rel="stylesheet">
  <link type="text/css" href="css/styles.css" rel="stylesheet">

  <script>
    window.onload=function(){
      var varVideo=document.getElementById("media");
      var varPlay=document.getElementById("btns");
      var varPause=document.getElementById("btnPause");
      
      varPlay.addEventListener("click",empezar);
      function empezar{
        varVideo.play();
      }
    }
  </script>
</head>

<body style="text-align: justify; background-color: #F0F8FF" >

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #2E4A62!important; ">
    <section class="container">
      <a class="navbar-brand" href="#">Eduardo Torres</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <section class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </section>
    </section>
  </nav>

  <section class="container">
    <section class="row">
      <section class="col-md-8">
        <header><h1 class="my-4">Inicio</h1></header>

        <!-- the leftovers -->
        <section class="card mb-4" id="hover column">
          <img class="card-img-top" src="images\the_leftovers.jpg" alt="Card image cap" id="blur">

          <section class="card-body">
            <h2 class="card-title">The Leftovers</h2>
            <p class="card-text">Cuando el 2% de la población mundial desaparece de forma literal y abrupta, sin explicación alguna, quedando sólo sus ropas en el sitio en el que sus cuerpos se evaporaron, el resto de la población
              de la Tierra comienza a intentar comprender lo que ha pasado, y sobre todo lo que se supone que deben hacer al respecto. Uno de estas personas es el jefe de la policía de un pequeño suburbio de Nueva York, padre de dos
              hijos, que trata de mantener cierta apariencia de normalidad.</p>
            <button class="btn btn-primary" id="btns"><span>Read More</span></button>
          </section>

          <section class="card-footer text-muted">
            Publicado en septiembre 30, 2018 por
            <a href="#">Eduardo Torres</a>
          </section>
        </section>

        <!-- westworld -->
        <section class="card mb-4">
          <img class="card-img-top" src="images\westworld.png" alt="Card image cap" id="blur">
          <section class="card-body">
            <h2 class="card-title">Westworld</h2>
            <p class="card-text">Westworld es un parque de atracciones futurista y controlado por alta tecnología dirigido por el Dr. Robert Ford (Anthony Hopkins). Las instalaciones cuentan con androides cuya apariencia
              física es humana, y gracias a ellos los visitantes pueden dar rienda suelta a sus instintos y vivir cualquier tipo de aventura o fantasía, por muy oscura o peligrosa que sea, sabiendo que los robots no les harán daño.</p>
            <button class="btn btn-primary" id="btns"><span>Read More</span></button>
          </section>
          <section class="card-footer text-muted">
            Publicado en septiembre 20, 2018 por
            <a href="#">Eduardo Torres</a>
          </section>
        </section>

        <!-- big little lies -->
        <section class="card mb-4" id="hover column">
          <img class="card-img-top" src="images\big-little-lies.png" alt="Card image cap" id="blur">
          <section class="card-body">
            <h2 class="card-title">Big Little Lies</h2>
            <p class="card-text">Podríamos decir que ‘Big Little Lies‘ es un thriller vestido de drama pero con tintes de comedia negra. Está protagonizado por tres mujeres: Madeline Martha Mackenzie (Reese Witherspoon),
               Celeste Wright (Nicole Kidman) y Jane Chapman (Shailene Woodley). Los hijos de estas tres madres van a un jardín de infancia, pero se ven envueltas en turbios problemas: la infidelidad, la violencia doméstica
               y el acoso escolar. Ese sería, básicamente, el punto de partida. </p>
            <button class="btn btn-primary" id="btns"><span>Read More</span></button>
          </section>
          <section class="card-footer text-muted">
            Publicado en septiembre , 2018 por
            <a href="#">Eduardo Torres</a>
          </section>
        </section>

        <section class="card mb-4" id="hover column">
          <video id="media" controls>
            <source src="images\khalid.mp4" id="media">
          </video>
          <button class="btn btn-primary" id="btns" name="btnPlay"><span>Play</span></button>
          <section class="card-footer text-muted">
            Publicado en octubre 08, 2018 por
            <a href="#">Eduardo Torres</a>
          </section>
        </section>

        <!-- change page buttons -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
        <section class="content">

        <!--comments section-->
        <h2>Comentarios</h2>
        <?php

          //$consulta = $conexion->query("SELECT name, comment, DATE_FORMAT(date_added, '%d-%m-%Y %H:%i:%s') as date_show FROM comments ORDER BY date_added DESC LIMIT 0,20");
          $sql = "SELECT name, comment, DATE_FORMAT(date_added, '%d-%m-%Y %H:%i:%s') as date_show FROM comments ORDER BY date_added DESC LIMIT 0,20";
          $result = $conexion->query($sql);
          if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
              $formato = $fomarto . "<section class=\"comment\" style='background-color: #fff'>";
              $formato = $formato . "<section class=\"comment-avatar\">";
              $formato = $formato . "<img width=\"48\" height=\"48\" src=\"user.png\" />	";
              $formato = $formato . "</section>";
              $formato = $formato . "<section class=\"comment-autor\">";
              $formato = $formato . "<strong style='position: relative; left: 20px; top:-5px;'>" . $row['name'] . "</strong><br/>";
              $formato = $formato . "<small style='position: relative; left: 20px; top: -10px;'>" . $row['date_show'] . "</small>";
              $formato = $formato . "</section>";
              $formato = $formato . "<section class=\"comment-text\" style='text-align: left;'><span class='comments-text'>" . $row['comment'] . "</span></section>";
              $formato = $formato . "</section>";
              echo $formato;

            }
          }
          else{

          }

          $conexion->close();

        ?>

        <!--add comment -->
        <section id="newmessage"></section>
        <h2>Agregar comentario.</h2>
        <section id="register_form">
            <form method="post" action="">
                    Nombre:<br/>
                    <input type="text" class="form-control" id="name" name="name" size="40" /><br/><br/>
                    Comentario:<br/>
                    <textarea name="comment" id="comment" class="form-control" rows="6"></textarea>
                    <br/>
                    <section style="align-items: right;"> <input name="submit" class="btn btn-success" type="submit" value="Enviar" id="enviar-btn"/></section>
            </form>
        </section>


      </section>
      </section>

      <!--side options-->
      <section class="col-md-4" style="position: relative; top:70px;">
        <aside>
          <section class="card my-4">
            <h5 class="card-header">About me</h5>
            <section class="card-body">
              Soy un estudiante de ingeniería en software de 21, interesado en
              el contenido multimedia, so, estaré publicando post con mi opinión
              personal acerca de películas y series que haya visto y que me parezca
              que deben de ser recomendadas.
            </section>
          </section>
          <section class="card my-4">
            <h5 class="card-header">Categorias</h5>
            <section class="card-body">
              <section class="row">
                <section class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Películas</a>
                    </li>
                    <li>
                      <a href="#">Series</a>
                    </li>
                  </ul>
                </section>
              </section>
            </section>
          </section>
        </aside>
      </section>
    </section>
  </section>


  <!--footer -->
  <footer class="py-5 bg-dark" style="background-color: #2E4A62!important;">
    <section class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Eduardo Torres 2018</p>
    </section>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="method.js"></script>
  <script type="text/javascript" src="vendor/jquery/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="vendor/jquery/jquery-ui-1.8.6.min.js"></script>
</body>

</html>
