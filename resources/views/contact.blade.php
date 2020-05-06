@extends('layouts.main')

@section('content')
<!-- Section: Contact v.1 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto pb-5">test</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-12">

      <!--Google map-->
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4">
        <iframe
          src="https://www.google.com/maps/place/Kantor+Pusat+PT+Pegadaian+(Persero)/@-6.19,106.844478,17z/data=!3m1!4b1!4m5!3m4!1s0x2e69f44682a35c17:0x7056cb322a83d5b7!8m2!3d-6.19!4d106.8466667"
          width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating red accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>Kramat Raya n0 163</p>
          <p class="mb-md-0">Senen</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating red accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>081325673063</p>
          <p class="mb-md-0">081325673063</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating red accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>www.pegadaian.co.id</p>
          <p class="mb-0">divisi.complaince@pegadaian.co.id</p>
        </div>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Contact v.1 -->
@endsection