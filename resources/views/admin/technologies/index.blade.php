@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="d-grid col-12">
                <a href="{{ route('admin.technologies.create') }}" class="btn btn-primary">Add a New Tech</a>
            </div>
        </div>
        @if (session('success'))
            <div class="row">
                <div class="col-12">
                    <div class="content mt-1 text-center">
                        <div id="success-alert" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="row center">
            <div class="col-12">
                <table class="table table-bordered align-middle table-sm mt-3">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Slug</th>
                            <th>Descrizione</th>
                            <th class="text-center">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($technologies as $technology)
                            <tr>
                                <td>{{ $technology->name }}</td>
                                <td>{{ $technology->slug }}</td>
                                <td>{{ $technology->description }}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-outline-warning mx-1"
                                            href="{{ route('admin.technologies.edit', ['technology' => $technology->id]) }}"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        </a>
                                        <form
                                            action="{{ route('admin.technologies.destroy', ['technology' => $technology->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger TechDelete"
                                                data-TechName="{{ $technology->name }}"><i class="fa-solid fa-trash"></i>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('admin.technologies.partials.modal_delete')
@endsection
