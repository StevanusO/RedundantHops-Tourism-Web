@extends('template')

@section('title', '| Change Profile')

@section('content')

<div class="nav-clone bg-dark">

</div>
<div class="custom-bg w-100">
    <div class="w-ctm p-in">
        <div class="fs-2 fw-bold">
            {{__('data.change_profile.title')}}
        </div>
        <div>
            {{__('data.change_profile.desc')}}
        </div>
    </div>
    <div class="w-100 marq">
        <marquee class="border rounded h-100 p-2 mb-2 fw-bold bg-light custom-txt">
                {{__('data.change_profile.info')}}
        </marquee>
    </div>
</div>

<div class="p-form">
    <form action="{{route('update_backend')}}" enctype="multipart/form-data" method="POST" autocomplete="off">
        @csrf
        @method('patch')
        <input type="hidden" name="id" value="{{Auth::user()->id}}">

        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="nama" class="custom-txt fw-bold resp-form-text l-side-form">{{__('data.change_profile.username.title')}}</label>
            <input class="ipt-form" type="text" placeholder="{{__('data.change_profile.username.placeholder')}}" id="nama" name="user_name">
        </div>  


        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="password" class="custom-txt fw-bold resp-form-text l-side-form">{{__('data.change_profile.password.title')}}</label>
            <input class="ipt-form" type="password" placeholder="{{__('data.change_profile.password.placeholder')}}" id="password" name="pw">
        </div>  

        <div class="custom-bdr p-3 mb-4 rounded d-flex align-items-center">
            <label for="profile" class="custom-txt fw-bold resp-form-text l-side-form">{{__('data.change_profile.image.title')}}</label>
            <input type="file" class="custom-bg rounded text-light" id="profile" name="profile" accept="image/png, image/jpg, image/jpeg">
        </div>
        <br>
        <div class="w-100 d-flex justify-content-end">
            <div class="d-flex flex-column pe-3 justify-content-center align-items-center">
                <button class="btn-regular rounded py-1" type="submit">{{__('data.change_profile.btn_chg')}}</button>
            </div> 
        </div>
    </form>
</div>

@endsection