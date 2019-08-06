<?php $this->load->view('layouts/header'); ?>

<div class="content-wrapper">
    <section class="content-header">
    </section>

    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-users"></i> Edit Data Water Meter</h3>
            </div>

            <div class="box-body">
                <?php foreach($data as $value) { ?>
                <form action="<?=base_url().'Dashboard/update_water/'.$value->id; ?>" method="POST">
                    <div class="form-group">
                        <label>Water Meter Brand Nickname</label>
                        <input type="text" value="<?php echo $value->nickname; ?>" class="form-control" required="required" name="nickname">
                    </div>

                    <div class="form-group">
                        <label>Water Meter Brand Name</label>
                        <input type="text" class="form-control" value="<?php echo $value->name; ?>" required="required" name="name">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('layouts/footer'); ?>