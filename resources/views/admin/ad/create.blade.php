@extends('layouts.master')

@section('title')
Create Post
@endsection

@section('content')

    {{-- page heading  --}}
    <x-admin.page-heading heading="Create Post"/>

    <div class="page-content">

        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('admin.posts.store') }}" method="post" class="form" enctype="multipart/form-data">
                                    <div class="row">
                                        @csrf

                                        {{----  Thumbnail  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="thumbnail" > Image </x-admin.form-label>
                                                <input type="file" name="thumbnail" class="form-control" >
                                                <x-admin.form-error field="thumbnail"/>
                                            </x-admin.form-group>
                                        </div>

                                        {{----  Title  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="title" > Title </x-admin.form-label>
                                                <x-admin.form-input id="" name="title" placeholder="Add post Title" value="{{ old('title') }}" />
                                                <x-admin.form-error field="title"/>
                                            </x-admin.form-group>
                                        </div>
                                        
                                        {{----  Description  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="description" > Description </x-admin.form-label>
                                                <x-admin.form-textarea id="" name="description" rows="3" placeholder="Add your description..">{{ old('description') }}</x-admin.form-textarea>
                                                <x-admin.form-error field="description"/>                                        
                                            </x-admin.form-group>
                                        </div>
                                        
                                        {{----  Category  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="category_id" > Category </x-admin.form-label>
                                                <x-admin.form-select id="" name="category_id" isMultiple="false" >  
                                                    <option value="">Select</option>
                                                    {{-- @foreach ($categories as $category )
                                                        <option value="{{ $category->id }}" {{ ($category->id == old('category_id')) ? 'selected' : '' }} > {{ $category->name }} </option>  
                                                    @endforeach --}}
                                                </x-admin.form-select> 
                                                <x-admin.form-error field="category_id"/>
                                            </x-admin.form-group>                                        
                                        </div>

                                        {{----  Content  --}}
                                        <div class="col-md-12 col-12">
                                            <x-admin.form-group>
                                                <x-admin.form-label for="content" > Content </x-admin.form-label>
                                                <x-admin.form-textarea id="html-editor" name="content" rows="5" placeholder="Add your content..">{{ old('content') }}</x-admin.form-textarea>
                                                <x-admin.form-error field="content"/>
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
                                            <a href="{{ route('admin.posts.index')}}" class="btn btn-light-secondary me-1 mb-1">Cancel</a>
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

@section('foot')
<script src="{{ asset('admin/assets/extensions/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/tinymce.js') }}"></script>
@endsection