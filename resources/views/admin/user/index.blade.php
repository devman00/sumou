@extends('layouts.master')

@section('title')
    Users List
@endsection

@section('content')
    {{-- page heading  --}}
    <x-admin.page-heading heading="Users List" />

    <div class="buttons">
        <a href="{{ route('admin.users.create') }}" class="btn icon btn-secondary"><i class="bi bi-plus"></i></a>
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
                                     

                                        <thead>
                                            <tr>
                                                <th>Avatar</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @forelse ($users as $user )
                                                <tr @if ($user->status == 0) class="disabled-gray" @endif >
                                                    <td class="text-bold-500"> 
                                                        <img src="{{ url('storage/images/users/' . $user->avatar) }}" class="w70 p-1 rounded-circle bg-info" alt="">
                                                    </td>
                                                    <td class="text-bold-500"> {{ $user->name }} </td>
                                                    <td class="text-bold-500"> {{ $user->email }} </td>
                                                    <td class="text-bold-500"> {{ $user->phone }} </td>
                                                    <td class="text-bold-500"> @if($role = $user->roles->first() ) {{ $role->display_name }} @endif </td>
                                                    <td class="text-bold-500"> {{ $user->status == 1 ? 'Enabled' : 'Disabled' }} </td>

                                                    <td>
                                                        <div class="d-flex">
                                                            @permission('users-update')
                                                            <a href="{{ route('admin.users.edit', $user->id) }}"><i
                                                                    class="icon dripicons dripicons-document-edit font-medium-1"></i>
                                                            </a>
                                                            @endpermission
                                                            @permission('users-delete')
                                                            <form action="{{ route('admin.users.destroy', $user->id) }}"
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



                                        @empty
                                            <tr><td>No users found</td></tr>
                                        @endforelse
                                    </tbody>
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
