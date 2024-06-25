@extends('backend.layouts.main')
@section('title', 'Team Members List')
@section('main-container')
    <div class="app-body">
        <div class="container-fluid"><br>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-info"><a class="text-info" href="{{ url('/admin') }}">
                        </a></h6>
                    <a href="{{ url('/admin/team-add') }}" class="btn btn-dark"><i class="fas fa-plus fa-sm text-white-50"></i>
                        Add New Member</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Designation</th>
                                    <th>Profile</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th width="160px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($team as $member)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $member->id }}</td>
                                        <td>
                                            <a class="text-dark" href="/admin/team-member-details/{{ $member->id }}">
                                                {{ $member->fullname }}
                                            </a>
                                        </td>
                                        <td>{{ $member->designation }}</td>
                                        <td>{{ $member->shortintro }}</td>
                                        <td>
                                            <img src="/backend/images/team/{{ $member->image }}" class="rounded-circle"
                                                width="50px" height="50px" alt="Image Not Found">
                                        </td>
                                        <td>
                                            @if ($member->status == 1)
                                                <span class="badge badge-success p-2">Active</span>
                                            @else
                                                <span class="badge badge-danger p-2">Disabled</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/admin/team-edit/{{ $member->id }}"
                                                class="btn btn-outline-primary btn-circle btn-sm" data-bs-toggle="tooltip"
                                                data-bs-placement="top" data-bs-custom-class="custom-tooltip-primary"
                                                data-bs-title="Edit">
                                                <i class="icon-edit"></i>
                                            </a>
                                            <form method="post" class="d-inline"
                                                action="/admin/team-delete/{{ $member->id }}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-outline-danger btn-circle btn-sm"
                                                    onClick="return confirm('Are you sure you want to Delete Record');"
                                                    title="Delete Record">
                                                    <i class="icon-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
