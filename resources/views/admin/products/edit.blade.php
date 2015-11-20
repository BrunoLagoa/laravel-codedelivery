@extends('app')

@section('content')

<div class="container">
    <h3>Editando Produto: {{ $product->name }}</h3>

    <!-- Errors -->
    @include('errors._check')

    {!! Form::model($product,['route'=>['admin.products.update', $product->id]]) !!}

    <!-- Form Input -->
    @include('admin.products._form')

    <div class="form-group">
        {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

</div>

@endsection
