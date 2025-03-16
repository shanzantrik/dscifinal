<!-- Speakers Section -->
<section class="content-section bg-white" id="speakers">
  <div class="container" style="margin-top:50px;">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-12 col-lg-6">
        <div class="section-title">
          <h2 class="text-dark">Event Speakers</h2>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <form class="filter">
          <input type="text" id="slidename" placeholder="Search by name" class="search-input" />
        </form>
      </div>
    </div>
    <div class="speakers-slider">
      @foreach($speakers as $speaker)
      <div class="speaker-item">
        <div class="speaker-image">
          <img src="{{ $speaker->image_url }}" alt="{{ $speaker->name }}" class="speaker-img">
        </div>
        <div class="speaker-info">
          <h4 class="text-dark">{{ $speaker->name }}</h4>
          <p class="designation">{{ $speaker->designation }}</p>
          @if($speaker->company)
          <p class="company text-secondary">{{ $speaker->company }}</p>
          @endif
        </div>
      </div>
      @endforeach
    </div>
    <div class="text-center mt-4">
      <a href="#" class="btn btn-primary btn-lg rounded-pill">
        View All Speakers
        <i class="fas fa-arrow-right ms-2"></i>
      </a>
    </div>
  </div>
</section>

//
<!-- Event Schedule Section -->
// <section class="content-section" id="eventSchedule">
  // <div class="container position-relative">
    // <div class="row align-items-start">
      // <div class="col-12 mb-4">
        // <div class="text-center text-white">
          // <h3>EVENT SCHEDULE</h3>
          // <h2><span>Sessions that are Planned</span></h2>
          // </div>
        // </div>
      //
      <!-- Schedule tabs and content -->
      // <div class="tabMainArea">
        // @foreach($eventDays as $day)
        // <div class="tablink {{ $loop->first ? 'active' : '' }}" //
          onclick="openPage('day{{ $day->id }}', this, '{{ $day->color_code }}')">
          // @if($day->subtitle)
          // <p>{{ $day->subtitle }}</p>
          // @endif
          // <h1>{{ $day->title }}</h1>
          // <p>{{ $day->date->format('l - d F') }}</p>
          // <i class="fa fa-angle-down"></i>
          // </div>
        // @endforeach
        // </div>

      //
      <!-- Tab content -->
      // @foreach($eventDays as $day)
      // <div id="day{{ $day->id }}" class="tabcontent {{ $loop->first ? 'show' : '' }}">
        // <div class="schedule-timeline">
          // @foreach($day->agendas as $agenda)
          // <div class="timeline-item">
            // <div class="timeline-time">
              // {{ $agenda->start_time->format('h:i A') }} - {{ $agenda->end_time->format('h:i A') }}
              // </div>
            // <div class="timeline-content">
              // <h3>{{ $agenda->title }}</h3>
              // @if($agenda->description)
              // <p>{!! $agenda->description !!}</p>
              // @endif
              // @if($agenda->venue || $agenda->track)
              // <div class="event-meta">
                // @if($agenda->venue)
                // <span class="venue">
                  // <i class="fas fa-map-marker-alt"></i> {{ $agenda->venue }}
                  // </span>
                // @endif
                // @if($agenda->track)
                // <span class="track">
                  // <i class="fas fa-stream"></i> {{ $agenda->track }}
                  // </span>
                // @endif
                // </div>
              // @endif
              // @if($agenda->speakers->count() > 0)
              // <div class="speakers-list">
                // @foreach($agenda->speakers as $speaker)
                // <div class="speaker-item">
                  // <img src="{{ $speaker->image_url }}" alt="{{ $speaker->name }}" class="speaker-avatar">
                  // <div class="speaker-info">
                    // <h4>{{ $speaker->name }}</h4>
                    // @if($speaker->pivot->role)
                    // <span class="role">{{ $speaker->pivot->role }}</span>
                    // @endif
                    // {{-- <p>{{ $speaker->designation }}</p> --}}
                    // </div>
                  // </div>
                // @endforeach
                // </div>
              // @endif
              // </div>
            // </div>
          // @endforeach
          // </div>
        // </div>
      // @endforeach
      //
    </div>
    // </div>
  // </section>

//
<!-- Registration Section -->
// <section id="registration" class="content-section">
  // <div class="container">
    // <div class="row justify-content-center">
      // <div class="col-lg-8">
        // <div class="text-center">
          // <h2>Register Now</h2>
          // <p class="lead">Secure your spot at AISS 2025</p>
          // </div>
        //
        <!-- Registration form will go here -->
        //
      </div>
      // </div>
    // </div>
  // </section>
