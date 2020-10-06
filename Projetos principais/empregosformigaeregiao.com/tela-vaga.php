
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
        <div class="principal-alt">
            <a href="index.php"> <div class="logo">Empregos Formiga é região</div> </a>
        </div>
    </header>

    <section>
        
        <div class="center">
            <div class="formulario">
                <form method="POST">
                    <h2 style="color:black;text-align:center">Informaçoes sobre a vaga</h2>
                    <input type="text" name="addvaga" placeholder="Titulo vaga..." required style="text-align: center;">

                    <label for="story" style="color: black;text-align:center">Descrição da vaga:</label>
                    
                        <textarea  id="story" name="story" rows="5" cols="33" style="text-align:justify">
                            Veniam deserunt id do sint. Proident exercitation anim non do proident officia fugiat mollit consectetur do magna. Proident ex minim ut reprehenderit et eiusmod voluptate excepteur aliqua aliqua reprehenderit voluptate. Est sint non aliquip amet deserunt sit in velit dolor nisi deserunt magna aute. Et dolore cupidatat nulla ea. Anim irure sit reprehenderit veniam veniam nulla consectetur excepteur aliqua aliquip enim. Adipisicing sint ullamco ea consectetur ea elit.
                        </textarea>

                       <br>
                            

                    <input style="color:black;text-align:center;font-size: 20px;font-weight:bold;" type="submit" name="cadastrovaga" value="Cadastrar para a vaga">

                </form>
            </div>
        </div>
       
    </section>


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