<?php
    include('C:\xampp\htdocs\prusia-biblioteca\db.php');

    if(!isset($_POST['search'])){
        $_POST['search'] = "";
        $search = $_POST['search'];
    }

    $search= $_POST['search'];

$query = "SELECT * FROM libros WHERE autoría LIKE '%$search%' OR ISBN LIKE '%$search%' OR título LIKE '%$search%'OR año LIKE '%$search%'";
// SELECT * FROM libros WHERE concat(author_name,author_lastname,title) LIKE '%$search%' -este es el código corto

$result = mysqli_query($conn,$query);



