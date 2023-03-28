<?= $this->extend('layouts/layout_admin'); ?>
<?= $this->section('judul'); ?>
Daftar Devisi
<?= $this->endSection('judul'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header"> <strong><?php echo $judul; ?> </strong>
                <div class="card-body">
                    <!-- Alert error -->
                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                <use xlink:href="#exclamation-triangle-fill"></use>
                            </svg>
                            <div>
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- Alert sukses -->
                    <?php if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-success d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24">
                                <use xlink:href="#check-circle-fill"></use>
                            </svg>
                            <div>
                                <?= session()->getFlashdata('success'); ?>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- End Alert -->
                    <div class="table-responsive">
                        <div align="right" class="" style="margin-bottom:10px">
                            <a href="<?php echo base_url(); ?>administrator/devisi/tambah" class="btn btn-info btn-sm"><i class="fas fa-plus"> </i> Tambah</a>
                        </div>
                        <table id="example" class="table table-striped table-sm" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Divisi</th>
                                    <th>Kategori</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                            </tfoot>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($devisi as $t) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $t['nama_devisi']; ?></td>
                                        <td><?php echo $t['kategori']; ?></td>
                                        <td><?php echo $t['keterangan']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url(); ?>administrator/devisi/edit/<?php echo $t['id_devisi']; ?>">
                                                <button class="btn btn-success btn-sm"><i class="feather icon-edit"></i></button></a>
                                            <a href="<?php echo base_url(); ?>administrator/devisi/hapus/<?php echo $t['id_devisi']; ?>" onclick="return confirm('Apakah anda yakin ingin hapus ?')">
                                                <button class="btn btn-danger btn-sm"><i class="feather icon-trash"></i></button></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>