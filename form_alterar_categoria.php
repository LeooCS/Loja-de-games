<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="alterar_categoria.php">
        <h1>Alterar categoria</h1>
        <select name="select_alterar">
            <?php
                require("connect.php");

                $sql_pesquisar_categoria = "SELECT * FROM `categoria`";

                $resultado = mysqli_query($connect,$sql_pesquisar_categoria);

                $numero_resultado = mysqli_num_rows($resultado);

                if($numero_resultado == 0)
                    {
                    ?>
                
                    <script>
                        alert("Não existe a categoria selecionada");
                        window.location.replace("form_excluir_categoria.php");
                    </script>
                <?php
                }
                else
                {
                    echo"<select name='select_alterar':";
                    for($i=0;$i<$numero_resultado;$i++){
                        echo"<option> Teste </option>"

                    }
                    echo"</select>";
                }
            ?>
            <option>teste</option>
        </select>
        </p>
        Digite a nova categoria<br>
        <input type="text" name="c_novo_texto" size=30><br><br>
        <input type=submit value=Enviar>
    </form>
</body>
</html>