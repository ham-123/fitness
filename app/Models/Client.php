<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'sexe',
        'age', 
        'adresse', 
        'type_client',
        'user_id'
    ];
    
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function abonnements()
    {
        return $this->hasMany(Abonnement::class);
    }
    
}
