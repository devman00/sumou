@extends('layouts.front-layout')

@section('content')

<section class="dashboard d-flex flex-column justify-content-between ">

    <div class="row">

        <!-- Sidebar ----  -->
        @includeIf('layouts.front.partials.sidebar')

        <!-- ------ Content  -->
        <div class="col-md-10 col-lg-10 py-6 data px-0">
            <div class="container px-3 mx-2">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-lg-12 col-md-12 p-5 pb-2  d-flex justify-content-center align-items-center flex-column">
                        @if ($user->national_id && $user->national_id != '')
                            <div class="alert alert-success"  style="font-size: 20px;">
                                <strong>حسابك موثق، شكراً لك!</strong>
                            </div>
                        @else
                            <div class="alert alert-danger"  style="font-size: 20px;">
                                <strong>حسابك غير موثق بعد! المرجو توثيق حسابك </strong>
                            </div>
                            <div class="nav-item px-3 permit-btn">
                                <a class="nav-link px-6 text-white" href="{{route('nidverification.show')}}">
                                    وثق حسابك الان
                                </a>
                            </div>
                        @endif
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection
