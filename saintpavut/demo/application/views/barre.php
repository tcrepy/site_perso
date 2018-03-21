<?php
header ("Content-type: image/png");

$image = imagecreate(200,100);

$gris = imagecolorallocate($image, 100, 100, 100);
$blanc = imagecolorallocate($image, 255, 255, 255);

$couleur_bar = imagecolorallocate ($image, 0, 160, 0);
imagefilledrectangle ( $image, 0, 10, 50, 90, $couleur_bar);
imagestring($image, 4, 25, 15, "1%", $blanc);

imagepng($image);

/*$connect = mysqli_connect("localhost",mmi15f05,RgNl, "basemmi15f05");
$tt=$_GET["num"];
$result=mysqli_query("SELECT salle_place_max,
SUM( abo_qte_place_reserv ) AS totalresa FROM reservations
INNER JOIN manifestations ON manifestations.manif_id =
reservations.manif_id_ INNER JOIN salles ON
manifestations.salle_code_ = salles.salle_code
WHERE manif_id =$tt");
$data=mysqli_fetch_object($result);
$nb= $data->totalresa;
$max = $data->salle_place_max;
$pourcent = round( $nb / $max );
$longueur = $pourcent * 2;
header ("Content-type: image/png");
$image = imagecreate(200, 100);
$couleur_fond = imagecolorallocate ($image, 100, 100, 100);
$couleur_bar = imagecolorallocate ($image, 0, 160, 0);
imagefilledrectangle ( $image, 0, 10, $longueur, 90, $couleur_bar);
$couleur_text = imagecolorallocate ($image, 255, 255, 255);
imagestring($image, 5, 30, 40, $pourcent."%", $couleur_text);
imagepng ($image);*/
?>