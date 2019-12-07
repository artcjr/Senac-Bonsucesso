<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>aula1</title>
</head>
<body>
    <h1>Olá mundo XXX</h1>
    <p><?php 
        

    if(isset($_GET["btnCalcular"]))  {
        $num1 = $_GET ["numero1"];
        $num2 = $_GET ["numero2"];
        $num3 = $_GET ["numero3"];
        $num4 = $_GET ["numero4"];

        $res = ($num1+ $num2 + $num3 + $num4) / 4;

    } else {
        $res = 0;
    }



        echo "Olá mundo";

        define("TITULO", "Meu site!!!!");

        $valor = "<b>Oi Turma!</b>";
        $resultado = 2+3;
        
        $script = "<script>alert('Olá');</script>";

        ?>
    </p> 
    <p><?= $valor ?></p> 
    <?php echo $resultado; ?>

    <h1><?php echo TITULO; ?></h1>
    <a href="formulario.php">Formulario</a>
    <h2><?=$res?></h2>
    
</body>
</html>
<?php echo $script; ?>