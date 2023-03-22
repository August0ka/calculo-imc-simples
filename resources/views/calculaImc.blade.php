<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula Imc</title>
    <style>
        header {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: limegreen;
            font-family: Cambria, Arial;
        }

        section{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 80vh;
            font-family: Cambria, Arial;
            color: black;
        }

        form{
            font-family: Arial;
        }

        form div{
            display: flex;
            flex-direction: colune;
            margin-bottom: 15px;
        }

        form input, form textarea{
            outline: unset;
            padding: 20px;
            width: 100px;
            border: 1px solid forestgreen;
            border-radius: 20px;
        }

        h2{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: limegreen;
            font-family: Cambria, Arial;
        }

    </style>
</head>
<body>
    <header>
        <h1>Calculadora de imc</h1>
    </header>
    <section>
        <form method="get">
            <div>
                <b>Nome</b>
                <input type="text" name="Nome"> <br><br>
            </div>
            <div>
                <b>Peso</b>
                <input type="text" name="Peso"> <br><br>    
            </div>
            <div>
                <b>Altura</b>
                <input type="text" name="Altura"> <br><br>                
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div> 
        </form>
    </section>
    <h2>{{$dados['nome']}} de acordo com seu imc você se encaixa na categoria {{$imcResult}}</h2>
</body>
</html>