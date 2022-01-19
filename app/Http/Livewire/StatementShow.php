<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\verification;

use Illuminate\Support\Facades\Auth;
class StatementShow extends Component
{
    protected $listeners = ['postAdded' => 'render'];

    public function render()
    {

        $data = verification::orderBy('created_at', 'DESC')->latest()->paginate(10);

        return view('livewire.statement-show',['data' => $data]);

    }

    public function dll(verification $item){
        verification::destroy($item->id);

    }
}
