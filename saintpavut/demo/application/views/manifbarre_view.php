<?php
$une = $uneseule[0];

$nb= $une->totalreserv;
$max = $une->salle_place_max;

if (isset($nb)){
    $pourcent = round( $nb / $max * 100);
}
else {
    $pourcent = 0;
}
$longueur = $pourcent * 2;
header ("Content-type: image/png");
$image = imagecreate(200, 25);
$couleur_fond = imagecolorallocate ($image, 100, 100, 100);
if ($pourcent < 100) {
    $couleur_bar = imagecolorallocate($image, 0, 160, 0);
} else {
    $couleur_bar = imagecolorallocate($image, 160, 0, 0);
}
imagefilledrectangle ( $image, 0, 0, $longueur, 25, $couleur_bar);
$couleur_text = imagecolorallocate ($image, 255, 255, 255);
imagestring($image, 5, 5, 5, $pourcent."%", $couleur_text);
imagepng ($image);
?>