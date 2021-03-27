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

    public function verificacao($id) { //essa função verifica o usuário logado para mostrar na tela principal o nome dele
        global $pdo;

        $array = array(); //criando array
       
        $sql = "SELECT nome FROM cadastro WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) //se for maior que 0
        {
            $array = $sql->fetch(); //pegando nome do db
        }

        return $array; //é obrigatório retornar o array
    }

    public function uplodacao($novo_nome, $id) { //esse id vai receber o id que vem pela sessão
        global $pdo;

        $sql = "INSERT INTO arquivo (arquivo, datta, iduser) VALUES (:novo_nome, NOW(), :iduser);"; // o NOW() pega a data atual
        $sql = $pdo->prepare($sql); //preparar para consulta ao DB
        $sql->bindValue("novo_nome", $novo_nome);
        $sql->bindValue("iduser", $id);
        $sql->execute();
    }
}
?>