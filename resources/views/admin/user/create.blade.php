@extends('layouts.master')

@section('title')
Create User
@endsection

@section('content')

    {{-- page heading  --}}
    <x-admin.page-heading heading="Create User"/>

    <div class="page-content">

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('admin.users.store') }}" method="post" class="form" enctype="multipart/form-data">
                                    <div class="row">
                                        @csrf

                                        {{----  Avatar  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="avatar" > Image </x-admin.form-label>
                                                <input type="file" name="avatar" class="form-control" >
                                                <x-admin.form-error field="avatar"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Name  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="name" > Name </x-admin.form-label>
                                                <x-admin.form-input id="" name="name" placeholder="Add user Name" value="{{ old('name') }}" />
                                                <x-admin.form-error field="name"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Email  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="email" > Email </x-admin.form-label>
                                                <x-admin.form-input id="" name="email" placeholder="Add user email" value="{{ old('email') }}" />
                                                <x-admin.form-error field="email"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Password  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="password" > Password </x-admin.form-label>
                                                <x-admin.form-password id="" name="password" placeholder="Add user password" value="{{ old('password') }}" />
                                                <x-admin.form-error field="password"/>
                                            </x-admin.form-group>
                                        </div>

                                         {{----  Phone  --}}
                                         <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="phone" > Phone </x-admin.form-label>
                                                <x-admin.form-input id="" name="phone" placeholder="Ex. 0123456789" value="{{ old('phone') }}" />
                                                <x-admin.form-error field="phone"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Role  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="role" > Role </x-admin.form-label>
                                                <x-admin.form-select id="" name="role" isMultiple="false" >  
                                                    <option value="">Select Role</option>
                                                    @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}" > {{ $role->display_name }} </option>
                                                    @endforeach
                                                </x-admin.form-select> 
                                                <x-admin.form-error field="role"/>
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
                                            <a href="{{ route('admin.users.index')}}" class="btn btn-light-secondary me-1 mb-1">Cancel</a>
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
