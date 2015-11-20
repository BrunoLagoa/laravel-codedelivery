@extends('app')

@section('content')

<div class="container">
    <h3>Editando Categoria: {{ $category->name }}</h3>

    <!-- Errors -->
    @include('errors._check')

    {!! Form::model($category,['route'=>['admin.categories.update', $category->id]]) !!}

    <!-- Form Input -->
    @include('admin.categories._form')

    <div class="form-group">
        {!! Form::submit('Salvar Categoria',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

</div>

@endsection
