
@extends('adminlte::page')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="col-lg-9">
        <h2>News</h2>
        <div class="panel panel-default">
            @if(Session::has('Success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('Success')}}
                </div>
            @endif
            <div class="panel-body">
                <table class="table table-hover table-responsive text-sm-center" id="table">
                    <a href="{{route('admin.news.create')}}" class="btn btn-primary">Створити новину</a>
                    <tr class="text-align-center">
                        <thead>
                        <th>
                            ID
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Desсription_short
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            Desсription
                        </th>
                        </thead>
                    </tr>
                    <tbody>


    @foreach ($news as $post)

    <tr>

        <td>{{ $post->id}}</td>

        <td>{{ $post->title}}</td>

        <td>{{ $post->deskription_short}}</td>

        <td>{{ $post->image}}</td>

        <td>{{ $post->deskription}}</td>

        <td>
            <a class="btn btn-info" href="{{ route('admin.news.show',$post->id) }}">Show</a>

            <a class="btn btn-primary" href="{{ route('admin.news.edit',$post->id) }}">Edit</a>

            {!! Form::open(['method' => 'DELETE','route' => ['admin.news.destroy', $post->id],'style'=>'display:inline']) !!}

            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

            {!! Form::close() !!}

        </td>

    </tr>

    @endforeach

    </table>

        </div>
    </div>

{{--@widget('recentCategory')--}}


    {{--{!! $news->links() !!}--}}

    </div>
@endsection
