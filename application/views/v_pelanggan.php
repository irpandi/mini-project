<?php $this->load->view('layouts/header'); ?>

<div class="content-wrapper">
    <section class="content-header">
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-users"></i> Data Pelanggan</h3>
            </div>

            <div class="box-body">
                <?php echo $this->session->flashdata('success'); ?>
                <div style="clear:both"></div>

                <table id="table" class="table table-responsive table-striped table-border">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Pelanggan</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    <thead>

                    <tbody>
                        <?php 
                            $no = 1;
                            foreach($data_pel as $value) { 
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $value->no_pel; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php
                                if($value->verifikasi == 1){
                                    echo "Sudah Verifikasi";
                                }else{
                                    echo "Belum Verifikasi";
                                }
                            ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?=base_url().'Dashboard/detail_pelanggan/'.$value->id; ?>">Detail</a>
                                <a class="btn btn-warning btn-sm" href="<?=base_url().'Dashboard/update_stat/'.$value->id; ?>">Update</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>No Pelanggan</th>
                            <th>Nama</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    <tfoot>
                </table>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('layouts/footer'); ?>
