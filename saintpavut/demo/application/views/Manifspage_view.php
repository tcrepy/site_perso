<!--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->
<div class="manif" style="margin-top: 5%; margin-bottom: 2%;">

    <div class="content">
        <div class="haut">
            <h1>Nos Manifestations</h1>
            <a href="<?php echo base_url() ?>pdf">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Version pdf
                </button>
            </a>
            <div id="pagin">
                <?php echo $pagination ?>
            </div>
        </div>
        <div style="margin-left : 5%;">
            <div class="mdl-grid">
                <?php foreach ($tous as $unemanif) { ?>
                    <div class="item mdl-cell mdl-cell--3-col mdl-cell--4-col-phone mdl-cell--4-col-tablet">
                        <?php
                        $mpp = $unemanif->manif_prix_place;
                        $mi = $unemanif->manif_intitule;
                        $mpp = $mpp * 1.12265;
                        $id = $unemanif->manif_id;
                        ?>
                        <div class="desc">
                            <?php echo '<p>' . strtoupper($mi) ?>
                            au prix de <?php echo $mpp ?> $ </p>
                            <p><?php echo $unemanif->manif_description ?></p>
                            <p>salle : <?php echo $unemanif->salle_nom ?></p>
                        </div>
                        <img class="img_manif"
                             src="<?php echo base_url(); ?>public/photos/<?php echo $unemanif->manif_photo ?> ">
                        <br>
                        <img class="barre"
                             src="<?php echo base_url(); ?>Manifestation/barre/<?php echo $unemanif->manif_id ?>">
                        <br>
                        <a href="#"
                           onClick="window.open('<?php echo base_url() ?>detail/<?php echo $unemanif->manif_id ?>','_blank','toolbar=0, location=0, directories=0, status=0, scrollbars=1, resizable=1, copyhistory=0, menuBar=0, width=750, height=550, left=1000, top=400');return(false)">
                            <button class="detail mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                                Détails
                            </button>
                        </a>
                        <hr>

                        <!--<?php $this->load->model('Manif_model');
                        $manif = $this->Manif_model->get_manif_par_id($id);
                        $cam = $this->Manif_model->camembert($id); ?>

                        <script type="text/javascript">
                            // Load the Visualization API and the corechart package.
                            google.charts.load('current', {'packages': ['corechart']});

                            // Set a callback to run when the Google Visualization API is loaded.
                            google.charts.setOnLoadCallback(drawChart);

                            // Callback that creates and populates a data table,
                            // instantiates the pie chart, passes in the data and
                            // draws it.
                            function drawChart() {

                                // Create the data table.
                                var data = new google.visualization.DataTable();
                                data.addColumn('string', 'Topping');
                                data.addColumn('number', 'Slices');
                                data.addRows([
                                    <?php
                        foreach ($cam['rows'] as $cle => $val) {
                            echo "['" . $val['abo_ville'] . "'," . $val['total'] . "],";
                        }
                        ?>
                                ]);

                                // Set chart options
                                <?php foreach ($manif as $val) { ?>
                                var options = {
                                    'title': '<?php echo $val->manif_intitule;
                        } ?>',
                                    'width': 400,
                                    'height': 300,
                                    'is3D' : true
                                };

                                // Instantiate and draw our chart, passing in some options.
                                var chart = new google.visualization.PieChart(document.getElementById('camembert<?php echo $id ?>'));
                                chart.draw(data, options);
                            }
                        </script>
                        <?php if (!(empty($cam['rows']))) { ?>
                            <div id="camembert<?php echo $id ?>"></div>
                        <?php } else { ?>
                            <p>Il n'y a pas de réservation.</p>
                        <?php } ?>-->
                    </div>

                <?php } ?>
            </div>
        </div>
    </div>
</div>
