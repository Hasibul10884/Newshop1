@extends('backend.master')
@section('backend_content')

<a href="{{route('add.category')}}" class="btn btn-success">Create</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Photo</th>

        </tr>
    </thead>
    <tbody>
        @foreach($categories as $key=>$data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->photo}}</td>


        </tr>
        @endforeach

    </tbody>
</table>


@endsection