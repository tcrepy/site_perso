<?php

require_once('../tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->AddPage();

$montext = '<h1>Bienvenue sur St Pavut</h1>
<h2>voici notre catalogue</h2>
<p>nos manifestations...</p>';

$pdf->writeHTML($montext);

$pdf->Output('stpavut.pdf');

//----------------------------------------------------------------

//generation d'une page par manif
for ($i=0; $i<$pagemax; $i++) {

    //new page

    $pdf->AddPage();

    $montext = '
    <div class="item">
        <?php
        $mpp = $unemanif->manif_prix_place;
        $mi = $unemanif->manif_intitule;
        $mpp = $mpp*1.12265;
        ?>
        <?php echo  \'<p>\'.strtoupper($mi)?>
        au prix de <?php echo $mpp?> $ </p>
        <p>description : <?php echo $unemanif->manif_description?></p>
        <p>salle : <?php echo $unemanif->salle_nom?></p>
    
        <img src="http://195.83.128.55/~mmi15f05/saintpavut/assets/photos/<?php echo $unemanif->manif_photo  ?> "><hr>
    
    </div>';
}
?>