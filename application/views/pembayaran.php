<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}

					echo "<h3>Total Belanjaan Anda : Rp. ".number_format($grand_total, 0,',','.');
				 ?>
	
			</div><br><br>

			<h2>Isi Alamat Pengiriman dan Pembayaran</h2>

			<form method="post" action="<?php echo base_url() ?> dashboard/proses_pesanan">
				
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>Nomor Telepon</label>
					<input type="text" name="no_telp" placeholder="Masukkan Nomor Telepon Anda" class="form-control">
				</div>
				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control">
						<option>GoFood</option>
						<option>GrabFood</option>
						<option>ShopeeFood</option>
					</select>
				</div>
				<div class="form-group">
					<label>Pembayaran Non-Tunai</label>
					<select class="form-control">
						<option>GoPay</option>
						<option>OVO</option>
						<option>ShopeePay</option>
						<option>DANA</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
				<a href="<?php echo base_url('dashboard/detail_keranjang/index') ?>"><div class="btn btn-sm btn-danger mb-3">Batal</div></a>
			</form>

			<?php
		} else
		{
			echo "Keranjang Belanjaan Anda Kosong, Silahkan memesan terlebih dahulu";
		}
		?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>