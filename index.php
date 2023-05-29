<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio04</title>
</head>
<body>
<form method="POST">

Escreva o Número

<input type="number" name="numero">
<button type="submit" name="verificar">verificar</button>

</form>

<?php

if (isset($_POST['verificar'])){

$numero = $_POST["numero"];




if ($numero % 2 == 0){

echo "O número é par!";

} else {

echo "O número é ímpar!";

}

}

?>
</body>
</html>