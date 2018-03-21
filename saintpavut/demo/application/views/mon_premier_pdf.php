<?php
require_once('public/TCPDF/tcpdf.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->AddPage();

$montext = '<div style="text-align: center;"><h1>Bienvenue sur St Pavut</h1>
<h2>voici notre catalogue</h2>
<p>Ces informations sont disponibles sur notre site.</p>
<img src="'.base_url().'public/photos/after02.jpg">
</div>';

$pdf->writeHTML($montext);

//----------------------------------------------------------------

foreach ($tous1 as $manifestations)
{
    $mpp = $manifestations->manif_prix_place;
    $mi = $manifestations->manif_intitule;
    $mpp = $mpp*1.12265;
    $pdf->AddPage();
    $montext = '
    <div class="item" style="text-align: center;">
        <p>'.strtoupper($mi). 'au prix de'.$mpp.' $ </p>
        <p>description : '.$manifestations->manif_description.'</p>
        <p>salle : '.$manifestations->salle_nom.'</p>
    
        <img src="'.base_url().'public/photos/'.$manifestations->manif_photo .' ">
    
    </div>';
    $pdf->writeHTML( $montext);
}
$pdf->Output("stpavut.pdf");

?>