<?php
   
   spl_autoload_register(function ($class_name) {
       include $class_name . '.php';
       echo $class_name;
   });
   include('php/mail.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Zharatos code">
    <meta name="keywords" content="landing pages,sites,paginas web,desenvolvimento de sites,venda de sites, pagina web, ">
    <meta name="author" content="zharatos code">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Zharatos code</title>
</head>
<body>
    
    <div class="header">
        <div class="center">
            <h1 style="color: white;padding: 10px;"> < Zharatos.Code /> </h1>
            <!--<img src="/imgs/logo.png">-->
        </div>
    </div>

    <div class="container-banner" style="background-image: url('imgs/header_bg.png');">
        <div class="center">
            <div>
        <div class="container-list">
            <ul>
                <li>Layout 100% responsivo !</li>
                <li> SEO (Otimização para motores de busca) !</li>
                <li>Experiência do usuário e experiência da interface sempre !</li>
                <li>Preços justos e competitivos !</li>
            </ul>    
        </div>
        </div>    
            
            <div>
            <div class="form">
                <h2 style="text-align: justify;color: black;font-weight: bold;">Informe seus dados e venha fazer um orçamento com a zharatos code.</h2>
                <form method="POST">
                    <div class="input-container">
                        <span>Nome</span>
                        <input type="text" name="nome" required/>
                    </div><!--input-container-->

                    <div class="input-container">
                        <span>E-mail</span>
                        <input type="email" name="email" required/>
                    </div><!--input-container-->

                    <div class="input-container">
                        <span>Telefone</span>
                        <input type="text" name="telefone" required/>
                    </div><!--input-container-->
                    
                    <div class="input-container">
                        <span>Mensagem</span>
                        <textarea name="mensagem" id="" cols="30" rows="10"></textarea>
                    </div><!--input-container-->

                    

                    <p class="warning">Campos obrigatórios!</p>
                     
                    <div class="input-submit-container">
                    <input type="submit" name="submit" value="Enviar"><br>
                    </div>        
                </form><!-- fecha o form-->
            </div><!--form class fechar-->
            </div>
            ?>
            <div class="clear"></div>
        </div><!--center-->
    </div><!--container-banner-->

    <div class="container-2">
        <div class="center">
            <h2 style="color: white;font-size: 35px;">Zharatos code</h2>
                <p style="color: rgba(255, 255, 255,0.89);">Atuamos na área da tecnologia da informação, uma empresa que se importa com sua marca e seu nome a zelar nesse incrível ambiente que e a internet, desenvolvemos   paginas web sobre medida, do jeito que você imaginar, garantimos que a pagina seja responsiva sempre, que a pagina funcione como se deve em qualquer dispositivo. qualidade no serviço sempre. venha fazer conosco um orçamento e tenha sua pagina que sempre sonhou na internet. </p>
        </div>
    
    <div class="arrow"></div>

    </div><!-- container-2 -->

    <div class="section-1">
        <div class="center">    
            
            <h2 style="color: black;font-size: 30px;">Conheça  mais sobre nossos serviços</h2>    
            <div class="container-section">
                
                <div class="container-single">
                    
                        <div><img src="imgs/layout-responsivo.jpg" alt=""></div>
                    <div class="text-container-single">
                        <h2>Paginas 100% responsivas</h2>
                            <p>Garantimos que sua pagina se adapte a qualquer dispositivo que for visualizada, todos os componentes do site se ajustam de forma automática para uma melhor experiência do usuário. podendo também ficarem dispostos da forma que quiser ou alterados da forma que achar melhor, a pagina ficara do jeito que você quiser, tanto no computador quanto em dispositivos moveis. </p>
                    </div>  
                </div>
            </div>

            <div class="container-section">
                
                <div class="container-single">
                    
                    <div><img src="imgs/Nocoes-basicas-de-SEO.jpg" alt=""></div>
                    <div class="text-container-single">
                        <h3>SEO Otimização para motores de busca</h3>
                        <p>Otimização de Sites (otimização para motores de pesquisa ou otimização para mecanismos de busca) é o conjunto de estratégias com o objetivo de potencializar e melhorar o posicionamento de um site nas páginas de resultados naturais (orgânicos) nos sites de busca gerando conversões, sejam elas, um lead, uma compra, um envio de formulário, agendamento de consulta e outros.</p>
                  </div>  
                </div>
            </div>

            <div class="container-section">
                
                <div class="container-single">
                    
                    <div><img src="imgs/criacao-de-layout-de-site.jpeg" alt=""></div>
                    <div class="text-container-single">
                        <h2>Preços justos e competitivos</h2>
                        <p>Também nos preocupamos com uma experiência justa para quem deseja adquirir uma pagina web na zharatos code, por isso nos importamos em sempre cobrar um valor justo e competitivo para ambas da partes, sendo assim quando iniciar uma negociação sempre chegaremos a um valor justo para ambas as partes. </p>
                    </div>  
                </div>
            </div>
        
        </div>
    </div>

    <div class="footer">
        <p>Todos os direitos reservados</p>
        <br>
        <p>Email pra contato : zharatoscode@gmail.com</p>    
        <br>
        <p>Telefone para contato 37 9-9992-2294</p>
    </div>

