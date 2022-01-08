<?php
//Acessa o arquivo de funcoes do projeto
require_once 'functions.php';
//insere todos os dados dos pratos
$pratos = [
    'Bauru Oponente'=>[
                        'ingredientes' => 'Pão, alcatra picada, queijo, presunto, bacon, ervilha, milho, alface, tomate, cebola, maionese e ovo.',
                         'valor' => 20.00
                    ],
    'Bauru Alcatra'=> [
                    'ingredientes' => 'Pão, alcatra, queijo, presunto, alface, tomate, maionese e ovo.',
                    'valor'=> 18.00
    ],
    'Bauru Coracao'=>[
                    'ingredientes' =>'Pão, coração, queijo, alface,tomate, maionese e ovo' ,
                     'valor' => 17.00
    ],
   'X-Salada'=> [
     'ingredientes' => 'Pão, hamburguer artesanal, queijo, presunto, milho, ervilha, alface, tomate, maionese e ovo' ,
     'valor' => 15.00
    ],
    'X-Galinha'=>[
     'ingredientes' => 'Pão, galinha desfiada, queijo, presunto, alface, tomate, maionese e ovo',
     'valor' => 13.00
    ],
    'X-Calabresa'=>[
     'ingredientes' => 'Pão, calabresa, queijo, presunto, alface, tomate, maionese e ovo' ,
     'valor' => 15.00
    ],
    'X-Bacon'=>[
     'ingredientes' => 'Pão, hamburguer, bacon, queijo, presunto, alface, tomate, maionese e ovo',
     'valor' => 18.00
    ],
   'X-Milanesa'=>[
     'ingredientes' =>'Pão, hamburguer à milanesa, queijo, presunto, milho, ervilha, alface, tomate, maionese e ovo',
     'valor' => 17.00
    ],
    'Cachorro Quente'=>[
     'ingredientes' => 'Pão, salsicha, milho, ervilha, queijo, presunto, queijo ralado e batata palha',
     'valor' => 10.00
    ]
 ];

?>
<!doctype html>
<html lang="!">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CARDÁPIO</title>
</head>
<body>
    <h1>CARDÁPIO</h1>
    <dl>
        <?php foreach ($pratos as $nome=>$prato){?>
        <dt> <strong><?= $nome; ?></strong></dt>
            <dd> <em><?=$pratos[$nome]['ingredientes'];?> </em>
                <strong> R$<?= $pratos[$nome]['valor']?>.00</strong></dd>
        <?php } ?>
    </dl>
</body>
</html>
