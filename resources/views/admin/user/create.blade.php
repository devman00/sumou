@extends('layouts.master')

@section('title')
Create User
@endsection

@section('content')

    {{-- page heading  --}}
<<<<<<< HEAD
    <x-admin.page-heading heading="Create User"/>
=======
    <x-admin.page-heading heading="إضافة مستخدم جديد"/>
>>>>>>> c832d41a6f6278dc77ae3e8cf3e510c8cb09214f

    <div class="page-content">

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-content">
                            <div class="card-body">
<<<<<<< HEAD
                                <form action="{{ route('admin.users.store') }}" method="post" class="form" enctype="multipart/form-data">
=======
                                <form action="{{ route('admin.users.store') }}" method="post" class="form form_1" enctype="multipart/form-data">
>>>>>>> c832d41a6f6278dc77ae3e8cf3e510c8cb09214f
                                    <div class="row">
                                        @csrf

                                        {{----  Avatar  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="avatar" > الصورة </x-admin.form-label>
                                                <input type="file" name="avatar" class="form-control" >
                                                <x-admin.form-error field="avatar"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Name  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="name" > إسم المستخدم </x-admin.form-label>
                                                <x-admin.form-input id="" name="name" placeholder="Add user Name" value="{{ old('name') }}" />
                                                <x-admin.form-error field="name"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Email  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="email" > البريد الإلكتروني </x-admin.form-label>
                                                <x-admin.form-input id="" name="email" placeholder="Add user email" value="{{ old('email') }}" />
                                                <x-admin.form-error field="email"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Password  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="password" > كلمة المرور </x-admin.form-label>
                                                <x-admin.form-password id="" name="password" placeholder="Add user password" value="{{ old('password') }}" />
                                                <x-admin.form-error field="password"/>
                                            </x-admin.form-group>
                                        </div>

                                         {{----  Phone  --}}
                                         <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="phone" > رقم الجوال </x-admin.form-label>
                                                <x-admin.form-input id="" name="phone" placeholder="Ex. 0123456789" value="{{ old('phone') }}" />
                                                <x-admin.form-error field="phone"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Role  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="role" > الدور </x-admin.form-label>
                                                <x-admin.form-select id="" name="role" isMultiple="false" >  
                                                    
                                                    <option value=""> إختر الدور </option>
                                                    @foreach ($roles as $role)

                                                        @if ($role->id != config('app.administrators_id')[0] )
                                                            {{-- @if (Auth::user()->roles->first()->name !='superadministrator') --}}
                                                                <option value="{{ $role->id }}" > {{ $role->display_name }} </option>
                                                            {{-- @endif --}}
                                                        @endif
                                                    @endforeach
                                                </x-admin.form-select> 
                                                <x-admin.form-error field="role"/>
                                            </x-admin.form-group>                                        
                                        </div>

                                        {{----  Status  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="status" > الحالة </x-admin.form-label>
                                                <x-admin.form-select id="" name="status" isMultiple="false" >  
                                                    <option value="">إخنر</option>
                                                    <option value="1" {{ (old('status') == 1 ) ? 'selected' : '' }} >مفعل</option>
                                                    <option value="0" {{ (old('status') != 1 ) ? 'selected' : '' }} >معطل</option>
                                                </x-admin.form-select> 
                                                <x-admin.form-error field="status"/>
                                            </x-admin.form-group>                                        
                                        </div>
    
                                        {{----  Submit  --}}
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">إضافة</button>
                                            <a href="{{ route('admin.users.index')}}" class="btn btn-light-secondary me-1 mb-1">إلغاء</a>
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
