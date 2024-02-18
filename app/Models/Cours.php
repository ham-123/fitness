<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeAbonnement;

class Cours extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_cours',
        'description',
    ];

    public function entraineurs()
    {
        return $this->hasMany(Entraineur::class);
    }
    public function planifications()
    {
        return $this->hasOne(Planification::class);
    }
    public function typeAbonnements()
    {
        return $this->hasMany(TypeAbonnement::class);
    }

}
