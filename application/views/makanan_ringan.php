<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride=">
carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="
    active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="<?php echo base_url('assets/img/slide1.jpg') ?>" class="
    d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
    <img src="<?php echo base_url('assets/img/slide2.jpg') ?>" class="
    d-block w-100" alt="...">
    </div>
</div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role=
      "button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role=
"button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>

<div class="row text-center mt-4">

<?php foreach ($makanan_ringan as $prd) : ?>

  <div class="card" style="width: 16rem;">
  <img src="<?php echo base_url(). '/uploads/'.$prd->gambar ?>"
  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title mb-1><?php echo $prd->nama_prd ?></h5>
    <small><?php echo $prd->keterangan ?></small><br>
    <span class="badge badge-pill badge-success mb-3">Rp. <?php
    echo number_format($prd->harga, 0,',','.') ?></span>
    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$prd->id_prd,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
    <?php echo anchor('dashboard/detail/'.$prd->id_prd,'<div class="btn btn-sm btn-success">Detail</div>') ?>

</div>
   
   
<?php endforeach; ?>
    </div>
    </div>