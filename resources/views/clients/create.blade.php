@extends('layout')
@section('content')
<h1>Nouveau utilisateur</h1>

<form method="post" action="/clients">

    @csrf
    <div class="form-group">
        <label for="my-input">Nom</label>
        <input id="my-input" class="form-control @error('name')is-invalid

        @enderror" type="text" name="name" placeholder="Rentrez un Nom" value="">
        @error('name')
             <div class="invalid-feedback">{{$errors->first('name')}}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="my-inp">Email</label>
        <input id="my-inp" type="text" name="email" class="form-control @error('email')is-invalid
        @enderror" placeholder="Rentrez un Email" value="">
         @error('email')
             <div class="invalid-feedback">{{$errors->first('email')}}</div>
        @enderror
    </div>
    <label for="">Status</label>
    <div class="form-group">
        <select class="form-select @error('status')is-invalid
        @enderror" name="status">

            <option value="1">Actif</option>
            <option value="0">Inactif</option>
        </select>
    </div>
    @error('email')
        <div class="invalid-feedback">{{$errors->first('status')}}</div>
    @enderror

    <label for="">Entrepriseid</label>
    <div class="form-group">
        <select class="form-select @error('status')is-invalid
        @enderror" name="entreprise_id">

        @foreach ($entreprises as $ent)
        <option value="{{$ent->id}}">{{$ent->name}}</option>
        @endforeach


        </select>
    </div>
    @error('entreprise_id')
        <div class="invalid-feedback">{{$errors->first('entreprise_id')}}</div>
    @enderror

    <br>
                <button type="submit" class="btn btn-primary"> Ajouté le client </button>




        </form>
@endsection
