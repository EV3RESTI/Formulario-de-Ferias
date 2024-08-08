<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        align-items: center;
        background-image: url(https://claudia.abril.com.br/wp-content/uploads/2022/07/pexels-energepiccom-313690.jpg?quality=85&strip=info&w=720&h=440&crop=1);
        background-repeat: no-repeat;
        background-size: cover;
    }
    div{
        border: solid black 5px;
        background-image: linear-gradient(white, gray);
        border-radius: 10px;
        text-align: center;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        width: 60vw;
        margin-left: 20vw;
        margin-right: 20vw;
    }
    h1{
        font-size: 50px;
        color: black;
    }
    h2{
        font-size: 35px;
        color: black;
        border: 5px solid black;
        border-radius: 5px;
    }
    input{
        font-size: 28px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: black;
    }
    input:hover{
        font-size: 30px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        background-color: aliceblue;
        color: white;
    }
    button{
      font-size: 20px;
      border-radius: 5px;
      color: black;
    }
    button:hover{
     background-color: aliceblue;
     font-size: 25px;
     font-family:Arial, Helvetica, sans-serif;
     opacity: 70%;
        }
    </style>
</head>
<body>
    <div>
        <form action="ferias-processo.php" method="post">
            <h1>Fim das ferias</h1>
        <h1><?php
           echo "Hello World";
           echo "<br>";
           echo "Bem vindo de volta das ferias";
        ?></h1>
        <h2>Como voce se sente de volta?</h2>
        <input type="text" id="volta" name="volta" required>
        <h2>De 0 a 10 de uma nota para suas ferias</h2>
        <input type="number" id="nota" name="nota" required>
        <h2>qual foi sua experiencia nessas ferias?</h2>
        <input type="text" id="exp" name="exp" required>
        <h2>Sentiu saudade de qual professor?</h2>
        <input type="text" id="prof" name="prof" required>
        <h2>Quais são suas metas nesse 2°Semestre?</h2>
        <input type="text" id="meta" name="meta" required>
        <h2>O que vc precisa para fazer suas metas</h2>
        <input type="text" id="fazer" name="fazer" required>
        <h2>Qual nota de experiencia voce da para esse formulario?</h2>
        <input type="number" id="nota2" name="nota2" required>
        <br>
        <button value="enviar">Enviar</button>
        </form>
    </div>
</body>
</html>