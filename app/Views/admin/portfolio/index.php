<?= $this->extend('admin/layout/index') ?>

<?= $this->section('content') ?>
<?php
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Portofolio</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/panel-admin">Beranda</a></li>
                    <li class="breadcrumb-item active">Portofolio</li>
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
        <div class="data-portfolio"></div>
    </div>
    <div class="col-md-3">
        <div class="form-portfolio"></div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.data-portfolio').load("<?= site_url('/portfolio/data') ?>");
        $('.form-portfolio').load("<?= site_url('/portfolio/form') ?>");
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
            let formData = new FormData();
            formData.append("image", document.getElementById("image_portfolio").files[0]);
            formData.append("name", $('#name_portfolio').val());
            formData.append("description", $('#description_portfolio').val());
            formData.append("link", $('#link_portfolio').val());
            formData.append("ord", $('#ord').val());
            var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
            formData.append([csrfName], $('.txt_csrfname').val());

            if ($('#name_portfolio').val() == '') {
                $('#error_name_portfolio').text('please enter Name Portfolio');
            } else if ($('#description_portfolio').val() == '') {
                $('#error_description_portfolio').text('please enter Description Portfolio');
            } else if ($('#link_portfolio').val() == '') {
                $('#error_description_portfolio').text('please enter Link Portfolio');
            } else if ($('#ord').val() == '') {
                $('#error_ord').text('please enter skills order');
            } else {
                $.ajax({
                    type: 'POST',
                    url: '<?= site_url('/portfolio/create') ?>',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    success: function(response) {
                        $('#error_name_portfolio').text('');
                        $('#error_description_portfolio').text('');
                        $('#error_ord').text('');
                        $('#error_description_portfolio').text('');
                        $('#name_portfolio').val('');
                        $('#description_portfolio').val('');
                        $('#link_portfolio').val('');
                        $('#ord').val('');
                        $('#pagination').empty();
                        $('#pagination').append(response.link);
                        $('.form-portfolio').load("<?= site_url('/portfolio/form') ?>");
                        $('#tableData').html('');
                        LoadData()

                        swal("Inserted", response.message, response.status);
                    }
                });
            }

        });

        $(document).on('click', '#btn_update', function() {
            console.log('masuk')

            let formData = new FormData();
            if (document.getElementById("edit_image_portfolio").files[0] == undefined || document.getElementById("edit_image_portfolio").files[0] == null) {
                formData.append("imageCheck", '404');
                console.log('masuk 2', document.getElementById("edit_image_portfolio").files[0])
            } else {
                formData.append("imageCheck", '200');
                formData.append("image", document.getElementById("edit_image_portfolio").files[0]);
            }
            formData.append("id", $('#update_id').val());
            formData.append("name", $('#edit_name_portfolio').val());
            formData.append("description", $('#edit_description_portfolio').val());
            formData.append("link", $('#edit_link_portfolio').val());
            formData.append("ord", $('#edit_ord').val());
            var csrfName = $('.txt_csrfname').attr('name'); // CSRF Token name
            formData.append([csrfName], $('.txt_csrfname').val());

            if ($('#edit_name_portfolio').val() == '') {
                $('#error_name_portfolio').text('please enter Name Portfolio');
            } else if ($('#edit_description_portfolio').val() == '') {
                $('#error_description_portfolio').text('please enter Description Portfolio');
            } else if ($('#edit_link_portfolio').val() == '') {
                $('#error_description_portfolio').text('please enter Link Portfolio');
            } else if ($('#edit_ord').val() == '') {
                $('#error_ord').text('please enter skills order');
            } else {
                $.ajax({
                    url: '<?= site_url('/portfolio/update') ?>',
                    method: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    success: function(response) {
                        console.log('masuk 3', response)
                        $('#error_name_portfolio').text('');
                        $('#error_description_portfolio').text('');
                        $('#error_ord').text('');
                        $('#error_description_portfolio').text('');
                        $('#edit_name_portfolio').val('');
                        $('#edit_description_portfolio').val('');
                        $('#edit_link_portfolio').val('');
                        $('#edit_ord').val('');

                        $('#tableData').html('');
                        $('.form-portfolio').load("<?= site_url('/portfolio/form') ?>");
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
                url: '<?= site_url('/portfolio/delete') ?>',
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
                url = '<?= site_url('/portfolio/read') ?>'
                data = {
                    page: page,
                    currentPage: currentPage,
                    [csrfName]: csrfHash
                };
            } else {
                url = '<?= site_url('/portfolio/search') ?>'
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
                    $.each(response.allPortfolio, function(key, value) {
                        appendtableData(value)
                    }, );
                }
            });

        });

        function loadDataSearch(keyword) {
            let csrfName = "<?= csrf_token() ?>";
            let csrfHash = "<?= csrf_hash() ?>";
            $.ajax({
                url: '<?= site_url('/portfolio/search') ?>',
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
                    $.each(response.allPortfolio, function(key, value) {
                        appendtableData(value)
                    }, );
                }

            });

        }

        function LoadData() {
            $.ajax({
                url: '<?= site_url('/portfolio/read') ?>',
                method: 'GET',
                success: function(response) {
                    $('#pagination').empty();
                    $('#pagination').append(response.link);
                    $('#currentPage').val(response.currentPage);
                    $('#tableData').empty();
                    $.each(response.allPortfolio, function(key, value) {
                        appendtableData(value)
                    }, );
                }
            });
        }

        function appendtableData(value) {
            let imageURL = "<?= base_url() ?>" + "/" + value['image']
            $('#tableData').append('<tr>\
					<td rowspan="3" class="align-middle"> ' + value['ord'] + ' </td>\
					<td rowspan="3"><img src=' + imageURL + ' class="img-thumbnail" alt=""></td>\
                    <td class="align-middle">' + value['name'] + '</td>\
					<td class="align-middle">\
                        <a id="btn_edit" table-id=' + value['id'] + ' data-toggle="modal" data-target="#updateModal" class="btn btn-warning">Ubah</a>\
					</td>\
                    </tr>\
                    <tr>\
                        <td class="align-middle"> ' + value['description'] + '</span> </td>\
                        <td rowspan="2" ><a id="btn_delete" table-id=' + value['id'] + ' class="btn btn-danger">Hapus</a></td>\
                    </tr>\
                    <tr>\
                        <td class="align-middle"><a href=' + value['link'] + ' target="_blank">' + value['link'] + '</a>\</span> </td>\
                    </tr>\
                    ');
        }
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<?= $this->endSection() ?>