<?= $this->extend('admin/layout/index') ?>

<?= $this->section('content') ?>
<?php
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Kemampuan Utama</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/panel-admin">Beranda</a></li>
                    <li class="breadcrumb-item active">Kemampuan Utama</li>
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
        <div class="data-main-skills"></div>
    </div>
    <div class="col-md-3">
        <div class="form-main-skills"></div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.data-main-skills').load("<?= site_url('/main-skills/data') ?>");
        $('.form-main-skills').load("<?= site_url('/main-skills/form') ?>");
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

            var name_skill = $('#name_skill').val();
            var url = '<?= site_url('/main-skills/create') ?>';
            var percentage_skill = $('#percentage_skill').val();
            var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
            var csrfHash = $('.txt_csrfname').val(); // CSRF hash
            var ord = $('#ord').val();

            if (name_skill == '') {
                error_name_skill = 'please enter Name Skills';
                $('#error_name_skill').text(error_name_skill);
            } else if (percentage_skill == '') {
                error_percentage_skill = 'please enter percentage skills';
                $('#error_percentage_skill').text(error_percentage_skill);
            } else if (ord == '') {
                error_ord = 'please enter skills order';
                $('#error_ord').text(error_ord);
            } else {
                $.ajax({
                    type: 'POST',
                    url: '<?= site_url('/main-skills/create') ?>',
                    data: {
                        skills: name_skill,
                        percentage: percentage_skill,
                        ord: ord,
                        [csrfName]: csrfHash
                    },
                    success: function(response) {
                        $('#error_name_skill').text('');
                        $('#error_percentage_skill').text('');
                        $('#error_ord').text('');
                        $('#error_percentage_skill').text('');
                        $('#name_skill').val('');
                        $('#percentage_skill').val('');
                        $('#ord').val('');
                        $('#pagination').empty();
                        $('#pagination').append(response.link);
                        $('.form-main-skills').load("<?= site_url('/main-skills/form') ?>");
                        $('#tableData').html('');
                        LoadData()
                        swal("Inserted", response.status, "success");
                    }
                });
            }

        });

        $(document).on('click', '#btn_update', function() {

            var name_skill = $('#edit_name_skill').val();
            var percentage_skill = $('#edit_percentage_skill').val();
            var ord = $('#edit_ord').val();
            var hiddenId = $('#update_id').val();
            var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
            var csrfHash = $('.txt_csrfname').val(); // CSRF hash

            if (name_skill == '') {
                error_name_skill = 'please enter Name Skills';
                $('#error_name_skill').text(error_name_skill);
            } else if (percentage_skill == '') {
                error_percentage_skill = 'please enter percentage skills';
                $('#error_percentage_skill').text(error_percentage_skill);
            } else if (ord == '') {
                error_ord = 'please enter skills order';
                $('#error_ord').text(error_ord);
            } else {
                $.ajax({
                    url: '<?= site_url('/main-skills/update') ?>',
                    method: 'POST',
                    data: {
                        skills: name_skill,
                        percentage: percentage_skill,
                        ord: ord,
                        id: hiddenId,
                        [csrfName]: csrfHash
                    },
                    success: function(response) {

                        $('#updateModal').modal('hide');
                        $('#error_name_skill').text('');
                        $('#error_percentage_skill').text('');
                        $('#error_ord').text('');
                        $('#tableData').html('');
                        $('.form-main-skills').load("<?= site_url('/main-skills/form') ?>");
                        document.getElementById("form-edit").style.display = "block";
                        document.getElementById("form-add").style.display = "none";
                        LoadData()
                        swal("Updated", response.status, "success");
                    }
                });
            }

        });

        $(document).on('click', '#btn_delete', function() {

            var id = $(this).attr('table-id');

            $.ajax({
                url: '<?= site_url('/main-skills/delete') ?>',
                method: 'GET',
                data: {
                    id: id
                },
                success: function(response) {
                    swal("Deleted", response.status, "success");
                    $('#tableData').html('');
                    LoadData()
                }
            });

        });

        $(document).on('click', '#btn_page', function() {
            let csrfName = "<?= csrf_token() ?>";
            let csrfHash = "<?= csrf_hash() ?>";
            var page = $(this).attr('page');
            var currentPage = $('#currentPage').val();
            var search = $('#search').val();
            let data, url
            if (search == '') {
                url = '<?= site_url('/main-skills/read') ?>'
                data = {
                    page: page,
                    currentPage: currentPage,
                    [csrfName]: csrfHash
                };
            } else {
                url = '<?= site_url('/main-skills/search') ?>'
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
                    appendTableData(response.allMainSklills)
                }
            });

        });

        function loadDataSearch(keyword) {
            let csrfName = "<?= csrf_token() ?>";
            let csrfHash = "<?= csrf_hash() ?>";
            $.ajax({
                url: '<?= site_url('/main-skills/search') ?>',
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
                    appendTableData(response.allMainSklills)
                }
            });
        }

        function LoadData() {
            $.ajax({
                url: '<?= site_url('/main-skills/read') ?>',
                method: 'GET',
                success: function(response) {
                    $('#pagination').empty();
                    $('#pagination').append(response.link);
                    $('#currentPage').val(response.currentPage);
                    $('#tableData').empty();
                    appendTableData(response.allMainSklills)
                }
            });
        }
    });

    function appendTableData(data) {
        $.each(data, function(key, value) {
            $('#tableData').append('<tr>\
					<td> ' + value['ord'] + ' </td>\
					<td> ' + value['skills'] + ' </td>\
                    <td>\
                        <div class="progress progress-xs">\
                            <div class="progress-bar progress-bar-danger" style="width:' + value['percentage'] + '%"></div>\
                        </div>\
                    </td>\
					<td> <span class="badge bg-success">' + value['percentage'] + '%</span> </td>\
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