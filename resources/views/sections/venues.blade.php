<section id="venue" class="wow fadeInUp">
    <div class="container-fluid">
      <div class="section-header">
        <h2>Event Venue</h2>
        <p>Event venue location info and gallery</p>
      </div>
    </div>
  @foreach($venues as $venue)
    <div class="row no-gutters">
      <div class="col-lg-6 venue-map">
        <iframe src="https://maps.google.com/maps?q={{ $venue->latitude }},{{ $venue->longitude }}&hl=en&z=14&amp;output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-lg-6 venue-info">
        <div class="row justify-content-center">
          <div class="col-11 col-lg-8">
            <h3>{{ $venue->name }}</h3>
            <p>{{ $venue->description }}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid venue-gallery-container">
      <div class="row no-gutters">
        @if($venue->photos)
          @foreach($venue->photos as $photo)
            <div class="col-lg-3 col-md-4">
              <div class="venue-gallery">
                <a href="{{ $photo->getUrl() }}" class="venobox" data-gall="venue-gallery">
                  <img src="{{ $photo->getUrl() }}" alt="" class="img-fluid">
                </a>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  @endforeach
</section>
