@extends('app')

@section('content')

    <div class="container">
        <h3>Pedidos</h3>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td><a href="" class="btn btn-default btn-sm">Editar</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $orders->render() !!}

    </div>

@endsection
