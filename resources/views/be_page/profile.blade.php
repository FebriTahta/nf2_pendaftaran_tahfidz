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

                                <div class="body">
                                    <h6>Profile Photo</h6>
                                    <div class="media">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="media-left m-r-15 preview">
                                                    <img src="{{ asset('assets_be/images/user.png') }}"
                                                        id="inputGroupFile01-preview" class="user-photo media-object" alt="User"
                                                        style="max-width: 140px">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="media-body">
                                                    <p>Upload your photo.
                                                        <br> <em>Image should be at least 140px x 140px</em>
                                                    </p>
                                                    <div class="form-group">
                                                        <div class="custom-file">
                                                            <input type="file" name="image" class="custom-file-input"
                                                                id="inputGroupFile01" accept="image/*"
                                                                onchange="showPreview(event);" required="">
                                                            <p class="custom-file-label" id="label_img" for="inputGroupFile01">
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
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="...">
                                            </div>

                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary">Update</button> &nbsp;&nbsp;
                                    <button type="button" class="btn btn-danger">Reset / Remove Profile</button>
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

        $(document).ready(function() {
            $.ajax({
                url: "/be-profile",
                success: function(response) {
                    if (response.status == 200) {
                        
                    }else{
                        toastr.warning(response.message);
                    }
                }
            });
        })
    </script>
@endsection
