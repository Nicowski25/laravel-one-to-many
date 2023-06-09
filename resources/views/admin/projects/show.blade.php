@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>{{ $project->title }}</h2>
        </div>
        <div class="card-body">
            <p>Description: {{$project->description }}</p>
            <p>Description: {{$project->duration }}</p>
            <p>Description: {{$project->status }}</p>
            <p>Description: {{$project->start_date }}</p>
            <p>Description: {{$project->end_date }}</p>
        </div>
    </div>

</div>

@endsection