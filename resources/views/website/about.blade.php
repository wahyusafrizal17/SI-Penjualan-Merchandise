@extends('website.app') 
@section('title','Manage Slider Image') 
@section('content') 

<div class="untree_co-hero overlay" style="background-image: url('https://images.squarespace-cdn.com/content/v1/637d34f0f3da94257002b695/fd82a023-72c9-4ce0-a169-b698cbfd61b7/image-asset.jpg');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center text-lg-center">
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Tentang Kami</h1>
            <div class="mb-5 text-white mx-auto" data-aos="fade-up" data-aos-delay="200">
              <p> Kami adalah platform pembelajaran Bahasa Arab yang dirancang untuk membantu siapa saja memahami dan menguasai Bahasa Arab dengan mudah. Dengan materi yang terstruktur dan interaktif, kami berkomitmen untuk menjadi mitra belajar terpercaya bagi pelajar, mahasiswa, hingga umum yang ingin memperdalam Bahasa Arab. </p>
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
    <div class="row justify-content-between">
      <div class="col-lg-5 mb-5">
  <h2 class="line-bottom mb-4" data-aos="fade-up" data-aos-delay="0">Tentang Kami</h2>
  <p data-aos="fade-up" data-aos-delay="100">
    Madrasah Ibtidaiyah Nurul Ihsan II Garut merupakan lembaga pendidikan dasar Islam yang berkomitmen dalam membentuk generasi Qur'ani yang cerdas, berakhlak mulia, dan berwawasan luas. Terletak di Kabupaten Garut, madrasah ini telah menjadi bagian penting dalam perkembangan pendidikan agama di daerah tersebut.
  </p>
  <ul class="list-unstyled ul-check mb-5 primary" data-aos="fade-up" data-aos-delay="200">
    <li>Pendidikan berbasis nilai-nilai Islam</li>
    <li>Tenaga pengajar yang profesional dan berdedikasi</li>
    <li>Lingkungan belajar yang nyaman dan mendukung</li>
  </ul>
  
</div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="bg-1"></div>
        <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap">
          <span class="play-wrap">
            <span class="icon-play"></span>
          </span>
          <img src="{{ asset('website/images/logo.png') }}" alt="Image" class="img-fluid rounded">
        </a>
      </div>
    </div>
  </div>
</div>
<!-- /.untree_co-section -->
</div>
@endsection