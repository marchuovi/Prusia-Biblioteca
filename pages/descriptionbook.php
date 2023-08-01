<?php
    include('C:\xampp\htdocs\prusia-biblioteca\db.php');
    include('C:\xampp\htdocs\prusia-biblioteca\partials\head.php');
    
    include('C:\xampp\htdocs\prusia-biblioteca\partials\search.php');
?>

<main>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src= <?php echo $row ['foto'] ?> class="img-fluid rounded-start" alt="portada del libro: <?php echo $row ['título'] ?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row ['título'] ?></h5>
        <p class="card-text"> <?= $row ['autoría'] ?></p>
        <p class="card-text"><?= $row ['sinopsis'] ?></p>
        
        <a href="pages\secondpage.php" type="button" class="btn btn-warning">Ver otros libros</a>

      </div>
    </div>
  </div>
</div>

<section>
    <ul>
        <li><img src= <?php echo $row ['foto'] ?> class="img-fluid rounded-start" alt="Interior del libro: <?php echo $row ['título'] ?>"></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</section>

    <section>
    <article>
        <p>Ficha técnica</p>
        <p class="card-text"> ISBN: <?= $row ['ISBN'] ?></p>
        <p class="card-text"> Año: <?= $row ['año'] ?></p>
        <p class="card-text"> Editorial: <?= $row ['editorial'] ?></p>
        <!--<p class="card-text"> Categorías: </p>-->
    </article>

    <article>
        <h4>¡Me lo compro!</h4>
        <article>
            <a href="#" type="button" class="btn btn-warning">Nuevos</a>
            <a href="#" type="button" class="btn btn-warning">Segunda mano</a><!--Añadir a mi base de datos dos campos nuevos-->
        </article>
    </article>
    
    </section>
</main>

<?php include('C:\xampp\htdocs\prusia-biblioteca\partials\footer.php') ?>