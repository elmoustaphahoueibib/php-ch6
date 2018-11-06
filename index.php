<?php
$moyenne = 10;

switch ($moyenne){
    case $moyenne < 10 :
        echo "Vous avez été réfusé !";
        break;
    case $moyenne >= 14 :
        echo "Vous avez été admis avec mention bien Félicitation !";
        break;
    case $moyenne >= 12 :
        echo "Vous avez été admis avec mention  assez bien";
        break;
    case $moyenne < 12 :
        echo "Vous avez été admis avec mention  passable";
        break;
}

?>