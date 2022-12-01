@extends('be_layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Konten</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Konten</li>
                            <li class="breadcrumb-item active">Manajemen Konten</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix row-deck">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">Jumlah Konten</span>
                            <h4 id="total" class="mb-0 mt-2">{{ $konten->count() }} <i class="fa fa-level-up font-12"></i></h4>
                            <small class="text-muted">Analytics for last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%"
                            data-height="50px" data-line-Width="1" data-line-Color="#39afa6" data-fill-Color="#73cec7">
                            4,1,5,2,7,3,4</div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modaladd">Tambah Konten Baru</button>
                </div>
                <div class="col-lg-12" style="margin-top: 20px">
                    <div class="card">
                        <div class="table-responsive">
                            <div class="header">
                                <h2>Tabel Menu <small>Berikut adalah menu yang akan ditampilkan pada tampilan utama
                                        website</small>
                                </h2>
                            </div>
                            <div class="body">
                                <table id="example"
                                    class="table table-bordered table-hover js-basic-example dataTable table-custom display responsive nowrap"
                                    style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Image</th>
                                            <th>Menu</th>
                                            <th>Deskripsi</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 5%">No</th>
                                            <th style="width: 10%">Image</th>
                                            <th>Menu</th>
                                            <th>Deskripsi</th>
                                            <th style="width: 20%">Opsi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-xl-2" id="modaladd" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">BUAT KONTEN BARU</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formadd">@csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <textarea name="konten_desc" id="konten_desc" class="form-control" cols="30" rows="2" placeholder="deskripsi..."></textarea>
                        </div>
                        <div class="form-group">
                            <select name="menu_id" id="menu_id" class="form-control">
                                <option value="">Menu</option>
                                @foreach ($menu as $item)
                                    <option value="{{$item->id}}">{{$item->menu_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01"
                                    accept="image/*" onchange="showPreview(event);">
                                <p class="custom-file-label" id="label_img" for="inputGroupFile01">Brosur Image</p>
                            </div>
                            <div class="preview" style="max-width: 100%; margin-top: 20px">
                                <img style="max-width: 300px" id="inputGroupFile01-preview" src="">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" id="btnadd" class="btn btn-sm btn-primary" value="SUBMIT">
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    {{-- <div class="modal fade bs-example-modal-xl-2" id="modaledit" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">UPDATE MENU</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formedit">@csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control text-capitalize" name="id" id="id"
                                placeholder="id" required>
                            <input type="text" class="form-control text-capitalize" name="menu_name" id="menu_name"
                                placeholder="Nama Menu" required>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile02"
                                        accept="image/*" onchange="showPreview2(event);">
                                    <p class="custom-file-label" id="label_img2" for="inputGroupFile01">Update
                                        Image ?</p>
                                </div>
                                <div class="preview2" style="max-width: 100%; margin-top: 20px">
                                    <img style="max-width: 300px" id="inputGroupFile02-preview" src="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" id="btnedit" class="btn btn-sm btn-primary" value="UPDATE">
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div> --}}

    <div class="modal fade bs-example-modal-xl-2" id="modaledit" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">UPDATE KONTEN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formedit">@csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="id" id="id" class="form-control">
                            <textarea name="konten_desc" id="konten_desc" class="form-control" cols="30" rows="2" placeholder="deskripsi..."></textarea>
                        </div>
                        <div class="form-group">
                            <select name="menu_id" id="menu_id" class="form-control">
                                <option value="">Menu</option>
                                @foreach ($menu as $item)
                                    <option value="{{$item->id}}">{{$item->menu_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile02"
                                        accept="image/*" onchange="showPreview2(event);">
                                    <p class="custom-file-label" id="label_img2" for="inputGroupFile01">Update
                                        Image ?</p>
                                </div>
                                <div class="preview2" style="max-width: 100%; margin-top: 20px">
                                    <img style="max-width: 300px" id="inputGroupFile02-preview" src="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" id="btnedit" class="btn btn-sm btn-primary" value="SUBMIT">
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade bs-example-modal-xl" id="modaldel" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Delete Konten</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formdel">@csrf
                        <div class="form-group">
                            <label style="color: red">Anda yakin akan menghapus menu tersebut dari sistem ?</label>
                            <input type="hidden" class="form-control" name="id" id="id">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="btndel" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('be_script')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>

    {{-- Notif --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    <script>
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("inputGroupFile01-preview");
                preview.src = src;
                preview.style.display = "block";
                $('#label_img').html(src.substr(0, 30));
            }
        }

        function showPreview2(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("inputGroupFile02-preview");
                preview.src = src;
                preview.style.display = "block";
                $('#label_img2').html(src.substr(0, 30));
            }
        }

        $('#modaledit').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var menu_id = button.data('menu_id')
            var image = button.data('image')
            var konten_desc = button.data('konten_desc')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #menu_id').val(menu_id);
            modal.find('.modal-body #konten_desc').val(konten_desc);
            var src = image;
            var preview2 = document.getElementById("inputGroupFile02-preview");
            preview2.src = image;
        })

        $(document).ready(function() {
            var table = $('#example').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                buttons: [
                    'colvis'
                ],
                ajax: "/be-konten",
                columns: [

                    {
                        "width": 10,
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'images',
                        name: 'image'
                    },
                    {
                        data: 'menu',
                        name: 'menu.menu_name'
                    },
                    {
                        data: 'konten_desc',
                        name: 'konten_desc'
                    },
                    {
                        data: 'opsi',
                        name: 'opsi',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
        });

        $('#modaldel').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })

        $('#formadd').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/be-konten-post",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnadd').attr('disable', 'disabled');
                    $('#btnadd').val('Proses...');
                },
                success: function(response) {
                    if (response.status == 200) {
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#formadd')[0].reset();
                        $('#btnadd').val('Submit');
                        $('#btnadd').attr('disabled', false);
                        $('#modaladd').modal('hide')
                        $('#label_img').html('');
                        var preview = document.getElementById("inputGroupFile01-preview");
                        preview.src = '';
                        $.ajax({
                            url: "/be-konten-total",
                            success: function(result) {
                                $("#total").html(result.total);
                            }
                        });
                        toastr.success(response.message);
                        swal({
                            title: "Ok",
                            text: response.message,
                            type: "success",
                        });
                    } else {
                        $('#btnadd').val('Submit');
                        $('#btnadd').attr('disabled', false);

                        var values = '';

                        jQuery.each(response.message, function(key, value) {
                            values += '<p>'+value+'</p>';
                        });
                        toastr.error(values);
                        swal({
                            title: "Maaf",
                            html: values,
                            type: "error",
                        });
                    }
                }
            });
        })

        $('#formdel').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/be-konten-delete",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btndel').attr('disable', 'disabled');
                    $('#btndel').val('Proses...');
                },
                success: function(response) {
                    if (response.status == 200) {
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#formdel')[0].reset();
                        $('#btndel').val('Submit');
                        $('#btndel').attr('disabled', false);
                        $('#modaldel').modal('hide');
                        $.ajax({
                            url: "/be-konten-total",
                            success: function(result) {
                                $("#total").html(result.total);
                            }
                        });
                        toastr.success(response.message);
                        swal({
                            title: "Ok",
                            text: response.message,
                            type: "success",
                        });
                    } else {
                        $('#btndel').val('Submit');
                        $('#btndel').attr('disabled', false);

                        var values = '';

                        jQuery.each(response.message, function(key, value) {
                            values += value
                        });
                        toastr.error(values);
                        swal({
                            title: "Maaf",
                            text: values,
                            type: "error",
                        });
                    }
                }
            });

        })

        $('#formedit').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/be-konten-post",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#btnedit').attr('disable', 'disabled');
                    $('#btnedit').val('Proses...');
                },
                success: function(response) {
                    if (response.status == 200) {
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#formedit')[0].reset();
                        $('#btnedit').val('Submit');
                        $('#btnedit').attr('disabled', false);
                        $('#modaledit').modal('hide');
                        toastr.success(response.message);
                        swal({
                            title: "Ok",
                            text: response.message,
                            type: "success",
                        });
                    } else {
                        $('#btnedit').val('Submit');
                        $('#btnedit').attr('disabled', false);

                        var values = '';

                        jQuery.each(response.message, function(key, value) {
                            values += value
                        });
                        toastr.error(values);
                        swal({
                            title: "Maaf",
                            text: values,
                            type: "error",
                        });
                    }
                }
            });

        })
    </script>
@endsection
