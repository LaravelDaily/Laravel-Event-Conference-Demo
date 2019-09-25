<section id="intro">
  <div class="intro-container wow fadeIn">
    <h1 class="mb-4 pb-0">{!! $settings['title'] ?? '' !!}</h1>
    <p class="mb-4 pb-0">{{ $settings['subtitle'] ?? '' }}</p>
    @if($settings['youtube_link'])
      <a href="{{ $settings['youtube_link'] }}" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
    @endif
    <a href="#about" class="about-btn scrollto">About The Event</a>
  </div>
</section>
