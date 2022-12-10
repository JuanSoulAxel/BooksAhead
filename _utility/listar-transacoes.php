<?php //essa parte vai fazer aparecer todas as postagens feitas            
global $pdo;

if ($pagina == "doacoes" || $pagina == "trocas") 
{
    if ($pagina == "doacoes") { $tipo = "D"; } 
    else if ($pagina == "trocas") { $tipo = "T"; }
} 

$pagina = 1;

if(isset($_GET['pagina']))
    $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);

if (!$pagina)
    $pagina = 1;

$limite = 10; //quantidade de itens em cada página

$inicio = ($pagina * $limite) - $limite;

$registros = $pdo->query("SELECT COUNT(*) count FROM transacao WHERE tipo = '$tipo' ")->fetch()["count"]; //contar quantos registros tem na tabela

$paginas = ceil($registros / $limite); //pra saber o número de páginas vai pegar os registros e dividir pelo limite = 4. o ceil vai fazer o retorno ser inteiro: arredonda pra cima.

$result = $pdo->query("SELECT cad.nome, cad.sobrenome, cad.imagem, tra.id, tra.livro, tra.comentario, tra.datta, tra.iduser FROM cadastro cad join transacao tra WHERE cad.id = tra.iduser AND tra.tipo = '$tipo' ORDER BY tra.id DESC LIMIT $inicio, $limite ")->fetchAll(); //LIMIT indice, quantidade de linhas que vai mostrar a partir dessa

foreach($result as $item):
include("_modelos/corpo-postagem2.php");
endforeach;
?>

<div id="paginacao">
    <a id="primeiraPaginacao" href="?pagina=1"> Primeira </a>

    <?php if($pagina>1): ?>
    <a id="voltarPaginacao" href="?pagina= <?=$pagina-1 ?>"> << </a>
    <?php endif; ?>

     <a id="numeroPaginacao"> <?=$pagina?> </a>

    <?php if($pagina<$paginas): ?>
    <a id="passarPaginacao" href="?pagina= <?=$pagina+1 ?>"> >> </a>
    <?php endif; ?> 
    <a id="ultimaPaginacao" href="?pagina= <?=$paginas ?>"> Última </a>
</div>