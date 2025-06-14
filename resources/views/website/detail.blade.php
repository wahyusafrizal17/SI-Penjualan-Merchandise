@extends('website.app') 
@section('title','Manage Slider Image') 
@section('content') 

<div class="untree_co-hero overlay" style="background-image: url('https://images.squarespace-cdn.com/content/v1/637d34f0f3da94257002b695/fd82a023-72c9-4ce0-a169-b698cbfd61b7/image-asset.jpg');">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-12">
        <div class="row justify-content-center">
          <div class="col-lg-7 text-center text-lg-center">
            <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">{{ $materi->nama_materi }}</h1>
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
    {!! $materi->materi !!}
  </div>
</div>
<!-- /.untree_co-section -->
</div>
@endsection