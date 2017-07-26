<div class="form-wrapper">
	<div class="form-content">
		<form name="contacto" id="contacto" novalidate>
			<div class="form-inputs-groups">	
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
				<div class="form-group">
				</div>
			</div>	
		</form>
	</div>
</div>