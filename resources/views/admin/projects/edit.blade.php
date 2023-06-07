@section('content')

<h1 class="py-3">Edit the project</h1>


@include('partials.validation_errors')

<form action="{{route('admin.projects.edit')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" aria-describedby="titleHelper" placeholder="JAVASCRIPT Project" value="{{ old('title', $project->title) }}">
        <small id="titleHelper" class="form-text text-muted">Type the project title max 50 characters - must be unique</small>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" aria-describedby="descriptionHelper" placeholder="Learn php">
        <small id="descriptionHelper" class="form-text text-muted">value="{{ old('description', $project-><dl class="row">
            <dt class="col-sm-3">Term</dt>
            <dd class="col-sm-9">definition</dd>
            <dt class="col-sm-3">Term</dt>
            <dd class="col-sm-9">definition</dd>
            <dt class="col-sm-3 text-truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit.</dt>
            <dd class="col-sm-9">Term</dd>
            <dt class="col-sm-3">Nesting</dt>
            <dd class="col-sm-9">
                <dl class="row">
                    <dt class="col-sm-4">Nested title</dt>
                    <dd class="col-sm-8">Nested definition</dd>
                </dl>
            </dd>
        </dl>
        ) }}"</small>
    </div>

    <div class="mb-3">
        <label for="duration" class="form-label">Duration</label>
        <input type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" id="duration" aria-describedby="durationHelper" placeholder="Learn php">
        <small id="durationHelper" class="form-text text-muted">Type the project duration</small>
    </div>

    <div>
        <select class="form-select" name="status" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">Done</option>
            <option value="2">In Progress</option>
            <option value="3">Abandoned</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="duration" class="form-label">Start Date</label>
        <input type="date" name="start_date" class="form-control @error('duration') is-invalid @enderror" name="duration" id="duration" aria-describedby="durationHelper" placeholder="Learn php">
        <small id="durationHelper" class="form-text text-muted">Select the project start</small>
    </div>

    <div class="mb-3">
        <label for="duration" class="form-label">End Date</label>
        <input type="date" name="end_date" class="form-control @error('duration') is-invalid @enderror" name="duration" id="duration" aria-describedby="durationHelper" placeholder="Learn php">
        <small id="durationHelper" class="form-text text-muted">Select the project end</small>
    </div>



    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="3"></textarea>
    </div>


    <button type="submit" class="btn btn-dark">Insert New Project</button>

</form>


@endsection