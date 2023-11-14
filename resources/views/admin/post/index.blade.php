@extends('layouts.master')

@section('title')
    Posts List
@endsection

@section('content')
    {{-- page heading  --}}
    <x-admin.page-heading heading="Posts List" />

    <div class="buttons">
        <a href="{{ route('admin.posts.create') }}" class="btn icon btn-secondary"><i class="bi bi-plus"></i></a>
    </div>

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

                                      @if (!$posts->isEmpty())
                                        <thead>
                                            <tr>
                                                <th>Thumbnail</th>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td class="text-bold-500"> <img
                                                            src="{{ url('storage/images/posts/' . $post->thumbnail) }}"
                                                            class="w120" alt=""> 
                                                    </td>
                                                    <td class="text-bold-500"> {{ $post->title }} </td>
                                                    <td class="text-bold-500"> {{ $post->category->name }} </td>
                                                    <td class="text-bold-500">
                                                        {{ $post->status == 1 ? 'Enabled' : 'Disabled' }} </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            @permission('posts-update')
                                                            <a href="{{ route('admin.posts.edit', $post->id) }}"><i
                                                                    class="icon dripicons dripicons-document-edit font-medium-1"></i>
                                                            </a>
                                                            @endpermission
                                                            @permission('posts-update')
                                                            <form action="{{ route('admin.posts.destroy', $post->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit"
                                                                    class="me-1 mb-1 border-0 bg-transparent text-danger"
                                                                    onclick="return confirm('Are you sure you want to delete?');">
                                                                    <i
                                                                        class="icon dripicons dripicons-trash font-medium-1"></i>
                                                                </button>
                                                            </form>
                                                            @endpermission
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                      @else

                                        <tr><td>No posts found</td></tr>

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
