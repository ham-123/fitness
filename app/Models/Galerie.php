<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Galerie extends Model
{
    use HasFactory;
    protected $fillable = ['image'];

    public function saveImage($image)
    {
        // Utiliser le disk public et la méthode store
        $this->image = $image->store('galleries', 'public');
        $this->save();
    }
    public function deleteImage() {
        if ($this->image != null) { 
          // Utiliser le disk public et le nom de l'image
          Storage::disk('public')->delete($this->image); 
          $this->image = null; 
          $this->save();
        }
      }

      public function hasImage() {
        return $this->image != null; 
      }
}
