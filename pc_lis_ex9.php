<?php

function divisivel ($x, $y)
    {
        if ($x%$y==0)
            {echo "1 -\n$x é divisível por $y";}

        if ($x%$y!=0)
            {echo "0 -\n$x não é divisível por $y";}
    }

echo "Digite o número 1(x): ";
$x= (int) fgets(STDIN);

echo "Digite o número 2(y): ";
$y= (int) fgets(STDIN);

divisivel ($x, $y);