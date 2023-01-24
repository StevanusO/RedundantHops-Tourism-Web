<nav class="navvy fw-bold p-3 w-100 position-absolute d-flex justify-content-end align-items-center darker">
    <div class="p-2 me-3 rounded">
      <a href="{{route('display_welcome_page')}}" class="nav-item text-decoration-none text-light">{{__('data.nav.home')}}</a>
    </div>
    <div class="p-2 me-3 rounded">
      <a href="{{route('tentang')}}" class="nav-item text-decoration-none text-light">{{__('data.nav.about')}}</a>
    </div>
    <div class="p-2 me-3 rounded">
      <a href="{{route('register')}}" class="nav-item text-decoration-none text-light">{{__('data.nav.register')}}</a>
    </div>

    <div class="p-2 me-3 rounded">
      <div class="dropdown">
        <a class="text-light nav-link" role="button" data-bs-toggle="dropdown">
          @if (is_null(app()->getLocale()))
            <img class="rounded" src="{{asset('../assets/images/id_flag.png')}}" alt="Choose_language" style="width: 25px; height: 25px">
          @else
            @if (app()->getLocale() == "id")
              <img class="rounded" src="{{asset('../assets/images/id_flag.png')}}" alt="" style="width: 25px; height: 25px">
            @else
              <img class="rounded" src="{{asset('../assets/images/en_flag.png')}}" alt="" style="width: 25px; height: 25px">
            @endif  
          @endif
        </a>
        <ul class="mt-2 dropdown-menu bg-transparent glass-down text-center">
          <li class="py-3">
            <a class="d-flex justify-content-start ms-3 align-items-center text-decoration-none text-light nav-item" href="{{url('locale/id')}}">
              <div>
                <img class="rounded" src="{{asset('../assets/images/id_flag.png')}}" alt="" style="width: 25px; height: 25px">
              </div>
              <div class="ms-2">
                {{__('data.lang.id')}}
              </div>
            </a>
          </li>
          <li class="py-3">
            <a class="d-flex justify-content-start ms-3 align-items-center text-decoration-none text-light nav-item" href="{{url('locale/en')}}">
              <img class="rounded" src="{{asset('../assets/images/en_flag.png')}}" alt="" style="width: 25px; height: 25px">
              <div class="ms-2">
                {{__('data.lang.en')}}
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
</nav>
