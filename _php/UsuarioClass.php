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
       
        $sql = "SELECT * FROM cadastro WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $id);
        $sql->execute();

        if($sql->rowCount() > 0) //se for maior que 0
        {
            $array = $sql->fetch(); //pegando todos os valores do db
        }

        return $array; //é obrigatório retornar o array
    }
<<<<<<< HEAD
    
=======
>>>>>>> 0dd3e75e09e30a497b8da83755bbd2289863fb3f

    public function adicionarImagem($imagem, $id) {
        global $pdo;

        $sql = "UPDATE cadastro SET imagem = :imagem WHERE id= :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("imagem", $imagem);
        $sql->bindValue("id", $id);
        
        
        if($sql->execute())
        {
            echo
            "<script language='javascript' type='text/javascript'>
                alert('Foto adicionada com sucesso!'); 
<<<<<<< HEAD
                window.location.href='../perfil.php';
=======
                window.location.href='perfil.php';
>>>>>>> 0dd3e75e09e30a497b8da83755bbd2289863fb3f
            </script>";
        }
        else
        {
            echo
            "<script language='javascript' type='text/javascript'>
                alert('Infelizmente algo deu errado... <br>Tente novamente mais tarde!'); 
<<<<<<< HEAD
                window.location.href='../perfil.php';
=======
                window.location.href='perfil.php';
>>>>>>> 0dd3e75e09e30a497b8da83755bbd2289863fb3f
            </script>";
        }
    }

    public function adicionarCapa($capa, $id) {
        global $pdo;

        $sql = "UPDATE cadastro SET capa = :capa WHERE id= :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("capa", $capa);
        $sql->bindValue("id", $id);
        
        if($sql->execute())
        {
            echo
            "<script language='javascript' type='text/javascript'>
                alert('Capa adicionada com sucesso!'); 
<<<<<<< HEAD
                window.location.href='../perfil.php';
=======
                window.location.href='perfil.php';
>>>>>>> 0dd3e75e09e30a497b8da83755bbd2289863fb3f
            </script>";
        }
        else
        {
            echo
            "<script language='javascript' type='text/javascript'>
                alert('Infelizmente algo deu errado... <br>Tente novamente mais tarde!'); 
<<<<<<< HEAD
                window.location.href='../perfil.php';
=======
                window.location.href='perfil.php';
>>>>>>> 0dd3e75e09e30a497b8da83755bbd2289863fb3f
            </script>";
        }
    }

    public function adicionarLivro($novo_nome, $comentario, $tipo, $id) {
        global $pdo;

        $sql = "INSERT INTO transacao (livro, comentario, tipo, datta, iduser) VALUES (:novo_nome, :comentario, :tipo, NOW(), :id);";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("novo_nome", $novo_nome);
        $sql->bindValue("comentario", $comentario);
        $sql->bindValue("tipo", $tipo);
        $sql->bindValue("id", $id);
        
        if($sql->execute())
        {
            echo
            "<script language='javascript' type='text/javascript'>
                alert('Livro adicionado com sucesso!'); 
<<<<<<< HEAD
                window.location.href='../perfil.php';
=======
                window.location.href='perfil.php';
>>>>>>> 0dd3e75e09e30a497b8da83755bbd2289863fb3f
            </script>";
        }
        else
        {
            echo
            "<script language='javascript' type='text/javascript'>
                alert('Infelizmente algo deu errado... <br>Tente novamente mais tarde!'); 
<<<<<<< HEAD
                window.location.href='../perfil.php';
=======
                window.location.href='perfil.php';
>>>>>>> 0dd3e75e09e30a497b8da83755bbd2289863fb3f
            </script>";
        }
    }

    public function atualizarDados($nome, $sobrenome, $email, $telefone, $id) {
        global $pdo;

        $sql = "UPDATE cadastro SET nome = :nome, sobrenome = :sobrenome, email = :email, telefone = :telefone WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("sobrenome", $sobrenome);
        $sql->bindValue("email", $email);
        $sql->bindValue("telefone", $telefone);
        $sql->bindValue("id", $id);
        
        if($sql->execute())
        {
            echo
            "<script language='javascript' type='text/javascript'>
                alert('Dados atualizados com sucesso!'); 
<<<<<<< HEAD
                window.location.href='../perfil.php';
=======
                window.location.href='perfil.php';
>>>>>>> 0dd3e75e09e30a497b8da83755bbd2289863fb3f
            </script>";
        }
        else
        {
            echo
            "<script language='javascript' type='text/javascript'>
                alert('Dados não atualizados... Tente novamente depois.'); 
<<<<<<< HEAD
                window.location.href='../perfil.php';
            </script>";
        }
    }

    public function mandarMensagem($nome, $sobrenome, $telefone, $mensagem, $imagem, $idUsuario) {
        global $pdo;

        $sql = "INSERT INTO chat (nome, sobrenome, telefone, mensagem, imagem, iduser) VALUES (:nome, :sobrenome, :telefone, :mensagem, :imagem, :iduser)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $nome);
        $sql->bindValue("sobrenome", $sobrenome);
        $sql->bindValue("telefone", $telefone);
        $sql->bindValue("mensagem", $mensagem);
        $sql->bindValue("imagem", $imagem);
        $sql->bindValue("iduser", $idUsuario);

        if($sql->execute())
        {
            
        }
        else
        {
            echo
            "<script language='javascript' type='text/javascript'>
                alert('Infelizmente algo deu errado... <br>Tente novamente mais tarde!'); 
=======
>>>>>>> 0dd3e75e09e30a497b8da83755bbd2289863fb3f
                window.location.href='perfil.php';
            </script>";
        }
    }
}
?>