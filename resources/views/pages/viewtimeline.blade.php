@extends('layouts.master')
@section('content')

<!-- Main Container -->
<main id="main-container">
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">View Timeline</h1>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
          
          <ul class="timeline timeline-centered timeline-alt">
            @if($timeline)
            @foreach($timeline as $data)
            <li class="timeline-event">
              <div class="timeline-event-icon bg-default">
                <i class="fab fa-fa-circle"></i>
              </div>
              <div class="timeline-event-block block block-rounded">
                <div class="block-header block-header-default">
                <h3 class="block-title"> {{$data->title}}</h3>
                  <div class="block-options">
                    <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                      {{date('F-d Y', strtotime($data->date_timeline))}}
                    </div>
                  </div>
                </div>
                <div class="block-content">
                  <div class="row ">
                    <div class="col-md-12 mb-4">
                        <div class="flex-grow-1">Description: {{$data->description}}</div>
                    </div>
                  </div>
                  @if(count($data->images) > 0)
                  <div class="row items-push js-gallery img-fluid-100 js-gallery-enabled">
                    <h3 class="block-title">Photos</h3>
                    @foreach($data->images as $image)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{asset('uploads/'.$image->images)}}">
                        <img class="img-fluid" src="{{asset('uploads/'.$image->images)}}" alt="">
                      </a>
                    </div>
                    @endforeach
                  </div>
                  @endif

                  @if(count($data->attachements) > 0)
                  <div class="row items-push js-gallery img-fluid-100 js-gallery-enabled">
                    <h3 class="block-title">Attachement</h3>
                    @foreach($data->attachements as $attachement)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                      <a href="{{asset('uploads/'.$attachement->attachement)}}">
                        <i class="fab-fa-fa-file"></i>
                      </a>
                    </div>
                    @endforeach
                  </div>
                  @endif
                </div>
              </div>
            </li>
            @endforeach
            @endif
          </ul>
          <!-- END Timeline -->
        </div>

</main>
@stop