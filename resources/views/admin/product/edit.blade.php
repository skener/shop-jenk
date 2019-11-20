@extends('adminlte::page')
@section('content')
    <div class="col-lg-9">
    @include('admin.includes.errors')
    <div class="panel panel-default">
        @if(Session::has('Success'))
            <div class="alert alert-success" role="alert">
            </div>
        @endif
        <div class="panel-heading">
            Редагувати пост:<strong>{{$product->title}}</strong>
        </div>
        <div class="panel-body">
            <form action="{{route('admin.product.update', ['id'=>$product->id])}}" method="post"
                  enctype="multipart/form-data">
                {{csrf_field ()}}
                {{ method_field('PATCH') }}
                <a href="{{route('admin.product.index')}}" class="btn btn-primary pull-right">Назад</a>
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" name="title" class="form-control" value="{{$product->title}}">
                </div>
                <div class="form-group">
                    <label for="image">Зображення</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">Виберіть категорію</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($category as $cat)
                            <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Опис</label>
                    <textarea type="text" name="description" class="form-control" id="content" cols="5"
                              rows="5">{{$product->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="title">Ціна</label>
                    <input type="text" name="price" class="form-control" value="{{$product->price}}">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success">
                            Оновити
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection