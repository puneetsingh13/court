<style>
  .repeatDiv > input, .repeatDiv2 > input {
    margin-right: 12px !important;
}
</style>
@extends('layouts.master')
@section('content')

<!-- Main Container -->
<main id="main-container">
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Add To Timeline</h1>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content content-full">
    <div class="row g-sm push">

       <!-- Way 1: Display All Error Messages -->
       @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

      <form id="form-add-timeline" method="POST" action="{{ route('post.timeline') }}" enctype='multipart/form-data'>

        {{ csrf_field() }}    
        <div class="col-md-12">
          <div class="form-group mt-3">
            <input type="date" class="form-control" name="date_timeline" id="date" placeholder="Choose Date">
           
          </div>

          <div class="form-group mt-3">
            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
            
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" aria-label="Description" name="description" id="descriptiopn"></textarea>
           
          </div>

        </div>

        <div class="row mt-3" id="image-section">
          <label>Photos</label>
          <div class="col-md-10">
            <div class="mb-3 input-group repeatDiv" id="repeatDiv">
              <input type="file" class="form-control" name="images[]">
              <input type="text" class="form-control" name="image_description[]" required placeholder="Image Description">
            </div>
          </div>
          <div class="col-md-2">
            <button type="button" class="btn btn-info" id="repeatDivBtn" data-increment="1">Add More Input</button>
          </div>
        </div>

        <div class="row mt-3" id="attachement-section">
          <label>Attachement</label>
          <div class="col-md-10">
            <div class="mb-3 input-group repeatDiv2" id="repeatDiv2">
              <input type="file" class="form-control" name="attachement[]">
            </div>
          </div>
          <div class="col-md-2">
            <button type="button" class="btn btn-info" id="repeatDiv2Btn" data-increment2="1">Add More Input</button>
          </div>
        </div>

        <div class="col-md-12 mt-3">
          <button type="submit" id="post-timeline" class="btn-success btn-lg btn">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->
@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

    // Code for Image Section
    $("#repeatDivBtn").click(function() {
      $newid = $(this).data("increment");
      $repeatDiv = $("#repeatDiv").wrap('<div/>').parent().html();
      $('#repeatDiv').unwrap();
      $($repeatDiv).insertAfter($(".repeatDiv").last());
      $(".repeatDiv").last().attr('id', "repeatDiv" + '_' + $newid);
      $("#repeatDiv" + '_' + $newid).append('<div class="input-group-append"><button type="button" class="btn btn-danger removeDivBtn" data-id="repeatDiv' + '_' + $newid + '">Remove</button></div>');
      $newid++;
      $(this).data("increment", $newid);
    });
    $(document).on('click', '.removeDivBtn', function() {
      $divId = $(this).data("id");
      $("#" + $divId).remove();
      $inc = $("#repeatDivBtn").data("increment");
      $("#repeatDivBtn").data("increment", $inc - 1);
    });

    // Code for Attachement Ssction 
    $("#repeatDiv2Btn").click(function() {
      $newid = $(this).data("increment2");
      $repeatDiv2 = $("#repeatDiv2").wrap('<div/>').parent().html();
      $('#repeatDiv2').unwrap();
      $($repeatDiv2).insertAfter($(".repeatDiv2").last());
      $(".repeatDiv2").last().attr('id', "repeatDiv2" + '_' + $newid);
      $("#repeatDiv2" + '_' + $newid).append('<div class="input-group-append"><button type="button" class="btn btn-danger removeDiv2Btn" data-id="repeatDiv2' + '_' + $newid + '">Remove</button></div>');
      $newid++;
      $(this).data("increment2", $newid);
    });
    $(document).on('click', '.removeDiv2Btn', function() {
      $divId2 = $(this).data("id");
      $("#" + $divId2).remove();
      $inc = $("#repeatDiv2Btn").data("increment2");
      $("#repeatDiv2Btn").data("increment2", $inc - 1);
    });
  });
</script>