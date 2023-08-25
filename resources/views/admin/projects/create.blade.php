@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5">AGGINGI NUOVO PROJECT</h1>
                <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-primary">Ritorna alla lista completa</a>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-4">
                        <label class="contol-lable">Titolo</label>
                        <input class="form-control @error('title')is-invalid @enderror" type="text" name="title" id="title" placeholder="Titolo" value="{{ old('title') }}">
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
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
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                        @error('$type->id')
                            <div class="text-danger">{{ $messages }}</div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label class="contol-lable">Contenuto</label>
                        <textarea class="form-control" name="content" id="content" placeholder="Contenuto">{{ old('content') }}</textarea>
                    </div>
                    <div class="form-group mt-4">
                        <button class="btn btn-sm btn-success" type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection