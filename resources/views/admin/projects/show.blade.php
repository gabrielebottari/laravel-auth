@extends('layouts.app')

@section('page-title', 'Tutti i post')

@section('main-content')
<div class="container">
    <div class="card mb-3">
        <div class="img-card-top">
            <img src="{{ $project->image }}" class="card-img-top" alt="{{ $project->title }}">
        </div>
        <h5 class="card-title">{{ $project->title }}</h5>
        <div class="card-body">
            
            <p class="card-text">{{ $project->description }}</p>
            <p class="card-text"><small class="text-muted">{{ $project->date }}</small></p>
            
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-primary">Modifica</a>

        <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?');" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
    </div>
</div>
@endsection