<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planification extends Model
{
    use HasFactory;

    protected $fillable = [
        'jour',
        'heure_debut',
        'heure_fin',
      'cours_id',
      'entraineur_id'
    ];
    

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }

    public function entraineur()
{
    return $this->belongsTo(Entraineur::class);
}

}
