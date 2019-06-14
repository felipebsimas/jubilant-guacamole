<?php

function polegaresparacentimetros ($pol)
    {$cm= $pol*2.54;
    
        return $cm;}

echo "Digite as polegadas para a conversão: ";
$pol= (float) fgets(STDIN);

$cm= polegaresparacentimetros ($pol);

if ($pol==0)
    {echo "Obviamente que, 0 polegadas são 0 centímetros";}

if ($pol==1 or $pol==-1)
    {echo "$pol polegada equivale a $cm centímetros. ";
        if($pol==-1)
            {echo "Isso não faz sentido, como você ou qualquer um pode medir negativamente?\nExemplo: Aquela rua fica a -100 metros daqui";}}

if ($pol>1 or $pol<-1)
    {echo "$pol polegadas equivalem a $cm centímetros. ";
        if($pol<-1)
            {echo "Isso não faz sentido, como você ou qualquer um pode medir negativamente?\nExemplo: Aquela rua fica a -100 metros daqui";}}