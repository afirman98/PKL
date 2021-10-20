<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Pegawai</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
            <form class="mx-5" action="" method="POST">
                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" class="form-control" name="NIP" value="<?= $pegawaie['NIP'] ?>">
                    <small class="form-text text-danger"><?= form_error('NIP'); ?></small>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?= $pegawaie['nama'] ?>" >
                    <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $pegawaie['username'] ?>">
                    <small class="form-text text-danger"><?= form_error('username'); ?></small>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" value="<?= md5($pegawaie['pass']) ?>">
                    <small class="form-text text-danger"><?= form_error('password'); ?></small>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgl_lahir" value="<?= $pegawaie['Tgl_lahir'] ?>">
                    <small class="form-text text-danger"><?= form_error('tgl_lahir'); ?></small>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" class="form-control" name="tmp_lahir" value="<?= $pegawaie['tmpt_lahir'] ?>">
                    <small class="form-text text-danger"><?= form_error('tmp_lahir'); ?></small>
                </div>
                <div class="form-group">
                    <label>No Hp</label>
                    <input type="text" class="form-control" name="Hp" value="<?= $pegawaie['hp'] ?>">
                    <small class="form-text text-danger"><?= form_error('Hp'); ?></small>
                </div>
                <div class="form-group">
                    <label>Jabatan : <b><?= $pegawaie['Jabatan'] ?></b></label>
                    <select name="Jabatan" class="form-control">
                        <option value="Desainer">Desainer</option>
                        <option value="Admin">Admin</option>
                        <option value="Kasir">Kasir</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>