@extends('admin.includes.main')
@push('title')
    <title>View Category</title>
@endpush

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">

                <div class="card p-4 mt-4">
                    @session('msg')
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('msg') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endsession
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="d-flex">
                                <h4>View Website Banner</h4>

                            </div>
                            <div class="mt-3">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">
                                                <h5>Sr. No.</h5>
                                            </th>
                                            <th scope="col">
                                                <h5>Banner Image</h5>
                                            </th>
                                            <th scope="col">
                                                <h5>Alt Text</h5>
                                            </th>

                                            <th scope="col">
                                                <h5>Action</h5>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($category as $cat)
                                            <tr>

                                                <td>{{ $cat->c_id }}</td>
                                                <td><img src="{{ asset('assets/images/products/5.jpg') }}"
                                                        alt="banner Image" style="width: 70px;" class="rounded-3"></td>
                                                <td>banner</td>

                                                <td>


                                                    <form method="POST" class="d-inline"
                                                        action="{{ url('admin/delete-category', $cat->c_id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                                class="fa-solid fa-trash"></i></button>
                                                    </form>

                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>

    @endsection
