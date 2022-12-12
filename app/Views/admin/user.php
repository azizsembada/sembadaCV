<?= $this->extend('admin/layout/index') ?>

<?= $this->section('content') ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pengaturan User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/panel-admin">Beranda</a></li>
                    <li class="breadcrumb-item">Pengaturan</li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="card card-primary">
    <form action="/user/update" method="POST" enctype="multipart/form-data">
        <?php if (session()->getFlashdata('msg')) {
        ?>
            <div class=" alert alert-danger">
                <?php echo session()->getFlashdata('msg'); ?>
            </div>
        <?php }
        if (session()->getFlashdata('msg-success')) {
        ?>
            <div class=" alert alert-success">
                <?php echo session()->getFlashdata('msg-success'); ?>
            </div>
        <?php }  ?>
        <div class="card-body">
            <div class="form-group">
                <label for="alias_sub_title">Password Lama</label>
                <input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                <input type="password" class="form-control" name="old_password" placeholder="Nama sub title">
                <span id="error_alias_sub_title" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="value_sub_title">Password Baru</label>
                <input type="password" class="form-control" name="new_password" placeholder="pasword baru">
                <span id="error_value_sub_title" class="text-danger"></span>
            </div>
            <div class="form-group">
                <label for="ord">Ulangi Password baru</label>
                <input type="password" class="form-control" name="new_password2" placeholder="ulangi password baru">
                <span id="error_ord" class="text-danger"></span>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
    </form>
</div>
<?= $this->endSection() ?>