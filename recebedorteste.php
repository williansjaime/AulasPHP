<?php

    echo '<pre>';
    print_r($_FILES);
    $permitidos = ['image/jpeg','image/jpg','image/png'];

    if(in_array($_FILES['arquivo']['type'],$permitidos)){
        $nome = md5(time().rand(0,1000)).'jpg';
        //$nome = $_FILES['arquivo']['name'];
        echo $_FILES['arquivo']['tmp_name'];
        move_uploaded_file($_FILES['arquivo']['tmp_name'],$nome);

        echo 'Arquivos salvo com sucesso!!';
    }else{
        echo 'Arquivos não permitido!!';
    }
    /*session_start();
    $nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST,'idade', FILTER_VALIDATE_INT);

    if ($nome && $email && $idade) {
        
        $expiracao = time() + (86400 * 30);
        setcookie('nome',$nome,$expiracao);

        echo 'NOME:'.$nome."<br/>";
        echo 'EMAIL:'.$email."<br/>";
        echo 'IDADE:'.$idade."<br/>";
    }else{
        $_SESSION['aviso'] = 'Preencha os itens corretamente!';

        header("Location: index.php");
        exit;
    }*/

?>