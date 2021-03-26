@extends('layouts.app')

@section('content')
<h1>Clients</h1>
<hr>
<a href="/clients/create" class="btn btn-primary my-3">Nouveau client</a>
<a href="{{action('HomeController@index')}}">Home</a>
    <ul>
        <table class="table table-light">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Status</th>
                <th>Entreprise</th>
                @guest
                @else
                <th colspan="2">Option</th>
                @endguest

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
                @guest
                @else
                <!--<td><a href="/clients/{{$client->id}}/edit"><i class="fa fa-pen" aria-hidden="true"></i></a> </td>-->
                <td><a href="{{route('clients.edit',['client'=>$client->id])}}"><i class="fa fa-pen" aria-hidden="true"></i></a></td>
                <td><a href="/clients/{{$client->id}}/delete"><i class="fas fa-times"></i></a></td>
                @endguest


            </tr>


        @endforeach
                </tbody>
    </table>
    </ul>





@endsection
