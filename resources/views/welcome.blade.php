@extends('template')

@section('title', 'Welcome')

@section('content')
<section>
<!-- Code Here -->
{{-- Code Slider --}}
{{-- Cara mengupload g drive utk menembak ke src img

    Ganti URL ID sesuai dengan gdrive kalian
    http://drive.google.com/uc?export=view&id=URLIDHere
    https://drive.google.com/file/d/1KDlhC28h95XjK9SOSrf-NnX5DVZTLwmy/view?usp=share_link
    --}}
  <div class="content-1">
    <div class="container h-100">
      <div class="h-100 d-flex flex-column justify-content-center">
        <h1 class="text-light w-100">Selamat Datang di</h1>
        <h1 class="text-light border-4 border-bottom border-danger w-50"><span style="color: red">INDO</span>NESIA</h1>
        <div class="text-light mt-2 w-50">
          <p>Indonesia merupakan negara kepulauan yang kaya akan sumber 
            daya alam dan keindahannya, sopan dan ramah menjadi ciri khas 
            kebudayaan orang Indonesia. Sehingga Anda tidak perlu 
            memikirkan kemana harus Anda berwisata karena Indonesia 
            adalah jawabannya.</p>
        </div>
        <div class="d-flex mt-1 gap-3 w-100">
          <a href="#tpt-pop"><button type="button" class="btn btn-danger w-100">Jelajah</button></a>
          <a href="/masuk"><button type="button" class="btn btn-outline-warning w-100">Masuk</button></a>
        </div>
      </div>
    </div>
  </div>
  
  {{-- ukuran gbr agak sulit diperbaiki, berencana samain semua ukuran gbr yg akan dipakai --}}
  <div id="tpt-pop" class="px-4 pt-4 py-4 d-flex flex-column justify-content-center align-items-center">
    <h1 class="my-4">Tempat Populer</h1>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner rounded">
        <div class="carousel-item active">
          <img src="http://drive.google.com/uc?export=view&id=1DrO98krPxQY4s9TlTivJ5TjR9AYm_mFi" class="d-block w-100" alt="..." style="width: 800px; height: 600px">
          <div class="carousel-caption d-none d-md-block bg-dark opacity-75 rounded">
            <h5>Saya sepertinya digeprek</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="http://drive.google.com/uc?export=view&id=1QnDbGTH0lq2Q4f3w2_Au1AdzsPxy-MsE" class="d-block w-100" alt="..." style="width: 800px; height: 600px">
          <div class="carousel-caption d-none d-md-block bg-danger rounded">
            <h5>Wisata</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="http://drive.google.com/uc?export=view&id=1xxFnPKul3ygv1zD_avvIoFIgeM8Lpl8d" class="d-block w-100" alt="..." style="width: 800px; height: 600px">
          <div class="carousel-caption d-none d-md-block bg-danger rounded">
            <h5>Saya itu emote</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
      
    {{-- mgkin terapin looping di bagian ini --}}
    <div class="d-flex hori-scroll w-75 text-nowrap gap-3 py-4">
      {{-- @foreach ($post_wisata as $wisata)
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>{{$wisata->wisata_name}}</div></a>    
      @endforeach  --}}
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Candi Borobudur</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Kepulauan Seribu</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Goa Jomblang</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Candi Prambanan</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Kawah Ijen</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Gunung Bromo</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Air Terjun Tumpak Sewu</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Labuan bajo</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Danau Toba</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Raja Ampat</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Gununga Rinjani</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Nusa Dua</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Pantai Parai Tenggiri</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Wakatobi</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Tana Toraja</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Pulau Komodo</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Gunung Bromo</div></a>
      <a href="" class="text-decoration-none text-reset p-2 btn btn-outline-danger"><div>Pantai ora</div></a>
    </div>
  </div>

  
  <div class="content-3 w-100 d-flex p-4">
    <div class="w-50 px-3 pd-4 position-relative">
      <h1 class="text-center border rounded p-3 bg-primary">Pengalaman Pengguna Lainnya</h1>
      <div class="pt-4">
        <form class="">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
            <input type="email" class="form-control bg-transparent" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Alamat</label>
            <input type="password" class="form-control bg-transparent" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nama Orangtua</label>
            <input type="password" class="form-control bg-transparent" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Komentar</label>
            <input type="password" class="form-control bg-transparent" id="exampleInputPassword1">
          </div>
          <button type="submit" class="w-25 btn btn-primary position-absolute bottom-0">Submit</button>
        </form>
      </div>
    </div>
    <div class="w-50 ps-4 pe-3 verti-scroll">

      <div class=" text-dark card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1609748224/mzpq6u8zwyz2xh3j7iiu.jpg" class="rounded-start" alt="..." style="width: 100%; height: 100%">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class=" text-dark card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="http://i.ytimg.com/vi/P45cmvvAO2Q/hqdefault.jpg" class="rounded-start" alt="..." style="width: 100%; height: 100%">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class=" text-dark card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://pbs.twimg.com/profile_images/1485273631177412612/Hrs4GXxs_400x400.jpg" class="rounded-start" alt="..." style="width: 100%; height: 100%">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>

      <div class=" text-dark card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://gamebrott.com/wp-content/uploads/2021/09/qiqi_dead.png" class="rounded-start" alt="..." style="width: 100%; height: 100%">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
      
      <div class=" text-dark card mb-3" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="https://i.pinimg.com/736x/5c/38/94/5c3894aef5719e2b0a8d940d5c7997a1.jpg" class="rounded-start" alt="..." style="width: 100%; height: 100%">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>


@endsection
