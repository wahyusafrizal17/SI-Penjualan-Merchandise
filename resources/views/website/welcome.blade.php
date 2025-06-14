@extends('website.app')
@section('title','Manage Slider Image')
@section('content')

    <div class="untree_co-hero overlay" style="background-image: url('https://images.squarespace-cdn.com/content/v1/637d34f0f3da94257002b695/fd82a023-72c9-4ce0-a169-b698cbfd61b7/image-asset.jpg');">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-12">
            <div class="row justify-content-left">
              <div class="col-lg-6 text-center align-self-center order-lg-2">
                {{-- <a href="https://vimeo.com/342333493" data-fancybox class="video-play-btn" data-aos="fade-up" data-aos-delay="400">
                  <span class="fa fa-user"></span>
                </a> --}}
              </div>
              <div class="col-lg-6 text-center text-lg-left">
                <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Belajar Bahasa Arab</h1>
                <div class="mb-5 text-white desc mx-" data-aos="fade-up" data-aos-delay="200">
                  <p>Platform edukatif yang dirancang untuk membantu anak-anak belajar bahasa Arab secara menyenangkan, interaktif, dan bertahap.</p>
                </div>
                {{-- <p class="mb-0" data-aos="fade-up" data-aos-delay="300">
                  <a href="#" class="btn btn-primary">Mulai Belajar</a>
                </p> --}}
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-hero -->
    <div class="untree_co-section py-0">
      <div class="container">
        <div class="row">
          <!-- Belajar Bahasa Arab -->
          <div class="col-md-6 col-lg-4">
            <div class="block-v1 color-1" data-aos="fade-up" data-aos-delay="0">
              <span class="flaticon-open-book"><i class="fa fa-book"></i></span>
              <h3>Belajar</h3>
              <p>Pelajari huruf hijaiyah, kosakata, dan tata bahasa Arab dengan metode yang menyenangkan dan interaktif.</p>
            </div>
          </div>
          <!-- Latihan Interaktif -->
          <div class="col-md-6 col-lg-4">
            <div class="block-v1 color-2" data-aos="fade-up" data-aos-delay="100">
              <span class="flaticon-quiz"><i class="fa fa-bookmark"></i></span>
              <h3>Latihan</h3>
              <p>Uji pemahamanmu melalui kuis, soal pilihan ganda, dan latihan percakapan sehari-hari dalam bahasa Arab.</p>
            </div>
          </div>
          <!-- Aktivitas Edukatif -->
          <div class="col-md-6 col-lg-4">
            <div class="block-v1 color-3" data-aos="fade-up" data-aos-delay="200">
              <span class="flaticon-idea"><i class="fa fa-lightbulb-o"></i></span>
              <h3>Aktivitas</h3>
              <p>Nikmati aktivitas edukatif seperti mendengarkan lagu Arab dan menonton video pembelajaran.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-section -->
    <div class="untree_co-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="0">
            <h2 class="line-bottom text-center mb-4">Apa yang Kami Tawarkan</h2>
            <p>Platform pembelajaran bahasa Arab interaktif untuk semua usia, dengan materi lengkap dan metode yang menyenangkan.</p>
          </div>
        </div>
        <div class="row">
          <!-- Kelas Membaca -->
          <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="feature">
              {{-- <span class="icon-book color-1"><i class="fa fa-book"></i></span> --}}
              <h3>Kelas Membaca</h3>
              <p>Pelajari huruf hijaiyah dan cara membaca Al-Qur'an serta teks bahasa Arab dengan metode bertahap.</p>
            </div>
          </div>
          <!-- Kelas Kosakata -->
          <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature">
              {{-- <span class="icon-language color-2"></span> --}}
              <h3>Kelas Kosakata</h3>
              <p>Perluas perbendaharaan kata bahasa Arab melalui tema sehari-hari dan percakapan praktis.</p>
            </div>
          </div>
          <!-- Kelas Percakapan -->
          <div class="col-6 col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="feature">
              {{-- <span class="icon-chat color-3"></span> --}}
              <h3>Kelas Percakapan</h3>
              <p>Latih kemampuan berbicara bahasa Arab melalui dialog interaktif dan latihan komunikasi nyata.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.untree_co-section -->
    <div class="untree_co-section pt-0 bg-img overlay" style="background-image: url('https://img.freepik.com/premium-photo/koran-holy-book-muslims-public-item-all-muslims-table_44074-490.jpg?semt=ais_hybrid&w=740');">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-lg-7">
            <h2 class="text-white mb-3" data-aos="fade-up" data-aos-delay="0">Pendidikan Bahasa Arab</h2>
            <p class="text-white h5 mb-4" data-aos="fade-up" data-aos-delay="100">Mulai perjalananmu mempelajari bahasa Arab dengan metode interaktif dan materi lengkap dari dasar hingga mahir.</p>
            <p>
              <a href="{{ route('elearning.materi') }}" class="btn btn-primary" data-aos="fade-up" data-aos-delay="200">Mulai Sekarang</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    </div>
    <!-- /.untree_co-section -->
    
    @endsection