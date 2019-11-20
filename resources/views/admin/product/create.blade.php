@extends('adminlte::page')
@section('content')
    <div class="col-lg-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Створити новий товар</h2>
            </div>
            <div class="panel-body">
                <form action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field ()}}
                    <div class="form-group">
                        <label for="title">Заголовок</label>
                        <input type="text" name="title" class="form-control" value="{{old ('title')}}">
                        @if ($errors->has('title'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="image">Зображення</label>
                        <input type="file" name="image" class="form-control">
                        @if ($errors->has('image'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('image') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="category">Виберіть категорію</label>
                        <select name="category_id" id="category" class="form-control" name="category">
                            @foreach($category as $cat)
                                <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Опис</label>
                        <textarea type="text" name="description" class="form-control" id="content" cols="5"
                                  rows="5">{{old ('description')}}</textarea>
                        @if ($errors->has('description'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="price">Ціна</label>
                        <input type="text" name="price" class="form-control" value="{{old ('price')}}">
                        @if ($errors->has('price'))
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first('price') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success">
                                Зберегти
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection