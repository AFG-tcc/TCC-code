<?php
        if(isset($_POST['submit']))
        {
            // print_r('Nome: ' . $_POST['name']);
            // print_r('<br>');
            // print_r('email ' . $_POST['email']);
            // print_r('<br>');
            // print_r('telefone ' . $_POST['telefone']);
            // print_r('<br>');
            // print_r('genero ' . $_POST['sexo']);
            // print_r('<br>');
            // print_r('Data de nascimento ' . $_POST['data_nascimento']);
            // print_r('<br>');
            // print_r('Cidade ' . $_POST['cidade']);
            // print_r('<br>');
            // print_r('Estado ' . $_POST['estado']);
            // print_r('<br>');
            // print_r('endereco ' . $_POST['endereco']);
            // print_r('<br>');

            include_once('config.php');

            $nome = $_POST['name'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $telefone = $_POST['telefone'];
            $sexo = $_POST['sexo'];
            $data_nascimento = $_POST['data_nascimento'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado'];
            $endereco = $_POST['endereco'];
            
            $result = mysqli_query($conexao,"INSERT INTO usuarios(nome, email,senha, telefone, sexo, data_nasc, cidade, estado, endereco) 
            VALUES ('$nome', '$email','$senha', '$telefone', '$sexo', '$data_nascimento', '$cidade', '$estado', '$endereco')");

            header('location: login.php');
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 100vw;
            height: 100vh;
            background: #9e9fa1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box {
            width: 700px;
            background: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        img{
            width: 55px;
            height: 55px;
            margin-bottom: 20px;
            display: flex;
        }
        h2{
            margin-top: 0;
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .columns {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-top: 20px;
        }
        .column {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h3{
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
            margin-top: 20px;
        }
        .conta{
            margin-top: 25px;
            font-size: 15px;
        }
        select, input {
            margin-top: 5px;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <div class="box">
            <div>
                <img src="../img/perfil.svg" alt="">
                <h2>INFORME SEUS DADOS PARA CADASTRO</h2>
            </div>
            <form action="formulario.php" method="post">
                <div class="columns">
                    <div class="column dados">
                        <div> 
                            <h3>Nome Completo</h3>
                            <input type="text" name="name" maxlength="100"><br>
                        </div>  
                        <div>
                            <h3>Email</h3>
                            <input type="email" name="email"><br>
                        </div>
                        <div> 
                            <h3>Senha</h3>
                            <input type="password" name="senha" maxlength="100"><br>
                        </div>
                        <div> 
                            <h3>Telefone</h3>
                            <input type="tel" name="telefone" maxlength="20"><br>
                        </div>
                        <div> 
                            <h3>Gênero</h3>
                            <input type="radio" value="feminino" name="sexo">
                            <label for="feminino">Feminino</label>
                            <input type="radio" value="masculino" name="sexo">
                            <label for="masculino">Masculino</label>
                            <input type="radio" value="outro" name="sexo">
                            <label for="outro">Outro</label> 
                        </div>
                        <div> 
                            <h3>Data de Nascimento</h3>
                            <input type="date" name="data_nascimento"><br>
                        </div> 
                    </div>
                    <div class="column dados2">
                        <div> 
                            <h3>Estado</h3>
                            <select name="estado">
    <option value=""></option>
    <option value="AC">Acre</option>
    <option value="AL">Alagoas</option>
    <option value="AP">Amapá</option>
    <option value="AM">Amazonas</option>
    <option value="BA">Bahia</option>
    <option value="CE">Ceará</option>
    <option value="DF">Distrito Federal</option>
    <option value="ES">Espírito Santo</option>
    <option value="GO">Goiás</option>
    <option value="MA">Maranhão</option>
    <option value="MT">Mato Grosso</option>
    <option value="MS">Mato Grosso do Sul</option>
    <option value="MG">Minas Gerais</option>
    <option value="PA">Pará</option>
    <option value="PB">Paraíba</option>
    <option value="PR">Paraná</option>
    <option value="PE">Pernambuco</option>
    <option value="PI">Piauí</option>
    <option value="RJ">Rio de Janeiro</option>
    <option value="RN">Rio Grande do Norte</option>
    <option value="RS">Rio Grande do Sul</option>
    <option value="RO">Rondônia</option>
    <option value="RR">Roraima</option>
    <option value="SC">Santa Catarina</option>
    <option value="SP">São Paulo</option>
    <option value="SE">Sergipe</option>
    <option value="TO">Tocantins</option>
</select>

                        </div> 
                        <div>
                            <h3>Cidade</h3>
                            <input type="text" name="cidade"><br>
                        </div> 
                        <div> 
                            <h3>Endereço</h3>
                            <input type="text" name="endereco"><br>
                            <input class="conta" type="submit" name="submit">
                            </form>
                            <form action="../index.php" method="post">
                            <input class="conta" type="submit" name="submit" value="Voltar">
                            
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
    </form>
</body>
</html>
