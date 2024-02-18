<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entraineur extends Model
{
    use HasFactory;

    protected $fillable = [

        'image',
        'user_id',
        'cours_id'

    ];
    public function saveImage($image)
    {
        // Utiliser le disk public et la méthode store
        $this->image = $image->store('entraineurs', 'public');
        $this->save();

    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
    public function planifications()
    {
        return $this->hasOne(Planification::class);
    }
}
