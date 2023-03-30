<!--form method="POST" action="recebedor.php" enctype="multipart/form-data">
    <input type="file" name="arquivo"/>
    <input type="submit" value="Enviar">
</form-->
<?php
    $array = [
        'nome' => 'Bonieky',
        'idade' => 90,
        'empresa' => 'wj',
        'cor' => 'Azul',
        'profissao' => 'Fazedor de bolo',
    ];

    $chaves = array_keys($array);
    $valor = array_values($array);
        
    //Mover e renomear arquivo php
    //rename('texto.txt', 'pasta/texto.txt');
    //copy('texto.txt','texto2.txt');
    //Excluindo arquivos
    // unlink('textocopy.txt');
    // echo'Arquivo textocopy.txt excluido com sucesso';
    //Lendo e escrevendo no arquivo
    //$texto = file_get_contents('texto.txt');
    //$texto .="\nWillians jaime";
    //file_put_contents('texto.txt',$texto);
     
    //Lendo arquivos externo
    /*$texto = file_get_contents('texto.txt');
    echo $texto;
    $texto = explode("\n",$texto);
    echo "LINHAS:".count($texto);*/

/*session_start();
require('header.php');

if ($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    
    $_SESSION['aviso'] = '';
}*/
    //Funcoes Nativas Data Hora
    //echo "<h1>Willians jaime</></br>";
    //echo date('d/m/y H:i:s');
?>

<table border = "1">
    <tr>
        <?php foreach($chaves as $chave):?>
            <th><?php echo $chave;?></th>
        <?php endforeach;?>
    </tr>
    <tr>
        <?php foreach($valor as $valor):?>
            <td><?php echo $valor;?></td>
        <?php endforeach;?>
    </tr>   
    
</table>

<!--a href="apagar.php">Apagar Cookie</a>

<form method="POST" action="recebedor.php">
    <label>
        Nome:
        <br>
        <input type="text" name="nome">
    </label>
    <br>
    <br>
    <label>
        E-mail:
        <br>
        <input type="text" name="email">
    </label>
    <br>
    <br>
    <label>
        Idade:
        <br>
        <input type="text" name="idade">
    </label>
    <br>
    <br>
    <input type="submit" value = "Enviar">

</form -->