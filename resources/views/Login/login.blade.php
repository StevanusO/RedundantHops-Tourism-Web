@extends('template')

@section('title', '| Login')

@section('content')
    <div class="nav-clone bg-dark">

    </div>
    <div class="custom-bg w-100">
        <div class="w-ctm p-in">
            <div class="fs-2 fw-bold">
                {{__('data.login.title')}}
            </div>
            <div>
                {{__('data.login.desc')}}
            </div>
        </div>
    </div>

    <div class="p-form">
        <form action="{{ route('login_backend') }}" enctype="multipart/form-data" method="POST" autocomplete="off">
            @csrf
            @if ($errors->any())
                <div class="text-warning py-2">
                    @foreach ($errors->all() as $error)
                        {{$error}}
                    @endforeach
                </div>
            @endif
            
            <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
                <label for="nama" class="custom-txt fw-bold resp-form-text l-side-form">{{__('data.login.email.title')}}</label>
                <input class="ipt-form" type="text" placeholder="{{__('data.login.email.placeholder')}}" id="email" name="email">
            </div>            
            <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
                <label for="password" class="custom-txt fw-bold resp-form-text l-side-form">{{__('data.login.password.title')}}</label>
                <input class="ipt-form" type="password" placeholder="{{__('data.login.password.placeholder')}}" id="password" name="pw">
            </div>  
            <br>
            <div class="w-100 d-flex justify-content-end">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <button class="btn-regular rounded" type="submit">{{__('data.login.btn_login')}}</button>
                    <div class="fw-bold text-center">{{__('data.login.req.title')}}
                        <a href="{{route('register')}}" class="text-reset text-decoration-none"><span class="custom-txt">{{__('data.login.req.btn_regist')}}</span></a></div>   
                </div> 
            </div>
        </form>
    </div>
@endsection
