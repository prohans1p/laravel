@extends('layout.doc')

@section('container')
<section id="hero" class="hero section">

  <img src="{{asset('assets/img/aku.jpg')}}" alt="" data-aos="fade-in">

  <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h2 class="text-white">{{$name}}</h2>
        <p class="text-white">{{$sekolah}}</p>
        <a href="about.html" class="btn-get-started">About Me</a>
      </div>
    </div>
  </div>

</section><!-- /Hero Section -->

</main>

@endsection
