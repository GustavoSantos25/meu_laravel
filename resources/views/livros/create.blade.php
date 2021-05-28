@extends('main')

@section('content')

<form method="POST" action="/livros">
@csrf
@include('livros.partials.forms')
</form>

@endsection