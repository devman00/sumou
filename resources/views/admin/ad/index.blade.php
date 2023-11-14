@extends('layouts.master')

@section('title')
    قائمة اللوحات
@endsection

@section('content')
    {{-- page heading  --}}
    <x-admin.page-heading heading="قائمة اللوحات" />

    {{-- <div class="buttons">
        <a href="{{ route('admin.ads.create') }}" class="btn icon btn-secondary"><i class="bi bi-plus"></i></a>
    </div> --}}

    <div class="page-content">
        <section class="section">
            <div class="row" id="table-hover-row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-header"></div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">

                                      @if (!$ads->isEmpty())
                                        <thead>
                                            <tr>
                                                <th> بيانات اللوحة </th>
                                                <th> نوع اللوحة </th>
                                                <th> السعر </th>
                                                <th> تاريخ الإضافة </th>
                                                <th>  الحالة </th>
                                                <th> الخيارات </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($ads as $ad)
                                                <tr>
                                                    {{-- ad-lawha mt-3 px-3 m-auto w-lg-50 w-md-50 py-5 --}}
                                                    <td class="text-bold-500 ad-lawha p-4"> 
                                                        <x-front.ad.plate 
                                                        :first_letter="$ad->first_letter"
                                                        :second_letter="$ad->second_letter"
                                                        :third_letter="$ad->third_letter"
                                                        :first_number="$ad->first_number"
                                                        :second_number="$ad->second_number"
                                                        :third_number="$ad->third_number"
                                                        :fourth_number="$ad->fourth_number"
                                                        />
                                                    
                                                    </td>
                                                    <td class="text-bold-500"> {{ $ad->plate_type }} </td>
                                                    <td class="text-bold-500"> {{ $ad->price }} </td>
                                                    <td class="text-bold-500"> {{ $ad->created_at->diffForHumans() }} </td>
                                                    <td class="text-bold-500"> {{ $ad->status }} </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            @permission('ads-update')
                                                            <a href="{{ route('admin.ads.edit', $ad->id) }}"><i
                                                                    class="icon dripicons dripicons-document-edit font-medium-1"></i>
                                                            </a>
                                                            @endpermission
                                                            @permission('ads-update')
                                                            <form action="{{ route('admin.ads.destroy', $ad->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit"
                                                                    class="me-1 mb-1 border-0 bg-transparent text-danger"
                                                                    onclick="return confirm('هل أنت متأكد من حذف العنصر ؟');">
                                                                    <i class="icon dripicons dripicons-trash font-medium-1"></i>
                                                                </button>
                                                            </form>
                                                            @endpermission
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                      @else

                                        <tr><td> لا توجد لوحات </td></tr>

                                      @endif

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
