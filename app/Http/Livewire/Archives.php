<?php

namespace App\Http\Livewire;
use App\archive;

use Livewire\Component;

class Archives extends Component
{
    public $search;

    public function render()
    {
         $data = archive::where('name', 'like', '%' . $this->search . '%')->paginate(5);


        return view('livewire.archives', [ 'data' => $data]);
    }
}
