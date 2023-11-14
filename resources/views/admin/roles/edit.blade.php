@extends('layouts.master')

@section('title')
Edit Role
@endsection

@section('content')

    {{-- page heading  --}}
    <x-admin.page-heading heading="Edit Role"/>

    <div class="page-content">
        @if (session()->has('message'))
            <div class="alert alert-light-success color-success"><i class="bi bi-check-circle"></i>
                {{ session()->get('message') }}
            </div>      
        @endif
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('admin.roles.update', $role->id) }}" method="post" class="form">
                                    <div class="row">
                                        @csrf
                                        @method('PUT')

                                         {{----  Name  --}}
                                        <div class="col-md-12 col-12 mt-3">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="name" > Name </x-admin.form-label>
                                                <x-admin.form-input id="" name="name" placeholder="Add role Name" value="{{ $role->name }}" />
                                                <x-admin.form-error field="name"/>
                                            </x-admin.form-group>
                                        </div>
                                        
                                        {{----  Display Name  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="display_name" > Display_name </x-admin.form-label>
                                                <x-admin.form-input id="display_name" name="display_name" placeholder="Add role display Name" value="{{ $role->display_name }}" />
                                                <x-admin.form-error field="display_name"/>
                                            </x-admin.form-group>                                        
                                        </div>
                                        
                                        {{----  Description  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="description" > Description </x-admin.form-label>
                                                <x-admin.form-textarea id="" name="description" rows="3" placeholder="Add your role description..">{{ $role->description }}</x-admin.form-textarea>
                                                <x-admin.form-error field="description"/>                                        
                                            </x-admin.form-group>
                                        </div>
                                        
                                        {{----  Permissions  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="permissions" > Permissions </x-admin.form-label>
                                                <div class="row">
                                                    @foreach ($perms_groups as $key => $perms)
                                                        <div class="col-md-4 col-4">
                                                            <div class="card bg_primary">
                                                                <div class="card-header bg_primary text-uppercase">
                                                                    <h4>{{ $key }}</h4>
                                                                </div>
                                                                <div class="card-body">
                                                                    @foreach ($perms as $val)
                                                                        <div class="form-check">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="form-check-input form-check-info"
                                                                                    name="permissions[]" id="{{ $val['name'] }}Check" value="{{ $val['id'] }}" @checked($role->permissions->contains( $val['id'] )) >
                                                                                <label class="form-check-label" for="{{ $val['name'] }}Check">{{ $val['display_name'] }}</label>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </x-admin.form-group>                                        
                                        </div>
                                        
                                        {{----  Submit  --}}
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
                                            <a href="{{ route('admin.roles.index')}}" class="btn btn-light-secondary me-1 mb-1">Cancel</a>
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
