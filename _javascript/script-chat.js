/*essa função, através do document.getElementById, vai pegar e mostrar
o chat (chat.php), vai carregar e vai mandar pra dentro da div, atualizando
sempre que chegar mensagem nova*/
function ajax() {
    var req = new XMLHttpRequest();

    req.onreadystatechange = function() {
            
        if (req.readyState == 4 && req.status == 200) 
        {
            document.getElementById('blocoConversa-parte2').innerHTML = req.responseText;
        }
    } 
    
    req.open('GET', '_utility/chat-select-db.php', true);
    req.send();
}

setInterval(function(){ajax();}, 1000)