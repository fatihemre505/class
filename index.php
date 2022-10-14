<?php require_once "classes/nesne.php"?>
<?php require_once "classes/elmalar.php"?>

<link rel="stylesheet" href="css/style.css">

<div class="meyveler">

    <a href="meyveler.php">Meyveler</a>

</div>
<div class="header">

    <h1>Php Class</h1>

</div>


<div class="container">


    <?php

    $diller = new Diller();
    
    echo  $diller->myname;
    echo  $diller->myproperty;  
    echo  $diller->MyMethod();
    echo $diller::message;

    $elmalarim = new Elmalarim();

    echo $elmalarim->ElmaGetir();
    echo $elmalarim->kirmizielma;
    echo $elmalarim->sarielma;
    echo $elmalarim->yesilelma;
    echo $elmalarim::neelmasi;

    ?>

</div>