@extends('layouts.main')

@section('content')
<main id="main" class="main-page">
  <section id="speakers-details" class="wow fadeIn">
    <div class="container">
      <div class="section-header">
        <h2>Speaker Details</h2>
        <p>Praesentium ut qui possimus sapiente nulla.</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <img src="{{ $speaker->photo->getUrl() }}" alt="{{ $speaker->name }}" class="img-fluid">
        </div>

        <div class="col-md-6">
          <div class="details">
            <h2>{{ $speaker->name }}</h2>
            <div class="social">
              <a href="{{ $speaker->twitter }}"><i class="fa fa-twitter"></i></a>
              <a href="{{ $speaker->facebook }}"><i class="fa fa-facebook"></i></a>
              <a href="{{ $speaker->linkedin }}"><i class="fa fa-linkedin"></i></a>
            </div>
            <p>{{ $speaker->full_description }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection