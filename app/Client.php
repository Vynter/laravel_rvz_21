<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    //protected $fillable = ['name', 'email', 'status'];
    protected $guarded = [];

    public function scopeStatus($query)
    {
        return $query->where('status', 1)->get();
    }

    public function entreprise()
    {
        return $this->belongsTo('App\Entreprise');
    }

    public function getStatusAttribute($attribute)
    {
        return [
            '0' => 'Inactif',
            '1' => 'Actif'
        ][$attribute];
    }
}