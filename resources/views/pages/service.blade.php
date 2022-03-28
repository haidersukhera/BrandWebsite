@extends('layouts.master_home')
@section('home_content')

 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Services</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>Services</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row">
        @foreach ($services as $service )


        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue">

            <h4><a href="">{{$service->title}}</a></h4>
            <p>{{$service->description}}</p>
          </div>

        </div>

        @endforeach
    </div>
  </section><!-- End Services Section -->

@endsection
