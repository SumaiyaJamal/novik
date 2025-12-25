@extends('dashboard.layout.master')
@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Banners</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>
        <!-- Content Row -->
        <div class="row">
            <div class="container">
                <div class="row">
                    <!-- First Form -->
                    @foreach ($banners as $banner)
                        <div class="col-md-4 bg-white p-5">
                            <form action="{{ route('post_banners') }}" method="POST" enctype="multipart/form-data"
                                class="form-group">
                                @csrf
                                <!-- Image Preview -->
                                <img id="preview{{ $banner->id }}" src="{{ asset('website/' . $banner->image) }}"
                                    class="img-fluid" alt="Image Preview {{ $banner->id }}"
                                    style="width:100%; max-height:200px; object-fit:cover; display: block;">

                                <!-- Hidden Input for Banner ID -->
                                <input type="hidden" name="banner_id" value="{{ $banner->id }}">

                                <!-- File Input Field -->
                                <div class="form-group">
                                    <label for="bannerImage{{ $banner->id }}" class="form-label">Upload Banner
                                        Image</label>
                                    <input type="file" class="form-control" id="bannerImage{{ $banner->id }}"
                                        name="bannerImage" accept="image/*"
                                        onchange="previewImage(event, 'preview{{ $banner->id }}')">
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </form>
                            <p><strong>View : </strong>{{ $banner->views ?? '0' }}</p>
                            <p><strong>Click : </strong>{{ $banner->click ?? '0' }}</p>
                        </div>
                    @endforeach


                </div>
            </div>




        </div>
    @endsection
    @push('js')
        <script>
            function previewImage(event, previewId) {
                var input = event.target;
                var reader = new FileReader();

                reader.onload = function() {
                    var imgElement = document.getElementById(previewId);
                    imgElement.src = reader.result;
                    imgElement.style.display = 'block';
                };
                reader.readAsDataURL(input.files[0]);
            }
        </script>
    @endpush
