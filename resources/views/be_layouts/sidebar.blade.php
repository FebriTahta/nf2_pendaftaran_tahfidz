<div id="left-sidebar" class="sidebar">
    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{ asset('assets_be/images/user.png') }}" class="rounded-circle user-photo"
                alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pamela
                        Petrus</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="page-profile2.html"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="#asdasd"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
            <hr>
            <ul class="row list-unstyled">
                <li class="col-12">
                    <h6>Nurul Falah 2</h6>
                    <small>Dsn. Kalitengah, RT.3/RW.4, Karang Jati, Kec. Pandaan, Pasuruan, Jawa Timur 67156</small>
                </li>

            </ul>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
            {{-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>                 --}}
        </ul>

        <!-- Tab panes -->
        <div class="tab-content padding-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu li_animation_delay">
                        <li class="active">
                            <a href="#Dashboard" class="has-arrow"><i
                                    class="fa fa-dashboard"></i><span>Dashboard</span></a>
                            <ul>
                                <li class="active"><a href="#">Statistik & Laporan</a></li>
                            </ul>
                        </li>
                        <li>    
                            <a href="#App" class="has-arrow"><i class="fa fa-th-large"></i><span>Data
                                    Master</span></a>
                            <ul>
                                <li><a href="/be-program">Program</a></li>
                                <li><a href="/be-santri-baru">Santri Baru 
                                    @php
                                        $santri_baru = App\Models\Santri::where('status','daftar')->count();
                                    @endphp
                                    @if ($santri_baru > 0)
                                        <span class="badge badge-info float-right">{{$santri_baru}}
                                            new</span></a></li>
                                    @endif
                                    
                                <li><a href="#">Seluruh Santri</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#App" class="has-arrow"><i class="fa fa-puzzle-piece"></i><span>Tampilan UI</span></a>
                            <ul>
                                <li><a href="/be-profile">Profile</a></li>
                                <li><a href="/be-menu">Menu</a></li>
                                <li><a href="/be-konten">Konten</a></li>
                                <li><a href="/be-sosmed">Sosmed / Kontak</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>
            <div class="tab-pane" id="Chat">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="right_chat list-unstyled li_animation_delay">
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ asset('assets_be/images/xs/avatar1.jpg') }}"
                                alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Chris Fox <i
                                        class="fa fa-heart-o font-12"></i></span>
                                <span class="message">chrisfox@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ asset('assets_be/images/xs/avatar2.jpg') }}"
                                alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Joge Lucky <i
                                        class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Jogelucky@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ asset('assets_be/images/xs/avatar3.jpg') }}"
                                alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Isabella <i
                                        class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Isabella@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ asset('assets_be/images/xs/avatar4.jpg') }}"
                                alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Folisise Chosielie <i
                                        class="fa fa-heart font-12"></i></span>
                                <span class="message">FolisiseChosielie@gmail.com</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="media">
                            <img class="media-object" src="{{ asset('assets_be/images/xs/avatar5.jpg') }}"
                                alt="">
                            <div class="media-body">
                                <span class="name d-flex justify-content-between">Alexander <i
                                        class="fa fa-heart-o font-12"></i></span>
                                <span class="message">Alexander@gmail.com</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane" id="setting">
                <h6>Choose Skin</h6>
                <ul class="choose-skin list-unstyled">
                    <li data-theme="purple">
                        <div class="purple"></div>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                    </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                    </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                    </li>
                    <li data-theme="red">
                        <div class="red"></div>
                    </li>
                </ul>

                <ul class="list-unstyled font_setting mt-3">
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-nunito"
                                checked="">
                            <span class="custom-control-label">Nunito Google Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                            <span class="custom-control-label">Ubuntu Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-raleway">
                            <span class="custom-control-label">Raleway Google Font</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
                            <span class="custom-control-label">IBM Plex Google Font</span>
                        </label>
                    </li>
                </ul>

                <ul class="list-unstyled mt-3">
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-switch">
                            <input type="checkbox">
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable Dark Mode!</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-rtl">
                            <input type="checkbox">
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable RTL Mode!</span>
                    </li>
                    <li class="d-flex align-items-center mb-2">
                        <label class="toggle-switch theme-high-contrast">
                            <input type="checkbox">
                            <span class="toggle-switch-slider"></span>
                        </label>
                        <span class="ml-3">Enable High Contrast Mode!</span>
                    </li>
                </ul>

                <hr>
                <h6>General Settings</h6>
                <ul class="setting-list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Allowed Notifications</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Offline</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Location Permission</span>
                        </label>
                    </li>
                </ul>

                <a href="#" target="_blank" class="btn btn-block btn-primary">Buy this item</a>
                <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank"
                    class="btn btn-block btn-secondary">View portfolio</a>
            </div>
            <div class="tab-pane" id="question">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO</li>
                    <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                    <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                    <li><a href="javascript:void(0);">Website Analytics</a></li>
                    <li class="menu-heading">ACCOUNT</li>
                    <li><a href="javascript:void(0);">Cearet New Account</a></li>
                    <li><a href="javascript:void(0);">Change Password?</a></li>
                    <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                    <li class="menu-heading">BILLING</li>
                    <li><a href="javascript:void(0);">Payment info</a></li>
                    <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                    <li class="menu-button mt-3">
                        <a href="../docs/index.html" class="btn btn-primary btn-block">Documentation</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- rightbar icon div -->
<div class="right_icon_bar">
    <ul>
        <li><a href="/be-santri-semua"><i class="fa fa-id-card"></i></a></li>
        <li><a href="/"><i class="fa fa-globe"></i></a></li>
        <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off"></i>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
        <li><a href="javascript:void(0);"><i class="fa fa-plus"></i></a></li>
        
    </ul>
</div>
