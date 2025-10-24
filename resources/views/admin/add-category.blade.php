@extends('admin.includes.main')
@push('title')
    <title>Add Category</title>
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
                            <h4>Add Category</h4>

                            <div class="row mt-3">
                                <form action="{{ url('admin/add-category') }}" method="POST">
                                    @csrf
                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Parent Category</label>
                                        <select name="p_c_id" class="form-select">
                                            <option value="0">Select Parent Category</option>
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->c_id }}">{{ $cat->c_name }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Category Name</label>
                                        <input type="text" name="c_name" class="form-control" placeholder="Electronics">
                                        @error('c_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Commission (%)</label>
                                        <input type="text" name="c_commission" class="form-control" placeholder="20">
                                        @error('c_commission')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="col-lg-3">
                                        <button type="submit" class="btn btn-primary ">Add Category</button>
                                    </div>
                            </div>

                            </form>
                        </div>


                    </div>


                </div>
        </main>
    @endsection
