<div class="container-fluid mt-2">
<div class="card shadow mx-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Pesanan</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
            <form class="mx-5" action="" method="POST">
                <div class="form-group">
                    <label>ID Pemesanan</label>
                    <input type="text" class="form-control" name="id" value="<?= $pemesanan['id_pemesanan']; ?>" disabled>
                    <input type="hidden" class="form-control" name="id" value="<?= $pemesanan['id_pemesanan']; ?>">
                    <small class="form-text text-danger"><?= form_error('id'); ?></small>
                </div>
                <div class="form-group">
                    <label>Judul Pemesanan</label>
                    <input type="text" class="form-control" name="judul" value="<?= $pemesanan['judul_pemesanan']; ?>">
                    <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                </div>
                <div class="form-group">
                    <label>Tanggal Pemesanan</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= date("j F Y");?>">
                    <input type="hidden" readonly class="form-control-plaintext" id="staticEmail" name="tgl_pesan" value="<?= date("yy-m-d");?>">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" class="form-control" name="deskripsi" value="<?= $pemesanan['deskripsi']; ?>" >
                    <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </form>
    </div>
  </div>
  </div>

</div>