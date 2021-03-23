@extends('layout')

@section('content')
    <h1>Contactez-nous</h1>
    @if (!session()->has('msg'))
    <form action="/contact" method="post">
        @csrf

        <div class="form-group">
            <label for="my-input">Nom</label>
            <input id="my-input" class="form-control @error('name')is-invalid

            @enderror" type="text" name="name" placeholder="Rentrez un Nom" value="{{old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{$errors->first('name')}}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="my-inp">Email</label>
            <input id="my-inp" type="text" name="email" class="form-control @error('email')is-invalid
            @enderror" placeholder="Rentrez un Email" value="{{old('email') }}">
            @error('email')
                <div class="invalid-feedback">{{$errors->first('email')}}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Message</label>
            <textarea name="message"cols="30" rows="10" class="form-control @error('message')is-invalid
            @enderror" placeholder="Veuillez saisir votre message">{{old('message') }}</textarea>
            @error('message')
            <div class="invalid-feedback">{{$errors->first('message')}}</div>
            @enderror
        </div>

            <br>
            <button type="submit" class="btn btn-primary">Envoyer mon message</button>
        </form>
    @endif
@endsection
