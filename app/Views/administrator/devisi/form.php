<?= $this->extend('layouts/layout_admin'); ?>
<?= $this->section('judul'); ?>
Tambah Devisi
<?= $this->endSection('judul'); ?>
<?= $this->section('content'); ?>
<div class="page-section">
    <div class="card card-fluid">
        <div class="card-header"> <strong><?php echo $judul; ?> </strong></div>
        <div class="card-body">
            <form action="<?php echo base_url(); ?>/administrator/devisi/simpan" method="post" enctype="multipart/form-data">
                <div class="card-body card-block ">
                    <input type="hidden" class="form-control form-control-line" name="id_devisi" value="">

                    <div class="row form-group">
                        <div class="col col-sm-3" align="right">
                            <label for="input-small" class=" form-control-label">Nama Divisi</label>
                        </div>
                        <div class="col col-sm-9">
                            <input type="text" name="nama_devisi" class="form-control " required placeholder="Nama Divisi" />
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-sm-3" align="right">
                            <label for="input-small" class=" form-control-label">Kategori</label>
                        </div>
                        <div class="col col-sm-9">
                            <select name="kategori" class="form-control " required placeholder="Kategori">
                                <option value="">Pilih...</option>
                                <option value="Pengkaderan">Pengkaderan</option>
                                <option value="Pendukung Syiar">Pendukung Syiar</option>
                            </select>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-sm-3" align="right">
                            <label for="input-small" class=" form-control-label">Keterangan</label>
                        </div>
                        <div class="col col-sm-9">
                            <textarea name="keterangan" class="form-control " required placeholder="Keterangan"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-sm-3" align="right">
                            <label for="input-normal" class=" form-control-label"></label>
                        </div>
                        <div class="col col-sm-9"><button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<?= $this->endSection('content'); ?>