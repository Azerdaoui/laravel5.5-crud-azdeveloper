@extends('master')


@section('content')
    <div class="row">
        <div class="form-group">
            <strong>Title:</strong> {{ $item->title }}
        </div>

        <div class="form-group">
            <strong>Description:</strong> {{ $item->description }}
        </div>

        <div class="form-group">
            <strong>Ajouté le:</strong> {{ $item->created_at->diffForhumans() }}
        </div>

        <div class="form-group">
            <strong>Modifié le:</strong> {{ $item->updated_at->diffForhumans() }}
        </div>

    </div>
@endsection