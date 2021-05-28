@extends('main')

@section('content')

<form method="POST" action="/livros/{{$livro->id}}">
@csrf
@method('patch')
@include('livros.partials.forms')
</form>

@endsection