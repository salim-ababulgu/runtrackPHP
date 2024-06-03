<!-- Affichage d'une variable "php" -->

<h3>Affichage d'une variable "php"</h3>
<?php
    $variable = "LaPlateforme_";

    echo $variable;
?>

<br>
<br>

<!-- Concatenation d'une variable "php" -->
<h3>Concatenation d'une variable "php"</h3>
<?php
    $variable = " LaPlateforme_ ";
    $variableDeux = "Vive ";
    $variableTrois = "!";

    $concatenation = $variableDeux . $variable . $variableTrois;

    echo $concatenation;
?>

<br>
<br>

<!-- Number en "php" -->
<h3>Les nombres en "php"</h3>
<?php
    $nombre = 6;

    echo $nombre;
?>

<br>
<br>

<!-- Addition d'une variable "php" -->
<h3>Addition d'une variable "php"</h3>
<?php
    $nombre = 6;
    $nombreAjoutee = 4;

    $addition = $nombre + $nombreAjoutee;

    echo $addition;
?>


<br>
<br>


<?php
// Affecter "false" à la variable et afficher à nouveau le contenu
$boolean = false;
echo $boolean . "<br>"; // N'affichera rien car false est converti en chaîne vide en PHP
?>