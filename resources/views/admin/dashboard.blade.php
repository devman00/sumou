@extends('layouts.master')

@section('title')
لوحة التحكم
@endsection

@section('content')
    {{-- page heading  --}}
    <x-admin.page-heading heading="لوحة التحكم" />

    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row text-center">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="icon dripicons dripicons-card"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <a href="{{route('admin.ads.index')}}"> <h6 class="text-muted font-semibold"> اللوحات </h6> </a>
                                        <h6 class="font-extrabold mb-0"> 00{{ $ads->count(); }} </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row text-center">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <a href="{{route('admin.posts.index')}}"> <h6 class="text-muted font-semibold"> المقالات </h6> </a>
                                        <h6 class="font-extrabold mb-0"> 00{{ App\Models\Post::latest()->count() }}  </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row text-center">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center ">
                                        <div class="stats-icon green mb-2">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <a href="{{route('admin.users.index')}}"> <h6 class="text-muted font-semibold"> الأعضاء </h6> </a>
                                        <h6 class="font-extrabold mb-0"> 00{{ App\Models\User::latest()->count() }} </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row text-center">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-center ">
                                        <div class="stats-icon red mb-2">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <a href="#"> <h6 class="text-muted font-semibold"> المبايعات </h6> </a>
                                        <h6 class="font-extrabold mb-0">00{{ App\Models\Category::latest()->count() }} </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- General Statistics  --}}
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4> إحصائيات عامة</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Treaties --}}
                <div class="row">
                    
                    {{-- ------ --}}
                    <div class="col-12 col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>إحصائيات </h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Europe</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">862</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-europe"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">America</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">375</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-america"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-danger" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">Indonesia</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0">1025</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-indonesia"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- ------ --}}
                    <div class="col-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4> اخر المبايعات </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>البائع/المشتري</th>
                                                <th> التفاصيل </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="assets/images/faces/5.jpg">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0"> العضو ب </p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"> رسالة من البائع بخصوص اللوحة أ ب ج </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="assets/images/faces/2.jpg">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">العضو أ</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0"> رسالة من البائع بخصوص اللوحة أ ب ج </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-lg-3 px-2">
                <div class="card px-2">
                    <div class="card-body py-4 px-2">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                {{-- <img src="assets/images/faces/1.jpg" alt="Face 1"> --}}
                                <img src=" {{ asset('admin/assets/images/users') .'/'. auth()->user()->avatar }}" alt="user">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold"> {{ auth()->user()->name }} </h5>
                                <h6 class="text-muted mb-0"> {{ Auth::user()->roles->first()->display_name }} </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4> الأعضاء الجدد </h4>
                    </div>
                    <div class="card-content pb-4">
                        @forelse ( $registeredUsers as $user )
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-lg">
                                    <img src="assets/images/faces/5.jpg">
                                </div>
                                <div class="name ms-4">
                                    <h5 class="mb-1"> {{ $user->name }} </h5>
                                    <h6 class="text-muted mb-0"> {{ Carbon::parse($user->created_at)->diffForHumans() }} </h6>
                                </div>
                            </div>
                        @empty
                            لا يوجد أعضاء.
                        @endforelse
                       
                       
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>إحصائيات الزوار</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-visitors-profile"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('foot')
    <!-- Need: Apexcharts -->
    <script src="{{ asset('admin/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/dashboard.js') }}"></script>
@endsection
