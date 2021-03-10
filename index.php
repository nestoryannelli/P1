<?php
 $characters= json_decode(file_get_contents('https://swapi.dev/api/people/'));
// echo '<pre>';
// print_r($characters);
// echo '<pre>';

?>


<?php 

foreach ($characters->results as $character): ?>
 
 <div class="col-12 col-md-5">
    <div class="card">
<div class="h2"><?php echo $character -> name; ?> <h2>
<p class="lead"> <?php echo "Altura: " . $character -> height . "cm"; ?></p>
<p class="lead"> <?php echo "Peso: " . $character -> mass . "kg"; ?></p>
<p class="lead"> <?php echo "Cor de cabelo: " . $character -> hair_color; ?></p>
<p class="lead"> <?php echo "Cor de pele: " . $character -> skin_color; ?></p>
<p class="lead"> <?php echo "Cor dos olhos: " . $character -> eye_color; ?></p>
<p class="lead"> <?php echo "Data de aniversário: " . $character -> birth_year; ?></p>
<p class="lead"> <?php echo "Gênero: " . $character -> gender; ?></p>

<!-- naves estrelares -->
<p class="lead"> Naves: </p>
<?php 


foreach ($character -> starships as $nave){

    $navesestrelares= json_decode(file_get_contents($nave));

    echo  '<li>'  . $navesestrelares -> name . '</li>';
}

?>

<!-- veículos -->
<p class="lead"> Veículos: </p>

<?php

foreach ($character -> vehicles as $veiculo){

    $veiculos= json_decode(file_get_contents($veiculo));
 
    echo '<li>'  . $veiculos -> name . '</li>';
}

?>


<!-- filmes -->
<p class="lead"> Filmes: </p>
<?php

foreach ($character -> films as $film){

    $the_film= json_decode(file_get_contents($film));
 
    // echo '<pre>';   
    // print_r($the_film);
    // echo '<pre>';

    echo '<li>'  . $the_film -> title . '</li>';
}

?>
