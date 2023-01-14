<div class="container-fluid">
	<h3><i class="fas fa-edit">EDIT DATA BARANG</i></h3>
		<div class="row mt-3">
			<div class="col-md-6">
	<?php foreach($barang as $brg) : ?>

		<form method="post" action="<?= base_url('admin/data_barang/update')?>">
			<input type="hidden" name="id_barang" class="form-control" value="<?= $brg['id_barang'] ;?>">
			<div class="form-group">
				<label>Nama Barang</label>
				<input type="text" name="nama_barang" class="form-control" value="<?= $brg['nama_barang'] ; ?>">
			</div>
			<div class="form-group">
				<label>Keterangan</label>
				<input type="text" name="keterangan" class="form-control" value="<?= $brg['keterangan'] ; ?>">
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-control" value="<?= $brg['kategori'] ; ?>">
			</div>
			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-control" value="<?= $brg['harga'] ; ?>">
			</div>
			<div class="form-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-control" value="<?= $brg['stok'] ; ?>">
			</div>

			<button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
			
		</form>
	<?php endforeach; ?>
</div>
</div>

</div>