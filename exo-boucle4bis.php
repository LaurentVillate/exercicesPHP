<?php
function calculator($a, $b, $operation)
{
    switch($operation)
    {
        case "Addition":
            $operation = $a+$b;
            break;
        case "Soustraction":
            $operation = $a-$b; 
            break;
        case "Multiplication":
            $operation = $a*$b;
            break;
        case "Division":
            $operation = $a/$b;
            break;
    }
    return $operation;
}

calculator(3, 6, $operation);
echo $operation;