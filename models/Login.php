<?php

require_once('./configuration/Connect.php');

class Login extends Connect {

    private $table;

    function __construct() 
    {
        parent::__construct();
        $this->table = 'users'; // Nome da tabela de usuários no banco de dados
    }

    //Verifica as credenciais no banco de dados
    function verifyCredentials($nome, $senha) 
    {
        $query = "SELECT * FROM $this->table WHERE nome = :nome";

        try{

        $stmt = $this->connection->prepare($query);
        $stmt->execute([':nome' => $nome]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($senha, $user['senha'])) {

            return $user; 
        } else {
            return false; 

        }
    }  catch (PDOException $e) {
        // Trate os erros de consulta ou conexão com o banco de dados aqui
        echo "Erro no banco de dados: " . $e->getMessage();
        return false;

    }
    
    }
}

?>