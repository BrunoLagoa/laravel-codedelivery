@extends('app')

@section('content')

<div class="container">
    <h3>Nova Categorias</h3>

    <!-- Errors -->
    @include('errors._check')

    {!! Form::open(['route'=>'admin.categories.store']) !!}

    <!-- Form Input -->
    @include('admin.categories._form')

    <div class="form-group">
        {!! Form::submit('Criar Categoria',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

</div>

@endsection
