<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal"data-target="#tambah_produk"><i class="fas fa-plus fa-sm"></i> Tambah Produk</button>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NAMA PRODUK</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOK</th>
            <th colspan="3"> AKSI</th>

</tr>

<?php
$no=1;
foreach($produk as $prd) : ?>

<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $prd->nama_prd ?></td>
    <td><?php echo $prd->keterangan ?></td>
    <td><?php echo $prd->kategori ?></td>
    <td><?php echo $prd->harga ?></td>
    <td><?php echo $prd->stok ?></td>
      <td><?php echo anchor('admin/data_produk/detail/'.$prd->id_prd,'<div class="btn btn-sm btn-success"><i class="fas fa-search-plus"><i></div>') ?></td>
    <td><?php echo anchor('admin/data_produk/edit/' .$prd->id_prd, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
    <td><?php echo anchor('admin/data_produk/hapus/' .$prd->id_prd,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"><i></div>') ?></td>
    
</tr>
<?php endforeach; ?>

</table>            
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_produk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">FORM INPUT PRODUK</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_produk/tambah_aksi'; ?>" method="post" enctype="multipart/form-data" >

        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="nama_prd" class="form-control">
</div>

<div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
</div>

<div class="form-group">
            <label>Kategori</label>
            <select name="kategori" class="form-control">
            <option>Minuman Panas</option>
            <option>Minuman Dingin</option>
            <option>Makanan Ringan</option>
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
            <label>Gambar Produk</label><br>
            <input type="file" name="gambar" class="form-control">
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>

      </form>
    </div>
  </div>
</div>