<?php

function intervalo ($numeroinicial, $numerofinal)
    {   if ($numeroinicial>$numerofinal)
            {
                for ($i=$numeroinicial; $i>=$numerofinal; $i--)
                    {$intervalo+= $i;}
                     echo "A soma dos números no intervalo de $numeroinicial, até o $numerofinal, foi de: $intervalo";
            }

        elseif  ($numeroinicial<$numerofinal)
            {
                for ($i=$numeroinicial; $i<=$numerofinal; $i++)
                    {$intervalo+= $i;}
                     echo "A soma dos números no intervalo de $numeroinicial, até o $numerofinal, foi de: $intervalo";
            }
                
        elseif ($numeroinicial==$numerofinal)
            {echo "Os números são iguais";}    
    }

echo "Digite o número inicial: ";
$numeroinicial= (int) fgets(STDIN);

echo "Digite o número final: ";
$numerofinal= (int) fgets(STDIN);

intervalo ($numeroinicial, $numerofinal);