@extends('be_layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Sosmed</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Sosmed</li>
                            <li class="breadcrumb-item active">Manajemen Sosmed</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix row-deck">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">Jumlah Sosmed</span>
                            <h4 class="mb-0 mt-2">{{$sosmed->count()}} <i class="fa fa-level-up font-12"></i></h4>
                            <small class="text-muted">Analytics for last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%"
                            data-height="50px" data-line-Width="1" data-line-Color="#39afa6" data-fill-Color="#73cec7">
                            4,1,5,2,7,3,4</div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modaladd">Tambah Sosmed / Kontak Baru</button>
                </div>
                <div class="col-lg-12" style="margin-top: 20px">
                    <div class="card">
                        <div class="table-responsive">
                            <div class="header">
                                <h2>Basic Table <small>Basic example without any additional modification classes</small>
                                </h2>
                            </div>
                            <div class="body">
                                <table id="example"
                                    class="table table-bordered table-hover js-basic-example dataTable table-custom display responsive nowrap" style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Sosmed</th>
                                            <th>Link Sosmed</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot>
                                        <tr>
                                            <th style="width: 5%">No</th>
                                            <th>Nama Sosmed</th>
                                            <th>Link Sosmed</th>
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

    <div class="modal fade bs-example-modal-xl" id="modaladd" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Buat Sosmed / Kontak Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formadd">@csrf
                        <div class="form-group">
                            <select name="sosmed_name" id="sosmed_name" class="form-control">
                                <option value="">Nama Sosmed</option>
                                <option value="whatsapp">whatsapp</option>
                                <option value="facebook">facebook</option>
                                <option value="instagram">instagram</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Link Sosmed</label>
                            <input type="text" class="form-control" name="sosmed_link">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="btnadd" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-xl" id="modaledit" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Update Program</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formedit">@csrf
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" id="id">
                            <select name="sosmed_name" id="sosmed_name" class="form-control">
                                <option value="">Nama Sosmed</option>
                                <option value="whatsapp">whatsapp</option>
                                <option value="facebook">facebook</option>
                                <option value="instagram">instagram</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Link Sosmed</label>
                            <input type="text" class="form-control" name="sosmed_link" id="sosmed_link">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="btnedit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-xl" id="modaldel" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Hapus Sosmed</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formdel">@csrf
                        <div class="form-group">
                            <label style="color: red">Anda yakin akan menghapus sosmed tersebut dari sistem ?</label>
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
        $(document).ready(function() {
            var table = $('#example').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                buttons: [
                    'colvis'
                ],
                ajax: "/be-sosmed",
                columns: [

                    {
                        "width":10,
                        "data": null,
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'sosmed_name',
                        name: 'sosmed_name'
                    },
                    {
                        data: 'sosmed_link',
                        name: 'sosmed_link'
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

        $('#modaledit').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var sosmed_name = button.data('sosmed_name')
            var sosmed_link = button.data('sosmed_link')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #sosmed_name').val(sosmed_name);
            modal.find('.modal-body #sosmed_link').val(sosmed_link);
        })

        $('#modaldel').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id = button.data('id')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
        })

        $('#formadd').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/be-sosmed-post",
                data: formData,
                cache: false,
                contentType : false,
                processData : false,
                beforeSend: function () {
                    $('#btnadd').attr('disable', 'disabled');
                    $('#btnadd').val('Proses...');
                },
                success: function (response) {
                    if (response.status == 200) {
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#formadd')[0].reset();
                        $('#btnadd').val('Submit');
                        $('#btnadd').attr('disabled', false);
                        $('#modaladd').modal('hide');
                        var values = '';

                        jQuery.each(response.message, function (key, value) {
                            values += '<p>'+value+'</p>'
                        });

                        toastr.success(values);
                        swal({
                            title:"Ok",
                            html : values,
                            type :"success",
                        });

                    }else{
                        $('#btnadd').val('Submit');
                        $('#btnadd').attr('disabled', false);
                        
                        var values = '';

                        jQuery.each(response.message, function (key, value) {
                            values += '<p>'+value+'</p>'
                        });
                        toastr.error(values);
                        swal({
                            title : "Maaf",
                            html : values,
                            type : "error",
                        });
                    }
                }
            });
        })

        $('#formdel').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/be-sosmed-delete",
                data: formData,
                cache: false,
                contentType : false,
                processData : false,
                beforeSend: function () {
                    $('#btndel').attr('disable', 'disabled');
                    $('#btndel').val('Proses...');
                },
                success: function (response) {
                    if (response.status == 200) {
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#formdel')[0].reset();
                        $('#btndel').val('Submit');
                        $('#btndel').attr('disabled', false);
                        $('#modaldel').modal('hide');
                        toastr.success(response.message);
                        swal({
                            title:"Ok",
                            text : response.message,
                            type :"success",
                        });
                    }else{
                        $('#btndel').val('Submit');
                        $('#btndel').attr('disabled', false);
                        
                        var values = '';

                        jQuery.each(response.message, function (key, value) {
                            values += value
                        });
                        toastr.error(values);
                        swal({
                            title : "Maaf",
                            text : values,
                            type : "error",
                        });
                    }
                }
            });
            
        })

        $('#formedit').submit(function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/be-sosmed-post",
                data: formData,
                cache: false,
                contentType : false,
                processData : false,
                beforeSend: function () {
                    $('#btnedit').attr('disable', 'disabled');
                    $('#btnedit').val('Proses...');
                },
                success: function (response) {
                    if (response.status == 200) {
                        var oTable = $('#example').dataTable();
                        oTable.fnDraw(false);
                        $('#formedit')[0].reset();
                        $('#btnedit').val('Submit');
                        $('#btnedit').attr('disabled', false);
                        $('#modaledit').modal('hide');
                        toastr.success(response.message);
                        swal({
                            title:"Ok",
                            text : response.message,
                            type :"success",
                        });
                    }else{
                        $('#btnedit').val('Submit');
                        $('#btnedit').attr('disabled', false);
                        
                        var values = '';

                        jQuery.each(response.message, function (key, value) {
                            values += value
                        });
                        toastr.error(values);
                        swal({
                            title : "Maaf",
                            text : values,
                            type : "error",
                        });
                    }
                }
            });
            
        })
    </script>
@endsection
