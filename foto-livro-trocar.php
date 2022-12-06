<?php
require '_php/conexao.php';
require_once '_php/UsuarioClass.php'; //chamar somente uma vez o arquivo


//verificar se usuário enviou livro
if(isset($_FILES['livro']))
{
    $u = new Usuario(); //instanciando para pegar o nome e sobrenome para pôr no nome da foto

    $logged = $u->verificacao($_SESSION['id']); //passando id para função verificação

    $id = $logged['id'];
    $comentario = $_POST['txtComentario']; //pegando o valor do campo comentário
    $tipo = 'T'; //para passar o tipo DOAR

    //strtolower = deixa tudo minúsculo
    //esse menos quatro é pra pegar os últimos quatro dígitos do nome do arquivo ex: "arquivo.jpg". Aí pegaria somente o ".jpg"
    $extensao = strtolower(substr($_FILES['livro']['name'], -4 )); 
    
    //o md5 vai criptografar o nome
    //o time vai retornar a hora atual
    //e por último a extensão
    $novo_nome = md5(time()) . $extensao; //isso evita que tenha nome de arquivos duplicados no servidor para que nenhum sobescreva o outro.

     //primeiro diretorio
     $diretorio0 = '_fotos-transacao/';

     //usando para criar a pasta
     mkdir($diretorio0, 0755);
 
     //segundo diretorio dentro do primeiro
     $diretorio00 = $diretorio0.'livros/';
 
     //usando para criar a pasta
     mkdir($diretorio00, 0755);
 
     //criando diretorio final
     $diretorio = $diretorio00.$_SESSION['id'].')'.$nomeUsuario.'/';
 
     //usando para criar a pasta
     mkdir($diretorio, 0755);
    
    //quando o php recebe um arquivo esse arquivo é automaticamente enviado para uma pasta temporária
    //para acessar a pasta se usa a função abaixo
    //na primeira parte a gente pega o nosso arquivo
    //acessar o atributo especial tmp_name que é do próprio php
    //e depois vai enviar para nosso diretorio criado acima e dar o novo nome a ele também criado a cima
    //ou seja, na primeira parte  a gente acessa o diretório e na segunda parte a gente copia para o nosso diretório
    move_uploaded_file($_FILES['livro']['tmp_name'], $diretorio.$novo_nome);
    
    //essa parte deu errado a aprte da calsse
    $u->adicionarLivro($novo_nome, $comentario, $tipo, $_SESSION['id']); //vai passar o nome do arquivo, comentário e o id do usuário atual para pôr como chave estrangeira
}
else
{
    header("Location: trocas.php");
}
?>