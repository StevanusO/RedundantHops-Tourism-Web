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
    <form action="{{route('register_backend')}}" enctype="multipart/form-data" method="POST" autocomplete="off">
        @csrf
        
        {{-- Nama pengguna --}}
        <div class="mt-3 mb-4">
            <div>
                <label for="user_name" class="fs-4 custom-txt mb-2">
                    {{__('data.register.username.title')}}
                </label>
            </div>
            <input class="ipt-form" type="text" placeholder="{{__('data.register.username.placeholder')}}" id="nama" name="user_name">
            <div class="bar-b"></div>
            @error('user_name')
                <p class="text-warning">{{__('data.register.error.username')}}</p>
            @enderror
        </div>

        {{-- Email --}}
        <div class="my-4">
            <div>
                <label for="email" class="fs-4 custom-txt mb-2">
                    {{__('data.register.email.title')}}
                </label>
            </div>
            <input class="ipt-form" type="email" placeholder="{{__('data.register.email.placeholder')}}" id="email" name="email">
            <div class="bar-b"></div>
            @error('email')
            <p class="text-warning">{{__('data.register.error.email')}}</p>
        @enderror
        </div>

        {{-- Kata Sandi --}}
        <div class="my-4">
            <div>
                <label for="pw" class="fs-4 custom-txt mb-2">
                    {{__('data.register.password.title')}}
                </label>
            </div>
            <input class="ipt-form" type="password" placeholder="{{__('data.register.password.placeholder')}}" id="password" name="pw">
            <div class="bar-b"></div>
            @error('pw')
            <p class="text-warning">{{__('data.register.error.pw')}}</p>
        @enderror
        </div>

        {{-- Konfirma Kata Sandi --}}
        <div class="my-4">
            <div>
                <label for="confirm-pw" class="fs-4 custom-txt mb-2">
                    {{__('data.register.confirm_password.title')}}
                </label>
            </div>
            <input class="ipt-form h-100" type="password" placeholder="{{__('data.register.confirm_password.placeholder')}}" id="confirm-password" name="confirm-pw">
            <div class="bar-b"></div>
            
        @error('confirm-pw')
        <p class="text-warning">{{__('data.register.error.confirm_pw')}}</p>
        @enderror
        </div>
        
     

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