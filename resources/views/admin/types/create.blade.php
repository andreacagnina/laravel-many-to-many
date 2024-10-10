@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h1>Aggiungi una nuova categoria</h1>
                </div>
            </div>
            <div class="col">
                <form action="{{ route('admin.types.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <label for="name" class="form-label">Titolo:</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary my-4" id="liveToastBtn">INVIA</button>
                </form>
            </div>
        </div>
    </div>
@endsection
