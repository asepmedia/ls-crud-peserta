<div class="container mt-2">
	<div class="row">
		<div class="col-md-12">
			<div class="d-flex justify-content-between">
				<div>
					<h3 class="float-left">Daftar Peserta</h3>
				</div>
				<div>
					<a href="<?=base_url('peserta/create');?>" class="btn btn-outline-primary">
						Tambah
					</a>
				</div>
			</div>
		</div>
		<div class="py-3"></div>
		<div class="col-md-12">
			<div class="table-responsove">
				<table class="table">
					<thead>
						<th>No.</th>
						<th>Nama</th>
						<th>Catatan</th>
						<th>Tanggal Daftar</th>
						<th></th>
					</thead>
					<tbody>
						<?php foreach($lists as $list):?>
							<tr>
								<td>
									<?=$list->id;?>
								</td>
								<td>
									<?=$list->nama;?>
								</td>
								<td>
									<?=$list->catatan;?>
								</td>
								<td>
									<?=$list->tanggal_daftar;?>
								</td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
