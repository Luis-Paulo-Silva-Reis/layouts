<?php

include('classes/config.php');
   
    $c = new cadastrar_vagas;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do perfil</title>
    <link rel="stylesheet" href="css/styles.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    
</head>
<body>

    <header>
        <div class="center">
            <a href="index.php"> <div class="logo">Empregos Formiga é região</div> </a>
        </div><!--center-->
    </header>

    <section>
        
        <div class="center">
            <div class="formulario">
                <form method="POST">
                    <h2 style="color:black;text-align:center">Informaçoes necessarias para adicionar uma vaga</h2>
                    <input type="text" name="addvaga" placeholder="Titulo vaga..." required style="text-align: center;">

                    <label for="story" style="color: black;text-align:center">Informe a descrição da vaga:</label>
                    
                        <textarea  id="story" name="story" rows="5" cols="33" style="text-align:justify">
                            Veniam deserunt id do sint. Proident exercitation anim non do proident officia fugiat mollit consectetur do magna. Proident ex minim ut reprehenderit et eiusmod voluptate excepteur aliqua aliqua reprehenderit voluptate. Est sint non aliquip amet deserunt sit in velit dolor nisi deserunt magna aute. Et dolore cupidatat nulla ea. Anim irure sit reprehenderit veniam veniam nulla consectetur excepteur aliqua aliquip enim. Adipisicing sint ullamco ea consectetur ea elit.
                        </textarea>

                        <label for="cidades" style="color:black;text-align:center;margin-top:10px;margin-bottom:10px;">Selecione a cidade</label>
                            <select required>
                                <option value="Cidade" required>    Escolha uma cidade</option>
                                <option value="Formiga">            Formiga          </option>
                                <option value="Arcos">              Arcos            </option>
                                <option value="Iguatama">           Iguatama         </option>
                                <option value="Bambui">             Bambuí           </option>
                                <option value="Medeiros">           Medeiros         </option>
                                <option value="Pains">              Pains            </option>
                                <option value="Piumhi">             Piumhi           </option>
                                <option value="Lagoa da prata">     Lagoa da prata   </option>
                            </select>

                    <input style="color:black;text-align:center;font-size: 20px;font-weight:bold;" type="submit" name="addvagas" value="Adicionar vaga">

                </form>
            </div>
        </div>
       
    </section>

    <?php  

                                $Formiga = $_POST['Formiga'];
                                $Arcos = $_POST['Arcos'];
                                $Iguatama = $_POST['Iguatama'];
                                $Bambui = $_POST['Bambui'];
                                $Medeiros = $_POST['Medeiros'];
                                $Pains = $_POST['Pains'];
                                $Piumhi = $_POST['Piumhi'];
                                $Lagoa_da_prata = $_POST['Lagoa_da_prata'];
                                

                                $c->conectar("login","localhost","root","");
                                if($c->cadastrar_vagas($titulovaga, $descvaga)){
                                    ?>
                                    
                                    <div class="msg-sucesso"> Vaga cadastrada com sucesso</div>
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