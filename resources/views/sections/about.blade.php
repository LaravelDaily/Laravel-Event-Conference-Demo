<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>About The Event</h2>
        <p>{{ $settings['about_description'] ?? '' }}</p>
      </div>
      <div class="col-lg-3">
        <h3>Where</h3>
        <p>{!! $settings['about_where'] ?? '' !!}</p>
      </div>
      <div class="col-lg-3">
        <h3>When</h3>
        <p>{!! $settings['about_when'] ?? '' !!}</p>
      </div>
    </div>
  </div>
</section>
