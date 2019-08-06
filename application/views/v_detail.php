<?php $this->load->view('layouts/header'); ?>

<div class="content-wrapper">
    <section class="content-header">
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-user"></i> Data Detail Pelanggan</h3>
            </div>

            <div class="box-body">
            <table class="table">
                <?php foreach($data as $value) { ?>
                    <tr>
                        <td><img class="img-responsove img-fluid" src="<?php echo "http://localhost/mini_project_api/assets/foto/", $value->foto; ?>"></td>
                    </tr>

                    <tr>
                        <td>No Pelanggan</td>
                        <td>:</td>
                        <td><?php echo $value->no_pel; ?></td>
                    </tr>

                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $value->nama; ?></td>
                    </tr>

                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $value->alamat; ?></td>
                    </tr>

                    <tr>
                        <td>Tarif</td>
                        <td>:</td>
                        <td><?php echo $value->tarif; ?></td>
                    </tr>

                    <tr>
                        <td>St Awal</td>
                        <td>:</td>
                        <td><?php echo $value->st_awal; ?></td>
                    </tr>

                    <tr>
                        <td>St Akhir</td>
                        <td>:</td>
                        <td><?php echo $value->st_akhir; ?></td>
                    </tr>

                    <tr>
                        <td>Verifikasi</td>
                        <td>:</td>
                        <td><?php
                            if($value->verifikasi == 1){
                                echo "Sudah Verifikasi";
                            }else{
                                echo "Belum Verifikasi";
                            }
                        ?></td>
                    </tr>
                <?php } ?>
                </table>
            </div>
        </div>
    </section>
</div>
        
<?php $this->load->view('layouts/footer'); ?>