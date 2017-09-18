@extends('master')

@section('content')

    <br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Items</h5>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('items.create') }}"> Create New Item</a>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <th>{{ $item->id }}</th>
                    <th>{{ $item->title }}</th>
                    <th>{{ $item->description }}</th>
                    <th>{{ $item->created_at }}</th>
                    <th>{{ $item->updated_at }}</th>
                    <th>
                    <td>
                        <a class="btn btn-info" href="{{ route('items.show',$item->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('items.edit',$item->id) }}">Edit</a>

                        {!! Form::open(['method'=>'DELETE' , 'action' => ['ItemController@destroy',$item->id] , 'style' => 'display:inline']) !!}
                                {!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                    </th>
                </tr>
             @endforeach
        </tbody>
    </table>


@endsection