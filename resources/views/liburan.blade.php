@extends('template')

@section('title', '| Liburan')

@section('content')
<div class="nav-clone"></div>
<div class="content-2">

    <div class="fs-2 fw-bold text-center w-100 py-4">
        {{__('data.travel.title')}} 
    </div>
      <div class="w-100 my-4 d-flex align-items-center justify-content-between">
        <form class="w-100 ms-2 text-center" action="{{route('search')}}" enctype="multipart/form-data" method="GET">
          @csrf
          <input type="search" class="sch w-50 p-1" name="keywords" placeholder="{{__('data.travel.placeholder')}}">
          <button type="submit" class="sch-btn p-1">{{__('data.travel.btn_sch')}}</button>
        </form>
      </div> 
    @if (count($pass_data)<1)
    <div class="h-none-data fst-italic text-white opacity-50 fs-5 d-flex justify-content-center align-items-center">
      {{__('data.travel.empty')}}
    </div>
    @else
      <div class="row d-flex justify-content-center container gap-3">
        @foreach ($pass_data as $data)
          <div class="col-sm-3 custom-bg-card rounded text-light p-2 card-size">
            <div class="pb-1">
              <div class="rounded border-0" style="width:100%; height: 180px; background-image: url({{$data->image}}); background-size: cover; background-position: center center; background-repeat: no-repeat"></div>
            </div>
            <div class="mt-2">
              <div class="fw-bold custom-txt pb-2 crd-title">{{$data->name}}</div>
              @if (app()->getLocale() == "id")
                <div class="fs-6 desc-card">{{$data->description_id}}</div>
              @else
                <div class="fs-6 desc-card">{{$data->description_en}}</div>
              @endif
              <a href="{{route('review', ['tourist_attraction_id' => $data->id])}}" class="btn-detail">Detail</a>
            </div>
          </div> 
          @endforeach
        </div>
        <div class="center m-3 pagination">
          {{$pass_data->links()}}
        </div>
      </div>
    @endif
</div>

@endsection