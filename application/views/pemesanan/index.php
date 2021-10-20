<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mt-5 text-gray-800">Tables Pemesanan</h1>
  <!-- tombol tambah  -->
  <?php if($this->session->userdata("level") != "Desainer") {?>
  <a href="<?= base_url(); ?>joblist/tambah" class="btn btn-primary mb-3">Tambah pesanan </a>
  <!-- tutup tombol tambah -->

  <?php }if($this->session->flashdata('flash')){ ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
			Pemesanan<strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
    <?php } ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tables Joblist</h6>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>id</th>
            <th>Judul Pemesanan</th>
            <th>Desainer</th>
            <th>Tanggal Pemesanan</th>
            <th>deskripsi</th>
            <th>status pengerjaan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>id</th>
            <th>Judul Pemesanan</th>
            <th>Desainer</th>
            <th>Tanggal Pemesanan</th>
            <th>deskripsi</th>
            <th>status pengerjaan</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
        <tbody>
        <?php foreach ($pesanan as $pes) {
          if($pes['NIP']== NULL){?>
        <tr>
            <td><?= $pes['id_pemesanan']; ?></td>
            <td><?= $pes['judul_pemesanan']; ?></td>
            <td><?= $pes['NIP']; ?></td>
            <td><?= $pes['tgl_pemesanan']; ?></td>
            <td><?= $pes['deskripsi']; ?></td>
            <td><?= $pes['status_pengerjaan']; ?></td>
            <?php if($this->session->userdata("level") == "Desainer"){?>
                <td><a href="<?= base_url();?>pemesanan/addjob/<?= $pes['id_pemesanan'] ;?>" class="badge badge-primary">Ambil Job</a></td>
            <?php }else if($this->session->userdata("level") == "Kasir"){?>
                <td>  <a href="<?= base_url(); ?>pemesanan/editpemesanan/<?= $pes['id_pemesanan'] ;?>" class="badge badge-warning">Edit</a>
                      <a href="<?= base_url(); ?>" class="badge badge-danger">Hapus</a></td>
            <?php }if($this->session->userdata("level") == "Admin" ){?>
                      <td> <a href="<?= base_url(); ?>pemesanan/editpemesanan/<?= $pes['id_pemesanan'] ;?>" class="badge badge-warning">Edit</a>
                      <a href="<?= base_url(); ?>" class="badge badge-danger">Hapus</a>
                      <a href="<?= base_url();?>pemesanan/addjob/<?= $pes['id_pemesanan'] ;?>" class="badge badge-primary">Ambil Job</a></td>
        </tr>
        <?php  } } } ?>
      </table>
    </div>
  </div>
</div>

</div>