@extends('layouts.master')

@section('title')
    Roles List
@endsection

@section('content')
    {{-- page heading  --}}
    <x-admin.page-heading heading="Roles List" />

    <div class="buttons">
        <a href="{{ route('admin.roles.create') }}" class="btn icon btn-secondary"><i class="bi bi-plus"></i></a>
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
                                        
                                      @if (!$roles->isEmpty())

                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Display Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($roles as $role)
                                                <tr>
                                                    <td class="text-bold-500"> {{ $role->name }} </td>
                                                    <td class="text-bold-500"> {{ $role->display_name }} </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            @permission('roles-update')
                                                            <a href="{{ route('admin.roles.edit', $role->id) }}">
                                                                <i class="icon dripicons dripicons-document-edit font-medium-1"></i>
                                                            </a>
                                                            @endpermission
                                                            @permission('roles-delete')
                                                            <form action="{{ route('admin.roles.destroy', $role->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" class="me-1 mb-1 border-0 bg-transparent text-danger" onclick="return confirm('Are you sure you want to delete?');">
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

                                        <tr><td>No roles found</td></tr>

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
