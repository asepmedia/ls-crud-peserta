<div class="container mt-2">
	<div class="row">
		<div class="col-md-12">
			<div class="d-flex justify-content-between">
				<div>
					<h3 class="float-left">Tambah Peserta</h3>
				</div>
			</div>
		</div>
		<div class="py-3"></div>
		<div class="col-md-12">
			<form action="<?=base_url('peserta/doCreate');?>" method="POST">
				<div class="form-group">
					<h5 for="name">Nama Peserta</h5>
					<input type="text" name="nama" placeholder="Masukkan nama peserta" class="form-control">
				</div>
				<div class="py-2"></div>
				<div class="form-group">
					<h5 for="name">Catatan</h5>
					<textarea name="catatan" rows="3" class="form-control"></textarea>
				</div>
				<div class="py-2"></div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Simpan</button>
					
				</div>
			</form>
		</div>
	</div>
</div>
