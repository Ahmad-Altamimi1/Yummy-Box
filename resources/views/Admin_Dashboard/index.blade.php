@extends('layouts.adminMaster')


@section('content')
    <!-- Content Start -->
    <div class="content mt-5" >



        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-line fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Volunteers</p>
                            @php
                                $volunteerCount = \App\Models\Volunteer::count();
                            @endphp
                            <h6 class="mb-0">{{ $volunteerCount }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-bar fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Projects</p>
                            @php
                                $projectCount = \App\Models\products::count();
                            @endphp
                            <h6 class="mb-0">{{ $projectCount }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-area fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Users</p>
                            @php
                                $UsersCount = \App\Models\User::count();
                            @endphp
                            <h6 class="mb-0">{{ $UsersCount }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                        <i class="fa fa-chart-pie fa-3x text-primary"></i>
                        <div class="ms-3">
                            <p class="mb-2">Donations</p>
                            @php
                                $donationCount = \App\Models\paypal::count();
                            @endphp
                            <h6 class="mb-0">{{ $donationCount }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sale & Revenue End -->



    </div>
    <!-- Content End -->
@endsection
