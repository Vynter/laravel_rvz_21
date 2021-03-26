@component('mail::message')
# Bienvenue {{ $user->name}}

Merci de vous êtes enregistré(e) avec l'adresse {{ $user->email }}



{{ config('app.name') }}
@endcomponent
