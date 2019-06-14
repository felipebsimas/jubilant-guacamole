<?php

function inciaisdias ($numero)
    {
            if ($numero==1 or $numero==8 or $numero==15 or $numero==22 or $numero==29)
                {echo "DOM";}

            if ($numero==2 or $numero==9 or $numero==16 or $numero==23 or $numero==30)
                {echo "SEG";}

            if ($numero==3 or $numero==10 or $numero==17 or $numero==24 or $numero==31)
                {echo "TER";}

            if ($numero==4 or $numero==11 or $numero==18 or $numero==25)
                {echo "QUA";}

            if ($numero==5 or $numero==12 or $numero==19 or $numero==26)
                {echo "QUI";}

            if ($numero==6 or $numero==13 or $numero==20 or $numero==27)
                {
                    if ($numero==13)
                        {echo "Sexta-feira e 13 mesmo, BIRL!\n";}                    
                        echo "SEX";}

            if ($numero==7 or $numero==14 or $numero==21 or $numero==28)
                {echo "SAB";}

            if ($numero<1 or $numero>31)
                {echo "Esse não é um dia válido";}
    }

echo "Digite o número do dia, Entendendo que o mês começa no domingo: ";
$numero= (int) fgets(STDIN);

inciaisdias ($numero);