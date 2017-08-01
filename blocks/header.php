<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">INSCRÍBETE</h4>
			</div>
			<div class="modal-body">
				<form name="contacto" id="contacto2" novalidate>
					<div class="form-group">
						<input type="hidden" name="campaignId" value="<?php echo $campaignId ?>">
						<input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="empresa" placeholder="Empresa" required/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="cargo" placeholder="Cargo" required/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="telefono" placeholder="Teléfono" required/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="correo" placeholder="Email" required/>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="programa" id="programa" readonly="readonly"/>
					</div>
					<div class="checkbox">
						<label for="terminos">
							<input type="checkbox" name="terminos" checked required>
							<i>Autorizo a ser contactado por teléfono o correo electrónico.</i>
						</label>
					</div>
					<div class="form-group">
						<input type="hidden" name="partnerId" value="<?php echo $partnerId ?>">
						<input type="hidden" name="type" value="<?php echo $type ?>">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-sub center-block">ENVIAR</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>