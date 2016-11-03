<main class="mdl-layout__content">
	<div class="mdl-layout__tab-panel is-active" id="overview">
        <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        	<div class="mdl-card mdl-cell mdl-cell--12-col">
            	<div class="mdl-card__supporting-text">
            		<h4>Ceritanya Edit Data</h4>
            		<?php foreach($user as $u){ ?>
            		<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
            			<input type="hidden" name="id" value="<?php echo $u->id ?>">
            			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" name="nama" value="<?php echo $u->nama ?>">
							<label class="mdl-textfield__label" for="sample3">Nama</label>
						</div><br><br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" name="alamat" value="<?php echo $u->alamat ?>">
							<label class="mdl-textfield__label" for="sample3">Alamat</label>
						</div><br><br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>">
							<label class="mdl-textfield__label" for="sample3">Pekerjaan</label>
						</div><br><br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" value="Simpan">
						</div>
            		</form>
            		<?php } ?>
            	</div>
        	</div>
		</section>
	</div>
</main>