
<?php
//création d'un tableau html, puis d'une ligne d'en-tête où sont insérer les nombres de 0 à 12 par une boucle//
echo "<table><tr><th></th>"; 
for ($i=0; $i<=12; $i++)
{
    echo "<th>".$i."</th>";
}
echo "</tr>"; 
//boucle réalisant les multiplications de 0 à 12//
for ($x =0; $x <=12; $x++)
{
    echo"<tr>";
//A chaque passage de la boucle, les nombres de 0 à 12 sont insérés dans une colonne d'en-tête//
    echo "<th>".$x."</th>";
//boucle réalisant les multiplications de 0 à 12; résultats insérés ligne par ligne, cellule par cellule//
    for ($y = 0; $y <=12; $y++)
    {
        echo "<td>" .$y*$x."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>