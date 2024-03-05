@extends('layouts.app')

@section('page-title', 'Tutti i post')

@section('main-content')
    <h1>Progetti</h1>
    <div class="container">
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <div class="card mb-4">
                        @if ($project->image)
                            <img src="{{ $project->image }}" class="card-img-top" alt="{{ $project->title }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ $project->description }}</p>
                            <p class="card-text"><small class="text-muted">{{ $project->date }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection