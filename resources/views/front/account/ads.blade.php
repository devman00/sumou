@extends('layouts.front-layout')

@section('content')
    <!-- Account begin ============================-->
    <section class="dashboard d-flex flex-column justify-content-between ">

        <div class="row">

            <!-- Sidebar ----  -->
            @includeIf('layouts.front.partials.sidebar')

            <!-- ------ Content  -->
            <div class="col-md-10 col-lg-10 py-6 data px-0 min-vh-md-100 min-vh-lg-100">
                <div class="container px-3 mx-3">
                    <h3 class="px-3"> لوحاتي </h3>
                </div>

                <div class="homepage-lawhat-wrapper p-5 pt-4">
                    @forelse ($ads as $ad)
                        <x-front.ad.default
                        :ad="$ad->id" 
                        :date="$ad->created_at->diffForHumans()"
                        :first_letter="$ad->first_letter" 
                        :second_letter="$ad->second_letter" 
                        :third_letter="$ad->third_letter" 
                        :first_number="$ad->first_number" 
                        :second_number="$ad->second_number" 
                        :third_number="$ad->third_number" 
                        :fourth_number="$ad->fourth_number" 
                        :price="$ad->price"
                        :phone="$ad->phone"
                        :allow_contact=0
                        :allow_actions=1
                        :in_auction="$ad->in_auction"
                        />

                    @empty
                        <p class="alert alert-warning text-center"> لا توجد لوحات. </p>
                    @endforelse
                </div>
            </div>

        </div>
    </section>
    <!-- Account Close ============================-->
@endsection
