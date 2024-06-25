@extends('backend.layouts.main')
@section('title', 'Projects')
@section('main-container')
<div class="app-body">
    <div class="container-fluid"><br>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info"><a class="text-info" href="{{url('/admin')}}"></a></h6>
                <a href="{{url('/admin/project-add')}}" class="btn btn-dark"><i
                    class="fas fa-plus fa-sm text-white-50"></i>Add New Project</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Details</th>
                                <th>Category</th>
                                <th>Client</th>
                                <th>Link</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th width="160px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->details }}</td>
                                <td>{{ $project->category }}</td>
                                <td>{{ $project->client }}</td>
                                <td>{{ $project->link }}</td>
                                <td>
                                    <img src="/backend/images/projects/{{$project->image}}" class="rounded-circle border border-info" width="50px" height="50px" alt="Image Not Found">
                                </td>
                                <td>
                                    @if($project->status == 1)
                                    <span class="badge badge-success p-2">Active</span>
                                    @else
                                    <span class="badge badge-danger p-2">Disabled</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="/admin/project-edit/{{ $project->id }}" class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip"
                                        data-bs-placement="top" data-bs-custom-class="custom-tooltip-primary" data-bs-title="Edit">
                                        <i class="icon-edit"></i>
                                    </a>
                                    <form method="post" class="d-inline" action="/admin/project-delete/{{ $project->id }}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-custom-class="custom-tooltip-danger" data-bs-title="Delete"
                                            onClick="return confirm('Are you sure you want to Delete Record');" title="Delete Record">
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
