@extends('user.layouts.main')
@push('title')
    <title>Dashboard - User</title>
@endpush

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="px-4 container-fluid">
                <h1 class="my-4">Dashboard</h1>

                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="mb-4 text-white card bg-info">
                            <div class="mx-auto card-body">
                                <img src="{{ asset('dashboard/assets/img/user.png') }}" style="width:155px;">
                            </div>
                            <div class="my-3">
                                <h5 class="text-center text-dark">John Doe</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 ">
                        <div class="mb-4 text-white card bg-info" style="height:250px">
                            <div class="mx-auto my-4 card-body">
                                <h5 class="text-dark">Billing Address</h5>
                                <h6 class="text-dark">Reference site about Lorem Ipsum, giving information on its origins
                                </h6>
                                <span class="text-dark"><strong>Email:</strong> john@gmail.com</span><br>
                                <span class="text-dark"><strong>Phone:</strong> +91 1236547890</span><br>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="d-flex">
                            <h4>Recent Orders</h4>
                            <div class="ms-auto">
                                <a href="{{ url('order-history') }}" class="text-decoration-none btn btn-dark btn-sm">View
                                    All</a>
                            </div>
                        </div>

                        <div class="mt-3">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th scope="col">Order Id</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>25-12-2024</td>
                                        <td>₹ 1499.00</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-warning">Processing</span>
                                            <a href="{{ url('detail') }}" class="mx-2 text-decoration-none">View Details</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">002</th>
                                        <td>25-12-2024</td>
                                        <td>₹ 1499.00</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-info">On the Way</span>
                                            <a href="{{ url('detail') }}" class="mx-2 text-decoration-none">View Details</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">003</th>
                                        <td>25-12-2024</td>
                                        <td>₹ 1499.00</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-success">Delevered</span>
                                            <a href="{{ url('detail') }}" class="mx-2 text-decoration-none">View Details</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </main>
    @endsection
