<?php
require '_php/conexao.php';
require_once '_php/UsuarioClass.php'; //chamar somente uma vez o arquivo


//verificar se usuário enviou arquivo
if(isset($_FILES['arquivo']))
{
    //strtolower = deixa tudo minúsculo
    //esse menos quatro é pra pegar os últimos quatro dígitos do nome do arquivo ex: "arquivo.jpg". Aí pegaria somente o ".jpg"
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4 )); 
    
    //o md5 vai criptografar o nome
    //o time vai retornar a hora atual
    //e por último a extensão
    $novo_nome = md5(time()) . $extensao; //isso evita que tenha nome de arquivos duplicados no servidor para que nenhum sobescreva o outro.

    //é para onde o nosso upload vai ser feito
    $diretorio = 'upload/';

    //usando para criar a pasta
    mkdir($diretorio, 0755);
    
    //quando o php recebe um arquivo esse arquivo é automaticamente enviado para uma pasta temporária
    //para acessar a pasta se usa a função abaixo
    //na primeira parte a gente pega o nosso arquivo
    //acessar o atributo especial tmp_name que é do próprio php
    //e depois vai enviar para nosso diretorio criado acima e dar o novo nome a ele também criado a cima
    //ou seja, na primeira parte  a gente acessa o diretório e na segunda parte a gente copia para o nosso diretório

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
    
    $u = new Usuario();

    $u->uplodacao($novo_nome, $_SESSION['id']); //vai passar o nome do arquivo e o id do usuário atual para pôr como chave estrangeira
}
else
{
    header("Location: perfil.php");
}

/*USAR ESSE DEPOIS PRA FAZER A PARTE DO BOTAO
//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrário acessa o ELSE
$SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);

if($SendCadImg)
{
    $nome_imagem = $_FILES['imagem']['name'];

    $sql = "INSERT INTO arquivo (arquivo) VALUES (:arquivo)"; 
    $sql = $pdo->prepare($sql); //preparar para consulta ao DB
    $sql->bindValue("novo_nome", $novo_nome);
}
else
{
    $_SESSION['msg'] = "<p>ERRO</p>";
    header("Location: perfil.php");
}
*/
?>