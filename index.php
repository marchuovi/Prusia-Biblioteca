
<?php
    include('C:\xampp\htdocs\prusia-biblioteca\db.php');
    include('C:\xampp\htdocs\prusia-biblioteca\partials\head.php');
    include('C:\xampp\htdocs\prusia-biblioteca\partials\header.php');
?>

<section class='containerBook'>

<?php
    $query="SELECT * FROM libros";
    $result_libros = mysqli_query ($conn, $query);
    while ($row = mysqli_fetch_array ($result_libros)) {

?>

<div class="card" style="width: 10rem;">
  <img src= <?php echo $row ['foto'] ?> class="card-img-top" alt="portada del libro: <?php echo $row ['título'] ?>" >
  <div class="card-body">
    <h5><?php echo $row ['título'] ?></h5>
    <p class="card-text"> <?= $row ['autoría'] ?></p>
  </div>
</div>

   <?php } ?>

</section>

  <a href="pages\secondpage.php" type="button" class="btn btn-warning">Descubre más libros</a>

   <?php include('C:\xampp\htdocs\prusia-biblioteca\partials\footer.php') ?>