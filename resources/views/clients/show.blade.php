@extends('layouts.app')

@section('content')
<h1>
Client #{{$client->name}}
</h1>
<hr>
<p><strong>Email :</strong>{{ $client->email }}</p>
<p><strong>Entreprise :</strong>{{ $client->entreprise->name }}</p>
<p><strong>Status :</strong>{{ $client->status }}</p>
<!--if le client a une image on l'affiche-->

@if ($client->img)
<img src="{{asset('storage/'.$client->img)}}" width="300" alt="client-avatar" class="img-thumbnail">
@endif

@endsection
