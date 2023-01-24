@extends('template')

@section('title', '| Detail')

@section('content')
<div>
    <div class="nav-clone"></div>
    <div class="detail" style="background-image: url({{$tourist->image}}); filter: brightness(60%); background-size: cover; background-position: center center"></div>
    <div class="container">
        <div class="fw-bold fs-1 py-2">
            {{$tourist->name}} 
        </div>
        <p class="detail-desc">
            @if (app()->getLocale() == "id")
                {{$tourist->description_id}}
            @else
                {{$tourist->description_en}}
            @endif
        </p>
        <div class="bg-light text-dark rounded p-2 mb-4 mt-5">
            <div class="d-flex justify-content-between align-items-center" id="title-label">
                <div class="fw-bold fs-4 d-flex align-items-center"><span class="bg-success rounded-circle me-2" style="display:inline-block; width:20px; height:20px;"></span>{{__('data.detail.location')}}</div>
                <div class="dropdown-toggle"></div>
            </div>
            
            <div class="temp-value-label mt-2" id="value-label">
                {{$tourist->location}}
            </div>
        </div>
        <div class="bg-light text-dark rounded p-2 mb-4"  id="title-label-2">
            <div class="d-flex justify-content-between align-items-center" id="title-label">
                <div class="fw-bold fs-4 d-flex align-items-center"><span class="bg-success rounded-circle me-2" style="display:inline-block; width:20px; height:20px;"></span>{{__('data.detail.price')}}</div>
                <div class="dropdown-toggle"></div>
            </div>
            <div class="temp-value-label mt-2" id="value-label-2">
                @if (app()->getLocale() == 'en')
                    @if ($tourist->price_estimate == "Gratis")
                        Free
                    @else
                        {{$tourist->price_estimate}}
                    @endif
                @else
                    {{$tourist->price_estimate}}
                @endif
            </div>
        </div>
        <div class="bg-light text-dark rounded p-2 mb-4" id="title-label-3">
            <div class="d-flex justify-content-between align-items-center" id="title-label">
                <div class="fw-bold fs-4 d-flex align-items-center"><span class="bg-success rounded-circle me-2" style="display:inline-block; width:20px; height:20px;"></span>{{__('data.detail.time')}}</div>
                <div class="dropdown-toggle"></div>
            </div>
            <div class="temp-value-label mt-2" id="value-label-3">
                @if (app()->getLocale() == "en")
                    @if ($tourist->time == "24 Jam")
                        24 Hours (WIB)
                    @else
                        {{$tourist->time}} (WIB)
                    @endif
                @else
                    {{$tourist->time}} (WIB)
                @endif
            </div>
        </div>
    </div>

    {{-- Review --}}
    <div class="container my-5">
        <div class="fs-1 fw-bold custom-txt mb-3">{{__('data.detail.title')}}</div>
        {{-- Tempat looping review --}}
        <div class="ctr-rev">
            <div class="frontend-view pe-3">
                @if (count($post) < 1)
                    <div class="fst-italic text-white opacity-50 fs-5 h-100 d-flex justify-content-center align-items-center">
                        {{__('data.detail.empty')}}
                    </div>
                @else
                    <div class="d-none">
                        {{$tes = 0}}
                    </div>
                    @foreach ($post as $data)
                        <div class="bor-btm ps-1 mt-1 mb-4">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="w-50 d-flex">
                                    <div class="rounded" style="width: 70px; height: 70px; background-image: url({{asset('storage/avatars/' . $data->post_belongsTo_user->image)}}); background-size: cover; background-position: center center"></div>
                                    <div class="ps-3 d-flex flex-column justify-content-center">
                                        <div class="fw-bold custom-txt auth-name">{{$data->post_belongsTo_user->name}}</div>
                                        <div class="date">{{$data->time}}</div>
                                    </div>
                                </div>
                                @if(Auth::user()->id == $data->user_id)
                                    <div class=" me-3">
                                        <form action="{{route('post_delete_logic', ['id' => $data->id])}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="custom-bg text-light fw-bold px-1 pb-1 rounded border-0" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                            <div class="d-none">
                                {{$tes += 1}}
                                {{$temp2 = "con".$tes}}
                            </div>
                            <div class="ps-3 py-3" style="margin-left: 70px">
                                <div class="d-flex justify-content-between me-3">
                                    <div>
                                        {{$data->review}}
                                    </div>
                                    @if(Auth::user()->id == $data->user_id)
                                        <button onclick="slider({{$tes}})" class="rounded text-center btn-edit-2">
                                            &#9998;
                                        </button>
                                    @endif
                                </div>
                                <div>
                                    @if(Auth::user()->id == $data->user_id)
                                        <form id="{{$temp2}}" action="{{route('post_edit_logic')}}" class="temp-value-label position-relative mt-2" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('patch')
                                            <div class="d-flex justify-content-between me-3">
                                                <input type="text" style="visibility: hidden; display: none" name="id" value="{{$data->id}}">
                                                <input type="text" class="edit" name="review" placeholder="{{__('data.detail.edit.placeholder')}}" id="review">
                                                <button type="submit" class="btn-edit">{{__('data.detail.edit.btn_chg')}}</button>
                                            </div>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            {{-- input review --}}
            <form action="{{route('insert_review')}}" class="d-flex gap-3 pt-3" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="user_id" style="visibility: hidden; display: none" value="{{Auth::user()->id}}">
                <input type="text" name="tourist_attraction_id" style="visibility: hidden; display: none" value="{{$tourist->id}}">
                <input class="comment-view" type="text" name="review" placeholder="{{__('data.detail.placeholder')}}">
                <button class="send-review" type="submit">&#10146;</button>
            </form>
        </div>
    </div>
</div>
<script>
    function slider(pass){
        $('#con'+pass).slideToggle(500);
    }

    $(document).ready(function(){     
        slider();
    })
</script>
@endsection