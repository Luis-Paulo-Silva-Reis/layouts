<?php
    require_once 'classes/usuarios.php';
    $u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   

</head>
<body>

    <header>
        <div class="center">
            <a href="index.php"><div class="logo">Empregos Formiga é região</div></a>
            
            
            
          

        </div><!--center-->
    </header>


        <div class="center">
            <div class="formulario">
                <form method="POST">
                    <h2 style="color:black;text-align:center">Insira seus dados no formulario abaixo !</h2>
                    <input type="text" name="nome" placeholder="Nome..." required maxlength="30">
                    <input type="email" name="email" placeholder="Seu email..." required maxlength="40">
                    <input type="password" name="senha" placeholder="Sua senha..." required maxlength="32">
                    <input type="password" name="confsenha" placeholder="Confirmar senha..." required maxlength="32">
                    <input type="submit" name="cadastro" value="Cadastre-se!">
                </form>
            </div>
        </div>
        
        <?php
        
        if(isset($_POST['email']))
        {
            
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $confirmarsenha = addslashes($_POST['confsenha']);
            
            if(!empty($nome) && !empty($email) && !empty($senha) && !empty($confirmarsenha))
            {

                $u->conectar("login","localhost","root","");
                if($msmErro == ""){
                    if($senha == $confirmarsenha){
                       
                        if($u->cadastrar($nome, $email, $senha)){
                            ?>
                            
                            <div class="msg-sucesso"> Cadastrado com sucesso, faça seu login</div>
                           <?php
                       }else{
                           
                            ?>
                                <div class="msg-erro"> Email ja cadastrado, acesse para entrar</div>
                            <?php
                       }
                    }
                    else{
                        
                        
                        ?>
                            <div class="msg-erro"> As senhas não são iguais</div>
                        <?php
               }    
                    
                    }
                    

                }
                else
                {
                    ?>
                    <div class="msr-erro">
                        <?php echo "erro: ".$u->msgErro;?>
                    </div>
                    <?php 
                }

                
            }
            else{

                ?>
                <div class="msg-erro"> Preencha todos os campos</div>
            <?php
                
            }


        
        
        

        ?>

    <footer>
        
        <div class="center">
            <div class="w50">
            <p>Email lpreis2010@gmail.com</p>
            <p>Celular 37 999922294</p>
            </div>

            <div class="w50">
                <p class="direitos">Todos os direitos reservados</p>
            </div>
           
            <div class="clear"></div>
        </div>
    </footer>
    
</body>
</html>