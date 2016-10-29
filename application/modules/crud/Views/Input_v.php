<main class="mdl-layout__content">
	<div class="mdl-layout__tab-panel is-active" id="overview">
        <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        	<div class="mdl-card mdl-cell mdl-cell--12-col">
            	<div class="mdl-card__supporting-text">
            		<h4>Ceritanya Tambah Data</h4>
            		<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
            			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" name="nama">
							<label class="mdl-textfield__label" for="sample3">Nama</label>
						</div><br><br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" name="alamat">
							<label class="mdl-textfield__label" for="sample3">Alamat</label>
						</div><br><br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-textfield__input" type="text" name="pekerjaan">
							<label class="mdl-textfield__label" for="sample3">Pekerjaan</label>
						</div><br><br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						    <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" value="Tambah">
						</div>
            		</form>
            	</div>
        	</div>
		</section>
	</div>
</main>