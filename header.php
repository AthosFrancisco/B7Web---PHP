<h1>Cabeçalho</h1>

<?php
if(isset($_COOKIE['nome'])){
    echo '<h3>'.$_COOKIE['nome'].'</h3>';
}
?>

<hr>