<?php

function maior ($numero1, $numero2)
    {
        if ($numero1>$numero2)
            {echo "O primeiro número($numero1) é maior que o segundo número($numero2)";}

        elseif ($numero1==$numero2)
            {echo "Os dois números tem o mesmo valor(são iguais)";}

        else {echo "O segundo número($numero2) é maior que o primeiro número($numero1)";}
    }

echo "Digite o número 1: ";
$numero1= (float) fgets(STDIN);

echo "Digite o número 2: ";
$numero2= (float) fgets(STDIN);

maior ($numero1, $numero2);