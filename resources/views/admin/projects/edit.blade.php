@extends('layouts.admin')
@section('content')

<h1 class="py-3">Edit the project</h1>


@include('partials.validation_errors')

<form action="{{route('admin.projects.update', $project)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper" placeholder="JAVASCRIPT Project" value="{{ old('title', $project->title) }}">
        <small id="titleHelper" class="form-text text-muted">Type the project title max 50 characters - must be unique</small>
    </div>

    <div class="mb-3">
        <label for="type_id " class="form-label">Types</label>
        <select class="form-select @error('type_id') is-invalid @enderror" name="type_id " id="type_id ">
            <option value="">Select one</option>
            @foreach ($types as $type)
                <option value="{{$type->id}}" {{ $type->id == old('type_id', '$project->type->id') ? 'selected' : '' }}> {{ $type->name }} </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="description" value="{{ old('description', $project->description) }}" aria-describedby="descriptionHelper" placeholder="Learn php">
        <small id="descriptionHelper" class="form-text text-muted">Type the project description max 150 characters - must be unique</small>
    </div>

    <div class="mb-3">
        <label for="duration" class="form-label">Duration</label>
        <input type="text" class="form-control" name="duration" id="duration" value="{{ old('duration', $project->duration) }}" aria-describedby="durationHelper" placeholder="Learn php">
        <small id="durationHelper" class="form-text text-muted">Type the project duration</small>
    </div>

    <div>
        <select class="form-select" name="status" value="{{ old('status', $project->status) }}" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">Done</option>
            <option value="2">In Progress</option>
            <option value="3">Abandoned</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="duration" class="form-label">Start Date</label>
        <input type="date" name="start_date" class="form-control" name="start_date" value="{{ old('start_date', $project->start_date) }}" id="duration" aria-describedby="durationHelper" placeholder="Learn php">
        <small id="durationHelper" class="form-text text-muted">Select the project start</small>
    </div>

    <div class="mb-3">
        <label for="duration" class="form-label">End Date</label>
        <input type="date" name="end_date" class="form-control" name="end_date" id="end_date" aria-describedby="durationHelper" placeholder="Learn php">
        <small id="durationHelper" class="form-text text-muted">Select the project end</small>
    </div>

    <button type="submit" class="btn btn-dark mb-4">Edit Project</button>

</form>


@endsection