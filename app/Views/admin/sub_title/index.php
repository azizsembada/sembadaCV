<?= $this->extend('admin/layout/index') ?>

<?= $this->section('content') ?>
<?php
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pengaturan Sub Title</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/panel-admin">Beranda</a></li>
                    <li class="breadcrumb-item">Pengaturan</li>
                    <li class="breadcrumb-item active">Sub Title</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="row">
    <div class="col-md-9">
        <div class="row d-flex justify-content-end">
            <div class="col-4">
                <div class="input-group">
                    <span class="input-group-text" style="background-color:#6362e7"><i class="fa-solid fa-magnifying-glass" style="color: #ffff;"></i></span>
                    <input name="keyword" class="form-control" type="text" id="search" required="" placeholder="Pencarian">
                </div>
            </div>
        </div>
        <br>
        <div class="data-sub-title"></div>
    </div>
    <div class="col-md-3">
        <div class="form-sub-title"></div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.data-sub-title').load("<?= site_url('/sub-title/data') ?>");
        $('.form-sub-title').load("<?= site_url('/sub-title/form') ?>");
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        LoadData()
        $('#search').keyup(function() {
            let search = $(this).val();
            let len_text = search.length;
            if (len_text > 0) {
                loadDataSearch(search);
            } else {
                LoadData()
            }
        });

        $(document).on('click', '#btn_edit', function() {

            var id = $(this).attr('table-id');
            $.ajax({
                url: '<?= site_url('/sub-title/edit') ?>/',
                method: 'GET',
                data: {
                    key: id
                },
                success: function(response) {
                    $('#update_id').val(response.row.key);
                    $('#alias_sub_title').val(response.row.alias);
                    $('#value_sub_title').val(response.row.value);
                    $('#ord').val(response.row.ord);
                    $('#btn').empty();
                    $('#btn').append('<button type="button" id="btn_update" class="btn btn-primary">Edit</button> <button type = "reset"\
                    class = "btn btn-danger" id="btn_reset"> Reset </button>');
                    LoadData()
                }
            });
        });
        $(document).on('click', '#btn_reset', function() {
            $('#error_alias_sub_title').text('');
            $('#error_value_sub_title').text('');
            $('#error_ord').text('');
            $('#alias_sub_title').val('');
            $('#value_sub_title').val('');
            $('#ord').val('');
            $('#btn').empty();
            $('#btn').append('<button type="button" id="btn_update" class="btn btn-primary" disabled>Edit</button> <button type = "reset"\
                    class = "btn btn-danger" id="btn_reset" > Reset </button>');
        });
        $(document).on('click', '#btn_update', function() {
            var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
            var csrfHash = $('.txt_csrfname').val(); // CSRF hash

            if ($('#alias_sub_title').val() == '') {
                $('#error_alias_sub_title').text('please enter Name Service');
            } else if ($('#value_sub_title').val() == '') {
                $('#error_value_sub_title').text('please enter icon service');
            } else if ($('#ord').val() == '') {
                error_ord = 'please enter service order';
                $('#error_ord').text(error_ord);
            } else {
                $.ajax({
                    type: 'POST',
                    url: '<?= site_url('/sub-title/update') ?>',
                    data: {
                        alias: $('#alias_sub_title').val(),
                        value: $('#value_sub_title').val(),
                        ord: $('#ord').val(),
                        key: $('#update_id').val(),
                        [csrfName]: csrfHash
                    },
                    success: function(response) {
                        $('#error_alias_sub_title').text('');
                        $('#error_value_sub_title').text('');
                        $('#error_ord').text('');
                        $('#alias_sub_title').val('');
                        $('#value_sub_title').val('');
                        $('#ord').val('');
                        $('#pagination').empty();
                        $('#pagination').append(response.link);
                        $('.form-sub-title').load("<?= site_url('/sub-title/form') ?>");
                        $('#tableData').html('');
                        LoadData()
                        swal("Updated", response.message, response.status);
                    }
                });
            }
        });

        function loadDataSearch(keyword) {
            let csrfName = "<?= csrf_token() ?>";
            let csrfHash = "<?= csrf_hash() ?>";
            $.ajax({
                url: '<?= site_url('/sub-title/search') ?>',
                method: 'GET',
                data: {
                    keyword: keyword,
                    [csrfName]: csrfHash
                },
                success: function(response) {
                    $('#pagination').empty();
                    $('#pagination').append(response.link);
                    $('#currentPage').val(response.currentPage);
                    $('#tableData').empty();
                    appendTableData(response.allSubTitle)
                }
            });
        }

        $(document).on('click', '#btn_page', function() {
            let csrfName = "<?= csrf_token() ?>";
            let csrfHash = "<?= csrf_hash() ?>";
            var page = $(this).attr('page');
            var currentPage = $('#currentPage').val();
            var search = $('#search').val();
            let data, url
            if (search == '') {
                url = '<?= site_url('/sub-title/read') ?>'
                data = {
                    page: page,
                    currentPage: currentPage,
                    [csrfName]: csrfHash
                };
            } else {
                url = '<?= site_url('/sub-title/search') ?>'
                data = {
                    page: page,
                    currentPage: currentPage,
                    keyword: search,
                    [csrfName]: csrfHash
                };
            }
            $.ajax({
                url: url,
                method: 'GET',
                data: data,
                success: function(response) {
                    $('#pagination').empty();
                    $('#pagination').append(response.link);
                    $('#tableData').empty();
                    $('#currentPage').empty();
                    $('#currentPage').val(response.currentPage);
                    appendTableData(response.allSubTitle)
                }
            });

        });

        function LoadData() {
            $.ajax({
                url: '<?= site_url('/sub-title/read') ?>',
                method: 'GET',
                success: function(response) {
                    $('#pagination').empty();
                    $('#pagination').append(response.link);
                    $('#currentPage').val(response.currentPage);
                    $('#tableData').empty();
                    appendTableData(response.allSubTitle)
                }
            });
        }
    });

    function appendTableData(data) {
        $.each(data, function(key, value) {
            $('#tableData').append('<tr>\
					<td> ' + value['ord'] + ' </td>\
					<td> ' + value['alias'] + ' </td>\
					<td> ' + value['value'] + ' </td>\
					<td>\
						<a id="btn_edit" table-id=' + value['key'] + ' class="btn btn-warning">Ubah</a>\
					</td>\
				</tr>');
        }, );
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?= $this->endSection() ?>