@extends('fe_layouts.master')

@section('fe_content')

<style>
    * {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
    }
    .profile {
        padding-top: 65px;
        text-align: center;
    }
    .profile img {
        margin: 0 auto;
        text-align: center;
        border-radius: 50%;
        max-width: 100px;
        margin-bottom: 10px !important;
    }
    p {
        font-size: 18px !important;
        font-weight: 600;
    }

    .profile span {
        margin-top: 20px !important;
        font-size: 18px !important;
        color: white;
        font-weight: 700 !important;
    }

    .menu {
        padding-top: 10px;
        text-align: center;
    }

    .menu .form-group {
        margin: 0 auto;
    }

    .menu span {
        font-size: 18px;
        color: #62a091;
    }
    
    .sosmed {
        padding-top: 20px;
        text-align: center;
        display: flex;
        justify-content: space-between;
        margin: 0 auto;
    }

    .foot img {
        margin: 0 auto;
    }

    .foot p {
        font-size: 15px !important;
        text-align: center;
        margin-top: 10px;
    }

    @media only screen and (min-width: 701px) {
        .konten {
            min-height: 1000px;
        }
    }

    @media only screen and (max-width: 70px) {
        .konten {
            min-height: 500px;
        }
    }
</style>

<div class="konten" style="min-height: 1000px; background-color: #6D9886; width: 100%">
    <div class="profile">
        @if ($profile !== null)
            <img src="{{$profile->image}}" alt="">
            <span>Pesantren Nurul Falah 2</span>
            <p style="color: white">{{$profile->profile_desc}}</p>
        @else
            <img src="{{asset('assets_be/images/user.png')}}" alt="">
        @endif
    </div>

    <div class="sosmed" style="max-width: 220px">
        <a href="">
            <i class="fa fa-phone" style="color: white; font-size: 30px;"></i>
        </a>
        <a href="">
            <i class="fab fa-whatsapp" style="color: white; font-size: 30px;"></i>
        </a>
        <a href="">
            <i class="fab fa-facebook" style="color: white; font-size: 30px;"></i>
        </a>
        <a href="">
            <i class="fab fa-instagram" style="color: white; font-size: 30px;"></i>
        </a>
    </div>

    @if ($menu->count() > 0)
        <div class="menu">
            @foreach ($menu as $item)
                <div class="form-group" style="max-width: 700px; margin-bottom: 20px; padding-left: 3%; padding-right: 3%">
                    <a href="{{$item->menu_link}}" style="line-height: 55px">
                        <div class="card" style="background-color: white; border-radius: 50px">
                            <img src="{{$item->image}}" style="max-width: 50px; float: left; margin-left: 10px; margin-top: 5px" alt="">
                            <span style="margin-left: -60px">{{$item->menu_name}}</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endif
    
    <div class="foot" style="margin-top: 120px">
        <img src="{{asset('assets/images/logo/nf22.png')}}" style="max-width: 150px" alt="">
        <p style="color: white;">Nurul Falah 2 Pandaan {{date('Y')}}</p>
    </div>
</div>
@endsection