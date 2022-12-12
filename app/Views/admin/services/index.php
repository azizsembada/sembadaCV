<?= $this->extend('admin/layout/index') ?>

<?= $this->section('content') ?>
<?php
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Layanan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/panel-admin">Beranda</a></li>
                    <li class="breadcrumb-item active">Layanan</li>
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
        <div class="data-services"></div>
    </div>
    <div class="col-md-3">
        <div class="form-services"></div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.data-services').load("<?= site_url('/services/data') ?>");
        $('.form-services').load("<?= site_url('/services/form') ?>");
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

        $(document).on('click', '#btn_insert', function() {
            var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
            var csrfHash = $('.txt_csrfname').val(); // CSRF hash

            if ($('#name_service').val() == '') {
                $('#error_name_service').text('please enter Name Service');
            } else if ($('#icon_service').val() == '') {
                $('#error_icon_service').text('please enter icon service');
            } else if ($('#description_service').val() == '') {
                $('#error_description_service').text('please enter description service');
            } else if ($('#ord').val() == '') {
                error_ord = 'please enter service order';
                $('#error_ord').text(error_ord);
            } else {
                $.ajax({
                    type: 'POST',
                    url: '<?= site_url('/services/create') ?>',
                    data: {
                        name: $('#name_service').val(),
                        icon: $('#icon_service').val(),
                        description: $('#description_service').val(),
                        ord: $('#ord').val(),
                        [csrfName]: csrfHash
                    },
                    success: function(response) {
                        $('#error_name_service').text('');
                        $('#error_icon_service').text('');
                        $('#error_ord').text('');
                        $('#error_description_service').text('');
                        $('#name_service').val('');
                        $('#icon_service').val('');
                        $('#description_service').val('')
                        $('#ord').val('');
                        $('#pagination').empty();
                        $('#pagination').append(response.link);
                        $('.form-services').load("<?= site_url('/services/form') ?>");
                        $('#tableData').html('');
                        LoadData()
                        swal("Inserted", response.message, response.status);
                    }
                });
            }
        });

        $(document).on('click', '#btn_update', function() {
            var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
            var csrfHash = $('.txt_csrfname').val(); // CSRF hash

            if ($('#edit_name_service').val() == '') {
                $('#error_name_service').text('please enter Name Service');
            } else if ($('#edit_icon_service').val() == '') {
                $('#error_icon_service').text('please enter icon service');
            } else if ($('#edit_description_service').val() == '') {
                $('#error_description_service').text('please enter description service');
            } else if ($('#edit_ord').val() == '') {
                error_ord = 'please enter service order';
                $('#error_ord').text(error_ord);
            } else {
                $.ajax({
                    url: '<?= site_url('/services/update') ?>',
                    method: 'POST',
                    data: {
                        name: $('#edit_name_service').val(),
                        icon: $('#edit_icon_service').val(),
                        description: $('#edit_description_service').val(),
                        ord: $('#edit_ord').val(),
                        id: $('#update_id').val(),
                        [csrfName]: csrfHash
                    },
                    success: function(response) {
                        $('#updateModal').modal('hide');
                        $('#error_name_service').text('');
                        $('#error_icon_service').text('');
                        $('#error_ord').text('');
                        $('#tableData').html('');
                        $('.form-services').load("<?= site_url('/services/form') ?>");
                        document.getElementById("form-edit").style.display = "block";
                        document.getElementById("form-add").style.display = "none";
                        LoadData()
                        swal("Updated", response.message, response.status);
                    }
                });
            }
        });

        $(document).on('click', '#btn_delete', function() {
            var id = $(this).attr('table-id');
            $.ajax({
                url: '<?= site_url('/services/delete') ?>',
                method: 'GET',
                data: {
                    id: id
                },
                success: function(response) {
                    swal("Deleted", response.message, response.status);
                    $('#tableData').html('');
                    LoadData()
                }
            });
        });

        function loadDataSearch(keyword) {
            let csrfName = "<?= csrf_token() ?>";
            let csrfHash = "<?= csrf_hash() ?>";
            $.ajax({
                url: '<?= site_url('/services/search') ?>',
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
                    appendTableData(response.allServices)
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
                url = '<?= site_url('/services/read') ?>'
                data = {
                    page: page,
                    currentPage: currentPage,
                    [csrfName]: csrfHash
                };
            } else {
                url = '<?= site_url('/services/search') ?>'
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
                    appendTableData(response.allServices)
                }
            });

        });

        function LoadData() {
            $.ajax({
                url: '<?= site_url('/services/read') ?>',
                method: 'GET',
                success: function(response) {
                    $('#pagination').empty();
                    $('#pagination').append(response.link);
                    $('#currentPage').val(response.currentPage);
                    $('#tableData').empty();
                    appendTableData(response.allServices)
                }
            });
        }
    });

    function appendTableData(data) {
        $.each(data, function(key, value) {
            $('#tableData').append('<tr>\
					<td> ' + value['ord'] + ' </td>\
					<td> ' + value['name'] + ' </td>\
                    <td class="text-center"><i class="' + value['icon'] + ' fa-3x"></i></td>\
					<td> ' + value['icon'] + ' </td>\
                    <td> ' + value['description'] + ' </td>\
					<td>\
						<a id="btn_edit" table-id=' + value['id'] + ' class="btn btn-warning">Ubah</a>\
					</td>\
					<td>\
						<a id="btn_delete" table-id=' + value['id'] + ' class="btn btn-danger">Hapus</a>\
					</td>\
				</tr>');
        }, );
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?= $this->endSection() ?>