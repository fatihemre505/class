<?php require_once "classes/meyveler.php"?>

<link rel="stylesheet" href="css/style.css">

<div class="meyveler">
    <a href="index.php">Anasayfa</a>
</div>


<div class="header">

    <h1>Php Class</h1>

</div>


<div class="container">

    <?php 

    $elma       = new Meyve();
    $muz        = new Meyve();
    $portakal   = new Meyve();

    $elma->setName("Elma");
    $elma->setColor("Yeşil");

    echo  $elma->getName()."-".$elma->getColor();
    echo "<br>";

    $portakal->setName("Portakal");
    $portakal->setColor("Turuncu");

    echo  $portakal->getName()."-".$portakal->getColor();

    echo "<br>";

    $muz->setName("Muz");
    $muz->setColor("Sarı");

    echo $muz->getName()."-".$muz->getColor();

   echo "<hr>";
   echo "<br>";
   echo "<span style='color:red; background:#000; padding:3px;'>nesnenin class tan üretilme sorgusu</span>";
   echo "<br>";


   echo var_dump($muz instanceof Meyve);
   echo var_dump($salatalik instanceof Meyve);

?>

</div>