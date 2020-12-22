
    <?php
    function Calculator ($a, $b){
        $addition = $a+$b;
        $soustraction = $a-$b;
        $multiplication = $a*$b;
        $division = $a/$b;
        $result = [$addition, $soustraction, $multiplication, $division];
        return $result; 
    }
    $resultat = calculator(3, 6);
    echo "Résultat addition : $resultat[0] \n";
    echo "Résultat soustraction : $resultat[1] \n";
    echo "Résultat multiplication : $resultat[2] \n";
    echo "Résultat division : $resultat[3] \n";
    ?>