@extends('adminlte::page')
@section('content')
    <div class="col-lg-9">

</div>

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show News</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('admin.news.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Title:</strong>

                {{ $news->title}}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Dekription_short:</strong>

                {{ $news->deskription_short}}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                {{ $news->image}}

            </div>

        </div>

    </div>
    </div>

@endsection