<?= $this->extend('admin/layout/index') ?>

<?= $this->section('content') ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pengaturan Website</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/panel-admin">Beranda</a></li>
                    <li class="breadcrumb-item">Pengaturan</li>
                    <li class="breadcrumb-item active">Website</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="card card-primary">
    <!-- form start -->
    <form action="/settings-update" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
            <?php
            for ($i = 0; $i < count($settings); $i++) {
                if ($settings[$i]['type'] == INPUT_IMAGE) { ?>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="<?php echo $settings[$i]['key']; ?>"><?php echo $settings[$i]['alias']; ?></label>
                                <input type="hidden" name="key[]" value="<?php echo $settings[$i]['key']; ?>" />
                                <input type="file" class="form-control" name="<?php echo $settings[$i]['key']; ?>" id="<?php echo $settings[$i]['key']; ?>" value="<?php echo $settings[$i]['value'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <img src="<?= base_url($settings[$i]['value']) ?>" class="img-thumbnail" alt="<?php echo $settings[$i]['value'] ?>">
                        </div>
                    </div>
                <?php
                } else if ($settings[$i]['type'] == INPUT_FILE) { ?>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="<?php echo $settings[$i]['key']; ?>"><?php echo $settings[$i]['alias']; ?></label>
                                <input type="hidden" name="key[]" value="<?php echo $settings[$i]['key']; ?>" />
                                <input type="file" class="form-control" name="<?php echo $settings[$i]['key']; ?>" id="<?php echo $settings[$i]['key']; ?>" value="<?php echo $settings[$i]['value'] ?>">
                            </div>
                        </div>
                        <div class="col-sm-3 d-flex align-items-center">
                            <a href="<?= base_url($settings[$i]['value']) ?>" target="_blank"><i class="fa-solid fa-file-pdf fa-2xl"></i> Lihat <?php echo $settings[$i]['alias']; ?></a>
                        </div>
                    </div>
                <?php } else {
                ?>
                    <div class="form-group">
                        <label for="<?php echo $settings[$i]['key']; ?>"><?php echo $settings[$i]['alias']; ?></label>
                        <input type="hidden" name="key[]" value="<?php echo $settings[$i]['key']; ?>" />
                        <input type="text" class="form-control" name="<?php echo $settings[$i]['key']; ?>" id="<?php echo $settings[$i]['key']; ?>" value="<?php echo $settings[$i]['value'] ?>">
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>