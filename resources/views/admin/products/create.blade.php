@extends('app')

@section('content')

<div class="container">
    <h3>Nova Produto</h3>

    <!-- Errors -->
    @include('errors._check')

    {!! Form::open(['route'=>'admin.products.store']) !!}

    <!-- Form Input -->
    @include('admin.products._form')

    <div class="form-group">
        {!! Form::submit('Criar Produto',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

</div>

@endsection
