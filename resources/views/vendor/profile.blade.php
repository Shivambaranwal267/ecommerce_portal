@extends('vendor.includes.main')
@push('title')
    <title>Profile</title>
@endpush

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <form method="POST" action="{{ url('vendor/profile') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="container p-4">
                    @session('msg')
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('msg') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endsession
                    <div class="card p-4">
                        <div class="row">

                            <div class="col-xl-8 col-md-8">
                                <h4>Basic Information</h4>

                                <div class="row mt-3">

                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Identification Number</label>
                                        <input type="text" name="id_number" class="form-control"
                                            value="{{ $vendor->id_number }}">
                                        @error('id_number')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Business Name</label>
                                        <input type="text" name="business_name" class="form-control"
                                            value="{{ $vendor->business_name }}">
                                        @error('business_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" name="full_name" class="form-control"
                                            value="{{ $vendor->full_name }}">
                                        @error('full_name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ $vendor->email }}">
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" name="phone" value="{{ $vendor->phone }}"
                                            class="form-control" placeholder="+91 ">
                                        @error('phone')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control" name="address" placeholder="address">{{ $vendor->address }}</textarea>
                                        @error('address')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                            </div>

                            <div class="col-xl-4 col-md-4 mt-5">

                                <div class="text-center">
                                    <img src="{{ asset('storage/' . $vendor->image) }}" style="width:155px;">
                                    <div class="mt-3">
                                        <label for="image" class="form-label btn btn-dark">Choose Image</label>
                                        <input type="file" name="image" class="form-control d-none" id="image">
                                        @error('image')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>

                    <div class="card p-4 mt-4">
                        <div class="row">

                            <div class="col-xl-12 col-md-12">
                                <h4>Business Information</h4>


                                <div class="row mt-3">

                                    <div class="col-lg-12 mb-3">
                                        <label class="form-label">Business Type</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="business_type">

                                            <option @if ($vendor->business_type == 'sole Proprietor') selected @endif
                                                value="sole Proprietor ">Sole Proprietor</option>
                                            <option @if ($vendor->business_type == 'partnership') selected @endif value="partnership">
                                                Partnership</option>
                                            <option @if ($vendor->business_type == 'corporation') selected @endif value="corporation">
                                                Corporation</option>

                                        </select>
                                        @error('business_type')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">GST No.</label>
                                        <input type="text" name="gst_number" class="form-control"
                                            value="{{ $vendor->gst_number }}">
                                        @error('gst_number')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Business Category</label>
                                        <input type="text" name="business_category" class="form-control"
                                            value="{{ $vendor->business_category }}">
                                        @error('business_category')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>


                                </div>

                            </div>


                        </div>


                    </div>

                    <div class="card p-4 mt-4">
                        <div class="row">

                            <div class="col-xl-12 col-md-12">
                                <h4>Payment Information</h4>


                                <div class="row mt-3">

                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Bank Account Number</label>
                                        <input type="text" name="bank_account_no" class="form-control"
                                            value="{{ $vendor->bank_account_no }}">
                                        @error('bank_account_no')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label class="form-label">Prefer Payment Method</label>
                                        <select class="form-select" aria-label="Default select example"
                                            name="payment_method">
                                            <option @if ($vendor->payment_method == 'Paypal') selected @endif value="PayPal">PayPal
                                            </option>
                                            <option @if ($vendor->payment_method == 'bank transfer') selected @endif
                                                value="bank transfer">Bank Transfer</option>
                                            <option @if ($vendor->payment_method == 'E wallet') selected @endif value="E wallet">E
                                                wallet</option>
                                        </select>
                                        @error('payment_method')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-3">
                                        <button type="submit" class="btn btn-primary ">Save Changes</button>
                                    </div>

                                </div>

                            </div>


                        </div>


                    </div>

                </div>

            </form>
        </main>
    @endsection
