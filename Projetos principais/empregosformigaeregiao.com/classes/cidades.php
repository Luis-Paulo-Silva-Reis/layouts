<?php:

define("Formiga"); 
define("Arcos"); 
define("Iguatama"); 
define("Bambui"); 
define("Medeiros"); 
define("Pains"); 
define("Piumhi"); 
define("Lagoa_da_prata"); 

class cadastrar_vagas{



private $pdo;


    public function conectar($titulovaga, $Ddescvaga){
        global $pdo;
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=login','root','');
            echo 'conectado'; //teste
        } catch (PDOException $e) {
            $msgErro = $e->getMessage('erro');
        }

        
    }

    public function cadastrar_vagas($titulovaga, $Ddescvaga)
    {
        global $pdo;
        
       
            $sql = $pdo->prepare("INSERT INTO vagas (titulovaga, Ddescvaga,) VALUES (:t, :d)");
            $sql->bindvalue(":t",$titulovaga);
            $sql->bindvalue(":d",$Ddescvaga);
            
            $sql->execute();
            return true;
            
        

      
    }

}
?>