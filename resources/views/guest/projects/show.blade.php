@extends('layouts.guest')

@section('page-title', 'Tutti i post')

@section('main-content')
<div class="container">
    <div class="card mb-3 w-50">
        <img src="{{ $project->image }}" class="card-img-top h-75" alt="{{ $project->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $project->title }}</h5>
            <p class="card-text p-3">{{ $project->description }}</p>
            <p class="card-text"><small class="text-muted">{{ $project->date }}</small></p>
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <a href="{{ route('login', $project->slug) }}" class="btn btn-primary">Accedi per Modificare o eliminare il tuo Progetto</a>

    </div>
</div>
@endsection