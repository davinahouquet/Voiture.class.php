
<?php
    function chargerClasse($classe){
        require $classe . '.class.php';
        }
    spl_autoload_register('chargerClasse');

    $v1 = new Voiture("Peugeot", "408");
    $vel = new VoitureElec("BMW", "I3", 100);

    echo $v1->getInfos() . "<br/>";
    echo $vel->getInfos() . "<br/>";
?>