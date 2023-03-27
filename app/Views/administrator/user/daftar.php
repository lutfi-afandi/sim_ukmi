<?= $this->extend('layouts/layout_admin'); ?>
<?= $this->section('judul'); ?>
Daftar User
<?= $this->endSection('judul'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header"> <strong><?php echo $judul; ?> </strong>
                <div class="card-body">
                    <div class="table-responsive">
                        <!--INI UNTUK MENAMPILKAN DARTAR USER DI SUPERADMIN-->
                        <div align="right" class="" style="margin-bottom:10px">
                            <a href="<?php echo base_url(); ?>administrator/user/tambah" class="btn btn-info btn-sm"><i class="fas fa-plus"> </i> Tambah</a>
                        </div>
                        <table id="example" class="table table-striped table-sm" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama </th>
                                    <th>Jabatan</th>
                                    <th>Status</th>
                                    <th>Username </th>
                                    <!--<th >Password</th>-->
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($data as $t) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $t['nama']; ?></td>
                                        <td><?php if ($t['level'] == '1') {
                                                echo "Pengurus Inti";
                                            } else 
										if ($t['level'] == '2') {
                                                echo "Ketua Umum";
                                            } else if ($t['level'] == '3') {
                                                echo "Pembina";
                                            } else if ($t['level'] == '4') {
                                                echo "Anggota";
                                            }
                                            if ($t['level'] == '5') {
                                                echo "Superadmin";
                                            } ?></td>
                                        <td><?php if ($t['status'] == '1') {
                                                echo "<span class='badge badge-success'>Aktif</span>";
                                            } else 
										if ($t['status'] == '0') {
                                                echo "<span class='badge badge-danger'>Tidak Aktif</span>";
                                            } ?></td>
                                        <td><?php echo $t['username']; ?></td>
                                        <!-- <td><?php echo $t['password']; ?></td> -->
                                        <td>

                                            <a href="<?php echo base_url(); ?>index.php/administrator/user/edit/<?php echo $t['id']; ?>">
                                                <button class="btn btn-success btn-sm"><i class="feather icon-edit"></i></button>
                                            </a>
                                            <a href="<?php echo base_url(); ?>index.php/administrator/user/hapus/<?php echo $t['id']; ?>" onclick="return confirm('Yakin ingin hapus ?')">
                                                <button class="btn btn-danger btn-sm"><i class="feather icon-trash"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                    // $no++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>