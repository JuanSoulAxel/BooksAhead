<?php
class Usuario {
    public function login($email, $senha) {
        global $pdo;

        $sql = "SELECT * FROM cadastro WHERE email = :email AND senha = :senha";
        $sql = $pdo->prepare($sql); //preparar para consulta ao DB
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", $senha);
        $sql->execute(); //executar

        if($sql->rowCount() > 0) //conta a quantidade de registros com esse email e senha
        {
            $dado = $sql->fetch(); //fetch é uma função do pdo para pegar um dado em específico
            
            $_SESSION['id'] = $dado['id']; //criar uma sessão para o usuário e vai pegar o id da tabela usuário q foi passado através da variável $dados

            return true;
        }
        else
        {
            return false;
        }
    }

    public function cadastro($nome, $sobrenome, $email, $telefone, $senha, $sexo) {
        global $pdo;

        $sql = "INSERT INTO cadastro (nome, sobrenome, email, telefone, senha, sexo) VALUES (:nome, :sobrenome, :email, :telefone, :senha, :sexo);";
        $sql = $pdo->prepare($sql); //preparar para consulta ao DB
        $sql->bindValue("nome", $nome);
        $sql->bindValue("sobrenome", $sobrenome);
        $sql->bindValue("email", $email);
        $sql->bindValue("telefone", $telefone);
        $sql->bindValue("senha", $senha);
        $sql->bindValue("sexo", $sexo);
        $sql->execute(); //executar
    }
}
?>
