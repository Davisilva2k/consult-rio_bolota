<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultório dra Bolota</title>
</head>

<body>
    <div id="formulario_consultorio">
        <form action="./ProcessarScript.php" method="POST">
            <!-- titulo e caixa de texto de nome completo -->
            <label for="nome">Nome Completo:</label> <br>
            <input type="text" name="nome"> <br>
            <!-- /* titulo e calendário de data de nascimento*/ -->
            <label for="DataNascimento">Data de Nascimento:</label> <br>
            <input type="date" name="ano"> <br>
            <!-- /*titulo e campo de texto de Peso*/ -->
            <label for="Peso">Peso</label> <br>
            
            <input type="number" name="peso" step="0.01"><br>
            <!-- /* titulo e campo de texto de Altura*/ -->
            <label for="Altura">Altura</label> <br>

            <input type="number" step="0.01" name="altura"><br>
            <!-- /*titulo e botao radio de masculino e feminino*/ -->
            <label for="sexo">Sexo</label> <br>
            <input type="radio" name="sexo" value="masculino">Masculino
            <input type="radio" name="sexo" value="feminino">Feminino <br><br>
            
            <!-- /*botao de salvar*/ -->
            <input type="submit" value="Avaliar">
        </form>
    </div>
</body>

</html>