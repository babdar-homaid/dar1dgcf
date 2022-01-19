<?php

namespace App\Http\Livewire;
use App\register;
use App\Mobile_message;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class SearchUser extends Component
{
    public $search;
    public $Mobile_number;
    public $text;


    public function render()
    {
 $value = register::where('name', 'like', '%' . $this->search . '%')
       ->orwhere('IdentificationـNumber', 'like', '%' . $this->search . '%')
       ->latest()->paginate(5);
        return view('register.search-user',['value'=>$value]);

}


}
