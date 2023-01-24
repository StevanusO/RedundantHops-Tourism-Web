@extends('template')

@section('title', '| Register')

@section('content')
<div class="nav-clone bg-dark">

</div>
<div class="custom-bg w-100">
    <div class="w-ctm p-in">
        <div class="fs-2 fw-bold resp-title">
            {{__('data.register.title')}}
        </div>
        <div>
            {{__('data.register.desc')}}
        </div>
    </div>
</div>

<div class="p-form">
    <form action="{{route('register_backend')}}" enctype="multipart/form-data" method="POST" autocomplete="on">
        @csrf
       
        @error('user_name')
            <p class="text-warning">{{__('data.register.error.username')}}</p>
        @enderror
        
        @error('email')
            <p class="text-warning">{{__('data.register.error.email')}}</p>
        @enderror
        
        @error('pw')
            <p class="text-warning">{{__('data.register.error.pw')}}</p>
        @enderror
        
        @error('confirm-pw')
        <p class="text-warning">{{__('data.register.error.confirm_pw')}}</p>
        @enderror

        @error('profile-img')
        <p class="text-warning">{{__('data.register.error.profile_img')}}</p>
        @enderror
        
        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="nama" class="custom-txt fw-bold resp-form-text l-side-form">{{__('data.register.username.title')}}</label>
            <input class="ipt-form" type="text" placeholder="{{__('data.register.username.placeholder')}}" id="nama" name="user_name">
        </div>            
        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="email" class="custom-txt fw-bold resp-form-text l-side-form">{{__('data.register.email.title')}}</label>
            <input class="ipt-form" type="email" placeholder="{{__('data.register.email.placeholder')}}" id="email" name="email">
        </div>  

        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="password" class="custom-txt fw-bold resp-form-text l-side-form">{{__('data.register.password.title')}}</label>
            <input class="ipt-form" type="password" placeholder="{{__('data.register.password.placeholder')}}" id="password" name="pw">
        </div>  
        
        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="confirm-password" class="custom-txt fw-bold resp-form-text l-side-form">{{__('data.register.confirm_password.title')}}</label>
            <input class="ipt-form h-100" type="password" placeholder="{{__('data.register.confirm_password.placeholder')}}" id="confirm-password" name="confirm-pw">
        </div>  

        {{-- <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="profile" class="custom-txt fw-bold resp-form-text l-side-form">Gambar Profil</label>
            <input type="file" class="custom-bg rounded text-light" id="profile" name="profile-img" accept="image/png, image/jpg, image/jpeg">
        </div> --}}

        <br>
        <div class="w-100 d-flex justify-content-end">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <button class="btn-regular rounded" type="submit">{{__('data.register.btn_regist')}}</button>
                <div class="fw-bold text-center">{{__('data.register.req.title')}}
                    <a href="{{route('login')}}" class="text-reset text-decoration-none"><span class="custom-txt">{{__('data.register.req.btn_login')}}</span></a></div>   
            </div> 
        </div>
    </form>
</div>
@endsection