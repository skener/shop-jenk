

<div class="form-group row">
   {{Form::label('title', 'Title', ['class' => 'col-sm-2 col-form-label col-form-label-sm'])}}
   <div class="col-sm-8">
   {{ Form::text('title',$news->title ?? null ,['class' => 'form-control form-control-sm'])}}
  </div>
  @if ($errors->has('title'))
    <div class="alert alert-danger col-sm-2" role="alert">
  {{ $errors->first('title') }}
  </div>
  @endif




</div>

<div class="form-group row">
   {{Form::label('deskription_short', 'Description Short', ['class' => 'col-sm-2 col-form-label col-form-label-sm'])}}
   <div class="col-sm-8">
   {{ Form::text('deskription_short',$deskription_short ?? null ,['class' => 'form-control form-control-sm'])}}
  </div>
  @if ($errors->has('deskription_short'))
    <div class="alert alert-danger col-sm-2" role="alert">
  {{ $errors->first('deskription_short') }}
  </div>
  @endif


</div>


<div class="row">

  <!--   <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Title:</strong>

            {!! Form::text('title', null, array('placeholder' => 'title','class' => 'form-control')) !!}

        </div>
        @if ($errors->has('title'))
    <div class="alert alert-danger col-sm-2" role="alert">
  {{ $errors->first('title') }}
  </div>
  @endif

    </div> -->
<!--
    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Description_short:</strong>

            {!! Form::textarea('deskription_short', null, array('placeholder' => 'deskription_short','class' => 'form-control','style'=>'height:150px')) !!}

        </div>
        @if ($errors->has('deskription_short'))
    <div class="alert alert-danger col-sm-2" role="alert">
  {{ $errors->first('deskription_short') }}
  </div>
  @endif -->
   <!--  </div> -->




<!--     <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

                <strong>Image:</strong>

                {!! Form::text('image', null, array('placeholder' => 'image','class' => 'form-control')) !!}
@if ($errors->has('image'))
    <div class="alert alert-danger col-sm-2" role="alert">
  {{ $errors->first('image') }}
  </div>
        </div>

  @endif
    </div> -->
    <div class="form-group row">
   {{Form::label('deskription_short', 'Description Short', ['class' => 'col-sm-2 col-form-label col-form-label-sm'])}}
   <div class="col-sm-8">
   {{ Form::text('deskription_short',$deskription_short ?? null ,['class' => 'form-control form-control-sm'])}}
  </div>
  @if ($errors->has('deskription_short'))
    <div class="alert alert-danger col-sm-2" role="alert">
  {{ $errors->first('deskription_short') }}
  </div>
  @endif


</div>

<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">

                <strong>Deskription:</strong>

                {!! Form::text('deskription', null, array('placeholder' => 'deskription','class' => 'form-control')) !!}

        </div>
           @if ($errors->has('deskription'))
    <div class="alert alert-danger col-sm-2" role="alert">
  {{ $errors->first('deskription') }}
  </div>
  @endif
    </div>



    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>
