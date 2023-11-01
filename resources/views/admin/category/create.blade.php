@extends('layouts.master')

@section('title')
Create Category
@endsection

@section('content')

    {{-- page heading  --}}
    <x-admin.page-heading heading="Create Category"/>

    <div class="page-content">

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('admin.categories.store') }}" method="post" class="form">
                                    <div class="row">
                                        @csrf

                                        {{----  Name  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="name" > Name </x-admin.form-label>
                                                <x-admin.form-input id="" name="name" placeholder="Add category Name" value="{{ old('name') }}" />
                                                <x-admin.form-error field="name"/>
                                            </x-admin.form-group>
                                        </div>
                                        
                                        {{----  Status  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="status" > Status </x-admin.form-label>
                                                <x-admin.form-select id="" name="status" isMultiple="false" >  
                                                    <option value="">Select</option>
                                                    <option value="1" {{ (old('status') == 1 ) ? 'selected' : '' }} >Enabled</option>
                                                    <option value="0" {{ (old('status') != 1 ) ? 'selected' : '' }} >Disabled</option>
                                                </x-admin.form-select> 
                                                <x-admin.form-error field="status"/>
                                            </x-admin.form-group>                                        
                                        </div>
                                        
                                        {{----  Submit  --}}
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <a href="{{ route('admin.categories.index')}}" class="btn btn-light-secondary me-1 mb-1">Cancel</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
   
@endsection
