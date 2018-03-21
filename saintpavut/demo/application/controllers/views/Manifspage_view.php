
<h1>Nos Manifestations</h1>

<div id="pagin">
    <?php echo $pagination ?>
</div>

<?php foreach ($tous as $unemanif ){  ?>
<div class="item">
    <?php
    $mpp = $unemanif->manif_prix_place;
    $mi = $unemanif->manif_intitule;
    $mpp = $mpp*1.12265;
    ?>
    <?php echo  '<p>'.strtoupper($mi)?>
    au prix de <?php echo $mpp?> $ </p>
    <p>description : <?php echo $unemanif->manif_description?></p>
    <p>salle : <?php echo $unemanif->salle_nom?></p>

    <img src="http://195.83.128.55/~mmi15f05/saintpavut/assets/photos/<?php echo $unemanif->manif_photo  ?> "><hr>

</div>
<?php } ?>