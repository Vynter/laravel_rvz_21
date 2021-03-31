@extends('layouts.app')
@section('content')
<h1>Nouveau utilisateur</h1>

    <form method="post" action="{{route('clients.store')}}" enctype="multipart/form-data">
        @include('includes.form')
        <button type="submit" class="btn btn-primary"> Ajouté le client </button>




        </form>
@endsection
