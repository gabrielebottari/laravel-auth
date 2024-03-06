@extends('layouts.app')

@section('page-title', 'Tutti i post')

@section('main-content')
    <div class="container">
        <h1 class="text-primary text-center">Progetti</h1>
        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">Crea Nuovo Progetto <i class="fa-solid fa-plus"></i></a>
        <div class="row">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <a href="{{ route('admin.projects.show', $project->slug) }}" class="text-decoration-none text-dark">
                        <div class="card mb-3">
                            
                            <img src="{{ $project->image }}" class="card-img-top" alt="{{ $project->title }}">
                            <h5 class="card-title p-2">{{ $project->title }}</h5>
                            <div class="card-body">
                                
                                <p class="card-text">{{ $project->description }}</p>
                                <p class="card-text"><small class="text-muted">{{ $project->date }}</small></p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection