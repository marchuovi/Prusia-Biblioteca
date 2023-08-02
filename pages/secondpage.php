
<?php
    include('C:\xampp\htdocs\prusia-biblioteca\db.php');
    include('C:\xampp\htdocs\prusia-biblioteca\partials\head.php');
    include('C:\xampp\htdocs\prusia-biblioteca\partials\header.php');
?>

<div>
    <form action="/prusia-biblioteca/pages/descriptionbook.php" method="POST">
        <label for="search">Prueba a buscar con ‘historia/ ISBN/ autoría...’</label>
        <input name="search" id="search" type="text">
            <button value="search" type="submit"> 
                <span class="material-symbols-outlined"></span>
            </button>
    </form>
</div>

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

   <?php include('C:\xampp\htdocs\prusia-biblioteca\partials\footer.php') ?>

   