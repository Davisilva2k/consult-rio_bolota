<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST["nome"]) && isset($_POST["ano"]) && isset($_POST["peso"])
    && isset($_POST["sexo"]) && isset($_POST["altura"])) {

        $nome = ucfirst($_POST["nome"]);
        $ano = $_POST["ano"];
        $anoNasc = new DateTime($ano);
        $dataAtual = new DateTime();
        $peso = $_POST["peso"];
        $sexo = $_POST["sexo"];
        $altura = $_POST["altura"];
        $idade = $anoNasc->diff($dataAtual)->y;

        $imc = $peso / pow($altura, 2);

        if($imc<18.5){
            $resultado = "Abaixo do peso";
        }else if($imc>=18.5 && $imc< 25){
            $resultado = "Peso ideal";
        }else if($imc>= 25 && $imc< 30){
            $resultado = "SobrePeso - gordo";
        }else{
            $resultado = "Obesidade Móbida!!";
        }
        if ($sexo == "masculino") {
            echo "Sr. seu nome é: $nome <br> 
        sua data de nascimento é $ano <br> 
        seu peso é: $peso <br>
         sua Altura é: $altura <Br>
          e seu imc é :". number_format($imc,2)." - $resultado ";
        } else {
            echo "Sra seu nome é: $nome <br> 
        sua data de nascimento é $ano <br> 
        seu peso é: $peso <br>
         sua Altura é: $altura <Br>
          e seu imc é : ". number_format($imc,2)." - $resultado";
        }
    } else {
        echo "os dados não foram fornecidos corretamentes";
    }

    ?>

</body>

</html>