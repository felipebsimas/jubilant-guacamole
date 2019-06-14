<?php

function maior ($numero1, $numero2)
    {
        $maior[0]=$numero1;
        $maior[1]=$numero2;
        rsort($maior);

        echo "O maior número foi o: $maior[0]";
    }

echo "Digite o número 1: ";
$numero1= (float) fgets(STDIN);

echo "Digite o número 2: ";
$numero2= (float) fgets(STDIN);

maior ($numero1, $numero2);