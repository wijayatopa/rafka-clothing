<div class="container-fluid">
	<h4><strong>DETAIL PRODUK</strong></h4>
	<div class="col-md-6">
	<img src="<?= base_url();?>uploads/<?= $detail['gambar'];?>" width="200" height="300">
	</div>
	<div align="right" class="mt-3">
	<a href="<?= base_url();?>/dashboard/tambah_keranjang/<?= $detail['id_barang']?>" class="btn btn-sm btn-primary">Tambah Ke Keranjang</a>

	<a href="<?= base_url('dashboard');?>" class="btn btn-sm btn-danger">Kembali</a>
	</div>
	<div class="content">
		<div class="row" align="right">
		<div class="col-md-6">
		<table class="table">
			<tr>
				<th>Nama Produk</th>
				<td><?= $detail['nama_barang']; ?></td>
			</tr>
			<tr>
				<th>Keterangan</th>
				<td><?= $detail['keterangan']; ?></td>
			</tr>
			<tr>
				<th>Kategori</th>
				<td><?= $detail['kategori']; ?></td>
			</tr>
			<tr>
				<th>Harga</th>
				<td><span class="badge badge-pill badge-success">Rp. <?= number_format($detail['harga'], 0,',','.'); ?></span></td>
			</tr>
			<tr>
				<th>Stok</th>
				<td><?= $detail['stok']; ?></td>
			</tr>
		</table>
	</div>
</div>
</div>
</div>