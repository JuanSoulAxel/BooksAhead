<?php //deu certo mas eu n entendi muito bem kkkkkk
include('conexao.php'); //incluindo conexao ao DB

session_start();

if(isset($_POST['btnEntrar']))
{
    $erros = array();

    $email = mysqli_escape_string($strcon, $_POST['txtEmailEntrar']);
    $senha = mysqli_escape_string($strcon, $_POST['txtSenhaEntrar']);

    if(empty($email) or empty($senha)) //se um dos dois estiver vazio
    {
        $erros[] = "CAMPO VAZIO";
    }    
    else
    {
        $sql = "SELECT email FROM cadastro WHERE email = '$email'";
        $resultado = mysqli_query($strcon, $sql);

        if(mysqli_num_rows($resultado) > 0) //se o número de linhas que existe nessa variável resultado é maior que zero
        { //se for maior do que zero é porque existe algum registro
            $sql = "SELECT * FROM cadastro WHERE email = '$email' and senha = '$senha'"; //selecionando todos os campos da tabela cadastro
            $resultado = mysqli_query($strcon, $sql);

              if(mysqli_num_rows($resultado) == 1) //se existir uma correspondÊncia é porque está certo
              {
                $dados = mysqli_fetch_array($resultado); //a variável $dados vai receber todos os valores de $resultado, que é a variável que pega todos os valores do banco de dados
                $_SESSION['id-usuario'] = $dados['id']; //pega id do db
                
                header('Location: principal.html');
              }                
              else
              { //caso não esteja correto
                $erros[] = "não confere";
              }
        }   
        else
        { //se não houver registro manda erro
            $erros[] = "Usuário inexistente";
        }
    }
}

if(mysqli_connect_error())
{
    echo "Falha".mysqli_connect_error();
}

?>