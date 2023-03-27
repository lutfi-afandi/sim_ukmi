<?= $this->extend('layouts/layout_admin'); ?>
<?= $this->section('judul'); ?>
Tambah User
<?= $this->endSection('judul'); ?>
<?= $this->section('content'); ?>
<div class="page-section">
    <div class="card card-fluid">
        <div class="card-header">
            <strong><?php echo $judul; ?> </strong>
        </div>
        <div class="card-body">
            <form action="<?php echo site_url(); ?>/administrator/user/simpan" method="post" enctype="multipart/form-data">
                <div class="card-body card-block ">
                    <input type="hidden" class="form-control form-control-line" name="id" value="">
                    <div class="row form-group">
                        <div class="col col-sm-3" align="right">
                            <label for="input-small" class=" form-control-label">Nama Lengkap</label>
                        </div>
                        <div class="col col-sm-9">
                            <input type="text" name="nama" class="form-control " required placeholder="Nama Lengkap" onkeypress='return harusHuruf(event)' />
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-sm-3" align="right">
                            <label for="input-small" class=" form-control-label">Username</label>
                        </div>
                        <div class="col col-sm-9">
                            <input type="text" name="username" class="form-control " required placeholder="Username" />
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-sm-3" align="right">
                            <label for="input-small" class=" form-control-label">Password</label>
                        </div>
                        <div class="col col-sm-9">
                            <input type="text" name="password" class="form-control " required placeholder="Password" />
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-sm-3" align="right">
                            <label for="input-small" class=" form-control-label">Jabatan</label>
                        </div>
                        <div class="col col-sm-9">
                            <select name="level" class="form-control " required>
                                <option value="">Pilih...</option>
                                <option value="1">Pengurus Inti</option>
                                <option value="2">Ketua Umum</option>
                                <option value="3">Pembina</option>
                                <option value="4">Anggota</option>
                                <option value="4">Kaderisasi</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-sm-3" align="right">
                            <label for="input-small" class=" form-control-label">Status</label>
                        </div>
                        <div class="col col-sm-9">
                            <select name="status" class="form-control " required>
                                <option value="">Pilih...</option>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-sm-3" align="right">
                            <label for="input-normal" class=" form-control-label"></label>
                        </div>
                        <div class="col col-sm-9">
                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>



<script>
    function harusHuruf(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32)
            return false;
        return true;
    }
</script>

<?= $this->endSection('content'); ?>