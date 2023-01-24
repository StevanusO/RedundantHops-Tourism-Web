@extends('template')

@section('title', '| Tentang')

@section('content')
    <div class="nav-clone"></div>
    <div>
        <div class="ttg-part-1 d-flex flex-column justify-content-center align-items-center text-center">
            <div class="resp-title fw-bold py-3">{{__('data.about.title')}}</div>
            <div class="resp-subtitle w-50">{{__('data.about.desc')}}</div>
        </div>
        <div class="ctr-ttg-2">
            <div class="bar">
                <div class="resp-title-2 fw-bold">{{__('data.about.history.title')}}</div>
                <br>
                <div class="resp-subtitle">
                    {{__('data.about.history.desc_one')}}
                </div>
                <br>
                <div class="resp-subtitle">
                    {{__('data.about.history.desc_two')}}
                </div>
            </div>
        </div>
        <div class="ctr-ttg-3">
            <div class="">
                <div class="resp-title-2 fw-bold">
                    {{__('data.about.principle.title')}}
                </div>
                <div class="mt-4 ttg-pt-2">
                    <div class="outer-w mb-4">
                        <div class="rect">
                            <div class="resp-subtitle fw-bold">{{__('data.about.principle.first_principle.title')}}</div>
                            <div class="mt-2">
                                {{__('data.about.principle.first_principle.desc')}}
                            </div>
                        </div>
                    </div>
                    <div class="outer-w mb-4">
                        <div class="rect">
                            <div class="resp-subtitle fw-bold">{{__('data.about.principle.second_principle.title')}}</div>
                            <div class="mt-2">
                                {{__('data.about.principle.second_principle.desc')}}
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="outer-w">
                        <div class="rect">
                            <div class="resp-subtitle fw-bold">{{__('data.about.principle.third_principle.title')}}</div>
                            <div class="mt-2">
                                {{__('data.about.principle.third_principle.desc')}} 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection