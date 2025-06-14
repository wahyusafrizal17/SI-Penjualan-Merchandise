@extends('website.app') 
@section('title','Manage Slider Image') 
@section('content') 

<div class="untree_co-hero overlay" style="background-image: url('https://images.squarespace-cdn.com/content/v1/637d34f0f3da94257002b695/fd82a023-72c9-4ce0-a169-b698cbfd61b7/image-asset.jpg');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center text-lg-center">
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Materi</h1>
            <div class="mb-5 text-white mx-auto" data-aos="fade-up" data-aos-delay="200">
              <p> Selamat datang di platform pembelajaran Bahasa Arab. Di sini, Anda dapat mempelajari dasar-dasar hingga tingkat lanjutan Bahasa Arab secara interaktif dan menyenangkan. Tingkatkan kemampuan membaca, menulis, dan memahami Bahasa Arab bersama kami. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</div>
<!-- /.untree_co-hero -->
<div class="untree_co-section">
  <div class="container">
    <div class="row align-items-stretch">
      @foreach($materi as $row)
      <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="media-h d-flex h-100">
          <figure>
            <img src="{{ asset('banner/'.$row->banner) }}" alt="Image">
          </figure>
          <div class="media-h-body">
            <h2 class="mb-3">
              <a href="{{ route('elearning.detail', $row->id) }}">{{ $row->nama_materi }}</a>
            </h2>
            <div class="meta ">
              <span class="fa fa-calendar mr-2"></span>
              <span>{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('d F Y') }}</span>
            </div>
            <p>{{ \Illuminate\Support\Str::limit(strip_tags($row->materi), 150) }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row mt-5">
    <div class="col-12 text-center">
      <ul class="list-unstyled custom-pagination">
        @for ($i = 1; $i <= $materi->lastPage(); $i++)
          <li class="{{ $materi->currentPage() == $i ? 'active' : '' }}">
            <a href="{{ $materi->url($i) }}">{{ $i }}</a>
          </li>
        @endfor
      </ul>
    </div>
  </div>
  </div>
</div>
@endsection