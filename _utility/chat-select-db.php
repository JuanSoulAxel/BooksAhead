<?php 
include("verifica.php");

$sql = $pdo->query("SELECT * FROM chat");

foreach ($sql->fetchAll() as $key) {
    if($key['nome'] == $nomeUsuario) { //Se o nome da pessoa que enviou a mensagem for o mesmo que o do usuário atual, aparecerá o nome "Você" na mensagem.
        echo "<div id='balaoMensagemUsuario'> 
        <img id='imagemUsuarioMensagem' src='" . $key['imagem'] . "'></img>
        <h1 id='nomeUsuarioMensagem'>" . "Você" . "</h1>";
    }
    else {
        echo "<div id='balaoMensagemOutros'>
        <img id='imagemUsuarioMensagem' src='" . $key['imagem'] . "'></img>
        <h1 id='nomeUsuarioMensagem'>" . $key['nome'] . " " . $key['sobrenome']. "</h1>";
    }
    echo "<p id='mensagemUsuario'>" . $key['mensagem'] . "</p>  <br>";
    echo "<p id='dataMensagemUsuario'>". date('d/m/Y - H:i', strtotime($key['datta']))."</div>"; //função php de pegar a data e hora específica do banco de dados
}
?>