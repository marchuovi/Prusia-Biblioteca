
<?php
    include('db.php');
    include('partials/head.php');
    include('partials/header.php');
?>

<section class='containerBook'>

<?php
    $query="SELECT * FROM libros";
    $result_libros = mysqli_query ($conn, $query);
    while ($row = mysqli_fetch_array ($result_libros)) {

?>

<div class="card" style="width: 10rem;">
  <img src= <?php echo $row ['foto'] ?> class="card-img-top" alt="portada del libro">
  <div class="card-body">
    <h5><?php echo $row ['título'] ?></h5>
    <p class="card-text"> <?= $row ['autoría'] ?></p>
  </div>
</div>

   <?php } ?>

</section>

   <?php include('partials/footer.php') ?>