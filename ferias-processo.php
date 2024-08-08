<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        align-items: center;
        background-image: url(https://img.freepik.com/fotos-premium/sala-de-aula-sem-alunos_244125-52.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    div{
        border: solid brown 20px;
        background-image: linear-gradient(green,darkgreen);
        border-radius: 10px;
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        width: 60vw;
        margin-left: 20vw;
        margin-right: 20vw;
    }
    h1{
        font-size: 50px;
        color: white;
    }
    h2{
        font-size: 35px;
        color: white;
    }
    a{
        color: white;
        border: black solid 2px;
        margin-right: 50vw;
        font-size: 18px;
    }
    a:hover{
        color: black;
        border: white solid 2px;
    }
    </style>
</head>
<body>
<?php
        $volta = htmlspecialchars($_POST['volta']);
        $nota = htmlspecialchars($_POST['nota']);
        $exp = htmlspecialchars($_POST['exp']);
        $prof = htmlspecialchars($_POST['prof']);
        $meta = htmlspecialchars($_POST['meta']);
        $fazer = htmlspecialchars($_POST['fazer']);
        $nota2 = htmlspecialchars($_POST['nota2']);
        ?>
    <div>
    
        <h1>Respostas</h1>
        <h2><?php
        echo "Volta das Ferias:<br> R: ".$volta.".";
        echo "<br>";
        echo "<br>";
        echo "Nota das Ferias:<br> R: ".$nota.".";
        echo "<br>";
        echo "<br>";
        echo "Experiencia nas Ferias:<br> R: ".$exp.".";
        echo "<br>";
        echo "<br>";
        echo "Prfessor favorito:<br> R: ".$prof.".";
        echo "<br>";
        echo "<br>";
        echo "Meta do 2°Semestre:<br> R: ".$meta.".";
        echo "<br>";
        echo "<br>";
        echo "Somente o nescessario:<br> R: ".$fazer.".";
        echo "<br>";
        echo "<br>";
        echo "Formulario nota:<br> R: ".$nota2.".";
        ?></h2>

        <a href="index.php">Refazer o Formulario</a>
    </div>
</body>
</html>