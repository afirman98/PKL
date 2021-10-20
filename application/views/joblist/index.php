<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mt-5 text-gray-800">Tables Joblist Desainer</h1>
  <!-- tombol tambah  -->
  <!-- tutup tombol tambah -->

  <?php if($this->session->flashdata('flash')){ ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Barang<strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
          if($pes['NIP'] == $this->session->userdata("NIP") || $this->session->userdata("level") == "Kasir"){?>
        <tr>
            <td><?= $pes['id_pemesanan']; ?></td>
            <td><?= $pes['judul_pemesanan']; ?></td>
            <td><?= $pes['NIP']; ?></td>
            <td><?= $pes['tgl_pemesanan']; ?></td>
            <td><?= $pes['deskripsi']; ?></td>
            <td><?= $pes['status_pengerjaan']; ?></td>
            <?php if($this->session->userdata("level") == "Desainer" || $this->session->userdata("level") == "Admin" ){?>
            <td><a href="<?= base_url();?>joblist/editjob/<?= $pes['id_pemesanan'] ;?>" class="badge badge-primary">Edit</a></td>
        </tr>
        <?php  } }} ?>
      </table>
    </div>
  </div>
</div>

</div>