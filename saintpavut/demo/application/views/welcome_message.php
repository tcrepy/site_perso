<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="container">
	<h1>Bienvenue sur le site catalogue Saint Pavut</h1>


</div>
<script>

	$(document).ready(function () {
		$('#recherche').keyup(function () {
			var recherche = $('#recherche').val();
			if (recherche !== '') {
				$('#sortie').load('<?php echo base_url()?>Ajax/recherche/' + recherche);
			} else if (recherche == ''){
				$('#sortie').html('');
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