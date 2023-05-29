@extends('layouts.book_master')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>
<meta name="_token" content="{{csrf_token()}}" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
@endsection

@section('content')
<section class="body">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-12 upload_covargeFile">
        <h1>Upload Coverage Files</h1>
        <p><b>STEP 1 </b></p>
      </div>
      <div class="col-md-12">
        <div class="form-group text-center">
          <b>Choose which section to add your slides to</b><br>
          <select class="form-control file_upload_slct" id="addSlidParent">
            @if(!empty($allSections))
            @foreach($allSections as $section)
            <option value="{{ $section->id }}">{{ $section->name }}</option>
            @endforeach
            @endif
          </select>
        </div>
      </div>

      <div class="col-md-12">
        <p><b>Drag and drop files (maximum 50 at a time) on the upload area below.</b><br>
          Supported file types: JPG, PNG, GIF, MP3, MP4, WMV, MOV, PDF<br>
          Maximum file size is 250 Megabytes</p>
      </div>
      <div class="col-md-12 file_upload">
        <form method="post" action="{{route('book.addNewSlideFiles')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
          @csrf
          <input type="hidden" name="parrentId" id="parrentId" value="{{ $allSections[0]->id ?? ''}}">
        </form>

      </div>

      <div class="col-md-12 text-center">
        <button type="button" class="btn buttonn" id="add_files_btn">Create</button>
      </div>

    </div>

  </div>
</section>





@endsection
@section('scripts')
<script>
  $("#addSlidParent").on("change", function() {
    $('body').find('#parrentId').val($(this).val());
  });
</script>
<script type="text/javascript">
  Dropzone.options.dropzone = {
    maxFilesize: 12,
    renameFile: function(file) {
      var dt = new Date();
      var time = dt.getTime();
      return time + file.name;
    },
    acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
    addRemoveLinks: true,
    timeout: 5000,
    removedfile: function(file) {
      var name = file.upload.filename;
      $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        },
        type: 'POST',
        url: '{{ route("book.fileDestroy") }}',
        data: {
          filename: name
        },
        success: function(data) {
          toastr.success('Image Remove Successfully');
        },
        error: function(e) {
          console.log(e);
        }
      });
      var fileRef;
      return (fileRef = file.previewElement) != null ?
        fileRef.parentNode.removeChild(file.previewElement) : void 0;
    },
    success: function(file, response) {},
    error: function(file, response) {
      return false;
    }
  };
  $('#add_files_btn').on('click', function() {
    toastr.success('Image Upload Successfully');

    setTimeout(function() {
      location.reload();
    }, 2000);
  });
</script>

@endsection