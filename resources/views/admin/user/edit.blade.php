@extends('layouts.master')

@section('title')
تعديل بيانات المستخدم
@endsection

@section('content')

    {{-- page heading  --}}
    <x-admin.page-heading :heading=" 'تعديل بيانات المستخدم | &nbsp;'. $user->name"/>

    <div class="page-content">

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card p-3">
                        <div class="card-header"></div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('admin.users.update', $user->id) }}" method="post" class="form form_1" enctype="multipart/form-data">
                                    <div class="row">
                                        @csrf
                                        @method('PUT')

                                        {{----  Avatar  --}}
                                        <div class="col-md-12 col-12 d-flex">
                                            <div class="mb-4">
                                                <img class="h150 p-1 rounded-circle bg-info" src="{{ url('storage/images/users/' . $user->avatar) }}" alt="">
                                            </div>
                                            <div class="ms-4">
                                                <x-admin.form-group>
                                                    <x-admin.form-label for="avatar" > الصورة </x-admin.form-label>
                                                    <input type="file" name="avatar" class="form-control" >
                                                    <x-admin.form-error field="avatar"/>
                                                </x-admin.form-group>
                                            </div>
                                        </div>

                                        {{----  Name  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="name" > الإسم </x-admin.form-label>
                                                <x-admin.form-input id="" name="name" placeholder="Add user Name" value="{{ $user->name }}" />
                                                <x-admin.form-error field="name"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Email  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="email" > الإيميل </x-admin.form-label>
                                                <x-admin.form-input id="" name="email" placeholder="Add user email" value="{{ $user->email }}" />
                                                <x-admin.form-error field="email"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Password  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="password" > كلمة المرور </x-admin.form-label>
                                                <x-admin.form-password id="" name="password" placeholder="أضف كلمة المرور" value="" />
                                                <x-admin.form-error field="password"/>
                                            </x-admin.form-group>
                                        </div>

                                         {{----  Phone  --}}
                                         <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="phone" > رقم الجوال </x-admin.form-label>
                                                <x-admin.form-input id="" name="phone" placeholder="أضف رقم جوال المستخدم" value="{{ $user->phone }}" />
                                                <x-admin.form-error field="phone"/>
                                            </x-admin.form-group>
                                        </div>

                                         {{----  National ID  --}}
                                         <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="national_id" > رقم الهوية </x-admin.form-label>
                                                <x-admin.form-input id="" name="national_id" placeholder="أضف رقم هوية المستخدم" value="{{ $user->national_id }}" />
                                                <x-admin.form-error field="national_id"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Role  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="role" > الدور </x-admin.form-label>
                                                
                                                <x-admin.form-select id="" name="role" isMultiple="false" >  
                                                    <option value="">إختر الدور</option>
                                                    @foreach ($roles as $role)
                                                        @if ($role->id != config('app.administrators_id')[0] )
                                                            {{-- <option value="{{ $role->id }}" @if( $user->roles->first() && $role->id == $user->roles->first()->id ) {{'selected'}} @endif  > {{ $role->display_name }} </option> --}}
                                                            <option value="{{ $role->id }}" @selected($role->id == $user->roles()->first()->id) > {{ $role->display_name }} </option>
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
                                                    <option value="">إختر</option>
                                                    <option value="1" {{ ($user->status == 1 ) ? 'selected' : '' }} >مفعل</option>
                                                    <option value="0" {{ ($user->status != 1 ) ? 'selected' : '' }} >معطل</option>
                                                </x-admin.form-select> 
                                                <x-admin.form-error field="status"/>
                                            </x-admin.form-group>                                        
                                        </div>
                                        
                                        {{----  Submit  --}}
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
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
