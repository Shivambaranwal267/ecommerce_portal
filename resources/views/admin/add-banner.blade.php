@extends('admin.includes.main')
@push('title')
    <title>Add Banner</title>
@endpush

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="card p-4 mt-4">
                    <div class="row">

                        <div class="col-xl-8 col-md-8">
                            @if (session('msg'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ session('msg') }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <h4>Add Website Banner</h4>

                            <div class="row mt-3">
                                <form method="POST" action="{{ url('admin/add-banner') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Banner Image<span class="d-block form-text">* Required
                                                Size (1900 x 650) Pixels</span>
                                        </label>
                                        <input type="file" name="banner" class="form-control">
                                        @error('banner')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Alt Text</label>
                                        <input type="text" name="alt" class="form-control" placeholder="banner Name">
                                        @error('alt')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>



                                    <div class="col-lg-3">
                                        <button type="submit" class="btn btn-primary ">Add Banner</button>
                                    </div>
                            </div>

                            </form>
                        </div>


                    </div>


                </div>
        </main>
    @endsection
