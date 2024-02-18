<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_debut',
        'date_fin',
        'client_id',
        'type_abonnement_id',
       
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function typeAbonnement()
    {
        return $this->belongsTo(TypeAbonnement::class);
    }

    
}
