@extends('layout')

@section('content')
<h1>Clients</h1>
<hr>
<a href="/clients/create" class="btn btn-primary my-3">Nouveau client</a>
    <ul>
        <table class="table table-light">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Status</th>
                <th>Entreprise</th>
                <th>Option</th>
            </tr>
        </thead>
<tbody>
        @foreach ($clients as $client)
            <!--<li>{{$client->name}} <em class="text-muted">({{$client->email}})</em><em class="text-muted"> {{$client->entreprise->name}}</em></li>
        -->
            <tr>
                <td>{{$client->id}} </td>
                <td><a href="/clients/{{$client->id}}">{{$client->name}}</a> </td>
                <td>{{$client->status /* il marche grace au getteur dans le modele*/ }} </td>
                <td>{{$client->entreprise->name}} </td>
                <td><a href="/clients/{{$client->id}}/edit"><i class="fa fa-times" aria-hidden="true"></i></a> </td>
            </tr>


        @endforeach
                </tbody>
    </table>
    </ul>





@endsection
