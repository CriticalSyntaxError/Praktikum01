<?php
$link = new PDO('mysql:host=localhost;dbname=pwl20222','root','');
$link -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$link -> setAttribute(PDO::ATTR_AUTOCOMMIT,false);

$query = "SELECT ISBN,title,author,publisher,publish_year,genre.name AS 'nama_genre' FROM book INNER JOIN genre WHERE book.genre_id = genre.id;";
$stmt = $link->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
$link =null;
?>
<div class="container text-center mt-4">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            
<table class="table">
    <thead>
    <tr>
        <th scope="col">ISBN</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Publisher</th>
        <th scope="col">Publish_year</th>
        <th scope="col">Nama_genre</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach($result as $book ){
        echo '<tr>';
        echo '<td>'. $book['ISBN'] . '</td>';
        echo '<td>'. $book['title'] . '</td>';
        echo '<td>'. $book['author'] . '</td>';
        echo '<td>'. $book['publisher'] . '</td>';
        echo '<td>'. $book['publish_year'] . '</td>';
        echo '<td>'. $book['nama_genre'] . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>

</table>
        </div>
    </div>
</div>