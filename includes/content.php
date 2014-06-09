<?php

?>

		<div id="main">

<?php

include 'content/'.$tab.'.php';

?>
			<hr />
			
			<div id="err_form">
				<h2>Su mensaje:</h2>
				<p><label for="err_email">Su E-mail (opcional):</label> <input type="text" id="err_email" name="err_email" /></p>
				<p><label for="err_url">Página (url):</label> <input type="text" disabled="disabled" id="err_url" name="err_url" /></p>
				<p><label for="err_desc">Sugerencia o informe de error:</label> <textarea name="err_desc" id="err_desc" cols="92" rows="20"></textarea></p>
				<p class="submit"><input type="button" value=" Enviar " onclick="sendErr()" /></p>
				<div class="err_close" onclick="hideError()">Cerrar [X]</div>
			</div>
			<div id="err_sent">
				<h2>Gracias por su colaboración.</h2>
				<div class="err_close" onclick="hideSent()">Cerrar [X]</div>
			</div>
			
		</div><!-- div id="main" -->