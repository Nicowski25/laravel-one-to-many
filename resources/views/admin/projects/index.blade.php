@extends('layouts.admin')

@section('content')
<a class="btn btn-primary mb-3" href="{{ route('admin.projects.create') }}" role="button">New Project</a>

@if(session("message"))
<div class="alert alert-success" role="alert">
  <strong>{{ session("message") }}</strong>
</div>
@endif

<div class="table-responsive rounded overflow-hidden mb-3">
  <table class="table table-primary align-middle text-center mb-0">
    <thead>
      <tr class="align-middle">
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Duration</th>
        <th scope="col">Status</th>   
        <th scope="col">Starting Date</th>
        <th scope="col">Ending Date</th>
      </tr>
    </thead>
    <tbody>
      @forelse($projects as $project)
      <tr>
        <td scope="row">{{ $project->id }}</td>
        <td scope="row">{{ $project->name }}</td>
        <td scope="row">{{ $project->description }}</td>
        <td scope="row">{{ $project->duration }}</td>
        <td scope="row">{{ $project->status }}</td>
        <td scope="row">{{ $project->start_date }}</td>
        <td scope="row">{{ $project->end_date }}</td>
        <td scope="row">
          <a class="text-decoration-none btn btn-success text-dark" href="{{ route('admin.projects.show', $project->id) }}">
            <i class="fa-regular fa-eye fa-fw"></i>
          </a>
          <a class="text-decoration-none btn btn-warning text-dark my-2" href="{{ route('admin.projects.edit', $project->id) }}">
            <i class="fa-regular fa-pen-to-square fa-fw"></i>
          </a>
          <a class="text-decoration-none btn btn-danger text-dark" href="#">
            <i class="fa-regular fa-trash-can fa-fw"></i>
          </a>
        </td>
      </tr>
      @empty
      <tr>
        <td scope="row">No projects found</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
@endsection