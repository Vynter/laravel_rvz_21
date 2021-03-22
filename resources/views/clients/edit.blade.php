@extends('layout')
@section('content')
<h1>Modifier le profile de {{$client->name}}</h1>

    <form method="post" action="/clients/{{$client->id}}">
            @method('PATCH')
            @include('includes.form')
                <button type="submit" class="btn btn-primary"> Enregistrer les modifications </button>




    </form>
@endsection
