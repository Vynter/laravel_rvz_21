@extends('layouts.app')

@section('content')
<h1>
Client #{{$client->name}}
</h1>
<hr>
<p><strong>Email :</strong>{{ $client->email }}</p>
<p><strong>Entreprise :</strong>{{ $client->entreprise->name }}</p>
<p><strong>Status :</strong>{{ $client->status }}</p>
@endsection
