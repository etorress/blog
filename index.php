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
</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Eduardo Torres</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
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
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="my-4">Series</h1>

        <!-- post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">

          <div class="card-body">
            <h2 class="card-title">The Leftovers</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>

          <div class="card-footer text-muted">
            Publicado en septiembre 30, 2018 por
            <a href="#">Eduardo Torres</a>
          </div>
        </div>

        <!-- post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Westworld</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Publicado en septiembre 20, 2018 por
            <a href="#">Eduardo Torres</a>
          </div>
        </div>

        <!-- post -->
        <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Big Little Lies</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Publicado en septiembre 20, 2018 por
            <a href="#">Eduardo Torres</a>
          </div>
        </div>

        <!-- change page buttons -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>
        <div class="content">

        <!--comments section-->
        <h2>Comentarios</h2>
        <?php
          $formatohtml = "<div class=\"comment\">";
          //$consulta = $conexion->query("SELECT name, comment, DATE_FORMAT(date_added, '%d-%m-%Y %H:%i:%s') as date_show FROM comments ORDER BY date_added DESC LIMIT 0,20");
          $sql = "SELECT name, comment, DATE_FORMAT(date_added, '%d-%m-%Y %H:%i:%s') as date_show FROM comments ORDER BY date_added DESC LIMIT 0,20";
          $result = $conexion->query($sql);
          if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
              $formato = $fomarto . "<div class=\"comment\">";
              $formato = $formato . "<div class=\"comment-avatar\">";
              $formato = $formato . "<img width=\"48\" height=\"48\" src=\"user.png\" />	";
              $formato = $formato . "</div>";
              $formato = $formato . "<div class=\"comment-autor\">";
              $formato = $formato . "<strong>" . $row['name'] . "</strong><br/>";
              $formato = $formato . "<small>" . $row['date_show'] . "</small>";
              $formato = $formato . "</div>";
              $formato = $formato . "<div class=\"comment-text\">" . $row['comment'] . "</div>";
              $formato = $formato . "</div>";
              echo $formato;

            }
          }
          else{
            echo "0 results";
          }

          $conexion->close();

        ?>

        <!--add comment -->
        <div id="newmessage"></div>
        <h2>Envia un comentario con JQUERY/AJAX</h2>
        <div id="register_form">
            <form method="post" action="">
                    Nombre:<br/>
                    <input type="text" id="name" name="name" size="40" /><br/><br/>
                    Comentario:<br/>
                    <textarea name="comment" id="comment" rows="6" cols="65"></textarea>
                    <br/><br/>
                    <div style="margin-left: 480px;"> <input name="submit" type="submit" value="enviar" id="enviar-btn" /></div>
            </form>
        </div>


      </div>
      </div>

      <!--side options-->
      <div class="col-md-4">
        <div class="card my-4">
          <h5 class="card-header">Categorias</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Películas</a>
                  </li>
                  <li>
                    <a href="#">Series</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="card my-4">
          <h5 class="card-header">About me</h5>
          <div class="card-body">
            Soy un estudiante de ingeniería en software de 21, interesado en
            el contenido multimedia, so, estaré publicando post con mi opinión
            personal acerca de películas y series que haya visto y que me parezca
            que deben de ser recomendadas.
          </div>
        </div>
      </div>


    </div>
  </div>


  <!--footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Eduardo Torres 2018</p>
    </div>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="method.js"></script>
  <script type="text/javascript" src="vendor/jquery/jquery-1.4.2.min.js"></script>
  <script type="text/javascript" src="vendor/jquery/jquery-ui-1.8.6.min.js"></script>
</body>

</html>
