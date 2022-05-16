<?php
    $codigo_categoria = $_POST['select_alterar'];
    $novo_texto = $_POST['c_novo_texto'];

    echo "Pagina de Atualização";

    echo"<br>O codigo é: ".$codigo_categoria;
    echo"<br>O novo nome é: ".$c_novo_texto;

    //Verificar se existe categoria cadastrada!
    //Importando conexão
    require("connect.php");
    //Criando a SQL de pesquisa
    $sql_pesquisa =
    "SELECT * FROM `categoria` WHERE `descricao_categoria` = $codigo_categoria";
    //Executando a pesquisa
    $resultado_pesquisa = mysqli_query($conexão,$sql_pesquisa);
    //Transformando resultado em numero
    $numero_resultado = mysqli_num_rows($resultado_pesquisa);
    //Imprimindo na tela o valor de categorias encontradas
    echo "O numero de categorias com o nome pesquisado é de: ".$numero_resultado;
    //Se não existe... cadastra!
    //Se existir... voltamos para o formulario!
?>