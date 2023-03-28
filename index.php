<?php
    //Funcoes Nativas Data Hora
    echo date('d/my H:i:s');

    //Funcoes Nativas numericas
    /*echo pi();
    $numero = 2.75823;
    echo floor($numero);
    echo ceil($numero);
    echo round($numero,2);
    echo rand(3,9);*/
    
    //funcao recursiva
    /*function dividir($numero){
        $metade = $numero /2;
        echo $metade ."\n";
        if (round($metade) > 0) {
            dividir($metade);
        };
    }
    
    dividir(100);*/
    //Eron function
    /*$dizimo = fn($valor) => $valor * 0.01;
    echo $dizimo(6000);*/
    //passando variavel como parametro
    /*function soma(int $n1,int $n2,&$total){
        $total = $n1 + $n2;
    };
    
    $soma = 0;
    soma(10,5,$soma);
    echo "TOTAL:".$soma;*/
    
    /*
    //Definindo variavel como opcional
    function soma(int $n1,int $n2,int $n3 = 0){
        $total = $n1 + $n2;
        return $total;
    };
    
    echo "TOTAL:".soma(10,5);*/
    /*$ingredientes = [
        'açucar',
        'farinha de trigo',
        'ovo',
        'leite',
        'fermento em pó',];
    foreach($ingredientes as $chave=>$valor){
        //echo "Item ".($chave+1).": ".$valor."\n";
        echo $valor.PHP_EOL;
    }*/
    
    /*
    for($i = 0; $i< 10;$i++){
        echo "N: ".$i."\n";
    }*/

    /*$numero =0;

    while($numero < 10){
        echo "N: ".$numero."\n";
        $numero += 1;
    }*/
   
    /*
    $nome = 'Willians ';
    $nomeCompleto = $nome ?? 'Visitante';
    $nomeCompleto .= $sobrenome ?? 'bonitao';
    echo $nomeCompleto;*/
    /*$idade = 19;
    echo ($idade > 18) ? 'Maior de idade':'Menor de idade';
    */
    /*echo 'Opa primero programa';
    $variavel = 10;
    echo $variavel;
    $nome = 'willians';
    $sobrenome = 'Jaime';
    $nomeCompleto = $nome.$sobrenome;
    echo $nomeCompleto."\n";
    $ingredientes = [
                    'açucar',
                    'farinha de trigo',
                    'ovo',
                    'leite',
                    'fermento em pó',];
    echo $ingredientes[4]."\n";

    $bolo2 = [
            'vasilha',
            'agua morna',
            ...$ingredientes,
            'corante',
    ];

    echo $bolo2[3]."\n";
    print_r($bolo2); 
    */

?>