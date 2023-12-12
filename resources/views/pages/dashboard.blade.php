@extends('layouts.master')
@section('content')

<!-- Main Container -->
 <main id="main-container">
     <!-- Hero -->
     <div class="bg-body-light">
          <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
              <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Dashboard</h1>
            </div>
          </div>
        </div>
     <!-- END Hero -->

     <!-- Page Content -->
     <div class="content content-full">
        <!-- Ratio 1:1 -->
        <h2 class="content-heading" style="text-align: right;">
           <a href="{{ route('add.timeline') }}"> Add Timeline</a> 
        </h2>
          <div class="row g-sm push">
            @if($timelines)
              @foreach($timelines as $timeline)
              <div class="col-6 col-md-4 col-xl-2">
                <a class="block text-center bg-xmodern" href="{{url('timeline', [$timeline->month_timeline, $timeline->year_timeline])}}">
                  <div class="block-content block-content-full ratio ratio-1x1">
                    <div class="d-flex justify-content-center align-items-center">
                      <div>
                        <div class="fw-semibold mt-2 text-uppercase text-white-75">{{$timeline->month_timeline}} - {{$timeline->year_timeline}}</div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              @endforeach
            @endif 
          </div>
          <!-- END Ratio 1:1 -->
        </div>
     <!-- END Page Content -->
 </main>
 <!-- END Main Container -->
 @stop