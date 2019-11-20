@extends('adminlte::page')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="col-lg-9">
        <h2>Orders</h2>
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover table-responsive table-bproducted text-sm-center" id="table">
                    <tr class="text-align-center">
                        <thead class="bg-primary">
                        <th>
                            №
                        </th>
                        <th>
                            ПІБ покупця
                        </th>
                        <th>
                            Сума, грн
                        </th>
                        <th>
                            Дата замов-ння
                        </th>
                        <th>
                            Статус
                        </th>
                        <th>
                            Mенеджер
                        </th>
                        <th>
                            Управління замовленням
                        </th>
                        </thead>
                    </tr>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            @endforeach
                            <td></td>
                            {{--@endforeach--}}
                            {{--@foreach($products as $product)--}}
                            @foreach($products as $product)
                                <td><p>{{$product->title}}</p>
                                    <p><a href="{{route ('admin.product.show', ['id'=>$product->id])}}">
                                            <img src="{{$product->image}}" height="72" width="72"></a>
                                    <p></td>
                                <td>{{$product->price}}</td>
                                <td>Кількість, шт</td>
                                <td>{{$product->created_at->diffForHumans()}}</td>
                                <td>Pending...</td>
                                <td>ПІБ МЕНЕДЖЕРА</td>
                                <td><a href="{{route('admin.product.edit', ['id'=>$product->id])}}"
                                       class="btn btn-info btn-xs">Показати</a>
                                </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection