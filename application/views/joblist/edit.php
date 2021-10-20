<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Joblist</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
            <form class="mx-5" action="" method="POST">
                <div class="form-group">
                    <label>ID Pemesanan</label>
                    <input type="text" class="form-control" name="id" value="<?= $jobedit['id_pemesanan']?>" disabled>
                    <input type="hidden" class="form-control" name="id" value="<?= $jobedit['id_pemesanan']?>">
                    <small class="form-text text-danger"><?= form_error('id'); ?></small>
                </div>
                <div class="form-group">
                    <label>Judul Pemesanan</label>
                    <input type="text" class="form-control" name="judul" value="<?= $jobedit['judul_pemesanan']?>" >
                    <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                </div>
                <div class="form-group">
                    <label>Tanggal Pemesanan</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= date("j F Y");?>">
                    <input type="hidden" readonly class="form-control-plaintext" id="staticEmail" name="tgl_pesan" value="<?= date("yy-m-d");?>">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="<?= $jobedit['judul_pemesanan']?>" >
                    <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                </div>
                <div class="form-group">
                    <label>Status Pengerjaan : <b><?= $jobedit['status_pengerjaan']?></b> </label>
                    <select name="stus_pengerjaan" class="form-control">
                        <option value="Belum Dikerjakan">Belum Dikerjakan</option>
                        <option value="Desain">Desain</option>
                        <option value="Revisi">Revisi</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </form>
    </div>
  </div>
  </div>

</div>