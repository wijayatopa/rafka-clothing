<div class="container-fluid">
	<?php if( $this->session->flashdata('flash') ) : ?>
		<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Barang <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
				<button type="button" class="close" data-dismiss="alert" arial-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	</div>
	<?php endif;?>

	<div class="row mt-3">
	<div class="col-md-6">
	<button class=" btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>
	</div>
	</div>

	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>Kategori</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="3">Aksi</th>
		</tr>

		<?php
		$no=1;
		foreach($barang as $brg) : ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $brg['nama_barang']?></td>
			<td><?= $brg['keterangan']?></td>
			<td><?= $brg['kategori']?></td>
			<td><?= $brg['harga']?></td>
			<td><?= $brg['stok']?></td>
			<td><div class="btn btn-primary btn-sm"><i class="fas fa-search-plus"></i></div></td>
			<td><?= anchor('admin/data_barang/edit/' .$brg['id_barang'], '<div class="btn btn-success btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
			<td><?= anchor('admin/data_barang/hapus/' .$brg['id_barang'], '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		</tr>
		<?php endforeach; ?>
		
	</table>

</div>


<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/data_barang/tambah_aksi'); ?>" method="post" enctype="multipart/form-data">

        	<div class="form-group">
        		<label>Nama Barang</label>
        		<input type="text" name="nama_barang" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Keterangan</label>
        		<input type="text" name="keterangan" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Kategori</label>
        		<select class="form-control" name="kategori">
        			<option>Kaos</option>
        			<option>Kemeja Surfing</option>
        			<option>Kemeja Flanel</option>
        			<option>Celana Boxer</option>
        		</select>
        	</div>
        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Gambar Produk</label>
        		<input type="file" name="gambar" class="form-control">
        	</div>
        	
      </div>
      <div class="modal-footer">
        <a href="<?= base_url(); ?>admin/data_barang" class="btn btn-danger">Kembali</a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
