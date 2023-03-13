@extends('layouts.book_master')

@section('content')
<section class="body">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 upload_covargeFile">
                <h1>Upload Coverage Files</h1>
                <p><b>STEP 1 OF 2</b></p>
            </div>
                
            <div class="col-md-12">
                <p><b>Drag and drop files (maximum 50 at a time) on the upload area below.</b><br>
                    Supported file types: JPG, PNG, GIF, MP3, MP4, WMV, MOV, PDF<br>
                    Maximum file size is 250 Megabytes</p>
            </div>
            <div class="col-md-12">
                    <input id="images_fram" type="file" class="form-control" multiple="">

            </div>

        </div>

    </div>
</section>





@endsection