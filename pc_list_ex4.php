<?php

function pesoideal ($sexo, $altura)
    {if ($sexo==1)
            {$pesoideal= (62.1*$altura)-44.7;
             echo "O seu peso na gravidade atual terrestre é de: $pesoideal"." Kgs";}

    elseif ($sexo==2)
            {$pesoideal= (72.7*$altura)-58;
             echo "O seu peso na gravidade atual terrestre é de: $pesoideal"." Kgs";}}

echo "Digite 1-feminino e 2-masculino: ";
$sexo= (int) fgets(STDIN);

if ($sexo!=1 and $sexo!=2)
    {echo "Você sabe qual a diferencia entre Sexo e Gênero? \n\n";
     echo "Enquanto sexo se refere às categorias inatas do ponto de vista biológico, ou seja, algo relacionado com feminino e masculino; o gênero diz respeito aos papeis sociais relacionados com a mulher e o homem (Moser, 1989).\nToda sociedade é marcada por diferenças de gênero, havendo, ainda, grande variação dos papeis associados em função da cultura e do tempo em que se vive. Ressalte-se, contudo, que a determinação social de gênero pode ser alterada por uma ação consciente tomada – inclusive por meio de políticas públicas.\nEm suma, enquanto sexo é uma categoria biológica, gênero é uma distinção sociológica.\nSexo é, em regra, fixo; já o papel de gênero muda no espaço e no tempo (principalmente com a tomada de consciência de distinções que são construídas socialmente, e que podem e devem ser em inúmeros casos ‘desconstruídas’, para que haja igualdade do ponto de vista social.\n";
     exit;}

echo "Digite a sua altura em cm: ";
$altura= (int) fgets(STDIN);
$altura= $altura/100;

echo pesoideal($sexo,$altura);
