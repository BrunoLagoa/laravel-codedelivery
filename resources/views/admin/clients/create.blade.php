@extends('app')

@section('content')

<div class="container">
    <h3>Novo Cliente</h3>

    <!-- Errors -->
    @include('errors._check')

    {!! Form::open(['route'=>'admin.clients.store']) !!}

    <!-- Form Input -->
    @include('admin.clients._form')

    <div class="form-group">
        {!! Form::submit('Criar Cliente',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

</div>

@endsection
