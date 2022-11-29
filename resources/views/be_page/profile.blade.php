@extends('be_layouts.master')

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Profile</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                            <li class="breadcrumb-item">Profile</li>
                            <li class="breadcrumb-item active">Manajemen Profile</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                        href="#Settings">Settings</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">

                            <div class="tab-pane active" id="Settings">
                                <form id="formadd">@csrf
                                    <div class="body">
                                        <h6>Profile Photo</h6>
                                        <div class="media">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="media-left m-r-15 preview">
                                                        <img src="{{ asset('assets_be/images/user.png') }}"
                                                            id="inputGroupFile01-preview" class="user-photo media-object"
                                                            alt="User" style="max-width: 140px">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="media-body">
                                                        <p>Upload your photo.
                                                            <br> <em>Image should be at least 140px x 140px</em>
                                                        </p>
                                                        <div class="form-group">
                                                            <div class="custom-file">
                                                                <input type="file" name="image"
                                                                    class="custom-file-input" id="inputGroupFile01"
                                                                    accept="image/*" onchange="showPreview(event);">
                                                                <p class="custom-file-label" id="label_img"
                                                                    for="inputGroupFile01">
                                                                    Belum ada image profile</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <div class="body">
                                        <h6>Name / Deskripsi singkat profile</h6>
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group section-add">
                                                    <input type="hidden" id="id" name="id"
                                                        class="form-control">
                                                    <input type="text" id="profile_desc" name="profile_desc"
                                                        class="form-control" placeholder="...">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-primary" id="btnadd"
                                            value="Update">&nbsp;&nbsp;
                                    </div>
                                </form>

                                <div class="body">
                                    <form id="formdel">@csrf
                                        <div class="form-group section-reset">
                                            <input type="hidden" name="id" class="form-control" id="id">
                                            <input type="submit" class="btn btn-danger" id="btndel"
                                                value="reset / delete profile">
                                        </div>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
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

        $('#formadd').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/be-profile-post",
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
                        $('#btnadd').val('Update');
                        $('#btnadd').attr('disabled', false);
                        var values = '';

                        jQuery.each(response.message, function(key, value) {
                            values += value
                        });
                        toastr.success(values);
                        swal({
                            title: "Ok",
                            text: values,
                            type: "success",
                        });

                        // auto load
                        $.ajax({
                            url: "/be-profile",
                            success: function(response) {
                                if (response.status == 200) {
                                    $('#profile_desc').val(response.data.profile_desc);
                                    $('.section-reset #id').val(response.data.id);
                                    $('.section-add #id').val(response.data.id);
                                    $('#label_img').html(response.data.label);
                                    var preview = document.getElementById(
                                        "inputGroupFile01-preview");
                                    preview.src = response.data.image;
                                    console.log(response.data.image);
                                } else {
                                    toastr.warning(response.message);
                                }
                            }
                        });

                    } else {
                        $('#btnadd').val('Update');
                        $('#btnadd').attr('disabled', false);

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

        $('#formdel').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "/be-profile-delete",
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
                        $('#btndel').val('reset / delete profile');
                        $('#btndel').attr('disabled', false);
                        var values = '';

                        jQuery.each(response.message, function(key, value) {
                            values += value
                        });
                        toastr.error(values);
                        swal({
                            title: "Ok",
                            text: values,
                            type: "success",
                        });

                        $('#profile_desc').val('');
                        $('.section-reset #id').val('');
                        $('.section-add #id').val('');
                        $('#label_img').html('belum ada image profile');
                        var preview = document.getElementById("inputGroupFile01-preview");
                        preview.src = 'assets_be/images/user.png';

                    } else {
                        $('#btndel').val('reset / delete profile');
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

        $(document).ready(function() {
            $.ajax({
                url: "/be-profile",
                success: function(response) {
                    if (response.status == 200) {
                        $('#profile_desc').val(response.data.profile_desc);
                        $('.section-reset #id').val(response.data.id);
                        $('.section-add #id').val(response.data.id);
                        $('#label_img').html(response.data.label);
                        var preview = document.getElementById("inputGroupFile01-preview");
                        preview.src = response.data.image;
                        console.log(response.data.image);
                    } else {
                        toastr.warning(response.message);
                    }
                }
            });
        })
    </script>
@endsection
