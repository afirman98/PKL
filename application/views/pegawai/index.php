<div class="container-fluid">
<!-- Page Heading -->
<h1 class="h3 mt-5 text-gray-800">Tables Pegawai</h1>
  <!-- tombol tambah  -->
  <a href="<?= base_url(); ?>pegawai/tambah" class="btn btn-primary mb-3">Tambah Pegawai </a>
  <!-- tutup tombol tambah -->

  <?php if($this->session->flashdata('flash')){ ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Pegawai<strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
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
            <th>NIP</th>
            <th>nama</th>
            <th>username</th>
            <th>Tempat,tanggal lahir</th>
            <th>HP</th>
            <th>Jabatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($pegawai as $peg) {?>
        <tr>
            <td><?= $peg['NIP']; ?></td>
            <td><?= $peg['nama']; ?></td>
            <td><?= $peg['username']; ?></td>
            <td><?= $peg['tmpt_lahir'];?>,<?=$peg['Tgl_lahir']; ?></td>
            <td><?= $peg['hp']; ?></td>
            <td><?= $peg['Jabatan']; ?></td>
            <td><a href="<?= base_url();?>pegawai/editpegawai/<?= $peg['NIP'] ;?>" class="badge badge-warning">Edit</a>
            <a href="<?= base_url();?>pegawai/hapus<?= $peg['NIP'] ;?>" class="badge badge-danger">Hapus</a></td>
          </tr>
        <?php   } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>