<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cours;
use App\Models\Entraineur;

class EntraineursDropdown extends Component
{
    public $cours_id;
    public $entraineurs;

    public function render()
    {
        $this->entraineurs = Entraineur::where('cours_id', $this->cours_id)->get();

        return view('livewire.entraineurs-dropdown', [
            'entraineurs' => $this->entraineurs,
        ]);
    }
}
