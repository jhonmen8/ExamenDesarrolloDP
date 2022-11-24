<?php require('require.php');

if(isset($tabla)) {
?>
<div class=" form-group-sm">
	<label class=" control-label" for="sm">Buscar Color: </label>
</div>

<div class="form-inline">
	<div class="form-group">
		<label class="col-sm-3 control-label" for="sm">Color: </label>
		<div class="col-sm-3">
		<select name="select"  id="miSelect">
		  <option value="brown" <?php if ($tabla[0]->color == "brown") echo "selected" ?>>Cafe</option>
		  <option value="red" <?php if ($tabla[0]->color == "red") echo "selected" ?>>Rojo</option>
		  <option value="green" <?php if ($tabla[0]->color == "green") echo "selected" ?>>Verde</option>
		  <option value="blue" <?php if ($tabla[0]->color == "blue") echo "selected" ?>>Azul</option>
		</select>
		</div>
	</div>

	<div class="form-group">
		<!--<div class="col-sm-offset-2 col-sm-10">-->
			<button type="button" class ="btn btn-default" id="Buscar" onclick="">
				<img src="/imagenes/search.png" width="20"/>
			</button>
			<button type="button" class ="btn btn-default" id="Descargar" onclick="">
				<img src="/imagenes/downl.png" width="20"/>
			</button>
		<!--</div>-->
	</div>
</div>

<hr>
<hr>
<hr>
<div class="main">
	<form role="form">
		<?php
		if($tabla != '') { ?>
			<table class="table" id="tabla1">
				<thead>
				<tr>
					<th>Tipo</th>
					<th>Color</th>
					<th></th>
				</tr>
				</thead>
				<tbody id='tabla' >
				<?php
				$j=0;
				if(count($tabla) > 1){
					foreach ($tabla as $m) {
						?>
						<tr>
							<td hidden><?= $m->id ?></td>
							<td><?= $m->type ?></td>
							<td><?= $m->color ?></td>
							<td>
								<button type="button" class="btn btn-default btn-ms" style="background-color:<?= $m->color ?>" ></button>
							</td>
						</tr>
						<?php
						
						$j++;
					}
				}
				else{
					?>
						<tr>
							<td hidden><?= $tabla[0]->id ?></td>
							<td><?= $tabla[0]->type ?></td>
							<td><?= $tabla[0]->color ?></td>
							<td>
								<button type="button" class="btn btn-default btn-ms" style="background-color:<?= $tabla[0]->color ?>" ></button>
							</td>
						</tr>
						<?php
				}
				?>
				
				</tbody>
			</table>
			<?php
		}
		?>
	</form>
</div>
		<?php
}
else
{
	?>
	<div class=" form-group-sm">
	<label class=" control-label" for="sm">Buscar Color: </label>
</div>

<div class="form-inline">
	<div class="form-group">
		<label class="col-sm-3 control-label" for="sm">Color: </label>
		<div class="col-sm-3">
		<select name="select" id="miSelect">
		  <option value="brown">Cafe</option>
		  <option value="red">Rojo</option>
		  <option value="green">Verde</option>
		  <option value="blue">Azul</option>
		</select>
		</div>
	</div>

	<div class="form-group">
		<!--<div class="col-sm-offset-2 col-sm-10">-->
			<button type="button" class ="btn btn-default" id="Buscar" onclick="">
				<img src="/imagenes/search.png" width="20"/>
			</button>
			
			<button type="button" style="display: none" class ="btn btn-default" id="Descargar" onclick="">
				<img src="/imagenes/downl.png" width="20"/>
			</button>
		<!--</div>-->
	</div>
</div>

<hr>
<hr>
	<?php

}
?>

