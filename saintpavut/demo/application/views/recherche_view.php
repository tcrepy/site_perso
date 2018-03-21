<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>recherche</title>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>
<body>
<script>

    $(document).ready(function () {
        $('#recherche').keyup(function () {
            var recherche = $('#recherche').val();
            if (recherche !== '') {
                $('#sortie').load('<?php echo base_url()?>Ajax/recherche/' + recherche);
            }
        });
    });


</script>

    <form action="#" class="form_recherche">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="recherche">
            <label class="mdl-textfield__label" for="recherche">Recherche...</label>
        </div>
    </form>

    <div id="sortie"></div>

</body>
</html>