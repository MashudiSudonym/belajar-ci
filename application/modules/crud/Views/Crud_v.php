<main class="mdl-layout__content">
	<div class="mdl-layout__tab-panel is-active" id="overview">
        <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
        	<div class="mdl-card mdl-cell mdl-cell--12-col">
            	<div class="mdl-card__supporting-text">
            		<h4>Ceritanya Data</h4>
            		<table class="mdl-data-table mdl-js-data-table">
						<thead>
							<tr>
								<th class="mdl-data-table__cell--non-numeric">No</th>
								<th class="mdl-data-table__cell--non-numeric">Nama</th>
								<th class="mdl-data-table__cell--non-numeric">Alamat</th>
								<th class="mdl-data-table__cell--non-numeric">Pekerjaan</th>
								<th class="mdl-data-table__cell--non-numeric">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$no = 1;
								foreach($user as $u){ 
							?>
							<tr>
								<td class="mdl-data-table__header--sorted-ascending"><?php echo $no++; ?></td>
								<td class="mdl-data-table__header--sorted-ascending mdl-data-table__cell--non-numeric"><?php echo $u->nama; ?></td>
								<td class="mdl-data-table__cell--non-numeric"><?php echo $u->alamat; ?></td>
								<td class="mdl-data-table__cell--non-numeric"><?php echo $u->pekerjaan; ?></td>
								<td class="mdl-data-table__cell--non-numeric">
									<a href="<?php echo base_url();?>crud/edit/<?php echo $u->id?>" class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect mdl-button--primary">
									  Edit
									</a>
									<a href="<?php echo base_url();?>crud/hapus/<?php echo $u->id?>" class="mdl-button mdl-js-button mdl-button--primary mdl-js-ripple-effect mdl-button--accent">
									  Hapus
									</a>
								</td>
							</tr>
						</tbody>
						<?php } ?>
					</table>
            	</div>
        	</div>
		</section>
	</div>
</main>