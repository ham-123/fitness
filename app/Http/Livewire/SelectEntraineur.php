<?php

namespace App\Http\Livewire;

use App\Models\Entraineur;
use Livewire\Component;

class SelectEntraineur extends Component
{
    public $coursId;
    public $entraineurs;

    public function render()
    {
        if ($this->coursId) {
            $this->entraineurs = Entraineur::where('cours_id', $this->coursId)->get();
        } else {
            $this->entraineurs = collect();
        }

        return view('livewire.select-entraineur');
    }
}
