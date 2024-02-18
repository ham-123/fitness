<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAbonnement extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'prix',
        'cours_id',
        'periode',

    ];

    public function abonnements()
    {
        return $this->belongsTo(Abonnement::class);
    }

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}
