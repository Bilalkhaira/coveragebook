@extends('admin.layouts.master')

@section('content')

<div class="pagetitle">
    <h1>Home Setting</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item">Admin</li>
            <li class="breadcrumb-item active">Home Setting</li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">

        <div class="col-xl-12">
            <h2>Section 1</h2>
            <div class="card">
                <div class="card-body pt-3">

                    <div class="tab-content pt-2">
                        <form action="">
                            <div class="pt-3">

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Heading</label>
                                    <div class="col-md-8 col-lg-9">
                                        <!-- <input class="form-control" type="text" name="heading" required> -->
                                        ssfsf
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Text</label>
                                    <div class="col-md-8 col-lg-9">
                                        <!-- <textarea name="text" class="form-control" id="" cols="5" rows="3"></textarea> -->
                                        fsfsafs
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <!-- <input type="file" class="form-control" name="img"> -->
                                        fsafsaf
                                    </div>
                                </div>
                                @php
                                $test = 2;
                                @endphp

                                <div style="float: right;">
                                    <button type="submit" class="btn btn-primary">{{ $test == 1 ? 'Add' : 'Edit'}}</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
    
</section>

<section class="section">
    <div class="row">

        <div class="col-xl-12">
            <h2>Satisfied Customer Section</h2>
            <div class="card">
                <div class="card-body pt-3">

                    <div class="tab-content pt-2">
                        <form action="{{ route('update.satisfiedSection') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="pt-3">

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Heading</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input class="form-control" type="text" name="heading" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Text</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="text" class="form-control" id="" cols="5" rows="3"></textarea>
                                    </div>
                                </div>

                                <!-- <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="file" class="form-control" name="img[]" multiple="multiple">
                                    </div>
                                </div> -->
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="file" id="files" name="files[]" multiple class="form-control" />
                                    </div>
                                </div>

                                <div style="float: right;">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<section class="section">
    <div class="row">

        <div class="col-xl-12">
            <h2>Our Services</h2>
            <div class="card">
                <div class="card-body pt-3">

                    <div class="tab-content pt-2">
                        <form action="{{ route('update.satisfiedSection') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="pt-3">

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Heading</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input class="form-control" type="text" name="heading" required>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Text</label>
                                    <div class="col-md-8 col-lg-9">
                                        <textarea name="text" class="form-control" id="" cols="5" rows="3"></textarea>
                                    </div>
                                </div>
                                <div style="float: right; display: block">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                        </form>
                        <div class="tab-content pt-2">
                            <form>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-3 col-form-label">Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input type="file" class="form-control" name="img">
                                    </div>
                                </div>


                                <div style="float: right;">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>

                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>
</section>

@endsection
@section('scripts')
<script>
$(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
        $("#files").on("change", function(e) {
            var files = e.target.files,
                filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.onload = (function(e) {
                    var file = e.target;
                    $("<div class=\"img-thumb-wrapper card shadow\">" +
                        "<img class=\"img-thumb\" src=\"" + e.target.result +
                        "\" title=\"" + file.name + "\"/>" +
                        // "<br/><span class=\"remove\">Remove</span>" +
                        "</div>").insertAfter("#files");
                    $(".remove").click(function() {
                        $(this).parent(".img-thumb-wrapper").remove();
                    });

                });
                fileReader.readAsDataURL(f);
            }
            console.log(files);
        });
    } else {
        alert("Your browser doesn't support to File API")
    }
});
</script>
@endsection