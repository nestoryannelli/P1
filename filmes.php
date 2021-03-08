<?php
 $characters= json_decode(file_get_contents('https://swapi.dev/api/films/'));
// echo '<pre>';
// print_r($characters);
// echo '<pre>';

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>P1</title>
  </head>
  <body>
  <div class="container">
  <div class=".col-sm-6">
<h1> FILMES DO STARS WARS</h1><br>

   
    <button type="button" class="btn btn-secondary btn-lg"> <a href="index.php"> PERSONAGENS </a></button>
    <button type="button" class="btn btn-secondary btn-lg"> <a href="planetas.php"> PLANETAS </a></button>
    <button type="button" class="btn btn-secondary btn-lg"> <a href="filmes.php"> FILMES </a></button>
    <button type="button" class="btn btn-secondary btn-lg"> <a href="naves.php"> NAVES </a> </button>
    <button type="button" class="btn btn-secondary btn-lg"> <a href="veiculos.php"> VEICULOS </a> </button>
    <button type="button" class="btn btn-secondary btn-lg"> <a href="especies.php"> ESPÉCIES </a>  </button>
    </div>
    </div>
  <br>

  <div class ="container py-5">
<div class="row">

<?php foreach ($characters->results as $character): ?>

<div class="col-12 col-md-5">
<div class="card">


<div class="h4"><?php echo $character -> name; ?> <h2>
<p class="lead"> <?php echo "Titulo: " . $character -> title; ?></p>
<p class="lead"> <?php echo "Episódio: " . $character -> Episode_id; ?></p>
<p class="lead"> <?php echo "Sinópse: " . $character -> opening_crawl; ?></p>
<p class="lead"> <?php echo "Diretor: " . $character -> director; ?></p>
<p class="lead"> <?php echo "Produtor: " . $character -> producer; ?></p>
<p class="lead"> <?php echo "Data de Lançamento: " . $character -> release_date; ?></p>


?>

<hr>




</div>
</div>
</div>
<?php endforeach; ?>

</div>
</div>

</body>
</html>
