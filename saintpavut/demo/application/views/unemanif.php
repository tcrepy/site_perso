<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php foreach ($unemanif as $val){  echo $val->manif_intitule; }?></title>
</head>
<body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
        <?php foreach ($unemanif as $val){?>
        var options = {
            'title': '<?php echo addslashes($val->manif_intitule); }?>',
            'width': 700,
            'height': 500,
            'is3D': true
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('camembert'));
        chart.draw(data, options);
    }
</script>
<div class="manif" style="margin-top: 5%;">
    <?php if (!(empty($cam['rows']))) { ?>
        <div id="camembert"></div>
    <?php } else { ?>
        <p>Il n'y a pas de réservation.</p>
    <?php } ?>
</div>
</body>
</html>