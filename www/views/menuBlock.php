<?php require 'require.php'; ?>
	
	<?php require 'require.php';
	if ( User::requireUsuarioLocalMenu() )
	{
	?>
	<li>
		<a href='?in=8' target="_blank">
			<img class="img" src="/imagenes/ic_wahlberg_product_core_48.png8.png"/>
			*** Tabla ***				
		</a>
	</li>
	<li>
		<a href='?in=9' target="_blank">
			<img class="img" src="/imagenes/ic_wahlberg_product_core_48.png8.png"/>
			*** Cliente ***				
		</a>
	</li>
	<li>
		<div class="fixed">
			<button type="button" class="btn btn-primary" id="ocultar">Ocultar <span class="badge"><<</span></button>
		</div>
	</li>
	<?php
	}
	?>