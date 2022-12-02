@extends('be_layouts.master')

@section('content')
    <div id="main-content" style="margin-top: 100px">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Program </h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Program</li>
                            <li class="breadcrumb-item active">Manajemen Program</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix row-deck">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card number-chart">
                        <div class="body">
                            <span class="text-uppercase">Jumlah Program</span>
                            <h4 class="mb-0 mt-2" id="total">??? <i class="fa fa-level-up font-12"></i></h4>
                            <small class="text-muted">Analytics for last week</small>
                        </div>
                        <div class="sparkline" data-type="line" data-spot-Radius="0" data-offset="90" data-width="100%"
                            data-height="50px" data-line-Width="1" data-line-Color="#39afa6" data-fill-Color="#73cec7">
                            4,1,5,2,7,3,4</div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <button class="btn btn-primary" data-toggle="mdoal" data-target="#modaladd">Tambah Program Baru</button>
                </div>
                <div class="col-lg-12" style="margin-top: 20px">
                    <div class="card">
                        <div class="table-responsive">
                            <div class="header">
                                <h2>Data Santri Baru <small>Berikut adalah data santri yang baru mendaftar dan belum di
                                        verifikasi oleh admin pusat</small>
                                </h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table id="example"
                                        class="table table-bordered table-hover js-basic-example dataTable table-custom display responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%">No</th>
                                                <th>Santri</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Data Ayah</th>
                                                <th>Data Ibu</th>
                                                <th>Dokumen</th>
                                                <th style="width: 20%">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th style="width: 5%">No</th>
                                                <th>Santri</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Data Ayah</th>
                                                <th>Data Ibu</th>
                                                <th>Dokumen</th>
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
    </div>


    <div class="modal fade bs-example-modal-xl" id="modaladd" tabindex="-1" role="dialog"
        aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">MODAL ADD PROGRAM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

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
            $.ajax({
                url: "/be-santri-baru-total",
                success: function(result) {
                    if (result.status == 200) {
                        var values = '';

                        jQuery.each(result.message, function (key, value) {
                            values += value
                        });
                        toastr.success(values);
                        $("#total").html(result.total);
                    }else{
                        var values = '';

                        jQuery.each(result.message, function (key, value) {
                            values += value
                        });
                        toastr.error(values);
                        $("#total").html(result.total);
                    }
                }
            });

            var table = $('#example').DataTable({
                destroy: true,
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                buttons: [
                    'colvis'
                ],
                ajax: "/be-santri-baru",
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
                        data: 'santri_name',
                        name: 'santri_name'
                    },
                    {
                        data: 'santri_tempatlahir',
                        name: 'santri_tempatlahir'
                    },
                    {
                        data: 'santri_tanggallahir',
                        name: 'santri_tanggallahir'
                    },
                    {
                        data: 'ayah',
                        name: 'ayah',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'ibu',
                        name: 'ibu',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'dokumen',
                        name: 'dokumen',
                        orderable: true,
                        searchable: true
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
    </script>
@endsection
