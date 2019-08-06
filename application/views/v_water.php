<?php $this->load->view('layouts/header'); ?>

<div class="content-wrapper">
    <section class="content-header">
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-water"></i> Data Water Meter</h3>
            </div>

            <div class="box-body">
                <?php echo $this->session->flashdata('success'); ?>
                <div style="clear:both"></div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Tambah Data Water</button>
                <br/>
                <br/>
                <table id="table" class="table table-responsive table-striped table-border">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Watermeter Brand ID</th>
                            <th>Watermeter Brand Nickname</th>
                            <th>Watermeter Brand Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $no = 1;
                            foreach($data as $value) { 
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $value->id; ?></td>
                            <td><?php echo $value->nickname; ?></td>
                            <td><?php echo $value->name; ?></td>
                            <td>
                                <a class="btn btn-success btn-sm" href="<?=base_url().'Dashboard/update_water/'.$value->id; ?>">Edit</a>
                                <a class="btn btn-danger btn-sm" href="<?=base_url().'Dashboard/delete_water/'.$value->id; ?>">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Watermeter Brand ID</th>
                            <th>Watermeter Brand Nickname</th>
                            <th>Watermeter Brand Name</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3>Tambah Data Water Meter</h3>
                        </div>
                        
                        <form action="<?=base_url('Dashboard/create_water'); ?>" method="POST">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Water Meter Brand Nickname</label>
                                    <input type="text" class="form-control" required="required" name="nickname" placeholder="Masukan Brand Nickname">
                                </div>

                                <div class="form-group">
                                    <label>Water Meter Brand Name</label>
                                    <input type="text" class="form-control" required="required" name="name" placeholder="Masukan Brand Name">
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('layouts/footer'); ?>
