@extends('layouts.master')

@section('title')
Edit Permission
@endsection

@section('content')

    {{-- page heading  --}}
    <x-admin.page-heading heading="Edit Permission"/>

    <div class="page-content">

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('admin.permissions.update', $permission->id) }}" method="post" class="form">
                                    <div class="row">
                                        @csrf
                                        @method('PUT')

                                         {{----  Name  --}}
                                        <div class="col-md-12 col-12 mt-3">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="name" > Name </x-admin.form-label>
                                                <x-admin.form-input id="" name="name" placeholder="Add permission Name" value="{{ $permission->name }}" />
                                                <x-admin.form-error field="name"/>
                                            </x-admin.form-group>
                                        </div>
                                        
                                        {{----  Display Name  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="display_name" > Display_name </x-admin.form-label>
                                                <x-admin.form-input id="display_name" name="display_name" placeholder="Add permission display Name" value="{{ $permission->display_name }}" />
                                                <x-admin.form-error field="display_name"/>
                                            </x-admin.form-group>                                        
                                        </div>
                                        
                                        {{----  Description  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="description" > Description </x-admin.form-label>
                                                <x-admin.form-textarea id="" name="description" rows="3" placeholder="Add your permission description..">{{ $permission->description }}</x-admin.form-textarea>
                                                <x-admin.form-error field="description"/>                                        
                                            </x-admin.form-group>
                                        </div>
                                        
                                        {{----  Submit  --}}
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                            <a href="{{ route('admin.permissions.index')}}" class="btn btn-light-secondary me-1 mb-1">Cancel</a>
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
