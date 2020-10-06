<?php
     //recebe os dados do formulario
    $nick = $_POST["nick"];
    $foto = $_FILE["foto"];

    //define o caminho 
    $destino = "fotos/";

    //armazena na variavel o novo nome
    $arquivo = basename($foto['name']);

   //concatena a variavel do caminho com o nome do arquivo 
   $destino = $destino . $arquivo; 

//testa se a funçao de upload rodar
if(move_uploaded_file($foto['tmp_name'], $destino)) {
    //pode colocar o sql de insert na sua tabela para gravar o caminho do arquivo alem do resto dos dados.

    echo "O arquivo $arquivo foi enviado.";
} else{
    echo "Ocorreu um erro. Tente novamente";
}

?>