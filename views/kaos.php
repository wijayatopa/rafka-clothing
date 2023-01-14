<div class="container">

			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-indicators">
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			  </div>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="<?= base_url('assets/img/slider1.jpg')?>" class="d-block w-100" alt="...">
			    </div>
			    <div class="carousel-item">
			      <img src="<?= base_url('assets/img/slider2.jpg')?>" class="d-block w-100" alt="...">
			    </div>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			  </button>
			</div>

	<div class="row text-center mt-4">
		<?php foreach ($kaos as $brg) : ?>

			<div class="card ml-3 mb-3" style="width: 16rem;">
				<img src="<?= base_url('uploads/'.$brg['gambar']); ?>">
				
			 <div class="card-body">
			 	<h5 class="card-title mb-1"><?= $brg['nama_barang']; ?></h5>
			 	<small><?= $brg['keterangan']; ?></small><br>
			 	<span class="badge badge-pill badge-success mb-3">Rp. <?= number_format($brg['harga'], 0,',','.'); ?></span>
			 	<?= anchor('dashboard/tambah_keranjang/' .$brg['id_barang'], '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>');?>
			 	<a href="#" class="btn btn-sm btn-success">Detail</a>
			 </div>
			</div>

		<?php endforeach; ?>
	</div>
</div>