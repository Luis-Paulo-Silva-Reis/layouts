

<?php
class Usuario
{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $usuario, $senha)
    {
        global $pdo;
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=login','root','');
            echo 'conectado'; //teste
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();
        }

        
    }

    public function cadastrar($nome, $email, $senha)
    {
        global $pdo;
        //verificar se ja exista o email cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios where email = :e");

        $sql->bindvalue(":e",$email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            return false;
        }
        else{
            $sql = $pdo->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:n, :e, :s)");
            $sql->bindvalue(":n",$nome);
            $sql->bindvalue(":e",$email);
            $sql->bindvalue(":s",md5($senha));
            $sql->execute();
            return true;
            
        }

        //caso nao tenha
    }

    public function logar($email, $senha){
        global $pdo;
        //verificar se o email e senha estão cadastrados

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindvalue(":e",$email); //<--------------
        $sql->bindvalue(":s",md5($senha));     //<----------
        $sql->execute();
        if($sql->rowCount() == 1){
            $dado = $sql->fetch();
            session_start();
            $_SESSION['id_usuario'] =$dado['id_usuario']; //observe o nome da coluna de sua tabela
            $_SESSION['nome'] =$dado['nome']; //observe o nome da coluna de sua tabela
            return true; //a pessoa esta logado
        }
        
        else{
            return false; //n foi possivel logar

        }


        //criar 

    }
}
    
?>