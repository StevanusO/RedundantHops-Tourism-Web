<nav class="fw-bold p-3 w-100 position-absolute d-flex justify-content-end align-items-center">
    <div class="p-2 me-3 rounded">
      <a href="{{route('display_welcome_page')}}" class="nv-hide nav-item text-decoration-none text-light">{{__('data.nav.home')}}</a>
    </div>
    <div class="p-2 me-3 rounded">
      <a href="{{route('tentang')}}" class="nv-hide nav-item text-decoration-none text-light">{{__('data.nav.about')}}</a>
    </div>
    <div class="p-2 me-3 rounded">
      <a href="{{route('liburan')}}" class="nv-hide nav-item text-decoration-none text-light">{{__('data.nav.travel')}}</a>
    </div>
    <div class="p-2 me-3 rounded">
      <div class="dropdown">
        <a class=" text-light nav-link" role="button" data-bs-toggle="dropdown">
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
    <div class="p-2 me-3 rounded">
      <div class="dropdown">
        <a class="dropdown-toggle text-light nav-link" role="button" data-bs-toggle="dropdown">
          <img class="rounded-circle me-2" src="{{asset('storage/avatars/' . Auth::user()->image)}}" style="width: 30px; height: 30px">
        </a>
        <ul class="mt-2 dropdown-menu bg-transparent glass-down text-center">
          <li class="py-3"><a class="text-decoration-none text-light nav-item" href="{{route('profile')}}">{{__('data.nav.profile')}}</a></li>
          <li class="py-3 nv-show-hide "><a class="text-decoration-none text-light nav-item" href="{{route('display_welcome_page')}}">{{__('data.nav.home')}}</a></li>
          <li class="py-3 nv-show-hide "><a class="text-decoration-none text-light nav-item" href="{{route('tentang')}}">{{__('data.nav.about')}}</a></li>
          <li class="py-3 nv-show-hide "><a class="text-decoration-none text-light nav-item" href="{{route('liburan')}}">{{__('data.nav.travel')}}</a></li>
          <li class="py-3"><a class="text-decoration-none text-light nav-item" href="{{route('logout_backend')}}">{{__('data.nav.logout')}}</a></li>
        </ul>
      </div>
    </div>
    
</nav>
