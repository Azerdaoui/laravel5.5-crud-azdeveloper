@extends('master')

@section('content')
    {!! Form::open(['method' => 'POST', 'action' => 'ItemController@store' ]) !!}
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title',null, ['class' => 'form-control', 'placeholder'=>'Enter a title..','required']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description',null, ['class' => 'form-control', 'placeholder'=>'Enter a description..','required']) !!}
            </div>

            {!! Form::submit('Add new Item',['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection