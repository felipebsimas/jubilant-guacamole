<?php

function meses ($numeromes)
    {   
        if ($numeromes>12)
            {   
                $numeroano=$numeromes;
                $numeroano=$numeroano/12;
                
                if ($numeroano>floor($numeroano))
                    {$numeroano++;}

                $numeroano=floor ($numeroano);
                
                echo "Você foi para o $numeroano"."º ano\n";}

        if ($numeromes>12)
            {$numeromes=$numeromes-(12*$numeroano);
                if ($numeromes==0)
                    {$numeromes=12;}

             echo "Um ano no calendário romano tem apenas 12 meses\n";}

        if ($numeromes<0)
                {$numeromes=$numeromes+12;}

        if ($numeromes==1)
            {echo "O mês de número $numeromes é: Janeiro";}

        if ($numeromes==2)
            {echo "O mês de número $numeromes é: Fevereiro";}

        if ($numeromes==3)
            {echo "O mês de número $numeromes é: Março";}

        if ($numeromes==4)
            {echo "O mês de número $numeromes é: Abril";}

        if ($numeromes==5)
            {echo "O mês de número $numeromes é: Maio";}

        if ($numeromes==6)
            {echo "O mês de número $numeromes é: Junho";}

        if ($numeromes==7)
            {echo "O mês de número $numeromes é: Julho";}

        if ($numeromes==8)
            {echo "O mês de número $numeromes é: Agosto";}

        if ($numeromes==9)
            {echo "O mês de número $numeromes é: Setembro";}

        if ($numeromes==10)
            {echo "O mês de número $numeromes é: Outubro";}

        if ($numeromes==11)  
            {echo "O mês de número $numeromes é: Novembro";}

        if ($numeromes==12)
            {echo "O mês de número $numeromes é: Dezembro";}

        if ($numeromes<1 or $numeromes>12)
            {echo "Então,\nsinto em lhe informar mas, um ano(calendário romano) tem só 12(doze) meses, e não $numeromes meses";}
}

echo "Digite o número do mês: ";
$numeromes= (int) fgets(STDIN);

meses ($numeromes);
