<form method="POST">
Qual o seu nome? <br>
<input type="text" name="nome" id="nome">
<br>
<input type="submit" value="Enviar">
</form>

<?php

$nome = filter_input(INPUT_POST, "nome");

$arquivo = file_get_contents("text.txt");

if($nome)
{
    $arquivo = $arquivo.(strlen($arquivo) > 0 ? "," : "").$nome;

    file_put_contents("text.txt", $arquivo);
}

echo '<h3>Lista de nomes</h3>
      <ul>';

    $arquivoArray = explode(",", $arquivo);

    if(strlen($arquivo) > 0)
    {
        foreach($arquivoArray as $key => $item)
        {
            echo '<li>'
                    .$item
                    .' - <a href="excluir.php?index='.$key.'">Excluir</a>'
                .'</li>';
        }
    }

echo '</ul>';
?>