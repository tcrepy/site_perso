<div class="salle" style="margin-bottom: 5%;">
    voici nos salles
    <hr>
    <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
        <thead>
        <tr>
            <th class="mdl-data-table__cell--non-numeric">Nom de la salle</th>
            <th>Code de la salle</th>
            <th>Nombre de place</th>
            <th>Nombre de m² par place</th>
        </tr>
        </thead>

    <?php foreach ($tous as $unarticle) { ?>
        <tbody>
        <tr>
            <td class="mdl-data-table__cell--non-numeric"><?php echo $unarticle->salle_nom ?></td>
            <td><?php echo $unarticle->salle_code ?></td>
            <td><?php echo $unarticle->salle_place_max ?></td>
            <td><?php
                $s = $unarticle->salle_surface;
                $pm = $unarticle->salle_place_max;
                echo $s / $pm .' m²'?></td>
        </tr>
        </tbody>
    <?php } ?>
    </table>
</div>
