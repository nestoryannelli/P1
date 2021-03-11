<?php
 $characters= json_decode(file_get_contents('https://swapi.dev/api/planets/'));
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

<!-- Meu CSS -->
<link rel="stylesheet" href="css/style.css">

<title>Consumo de Api - P1- Nestor E. Yannelli</title>
  </head>
  <body>
   ![logo](https://user-images.githubusercontent.com/71853664/110721001-58fb5d00-81ee-11eb-87e0-6af58ac695f1.jpg)



  <div class="container">
  <div class=".col-sm-6">
  

    <button type="button" class="btn btn-outline-warning">  <a href="index.php"> PERSONAGENS </a></button>
    <button type="button" class="btn btn-outline-warning">  <a href="planetas.php"> PLANETAS </a></button>
    <button type="button" class="btn btn-outline-warning">  <a href="filmes.php"> FILMES </a></button>
    <button type="button" class="btn btn-outline-warning">  <a href="naves.php"> NAVES </a> </button>
    <button type="button" class="btn btn-outline-warning">  <a href="veiculos.php"> VEICULOS </a> </button>
    <button type="button" class="btn btn-outline-warning"> <a href="especies.php"> ESPÉCIES </a>  </button>
    </div>
    </div>
    <br>
    <h1> PLANETAS:</h1><br>



    <div class ="container py-5">
    <div class="row">
    
    <?php foreach ($characters->results as $character): ?>
    
    <div class="col-12 col-md-5">
    <div class="card">
    <div class="h4"><?php echo $character -> name; ?> <h2>
    <p class="lead"> <?php echo "Período de rotação: " . $character -> rotation_period; ?></p>
    <p class="lead"> <?php echo "Período orbital: " . $character -> orbital_period; ?></p>
    <p class="lead"> <?php echo "Diametro: " . $character -> diameter; ?></p>
    <p class="lead"> <?php echo "Clima: " . $character -> climate; ?></p>
    <p class="lead"> <?php echo "Gravidade: " . $character -> gravity; ?></p>
    <p class="lead"> <?php echo "Terreno: " . $character -> terrain; ?></p>
    <p class="lead"> <?php echo "Água da superfície : " . $character -> surface_water; ?></p>
    <p class="lead"> <?php echo "População: " . $character -> population; ?></p>

  
    <p class="lead"> Moradores: </p>
    <?php

foreach ($character -> residents as $resident){

    $the_residents= json_decode(file_get_contents($resident));

    echo '<li>'  . $the_residents -> name . '</li>';
}

?>




    </div>
</div>
</div>
<?php endforeach; ?>

</div>
</div>

</body>
</html>
