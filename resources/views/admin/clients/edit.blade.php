@extends('app')

@section('content')

<div class="container">
    <h3>Editando Cliente: {{ $client->user->name }}</h3>

    <!-- Errors -->
    @include('errors._check')

    {!! Form::model($client,['route'=>['admin.clients.update', $client->id]]) !!}

    <!-- Form Input -->
    @include('admin.clients._form')

    <div class="form-group">
        {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

</div>

@endsection
