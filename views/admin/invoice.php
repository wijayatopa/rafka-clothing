<div class="container-fluid">
	<h4>Invoice Pemesanan Produk</h4>

	<table class="table table-bordered table-hover table-striped mt-3">
		<tr>
			<td>Id Invoice</td>
			<td>Nama Pemesan</td>
			<td>Alamat Pengiriman</td>
			<td>Tanggal Pemesanan</td>
			<td>Batas Pembayaran</td>
			<td>Aksi</td>
		</tr>

		<?php foreach($invoice as $inv) : ?>
		<tr>
			<td><?php echo $inv->id_invoice;?></td>
			<td><?php echo $inv->nama;?></td>
			<td><?php echo $inv->alamat;?></td>
			<td><?php echo $inv->tgl_pesan;?></td>
			<td><?php echo $inv->batas_bayar;?></td>
			<td><?= anchor('admin/invoice/detail/'.$inv->id_invoice, '<div class="btn btn-sm btn-primary">Detail</div>') ; ?></td>
		</tr>

	<?php endforeach; ?>

	</table>
</div>