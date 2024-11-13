#!/usr/bin/php
<?php
function y($m) {
    $m = preg_replace("/\./", " x ", $m); // Remplace . par " x "
    $m = preg_replace("/@/", " y", $m); // Replace @ par " y"
    return $m;
}

function x($y, $z) {
    $a = file_get_contents($y); // Lis l'entierete du fichier passe en parametre et le stock dans $a
    $a = preg_replace("/(\[x (.*)\])/e", "y(\"\\2\")", $a); // Cherche le pattern [x *] et execute * dans y. * sera considere comme du code php grace a /e. \\2 Sert a prendre le deuxieme groupe capture donc *
    $a = preg_replace("/\[/", "(", $a); // Remplace [ par (
    $a = preg_replace("/\]/", ")", $a); // Remplace ] par )
    return $a;
}

$r = x($argv[1], $argv[2]);
print $r;

?>
