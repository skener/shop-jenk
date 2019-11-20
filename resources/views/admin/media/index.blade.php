@extends('adminlte::page')
@section('content')
    <div class="col-lg-9">
        <h2>Media</h2>
        <hr>
        <a href="{{route('admin.media.create')}}" class="btn btn-primary">Create New Type</a>
        <hr>
        <table class="table table-active">
            <tr>
                <th>Image</th>
                <th>ID</th>
                <th>Title</th>
                <th>Type</th>
                <th>Url</th>
            </tr>
            @foreach($all as $i)
                <tr>

                    <td><img src="{{asset($i->url)}}" height="72" width="72" alt=""></td>
                    <td>{{$i->id}}</td>
                    <td>{{$i->title}}</td>
                    <td>{{$i->type}}</td>
                    <td>{{$i->url}}</td>
                    <td>
                        <form action="{{route('admin.media.destroy',$i->id)}}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{route('admin.media.edit',$i->id)}}" class="btn btn-success">edit</a>
                    </td>
                    <td>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @endsection
