@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5">{{ $project->title }}</h1>
            </div>
            <div class="col-12">
                <img src="{{ asset('storage/'.$project->image) }}">
            </div>
            <div class="col-12">
                {{ $project->type->name }}
            </div>
            <div class="col-12">
                <p>
                    {{ $project->content }}
                </p>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-primary">Ritorna alla lista completa</a>
            </div>
        </div>
    </div>
@endsection