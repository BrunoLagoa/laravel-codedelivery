@extends('app')

@section('content')

    <div class="container">
        <h2>Pedido #{{$order->id}} - R$ {{$order->total}}</h2>
        <h3>Cliente: {{$order->client->user->name}} - R$ {{$order->total}}</h3>
        <h4>Data: {{$order->created_at}}</h4>

        <p><b>Entregar em:</b> <br />
            {{$order->client->address}} - {{$order->client->city}} - {{$order->client->state}}
        </p>

    </div>

@endsection
