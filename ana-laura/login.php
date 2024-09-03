<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        * {
            margin: 0;
        }
        .container {
            width: 100vw;
            height: 100vh;
            background: #9e9fa1;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
        .box {
            width: 400px;
            height: 400px;
            background: #fff;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        img {
            width: 55px;
            height: 55px;
            margin-top: 40px;
            display: flex;
        }
        h1 {
            margin-top: 15px;
            font-size: 17px;
            font-family: Arial, Helvetica, sans-serif;
        }
        h2 {
            margin-top: 30px;
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 5px;
        }
        .dados {
            display: flex;
            flex-direction: column;
        }
        h3 {
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            margin-top: 20px;
        }
        .conta {
            margin-top: 25px;
            font-size: 15px;
        }
        a{
            text-decoration:none;
            color:blue;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <img src="../img/perfil.svg" alt="">
            <h1>LOGIN</h1>
            <h2>INFORME SEUS DADOS</h2>
            <div class="dados">
                <form action="testelogin.php" method="post">
                    <h3>EMAIL:</h3>
                    <input type="email" name="email" maxlength="50" ><br>
                    <h3>SENHA:</h3>
                    <input type="password" name="senha" maxlength="50" >
                    <p ><a href="formulario.php"> Não possui cadastro? clique aqui </a></p>
                        <input class="conta" type="submit" name="submit" value="Enviar"> 
                </form>
            
    </div>
</body>
</html>
