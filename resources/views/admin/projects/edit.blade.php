@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5">MODIFICA PROJECT</h1>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-primary">Ritorna alla lista completa</a>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-4">
                        <label class="contol-lable">Titolo</label>
                        <input class="form-control @error('title')is-invalid @enderror" type="text" name="title" id="title" placeholder="Titolo" value="{{ old('title') ?? $project->title }}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <div class="col-12">
                            <img src="{{ asset('storage/'.$project->image) }}">
                        </div>
                        <div>
                            <label class="contol-lable">Immagine</label>
                            <input class="form-control @error('image')is-invalid @enderror" type="file" name="image" id="image">
                        </div>
                        <div class="form-group mt-4">
                            <label class="contol-lable">Tipologia</label>
                            <select class="form-control @error('type_id') is_invalid @enderror" name="type_id" id="type_id">
                                <option value="">Seleziona Tipologia</option>
                                @foreach ($types as $type)
                                    <option {{ $type->id == old('type_id', $project->type_id) ? 'selected' : ''}} value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            @error('$type->id')
                                <div class="text-danger">{{ $messages }}</div>
                            @enderror
                        </div>
                        <label class="contol-lable">Contenuto</label>
                        <textarea class="form-control" name="content" id="content" placeholder="Contenuto">{{ old('content') ?? $project->content }}</textarea>
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-sm btn-success" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection