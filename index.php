<?php

$ingredientes = [
    'farinha',
    'ovo',
    'açúcar'
];

$bolo2 = [
    'chocolate',
    ...$ingredientes,
    'leite'
];
?>

<pre>

<?php print_r($bolo2); ?>

</pre>