<html>
    <head>
        <script> function excluir($id) {
    if(confirm('Deseja excluir?')) {
        document.location.href='../banco_de_dados/delete';}
    }
    </script>;
    </head>


<?php
include_once '../banco_de_dados/conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);


?>
</html>
