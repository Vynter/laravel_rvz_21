@extends('layout')
@section('content')
<h1>Nouveau utilisateur</h1>

    <form method="post" action="/clients">
        @include('includes.form')
        <button type="submit" class="btn btn-primary"> Ajouté le client </button>




        </form>
@endsection
