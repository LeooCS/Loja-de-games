<?php
    require("connect.php");
    
    $nome = $_POST ["c_nome"];
    $id_categoria = $_POST ["categoria_livro"];

    $pesquisar_descricao = "SELECT * FROM `jogos` WHERE nome_jogo = '$nome_jogo'";

    $resultado_descricao = mysqli_query($conexao, $pesquisar_nome);

    $numero_retorno = mysqli_num_rows($resultado_nome);
    
    if($numero_retorno == 0){

        $sql_cadastrar = "INSERT INTO `jogos`(`nome_jogo`,`id_categoria`) VALUES ('$nome_jogo',$id_categoria)";
        
        mysqli_query($conexao, $sql_cadastrar);

        ?>
            <script>
                alert("Jogo cadastrado!");
                window.location.replace("form_cadastrar_jogo.php");
        <?php
    }else{
        ?>
            <script>
                alert("Jogo já cadastrada");
                javascreipt:history.back();
            </script>
        <?php
    }
?>