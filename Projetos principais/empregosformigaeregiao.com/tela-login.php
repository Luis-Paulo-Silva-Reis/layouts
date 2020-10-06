<?php
    session_start();
    if(empty($_SESSION['id_usuario']))
    {
        header("location: index.php");
        exit;
    }


?>

<?php 
    require_once 'classes/usuarios.php';
    $u = new Usuario;
   
?>

<?php

    
include('classes/config.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do perfil</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    
</head>
<body>
    
    <header>
        <div class="principal-alt">
            <a href="index.php"> <div class="logo">Empregos Formiga é região</div> </a>
        </div>
    </header>

    <?php
       
        $valor = isset($_SESSION['nome']) ? 'Conectado com sucesso !' : 'N';
            echo $valor;
            
            echo '<br/>';
            
            echo "Bem vindo(a) ". $_SESSION['nome'];

        


            
    ?>
        <h2 style="text-align: center;"> Editar meu perfil</h2>
        <h3 style="text-align: center;"> Apenas perfis completos podem se candidatar e receber notificações de vagas compatíveis.</h3>
        
        <div class="center">
            <div class="formulario-login">
                <form method="POST">

                    <h3 style="text-align: center;color:black;">Sobre você</h3><br>
                    
                        <input type="image" src="fotos/lp.jpg" alt="Submit" width="250px" height="250px"><br>
                    
                    <input type="text" name="nome" placeholder="Nome..." required maxlength="30" required><input type="text" name="sobrenome" placeholder="sobre nome" required maxlength="30" required>

                    <input type="text" name="email" placeholder="Número de telefone" required maxlength="40" required><input type="text" name="cidade" placeholder="Cidade" required maxlength="32" required>
                    
                    <input style="color:black;" type="submit" name="cadastro" value="Alterar perfil"><a href="http://localhost/projeto2/projeto2/index.php"><input style="color:black;" type="button" name="cadastro" value="Procurar vagas"></a>

                    <a href="http://localhost/projeto2/projeto2/tela-vagas.php"><input style="width:98.5%;font-size:15px" type="button" name="cadastro" value="Adicione uma vaga"></a>

                </form>
            </div>
        </div>
<!--
        <form action="recebe.php" method="post" [COLOR="Red"]enctype="multipart/form-data"[/COLOR]>
            <label> Nick: <input type="text" name="nick" /><label>
            <input type="file" name="foto" />
            <input type="submit" value="enviar"/>
        </form>
-->

       

    
</body>
</html>