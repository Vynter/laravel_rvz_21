<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    //protected $fillable = ['name', 'email', 'status'];
    protected $guarded = [];
    protected $attributes = [
        'status' => 2 // valeurs par default de statuts
    ];

    public function scopeStatus($query)
    {
        return $query->where('status', 1)->get();
    }

    public function entreprise()
    {
        return $this->belongsTo('App\Entreprise');
    }

    public function getStatusAttribute($attributes)
    {
        //a la base ca ressemble a sa
        /*return [
            '0' => 'Inactif',
            '1' => 'Actif'
        ][$attribute]; // l'attribut c'est l'index du tableau*/
        return $this->getStatusOptions()[$attributes];
    }

    public function getStatusOptions()
    {
        return [
            '0' => 'Inactif',
            '1' => 'Actif',
            '2' => 'En attent'
        ]; // l'attribut c'est l'index du tableau
    }
}